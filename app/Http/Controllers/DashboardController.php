<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Instructor;
use Faker\Extension\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Auth\PasswordController;
use App\Models\Department;
use App\Models\Course;
use App\Models\Transaction;
use App\Models\InstructorRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class DashboardController extends Controller
{

    protected const DEFAULT_NUMBER_OF_COURSES = 0;

    private const RESTRICTED = 0;

    public function index()
    {
        $transactions = Transaction::latest()->take(15)->get();
        $courses_count = Course::count();
        $money_count = Transaction::sum('amount');
        $students_count = User::count();
        $instructors_count = Instructor::count();
        return view('admin-dashboard.index', compact('transactions', 'courses_count', 'money_count', 'students_count', 'instructors_count'));
    }

    public function loginPage()
    {
        return view('admin-dashboard.login.login');
    }
    public function loginHandler(Request $request)
    {
        $fieldType = filter_var($request->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if ($fieldType == 'email') {
            $request->validate([
                'login_id' => 'required|email|exists:admins,email',
                'password' => 'required|min:5|max:45',
            ], [
                'login_id.required' => 'Email or Username is required',
                'login_id.email' => 'Invalid email address',
                'login_id.exists' => 'Email does not exists in the system',
                'password.required' => 'Password is required',
            ]);
        } else {
            $request->validate([
                'login_id' => 'required|exists:admins,username',
                'password' => 'required|min:5|max:45',
            ], [
                'login_id.required' => 'Email or Username is required',
                'login_id.username' => 'Invalid username',
                'login_id.exists' => 'Email does not exists in the system',
                'password.required' => 'Password is required',
            ]);
        }

        $credts = array(
            $fieldType => $request->login_id,
            'password' => $request->password
        );

        if (Auth::guard('admin')->attempt($credts)) {
            return redirect()->route('go-admin-dashboard');
        } else {

            $notification = array(
                'message' => 'Incorrect credentials!',
                'alert-type' => 'error',
            );
            flash()->addError('Invalid information');
            return redirect()->route('go-admin-login')->with($notification);
        }
    }
    public function logoutHandler(Request $request)
    {
        Auth::guard('admin')->logout();
        $notification = array(
            'message' => 'You are logged out successfully!',
            'alert-type' => 'success',
        );
        return redirect()->route('go-admin-login')->with($notification);
    }
    /* ############################ START STUDENT FUNCTIONS ############################ */

    public function getAllStudents(): View
    {
        $allStudents = User::all();
        return view('admin-dashboard/students.index', ['allStudents' => $allStudents]);
    }

    public function getSingleStudent($id)
    {
        $transactions = Transaction::where('user_id', $id)->get();
        $student = User::find($id);
        return view('admin-dashboard.students.student-detail', compact('student', 'transactions'));
    }

    // Add student
    public function store(Request $request)
    {

        $this->validateAddStudentInputs($request);

        $imageName = uploadFile($request, 'image', 'images', 'image');

        $role = 'student';

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'major' => $request->major,
            'phone' => $request->phone,
            'image' => $imageName,
            'role' => $role
        ]);

        flash()->addSuccess('User created successfully');

        return redirect()->back();
    }

    //Delete student
    public function destroy(Request $request)
    {
        $user = User::find($request->input('user_id'));
        if ($user) {

            $user->delete();

            flash()->addSuccess('Student deleted successfully');

            return redirect()->route('go-dash-students');
        } else {
            flash()->addError('Student deletion failed');
            return redirect()->route('go-dash-students');
        }
    }

    // Show edit student page
    public function edit(User $student)
    {
        return view('admin-dashboard.students.edit-student', compact('student'));
    }

    // Update student
    public function update(Request $request)
    {

        $student = User::find($request->input('userID'));
        $studentPassword = $student->password;
        // dd($studentPassword);

        $this->validateUpdateStudentInputs($request);
        $imageName = updateFile($request, 'image', 'images', $student->image, 'image');

        $student->name = $request->input('name');
        $student->major = $request->input('major');
        $student->phone = $request->input('phone');

        // Check if the email is changed before updating
        if ($request->input('email') !== $student->email) {
            $student->email = $request->input('email');
        }

        // Update the password only if it's provided

        if ($request->filled('password')) {
            $request->validate([
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
            $student->password = Hash::make($request->password);
        } else {
            $student->password = $studentPassword;
        }

        // Update the image if a new one is provided
        if (!empty($imageName)) {
            $student->image = $imageName;
        }

        // Save the updated user data
        $student->save();

        flash()->addSuccess('Student\'s info Updated successfully');

        return redirect()->route('go-student-details', ['student' => $student]);
    }

    // Vaidate add student inputs
    public function validateAddStudentInputs(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:' . User::class,
                function ($attribute, $value, $fail) {
                    // Define the allowed domain ending
                    $allowedDomainEnding = 'edu.jo';

                    // Extract the email domain and check if it ends with 'edu.jo'
                    $emailDomain = strtolower(substr(strrchr($value, "@"), 1));
                    if (!str_ends_with($emailDomain, $allowedDomainEnding)) {
                        $fail('Registration is limited to university students in Jordan');
                    }
                },
            ],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'major' => 'required',
            'phone' => 'required|regex:/^\d{10}$/',
        ]);
    }

    // Validate update student inputs
    public function validateUpdateStudentInputs(Request $request)
    {
        $user = User::find($request->input('userID'));
        $uniqueRule = $user->email !== $request->input('email') ? 'unique:' . User::class : '';

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                $uniqueRule,
                function ($attribute, $value, $fail) {
                    // Define the allowed domain ending
                    $allowedDomainEnding = 'edu.jo';

                    // Extract the email domain and check if it ends with 'edu.jo'
                    $emailDomain = strtolower(substr(strrchr($value, "@"), 1));
                    if (!str_ends_with($emailDomain, $allowedDomainEnding)) {
                        $fail('Registration is limited to university students in Jordan');
                    }
                },
            ],
            'major' => 'required',
            'phone' => 'required|regex:/^\d{10}$/',
        ]);
    }


    // Upload user image

    // Remove image through AJAX request
    public function removeImage(Request $request)
    {
        // Retrieve the user ID and default image name from the request JSON data
        $userId = $request->input('userId');

        $defaultImage = 'images/defaultUserImage.png';

        // Update the image for the user with the provided user ID
        // You would typically use Laravel's Eloquent ORM to update the database
        // Example assuming you have a 'users' table with an 'image' column:
        $user = User::find($userId);
        deleteFile($user->image);

        if ($user) {
            $user->image = $defaultImage;
            $user->save();
            return response()->json(['message' => 'Image updated successfully']);
        } else {
            return response()->json(['message' => 'User not found'], 404);
        }
    }


    /* ############################ END STUDENT FUNCTIONS ############################ */

    /* ------------------------------------------------------------------------------------------- */

    /* ############################ START INSTRUCTOR FUNCTIONS ############################ */

    public function indexInstructor()
    {
        $instructors = Instructor::all();
        return view('admin-dashboard.instructors.index', compact('instructors'));
    }

    public function makeInstructor($userID)
    {

        $user = User::find($userID);

        $userName = $user->name;

        if ($user->role === 'instructor') {
            flash()->addError($userName . ' is already an instructor');
            return redirect()->back();
        }

        if ($user) {
            $user->role = 'instructor';
            $user->save();
        } else {
            flash()->addError('Student was not found');
            return redirect()->back();
        }

        Instructor::create([
            'courses_number' => self::DEFAULT_NUMBER_OF_COURSES,
            'user_id' => $userID,
            'restricted' => self::RESTRICTED,
            'rating' => 0,
            'earnings' => 0,
        ]);

        flash()->addSuccess($userName . ' is now an instructor');
        return redirect()->back();
    }

    public function showInstructorRequestsPage() {
        $requests = InstructorRequest::all();
        return view('admin-dashboard.instroctor-requests.index', compact('requests'));
    }

    public function acceptInstructorRequest($userID, $reqID) {
        $instRequest = InstructorRequest::find($reqID);
        $instRequest->delete();
        $this->makeInstructor($userID);
        flash()->addSuccess('Request Aceepted');
        return redirect()->back();
    }

    public function deleteInstructorRequest($id) {
        $instRequest = InstructorRequest::find($id);
        $instRequest->delete();
        flash()->addSuccess('Request Deleted');
        return redirect()->back();
    }

    /* ############################ END INSTRUCTOR FUNCTIONS ############################ */


    /* ############################ START COURSE FUNCTIONS ############################ */

    public function indexCourse()
    {
        $courses = Course::all();
        return view('admin-dashboard.courses.index', compact('courses'));
    }


    public function deleteCourse($id)
    {

        // Note: make the admin put their email and password to delete the course
        $course = Course::find($id);

        try {
            $instructor_id = $course->instructor_id;

            $instructor = Instructor::find($instructor_id);

            $instructor->courses_number -= 1;

            $course->delete();

            $department = $course->department;
            $department->number_of_courses--;
            $department->save();

            $instructor->save();

        } catch (\Exception $e) {
            flash()->addError('Couldnt delete the course');
            return redirect()->back();
        }

        flash()->addSuccess($course->titl . " course deleted successfully");
        return redirect()->back();
    }

}

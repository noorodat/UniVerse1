<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Instructor;
use Faker\Extension\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Auth\PasswordController;
use Illuminate\Http\Response;
use Illuminate\Validation\Rules\Password;

class DashboardController extends Controller
{

    public function index() {
        return view('admin-dashboard.index');
    }   

    /* ############################ START STUDENT FUNCTIONS ############################ */

    // Add student
    public function store(Request $request) {

        $this->validateAddStudentInputs($request);

        $imageName = $this->uploadUserImage($request);

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
    public function destroy(Request $request) {
        $user = User::find($request->input('user_id'));
        if ($user) {

            $user->delete();

            flash()->addSuccess('Student deleted successfully');

            return redirect()->route('go-dash-students');
        } 
        
        else {
            flash()->addError('Student deletion failed');
            return redirect()->route('go-dash-students');
        }
    }

    // Show edit student page
    public function edit(User $student) {
        return view('admin-dashboard.students.edit-student', compact('student'));
    }

    // Update student
    public function update(Request $request) {

        $student = User::find($request->input('userID'));
        $studentPassword = $student->password;
        // dd($studentPassword);

        $this->validateUpdateStudentInputs($request);
        $imageName = $this->uploadUserImage($request);
    
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
        }
        else {
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
    public function validateAddStudentInputs(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:'.User::class,
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
    public function validateUpdateStudentInputs(Request $request) {
        $user = User::find($request->input('userID'));
        $uniqueRule = $user->email !== $request->input('email') ? 'unique:'.User::class : '';
    
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
    public function uploadUserImage(Request $request) {

        $userID = $request->userID;
        $user = User::find($userID);
    
        if($user) {
            $imageName = $user->image;
        }
    
        else {
            $imageName = 'defaultUserImage.png';
        }
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }
        return $imageName;
    }

    // Remove image through AJAX request
    public function removeImage(Request $request) {
                // Retrieve the user ID and default image name from the request JSON data
                $userId = $request->input('userId');
                $defaultImage = $request->input('defaultImage');
        
                // Update the image for the user with the provided user ID
                // You would typically use Laravel's Eloquent ORM to update the database
                // Example assuming you have a 'users' table with an 'image' column:
                $user = User::find($userId);
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

    public function indexInstructor() {
        $instructors = Instructor::all();
        return view('admin-dashboard.instructors.index', compact('instructors'));
    }

    public function makeInstructor(Request $request) {
        $courses_number = 0;
        $studentID = $request->user_id;

        $user = User::find($studentID);

        if($user) {
            $user->role = 'instructor';
            $user->save();
        }
        else {
            flash()->addError('Student was not found');
            return redirect()->back();
        }

        Instructor::create([
            'courses_number' => $courses_number,
            'user_id' => $studentID
        ]);
        
        flash()->addSuccess('Operation done');
        return redirect()->back();
    }


    /* ############################ END INSTRUCTOR FUNCTIONS ############################ */

}

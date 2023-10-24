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
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class DashboardController extends Controller
{

    protected const DEFAULT_NUMBER_OF_COURSES = 0;

    private const RESTRICTED = 0;

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

        $studentID = $request->user_id;

        $user = User::find($studentID);

        $userName = $user->name;

        if($user->role === 'instructor') {
            flash()->addError($userName . ' is already an instructor');
            return redirect()->back();
        }

        if($user) {
            $user->role = 'instructor';
            $user->save();
        }
        else {
            flash()->addError('Student was not found');
            return redirect()->back();
        }

        Instructor::create([
            'courses_number' => self::DEFAULT_NUMBER_OF_COURSES,
            'user_id' => $studentID,
            'restricted' => self::RESTRICTED,
            'rating' => 0,
            'earnings' => 0,
        ]);
        
        flash()->addSuccess($userName . ' is now an instructor');
        return redirect()->back();
    }


    /* ############################ END INSTRUCTOR FUNCTIONS ############################ */


     /* ############################ START COURSE FUNCTIONS ############################ */

     public function indexCourse() {

        $courses = Course::all();
        return view('admin-dashboard.courses.index', compact('courses'));

     }

     public function addDashCoursePage() {

        $departments = Department::all();
        $instructors = Instructor::all();

        return view('admin-dashboard.courses.add-course', compact('departments', 'instructors'));

     }

     public function addCourse(Request $request) {

        $imageName = $this->uploadCourseImage($request);
        
        // Validate the course inputs
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:80'],
            'department' => ['required'],
            'instructor' => ['required'],
        ]);

        if ($validator->fails()) {
            flash()->addError('Some error happened, Try again');
            return redirect()->back();
        }

        $course_title = $request->input('title');
        $instructorID = $request->input('instructor');


        try {

            $course = new Course();
            $course::create([
                'title' =>  $course_title,
                'image' => $imageName,
                'description' => "This is a default description",
                'duration' => $course->DEFAULT_COURSE_DURATION,
                'number_of_lessons' => $course->DEFAULT_NUMBER_OF_LESSONS,
                'price' => $course->getDefaultPrice(),
                'status' => $course->getDefaultStatus(),
                'rating' => $course->DEFAULT_COURSE_RATING,
                'instructor_id' => $instructorID,
                'department_id' => $request->input('department'),
            ]);

            // Update the number of courses column for the department
            $department = Department::find($request->input('department'));
            $department->number_of_courses = $department->number_of_courses + 1;
            $department->save();

            // Update the courses_number of the instructor
            $instructor = Instructor::find($instructorID);
            $instructor->courses_number += 1;
            
            $instructor->save();

        } catch(\Exception $e) {
            flash()->addError("An error occurred: " . $e->getMessage());
            return redirect()->back();
        }

        flash()->addSuccess($course_title . ' course added successfully');
        return redirect()->back();
     }

     public function deleteCourse($id) {

        // Note: make the admin put their email and password to delete the course
        $course = Course::find($id);

        try {
            $instructor_id = $course->instructor_id;

            $instructor = Instructor::find($instructor_id);
    
            $instructor->courses_number -= 1;
    
            $instructor->save();

            $course->delete();
        } catch(\Exception $e) {
            flash()->addError('Couldnt delete the course');
            return redirect()->back();
        }

        flash()->addSuccess( $course->titl . " course deleted successfully");
        return redirect()->back();
     }

     public function editCourse(Course $course) {
        $currentDepartment = $course->department;
        $currentInstructor = $course->instructor;
        $departments = Department::all();
        $instructors = Instructor::all();
        return view('admin-dashboard.courses.edit-course', compact('course', 'currentDepartment', 'currentInstructor', 'departments', 'instructors'));
     }

     public function updateCourse(Request $request) {

        $imageName = self::uploadCourseImage($request);

        $title = $request->input('title');
        $department = $request->input('department');
        $instructor = $request->input('instructor');

        $course = Course::find($request->input('courseID'));


        try {
            $course->image = $imageName;
            $course->title = $title;
            $course->department_id = $department;
            $course->instructor_id = $instructor;
            $course->save();
        } catch(\Exception $e) {
            flash()->addError('Error while updating the course');
            return redirect()->back();
        }

        flash()->addSuccess($course->title . ' updated successfully');
        return redirect()->back();

     }

    //  Upload the course image
     public function uploadCourseImage(Request $request) {

        $course_id = $request->CourseID;
        $course = Course::find($course_id);
    
        if($course) {
            $imageName = $course->image;
        }
    
        else {
            $imageName = 'defaultCourseImage.png';
        }
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }
        return $imageName;
    }



    // public function validateAddStudentInputs(Request $request) {
    //     $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => [
    //             'required',
    //             'string',
    //             'email',
    //             'max:255',
    //             'unique:'.User::class,
    //             function ($attribute, $value, $fail) {
    //                 // Define the allowed domain ending
    //                 $allowedDomainEnding = 'edu.jo';
            
    //                 // Extract the email domain and check if it ends with 'edu.jo'
    //                 $emailDomain = strtolower(substr(strrchr($value, "@"), 1));
    //                 if (!str_ends_with($emailDomain, $allowedDomainEnding)) {
    //                     $fail('Registration is limited to university students in Jordan');
    //                 }
    //             },
    //         ],
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //         'major' => 'required',
    //         'phone' => 'required|regex:/^\d{10}$/',
    //     ]);
    // }
    

     /* ############################ END COURSE FUNCTIONS ############################ */

}

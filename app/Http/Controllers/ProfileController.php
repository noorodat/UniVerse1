<?php

namespace App\Http\Controllers;


use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Instructor;
use App\Models\CourseStudent;
use App\Models\Course;
use App\Exceptions\Exception;
use App\Models\Department;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request): RedirectResponse
    {
        // Validate the request
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore(auth()->id()), // Ignore the current user's email
                function ($attribute, $value, $fail) {
                    // Define the allowed domain ending
                    $allowedDomainEnding = 'edu.jo';

                    // Extract the email domain and check if it ends with 'edu.jo'
                    $emailDomain = strtolower(substr(strrchr($value, "@"), 1));
                    if (!str_ends_with($emailDomain, $allowedDomainEnding)) {
                        $fail('Updated email must be a student email');
                    }
                },
            ],
            'password' => ['sometimes', 'nullable', 'string', 'min:8', 'confirmed'],
        ]);

        $user = auth()->user();

        $user->fill([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('profile.edit')->with('status', 'profile-updated');
    }

    public function showDashboard(User $user)
    {
        $isInstructor = false;
        if ($user->role === 'instructor') {
            $instructor = Instructor::where('user_id', $user->id)->first();
            $isInstructor = true;
            $widgetData = [
                'enrolled_courses_count' => CourseStudent::where('student_id', $user->id)->count(),
                'published_courses_count' => Course::where('instructor_id', $user->id)->count(),
                'total_students' => CourseStudent::whereHas('course', function ($query) use ($user) {
                    $query->where('instructor_id', $user->id);
                })->count(),
                'earnings' => $instructor->earnings,
            ];
            return view('pages.profile.instructor-dashboard', compact('instructor', 'isInstructor', 'widgetData'));
        }
    }

    public function showProfile(User $user) {
        $isInstructor = false;
        if($user->role === 'instructor') {
            $instructor = Instructor::where('user_id', $user->id)->first();
            $isInstructor = true;
            return view('pages.profile.profile', compact('user', 'isInstructor', 'instructor'));
        }
        else {
            return view('pages.profile.profile', compact('user'));
        }
    }

    public function showInstructorProfile(User $user) {
        return view('pages.profile.profile', compact('user'));
    }

    public function showEnrolledCourses(User $user) {
        try {
            $enrolledCourses = CourseStudent::where('student_id', $user->id)
                ->join('courses', 'courses_students.course_id', '=', 'courses.id')
                ->get();
    
            return view('pages.profile.enrolled-courses', compact('enrolledCourses'));
        } catch (Exception $e) {
            return redirect()->route('go-home')->with('error', $e->getMessage());
        }
    }

    public function showCreateCourse() {
        $departments = Department::all();
        $instructor = Instructor::where('user_id',Auth::user()->id)->first();
        return view('pages.profile.create-course', compact('departments', 'instructor'));
    }

    public function showMyCourses() {
        $instructor = Instructor::where('user_id', Auth::user()->id)->first();
        $courses = Course::where('instructor_id', $instructor->id)->get();
        return view('pages.profile.my-courses', compact('courses'));
    }


    public function showSettings() 
    {
        return view('pages.profile.settings');
    }

    // public function updateUserInformation()
    // {

    // }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}

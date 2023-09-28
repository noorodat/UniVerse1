<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    // Show students in the dashboard
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        // Helper function i created to validate the add student inputs

        $imageName = uploadImage($request);

        validateAddStudentInputs($request);

    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'major' => $request->major,
            'phone' => $request->phone,
            'image' => $imageName
        ]);
    
        event(new Registered($user));
    
        Auth::login($user);
    
        return redirect(RouteServiceProvider::HOME);
    }
    

    public function getAllStudents(): View
    {
        $allStudents = User::all();
        return view('admin-dashboard/students.index', ['allStudents' => $allStudents]);
    }

    public function getSingleStudent($id) {
        $student = User::find($id);
        return view('admin-dashboard.students.student-detail', compact('student'));
    }

    
    
}

<?php

namespace App\Http\Controllers;
use App\Models\User;
use Faker\Extension\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    // Add user function
    public function store(Request $request) {

        validateAddStudentInputs($request);

        $imageName = uploadImage($request);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'major' => $request->major,
            'phone' => $request->phone,
            'image' => $imageName
        ]);

        $successMessage = 'User created successfully';

        return redirect()->back()->with('success', $successMessage);

    }

    public function destroy(Request $request) {
        $user = User::find($request->input('user_id'));
        if ($user) {
            $user->delete();
            $successMessage = "Student deleted successfully";
            return redirect()->route('go-dash-students')->with('success', $successMessage);
        } else {
            $errorMessage = "Student not found";
            return redirect()->route('go-dash-students')->with('error', $errorMessage);
        }
    }

    public function edit(User $student) {
        return view('admin-dashboard.students.update-student', compact('student'));
    }

    public function update(Request $request) {

    }

}

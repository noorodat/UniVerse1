<?php

use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Models\User;


/* UPLOAD IMAGE */
function uploadImage(Request $request) {

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


/* VALIDATE ADD STUDENT INPUTS */
function validateAddStudentInputs(Request $request) {

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

    // dd($request->all());
}
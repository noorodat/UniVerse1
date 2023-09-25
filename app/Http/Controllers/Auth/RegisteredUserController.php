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
            'phone' => 'required|regex:/^\d{10}$/'
        ]);

        $imageName = 'defaultUserImage.png';

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'major' => $request->major, // Get 'major' from the request
            'phone' => $request->phone,
            'image' => $imageName,
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
    
}

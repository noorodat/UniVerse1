@extends('layouts.master')

@section('title', 'Login')

@section('content')
 
 


        <div class="login-register-page-wrapper edu-section-gap bg-color-white">
            <div class="container checkout-page-style">
                <div class="row g-5 justify-content-center">
                    <div class="col-lg-12  w-50">
                        <div class="login-form-box">
                            <h3 class="mb-30">Login</h3>
                            {{-- Session status --}}
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <form class="login-form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="input-box mb--30">
                                    <input id="email" type="email" name="email" :value="old('email')" required placeholder="Email" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />    
                                </div>
                                <div class="input-box mb--30">
                                    <input id="password" placeholder="Password"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="comment-form-consent input-box mb--30">
                                    <input id="remember_me" type="checkbox" name="remember">
                                    <label for="remember_me">Remember Me</label>
                                </div>
                                <button class="rn-btn edu-btn w-100 mb--30" type="submit">
                                    <span>Login</span>
                                </button>
                                <div class="login-links d-flex justify-content-between">
                                    <div class="flex items-center justify-end mt-4">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                                            {{ __('Dont have? Create one') }}
                                        </a>
                                </div>
                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                        
                                    @endif
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{-- <div class="col-lg-6">
                        <div class="login-form-box">
                            <h3 class="mb-30">Register</h3>
                            <form class="login-form" action="#">
                                <div class="input-box mb--30">
                                    <input type="text" placeholder="Full Name" />
                                </div>
                                <div class="input-box mb--30">
                                    <input type="email" placeholder="Email" />
                                </div>
                                <div class="input-box mb--30">
                                    <input type="password" placeholder="Password" />
                                </div>
                                <button class="rn-btn edu-btn w-100 mb--30" type="submit">
                                    <span>Register</span>
                                </button>
                                <div class="input-box">
                                    <input id="checkbox-2" type="checkbox" />
                                    <label for="checkbox-2">I read & agree the terms & conditions.</label>
                                </div>
                            </form>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    @endsection
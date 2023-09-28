@extends('layouts.master')

@section('title', 'Register')

@section('content')
 
 


        <div class="login-register-page-wrapper edu-section-gap bg-color-white">
            <div class="container checkout-page-style">
                <div class="row g-5 justify-content-center">
                    <div class="col-lg-12 w-50">
                        <div class="login-form-box">
                            <h3 class="mb-30">Register</h3>
                            <form class="login-form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="input-box mb--30">
                                    <input id="name" class="" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Full name"  />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <div class="input-box mb--30">
                                    <input id="email" class="" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="input-box mb--30">
                                    <input id="major" class="" type="text" name="major" placeholder="Major" />
                                    <x-input-error :messages="$errors->get('major')" class="mt-2" />
                                </div>
                                <div class="input-box mb--30">
                                    <input id="phone" class="" type="tel" name="phone" placeholder="Phone" />
                                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                </div>
                                <div class="input-box mb--30">
                                    <input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" placeholder="Password"/>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="input-box mb--30">
                                    <input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password" />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                                <button class="rn-btn edu-btn w-100 mb--30" type="submit">
                                    <span>Register</span>
                                </button>
                                <div class="flex items-center justify-end mt-4">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>
                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
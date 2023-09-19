@extends('layouts.master')

@section('title', 'Login')

@section('content')
 
 


        <div class="login-register-page-wrapper edu-section-gap bg-color-white">
            <div class="container checkout-page-style">
                <div class="row g-5 justify-content-center">
                    <div class="col-lg-12  w-50">
                        <div class="login-form-box">
                            <h3 class="mb-30">Login</h3>
                            <form class="login-form" action="#">
                                @csrf
                                <div class="input-box mb--30">
                                    <input type="text" placeholder="Username or Email" />
                                </div>
                                <div class="input-box mb--30">
                                    <input type="password" placeholder="Password" />
                                </div>
                                <div class="comment-form-consent input-box mb--30">
                                    <input id="checkbox-1" type="checkbox" />
                                    <label for="checkbox-1">Remember Me</label>
                                </div>
                                <button class="rn-btn edu-btn w-100 mb--30" type="submit">
                                    <span>Login</span>
                                </button>
                                <div class="input-box">
                                    <a href="#" class="lost-password">Lost your password?</a>
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
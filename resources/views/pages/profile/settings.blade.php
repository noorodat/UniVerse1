@section('title', 'Profile')


@extends('pages.profile.master')

@section('content')

    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
    </div>

    <!-- Start Card Style -->
    <div class="rbt-dashboard-area rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start Dashboard Top  -->
                    @include('pages.profile.user-card')
                    <!-- End Dashboard Top  -->

                    <div class="row g-5">
                        <div class="col-lg-3">
                            <!-- Start Dashboard Sidebar  -->
                            @include('pages.profile.sidebar')
                            <!-- End Dashboard Sidebar  -->
                        </div>

                        <div class="col-lg-9">
                            <!-- Start Instructor Profile  -->
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                                <div class="content">

                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">Settings</h4>
                                    </div>

                                    <div class="advance-tab-button mb--30">
                                        <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="settinsTab-4" role="tablist">
                                            <li role="presentation">
                                                <a href="#" class="tab-button active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="true">
                                                    <span class="title">Profile</span>
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#" class="tab-button" id="password-tab" data-bs-toggle="tab" data-bs-target="#password" role="tab" aria-controls="password" aria-selected="false">
                                                    <span class="title">Password</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="rbt-dashboard-content-wrapper">
                                                <div style="background: url('{{asset('profile-assets/assets/images/default_cover.jpg')}}') center;" class="tutor-bg-photo bg_image bg_image--22 height-245"></div>
                                                <!-- Start Tutor Information  -->
                                                <div class="rbt-tutor-information">
                                                    <div class="rbt-tutor-information-left">
                                                        <div class="thumbnail rbt-avatars size-lg position-relative">
                                                            <img id="showImage" src="{{asset(Auth::user()->image)}}" alt="user image">
                                                            <div class="rbt-edit-photo-inner">
                                                                <label for="pfp" style="cursor: pointer" class="d-flex justify-content-center align-items-center rbt-edit-photo" title="Upload Photo">
                                                                    <i class="feather-camera"></i>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="rbt-tutor-information-right">
                                                        <div class="tutor-btn">
                                                            <a class="rbt-btn btn-sm btn-border color-white radius-round-10" href="#">Edit Cover Photo</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Tutor Information  -->
                                            </div>
                                            <!-- Start Profile Row  -->
                                            <form enctype="multipart/form-data" method="POST" action="{{route('profile.update')}}" class="rbt-profile-row rbt-default-form row row--15">
                                                @csrf
                                                @method('PATCH')
                                                <input type="file" name="image" id="pfp" class="d-none">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="name">Name</label>
                                                        <input value="{{Auth::user()->name}}" id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="phone">Phone Number</label>
                                                        <input id="phone" name="phone" type="tel" value="{{Auth::user()->phone}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="email">Email</label>
                                                        <input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username"  value="{{Auth::user()->email}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="major">Major</label>
                                                        <input id="major" name="major" type="text" value="{{Auth::user()->major}}">
                                                    </div>
                                                </div>

                                                <div class="col-12 mt--20">
                                                    <div class="rbt-form-group">
                                                        <button type="submit" class="rbt-btn btn-gradient" href="#">Update Info</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- End Profile Row  -->
                                        </div>

                                        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                                            <!-- Start Profile Row  -->
                                            <form method="post" action="{{ route('password.update') }}" class="rbt-profile-row rbt-default-form row row--15">
                                                @csrf
                                                @method('PUT')
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <x-input-label for="current_password" :value="__('Current Password')" />
                                                        <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
                                                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <x-input-label for="password" :value="__('New Password')" />
                                                        <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                                                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                                        <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                                                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                                    </div>
                                                </div>
                                                <div class="col-12 mt--10">
                                                    <div class="rbt-form-group">
                                                        <button class="rbt-btn btn-gradient" type="submit">Update Password</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- End Profile Row  -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- End Instructor Profile  -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Card Style -->

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>



@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#pfp').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        })
    });
</script>
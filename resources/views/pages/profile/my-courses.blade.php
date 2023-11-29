@section('title', 'Enrolled courses')

@extends('pages.profile.master')

@section('content')

    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
    </div>


    <div class="rbt-dashboard-area rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start Card Style -->
                    @include('pages.profile.user-card')
                    <!-- End Card Style -->
                    <div class="row g-5">
                        <div class="col-lg-3">
                            <!-- Start Dashboard Sidebar  -->
                            @include('pages.profile.sidebar')
                            <!-- End Dashboard Sidebar  -->
                        </div>

                        <div class="col-lg-9">
                            <!-- Start Enrole Course  -->
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                                <div class="content">

                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">My created courses</h4>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="home-4" role="tabpanel"
                                            aria-labelledby="home-tab-4">
                                            <div class="row g-5">
                                                @foreach ($courses as $course)
                                                    <!-- Start Single Course  -->
                                                    <div class="col-lg-4 col-md-6 col-12">
                                                        <div class="rbt-card variation-01 rbt-hover">
                                                            <div class="rbt-card-img">
                                                                <a href="{{route('show-unlocked-course', $course)}}">
                                                                    <img src="{{asset($course->image)}}"
                                                                        alt="Card image">
                                                                </a>
                                                            </div>
                                                            <h5 class="d-flex align-items-center mt-4" style="padding: 0; margin: 0">{{$course->title}}</h5>
                                                            <div class="rbt-card-body">
                                                                <div class="rbt-card-top">
                                                                    <div class="rbt-review">
                                                                        <div class="rating">
                                                                            @if ($course->rating === 0)
                                                                                <i class="fa-regular fa-star"></i>
                                                                                <i class="fa-regular fa-star"></i>
                                                                                <i class="fa-regular fa-star"></i>
                                                                                <i class="fa-regular fa-star"></i>
                                                                                <i class="fa-regular fa-star"></i>
                                                                            @elseif ($course->rating === 1)
                                                                                <i class="icon-Star"></i>
                                                                            @elseif ($course->rating === 2)
                                                                                <i class="icon-Star"></i>
                                                                                <i class="icon-Star"></i>
                                                                            @elseif ($course->rating === 3)
                                                                                <i class="icon-Star"></i>
                                                                                <i class="icon-Star"></i>
                                                                                <i class="icon-Star"></i>
                                                                            @elseif ($course->rating === 4)
                                                                                <i class="icon-Star"></i>
                                                                                <i class="icon-Star"></i>
                                                                                <i class="icon-Star"></i>
                                                                                <i class="icon-Star"></i>
                                                                            @elseif ($course->rating === 5)
                                                                                <i class="icon-Star"></i>
                                                                                <i class="icon-Star"></i>
                                                                                <i class="icon-Star"></i>
                                                                                <i class="icon-Star"></i>
                                                                                <i class="icon-Star"></i>
                                                                            @endif
                                                                        </div>
                                                                        <span class="rating-count"> (0 Reviews)</span>
                                                                    </div>
                                                                </div>
                                                                <h4 class="rbt-card-title"><a
                                                                        href="course-details.html"></a>
                                                                </h4>
                                                                <ul class="rbt-meta">
                                                                    <li><i class="feather-book"></i>{{$course->number_of_lessons}} Lessons</li>
                                                                    <li><i class="feather-users"></i>{{$course->number_of_students}} Students</li>
                                                                </ul>

                                                                <div class=" p-2 d-flex align-items-center">
                                                                    <div class="rbt-avatars">
                                                                        <img style="width: 45px; height: 45px"
                                                                            src="{{asset($course->instructor->user->image)}}"
                                                                            alt="Instructor">
                                                                    </div>
                                                                    <div class="tutor-content">
                                                                        <h6 style="margin: 0;" class="title fs-5">{{$course->instructor->user->name}}</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="rbt-card-bottom">
                                                                    <a class="rbt-btn btn-sm bg-primary-opacity w-100 text-center"
                                                                        href="{{route('course.show', $course)}}">View Course</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Course  -->
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- End Enrole Course  -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!-- End Footer aera -->
    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

@endsection

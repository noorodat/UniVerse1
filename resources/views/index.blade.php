@extends('layouts.master')

@section('title', 'UniVerse')

@section('content')


    <!-- Start Sldier Area  -->
    <div class="slider-area banner-style-2 bg-image d-flex align-items-center">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="inner">
                        <div class="content">
                            <span class="pre-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Better
                                Learning Future With Us</span>
                            <h1 class="title" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                                Committed To Learn Excellence In Education</h1>
                            <p class="description" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                It is long established that a reader will be distracted by the <br /> readable popular and
                                best content.</p>
                            <div class="read-more-btn" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                                <a class="edu-btn" href="#">Get Started Today <i
                                        class="icon-arrow-right-line-right"></i></a>
                            </div>
                            <div class="arrow-sign d-lg-block d-none">
                                <img src="assets/images/banner/banner-02/arrow.png" alt="Banner Images" data-sal-delay="150"
                                    data-sal="fade" data-sal-duration="800">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="banner-thumbnail">
                        <img class="girl-thumb" src="assets/images/banner/banner-02/banner-01.png" alt="Girl Images"
                            data-sal-delay="150" data-sal="fade" data-sal-duration="800" />
                    </div>
                    <div class="banner-bg d-lg-block d-none">
                        <img class="girl-bg" src="assets/images/banner/banner-02/girl-bg.png" alt="Girl Background"
                            data-sal-delay="150" data-sal="fade" data-sal-duration="800" />
                    </div>
                </div>
            </div>

            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-image shape-image-1">
                    <img src="assets/images/shapes/shape-19.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-2">
                    <img src="assets/images/shapes/shape-05-01.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-3">
                    <img src="assets/images/shapes/shape-19-01.png" alt="Shape Thumb" />
                </div>
            </div>
        </div>
    </div>
    <!-- End Sldier Area  -->
    <div class="sercice-area eduvibe-service-four edu-section-gap bg-color-white">
        <div class="container eduvibe-animated-shape">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">Department</span>
                        <h3 class="title">Universtiy Departments</h3>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--25 justify-content-center">
                <!-- Start Service Grid  -->
                @foreach ($departments as $department)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <a href="{{ route('department.show', $department) }}" class="service-card service-card-4">
                            <div class="inner">
                                <div class="icon">
                                    <i class="{{ $department->image }}"></i>
                                    <span class="subtitle">{{ $department->number_of_courses }} Courses</span>
                                </div>
                                <div class="content">
                                    <h6 class="title">{{ $department->title }}</h6>
                                    <p class="description">{{ $department->description }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <!-- End Service Grid  -->
            </div>

            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-image shape-image-1">
                    <img src="assets/images/shapes/shape-11-02.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-2">
                    <img src="assets/images/shapes/shape-02-03.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-3">
                    <img src="assets/images/shapes/shape-20.png" alt="Shape Thumb" />
                </div>
            </div>

        </div>
    </div>
    <div class="edu-about-area about-style-3 edu-section-gap bg-image">
        <div class="container eduvibe-animated-shape">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 pr--80">
                    <div class="gappery-wrapper" data-sal-delay="200" data-sal="fade" data-sal-duration="800">
                        <div class="row g-5 align-items-end">
                            <div class="col-lg-5 col-md-6">
                                <div class="gallery-image mt--85">
                                    <img class="w-100" src="assets/images/about/about-04/gallery-1.jpg"
                                        alt="Gallery Images">
                                    <div class="icon-badge">
                                        <i class="icon-ribbon"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-6">
                                <div class="gallery-image">
                                    <img class="w-100" src="assets/images/about/about-04/gallery-2.jpg"
                                        alt="Gallery Images">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="gallery-image gallery-image-3 text-center">
                                    <img src="assets/images/about/about-04/gallery-3.jpg" alt="Gallery Images">
                                    <div class="student-like-status bounce-slide">
                                        <div class="inner">
                                            <div class="icon">
                                                <i class="icon-Smile"></i>
                                            </div>
                                            <div class="content">
                                                <h6 class="title">{{$counts['users']}}</h6>
                                                <span class="subtitle">Total Students</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner">
                        <div class="section-title text-start" data-sal-delay="200" data-sal="slide-up"
                            data-sal-duration="800">
                            <span class="pre-title">About Us</span>
                            <h3 class="title">The highest result of education is tolerance</h3>

                        </div>
                        <p class="description mt--40" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nunc null liobortis nibh
                            porttitor. Facilisi arcu, nibh vel risus, morbi pharetra. Facilisi sit miam mauris non iaculis
                            elit fusce amet nunc in odio molestie.</p>
                        <div class="feature-style-5 row g-5">
                            <div class="col-lg-12 col-xl-6" data-sal-delay="200" data-sal="slide-up"
                                data-sal-duration="800">
                                <div class="edu-feature-list">
                                    <div class="icon">
                                        <i class="icon-Board"></i>
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Flexible Classes</h6>
                                        <p class="description">There are many variations of passages of the Ipsum available
                                            for now</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6" data-sal-delay="200" data-sal="slide-up"
                                data-sal-duration="800">
                                <div class="edu-feature-list">
                                    <div class="icon">
                                        <i class="icon-Bag"></i>
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Educator Support</h6>
                                        <p class="description">There are many variations of passages of the Ipsum available
                                            for now</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="read-more-btn mt--60 mt_lg--30 mt_md--30 mt_sm--30" data-sal-delay="200"
                            data-sal="slide-up" data-sal-duration="800">
                            <a class="edu-btn" href="about-us-1.html">Learn More <i
                                    class="icon-arrow-right-line-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-image shape-image-1">
                    <img src="assets/images/shapes/shape-21.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-2">
                    <img src="assets/images/shapes/shape-13-04.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-3">
                    <img src="assets/images/shapes/shape-03-05.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-4">
                    <img src="assets/images/shapes/shape-15-02.png" alt="Shape Thumb" />
                </div>
            </div>

        </div>
    </div>

    <div class="edu-course-area eduvibe-home-two-course course-three-wrapper edu-section-gap bg-color-white">
        <div class="container eduvibe-animated-shape">
            <div class="row g-5 align-items-center mb--30">
                <div class="col-lg-12 text-center">
                    <div class="section-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">Popular courses</span>
                        <h3 class="title">Explore the best seller courses</h3>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <div class="col-12">
                    <div class="grid-metro3 mesonry-list">
                        <div class="resizer"></div>
                        <!-- Start Single Card  -->
                        @foreach ($randomCourses as $randomCourse)
                            {{-- Check if the course is active before you show it --}}
                            @if ($randomCourse->status)
                                <div class="grid-metro-item cat--1 cat--3">
                                    <div class="edu-card card-type-3 radius-small">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="{{ route('course.show', $randomCourse) }}">
                                                    <img class="w-100" src="{{ asset($randomCourse->image) }}"
                                                        alt="Course Meta">
                                                </a>

                                                <div class="top-position status-group left-bottom">
                                                    <span
                                                        class="eduvibe-status status-03">{{ $randomCourse->department->title }}</span>
                                                </div>
                                            </div>

                                            <div class="content">
                                                <div class="card-top">
                                                    <div class="author-meta">
                                                        <div class="author-thumb">
                                                            <a href="#">
                                                                <img src="{{ asset($randomCourse->instructor->user->image) }}"
                                                                    alt="Author Images">
                                                                <span
                                                                    class="author-title">{{ $randomCourse->instructor->user->name }}</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="edu-meta meta-02">
                                                        <li><i
                                                                class="icon-file-list-3-line"></i>{{ $randomCourse->number_of_lessons }}
                                                            Lessons</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a
                                                        href="{{ route('course.show', $randomCourse) }}">{{ $randomCourse->title }}</a>
                                                </h6>
                                                <div class="card-bottom">
                                                    <div class="price-list price-style-02">
                                                        <div class="price current-price">${{ $randomCourse->price }}</div>
                                                        {{-- <div class="price old-price">$65.99</div> --}}
                                                    </div>
                                                    <div class="edu-rating rating-default">
                                                        <div class="rating">
                                                            @if ($randomCourse->rating === 0)
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            @elseif ($randomCourse->rating === 1)
                                                                <i class="icon-Star"></i>
                                                            @elseif ($randomCourse->rating === 2)
                                                                <i class="icon-Star"></i>
                                                                <i class="icon-Star"></i>
                                                            @elseif ($randomCourse->rating === 3)
                                                                <i class="icon-Star"></i>
                                                                <i class="icon-Star"></i>
                                                                <i class="icon-Star"></i>
                                                            @elseif ($randomCourse->rating === 4)
                                                                <i class="icon-Star"></i>
                                                                <i class="icon-Star"></i>
                                                                <i class="icon-Star"></i>
                                                                <i class="icon-Star"></i>
                                                            @elseif ($randomCourse->rating === 5)
                                                                <i class="icon-Star"></i>
                                                                <i class="icon-Star"></i>
                                                                <i class="icon-Star"></i>
                                                                <i class="icon-Star"></i>
                                                                <i class="icon-Star"></i>
                                                            @endif
                                                        </div>
                                                        {{-- <span class="rating-count">(30)</span> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-hover-action">
                                            <div class="hover-content">
                                                <div class="content-top">
                                                    <div class="top-status-bar">
                                                        <span
                                                            class="eduvibe-status status-03">{{ $randomCourse->department->title }}</span>
                                                    </div>
                                                </div>
                                                <h6 class="title"><a
                                                        href="{{ route('course.show', $randomCourse) }}">{{ $randomCourse->title }}</a>
                                                </h6>

                                                <p class="description desc-break">{{ $randomCourse->description }}</p>

                                                <div class="price-list price-style-02">
                                                    <div class="price current-price">${{ $randomCourse->price }}</div>
                                                    {{-- <div class="price old-price">$69.99</div> --}}
                                                </div>

                                                <div class="hover-bottom-content">
                                                    <div class="author-meta">
                                                        <div class="author-thumb">
                                                            <a href="#">
                                                                <img src="{{ asset($randomCourse->instructor->user->image) }}"
                                                                    alt="Author Images">
                                                                <span
                                                                    class="author-title">{{ $randomCourse->instructor->user->name }}</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="edu-meta meta-02">
                                                        <li><i
                                                                class="icon-file-list-3-line"></i>{{ $randomCourse->number_of_lessons }}
                                                            Lessons</li>
                                                    </ul>
                                                </div>


                                                <div class="read-more-btn">
                                                    <a class="edu-btn btn-medium btn-white"
                                                        href="{{ route('course.show', $randomCourse) }}">Enroll Now<i
                                                            class="icon-arrow-right-line-right"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <!-- End Single Card  -->

                    </div>
                </div>
            </div>

            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-image shape-image-1">
                    <img src="assets/images/shapes/shape-04-02.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-2">
                    <img src="assets/images/shapes/shape-03-06.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-3">
                    <img src="assets/images/shapes/shape-04-03.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-4">
                    <img src="assets/images/shapes/shape-07-01.png" alt="Shape Thumb" />
                </div>
            </div>
        </div>
    </div>

    <!-- Start Event Area  -->
    {{-- <div class="edu-event-area eduvibe-home-two-event edu-section-gap bg-image video-gallery-overlay-area">
            <div class="container eduvibe-animated-shape">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="pre-title">Let’s Learn Together</span>
                            <h3 class="title">Upcoming Educational Events</h3>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--25">
                    <!-- Start Event List  -->
                    <div class="col-lg-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event event-list radius-small bg-white">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="event-details.html">
                                        <img src="assets/images/event/event-01/event-01.jpg" alt="Event Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="content-left">
                                        <h5 class="title"><a href="event-details.html">Consumer Food Safety Education Conference</a></h5>
                                        <ul class="event-meta">
                                            <li><i class="icon-calendar-2-line"></i>15th December 2023</li>
                                            <li><i class="icon-time-line"></i>10:00 AM</li>
                                            <li><i class="icon-map-pin-line"></i>IAC Building, New York, NY</li>
                                        </ul>
                                    </div>
                                    <div class="read-more-btn">
                                        <a class="edu-btn btn-dark" href="event-details.html">Book A Seat<i class="icon-arrow-right-line-right"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End Event List  -->

                    <!-- Start Event List  -->
                    <div class="col-lg-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event event-list radius-small bg-white">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="event-details.html">
                                        <img src="assets/images/event/event-01/event-02.jpg" alt="Event Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="content-left">
                                        <h5 class="title"><a href="event-details.html">Virtual Spring Part-time Jobs
                                                Fair for Student</a></h5>
                                        <ul class="event-meta">
                                            <li><i class="icon-calendar-2-line"></i>12th November 2023</li>
                                            <li><i class="icon-time-line"></i>09:00 AM</li>
                                            <li><i class="icon-map-pin-line"></i>IAC Building, New York, NY</li>
                                        </ul>
                                    </div>
                                    <div class="read-more-btn">
                                        <a class="edu-btn btn-dark" href="event-details.html">Book A Seat<i class="icon-arrow-right-line-right"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End Event List  -->

                    <!-- Start Event List  -->
                    <div class="col-lg-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event event-list radius-small bg-white">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="event-details.html">
                                        <img src="assets/images/event/event-01/event-03.jpg" alt="Event Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="content-left">
                                        <h5 class="title"><a href="event-details.html">Explorations of Regional
                                                Chief Executive Network</a></h5>
                                        <ul class="event-meta">
                                            <li><i class="icon-calendar-2-line"></i>28th Octabar 2023</li>
                                            <li><i class="icon-time-line"></i>08:00 AM</li>
                                            <li><i class="icon-map-pin-line"></i>IAC Building, New York, NY</li>
                                        </ul>
                                    </div>
                                    <div class="read-more-btn">
                                        <a class="edu-btn btn-dark" href="event-details.html">Book A Seat<i class="icon-arrow-right-line-right"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End Event List  -->
                </div>

                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="assets/images/shapes/shape-03-07.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="assets/images/shapes/shape-02-04.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-3">
                        <img src="assets/images/shapes/shape-05-02.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-4">
                        <img src="assets/images/shapes/shape-13-05.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape shape-1"><span class="shape-dot"></span></div>
                </div>
            </div>
        </div> --}}
    <!-- End Event Area  -->

    <!-- Start Testimonial Area  -->
    <div
        class="eedu-testimonial-area eduvibe-home-two-testimonial bg-color-white testimonial-card-box-bg edu-section-gap position-relative bg-image">
        <div class="container eduvibe-animated-shape">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <span class="pre-title">TESTIMONIALS</span>
                        <h3 class="title">Our Lovely Students Feedback</h3>
                    </div>
                </div>
            </div>

            <div class="edu-testimonial-activation testimonial-item-3 mt--40 edu-slick-button">

                <!-- Start Tastimonial Card  -->
                <div class="testimonial-card-box">
                    <div class="inner">
                        <div class="client-info">
                            <div class="thumbnail">
                                <img src="assets/images/testimonial/testimonial-04/client-03.png" alt="Client Images">
                            </div>
                            <div class="content">
                                <h6 class="title">Stive Marlone</h6>
                                <span class="designation">Web Developer</span>
                            </div>
                        </div>
                        <p class="description">“ There are many variations of passages of Lorem Ipsum available, but the
                            majority on have suffered alteration in some form, by a injected humour, or randomised. ”</p>
                        <div class="rating">
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                        </div>
                    </div>
                </div>
                <!-- End Tastimonial Card  -->

                <!-- Start Tastimonial Card  -->
                <div class="testimonial-card-box">
                    <div class="inner">
                        <div class="client-info">
                            <div class="thumbnail">
                                <img src="assets/images/testimonial/testimonial-04/client-04.png" alt="Client Images">
                            </div>
                            <div class="content">
                                <h6 class="title">James Carlson</h6>
                                <span class="designation">UI/UX Designer</span>
                            </div>
                        </div>
                        <p class="description">“ There are many variations of passages of Lorem Ipsum available, but the
                            majority on have suffered alteration in some form, by a injected humour, or randomised. ”</p>
                        <div class="rating">
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                        </div>
                    </div>
                </div>
                <!-- End Tastimonial Card  -->

                <!-- Start Tastimonial Card  -->
                <div class="testimonial-card-box">
                    <div class="inner">
                        <div class="client-info">
                            <div class="thumbnail">
                                <img src="assets/images/testimonial/testimonial-04/client-01.png" alt="Client Images">
                            </div>
                            <div class="content">
                                <h6 class="title">Nancy Phipps</h6>
                                <span class="designation">Digital Marketer</span>
                            </div>
                        </div>
                        <p class="description">“ There are many variations of passages of Lorem Ipsum available, but the
                            majority on have suffered alteration in some form, by a injected humour, or randomised. ”</p>
                        <div class="rating">
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                        </div>
                    </div>
                </div>
                <!-- End Tastimonial Card  -->

                <!-- Start Tastimonial Card  -->
                <div class="testimonial-card-box">
                    <div class="inner">
                        <div class="client-info">
                            <div class="thumbnail">
                                <img src="assets/images/testimonial/testimonial-04/client-02.png" alt="Client Images">
                            </div>
                            <div class="content">
                                <h6 class="title">Adam Smith</h6>
                                <span class="designation">Web Developer</span>
                            </div>
                        </div>
                        <p class="description">“ There are many variations of passages of Lorem Ipsum available, but the
                            majority on have suffered alteration in some form, by a injected humour, or randomised. ”</p>
                        <div class="rating">
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                        </div>
                    </div>
                </div>
                <!-- End Tastimonial Card  -->

                <!-- Start Tastimonial Card  -->
                <div class="testimonial-card-box">
                    <div class="inner">
                        <div class="client-info">
                            <div class="thumbnail">
                                <img src="assets/images/testimonial/testimonial-04/client-05.png" alt="Client Images">
                            </div>
                            <div class="content">
                                <h6 class="title">Jhaniel Devora</h6>
                                <span class="designation">Digital Marketer</span>
                            </div>
                        </div>
                        <p class="description">“ There are many variations of passages of Lorem Ipsum available, but the
                            majority on have suffered alteration in some form, by a injected humour, or randomised. ”</p>
                        <div class="rating">
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                        </div>
                    </div>
                </div>
                <!-- End Tastimonial Card  -->

                <!-- Start Tastimonial Card  -->
                <div class="testimonial-card-box">
                    <div class="inner">
                        <div class="client-info">
                            <div class="thumbnail">
                                <img src="assets/images/testimonial/testimonial-04/client-06.png" alt="Client Images">
                            </div>
                            <div class="content">
                                <h6 class="title">Jhamina Diva</h6>
                                <span class="designation">Web Developer</span>
                            </div>
                        </div>
                        <p class="description">“ There are many variations of passages of Lorem Ipsum available, but the
                            majority on have suffered alteration in some form, by a injected humour, or randomised. ”</p>
                        <div class="rating">
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                        </div>
                    </div>
                </div>
                <!-- End Tastimonial Card  -->

                <!-- Start Tastimonial Card  -->
                <div class="testimonial-card-box">
                    <div class="inner">
                        <div class="client-info">
                            <div class="thumbnail">
                                <img src="assets/images/testimonial/testimonial-04/client-01.png" alt="Client Images">
                            </div>
                            <div class="content">
                                <h6 class="title">Mark Ronson</h6>
                                <span class="designation">Digital Marketer</span>
                            </div>
                        </div>
                        <p class="description">“ There are many variations of passages of Lorem Ipsum available, but the
                            majority on have suffered alteration in some form, by a injected humour, or randomised. ”</p>
                        <div class="rating">
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                        </div>
                    </div>
                </div>
                <!-- End Tastimonial Card  -->

            </div>

            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-image shape-image-1">
                    <img src="assets/images/shapes/shape-23.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-2">
                    <img src="assets/images/shapes/shape-14-02.png" alt="Shape Thumb" />
                </div>
            </div>

        </div>
    </div>
    <!-- End Testimonial Area  -->

    <div class="eduvibe-home-two-counter edu-counterup-area counterup-wrapper-1 edu-section-gapBottom bg-color-white">
        <!-- Start Counterup Area  -->
        <div class="container eduvibe-animated-shape">
            <div class="row gy-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-5 pr--75 pr_md--0 pr_sm--0">
                        <!-- Start Single Counterup  -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="edu-counterup">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="assets/images/icons/winner-04.png" alt="Icons Images">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="{{$counts['instructors']}}">00</span>
                                        </h3>
                                        <span>Instructors</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counterup  -->

                        <!-- Start Single Counterup  -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="edu-counterup">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="assets/images/icons/winner-05.png" alt="Icons Images">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="{{$counts['coursesAndVideos']}}">00</span>
                                        </h3>
                                        <span>Courses & Video</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counterup  -->

                        <!-- Start Single Counterup  -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="edu-counterup">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="assets/images/icons/winner-06.png" alt="Icons Images">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="{{$counts['enrolledStudents']}}">00</span>
                                        </h3>
                                        <span>Enrolled Students</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counterup  -->

                        <!-- Start Single Counterup  -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="edu-counterup">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="assets/images/icons/winner-07.png" alt="Icons Images">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="{{$counts['users']}}">00</span>
                                        </h3>
                                        <span>Users</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counterup  -->

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-us-2">
                        <div class="inner">
                            <div class="section-title text-left" data-sal-delay="150" data-sal="slide-up"
                                data-sal-duration="800">
                                <span class="pre-title" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">Why Choose Us</span>
                                <h3 class="title">Creating A Community Of Life Long Learners</h3>
                            </div>
                            <p class="description mt--40 mb--30">There are many variations of passages of the
                                Ipsum available, but the majority have suffered alteration in some form, by
                                injected humour.</p>
                            <div class="feature-style-4">
                                <div class="edu-feature-list" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">
                                    <div class="icon">
                                        <i class="icon-Smile"></i>
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Trusted By Thousands</h6>
                                        <p>There are many variations of passages of the Ipsum available, but the majority
                                            have suffered alteration</p>
                                    </div>
                                </div>

                                <div class="edu-feature-list color-var-2" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">
                                    <div class="icon">
                                        <i class="icon-Support"></i>
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Unlimited Resources With Strong Support</h6>
                                        <p>There are many variations of passages of the Ipsum available, but the majority
                                            have suffered alteration</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-image shape-image-1">
                    <img src="assets/images/shapes/shape-04-01.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-2">
                    <img src="assets/images/shapes/shape-11.png" alt="Shape Thumb" />
                </div>
            </div>
        </div>
        <!-- End Counterup Area  -->
    </div>

    <!-- Start Newsletter Area  -->
    <div class="edu-newsletter-area bg-image newsletter-style-3 edu-section-gap bg-color-primary">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="inner">
                        <div class="section-title text-white text-start" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <span class="pre-title">Let Us Help</span>
                            <h3 class="title">Finding Your Right Courses</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div
                        class="newsletter-right-content d-block d-sm-flex align-items-center justify-content-start justify-content-lg-end">
                        <div class="contact-btn">
                            <a class="edu-btn btn-white" href="#">Get Started Now<i
                                    class="icon-arrow-right-line-right"></i></a>
                        </div>
                        <div class="contact-info">
                            <a href="tel:+728-238-399-200"><i class="icon-phone-line"></i> +728-238-399-200</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Newsletter Area  -->

    {{-- <!-- Start Blog Area  -->
        <div class="eduvibe-home-two-blog edu-blog-area edu-section-gap bg-image">
            <div class="wrapper">
                <div class="container eduvibe-animated-shape">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-12">
                            <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <span class="pre-title">Latest From News</span>
                                <h3 class="title">Get Our Every News & Blog</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row g-5 mt--30">

                        <!-- Start Blog Grid  -->
                        <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="edu-blog blog-type-2 bg-white radius-small">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/post-01/post-01.jpg" alt="Blog Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="status-group">
                                            <a href="#" class="eduvibe-status status-05"><i class="icon-price-tag-3-line"></i> Education</a>
                                        </div>
                                        <h5 class="title"><a href="blog-details.html">Introduction to Javascript for the Beginners</a></h5>
                                        <div class="blog-card-bottom">
                                            <ul class="blog-meta">
                                                <li><i class="icon-calendar-2-line"></i>06 Nov, 2023</li>
                                            </ul>
                                            <div class="read-more-btn">
                                                <a class="btn-transparent" href="blog-details.html">Read More<i class="icon-arrow-right-line-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Blog Grid  -->

                        <!-- Start Blog Grid  -->
                        <div class="col-lg-4 col-md-6 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                            <div class="edu-blog blog-type-2 bg-white radius-small">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/post-01/post-02.jpg" alt="Blog Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="status-group">
                                            <a href="#" class="eduvibe-status status-05"><i class="icon-price-tag-3-line"></i> Education</a>
                                        </div>
                                        <h5 class="title"><a href="blog-details.html">Identity Design for a New Courses Crusader Work</a></h5>
                                        <div class="blog-card-bottom">
                                            <ul class="blog-meta">
                                                <li><i class="icon-calendar-2-line"></i>06 Nov, 2023</li>
                                            </ul>
                                            <div class="read-more-btn">
                                                <a class="btn-transparent" href="blog-details.html">Read More<i class="icon-arrow-right-line-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Blog Grid  -->

                        <!-- Start Blog Grid  -->
                        <div class="col-lg-4 col-md-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            <div class="edu-blog blog-type-2 bg-white radius-small">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/post-01/post-03.jpg" alt="Blog Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="status-group">
                                            <a href="#" class="eduvibe-status status-05"><i class="icon-price-tag-3-line"></i> Education</a>
                                        </div>
                                        <h5 class="title"><a href="blog-details.html">Grow Your Students Base With Free Courses</a></h5>
                                        <div class="blog-card-bottom">
                                            <ul class="blog-meta">
                                                <li><i class="icon-calendar-2-line"></i>06 Nov, 2023</li>
                                            </ul>
                                            <div class="read-more-btn">
                                                <a class="btn-transparent" href="blog-details.html">Read More<i class="icon-arrow-right-line-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Blog Grid  -->

                    </div>

                    <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                        <div class="shape-image shape-image-1">
                            <img src="assets/images/shapes/shape-13-06.png" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-3">
                            <img src="assets/images/shapes/shape-13-05.png" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-4">
                            <img src="assets/images/shapes/shape-25.png" alt="Shape Thumb" />
                        </div>
                    </div>

                </div>

                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-2">
                        <img src="assets/images/shapes/shape-24.png" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Area  --> --}}


@endsection

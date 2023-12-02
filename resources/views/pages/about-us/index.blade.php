@extends('layouts.master')

@section('title', 'UniVerse')

@section('content')


    <div class="main-wrapper">

        <div class=" eduvibe-home-four-about edu-about-area about-style-2 edu-section-gap bg-color-white">
            <div class="container eduvibe-animated-shape">
                <div class="row row--50">
                    <div class="col-lg-6">
                        <div class="about-image-gallery">
                            <div class="eduvibe-about-1-img-wrapper">
                                <img class="image-1" src="assets/images/about/about-07/about-image-01.png"
                                    alt="About Images" />
                                <span class="eduvibe-about-blur"><img src="assets/images/about/about-07/about-blur.png"
                                        alt="About Blur" /></span>
                            </div>
                            <div class="circle-image-wrapper">
                                <img class="image-2" src="assets/images/about/about-07/about-image-02.png"
                                    alt="About Images" />
                                <div class="circle-image"><span></span></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="inner mt_md--40 mt_sm--40">
                            <div class="section-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <span class="pre-title">About Us</span>
                                <h3 class="title">Knowledge is power, Information is liberating.</h3>
                            </div>
                            <p class="description mt--40 mt_md--20 mt_sm--20" data-sal-delay="150" data-sal="slide-up"
                                data-sal-duration="800">Our mission is to empower university students by fostering a
                                platform where they not only become instructors, sharing knowledge among peers, but also
                                gain financial empowerment. We aim to cultivate an environment that nurtures student-led
                                learning and enables monetary growth.</p>
                            <h6 class="subtitle mb--20" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                People Love To Learn With Us</h6>
                            <div class="about-feature-list">
                                <div class="row g-5">
                                    <!-- Start Single Feature  -->
                                    <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                        <div class="feature-style-3">
                                            <div class="feature-content">
                                                <h6 class="feature-title">{{$counts['users']}}</h6>
                                                <p class="feature-description">{{$counts['users']}} Registered students.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Feature  -->

                                    <!-- Start Single Feature  -->
                                    <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                        <div class="feature-style-3">
                                            <div class="feature-content">
                                                <h6 class="feature-title">{{$counts['instructors']}}</h6>
                                                <p class="feature-description">{{$counts['instructors']}} Instructors.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Feature  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="assets/images/shapes/shape-11-05.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="assets/images/shapes/shape-08-01.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-3">
                        <img src="assets/images/shapes/shape-30.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape shape-1"><span class="shape-dot"></span></div>
                </div>
            </div>
        </div>

        <div class="eduvibe-about-us-one-service edu-service-area edu-section-gapBottom bg-color-white service-bg-position">
            <div class="container eduvibe-animated-shape">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <span class="pre-title">What We Offer</span>
                            <h3 class="title">Learn New Skills When And <br /> Where You Like</h3>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--20">

                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-2 card-bg-1">
                            <div class="inner">
                                <div class="icon">
                                    <a href="#">
                                        <img src="assets/images/icons/offer-icon-01.png" alt="Service Images">
                                    </a>
                                    <div class="shape-list">
                                        <img class="shape shape-1" src="assets/images/icons/service-icon-01.png"
                                            alt="Shape Images">
                                        <img class="shape shape-2" src="assets/images/icons/service-icon-02.png"
                                            alt="Shape Images">
                                        <img class="shape shape-3" src="assets/images/icons/service-icon-03.png"
                                            alt="Shape Images">
                                    </div>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a >Remote Learning</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="200" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="service-card service-card-2 card-bg-2">
                            <div class="inner">
                                <div class="icon">
                                    <a href="#">
                                        <img src="assets/images/icons/offer-icon-02.png" alt="Service Images">
                                    </a>
                                    <div class="shape-list">
                                        <img class="shape shape-1" src="assets/images/icons/service-icon-01.png"
                                            alt="Shape Images">
                                        <img class="shape shape-2" src="assets/images/icons/service-icon-02.png"
                                            alt="Shape Images">
                                        <img class="shape shape-3" src="assets/images/icons/service-icon-03.png"
                                            alt="Shape Images">
                                    </div>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a>Awesome Tutors</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->

                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="300" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="service-card service-card-2 card-bg-4">
                            <div class="inner">
                                <div class="icon">
                                    <a href="#">
                                        <img src="assets/images/icons/offer-icon-04.png" alt="Service Images">
                                    </a>
                                    <div class="shape-list">
                                        <img class="shape shape-1" src="assets/images/icons/service-icon-01.png"
                                            alt="Shape Images">
                                        <img class="shape shape-2" src="assets/images/icons/service-icon-02.png"
                                            alt="Shape Images">
                                        <img class="shape shape-3" src="assets/images/icons/service-icon-03.png"
                                            alt="Shape Images">
                                    </div>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a>Assignments and homeworks</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->
                </div>

                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="assets/images/shapes/shape-04-03.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="assets/images/shapes/shape-02-07.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-3">
                        <img src="assets/images/shapes/shape-15.png" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Choose Us Area  -->
        <div class="edu-choose-us-area-one choose-us-style-1 edu-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="thumbnail" data-sal-delay="150" data-sal="fade" data-sal-duration="800"><img
                                src="assets/images/about/about-03/choose-us-image-01.png" alt="Choose Us Images" /></div>
                    </div>
                    <div class="col-xl-6 col-lg-6 offset-xl-1">
                        <div class="inner mt_md--40 mt_sm--40">
                            <div class="section-title text-start" data-sal-delay="150" data-sal="slide-up"
                                data-sal-duration="800">
                                <span class="pre-title">Why You Will Choose Guidence</span>
                                <h3 class="title">Creating A Community Of Life Long Learners</h3>
                            </div>

                            <div class="feature-style-2">
                                <div class="single-feature" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">
                                    <div class="icon">
                                        <i class="icon-award-fill"></i>
                                    </div>
                                    <div class="content">
                                        <h6 class="feature-title">{{$counts['courses']}} Courses</h6>
                                    </div>
                                </div>
                                <div class="single-feature" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">
                                    <div class="icon">
                                        <i class="icon-video-fill"></i>
                                    </div>
                                    <div class="content">
                                        <h6 class="feature-title">{{$counts['videos']}} Videos</h6>
                                    </div>
                                </div>
                                <div class="single-feature" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">
                                    <div class="icon">
                                        <i class="icon-user-fill"></i>
                                    </div>
                                    <div class="content">
                                        <h6 class="feature-title">{{$counts['instructors']}} Expert Instructors</h6>
                                    </div>
                                </div>
                                <div class="single-feature" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">
                                    <div class="icon">
                                        <i class="icon-flag-fill"></i>
                                    </div>
                                    <div class="content">
                                        <h6 class="feature-title">Big Student Community</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="read-more-btn mt--60" data-sal-delay="150" data-sal="slide-up"
                                data-sal-duration="800">
                                <a class="edu-btn" href="{{route('go-courses')}}">Explore Courses<i
                                        class="icon-arrow-right-line-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Choose Us Area  -->

        <!-- Start Team Area  -->
        <div
            class="eduvibe-about-one-team edu-team-area edu-section-gap team-area-shape-position bg-image bg-image--8 paralax-area">
            <div class="wrapper">
                <div class="container eduvibe-animated-shape">
                    <div class="row g-5">
                        <div class="col-lg-12">
                            <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up"
                                data-sal-duration="800">
                                <span class="pre-title">Skilled Instructor</span>
                                <h3 class="title">Introduce Our Instructors</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row row--20">
                        <!-- Start Instructor Grid  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--45" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="edu-instructor-grid edu-instructor-1 edu-instructor-1">
                                <div class="edu-instructor">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a>
                                                <img src="{{asset('images/Omarmig.jpg')}}"
                                                    alt="team images">
                                            </a>
                                        </div>
                                        <div class="team-share-info">
                                            <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                            <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                            <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="edu-instructor-info">
                                    <h5 class="title"><a>Omar Migdady</a></h5>
                                    <span class="desc">Computer Science</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Instructor Grid  -->

                        <!-- Start Instructor Grid  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--45" data-sal-delay="200" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="edu-instructor-grid edu-instructor-1">
                                <div class="edu-instructor">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a>
                                                <img src="{{asset('images/MjdMalkawi.jpg')}}"
                                                    alt="team images">
                                            </a>
                                        </div>
                                        <div class="team-share-info">
                                            <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                            <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                            <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="edu-instructor-info">
                                    <h5 class="title"><a>Mjd Malkawi</a></h5>
                                    <span class="desc">Computer Engineering</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Instructor Grid  -->

                        <!-- Start Instructor Grid  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--45" data-sal-delay="250" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="edu-instructor-grid edu-instructor-1">
                                <div class="edu-instructor">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a>
                                                <img src="{{asset('images/ahmadtmtm.jpg')}}"
                                                    alt="team images">
                                            </a>
                                        </div>
                                        <div class="team-share-info">
                                            <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                            <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                            <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="edu-instructor-info">
                                    <h5 class="title"><a>Ahmad Tamimi</a></h5>
                                    <span class="desc">Maths</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Instructor Grid  -->

                        <!-- Start Instructor Grid  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--45" data-sal-delay="300" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="edu-instructor-grid edu-instructor-1">
                                <div class="edu-instructor">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a>
                                                <img src="{{asset('images/yousufHaf.jpg')}}"
                                                    alt="team images">
                                            </a>
                                        </div>
                                        <div class="team-share-info">
                                            <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                            <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                            <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="edu-instructor-info">
                                    <h5 class="title"><a>Yousuf Hafnawi</a></h5>
                                    <span class="desc">Computer Engineering</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Instructor Grid  -->
                    </div>

                    <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                        <div class="shape-image shape-image-1">
                            <img src="assets/images/shapes/shape-08-02.png" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-3">
                            <img src="assets/images/shapes/shape-16-01.png" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-4">
                            <img src="assets/images/shapes/shape-04-02.png" alt="Shape Thumb" />
                        </div>
                    </div>
                </div>
                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-2">
                        <img src="assets/images/shapes/shape-24-02.png" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div>
        <!-- End Team Area  -->

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
                                <img src="{{ asset('images/Omarmig.jpg') }}" alt="Client Images">
                            </div>
                            <div class="content">
                                <h6 class="title">Omar migdady</h6>
                                <span class="designation">Computer Science</span>
                            </div>
                        </div>
                        <p class="description">
                            Im glad the im an instructor on this great platform, ive learned so much through teaching
                            students.
                        </p>
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
                                <img src="{{ asset('images/QasemQZ.jpg') }}" alt="Client Images">
                            </div>
                            <div class="content">
                                <h6 class="title">Qasem Alzoubi</h6>
                                <span class="designation">Computer Science</span>
                            </div>
                        </div>
                        <p class="description">
                            Glad that this website exists, it was a must for all university students in Jordan
                        </p>
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
                                <img src="{{ asset('images/MohammadGHZ.jpg') }}" alt="Client Images">
                            </div>
                            <div class="content">
                                <h6 class="title">Mohammad Ghzawi</h6>
                                <span class="designation">Agricultural Engineering</span>
                            </div>
                        </div>
                        <p class="description">
                            This website helped me through my university journey, im glad for all the instructors who i
                            learned a lot from
                        </p>
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
                                <img src="{{ asset('images/yousufHaf.jpg') }}" alt="Client Images">
                            </div>
                            <div class="content">
                                <h6 class="title">Yousuf Hafnawi</h6>
                                <span class="designation">Computer Engineering</span>
                            </div>
                        </div>
                        <p class="description">
                            This site solved my issue of rewatching university lectures, making learning more accessible and
                            convenient for me.
                        </p>
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
                                <img src="{{ asset('images/MjdMalkawi.jpg') }}" alt="Client Images">
                            </div>
                            <div class="content">
                                <h6 class="title">Mjd Malkawi</h6>
                                <span class="designation">Computer Engineering</span>
                            </div>
                        </div>
                        <p class="description">
                            I love the idea how this website is designed for only for university students
                        </p>
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
                                <img src="{{ asset('images/hashemKhazaleh.jpg') }}" alt="Client Images">
                            </div>
                            <div class="content">
                                <h6 class="title">Hashem Khazaleh</h6>
                                <span class="designation">Computer Engineeing</span>
                            </div>
                        </div>
                        <p class="description">
                            Great website!, I'd definitely recommend it for my classmates
                        </p>
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

    </div>

@endsection

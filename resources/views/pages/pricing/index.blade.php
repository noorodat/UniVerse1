
@extends('layouts.master')

@section('title', 'Login')

@section('content')



        <div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
            <div class="container eduvibe-animated-shape">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-inner text-start">
                            <div class="page-title">
                                <h3 class="title">Pricing Plan</h3>
                            </div>
                            <nav class="edu-breadcrumb-nav">
                                <ol class="edu-breadcrumb d-flex justify-content-start liststyle">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="separator"><i class="ri-arrow-drop-right-line"></i></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pricing Plan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                        <div class="shape-image shape-image-1">
                            <img src="assets/images/shapes/shape-11-07.png" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-2">
                            <img src="assets/images/shapes/shape-01-02.png" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-3">
                            <img src="assets/images/shapes/shape-03.png" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-4">
                            <img src="assets/images/shapes/shape-13-12.png" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-5">
                            <img src="assets/images/shapes/shape-36.png" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-6">
                            <img src="assets/images/shapes/shape-05-07.png" alt="Shape Thumb" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="edu-pricing-area eduvibe-pricing-plan-page edu-section-gap bg-image bg-image--26">
            <div class="container eduvibe-animated-shape">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-6">
                        <div class="section-title text-start" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="pre-title">Pricing Plan</span>
                            <h3 class="title">Choose Your Pricing Plan</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="pricing-billing-duration">
                            <ul>
                                <li class="nav-item">
                                    <button class="nav-link active" id="yearly-plan-btn" type="button">Yearly</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="monthly-plan-btn" type="button">Monthly</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row g-5 mt--20">

                    <!-- Start Pricing Table  -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="pricing-table">
                            <div class="pricing-header">
                                <h3 class="title">Basic Plan</h3>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">$15.99</span>
                                        <span class="duration">/yearly</span>
                                    </div>
                                    <div class="monthly-pricing">
                                        <span class="amount">$29.99</span>
                                        <span class="duration">/monthly</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-item">
                                    <li><i class="icon-checkbox-circle-line"></i> Unlimited Access Courses</li>
                                    <li><i class="icon-checkbox-circle-line"></i> Certificate After Completion</li>
                                    <li><i class="icon-checkbox-circle-line"></i> High Resolution Videos</li>
                                    <li><i class="icon-checkbox-circle-line"></i> 24/7 Dedicated Support</li>
                                    <li><i class="icon-checkbox-circle-line"></i> Interactive practice sessions</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a class="edu-btn btn-dark" href="#">Buy This Plan<i class="icon-arrow-right-line-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Pricing Table  -->

                    <!-- Start Pricing Table  -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                        <div class="pricing-table active">
                            <div class="pricing-header">
                                <div class="edu-badge"><span>Popular</span></div>
                                <h3 class="title">Standard Plan</h3>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">$25.99</span>
                                        <span class="duration">/yearly</span>
                                    </div>
                                    <div class="monthly-pricing">
                                        <span class="amount">$39.99</span>
                                        <span class="duration">/monthly</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-item">
                                    <li><i class="icon-checkbox-circle-line"></i> Unlimited Access Courses</li>
                                    <li><i class="icon-checkbox-circle-line"></i> Certificate After Completion</li>
                                    <li><i class="icon-checkbox-circle-line"></i> High Resolution Videos</li>
                                    <li><i class="icon-checkbox-circle-line"></i> 24/7 Dedicated Support</li>
                                    <li><i class="icon-checkbox-circle-line"></i> Lifetime Access All Courses</li>
                                    <li><i class="icon-checkbox-circle-line"></i> Excercise Files & Notes</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a class="edu-btn" href="#">Buy This Plan<i class="icon-arrow-right-line-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Pricing Table  -->

                    <!-- Start Pricing Table  -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        <div class="pricing-table">
                            <div class="pricing-header">
                                <h3 class="title">Premium Plan</h3>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">$35.99</span>
                                        <span class="duration">/yearly</span>
                                    </div>
                                    <div class="monthly-pricing">
                                        <span class="amount">$49.99</span>
                                        <span class="duration">/monthly</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-item">
                                    <li><i class="icon-checkbox-circle-line"></i> Unlimited Access Courses</li>
                                    <li><i class="icon-checkbox-circle-line"></i> Certificate After Completion</li>
                                    <li><i class="icon-checkbox-circle-line"></i> High Resolution Videos</li>
                                    <li><i class="icon-checkbox-circle-line"></i> 24/7 Dedicated Support</li>
                                    <li><i class="icon-checkbox-circle-line"></i> Lifetime Access All Courses</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a class="edu-btn btn-dark" href="#">Buy This Plan<i class="icon-arrow-right-line-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Pricing Table  -->
                </div>
            </div>
        </div>

        @endsection

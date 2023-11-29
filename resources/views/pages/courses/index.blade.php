@extends('layouts.master')

@section('title', 'UniVerse')

@section('content')

<div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-start">
                    <div class="page-title">
                        <h3 class="title">{{$department->title}} Courses</h3>
                    </div>
                    <nav class="edu-breadcrumb-nav">
                        <ol class="edu-breadcrumb d-flex justify-content-start liststyle">
                            <li class="breadcrumb-item"><a href="{{route('go-home')}}">Home</a></li>
                            <li class="separator"><i class="ri-arrow-drop-right-line"></i></li>
                            <li class="breadcrumb-item active" aria-current="page">Course</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-image shape-image-1">
                    <img src="/assets/images/shapes/shape-11-07.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-2">
                    <img src="/assets/images/shapes/shape-01-02.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-3">
                    <img src="/assets/images/shapes/shape-03.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-4">
                    <img src="/assets/images/shapes/shape-13-12.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-5">
                    <img src="/assets/images/shapes/shape-36.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-6">
                    <img src="/assets/images/shapes/shape-05-07.png" alt="Shape Thumb" />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="edu-course-area edu-section-gap bg-color-white">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 order-2 oder-lg-1">
                <aside class="edu-course-sidebar">
                    <!-- Start Widget Wrapper  -->
                    <div class="edu-course-widget widget-shortby">
                        <div class="inner">
                            <h5 class="widget-title">Sort By</h5>
                            <div class="content">
                                <div class="edu-form-check">
                                    <input type="radio" id="short-check1" name="courseDateSort">
                                    <label for="short-check1">Newest</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="radio" id="short-check2" name="courseDateSort">
                                    <label for="short-check2">Oldest</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="radio" id="short-check3" name="courseDateSort">
                                    <label for="short-check3">Popular Courses</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget Wrapper  -->

                    <!-- Start Widget Wrapper  -->
                    <div class="edu-course-widget widget-category mt--40">
                        <div class="inner">
                            <h5 class="widget-title">Departments</h5>
                            <div class="content">
                                @foreach ($departments as $department)
                                <div class="edu-form-check">
                                    <input type="checkbox" id="cat-check{{$department->id}}">
                                    <label for="cat-check{{$department->id}}">{{$department->title}}<span>({{$department->number_of_courses}})</span></label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- End Widget Wrapper  -->

                    <!-- Start Widget Wrapper  -->
                    <div class="edu-course-widget widget-shortby mt--40">
                        <div class="inner">
                            <h5 class="widget-title">Price</h5>
                            <div class="content">
                                <div class="edu-form-check">
                                    <input type="radio" id="price-check1" name="coursePriceSort">
                                    <label for="price-check1">All Prices</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="radio" id="price-check2" name="coursePriceSort">
                                    <label for="price-check2">Price: Low to High</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="radio" id="price-check3" name="coursePriceSort">
                                    <label for="price-check3">Price: High to Low</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="radio" id="price-check4" name="coursePriceSort">
                                    <label for="price-check4">Free Paid</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget Wrapper  -->

                    <!-- Start Widget Wrapper  -->
                    <div class="edu-course-widget widget-shortby mt--40">
                        <div class="inner">
                            <h5 class="widget-title">Sort By Rating</h5>
                            <div class="content">
                                <div class="edu-form-check">
                                    <input type="checkbox" id="rating-check1">
                                    <label for="rating-check1">
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                    </label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="rating-check2">
                                    <label for="rating-check2">
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                    </label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="rating-check3">
                                    <label for="rating-check3">
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                    </label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="rating-check4">
                                    <label for="rating-check4">
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                    </label>
                                </div>

                                <div class="edu-form-check">
                                    <input type="checkbox" id="rating-check5">
                                    <label for="rating-check5">
                                        <span class="on icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End Widget Wrapper  -->

                </aside>
            </div>
            <div class="col-lg-8 order-1 oder-lg-2">
                <div class="row g-5">
                    @foreach ($courses as $course)
                                            <!-- Start Single Card  -->
                    <div class="col-12 col-sm-12 col-xl-6 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-card card-type-1 radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="{{route("course.show", $course)}}">
                                        <img class="w-100" src="{{ asset($course->image) }}" alt="{{$course->title}} image">
                                    </a>
                                    {{-- <div class="wishlist-top-right">
                                        <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                    </div> --}}
                                </div>
                                <div class="content">
                                    <ul class="edu-meta meta-01">
                                        <li><i class="icon-file-list-4-line"></i>{{$course->number_of_lessons}} Lessons</li>
                                        <li><i class="icon-time-line"></i>{{$course->duration}} Hours</li>
                                    </ul>
                                    <h6 class="title"><a href="{{route("course.show", $course)}}">{{$course->title}}</a>
                                    </h6>
                                    <div class="edu-rating rating-default">
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
                                        <span class="rating-count">(0 Review)</span>
                                    </div>
                                    <div class="card-bottom">
                                        <div class="price-list price-style-03">
                                            <div class="price current-price">${{$course->price}}</div>
                                        </div>
                                        <ul class="edu-meta meta-01">
                                            <li><i class="icon-account-circle-line"></i>0 Students</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-lg-12 mt--60">
                        <nav>
                            <ul class="edu-pagination">
                                <li><a href="#"><i class="ri-arrow-drop-left-line"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">8</a></li>
                                <li><a href="#"><i class="ri-arrow-drop-right-line"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        
@endsection
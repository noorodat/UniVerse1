@extends('layouts.master')

@section('title', 'UniVerse')

@section('content')
        <div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
            <div class="container eduvibe-animated-shape">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-inner text-start">
                            <div class="page-title">
                                <h3 class="title">{{$course->title}} Course Details</h3>
                            </div>
                            <nav class="edu-breadcrumb-nav">
                                <ol class="edu-breadcrumb d-flex justify-content-start liststyle">
                                    <li class="breadcrumb-item"><a href="{{route('go-home')}}">Home</a></li>
                                    <li class="separator"><i class="ri-arrow-drop-right-line"></i></li>
                                    <li class="breadcrumb-item active" aria-current="page">Course Details</li>
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
        <div class="edu-course-details-area edu-section-gap bg-color-white">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-8 col-lg-7">
                        <div class="course-details-content">
                            <div class="content-top">
                                <div class="author-meta">
                                    <div class="author-thumb">
                                        <a href="instructor-profile.html">
                                            <img src="{{ asset($course->instructor->user->image) }}" alt="Author Images">
                                            <span class="author-title">By {{$course->instructor->user->name}}</span>
                                        </a>
                                    </div>
                                </div>
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
                            </div>

                            <h3 class="title">{{$course->title}}</h3>
                            <a href="{{route('go-add-cousre-content', $course)}}" class="edu-btn btn-bg-alt w-100 mb-2 text-center">Add new topic</a>
                            <ul class="edu-course-tab nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true">Overview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum" type="button" role="tab" aria-controls="curriculum" aria-selected="false">Curriculum (Edit)</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="instructor-tab" data-bs-toggle="tab" data-bs-target="#instructor" type="button" role="tab" aria-controls="instructor" aria-selected="false">Instructor</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Reviews</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                    <div class="course-tab-content">
                                        <h5>Course Description</h5>
                                        <p>{{$course->description}}</p>
                                    </div>
                                </div>
                                @foreach ($topicsWithMaterials as $topicWithMaterials)
                                <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                                    <div class="course-tab-content">
                                        <div class="edu-accordion-02" id="accordionExample1">
                                            <form action="">
                                                <div class="edu-accordion-item">
                                                    @foreach ($topicsWithMaterials as $topicTitle => $topicCollection)
                                                    <div class="edu-accordion-header" id="headingOne">
                                                        <button class="edu-accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            {{$topicTitle}}
                                                        </button>
                                                    </div>
                                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
                                                        <a href="{{route('go-add-content-to-topic', ['course' => $course, 'courseTopic' => $topicTitle])}}" class="edu-btn btn-bg-alt w-100 mb-2 text-center">Add content</a>
                                                        <div class="edu-accordion-body">
                                                            <ul>
                                                                @foreach ($topicCollection as $collection)
                                                                @if ($collection->file_name != NULL)
                                                                <li>
                                                                    <div class="text">
                                                                        <i class="icon-draft-line"></i>
                                                                        {{$collection->file_name}}
                                                                    </div>
                                                                    @if (!$isEnrolled)
                                                                    <div class="icon d-flex" style="cursor: pointer">
                                                                        <a class="p-2" href="{{ route('course.edit', $course->id) }}?topicTitle={{ $topicTitle }}&collection={{ $collection->file }}&file_name={{$collection->file_name}}">
                                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                                        </a>
                                                                        <form enctype="multipart/form-data" method="POST" action="{{ route('delete-course-content', $collection->id) }}">
                                                                            @csrf
                                                                            <button type="submit" style="border: none; outline: none; background:white" class="p-2">
                                                                                <i class="fa-solid fa-trash text-danger"></i>                                                                        
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                    @endif
                                                                </li>
                                                                @endif
                                                                @if ($collection->video_name != NULL)
                                                                <li>
                                                                    <div class="text">
                                                                        <i class="fa-solid fa-video"></i>
                                                                        {{$collection->video_name}}
                                                                    </div>
                                                                    @if (!$isEnrolled)
                                                                    <div class="icon" style="cursor: pointer">
                                                                        <a class="p-2" href="{{ route('course.edit', $course->id) }}?topicTitle={{ $topicTitle }}&collection={{ $collection->video }}&file_name={{$collection->video_name}}">
                                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                                        </a>
                                                                        <form enctype="multipart/form-data" method="POST" action="{{ route('delete-course-content', $collection->id) }}">
                                                                            @csrf
                                                                            <button type="submit" style="border: none; outline: none; background:white" class="p-2">
                                                                                <i class="fa-solid fa-trash text-danger"></i>                                                                        
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                    @endif
                                                                </li>
                                                                @endif
                                                                @endforeach
                                                            </ul>
                                                            
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                                    <div class="course-tab-content">
                                        <div class="course-author-wrapper">
                                            <div class="thumbnail w-50">
                                                <img src="{{ asset($course->instructor->user->image) }}" alt="Author Images">
                                            </div>
                                            <div class="author-content">
                                                <h6 class="title">
                                                    <a href="instructor-profile.html">{{$course->instructor->user->name}}</a>
                                                </h6>
                                                <span class="subtitle">{{$course->instructor->user->major}}</span>
                                                <ul class="social-share border-style">
                                                    <li><a href="#"><i class="icon-Fb"></i></a></li>
                                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                                    <li><a href="#"><i class="icon-Pinterest"></i></a></li>
                                                    <li><a href="#"><i class="icon-Twitter"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                    <div class="course-tab-content">
                                        <div class="row row--30">
                                            <div class="col-lg-4">
                                                <div class="rating-box">
                                                    <div class="rating-number">5.0</div>
                                                    <div class="rating">
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                    </div>
                                                    <span>(25 Review)</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="review-wrapper">

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            5 <i class="icon-Star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">1</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            4 <i class="icon-Star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">0</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            3 <i class="icon-Star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">0</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            2 <i class="icon-Star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">0</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            1 <i class="icon-Star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">0</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-wrapper pt--40">
                                            <div class="section-title">
                                                <h5 class="mb--25">Reviews</h5>
                                            </div>
                                            <div class="edu-comment">
                                                <div class="thumbnail">
                                                    <img src="/assets/images/course/student-review/student-1.png" alt="Comment Images">
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-top">
                                                        <h6 class="title">Elen Saspita</h6>
                                                        <div class="rating">
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                        </div>
                                                    </div>
                                                    <span class="subtitle">“ Outstanding Course ”</span>
                                                    <p>As Thomas pointed out, Chegg’s survey appears more like a scorecard that details obstacles and challenges that the current university undergraduate student population is going through in their universities and countries.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-5">
                        <div class="eduvibe-sidebar course-details-sidebar">
                            <div class="d-flex gap-1 read-more-btn mt--30">
                                <a href="{{route('go-edit-cousre-preview', $course)}}" class="edu-btn btn-bg-alt w-100   text-center">Edit course</a>
                            </div>
                            <div class="inner">
                                <div class="eduvibe-widget">
                                    <div class="video-area">
                                        <div class="thumbnail video-popup-wrapper">
                                            <img class="radius-small w-100" src="{{ asset($course->image) }}" alt="Course Images">
                                            <a href="{{$previewType == 'youtube' ? $course->preview_video : asset($course->preview_video)}}" class="video-play-btn position-to-top video-popup-activation">
                                                <span class="play-icon course-details-video-popup"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="eduvibe-widget-details mt--35">
                                        <div class="widget-content">
                                            <ul>
                                                <li><span><i class="icon-time-line"></i> Duration</span><span>{{$course->duration}} Hours</span></li>

                                                <li><span><i class="icon-user-2"></i> Enrolled</span><span>0</span></li>

                                                <li><span><i class="icon-draft-line"></i> Lessons</span><span>{{$course->number_of_lessons}}</span></li>

                                                <li><span><i class="icon-user-2-line_tie"></i> Instructor</span><span>{{$course->instructor->user->name}}</span></li>
                                            </ul>
                                            @if ($isEnrolled)
                                            <div class="read-more-btn mt--45">
                                                <a href="{{route('show-unlocked-course', $course)}}" class="edu-btn btn-bg-alt w-100 text-center">Show content</a>
                                            </div>
                                            @else
                                            <div class="read-more-btn mt--45">
                                                <a class="edu-btn btn-bg-alt w-100 text-center">Price: ${{$course->price}}</a>
                                            </div>
                                            <div class="read-more-btn mt--30">
                                                <a class="edu-btn btn-bg-alt w-100 text-center">This course is Yours</a>
                                            </div>
                                            <div class="read-more-btn mt--15">
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="edu-course-wrapper pt--65">
                            <div class="section-title text-start mb--20">
                                <span class="pre-title">My Courses</span>
                                <h3 class="title">Courses I published</h3>
                            </div>

                            <div class="mt--40 edu-slick-button slick-activation-wrapper eduvibe-course-one-carousel eduvibe-course-details-related-course-carousel">
                                @foreach ($relatedCourses as $course)
                                                                    <div class="single-slick-card">
                                    <div class="edu-card card-type-3 radius-small">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="course-details.html">
                                                    <img class="w-100" src="{{ asset($course->image) }}" alt="Course Thumb">
                                                </a>
                                                {{-- <div class="wishlist-top-right">
                                                    <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                                </div> --}}
                                                <div class="top-position status-group left-bottom">
                                                    <span class="eduvibe-status status-03">{{$course->department->title}}</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="card-top">
                                                    <div class="author-meta">
                                                        <div class="author-thumb">
                                                            <a href="instructor-profile.html">
                                                                <img src="{{ asset($course->instructor->user->image) }}" alt="Author Images">
                                                                <span class="author-title">{{$course->instructor->user->name}}</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="edu-meta meta-02">
                                                        <li><i class="icon-file-list-3-line"></i>{{$course->number_of_lessons}} Lessons</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="{{route('course.show', $course)}}">{{$course->title}}</a>
                                                </h6>
                                                <div class="card-bottom">
                                                    <div class="price-list price-style-02">
                                                        <div class="price current-price">${{$course->price}}</div>
                                                        {{-- <div class="price old-price">$39.99</div> --}}
                                                    </div>
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
                                                        <span class="rating-count">(0)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-hover-action">
                                            <div class="hover-content">
                                                <div class="content-top">
                                                    <div class="top-status-bar">
                                                        <span class="eduvibe-status status-03">{{$course->department->title}}</span>
                                                    </div>
                                                    {{-- <div class="top-wishlist-bar">
                                                        <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                                    </div> --}}
                                                </div>

                                                <h6 class="title"><a href="{{route('course.show', $course)}}">{{$course->title}}</a></h6>

                                                <p class="description" style="word-wrap: break-word;">{{$course->description}}</p>
                                                <div class="price-list price-style-02">
                                                    <div class="price current-price">${{$course->price}}
                                                    {{-- <div class="price old-price">$39.99</div> --}}
                                                </div>

                                                <div class="hover-bottom-content">
                                                    <div class="author-meta">
                                                        <div class="author-thumb">
                                                            <a href="instructor-profile.html">
                                                                <img src="{{ asset($course->instructor->user->image) }}" alt="Author Images">
                                                                <span class="author-title">{{$course->instructor->user->name}}</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="edu-meta meta-02">
                                                        <li><i class="icon-file-list-3-line"></i>{{$course->number_of_lessons}}</li>
                                                    </ul>
                                                </div>
                                                <div class="read-more-btn">
                                                    <a class="edu-btn btn-medium btn-white" href="{{route('course.show', $course)}}">Enroll Now<i class="icon-arrow-right-line-right"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @endsection
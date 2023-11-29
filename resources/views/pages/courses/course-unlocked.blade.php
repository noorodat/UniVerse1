<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rainbowit.net/html/histudy/lesson.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2023 12:15:46 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lesson - Online Courses & Education Bootstrap5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/profile-assets/assets/images/favicon.png">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="/profile-assets/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/profile-assets/assets/css/vendor/slick.css">
    <link rel="stylesheet" href="/profile-assets/assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="/profile-assets/assets/css/plugins/sal.css">
    <link rel="stylesheet" href="/profile-assets/assets/css/plugins/feather.css">
    <link rel="stylesheet" href="/profile-assets/assets/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="/profile-assets/assets/css/plugins/euclid-circulara.css">
    <link rel="stylesheet" href="/profile-assets/assets/css/plugins/swiper.css">
    <link rel="stylesheet" href="/profile-assets/assets/css/plugins/magnify.css">
    <link rel="stylesheet" href="/profile-assets/assets/css/plugins/odometer.css">
    <link rel="stylesheet" href="/profile-assets/assets/css/plugins/animation.css">
    <link rel="stylesheet" href="/profile-assets/assets/css/plugins/bootstrap-select.min.css">
    <link rel="stylesheet" href="/profile-assets/assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="/profile-assets/assets/css/plugins/magnigy-popup.min.css">
    <link rel="stylesheet" href="/profile-assets/assets/css/plugins/plyr.css">
    <link rel="stylesheet" href="/profile-assets/assets/css/style.css">
</head>


<body class="rbt-header-sticky">

    <div class="rbt-lesson-area bg-color-white">
        <div class="rbt-lesson-content-wrapper">
            <div class="rbt-lesson-leftsidebar">
                <div class="rbt-course-feature-inner rbt-search-activation">
                    <div class="section-title">
                        <h4 class="rbt-title-style-3">Course Content</h4>
                    </div>

                    <div class="lesson-search-wrapper">
                        <form action="#" class="rbt-search-style-1">
                            <input class="rbt-search-active" type="text" placeholder="Search Lesson">
                            <button class="search-btn disabled"><i class="feather-search"></i></button>
                        </form>
                    </div>

                    <hr class="mt--10">

                    <div class="rbt-accordion-style rbt-accordion-02 for-right-content accordion">


                        <div class="accordion" id="accordionExampleb2">

                            @php
                            $collapseIndex = 1;
                        @endphp
                        
                        @foreach ($topicsWithMaterials as $topicTitle => $topicCollection)
                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="headingTwo{{$collapseIndex}}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#collapseTwo{{$collapseIndex}}" aria-controls="collapseTwo{{$collapseIndex}}">
                                        {{$topicTitle}}
                                    </button>
                                </h2>
                                <div id="collapseTwo{{$collapseIndex}}" class="accordion-collapse collapse show" aria-labelledby="headingTwo{{$collapseIndex}}">
                                    <div class="accordion-body card-body">
                                        <ul class="rbt-course-main-content liststyle">
                                            @foreach ($topicCollection as $material)
                                            @if ($material->file_name != null)
                                            <li>
                                                <a href="{{asset($material->file)}}" target="_blank">
                                                    <div class="course-content-left">
                                                        <i class="feather-file"></i>
                                                        <span class="text">
                                                            {{$material->file_name}}
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            @endif
                                            @if ($material->video_name)
                                            <li>
                                                <a onclick="changeCourseVideo(this.href)" class="courseContentVideo" href="{{asset($material->video)}}">
                                                    <div class="course-content-left">
                                                        <i class="feather-play-circle"></i> 
                                                        <span class="text">
                                                            {{$material->video_name}}
                                                        </span>
                                                    </div>
                                                    <div class "course-content-right">
                                                        <span class="min-lable">{{$material->video_duration}}</span>
                                                        {{-- <span class="rbt-check"><i class="feather-check"></i></span> --}}
                                                    </div>
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @php
                                $collapseIndex++;
                            @endphp
                        @endforeach
                        

                        </div>


                    </div>
                </div>
            </div>

            <div class="rbt-lesson-rightsidebar overflow-hidden lesson-video">
                <div class="lesson-top-bar">
                    <div class="lesson-top-left">
                        <div class="rbt-lesson-toggle">
                            <button class="lesson-toggle-active btn-round-white-opacity" title="Toggle Sidebar"><i class="feather-arrow-left"></i></button>
                        </div>
                        <h5>{{$course->title}}</h5>
                    </div>
                    <div class="lesson-top-right">
                        <div class="rbt-btn-close">
                            <a href="course-details.html" title="Go Back to Course" class="rbt-round-btn"><i class="feather-x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="inner">
                    <div class="plyr__video-embed rbtplayer">
                        <video id="mainVideo" width="100%" controls src="{{asset($course->preview_video)}}" allowfullscreen allow="autoplay"></video>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="/profile-assets/assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="/profile-assets/assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="/profile-assets/assets/js/vendor/bootstrap.min.js"></script>
    <!-- sal.js -->
    <script src="/profile-assets/assets/js/vendor/sal.js"></script>
    <script src="/profile-assets/assets/js/vendor/swiper.js"></script>
    <script src="/profile-assets/assets/js/vendor/magnify.min.js"></script>
    <script src="/profile-assets/assets/js/vendor/jquery-appear.js"></script>
    <script src="/profile-assets/assets/js/vendor/odometer.js"></script>
    <script src="/profile-assets/assets/js/vendor/backtotop.js"></script>
    <script src="/profile-assets/assets/js/vendor/isotop.js"></script>
    <script src="/profile-assets/assets/js/vendor/imageloaded.js"></script>

    <script src="/profile-assets/assets/js/vendor/wow.js"></script>
    <script src="/profile-assets/assets/js/vendor/waypoint.min.js"></script>
    <script src="/profile-assets/assets/js/vendor/easypie.js"></script>
    <script src="/profile-assets/assets/js/vendor/text-type.js"></script>
    <script src="/profile-assets/assets/js/vendor/jquery-one-page-nav.js"></script>
    <script src="/profile-assets/assets/js/vendor/bootstrap-select.min.js"></script>
    <script src="/profile-assets/assets/js/vendor/jquery-ui.js"></script>
    <script src="/profile-assets/assets/js/vendor/magnify-popup.min.js"></script>
    <script src="/profile-assets/assets/js/vendor/paralax-scroll.js"></script>
    <script src="/profile-assets/assets/js/vendor/paralax.min.js"></script>
    <script src="/profile-assets/assets/js/vendor/countdown.js"></script>
    <script src="/profile-assets/assets/js/vendor/plyr.js"></script>
    <!-- Main JS -->
    <script src="/profile-assets/assets/js/main.js"></script>
</body>


<!-- Mirrored from rainbowit.net/html/histudy/lesson.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2023 12:15:47 GMT -->
</html>

<script>
    let mainVideo = document.getElementById('mainVideo');
    let allCourseVideos = document.querySelectorAll('a.courseContentVideo');

    function changeCourseVideo(link) {
        mainVideo.src = link;
        mainVideo.load(); // Load the new video source
    }

    // Add click event listeners to all anchor tags with class "courseContentVideo"
    allCourseVideos.forEach(function(videoLink) {
        videoLink.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default link behavior
            changeCourseVideo(videoLink.href);
        });
    });
</script>
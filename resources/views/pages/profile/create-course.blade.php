<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rainbowit.net/html/histudy/create-course.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2023 12:15:47 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Create Course - Online Courses & Education Bootstrap5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/plugins/sal.css">
    <link rel="stylesheet" href="assets/css/plugins/feather.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/plugins/euclid-circulara.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper.css">
    <link rel="stylesheet" href="assets/css/plugins/magnify.css">
    <link rel="stylesheet" href="assets/css/plugins/odometer.css">
    <link rel="stylesheet" href="assets/css/plugins/animation.css">
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/plugins/magnigy-popup.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plyr.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <a class="close_side_menu" href="javascript:void(0);"></a>

    <main class="rbt-main-wrapper">

        <div class="rbt-create-course-area bg-color-white rbt-section-gap">
            <div class="container">
                <div class="row g-5">

                    <div class="col-lg-8">
                        <div class="rbt-accordion-style rbt-accordion-01 rbt-accordion-06 accordion">
                            <div class="accordion" id="tutionaccordionExamplea1">
                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="accOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accCollapseOne" aria-expanded="true" aria-controls="accCollapseOne">Course Info
                                        </button>
                                    </h2>
                                    <div id="accCollapseOne" class="accordion-collapse collapse show" aria-labelledby="accOne" data-bs-parent="#tutionaccordionExamplea1">
                                        <div class="accordion-body card-body">
                                            <!-- Start Course Field Wrapper  -->
                                            <div class="rbt-course-field-wrapper rbt-default-form">
                                                <div class="course-field mb--15">
                                                    <label for="field-1">Course Title</label>
                                                    <input id="field-1" type="text" placeholder="New Course">
                                                    <small class="d-block mt_dec--5"><i class="feather-info"></i> Title should be 30 charecter.</small>
                                                </div>
                                                <div class="course-field mb--15">
                                                    <label for="field-2">Course Slug</label>
                                                    <input id="field-2" type="text" placeholder="new-course">
                                                    <small class="d-block mt_dec--5"><i class="feather-info"></i> Permalink: <a href="https://yourdomain.com/new-course">https://yourdomain.com/new-course</a></small>
                                                </div>

                                                <div class="course-field mb--15">
                                                    <label for="aboutCourse">About Course</label>
                                                    <textarea id="aboutCourse" rows="10"></textarea>
                                                    <small class="d-block mt_dec--5"><i class="feather-info"></i> HTML or plain text allowed, no emoji This field is used for search, so please be descriptive!</small>
                                                </div>

                                                <div class="course-field mb--15 edu-bg-gray">
                                                    <h6>Course Settings</h6>
                                                    <div class="rbt-course-settings-content">
                                                        <div class="row g-5">
                                                            <div class="col-lg-4">
                                                                <div class="advance-tab-button advance-tab-button-1">
                                                                    <ul class="rbt-default-tab-button nav nav-tabs" id="courseSetting" role="tablist">
                                                                        <li class="nav-item" role="presentation">
                                                                            <a href="#" class="active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general" role="tab" aria-controls="general" aria-selected="true">
                                                                                <span>General</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nav-item" role="presentation">
                                                                            <a href="#" id="content-tab" data-bs-toggle="tab" data-bs-target="#content" role="tab" aria-controls="content" aria-selected="false">
                                                                                <span>Content Drip</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="tab-content">
                                                                    <div class="tab-pane fade advance-tab-content-1 active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                                                        <div class="course-field mb--20">
                                                                            <label for="field-3">Maximum
                                                                                Students</label>
                                                                            <div class="pro-quantity">
                                                                                <div class="pro-qty m-0"><input id="field-3" type="text" value="100"></div>
                                                                            </div>
                                                                            <small><i class="feather-info"></i> Number
                                                                                of students that can enrol in this
                                                                                course. Set 0 for no limits.</small>
                                                                        </div>

                                                                        <div class="course-field mb--20">
                                                                            <label for="field-4">Difficulty
                                                                                Level</label>
                                                                            <div class="rbt-modern-select bg-transparent height-45 mb--10">
                                                                                <select class="w-100" id="field-4">
                                                                                    <option>All Levels</option>
                                                                                    <option>Intermediate</option>
                                                                                    <option>Beginner</option>
                                                                                    <option>Advance</option>
                                                                                    <option>Expert</option>
                                                                                </select>
                                                                            </div>
                                                                            <small><i class="feather-info"></i> Course
                                                                                difficulty level</small>
                                                                        </div>

                                                                        <div class="course-field mb--20">
                                                                            <label class="form-check-label d-inline-block" for="flexSwitchCheckDefault">Public
                                                                                Course</label>
                                                                            <div class="form-check form-switch mb--10">
                                                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                                                            </div>
                                                                            <small><i class="feather-info"></i> Make
                                                                                This Course Public. No enrollment
                                                                                required.</small>
                                                                        </div>

                                                                        <div class="course-field mb--20">
                                                                            <label class="form-check-label d-inline-block" for="flexSwitchCheckDefault2">Q&A</label>
                                                                            <div class="form-check form-switch mb--10">
                                                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault2">
                                                                            </div>
                                                                            <small><i class="feather-info"></i> Enable
                                                                                Q&A section for your course</small>
                                                                        </div>
                                                                    </div>

                                                                    <div class="tab-pane fade advance-tab-content-1" id="content" role="tabpanel" aria-labelledby="content-tab">
                                                                        <div class="rbt-content-drip-content">
                                                                            <div class="course-field pb--20">
                                                                                <p class="rbt-checkbox-wrapper mb--5">
                                                                                    <input id="rbt-checkbox-1" name="rbt-checkbox-1" type="checkbox" value="yes">
                                                                                    <label for="rbt-checkbox-1">Enable</label>
                                                                                </p>
                                                                                <small><i class="feather-info"></i>
                                                                                    Enable / Disable content
                                                                                    drip</small>
                                                                            </div>
                                                                            <hr class="rbt-separator m-0">

                                                                            <div class="rbt-course-drip-option pt--20">
                                                                                <h6 class="mb--10">Content Drip Type
                                                                                </h6>
                                                                                <p class="mb--10 b3">You can schedule your
                                                                                    course content using the above
                                                                                    content drip options.</p>
                                                                                <div class="course-drop-option">
                                                                                    <div class="rbt-form-check">
                                                                                        <input class="form-check-input" type="radio" name="rbt-radio" id="rbt-radio-1">
                                                                                        <label class="form-check-label" for="rbt-radio-1"> Schedule
                                                                                            course contents by
                                                                                            date</label>
                                                                                    </div>
                                                                                    <div class="rbt-form-check">
                                                                                        <input class="form-check-input" type="radio" name="rbt-radio" id="rbt-radio-2">
                                                                                        <label class="form-check-label" for="rbt-radio-2"> Content
                                                                                            available after X days from
                                                                                            enrollment</label>
                                                                                    </div>
                                                                                    <div class="rbt-form-check">
                                                                                        <input class="form-check-input" type="radio" name="rbt-radio" id="rbt-radio-3">
                                                                                        <label class="form-check-label" for="rbt-radio-3"> Course
                                                                                            content available
                                                                                            sequentially</label>
                                                                                    </div>
                                                                                    <div class="rbt-form-check">
                                                                                        <input class="form-check-input" type="radio" name="rbt-radio" id="rbt-radio-4">
                                                                                        <label class="form-check-label" for="rbt-radio-4"> Course
                                                                                            content unlocked after
                                                                                            finishing
                                                                                            prerequisites</label>
                                                                                    </div>
                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="course-field mb--15 edu-bg-gray">
                                                    <h6>Course Price</h6>
                                                    <div class="rbt-course-settings-content">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="advance-tab-button advance-tab-button-1">
                                                                    <ul class="rbt-default-tab-button nav nav-tabs" id="coursePrice" role="tablist">
                                                                        <li class="nav-item w-100" role="presentation">
                                                                            <a href="#" class="active" id="paid-tab" data-bs-toggle="tab" data-bs-target="#paid" role="tab" aria-controls="paid" aria-selected="true">
                                                                                <span>Paid</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nav-item w-100" role="presentation">
                                                                            <a href="#" id="free-tab" data-bs-toggle="tab" data-bs-target="#free" role="tab" aria-controls="free" aria-selected="false">
                                                                                <span>Free</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="tab-content">

                                                                    <div class="tab-pane fade advance-tab-content-1 active show" id="paid" role="tabpanel" aria-labelledby="paid-tab">

                                                                        <div class="course-field mb--15">
                                                                            <label for="regularPrice-1">Regular Price ($)</label>
                                                                            <input id="regularPrice-1" type="number" placeholder="$ Regular Price">
                                                                            <small class="d-block mt_dec--5"><i class="feather-info"></i> The Course Price Includes Your Author Fee.</small>
                                                                        </div>

                                                                        <div class="course-field mb--15">
                                                                            <label for="discountedPrice-1">Discounted Price ($)</label>
                                                                            <input id="discountedPrice-1" type="number" placeholder="$ Discounted Price">
                                                                            <small class="d-block mt_dec--5"><i class="feather-info"></i> The Course Price Includes Your Author Fee.</small>
                                                                        </div>

                                                                    </div>


                                                                    <div class="tab-pane fade advance-tab-content-1" id="free" role="tabpanel" aria-labelledby="free-tab">
                                                                        <div class="course-field">
                                                                            <p class="b3">This Course is free for everyone.</p>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="course-field mb--20">
                                                    <h6>Choose Categories</h6>
                                                    <div class="rbt-modern-select bg-transparent height-45 w-100 mb--10">
                                                        <select class="w-100" data-live-search="true" title="Search Course Category. ex. Design, Development, Business" multiple data-size="7" data-actions-box="true" data-selected-text-format="count > 2">
                                                            <option>Web Developer</option>
                                                            <option>App Developer</option>
                                                            <option>Javascript</option>
                                                            <option>React</option>
                                                            <option>WordPress</option>
                                                            <option>jQuery</option>
                                                            <option>Vue Js</option>
                                                            <option>Angular</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="course-field mb--20">
                                                    <h6>Course Thumbnail</h6>
                                                    <div class="rbt-create-course-thumbnail upload-area">
                                                        <div class="upload-area">
                                                            <div class="brows-file-wrapper" data-black-overlay="9">
                                                                <!-- actual upload which is hidden -->
                                                                <input name="createinputfile" id="createinputfile" type="file" class="inputfile" />
                                                                <img id="createfileImage" src="assets/images/others/thumbnail-placeholder.svg" alt="file image">
                                                                <!-- our custom upload button -->
                                                                <label class="d-flex" for="createinputfile" title="No File Choosen">
                                                                    <i class="feather-upload"></i>
                                                                    <span class="text-center">Choose a File</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <small><i class="feather-info"></i> <b>Size:</b> 700x430 pixels, <b>File
                                                        Support:</b> JPG, JPEG, PNG, GIF, WEBP</small>
                                                </div>


                                            </div>
                                            <!-- End Course Field Wrapper  -->
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="accTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accCollapseTwo" aria-expanded="false" aria-controls="accCollapseTwo">
                                            Course Intro Video
                                        </button>
                                    </h2>
                                    <div id="accCollapseTwo" class="accordion-collapse collapse" aria-labelledby="accTwo" data-bs-parent="#tutionaccordionExamplea1">
                                        <div class="accordion-body card-body rbt-course-field-wrapper rbt-default-form">

                                            <div class="course-field mb--20">
                                                <div class="rbt-modern-select bg-transparent height-45 mb--10">
                                                    <select class="w-100" id="field-5">
                                                        <option value="" disabled selected>Select Video Sources</option>
                                                        <option value="youtube">Youtube</option>
                                                        <option value="vimeo">Vimeo</option>
                                                        <option value="local">Local</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="course-field mb--15">
                                                <label for="videoUrl">Add Your Video URL</label>
                                                <input id="videoUrl" type="text" placeholder="Add Your Video URL here.">
                                                <small class="d-block mt_dec--5">Example: <a href="https://www.youtube.com/watch?v=yourvideoid">https://www.youtube.com/watch?v=yourvideoid</a></small>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="accThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accCollapseThree" aria-expanded="false" aria-controls="accCollapseThree">
                                            Course Builder
                                        </button>
                                    </h2>
                                    <div id="accCollapseThree" class="accordion-collapse collapse" aria-labelledby="accThree" data-bs-parent="#tutionaccordionExamplea1">
                                        <div class="accordion-body card-body">
                                            <button class="rbt-btn btn-md btn-gradient hover-icon-reverse" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <span class="icon-reverse-wrapper">
                                                    <span class="btn-text">Add New Topic</span>
                                                <span class="btn-icon"><i class="feather-plus-circle"></i></span>
                                                <span class="btn-icon"><i class="feather-plus-circle"></i></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-item card rbt-course-field-wrapper">
                                    <h2 class="accordion-header card-header" id="accSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accCollapseSix" aria-expanded="false" aria-controls="accCollapseSix">
                                            Additional Information
                                        </button>
                                    </h2>
                                    <div id="accCollapseSix" class="accordion-collapse collapse" aria-labelledby="accSix" data-bs-parent="#tutionaccordionExamplea1">
                                        <div class="accordion-body card-body rbt-course-field-wrapper rbt-default-form row row-15">

                                            <div class="col-lg-6">
                                                <div class="course-field mb--15">
                                                    <label for="startDate">Start Date</label>
                                                    <input type="date" id="startDate" name="startDate">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="course-field mb--15">
                                                    <label for="language">Language</label>
                                                    <div class="rbt-modern-select bg-transparent height-50 mb--10">
                                                        <select class="w-100" data-live-search="true" title="English" multiple data-size="7" data-actions-box="true" data-selected-text-format="count > 2" id="language">
                                                            <option>English</option>
                                                            <option>Bangla</option>
                                                            <option>Japan</option>
                                                            <option>Hindi</option>
                                                            <option>Frence</option>
                                                            <option>Garmani</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="course-field mb--15">
                                                    <label for="whatLearn">Requirements</label>
                                                    <textarea id="whatLearn" rows="5" placeholder="Add your course benefits here."></textarea>
                                                    <small class="d-block mt_dec--5"><i class="feather-info"></i> Enter for per line.</small>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="course-field mb--15">
                                                    <label for="description">Description</label>
                                                    <textarea id="description" rows="5" placeholder="Add your course benefits here."></textarea>
                                                    <small class="d-block mt_dec--5"><i class="feather-info"></i> Enter for per line.</small>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <hr class="mt--10 mb--20">
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="course-field mb--15">
                                                    <label>Total Course Duration</label>
                                                    <div class="row row--15">
                                                        <div class="col-lg-6">
                                                            <input type="number" placeholder="00">
                                                            <small class="d-block mt_dec--5"><i class="feather-info"></i> Hour.</small>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="number" placeholder="00">
                                                            <small class="d-block mt_dec--5"><i class="feather-info"></i> Minute.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <hr class="mt--10 mb--20">
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="course-field mb--15">
                                                    <label for="courseTag">Course Tags</label>
                                                    <textarea id="courseTag" rows="5" placeholder="Add your course tag here."></textarea>
                                                    <small class="d-block mt_dec--5"><i class="feather-info"></i> Maximum of 15 keywords covering features, usage, and styling. Keywords should all be in lowercase and separated by commas. e.g. photography, gallery, modern, jquery, wordpress theme.</small>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <hr class="mt--10 mb--20">
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="course-field mb--15">
                                                    <label for="targeted">Targeted Audience</label>
                                                    <textarea id="targeted" rows="5" placeholder="Add your course tag here."></textarea>
                                                    <small class="d-block mt_dec--5"><i class="feather-info"></i> Specify the target audience that will benefit the most from the course.</small>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="accSeven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accCollapseEight" aria-expanded="false" aria-controls="accCollapseEight">
                                            Certificate Template
                                        </button>
                                    </h2>
                                    <div id="accCollapseEight" class="accordion-collapse collapse" aria-labelledby="accSeven" data-bs-parent="#tutionaccordionExamplea1">
                                        <div class="accordion-body card-body">

                                            <div class="advance-tab-button advance-tab-button-1">
                                                <ul class="rbt-default-tab-button nav nav-tabs" id="myTab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <a href="#" class="active" id="landscape-tab" data-bs-toggle="tab" data-bs-target="#landscape" role="tab" aria-controls="landscape" aria-selected="true">
                                                            <span>Landscape</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a href="#" id="portrait-tab" data-bs-toggle="tab" data-bs-target="#portrait" role="tab" aria-controls="portrait" aria-selected="false">
                                                            <span>Portrait</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="tab-content">

                                                        <div class="tab-pane fade advance-tab-content-1 active show" id="landscape" role="tabpanel" aria-labelledby="landscape-tab">
                                                            <div class="row g-5 mt--10">


                                                                <!-- Start Single Certificate  -->
                                                                <div class="col-lg-4">
                                                                    <div class="certificate-inner rbt-image-checkbox">
                                                                        <input type="radio" id="option1" name="radio-group" value="option1">
                                                                        <label for="option1"><img src="assets/images/icons/certificate-none.svg" alt="Certificate Image"></label>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single Certificate  -->

                                                                <!-- Start Single Certificate  -->
                                                                <div class="col-lg-4">
                                                                    <div class="certificate-inner rbt-image-checkbox">
                                                                        <input type="radio" id="option2" name="radio-group" value="option2">
                                                                        <label for="option2"><img src="assets/images/others/preview-01.png" alt="Certificate Image"></label>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single Certificate  -->

                                                                <!-- Start Single Certificate  -->
                                                                <div class="col-lg-4">
                                                                    <div class="certificate-inner rbt-image-checkbox">
                                                                        <input type="radio" id="option3" name="radio-group" value="option3">
                                                                        <label for="option3"><img src="assets/images/others/preview-02.png" alt="Certificate Image"></label>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single Certificate  -->

                                                                <!-- Start Single Certificate  -->
                                                                <div class="col-lg-4">
                                                                    <div class="certificate-inner rbt-image-checkbox">
                                                                        <input type="radio" id="option4" name="radio-group" value="option4">
                                                                        <label for="option4"><img src="assets/images/others/preview-03.png" alt="Certificate Image"></label>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single Certificate  -->

                                                                <!-- Start Single Certificate  -->
                                                                <div class="col-lg-4">
                                                                    <div class="certificate-inner rbt-image-checkbox">
                                                                        <input type="radio" id="option5" name="radio-group" value="option5">
                                                                        <label for="option5"><img src="assets/images/others/preview-04.png" alt="Certificate Image"></label>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single Certificate  -->

                                                                <!-- Start Single Certificate  -->
                                                                <div class="col-lg-4">
                                                                    <div class="certificate-inner rbt-image-checkbox">
                                                                        <input type="radio" id="option6" name="radio-group" value="option6">
                                                                        <label for="option6"><img src="assets/images/others/preview-05.png" alt="Certificate Image"></label>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single Certificate  -->
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade advance-tab-content-1" id="portrait" role="tabpanel" aria-labelledby="portrait-tab">

                                                            <div class="row g-5 mt--10">

                                                                <!-- Start Single Certificate  -->
                                                                <div class="col-lg-4">
                                                                    <div class="certificate-inner rbt-image-checkbox">
                                                                        <input type="radio" id="optionport1" name="radio-group" value="optionport1">
                                                                        <label for="optionport1"><img src="assets/images/icons/certificate-none-portrait.svg" alt="Certificate Image"></label>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single Certificate  -->

                                                                <!-- Start Single Certificate  -->
                                                                <div class="col-lg-4">
                                                                    <div class="certificate-inner rbt-image-checkbox">
                                                                        <input type="radio" id="optionport2" name="radio-group" value="optionport2">
                                                                        <label for="optionport2"><img src="assets/images/others/preview-port-01.png" alt="Certificate Image"></label>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single Certificate  -->

                                                                <!-- Start Single Certificate  -->
                                                                <div class="col-lg-4">
                                                                    <div class="certificate-inner rbt-image-checkbox">
                                                                        <input type="radio" id="optionport3" name="radio-group" value="optionport3">
                                                                        <label for="optionport3"><img src="assets/images/others/preview-port-02.png" alt="Certificate Image"></label>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single Certificate  -->

                                                                <!-- Start Single Certificate  -->
                                                                <div class="col-lg-4">
                                                                    <div class="certificate-inner rbt-image-checkbox">
                                                                        <input type="radio" id="optionport4" name="radio-group" value="optionport4">
                                                                        <label for="optionport4"><img src="assets/images/others/preview-port-03.png" alt="Certificate Image"></label>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single Certificate  -->

                                                                <!-- Start Single Certificate  -->
                                                                <div class="col-lg-4">
                                                                    <div class="certificate-inner rbt-image-checkbox">
                                                                        <input type="radio" id="optionport5" name="radio-group" value="optionport5">
                                                                        <label for="optionport5"><img src="assets/images/others/preview-port-05.png" alt="Certificate Image"></label>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single Certificate  -->

                                                                <!-- Start Single Certificate  -->
                                                                <div class="col-lg-4">
                                                                    <div class="certificate-inner rbt-image-checkbox">
                                                                        <input type="radio" id="optionport6" name="radio-group" value="optionport6">
                                                                        <label for="optionport6"><img src="assets/images/others/preview-port-06.png" alt="Certificate Image"></label>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single Certificate  -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>

                        <div class="mt--10 row g-5">
                            <div class="col-lg-4">
                                <a class="rbt-btn hover-icon-reverse bg-primary-opacity w-100 text-center" href="course-details.html">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Preview</span>
                                    <span class="btn-icon"><i class="feather-eye"></i></span>
                                    <span class="btn-icon"><i class="feather-eye"></i></span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-lg-8">
                                <a class="rbt-btn btn-gradient hover-icon-reverse w-100 text-center" href="#">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Create Course</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="rbt-create-course-sidebar course-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
                            <div class="inner">
                                <div class="section-title mb--30">
                                    <h4 class="title">Course Upload Tips</h4>
                                </div>
                                <div class="rbt-course-upload-tips">
                                    <ul class="rbt-list-style-1">
                                        <li><i class="feather-check"></i> Set the Course Price option or make it free.
                                        </li>
                                        <li><i class="feather-check"></i> Standard size for the course thumbnail is
                                            700x430.</li>
                                        <li><i class="feather-check"></i> Video section controls the course overview
                                            video.</li>
                                        <li><i class="feather-check"></i> Course Builder is where you create & organize
                                            a course.</li>
                                        <li><i class="feather-check"></i> Add Topics in the Course Builder section to
                                            create lessons, quizzes, and assignments.</li>
                                        <li><i class="feather-check"></i> Prerequisites refers to the fundamental
                                            courses to complete before taking this particular course.</li>
                                        <li><i class="feather-check"></i> Information from the Additional Data section
                                            shows up on the course single page.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Start Modal Area  -->
        <div class="rbt-default-modal modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="rbt-round-btn" data-bs-dismiss="modal" aria-label="Close">
                            <i class="feather-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="inner rbt-default-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 class="modal-title mb--20" id="exampleModalLabel">Add Topic</h5>
                                    <div class="course-field mb--20">
                                        <label for="modal-field-1">Topic Name</label>
                                        <input id="modal-field-1" type="text">
                                        <small><i class="feather-info"></i> Topic titles are displayed publicly wherever required. Each topic may contain one or more lessons, quiz and assignments.</small>
                                    </div>
                                    <div class="course-field mb--20">
                                        <label for="modal-field-2">Topic Summary</label>
                                        <textarea id="modal-field-2"></textarea>
                                        <small><i class="feather-info"></i> Add a summary of short text to prepare students for the activities for the topic. The text is shown on the course page beside the tooltip beside the topic name.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-circle-shape"></div>
                    <div class="modal-footer pt--30">
                        <button type="button" class="rbt-btn btn-border btn-md radius-round-10" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Area  -->
    </main>


    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!-- sal.js -->
    <script src="assets/js/vendor/sal.js"></script>
    <script src="assets/js/vendor/swiper.js"></script>
    <script src="assets/js/vendor/magnify.min.js"></script>
    <script src="assets/js/vendor/jquery-appear.js"></script>
    <script src="assets/js/vendor/odometer.js"></script>
    <script src="assets/js/vendor/backtotop.js"></script>
    <script src="assets/js/vendor/isotop.js"></script>
    <script src="assets/js/vendor/imageloaded.js"></script>

    <script src="assets/js/vendor/wow.js"></script>
    <script src="assets/js/vendor/waypoint.min.js"></script>
    <script src="assets/js/vendor/easypie.js"></script>
    <script src="assets/js/vendor/text-type.js"></script>
    <script src="assets/js/vendor/jquery-one-page-nav.js"></script>
    <script src="assets/js/vendor/bootstrap-select.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.js"></script>
    <script src="assets/js/vendor/magnify-popup.min.js"></script>
    <script src="assets/js/vendor/paralax-scroll.js"></script>
    <script src="assets/js/vendor/paralax.min.js"></script>
    <script src="assets/js/vendor/countdown.js"></script>
    <script src="assets/js/vendor/plyr.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from rainbowit.net/html/histudy/create-course.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2023 12:15:58 GMT -->
</html>
@section('title', 'Create Course')
    

@extends('pages.profile.master')


@section('content')


<main class="rbt-main-wrapper">
    <form action="">
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
                                                <input name="courseTitle" id="field-1" type="text" placeholder="New Course">
                                                <small class="d-block mt_dec--5"><i class="feather-info"></i> Title shouldn't be more than 60 charecter.</small>
                                            </div>
                                            <div class="course-field mb--15">
                                                <label for="aboutCourse">Course Description</label>
                                                <textarea name="courseDescription" id="aboutCourse" rows="10"></textarea>
                                                <small class="d-block mt_dec--5"><i class="feather-info"></i> HTML or plain text allowed, no emoji This field is used for search, so please be descriptive!</small>
                                            </div>

                                            {{-- <div class="course-field mb--15 edu-bg-gray">
                                                <h6>Course Settings</h6>
                                                <div class="rbt-course-settings-content">
                                                    <div class="row g-5">
                                                        <div class="col-lg-8">
                                                            <div class="tab-content">
                                                                <div class="tab-pane fade advance-tab-content-1 active show" id="general" role="tabpanel" aria-labelledby="general-tab">
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
                                            </div> --}}

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
                                                                    <li id="freeChoice" class="nav-item w-100" role="presentation">
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
                                                                        <input name="coursePrice" id="regularPrice-1" type="number" placeholder="$ Regular Price">
                                                                        <small class="d-block mt_dec--5"><i class="feather-info"></i> The Course Price Includes Your Author Fee.</small>
                                                                    </div>

                                                                    {{-- <div class="course-field mb--15">
                                                                        <label for="discountedPrice-1">Discounted Price ($)</label>
                                                                        <input id="discountedPrice-1" type="number" placeholder="$ Discounted Price">
                                                                        <small class="d-block mt_dec--5"><i class="feather-info"></i> The Course Price Includes Your Author Fee.</small>
                                                                    </div> --}}

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
                                                <h6>Choose Departmnet</h6>
                                                <div class="rbt-modern-select bg-transparent height-45 w-100 mb--10">
                                                    <select name="department" class="w-100" title="example: IT Departmnet">
                                                        @foreach ($departments as $department)
                                                            <option value="$department">{{$department->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="course-field mb--20">
                                                <h6>Course Thumbnail</h6>
                                                <div class="rbt-create-course-thumbnail upload-area">
                                                    <div class="upload-area">
                                                        <div class="brows-file-wrapper w-50 m-auto" data-black-overlay="9">
                                                            <!-- actual upload which is hidden -->
                                                            <input name="courseImage" id="createinputfile" type="file" class="inputfile w-50" />
                                                            <img id="createfileImage" src="assets/images/others/thumbnail-placeholder.svg">
                                                            <!-- our custom upload button -->
                                                            <label class="d-flex" for="createinputfile" title="No File Choosen">
                                                                <i class="feather-upload"></i>
                                                                <span class="text-center">Choose a File</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <small class="d-block mt-2 text-center"><i class="feather-info"></i> <b>Size:</b> 700x430 pixels, <b>File
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
                                                <select name="previewVideo" class="previewVideoBox w-100" id="">
                                                    <option value="" disabled selected>Select Video Sources</option>
                                                    <option value="youtube">Youtube</option>
                                                    <option value="local">Local</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="youtubeDiv" class="course-field mb--15">
                                            <label for="videoUrl">Add Your Video URL</label>
                                            <input id="videoUrl" type="text" placeholder="Add Your Video URL here.">
                                            <small class="d-block mt_dec--5">Example: <a href="https://www.youtube.com/watch?v=yourvideoid">https://www.youtube.com/watch?v=yourvideoid</a></small>
                                        </div>
                                        <div id="localDiv" class="course-field mb--15">
                                            <label for="videoUrl">Add Your Video</label>
                                            <input id="videoUrl" type="file" placeholder="Add Your Video URL here.">
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
                                    <label for="modal-field-1">Topic title</label>
                                    <input id="modal-field-1" type="text">
                                    <small><i class="feather-info"></i> Topic titles are displayed publicly wherever required. Each topic may contain one or more video and file</small>
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
</form>
</main>


@endsection





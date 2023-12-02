@section('title', 'Create Course')


@extends('pages.profile.master')


@section('content')



    <main class="rbt-main-wrapper">
        <form action="{{ route('create-new-course') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="rbt-create-course-area bg-color-white rbt-section-gap">
                <div class="container">
                    <div class="row g-5">

                        <div class="col-lg-8">
                            <div class="rbt-accordion-style rbt-accordion-01 rbt-accordion-06 accordion">
                                <div class="accordion" id="tutionaccordionExamplea1">
                                    <div class="accordion-item card">
                                        <h2 class="accordion-header card-header" id="accOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#accCollapseOne" aria-expanded="true"
                                                aria-controls="accCollapseOne">Course Info
                                            </button>
                                        </h2>
                                        <div id="accCollapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="accOne" data-bs-parent="#tutionaccordionExamplea1">
                                            <div class="accordion-body card-body">
                                                <!-- Start Course Field Wrapper  -->
                                                <div class="rbt-course-field-wrapper rbt-default-form">
                                                    <div class="course-field mb--15">
                                                        <label for="field-1">Course Title</label>
                                                        <input required name="courseTitle" id="field-1" type="text"
                                                            placeholder="New Course">
                                                        <small class="d-block mt_dec--5"><i class="feather-info"></i> Title
                                                            shouldn't be more than 60 charecter.</small>
                                                    </div>
                                                    <div class="course-field mb--15">
                                                        <label for="aboutCourse">Course Description</label>
                                                        <textarea required name="courseDescription" id="aboutCourse" rows="10"></textarea>
                                                        <small class="d-block mt_dec--5"><i class="feather-info"></i> HTML
                                                            or plain text allowed, no emoji This field is used for search,
                                                            so please be descriptive!</small>
                                                    </div>

                                                    <div class="course-field mb--15 edu-bg-gray">
                                                        <h6>Course Price</h6>
                                                        <div class="rbt-course-settings-content">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="advance-tab-button advance-tab-button-1">
                                                                        <ul class="rbt-default-tab-button nav nav-tabs"
                                                                            id="coursePrice" role="tablist">
                                                                            <li class="nav-item w-100" role="presentation">
                                                                                <a href="#" class="active"
                                                                                    id="paid-tab" data-bs-toggle="tab"
                                                                                    data-bs-target="#paid" role="tab"
                                                                                    aria-controls="paid"
                                                                                    aria-selected="true">
                                                                                    <span>Paid</span>
                                                                                </a>
                                                                            </li>
                                                                            <li id="freeChoice" class="nav-item w-100"
                                                                                role="presentation">
                                                                                <a href="#" id="free-tab"
                                                                                    data-bs-toggle="tab"
                                                                                    data-bs-target="#free" role="tab"
                                                                                    aria-controls="free"
                                                                                    aria-selected="false">
                                                                                    <span>Free</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <div class="tab-content">

                                                                        <div class="tab-pane fade advance-tab-content-1 active show"
                                                                            id="paid" role="tabpanel"
                                                                            aria-labelledby="paid-tab">

                                                                            <div class="course-field mb--15">
                                                                                <label for="regularPrice-1">Regular Price
                                                                                    ($)</label>
                                                                                <input required name="coursePrice"
                                                                                    id="regularPrice-1" type="number"
                                                                                    placeholder="$ Regular Price">
                                                                                <small class="d-block mt_dec--5"><i
                                                                                        class="feather-info"></i> The Course
                                                                                    Price Includes Your Author Fee.</small>
                                                                            </div>

                                                                            {{-- <div class="course-field mb--15">
                                                                        <label for="discountedPrice-1">Discounted Price ($)</label>
                                                                        <input id="discountedPrice-1" type="number" placeholder="$ Discounted Price">
                                                                        <small class="d-block mt_dec--5"><i class="feather-info"></i> The Course Price Includes Your Author Fee.</small>
                                                                    </div> --}}

                                                                        </div>


                                                                        <div class="tab-pane fade advance-tab-content-1"
                                                                            id="free" role="tabpanel"
                                                                            aria-labelledby="free-tab">
                                                                            <div class="course-field">
                                                                                <p class="b3">This Course is free for
                                                                                    everyone.</p>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="course-field mb--20">
                                                        <h6>Choose Departmnet</h6>
                                                        <div
                                                            class="rbt-modern-select bg-transparent height-45 w-100 mb--10">
                                                            <select required name="department" class="w-100"
                                                                title="example: IT Departmnet">
                                                                @foreach ($departments as $department)
                                                                    <option value="{{ $department->id }}">
                                                                        {{ $department->title }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="course-field mb--20">
                                                        <h6>Course Thumbnail</h6>
                                                        <div class="rbt-create-course-thumbnail upload-area">
                                                            <div class="upload-area">
                                                                <div class="brows-file-wrapper w-50 m-auto"
                                                                    data-black-overlay="9">
                                                                    <!-- actual upload which is hidden -->
                                                                    <input required name="courseImage"
                                                                        id="createinputfile" type="file"
                                                                        class="inputfile w-50" />
                                                                    <img id="createfileImage"
                                                                        src="assets/images/others/thumbnail-placeholder.svg">
                                                                    <!-- our custom upload button -->
                                                                    <label class="d-flex" for="createinputfile"
                                                                        title="No File Choosen">
                                                                        <i class="feather-upload"></i>
                                                                        <span class="text-center">Choose a File</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <small class="d-block mt-2 text-center"><i
                                                                class="feather-info"></i> <b>Size:</b> 700x430 pixels,
                                                            <b>File
                                                                Support:</b> JPG, JPEG, PNG, GIF, WEBP</small>
                                                    </div>


                                                </div>
                                                <!-- End Course Field Wrapper  -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item card">
                                        <h2 class="accordion-header card-header" id="accTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accCollapseTwo"
                                                aria-expanded="false" aria-controls="accCollapseTwo">
                                                Course Intro Video
                                            </button>
                                        </h2>
                                        <div id="accCollapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="accTwo" data-bs-parent="#tutionaccordionExamplea1">
                                            <div
                                                class="accordion-body card-body rbt-course-field-wrapper rbt-default-form">

                                                <div class="course-field mb--20">
                                                    <div class="rbt-modern-select bg-transparent height-45 mb--10">
                                                        <select required name="previewVideoMethod"
                                                            class="previewVideoBox w-100" id="">
                                                            <option value="" disabled selected>Select Video Sources
                                                            </option>
                                                            <option value="youtube">Youtube</option>
                                                            <option value="local">Local</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div id="youtubeDiv" class="course-field mb--15">
                                                    <label for="videoUrl">Add Your Preview Video URL</label>
                                                    <input name="youtubeURL" id="videoUrl" type="text"
                                                        placeholder="Add Your Video URL here.">
                                                    <small class="d-block mt_dec--5">Example: <a
                                                            href="https://www.youtube.com/watch?v=yourvideoid">https://www.youtube.com/watch?v=yourvideoid</a></small>
                                                </div>
                                                <div id="localDiv" class="course-field mb--15">
                                                    <label for="videoUrl">Add Your Preview Video</label>
                                                    <input name="localVideo" id="videoUrl" type="file"
                                                        placeholder="Add Your Video URL here.">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item card">
                                        <h2 class="accordion-header card-header" id="accThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accCollapseThree"
                                                aria-expanded="false" aria-controls="accCollapseThree">
                                                Course Builder
                                            </button>
                                        </h2>
                                        <div id="accCollapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="accThree" data-bs-parent="#tutionaccordionExamplea1">
                                            <div class="accordion-body card-body">
                                                <button class="rbt-btn btn-md btn-gradient hover-icon-reverse"
                                                    type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                {{-- <div class="col-lg-4">
                            <a class="rbt-btn hover-icon-reverse bg-primary-opacity w-100 text-center" href="course-details.html">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Preview</span>
                                <span class="btn-icon"><i class="feather-eye"></i></span>
                                <span class="btn-icon"><i class="feather-eye"></i></span>
                                </span>
                            </a>
                        </div> --}}
                                <div class="col-lg-12">
                                    <a class="rbt-btn btn-gradient hover-icon-reverse w-100 text-center" href="#">
                                        <span class="icon-reverse-wrapper">
                                            {{-- <button type="button" class="rbt-btn btn-border btn-md radius-round-10" data-bs-dismiss="modal">Create Course</button> --}}
                                            <button type="submit" class="rbt-btn btn-text">Create Course</button>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div
                                class="rbt-create-course-sidebar course-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
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
                                            <li><i class="feather-check"></i> Add a preview video for course.</li>
                                            <li><i class="feather-check"></i> Course Builder is where you create & organize
                                                a course.</li>
                                            <li><i class="feather-check"></i> Add Topics in the Course Builder section to
                                                add videos and files.</li>
                                            <li><i class="feather-check"></i> Make sure to add at least one video with it's
                                                title in the course builder.</li>
                                            <li><i class="feather-check"></i> After you create your course, you will be
                                                redirected to your courses.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Start Modal Area  -->
            <div class="rbt-default-modal modal fade" id="exampleModal" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <label for="">Topic title</label>
                                            <input required name="introTopic" id="modal-field-1" type="text">
                                            <input name="instructor" type="hidden" value="{{ $instructor->id }}">
                                            <small><i class="feather-info"></i> Topic titles are displayed publicly
                                                wherever required. Each topic may contain one or more video and file</small>
                                        </div>
                                        <div class="course-field mb--20">
                                            <label for="">Video</label>
                                            {{-- <textarea id="modal-field-2"></textarea> --}}
                                            <input required name="courseVideo" type="file">
                                            <small class="text-danger"><i class="feather-info"></i>*Add a video for the
                                                topic.</small>
                                        </div>
                                        <div class="course-field mb--20">
                                            <label for="">Video Title</label>
                                            {{-- <textarea id="modal-field-2"></textarea> --}}
                                            <input required name="videoTitle" type="text">
                                            <small class="text-danger"><i class="feather-info"></i>*Add a video
                                                title.</small>
                                        </div>
                                        <div class="course-field mb--20">
                                            <label for="modal-field-2">File</label>
                                            {{-- <textarea id="modal-field-2"></textarea> --}}
                                            <input name="courseFile" type="file">
                                            <small><i class="feather-info"></i> Add a file for the topic.</small>
                                        </div>
                                        <div class="course-field mb--20">
                                            <label for="">File Title</label>
                                            {{-- <textarea id="modal-field-2"></textarea> --}}
                                            <input name="fileTitle" type="text">
                                            <small><i class="feather-info"></i>Add a file title</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="top-circle-shape"></div>
                        <div class="modal-footer pt--30">
                            <button type="button" class="rbt-btn btn-border btn-md radius-round-10"
                                data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal Area  -->
        </form>
    </main>


@endsection

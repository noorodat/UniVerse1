@extends('layouts.master')

@section('title', 'UniVerse')
@section('content')

        <div class="edu-contact-us-area eduvibe-contact-us edu-section-gap bg-color-white">
            <div class="container eduvibe-animated-shape">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="pre-title">Edit content</span>
                            <h3 class="title">Update your course content</h3>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--20 justify-content-center">

                    <div class="col-lg-6">
                        <form enctype="multipart/form-data" method="POST" action="{{ route('update-course-content', ['course' => $course, 'topicTitle' => $topicTitle, 'tmpFileName' => $fileName]) }}">
                            @csrf
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="mb-2" for="topic_title">Topic title</label>
                                    <input value="{{$topicTitle}}" name="topic_title" id="topic_title" type="text" class="form-control form-control-lg">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="mb-2" for="file_name">File name</label>
                                <input value="{{$fileName}}" name="file_name" id="file_name" type="text" class="form-control form-control-lg">
                            </div>
                            <div class="form-group">
                                <label class="mb-2" for="file_content">File content</label>
                                <input type="file" name="new_file_content" id="file_content" class="form-control form-control-lg">
                                <input type="hidden" value="{{$file}}" name="old_file_content" id="file_content" class="form-control form-control-lg">
                            </div>
                            <div class="col-lg-12">
                                <button class="rn-btn edu-btn w-100" name="submit" type="submit">
                                    Save Changes<i class="icon-arrow-right-line-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>


@endsection
@extends('layouts.master')

@section('title', 'UniVerse')
@section('content')

    <div class="edu-contact-us-area eduvibe-contact-us edu-section-gap bg-color-white">
        <div class="container eduvibe-animated-shape">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">Add</span>
                        <h3 class="title">Add new content to <span style="color: #525FE1">{{$courseTopic}}</span></h3>
                        <p>You have to add a video or a file so you can add new content!</p>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20 justify-content-center">

                <div class="col-lg-6">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('add-content-to-topic', ['course' => $course, 'courseTopic' => $courseTopic]) }}">
                        @csrf
                        <div class="form-group">
                            <label class="mb-2" for="">Video name</label>
                            <input type="text" name="videoTitle" class="form-control form-control-lg">
                        </div>
                        <div class="form-group">
                            <label class="mb-2" for="">Video</label>
                            <input type="file" name="topicVideo" class="form-control form-control-lg">
                        </div>
                        <div class="form-group">
                            <label class="mb-2" for="">File name</label>
                            <input type="text" name="fileTitle" class="form-control form-control-lg">
                        </div>
                        <div class="form-group">
                            <label class="mb-2" for="">File</label>
                            <input type="file" name="topicFile" class="form-control form-control-lg">
                        </div>
                        @if (session()->has('fileErrorMessage'))
                        <div class="alert alert-danger text-center">{{ session('fileErrorMessage') }}</div>
                        @endif
                        <div class="col-lg-12">
                            <button class="rn-btn edu-btn w-100" name="submit" type="submit">
                                Add content<i class="icon-arrow-right-line-right"></i>
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

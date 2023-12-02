@extends('layouts.master')

@section('title', 'UniVerse')
@section('content')

        <div class="edu-contact-us-area eduvibe-contact-us edu-section-gap bg-color-white">
            <div class="container eduvibe-animated-shape">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="pre-title">You will be deleting the course including it's all materials</span>
                            <h3 class="title">Delete {{$course->title}}</h3>
                        </div>
                    </div>
                </div>
                <form action="{{route('delete-course', $course->id)}}" method="POST">
                    @csrf
                    <div class="row g-5 mt--20 justify-content-center">
                        <div class="col-lg-6">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="mb-2">Course's name</label>
                                        <input value="{{$course->title}}" disabled type="text" class="form-control form-control-lg">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="mb-2" for="courseNameConfirmation">Confirm deletion by writing the Course's name</label>
                                        <input name="courseNameConfirmation" id="courseNameConfirmation" type="text" class="form-control form-control-lg">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="rn-btn edu-btn w-100" name="submit" type="submit">
                                        Delete Course<i class="icon-arrow-right-line-right"></i>
                                    </button>
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>


@endsection
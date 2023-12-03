@extends('layouts.master')

@section('title', 'UniVerse')
@section('content')

    <div class="edu-contact-us-area eduvibe-contact-us edu-section-gap bg-color-white">
        <div class="container eduvibe-animated-shape">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">Request</span>
                        <h3 class="title">Request to be an Instructor</h3>
                        <p>Your request will be sent to the admin, and we will reach out with you ASAP</p>
                        <p class="text-danger">Keep in mind, we deduct 20% from each course's price when it's purchased.</p>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20 justify-content-center">

                <div class="col-lg-6">
                    <form method="POST" enctype="multipart/form-data" action="{{route('instructor-request.store')}}">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label class="mb-2" for="">What kind of courses will you be providing?</label>
                            <textarea name="coursesType" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="mb-2" for="">Why should we accept your request</label>
                            <textarea name="whyShouldWeAccept" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <button class="rn-btn edu-btn w-100" name="submit" type="submit">
                                Send request<i class="icon-arrow-right-line-right"></i>
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

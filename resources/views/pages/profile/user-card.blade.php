                    <!-- Start Dashboard Top  -->
                    <div class="rbt-dashboard-content-wrapper">
                        <div class="tutor-bg-photo bg_image bg_image--22 height-350"></div>
                        <!-- Start Tutor Information  -->
                        <div class="rbt-tutor-information">
                            <div class="rbt-tutor-information-left">
                                <div class="thumbnail rbt-avatars size-lg">
                                    <img src="{{url('/images/' . Auth::user()->image)}}" alt="user image">
                                </div>
                                <div class="tutor-content">
                                    <h5 class="title">{{Auth::user()->name}}</h5>
                                    <div class="rbt-review">
                                        <div class="rbt-review">
                                            <div class="rating">
                                                @if (isset($isInstructor) && $isInstructor !== null) 
                                                    @if ($instructor->rating == '0')
                                                        <i class="fa-regular fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                    @elseif ($instructor->rating === 1)
                                                        <i class="icon-Star"></i>
                                                    @elseif ($instructor->rating === 2)
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                    @elseif ($instructor->rating === 3)
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                    @elseif ($instructor->rating === 4)
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                    @elseif ($instructor->rating === 5)
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                    @endif
                                                @endif
                                            </div>
                                            @if (isset($isInstructor) && $isInstructor !== null)
                                                <span class="rating-count"> (0 Reviews)</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rbt-tutor-information-right">
                                <div class="tutor-btn">
                                    @if (Auth::user()->role === 'instructor')
                                    <a class="rbt-btn btn-md hover-icon-reverse" href="create-course.html">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Create a New Course</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </a>
                                    @else
                                    <a class="rbt-btn btn-md hover-icon-reverse" href="create-course.html">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Become an instructor</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Tutor Information  -->
                    </div>
                    <!-- End Dashboard Top  -->
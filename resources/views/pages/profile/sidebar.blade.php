                        <!-- Start Dashboard Sidebar  -->
                        <div class="rbt-default-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
                            <div class="inner">
                                <div class="content-item-content">

                                    <div class="rbt-default-sidebar-wrapper">
                                        <div class="section-title mb--20">
                                            <h6 class="rbt-title-style-2">Welcome, {{ Auth::user()->name }}</h6>
                                        </div>
                                        <nav class="mainmenu-nav">
                                            <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                <li><a href="{{ route('go-home') }}">
                                                        <i class="feather-home"></i><span>Home</span></a>
                                                </li>
                                                @if (Auth::user()->role === 'instructor')
                                                    <li><a href="{{ route('go-dashboard', Auth::user()->id) }}">
                                                            <i class="fa-solid fa-gauge"></i><span>Dashboard</span></a>
                                                    </li>
                                                @endif
                                                <li><a href="{{ route('go-profile', Auth::user()->id) }}"><i
                                                            class="feather-user"></i><span>My Profile</span></a></li>
                                                <li><a href="{{ route('go-enrolled-courses', Auth::user()) }}"><i
                                                            class="feather-book-open"></i><span>Enrolled
                                                            Courses</span></a></li>
                                                {{-- <li><a href="instructor-order-history.html"><i
                                                            class="feather-shopping-bag"></i><span>Order
                                                            History</span></a></li> --}}
                                            </ul>
                                        </nav>

                                        @if (Auth::user()->role == 'instructor')
                                            <div class="section-title mt--40 mb--20">
                                                <h6 class="rbt-title-style-2">Instructor</h6>
                                            </div>

                                            <nav class="mainmenu-nav">
                                                <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                    <li>
                                                        <a href="{{ route('go-my-courses') }}">
                                                            <i class="feather-monitor"></i>
                                                            <span>My Courses</span>
                                                        </a>
                                                    </li>
                                                    <!-- Add more list items here if needed -->
                                                </ul>
                                            </nav>
                                        @endif

                                        <div class="section-title mt--40 mb--20">
                                            <h6 class="rbt-title-style-2">User</h6>
                                        </div>

                                        <nav class="mainmenu-nav">
                                            <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                <li><a href="{{ route('go-profile-settings') }}"><i
                                                            class="feather-settings"></i><span>Settings</span></a></li>
                                                <li>
                                                    <form action="{{ route('logout') }}" method="POST">
                                                        @csrf
                                                        <button class="border-none" type="submit">
                                                            <i class="feather-log-out"></i><span>Logout</span>
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Dashboard Sidebar  -->

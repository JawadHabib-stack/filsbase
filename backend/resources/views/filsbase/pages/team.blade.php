@extends('filsbase.layouts.app')

@section('title', 'Team')

@section('content')
<!-- Page Header Section Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>team</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our team</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- Scrolling Ticker Section Start -->
    <div class="our-scrolling-ticker">
        <!-- Scrolling Ticker Start -->
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><img src="{{ asset('frontend-images/company-supports-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-4.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-4.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-4.svg') }}" alt=""></span>
            </div>

            <div class="scrolling-content">
                <span><img src="{{ asset('frontend-images/company-supports-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-4.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-4.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-4.svg') }}" alt=""></span>
            </div>
        </div>
        <!-- Scrolling Ticker End -->
    </div>
    <!-- Scrolling Ticker Section End -->

    <!-- Page Team Start -->
    <div class="page-team">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="{{ route('filsbase.team-single') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend-images/team-1.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->

                        <!-- Team Item Body Start -->
                        <div class="team-item-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="{{ route('filsbase.team-single') }}">Darrell Steward</a></h3>
                                <p>Full Stack Developer</p>
                            </div>
                            <!-- Team Content End -->
                            
                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Item Body End -->
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="{{ route('filsbase.team-single') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend-images/team-2.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->

                        <!-- Team Item Body Start -->
                        <div class="team-item-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="{{ route('filsbase.team-single') }}">Albert Flores</a></h3>
                                <p>Backend Developer</p>
                            </div>
                            <!-- Team Content End -->
                            
                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Item Body End -->
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="{{ route('filsbase.team-single') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend-images/team-3.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->

                        <!-- Team Item Body Start -->
                        <div class="team-item-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="{{ route('filsbase.team-single') }}">Jacob Jones</a></h3>
                                <p>Project Manager</p>
                            </div>
                            <!-- Team Content End -->
                            
                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Item Body End -->
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.6s">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="{{ route('filsbase.team-single') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend-images/team-4.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->

                        <!-- Team Item Body Start -->
                        <div class="team-item-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="{{ route('filsbase.team-single') }}">Ronald Richards</a></h3>
                                <p>Lead Architect</p>
                            </div>
                            <!-- Team Content End -->
                            
                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Item Body End -->
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.8s">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="{{ route('filsbase.team-single') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend-images/team-5.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->

                        <!-- Team Item Body Start -->
                        <div class="team-item-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="{{ route('filsbase.team-single') }}">Bessie Cooper</a></h3>
                                <p>UI/UX Designer</p>
                            </div>
                            <!-- Team Content End -->
                            
                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Item Body End -->
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="1s">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="{{ route('filsbase.team-single') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend-images/team-6.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->

                        <!-- Team Item Body Start -->
                        <div class="team-item-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="{{ route('filsbase.team-single') }}">Guy Hawkins</a></h3>
                                <p>Frontend Developer</p>
                            </div>
                            <!-- Team Content End -->
                            
                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Item Body End -->
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="1.2s">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="{{ route('filsbase.team-single') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend-images/team-7.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->

                        <!-- Team Item Body Start -->
                        <div class="team-item-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="{{ route('filsbase.team-single') }}">Esther Howard</a></h3>
                                <p>DevOps Engineer</p>
                            </div>
                            <!-- Team Content End -->
                            
                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Item Body End -->
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="1.4s">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="{{ route('filsbase.team-single') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend-images/team-8.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->

                        <!-- Team Item Body Start -->
                        <div class="team-item-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="{{ route('filsbase.team-single') }}">Arlene McCoy</a></h3>
                                <p>QA Engineer</p>
                            </div>
                            <!-- Team Content End -->
                            
                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Item Body End -->
                    </div>
                    <!-- Team Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Team End -->
@endsection

@extends('filsbase.layouts.app')

@section('title', 'Case Study')

@section('content')
<!-- Page Header Section Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Case <span>Studies</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Case Studies</li>
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

    <!-- Page Case Study Start -->
    <div class="page-case-study">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <!-- Case Study Item Start -->
                    <div class="case-study-item wow fadeInUp">
                        <!-- Case Study Image Start -->
                        <div class="case-study-image">
                            <a href="{{ route('filsbase.case-study-single') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend-images/case-study-image-1.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Case Study Image End -->

                        <!-- Case Study Item Button Start -->
                        <div class="case-study-item-btn">
                            <a href="{{ route('filsbase.case-study-single') }}">
                                <img src="{{ asset('frontend-images/arrow-white.svg') }}" alt="">
                            </a>
                        </div>
                        <!-- Case Study Item Button End -->

                        <!-- Case Study Iten Content Start -->
                        <div class="case-study-item-content">
                            <h3><a href="{{ route('filsbase.case-study-single') }}">E-Commerce Platform Rebuild</a></h3>
                            <ul>
                                <li><a href="#">React</a></li>
                                <li><a href="#">Next.js</a></li>
                            </ul>
                        </div>
                        <!-- Case Study Item Content End -->
                    </div>
                    <!-- Case Study Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Case Study Item Start -->
                    <div class="case-study-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Case Study Image Start -->
                        <div class="case-study-image">
                            <a href="{{ route('filsbase.case-study-single') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend-images/case-study-image-2.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Case Study Image End -->

                        <!-- Case Study Item Button Start -->
                        <div class="case-study-item-btn">
                            <a href="{{ route('filsbase.case-study-single') }}">
                                <img src="{{ asset('frontend-images/arrow-white.svg') }}" alt="">
                            </a>
                        </div>
                        <!-- Case Study Item Button End -->

                        <!-- Case Study Iten Content Start -->
                        <div class="case-study-item-content">
                            <h3><a href="{{ route('filsbase.case-study-single') }}">Fintech Web Application</a></h3>
                            <ul>
                                <li><a href="#">Fintech</a></li>
                                <li><a href="#">React</a></li>
                            </ul>
                        </div>
                        <!-- Case Study Item Content End -->
                    </div>
                    <!-- Case Study Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Case Study Item Start -->
                    <div class="case-study-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Case Study Image Start -->
                        <div class="case-study-image">
                            <a href="{{ route('filsbase.case-study-single') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend-images/case-study-image-3.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Case Study Image End -->

                        <!-- Case Study Item Button Start -->
                        <div class="case-study-item-btn">
                            <a href="{{ route('filsbase.case-study-single') }}">
                                <img src="{{ asset('frontend-images/arrow-white.svg') }}" alt="">
                            </a>
                        </div>
                        <!-- Case Study Item Button End -->

                        <!-- Case Study Iten Content Start -->
                        <div class="case-study-item-content">
                            <h3><a href="{{ route('filsbase.case-study-single') }}">Government Services Portal</a></h3>
                            <ul>
                                <li><a href="#">API</a></li>
                                <li><a href="#">Node.js</a></li>
                            </ul>
                        </div>
                        <!-- Case Study Item Content End -->
                    </div>
                    <!-- Case Study Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Case Study Item Start -->
                    <div class="case-study-item wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Case Study Image Start -->
                        <div class="case-study-image">
                            <a href="{{ route('filsbase.case-study-single') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend-images/case-study-image-4.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Case Study Image End -->

                        <!-- Case Study Item Button Start -->
                        <div class="case-study-item-btn">
                            <a href="{{ route('filsbase.case-study-single') }}">
                                <img src="{{ asset('frontend-images/arrow-white.svg') }}" alt="">
                            </a>
                        </div>
                        <!-- Case Study Item Button End -->

                        <!-- Case Study Iten Content Start -->
                        <div class="case-study-item-content">
                            <h3><a href="{{ route('filsbase.case-study-single') }}">Remote Work Platform</a></h3>
                            <ul>
                                <li><a href="#">Remote</a></li>
                                <li><a href="#">Flutter</a></li>
                            </ul>
                        </div>
                        <!-- Case Study Item Content End -->
                    </div>
                    <!-- Case Study Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Case Study Item Start -->
                    <div class="case-study-item wow fadeInUp" data-wow-delay="0.8s">
                        <!-- Case Study Image Start -->
                        <div class="case-study-image">
                            <a href="{{ route('filsbase.case-study-single') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend-images/case-study-image-5.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Case Study Image End -->

                        <!-- Case Study Item Button Start -->
                        <div class="case-study-item-btn">
                            <a href="{{ route('filsbase.case-study-single') }}">
                                <img src="{{ asset('frontend-images/arrow-white.svg') }}" alt="">
                            </a>
                        </div>
                        <!-- Case Study Item Button End -->

                        <!-- Case Study Iten Content Start -->
                        <div class="case-study-item-content">
                            <h3><a href="{{ route('filsbase.case-study-single') }}">Finance Dashboard App</a></h3>
                            <ul>
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">React</a></li>
                            </ul>
                        </div>
                        <!-- Case Study Item Content End -->
                    </div>
                    <!-- Case Study Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Case Study Item Start -->
                    <div class="case-study-item wow fadeInUp" data-wow-delay="1s">
                        <!-- Case Study Image Start -->
                        <div class="case-study-image">
                            <a href="{{ route('filsbase.case-study-single') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend-images/case-study-image-6.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Case Study Image End -->

                        <!-- Case Study Item Button Start -->
                        <div class="case-study-item-btn">
                            <a href="{{ route('filsbase.case-study-single') }}">
                                <img src="{{ asset('frontend-images/arrow-white.svg') }}" alt="">
                            </a>
                        </div>
                        <!-- Case Study Item Button End -->

                        <!-- Case Study Iten Content Start -->
                        <div class="case-study-item-content">
                            <h3><a href="{{ route('filsbase.case-study-single') }}">Supply Chain Management App</a></h3>
                            <ul>
                                <li><a href="#">Logistics</a></li>
                                <li><a href="#">Node.js</a></li>
                            </ul>
                        </div>
                        <!-- Case Study Item Content End -->
                    </div>
                    <!-- Case Study Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Case Study End -->
@endsection

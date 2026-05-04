@extends('filsbase.layouts.app')

@section('title', 'Blog')

@section('content')
<!-- Page Header Section Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our  <span>blog</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our blog</li>
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

    <!-- Page Blog Start -->
    <div class="page-blog">
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-xl-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="{{ route('filsbase.blog-single', $post->slug) }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ Str::startsWith($post->image, 'http') ? $post->image : asset('storage/'.$post->image) }}" alt="{{ $post->name }}">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Meta Start -->
                            <div class="post-meta">
                                <span><i class="fa-regular fa-clock"></i> {{ $post->published_at ? $post->published_at->format('M d, Y') : $post->created_at->format('M d, Y') }}</span>
                                <span><i class="fa-regular fa-user"></i> {{ $post->created_by_name ?? 'Admin' }}</span>
                            </div>
                            <!-- Post Meta End -->

                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="{{ route('filsbase.blog-single', $post->slug) }}">{{ $post->name }}</a></h2>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Post Item Readmore Button Start-->
                            <div class="post-item-btn">
                                <a href="{{ route('filsbase.blog-single', $post->slug) }}" class="readmore-btn">read more</a>
                            </div>
                            <!-- Post Item Readmore Button End-->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>
                @endforeach

                <div class="col-lg-12">
                    <!-- Page Pagination Start -->
                    <div class="page-pagination wow fadeInUp" data-wow-delay="1s">
                        {{ $posts->links() }}
                    </div>
                    <!-- Page Pagination End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Blog End -->
@endsection

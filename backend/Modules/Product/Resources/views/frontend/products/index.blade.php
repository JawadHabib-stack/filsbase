@extends('filsbase.layouts.app')

@section('title', 'Products')

@section('content')
<!-- Page Header Section Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our  <span>Products</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Products</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- Page Products Start -->
    <div class="page-blog">
        <div class="container">
            <div class="row">
                @foreach($products as $row)
                <div class="col-xl-4 col-md-6">
                    <!-- Product Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Product Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="{{ route('frontend.products.show', [encode_id($row->id), $row->slug]) }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ Str::startsWith($row->image, 'http') ? $row->image : asset('storage/'.$row->image) }}" alt="{{ $row->name }}">
                                </figure>
                            </a>
                        </div>
                        <!-- Product Featured Image End -->

                        <!-- Product Item Body Start -->
                        <div class="post-item-body">
                            <!-- Product Meta Start -->
                            <div class="post-meta">
                                <span><i class="fa-regular fa-clock"></i> {{ $row->published_at ? $row->published_at->format('M d, Y') : $row->created_at->format('M d, Y') }}</span>
                                <span><i class="fa-solid fa-layer-group"></i> {{ $row->category_name }}</span>
                            </div>
                            <!-- Product Meta End -->

                            <!-- Product Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="{{ route('frontend.products.show', [encode_id($row->id), $row->slug]) }}">{{ $row->name }}</a></h2>
                                @if($row->price)
                                <h4 class="text-primary mt-2">
                                    {{ $settings_currency_symbol ?? '$' }}{{ number_format($row->price, 2) }}
                                </h4>
                                @endif
                            </div>
                            <!-- Product Item Content End -->

                            <!-- Product Item Readmore Button Start-->
                            <div class="post-item-btn">
                                <a href="{{ route('frontend.products.show', [encode_id($row->id), $row->slug]) }}" class="readmore-btn">view details</a>
                            </div>
                            <!-- Product Item Readmore Button End-->
                        </div>
                        <!-- Product Item Body End -->
                    </div>
                    <!-- Product Item End -->
                </div>
                @endforeach

                <div class="col-lg-12">
                    <!-- Page Pagination Start -->
                    <div class="page-pagination wow fadeInUp" data-wow-delay="1s">
                        {{ $products->links() }}
                    </div>
                    <!-- Page Pagination End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Products End -->
@endsection

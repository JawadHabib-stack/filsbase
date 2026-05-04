@extends('filsbase.layouts.app')

@section('title')
    {{ $$module_name_singular->name }}
@endsection

@section('content')
<!-- Page Header Section Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">{{ $$module_name_singular->name }}</h1>
                        <div class="post-single-meta wow fadeInUp">
							<ol class="breadcrumb">
                                <li><i class="fa-regular fa-user"></i> {{ $$module_name_singular->created_by_name ?? 'Admin' }}</li>
								<li><i class="fa-regular fa-clock"></i> {{ $$module_name_singular->published_at ? $$module_name_singular->published_at->format('d M, Y') : $$module_name_singular->created_at->format('d M, Y') }}</li>
                                <li><i class="fa-solid fa-layer-group"></i> {{ $$module_name_singular->category_name }}</li>
                            </ol>
						</div>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- Page Single Product Start -->
    <div class="page-single-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post Featured Image Start -->
                    <div class="post-image">
                        <figure class="image-anime reveal">
                            <img src="{{ Str::startsWith($$module_name_singular->image, ['http://', 'https://']) ? $$module_name_singular->image : asset('storage/'.$$module_name_singular->image) }}" alt="{{ $$module_name_singular->name }}">
                        </figure>
                    </div>
                    <!-- Post Featured Image Start -->

                    <!-- Post Single Content Start -->
                    <div class="post-content">
                        <!-- Post Entry Start -->
                        <div class="post-entry" style="font-size: 18px; line-height: 1.8; color: #444;">
                            @if ($$module_name_singular->intro != "")
                                <p class="lead"><strong>{{ $$module_name_singular->intro }}</strong></p>
                            @endif
                            {!! $$module_name_singular->content !!}
                        </div>
                        <!-- Post Entry End -->

                        <!-- Product Details Table Start -->
                        <div class="mt-5">
                            <h4>Product Details</h4>
                            <table class="table table-bordered mt-3">
                                <tr>
                                    <th>SKU</th>
                                    <td>{{ $$module_name_singular->sku }}</td>
                                </tr>
                                <tr>
                                    <th>Stock</th>
                                    <td>{{ $$module_name_singular->stock }}</td>
                                </tr>
                                @if($price = $$module_name_singular->price)
                                <tr>
                                    <th>Price</th>
                                    <td>{{ $settings_currency_symbol ?? '$' }}{{ number_format($price, 2) }}</td>
                                </tr>
                                @endif
                            </table>
                        </div>

                        <!-- Add to Cart Button -->
                        <div class="mt-4 mb-5">
                            <button 
                                onclick="Livewire.dispatch('addToCart', { productId: {{ $$module_name_singular->id }} })"
                                class="btn btn-primary btn-lg px-5 py-3 rounded-pill fw-bold shadow-sm"
                                style="transition: all 0.3s ease;"
                                onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.1)';"
                                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 6px rgba(0,0,0,0.05)';"
                            >
                                <i class="fa-solid fa-cart-plus me-2"></i> Add to Cart
                            </button>
                        </div>


                        <!-- Post Tag Links Start -->
                        <div class="post-tag-links">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <!-- Post Tags Start -->
                                    <div class="post-tags wow fadeInUp" data-wow-delay="0.5s">
                                        <span class="tag-links">
                                            @if (count($$module_name_singular->tags))
                                                Tags:
                                                @foreach ($$module_name_singular->tags as $tag)
                                                    <a href="#">{{ $tag->name }}</a>
                                                @endforeach
                                            @endif
                                        </span>
                                    </div>
                                    <!-- Post Tags End -->
                                </div>

                                <div class="col-lg-4">
                                    <!-- Post Social Links Start -->
                                    <div class="post-social-sharing wow fadeInUp" data-wow-delay="0.5s">
                                        <ul>
                                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- Post Social Links End -->
                                </div>
                            </div>
                        </div>
                        <!-- Post Tag Links End -->
                    </div>
                    <!-- Post Single Content End -->
                </div>
                
                <div class="col-lg-4">
                    <div class="sidebar">
                        <livewire:recent-products />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Single Post End -->
@endsection

    <!-- Header Start -->
	<header class="main-header">
        <div class="topbar py-1 px-4 border-bottom d-none d-lg-block" style="background: var(--secondary-color); border-top-left-radius: 12px; border-top-right-radius: 12px;">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="topbar-social">
                            <a href="#" class="me-3 text-primary"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="me-3 text-primary"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" class="me-3 text-primary"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#" class="me-3 text-primary"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-end">
                        <div class="topbar-contact">
                            <livewire:cart-icon />
                            <a href="{{ route('frontend.users.profile') }}" class="text-primary me-4 font-weight-bold"><i class="fa-solid fa-user-circle"></i> Client Area</a>
                            <span class="text-muted"><i class="fa-solid fa-phone"></i> +1 234 567 890</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container-fluid">
					<!-- Logo Start -->
					<a class="navbar-brand" href="{{ route('frontend.index') }}">
						<img src="{{ asset('logo.png') }}" alt="Logo">
					</a>
					<!-- Logo End -->

					<!-- Main Menu Start -->
					<div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="{{ route('frontend.index') }}">Home</a></li>                                
                                <li class="nav-item"><a class="nav-link" href="{{ route('filsbase.about') }}">About Us</a>
                                <li class="nav-item"><a class="nav-link" href="{{ route('filsbase.services') }}">Services</a></li>
                                <li class="nav-item submenu"><a class="nav-link" href="{{ route('frontend.products.index') }}">Products</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('frontend.products.index') }}">All Products</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('filsbase.xdairy') }}">X Dairy</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('filsbase.blog') }}">Blog</a></li>
                                <li class="nav-item submenu"><a class="nav-link" href="#">Pages</a>
                                    <ul>                                        
                                        <li class="nav-item"><a class="nav-link" href="{{ route('filsbase.service-single') }}">Service Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('filsbase.case-study') }}">Case Study</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('filsbase.team') }}">Our Team</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('filsbase.pricing') }}">Pricing Plan</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('filsbase.testimonials') }}">Testimonials</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('filsbase.image-gallery') }}">Image Gallery</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('filsbase.video-gallery') }}">Video Gallery</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('filsbase.faqs') }}">FAQs</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('filsbase.contact') }}">Contact Us</a></li>
                            </ul>
                        </div>

                        <!-- Header Btn Start -->
                        <div class="header-btn">
                            <a class="btn-default" href="{{ route('filsbase.contact') }}">Contact Us</a>
                        </div>
                        <!-- Header Btn End -->                      
					</div>
					<!-- Main Menu End -->
					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->

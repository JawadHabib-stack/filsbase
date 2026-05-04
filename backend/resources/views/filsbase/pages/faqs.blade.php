@extends('filsbase.layouts.app')

@section('title', 'Faqs')

@section('content')
<!-- Page Header Start -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque">Frequently Asked <span>Questions</span></h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">FAQ's</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

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

    <!-- Page Faqs Start -->
    <div class="page-faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar">
                        <!-- Page Category List Start -->
                        <div class="page-category-list wow fadeInUp">
                            <ul>
                                <li><a href="#faq_1">General Questions</a></li>
                                <li><a href="#faq_2">Development Process</a></li>
                                <li><a href="#faq_3">Project Management</a></li>
                                <li><a href="#faq_4">Delivery & Support</a></li>
                            </ul>
                        </div>
                        <!-- Page Category List End -->

                        <!-- Sidebar CTA Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.25s">
                            <div class="sidebar-cta-content">
                                <h3>Get In Touch</h3>
                                <h2>Get in Touch With Our Development Experts</h2>
                                <p>Have a project in mind? Let's talk and build something great together.</p>
                            </div>
                            <div class="sidebar-cta-btn">
                                <a href="{{ route('filsbase.contact') }}" class="btn-default btn-highlighted">Let's Talk</a>
                            </div>
                        </div>
                        <!-- Sidebar CTA Box End -->
                    </div>
                    <!-- Page Single Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Page FAQs Catagery Start -->
                    <div class="page-faqs-catagery">
                        <!-- FAQs section start -->
                        <div class="page-single-faqs" id="faq_1">
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">General <span>Questions</span></h2>
                            </div>

                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion our-faq-accordion" id="accordion">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                            Q1: What technologies and frameworks do you specialize in?
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>We work with businesses across various industries including finance, healthcare, e-commerce, and technology, building tailored digital products that solve real business challenges.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                            Q2: How long does it take to build a website or app?
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse show" aria-labelledby="heading2" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>We work with businesses across various industries including finance, healthcare, e-commerce, and technology, building tailored digital products that solve real business challenges.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            Q3: Do you offer post-launch support and maintenance?
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>We work with businesses across various industries including finance, healthcare, e-commerce, and technology, building tailored digital products that solve real business challenges.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            Q4: What does your development process look like?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>We work with businesses across various industries including finance, healthcare, e-commerce, and technology, building tailored digital products that solve real business challenges.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                            Q5: Can you redesign my existing website or app?
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>We work with businesses across various industries including finance, healthcare, e-commerce, and technology, building tailored digital products that solve real business challenges.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- FAQs section End -->

                        <!-- FAQs section start -->
                        <div class="page-single-faqs" id="faq_2">
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Development <span>Process</span></h2>
                            </div>

                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion our-faq-accordion" id="accordion1">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading6">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                            Q1: What technologies and frameworks do you specialize in?
                                        </button>
                                    </h2>
                                    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordion1">
                                        <div class="accordion-body">
                                            <p>We work with businesses across various industries including finance, healthcare, e-commerce, and technology, building tailored digital products that solve real business challenges.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading7">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                                            Q2: How long does it take to build a website or app?
                                        </button>
                                    </h2>
                                    <div id="collapse7" class="accordion-collapse collapse show" aria-labelledby="heading7" data-bs-parent="#accordion1">
                                        <div class="accordion-body">
                                            <p>We work with businesses across various industries including finance, healthcare, e-commerce, and technology, building tailored digital products that solve real business challenges.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading8">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                            Q3: Do you offer post-launch support and maintenance?
                                        </button>
                                    </h2>
                                    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordion1">
                                        <div class="accordion-body">
                                            <p>We work with businesses across various industries including finance, healthcare, e-commerce, and technology, building tailored digital products that solve real business challenges.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                    <h2 class="accordion-header" id="heading9">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                            Q4: What does your development process look like?
                                        </button>
                                    </h2>
                                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordion1">
                                        <div class="accordion-body">
                                            <p>We work with businesses across various industries including finance, healthcare, e-commerce, and technology, building tailored digital products that solve real business challenges.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                    <h2 class="accordion-header" id="heading10">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                            Q5: Can you redesign my existing website or app?
                                        </button>
                                    </h2>
                                    <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordion1">
                                        <div class="accordion-body">
                                            <p>We work with businesses across various industries including finance, healthcare, e-commerce, and technology, building tailored digital products that solve real business challenges.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- FAQs section End -->

                        <!-- FAQs section start -->
                        <div class="page-single-faqs" id="faq_3">
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Project <span>Management</span></h2>
                            </div>

                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion our-faq-accordion" id="accordion2">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading11">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                            Q1: What technologies and frameworks do you specialize in?
                                        </button>
                                    </h2>
                                    <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <p>We work with businesses across various industries including finance, healthcare, e-commerce, and technology, building tailored digital products that solve real business challenges.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading12">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="true" aria-controls="collapse12">
                                            Q2: How long does it take to build a website or app?
                                        </button>
                                    </h2>
                                    <div id="collapse12" class="accordion-collapse collapse show" aria-labelledby="heading12" data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <p>We work with businesses across various industries including finance, healthcare, e-commerce, and technology, building tailored digital products that solve real business challenges.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading13">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                            Q3: Do you offer post-launch support and maintenance?
                                        </button>
                                    </h2>
                                    <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13" data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <p>We work with businesses across various industries including finance, healthcare, e-commerce, and technology, building tailored digital products that solve real business challenges.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                    <h2 class="accordion-header" id="heading14">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                            Q4: What does your development process look like?
                                        </button>
                                    </h2>
                                    <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14" data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <p>We work with businesses across various industries including finance, healthcare, e-commerce, and technology, building tailored digital products that solve real business challenges.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                    <h2 class="accordion-header" id="heading15">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                            Q5: Can you redesign my existing website or app?
                                        </button>
                                    </h2>
                                    <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15" data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <p>We work with businesses across various industries including finance, healthcare, e-commerce, and technology, building tailored digital products that solve real business challenges.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- FAQs section End -->

                        <!-- FAQs section start -->
                        <div class="page-single-faqs" id="faq_4">
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Delivery <span>& Support</span></h2>
                            </div>
                            
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion our-faq-accordion" id="accordion3">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading16">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                            Q1: What technologies and frameworks do you specialize in?
                                        </button>
                                    </h2>
                                    <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="heading16" data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>We work with businesses across various industries including finance, healthcare, e-commerce, and technology, building tailored digital products that solve real business challenges.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading17">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="true" aria-controls="collapse17">
                                            Q2: How long does it take to build a website or app?
                                        </button>
                                    </h2>
                                    <div id="collapse17" class="accordion-collapse show" aria-labelledby="heading17" data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>We work with businesses across various industries including finance, healthcare, e-commerce, and technology, building tailored digital products that solve real business challenges.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading18">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                            Q3: Do you offer post-launch support and maintenance?
                                        </button>
                                    </h2>
                                    <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="heading18" data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>We work with businesses across various industries including finance, healthcare, e-commerce, and technology, building tailored digital products that solve real business challenges.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                    <h2 class="accordion-header" id="heading19">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                            Q4: What does your development process look like?
                                        </button>
                                    </h2>
                                    <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="heading19" data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>We work with businesses across various industries including finance, healthcare, e-commerce, and technology, building tailored digital products that solve real business challenges.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                    <h2 class="accordion-header" id="heading20">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                            Q5: Can you redesign my existing website or app?
                                        </button>
                                    </h2>
                                    <div id="collapse20" class="accordion-collapse collapse" aria-labelledby="heading20" data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>We work with businesses across various industries including finance, healthcare, e-commerce, and technology, building tailored digital products that solve real business challenges.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- FAQs section End -->
                    </div> 
                    <!-- Page FAQs Catagery End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Faqs End -->
@endsection

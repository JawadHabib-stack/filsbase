@extends('filsbase.layouts.app')

@section('title', 'Case Study Single')

@section('content')
<!-- Page Header Section Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">E-Commerce Platform <span>Rebuild</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('filsbase.case-study') }}">Case Studies</a></li>
                                <li class="breadcrumb-item active" aria-current="page">E-Commerce Platform Rebuild</li>
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

    <!-- Page Case Study Single Start -->
    <div class="page-case-study-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar">
                        <!-- Page Category List Start -->
                        <div class="page-category-list case-study-category-list wow fadeInUp">
                            <h3>Case Study Information</h3>
                            <ul>
                                <li><span>Client:</span>Olivia Martinez</li>
                                <li><span>Category:</span> E-Commerce Platform...</li>
                                <li><span>Location:</span>Germany</li>
                                <li><span>Duration:</span>6 Months</li>
                                <li><span>Date:</span>25 May, 2025</li>
                            </ul>
                        </div>
                        <!-- Page Category List End -->

                        <!-- Sidebar CTA Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.25s">
                            <div class="sidebar-cta-content">
                                <h3>Get In Touch</h3>
                                <h2>Get in Touch With Our web development Experts</h2>
                                <p>Have a project in mind? Let's build it together.</p>
                            </div>
                            <div class="sidebar-cta-btn">
                                <a href="{{ route('filsbase.contact') }}" class="btn-default btn-highlighted">Let's Talk</a>
                            </div>
                        </div>
                        <!-- Sidebar CTA Box End -->
                    </div>
                </div>

                <div class="col-lg-8">
                    <!-- Case Study Single Content Start -->
                    <div class="case-study-single-content">
                        <!-- Page Single Image Start -->
                        <div class="page-single-image">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('frontend-images/case-study-image-1.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Page Single Image End -->
                        
                        <!-- Case Study Entry Start -->
                        <div class="case-study-entry">
                            <p class="wow fadeInUp">Our team rebuilt a high-traffic e-commerce platform from the ground up, delivering a performant, scalable solution using React and Node.js. The project modernized an aging codebase, dramatically improved page load times, and introduced a streamlined checkout experience that boosted conversion rates significantly.</p>

                            <!-- Case Study Overview Start -->
                            <div class="case-study-overview">
                                <h2 class="text-anime-style-2">Project <span>Overview</span></h2>
                                <p class="wow fadeInUp">The main objective was to rebuild the client's legacy e-commerce platform with a modern React front-end and Node.js API backend, improving performance, scalability, and user experience across all devices.</p>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">This project was designed to help a growing retail brand overcome performance bottlenecks and an outdated tech stack that was limiting their ability to scale and convert visitors into customers.</p>

                                <ul class="wow fadeInUp" data-wow-delay="0.4s">
                                    <li>Migrated legacy codebase to a modern React + Node.js stack</li>
                                    <li>Reduced average page load time by over 60%</li>
                                    <li>Rebuilt checkout flow to improve conversion rates</li>
                                    <li>Implemented CI/CD pipeline for faster, reliable deployments</li>
                                </ul>
                            </div>
                            <!-- Case Study Overview End -->
                            
                            <!-- Case Study Solutions Start -->
                            <div class="case-study-solutions">
                                <h2 class="text-anime-style-2">Challenges & <span>Solutions</span></h2>
                                <p class="wow fadeInUp">A fast-growing e-commerce brand was struggling to scale their aging platform to meet rising traffic demands. Slow load times, a clunky checkout, and limited third-party integrations were directly impacting revenue and customer retention.</p>

                                <!-- Project Solution Item List Start -->
                                <div class="project-solution-item-list">
                                    <!-- Project Solution Item Start -->
                                    <div class="project-solution-item">
                                        <!-- Project Solution Header Start -->
                                        <div class="project-solution-header wow fadeInUp">
                                            <h3>Project Challenges:</h3>
                                            <p>This project was designed to help a growing e-commerce brand overcome performance bottlenecks and deliver a seamless, scalable shopping experience.</p>
                                        </div>
                                        <!-- Project Solution Header End -->

                                        <!-- Project Solution Body Start -->
                                        <div class="project-solution-body">
                                            <!-- Project Solution Body Item Start -->
                                            <div class="project-solution-body-item wow fadeInUp" data-wow-delay="0.2s">
                                                <div class="icon-box">
                                                    <img src="{{ asset('frontend-images/icon-project-solution-body-1.svg') }}" alt="">
                                                </div>
                                                <div class="project-solution-body-content">
                                                    <h3>Scaling Under High Traffic</h3>
                                                    <p>We re-architected the platform with a scalable microservices approach and CDN caching to handle peak traffic loads.</p>
                                                </div>
                                            </div>
                                            <!-- Project Solution Body Item End -->

                                            <!-- Project Solution Body Item Start -->
                                            <div class="project-solution-body-item wow fadeInUp" data-wow-delay="0.4s">
                                                <div class="icon-box">
                                                    <img src="{{ asset('frontend-images/icon-project-solution-body-2.svg') }}" alt="">
                                                </div>
                                                <div class="project-solution-body-content">
                                                    <h3>Modernizing the Tech Stack</h3>
                                                    <p>We migrated from a monolithic legacy setup to a modern React + Node.js architecture with automated CI/CD deployments.</p>
                                                </div>
                                            </div>
                                            <!-- Project Solution Body Item End -->
                                        </div>
                                        <!-- Project Solution Body End -->

                                        <!-- Project Solution Footer Start -->
                                        <div class="project-solution-footer wow fadeInUp" data-wow-delay="0.6s">
                                            <p>This project was designed to help a leading healthcare provider overcome critical compliance challenges while safeguarding sensitive patient information. This project was designed to help a leading healthcare provider overcome critical compliance challenges while safeguarding sensitive patient information.</p>
                                        </div>
                                        <!-- Project Solution Footer End -->
                                    </div>
                                    <!-- Project Solution Item End -->
                                    
                                    <!-- Project Solution Item Start -->
                                    <div class="project-solution-item">
                                        <!-- Project Solution Header Start -->
                                        <div class="project-solution-header wow fadeInUp">
                                            <h3>Project Solutions:</h3>
                                            <p>We delivered a fully modernized platform using an iterative, sprint-based approach — keeping the client involved throughout. Each phase was tested and validated before moving forward, ensuring quality and alignment at every step.</p>
                                        </div>
                                        <!-- Project Solution Header End -->
                                        
                                        <!-- Project Solution Images Start -->
                                        <div class="project-solution-images">
                                            <!-- Project Solution Image Start -->
                                            <div class="project-solution-img">
                                                <figure class="image-anime reveal">
                                                    <img src="{{ asset('frontend-images/project-solution-image-1.jpg') }}" alt="">
                                                </figure>
                                            </div>
                                            <!-- Project Solution Image End -->

                                            <!-- Project Solution Image Start -->
                                            <div class="project-solution-img">
                                                <figure class="image-anime reveal">
                                                    <img src="{{ asset('frontend-images/project-solution-image-2.jpg') }}" alt="">
                                                </figure>
                                            </div>
                                            <!-- Project Solution Image End -->
                                        </div>
                                        <!-- Project Solution Images End -->

                                        <!-- Project Solution List Start -->
                                        <div class="project-solution-list wow fadeInUp" data-wow-delay="0.2s">
                                            <ul>
                                                <li>Migrated legacy codebase to a modern React + Node.js stack</li>
                                                <li>Reduced page load times and improved Core Web Vitals</li>
                                                <li>Rebuilt product catalog and checkout with better UX</li>
                                                <li>Integrated third-party payment, shipping, and analytics APIs</li>
                                            </ul>
                                        </div>
                                        <!-- Project Solution List End -->
                                    </div>
                                    <!-- Project Solution Item End -->
                                </div>
                                <!-- Project Solution Item List End -->
                            </div>
                        </div>
                        <!-- Case Study Entry End -->

                        <!-- Page Single FAQs Start -->
                        <div class="page-single-faqs">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Frequently asked questions</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="faqaccordion">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            Q1. How long does a typical web development project take?
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <p>Timelines vary by project scope. A simple website typically takes 4–6 weeks, while a complex web application with custom features can take 3–6 months. We provide a detailed project timeline during the discovery phase so you always know what to expect.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            Q2. What technologies do you use for development?
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse show" aria-labelledby="heading2" data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <p>We work with modern stacks including React, Next.js, Node.js, and cloud platforms like AWS and Vercel. Our technology choices are guided by your project's performance, scalability, and maintainability requirements — not just trends.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            Q3. Do you offer post-launch support and maintenance?
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <p>Yes. We offer ongoing support and maintenance packages that cover bug fixes, performance monitoring, dependency updates, and feature enhancements. Our team remains available after launch to ensure your product stays healthy and evolves with your business.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            Q4. Can you redesign or improve an existing product?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <p>Absolutely. Many of our projects involve revamping existing systems — improving UX, refactoring codebases, migrating to modern stacks, or integrating new features. We start with a thorough audit before recommending changes to minimize disruption.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                           Q5. Will my application be mobile-friendly and SEO-optimized?
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <p>Yes. All our web applications are built with responsive design and SEO best practices from the start. We optimize for Core Web Vitals, semantic HTML, fast load times, and mobile-first layouts to ensure strong visibility and usability across all devices.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End --> 
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- Page Single FAQs End -->
                    </div>
                    <!-- Case Study Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Case Study Single End -->
@endsection

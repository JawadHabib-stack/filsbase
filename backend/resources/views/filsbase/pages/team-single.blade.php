@extends('filsbase.layouts.app')

@section('title', 'Team Single')

@section('content')
<!-- Page Header Section Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Darrell <span>Steward</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('filsbase.team') }}">Team</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Darrell Steward</li>
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

    <!-- Page Team Single Start -->
    <div class="page-team-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar">
                        <!-- Team Single Image Start -->
                        <div class="team-single-image">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('frontend-images/team-1.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Team Single Image End -->
                    </div>
                    <!-- Page Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Team Single Content Box Start -->
                    <div class="team-single-content-box">
                        <!-- Team Single Content Start -->
                        <div class="team-single-content">
                            <!-- Team Member About Start -->
                            <div class="team-member-about">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h3 class="wow fadeInUp">About me</h3>
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">Darrell <span>Steward</span></h2>
                                    <p class="wow fadeInUp" data-wow-delay="0.2s">Darrell Steward is a full stack developer with over 15 years of experience building scalable web and mobile applications. He specializes in React, Node.js, cloud architecture, and leading engineering teams to deliver high-quality products on time.</p>
                                </div>
                                <!-- Section Title End -->

                                <!-- Team Contact List Start -->
                                <div class="team-contact-list wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="team-contact-list-title">
                                        <h3>Contact Information:</h3>
                                    </div>

                                    <!-- Team Contact Item Start -->
                                    <div class="team-contact-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend-images/icon-position.svg') }}" alt="">
                                        </div>
                                        <div class="team-contact-item-content">
                                            <p>My Positions</p>
                                            <h3>Sr. Full Stack Developer</h3>
                                        </div>
                                    </div>
                                    <!-- Team Contact Item End -->
        
                                    <!-- Team Contact Item Start -->
                                    <div class="team-contact-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend-images/icon-mail-white.svg') }}" alt="">
                                        </div>
                                        <div class="team-contact-item-content">
                                            <p>Email Address</p>
                                            <h3>info@domainname.com</h3>
                                        </div>
                                    </div>
                                    <!-- Team Contact Item End -->
        
                                    <!-- Team Contact Item Start -->
                                    <div class="team-contact-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend-images/icon-phone-white.svg') }}" alt="">
                                        </div>
                                        <div class="team-contact-item-content">
                                            <p>Phone Number</p>
                                            <h3>+(123) 456 - 789</h3>
                                        </div>
                                    </div>
                                    <!-- Team Contact Item End -->
        
                                    <!-- Team Contact Item Start -->
                                    <div class="team-contact-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend-images/icon-location-white.svg') }}" alt="">
                                        </div>
                                        <div class="team-contact-item-content">
                                            <p>Our Location</p>
                                            <h3>2464 Royal, new jersey 45463</h3>
                                        </div>
                                    </div>
                                    <!-- Team Contact Item End -->
                                </div>
                                <!-- Team Contact List End -->
                            </div>
                            <!-- Team Member About Start -->

                            <!-- Team Member Achivement Start -->
                            <div class="team-member-achivement">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h3 class="wow fadeInUp">About me</h3>
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">My <span>Achivements</span></h2>
                                    <p class="wow fadeInUp" data-wow-delay="0.2s">Over the years, I've had the privilege of leading transformative software development projects that helped businesses launch impactful digital products and scale with confidence.</p>
                                </div>
                                <!-- Section Title End -->

                                <!-- Team Achivement List Start -->
                                <div class="team-achivement-list">
                                    <!-- Skills Progress Bar Start -->
                                    <div class="skills-progress-bar">
                                        <!-- Skill Item Start -->
                                        <div class="skillbar" data-percent="75%">
                                            <div class="skill-data">
                                                <div class="skill-title">Frontend Development</div>
                                                <div class="skill-no">75%</div>
                                            </div>
                                            <div class="skill-progress">
                                                <div class="count-bar"></div>
                                            </div>
                                        </div>
                                        <!-- Skill Item End -->
                                    </div>
                                    <!-- Skills Progress Bar End -->
                                    
                                    <!-- Skills Progress Bar Start -->
                                    <div class="skills-progress-bar">
                                        <!-- Skill Item Start -->
                                        <div class="skillbar" data-percent="85%">
                                            <div class="skill-data">
                                                <div class="skill-title">Backend & API Design</div>
                                                <div class="skill-no">85%</div>
                                            </div>
                                            <div class="skill-progress">
                                                <div class="count-bar"></div>
                                            </div>
                                        </div>
                                        <!-- Skill Item End -->
                                    </div>
                                    <!-- Skills Progress Bar End -->
                                    
                                    <!-- Skills Progress Bar Start -->
                                    <div class="skills-progress-bar">
                                        <!-- Skill Item Start -->
                                        <div class="skillbar" data-percent="95%">
                                            <div class="skill-data">
                                                <div class="skill-title">DevOps & Cloud Architecture</div>
                                                <div class="skill-no">95%</div>
                                            </div>
                                            <div class="skill-progress">
                                                <div class="count-bar"></div>
                                            </div>
                                        </div>
                                        <!-- Skill Item End -->
                                    </div>
                                    <!-- Skills Progress Bar End -->
                                </div>
                                <!-- Team Achivement List End -->
                            </div>
                            <!-- Team Member Achivement End -->

                            <!-- Team Member Info Start -->
                            <div class="team-member-info">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">Personal <span>Information</span></h2>
                                    <p class="wow fadeInUp">Darrell's expertise spans frontend and backend development, cloud infrastructure, CI/CD automation, and software architecture. He excels at translating business requirements into clean, maintainable code.</p>
                                    <p class="wow fadeInUp" data-wow-delay="0.2s">He has successfully led cross-functional engineering teams delivering SaaS platforms, e-commerce solutions, and fintech applications. His work combines technical excellence with strong communication, making him a trusted lead on complex projects.</p>
                                </div>
                                <!-- Section Title End -->

                                <!-- Member Info Body Start -->
                                <div class="member-info-body">
                                    <!-- Member Info List Start -->
                                    <div class="member-info-list wow fadeInUp" data-wow-delay="0.4s">
                                        <ul>
                                            <li>Specialized in React, Node.js, and cloud-native architectures.</li>
                                            <li>Strong believer in clean code, test coverage, and agile delivery.</li>
                                            <li>Over a decade of hands-on experience building production web applications.</li>
                                            <li>Continuously advancing skills with modern frameworks and cloud certifications.</li>
                                        </ul>
                                    </div>
                                    <!-- Member Info List End -->

                                    <!-- Contact Us Circle Start -->
                                    <div class="contact-us-circle">
                                        <a href="{{ route('filsbase.contact') }}">
                                            <img src="{{ asset('frontend-images/contact-us-circle.svg') }}" alt="">
                                        </a>
                                    </div>
                                    <!-- Contact Us Circle End -->
                                </div>
                                <!-- Member Info Body End -->
                            </div>
                            <!-- Team Member Info End -->
                        </div>
                        <!-- Team Single Content End -->

                        <!-- Contact Form Start -->
                        <div class="contact-us-form team-contact-form">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Connect <span>With Me</span></h2>
                                <p class="wow fadeInUp">I'm always open to meaningful conversations, collaborations, and opportunities to work on exciting new products — whether it's a startup idea, a complex platform, or an engineering challenge worth solving.</p>
                            </div>
                            <!-- Section Title End -->

                            <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.2s">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <label class="form-label">First Name *</label>
                                        <input type="text" name="fname" class="form-control" id="fname" placeholder="Your First Name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
            
                                    <div class="form-group col-md-6 mb-4">
                                        <label class="form-label">Last Name *</label>
                                        <input type="text" name="lname" class="form-control" id="lname" placeholder="Your Last Name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    
                                    <div class="form-group col-md-6 mb-4">
                                        <label class="form-label">Email Address *</label>
                                        <input type="email" name ="email" class="form-control" id="email" placeholder="Your Email Address" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label class="form-label">Phone Number *</label>
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone Number" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
            
                                    <div class="form-group col-md-12 mb-5">
                                        <label class="form-label">Message</label>
                                        <textarea name="message" class="form-control" id="message" rows="5" placeholder="Any Message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
            
                                    <div class="col-lg-12">
                                        <div class="contact-form-btn">
                                            <button type="submit" class="btn-default"><span>Submit Form</span></button>
                                            <div id="msgSubmit" class="h3 hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Team Single Content Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Team Single End -->
@endsection

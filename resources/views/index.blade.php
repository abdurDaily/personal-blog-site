@extends('frontend.layout')
@section('frontend_contains')

    <!-- Home Subpage -->
    <section class="pt-page" data-id="about-me">
        <div class="container">
            <div class="section-inner start-page-full-width">
                <div class="start-page-full-width">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 order-lg-2 ">
                            <div class="inner-content">
                                <div class="fill-block" style="background-image: url({{ asset('assets/images/images/abdurdaily.jpg') }})"></div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 order-lg-1">
                            <div class="inner-content">
                                <div class="hp-text-block">
                                    <!-- Text rotation / Subtitle -->
                                    <div class="owl-carousel text-rotation">
                                        <div class="item">
                                            <div class="sp-subtitle">Web Designer</div>
                                        </div>
                                        <div class="item">
                                            <div class="sp-subtitle">Frontend-developer</div>
                                        </div>
                                    </div>
                                    <!-- /Text rotation / Subtitle -->
                                    <h2 class="hp-main-title">Abdur Rahman</h2>
                                    <p>I have years of experience building and creating reliable, user-friendly internet applications, My expertise spans JavaScript, jQuery, React.js, PHP, and Laravel, enabling me to create dynamic and scalable solutions that meet diverse client needs. Currently, I serve as a faculty member at the "Creative IT Chittagong" branch, where I mentor and train aspiring developers, blending academic instruction with real-world industry practices.</p>
                                    <p>As an educator, I am committed to bridging the gap between theory and application, equipping students with industry-ready skills. Through continuous learning and innovation, I strive to stay ahead in web development trends and inspire growth in the tech community.</p>
                                    
                                    <div class="hp-buttons">
                                        <a href="https://www.linkedin.com/in/abdurdaily/" target="_blank" class="btn btn-primary">Download CV</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-inner custom-page-content">
                <div class="page-content">
                    <!-- Services Block Title -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="col-inner">
                                <div class="block-title">
                                    <h3>What I Do</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Services Block Title -->
                    <!-- Services Block -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="col-inner">
                                <div class="info-list-w-icon">
                                    <!-- Service Item 1 -->
                                    <div class="info-block-w-icon">
                                        <div class="ci-icon">
                                            <i class="lnr lnr-store"></i>
                                        </div>
                                        <div class="ci-text">
                                            <h4>Ecommerce</h4>
                                            <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum
                                                massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales odio.</p>
                                        </div>
                                    </div>
                                    <!-- /Service Item 1 -->
                                    <!-- Service Item 2 -->
                                    <div class="info-block-w-icon">
                                        <div class="ci-icon">
                                            <i class="lnr lnr-laptop-phone"></i>
                                        </div>
                                        <div class="ci-text">
                                            <h4>Web Design</h4>
                                            <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum
                                                massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales odio.</p>
                                        </div>
                                    </div>
                                    <!-- Service Item 2 -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="col-inner">
                                <div class="info-list-w-icon">
                                    <!-- Service Item 3 -->
                                    <div class="info-block-w-icon">
                                        <div class="ci-icon">
                                            <i class="lnr lnr-pencil"></i>
                                        </div>
                                        <div class="ci-text">
                                            <h4>Copywriter</h4>
                                            <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum
                                                massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales odio.</p>
                                        </div>
                                    </div>
                                    <!-- Service Item 3 -->
                                    <!-- Service Item 4 -->
                                    <div class="info-block-w-icon">
                                        <div class="ci-icon">
                                            <i class="lnr lnr-flag"></i>
                                        </div>
                                        <div class="ci-text">
                                            <h4>Management</h4>
                                            <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum
                                                massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales odio.</p>
                                        </div>
                                    </div>
                                    <!-- Service Item 4 -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Services Block -->
                    <!-- Testimonials Block -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="col-inner ts-25 bs-50">
                                <!-- Testimonials Block Title -->
                                <div class="block-title">
                                    <h3>Testimonials<span></span></h3>
                                </div>
                                <!-- /Testimonials Block Title -->
                                <!-- Testimonials Carousel Block -->
                                <div class="testimonials owl-carousel">
                                    <!-- Testimonial 1 -->
                                    <div class="testimonial-item">
                                        <!-- Testimonial Content -->
                                        <div class="testimonial-content">
                                            <div class="testimonial-text">
                                                <p>Nam tempor commodo mi id sodales. Aenean sit amet nibh nec sapien consequat
                                                    porta a sit amet diam.</p>
                                            </div>
                                        </div>
                                        <!-- /Testimonial Content -->
                                        <!-- Testimonial Author -->
                                        <div class="testimonial-credits">
                                            <!-- Picture -->
                                            <div class="testimonial-picture">
                                                <img src="{{ asset('assets/images/testimonials/testimonial-2.jpg') }}"
                                                    alt="Gary Johnson" />
                                            </div>
                                            <!-- /Picture -->
                                            <!-- Testimonial author information -->
                                            <div class="testimonial-author-info">
                                                <p class="testimonial-author">Gary Johnson</p>
                                                <p class="testimonial-firm">Locost Accessories</p>
                                            </div>
                                        </div>
                                        <!-- /Testimonial author information -->
                                    </div>
                                    <!-- End of Testimonial 1 -->
                                    <!-- Testimonial 2 -->
                                    <div class="testimonial-item">
                                        <!-- Testimonial Content -->
                                        <div class="testimonial-content">
                                            <div class="testimonial-text">
                                                <p>Donec eu est vel metus consequat volutpat. Nunc aliquet euismod mauris, a
                                                    feugiat urna ullamcorper non.</p>
                                            </div>
                                        </div>
                                        <!-- /Testimonial Content -->
                                        <!-- Testimonial Author -->
                                        <div class="testimonial-credits">
                                            <!-- Picture -->
                                            <div class="testimonial-picture">
                                                <img src="{{ asset('assets/images/testimonials/testimonial-1.jpg') }}"
                                                    alt="Daniel Pringle" />
                                            </div>
                                            <!-- /Picture -->
                                            <!-- Testimonial author information -->
                                            <div class="testimonial-author-info">
                                                <p class="testimonial-author">Daniel Pringle</p>
                                                <p class="testimonial-firm">Rolling Thunder</p>
                                            </div>
                                        </div>
                                        <!-- /Testimonial author information -->
                                    </div>
                                    <!-- End of Testimonial 2 -->
                                    <!-- Testimonial 3 -->
                                    <div class="testimonial-item">
                                        <!-- Testimonial Content -->
                                        <div class="testimonial-content">
                                            <div class="testimonial-text">
                                                <p>Etiam pretium ipsum quis justo dictum accumsan. Phasellus egestas odio a
                                                    velit scelerisque, imperdiet elementum lorem aliquet.</p>
                                            </div>
                                        </div>
                                        <!-- /Testimonial Content -->
                                        <!-- Testimonial Author -->
                                        <div class="testimonial-credits">
                                            <!-- Picture -->
                                            <div class="testimonial-picture">
                                                <img src="{{ asset('assets/images/testimonials/testimonial-3.jpg') }}"
                                                    alt="Billy Adams" />
                                            </div>
                                            <!-- /Picture -->
                                            <!-- Testimonial author information -->
                                            <div class="testimonial-author-info">
                                                <p class="testimonial-author">Billy Adams</p>
                                                <p class="testimonial-firm">Sagebrush</p>
                                            </div>
                                        </div>
                                        <!-- /Testimonial author information -->
                                    </div>
                                    <!-- End of Testimonial 3 -->
                                </div>
                                <!-- /Testimonials Carousel Block -->
                            </div>
                        </div>
                    </div>
                    <!-- /Testimonials Block -->
                    <!-- Clients Block -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="col-inner">
                                <!-- Clients Block Title -->
                                <div class="block-title">
                                    <h3>Clients<span></span></h3>
                                </div>
                                <!-- /Clients Block Title -->
                                <!-- Clients Carousel Block -->
                                <div class="clients owl-carousel">
                                    <div class="client-block">
                                        <a href="#" target="_blank" title="Logo">
                                            <img src="{{ asset('assets/images/clients/client-7.png') }}" alt="Logo">
                                        </a>
                                    </div>
                                    <div class="client-block">
                                        <a href="#" target="_blank" title="Logo">
                                            <img src="{{ asset('assets/images/clients/client-6.png') }}" alt="Logo">
                                        </a>
                                    </div>
                                    <div class="client-block">
                                        <a href="#" target="_blank" title="Logo">
                                            <img src="{{ asset('assets/images/clients/client-5.png') }}" alt="Logo">
                                        </a>
                                    </div>
                                    <div class="client-block">
                                        <a href="#" target="_blank" title="Logo">
                                            <img src="{{ asset('assets/images/clients/client-4.png') }}" alt="Logo">
                                        </a>
                                    </div>
                                    <div class="client-block">
                                        <a href="#" target="_blank" title="Logo">
                                            <img src="{{ asset('assets/images/clients/client-3.png') }}" alt="Logo">
                                        </a>
                                    </div>
                                    <div class="client-block">
                                        <a href="#" target="_blank" title="Logo">
                                            <img src="{{ asset('assets/images/clients/client-2.png') }}" alt="Logo">
                                        </a>
                                    </div>
                                    <div class="client-block">
                                        <a href="#" target="_blank" title="Logo">
                                            <img src="{{ asset('assets/images/clients/client-1.png') }}" alt="Logo">
                                        </a>
                                    </div>
                                </div>
                                <!-- /Clients Carousel Block -->
                            </div>
                        </div>
                    </div>
                    <!-- /Clients Block -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of Home Subpage -->



    <!-- Resume Subpage -->
    <section class="pt-page" data-id="resume">
        <div class="container">
            <div class="section-inner custom-page-content">
                <div class="section-title-block second-style">
                    <h2 class="section-title">Resume</h2>
                    {{-- <h5 class="section-description">7 Years of Experience</h5> --}}
                </div>

                <div class="section-content ">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8">
                            <div class="col-inner bs-30">
                                <div class="block-title">
                                    <h3>Education</h3>
                                </div>

                                <div class="timeline timeline-second-style bs-30 clearfix">

                                    @forelse ($educations as $education)
                                        <div class="timeline-item clearfix">
                                            <div class="left-part">
                                                <h5 class="item-period">{{ $education->year }}</h5>
                                                <span class="item-company">{{ $education->institute }}</span>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="right-part">
                                                <h4 class="item-title">{{ $education->title }}</h4>
                                                <p>{{ $education->description }}</p>
                                            </div>
                                        </div>

                                    @empty
                                        <div class="timeline-item clearfix">
                                            <span>No Educational Data Found!</span>
                                        </div>
                                    @endforelse
                                </div>

                                <div class="block-title">
                                    <h3>Experience<span></span></h3>
                                </div>


                                @forelse ($experiences as $experience)
                                    <div class="timeline timeline-second-style clearfix">
                                        <div class="timeline-item clearfix">
                                            <div class="left-part">
                                                <h5 class="item-period">{{ $experience->year }}</h5>
                                                <span class="item-company">{{ $experience->institute }}</span>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="right-part">
                                                <h4 class="item-title">{{ $experience->title }}</h4>
                                                <p>{{ $experience->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="timeline timeline-second-style clearfix">
                                        <span>No Experience Data Found</span>
                                    </div>
                                @endforelse

                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4">
                            <div class="col-inner">

                                <div class="block-title">
                                    <h3>Design Skills<span></span></h3>
                                </div>




                                @forelse ($skills as $skill)
                                    <div class="skills-info skills-second-style">
                                        <!-- Skill 1 -->
                                        <div class="clearfix">
                                            <h4>{{ $skill->title }}</h4>
                                            <div class="skill-value">{{ $skill->skill_range }}%</div>
                                        </div>
                                        <div class="progress skill-container" role="progressbar"
                                            aria-label="Warning example" aria-valuenow="75" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="skill-percentage progress-bar text-bg-warning"
                                                style="width: {{ $skill->skill_range }}%"></div>
                                        </div>
                                        <!-- /Skill 1 -->
                                    </div>


                                @empty
                                    <div class="skills-info skills-second-style">
                                        <span>No Skills Found!</span>
                                    </div>
                                @endforelse

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="col-inner ts-30">
                                <a href="#" target="_blank" class="btn btn-primary">Download CV</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Resume Subpage -->



    <!-- Portfolio Subpage -->
    <section class="pt-page" data-id="portfolio">
        <div class="container">
            <div class="section-inner custom-page-content">
                <div class="section-title-block second-style">
                    <h2 class="section-title">Portfolio</h2>
                    <h5 class="section-description">My Works</h5>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <!-- Portfolio Content -->
                            <div class="portfolio-content">
                                <ul class="portfolio-filters">
                                    <li class="active">
                                        <a class="filter btn btn-sm btn-link" data-group="category_all">All</a>
                                    </li>
                                    <li>
                                        <a class="filter btn btn-sm btn-link" data-group="category_media">Media</a>
                                    </li>
                                    <li>
                                        <a class="filter btn btn-sm btn-link" data-group="category_mockups">Mockups</a>
                                    </li>
                                    <li>
                                        <a class="filter btn btn-sm btn-link" data-group="category_soundcloud">SoundCloud</a>
                                    </li>
                                    <li>
                                        <a class="filter btn btn-sm btn-link" data-group="category_vimeo-videos">Vimeo
                                            Videos</a>
                                    </li>
                                    <li>
                                        <a class="filter btn btn-sm btn-link" data-group="category_youtube-videos">YouTube
                                            Videos</a>
                                    </li>
                                </ul>
                                <!-- Portfolio Grid -->
                                <div class="portfolio-grid three-columns">
                                    <figure class="item lbaudio" data-groups='["category_all", "category_soundcloud"]'>
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('assets/images/portfolio/1.jpg') }}" alt="SoundCloud Audio"
                                                title="" />
                                            <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/221650664&#038;color=%23ff5500&#038;auto_play=false&#038;hide_related=false&#038;show_comments=true&#038;show_user=true&#038;show_reposts=false&#038;show_teaser=true&#038;visual=true"
                                                class="lightbox mfp-iframe" title="SoundCloud Audio"></a>
                                        </div>
                                        <i class="fa fa-volume-up"></i>
                                        <h4 class="name">SoundCloud Audio</h4>
                                        <span class="category">SoundCloud</span>
                                    </figure>
                                    <figure class="item standard" data-groups='["category_all", "category_media"]'>
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('assets/images/portfolio/2.jpg') }}" alt="Media Project 2"
                                                title="" />
                                            <a href="portfolio-1.html" class="ajax-page-load"></a>
                                        </div>
                                        <i class="far fa-file-alt"></i>
                                        <h4 class="name">Media Project 2</h4>
                                        <span class="category">Media</span>
                                    </figure>
                                    <figure class="item lbvideo" data-groups='["category_all", "category_vimeo-videos"]'>
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('assets/images/portfolio/3.jpg') }}" alt="Vimeo Video 1"
                                                title="" />
                                            <a href="https://player.vimeo.com/video/158284739" class="lightbox mfp-iframe"
                                                title="Vimeo Video 1"></a>
                                        </div>
                                        <i class="fas fa-video"></i>
                                        <h4 class="name">Vimeo Video 1</h4>
                                        <span class="category">Vimeo Videos</span>
                                    </figure>
                                    <figure class="item standard" data-groups='["category_all", "category_media"]'>
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('assets/images/portfolio/4.jpg') }}" alt="Media Project 1"
                                                title="" />
                                            <a href="portfolio-1.html" class="ajax-page-load"></a>
                                        </div>
                                        <i class="far fa-file-alt"></i>
                                        <h4 class="name">Media Project 1</h4>
                                        <span class="category">Media</span>
                                    </figure>
                                    <figure class="item lbimage" data-groups='["category_all", "category_mockups"]'>
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('assets/images/portfolio/5.jpg') }}" alt="Mockup Design 1"
                                                title="" />
                                            <a class="lightbox" title="Mockup Design 1" href="images/portfolio/5.jpg"></a>
                                        </div>
                                        <i class="far fa-image"></i>
                                        <h4 class="name">Mockup Design 1</h4>
                                        <span class="category">Mockups</span>
                                    </figure>
                                    <figure class="item lbvideo" data-groups='["category_all", "category_youtube-videos"]'>
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('assets/images/portfolio/6.jpg') }}" alt="YouTube Video 1"
                                                title="" />
                                            <a href="https://www.youtube.com/embed/bg0gv2YpIok" class="lightbox mfp-iframe"
                                                title="YouTube Video 1"></a>
                                        </div>
                                        <i class="fas fa-video"></i>
                                        <h4 class="name">YouTube Video 1</h4>
                                        <span class="category">YouTube Videos</span>
                                    </figure>
                                </div>
                            </div>
                            <!-- /Portfolio Content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Portfolio Subpage -->


    <!-- Blog Subpage -->
    <section class="pt-page" data-id="blog">
        <div class="container">
            <div class="section-inner custom-page-content">
                <div class="section-title-block second-style">
                    <h2 class="section-title">Blog</h2>
                    <h5 class="section-description">My Diary</h5>
                </div>
    
                <div class="section-content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="blog-masonry two-columns clearfix">
    
                                <!-- Blog Post 1 -->
                                @forelse ($blogs as $blog)
                                 
                                <div class="item post-1">
                                    <div class="blog-card">
                                        <div class="media-block">
                                            <div class="category">
                                                {{-- <a href="#" title="View all posts in UI">UI</a> --}}
                                            </div>
                                            <a href="{{ route('view.blog.details') }}">
                                                <img style="max-height: 250px; height:100%; width:100%; object-fit:cover;" src="{{ $blog->blog_preview_image ? $blog->blog_preview_image : asset('assets/images/blog/blog_post_6.jpg') }}"
                                                    class="size-blog-masonry-image-two-c"
                                                    alt="Best Practices for Animated Progress Indicators" title="" />
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <div class="post-date">{{ $blog->created_at->format('d-M-Y') }}</div>
                                            <a href="blog-post-1.html">
                                                <h4 class="blog-item-title">{{ Str::limit($blog->blog_title, 100, '...') }}
                                                </h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                   
                                @empty
                                    <span>No Blog data found !</span>
                                @endforelse
                                <!-- End of Blog Post 1 -->
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Blog Subpage -->



    <!-- Contact Subpage -->
    <section class="pt-page" data-id="contact">
        <div class="container">
            <div class="section-inner custom-page-content">
                <div class="section-title-block second-style">
                    <h2 class="section-title">Contact</h2>
                    <h5 class="section-description">Get in Touch</h5>
                </div>
    
                {{-- <div class="section-content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div id="map" class="map"></div>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-xs-12 col-sm-3">
                            <div class="col-inner bs-30">
                                <div class="lm-info-block gray-default">
                                    <i class="lnr lnr-phone-handset"></i>
                                    <h4>415-832-2000</h4>
                                    <span class="lm-info-block-value"></span>
                                    <span class="lm-info-block-text"></span>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-xs-12 col-sm-3">
                            <div class="col-inner bs-30">
                                <div class="lm-info-block gray-default">
                                    <i class="lnr lnr-map-marker"></i>
                                    <h4>San Francisco</h4>
                                    <span class="lm-info-block-value"></span>
                                    <span class="lm-info-block-text"></span>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-xs-12 col-sm-3">
                            <div class="col-inner bs-30">
                                <div class="lm-info-block gray-default">
                                    <i class="lnr lnr-envelope"></i>
                                    <h4><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="1a7b767f625a7f627b776a767f34797577">[email&#160;protected]</a></h4>
                                    <span class="lm-info-block-value"></span>
                                    <span class="lm-info-block-text"></span>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-xs-12 col-sm-3">
                            <div class="col-inner bs-30">
                                <div class="lm-info-block gray-default">
                                    <i class="lnr lnr-checkmark-circle"></i>
                                    <h4>Freelance Available</h4>
                                    <span class="lm-info-block-value"></span>
                                    <span class="lm-info-block-text"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
    
                <div class="row">
                    <div class=" col-xs-12 col-sm-8 offset-sm-1 offset-sm-2">
                        <div class="col-inner ts-20">
                            <div class="block-title">
                                <h3>How Can I Help You?</h3>
                            </div>
    
                            {{-- <form id="contact_form" class="contact-form" action="contact_form/contact_form.php"
                                method="post"> --}}
    
                            <form class="contact-form" action="{{ route('backend.contact.store') }}" method="post">
                                @csrf
    
                                <div class="messages"></div>
    
                                <div class="controls two-columns">
                                    <div class="fields clearfix">
                                        <div class="left-column">
                                            <div class="form-group form-group-with-icon">
                                                <input id="form_name" type="text" name="name" class="form-control"
                                                    placeholder="Full Name" required="required"
                                                    data-error="Name is required.">
                                                <div class="form-control-border"></div>
                                                <div class="help-block with-errors"></div>
                                            </div>
    
                                            <div class="form-group form-group-with-icon">
                                                <input id="form_email" type="email" name="email" class="form-control"
                                                    placeholder="Email Address" required="required"
                                                    data-error="Valid email is required.">
                                                <div class="form-control-border"></div>
                                                <div class="help-block with-errors"></div>
                                            </div>
    
                                            <div class="form-group form-group-with-icon">
                                                <input id="form_subject" type="text" name="subject" class="form-control"
                                                    placeholder="Subject" required="required"
                                                    data-error="Subject is required.">
                                                <div class="form-control-border"></div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="right-column">
                                            <div class="form-group form-group-with-icon">
                                                <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="7"
                                                    required="required" data-error="Please, leave me a message."></textarea>
                                                <div class="form-control-border"></div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
    
                                    {{-- <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"></div> --}}
    
                                    <div class="alert alert-success alert-message" style="display: none;" role="alert"></div>
    
    
                                    <button type="submit" class="button btn-send">Send message</button>
                                    {{-- <input type="submit" class="button btn-send" value="Send message"> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>
    <!-- End Contact Subpage -->


    
    @push('frontend_js')
    <script>
        $(function(){
            $('.contact-form').on('submit', function(e){
                e.preventDefault();
                let formData = $(this).serialize();
             
                $.ajax({
                    type: 'POST',
                    url: `{{ route('backend.contact.store') }}`,
                    data: formData,
                    success: function(res){
                        // Set the alert message
                        $('.alert-message').html(res.success);
                        
                        // Show the alert
                        $('.alert-message').show();


                        $('.contact-form')[0].reset();
                        
                        // Optionally, hide the alert after a few seconds
                        setTimeout(function() {
                            $('.alert-message').fadeOut();
                        }, 2000); // 2000 milliseconds = 5 seconds
                    },
                    error: function(xhr) {
                        // Handle error response if needed
                        $('.alert-message').html('An error occurred. Please try again.').removeClass('alert-success').addClass('alert-danger').show();
                    }
                });
            });
        });
    </script>
    @endpush



@endsection

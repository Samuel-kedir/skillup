@php

    use Carbon\Carbon;

@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <title>SkillUp ET Bootcamp | Tech Courses for Ethiopians in the USA, Europe, and Australia</title>

    <meta name="description"
        content="SkillUp ET Bootcamp offers live, instructor-led tech courses exclusively for Ethiopians living in the USA, Europe, and Australia. Specializing in Data Analytics, Microsoft Power Platform, and Programming, we focus on absolute beginners and career changers. Our interactive bootcamp, taught in Amharic, ensures job readiness and prepares students for Microsoft PL Exams. Register today to start your tech journey with instructors who simplify every concept for easy understanding." />

    <meta name="keywords"
        content="Ethiopians in USA tech bootcamp, Ethiopians in Europe tech courses, Habeshans learning tech, Data Analytics for Ethiopians, Power BI courses for beginners, Microsoft Power Platform training, Tech for Ethiopians abroad, Amharic tech courses, Python for beginners Ethiopia, Excel, SQL, Power BI training, DMV Area tech bootcamp for Ethiopians, Microsoft PL Exam prep, Career change to tech Ethiopia" />

    <meta name="author" content="SkillUp ET Bootcamp" />
    <meta name="robots" content="index, follow" />




    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/templatemo-scholar.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />


    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->

    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <h1 style="display: inline-flex; flex-wrap:nowrap;"><span>skillup</span> <sub
                                    style="vertical-align: super">et</sub></h1>
                            {{-- <span>Skill Up ET Online BootCamp</span> --}}
                        </a>

                        <ul class="nav">
                            <li class="scroll-to-section">
                                <a href="#top" class="active">Home</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="#about">About</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="#courses">Courses</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="#webinars">Webinars</a>
                            </li>

                            <li class="scroll-to-section">
                                <a href="#contact">Contact</a>
                            </li>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>



    <!-- ***** Header Area End ***** -->

    {{-- main banner --}}


    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-banner">
                        @foreach ($banners as $banner)
                            <div class="item item-3"
                                style="background-image: url('{{ asset('storage/' . $banner->background_image) }}');">
                                <div class="header-text">
                                    <span class="category">{{ $banner->category }}</span>
                                    <h2>{{ $banner->title }}</h2>
                                    <p>
                                        {{ $banner->description }}
                                    </p>
                                    <div class="buttons">
                                        <div class="main-button">
                                            <a
                                                href="{{ $banner->register_button_link }}">{{ $banner->register_button_text }}</a>

                                        </div>
                                        <div class="icon-button">
                                            <span class="show-video">
                                                <i class="fa fa-play"></i> {{ $banner->video_button_text }}
                                            </span>
                                            <div class="video-container" style="display: none;">
                                                <button class="btn close-btn close-video"
                                                    style="position: absolute; top: 10px; right: 20px;">X</button>

                                                <div class="embed-responsive">
                                                    <iframe id="video-frame-{{ $loop->index }}"
                                                        data-src="{{ $banner->youtube_video_url }}?rel=0"
                                                        src="{{ $banner->youtube_video_url }}?rel=0"
                                                        title="Skill UP Youtube" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        referrerpolicy="strict-origin-when-cross-origin"
                                                        allowfullscreen>
                                                    </iframe>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- main banner ends --}}

    {{-- services start --}}
    <div class="services section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="images/service-01.png" alt="Online Courses"
                                style="height: 86px; width: 86px; color: white;" /> <!-- Adjust icon size and color -->
                        </div>
                        <div class="main-content">
                            <h4>Online Courses</h4>
                            <p>
                                Gain expertise with our top-notch online courses designed for practical skills.
                            </p>
                            <div class="main-button">
                                <a href="#courses">Explore Courses</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="images/service-02.png" alt="Flexible Scheduling"
                                style="height: 86px; width: 86px; color: white;" /> <!-- Adjust icon size and color -->
                        </div>
                        <div class="main-content">
                            <h4>Flexible Scheduling</h4>
                            <p>
                                Classes held three times a week, easily fitting your schedule.
                            </p>
                            <div class="main-button">
                                <a href="#webinars">Join a Webinar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="images/service-03.png" alt="Expert Instruction"
                                style="height: 86px; width: 86px; color: white;" /> <!-- Adjust icon size and color -->
                        </div>
                        <div class="main-content">
                            <h4>Expert Instruction</h4>
                            <p>
                                Learn from experienced professionals dedicated to your success.
                            </p>
                            <div class="main-button">
                                <a href="#contact">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- services ends  --}}


    {{-- about us starts --}}

    <div class="section about-us" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-1">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is SkillUpET’s Teaching Philosophy?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    At SkillUpET, our focus is "student first." We ensure every student is supported,
                                    understands every concept without jargon, and is prepared for real-world jobs
                                    through practical projects and exercises.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How do you accommodate busy schedules?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We understand the demands of our students' busy lives and family commitments. Our
                                    classes are scheduled to fit into their lives, starting from the basics and building
                                    up to advanced skills.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    What makes your classes unique?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our classes are engaging and fun, with breakout sessions and group work. We create a
                                    friendly environment to ensure learning is effective and enjoyable, preparing
                                    students thoroughly for their careers.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    How do you prove your effectiveness?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our effectiveness is proven through the success and testimonials of our previous
                                    students. Their experiences validate our commitment to delivering on our promises.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>About Us</h6>
                        <h2>Why Choose SkillUpET?</h2>
                        <p>
                            At SkillUpET, we are dedicated to empowering Ethiopians abroad with practical skills and
                            real-world experience. Our student-centered approach ensures that every lesson is a stepping
                            stone to career success.
                        </p>
                        <div class="main-button">
                            <a href="#contact">Request a Callback</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- about us ends --}}


    {{-- course starts --}}


    <section class="section courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="text-center col-lg-12">
                    <div class="section-heading">
                        <h6>Instructor Led</h6>
                        <h2>Latest Courses</h2>
                    </div>
                </div>
            </div>
            <ul class="event_filter">
                <li><a href="#!" data-filter="*">Show All</a></li>
                <li>
                    <a href="#!" class="is_active" data-filter=".featured">Featured</a>
                </li>
                @foreach ($courses->pluck('category')->unique() as $category)
                    <li><a href="#!"
                            data-filter=".{{ str_replace(' ', '', strtolower($category->name)) }}">{{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>


            <div class="row event_box" style="overflow:visible;">
                @foreach ($courses as $course)
                    <div
                        class="col-lg-4 col-md-6 align-self-center mb-30 event_outer  {{ $course->featured ? 'featured' : '' }} {{ str_replace(' ', '', strtolower($course->category->name)) }}">
                        <div class="events_item">
                            <div class="thumb ">
                                <div class="image-container">
                                    <a href="courses/{{ $course->slug }}" class="block">
                                        <img src="{{ asset('storage/' . $course->course_icon) }}"
                                            style="height: 250px; object-fit: cover; max-height: 50vh"
                                            alt="{{ $course->slug }} Course" />
                                        <div class="overlay"></div>
                                    </a>
                                </div>

                                <span class="category">{{ $course->category->name }}
                                </span>
                                <span class="price">
                                    {{-- <h6>{{ $course->duration }}<em><sup> Weeks</sup></em></h6> --}}

                                    @php
                                        // Use regular expression to extract number and text separately
                                        preg_match('/(\d+)\s*(\w+)/', $course->duration, $matches);

                                        // $matches[1] will have the number (e.g., 2 or 4)
                                        // $matches[2] will have the text (e.g., Weeks or Months)
                                        $number = $matches[1] ?? ''; // Number part
                                        $text = ucfirst($matches[2]) ?? ''; // Text part, capitalizing the first letter
                                    @endphp

                                    <h6>{{ $number }}<em><sup> {{ $text }}</sup></em></h6>
                                </span>

                            </div>
                            <a href="courses/{{ $course->slug }}">

                                <div class="down-content">
                                    @php

                                        $dateString = $course->start_date; // Assuming this is a Carbon/Date object or a date string
                                        $formattedDate = Carbon::parse($dateString)->format('F j'); // Format to "Month Name Day"
                                    @endphp

                                    <span class="author">Date: {{ $formattedDate }}</span>
                                    <h4>{{ $course->title }}</h4>
                                </div>
                            </a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    {{-- course ends --}}


    {{-- facts starts --}}
    <div class="section fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2>100%</h2>
                                    <p class="count-text">Satisfaction Rate</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="250" data-speed="1000"></h2>
                                    <p class="count-text">Total Course Hours</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="12" data-speed="1000"></h2>
                                    <p class="count-text">Portfolio Projects</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter end">
                                    <h2 class="timer count-title count-number" data-to="10" data-speed="1000"></h2>
                                    <p class="count-text">Courses Offered</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- facts ends --}}
    <div class="container team-title" >
        <div class="row">
            <div class="text-center col-lg-12">
                <div class="section-heading">
                    <h6>Highly Effective</h6>
                    <h2>Our Instructors</h2>
                </div>
            </div>
        </div>
        <div class="team section" id="team">

            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-lg-4 col-md-6">
                        <div class="team-member">
                            <div class="main-content">
                                <img src="{{ asset('storage/' . $team->image) }}" alt="" />
                                <span class="category">{{ $team->category }}</span>
                                <h4>{{ $team->name }}</h4>
                                <ul class="social-icons">
                                    <li>
                                        <a href="{{ $team->instagram }}"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $team->gmail }}"><i class="fab fa-google"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $team->linkedin }}"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach





            </div>
        </div>

    </div>

    {{-- Testimonial Begins --}}
    <div class="section testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="owl-carousel owl-testimonials">

                        @foreach ($testimonials as $testimonial)
                            <div class="item">
                                <p>{{ $testimonial->testimonial }}</p>
                                <div class="author">
                                    <img src="{{ asset('storage/' . $testimonial->author_image) }}" alt="" />
                                    <span class="category">{{ $testimonial->author_category }}</span>
                                    <h4>{{ $testimonial->author_name }}</h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>{{ $testimonialSection->title }}</h6>
                        <h2>{{ $testimonialSection->subtitle }}</h2>
                        <p>{!! $testimonialSection->description !!} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Testimonial Ends --}}

    {{-- Events --}}
    <div class="section events" id="webinars">
        <div class="container">
            <div class="row">
                <div class="text-center col-lg-12">
                    <div class="section-heading">
                        <h6>Schedule</h6>
                        <h2>Upcoming Events</h2>
                    </div>
                </div>
                @foreach ($events as $event)
                    <div class="col-lg-12 col-md-6">
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="image" >
                                        <img style="height: 200px; max-height: 200px ; object-fit: cover; "
                                            src="{{ $event->image_path }}" alt="{{ $event->title }}" />
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <ul>
                                        <li>
                                            <span class="category">{{ $event->category }}</span>
                                            <h4>{{ $event->title }}</h4>
                                        </li>
                                        <li>
                                            <span>Date:</span>
                                            <h6>{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</h6>
                                        </li>
                                        <li>
                                            <span>Duration:</span>
                                            <h6>{{ $event->duration }} Hours</h6>
                                        </li>
                                        <li>
                                            <span>Price:</span>
                                            <h6>${{ $event->price }}</h6>
                                        </li>
                                    </ul>
                                    <a href="{{ $event->registration_link }}"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- Events --}}


    <div class="contact-us section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="section-heading">
                        <h6>Contact Us</h6>
                        <h2>Feel free to reach out anytime</h2>
                        <p>
                            We're here to support your journey into tech. If you have questions or need more info about
                            our courses, don’t hesitate to contact us. Let's help you succeed!
                        </p>


                        <div class="special-offer">
                            <span class="offer">off<br /><em>50%</em></span>
                            <h6>Valid: <em>15 October 2024</em></h6>
                            <h4>Special Offer <em>50% OFF! </em></h4>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-us-content">
                        <form id="contact-form" action="{{ route('submit.message') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="name" name="name" id="name"
                                            placeholder="Your Name..." autocomplete="on" required />
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                            placeholder="Your E-mail..." required="" />
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="orange-button">
                                            Send Message Now
                                        </button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>
                    Copyright © 2024 SkillUp ET Tech Bootcamp. All rights reserved.
                    &nbsp;&nbsp;&nbsp; Website:
                    <a href="https://www.skillupet.com" target="_blank">www.skillupet.com</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/isotope.min.js') }}"></script>
    <script src="{{ asset('js/owl-carousel.js') }}"></script>
    <script src="{{ asset('js/counter.js') }}"></script>
    <script src="{{ asset('js/isotopeCustom.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>




</html>

</html>

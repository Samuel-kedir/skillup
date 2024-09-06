<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

        <title>Scholar - Online School HTML5 Template</title>


        {{-- @vite('resources/css/app.css') --}}

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
                  <h1 style="">Skill Up <sup>ET</sup> </h1>
                  {{-- <span>Skill Up ET Online BootCamp</span> --}}
                </a>
                <!-- ***** Logo End ***** -->
                <!-- ***** Search Start ***** -->
                {{-- <div class="search-input">
                  <form id="search" action="#">
                    <input
                      type="text"
                      placeholder="Search for courses or webinars"
                      id="searchText"
                      name="searchKeyword"
                      onkeypress="handle"
                    />
                    <i class="fa fa-search"></i>
                  </form>
                </div> --}}
                <!-- ***** Search End ***** -->
                <!-- ***** Menu Start ***** -->
                <ul class="nav">
                  <li class="scroll-to-section">
                    <a href="#top" class="active">Home</a>
                  </li>
                  <li class="scroll-to-section">
                    <a href="#services">Services</a>
                  </li>
                  <li class="scroll-to-section">
                    <a href="#courses">Courses</a>
                  </li>
                  <li class="scroll-to-section">
                    <a href="#webinars">Webinars</a>
                  </li>
                  <li class="scroll-to-section">
                    <a href="#blog">Blog</a>
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
                <div class="item item-1">
                  <div class="header-text">
                    <span class="category">Our Courses</span>
                    <h2>Unlock Your Potential with SkillUpET</h2>
                    <p>
                      SkillUpET offers expert-led online courses designed to empower Ethiopians living abroad. Whether you're looking to advance in Data Analytics or Microsoft Power Platform, our courses provide the skills and knowledge needed to excel.
                    </p>
                    <div class="buttons">
                      <div class="main-button">
                        <a href="#courses">Explore Courses</a>
                      </div>
                      <div class="icon-button">
                        <a href="#"><i class="fa fa-play"></i> Learn More About Us</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item item-2">
                  <div class="header-text">
                    <span class="category">Achieve Success</span>
                    <h2>Gain Practical Skills and Achieve Your Goals</h2>
                    <p>
                      Our courses are designed to prepare you for official Microsoft certifications and beyond. With comprehensive instruction and hands-on practice, you'll be ready to tackle any challenge.
                    </p>
                    <div class="buttons">
                      <div class="main-button">
                        <a href="#webinars">Join a Free Webinar</a>
                      </div>
                      <div class="icon-button">
                        <a href="#"><i class="fa fa-play"></i> Watch Our Tutorials</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item item-3">
                  <div class="header-text">
                    <span class="category">Flexible Learning</span>
                    <h2>Learn at Your Own Pace from Anywhere</h2>
                    <p>
                      Our online classes are held three times a week at 8 PM EDT, making it easy to fit learning into your schedule. Experience the convenience of online education with personalized support from expert instructors.
                    </p>
                    <div class="buttons">
                      <div class="main-button">
                        <a href="#contact">Register & Get Started</a>
                      </div>
                      <div class="icon-button">
                        <a href="#"><i class="fa fa-play"></i> Discover More</a>
                      </div>
                    </div>
                  </div>
                </div>
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
                  <img src="images/service-01.png" alt="Online Courses" style="height: 86px; width: 86px; color: white;" /> <!-- Adjust icon size and color -->
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
                  <img src="images/service-02.png" alt="Flexible Scheduling" style="height: 86px; width: 86px; color: white;" /> <!-- Adjust icon size and color -->
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
                  <img src="images/service-03.png" alt="Expert Instruction" style="height: 86px; width: 86px; color: white;" /> <!-- Adjust icon size and color -->
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

    <div class="section about-us">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-lg-1">
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button
                      class="accordion-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseOne"
                      aria-expanded="true"
                      aria-controls="collapseOne"
                    >
                      What is SkillUpET’s Teaching Philosophy?
                    </button>
                  </h2>
                  <div
                    id="collapseOne"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      At SkillUpET, our focus is "student first." We ensure every student is supported, understands every concept without jargon, and is prepared for real-world jobs through practical projects and exercises.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo"
                      aria-expanded="false"
                      aria-controls="collapseTwo"
                    >
                      How do you accommodate busy schedules?
                    </button>
                  </h2>
                  <div
                    id="collapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      We understand the demands of our students' busy lives and family commitments. Our classes are scheduled to fit into their lives, starting from the basics and building up to advanced skills.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseThree"
                      aria-expanded="false"
                      aria-controls="collapseThree"
                    >
                      What makes your classes unique?
                    </button>
                  </h2>
                  <div
                    id="collapseThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      Our classes are engaging and fun, with breakout sessions and group work. We create a friendly environment to ensure learning is effective and enjoyable, preparing students thoroughly for their careers.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseFour"
                      aria-expanded="false"
                      aria-controls="collapseFour"
                    >
                      How do you prove your effectiveness?
                    </button>
                  </h2>
                  <div
                    id="collapseFour"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      Our effectiveness is proven through the success and testimonials of our previous students. Their experiences validate our commitment to delivering on our promises.
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
                  At SkillUpET, we are dedicated to empowering Ethiopians abroad with practical skills and real-world experience. Our student-centered approach ensures that every lesson is a stepping stone to career success.
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
            @foreach($courses->pluck('category')->unique() as $category)
                <li><a href="#!" data-filter=".{{ strtolower($category->name) }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
        <div class="row event_box" style="overflow:visible;">
            @foreach($courses as $course)
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer {{ strtolower($course->category->name) }}">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('path/to/course_images/' . $course->course_icon) }}" alt="{{ $course->title }} Course" /></a>
                            <span class="category">{{ $course->category->name }}</span>
                            <span class="price">
                                <h6>{{ $course->duration }}<em><sup> Weeks</sup></em></h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">Level: {{ $course->level }}</span>
                            <h4>{{ $course->title }}</h4>
                        </div>
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
                                    <h2

                                    >100%</h2>
                                    <p class="count-text">Satisfaction Rate</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2
                                      class="timer count-title count-number"
                                      data-to="250"
                                      data-speed="1000"
                                    ></h2>
                                    <p class="count-text">Total Course Hours</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2
                                      class="timer count-title count-number"
                                      data-to="12"
                                      data-speed="1000"
                                    ></h2>
                                    <p class="count-text">Portfolio Projects</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter end">
                                    <h2
                                      class="timer count-title count-number"
                                      data-to="10"
                                      data-speed="1000"
                                    ></h2>
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

    <div class="team section" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="team-member">
              <div class="main-content">
                <img src="images/member-01.jpg" alt="" />
                <span class="category">Instructor</span>
                <h4>Samuel Kedir</h4>
                <ul class="social-icons">
                  <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          {{-- <div class="col-lg-3 col-md-6">
            <div class="team-member">
              <div class="main-content">
                <img src="images/member-02.jpg" alt="" />
                <span class="category">Graphic Teacher</span>
                <h4>Cindy Walker</h4>
                <ul class="social-icons">
                  <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div> --}}
          <div class="col-lg-4 col-md-6">
            <div class="team-member">
              <div class="main-content">
                <img src="images/member-03.jpg" alt="" />
                <span class="category">Data Analytics Instructor</span>
                <h4>Nobel Mitiku</h4>
                <ul class="social-icons">
                  <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="team-member">
              <div class="main-content">
                <img src="images/member-04.jpg" alt="" />
                <span class="category">Development Instructor</span>
                <h4>Yonatan Abera</h4>
                <ul class="social-icons">
                  <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Testimonial Begins --}}
    <div class="section testimonials">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="owl-carousel owl-testimonials">
                @foreach($testimonials as $testimonial)
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
                <p>{!! $testimonialSection->description !!}   </p>
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
                @foreach($events as $event)
                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image" style="max-height: 100px">
                                    <img style="height: 200px; max-height: 200px ; object-fit: cover; " src="{{$event->image_path}}" alt="{{ $event->title }}" />
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
              <h2>Feel free to contact us anytime</h2>
              <p>
                Thank you for choosing our templates. We provide you best CSS
                templates at absolutely 100% free of charge. You may support us
                by sharing our website to your friends.
              </p>
              <div class="special-offer">
                <span class="offer">off<br /><em>50%</em></span>
                <h6>Valide: <em>24 April 2036</em></h6>
                <h4>Special Offer <em>50%</em> OFF!</h4>
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
                      <input
                        type="name"
                        name="name"
                        id="name"
                        placeholder="Your Name..."
                        autocomplete="on"
                        required
                      />
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input
                        type="text"
                        name="email"
                        id="email"
                        pattern="[^ @]*@[^ @]*"
                        placeholder="Your E-mail..."
                        required=""
                      />
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea
                        name="message"
                        id="message"
                        placeholder="Your Message"
                      ></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button
                        type="submit"
                        id="form-submit"
                        class="orange-button"
                      >
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
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/isotopeCustom.js') }}"></script>



</html>

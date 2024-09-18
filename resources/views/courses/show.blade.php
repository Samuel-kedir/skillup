<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link rel="apple-touch-icon" sizes="180x180" href="../images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>SkillUp ET Bootcamp | Tech Courses for Ethiopians in the USA, Europe, and Australia</title>

    <meta name="description"
        content="SkillUp ET Bootcamp offers live, instructor-led tech courses exclusively for Ethiopians living in the USA, Europe, and Australia. Specializing in Data Analytics, Microsoft Power Platform, and Programming, we focus on absolute beginners and career changers. Our interactive bootcamp, taught in Amharic, ensures job readiness and prepares students for Microsoft PL Exams. Register today to start your tech journey with instructors who simplify every concept for easy understanding." />

    <meta name="keywords"
        content="Ethiopians in USA tech bootcamp, Ethiopians in Europe tech courses, Habeshans learning tech, Data Analytics for Ethiopians, Power BI courses for beginners, Microsoft Power Platform training, Tech for Ethiopians abroad, Amharic tech courses, Python for beginners Ethiopia, Excel, SQL, Power BI training, DMV Area tech bootcamp for Ethiopians, Microsoft PL Exam prep, Career change to tech Ethiopia" />

    <meta name="author" content="SkillUp ET Bootcamp" />
    <meta name="robots" content="index, follow" />

    <!-- Favicon -->
    <link href="images/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <!-- <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />


    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/templatemo-scholar.css') }}" />


</head>

<body>
    <div class="p-0 bg-white ">

        <!-- Navbar Start -->
        <nav class="p-0 shadow navbar navbar-expand-lg navbar-light fixed-top py-lg-3">
            <a href="/" class="px-4 py-0 text-center navbar-brand d-flex align-items-center px-lg-5">
                <h1 class="m-0 main-text ">Skillup <sup style="margin-left: -10px">et</sup></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="p-4 navbar-nav ms-auto p-lg-0">
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#"
                            class="nav-link dropdown-toggle {{ request()->route('slug') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">
                            Courses
                        </a>
                        <div class="m-0 dropdown-menu rounded-0">
                            @foreach ($courses as $course)
                                <a href="{{ route('course.show', $course->slug) }}"
                                    class="dropdown-item {{ $course->slug === $slug ? 'active' : '' }}">
                                    {{ $course->title }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <a href="#contact" class="nav-item nav-link">Contact</a>

                </div>

            </div>

    </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header End -->
    <div class="py-5 mb-5 container-xxl bg-dark page-header"
        style="
      background: linear-gradient(rgba(43, 57, 64, 0.5), rgba(43, 57, 64, 0.7)),
      url('{{ asset('storage/' . $courseSyllabus->course_hero_image) }}') center center no-repeat;
      background-size: cover;">
        <div class="container pt-5 pb-4 my-5">
            <h1 class="mb-3 text-white display-3 animated slideInDown">
                {{ $courseSyllabus->title }}
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Courses</a></li>
                    <li class="text-white breadcrumb-item active" aria-current="page">
                        {{ $courseSyllabus->title }}
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Header End -->

    <!-- Course Detail Start -->
    {{-- resources/views/course_syllabus/show.blade.php --}}


    <div class="py-5 container-xxl">
        <div class="container">
            <div class="row gy-5 gx-4">
                <div class="col-lg-8">
                    <div class="mb-5 d-flex align-items-center">
                        <img class="flex-shrink-0 border rounded img-fluid d-none d-md-block"
                            src="{{ asset('storage/' . $courseSyllabus->course_icon) }}"
                            alt="{{ $courseSyllabus->title }}" style="width: 80px; height: 80px" />
                        <div class="text-start ps-4">
                            <h3 class="mb-3">{{ $courseSyllabus->title }}</h3>
                            <span class="text-truncate me-3"><i class="fa fa-calendar-alt course-icon me-2"></i>Start
                                Date: {{ $courseSyllabus->start_date->format('d M, Y') }}</span>
                            <span class="text-truncate me-3"><i class="fa fa-clock course-icon me-2"></i>Duration:
                                {{ $courseSyllabus->duration }}</span>
                            <span class="text-truncate me-0"><i
                                    class="fa fa-money-bill-alt course-icon me-2"></i>${{ $courseSyllabus->fee }}</span>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h4 class="mb-3">Course Overview</h4>
                        <p>{!! $courseSyllabus->about_course_detail !!}</p>

                        <h4 class="mb-3">{{ $courseSyllabus->detailed_syllabus_title }}</h4>
                        {!! $courseSyllabus->detailed_syllabus_content !!}
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-4 rounded bg-light p-lg-5">
                        <h4 class="mb-4">Course Summary</h4>
                        <p><i class="fa fa-angle-right text-main me-2"></i>Start Date:
                            {{ $courseSyllabus->start_date->format('d M, Y') }}</p>
                        <p><i class="fa fa-angle-right text-main me-2"></i>Duration: {{ $courseSyllabus->duration }}
                        </p>
                        <p><i class="fa fa-angle-right text-main me-2"></i>Fee: ${{ $courseSyllabus->fee }}</p>
                        <p><i class="fa fa-angle-right text-main me-2"></i>Live Session Time:
                            {{ $courseSyllabus->live_session_time }}</p>
                    </div>

                    <div class="rounded bg-light p-lg-5">
                        <h4 class="mb-4">Instructor Detail</h4>
                        <p class="m-0">John Doe is a seasoned data analyst with over 10 years of experience in the
                            industry. He has been teaching Power BI and data visualization techniques to professionals
                            across various industries.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Course Detail End -->

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


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>

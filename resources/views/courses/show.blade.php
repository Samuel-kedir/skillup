<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>JobEntry - Job Portal Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="images/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

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
    <div class=" bg-white p-0">

      <!-- Navbar Start -->
      <nav
        class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0 py-lg-3"
      >
        <a
          href="/"
          class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5"
        >
          <h1 class="m-0 main-text ">Skillup</h1>
        </a>
        <button
          type="button"
          class="navbar-toggler me-4"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.html" class="nav-item nav-link">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ request()->route('slug') ? 'active' : '' }}" data-bs-toggle="dropdown">
                    Courses
                </a>
                <div class="dropdown-menu rounded-0 m-0">
                    @foreach($courses as $course)
                        <a href="{{ route('course.show', $course->slug) }}" class="dropdown-item {{ $course->slug === $slug ? 'active' : '' }}">
                            {{ $course->title }}
                        </a>
                    @endforeach
                </div>
            </div>
            </div>

          </div>
          <a
            href=""
            class="btn btn-main rounded-0 py-2 px-lg-3  d-none d-lg-block .custom-mr-md" id="nav-contact"
            >Contact<i class="fa fa-arrow-right ms-3"></i
          ></a>
        </div>
      </nav>
      <!-- Navbar End -->

      <!-- Header End -->
      <div class="container-xxl py-5 bg-dark page-header mb-5" style="
      background: linear-gradient(rgba(43, 57, 64, 0.5), rgba(43, 57, 64, 0.7)),
      url('{{ asset('storage/' . $courseSyllabus->course_hero_image) }}') center center no-repeat;
      background-size: cover;">
        <div class="container my-5 pt-5 pb-4">
          <h1 class="display-3 text-white mb-3 animated slideInDown">
            {{ $courseSyllabus->title }}
          </h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-uppercase">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Pages</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">
                Job Detail
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- Header End -->

  <!-- Course Detail Start -->
{{-- resources/views/course_syllabus/show.blade.php --}}


<div class="container-xxl py-5">
    <div class="container">
        <div class="row gy-5 gx-4">
            <div class="col-lg-8">
                <div class="d-flex align-items-center mb-5">
                    <img class="flex-shrink-0 img-fluid border rounded d-none d-md-block" src="{{ asset('storage/' . $courseSyllabus->course_icon) }}" alt="{{ $courseSyllabus->title }}" style="width: 80px; height: 80px" />
                    <div class="text-start ps-4">
                        <h3 class="mb-3">{{ $courseSyllabus->title }}</h3>
                        <span class="text-truncate me-3"><i class="fa fa-calendar-alt course-icon me-2"></i>Start Date: {{ $courseSyllabus->start_date->format('d M, Y') }}</span>
                        <span class="text-truncate me-3"><i class="fa fa-clock course-icon  me-2"></i>Duration: {{ $courseSyllabus->duration }}</span>
                        <span class="text-truncate me-0"><i class="fa fa-money-bill-alt course-icon  me-2"></i>${{ $courseSyllabus->fee }}</span>
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
                <div class="bg-light rounded p-lg-5 mb-4">
                    <h4 class="mb-4">Course Summary</h4>
                    <p><i class="fa fa-angle-right text-main me-2"></i>Start Date: {{ $courseSyllabus->start_date->format('d M, Y') }}</p>
                    <p><i class="fa fa-angle-right text-main me-2"></i>Duration: {{ $courseSyllabus->duration }}</p>
                    <p><i class="fa fa-angle-right text-main me-2"></i>Fee: ${{ $courseSyllabus->fee }}</p>
                    <p><i class="fa fa-angle-right text-main me-2"></i>Live Session Time: {{ $courseSyllabus->live_session_time }}</p>
                </div>

                <div class="bg-light rounded p-lg-5">
                    <h4 class="mb-4">Instructor Detail</h4>
                    <p class="m-0">John Doe is a seasoned data analyst with over 10 years of experience in the industry. He has been teaching Power BI and data visualization techniques to professionals across various industries.</p>
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

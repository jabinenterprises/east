@extends('layouts.pages')

@section('title', 'East Africa Sponsorship Trust')

@section('content')
    <!-- Hero Section -->
    <section class="hero section hero-section" id="hero">

        <img src="assets/images/20240702-_TPE5422.2e16d0ba.fill-1600x600.jpg" alt="" data-aos="fade-in">
        {{-- <img src="assets/images/hero-mbl2.jpg" alt="" data-aos="fade-in"> --}}

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 data-aos="fade-up" data-aos-delay="100">Fuel Dreams, Transform Lives</h2>
                    <p data-aos="fade-up" data-aos-delay="200">Your donation today can unlock a student’s potential and pave
                        the way for a brighter future. Every contribution brings us closer to equal education for all.</p>
                    <div class="d-flex mt-4 gap-3" data-aos="fade-up" data-aos-delay="300">
                        <a href="" class="btn-donate">Donate</a>
                        <a href="" class="btn-learn-more">Learn More</a>
                        {{-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                class="glightbox btn-watch-video d-flex align-items-center"><i
                                    class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 position-relative" data-aos="fade-up" data-aos-delay="100">
                    <img src="assets/images/DSC_0325.2e16d0ba.fill-1400x600.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 ps-lg-4 content d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="200">
                    <h3>Why We Do What We Do</h3>
                    <p>We believe every talented student deserves a chance to succeed—regardless of financial limitations.
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-diagram-3"></i>
                            <div>
                                <h5>Holistic Support</h5>
                                <p>Beyond tuition, we offer mentorship and career guidance.
                                </p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-fullscreen-exit"></i>
                            <div>
                                <h5>How We Work</h5>
                                <p>Rigorous selection ensures funds reach the most deserving candidates.</p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-broadcast"></i>
                            <div>
                                <h5>Empowering Futures</h5>
                                <p>We provide scholarships to high-potential students facing financial hardships.</p>
                            </div>
                        </li>
                    </ul>
                    <p>
                        <a href="" class="primary-btn">Our Mission</a>
                    </p>
                </div>

            </div>

        </div>

    </section>
    <!-- /About Section -->

    <!-- stats Section -->
    <section id="stats" class="stats section dark-background">

        <img src="assets/images/20240702-_TPE6338.width-1376.jpg" alt="">

        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Students sponsored</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item donations text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="3000" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Funds raised</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Sponsors</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Years of operation</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- /stats Section -->

    <!-- Qoute Section -->
    <section id="quote" class="quote section dark-background">

        <img src="assets/images/IMG_9119.a3de3b07.fill-1400x600.2e16d0ba.fill-1400x600.jpg" alt="">

        <div class="container">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-9 text-center text-xl-start">
                    <h3>The Joy of Giving</h3>
                </div>
            </div>

        </div>

    </section>
    <!-- /Qoute Section -->

    <section class="bg-paint">
        <div class="bg-img-paint">
            <div class="bg-img-wrapper">
                <div class="bg-img-container">
                    <div class="absolute-img-container">
                        <div class="painting-container">
                            <img src="assets/images/painting.jpg" alt="" class="img-fluid water-paint">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Multiple CTA Section -->
    <section id="cta-multiple" class="cta-multiple section dark-background">

        {{-- <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in"> --}}

        <div class="container position-relative">

            <div class="content row gy-4">
                <div class="col-lg-4 d-flex align-items-stretch order-lg-2">
                    <div class="multiple-cta-content-box text-xl-end" data-aos="zoom-out" data-aos-delay="200">
                        <h3>Join Us in Shaping the Future</h3>
                        <p>
                            Whether you donate, volunteer, or spread the word—your action today unlocks opportunities for
                            students in need. Pick your path and start making a difference.
                        </p>
                        <div class="text-center text-xl-end">
                            <a href="" class="primary-btn"><span>Learn More</span> <i
                                    class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 d-flex align-items-stretch order-lg-1">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="row gy-4">

                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                                    <i class="fa fa-donate"></i>
                                    <h4>Donate</h4>
                                    <p>Give the Gift of Education</p>
                                    <p>Your one-time or recurring donation funds scholarships, books, and mentorship
                                        programs for deserving students.</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                                    <i class="fa fa-address-card"></i>
                                    <h4>Become a Member</h4>
                                    <p>Commit to Long-Term Impact</p>
                                    <p>Join our monthly giving community and sustain scholarships year-round. Members
                                        receive exclusive impact reports.</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                                    <i class="fa fa-dove"></i>
                                    <h4>Volunteer</h4>
                                    <p>Lend Your Time & Skills</p>
                                    <p>Mentor students, organize fundraisers, or help with outreach—your expertise changes
                                        lives.</p>
                                </div>
                            </div><!-- End Icon Box -->

                        </div>
                    </div>
                </div>
            </div><!-- End  Content-->

        </div>

    </section>
    <!-- /Multiple CTA Section -->

    <!-- Parallax Section -->
    <section id="secondary-parallax" class="secondary-parallax section dark-background">

        <img src="assets/images/IMG_9242_UfGpKkm.2e16d0ba.fill-1400x600.jpg" class="secondary-parallax-bg"
            alt="">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-lg-6">
                    <h3>Education is the most powerful weapon you can use to change the world.</h3>
                    <p>Nelson Mandela. Help us arm a generation with knowledge, opportunity, and hope.</p>
                </div>
                <div class="w-full">
                    <div class="hr"></div>
                </div>

            </div>

        </div>

    </section>
    <!-- /Parallax Section -->

    <!-- Sliding Sitename Section -->
    <section class="sitename section dark-background" id="sitename">
        <div class="sitename_view">
            <div class="sitename_scroll_side_line marquee3k" data-speed="1" data-pausable="false" data-reverse="false">
                <div class="sitename_scroll_side_item">
                    <div class="sitename_scroll_side_item_wrapper">
                        <span class="sitename_scroll_side_text">EAST AFRICAN SPONSORSHIP TRUST</span>
                        <span class="sitename_scroll_side_divider"></span>
                        <span><img src="assets/images/east-dark-logo.png" alt=""></span>
                        <span class="sitename_scroll_side_divider"></span>
                        <span class="sitename_scroll_side_text">EAST AFRICAN SPONSORSHIP TRUST</span>
                        <span class="sitename_scroll_side_divider"></span>
                        <span><img src="assets/images/east-dark-logo.png" alt=""></span>
                        <span class="sitename_scroll_side_divider"></span>
                        <span class="sitename_scroll_side_text">EAST AFRICAN SPONSORSHIP TRUST</span>
                        <span class="sitename_scroll_side_divider"></span>
                        <span><img src="assets/images/east-dark-logo.png" alt=""></span>
                        <span class="sitename_scroll_side_divider"></span>
                        <span class="sitename_scroll_side_text">EAST AFRICAN SPONSORSHIP TRUST</span>
                        <span class="sitename_scroll_side_divider"></span>
                        <span><img src="assets/images/east-dark-logo.png" alt=""></span>
                        <span class="sitename_scroll_side_divider"></span>
                        <span class="sitename_scroll_side_text">EAST AFRICAN SPONSORSHIP TRUST</span>
                        <span class="sitename_scroll_side_divider"></span>
                        <span><img src="assets/images/east-dark-logo.png" alt=""></span>
                        <span class="sitename_scroll_side_divider"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Sliding Sitename Section -->

    <!-- Trustees Section -->
    <section id="trustees" class="trustees section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Our Trustees</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">

                <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 30
                  },
                  "768": {
                    "slidesPerView": 2,
                    "spaceBetween": 10
                  },
                  "1024": {
                    "slidesPerView": 3,
                    "spaceBetween": 10
                  },
                  "2040": {
                    "slidesPerView": 4,
                    "spaceBetween": 10
                  }
                }
              }
            </script>

                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <a href="">
                            <div class="trustee-item">
                                <img src="assets/images/DSC_0169.jpg" class="trustee-img" alt="">

                                <div class="trustee-overlay">
                                    <div class="trustee-info">
                                        <h2 class="trustee-name">Alison Rogers</h2>
                                        <p class="trustee-role">Trustee</p>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div><!-- End trustee card item -->

                    <div class="swiper-slide">
                        <a href="">
                            <div class="trustee-item">
                                <img src="assets/images/Jon.jpg" class="trustee-img" alt="">

                                <div class="trustee-overlay">
                                    <div class="trustee-info">
                                        <h2 class="trustee-name">Jonathan Pennington-Ridge</h2>
                                        <p class="trustee-role">Trustee</p>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div><!-- End trustee card item -->

                    <div class="swiper-slide">
                        <a href="">
                            <div class="trustee-item">
                                <img src="assets/images/Wendy.jpg" class="trustee-img" alt="">

                                <div class="trustee-overlay">
                                    <div class="trustee-info">
                                        <h2 class="trustee-name">Wendy Pennington-Ridge</h2>
                                        <p class="trustee-role">Trustee</p>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div><!-- End trustee card item -->

                    <div class="swiper-slide">
                        <a href="">
                            <div class="trustee-item">
                                <img src="assets/images/IMG_6623.jpg" class="trustee-img" alt="">

                                <div class="trustee-overlay">
                                    <div class="trustee-info">
                                        <h2 class="trustee-name">Minesh Patel</h2>
                                        <p class="trustee-role">Trustee</p>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div><!-- End trustee card item -->

                    <div class="swiper-slide">
                        <a href="">
                            <div class="trustee-item">
                                <img src="assets/images/processed.jpeg" class="trustee-img" alt="">

                                <div class="trustee-overlay">
                                    <div class="trustee-info">
                                        <h2 class="trustee-name">Patricia Ridley</h2>
                                        <p class="trustee-role">Trustee</p>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div><!-- End trustee card item -->

                    <div class="swiper-slide">
                        <a href="">
                            <div class="trustee-item">
                                <img src="assets/images/_20201010_175454.jpg" class="trustee-img" alt="">

                                <div class="trustee-overlay">
                                    <div class="trustee-info">
                                        <h2 class="trustee-name">Simon Rowe</h2>
                                        <p class="trustee-role">Trustee</p>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div><!-- End trustee card item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section>
    <!-- /Trustees Section -->

    <!-- Events Section -->
    <section class="events section dark-background" id="events">
        <div class="container section-title">
            <h3>Events</h3>
            <h2>Upcoming Events</h2>
        </div>

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 position-relative order-lg-2 event-img w-full" data-aos="fade-up"
                    data-aos-delay="100">
                    <img src="assets/images/IMG_0379_IQhJBdP.2e16d0ba.fill-300x300.jpg" alt=""
                        class="img-fluid inforgraph_img">
                </div>

                <div class="col-lg-6 order-lg-1">
                    <div class="events-content">
                        <div class="events-list">
                            <article class="event-card row m-0 py-md-1">
                                <div class="event-date-box col-md-3 col-lg-3 py-4 p-lg-0">
                                    <span class="event-date">24</span>
                                    <span class="event-month">Aug 2025</span>
                                </div>
                                <div class="event-details col-sm">
                                    <p class="event-time">Arusha 9.00 am - 2.30 pm</p>
                                    <h3 class="event-title">
                                        Miles for minds run
                                    </h3>
                                </div>
                            </article>
                            <article class="event-card row m-0 py-md-1">
                                <div class="event-date-box col-md-3 col-lg-3 py-4 p-lg-0">
                                    <span class="event-date">12</span>
                                    <span class="event-month">Sept 2025</span>
                                </div>
                                <div class="event-details col-sm">
                                    <p class="event-time">Arusha 7.30 pm - 9.00 pm</p>
                                    <h3 class="event-title">
                                        Borne fire night.
                                    </h3>
                                </div>
                            </article>
                            <article class="event-card row m-0 py-md-1">
                                <div class="event-date-box col-md-3 col-lg-3 py-4 p-lg-0">
                                    <span class="event-date">30</span>
                                    <span class="event-month">Sept 2025</span>
                                </div>
                                <div class="event-details col-sm">
                                    <p class="event-time">Arusha 9.00 am - 3.30 pm</p>
                                    <h3 class="event-title">
                                        Creativity for a cause artwork.
                                    </h3>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- /Events Section -->

    <!-- Beneficiaries Section -->
    <section class="beneficiaries section" id="beneficiaries">
        <div class="container section-title">
            <h3>Recipients</h3>
            <h2>Our Beneficiaries</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-1 ps-lg-4 content d-flex flex-column justify-content-center"
                    data-aos="fade-up" data-aos-delay="200">
                    <h3>Meet the Future You’re Helping to Build.</h3>
                    <p>
                        Every scholarship has a face, a story, and a dream. Here are just a few of the brilliant minds
                        you’ve empowered.
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-diagram-3"></i>
                            <div>
                                <h5>Diverse Fields of Study</h5>
                                <p>Supporting future doctors, engineers, teachers, and entrepreneurs.
                                </p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-fullscreen-exit"></i>
                            <div>
                                <h5>Proven Success</h5>
                                <p>90% graduation rate among scholarship recipients.</p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-broadcast"></i>
                            <div>
                                <h5>Sustainable Impact</h5>
                                <p>Many alumni return to uplift their hometowns through skills and investments.</p>
                            </div>
                        </li>
                    </ul>
                    <p>
                        <a href="" class="primary-btn">See More</a>
                    </p>
                </div>
                <div class="col-lg-6 order-lg-0">
                    <div class="row">
                        <div class="col-lg-6 d-flex flex-column w-100">
                            <div class="row row1">
                                <div class="col">
                                    <img src="assets/images/IMG-6257.jpg" alt=""
                                        class="fluid-img beneficiary-img">
                                </div>
                                <div class="col">
                                    <img src="assets/images/IMG_437029.jpg" alt=""
                                        class="fluid-img beneficiary-img">
                                </div>
                            </div>
                            <div class="row row2">
                                <div class="col">
                                    <img src="assets/images/IMG_910429.jpg" alt=""
                                        class="fluid-img beneficiary-img">
                                </div>
                                <div class="col">
                                    <img src="assets/images/MohammedJuma.jpg" alt=""
                                        class="fluid-img beneficiary-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Beneficiaries Section -->

    <style>
        .contact-form {
            position: relative;
        }

        .contact-form .sitename {
            position: absolute;
            bottom: 0;
            left: 0;
            margin-top: 50px;
            z-index: 0;
        }

        @media (max-width: 991px) {
            .contact-form .sitename {
                display: none;
            }
        }
    </style>

    <!-- Contact Form Section -->
    <section id="contact-form" class="contact-form section">

        <div class="content">
            <img src="assets/images/IMG_4028_2_z3ZfWyz.a9689c78.fill-1400x450.jpg" alt=""
                class="fluid-img contact-form-section-bg-img">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0 order-lg-1">
                        <div class="contact-form-wrapper">
                            <div class="form-contents">
                                <h3>Contact Us</h3>
                                <form action="">
                                    <div class="contact-form-body">
                                        <div class="row">
                                            <div class="form-group col">
                                                <label for="name">Name:</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Full name">
                                            </div>
                                            <div class="form-group col">
                                                <label for="email">Email:</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Email address">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Subject">Subject:</label>
                                            <input type="text" class="form-control" name="subject" id="subject"
                                                placeholder="Subject">
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Message:</label>
                                            <textarea name="message" id="message" cols="30" rows="5" class="form-control"
                                                placeholder="Your message"></textarea>
                                        </div>
                                        <div class="form-submit-btn my-3"><button
                                                class="submit-btn primary-btn">Submit</button></div>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-5 ml-auto order-lg-0 content-mbl" data-aos="fade-up" data-aos-delay="100">
                        {{-- <h3 class="content-subtitle text-white opacity-50">Why Choose Us</h3> --}}
                    </div>
                </div>
            </div>
        </div>

        <!--
                                                                                                                                                                            <div class="sitename">
                                                                                                                                                                                <div class="sitename_view">
                                                                                                                                                                                    <div class="sitename_scroll_side_line marquee3k" data-speed="1" data-pausable="false"
                                                                                                                                                                                        data-reverse="false">
                                                                                                                                                                                        <div class="sitename_scroll_side_item">
                                                                                                                                                                                            <div class="sitename_scroll_side_item_wrapper">
                                                                                                                                                                                                <span class="sitename_scroll_side_text">EAST AFRICAN SPONSORSHIP TRUST</span>
                                                                                                                                                                                                <span class="sitename_scroll_side_divider"></span>
                                                                                                                                                                                                <span><img src="assets/images/east-dark-logo.png" alt=""></span>
                                                                                                                                                                                                <span class="sitename_scroll_side_divider"></span>
                                                                                                                                                                                                <span class="sitename_scroll_side_text">EAST AFRICAN SPONSORSHIP TRUST</span>
                                                                                                                                                                                                <span class="sitename_scroll_side_divider"></span>
                                                                                                                                                                                                <span><img src="assets/images/east-dark-logo.png" alt=""></span>
                                                                                                                                                                                                <span class="sitename_scroll_side_divider"></span>
                                                                                                                                                                                                <span class="sitename_scroll_side_text">EAST AFRICAN SPONSORSHIP TRUST</span>
                                                                                                                                                                                                <span class="sitename_scroll_side_divider"></span>
                                                                                                                                                                                                <span><img src="assets/images/east-dark-logo.png" alt=""></span>
                                                                                                                                                                                                <span class="sitename_scroll_side_divider"></span>
                                                                                                                                                                                                <span class="sitename_scroll_side_text">EAST AFRICAN SPONSORSHIP TRUST</span>
                                                                                                                                                                                                <span class="sitename_scroll_side_divider"></span>
                                                                                                                                                                                                <span><img src="assets/images/east-dark-logo.png" alt=""></span>
                                                                                                                                                                                                <span class="sitename_scroll_side_divider"></span>
                                                                                                                                                                                                <span class="sitename_scroll_side_text">EAST AFRICAN SPONSORSHIP TRUST</span>
                                                                                                                                                                                                <span class="sitename_scroll_side_divider"></span>
                                                                                                                                                                                                <span><img src="assets/images/east-dark-logo.png" alt=""></span>
                                                                                                                                                                                                <span class="sitename_scroll_side_divider"></span>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div> -->
    </section>
    <!-- /Contact Form Section -->
@endsection

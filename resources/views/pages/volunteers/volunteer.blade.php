@extends('layouts.pages')

@section('content')
    @include('assets.secondary-hero.hero', ['title' => 'Volunteers'])

    <section class="volunteering-info-section section" id="volunteering-info-section">
        <div class="container">
            <div class="page-info-section w-100 text-center">
                <h1 class="w-100 font-bold">WE ARE LOOKING FOR VOLUNTEERS</h1>
                <p>There are three main ways that we need help. If you want to volunteer as one of the following options,
                    feel free to contact us. We also accept donations.</p>
            </div>

            <div class="row volunteer-areas">
                <div class="col-md d-flex flex-column align-items-center justify-content-start">
                    <h3 class="text-center">Fund Raising</h3>
                    <ul class="text-start">
                        <li>Organise an African Themed Dinner Party</li>
                        <li>Sell products made by our sponsored students.</li>
                        <li>Get sponsorship to climb Mt. Meru or Mt. Kilimanjaro. We can give you quotes for this.</li>
                    </ul>
                </div>
                <div class="col-md d-flex flex-column align-items-center justify-content-start">
                    <h3 class="text-center">Mentoring</h3>

                    <ul class="text-start">
                        <li>We need mentors to meet and support our sponsored students once a month to review their progress
                            and to set targets.</li>
                        <li>You will need to support them through their university applications and discuss different career
                            advice with them.</li>
                        <li>You will need to support them in the planning of their fund raising ideas.</li>
                        <li>To encourage them to send a photo and some feedback to EAST every term to update the website.
                        </li>
                    </ul>
                </div>
                <div class="col-md d-flex flex-column align-items-center justify-content-start">
                    <h3 class="text-center">Admin</h3>

                    <ul class="text-start">
                        <li>Sending mail out to our sponsored students</li>
                        <li>Updating the website with up-to-date information on sponsored student progress.</li>
                        <li>Contacting a range of universities to find out costs so we can create a data bank of
                            possibilities.</li>
                        <li>Creating a data bank of supporters</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Volunteers Section -->
    <section id="trustees" class="trustees .volunteers section d-flex flex-column align-items-center">

        <!-- Section Title -->
        <div class="container section-title volunteers-section-title text-center px-5" data-aos="fade-up">
            <h2>Meet Our Amazing Team of Volunteers</h2>
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
    <!-- /Volunteers Section -->

    <!-- Contact Form Section -->
    <section id="contact" class="contact volunteeer-contact-form section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact Us</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="">
                <form action="" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name"
                                required="">
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Your Email"
                                required="">
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject"
                                required="">
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            {{-- <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div> --}}

                            <button class="primary-btn" type="submit">Send Message</button>
                        </div>

                    </div>
                </form>
            </div><!-- End Contact Form -->


        </div>

    </section>
    <!-- /Contact Form Section -->
@endsection

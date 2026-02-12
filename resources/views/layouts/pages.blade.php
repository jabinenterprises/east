<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EAST | @yield('title', 'EAST')</title>

    <link rel="icon" type="image/svg+xml" href="assets/images/east-light-logo.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- <link rel="stylesheet" href="assets/css/startup.css"> --}}

    <link rel="stylesheet" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
    {{-- <link href="assets/vendor/aos/aos.css" rel="stylesheet"> --}}
    {{-- <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"> --}}
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/application.css">
    <link rel="stylesheet" href="assets/css/trustees.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    {{-- <link rel="stylesheet" href="assets/css/aims.css">
    <link rel="stylesheet" href="assets/css/volunteer.css"> --}}


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            Marquee3k.init();
        });
    </script>

    <script src="assets/vendor/marquee/marquee3k.js"></script>

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container container-fluid container-xl position-relative d-flex align-items-center">

            <a href="/" class="logo d-flex align-items-center me-auto">
                <img src="assets/images/east-light-logo.png" class="light-logo" alt="">
                <img src="assets/images/east-dark-logo.png" class="dark-logo" alt="">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/" class="active">Home<br></a></li>
                    <li><a href="{{ route('aims-mission') }}">Aims and Missions</a></li>
                    <li class="dropdown"><a href="#"><span>Sponsored Students <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></span></a>
                        <ul>
                            <li><a href="">Current Recipients</a></li>
                            <li><a href="">Former Recipients</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('application') }}">Apply</a></li>
                    <li><a href="{{ route('volunteer') }}">Volunteeer</a></li>
                    <li><a href="{{ route('trustees') }}">Trustees</a></li>
                    <li><a href="{{ route('faqs') }}">FAQs</a></li>
                    <li><a href="{{ route('contact-us') }}">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <div class="action-btns d-flex p-0">
                <a class="btn-login" href="">Login</a>
                <a class="btn-donate" href="">Donate</a>
            </div>

        </div>
    </header>

    {{-- @include('pages.startup.index') --}}


    <!--
        <ul>
                    <li><a href="/" class="active">Home<br></a></li>
                    <li><a href="{{ route('aims-mission') }}">Aims and Missions</a></li>
                    <li><a href="">Sponsored Students</a></li>
                    <li><a href="{{ route('application') }}">Apply</a></li>
                    <li><a href="{{ route('volunteer') }}">Volunteeer</a></li>
                    <li><a href="{{ route('trustees') }}">Trustees</a></li>
                    <li><a href="{{ route('faqs') }}">FAQs</a></li>
                    <li><a href="{{ route(name: 'contact-us') }}">Contact</a></li>
                </ul>

                <img src="assets/images/east-light-logo.png" class="light-logo" alt="">
                <img src="assets/images/east-dark-logo.png" class="dark-logo" alt="">
    -->

    <main class="main" id="main-content">

        @yield('content');

    </main>

    <footer class="footer" id="footer">

        <div class="footer-bg-map">
            @include('svg.planet-map')
        </div>

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">EAST</span>
                    </a>
                    <div class="footer-simple-about">
                        Since 2019, we’ve transformed ‘impossible dreams’ into degrees by removing financial
                        barriers—but our work goes beyond tuition. We went from a single scholarship to becoming a
                        movement. Redefining "merit" in education access.
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Contact Info</h4>
                    <div class="footer-contact pt-3">
                        <p>Braeburn School</p>
                        <p>Arusha</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+255 712 345 678</span></p>
                        <p><strong>Email:</strong> <span>east@braeburn.sc.tz</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Aims and Mission</a></li>
                        <li><a href="">Sponsored Students</a></li>
                        <li><a href="">Apply</a></li>
                        <li><a href="">Volunteer</a></li>
                        <li><a href="">Trustees</a></li>
                        <li><a href="">FAQs</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Sign up to our newsletter and receive the latest news and updates on our services and progress!
                    </p>
                    <form action="" method="post" class="php-email-form">
                        <div class="newsletter-form"><input type="email" name="email"
                                placeholder="Email address"><input type="submit" value="Subscribe"></div>
                        {{-- <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div> --}}
                    </form>
                </div>

            </div>
        </div>

        <div class="copyright text-center">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                <p class="mb-3 mb-lg-0">
                    Registered UK Charity Number: 1190820
                </p>

                <div class="mb-3 mb-lg-0">
                    <p>
                        © 2025 <strong><span>East African Sponsorship Trust</span></strong>. All Rights Reserved
                    </p>
                </div>

            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center hide"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    {{-- <script src="assets/vendor/aos/aos.js"></script> --}}
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jarallax@2/dist/jarallax.min.js"></script>

    <script src="assets/js/main.js"></script>
    {{-- <script src="assets/js/startup.js"></script> --}}
    {{-- <script src="assets/js/parallax.min.js"></script> --}}

    <script>
        let scrollTop = document.querySelector('.scroll-top');

        function toggleScrollTop() {
            if (window.scrollY > 100) {
                scrollTop.classList.add('active');
                scrollTop.classList.remove('hide');
            } else {
                scrollTop.classList.remove('active');
                scrollTop.classList.add('hide');
            }
        }
        scrollTop.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        window.addEventListener('load', toggleScrollTop);
        document.addEventListener('scroll', toggleScrollTop);
    </script>



</body>

</html>

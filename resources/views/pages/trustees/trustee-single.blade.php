@extends('layouts.pages')

@section('content')
    @include('assets.secondary-hero.hero', ['title' => 'Our Trustee'])

    <style>
        .trustee-page .profile-left-section {
            display: flex;
            flex-direction: column;
        }

        .trustee-page .trustee-profile-img {
            width: 100%;
            height: 700px;
            border-radius: 20px;
            object-fit: cover;
        }

        /* .trustee-page .contact-section { */
        /* margin-top: 0; */
        /* } */

        .trustee-page .contact-header {
            font-size: 34px;
            font-weight: 700;
            color: #000;
            /* padding: 10px; */
            margin: 0;
        }

        /* .trustee-page .email-container { */
        /* padding: 10px; */
        /* } */

        .trustee-page .email-text {
            font-size: 32px;
            color: #000;
            margin: 0;
        }

        .trustee-page .email-value {
            font-weight: 400;
        }

        .trustee-page .social-icons {
            display: flex;
            gap: 20px;
            margin-top: 10px;
            padding: 0;
            width: 100px;
        }

        .trustee-page .social-icon i {
            font-size: 40px;
        }

        .trustee-page .trustee-name {
            font-size: 32px;
            font-weight: 700;
            color: #000;
            margin-top: 0;
            margin-bottom: 15px;
        }

        .trustee-page .trustee-bio {
            font-size: 24px;
            font-weight: 400;
            color: #000;
            line-height: 1.4;
            margin: 0;
        }

        @media (max-width: 991px) {
            .trustee-page .trustee-profile-img {
                height: auto;
            }
        }

        @media (max-width: 640px) {
            .contact-header {
                font-size: 28px;
            }

            .email-text {
                font-size: 24px;
            }

            .social-icons {
                gap: 30px;
                /* justify-content: center; */
            }
        }

        .trustee-prompt-action {
            position: relative;
            /* min-height: 400px; */
        }

        .trustee-prompt-action .bg-map {
            position: absolute;
            inset: 0;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 0;
        }

        .trustee-prompt-action .bg-map svg path {
            fill: #dddddd;
            stroke: transparent;
        }

        .trustee-prompt-action .img-1 {
            width: 80%;
            height: 300px;
            border-radius: 20px;
            object-fit: cover;
        }

        .trustee-prompt-action .quote-text {
            font-family: "Averia Serif Libre", serif;
            font-size: 42px;
            font-weight: 500;
            font-style: normal;
            line-height: 50px;
            color: #000;
            display: flex;
            align-items: end;
        }

        .trustee-prompt-action .quote-text p {
            width: 80%;
        }

        .trustee-prompt-action .img-2 {
            width: 100%;
            height: 200px;
            border-radius: 20px;
            object-fit: cover;
        }

        .trustee-prompt-action .action-btn-box a {
            font-size: 18px;
        }

        .trustee-prompt-action .img-3 {
            width: 70%;
            height: 200px;
            border-radius: 20px;
            object-fit: cover;
        }

        .trustee-prompt-action .img-4 {
            width: 70%;
            height: 300px;
            border-radius: 20px;
            object-fit: cover;
        }

        .trustee-action-prompt-sm {
            display: none;
        }

        @media (max-width: 991px) {
            .trustee-prompt-action .quote-text {
                font-size: 32px;
                line-height: 40px;
            }

            .trustee-prompt-action .quote-text p {
                width: 100%;
            }

            .trustee-prompt-action .img-1 {
                width: 100%;
                height: 200px;
            }

            .trustee-prompt-action .img-2 {
                height: 120px;
            }

            .trustee-prompt-action .action-btn-box a {
                font-size: 14px;
            }

            .trustee-prompt-action .img-3 {
                width: 100%;
                height: 150px;
            }

            .trustee-prompt-action .img-4 {
                width: 70%;
                height: 200px;
            }
        }

        @media (max-width: 640px) {
            .trustee-prompt-action {
                display: none;
            }

            .trustee-action-prompt-sm {
                display: block;
            }

            .trustee-action-prompt-sm .img-top {
                width: 100%;
                height: 250px;
                border-radius: 20px;
                object-fit: cover;
            }

            .trustee-action-prompt-sm .quote-text {
                font-family: "Averia Serif Libre", serif;
                font-size: 32px;
                font-weight: 500;
                font-style: normal;
                padding: 20px 0;
            }

            .trustee-action-prompt-sm .img-bottom {
                width: 100%;
                height: 250px;
                border-radius: 20px;
                object-fit: cover;
            }
        }
    </style>

    <section class="trustee-page section">
        <div class="container">
            <div class="row">
                <div class="col-lg position-relative profile-left-section">
                    <img src="assets/images/DSC_0169.jpg" alt="Profile photo of Alison Rogers"
                        class="trustee-profile-img img-fluid">

                    <section class="contact-section">
                        <h2 class="contact-header">Contact</h2>
                        <div class="email-container">
                            <p class="email-text">
                                <span>Email:</span>
                                <span class="email-value">rogers@gmail.com</span>
                            </p>
                        </div>
                        <div class="social-icons">
                            <a href="#" class="social-icon" aria-label="Facebook profile">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="#" aria-label="Twitter profile">
                                <div class="social-icon">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </div>
                            </a>
                            <a href="#" aria-label="Instagram profile">
                                <div class="social-icon">
                                    <i class="fa-brands fa-instagram"></i>
                                </div>
                            </a>
                            <a href="#" aria-label="LinkedIn profile">
                                <div class="social-icon">
                                    <i class="fa-brands fa-linkedin"></i>
                                </div>
                            </a>
                        </div>
                    </section>
                </div>

                <div class="col-lg">
                    <h2 class="trustee-name">
                        Alison Rogers
                    </h2>

                    <p class="trustee-bio">
                        Alison is a trained secondary English and Drama teacher. She has taught in four different secondary
                        schools across both Kenya and Tanzania over the last thirty years. Married to a Kenyan and living in
                        Tanzania, Alison has committed most of her life to working in education within East Africa. She has
                        seen first-hand the difference a good school and university education can make to a young person’s
                        life, and their future opportunities. It can be truly ‘life changing’ for both the individual and
                        their family. She is excited that EAST supports a young person, not only through their secondary
                        schooling, but through university too. This means by the time each student has finished, they are
                        ready to work, and support another student through the same programme.
                    </p>
                </div>
            </div>

            <section class="trustee-prompt-action">
                <div class="bg-map">
                    @include('svg.planet-map')
                </div>

                <div class="row" style="z-index: 100; position: relative;">
                    <div class="col-12">
                        <div class="row trustee-quote">
                            <div class="col-3 d-flex align-items-center">
                                <img src="assets/images/20240703-_TPE6669.width-1376.jpg" alt=""
                                    class="img-1 img-fluid">
                            </div>
                            <div class="col-6 quote-text text-center d-flex justify-content-center">
                                <p>Join us in the journey to empower students and transform lives</p>
                            </div>
                            <div class="col-3 d-flex align-items-center justify-content-end">
                                <img src="assets/images/9_vbj7fN9.2e16d0ba.fill-400x400.jpg" alt=""
                                    class="img-2 img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row action-btn-box">
                            <div class="col-4 d-flex align-items-center justify-content-end">
                                <img src="assets/images/7_18YaWEm.2e16d0ba.fill-400x400.jpg" alt=""
                                    class="img-3 img-fluid">
                            </div>
                            <div class="col-4 d-flex align-items-start justify-content-center">
                                <p>
                                    <a href="" class="primary-btn">Donate</a>
                                </p>
                            </div>
                            <div class="col-4 d-flex align-items-center">
                                <img src="assets/images/IMG_6573.2e16d0ba.fill-400x400.jpg" alt=""
                                    class="img-4 img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="trustee-action-prompt-sm">
                <div class="row">
                    <div class="col-12">
                        <img src="assets/images/20240703-_TPE6669.width-1376.jpg" alt="" class="img-top img-fluid">
                    </div>
                    <div class="col-12">
                        <div class="quote-text text-center">
                            <p>Join us in the journey to empower students and transform lives</p>
                            <a href="" class="primary-btn">Donate</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <img src="assets/images/IMG_6573.2e16d0ba.fill-400x400.jpg" alt=""
                            class="img-bottom img-fluid">
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection

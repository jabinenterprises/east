@extends('layouts.pages')

@section('content')
    @include('assets.secondary-hero.hero', ['title' => 'Contact Us'])

    <style>
        .form-group {
            margin-bottom: 60px;
            position: relative;
        }

        .form-input {
            width: 100%;
            border: none;
            border-bottom: 1px solid #4d4d4d;
            color: #4d4d4d;
            padding: 5px 0;
            font: 24px Arial;
            background-color: transparent;
        }

        .form-input:focus {
            outline: none;
            border-bottom-color: #00714b;
        }

        .form-label {
            position: absolute;
            top: 0;
            left: 0;
            font: 24px Arial;
            color: #4d4d4d;
            transform-origin: 0 0;
            transition: transform 0.2s ease-out, color 0.2s ease-out,
                -webkit-transform 0.2s ease-out;
            pointer-events: none;
        }

        .form-input:focus+.form-label,
        .form-input:not(:placeholder-shown)+.form-label {
            transform: translateY(-24px) scale(0.75);
            color: #00714b;
        }

        .form-input::placeholder {
            color: transparent;
        }

        .form-input:focus::placeholder {
            color: #4d4d4d;
        }

        textarea.form-input {
            min-height: 100px;
            resize: vertical;
        }

        .send-button {
            color: #fff;
            padding: 10px 30px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            background-color: #00714b;
            font: 24px Arial;
            transition: background-color 0.3s ease;
        }

        .send-button:hover,
        .send-button:focus {
            background-color: #005a3d;
        }

        .send-button:active {
            background-color: #004300;
        }

        @media (max-width: 991px) {
            .form-container {
                margin-top: 30px;
                /* background: red */
            }
        }
    </style>

    <section class="contact-us-section section">
        <div class="container">
            <div class="row">
                <div class="col-lg contact-info">
                    <div class="section-label">Contact information</div>
                    <div class="main-heading">Get in touch using Our contact information.</div>

                    <div class="info-sections">
                        <div class="row">
                            <div class="col info-section">
                                <div class="info-heading">Location</div>
                                <div class="info-content">
                                    <span>Arusha</span>
                                    <br>
                                    <span>Tanzania - East Africa</span>
                                </div>
                            </div>

                            <div class="col info-section">
                                <div class="info-heading">Phone</div>
                                <div class="info-content">
                                    <span>+255 71234578</span>
                                    <br>
                                    <span>+255 787654321</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col info-section">
                                <div class="info-heading">Socials</div>
                                <div class="social-icons">
                                    <div>
                                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                                        <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col info-section">
                                <div class="info-heading">Email</div>
                                <div class="info-content">east@braeburn.sc.tz</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg contact-us-form mt-5 mt-lg-0">
                    <div class="section-label">Reach Out and Connect</div>
                    <div class="main-heading">Use the form below to send us a message directly.</div>

                    <form class="form-container">
                        <div class="form-group">
                            <input type="text" name="fullName" id="fullName" class="form-input" placeholder="Full Name"
                                aria-label="Full Name">
                            <label for="fullName" class="form-label">Full Name</label>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-input"
                                placeholder="Email address" aria-label="Email address">
                            <label for="email" class="form-label">Email address</label>
                        </div>

                        <div class="form-group">
                            <input type="text" name="subject" id="subject" class="form-input" placeholder="Subject"
                                aria-label="Subject">
                            <label for="subject" class="form-label">Subject</label>
                        </div>

                        <div class="form-group">
                            <textarea name="message" id="message" class="form-input" placeholder="Message" aria-label="Message"></textarea>
                            <label for="message" class="form-label">Message</label>
                        </div>
                        <button type="submit" class="send-button">Send message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const inputs = document.querySelectorAll(".form-input");

            inputs.forEach((input) => {
                input.addEventListener("focus", function() {
                    this.setAttribute("placeholder", "");
                });
                input.addEventListener("blur", function() {
                    if (this.value === "") {
                        this.setAttribute("placeholder", this.previousElementSibling.textContent);
                    }
                });
            });
        });
    </script>
@endsection

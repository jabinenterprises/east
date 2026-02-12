@extends('layouts.pages')

@section('content')
    @include('assets.secondary-hero.hero', ['title' => 'FAQs'])

    <style>
        .faq-header {
            text-align: center;
            margin-bottom: 40px;
            padding: 0 20px;
        }

        .faq-title {
            font-size: 32px;
            font-weight: 600;
        }

        .faq-subtitle {
            font-size: 24px;
            font-weight: 500;
            margin: 0;
        }

        .faq-page-img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
        }

        .faq-item {
            margin: 30px 0;
        }

        .faq-item-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 20px 10px;
            border-bottom: 1px solid #787878;
            /* background-color: #f1f1f1; */
            /* background-color: #d9d9d9; */
            cursor: pointer;
        }

        .faq-question {
            font-size: 24px;
            font-weight: 600;
            flex: 1;
            padding-right: 20px;
            margin: 0;
        }

        .faq-toggle {
            font-size: 24px;
            font-weight: 600;
            cursor: pointer;
            background: none;
            border: none;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .faq-answer {
            padding: 20px;
            font-size: 18px;
            line-height: 1.5;
            border: none;
            border-top: none;
            /* background-color: #f1f1f1; */
        }

        .faq-answer p {
            margin: 0;
        }

        .faq-item:not(.faq-item-expanded) .faq-answer {
            display: none;
        }

        .faq-item-expanded .faq-item-header {
            border-bottom: 2px solid #000;
        }

        .cta-card {
            position: relative;
            width: 100%;
            margin-top: 100px;
            padding: 180px 0;
            /* width: 100%; */
            /* padding: 120px 0; */
            /* display: flex; */
            /* align-items: center; */
            /* justify-content: center; */
        }

        /* .cta-card .card-bg-img { */
        /* position: relative; */
        /* width: 80%; */
        /* clip-path: inset(0); */
        /* } */

        .cta-card::before {
            content: "";
            background: rgba(0, 0, 0, 0.4);
            position: absolute;
            inset: 0;
            z-index: 1;
        }

        .cta-card img {
            position: absolute;
            inset: 0;
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        .cta-text-container {
            position: relative;
            padding: 0 50px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 10;
        }

        .cta-text-container h2 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 32px;
            font-weight: 600;
            color: #ffffff;
        }

        .cta-card .secondary-contact-button {
            font-weight: 400;
            font-size: 24px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 8px 20px;
            border: 1px solid #ffffff;
            border-radius: 20px;
            transition: 0.2s ease-in;
            color: #ffffff;
        }

        .cta-card .secondary-contact-button:hover,
        .cta-card .secondary-contact-button:focus {
            box-shadow: inset 180px 0 0 0 var(--light);
            color: #000
                /* color: var(--primary-green); */
                /* border: 1px solid var(--primary-green); */
        }

        /* -------------------------------------------------------------------------------------- */
        .faq-quiz {
            padding: 40px;
        }

        .quiz-form {
            /* width: 80%; */
            padding: 20px;
            border: 1px solid #000;
            border-radius: 10px;
            box-shadow: 10px 10px 40px rgba(0, 0, 0, 0.5);
        }

        .quiz-form .form-group {
            margin-bottom: 20px;
        }

        .quiz-form .send-btn {
            width: 100%;
            border: none;
            outline: none;
            padding: 6px 10px;
            background: var(--contrast-accent);
            color: #ffffff;
            border-radius: 5px;
        }

        .prompt-section {
            display: flex;
            flex-direction: column;
            align-items: start;
            justify-content: center;
        }

        .prompt-section .first-part {
            font-family: "Roboto", sans-serif;
            font-size: 32px;
            line-height: normal;
        }

        .prompt-section .second-part {
            font-family: "Roboto", sans-serif;
            font-size: 32px;
            line-height: normal;
            font-weight: 600;
        }

        @media (max-width: 991px) {
            .question-form-section {
                margin-top: 40px;
            }

            .prompt-section {
                text-align: center;
                align-items: center;
                justify-content: center;
                gap: 0;
                margin: 20px 0;
            }
        }

        @media (max-width: 640px) {
            .question-form-section {
                margin: 0;
            }

            .prompt-section {
                margin: 0;
            }

            .prompt-section .first-part,
            .prompt-section .second-part {
                font-size: 28px;
            }
        }

        /* -------------------------------------------------------------------------------------- */

        @media (max-width: 991px) {
            .cta-card {
                padding: 120px 0;
            }

            .cta-text-container {
                padding: 0 20px;
            }

            .cta-text-container h2 {
                font-size: 24px;
            }

            .cta-card .secondary-contact-button {
                font-size: 20px;
            }
        }

        @media (max-width: 640px) {
            section.faqs-section {
                padding-bottom: 0;
            }

            .faq-header {
                padding-bottom: 0;
                margin-bottom: 20px;
            }

            .faq-title {
                font-size: 28px;
                line-height: 30px;
                margin-bottom: 20px;
            }

            .faq-subtitle {
                font-size: 20px;
                line-height: 30px;
            }

            .faq-question {
                font-size: 20px;
            }

            .cta-card {
                padding: 180px 0;
            }

            .cta-card {
                justify-content: start;
                align-items: start;
            }

            .cta-card img {
                height: 70%;
            }

            .cta-card::before {
                height: 70%;
            }

            .cta-text-container {
                flex-direction: column;
                align-items: start;
                justify-content: start;
                padding: 0 20px;
            }

            .cta-text-container h2 {
                font-size: 24px;
                margin-bottom: 30px;
            }

            .cta-card .secondary-contact-button {
                font-size: 18px;
                padding: 6px 18px;
                border-radius: 15px;
            }
        }
    </style>

    <section class="faqs-section section">
        <div class="container">
            <div class="faq-header">
                <h1 class="faq-title">
                    Frequently Asked Questions
                </h1>
                <p class="faq-subtitle">Explore a list of our frequently asked questions</p>
            </div>

            <div class="faq-content">
                <div class="row">
                    <div class="col-12 col-lg-8 faq-questions-section">
                        <article class="faq-item faq-item-expanded">
                            <div class="faq-item-header">
                                <h2 class="faq-question">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque,
                                    quaerat?</h2>
                                <button class="faq-toggle" aria-expanded="true" aria-controls="answer-1"><i
                                        class="fa fa-angle-down"></i></button>
                            </div>
                            <div class="faq-answer" id="answer-1">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, fuga? Itaque nam quas,
                                    dolor laboriosam voluptas quae iste suscipit maiores delectus consequatur animi quod
                                    quam a ipsum quis aut vel corporis. Ipsum facere ad, sint aspernatur in dignissimos ut
                                    ex aliquam, iste molestiae assumenda officiis temporibus non impedit libero culpa.</p>
                            </div>
                        </article>

                        <article class="faq-item">
                            <div class="faq-item-header">
                                <h2 class="faq-question">Lorem ipsum dolor sit amet consectetur adipisicing elit?</h2>
                                <button class="faq-toggle" aria-expanded="true" aria-controls="answer-2"><i
                                        class="fa fa-angle-right"></i></button>
                            </div>
                            <div class="faq-answer" id="answer-2" hidden>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat autem sed commodi est
                                    voluptas beatae ipsum cum debitis, aliquam harum maiores libero veritatis exercitationem
                                    minima cupiditate vero error odit perspiciatis.</p>
                            </div>
                        </article>

                        <article class="faq-item">
                            <div class="faq-item-header">
                                <h2 class="faq-question">Lorem ipsum dolor sit amet?</h2>
                                <button class="faq-toggle" aria-expanded="true" aria-controls="answer-3"><i
                                        class="fa fa-angle-right"></i></button>
                            </div>
                            <div class="faq-answer" id="answer-3" hidden>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem officia saepe nihil
                                    illo vero architecto sint quas hic harum. Nulla.</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-lg-4 faq-img-section">
                        <img src="assets/images/L_Heinrichs_IMG_0337.2e16d0ba.fill-300x300.jpg" alt=""
                            class="faq-page-img">
                    </div>
                </div>
            </div>

            <div class="cta-card">
                {{-- <div class="card-bg-img"> --}}
                <img src="assets/images/20240703-_TPE6587.2e16d0ba.fill-1400x600.jpg" alt=""
                    class="card-img img-fluid">
                {{-- </div> --}}

                <div class="cta-text-container">
                    <h2>You have any questions?
                        <br>
                        Contact Us
                    </h2>

                    <a href="" class="secondary-contact-button">Contact Us</a>
                </div>
            </div>

            <div class="question-form-section">
                <div class="row">
                    <div class="col-lg order-lg-2 prompt-section">
                        <p class="first-part">
                            DO YOU STILL HAVE QUESTIONS?
                        </p>
                        {{-- <br> --}}
                        <p class="second-part">
                            We're here to help and answer your questions
                        </p>
                    </div>
                    <div class="col-lg order-lg-1 faq-quiz">
                        <form action="" class="quiz-form">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="question">Question:</label>
                                <textarea name="question" id="question" class="form-control"></textarea>
                            </div>

                            <button type="submit" class="send-btn">Submit Question</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/faq-js.js"></script>
@endsection

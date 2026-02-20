@extends('layouts.pages')

@section('title', 'Application')

@section('content')
    @include('assets.secondary-hero.hero', ['title' => 'Application'])

    <section class="application-page-section">
        <div class="container">
            <div
                class="application-page-wrapper-element m-0 p-0 application-page-wrapper-element-eb3a3d6 e-flex e-con-boxed e-con">
                <div class="text-center">
                    <h2>How to apply</h2>
                </div>
                <div class="instr">
                    <p>
                        To apply for a scholarship, you must be:
                    <ul>
                        <li>Between 13yrs – 17yrs years old.</li>
                        <li>East African</li>
                    </ul>
                    We must receive applications by the deadline of 30th April 2024 for scholarships for the 2024-2025
                    academic year. <br>
                    Shortlisted applicants will be called for interview in May. <br>
                    Scholarships will be offered in June for an August start. Successful applicants will be invited to a
                    taster week at the school in June. <br>
                    To apply for a scholarship, you will need to fill in the form below.
                    </p>
                </div>
                <div class="e-con-inner p-0">
                    <h1>Apply Now</h1>

                    <div
                        class="application-page-wrapper-element application-page-wrapper-element-48aae47 e-con-full e-flex e-con">
                        <div
                            class="application-page-wrapper-element application-page-wrapper-element-0662a4c e-con-full e-flex e-con">

                            <div
                                class="application-page-wrapper-element application-page-wrapper-element-8272822 application-page-element-widget">
                                <div class="application-page-element-widget-container">
                                    <div data-jarallax class="react-jarallax-img jarallax react-image">
                                        <div class="jarallax-container"
                                            style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);">
                                            <img decoding="async" class="jarallax-img "
                                                src="assets/images/20240702-_TPE5177.width-1376.jpg"
                                                style="object-fit: cover; object-position: 50% 50%; max-width: none; position: absolute; top: 0px; left: 0px; width: 1230.4px; height: 645px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; margin-top: 42.5px; transform: translate3d(0px, -402.4px, 0px);">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="application-page-wrapper-element application-page-wrapper-element-538ef42 application-page-element-widget__width-initial application-page-element-widget">
                                <div class="application-page-element-widget-container">
                                    <div class="elementor-4020">
                                        <div
                                            class="application-page-wrapper-element p-4 application-page-wrapper-element-cd8c5cd">

                                            <h6 class="form-wrapper-heading-title m-0">Application Form</h6>
                                            <p style="margin-bottom: 20px; font-size: 14px;"><span class="req"
                                                    style="color: red">*</span> Required</p>

                                            <form action="">
                                                <div class="formDetailsSection">
                                                    <h6>Personal Details</h6>
                                                    <hr class="m-0 w-100 mb-4">

                                                    <div class="form-group row">
                                                        <div class="col-md-6 input-wrapper">
                                                            <input type="text" class="form-control relative"
                                                                name="first_name" placeholder=" " aria-label="First Name">
                                                            <span class="placeholder">First name <span
                                                                    class="required">*</span></span>
                                                        </div>
                                                        <div class="col-md-6 input-wrapper">
                                                            <input type="text" class="form-control" name="last_name"
                                                                placeholder=" " aria-label="Last Name">
                                                            <span class="placeholder">Last name <span
                                                                    class="required">*</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col input-wrapper">
                                                            <input type="email" name="email" id="email"
                                                                class="form-control" aria-label="Email Address"
                                                                placeholder=" " required>
                                                            <span class="placeholder">Email address <span
                                                                    class="required">*</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-6 input-wrapper">
                                                            <input type="date" name="date_of_birth" id="date-input"
                                                                class="form-control" aria-label="Date of Birth" required>
                                                            <span class="date-placeholder">Date of Birth</span>
                                                        </div>
                                                        <div class="col-md-6 input-wrapper">
                                                            <input type="text" name="nationality" class="form-control"
                                                                placeholder="Nationality" aria-label="Nationality">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col input-wrapper">
                                                            <input type="text" name="current_school" class="form-control"
                                                                placeholder=" " required>
                                                            <span class="placeholder">Current school</span>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="formDetailsSection">
                                                    <h6>Next of Kin Info</h6>
                                                    <hr class="m-0 w-100 mb-4">

                                                    <div class="form-group row">
                                                        <div class="col-md-6 input-wrapper">
                                                            <input type="text" class="form-control" name="father_name"
                                                                placeholder="Father's name" aria-label="Father's Name">
                                                        </div>
                                                        <div class="col-md-6 input-wrapper">
                                                            <input type="text" class="form-control" name="father_phone"
                                                                placeholder="Father's telephone number"
                                                                aria-label="Father's Telephone Number">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col input-wrapper">
                                                            <input type="text" class="form-control"
                                                                name="father_occupation" placeholder="Father's occupation"
                                                                aria-label="Father's Occupation">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-md-6 input-wrapper">
                                                            <input type="text" class="form-control" name="mother_name"
                                                                placeholder="Mother's name" aria-label="Mother's Name">
                                                        </div>
                                                        <div class="col-md-6 input-wrapper">
                                                            <input type="text" class="form-control"
                                                                name="mother_phone"
                                                                placeholder="Mother's telephone number"
                                                                aria-label="Mother's Telephone Number">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col input-wrapper">
                                                            <input type="text" class="form-control"
                                                                name="mother_occupation" placeholder="Mother's occupation"
                                                                aria-label="Mother's Occupation">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="formDetailsSection">
                                                    <h6>Referee Info</h6>
                                                    <hr class="m-0 w-100 mb-4">

                                                    <div class="form-group row">
                                                        <div class="col-md-6 input-wrapper">
                                                            <input type="text" class="form-control"
                                                                name="referee_name" placeholder=" "
                                                                aria-label="Referee's Name" required><span
                                                                class="placeholder">Name
                                                                of referee from your current school <span
                                                                    class="required">*</span> </span>
                                                        </div>
                                                        <div class="col-md-6 input-wrapper">
                                                            <input type="number" class="form-control"
                                                                name="referee_phone" max="11" placeholder=" "
                                                                aria-label="Referee's Telephone Number" required
                                                                onkeypress="if(this.value.length>11){return false;}"><span
                                                                class="placeholder">Referee's telephone number <span
                                                                    class="required">*</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col input-wrapper">
                                                            <input type="email" class="form-control"
                                                                name="referee_email" placeholder=" "
                                                                aria-label="Referee's Email Address" required> <span
                                                                class="placeholder">Referee's email address <span
                                                                    class="required">*</span></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="formDetailsSection">
                                                    <h6>Additional Information</h6>
                                                    <hr class="m-0 w-100 mb-4">

                                                    <div class="form-group row">
                                                        <div class="col input-wrapper">
                                                            <select name="scholarship_application"
                                                                id="application_selection"
                                                                aria-label="Select which scholarship you are applying for"
                                                                class="form-control">
                                                                <option value="" selected disabled>Which
                                                                    scholarship are you applying for?
                                                                </option>
                                                                <option value="academic">Academic</option>
                                                                <option value="music_drama">Music and Drama</option>
                                                                <option value="sports">Sports</option>
                                                                <option value="social_enterprise">Social Enterprise
                                                                </option>
                                                                <option value="leadership">Leadership</option>
                                                            </select>
                                                        </div>
                                                        {{-- <div class="col-1 m-0 p-0">
                                                            <button class="border-none background"
                                                                onclick="resetDropdown(this)"><i
                                                                    class="fa fa-refresh"></i></button>
                                                        </div> --}}
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col input-wrapper">
                                                            <textarea name="acitivities_involved" rows="5" class="form-control relative"
                                                                aria-label="What activities or leadership activities have you been involved in at your current school?"
                                                                placeholder=" "></textarea>
                                                            <span class="placeholder textarea-placeholder">What activities
                                                                or
                                                                leadership
                                                                activities have you been involved in at your current school?
                                                                <span class="required">*</span></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col input-wrapper">
                                                            <textarea name="acitivities_involved" rows="5" class="form-control relative"
                                                                aria-label="What activities or leadership activities have you been involved in at your current school?"
                                                                placeholder=" "></textarea>
                                                            <span class="placeholder textarea-placeholder">What activities
                                                                or
                                                                leadership
                                                                activities have you been involved in at your current school?
                                                                <span class="required">*</span></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col input-wrapper">
                                                            <textarea name="acitivities_involved" rows="5" class="form-control relative"
                                                                aria-label="In no more than 200 words, summarise your achievements so far." placeholder=" "></textarea>
                                                            <span class="placeholder textarea-placeholder">In no more than
                                                                200 words, summarise your achievements so far.
                                                                <span class="required">*</span></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col input-wrapper">
                                                            <textarea name="acitivities_involved" rows="5" class="form-control relative"
                                                                aria-label="In no more than 200 words write about a personal achievement you are proud of." placeholder=" "></textarea>
                                                            <span class="placeholder textarea-placeholder">In no more than
                                                                200 words write about a personal achievement you are proud
                                                                of.
                                                                <span class="required">*</span></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col input-wrapper">
                                                            <textarea name="acitivities_involved" rows="5" class="form-control relative"
                                                                aria-label="Where do you see yourself in 10 years from now?" placeholder=" "></textarea>
                                                            <span class="placeholder textarea-placeholder">Where do you see
                                                                yourself in 10 years from now?
                                                                <span class="required">*</span></span>
                                                        </div>
                                                    </div>

                                                    {{-- <style>
                                                        .placeholderText {
                                                            background: blue;
                                                        }

                                                        .application-page-wrapper-element.application-page-wrapper-element-cd8c5cd .form-group .textarea-placeholder {
                                                            display: flex;
                                                            align-items: center;
                                                            justify-content: center;
                                                        }
                                                    </style> --}}

                                                    <div class="form-group row">
                                                        <div class="col input-wrapper">
                                                            <textarea name="acitivities_involved" rows="5" class="form-control relative"
                                                                aria-label="Why should you achieve this scholarship?" placeholder=" "></textarea>
                                                            <span class="placeholder textarea-placeholder"><span
                                                                    class="placeholderText">Why should you
                                                                    achieve this scholarship?
                                                                    <span class="required">*</span></span></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col input-wrapper">
                                                            <textarea name="acitivities_involved" rows="5" class="form-control relative"
                                                                aria-label="The scholarship on offer is not a full scholarship. What is one thing you could do to raise the remaining amount?"
                                                                placeholder=" "></textarea>
                                                            <span class="placeholder textarea-placeholder"><span
                                                                    class="placeholderText">The scholarship
                                                                    on offer is not a full scholarship. What is one thing
                                                                    you
                                                                    could do to raise the remaining amount? <span
                                                                        class="required">*</span></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div
                            class="application-page-wrapper-element application-page-wrapper-element-8372a12 element-absolute application-page-element-widget application-page-element-widget-image">
                            <div class="application-page-element-widget-container">
                                <img loading="lazy" decoding="async" width="129" height="347"
                                    src="https://themewant.com/products/wordpress/unipix/wp-content/uploads/2024/07/vector_13.webp"
                                    alt="" sizes="(max-width: 129px) 100vw, 129px">
                            </div>
                        </div>
                        <div
                            class="application-page-wrapper-element application-page-wrapper-element-7895535 element-absolute application-page-element-widget application-page-element-widget-image">
                            <div class="application-page-element-widget-container">
                                <img loading="lazy" decoding="async" width="167" height="184"
                                    src="https://themewant.com/products/wordpress/unipix/wp-content/uploads/2024/07/elements.webp"
                                    alt="">
                            </div>
                        </div>
                        <div
                            class="application-page-wrapper-element application-page-wrapper-element-f99f460 element-absolute application-page-element-widget application-page-element-widget-image">
                            <div class="application-page-element-widget-container">
                                <img loading="lazy" decoding="async" width="316" height="213"
                                    src="https://themewant.com/products/wordpress/unipix/wp-content/uploads/2024/07/vector_10.webp"
                                    alt="" sizes="(max-width: 316px) 100vw, 316px">
                            </div>
                        </div>
                        <div
                            class="application-page-wrapper-element application-page-wrapper-element-33f2e16 element-absolute application-page-element-widget application-page-element-widget-image">
                            <div class="application-page-element-widget-container">
                                <img loading="lazy" decoding="async" width="268" height="253"
                                    src="https://themewant.com/products/wordpress/unipix/wp-content/uploads/2024/07/vector_15.webp"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dateInput = document.getElementById("date-input");
            const datePlaceholder = document.querySelector(".date-placeholder");

            function isDateInputSupported() {
                const input = document.createElement("input");
                input.setAttribute("type", "date");
                return input.type === "date";
            }

            if (!isDateInputSupported()) {
                dateInput.type = "text";
                dateInput.placeholder = "dd/mm/yyyy";
            }

            dateInput.addEventListener("input", function() {
                if (dateInput.value) {
                    // datePlaceholder.style.opacity = "0";
                    dateInput.classList.add("date-show");
                } else {
                    // datePlaceholder.style.opacity = "1";
                    dateInput.classList.remove("date-show");
                }
            });

            // dateInput.addEventListener("blur", function() {
            //     if (dateInput.value) {
            //         dateInput.style.color = "black";
            //         console.log("date input blur testing...");
            //     }
            // });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const selectOption = document.getElementById("application_selection");

            selectOption.addEventListener("change", function() {
                selectOption.classList.add("optionSelected");
            })
        });
    </script>

    {{-- <script>
        function resetDropdown(e) {
            document.getElementById("application_selection").selectedIndex = 0;
            e.preventDefault();
        }
    </script> --}}
@endsection

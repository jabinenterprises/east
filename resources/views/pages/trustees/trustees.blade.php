@extends('layouts.pages')

@section('content')
    @include('assets.secondary-hero.hero', ['title' => 'Trustees'])

    <section class="trustees-page-section trustees">
        <div class="container">
            <div class="page-section-title text-center">
                <h3>Meet Our Amazing <br> Team of Trustees</h3>
                <p class="trustees-subtext">All the trustees have a direct understanding of the power of education in making
                    a positive
                    difference to a child's life. All the trustees are trained teachers who have also worked in East
                    Africa.</p>
            </div>



            <div class="trustees-team">
                <div class="team-member">
                    <a href="{{ route('trustee-single', 'alison-rogers') }}">
                        <div class="trustee-item m-0">
                            <img src="assets/images/DSC_0169.jpg" class="trustee-img" alt="">

                            <div class="trustee-overlay">
                                <div class="trustee-info">
                                    <h2 class="trustee-name">Alison Rogers</h2>
                                    <p class="trustee-role">Trustee</p>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="team-member">
                    <a href="{{ route('trustee-single', 'jonathan-pennington-ridge') }}">
                        <div class="trustee-item m-0">
                            <img src="assets/images/Jon.jpg" class="trustee-img" alt="">

                            <div class="trustee-overlay">
                                <div class="trustee-info">
                                    <h2 class="trustee-name">Jonathan Pennington-Ridge</h2>
                                    <p class="trustee-role">Trustee</p>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="team-member">
                    <a href="{{ route('trustee-single', 3) }}">
                        <div class="trustee-item m-0">
                            <img src="assets/images/Wendy.jpg" class="trustee-img" alt="">

                            <div class="trustee-overlay">
                                <div class="trustee-info">
                                    <h2 class="trustee-name">Wendy Pennington-Ridge</h2>
                                    <p class="trustee-role">Trustee</p>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="team-member">
                    <a href="{{ route('trustee-single', 4) }}">
                        <div class="trustee-item m-0">
                            <img src="assets/images/IMG_6623.jpg" class="trustee-img" alt="">

                            <div class="trustee-overlay">
                                <div class="trustee-info">
                                    <h2 class="trustee-name">Minesh Patel</h2>
                                    <p class="trustee-role">Trustee</p>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="team-member">
                    <a href="{{ route('trustee-single', 5) }}">
                        <div class="trustee-item m-0">
                            <img src="assets/images/processed.jpeg" class="trustee-img" alt="">

                            <div class="trustee-overlay">
                                <div class="trustee-info">
                                    <h2 class="trustee-name">Patricia Ridley</h2>
                                    <p class="trustee-role">Trustee</p>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="team-member">
                    <a href="{{ route('trustee-single', 6) }}">
                        <div class="trustee-item m-0">
                            <img src="assets/images/_20201010_175454.jpg" class="trustee-img" alt="">

                            <div class="trustee-overlay">
                                <div class="trustee-info">
                                    <h2 class="trustee-name">Simon Rowe</h2>
                                    <p class="trustee-role">Trustee</p>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

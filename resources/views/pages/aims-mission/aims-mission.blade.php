@extends('layouts.pages')

@section('content')
    @include('assets.secondary-hero.hero', ['title' => 'Aims and Mission'])

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 position-relative" data-aos="fade-up" data-aos-delay="100">
                    <img src="assets/images/DSC_0325.2e16d0ba.fill-1400x600.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 ps-lg-4 content d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="200">
                    <h3>Lorem ipsum dolor sit amet.</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam ea id eius sint molestiae
                        deserunt accusamus! Pariatur facilis maiores accusantium itaque consequuntur? Sint
                        accusantium laboriosam quisquam hic a, rerum delectus?
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-diagram-3"></i>
                            <div>
                                <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                                <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade
                                </p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-fullscreen-exit"></i>
                            <div>
                                <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                                <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna
                                    pasata redi</p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-broadcast"></i>
                            <div>
                                <h5>Voluptatem et qui exercitationem</h5>
                                <p>Et velit et eos maiores est tempora et quos dolorem autem tempora incidunt maxime
                                    veniam</p>
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
@endsection

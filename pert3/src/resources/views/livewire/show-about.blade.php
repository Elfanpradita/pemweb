<main>
    <section class="section">
        <div class="container">
            <!-- Page Header -->
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize">About Us</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="list-inline-item">/ &nbsp; <a href="{{ route('about') }}">About</a></li>
                    </ul>
                </div>
            </div>
            <div class="has-shapes">
                <svg class="shape shape-left text-light" viewBox="0 0 192 752" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <!-- SVG shapes left -->
                </svg>
                <svg class="shape shape-right text-light" viewBox="0 0 731 746" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <!-- SVG shapes right -->
                </svg>
            </div>
        </div>

        <!-- About Us Content -->
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-7">
                    <div class="section-title">
                        <p class="text-primary text-uppercase fw-bold mb-3">About Us</p>
                        <h2 class="h1 mb-4">Lorum ipsum doller</h2>
                        <div class="content pe-0 pe-lg-5">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <img loading="lazy" decoding="async" src="{{ asset('front/images/about/about-11.jpg') }}"
                        alt="Business Loans &lt;br&gt; For Daily Expenses" class="rounded w-100">
                </div>
            </div>
        </div>

        <!-- People Behind Us (Teams Section) -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <p class="text-primary text-uppercase fw-bold mb-3">Questions You Have</p>
                        <h1>People Behind Us</h1>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing . egestas
                            <br>cursus pellentesque dignissim dui, congue. Vel etiam ut
                        </p>
                    </div>
                </div>
            </div>
            <div class="row position-relative">
                <div class="col-xl-3 col-lg-4 col-md-6 mt-4">
                    <div class="card bg-transparent border-0 text-center">
                        <div class="card-img">
                            <img loading="lazy" decoding="async" src="{{ asset('front/images/about/team-1.jpg') }}"
                                alt="Scarlet Pena" class="rounded w-100" width="300" height="332">
                            <ul class="card-social list-inline">
                                <li class="list-inline-item"><a class="facebook" href="#"><i
                                            class="fab fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item"><a class="twitter" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item"><a class="instagram" href="#"><i
                                            class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <h3>Scarlet Pena</h3>
                            <p>Instructor</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mt-4">
                    <div class="card bg-transparent border-0 text-center">
                        <div class="card-img">
                            <img loading="lazy" decoding="async" src="{{ asset('front/images/about/team-2.jpg') }}"
                                alt="Claire Simmmons" class="rounded w-100" width="300" height="333">
                            <ul class="card-social list-inline">
                                <li class="list-inline-item"><a class="facebook" href="#"><i
                                            class="fab fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item"><a class="twitter" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item"><a class="instagram" href="#"><i
                                            class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <h3>Claire Simmmons</h3>
                            <p>Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mt-4">
                    <div class="card bg-transparent border-0 text-center">
                        <div class="card-img">
                            <img loading="lazy" decoding="async" src="{{ asset('front/images/about/team-3.jpg') }}"
                                alt="Leslie Pena" class="rounded w-100" width="300" height="333">
                            <ul class="card-social list-inline">
                                <li class="list-inline-item"><a class="facebook" href="#"><i
                                            class="fab fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item"><a class="twitter" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item"><a class="instagram" href="#"><i
                                            class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <h3>Leslie Pena</h3>
                            <p>Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="section-sm bg-tertiary">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="footer-widget">
                        <h5 class="mb-4 text-primary font-secondary">Service</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="service-details.html">Digital Marketing</a>
                            </li>
                            <li class="mb-2"><a href="service-details.html">Web Design</a>
                            </li>
                            <li class="mb-2"><a href="service-details.html">Logo Design</a>
                            </li>
                            <li class="mb-2"><a href="service-details.html">Graphic Design</a>
                            </li>
                            <li class="mb-2"><a href="service-details.html">SEO</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="footer-widget">
                        <h5 class="mb-4 text-primary font-secondary">Quick Links</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#!">About Us</a>
                            </li>
                            <li class="mb-2"><a href="#!">Contact Us</a>
                            </li>
                            <li class="mb-2"><a href="#!">Blog</a>
                            </li>
                            <li class="mb-2"><a href="#!">Team</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</main>
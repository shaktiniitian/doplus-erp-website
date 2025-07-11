@extends('layouts.app')

@section('content')
 <section class="more-info container py-5">
            <div class="container section-title text-center" data-aos="fade-up">
                <h1>Mobile Application Development</h1>
                <p>Transforming ideas into seamless, engaging mobile experiences.</p>
            </div>

            <!-- About Section -->
            <section id="about" class="about section">

                <div class="container">

                    <div class="row gy-4">

                        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                            <h3>Build Innovative Mobile Apps with Doplus Technologies</h3>
                            <p class="fst-italic">
                                We deliver tailor-made mobile solutions designed to enhance user engagement and
                                streamline business operations.
                            </p>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <i class="bi bi-check-circle"></i> Custom native and cross-platform app development
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle"></i> Integration with advanced technologies like AI,
                                    IoT, and AR
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle"></i> Secure and scalable applications with intuitive
                                    designs
                                </li>
                            </ul>
                            <a href="#contact" class="read-more"><span>Contact Us for Custom Solutions</span><i
                                    class="bi bi-arrow-right btn-primary"></i></a>
                        </div>

                        <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">
                                <div class="col-lg-6">
                                    <img src="assets/img/about-company-1.jpg" class="img-fluid" alt="Company Image 1">
                                </div>
                                <div class="col-lg-6">
                                    <div class="row gy-4">
                                        <div class="col-lg-12">
                                            <img src="assets/img/about-company-2.jpg" class="img-fluid"
                                                alt="Company Image 2">
                                        </div>
                                        <div class="col-lg-12">
                                            <img src="assets/img/about-company-3.jpg" class="img-fluid"
                                                alt="Company Image 3">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </section><!-- /About Section -->

            <!-- Features Section -->
            <section class="features section py-5">
                <div class="container">
                    <div class="section-title text-center" data-aos="fade-up">
                        <h2>Why Choose Our Mobile App Development?</h2>
                    </div>
                    <div class="row gy-4">
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="benefit-item text-center p-4 shadow-sm rounded bg-white">
                                <i class="bi bi-phone text-primary display-4 mb-3"></i>
                                <h4>Custom Development</h4>
                                <p>We create apps tailored to your unique business needs and user expectations.</p>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="benefit-item text-center p-4 shadow-sm rounded bg-white">
                                <i class="bi bi-gear text-success display-4 mb-3"></i>
                                <h4>High Performance</h4>
                                <p>Delivering fast, responsive, and optimized apps for enhanced user experience.</p>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="benefit-item text-center p-4 shadow-sm rounded bg-white">
                                <i class="bi bi-shield-lock text-info display-4 mb-3"></i>
                                <h4>Security First</h4>
                                <p>Implementing robust security measures to protect user data and ensure compliance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /Features Section -->

            <!-- Benefits Section -->
            <section class="benefits section py-5 bg-light">
                <div class="container">
                    <!-- Section Title -->
                    <div class="section-title text-center" data-aos="fade-up">
                        <h2>Benefits of Our Mobile App Solutions</h2>
                        <p>Transform your business with cutting-edge mobile application development tailored to your
                            needs.</p>
                    </div>

                    <!-- Benefits List -->
                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-md-4">
                            <div class="benefit-item text-center p-4 shadow-sm rounded bg-white">
                                <i class="bi bi-graph-up text-primary display-4 mb-3"></i>
                                <h4 class="mb-3">Enhanced Engagement</h4>
                                <p>Boost customer interaction with personalized, feature-rich mobile experiences.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="benefit-item text-center p-4 shadow-sm rounded bg-white">
                                <i class="bi bi-speedometer text-success display-4 mb-3"></i>
                                <h4 class="mb-3">Improved Operations</h4>
                                <p>Access real-time data to streamline business processes and enhance efficiency.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="benefit-item text-center p-4 shadow-sm rounded bg-white">
                                <i class="bi bi-cloud-upload text-info display-4 mb-3"></i>
                                <h4 class="mb-3">Scalable Solutions</h4>
                                <p>Develop apps designed to grow with your user base and meet increasing demands.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </section>

@endsection
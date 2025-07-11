
@extends('layouts.app')

@section('content')


   <section class="more-info container py-5">
            <div class="container section-title text-center" data-aos="fade-up">
                <h1>Web Development Services</h1>
                <p>Empowering your online presence with robust and scalable web solutions.</p>
            </div>

            <!-- About Section -->
            <section id="about" class="about section">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                            <h3>Build High-Performance Websites with Doplus Technologies</h3>
                            <p class="fst-italic">
                                Our web development services are designed to create efficient, scalable, and secure
                                websites tailored to meet your unique business requirements.
                            </p>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <i class="bi bi-check-circle"></i> End-to-end web solutions for businesses of all
                                    sizes
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle"></i> Expertise in modern frameworks and technologies
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle"></i> Custom integrations and third-party API support
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle"></i> Mobile-first design for seamless user experience
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-circle"></i> Robust backend solutions to ensure security and
                                    scalability
                                </li>
                            </ul>
                            <a href="#services" class="read-more"><span>Contact Us for More Information</span><i
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
            <section id="features" class="features section py-5 bg-light">
                <div class="container">
                    <div class="section-title text-center" data-aos="fade-up">
                        <h2>Why Choose Our Web Development Services?</h2>
                        <p>Discover the features that make us a trusted partner for your digital transformation.</p>
                    </div>
                    <div class="row gy-4">
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="feature-box text-center">
                                <i class="bi bi-laptop feature-icon"></i>
                                <h4>Custom Development</h4>
                                <p>We design websites tailored to your specific business goals and audience needs.</p>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-box text-center">
                                <i class="bi bi-speedometer2 feature-icon"></i>
                                <h4>High Performance</h4>
                                <p>Our websites are optimized for speed and efficiency to enhance user satisfaction.</p>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="feature-box text-center">
                                <i class="bi bi-shield-lock feature-icon"></i>
                                <h4>Security</h4>
                                <p>We implement advanced security protocols to safeguard your data and users.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /Features Section -->

            <!-- Process Section -->
            <section id="process" class="process section py-5">
                <div class="container">
                    <div class="section-title text-center" data-aos="fade-up">
                        <h2>Our Development Process</h2>
                        <p>A streamlined approach to deliver exceptional results.</p>
                    </div>
                    <div class="row gy-4">
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="process-step text-center">
                                <i class="bi bi-lightbulb process-icon"></i>
                                <h4>Discovery</h4>
                                <p>Understanding your goals and gathering requirements.</p>
                            </div>
                        </div>
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="process-step text-center">
                                <i class="bi bi-pencil-square process-icon"></i>
                                <h4>Design</h4>
                                <p>Creating wireframes and prototypes to visualize the solution.</p>
                            </div>
                        </div>
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                            <div class="process-step text-center">
                                <i class="bi bi-code-slash process-icon"></i>
                                <h4>Development</h4>
                                <p>Building the website using cutting-edge technologies.</p>
                            </div>
                        </div>
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                            <div class="process-step text-center">
                                <i class="bi bi-gear process-icon"></i>
                                <h4>Testing & Launch</h4>
                                <p>Ensuring quality and deploying the final product.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /Process Section -->

            <!-- Testimonials Section -->
            <section id="testimonials" class="testimonials section py-5 bg-light">
                <div class="container">
                    <div class="section-title text-center" data-aos="fade-up">
                        <h2>What Our Clients Say</h2>
                        <p>Hear from those who have trusted us with their web development needs.</p>
                    </div>
                    <div class="row gy-4">
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon"></i>
                                    Doplus Technologies transformed our outdated website into a sleek and user-friendly
                                    platform. The team was professional and responsive throughout the process.
                                </p>
                                <h4>John Doe</h4>
                                <span>CEO, TechCorp</span>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon"></i>
                                    Excellent service! Their web solutions have helped us achieve a significant boost in
                                    online engagement and sales.
                                </p>
                                <h4>Jane Smith</h4>
                                <span>Marketing Head, RetailWorld</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /Testimonials Section -->
        </section>


@endsection
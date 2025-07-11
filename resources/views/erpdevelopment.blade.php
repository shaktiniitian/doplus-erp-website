@extends('layouts.app')

@section('content')

    <section class="more-info container py-5">
            <div class="container section-title text-center" data-aos="fade-up">
                <h1>Custom ERP Development Services</h1>
                <p>Streamline your business processes with tailored ERP solutions designed for efficiency and growth.
                </p>
            </div>
        </section>

        <!-- About Section -->
        <section id="about-erp" class="about section">
            <div class="container">
                <div class="row gy-4">
                    <!-- Content Section -->
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <h3>Tailored ERP Solutions with Doplus Technologies</h3>
                        <p class="fst-italic">
                            Our custom ERP solutions are built to optimize workflows, enhance productivity, and
                            integrate seamlessly with your existing systems.
                        </p>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="bi bi-check-circle"></i> Scalable ERP systems for businesses of all sizes
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle"></i> Advanced data analytics for informed decision-making
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle"></i> Industry-specific modules tailored to your needs
                            </li>
                        </ul>
                        <a href="#features" class="read-more"><span>Contact Us for More Information</span><i
                                class="bi bi-arrow-right btn-primary"></i></a>
                    </div>

                    <!-- Images Section -->
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
                    <h2>Key Features of Our ERP Solutions</h2>
                    <p>Built to empower your organization with flexibility, efficiency, and reliability.</p>
                </div>
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-md-4">
                        <div class="feature-item text-center p-4 shadow-sm rounded bg-white">
                            <i class="bi bi-diagram-3 text-primary display-4 mb-3"></i>
                            <h4 class="mb-3">Centralized Data Management</h4>
                            <p>Access and manage all your business data from a single platform.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-item text-center p-4 shadow-sm rounded bg-white">
                            <i class="bi bi-speedometer2 text-success display-4 mb-3"></i>
                            <h4 class="mb-3">Real-Time Monitoring</h4>
                            <p>Track performance metrics and gain actionable insights instantly.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-item text-center p-4 shadow-sm rounded bg-white">
                            <i class="bi bi-gear-wide-connected text-info display-4 mb-3"></i>
                            <h4 class="mb-3">Seamless Integration</h4>
                            <p>Integrate effortlessly with third-party applications and tools.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Features Section -->

        <!-- Benefits Section -->
        <section id="benefits" class="benefits section py-5">
            <div class="container">
                <div class="section-title text-center" data-aos="fade-up">
                    <h2>Why Choose Our ERP Solutions?</h2>
                    <p>Revolutionize your business operations with our robust ERP systems.</p>
                </div>
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-md-4">
                        <div class="benefit-item text-center p-4 shadow-sm rounded bg-white">
                            <i class="bi bi-person-check text-danger display-4 mb-3"></i>
                            <h4 class="mb-3">User-Friendly Interface</h4>
                            <p>Intuitive designs that make it easy for employees to adopt and use.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benefit-item text-center p-4 shadow-sm rounded bg-white">
                            <i class="bi bi-shield-check text-warning display-4 mb-3"></i>
                            <h4 class="mb-3">Enhanced Security</h4>
                            <p>State-of-the-art security features to protect your data and operations.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benefit-item text-center p-4 shadow-sm rounded bg-white">
                            <i class="bi bi-globe text-primary display-4 mb-3"></i>
                            <h4 class="mb-3">Global Scalability</h4>
                            <p>Expand your business seamlessly with scalable ERP solutions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Benefits Section -->


@endsection
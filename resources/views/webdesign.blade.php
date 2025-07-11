@extends('layouts.app')

@section('content')

    <section class="more-info container py-5">
        <div class="container section-title text-center" data-aos="fade-up">
            <h2>IT Security Compliance with Audits</h2>
            <p>Comprehensive solutions to ensure your business stays secure and compliant with regulatory standards.
            </p>
        </div>

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <h3>Secure Your Business with Confidence</h3>
                        <p class="fst-italic">
                            At Doplus Technologies, we specialize in delivering robust IT security compliance
                            solutions
                            designed to protect your data and ensure regulatory compliance.
                        </p>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="bi bi-shield-lock" style="font-size: 2rem; color: #0d6efd;"></i>
                                Comprehensive Risk Assessments
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-clipboard-data" style="font-size: 2rem; color: #198754;"></i>
                                Tailored Compliance Solutions
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-bar-chart-line" style="font-size: 2rem; color: #fd7e14;"></i>
                                Regular Audits and Reporting
                            </li>
                        </ul>
                        <a href="#services" class="read-more">
                            <span>Contact Us for More Information</span>
                            <i class="bi bi-arrow-right btn-primary"></i>
                        </a>
                    </div>

                    <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <img src="assets/img/security_4.png" class="img-fluid" alt="Security Image 1">
                            </div>
                            <div class="col-lg-6">
                                <div class="row gy-4">
                                    <div class="col-lg-12">
                                        <img src="assets/img/security_2.jpg" class="img-fluid" alt="Security Image 2">
                                    </div>
                                    <div class="col-lg-12">
                                        <img src="assets/img/security_3.jpg" class="img-fluid" alt="Security Image 3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="features section py-5">
            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">
                    <h3>Our Key Features</h3>
                    <p>Discover the exceptional features of our IT security and compliance services.</p>
                </div>

                <div class="row gy-4">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-box text-center">
                            <i class="bi bi-shield-check" style="font-size: 3rem; color: #0dcaf0;"></i>
                            <h4>Compliance Assurance</h4>
                            <p>Ensure adherence to industry-specific regulatory standards with our expert guidance.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-box text-center">
                            <i class="bi bi-file-lock" style="font-size: 3rem; color: #ffc107;"></i>
                            <h4>Data Protection</h4>
                            <p>Secure sensitive information with advanced data protection strategies.</p>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-box text-center">
                            <i class="bi bi-diagram-3" style="font-size: 3rem; color: #198754;"></i>
                            <h4>Network Security</h4>
                            <p>Fortify your IT infrastructure against potential threats and vulnerabilities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section id="process" class="process section py-5 bg-light">
            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">
                    <h3>Our Compliance Process</h3>
                    <p>Step-by-step approach to achieving and maintaining compliance.</p>
                </div>

                <div class="row gy-4">
                    <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-lightbulb" style="font-size: 3rem; color: #fd7e14;"></i>
                        <h4>1. Assessment</h4>
                        <p>Identify potential risks and evaluate current compliance status.</p>
                    </div>

                    <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-pencil-square" style="font-size: 3rem; color: #0d6efd;"></i>
                        <h4>2. Planning</h4>
                        <p>Develop a customized strategy to address gaps and vulnerabilities.</p>
                    </div>

                    <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-code-slash" style="font-size: 3rem; color: #198754;"></i>
                        <h4>3. Implementation</h4>
                        <p>Deploy solutions to enhance security and meet compliance standards.</p>
                    </div>

                    <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-bar-chart" style="font-size: 3rem; color: #ffc107;"></i>
                        <h4>4. Monitoring</h4>
                        <p>Continuously track and improve compliance efforts over time.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section py-5">
            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">
                    <h3>What Our Clients Say</h3>
                    <p>Hear from businesses that trust us for their IT security and compliance needs.</p>
                </div>

                <div class="row gy-4">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="testimonial-box">
                            <p><i class="bi bi-quote" style="font-size: 2rem; color: #0d6efd;"></i> Doplus
                                Technologies provided us with an exceptional compliance solution that streamlined
                                our operations and enhanced security.</p>
                            <h5>- Client A</h5>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="testimonial-box">
                            <p><i class="bi bi-quote" style="font-size: 2rem; color: #fd7e14;"></i> Their expertise
                                in IT audits is unmatched. Highly recommend their services!</p>
                            <h5>- Client B</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>


@endsection
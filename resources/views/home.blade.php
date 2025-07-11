@extends('layouts.app')

@section('content')

 <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="hero-bg">
        <img src="assets/img/hero-bg-light.webp" alt="">
      </div>
      <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <h1 data-aos="fade-up">Welcome to <span>Doplus Educational ERP</span></h1>
          <p data-aos="fade-up" data-aos-delay="100">Quickly start your project now and set the stage for success<br>
          </p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
              class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch
                Video</span></a>
          </div>
          <img src="assets/img/hero-services-img.webp" class="img-fluid hero-img" alt="" data-aos="zoom-out"
            data-aos-delay="300">
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section light-background">

      <div class="container">

        <div class="row gy-4">

          <!-- Web Development Service -->
          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-laptop"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Web Development</a></h4>
                <p class="description">We build responsive and user-friendly websites tailored to your business needs,
                  ensuring a seamless experience across all devices.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Mobile Application Development -->
          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-phone"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Mobile Application</a></h4>
                <p class="description">Developing high-performance mobile applications that offer great functionality
                  and user experience, tailored for Android and iOS platforms.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Custom ERP Development -->
          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-gear"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Custom ERP Development</a></h4>
                <p class="description">We specialize in developing custom ERP solutions that streamline your business
                  operations, improve efficiency, and support growth.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Featured Services Section -->


    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p class="who-we-are">Who We Are</p>
            <h3>Transforming Businesses with Innovative Digital Solutions</h3>
            <p class="fst-italic">
              At Doplus ERP, we specialize in delivering cutting-edge digital solutions, including web development,
              mobile applications, and custom ERP systems. Our goal is to empower businesses through innovation and
              technology.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Tailored web development services for seamless user
                  experiences.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>High-performance mobile applications for Android and iOS
                  platforms.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Custom ERP solutions that streamline business operations and
                  support growth.</span></li>
            </ul>
            <a href="#services" class="read-more"><span>Explore Our Services</span><i
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
                    <img src="assets/img/about-company-2.jpg" class="img-fluid" alt="Company Image 2">
                  </div>
                  <div class="col-lg-12">
                    <img src="assets/img/about-company-3.jpg" class="img-fluid" alt="Company Image 3">
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- /About Section -->

    <section id="clients" class="clients section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Clients</h2>
      </div>
    
      <div class="container clients-slider" data-aos="fade-up">
        <div class="logos">
          <div class="client-logo"><img src="assets/img/ordance.png" class="img-fluid" alt=""></div>
          <div class="client-logo"><img src="assets/img/sugarlite.png" class="img-fluid" alt=""></div>
          <div class="client-logo"><img src="assets/img/nycil.png" class="img-fluid" alt=""></div>
          <div class="client-logo"><img src="assets/img/c3.png" class="img-fluid" alt=""></div>
          <div class="client-logo"><img src="assets/img/c2.jpg" class="img-fluid" alt=""></div>
          <div class="client-logo"><img src="assets/img/logo (2).png" class="img-fluid" alt=""></div>
        </div>
        <div class="logos">
          <div class="client-logo"><img src="assets/img/ordance.png" class="img-fluid" alt=""></div>
          <div class="client-logo"><img src="assets/img/sugarlite.png" class="img-fluid" alt=""></div>
          <div class="client-logo"><img src="assets/img/nycil.png" class="img-fluid" alt=""></div>
          <div class="client-logo"><img src="assets/img/c3.png" class="img-fluid" alt=""></div>
          <div class="client-logo"><img src="assets/img/c2.jpg" class="img-fluid" alt=""></div>
          <div class="client-logo"><img src="assets/img/logo (2).png" class="img-fluid" alt=""></div>
        </div>
      </div>
    </section>
    
    

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Features</h2>
        <p>Innovative solutions that empower businesses to grow and thrive.</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-5 d-flex align-items-center">

            <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                  <i class="bi bi-laptop"></i> <!-- Updated Icon -->
                  <div>
                    <h4 class="d-none d-lg-block">Custom Web Development</h4>
                    <p>
                      Build your unique online presence with a website designed specifically to meet your business
                      goals.
                    </p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                  <i class="bi bi-phone"></i> <!-- Updated Icon -->
                  <div>
                    <h4 class="d-none d-lg-block">Mobile App Development</h4>
                    <p>
                      Reach your audience on the go with high-performance apps designed to enhance user engagement.
                    </p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                  <i class="bi bi-bar-chart"></i> <!-- Updated Icon -->
                  <div>
                    <h4 class="d-none d-lg-block">Custom ERP Solutions</h4>
                    <p>
                      Optimize your business operations and decision-making with our fully integrated ERP solutions.
                    </p>
                  </div>
                </a>
              </li>
            </ul><!-- End Tab Nav -->

          </div>

          <div class="col-lg-6">

            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

              <div class="tab-pane fade active show" id="features-tab-1">
                <img src="assets/img/tabs-1.jpg" alt="Custom Web Development" class="img-fluid">
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade" id="features-tab-2">
                <img src="assets/img/tabs-2.jpg" alt="Mobile App Development" class="img-fluid">
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade" id="features-tab-3">
                <img src="assets/img/tabs-3.jpg" alt="Custom ERP Solutions" class="img-fluid">
              </div><!-- End Tab Content Item -->
            </div>

          </div>

        </div>

      </div>

    </section><!-- /Features Section -->


    <!-- Features Details Section -->
    <section id="features-details" class="features-details section">

      <div class="container">

        <!-- Feature 1 -->
        <div class="row gy-4 justify-content-between features-item">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/features-1.jpg" class="img-fluid" alt="Streamlined Administrative Tasks">
          </div>
          <div class="col-lg-5 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
            <div class="content">
              <h3 class="fw-bold">Streamlined Administrative Tasks</h3>
              <p>
                Simplify administrative processes such as attendance tracking, fee management, and timetable scheduling,
                allowing educators to focus more on teaching and less on paperwork.
              </p>
              <ul>
                <li><i class="bi bi-calendar-check flex-shrink-0"></i> Automated attendance and reporting.</li>
                <li><i class="bi bi-cash-coin flex-shrink-0"></i> Seamless fee collection and management.</li>
                <li><i class="bi bi-clock flex-shrink-0"></i> Easy timetable generation and updates.</li>
              </ul>
              <a href="#" class="btn more-btn">Learn More</a>
            </div>
          </div>
        </div><!-- End Feature 1 -->

        <!-- Feature 2 -->
        <div class="row gy-4 justify-content-between features-item">
          <div class="col-lg-5 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3 class="fw-bold">Comprehensive Academic Management</h3>
              <p>
                Manage academic operations efficiently, from student enrollment to exam scheduling, report card
                generation,
                and parent-teacher communication—all in one place.
              </p>
              <ul>
                <li><i class="bi bi-person-video3 flex-shrink-0"></i> Centralized student and teacher profiles.</li>
                <li><i class="bi bi-file-earmark-text flex-shrink-0"></i> Online report card creation.</li>
                <li><i class="bi bi-chat flex-shrink-0"></i> Real-time parent-teacher communication.</li>
              </ul>
              <a href="#" class="btn more-btn">Learn More</a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="300">
            <img src="assets/img/features-2.jpg" class="img-fluid" alt="Academic Management">
          </div>
        </div><!-- End Feature 2 -->

        <!-- Feature 3 -->
        <div class="row gy-4 justify-content-between features-item">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <img src="assets/img/features-3.jpg" class="img-fluid" alt="Mobile-Friendly ERP">
          </div>
          <div class="col-lg-5 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="400">
            <div class="content">
              <h3 class="fw-bold">Mobile-Friendly Solutions</h3>
              <p>
                Access all ERP features on the go with our mobile-friendly platform, designed for both Android and iOS.
                Stay connected with students, parents, and staff anytime, anywhere.
              </p>
              <ul>
                <li><i class="bi bi-smartphone flex-shrink-0"></i> Compatible with Android and iOS devices.</li>
                <li><i class="bi bi-bell flex-shrink-0"></i> Instant notifications for updates and announcements.</li>
                <li><i class="bi bi-globe flex-shrink-0"></i> Cloud-based access for seamless operation.</li>
              </ul>
              <a href="#" class="btn more-btn">Learn More</a>
            </div>
          </div>
        </div><!-- End Feature 3 -->

      </div>

    </section><!-- /Features Details Section -->



    <!-- Services Section -->
    <section id="services" class="services section light-background">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Explore the exceptional range of services we offer to cater to your business needs.</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row g-5">

          <!-- Service 1: Web Development -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <i class="bi bi-code-slash icon"></i>
              <div>
                <h3>Web Development</h3>
                <p>Create custom, responsive, and dynamic websites tailored to meet your business objectives.</p>
                <a href="#" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Service 2: Mobile Application Development -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
              <i class="bi bi-phone icon"></i>
              <div>
                <h3>Mobile Development</h3>
                <p>Develop intuitive and high-performance mobile apps for Android and iOS platforms.</p>
                <a href="#" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Service 3: Custom ERP Development -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <i class="bi bi-gear icon"></i>
              <div>
                <h3>Custom ERP Development</h3>
                <p>Build efficient ERP solutions to streamline business processes and improve productivity.</p>
                <a href="#" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Service 4: Project Management Tools -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item item-indigo position-relative">
              <i class="bi bi-calendar4-week icon"></i>
              <div>
                <h3>Project Management Tools</h3>
                <p>Design and implement tools to manage your projects effectively and meet deadlines effortlessly.</p>
                <a href="#" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Service 5: Consultation Services -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item item-pink position-relative">
              <i class="bi bi-chat-square-text icon"></i>
              <div>
                <h3>Consultation Services</h3>
                <p>Get expert guidance to align technology with your strategic goals and maximize growth.</p>
                <a href="#" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- New Service: Educational ERP Solutions -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item item-teal position-relative">
              <i class="bi bi-mortarboard icon"></i>
              <div>
                <h3>Educational ERP Solutions</h3>
                <p>Empower schools and colleges with comprehensive ERP systems to manage academic and administrative
                  tasks efficiently.</p>
                <a href="#" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>
      </div>
    </section><!-- /Services Section -->



    <!-- More Features Section -->
    <section id="more-features" class="more-features section">

      <div class="container">

        <div class="row justify-content-around gy-4">

          <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1" data-aos="fade-up"
            data-aos-delay="100">
            <h3>Innovative Software Solutions for Modern Education</h3>
            <p>
              At Doplus Technologies, we provide cutting-edge educational ERP solutions designed to optimize school and
              college management. Our software simplifies administrative tasks, enhances communication, and improves
              overall educational efficiency.
            </p>

            <div class="row">

              <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-laptop flex-shrink-0"></i>
                <div>
                  <h4>Educational ERP</h4>
                  <p>Streamline school management with our robust ERP systems, designed for efficient operations and
                    seamless communication.</p>
                </div>
              </div>
              <!-- End Icon Box -->

              <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-person-check flex-shrink-0"></i>
                <div>
                  <h4>Student & Parent Portal</h4>
                  <p>Empower students and parents with easy access to grades, attendance, timetables, and more through a
                    dedicated portal.</p>
                </div>
              </div>
              <!-- End Icon Box -->

              <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-graph-up flex-shrink-0"></i>
                <div>
                  <h4>Performance Analytics</h4>
                  <p>Track and analyze student performance with powerful data analytics tools, ensuring continuous
                    improvement in education quality.</p>
                </div>
              </div>
              <!-- End Icon Box -->

              <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-calendar2-week flex-shrink-0"></i>
                <div>
                  <h4>Timetable Management</h4>
                  <p>Automate and customize class schedules, exams, and events to ensure smooth operation of educational
                    institutions.</p>
                </div>
              </div>
              <!-- End Icon Box -->

            </div>

          </div>

          <div class="features-image col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/features-3.jpg" alt="Innovative Software Solutions">
          </div>

        </div>

      </div>

    </section>
    <!-- /More Features Section -->


    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">

              <!-- FAQ 1: About School ERP System -->
              <div class="faq-item faq-active">
                <h3>How does your ERP system manage student records?</h3>
                <div class="faq-content">
                  <p>Our ERP system helps in efficiently managing student records from enrollment to graduation. It
                    includes features like personal details, academic performance, and attendance tracking.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <!-- FAQ 2: Attendance Tracking -->
              <div class="faq-item">
                <h3>Can the ERP system track student attendance?</h3>
                <div class="faq-content">
                  <p>Yes, our ERP system includes a comprehensive attendance tracking feature. It allows teachers to
                    record daily attendance and generate reports based on student performance.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <!-- FAQ 3: Report Generation -->
              <div class="faq-item">
                <h3>Does the system provide automatic report generation?</h3>
                <div class="faq-content">
                  <p>Yes, the ERP system automatically generates academic reports, including grades, attendance, and
                    other metrics. These reports can be shared with both parents and students.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <!-- FAQ 4: Parent-Teacher Communication -->
              <div class="faq-item">
                <h3>Can parents communicate with teachers through the ERP system?</h3>
                <div class="faq-content">
                  <p>Our system includes a parent-teacher communication module that allows seamless interaction between
                    parents and teachers regarding student progress, events, and more.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <!-- FAQ 5: Fee Management -->
              <div class="faq-item">
                <h3>Is there a fee management feature included in the ERP system?</h3>
                <div class="faq-content">
                  <p>Yes, our ERP system provides fee management capabilities, including invoicing, payment tracking,
                    and the ability to generate detailed reports on student fees.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <!-- FAQ 6: Customization and Integration -->
              <div class="faq-item">
                <h3>Can the ERP system be customized for specific needs of my school?</h3>
                <div class="faq-content">
                  <p>Yes, our ERP system is highly customizable. We can adapt it to suit your school's specific
                    requirements, including additional modules or integrations with other tools.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <!-- FAQ 7: Web Development Services -->
              <div class="faq-item">
                <h3>Do you offer web development services?</h3>
                <div class="faq-content">
                  <p>Yes, we specialize in custom web development services tailored to your business or school needs.
                    Our solutions are designed to ensure a responsive, user-friendly, and secure experience for your
                    users.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <!-- FAQ 8: Mobile Application Development -->
              <div class="faq-item">
                <h3>Can you develop mobile applications for our school?</h3>
                <div class="faq-content">
                  <p>Yes, we provide mobile application development services for both Android and iOS platforms. Whether
                    it's for student access, attendance tracking, or any other school-related task, we can create a
                    mobile solution to fit your needs.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <!-- FAQ 9: Custom ERP Development -->
              <div class="faq-item">
                <h3>Do you offer custom ERP development services?</h3>
                <div class="faq-content">
                  <p>Absolutely! If you require a more personalized ERP solution, we offer custom ERP development
                    tailored to your school’s unique requirements. We work closely with you to ensure the solution meets
                    all your functional needs.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Client Testimonials</h2>
        <p>What our clients are saying about our services</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <!-- Testimonial 1: Custom ERP Development -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  "The custom ERP system built by the team at Doplus Technologies has significantly improved our
                  operational efficiency. The solution was tailored to our school's needs, and we now have better
                  control over student data and operations."
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Aman Raj</h3>
                  <h4>Founder, A.D Public School</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <!-- Testimonial 2: Web Development -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  "We approached Doplus Technologies to redesign our school's website, and the result was exceptional.
                  The website is now more user-friendly, visually appealing, and responsive across all devices. Highly
                  recommended!"
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Mr. M.S. Tyagi</h3>
                  <h4>Founder, G.R Convent School</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <!-- Testimonial 3: Mobile Application Development -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  "The mobile app developed for our school has been a game-changer! Parents and students now have quick
                  access to grades, attendance, and announcements. The development process was smooth, and the app is
                  very intuitive."
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Director of Operations, PQR High School</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <!-- Testimonial 4: Custom ERP Development -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  "The custom ERP solution provided by Doplus Technologies has made school management much easier. From
                  fee management to attendance tracking, everything is now automated and integrated, saving us a lot of
                  time and effort."
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Administrator, LMN School</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <!-- Testimonial 5: Web Development -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  "Thanks to Doplus Technologies, we now have a professional website that accurately represents our
                  brand and is easy for parents and students to navigate. The whole process was seamless and efficient."
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Owner, ABC School</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact Us</h2>
        <p>We are here to assist you with your software and technology needs. Feel free to get in touch!</p>
      </div>
      <!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
              data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>G7Suite 715, 7th Floor, SRS Tower</h3>
              <p>Sec.-31, Faridabad, Haryana -121003 NCR INDIA </p>
            </div>
          </div>
          <!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
              data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>+91 9599844612</p>
            </div>
          </div>
          <!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
              data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>support@doplus.in</p>
            </div>
          </div>
          <!-- End Info Item -->
        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14032.48160155783!2d77.28975128763281!3d28.445786722887757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cddf521657297%3A0x15856257cbaf48a5!2sSRS%20Tower%2C%20Sector%2031%2C%20Faridabad%2C%20Haryana%20121003!5e0!3m2!1sen!2sin!4v1733469308436!5m2!1sen!2sin"
              frameborder="0" style="border:0; inline-size: 100%; block-size: 400px;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
          <!-- End Google Maps -->

          <div class="col-lg-6">
                        <form id="sendmessage" data-aos="fade-up" data-aos-delay="400">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="phone" placeholder="Mobile" required>
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit"  class="btn btn-primary">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
          <!-- End Contact Form -->
        </div>

      </div>

    </section>
    <!-- /Contact Section -->



@endsection
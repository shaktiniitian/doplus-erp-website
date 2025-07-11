@extends('layouts.app')

@section('content')

 <div id="headerSlider" class="carousel slide slider-banner" data-bs-ride="carousel">
    <div class="carousel-inner">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <img src="./assets/img/about-company-3.jpg" class="d-block w-100" alt="Slide 1">
      </div>
      <!-- Slide 2 -->
      <div class="carousel-item">
        <img src="./assets/img/slider.jpg" class="d-block w-100" alt="Slide 2">
      </div>
      <!-- Slide 3 -->
      <div class="carousel-item">
        <img src="./assets/img/School-ERP-.png" class="d-block w-100" alt="Slide 3">
      </div>
    </div>

    <!-- Optional Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#headerSlider" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#headerSlider" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


    <section id="features" class="features section">
        <div class="container section-title text-center" data-aos="fade-up">
            <h2>Uses Of doplus Educational ERP</h2>
            <!-- Training and Analysis Section -->
            <section class="training-analysis py-5">
                <div class="container">
                    <div class="row gy-4 text-center">
                        <!-- KG to 12th School Section -->
                        <div class="col-md-4">
                            <div class="card shadow-sm p-4 rounded kg-school-section position-relative text-white"
                                style="background-image: url('./assets/img/school_img.jpg'); background-size: cover; background-position: center;">
                                <!-- Overlay -->
                                <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
                                <i class="bi bi-book text-warning display-4 mb-3 position-relative"></i>
                                <h4 class="text-light position-relative">KG to 12th School</h4>
                                <p class="position-relative">
                                    Our ERP system provides specialized solutions for schools ranging from kindergarten to
                                    12th grade,
                                    streamlining academic, administrative, and communication processes.
                                </p>
                            </div>
                        </div>

                        <!-- Institutes Section -->
                        <div class="col-md-4">
                            <div class="card shadow-sm p-4 rounded institutes-section position-relative text-white"
                                style="background-image: url('./assets/img/college.jpg'); background-size: cover; background-position: center;">
                                <!-- Overlay -->
                                <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
                                <i class="bi bi-lightbulb text-warning display-4 mb-3 position-relative"></i>
                                <h4 class="text-light position-relative">Institutes</h4>
                                <p class="position-relative">
                                    Designed for institutes, our ERP simplifies course management, faculty scheduling, and
                                    student
                                    performance
                                    tracking with an emphasis on customization and scalability.
                                </p>
                            </div>
                        </div>

                        <!-- University Section -->
                        <div class="col-md-4">
                            <div class="card shadow-sm p-4 rounded universities-section position-relative text-white"
                                style="background-image: url('./assets/img/university.jpg'); background-size: cover; background-position: center;">
                                <!-- Overlay -->
                                <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
                                <i class="bi bi-mortarboard text-warning display-4 mb-3 position-relative"></i>
                                <h4 class="text-light position-relative">Universities</h4>
                                <p class="position-relative">
                                    Our ERP solutions for universities cater to large-scale academic and administrative
                                    tasks, ensuring
                                    seamless
                                    integration across departments and advanced analytics capabilities.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <h2>Educational ERP Web Features</h2>
            <p>Experience the perfect blend of simplicity and functionality for school management.</p>
        </div>

        <div class="container text-center laptop-mockup-container mb-5">
            <div class="laptop-wrapper">
                <img src="assets/img/Macbook Mockup Front View UV.png" alt="Laptop Mockup" class="laptop-mockup img-fluid">
            </div>
        </div>

        <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                <!-- Feature: Administration Module -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                        <div class="icon-wrapper mb-3 mx-auto">
                            <i class="bi bi-gear-fill fs-2"></i>
                        </div>
                        <h4 class="mb-2 text-center">Administration Module</h4>
                        <p class="mb-3">Streamline administrative tasks for seamless school operations.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Staff Management</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Policy Implementation</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Compliance Tracking</li>
                        </ul>
                    </div>
                </div>

                <!-- Feature: Reception Module -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                        <div class="icon-wrapper mb-3 mx-auto">
                            <i class="bi bi-reception-4 fs-2"></i>
                        </div>
                        <h4 class="mb-2 text-center">Reception Module</h4>
                        <p class="mb-3">Manage front-office operations with efficiency and professionalism.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Visitor Tracking</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Inquiries Management</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Appointment Scheduling</li>
                        </ul>
                    </div>
                </div>

                <!-- Feature: Academics / Student Management -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                        <div class="icon-wrapper mb-3 mx-auto">
                            <i class="bi bi-book-half fs-2"></i>
                        </div>
                        <h4 class="mb-2 text-center">Academics / Student Management</h4>
                        <p class="mb-3">Monitor student progress and ensure academic excellence.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Class Scheduling</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Grade Analysis</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Student Reports</li>
                        </ul>
                    </div>
                </div>

                <!-- Feature 1: Student Management -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                        <div class="icon-wrapper mb-3 mx-auto">
                            <i class="bi bi-person-fill fs-2"></i>
                        </div>
                        <h4 class="mb-2 text-center">Student Management</h4>
                        <p class="mb-3">Efficiently manage student details, admissions, and records in one place.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Admission Management</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Student Records</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Parent Communication</li>
                        </ul>
                    </div>
                </div>

                <!-- Feature 2: Teacher Management -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                        <div class="icon-wrapper mb-3 mx-auto">
                            <i class="bi bi-people-fill fs-2"></i>
                        </div>
                        <h4 class="mb-2 text-center">Teacher Management</h4>
                        <p class="mb-3">Organize and manage teacher profiles, schedules, and performance.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Profile Management</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Class Allocation</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Performance Tracking</li>
                        </ul>
                    </div>
                </div>

                <!-- Feature 3: Attendance Management -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                        <div class="icon-wrapper mb-3 mx-auto">
                            <i class="bi bi-check-square"></i>
                        </div>
                        <h4 class="mb-2 text-center">Attendance Management</h4>
                        <p class="mb-3">Track attendance for students and staff with detailed reporting.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Daily Attendance</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Leave Management</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Real-time Reports</li>
                        </ul>
                    </div>
                </div>

                <!-- Feature 4: Fee Management -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                        <div class="icon-wrapper mb-3 mx-auto">
                            <i class="bi bi-cash fs-2"></i>
                        </div>
                        <h4 class="mb-2 text-center">Fee Management</h4>
                        <p class="mb-3">Simplify fee collection and tracking with automated reports.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Fee Collection</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Payment History</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Outstanding Dues Tracking</li>
                        </ul>
                    </div>
                </div>

                <!-- Feature 5: Exam Management -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                        <div class="icon-wrapper mb-3 mx-auto">
                            <i class="bi bi-journal-text"></i>
                        </div>
                        <h4 class="mb-2 text-center">Exam Management</h4>
                        <p class="mb-3">Plan, schedule, and manage exams with ease.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Exam Scheduling</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Result Generation</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Report Cards</li>
                        </ul>
                    </div>
                </div>

                <!-- Feature 6: Transport Management -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                        <div class="icon-wrapper mb-3 mx-auto">
                            <i class="bi bi-bus-front-fill"></i>
                        </div>
                        <h4 class="mb-2 text-center">Transport Management</h4>
                        <p class="mb-3">Manage routes, schedules, and track vehicles in real-time.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Route Management</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Bus Tracking</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Driver Information</li>
                        </ul>
                    </div>
                </div>

                <!-- Feature: HR & Payroll -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                        <div class="icon-wrapper mb-3 mx-auto">
                            <i class="bi bi-wallet2 fs-2"></i>
                        </div>
                        <h4 class="mb-2 text-center">HR & Payroll</h4>
                        <p class="mb-3">Effortlessly manage employee records and payroll processing.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Employee Records</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Salary Disbursement</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Leave Management</li>
                        </ul>
                    </div>
                </div>

                <!-- Feature: Faculty Module (Web vs) -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                        <div class="icon-wrapper mb-3 mx-auto">
                            <i class="bi bi-mortarboard fs-2"></i>
                        </div>
                        <h4 class="mb-2 text-center">Faculty Module (Web Vs)</h4>
                        <p class="mb-3">Enable faculty to manage classes, assignments, and evaluations.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Class Management</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Assignment Upload</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Feedback Sharing</li>
                        </ul>
                    </div>
                </div>

                <!-- Feature: Student Module (Web Vs) -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                        <div class="icon-wrapper mb-3 mx-auto">
                            <i class="bi bi-laptop fs-2"></i>
                        </div>
                        <h4 class="mb-2 text-center">Student Module (Web Vs)</h4>
                        <p class="mb-3">Provide students with tools to track and manage their studies.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Assignment Tracking</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Exam Schedules</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Progress Reports</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <!-- Features Section -->
        <section id="features" class="features section">
            <div class="container section-title text-center" data-aos="fade-up">
                <h2>Role-Based Features of Educational ERP Mobile Application</h2>
                <p>Discover the tailored features for Students, Teachers, and Admins in our School ERP app.</p>
            </div>
            <div class="container text-center mobile-mockup-container mb-5">
                <div class="mobile-wrapper position-relative">
                    <img src="assets/img/iPhone 15 Mockup.png" alt="Mobile Mockup"
                        class="mobile-mockup img-fluid zoom-effect">
                </div>
            </div>
            <!--role: based Features in Application-->
            <div class="container mb-5" data-aos="fade-up">
                <div class="container section-title text-center" data-aos="fade-up">
                    <h2>Role-Based Security Features</h2>
                    <p>Explore how students, teachers, and admins interact with the School ERP system.</p>
                </div>
                <div class="row gy-4">
                    <!-- Student Section -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                            <div class="icon-wrapper mb-3 mx-auto text-center">
                                <i class="bi bi-mortarboard-fill fs-2"></i>
                            </div>
                            <h4 class="mb-2 text-center">Student Features</h4>
                            <p class="mb-3">Students can access their academic details and more:</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Student Info</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Daily Attandance Notifications
                                </li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Assignments</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Holiday Calendar</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Time Table</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Exam Results</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Fee Payment & Invoice</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Teacher Section -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                            <div class="icon-wrapper mb-3 mx-auto text-center">
                                <i class="bi bi-person-lines-fill fs-2"></i>
                            </div>
                            <h4 class="mb-2 text-center">Teacher Features</h4>
                            <p class="mb-3">Teachers can manage and monitor academic activities:</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Teacher Dashboard</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Self Attandance</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>student daily Attandance Manage
                                </li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Subjects Management</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Assignments</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Time Table</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Events Management</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Holidays</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Admin Section -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                            <div class="icon-wrapper mb-3 mx-auto text-center">
                                <i class="bi bi-gear-fill fs-2"></i>
                            </div>
                            <h4 class="mb-2 text-center">Admin Features</h4>
                            <p class="mb-3">Admins have full control over the School ERP system:</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Manage Subjects</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Staf Attandance Manage</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Fee Collection daily Basis View
                                </li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Assignments</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Time Table</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Events Management</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Holiday Calendar</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Exam Schedules</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Transport Management</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>HR & payroll</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Role: Students -->
            <div class="container mb-5" data-aos="fade-up">
                <div class="section-subtitle text-center mb-4">
                    <h3>Features of Students/parents for App.</h3>
                </div>
                <div class="row gy-4">
                    <!-- Feature 1: View Attendance -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                            <div class="icon-wrapper mb-3 mx-auto">
                                <i class="bi bi-calendar-check-fill fs-2"></i>
                            </div>
                            <h4 class="mb-2 text-center">View Attendance</h4>
                            <p>Monitor your daily attendance records and history.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Daily Attendance</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Daily Notifications Alert</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Monthly Overview</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Attendance History</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Feature 2: Study Material -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                            <div class="icon-wrapper mb-3 mx-auto">
                                <i class="bi bi-house-check-fill fs-2"></i>
                            </div>
                            <h4 class="mb-2 text-center">Leaves</h4>
                            <p>Leave Approval easily.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Full Day leave</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Half Day leave</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>leave Aprrove BY Class Teacher
                                </li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Notifications Alert</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Feature 3: Assignments -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                            <div class="icon-wrapper mb-3 mx-auto">
                                <i class="bi bi-file-earmark-text-fill fs-2"></i>
                            </div>
                            <h4 class="mb-2 text-center">Assignments</h4>
                            <p>Submit assignments and review graded feedback.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Online Submission</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Deadline Reminders</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Grading Feedback</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mb-5" data-aos="fade-up">
                <div class="row gy-4">
                    <!-- Feature 4: Fee Management -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                            <div class="icon-wrapper mb-3 mx-auto">
                                <i class="bi bi-cash-stack fs-2"></i>
                            </div>
                            <h4 class="mb-2 text-center">Fee Payment</h4>
                            <p>Check and pay your fees online with ease.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>View Fee Receipts</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Download Receipts</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Current Dues Notifications</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Feature 5: Holidays & News -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                            <div class="icon-wrapper mb-3 mx-auto">
                                <i class="bi bi-calendar-event fs-2"></i>
                            </div>
                            <h4 class="mb-2 text-center">Holidays & News</h4>
                            <p>Stay informed with the latest updates.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Holiday Calendar</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>News Updates</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Notifications</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Feature 6: Gallery -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                            <div class="icon-wrapper mb-3 mx-auto">
                                <i class="bi bi-images fs-2"></i>
                            </div>
                            <h4 class="mb-2 text-center">Gallery</h4>
                            <p>Explore photos and videos of school events.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Event Highlights</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Photo Albums</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Video Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Teacher Panel Features -->
            <div class="container mb-5" data-aos="fade-up">
                <div class="section-subtitle text-center mb-4">
                    <h3>Features for Teachers</h3>
                </div>
                <div class="row gy-4">
                    <!-- Feature 1: Student Attendance Management -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                            <div class="icon-wrapper mb-3 mx-auto">
                                <i class="bi bi-journal-text fs-2"></i>
                            </div>
                            <h4 class="mb-2 text-center">Student Attendance Management</h4>
                            <p>Monitor and manage student attendance records efficiently.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Mark Daily Attendance</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Attendance Reports</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Send Absentee Alerts</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Feature 2: Study Material Assignments -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                            <div class="icon-wrapper mb-3 mx-auto">
                                <i class="bi bi-file-earmark-text fs-2"></i>
                            </div>
                            <h4 class="mb-2 text-center">Study Material Assignments</h4>
                            <p>Share learning resources and assignments with students.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Upload Study Material</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Distribute Assignments</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Track Submissions</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Feature 3: Self Attendance -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                            <div class="icon-wrapper mb-3 mx-auto">
                                <i class="bi bi-person-check fs-2"></i>
                            </div>
                            <h4 class="mb-2 text-center">Self Attendance</h4>
                            <p>Log your own attendance seamlessly.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Mark Attendance</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>View Attendance History</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Download Attendance Reports
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row gy-4 mt-4">
                    <!-- Feature 4: Student Leave Approval -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                            <div class="icon-wrapper mb-3 mx-auto">
                                <i class="bi bi-envelope-check fs-2"></i>
                            </div>
                            <h4 class="mb-2 text-center">Student Leave Approval</h4>
                            <p>Manage and approve leave requests from students.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>View Leave Requests</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Approve/Reject Applications
                                </li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Track Leave Status</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Feature 5: Gallery -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                            <div class="icon-wrapper mb-3 mx-auto">
                                <i class="bi bi-images fs-2"></i>
                            </div>
                            <h4 class="mb-2 text-center">Gallery</h4>
                            <p>Manage and showcase school photos and videos.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Upload Photos</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Create Albums</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Highlight Events</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Feature 6: Holiday/News -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                            <div class="icon-wrapper mb-3 mx-auto">
                                <i class="bi bi-calendar-event fs-2"></i>
                            </div>
                            <h4 class="mb-2 text-center">Holiday/News</h4>
                            <p>Stay updated with school holidays and announcements.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Post News</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Holiday Calendar</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Alerts & Notifications</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Teacher Panel Features -->

            <div class="container mb-5" data-aos="fade-up">
                <div class="section-subtitle text-center mb-4">
                    <h3>Admin Features</h3>
                </div>
                <div class="row gy-4">
                    <!-- Feature 1: Student Attendance Management -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                            <div class="icon-wrapper mb-3 mx-auto">
                                <i class="bi bi-calendar-check-fill fs-2"></i>
                            </div>
                            <h4 class="mb-2 text-center">Student Attendance Management</h4>
                            <p>Track, update, and manage student attendance records.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Daily Attendance</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Attendance History</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Reports & Analytics</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Feature 2: Study Material Management -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                            <div class="icon-wrapper mb-3 mx-auto">
                                <i class="bi bi-calendar-event fs-2"></i>
                            </div>
                            <h4 class="mb-2 text-center">Holidays & News Management</h4>
                            <p>Keep students and staff updated with important announcements.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Add Holiday Calendar</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Share News Updates</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Send Notifications</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Feature 3: Assignments Management -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                            <div class="icon-wrapper mb-3 mx-auto">
                                <i class="bi bi-file-earmark-text-fill fs-2"></i>
                            </div>
                            <h4 class="mb-2 text-center">Assignments Management</h4>
                            <p>Oversee student assignments and submissions.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Create Assignments</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Track Submissions</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Provide Feedback</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mb-5" data-aos="fade-up">
                <div class="row gy-4">
                    <!-- Feature 4: Staff Attendance Management -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                            <div class="icon-wrapper mb-3 mx-auto">
                                <i class="bi bi-people-fill fs-2"></i>
                            </div>
                            <h4 class="mb-2 text-center">Staff Attendance Management</h4>
                            <p>Monitor and manage staff attendance efficiently.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Daily Logs</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Leave Approvals</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Attendance Reports</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Feature 5: Student Leave Approval -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                            <div class="icon-wrapper mb-3 mx-auto">
                                <i class="bi bi-envelope-check fs-2"></i>
                            </div>
                            <h4 class="mb-2 text-center">Student Leave Approval</h4>
                            <p>Review and approve student leave requests seamlessly.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>View Requests</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Approve/Reject Leaves</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Leave History</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Feature 6: Gallery Management -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box shadow-sm p-4 h-100 text-start position-relative">
                            <div class="icon-wrapper mb-3 mx-auto">
                                <i class="bi bi-images fs-2"></i>
                            </div>
                            <h4 class="mb-2 text-center">Gallery Management</h4>
                            <p>Upload and manage photos and videos of school events.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Add Albums</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Event Highlights</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Organize Media</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- Data Safety & Security Section -->
        <section class="data-security section py-5">
            <div class="container">
                <div class="section-title text-center" data-aos="fade-up">
                    <h2>Data Safety & Security</h2>
                    <p>Ensuring the protection of your school data with advanced technologies and best practices.</p>
                </div>
                <div class="row gy-4">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="security-feature text-center p-4 shadow-sm rounded bg-white">
                            <i class="bi bi-lock-fill text-primary display-4 mb-3"></i>
                            <h4>Secure Data Encryption</h4>
                            <p>All sensitive information is encrypted to prevent unauthorized access.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="security-feature text-center p-4 shadow-sm rounded bg-white">
                            <i class="bi bi-shield-lock-fill text-success display-4 mb-3"></i>
                            <h4>Multi-Layer Authentication</h4>
                            <p>Advanced authentication ensures only authorized personnel can access data.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="security-feature text-center p-4 shadow-sm rounded bg-white">
                            <i class="bi bi-cloud-check-fill text-info display-4 mb-3"></i>
                            <h4>Cloud Security</h4>
                            <p>Leverage top-notch cloud security measures for seamless and safe data access.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="security-feature text-center p-4 shadow-sm rounded bg-white">
                            <i class="bi bi-shield-fill-check text-warning display-4 mb-3"></i>
                            <h4>Data Integrity Checks</h4>
                            <p>Regular integrity checks ensure data accuracy and prevent tampering.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="security-feature text-center p-4 shadow-sm rounded bg-white">
                            <i class="bi bi-eye-slash-fill text-danger display-4 mb-3"></i>
                            <h4>Privacy Compliance</h4>
                            <p>Strict adherence to privacy laws like GDPR and FERPA for peace of mind.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="security-feature text-center p-4 shadow-sm rounded bg-white">
                            <i class="bi bi-lock-fill text-secondary display-4 mb-3"></i>
                            <h4>Data Backup & Recovery</h4>
                            <p>Automated backups and recovery options to safeguard against data loss.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Data Safety & Security Section -->

        <!-- download our mobile application Section -->
        <section id="roles" class="roles section">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div style="float: right; text-align: right;">
                        <h4 style="margin-bottom: 10px;">Download Android Application</h4>
                        <a href="https://play.google.com/store/search?q=doplus+school+erp&c=apps" target="_blank"
                            title="Download on Play Store"
                            style="display: inline-block; text-decoration: none; border-radius: 50%; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/d/d0/Google_Play_Arrow_logo.svg"
                                alt="Play Store Icon" style=" height: 60px; display: block;">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="client-logos py-5">
            <div class="container">
                <div class="section-title text-center" data-aos="fade-up">
                    <h2>Our Esteemed Clients</h2>
                    <p>Trusted by leading schools for efficient and seamless management.</p>
                </div>
                <div class="logo-carousel" data-aos="fade-up" data-aos-delay="100">
                    <div class="logo-track">
                        <img src="./assets/img/logo (2).png" alt="Client Logo 1" class="logo">
                        <img src="./assets/img/testimonials/bharat.png" alt="Client Logo 2" class="logo">
                        <img src="./assets/img/testimonials/bright_img.jpeg" alt="Client Logo 3" class="logo">
                        <img src="./assets/img/testimonials/geeta.png" alt="Client Logo 4" class="logo">
                        <img src="./assets/img/testimonials/mo_hasan.png" alt="Client Logo 5" class="logo">
                        <!-- Repeat logos to make animation seamless -->
                        <img src="./assets/img/ordance.png" alt="Client Logo 1" class="logo">
                        <img src="./assets/img/testimonials/new nalanda.jpg" alt="Client Logo 2" class="logo">
                        <img src="./assets/img/c3.png" alt="Client Logo 3" class="logo">
                        <img src="./assets/img/testimonials/bright_img.jpeg" alt="Client Logo 4" class="logo">
                        <img src="./assets/img/ordance.png" alt="Client Logo 5" class="logo">
                    </div>
                </div>
            </div>
        </section>
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

                        <!-- Testimonial 1 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    "The team at Doplus Technologies is exceptional. Whenever we have questions or need
                                    assistance, they
                                    are quick to respond and resolve issues. Their support is as great as their software!"
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/geeta.png" class="testimonial-img" alt="">
                                    <h3>Rakesh Kumar</h3>
                                    <h4>Founder, Delhi Public School</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <!-- Testimonial 2 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    "We love how Doplus ERP integrates every aspect of school management. From fee
                                    collection to exam
                                    management, it covers it all. The mobile app is a favorite among parents, offering them
                                    real-time
                                    updates at their fingertips."
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/bright_img.jpeg" class="testimonial-img" alt="">
                                    <h4>Neha Sharma</h4>
                                    <h4>Founder, Ryan International School</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <!-- Testimonial 3 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    "What stands out about Doplus educational ERP is its simplicity. The interface is
                                    user-friendly, and even
                                    non-tech-savvy staff can navigate it effortlessly. It has truly made our administrative
                                    tasks less
                                    time-consuming."
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/bharat.png" class="testimonial-img" alt="">
                                    <h4>Vikram Singh</h4>
                                    <h4>Director of Operations, Amity International School</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <!-- Testimonial 4 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    "The mobile application has bridged the communication gap between parents and teachers.
                                    Instant
                                    updates on homework, attendance, and announcements ensure parents are always in the
                                    loop. It’s a
                                    game-changer for our school."
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/new nalanda.jpg" class="testimonial-img" alt="">
                                    <h4>Rajiv Menon</h4>
                                    <h4>Principal, The Heritage School</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <!-- Testimonial 5 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    "Doplus School ERP Software has revolutionized the way we manage our school operations.
                                    From
                                    admissions to attendance tracking, everything is seamless and efficient. The mobile app
                                    makes it so
                                    convenient for parents to stay updated about their child’s progress." </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/mo_hasan.png" class="testimonial-img" alt="">
                                    <h4>Asha Patel</h4>
                                    <h4>Owner, Bhartiya Vidya Bhavan</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Section -->

        <!-- Pricing Section -->
        <section id="pricing" class="pricing section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pricing</h2>
                <p>Choose the best plan for your school ERP needs. Whether you're managing PG to 10th, PG to 12th, or a
                    College/University, we have the right solution for you.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <!-- Basic Plan: PG to 10th -->
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pricing-item">
                            <h3>Basic Plan (PG to 10th)</h3>
                            <p class="description">This plan is designed for schools catering to PG to 10th classes. It
                                includes basic
                                features such as student management, grade tracking, and report generation.</p>
                            <a href="#" class="cta-btn">Call Now</a>
                            <ul>
                                <li><i class="bi bi-check"></i> <span>Student Enrollment Management</span></li>
                                <li><i class="bi bi-check"></i> <span>Grade Tracking</span></li>
                                <li><i class="bi bi-check"></i> <span>Timetable Management</span></li>
                                <li><i class="bi bi-check"></i> <span>Report Generation</span></li>
                                <li><i class="bi bi-check"></i> <span>Advanced Analytics</span></li>
                                <li><i class="bi bi-check"></i> <span>Parent-Teacher Communication</span></li>
                            </ul>
                        </div>
                    </div><!-- End Pricing Item -->

                    <!-- Intermediate Plan: PG to 12th -->
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pricing-item featured">
                            <p class="popular">Popular</p>
                            <h3>Intermediate Plan (PG to 12th)</h3>
                            <p class="description">This plan is ideal for schools offering classes from PG to 12th. It
                                includes
                                additional features such as parent communication and attendance tracking.</p>
                            <a href="#" class="cta-btn">Call Now</a>
                            <ul>
                                <li><i class="bi bi-check"></i> <span>All features in Basic Plan</span></li>
                                <li><i class="bi bi-check"></i> <span>Parent-Teacher Communication</span></li>
                                <li><i class="bi bi-check"></i> <span>Attendance Tracking</span></li>
                                <li><i class="bi bi-check"></i> <span>Library Management</span></li>
                                <li><i class="bi bi-check"></i> <span>Advanced Analytics</span></li>
                                <li><i class="bi bi-check"></i> <span>Fee Management</span></li>
                            </ul>
                        </div>
                    </div><!-- End Pricing Item -->

                    <!-- College & University Plan -->
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="pricing-item">
                            <h3>College & University Plan</h3>
                            <p class="description">Designed for higher education institutions, this plan includes
                                comprehensive
                                features for colleges and universities, including fee management and advanced analytics.</p>
                            <a href="#" class="cta-btn">Call Now</a>
                            <ul>
                                <li><i class="bi bi-check"></i> <span>All features in Intermediate Plan</span></li>
                                <li><i class="bi bi-check"></i> <span>Fee Management</span></li>
                                <li><i class="bi bi-check"></i> <span>Course Scheduling</span></li>
                                <li><i class="bi bi-check"></i> <span>Staff and Faculty Management</span></li>
                                <li><i class="bi bi-check"></i> <span>Advanced Analytics and Reports</span></li>
                                <li><i class="bi bi-check"></i> <span>Customizable Dashboards</span></li>
                            </ul>
                        </div>
                    </div><!-- End Pricing Item -->

                </div>

            </div>

        </section><!-- /Pricing Section -->

        <!-- FAQ Section -->
        <section id="faq" class="faq section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                        <div class="faq-container">

                            <!-- FAQ 1: Student Records -->
                            <div class="faq-item faq-active">
                                <h3>How does Doplus School ERP manage student records?</h3>
                                <div class="faq-content">
                                    <p>Doplus School ERP efficiently manages student records, covering personal details,
                                        academic
                                        performance, attendance, and progress tracking from admission to graduation.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item -->

                            <!-- FAQ 2: Attendance Tracking -->
                            <div class="faq-item">
                                <h3>Can Doplus School ERP track student attendance?</h3>
                                <div class="faq-content">
                                    <p>Yes, Doplus School ERP includes a robust attendance tracking system that allows
                                        teachers to record
                                        daily attendance and generate detailed reports for analysis.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item -->

                            <!-- FAQ 3: Fee Management -->
                            <div class="faq-item">
                                <h3>Does Doplus School ERP provide fee management features?</h3>
                                <div class="faq-content">
                                    <p>Yes, Doplus School ERP offers comprehensive fee management, including invoicing,
                                        payment tracking,
                                        and automated reminders, with detailed reporting for administrators.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item -->

                            <!-- FAQ 4: Parent-Teacher Communication -->
                            <div class="faq-item">
                                <h3>Can parents communicate with teachers through Doplus School ERP?</h3>
                                <div class="faq-content">
                                    <p>Yes, Doplus School ERP has a dedicated communication module that facilitates direct
                                        interactions
                                        between parents and teachers, ensuring better engagement and collaboration.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item -->

                            <!-- FAQ 5: Academic Reports -->
                            <div class="faq-item">
                                <h3>Does Doplus School ERP provide automatic academic reports?</h3>
                                <div class="faq-content">
                                    <p>Yes, the system automatically generates academic reports, including grades,
                                        attendance, and
                                        progress, which can be shared with parents and students through the portal.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item -->

                            <!-- FAQ 6: Customization Options -->
                            <div class="faq-item">
                                <h3>Is Doplus School ERP customizable for specific school requirements?</h3>
                                <div class="faq-content">
                                    <p>Yes, Doplus School ERP is highly customizable. We can tailor the system to meet your
                                        school's
                                        unique needs, whether it’s adding new modules or integrating external tools.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item -->

                            <!-- FAQ 7: Integration with Mobile Applications -->
                            <div class="faq-item">
                                <h3>Does Doplus School ERP support mobile applications?</h3>
                                <div class="faq-content">
                                    <p>Yes, Doplus School ERP includes mobile app integration for Android and iOS platforms,
                                        allowing
                                        students, teachers, and parents to access essential features on the go.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item -->

                        </div>
                    </div><!-- End Faq Column -->
                </div>
            </div>

        </section><!-- /Faq Section -->


        <section id="service-details" class="service-details section">

            <div class="container">

                <div class="row gy-5">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-box">
                            <h4>Download Catalog</h4>
                            <div class="download-catalog">
                                <a href="#"><i class="bi bi-filetype-pdf"></i><span>Catalog PDF</span></a>
                                <a href="#"><i class="bi bi-file-earmark-word"></i><span>Catalog DOC</span></a>
                            </div>
                        </div><!-- End Services List -->

                        <div class="help-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-headset help-icon"></i>
                            <h4>Have a Question?</h4>
                            <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+91
                                    9599844612</span></p>
                            <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a
                                    href="mailto:contact@example.com">support@doplus.in</a></p>
                        </div>

                    </div>


                    <div class="col-lg-8">

                        <form id="sendmessage" data-aos="fade-up" data-aos-delay="400">
                            <h4>Get In The Touch</h4>
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
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                        required></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <!-- Include Font Awesome for Icons -->
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
                        rel="stylesheet">

                </div>
                <br>
                <a href="https://school.doplus.in/" target="_blank" style="text-decoration: none;">
                    <button
                        style="background-color: #F05709; color: white; border: none; width: 350px; padding: 10px 20px; font-size: 18px; border-radius: 5px; cursor: pointer; display: flex; align-items: center; justify-content: center;">
                        Go Live Demo <i class="fas fa-arrow-right" style="margin-left: 10px;"></i>
                    </button>
                </a>
            </div>

        </section><!-- /Service Details Section -->




@endsection
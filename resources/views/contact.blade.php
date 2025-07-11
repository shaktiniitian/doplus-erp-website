@extends('layouts.app')

@section('content')

    <section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact Us</h2>
            <p>We are here to assist you with your software and technology needs. Feel free to get in touch!</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="info-item d-flex flex-column align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Office Location</h3>
                        <p>G7Suite 715, 7th Floor, SRS Tower, Sec.-31, Faridabad, Haryana -121003, NCR India</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column align-items-center" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone"></i>
                        <h3>Call Us</h3>
                        <p>+91 9599844612</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column align-items-center" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope"></i>
                        <h3>Email Us</h3>
                        <p>support@doplus.in</p>
                    </div>
                </div>
            </div>

            <div class="row gy-4 mt-1">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14032.48160155783!2d77.28975128763281!3d28.445786722887757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cddf521657297%3A0x15856257cbaf48a5!2sSRS%20Tower%2C%20Sector%2031%2C%20Faridabad%2C%20Haryana%20121003!5e0!3m2!1sen!2sin!4v1733469308436!5m2!1sen!2sin"
                        frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen=""
                        loading="lazy"></iframe>
                </div>
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
                                <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection
@extends('layout.app')
@section('body')
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2>Kontak</h2>
            <p>Sampaikan Suaramu</p>
        </header>
        <div class="row gy-4">
            <div class="col-lg-6">
                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Alamat</h3>
                            <p>Gedung Kreativitas Mahasiswa, Gedung D3 Lantai 2 Kampus PENS</p>
                            <p>Jl. Raya ITS, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60111</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p>Offialbempens@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-telephone"></i>
                            <h3>Kontak</h3>
                            <p>+62 856 0667 9055 (Presiden BEM PENS)
                                <br>
                                +62 877 5447 8760 (Menteri Luar Negeri)
                                <br>
                                +62 852 7817 8587 (Menteri Komunikasi & Informasi)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" class="php-email-form">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                            <button type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section><!-- End Contact Section -->
@endsection
@extends('user.layouts.main')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">
                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">
                                Welcome to <span>RumahTBC</span>
                            </h2>
                            <p class="animate__animated animate__fadeInUp">
                                Selamat datang di RumahTBC, platform kesehatan yang
                                didedikasikan untuk deteksi dan rehabilitasi penyakit
                                Tuberkulosis (TBC). Kami berkomitmen untuk memberikan
                                informasi, layanan, dan dukungan yang Anda butuhkan dalam
                                perjuangan melawan penyakit TBC.
                            </p>
                            <a href="/register" class="btn-get-started animate__animated animate__fadeInUp scrollto">Daftar
                                Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">
                                Welcome to <span>RumahTBC</span>
                            </h2>
                            <p class="animate__animated animate__fadeInUp">
                                Selamat datang di RumahTBC, platform kesehatan yang
                                didedikasikan untuk deteksi dan rehabilitasi penyakit
                                Tuberkulosis (TBC). Kami berkomitmen untuk memberikan
                                informasi, layanan, dan dukungan yang Anda butuhkan dalam
                                perjuangan melawan penyakit TBC.
                            </p>
                            <a href="/register" class="btn-get-started animate__animated animate__fadeInUp scrollto">Daftar
                                Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">
                                Welcome to <span>RumahTBC</span>
                            </h2>
                            <p class="animate__animated animate__fadeInUp">
                                Selamat datang di RumahTBC, platform kesehatan yang
                                didedikasikan untuk deteksi dan rehabilitasi penyakit
                                Tuberkulosis (TBC). Kami berkomitmen untuk memberikan
                                informasi, layanan, dan dukungan yang Anda butuhkan dalam
                                perjuangan melawan penyakit TBC.
                            </p>
                            <a href="/register" class="btn-get-started animate__animated animate__fadeInUp scrollto">Daftar
                                Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services section-bg">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-laptop"></i></div>
                            <h4 class="title"><a href="">Tanya Dokter</a></h4>
                            <p class="description">
                                Fitur chat memungkinkan pengguna untuk langsung berkomunikasi
                                dengan dokter ahli dalam bidang TBC. Pengguna dapat mengajukan
                                pertanyaan, membagikan gejala, atau mendiskusikan rencana
                                pengobatan secara langsung melalui platform.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon">
                                <i class="bi bi-clipboard2-pulse-fill"></i>
                            </div>
                            <h4 class="title"><a href="">Riwayat Skrining</a></h4>
                            <p class="description">
                                Memberikan akses ke riwayat skrining sebelumnya, memungkinkan
                                pasien untuk melacak perkembangan kondisi kesehatan terkait
                                TBC.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-clock-history"></i></div>
                            <h4 class="title"><a href="">Chatbot</a></h4>
                            <p class="description">
                                Terdapat Fitur Chatbot yang dapat memberikan dukungan dan
                                informasi kapanpun, sehingga pengguna dapat mengakses bantuan
                                dan jawaban atas pertanyaan mereka.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Featured Services Section -->

        <section>
            <div class="container">
                <div class="section-title">
                    <h2>Artikel Kesehatan</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card border-0">
                            <img src="k" class="card-img-top" alt="Gambar 1" />
                            <div class="card-body">
                                <h5 class="card-title">Judul Artikel 1</h5>
                                <p class="card-text">
                                    Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi
                                    nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse
                                    doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.
                                </p>
                                <a href="#" class="btn btn-success">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card border-0">
                            <img src="gambar2.jpg" class="card-img-top" alt="Gambar 2" />
                            <div class="card-body">
                                <h5 class="card-title">Judul Artikel 2</h5>
                                <p class="card-text">
                                    Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi
                                    nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse
                                    doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.
                                </p>
                                <a href="#" class="btn btn-success">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card border-0">
                            <img src="gambar3.jpg" class="card-img-top" alt="Gambar 3" />
                            <div class="card-body">
                                <h5 class="card-title">Judul Artikel 3</h5>
                                <p class="card-text">
                                    Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi
                                    nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse
                                    doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.
                                </p>
                                <a href="#" class="btn btn-success">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card border-0">
                            <img src="gambar4.jpg" class="card-img-top" alt="Gambar 4" />
                            <div class="card-body">
                                <h5 class="card-title">Judul Artikel 4</h5>
                                <p class="card-text">
                                    Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi
                                    nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse
                                    doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.
                                </p>
                                <a href="#" class="btn btn-success">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Our Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container">
                <div class="section-title">
                    <h2>Rumah Sakit Kemitraan</h2>
                </div>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <img src="assets/images/clients/client-1.png" class="img-fluid" alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/clients/client-2.png" class="img-fluid" alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/clients/client-3.png" class="img-fluid" alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/clients/client-4.png" class="img-fluid" alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/clients/client-5.png" class="img-fluid" alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/clients/client-6.png" class="img-fluid" alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/clients/client-7.png" class="img-fluid" alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/clients/client-8.png" class="img-fluid" alt="" />
                        </div>
                    </div>
                    <br />
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End Our Clients Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row">
                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Lokasi:</h4>
                                <p>
                                    Jalan AIP Jl. KS. Tubun No.2, Kejambon, Tegal Timur, Kota
                                    Tegal, Jawa Tengah 52124
                                </p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@rumahtbc.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Telpon:</h4>
                                <p>(021) 881 898 907</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.190010819813!2d109.12494500629884!3d-6.8849136057001425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9cd29ecad85%3A0xb426aa98f75a5396!2sRumah%20Sakit%20Umum%20Daerah%20(RSUD)%20Kardinah%2C%20Kota%20Tegal!5e0!3m2!1sid!2sid!4v1699261066533!5m2!1sid!2sid"
                                frameborder="0" style="border: 0; width: 100%; height: 290px" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="#" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" name="name" class="form-control" id="name" required />
                                </div>
                                <div class="form-group col-md-6 mt-3 mt-md-0">
                                    <label for="name">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required />
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" required />
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Pesan</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Your message has been sent. Thank you!
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Kirim Pesan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>RumahTBC</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    @include('user.layouts.style')

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.html">RumahTBC</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="">Artikel Kesehatan</a></li>
                    <li><a class="nav-link scrollto" href="">Riwayat Skrining</a></li>
                    <li><a class="nav-link scrollto" href="">Tentang Kami</a></li>
                    <li><a class="getstarted" href="">Masuk</a></li>
                    <li><a class="getregis" href="">Daftar</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

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
                                Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut
                                et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque
                                accusamus repellendus deleniti vel. Minus et tempore modi
                                architecto.
                            </p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">
                                Lorem Ipsum Dolor
                            </h2>
                            <p class="animate__animated animate__fadeInUp">
                                Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut
                                et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque
                                accusamus repellendus deleniti vel. Minus et tempore modi
                                architecto.
                            </p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">
                                Sequi ea ut et est quaerat
                            </h2>
                            <p class="animate__animated animate__fadeInUp">
                                Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut
                                et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque
                                accusamus repellendus deleniti vel. Minus et tempore modi
                                architecto.
                            </p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
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
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">
                                Voluptatum deleniti atque corrupti quos dolores et quas
                                molestias excepturi sint occaecati cupiditate non provident
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-briefcase"></i></div>
                            <h4 class="title"><a href="">Dolor Sitema</a></h4>
                            <p class="description">
                                Minim veniam, quis nostrud exercitation ullamco laboris nisi
                                ut aliquip ex ea commodo consequat tarad limino ata
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                            <p class="description">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur trade stravi
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
                            <img src="assets/images/artikel/kuman.jpg" class="card-img-top" alt="Gambar 1" />
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
                    <p>
                        Magnam dolores commodi suscipit. Necessitatibus eius consequatur
                        ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam
                        quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                        Quia fugiat sit in iste officiis commodi quidem hic quas.
                    </p>
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
                                frameborder="0" style="border: 0; width: 100%; height: 290px"
                                allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="#" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        required />
                                </div>
                                <div class="form-group col-md-6 mt-3 mt-md-0">
                                    <label for="name">Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        required />
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

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>RumahTBC</h3>
            <p>
                Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni
                eligendi fuga maxime saepe commodi placeat.
            </p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>2023</span></strong>. All Rights Reserved
            </div>
            <div>Design By RumahTBC</div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('user.layouts.scripts')

</body>

</html>
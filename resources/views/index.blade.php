@section('title', 'ProSkill Akademia | Lembaga Kursus dan Pelatihan')
<?php $page = 'index'; ?>
@extends('layout.mainlayout')
@section('content')


    <!-- Home Banner -->
    <section class="banner-section-fourteen banner-section-twelve">
        <div class="banner-section-twelve-bg">
            <img src="public/assets/img/bg/home-12-banner-bg-1.png" alt="design-image">
            <img src="public/assets/img/bg/home-12-banner-bg-2.png" alt="design-image">
        </div>
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="banner-img banner-img-twelve aos" data-aos="fade-up">
                        <img src="public/assets/img/bg/home-12-banner-1.png" class="img-fluid" alt="banner-1">
                        <img src="public/assets/img/bg/home-12-banner-2.png" class="img-fluid" alt="banner-2">
                        <div class="banner-banner-img-twelve-bg">
                            <img src="public/assets/img/bg/dot-1.png" alt="dot-icon">
                            <img src="public/assets/img/bg/dot-2.png" alt="dot-icon">
                            <img src="public/assets/img/bg/ring-1.png" alt="ring-icon">
                            <img src="public/assets/img/bg/ring-2.png" alt="ring-icon">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-content banner-content-fourteen aos" data-aos="fade-up">
                        <h1><span style="color: #028E83;">Membangun Masa Depan</span> <span style="color: #FE9900;">Dengan
                                Teknologi</span></h1>

                        <p>Mari Bergabung Bersama kami di ProSkill Akademia</p>
                        <div class="banner-btns-fourteen ">
                            <a href="https://wa.me/6281266187125?text=Halo,%20saya%20mau%20konsultasi"
                                class="btn btn-primary" target="_blank" style=" border-color: #028E83;">Mulai Konsultasi</a>

                        </div>
                    </div>
                    <div class="search-box-fourteen aos" data-aos="fade-up">
                        <div class="form-block d-flex">
                            @if ($jam_alamat->isNotEmpty())
                                @php
                                    $latestJamAlamat = $jam_alamat->sortByDesc('created_at')->first();
                                    $alamatParts = explode(',', $latestJamAlamat->alamat);
                                    $alamat = $alamatParts[0] . ',' . $alamatParts[3] . ',' . $alamatParts[4];

                                @endphp
                                <div class="search-input">
                                    <div class="forms-block">
                                        <label class="mb-0">Jam Operasional</label>
                                        <p style="margin-top: 10px; color: #FE9900;">{{ $latestJamAlamat->jam_opr }}</p>
                                    </div>
                                </div>
                                <div class="search-input">
                                    <div class="forms-block mb-0">
                                        <label class="location-icon">Alamat</label>
                                        <p style="margin-top: 10px; color: #1c1c1c;">{{ $alamat }}</p>
                                    </div>
                                </div>
                            @endif

                            <div class="search-btn">
                                <a class="btn btn-primary" target="_blank"
                                    href="https://www.google.com/maps/place/ProSkill+Akademia/@0.900628,104.4602838,17z/data=!3m1!4b1!4m6!3m5!1s0x31d9729a2556642d:0xaa63e717cb0e87b9!8m2!3d0.900628!4d104.4628587!16s%2Fg%2F11j4flvqxy?entry=ttu"
                                    style="background-color: #028E83; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; display: inline-block; font-size: 16px;">
                                    Lihat Lokasi
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Home Banner -->

    <!-- Our Class -->
    <div class="blog-section-fourteen our-doctor-twelve">
        <div class="floating-bg">
            <img src="public/assets/img/bg/two-paw.png" alt="paw-image">
            <img src="public/assets/img/bg/two-paw.png" alt="paw-image">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header-fourteen service-inner-fourteen">
                        <div class="service-inner-fourteen">
                            <div class="service-inner-fourteen-two">
                                <h3 style="color: #FE9900;">Kelas Kami</h3>
                            </div>
                        </div>
                        <h2 style="color: #028E83;">Bergabunglah dengan Kami dan <br> Temukan Potensi Anda!</h2>
                        <p>untuk mengembangkan diri dan menemukan potensi terbaikmu! Kami
                            menyediakan lingkungan belajar yang mendukung dan <br>instruktur berpengalaman untuk membantu
                            mencapai tujuanmu.</p>
                    </div>
                </div>
            </div>
            <div class="owl-carousel blog-slider-twelve owl-theme aos" data-aos="fade-up">
                <div class="card blog-inner-fourt-all">
                    <div class="card-body blog-inner-fourt-main">
                        <div class="blog-inner-right-fourt">
                            <a href="#">
                                <div class="blog-inner-right-img">
                                    <img src="public/assets/img/kelas/Fundamental Computer Skill.png" alt="image"
                                        class="img-fluid ">

                                </div>
                            </a>
                            <h4 class="blog-inner-right-fourt-care">
                                <a href="#">Fundamental Computer Skill</a>
                            </h4>
                            <ul class="articles-list nav blog-articles-list">
                                <li>
                                    <strong>Rp</strong> 180,000 - <strong><del style="color: red;"
                                            id="price">240,000</del></strong>
                                </li>
                            </ul>
                            <script>
                                function blinkText() {
                                    var delElement = document.getElementById("price");
                                    setInterval(function() {
                                        if (delElement.style.opacity === '0') {
                                            delElement.style.opacity = '1';
                                        } else {
                                            delElement.style.opacity = '0';
                                        }
                                    }, 800);
                                }
                                blinkText();
                            </script>

                            <div class="blog-list-ratings" onmouseover="showLevelInfo(this)"
                                onmouseout="hideLevelInfo(this)">
                                <i class="fa-solid fa-star rated"></i>
                                <i class="fa-solid fa-star rated"></i>
                                <i class="fa-solid fa-star rated"></i>
                                <i class="fa-solid fa-star rated"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>(20)</span>
                                <span class="level-info" style="display:none;" data-level="Intermediate">Level:
                                    Intermediate</span>
                            </div>

                            <script>
                                function showLevelInfo(element) {
                                    var levelInfo = element.querySelector('.level-info');
                                    if (levelInfo) {
                                        levelInfo.style.display = 'inline';
                                    }
                                }

                                function hideLevelInfo(element) {
                                    var levelInfo = element.querySelector('.level-info');
                                    if (levelInfo) {
                                        levelInfo.style.display = 'none';
                                    }
                                }
                            </script>

                            <a href="booking.html" class="btn btn-primary">Lihat Detail kelas</a>
                        </div>
                    </div>
                </div>


            </div>
            <div class="owl-nav slide-nav-16 text-end nav-control"></div>

            <div class="blog-btn-sec text-center aos aos-init aos-animate" data-aos="fade-up">
                <a href="search.html" class="btn btn-primary btn-view">Lihat Semua Kelas</a>
            </div>
        </div>
    </div>
    <!-- /Our Class -->
    <!-- Choose us -->
    <section class="choose-us-fourteen">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header-fourteen text-center">
                        <div class="service-inner-fourteen justify-content-center">
                            <div class="service-inner-fourteen-two">
                                <h3>Mengapa Kami</h3>
                            </div>
                        </div>
                        <h2 style="color: #FE9900;">Mengapa Memilih Kami</h2>
                        <p>"ProSkill Akademia" membantu Anda menguasai teknologi komputer dengan cepat dan biaya terjangkau
                            melalui pembelajaran praktis dan bimbingan langsung dari instruktur kompeten. Jangan menunda
                            kesempatan Anda untuk menguasai teknologi komputer di era digital ini. </p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-6">
                    <div class="choose-us-right-main">
                        <img src="public/assets/img/bg/home-12-why-us.png" alt="image" class="img-fluid">

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="why-us-content">
                        <div class="us-faq aos" data-aos="fade-up" data-aos-delay="200">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Fasilitas di ProSkill Akademia
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse shade show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h6><i class="feather-check-circle"></i> Private 6 Siswa per kelas</h6>
                                            <h6><i class="feather-check-circle"></i> Praktek 1 Laptop per Siswa</h6>
                                            <h6><i class="feather-check-circle"></i> Kelas Full AC</h6>
                                            <h6><i class="feather-check-circle"></i> Sertifikat</h6>
                                            <h6><i class="feather-check-circle"></i> Garansi Pasti Bisa</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Program Kursus apa aja yang ada di ProSkill Akademia?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse shade"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h6><i class="feather-check-circle"></i> Fundamental Computer Skill untuk SD,
                                                SMP ,SMA</h6>
                                            <h6><i class="feather-check-circle"></i> Mahir Aplikasi Office
                                                Tingkat Advance untuk SMA, Mahasiswa dan Freelancer </h6>
                                            <h6><i class="feather-check-circle"></i> Digital Design
                                                Menggunakan Canva dan Figma</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Brapa biaya Kursus di ProSkill Akademia?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse shade"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h6><i class="feather-check-circle"></i> Fundamental Computer Skill untuk SD,
                                                SMP ,SMA, dengan harga 240 setelah mendapatkan beasiswa 25% menjadi
                                                180K/bulan dengan 8x
                                                pertemua</h6>
                                            <h6><i class="feather-check-circle"></i> Mahir Aplikasi Office
                                                Tingkat Advance untuk SMA, Mahasiswa dan Freelancer, dengan harga 260
                                                setelah mendapatkan beasiswa 25% menjadi 195K/bulan dengan 8x pertemua</h6>
                                            <h6><i class="feather-check-circle"></i> Digital Design
                                                Menggunakan Canva dan Figma, dengan harga 260 setelah mendapatkan beasiswa
                                                25% menjadi
                                                195K/bulan dengan 8x pertemua</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            Kapan Jadwal Kelas Kursus di ProSkill Akademia?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse shade"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h6><i class="feather-check-circle"></i> Senin & Rabu : 08.45-10.15,
                                                10.30-12.00, 13.00-14.30, 14.45-16.15</h6>
                                            <h6><i class="feather-check-circle"></i> Selasa & Kamis : 08.45-10.15,
                                                10.30-12.00, 13.00-14.30, 14.45-16.15</h6>
                                            <h6><i class="feather-check-circle"></i> Jumat & Sabtu : 08.45-10.15,
                                                10.30-12.00, 13.30-15.00</h6>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Choose us -->
    <!-- Pricing -->
    {{-- <section class="home-twelve-pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 aos" data-aos="fade-up">
                    <div class="section-header-fourteen service-inner-fourteen">
                        <div class="service-inner-fourteen">
                            <div class="service-inner-fourteen-two">
                                <h3>Biaya Program</h3>
                            </div>
                        </div>
                        <h2 style="color: #028E83;">Tingkatkan Kemampuan Komputer Anda Bersama Kami</h2>Kami di
                        ProSkill Akademia menyediakan kursus yang sesuai dengan kebutuhan Anda. Dengan instruktur ahli
                        dan kurikulum sesuai SKKNI (Standar Kopetensi Kerja Nasional Indonesia), kami siap membantu Anda
                        mencapai tujuan Anda dalam dunia digital
                        yang terus berkembang.</p>
                    </div>

                </div>

            </div>
            <div class="row row-gap justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="price-card-twelve">
                        <div class="price-bg">
                            <img src="public/assets/img/bg/home-12-pricing-bg-4.png" alt="design-image">
                            <img src="public/assets/img/bg/home-12-pricing-bg-5.png" alt="design-image">
                            <img src="public/assets/img/bg/home-12-pricing-bg-3.png" alt="design-image">
                        </div>
                        <div class="price-content">
                            <div class="card-title">
                                <h3 style="color: #028E83;">Fundamental </h3>
                                <h3 style="color: #028E83;">Computer Skill </h3>
                            </div>
                            <div class="price">
                                <h2 style="color: #FE9900;"><sup>IDR</sup> 180K / <del>240K</del></h2>
                                <span style="display: block; text-align: center; color: #FF0000;">(Beasiswa 25%)</span>
                            </div>

                            <div class="pack-details">
                                <ul>
                                    <li>
                                        <i class="feather-check-circle"></i>Pengelolaan Teknologi Komputer
                                    </li>
                                    <li>
                                        <i class="feather-check-circle"></i>Praktek Ms Word & Google Docs Dasar
                                    </li>
                                    <li>
                                        <i class="feather-check-circle"></i>Praktek Ms Excel & Google Sheet Dasar
                                    </li>
                                    <li>
                                        <i class="feather-check-circle"></i>Praktek Ms Powerpoint <br>& Google Presentation
                                        Dasar
                                    </li>
                                    <li>
                                        <i class="feather-check-circle"></i>Praktek aplikasi berbasis internet <br>& AI
                                        (Canva, chat GPT,Bing/img creator)
                                    </li>
                                    <li>
                                        <i class="feather-check-circle"></i>Assessment
                                    </li>

                                </ul>
                            </div>
                            <div class="price-btn">
                                <a href="https://wa.me/6281266187125?text=Fundamental%20Computer%20Skill%20untuk%20Siswa%20SD%20SMP%20SMA,%20apakah%20masi%20tersedia?"
                                    style="background-color: ##028E83; border-color: ##028E83;" class="btn"
                                    target="_blank">Hubungi kami</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="price-card-twelve">
                        <div class="price-bg">
                            <img src="public/assets/img/bg/home-12-pricing-bg-4.png" alt="design-image">
                            <img src="public/assets/img/bg/home-12-pricing-bg-5.png" alt="design-image">
                            <img src="public/assets/img/bg/home-12-pricing-bg-3.png" alt="design-image">
                        </div>
                        <div class="price-content">
                            <div class="card-title">
                                <h3 style="color: #028E83;">Mahir Aplikasi Office </h3>
                                <h3 style="color: #028E83;">Tingkat Advance </h3>
                            </div>
                            <div class="price">
                                <h2 style="color: #FE9900;"><sup>IDR</sup> 195K / <del>260K</del></h2>
                                <span style="display: block; text-align: center; color: #FF0000;">(Beasiswa 25%)</span>
                            </div>

                            <div class="pack-details">
                                <ul>

                                    <li>
                                        <i class="feather-check-circle"></i>Microsoft Word & Google Docs Lanjut
                                    </li>
                                    <li>
                                        <i class="feather-check-circle"></i>Microsoft Excel & Google Sheet
                                    </li>
                                    <li>
                                        <i class="feather-check-circle"></i>Microsoft Power Point <br>& Google
                                        Presentation
                                    </li>
                                    <li>
                                        <i class="feather-check-circle"></i>Google Drive & Google forms
                                    </li>
                                    <li>
                                        <i class="feather-check-circle"></i>Aplikasi berbasis internet <br>& AI
                                        (Canva, chat GPT,Bing/img creator)
                                    </li>
                                    <li>
                                        <i class="feather-check-circle"></i>Assessment
                                    </li>

                                </ul>
                            </div>
                            <div class="price-btn">
                                <a href="https://wa.me/6281266187125?text=Kelas%20Mahir%20Aplikasi%20Office%20Tingkat%20Advance,%20apakah%20masi%20tersedia?"
                                    class="btn" style="background-color: ##028E83; border-color: ##028E83;"
                                    target="_blank">Hubungi
                                    kami</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="price-card-twelve">
                        <div class="price-bg">
                            <img src="public/assets/img/bg/home-12-pricing-bg-4.png" alt="design-image">
                            <img src="public/assets/img/bg/home-12-pricing-bg-5.png" alt="design-image">
                            <img src="public/assets/img/bg/home-12-pricing-bg-3.png" alt="design-image">
                        </div>
                        <div class="price-content">
                            <div class="card-title">
                                <h3 style="color: #028E83;">Digital Design</h3>
                                <h3 style="color: #028E83;">Menggunakan Canva dan Figma </h3>
                            </div>
                            <div class="price">
                                <h2 style="color: #FE9900;"><sup>IDR</sup> 195K / <del>260</del></h2>
                                <span style="display: block; text-align: center; color: #FF0000;">(Beasiswa 25%)</span>
                            </div>

                            <div class="pack-details">
                                <ul>
                                    <li>
                                        <i class="feather-check-circle"></i>Dasar-dasar Desain Grafis
                                    </li>
                                    <li>
                                        <i class="feather-check-circle"></i>Praktek Canva
                                    </li>
                                    <li>
                                        <i class="feather-check-circle"></i>Praktek Figma
                                    </li>
                                    <li>
                                        <i class="feather-check-circle"></i>Assessment
                                    </li>
                                </ul>
                            </div>
                            <div class="price-btn">
                                <a href="https://wa.me/6281266187125?text=Kelas%20Digital%20Design%20Menggunakan%20Canva%20dan%20Figma,%20apakah%20masi%20tersedia?"
                                    class="btn" style="background-color: ##028E83; border-color: ##028E83;"
                                    target="_blank">Hubungi
                                    kami</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!-- /Pricing -->

    <!-- Feedback -->
    <section class="clients-section-fourteen">
        <div class="floating-bg">
            <img src="public/assets/img/bg/two-paw.png" alt="paw-image">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="client-inner-main">
                        <img src="public/assets/img/bg/home-12-testimonial.png" alt="image" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="section-header-fourteen service-inner-fourteen">
                        <div class="service-inner-fourteen">
                            <div class="service-inner-fourteen-two">
                                <h3>Testimoni</h3>
                            </div>
                        </div>
                        <h2 style="color: #FE9900;">Testimoni Siswa</h2>
                        <p>Apa yang dikatakan siswa tentang kami</p>
                    </div>
                    <div class="owl-carousel feedback-slider-fourteen owl-theme aos" data-aos="fade-up">
                        <div class="card feedback-card">
                            <div class="card-body feedback-card-body">
                                <div class="feedback-inner-main">
                                    <div class="feedback-inner-img">
                                        <img src="public/assets/img/clients/client-10.jpg" alt="image"
                                            class="img-fluid">
                                        <div class="feedback-user-details">
                                            <h4>Jenifer Robinson</h4>
                                            <h6>Texas, USA</h6>
                                            <div class="rating rating-fourteen">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <p>“Thank you! for giving excellent care of my doggies, the best pet care ever!
                                        I recommend”
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="card feedback-card">
                            <div class="card-body feedback-card-body">
                                <div class="feedback-inner-main">
                                    <div class="feedback-inner-img">
                                        <img src="public/assets/img/clients/client-09.jpg" alt="image"
                                            class="img-fluid">
                                        <div class="feedback-user-details">
                                            <h4>Ronald Jacobs</h4>
                                            <h6>Texas, USA</h6>
                                            <div class="rating rating-fourteen">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <p>“Thank you! for giving excellent care of my doggies, the best pet care ever!
                                        I recommend”
                                    </p>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Feedback -->
    <!-- blog section -->
    <div class="blog-section-fourteen">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header-fourteen service-inner-fourteen">
                        <div class="service-inner-fourteen">
                            <div class="service-inner-fourteen-two">
                                <h3 style="color: #FE9900;">Artikel</h3>
                            </div>
                        </div>
                        <h2 style="color: #028E83;">Artikel Kami</h2>
                    </div>
                </div>
            </div>
            <div class="owl-carousel blog-slider-fourteen owl-theme aos" data-aos="fade-up">
                @foreach ($articles->sortByDesc('created_at') as $key => $article)
                    <div class="card blog-inner-fourt-all">
                        <div class="card-body blog-inner-fourt-main">
                            <div class="blog-inner-right-fourt">
                                <a href="{{ route('blog-details', ['id' => $article->id]) }}">
                                    <div class="blog-inner-right-img">
                                        <img src="{{ asset('public/uploads/' . $article->banner) }}" alt="image"
                                            class="img-fluid" width="377" height="306">
                                        <div class="blog-inner-top-content">

                                            <span>{{ $article->user->name }}</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="{{ route('blog-details', ['id' => $article->id]) }}"
                                    class="blog-inner-right-fourt-care">{{ $article->title }}</a>
                                <ul class="articles-list nav blog-articles-list">
                                    <li>
                                        <i class="feather-calendar"></i> {{ $article->tgl }}
                                    </li>
                                    {{-- <li>
                                        <i class="feather-message-square"></i> 68
                                    </li>
                                    <li>
                                        <i class="feather-eye"></i> 1.5k
                                    </li> --}}
                                </ul>
                                <ul class="articles-list nav blog-articles-list-two">
                                    @php
                                        $tags = json_decode($article->category_id, true);
                                    @endphp

                                    @if (is_array($tags))
                                        @foreach ($tags as $tag)
                                            <span class="badge"
                                                style="background-color: #028E83; color: white; font-size: 12px;">
                                                {{ $tag['value'] }}
                                            </span>
                                        @endforeach
                                    @endif
                                </ul>
                                <p>{!! nl2br(substr($article->isi, 0, 100)) !!}....</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="owl-nav slide-nav-15 text-end nav-control"></div>
            <div class="blog-btn-sec text-center aos aos-init aos-animate" data-aos="fade-up">
                <a href="{{ url('/blog') }}" class="btn btn-primary" target="_blank"
                    style="background-color: #028E83; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; display: inline-block; font-size: 16px;">Baca
                    Artikel Lainnya</a>

            </div>
        </div>
    </div>
    <!-- /blog section -->


    <!-- Cursor -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- /Cursor -->

    </div>
    <!-- /Main Wrapper -->

    <!-- Whatsapp popup -->
    <div id="whatsapp-popup"
        style="display: none; position: fixed; bottom: 20px; right: 20px; z-index: 9999; cursor: move;"
        ontouchstart="handleTouchStart(event)" ontouchmove="handleTouchMove(event)">
        <a href="https://wa.me/6281266187125?" target="_blank">
            <img src="public/assets/img/whatsapp.png" alt="WhatsApp Icon" style="width: 50px; height: auto;">
        </a>
        <div id="popup-message"
            style="display: none; position: absolute; top: -40px; left: -160px; background-color: #fff; padding: 10px; border: 1px solid #ccc;">
            hubungi Whatsapp kami
        </div>
    </div>

    <script>
        var initialX, initialY;
        var popup = document.getElementById('whatsapp-popup');
        var messagePopup = document.getElementById('popup-message');
        var isDragging = false;

        function showMessage() {
            messagePopup.style.display = 'block';
            setTimeout(function() {
                messagePopup.style.display = 'none';
            }, 2000);
        }

        function handleTouchStart(event) {
            isDragging = false;
            var touch = event.targetTouches[0];
            initialX = touch.clientX - parseInt(window.getComputedStyle(popup).getPropertyValue('left'));
            initialY = touch.clientY - parseInt(window.getComputedStyle(popup).getPropertyValue('top'));
        }

        function handleTouchMove(event) {
            if (!isDragging) return;
            var touch = event.targetTouches[0];
            var newX = touch.clientX - initialX;
            var newY = touch.clientY - initialY;
            popup.style.left = newX + 'px';
            popup.style.top = newY + 'px';
        }

        document.addEventListener('touchend', function() {
            isDragging = false;
        });

        setTimeout(function() {
            popup.style.display = 'block';
            showMessage();
        }, 300);
    </script>
    @component('components.scrolltotop')
    @endcomponent
@endsection

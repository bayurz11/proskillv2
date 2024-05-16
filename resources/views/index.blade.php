@section('title', 'ProSkill Akademia | Lembaga Kursus dan Pelatihan')
@extends('layout.mainlayout')
@section('content')
    <!-- Hero Section Start -->
    <section class="hero-section hero-3">
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                @foreach ($heroSections as $heroSection)
                    <div class="swiper-slide">
                        <div class="slider-image bg-cover"
                            style="background-image: url('{{ asset('public/uploads/' . $heroSection->banner) }}');">
                            <div class="parasuit-shape" data-animation="fadeInLeft" data-delay="2.1s">
                                <img src="public/assets/img/hero/parasuit.png" alt="shape-img">
                            </div>
                            <div class="doll-shape" data-animation="fadeInLeft" data-delay="2.3s">
                                <img src="public/assets/img/hero/doll.png" alt="shape-img">
                            </div>
                            <div class="bus-shape" data-animation="fadeInLeft" data-delay="2.4s">
                                <img src="public/assets/img/hero/bus.png" alt="shape-img">
                            </div>
                            <div class="bee-shape" data-animation="fadeInUp" data-delay="2.5s">
                                <img src="public/assets/img/hero/bee-2.png" alt="shape-img">
                            </div>
                            <div class="star-shape" data-animation="fadeInUp" data-delay="3.4s">
                                <img src="public/assets/img/hero/star-2.png" alt="shape-img">
                            </div>
                            <div class="container">
                                <div class="row g-4 align-items-center">
                                    <div class="col-lg-8">
                                        <div class="hero-content">
                                            <h5 data-animation="fadeInUp" data-delay="1.3s" style="color: #FE9900; );">
                                                Selamat
                                                Datang di Proskill</h5>
                                            <h1 data-animation="fadeInUp" data-delay="1.5s" style="color: #028E83; );">
                                                {{ $heroSection->tagline }}</span>
                                            </h1>
                                            <p data-animation="fadeInUp" data-delay="1.7s" style=" color: #FE9900;);">
                                                {{ $heroSection->promosi }}
                                            </p>
                                            <div class="hero-button">
                                                <a href="https://wa.me/6281266187125?text=Halo,%20saya%20mau%20konsultasi"
                                                    data-animation="fadeInUp" data-delay="1.7s"
                                                    class="theme-btn hover-white" target="_blank">
                                                    Mulai Konsultasi
                                                    <i class="fa-solid fa-arrow-right-long"></i>
                                                </a>
                                                {{-- <a href="contact.html" data-animation="fadeInUp" data-delay="1.7s"
                                                class="theme-btn transparent-2">
                                                Get In Touch
                                                <i class="fa-solid fa-arrow-right-long"></i>
                                            </a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-dot text-center pt-5">
                <div class="dot"></div>
            </div>
        </div>
    </section>

    <!-- Service Section Start -->
    <div>
        <div class="container-fluid"></div><br>
    </div>

    <!--<< Marque Section Start >>-->
    <div class="marque-section section-padding pt-0">
        <div class="container-fluid">
            <div class="marquee-wrapper text-slider">
                <div class="marquee-inner to-left">
                    <ul class="marqee-list d-flex">
                        <li class="marquee-item">
                            <span class="text-slider"><img src="public/assets/img/Figma.svg" alt="img"></span><span
                                class="text-slider">Figma</span>
                            <span class="text-slider"><img src="public/assets/img/microsoft_excel.svg"
                                    alt="img"></span><span class="text-slider">Microsoft Excel</span>
                            <span class="text-slider"><img src="public/assets/img/microsoft_powerpoint.svg"
                                    alt="img"></span><span class="text-slider text-color">Powerpoint </span>
                            <span class="text-slider"><img src="public/assets/img/microsoft_word.svg"
                                    alt="img"></span><span class="text-slider">Word</span>
                            <span class="text-slider"><img src="public/assets/img/Google Drive.svg"
                                    alt="img"></span><span class="text-slider text-color">Google Drive</span>
                            <span class="text-slider"><img src="public/assets/img/ChatGPT.svg" alt="img"></span><span
                                class="text-slider">ChatGPT</span>
                            <span class="text-slider"><img src="public/assets/img/Canva.svg" alt="img"></span><span
                                class="text-slider">Canva</span>
                            <span class="text-slider"><img src="public/assets/img/Edge.svg" alt="img"></span><span
                                class="text-slider">Edge</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Section Start -->
    <section class="pricing-section section-bg section-padding">
        <div class="tree-shape float-bob-x">
            <img src="public/assets/img/tree-shape.png" alt="shape-img">
        </div>
        <div class="girl-shape float-bob-y">
            <img src="public/assets/img/pricing/girl.png" alt="shape-img">
        </div>
        <div class="top-shape">
            <img src="public/assets/img/top-shape.png" alt="shape-img">
        </div>
        <div class="container">
            <div class="pricing-wrapper">
                <div class="section-title text-center mb-0">
                    <span class="wow fadeInUp">Bergabung Bersama Kami</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Dengan harga murah <br> dapatkan fasilitas fantastis
                    </h2>
                </div>

            </div>
            <div class="tab-content">
                <div id="monthly" class="tab-pane fade show active" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="pricing-items">
                                <div class="icon bg-cover"
                                    style="background-image: url('public/assets/img/pricing/icon-bg.png');">
                                    <i class="icon-icon-22"></i>
                                </div>
                                <div class="element-shape">
                                    <img src="public/assets/img/pricing/element.png" alt="shape-img">
                                </div>
                                <div class="pricing-header">
                                    <h4>Fundamental
                                        Computer<br> Skill</h4><br>
                                    <h2 style="color: #FE9900;"><sup>IDR</sup> 180K / <del>240K</del></h2>
                                    <span style="display: block; text-align: center; color: #FF0000;">(Beasiswa 25%)</span>

                                </div>
                                <ul class="pricing-list">
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Pengelolaan Teknologi Komputer
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Ms Word & Google Docs Dasar
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Ms Excel & Google Sheet Dasar
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Ms Powerpoint & Google Presentation
                                        Dasar
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Aplikasi berbasis internet & AI
                                        (ChatGPT,Bing)
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Assessment
                                    </li>
                                </ul>
                                <a href="https://wa.me/6281266187125?text=Fundamental%20Computer%20Skill%20untuk%20Siswa%20SD%20SMP%20SMA,%20apakah%20masi%20tersedia?"
                                    class="theme-btn" target="_blank">Hubungi kami<i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="pricing-items active">
                                <div class="icon bg-cover"
                                    style="background-image: url('public/assets/img/pricing/icon-bg.png');">
                                    <i class="icon-icon-22"></i>
                                </div>
                                <div class="element-shape">
                                    <img src="public/assets/img/pricing/element-2.png" alt="shape-img">
                                </div>
                                <div class="pricing-header">
                                    <h4>Mahir Aplikasi Office <br> Tingkat Advance</h4>
                                    <br>
                                    <h2 style="color: #ffffff;"><sup>IDR</sup> 195K / <del>260K</del></h2>
                                    <span style="display: block; text-align: center; color: #ffffff;">(Beasiswa 25%)</span>
                                </div>
                                <ul class="pricing-list">
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Word & Google Docs Lanjut
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Excel & Google Sheet
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Power Point & Google
                                        Presentation
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Google Drive & Google forms
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Aplikasi berbasis internet & AI
                                        (ChatGPT,Bing)
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Assessment
                                    </li>
                                </ul>

                                <a href="https://wa.me/6281266187125?text=Kelas%20Mahir%20Aplikasi%20Office%20Tingkat%20Advance,%20apakah%20masi%20tersedia?"
                                    class="theme-btn" target="_blank">Hubungi kami<i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="pricing-items">
                                <div class="icon bg-cover"
                                    style="background-image: url('public/assets/img/pricing/icon-bg.png');">
                                    <i class="icon-icon-22"></i>
                                </div>
                                <div class="element-shape">
                                    <img src="public/assets/img/pricing/element.png" alt="shape-img">
                                </div>
                                <div class="pricing-header">
                                    <h4>Digital Design Menggunakan <br> Canva dan Figma</h4><br>
                                    <h2 style="color: #FE9900;"><sup>IDR</sup> 195K / <del>260</del></h2>
                                    <span style="display: block; text-align: center; color: #FF0000;">(Beasiswa 25%)</span>
                                </div>
                                <ul class="pricing-list">
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Dasar-dasar Desain Grafis
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Praktek Canva
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Praktek Figma
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Assessment
                                    </li><br><br>
                                    <li>

                                    </li>
                                </ul>
                                <a href="https://wa.me/6281266187125?text=Kelas%20Digital%20Design%20Menggunakan%20Canva%20dan%20Figma,%20apakah%20masi%20tersedia?"
                                    class="theme-btn" target="_blank">Hubungi kami<i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Clases Section Start -->
    <section class="clases-section section-padding bg-cover"
        style="background-image: url('public/assets/img/clases-bg.jpg');">
        <div class="clases-shape">
            <div class="wave"></div>
            <div class="wave"></div>
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="text-white wow fadeInUp">Kelas online Kami</span>
                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">Bergabunglah dengan Kami dan <br> Temukan Potensi
                    Anda!</h2>
            </div>
            <div class="array-button">
                <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
                <button class="array-next"><i class="fal fa-arrow-right"></i></button>
            </div>
            <div class="swiper clases-slider">
                <div class="swiper-wrapper">
                    @foreach ($kelasOnline as $kelasonline)
                        <div class="swiper-slide">
                            <div class="clases-items">
                                <div class="clases-bg"></div>
                                <div class="clases-image">
                                    <img src="{{ asset('public/uploads/' . $kelasonline->banner) }}" alt="img">
                                </div>
                                <div class="clases-content">
                                    <h4><a href="{{ $kelasonline->link }}" target="_blank">{{ $kelasonline->kelas }}</a>
                                    </h4>
                                    <p>Dasar Komputer, Productivity Tools, Internet Basics. Bergabung sekarang! </p>
                                    <ul class="clases-schedule">
                                        <li><span>Level</span> <br>{{ $kelasonline->level }}</li>
                                        <li><span>Jadwal</span> <br>Fleksibe</li>
                                        <li><span>waktu</span> <br>8 Pertemuan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>



    <!-- FAQ Start -->
    <section class="cta-section-2 section-padding fix bg-cover"
        style="background-image: url('public/assets/img/cta/cta-bg-2.png');">
        <div class="parasuit-shape float-bob-y">
            <img src="public/assets/img/cta/parasuit-1.png" alt="shape-img">
        </div>
        <div class="parasuit-shape-2 float-bob-x">
            <img src="public/assets/img/cta/parasuit-2.png" alt="shape-img">
        </div>
        <div class="pencil-shape">
            <img src="public/assets/img/cta/pencil-3.png" alt="shape-img">
        </div>
        <div class="hand-shape">
            <img src="public/assets/img/cta/hand.png" alt="shape-img">
        </div>
        <div class="line-shape">
            <img src="public/assets/img/cta/line.png" alt="shape-img">
        </div>
        <div class="container">
            <div class="cta-wrapper-2">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <span class="text-white wow fadeInUp">Pertanyaan Umum</span>
                            <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">Mengapa Memilih Kami
                            </h2>
                        </div>

                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="faq-content">
                            <div class="faq-accordion">
                                <div class="accordion" id="accordion">
                                    <div class="accordion-item mb-3">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                Fasilitas di ProSkill Akademia
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse show" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li><i class="fas fa-check-circle"></i> Private 6 Siswa per kelas</li>
                                                    <li><i class="fas fa-laptop"></i> Praktek 1 Laptop per Siswa</li>
                                                    <li><i class="fas fa-snowflake"></i> Kelas Full AC</li>
                                                    <li><i class="fas fa-certificate"></i> Sertifikat</li>
                                                    <li><i class="fas fa-shield-alt"></i> Garansi Pasti Bisa</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true"
                                                aria-controls="faq1">
                                                Program Kursus apa aja yang ada di ProSkill Akademia?
                                            </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li><i class="fas fa-check-circle"></i> Fundamental Computer Skill
                                                        untuk SD, SMP ,SMA </li>
                                                    <li><i class="fas fa-check-circle"></i> Mahir Aplikasi Office Tingkat
                                                        Advance untuk SMA, Mahasiswa dan Freelancer </li>
                                                    <li><i class="fas fa-check-circle"></i> Digital Design Menggunakan
                                                        Canva dan Figma </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
                                                aria-controls="faq3">

                                                Brapa biaya Kursus di ProSkill Akademia?
                                            </button>
                                        </h5>
                                        <div id="faq3" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li><i class="fas fa-check-circle"></i> Fundamental Computer Skill
                                                        untuk SD, SMP ,SMA, dengan harga 240 setelah
                                                        mendapatkan beasiswa 25% menjadi 180K/bulan dengan 8x pertemua </li>
                                                    <li><i class="fas fa-check-circle"></i> Mahir Aplikasi Office Tingkat
                                                        Advance untuk SMA, Mahasiswa dan Freelancer,
                                                        dengan harga 260 setelah mendapatkan beasiswa 25% menjadi 195K/bulan
                                                        dengan
                                                        8x pertemua </li>
                                                    <li><i class="fas fa-check-circle"></i> Digital Design Menggunakan
                                                        Canva dan Figma, dengan harga 260 setelah
                                                        mendapatkan beasiswa 25% menjadi 195K/bulan dengan 8x pertemua </li>

                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false"
                                                aria-controls="faq4">
                                                Kapan Jadwal Kelas Kursus di ProSkill Akademia?
                                            </button>
                                        </h5>
                                        <div id="faq4" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li><i class="fas fa-clock"></i> Senin & Rabu : 08.45-10.15,
                                                        10.30-12.00, 13.00-14.30, 14.45-16.15 </li>
                                                    <li><i class="fas fa-clock"></i> Selasa & Kamis : 08.45-10.15,
                                                        10.30-12.00, 13.00-14.30, 14.45-16.15</li>
                                                    <li><i class="fas fa-clock"></i> Jumat & Sabtu : 08.45-10.15,
                                                        10.30-12.00, 13.30-15.00 </li>

                                                </ul>
                                            </div>
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

    <!-- Testimonial Section Start -->
    <section class="testimonial-section fix section-padding">
        <div class="love-shape">
            <img src="public/assets/img/team/love.png" alt="shape-img">
        </div>
        <div class="right-shape">
            <img src="public/assets/img/testi-r-shape.png" alt="shape-img">
        </div>
        <div class="bee-shape float-bob-y">
            <img src="public/assets/img/testi-bee-shape.png" alt="shape-img">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="wow fadeInUp">Kesan siswa ke ProSkill</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Pengalaman mereka bukan sekadar cerita. <br> Dengarkan suara
                    siswa tentang perjalanan mereka bersama kami.</h2>
            </div>
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-items">
                            <div class="icon">
                                <img src="public/assets/img/quote.png" alt="img">
                            </div>
                            <div class="testimonial-bg"></div>
                            <div class="testimonial-content">
                                <p>
                                    Corquent per conubia nostra, per inceptos himenaeos. Suspendisse gravida vitae nisi
                                    Class aptent taciti sociosqu ad litora
                                </p>
                                <h6>Esther Howard</h6>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-items style-2">
                            <div class="icon">
                                <img src="public/assets/img/quote-2.png" alt="img">
                            </div>
                            <div class="testimonial-bg bg-2"></div>
                            <div class="testimonial-content">
                                <p>
                                    Corquent per conubia nostra, per inceptos himenaeos. Suspendisse gravida vitae nisi
                                    Class aptent taciti sociosqu ad litora
                                </p>
                                <h6>Wade Warren</h6>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-items style-3">
                            <div class="icon">
                                <img src="public/assets/img/quote-3.png" alt="img">
                            </div>
                            <div class="testimonial-bg bg-3"></div>
                            <div class="testimonial-content">
                                <p>
                                    Corquent per conubia nostra, per inceptos himenaeos. Suspendisse gravida vitae nisi
                                    Class aptent taciti sociosqu ad litora
                                </p>
                                <h6>Jenny Wilson</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-dot text-center pt-5">
                    <div class="dot"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Event Section Start -->
    <section class="event-section section-padding bg-cover"
        style="background-image: url('public/assets/img/event-bg.jpg');">
        <div class="event-top-shape">
            <div class="wave"></div>
            <div class="wave"></div>
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="text-white wow fadeInUp">Acara yang Akan Datang</span>
                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">Kegiatan & <br> Jadwal Acara</h2>
            </div>
            <div class="row">
                @foreach ($event as $events)
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="event-box-items">
                            <div class="event-image">
                                <img src="{{ asset('public/uploads/' . $events->banner) }}" alt="event-img">
                                <div class="event-shape">
                                    <img src="public/assets/img/event/shape.png" alt="shape-img">
                                </div>
                                <ul class="post-date">
                                    <li>
                                        <img src="public/assets/img/event/calender.svg" alt="img" class="me-2">
                                        {{ $events->tgl }}
                                    </li>
                                </ul>
                            </div>
                            <div class="event-content">
                                <ul>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M12.7847 1.98206C11.5066 0.703906 9.80717 0 7.99961 0C6.19205 0 4.49261 0.703906 3.21448 1.98206C1.93633 3.26025 1.23242 4.95962 1.23242 6.76716C1.23242 10.4238 4.68986 13.4652 6.54733 15.0991C6.80545 15.3262 7.02836 15.5223 7.20595 15.6882C7.42845 15.896 7.71405 15.9999 7.99958 15.9999C8.28517 15.9999 8.5707 15.896 8.79324 15.6882C8.97083 15.5223 9.19374 15.3262 9.45186 15.0991C11.3093 13.4652 14.7668 10.4238 14.7668 6.76716C14.7667 4.95962 14.0629 3.26025 12.7847 1.98206ZM8.8328 14.3954C8.56902 14.6275 8.34124 14.8279 8.15342 15.0033C8.06714 15.0838 7.93202 15.0838 7.8457 15.0033C7.65792 14.8278 7.43011 14.6274 7.16633 14.3954C5.42008 12.8593 2.16961 9.99997 2.16961 6.76719C2.16961 3.55256 4.78489 0.937281 7.99955 0.937281C11.2142 0.937281 13.8295 3.55256 13.8295 6.76719C13.8295 9.99997 10.579 12.8593 8.8328 14.3954Z"
                                                fill="#F39F5F" />
                                            <path
                                                d="M7.9998 3.5293C6.35539 3.5293 5.01758 4.86708 5.01758 6.51148C5.01758 8.15589 6.35539 9.49367 7.9998 9.49367C9.6442 9.49367 10.982 8.15589 10.982 6.51148C10.982 4.86708 9.6442 3.5293 7.9998 3.5293ZM7.9998 8.55639C6.8722 8.55639 5.95483 7.63902 5.95483 6.51145C5.95483 5.38389 6.8722 4.46652 7.9998 4.46652C9.12739 4.46652 10.0447 5.38389 10.0447 6.51145C10.0447 7.63902 9.12739 8.55639 7.9998 8.55639Z"
                                                fill="#F39F5F" />
                                        </svg>
                                        <span>{{ $events->lokasi }}</span>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="{{ route('event_detail', ['id' => $events->id]) }}">
                                        {{ $events->name_event }}</a>
                                </h3>
                                <div class="event-author">
                                    <a href="{{ route('event_detail', ['id' => $events->id]) }}" class="theme-btn">Lihat
                                        Detail <i class="fa-solid fa-arrow-right-long"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- News Section Start -->
    <section class="news-section section-padding fix">
        <div class="plane-shape float-bob-y">
            <img src="public/assets/img/plane.png" alt="shape-img">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="wow fadeInUp">Artikel</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Berita dan Tips Singkat tentang Komputer</h2>
            </div>
            <div class="news-wrapper">
                <div class="row align-items-center">
                    @foreach ($artikel as $article)
                        <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">

                            <div class="news-right-items style-2">
                                <div class="news-thumb" style="width: 230px; height: 236px; overflow: hidden;">
                                    <img src="{{ asset('public/uploads/' . $article->banner) }}"
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                                <div class="news-content">
                                    <ul>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                viewBox="0 0 19 19" fill="none">
                                                <path
                                                    d="M8.05666 18.75H8.05504C7.46832 18.7495 6.91657 18.5207 6.50187 18.1052L0.660341 12.2553C-0.194072 11.3994 -0.194072 10.0065 0.660341 9.15058L8.53478 1.26102C9.3463 0.44792 10.426 0 11.575 0H16.5709C17.7824 0 18.7682 0.985546 18.7682 2.19726V7.17785C18.7682 8.32602 18.3208 9.40532 17.5084 10.2167L9.60951 18.1074C9.19455 18.5218 8.64306 18.75 8.05666 18.75ZM11.575 1.46484C10.8179 1.46484 10.1064 1.75998 9.57163 2.29579L1.69707 10.1853C1.41222 10.4708 1.41222 10.9349 1.69707 11.2203L7.53857 17.0702C7.6767 17.2086 7.86051 17.285 8.05619 17.2851H8.05677C8.1529 17.2854 8.24812 17.2666 8.33694 17.2299C8.42577 17.1931 8.50643 17.1391 8.57427 17.071L16.4732 9.18046C17.0086 8.6458 17.3034 7.93447 17.3034 7.17788V2.19726C17.3034 1.79341 16.9748 1.46484 16.5709 1.46484H11.575ZM13.458 7.43408C12.2465 7.43408 11.2608 6.44853 11.2608 5.23681C11.2608 4.0251 12.2465 3.03955 13.458 3.03955C14.6696 3.03955 15.6553 4.0251 15.6553 5.23681C15.6553 6.44853 14.6696 7.43408 13.458 7.43408ZM13.458 4.50439C13.0542 4.50439 12.7256 4.83296 12.7256 5.23681C12.7256 5.64067 13.0542 5.96924 13.458 5.96924C13.862 5.96924 14.1905 5.64067 14.1905 5.23681C14.1905 4.83296 13.862 4.50439 13.458 4.50439Z"
                                                    fill="#F39F5F" />
                                            </svg>
                                            <?php
                                            $category = json_decode($article->category);
                                            foreach ($category as $item) {
                                                echo $item->value . ' ';
                                            }
                                            ?>
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M6.66406 4.7915C6.3224 4.7915 6.03906 4.50817 6.03906 4.1665V1.6665C6.03906 1.32484 6.3224 1.0415 6.66406 1.0415C7.00573 1.0415 7.28906 1.32484 7.28906 1.6665V4.1665C7.28906 4.50817 7.00573 4.7915 6.66406 4.7915ZM13.3307 4.7915C12.9891 4.7915 12.7057 4.50817 12.7057 4.1665V1.6665C12.7057 1.32484 12.9891 1.0415 13.3307 1.0415C13.6724 1.0415 13.9557 1.32484 13.9557 1.6665V4.1665C13.9557 4.50817 13.6724 4.7915 13.3307 4.7915ZM7.08073 12.0832C6.9724 12.0832 6.86406 12.0582 6.76406 12.0165C6.65573 11.9748 6.5724 11.9165 6.48906 11.8415C6.33906 11.6832 6.2474 11.4748 6.2474 11.2498C6.2474 11.1415 6.2724 11.0332 6.31406 10.9332C6.35573 10.8332 6.41406 10.7415 6.48906 10.6582C6.5724 10.5832 6.65573 10.5248 6.76406 10.4832C7.06406 10.3582 7.43906 10.4248 7.6724 10.6582C7.8224 10.8165 7.91406 11.0332 7.91406 11.2498C7.91406 11.2998 7.90573 11.3582 7.8974 11.4165C7.88906 11.4665 7.8724 11.5165 7.8474 11.5665C7.83073 11.6165 7.80573 11.6665 7.7724 11.7165C7.7474 11.7582 7.70573 11.7998 7.6724 11.8415C7.51406 11.9915 7.2974 12.0832 7.08073 12.0832ZM9.9974 12.0832C9.88906 12.0832 9.78073 12.0582 9.68073 12.0165C9.5724 11.9748 9.48906 11.9165 9.40573 11.8415C9.25573 11.6832 9.16406 11.4748 9.16406 11.2498C9.16406 11.1415 9.18906 11.0332 9.23073 10.9332C9.2724 10.8332 9.33073 10.7415 9.40573 10.6582C9.48906 10.5832 9.5724 10.5248 9.68073 10.4832C9.98073 10.3498 10.3557 10.4248 10.5891 10.6582C10.7391 10.8165 10.8307 11.0332 10.8307 11.2498C10.8307 11.2998 10.8224 11.3582 10.8141 11.4165C10.8057 11.4665 10.7891 11.5165 10.7641 11.5665C10.7474 11.6165 10.7224 11.6665 10.6891 11.7165C10.6641 11.7582 10.6224 11.7998 10.5891 11.8415C10.4307 11.9915 10.2141 12.0832 9.9974 12.0832ZM12.9141 12.0832C12.8057 12.0832 12.6974 12.0582 12.5974 12.0165C12.4891 11.9748 12.4057 11.9165 12.3224 11.8415L12.2224 11.7165C12.1908 11.6701 12.1656 11.6196 12.1474 11.5665C12.1233 11.5193 12.1065 11.4687 12.0974 11.4165C12.0891 11.3582 12.0807 11.2998 12.0807 11.2498C12.0807 11.0332 12.1724 10.8165 12.3224 10.6582C12.4057 10.5832 12.4891 10.5248 12.5974 10.4832C12.9057 10.3498 13.2724 10.4248 13.5057 10.6582C13.6557 10.8165 13.7474 11.0332 13.7474 11.2498C13.7474 11.2998 13.7391 11.3582 13.7307 11.4165C13.7224 11.4665 13.7057 11.5165 13.6807 11.5665C13.6641 11.6165 13.6391 11.6665 13.6057 11.7165C13.5807 11.7582 13.5391 11.7998 13.5057 11.8415C13.3474 11.9915 13.1307 12.0832 12.9141 12.0832ZM7.08073 14.9998C6.9724 14.9998 6.86406 14.9748 6.76406 14.9332C6.66406 14.8915 6.5724 14.8332 6.48906 14.7582C6.33906 14.5998 6.2474 14.3832 6.2474 14.1665C6.2474 14.0582 6.2724 13.9498 6.31406 13.8498C6.35573 13.7415 6.41406 13.6498 6.48906 13.5748C6.7974 13.2665 7.36406 13.2665 7.6724 13.5748C7.8224 13.7332 7.91406 13.9498 7.91406 14.1665C7.91406 14.3832 7.8224 14.5998 7.6724 14.7582C7.51406 14.9082 7.2974 14.9998 7.08073 14.9998ZM9.9974 14.9998C9.78073 14.9998 9.56406 14.9082 9.40573 14.7582C9.25573 14.5998 9.16406 14.3832 9.16406 14.1665C9.16406 14.0582 9.18906 13.9498 9.23073 13.8498C9.2724 13.7415 9.33073 13.6498 9.40573 13.5748C9.71406 13.2665 10.2807 13.2665 10.5891 13.5748C10.6641 13.6498 10.7224 13.7415 10.7641 13.8498C10.8057 13.9498 10.8307 14.0582 10.8307 14.1665C10.8307 14.3832 10.7391 14.5998 10.5891 14.7582C10.4307 14.9082 10.2141 14.9998 9.9974 14.9998ZM12.9141 14.9998C12.6974 14.9998 12.4807 14.9082 12.3224 14.7582C12.2453 14.6799 12.1856 14.5862 12.1474 14.4832C12.1057 14.3832 12.0807 14.2748 12.0807 14.1665C12.0807 14.0582 12.1057 13.9498 12.1474 13.8498C12.1891 13.7415 12.2474 13.6498 12.3224 13.5748C12.5141 13.3832 12.8057 13.2915 13.0724 13.3498C13.1307 13.3582 13.1807 13.3748 13.2307 13.3998C13.2807 13.4165 13.3307 13.4415 13.3807 13.4748C13.4224 13.4998 13.4641 13.5415 13.5057 13.5748C13.6557 13.7332 13.7474 13.9498 13.7474 14.1665C13.7474 14.3832 13.6557 14.5998 13.5057 14.7582C13.3474 14.9082 13.1307 14.9998 12.9141 14.9998ZM17.0807 8.19984H2.91406C2.5724 8.19984 2.28906 7.9165 2.28906 7.57484C2.28906 7.23317 2.5724 6.94984 2.91406 6.94984H17.0807C17.4224 6.94984 17.7057 7.23317 17.7057 7.57484C17.7057 7.9165 17.4224 8.19984 17.0807 8.19984Z"
                                                    fill="#F39F5F" />
                                                <path
                                                    d="M13.3333 18.9582H6.66667C3.625 18.9582 1.875 17.2082 1.875 14.1665V7.08317C1.875 4.0415 3.625 2.2915 6.66667 2.2915H13.3333C16.375 2.2915 18.125 4.0415 18.125 7.08317V14.1665C18.125 17.2082 16.375 18.9582 13.3333 18.9582ZM6.66667 3.5415C4.28333 3.5415 3.125 4.69984 3.125 7.08317V14.1665C3.125 16.5498 4.28333 17.7082 6.66667 17.7082H13.3333C15.7167 17.7082 16.875 16.5498 16.875 14.1665V7.08317C16.875 4.69984 15.7167 3.5415 13.3333 3.5415H6.66667Z"
                                                    fill="#F39F5F" />
                                            </svg>
                                            {{ $article->tgl }}
                                        </li>
                                    </ul>
                                    <h3>
                                        <a href="news-details.html">
                                            <a href="{{ route('artikel_detail', ['id' => $article->id]) }}">
                                                {{ $article->title }}
                                            </a>
                                        </a>
                                    </h3>
                                    <div class="post-items">

                                        <div class="content">
                                            <span>{{ $article->user->name }}</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Whatsapp popup -->
    <div id="whatsapp-popup"
        style="display: none; position: fixed; bottom: 20px; right: 20px; z-index: 9999; cursor: move;"
        ontouchstart="handleTouchStart(event)" ontouchmove="handleTouchMove(event)">
        <a href="https://wa.me/6281266187125?" target="_blank">
            <img src="public/assets/img/Whatsapp.png" alt="WhatsApp Icon" style="width: 50px; height: auto;">
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

@endsection

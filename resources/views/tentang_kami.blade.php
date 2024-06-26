@section('title', 'ProSkill Akademia | Tentang Kami')
@extends('layout.mainlayout')
@section('content')

    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('public/assets/img/breadcrumb.png');"  loading="lazy">
        <div class="line-shape">
            <img src="public/assets/img/breadcrumb-shape/line.png" alt="shape-img"  loading="lazy">
        </div>
        <div class="plane-shape float-bob-y">
            <img src="public/assets/img/breadcrumb-shape/plane.png" alt="shape-img"  loading="lazy">
        </div>
        <div class="doll-shape float-bob-x">
            <img src="public/assets/img/breadcrumb-shape/doll.png" alt="shape-img"  loading="lazy">
        </div>
        <div class="parasuit-shape float-bob-y">
            <img src="public/assets/img/breadcrumb-shape/parasuit.png" alt="shape-img"  loading="lazy">
        </div>
        <div class="frame-shape">
            <img src="public/assets/img/breadcrumb-shape/frame.png" alt="shape-img"  loading="lazy">
        </div>
        <div class="bee-shape float-bob-x">
            <img src="public/assets/img/breadcrumb-shape/bee.png" alt="shape-img"  loading="lazy">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Tentang ProSkill Akademia</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="{{ route('/') }}">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li>
                        Tentang ProSkill Akademia
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- About Activities Section Start -->
    <section class="about-activities-section-2 style-2 section-padding">

        <div class="bottom-shape">
            <img src="public/assets/img/section-top-shape-2.png" alt="shape-img"  loading="lazy">
        </div>
        <div class="sun-shape">
            <img src="public/assets/img/client/shape-2.png" alt="shape-img"  loading="lazy">
        </div>
        <div class="container">
            <div class="about-activities-wrapper style-2">
                <div class="row g-4">
                    @php
                        $about = $aboutUs->sortByDesc('created_at')->first();
                    @endphp
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="activities-image-items">
                            <img src="{{ asset('public/uploads/' . $about->banner) }}"  loading="lazy">

                            <div class="circle-shape">
                                <img src="public/assets/img/about/circle.png" alt="shape-img"  loading="lazy">
                            </div>
                            <div class="activities-content">
                           
                            <div class="row g-4 mt-4">
                                <div class="col-xl-6 col-lg-8 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="icon-items">
                                        <div class="icon">
                                            <i class="icon-icon-13"></i>
                                        </div>
                                        <div class="content">
                                            <h5>NPSN</h5>
                                            <p>K9999032</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-8 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="icon-items">
                                        <div class="icon">
                                            <i class="icon-icon-13"></i>
                                        </div>
                                        <div class="content">
                                            <h5>DPMPTSP</h5>
                                            <p>503/92/5.10.05.3/2024</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-8 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="icon-items">
                                        <div class="icon">
                                            <i class="icon-icon-13"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Rekomendasi Disdik</h5>
                                            <p>B/412.35/3/5.3.02/2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="activities-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">Visi ProSkill Akademia</span>
                                <h5 class="wow fadeInUp" data-wow-delay=".3s">
                                    {!! nl2br($about->visi) !!}
                                </h5>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                @foreach (explode("\n", $about->misi) as $paragraph)
                                    <p style="text-align:justify;">
                                        {!! nl2br($paragraph) !!}
                                    </p>
                                @endforeach
                            </p>
                           
                            <div class="about-author">
                                <div class="author-image wow fadeInUp" data-wow-delay=".3s">

                                    <div class="content">
                                        <h6>Beni Oktopiansah,ST</h6>
                                        <p> Pimpinan ProSkill Akademia</p>
                                    </div>
                                </div>
                                {{-- <div class="author-icon wow fadeInUp" data-wow-delay=".5s">
                                    <div class="icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <span>Call Us Now</span>
                                        <h5>
                                            <a href="tel:+2085550112">+208-555-0112</a>
                                        </h5>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Counter Section Start -->
    <section class="counter-section fix">
        <div class="line-shape">
            <img src="public/assets/img/counter/line-shape.png" alt="shape-img"  loading="lazy">
        </div>
        <div class="box-shape float-bob-x">
            <img src="public/assets/img/counter/box-shape.png" alt="shape-img"  loading="lazy">
        </div>
        <div class="counter-bg"></div>
        <div class="container">
            <div class="counter-wrapper">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="counter-items">
                            <div class="icon">
                                <img src="{{ asset('public/assets/img/counter/icon-1.svg') }}" alt="img"  loading="lazy">
                            </div>
                            <div class="content">
                                <h2><span class="count">25</span>+</h2>
                                <p>Year of Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="counter-items">
                            <div class="icon">
                                <img src="{{ asset('public/assets/img/counter/icon-2.svg') }}" alt="img"  loading="lazy">
                            </div>
                            <div class="content">
                                <h2><span class="count">6,500</span>+</h2>
                                <p>Class Completed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="counter-items">
                            <div class="icon">
                                <img src="{{ asset('public/assets/img/counter/icon-3.svg') }}" alt="img"  loading="lazy">
                            </div>
                            <div class="content">
                                <h2><span class="count">100</span>+</h2>
                                <p>Experts Instructors</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="counter-items border-none">
                            <div class="icon">
                                <img src="{{ asset('public/assets/img/counter/icon-4.svg') }}" alt="img"  loading="lazy">
                            </div>
                            <div class="content">
                                <h2><span class="count">6,561</span>+</h2>
                                <p>Students Enroll</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Izin Section Start -->
    <section class="team-section-3 fix  section-padding pt-1 mt-60">
        <div class="tree-shape float-bob-x">
            <img src="{{ asset('public/assets/img/tree-shape.png') }}" alt="shape-img"  loading="lazy">
        </div>
        <div class="right-shape">
            <img src="{{ asset('public/assets/img/testi-r-shape.png') }}" alt="shape-img"  loading="lazy">
        </div>
        <div class="bee-shape float-bob-y">
            <img src="{{ asset('public/assets/img/testi-bee-shape.png') }}" alt="shape-img"  loading="lazy">
        </div>
        <div class="container">
            <div class="section-title-area">
                <div class="section-title mt-60">
                    <span class="wow fadeInUp">Izin Operasional </span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Izin Operasional DPMPTSP, Rekomendasi Disdik, dan NPSN
                        Kemendikbud Ristek.
                    </h2>
                </div>
                <div class="array-button wow fadeInUp" data-wow-delay=".5s">
                    <button class="array-prev bor-1"><i class="fal fa-arrow-left"></i></button>
                    <button class="array-next"><i class="fal fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="swiper team-slider">
                <div class="swiper-wrapper">
                    @foreach ($izin as $izinData)
                        <div class="swiper-slide">
                            <div class="team-items">
                                <div class="team-image">
                                    <div class="shape-img">
                                        <img src="{{ asset('public/assets/img/team/team-shape.png') }}" alt="img"  loading="lazy">
                                    </div>
                                    <img src="{{ asset('public/uploads/' . $izinData->banner) }}" loading="lazy">
                                    
                                </div>
                                <div class="team-content">
                                    <h3>
                                        <a href="{{ $izinData->link }}" target="_blank">{{ $izinData->nama_izin }}</a>
                                    </h3>
                                    <p>{{ $izinData->no_izin }}</p>
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
            <img src="public/assets/img/breadcrumb-shape/Whatsapp.png" alt="WhatsApp Icon"
                style="width: 50px; height: auto;"  loading="lazy">
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

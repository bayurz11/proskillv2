@section('title', 'ProSkill Akademia | Contoh Sertifikat')
@extends('layout.mainlayout')
@section('content')

    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('public/assets/img/breadcrumb.png');">
        <div class="line-shape">
            <img src="public/assets/img/breadcrumb-shape/line.png" alt="shape-img" loading="lazy">
        </div>
        <div class="plane-shape float-bob-y">
            <img src="public/assets/img/breadcrumb-shape/plane.png" alt="shape-img" loading="lazy">
        </div>
        <div class="doll-shape float-bob-x">
            <img src="public/assets/img/breadcrumb-shape/doll.png" alt="shape-img" loading="lazy">
        </div>
        <div class="parasuit-shape float-bob-y">
            <img src="public/assets/img/breadcrumb-shape/parasuit.png" alt="shape-img" loading="lazy">
        </div>
        <div class="frame-shape">
            <img src="public/assets/img/breadcrumb-shape/frame.png" alt="shape-img" loading="lazy">
        </div>
        <div class="bee-shape float-bob-x">
            <img src="public/assets/img/breadcrumb-shape/bee.png" alt="shape-img" loading="lazy">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Contoh Sertifikat</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="{{ route('/') }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li>
                        Contoh Sertifikat
                    </li>
                </ul>
            </div>
        </div>
    </div>



    <!-- Galery Section Start -->
    <section class="team-section-3 fix section-padding pt-1 mt-60">
        <div class="tree-shape float-bob-x">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/plane.png') }}" alt="shape-img" loading="lazy">
        </div>
        <div class="right-shape">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/bee.png') }}" alt="shape-img" loading="lazy">
        </div>
        <div class="bee-shape float-bob-y">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/parasuit.png') }}" alt="shape-img" loading="lazy">
        </div>
        <div class="container">
            <div class="section-title-area">
                <div class="section-title mt-60">
                    <span class="wow fadeInUp">Contoh sertifikat </span>
                    {{-- <h2 class="wow fadeInUp" data-wow-delay=".3s">Izin Operasional DPMPTSP, Rekomendasi Disdik, dan NPSN
                        Kemendikbud Ristek.
                    </h2> --}}
                </div>
                <div class="array-button wow fadeInUp" data-wow-delay=".5s">
                    <button class="array-prev bor-1"><i class="fal fa-arrow-left"></i></button>
                    <button class="array-next"><i class="fal fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="swiper team-slider">
                <div class="swiper-wrapper">
                    @foreach ($galery as $galeryData)
                        <div class="swiper-slide">
                            <div class="team-items">
                                <div class="team-image">
                                    <div class="shape-img">
                                        {{-- <img src="{{ asset('public/assets/img/team/team-shape.png') }}" alt="img"> --}}
                                    </div>
                                    <img src="{{ asset('public/uploads/' . $galeryData->banner) }}" loading="lazy">
                                </div>
                                <div class="team-content">
                                    <h3>
                                        {{-- <a href="#" target="_blank">{{ $galeryData->name_event }}</a> --}}
                                    </h3>
                                    <p>{{ $galeryData->name_event }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>


    <!-- Whatsapp popup -->
    <div id="whatsapp-popup" style="display: none; position: fixed; bottom: 20px; right: 20px; z-index: 9999; cursor: move;"
        ontouchstart="handleTouchStart(event)" ontouchmove="handleTouchMove(event)">
        <a href="https://wa.me/6281266187125?" target="_blank">
            <img src="public/assets/img/breadcrumb-shape/Whatsapp.png" alt="WhatsApp Icon"
                style="width: 50px; height: auto;">
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

@section('title', 'ProSkill Akademia | Event')
@extends('layout.mainlayout')
@section('content')

    <!--<< Breadcrumb Section Start >>-->
    <style>
        .breadcrumb-wrapper {
            background-size: cover;
            background-position: center;
            padding: 2px 0;
            /* Adjust the padding as needed */
        }

        .breadcrumb-wrapper .line-shape img,
        .breadcrumb-wrapper .plane-shape img,
        .breadcrumb-wrapper .doll-shape img,
        .breadcrumb-wrapper .parasuit-shape img,
        .breadcrumb-wrapper .frame-shape img,
        .breadcrumb-wrapper .bee-shape img {
            width: 50px;
            /* Adjust the size as needed */
            height: auto;
            /* Maintain the aspect ratio */
        }

        .breadcrumb-wrapper .line-shape {
            position: absolute;
            top: 10px;
            /* Adjust position as needed */
            left: 10px;
        }

        .breadcrumb-wrapper .plane-shape,
        .breadcrumb-wrapper .doll-shape,
        .breadcrumb-wrapper .parasuit-shape,
        .breadcrumb-wrapper .frame-shape,
        .breadcrumb-wrapper .bee-shape {
            position: absolute;
            animation: float-bob 3s infinite;
            /* Adjust the animation duration as needed */
        }

        /* Additional position adjustments */
        .breadcrumb-wrapper .plane-shape {
            top: 20px;
            right: 20px;
        }

        .breadcrumb-wrapper .doll-shape {
            bottom: 20px;
            left: 20px;
        }

        .breadcrumb-wrapper .parasuit-shape {
            top: 50px;
            left: 50px;
        }

        .breadcrumb-wrapper .frame-shape {
            bottom: 50px;
            right: 50px;
        }

        .breadcrumb-wrapper .bee-shape {
            top: 100px;
            right: 100px;
        }

        /* Animation for floating effect */
        @keyframes float-bob {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .float-bob-y {
            animation: float-bob 3s infinite;
        }

        .float-bob-x {
            animation: float-bob 3s infinite alternate;
        }

        .page-heading h1 {
            font-size: 2.5em;
            /* Adjust the font size as needed */
        }

        .breadcrumb-items {
            font-size: 1.2em;
            /* Adjust the font size as needed */
        }
    </style>
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('public/assets/img/breadcrumb.png');" loading="lazy">
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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Event</h1>
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
                        Event
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Event Section Start -->
    <section class="event-section-2 fix section-padding">
        <div class="container">
            <div class="swiper event-slider">
                <div class="swiper-wrapper">
                    @foreach ($event as $events)
                        <div class="swiper-slide">
                            <div class="event-box-items mt-0 box-shadow style-bottom">
                                <div class="event-image">
                                    <a href="{{ route('event_detail', ['id' => $events->id]) }}"><img
                                            src="{{ asset('public/uploads/' . $events->banner) }}" loading="lazy"></a>
                                    <div class="event-shape">
                                        <a href="{{ route('event_detail', ['id' => $events->id]) }}"><img
                                                src="{{ asset('public/uploads/' . $events->banner) }}" loading="lazy"></a>
                                    </div>
                                    <ul class="post-date">
                                        <li>
                                            <img src="{{ asset('public/assets/img/event/calender.svg') }}" alt="img"
                                                loading="lazy" class="me-2">
                                            {{ $events->mulai }}
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
                                        <a href="{{ route('event_detail', ['id' => $events->id]) }}"
                                            class="theme-btn">Detail Event <i class="fa-solid fa-arrow-right-long"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="swiper-dot text-center mb-55">
                    <div class="dot"></div>
                </div>
            </div>
        </div>
    </section>


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
                    <span class="wow fadeInUp">Galery Kegiatan ProSkill Akademia </span>
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

    <section class="team-section-3 fix section-padding pt-1 mt-60">
        <div class="bee-shape float-bob-y">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/parasuit.png') }}" alt="shape-img" loading="lazy">
        </div>
        <div class="container">
            <div class="swiper team-slider">
                <div class="swiper-wrapper">
                    @foreach ($links as $link)
                        <div class="swiper-slide">
                            <div class="team-items">
                                <div class="team-image">
                                    @php
                                        $embedUrl = str_replace('watch?v=', 'embed/', $link->link);
                                    @endphp
                                    <iframe src="{{ $embedUrl }}" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
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
                style="width: 50px; height: auto;" loading="lazy">
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

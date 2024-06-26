@section('title', 'ProSkill Akademia | Event Detail')
@extends('layout.mainlayout')
@section('content')

    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover"
        style="background-image: url('{{ asset('public/assets/img/breadcrumb.png') }}');"  loading="lazy">
        <div class="line-shape">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/line.png') }}" alt="shape-img"  loading="lazy">
        </div>
        <div class="plane-shape float-bob-y">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/plane.png') }}" alt="shape-img"  loading="lazy">
        </div>
        <div class="doll-shape float-bob-x">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/doll.png') }}" alt="shape-img"  loading="lazy">
        </div>
        <div class="parasuit-shape float-bob-y">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/parasuit.png') }}" alt="shape-img"  loading="lazy">
        </div>
        <div class="frame-shape">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/frame.png') }}" alt="shape-img"  loading="lazy">
        </div>
        <div class="bee-shape float-bob-x">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/bee.png') }}" alt="shape-img"  loading="lazy">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">@yield('title')</h1>
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
                        <a href="{{ route('event') }}">
                            Event
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li>
                        Event Detail
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <!--<< Event Details Section Start >>-->
    <section class="event-details-section fix section-padding">
        <div class="container">
            <div class="event-details-wrapper">
                <div class="row g-5">
                    <div class="col-lg-8">
                        <div class="event-details-items">
                            <div class="details-image">
                                <img src="{{ asset('public/uploads/' . $events->banner) }}" alt="img"  loading="lazy">
                            </div>
                            <div class="event-details-content">
                                <div class="post-items">
                                    <span class="post-date">
                                        <i class="fa-regular fa-calendar-days"></i>
                                        {{ $events->tgl }}
                                    </span>

                                </div>
                                <h2>{{ $events->name_event }}</h2>
                                <p class="mb-3">
                                    {!! nl2br(substr($events->deskripsi, 0, 1000)) !!}
                                </p>

                                <h2>Persyaratan</h2>

                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <ul class="list">
                                            @if (!empty($syarat))
                                                @foreach ($syarat as $item)
                                                    <li>
                                                        <i class="fa-solid fa-check"></i>
                                                        {{ $item['value'] }}
                                                    </li>
                                                @endforeach
                                            @else
                                                <li>
                                                    <i class="fa-solid fa-check"></i>
                                                    Tidak ada Syarat untuk mendaftar.
                                                </li>
                                            @endif

                                        </ul>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="details-list-area">
                            <h3>Informasi Event</h3>
                            <ul class="details-list">
                                <li>
                                    <span>
                                        <img src="{{ asset('public/assets/img/event/icon/01.svg ') }}" alt="img"
                                            class="me-2"  loading="lazy">
                                        Mulai Event
                                    </span>
                                    {{ $events->mulai }}
                                </li>
                                <li>
                                    <span>
                                        <img src="{{ asset('public/assets/img/event/icon/02.svg') }}" alt="img"
                                            class="me-2"  loading="lazy">
                                        Durasi
                                    </span>
                                    {{ $events->durasi }}
                                </li>
                                <li>
                                    <span>
                                        <img src="{{ asset('public/assets/img/event/icon/03.svg') }}" alt="img"
                                            class="me-2"  loading="lazy">
                                        Lokasi
                                    </span>
                                    {{ $events->lokasi }}
                                </li>
                                <li>
                                    <span>
                                        <img src="{{ asset('public/assets/img/event/icon/04.svg') }}" alt="img"
                                            class="me-2"  loading="lazy">
                                        Telepon
                                    </span>
                                    {{ $events->tlp }}
                                </li>
                                <li>
                                    <span>
                                        <img src="{{ asset('public/assets/img/event/icon/05.svg') }}" alt="img"
                                            class="me-2"  loading="lazy">
                                        Email
                                    </span>
                                    {{ $events->email }}
                                </li>

                            </ul>
                            <a href="https://wa.me/6281266187125?" class="theme-btn w-100">
                                Daftar Sekarang <i class="fa-solid fa-arrow-right-long"></i>
                            </a>

                        </div>
                        {{-- <div class="map-items">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd"
                                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Whatsapp popup -->
    <div id="whatsapp-popup" style="display: none; position: fixed; bottom: 20px; right: 20px; z-index: 9999; cursor: move;"
        ontouchstart="handleTouchStart(event)" ontouchmove="handleTouchMove(event)">
        <a href="https://wa.me/6281266187125?" target="_blank">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/Whatsapp.png') }}" alt="WhatsApp Icon"
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

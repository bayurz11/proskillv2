@section('title', 'ProSkill Akademia | Kelas Offline Detail')
@extends('layout.mainlayout')
@section('content')

    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover"
        style="background-image: url('{{ asset('public/assets/img/breadcrumb.png') }}');">
        <div class="line-shape">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/line.png') }}" alt="shape-img">
        </div>
        <div class="plane-shape float-bob-y">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/plane.png') }}" alt="shape-img">
        </div>
        <div class="doll-shape float-bob-x">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/doll.png') }}" alt="shape-img">
        </div>
        <div class="parasuit-shape float-bob-y">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/parasuit.png') }}" alt="shape-img">
        </div>
        <div class="frame-shape">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/frame.png') }}" alt="shape-img">
        </div>
        <div class="bee-shape float-bob-x">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/bee.png') }}" alt="shape-img">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Kelas Offline</h1>
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
                        <a href="{{ route('Kelastatapmuka') }}">
                            Kelas Offline
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li>
                        Kelas Offline Detail
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--<< Program Details Section Start >>-->
    <section class="program-details-section fix section-padding">
        <div class="container">
            <div class="program-details-wrapper">
                <div class="row g-5">
                    <div class="col-lg-8">
                        <div class="program-details-items">
                            <div class="details-image">
                                <img src="{{ asset('public/uploads/' . $klsoffline->banner) }}" alt="img">

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="details-list-area">
                            <h3>Detail Kelas</h3>
                            <ul class="details-list">
                                <li>
                                    <span>
                                        <img src="{{ asset('public/assets/img/program/icon/08.svg') }}" alt="img"
                                            class="me-2">
                                        Level
                                    </span>
                                    {{ $klsoffline->lvl }}
                                </li>
                                <li>
                                    <span>
                                        <img src="{{ asset('public/assets/img/program/icon/09.svg') }}" alt="img"
                                            class="me-2">
                                        Durasi
                                    </span>
                                    {{ $klsoffline->durasi }}
                                </li>

                                <li>
                                    <span>
                                        <img src="{{ asset('public/assets/img/program/icon/11.svg') }}" alt="img"
                                            class="me-2">
                                        Jumlah Siswa Dalam 1 Kelas
                                    </span>
                                    {{ $klsoffline->jumlah_siswa }}
                                </li>
                                <li>
                                    <span>
                                        <img src="{{ asset('public/assets/img/program/icon/14.svg') }}" alt="img"
                                            class="me-2">
                                        Sertifikat
                                    </span>
                                    {{ $klsoffline->sertifikat }}
                                </li>


                            </ul>
                            <a href="#" class="theme-btn w-100 border-style mb-3">
                                Harga Kelas Rp {{ number_format($klsoffline->price, 0, ',', '.') }}
                            </a>
                            <a href="https://wa.me/6281266187125?text=Halo,%20saya%20mau%20daftar%20ke%20kelas%20ini"
                                class="theme-btn w-100">
                                Daftar Ke Whatsapp kami <i class="fa-solid fa-arrow-right-long"></i>
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="program-details-items">

                            <div class="details-content">
                                {{-- <div class="post">
                                    <span>Kindergarten</span>
                                </div> --}}
                                <h2 class="mb-0">{{ $klsoffline->kelas }}</h2>
                                <div class="details-author-area">
                                    <div class="author-items">
                                        <i class="fas fa-user"></i>
                                        <p>{{ $klsoffline->instruktur }}</p>
                                    </div>

                                </div>
                                <h3>Deskripsi Kelas</h3>
                                <p class="mb-3">
                                    {{ $klsoffline->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="program-details-items">
                            <h3>Materi</h3>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                            aria-controls="flush-collapseOne">
                                            Pengelolaan Teknologi Komputer
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                @if (!empty($fasilitas))
                                                    @foreach ($fasilitas as $item)
                                                        <li><i class="fa-solid fa-check"></i>
                                                            {{ $item['value'] }}</li>
                                                    @endforeach
                                                @else
                                                    <li><i class="fa-solid fa-check"></i> Tidak ada fasilitas
                                                        dan materi yang tersedia.</li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                            aria-controls="flush-collapseTwo">
                                            Ms Word & Google Docs Dasar
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                            second item's accordion body. Let's imagine this being filled with some actual
                                            content.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Ms Excel & Google Sheet Dasar
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                            third item's accordion body. Nothing more exciting happening here in terms of
                                            content, but just filling up the space to make it look, at least at first
                                            glance, a bit more representative of how this would look in a real-world
                                            application.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                            aria-expanded="false" aria-controls="flush-collapseFour">
                                            Ms Powerpoint & Google Presentation Dasar
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                            fourth item's accordion body. Nothing more exciting happening here in terms of
                                            content, but just filling up the space to make it look, at least at first
                                            glance, a bit more representative of how this would look in a real-world
                                            application.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                            aria-expanded="false" aria-controls="flush-collapseFive">
                                            Aplikasi Berbasis Internet & AI
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                            fifth item's accordion body. Nothing more exciting happening here in terms of
                                            content, but just filling up the space to make it look, at least at first
                                            glance, a bit more representative of how this would look in a real-world
                                            application.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingSix">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                                            aria-expanded="false" aria-controls="flush-collapseSix">
                                            Assessment
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                            sixth item's accordion body. Nothing more exciting happening here in terms of
                                            content, but just filling up the space to make it look, at least at first
                                            glance, a bit more representative of how this would look in a real-world
                                            application.</div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="program-details-items">
                            <h3>Fasilitas Yang Didapat</h3>
                            <div class="details-content">
                                <ul class="list-items">
                                    @if (!empty($fasilitas))
                                        @foreach ($fasilitas as $item)
                                            <li>
                                                <i class="fa-solid fa-check"></i>
                                                {{ $item['value'] }}
                                            </li>
                                        @endforeach
                                    @else
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Tidak ada fasilitas dan materi yang tersedia.
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Whatsapp popup -->
    <div id="whatsapp-popup"
        style="display: none; position: fixed; bottom: 20px; right: 20px; z-index: 9999; cursor: move;"
        ontouchstart="handleTouchStart(event)" ontouchmove="handleTouchMove(event)">
        <a href="https://wa.me/6281266187125?" target="_blank">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/Whatsapp.png') }}" alt="WhatsApp Icon"
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

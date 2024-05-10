@section('title', 'ProSkill Akademia | Kelas Tatap Muka')
@extends('layout.mainlayout')
@section('content')

    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('public/assets/img/breadcrumb.png');">
        <div class="line-shape">
            <img src="public/assets/img/breadcrumb-shape/line.png" alt="shape-img">
        </div>
        <div class="plane-shape float-bob-y">
            <img src="public/assets/img/breadcrumb-shape/plane.png" alt="shape-img">
        </div>
        <div class="doll-shape float-bob-x">
            <img src="public/assets/img/breadcrumb-shape/doll.png" alt="shape-img">
        </div>
        <div class="parasuit-shape float-bob-y">
            <img src="public/assets/img/breadcrumb-shape/parasuit.png" alt="shape-img">
        </div>
        <div class="frame-shape">
            <img src="public/assets/img/breadcrumb-shape/frame.png" alt="shape-img">
        </div>
        <div class="bee-shape float-bob-x">
            <img src="public/assets/img/breadcrumb-shape/bee.png" alt="shape-img">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Kelas Tatap Muka</h1>
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
                        Kelas Tatap Muka
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Clases Section Start -->
    <section class="clases-section section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="clases-items mt-0">
                        <div class="clases-bg style-2"></div>
                        <div class="clases-image">
                            <img src="assets/img/classes/01.png" alt="img">
                        </div>
                        <div class="clases-content">
                            <h4>
                                <a href="program-details.html">English Classes</a>
                            </h4>
                            <p>Nulla a auctor leo. Vestibulum viverra mattis arcu <br> nec viverra. Vivamus </p>
                            <ul class="clases-schedule">
                                <li>
                                    <span>age</span> <br>
                                    3-5 years
                                </li>
                                <li>
                                    <span>weekly</span> <br>
                                    5 Days
                                </li>
                                <li>
                                    <span>time</span> <br>
                                    4.30 Hors
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="clases-items mt-0">
                        <div class="clases-bg style-2"></div>
                        <div class="clases-image">
                            <img src="assets/img/classes/02.png" alt="img">
                        </div>
                        <div class="clases-content">
                            <h4>
                                <a href="program-details.html">Tutoring Individual</a>
                            </h4>
                            <p>Nulla a auctor leo. Vestibulum viverra mattis arcu <br> nec viverra. Vivamus </p>
                            <ul class="clases-schedule">
                                <li>
                                    <span>age</span> <br>
                                    3-5 years
                                </li>
                                <li>
                                    <span>weekly</span> <br>
                                    5 Days
                                </li>
                                <li>
                                    <span>time</span> <br>
                                    4.30 Hors
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="clases-items mt-0">
                        <div class="clases-bg style-2"></div>
                        <div class="clases-image">
                            <img src="assets/img/classes/03.png" alt="img">
                        </div>
                        <div class="clases-content">
                            <h4>
                                <a href="program-details.html">Tutoring Online</a>
                            </h4>
                            <p>Nulla a auctor leo. Vestibulum viverra mattis arcu <br> nec viverra. Vivamus </p>
                            <ul class="clases-schedule">
                                <li>
                                    <span>age</span> <br>
                                    3-5 years
                                </li>
                                <li>
                                    <span>weekly</span> <br>
                                    5 Days
                                </li>
                                <li>
                                    <span>time</span> <br>
                                    4.30 Hors
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="clases-items mt-0">
                        <div class="clases-bg style-2"></div>
                        <div class="clases-image">
                            <img src="assets/img/classes/04.png" alt="img">
                        </div>
                        <div class="clases-content">
                            <h4>
                                <a href="program-details.html">Art and Craft Classes</a>
                            </h4>
                            <p>Nulla a auctor leo. Vestibulum viverra mattis arcu <br> nec viverra. Vivamus </p>
                            <ul class="clases-schedule">
                                <li>
                                    <span>age</span> <br>
                                    3-5 years
                                </li>
                                <li>
                                    <span>weekly</span> <br>
                                    5 Days
                                </li>
                                <li>
                                    <span>time</span> <br>
                                    4.30 Hors
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="clases-items mt-0">
                        <div class="clases-bg style-2"></div>
                        <div class="clases-image">
                            <img src="assets/img/classes/05.png" alt="img">
                        </div>
                        <div class="clases-content">
                            <h4>
                                <a href="program-details.html">Imagination Classes</a>
                            </h4>
                            <p>Nulla a auctor leo. Vestibulum viverra mattis arcu <br> nec viverra. Vivamus </p>
                            <ul class="clases-schedule">
                                <li>
                                    <span>age</span> <br>
                                    3-5 years
                                </li>
                                <li>
                                    <span>weekly</span> <br>
                                    5 Days
                                </li>
                                <li>
                                    <span>time</span> <br>
                                    4.30 Hors
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="clases-items mt-0">
                        <div class="clases-bg style-2"></div>
                        <div class="clases-image">
                            <img src="assets/img/classes/06.png" alt="img">
                        </div>
                        <div class="clases-content">
                            <h4>
                                <a href="program-details.html">Wizards of Chess</a>
                            </h4>
                            <p>Nulla a auctor leo. Vestibulum viverra mattis arcu <br> nec viverra. Vivamus </p>
                            <ul class="clases-schedule">
                                <li>
                                    <span>age</span> <br>
                                    3-5 years
                                </li>
                                <li>
                                    <span>weekly</span> <br>
                                    5 Days
                                </li>
                                <li>
                                    <span>time</span> <br>
                                    4.30 Hors
                                </li>
                            </ul>
                        </div>
                    </div>
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
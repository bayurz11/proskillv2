@section('title', 'ProSkill Akademia | Tentang Kami')
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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Tentang ProSkill Akademia</h1>
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
                        Tentang ProSkill Akademia
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- About Activities Section Start -->
    <section class="about-activities-section-2 style-2 section-padding">
        <div class="zebra-shape float-bob-y">
            <img src="assets/img/about/zebra.png" alt="shape-img">
        </div>
        <div class="bottom-shape">
            <img src="assets/img/section-top-shape-2.png" alt="shape-img">
        </div>
        <div class="sun-shape">
            <img src="assets/img/client/shape-2.png" alt="shape-img">
        </div>
        <div class="container">
            <div class="about-activities-wrapper style-2">
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="activities-image-items">
                            <img src="assets/img/about/04.png" alt="img">
                            <div class="radius-shape">
                                <img src="assets/img/about/radius-shape.png" alt="shape-img">
                            </div>
                            <div class="circle-shape">
                                <img src="assets/img/about/circle.png" alt="shape-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="activities-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">About Us</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Learn to play, converse <br>
                                    with confidence.
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Luctus. Curabitur nibh justo imperdiet non ex non tempus faucibus urna Aliquam at elit vitae
                                dui sagittis maximus eget vitae diam In fermentum
                            </p>
                            <div class="row g-4 mt-4">
                                <div class="col-xl-6 col-lg-8 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="icon-items">
                                        <div class="icon">
                                            <i class="icon-icon-12"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Sport Program</h5>
                                            <p>Aliquam erat volutpat <br> nullam imperdiet</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-8 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="icon-items">
                                        <div class="icon">
                                            <i class="icon-icon-13"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Easy To Learn</h5>
                                            <p>Ut vehiculadictumst <br> maecenas ante.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-author">
                                <div class="author-image wow fadeInUp" data-wow-delay=".3s">
                                    <img src="assets/img/about/author.png" alt="author-img">
                                    <div class="content">
                                        <h6>Ronald Richards</h6>
                                        <p>Co, Founder</p>
                                    </div>
                                </div>
                                <div class="author-icon wow fadeInUp" data-wow-delay=".5s">
                                    <div class="icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <span>Call Us Now</span>
                                        <h5>
                                            <a href="tel:+2085550112">+208-555-0112</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
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

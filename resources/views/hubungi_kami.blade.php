@section('title', 'ProSkill Akademia | Hubungi Kami')
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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">>@yield('title')</h1>
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
                        Tentang Kami
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Contact Section Start -->
    <!-- Contact Us -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    @php
                        $latestHubungi = $hubungi->sortByDesc('created_at')->first();
                    @endphp
                    @if ($latestHubungi)
                        <div class="section-inner-header contact-inner-header">
                            <h2>Kunjungi kami</h2>
                        </div>
                        <div class="card contact-card">
                            <div class="card-body">
                                <div class="contact-icon">
                                    <i class="feather-map-pin"></i>
                                </div>
                                <div class="contact-details">
                                    <h4>Alamat</h4>
                                    <p>{{ $latestHubungi->alamat }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card contact-card">
                            <div class="card-body">
                                <div class="contact-icon">
                                    <i class="feather-phone"></i>
                                </div>
                                <div class="contact-details">
                                    <h4>Whatsapp</h4>
                                    <p>+{{ $latestHubungi->tlp }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card contact-card">
                            <div class="card-body">
                                <div class="contact-icon">
                                    <i class="feather-mail"></i>
                                </div>
                                <div class="contact-details">
                                    <h4>Alamat email</h4>
                                    <p>{{ $latestHubungi->email }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-lg-7 col-md-12 d-flex">
                    <div class="card contact-form-card w-100">
                        <div class="card-body">
                            <form action="#" id="whatsappForm">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="mb-2">Nama</label>
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Enter Your Name">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="mb-2">Pesan</label>
                                            <textarea class="form-control" id="message" placeholder="Enter your message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group-btn mb-0">
                                            <button type="button" onclick="sendWhatsAppMessage()"
                                                class="btn btn-primary prime-btn">Kirim Pesan Whatsapp</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <script>
                                function sendWhatsAppMessage() {
                                    var name = document.getElementById('name').value;
                                    var message = document.getElementById('message').value;

                                    // Format the message
                                    var encodedMessage = encodeURIComponent(message);

                                    // Construct the WhatsApp URL
                                    var whatsappURL = 'https://wa.me/6281266187125?text=' + encodeURIComponent('Halo, saya ' + name + '. ' +
                                        message);

                                    // Open WhatsApp in a new tab
                                    window.open(whatsappURL, '_blank');
                                }
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Contact Us -->

    <!--<< Map Section Start >>-->
    <div class="map-section">
        <div class="map-items">
            <div class="googpemap">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.971128320049!2d104.46076741476417!3d0.9006724999075791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9729a2556642d%3A0xaa63e717cb0e87b9!2sProSkill%20Akademia!5e0!3m2!1sen!2sin!4v1669777904208!5m2!1sen!2sin"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>


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

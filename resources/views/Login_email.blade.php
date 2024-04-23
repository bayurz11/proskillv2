@section('title', 'ProSkill Akademia | Login')
<?php $page = 'login_user'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="login-content-info">
        <div class="container">

            <!-- Login Email -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="account-content">
                        <div class="login-shapes">
                            <div class="shape-img-left">
                                <img src="public/assets/img/shape-01.png" alt="shape-image">
                            </div>
                            <div class="shape-img-right">
                                <img src="public/assets/img/shape-02.png" alt="shape-image">
                            </div>
                        </div>
                        <div class="account-info">
                            <div class="login-back">
                                <a href="{{ Route('/') }}"><i class="fas fa-arrow-left-long"></i> Kembali</a>
                            </div>
                            <div class="login-title">
                                <h3>Ayo Masuk!</h3>
                                <p> Selamat datang di platform kami! Login sekarang untuk akses penuh ke fitur-fitur
                                    eksklusif, interaksi komunitas, dan manfaat lainnya. Yuk, jelajahi lebih dalam!</p>
                                <span>Masuk dengan <a href="login-phone.html">Nomor Telepon</a></span>
                            </div>
                            <form action="login-email-otp.html">
                                <div class="mb-3">
                                    <label class="mb-2">E-mail</label>
                                    <input type="email" class="form-control" placeholder="proskill@gmail.com" autofocus
                                        name="email" id="email">
                                </div>
                                <div class="mb-3">
                                    <div class="form-group-flex">
                                        <label class="mb-2">Password</label>
                                        <a href="forgot-password.html" class="forgot-link">Forgot password?</a>
                                    </div>
                                    <div class="pass-group">
                                        <input type="password" class="form-control pass-input" placeholder="*************"
                                            name="password" id="password">
                                        <span class="feather-eye-off toggle-password"></span>
                                    </div>
                                </div>
                                {{-- <div class="mb-3 form-check-box">
                                    <div class="form-group-flex">
                                        <label class="custom_check d-inline-flex"> Ingat saya
                                            <input type="checkbox" name="login">
                                            <span class="checkmark"></span>
                                        </label>

                                    </div>
                                </div> --}}
                                <div class="mb-3">
                                    <button class="btn w-100" type="submit">Masuk</button>
                                </div>
                                <div class="login-or">
                                    <span class="or-line"></span>
                                    <span class="span-or">or</span>
                                </div>
                                <div class="social-login-btn">
                                    <a href="javascript:void(0);" class="btn w-100">
                                        <img src="public/assets/img/icons/google-icon.svg" alt="google-icon"> Masuk dengan
                                        Google
                                    </a>
                                </div>
                                <div class="account-signup">
                                    <p>Don't have an account ? <a href="signup.html">Sign up</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Login Email -->

        </div>
    </div>
    <!-- /Page Content -->

    <!-- Cursor -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- /Cursor -->
    <!-- Whatsapp popup -->
    <div id="whatsapp-popup" style="display: none; position: fixed; bottom: 20px; right: 20px; z-index: 9999; cursor: move;"
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

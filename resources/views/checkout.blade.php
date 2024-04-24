@section('title', 'ProSkill Akademia | Checkout Kelas')
<?php $page = 'blog-grid'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar-two">
        <div class="container">
            <div class="row align-items-center inner-banner">
                <div class="col-md-12 col-12 text-center">
                    <h2 class="breadcrumb-title" style="color: #028E83;">Checkout Kelas</h2>
                    <a class="breadcrumb-title" style="color: #FE9900;">Bergabung dengan kami di kelas Premium</a>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('tatap_muka') }}">Kelas</a></li>
                            <li class="breadcrumb-item" aria-current="page">Detail Kelas</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->
    <!-- Page Content -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-md-7 col-lg-8">
                    <div class="card">
                        <div class="card-body">

                            <!-- Checkout Form -->
                            <form action="booking-success.html">

                                <!-- Personal Information -->
                                <div class="info-widget">
                                    <div class="card-body">
                                        <div class="doctor-widget">
                                            <div class="video-container">
                                                <iframe width="685" height="415"
                                                    src="https://www.youtube.com/embed/TTimxxM9RbE" frameborder="0"
                                                    allowfullscreen style="border-radius: 15px;"></iframe>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- /Personal Information -->


                            </form>
                            <!-- /Checkout Form -->

                        </div>
                    </div>

                </div>

                <div class="col-md-5 col-lg-4 ">

                    <!-- Booking Summary -->
                    <div class="card booking-card">
                        <div class="payment-widget">
                            <h4 class="card-title">Payment Method</h4>

                            <!-- Paypal Payment -->
                            <div class="payment-list">
                                <label class="payment-radio paypal-option">
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                    Paypal
                                </label>
                            </div>
                            <!-- /Paypal Payment -->

                        </div>
                    </div>
                    <!-- /Booking Summary -->
                    <!-- Booking Summary -->
                    <div class="card booking-card">
                        <div class="card-header">
                            <h4 class="card-title">Booking Summary</h4>
                        </div>
                        <div class="card-body">

                            <!-- Booking Doctor Info -->
                            <div class="booking-doc-info">
                                <a href="doctor-profile.html" class="booking-doc-img">
                                    <img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
                                </a>
                                <div class="booking-info">
                                    <h4><a href="doctor-profile.html">Dr. Darren Elder</a></h4>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">35</span>
                                    </div>
                                    <div class="clinic-details">
                                        <p class="doc-location"><i class="fas fa-map-marker-alt"></i> Newyork, USA</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Booking Doctor Info -->

                            <div class="booking-summary">
                                <div class="booking-item-wrap">
                                    <ul class="booking-date">
                                        <li>Date :<span> 16 Nov 2023</span></li>
                                        <li>Time :<span> 10:00 AM</span></li>
                                    </ul>
                                    <ul class="booking-fee">
                                        <li>Consulting Fee <span>$100</span></li>
                                        <li>Booking Fee <span>$10</span></li>
                                        <li>Video Call <span>$50</span></li>
                                    </ul>
                                    <div class="booking-total">
                                        <ul class="booking-total-list">
                                            <li>
                                                <span>Total</span>
                                                <span class="total-cost">$160</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Terms Accept -->
                                    <div class="terms-accept">
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="terms_accept">
                                            <label for="terms_accept">I have read and accept <a
                                                    href="terms-condition.html">Terms &amp; Conditions</a></label>
                                        </div>
                                    </div>
                                    <!-- /Terms Accept -->

                                    <!-- Submit Section -->
                                    <div class="submit-section mt-4">
                                        <button type="submit" class="btn btn-primary submit-btn">Confirm and Pay</button>
                                    </div>
                                    <!-- /Submit Section -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Booking Summary -->

                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
    <script>
        // Fungsi untuk melakukan pencarian real-time
        function searchPosts() {
            // Ambil nilai input pencarian
            var searchText = document.getElementById("searchInput").value.toLowerCase();
            // Ambil semua judul posting
            var postTitles = document.getElementsByClassName("post-info");

            // Loop melalui setiap judul posting
            for (var i = 0; i < postTitles.length; i++) {
                var title = postTitles[i].getElementsByTagName("h4")[0];
                var titleText = title.textContent || title.innerText;

                // Periksa apakah judul posting mengandung kata kunci pencarian
                if (titleText.toLowerCase().indexOf(searchText) > -1) {
                    postTitles[i].parentNode.style.display = "";
                } else {
                    postTitles[i].parentNode.style.display = "none";
                }
            }
        }

        // Panggil fungsi pencarian setiap kali input berubah
        document.getElementById("searchInput").addEventListener("input", searchPosts);
    </script>
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

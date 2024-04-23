@section('title', 'ProSkill Akademia | Kelas')
<?php $page = 'blog-grid'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar-two">
        <div class="container">
            <div class="row align-items-center inner-banner">
                <div class="col-md-12 col-12 text-center">
                    <h2 class="breadcrumb-title" style="color: #028E83;">Kelas Tatap Muka</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item" aria-current="page">Kelas Tatap Muka</li>
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
                <div class="col-md-12 col-lg-4 col-xl-3">

                    <!-- Search Filter -->
                    <div class="card search-filter">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Search Filter</h4>
                        </div>
                        <div class="card-body">
                            <div class="filter-widget">
                                <div class="cal-icon">
                                    <input type="text" class="form-control datetimepicker" placeholder="Select Date">
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4>Gender</h4>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="gender_type" checked>
                                        <span class="checkmark"></span> Male Doctor
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="gender_type">
                                        <span class="checkmark"></span> Female Doctor
                                    </label>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4>Select Specialist</h4>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist" checked>
                                        <span class="checkmark"></span> Urology
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist" checked>
                                        <span class="checkmark"></span> Neurology
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist">
                                        <span class="checkmark"></span> Dentist
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist">
                                        <span class="checkmark"></span> Orthopedic
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist">
                                        <span class="checkmark"></span> Cardiologist
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist">
                                        <span class="checkmark"></span> Cardiologist
                                    </label>
                                </div>
                            </div>
                            <div class="btn-search">
                                <button type="button" class="btn w-100">Search</button>
                            </div>
                        </div>
                    </div>
                    <!-- /Search Filter -->

                </div>

                <div class="col-md-12 col-lg-8 col-xl-9">

                    <!-- Doctor Widget -->
                    <div class="card">
                        <div class="card-body">
                            <div class="doctor-widget">
                                <div class="doc-info-left">
                                    <div class="doctor-img">
                                        <a href="doctor-profile.html">
                                            <img src="assets/img/doctors/doctor-thumb-01.jpg" class="img-fluid"
                                                alt="User Image">
                                        </a>
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name"><a href="doctor-profile.html">Fundamental Computer Skill</a>
                                        </h4>
                                        <p class="doc-speciality">MDS - Periodontology and Oral Implantology, BDS
                                        </p>
                                        <h5 class="doc-department"><img
                                                src="publick/assets/img/kelas/Fundamental Computer Skill.png"
                                                class="img-fluid" alt="Speciality">Dentist</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(17)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i> Florida,
                                                USA</p>
                                            <ul class="clinic-gallery">
                                                <li>
                                                    <a href="assets/img/features/feature-01.jpg" data-fancybox="gallery">
                                                        <img src="assets/img/features/feature-01.jpg" alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="assets/img/features/feature-02.jpg" data-fancybox="gallery">
                                                        <img src="assets/img/features/feature-02.jpg" alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="assets/img/features/feature-03.jpg" data-fancybox="gallery">
                                                        <img src="assets/img/features/feature-03.jpg" alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="assets/img/features/feature-04.jpg" data-fancybox="gallery">
                                                        <img src="assets/img/features/feature-04.jpg" alt="Feature">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clinic-services">
                                            <span>Dental Fillings</span>
                                            <span> Whitneing</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clini-infos">
                                        <ul>
                                            <li><i class="far fa-thumbs-up"></i> 98%</li>
                                            <li><i class="far fa-comment"></i> 17 Feedback</li>
                                            <li><i class="fas fa-map-marker-alt"></i> Florida, USA</li>
                                            <li><i class="far fa-money-bill-alt"></i> $300 - $1000 <i
                                                    class="fas fa-info-circle" data-bs-toggle="tooltip"
                                                    title="Lorem Ipsum"></i> </li>
                                        </ul>
                                    </div>
                                    <div class="clinic-booking">
                                        <a class="view-pro-btn" href="doctor-profile.html">View Profile</a>
                                        <a class="apt-btn" href="booking.html">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Doctor Widget -->


                    <div class="load-more text-center">
                        <a class="btn btn-primary btn-sm prime-btn" href="javascript:void(0);">Load More</a>
                    </div>
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
    <div id="whatsapp-popup"
        style="display: none; position: fixed; bottom: 20px; right: 20px; z-index: 9999; cursor: move;"
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

@section('title', 'ProSkill Akademia | Detail Kelas')
<?php $page = 'blog-grid'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar-two">
        <div class="container">
            <div class="row align-items-center inner-banner">
                <div class="col-md-12 col-12 text-center">
                    <h2 class="breadcrumb-title" style="color: #028E83;">Kelas Online</h2>
                    <h2 class="breadcrumb-title" style="color: #FE9900;">Fundamental Computer
                        Skill</h2>
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

            <!-- Doctor Widget -->
            <div class="container">
                <div class="row">
                    <div class="col-md-7">

                        <div class="card-body">
                            <div class="doctor-widget">
                                <div class="video-container">
                                    <iframe width="685" height="415" src="https://www.youtube.com/embed/TTimxxM9RbE"
                                        frameborder="0" allowfullscreen style="border-radius: 15px;"></iframe>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <ul>
                                    <li><a href="">Cara Membuat Foto Produk Melalui Beberapa Tools Ai</a></li>
                                    <li><a href="">Cara Membuat Logo Maskot dengan Ai</a></li>
                                    <li><a href="">Judul 3</a></li>
                                    <li><a href="">Judul 4</a></li>
                                    <li><a href="">Judul 5</a></li>
                                </ul>
                                <div class="doctor-widget">
                                    <div class="doc-info-right">
                                        <div class="clinic-booking text-center">
                                            <!-- Mengubah ke text-center untuk menengahkan button -->
                                            <a class="apt-btn" href="{{ route('checkout') }}">Gabung Kelas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /Doctor Widget -->

            <!-- Doctor Details Tab -->
            <div class="card">
                <div class="card-body pt-0">

                    <!-- Tab Menu -->
                    <nav class="user-tabs mb-4">
                        <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" href="#doc_overview" data-bs-toggle="tab">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#doc_locations" data-bs-toggle="tab">Lessons</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#doc_reviews" data-bs-toggle="tab">Tools</a>
                            </li>

                        </ul>
                    </nav>
                    <!-- /Tab Menu -->

                    <!-- Tab Content -->
                    <div class="tab-content pt-0">

                        <!-- Overview Content -->
                        <div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
                            <div class="row">
                                <div class="col-md-12 col-lg-9">

                                    <!-- About Details -->
                                    <div class="widget about-widget">
                                        <h4 class="widget-title">About Me</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                            culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <!-- /About Details -->

                                </div>
                            </div>
                        </div>
                        <!-- /Overview Content -->

                        <!-- Locations Content -->
                        <div role="tabpanel" id="doc_locations" class="tab-pane fade">

                            <!-- Location List -->
                            <div class="filter-details">

                                <!-- Filter Grid -->
                                <div class="filter-grid">
                                    <h4>
                                        <a href="#collapseone" data-bs-toggle="collapse">Sort</a>
                                    </h4>
                                    <div id="collapseone" class="collapse show">
                                        <div class="filter-collapse">
                                            <ul>
                                                <li>
                                                    <label class="custom_check d-inline-flex">
                                                        <input type="checkbox" name="gender">
                                                        <span class="checkmark"></span>
                                                        Baru Rilis
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_check d-inline-flex">
                                                        <input type="checkbox" name="gender">
                                                        <span class="checkmark"></span>
                                                        Terpopuler
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="custom_check d-inline-flex">
                                                        <input type="checkbox" name="gender">
                                                        <span class="checkmark"></span>
                                                        Sedang Promo
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Filter Grid -->

                            </div>

                            <!-- /Location List -->


                        </div>
                        <!-- /Locations Content -->

                        <!-- Reviews Content -->
                        <div role="tabpanel" id="doc_reviews" class="tab-pane fade">

                            <!-- Review Listing -->
                            <div class="widget review-listing">
                                <ul class="comments-list">

                                    <!-- Comment List -->
                                    <li>
                                        <div class="comment">
                                            <img class="avatar avatar-sm rounded-circle" alt="User Image"
                                                src="assets/img/patients/patient.jpg">
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <span class="comment-author">Richard Wilson</span>
                                                    <span class="comment-date">Reviewed 2 Days ago</span>
                                                    <div class="review-count rating">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <p class="recommended"><i class="far fa-thumbs-up"></i> I recommend the
                                                    doctor</p>
                                                <p class="comment-content">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut enim ad minim veniam, quis nostrud exercitation.
                                                    Curabitur non nulla sit amet nisl tempus
                                                </p>
                                                <div class="comment-reply">
                                                    <a class="comment-btn" href="#">
                                                        <i class="fas fa-reply"></i> Reply
                                                    </a>
                                                    <p class="recommend-btn">
                                                        <span>Recommend?</span>
                                                        <a href="#" class="like-btn">
                                                            <i class="far fa-thumbs-up"></i> Yes
                                                        </a>
                                                        <a href="#" class="dislike-btn">
                                                            <i class="far fa-thumbs-down"></i> No
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Comment Reply -->
                                        <ul class="comments-reply">
                                            <li>
                                                <div class="comment">
                                                    <img class="avatar avatar-sm rounded-circle" alt="User Image"
                                                        src="assets/img/patients/patient1.jpg">
                                                    <div class="comment-body">
                                                        <div class="meta-data">
                                                            <span class="comment-author">Charlene Reed</span>
                                                            <span class="comment-date">Reviewed 3 Days ago</span>
                                                            <div class="review-count rating">
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                        </div>
                                                        <p class="comment-content">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                            sed do eiusmod tempor incididunt ut labore et dolore magna
                                                            aliqua.
                                                            Ut enim ad minim veniam.
                                                            Curabitur non nulla sit amet nisl tempus
                                                        </p>
                                                        <div class="comment-reply">
                                                            <a class="comment-btn" href="#">
                                                                <i class="fas fa-reply"></i> Reply
                                                            </a>
                                                            <p class="recommend-btn">
                                                                <span>Recommend?</span>
                                                                <a href="#" class="like-btn">
                                                                    <i class="far fa-thumbs-up"></i> Yes
                                                                </a>
                                                                <a href="#" class="dislike-btn">
                                                                    <i class="far fa-thumbs-down"></i> No
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- /Comment Reply -->

                                    </li>
                                    <!-- /Comment List -->

                                    <!-- Comment List -->
                                    <li>
                                        <div class="comment">
                                            <img class="avatar avatar-sm rounded-circle" alt="User Image"
                                                src="assets/img/patients/patient2.jpg">
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <span class="comment-author">Travis Trimble</span>
                                                    <span class="comment-date">Reviewed 4 Days ago</span>
                                                    <div class="review-count rating">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <p class="comment-content">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut enim ad minim veniam, quis nostrud exercitation.
                                                    Curabitur non nulla sit amet nisl tempus
                                                </p>
                                                <div class="comment-reply">
                                                    <a class="comment-btn" href="#">
                                                        <i class="fas fa-reply"></i> Reply
                                                    </a>
                                                    <p class="recommend-btn">
                                                        <span>Recommend?</span>
                                                        <a href="#" class="like-btn">
                                                            <i class="far fa-thumbs-up"></i> Yes
                                                        </a>
                                                        <a href="#" class="dislike-btn">
                                                            <i class="far fa-thumbs-down"></i> No
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- /Comment List -->

                                </ul>

                                <!-- Show All -->
                                <div class="all-feedback text-center">
                                    <a href="#" class="btn btn-primary btn-sm">
                                        Show all feedback <strong>(167)</strong>
                                    </a>
                                </div>
                                <!-- /Show All -->

                            </div>
                            <!-- /Review Listing -->

                            <!-- Write Review -->
                            <div class="write-review">
                                <h4>Write a review for <strong>Dr. Darren Elder</strong></h4>

                                <!-- Write Review Form -->
                                <form>
                                    <div class="mb-3">
                                        <label class="mb-2">Review</label>
                                        <div class="star-rating">
                                            <input id="star-5" type="radio" name="rating" value="star-5">
                                            <label for="star-5" title="5 stars">
                                                <i class="active fa fa-star"></i>
                                            </label>
                                            <input id="star-4" type="radio" name="rating" value="star-4">
                                            <label for="star-4" title="4 stars">
                                                <i class="active fa fa-star"></i>
                                            </label>
                                            <input id="star-3" type="radio" name="rating" value="star-3">
                                            <label for="star-3" title="3 stars">
                                                <i class="active fa fa-star"></i>
                                            </label>
                                            <input id="star-2" type="radio" name="rating" value="star-2">
                                            <label for="star-2" title="2 stars">
                                                <i class="active fa fa-star"></i>
                                            </label>
                                            <input id="star-1" type="radio" name="rating" value="star-1">
                                            <label for="star-1" title="1 star">
                                                <i class="active fa fa-star"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-2">Title of your review</label>
                                        <input class="form-control" type="text"
                                            placeholder="If you could say it in one sentence, what would you say?">
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-2">Your review</label>
                                        <textarea id="review_desc" maxlength="100" class="form-control"></textarea>

                                        <div class="d-flex justify-content-between mt-3"><small class="text-muted"><span
                                                    id="chars">100</span> characters remaining</small></div>
                                    </div>
                                    <hr>
                                    <div class="mb-3">
                                        <div class="terms-accept">
                                            <div class="custom-checkbox">
                                                <input type="checkbox" id="terms_accept">
                                                <label for="terms_accept">I have read and accept <a href="#">Terms
                                                        &amp; Conditions</a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-section">
                                        <button type="submit" class="btn btn-primary submit-btn">Add Review</button>
                                    </div>
                                </form>
                                <!-- /Write Review Form -->

                            </div>
                            <!-- /Write Review -->

                        </div>
                        <!-- /Reviews Content -->


                    </div>
                </div>
            </div>
            <!-- /Doctor Details Tab -->

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

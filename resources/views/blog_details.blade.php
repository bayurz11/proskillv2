<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="ProSkill Akademia BERKOMITMEN membantu memudahkan Anda menguasai TEKNOLOGI KOMPUTER dengan CEPAT dan BIAYA TERJANGKAU. Pembelajaran dengan metode PRAKTEK dan dibimbing langsung oleh INSTRUKTUR yang KOMPETEN.">
    <meta name="keywords"
        content="Proskill, Proskill Akademia, teknologi komputer, kursus komputer, proskill akademia, proskill, kursus komputer tanjungpinang">
    <meta name="author" content="ProSkill Akademia">
    <meta property="og:url" content="https://proskill.sch.id/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="ProSkill Akademia">
    <meta property="og:description"
        content="ProSkill Akademia BERKOMITMEN membantu memudahkan Anda menguasai TEKNOLOGI KOMPUTER dengan CEPAT dan BIAYA TERJANGKAU. Pembelajaran dengan metode PRAKTEK dan dibimbing langsung oleh INSTRUKTUR yang KOMPETEN.">
    <meta property="og:image" content="public/assets/img/favicon.png">
    <meta name="google-site-verification" content="hCMbf-C99zBHv278k_biSK9VKVvC8tMprI1k7Dl7NkQ" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://tesproskillv2.proskill.sch.id/public/assets/img/favicon.png"
        type="image/x-icon">
    <title>ProSkill Akademia | Detail</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://tesproskillv2.proskill.sch.id/public/assets/img/favicon.png"
        type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://tesproskillv2.proskill.sch.id/public/assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet"
        href="https://tesproskillv2.proskill.sch.id/public/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet"
        href="https://tesproskillv2.proskill.sch.id/public/assets/plugins/fontawesome/css/all.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="https://tesproskillv2.proskill.sch.id/public/assets/css/feather.css">

    <!-- Datepicker CSS -->
    <link rel="stylesheet"
        href="https://tesproskillv2.proskill.sch.id/public/assets/css/bootstrap-datetimepicker.min.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://tesproskillv2.proskill.sch.id/public/assets/css/owl.carousel.min.css">

    <!-- Animation CSS -->
    <link rel="stylesheet" href="https://tesproskillv2.proskill.sch.id/public/assets/css/aos.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="https://tesproskillv2.proskill.sch.id/public/assets/css/custom.css">

</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <header class="header header-fixed header-fourteen header-twelve">
            <div class="container">
                <nav class="navbar navbar-expand-lg header-nav">
                    <div class="navbar-header">
                        <a id="mobile_btn" href="{{ url('/') }}">
                            <span class="bar-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </a>
                        <a href="{{ url('/') }}" class="navbar-brand logo">
                            <img src="https://tesproskillv2.proskill.sch.id/public/assets/img/logo1.svg"
                                class="img-fluid" alt="Logo">
                        </a>
                    </div>
                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="{{ url('/') }}" class="menu-logo">
                                <img src="https://tesproskillv2.proskill.sch.id/public/assets/img/logo.png"
                                    alt="Logo">

                            </a>
                            <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                        <ul class="main-nav">

                            <li class="{{ Request::is('/') ? 'active' : '' }}" style="margin-right: 50px;">
                                <a href="{{ url('/') }}"> <span
                                        {{ Request::is('/') ? 'style=color:##028E83;' : '' }}>Home</span></a>
                            </li>
                            <li class="{{ Request::is('blog*') ? 'active' : '' }}" style="margin-right: 50px;">
                                <a href="{{ url('/blog') }}"><span
                                        {{ Request::is('blog*') ? 'style=color:##028E83;' : '' }}>Artikel</span></a>
                            </li>
                            <li class="{{ Request::is('tentang*') ? 'active' : '' }}" style="margin-right: 50px;">
                                <a href="{{ url('/tentang') }}"><span
                                        {{ Request::is('tentang*') ? 'style=color:##028E83;' : '' }}>Tentang
                                        Kami</span></a>
                            </li>
                            <li class="{{ Request::is('hubungi*') ? 'active' : '' }}" style="margin-right: 50px;">
                                <a href="{{ url('/hubungi') }}"><span
                                        {{ Request::is('hubungi*') ? 'style=color:##028E83;' : '' }}>Hubungi
                                        Kami</span></a>
                            </li>
                            <li class="has-submenu" style="margin-right: 50px;">
                                <a href="#">Lainnya <i class="fas fa-chevron-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="https://drive.google.com/file/d/1FiVmF5_hau_8xRKfvoM8Wel1tUezCzA_/view"
                                            target="_blank">Brosur</a></li>
                                </ul>
                            </li>

                            {{-- <li class="login-link" style="margin-right: 20px;"><a href="login.html">Login / Signup</a></li> --}}
                        </ul>

                    </div>
                    <ul class="nav header-navbar-rht">
                        {{-- @if ($userLoggedIn) --}}
                        <li class="searchbar searchbar-fourteen me-2">
                            <a href="javascript:void(0);"><i class="feather-search"></i></a>
                            <div class="togglesearch">
                                <form action="search-2.html">
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                            </div>
                        </li>
                        {{-- @endif --}}

                        {{-- <li class="login-link"><a href="login-email.html">Login / Signup</a></li> --}}
                        <li class="login-in-fourteen">
                            <a href="{{ route('login_email') }}" class="btn reg-btn"><i
                                    class="feather-user me-2"></i>Masuk</a>
                        </li>
                        <li class="login-in-fourteen">
                            <a href="signup.html" class="btn btn-primary reg-btn reg-btn-fourteen"><i
                                    class="feather-user me-2"></i>Daftar</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- /Header -->
        <!-- Breadcrumb -->
        <div class="breadcrumb-bar-two">
            <div class="container">
                <div class="row align-items-center inner-banner">
                    <div class="col-md-12 col-12 text-center">
                        <h2 class="breadcrumb-title" style="color: #028E83;">Artikel</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('/blog') }}">Artikel</a></li>
                                <li class="breadcrumb-item" aria-current="page">Artikel Detail</li>
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
                    <div class="col-lg-8 col-md-12">
                        <div class="blog-view">
                            <div class="blog blog-single-post">
                                <div class="blog-image">
                                    <a href="javascript:void(0);"><img alt="blog-image"
                                            src="{{ asset('public/uploads/' . $article->banner) }}"
                                            class="img-fluid"></a>
                                </div>
                                <h3 class="blog-title">{{ $article->title }}</h3>
                                <div class="blog-info clearfix">
                                    <div class="post-left">
                                        <ul>
                                            <li>
                                                <div class="post-author">

                                                    <span><i class="far fa-user"
                                                            style="color: #028E83;"></i>{{ $article->user->name }}</span>
                                                </div>
                                            </li>
                                            <li><i class="far fa-clock"
                                                    style="color: #028E83;"></i>{{ $article->tgl }}</li>
                                            <li><i class="fa fa-tags" style="color: #028E83;"></i>
                                                @php
                                                    $tags = json_decode($article->category_id, true);
                                                @endphp

                                                @if (is_array($tags))
                                                    @foreach ($tags as $tag)
                                                        <span class="badge"
                                                            style="background-color: #028E83; color: white; font-size: 12px;">
                                                            {{ $tag['value'] }}
                                                        </span>
                                                    @endforeach
                                                @endif
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- <div class="blog-content" style="text-align: justify;">
                                @foreach (explode("\n", $article->isi) as $paragraph)
                                    <p>{{ $paragraph }}</p>
                        @endforeach
                    </div> --}}
                                <div class="blog-content" style="text-align: justify;">
                                    {!! nl2br($article->isi) !!}
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Blog Sidebar -->
                    <div class="col-lg-4 col-md-12 sidebar-right">

                        <!-- Search -->
                        <div class="card search-widget">
                            <div class="card-body">
                                <form class="search-form">
                                    <div class="input-group">
                                        <input type="text" id="searchInput" placeholder="Search..."
                                            class="form-control">
                                        <button type="submit" class="btn btn-primary"><i
                                                class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /Search -->

                        <!-- Latest Posts -->
                        <div class="card post-widget">
                            <div class="card-header">
                                <h4 class="card-title">Latest Posts</h4>
                            </div>
                            <div class="card-body">
                                <ul class="latest-posts">
                                    @foreach ($articles as $key => $article)
                                        <li>
                                            <div class="post-thumb">
                                                <a href={{ route('blog-details', ['id' => $article->id]) }}>
                                                    <img class="img-fluid"
                                                        src="{{ asset('public/uploads/' . $article->banner) }}"
                                                        alt="blog-image">
                                                </a>
                                            </div>
                                            <div class="post-info">
                                                <h4>
                                                    <a
                                                        href={{ route('blog-details', ['id' => $article->id]) }}">{{ $article->title }}</a>
                                                </h4>
                                                <p>{{ $article->tgl }}</p>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <!-- /Latest Posts -->
                    </div>
                    <!-- /Blog Sidebar -->

                </div>
            </div>

        </div>
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
                <img src="https://tesproskillv2.proskill.sch.id/public/assets/img/whatsapp.png" alt="WhatsApp Icon"
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
        <!-- Footer -->
        <footer class="footer footer-one footer-fourteen footer-twelve">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="footer-widget footer-about">
                                <div class="footer-logo">
                                    <a href="{{ url('/') }}"><img
                                            src="https://tesproskillv2.proskill.sch.id/public/assets/img/logo.png"
                                            alt="logo"></a>
                                </div>
                                <div class="footer-about-content ">
                                    <p style=" text-align: justify;">"ProSkill Akademia" BERKOMITMEN membantu
                                        memudahkan Anda
                                        menguasai TEKNOLOGI KOMPUTER
                                        dengan CEPAT dan BIAYA TERJANGKAU. Pembelajaran dengan metode PRAKTEK dan
                                        dibimbing
                                        langsung oleh INSTRUKTUR yang KOMPETEN.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="footer-widget footer-menu">
                                        <h2 class="footer-title">Menu</h2>
                                        <ul>
                                            <li><a href="{{ url('/') }}">Home</a></li>
                                            <li><a href="{{ url('/blog') }}">Artikel</a></li>
                                            <li><a href="{{ url('/about_us') }}">Tentang Kami</a></li>
                                            <li><a href="{{ url('/contact_us') }}">Hubungi Kami</a></li>
                                            <li><a href="https://drive.google.com/file/d/1FiVmF5_hau_8xRKfvoM8Wel1tUezCzA_/view"
                                                    target="_blank">Lihat Brosur</a></li>

                                            {{-- <li><a href="javascript:void(0);">Consult</a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="footer-widget footer-menu">
                                        {{-- <h2 class="footer-title">Specialities</h2>
                                <ul>
                                    <li><a href="javascript:void(0);">Neurology</a></li>
                                    <li><a href="javascript:void(0);">Cardiologist</a></li>
                                    <li><a href="javascript:void(0);">Dentist</a></li>
                                </ul> --}}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-4">
                                    <div class="footer-widget footer-contact">
                                        <h2 class="footer-title">Hubungi Kami</h2>
                                        <div class="footer-contact-info">

                                            <div class="footer-address">
                                                <p><i class="feather-map-pin"></i> Jl. H. Ungar No.2C, Tj. Ayun Sakti,
                                                    Kec.
                                                    Bukit Bestari, Kota Tanjung Pinang, Kepulauan Riau 29113</p>
                                            </div>
                                            <div class="footer-address">
                                                <p><i class="feather-phone-call"></i> +62 8126 6187 125</p>
                                            </div>
                                            <div class="footer-address mb-0">
                                                <p><i class="feather-mail"></i> admin@proskill.sch.id</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-7">
                            <div class="footer-widget">
                                <h2 class="footer-title">Sosial Media</h2>
                                <div class="subscribe-form">
                                    {{-- <form action="#">
                                <input type="email" class="form-control" placeholder="Enter Email">
                                <button type="submit" class="btn">Submit</button>
                            </form> --}}
                                </div>
                                <div class="social-icon">
                                    <ul>
                                        {{-- <li>
                                    <a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
                                </li> --}}
                                        <li>
                                            <a href="https://www.instagram.com/proskillakademia?igsh=MTJzdjNteGNrMGVpOA== "
                                                target="_blank"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/@ProSkillAkademia" target="_blank"><i
                                                    class="fab fa-youtube"></i></a>
                                        </li>
                                        {{-- <li>
                                    <a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
                                </li> --}}
                                        <li>
                                            <a href="https://www.linkedin.com/company/proskill-akademia/;"
                                                target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <!-- Copyright -->
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="copyright-text">
                                    <p class="mb-0"> Copyright © 2024 ProSkill Akademia</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">

                                <!-- Copyright Menu -->
                                <div class="copyright-menu">
                                    <ul class="policy-menu">
                                        {{-- <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="terms-condition.html">Terms and Conditions</a></li> --}}
                                        <li><a href="{{ route('show_login') }} " target="_blank">Login Admin</a></li>
                                    </ul>
                                </div>
                                <!-- /Copyright Menu -->

                            </div>
                        </div>
                    </div>
                    <!-- /Copyright -->
                </div>
            </div>
        </footer>
        <!-- /Footer -->
        <!-- Cursor -->
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>
        <!-- /Cursor -->

    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="https://tesproskillv2.proskill.sch.id/public/assets/js/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="https://tesproskillv2.proskill.sch.id/public/assets/js/bootstrap.bundle.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://tesproskillv2.proskill.sch.id/public/assets/js/owl.carousel.min.js"></script>

    <!-- Slick JS -->
    <script src="https://tesproskillv2.proskill.sch.id/public/assets/js/slick.js"></script>

    <!-- BacktoTop JS -->
    <script src="https://tesproskillv2.proskill.sch.id/public/assets/js/backToTop.js"></script>

    <!-- Datepicker JS -->
    <script src="https://tesproskillv2.proskill.sch.id/public/assets/js/moment.min.js"></script>
    <script src="https://tesproskillv2.proskill.sch.id/public/assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Animation JS -->
    <script src="https://tesproskillv2.proskill.sch.id/public/assets/js/aos.js"></script>

    <!-- Custom JS -->
    <script src="https://tesproskillv2.proskill.sch.id/public/assets/js/script.js"></script>


</body>

</html>

@section('title', 'ProSkill Akademia | artikel Detail')
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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Detail Artikel</h1>
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
                        <a href="{{ route('artikel') }}">
                            Artikel
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li>
                        Artikel Detail
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- News Standard Section Start -->
    <section class="news-standard fix section-padding">
        <div class="container">

            <div class="row g-5">
                <div class="col-12 col-lg-8">
                    <div class="blog-post-details">
                        <div class="single-blog-post">

                            <div class="post-featured-thumb bg-cover"
                                style="background-image: url('assets/img/news/post-4.jpg');"></div>
                            <div class="post-content">
                                <ul class="post-list d-flex align-items-center">
                                    <li>
                                        <i class="fa-regular fa-user"></i>
                                        {{ $article->user->name }}
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-calendar-days"></i>
                                        {{ $article->tgl }}
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-tag"></i>
                                        <?php
                                        $category = json_decode($article->category);
                                        foreach ($category as $item) {
                                            echo $item->value . ' ';
                                        }
                                        ?>
                                    </li>
                                </ul>
                                <h3>From without content
                                    style without </h3>
                                <p class="mb-3">
                                    Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    of
                                    magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation
                                    ullamco
                                    laboris nisi ut aliquip ex ea dolor commodo consequat. Duis aute irure and dolor in
                                    reprehenderit.
                                </p>
                                <p class="mb-3">
                                    The is ipsum dolor sit amet consectetur adipiscing elit. Fusce eleifend porta arcu
                                    In
                                    hac habitasse the is platea augue thelorem turpoi dictumst. In lacus libero faucibus
                                    at
                                    malesuada sagittis placerat eros sed istincidunt augue ac ante rutrum sed the is
                                    sodales
                                    augue consequat.
                                </p>
                                <p>
                                    Nulla facilisi. Vestibulum tristique sem in eros eleifend imperdiet. Donec quis
                                    convallis neque. In id lacus pulvinar lacus, eget vulputate lectus. Ut viverra
                                    bibendum
                                    lorem, at tempus nibh mattis in. Sed a massa eget lacus consequat auctor.
                                </p>
                                <div class="hilight-text mt-4 mb-4">
                                    <p>
                                        Pellentesque sollicitudin congue dolor non aliquam. Morbi volutpat, nisi vel
                                        ultricies <br> urnacondimentum, sapien neque lobortis tortor, quis efficitur mi
                                        ipsum eu metus. Praesent eleifend <br> orci sit amet est vehicula.
                                    </p>
                                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.71428 20.0711H0.5V5.64258H14.9286V20.4531L9.97665 30.3568H3.38041L8.16149 20.7947L8.5233 20.0711H7.71428Z"
                                            stroke="#F39F5F" />
                                        <path
                                            d="M28.2846 20.0711H21.0703V5.64258H35.4989V20.4531L30.547 30.3568H23.9507L28.7318 20.7947L29.0936 20.0711H28.2846Z"
                                            stroke="#F39F5F" />
                                    </svg>
                                </div>
                                <p class="mt-4 mb-5">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in
                                    hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur,
                                    ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue.
                                    Vestibulum
                                    auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh,
                                    at
                                    maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales.
                                    Quisque
                                    sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros.
                                </p>
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="details-image">
                                            <img src="assets/img/news/post-5.jpg" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="details-image">
                                            <img src="assets/img/news/post-6.jpg" alt="img">
                                        </div>
                                    </div>
                                </div>

                                <p class="pt-5">
                                    Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    of
                                    magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation
                                    ullamco
                                    laboris nisi ut aliquip ex ea dolor commodo consequat. Duis aute irure and dolor in
                                    reprehenderit.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore
                                    et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat. Duis
                                    aute
                                    irure and dolor in reprehenderit.
                                </p>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="main-sidebar">
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Search</h3>
                            </div>
                            <div class="search-widget">
                                <form action="#">
                                    <input type="text" placeholder="Search here">
                                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Recent Post</h3>
                            </div>
                            @foreach ($artikel as $article)
                                <div class="recent-post-area">

                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="{{ asset('public/uploads/' . $article->banner) }}"
                                                style="width: 78px; height: 79px; object-fit: cover;">
                                        </div>
                                        <div class="recent-content">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    {{ $article->tgl }}
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="news-details.html">
                                                    {{ $article->title }}
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Tags</h3>
                            </div>
                            <div class="news-widget-categories">

                                <div class="tagcloud">
                                    @foreach ($artikel as $article)
                                        <a href="news-standard.html"><?php
                                        $category = json_decode($article->category);
                                        foreach ($category as $item) {
                                            echo $item->value . ' ';
                                        }
                                        ?></a>
                                    @endforeach
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

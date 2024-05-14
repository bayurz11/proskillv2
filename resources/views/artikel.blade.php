@section('title', 'ProSkill Akademia | Artikel')
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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Artikel</h1>
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
                        Artikel
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- News Standard Section Start -->
    <section class="news-standard fix section-padding">
        <div class="container">

            <div class="row g-4">
                <div class="col-12 col-lg-8">
                    <div class="news-standard-wrapper">
                        @foreach ($artikel as $article)
                            <div class="news-standard-items">
                                <div class="news-thumb">
                                    <img src="{{ asset('public/uploads/' . $article->banner) }}">
                                    <div class="post">
                                        <span> <?php
                                        $category = json_decode($article->category);
                                        foreach ($category as $item) {
                                            echo $item->value . ' ';
                                        }
                                        ?></span>

                                    </div>
                                </div>
                                <div class="news-content">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            {{ $article->tgl }}
                                        </li>
                                        <li>
                                            <i class="far fa-user"></i>
                                            {{ $article->user->name }}
                                        </li>
                                    </ul>
                                    <h3>
                                        <a href="news-details.html">{{ $article->title }}</a>
                                    </h3>
                                    <p>
                                        {!! nl2br(substr($article->content, 0, 250)) !!}
                                    </p>
                                    <a href="news-details.html" class="theme-btn mt-4">
                                        Read More
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        <div class="page-nav-wrap pt-5 text-center">
                            <ul>
                                <li><a class="page-numbers" href="#"><i class="fa-solid fa-arrow-left-long"></i></a>
                                </li>
                                <li><a class="page-numbers" href="#">01</a></li>
                                <li><a class="page-numbers" href="#">02</a></li>
                                <li><a class="page-numbers" href="#">03</a></li>
                                <li><a class="page-numbers" href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                                </li>
                            </ul>
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

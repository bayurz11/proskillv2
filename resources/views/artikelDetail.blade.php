@section('title', 'ProSkill Akademia | artikel Detail')
@extends('layout.mainlayout')
@section('content')

    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover"
        style="background-image: url('{{ asset('public/assets/img/breadcrumb.png') }}');">
        <div class="line-shape">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/line.png') }}" alt="shape-img">
        </div>
        <div class="plane-shape float-bob-y">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/plane.png') }}" alt="shape-img">
        </div>
        <div class="doll-shape float-bob-x">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/doll.png') }}" alt="shape-img">
        </div>
        <div class="parasuit-shape float-bob-y">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/parasuit.png') }}" alt="shape-img">
        </div>
        <div class="frame-shape">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/frame.png') }}" alt="shape-img">
        </div>
        <div class="bee-shape float-bob-x">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/bee.png') }}" alt="shape-img">
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
                                style="background-image: url('{{ asset('public/uploads/' . $artikel->banner) }}');">
                            </div>
                            <div class="post-content">
                                <ul class="post-list d-flex align-items-center">
                                    <li>
                                        <i class="fa-regular fa-user"></i>
                                        {{ $artikel->user->name }}
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-calendar-days"></i>
                                        {{ $artikel->tgl }}
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-tag"></i>
                                        <?php
                                        $category = json_decode($artikel->category);
                                        foreach ($category as $item) {
                                            echo $item->value . ' ';
                                        }
                                        ?>
                                    </li>
                                </ul>
                                <h3>{{ $artikel->title }} </h3>
                                <p class="mb-3" align="justify">
                                    <?php
                                    // Fungsi callback untuk mengganti atribut lebar dan tinggi gambar
                                    function replaceImageSize($matches) {
                                    $src = $matches[1];
                                     // Mendapatkan ukuran gambar sesuai dengan jenis perangkat
                                    $width = 770; // Lebar default untuk desktop
                                    $height = 460; // Tinggi default untuk desktop

                                // Mendeteksi apakah pengguna mengakses dari perangkat ponsel
                                if( preg_match('/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i', $_SERVER['HTTP_USER_AGENT']) ) {
                                    $width = 300; // Lebar untuk ponsel
                                    $height = 200; // Tinggi untuk ponsel
                                     }   

                                        // Mengganti atribut lebar dan tinggi gambar
                                    return str_replace($src, $src . '" width="' . $width . '" height="' . $height, $matches[0]);
                                    }

                                    // Memisahkan konten menjadi paragraf-paragraf
                                    $paragraphs = explode('</p>', $artikel->content);

                                    // Mengganti atribut lebar dan tinggi gambar dalam setiap paragraf
                                    foreach ($paragraphs as $paragraph) {
                                    echo '<p align="justify">';
                                    $content_with_resized_images = preg_replace_callback('/<img.*?src=["\'](.*?)["\'].*?>/', 'replaceImageSize', $paragraph);
                                    echo $content_with_resized_images;
                                    echo '</p>';
                                }
                                ?>
                                </p>
                                {{-- <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="details-image">
                                            <img src="assets/img/news/post-5.jpg" alt="img">
                                        </div>
                                    </div>

                                </div> --}}
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
                                <form id="searchForm" action="#" method="GET">
                                    <input id="searchInput" type="text" placeholder="Search here">
                                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Postingan Terbaru</h3>
                            </div>
                            @foreach ($articel as $artikel)
                                <div class="recent-post-area">
                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="{{ asset('public/uploads/' . $artikel->banner) }}"
                                                style="width: 78px; height: 79px; object-fit: cover;">
                                        </div>
                                        <div class="recent-content">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    {{ $artikel->tgl }}
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="{{ route('artikel_detail', ['id' => $artikel->id]) }}">
                                                    {{ $artikel->title }}
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
                                    @foreach ($articel as $artikel)
                                        <a href="news-standard.html"><?php
                                        $category = json_decode($artikel->category);
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

                <script>
                    document.getElementById('searchForm').addEventListener('submit', function(event) {
                        event.preventDefault(); // Prevent the form from submitting
                        var searchText = document.getElementById('searchInput').value.toLowerCase();
                        var items = document.querySelectorAll('.recent-content h6 a, .tagcloud a');
                        items.forEach(function(item) {
                            var text = item.textContent.toLowerCase();
                            if (text.includes(searchText)) {
                                item.style.color = 'red'; // You can change the style here
                            } else {
                                item.style.color = ''; // Reset style
                            }
                        });
                    });
                </script>

            </div>

        </div>
    </section>
    <!-- Whatsapp popup -->
    <div id="whatsapp-popup" style="display: none; position: fixed; bottom: 20px; right: 20px; z-index: 9999; cursor: move;"
        ontouchstart="handleTouchStart(event)" ontouchmove="handleTouchMove(event)">
        <a href="https://wa.me/6281266187125?" target="_blank">
            <img src="{{ asset('public/assets/img/breadcrumb-shape/Whatsapp.png') }}" alt="WhatsApp Icon"
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

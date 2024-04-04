@section('title', 'ProSkill Akademia | Artikel')
<?php $page = 'blog-grid'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar-two">
        <div class="container">
            <div class="row align-items-center inner-banner">
                <div class="col-md-12 col-12 text-center">
                    <h2 class="breadcrumb-title" style="color: #028E83;">Artikel</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item" aria-current="page">Artikel</li>
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
                    @foreach ($articles->sortByDesc('created_at') as $key => $article)
                        <!-- Blog Post -->

                        <div class="blog">
                            <div class="blog-image">
                                <a href="{{ route('blog-details', ['id' => $article->id]) }}">
                                    <img class="img-fluid" src="{{ asset('uploads/' . $article->banner) }}" alt="Gambar"
                                        width="1200" height="800">
                                </a>

                            </div>
                            <h3 class="blog-title"><a href="blog-details.html">{{ $article->title }}</a></h3>
                            <div class="blog-info clearfix">
                                <div class="post-left">
                                    <ul>
                                        <li>
                                            <div class="post-author">
                                                <span><i class="far fa-user"
                                                        style="color: #028E83;"></i>{{ $article->user->name }}</span>
                                            </div>
                                        </li>
                                        <li><i class="far fa-clock" style="color: #028E83;"></i>{{ $article->tgl }}</li>
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
                            <div class="blog-content">
                                <p style="text-align: justify;">
                                    {!! nl2br(substr($article->isi, 0, 250)) !!}....
                                </p>
                                <a href="{{ route('blog-details', ['id' => $article->id]) }}" class="btn btn-primary">Baca
                                    Selengkapnya</a>
                                {{-- <button id="view-article-btn-{{ $key }}" class="btn btn-primary">Lihat
                                    Artikel</button> --}}
                                {{-- <div id="full-article-{{ $key }}" style="display: none;">

                                </div> --}}
                            </div>


                            {{-- <script>
                                document.getElementById('view-article-btn-{{ $key }}').addEventListener('click', function() {
                                    var btn = this;
                                    var fullArticleDiv = document.getElementById('full-article-{{ $key }}');
                                    if (fullArticleDiv.style.display === 'none') {
                                        var isiArtikel = '{!! nl2br(substr($article->isi, 0, 5000)) !!}';
                                        fullArticleDiv.innerHTML = isiArtikel;
                                        fullArticleDiv.style.display = 'block';
                                        btn.textContent = 'Lihat lebih sedikit';
                                    } else {
                                        fullArticleDiv.style.display = 'none';
                                        btn.textContent = 'Lihat Artikel';
                                    }
                                });
                            </script> --}}

                        </div>
                    @endforeach

                    <!-- /Blog Post -->
                    <!-- Blog Post -->
                    @foreach ($links as $key => $link)
                        <div class="blog">
                            <div class="blog-image">
                                <div class="video">
                                    <iframe
                                        src="https://www.youtube.com/embed/{{ $link->isiyt }}?rel=0&amp;controls=0&amp;showinfo=0"
                                        width="940" allowfullscreen></iframe>
                                </div>


                            </div>
                            <h3 class="blog-title">{{ $link->titleYt }}

                            </h3>
                            <div class="blog-info clearfix">
                                <div class="post-left">
                                    <ul>
                                        <li>
                                            <div class="post-author">

                                                <span><i class="far fa-user"
                                                        style="color: #028E83;"></i>{{ $link->user->name }}</span>
                                            </div>
                                        </li>
                                        <li><i class="far fa-clock" style="color: #028E83;"></i>{{ $link->tglup }}</li>

                                        <li><i class="fa fa-tags" style="color: #028E83;"></i>
                                            @php
                                                $tags = json_decode($link->category, true);
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

                        </div>
                    @endforeach
                    <!-- /Blog Post -->

                    <!-- Blog Pagination -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="blog-pagination">
                                <nav>
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"><i
                                                    class="fas fa-angle-double-left"></i></a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">1 <span
                                                    class="visually-hidden">(current)</span></a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i
                                                    class="fas fa-angle-double-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Blog Pagination -->

                </div>

                <!-- Blog Sidebar -->
                <div class="col-lg-4 col-md-12 sidebar-right ">

                    <!-- Search -->
                    <div class="card search-widget">
                        <div class="card-body">
                            <form class="search-form">
                                <div class="input-group">
                                    <input type="text" id="searchInput" placeholder="Search..." class="form-control">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
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
                                                <img class="img-fluid" src="{{ asset('uploads/' . $article->banner) }}"
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
            <img src="assets/img/whatsapp.png" alt="WhatsApp Icon" style="width: 50px; height: auto;">
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

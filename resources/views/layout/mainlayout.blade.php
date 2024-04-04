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
    <meta property="og:image" content="assets/img/favicon.png">
    <meta name="google-site-verification" content="hCMbf-C99zBHv278k_biSK9VKVvC8tMprI1k7Dl7NkQ" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    @include('layout.partials.head')
    <!-- Main Wrapper -->
    <div class="main-wrapper home-twelve">


        @include('layout.partials.header')
        @yield('content')
        @include('layout.partials.footer')
        @component('components.cursor')
        @endcomponent
        <!-- /Main Wrapper -->
        @component('components.modalpopup')
        @endcomponent
        @include('layout.partials.footer-scripts')
    </div>
</head>

</html>

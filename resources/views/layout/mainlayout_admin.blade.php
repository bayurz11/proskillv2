<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="ProSkill Akademia - Lembaga kursus komputer terbaik untuk pengembangan kemampuan teknologi Anda. Temukan layanan kursus yang dipersonalisasi dan berorientasi pada kebutuhan Anda.">
    <meta name="keywords"
        content="Proskill, Proskill Akademia, teknologi komputer, kursus komputer, proskill akademia, proskill, kursus komputer tanjungpinang">
    <meta name="author" content="Lembaga kursus komputer | ProSkill Akademia">
    <meta property="og:type" content="website">
    <meta property="og:title" content="ProSkill Akademia - Lembaga kursus komputer terbaik">
    <meta property="og:description"
        content="ProSkill Akademia adalah lembaga kursus komputer terkemuka yang menyediakan layanan kursus terbaik dalam pengembangan keterampilan teknologi.">
    <meta property="og:image" content="assets/img/preview-banner.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://proskill.sch.id/">
    @include('layout.partials.admin.head_admin')
    <!-- Favicon -->
    <link rel="shortcut icon" href="public/assets_admin/images/favicon.png" />
    @if (session('success'))
        <div id="success-message" class="alert alert-success"
            style="position: fixed; top: 150px; right: 20px; z-index: 1000;" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div id="error-message" class="alert alert-danger"
            style="position: fixed; top: 150px; right: 20px; z-index: 1000;" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <script>
        // Ambil elemen pesan keberhasilan
        var successMessage = document.getElementById('success-message');
        // Ambil elemen pesan kesalahan
        var errorMessage = document.getElementById('error-message');

        // Tampilkan pesan keberhasilan
        if (successMessage) {
            // Tunggu 3 detik kemudian hilangkan pesan
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 2000);
        }

        // Tampilkan pesan kesalahan
        if (errorMessage) {
            // Tunggu 3 detik kemudian hilangkan pesan
            setTimeout(function() {
                errorMessage.style.display = 'none';
            }, 2000);
        }
    </script>

</head>

<body>
    <div class="main-wrapper">
        @include('layout.partials.admin.nav_admin')
        <div class="page-wrapper">
            @include('layout.partials.admin.header_admin')
            @yield('content')
            @include('layout.partials.admin.footer_admin-scripts')
        </div>
    </div>
</body>

</html>

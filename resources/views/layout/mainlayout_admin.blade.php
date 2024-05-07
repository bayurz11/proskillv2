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
    <script>
        function showMessage(message) {
            var div = document.createElement('div');
            div.style.position = 'fixed';
            div.style.top = '20px';
            div.style.right = '20px';
            div.style.backgroundColor = 'green';
            div.style.color = '#fff';
            div.style.padding = '20px';
            div.style.borderRadius = '5px';
            div.style.zIndex = '9999';
            div.style.transition = 'opacity 0.5s ease-in-out';

            // Buat elemen span untuk ikon
            var icon = document.createElement('em');
            icon.className = 'icon ni ni-check-thick';
            icon.style.marginRight = '10px';
            div.appendChild(icon);

            // Buat elemen span untuk pesan
            var span = document.createElement('span');
            span.textContent = message;
            div.appendChild(span);

            document.body.appendChild(div);

            setTimeout(function() {
                div.style.opacity = '0';
                setTimeout(function() {
                    document.body.removeChild(div);
                }, 500);
            }, 4000);
        }

        @if (session('success'))
            showMessage('{{ session('success') }}');
        @endif
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

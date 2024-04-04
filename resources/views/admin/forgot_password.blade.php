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
    <link rel="shortcut icon" href="assets_admin/img/favicon.png" type="image/x-icon">
    <title>ProSkill Akademia | Forgot Password</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets_admin/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets_admin/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets_admin/plugins/fontawesome/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets_admin/css/custom.css">

</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="col-md-4 mx-auto text-center">
                    <div class="card">
                        <div class="card-body login-right">
                            <div class="login-right-wrap">
                                <img src="assets_admin/img/logo.png" alt="Logo" class="mb-2" width="200"
                                    height="40">

                                <h1 style="color: #028E83;">Forgot Password</h1>
                                <p class="account-subtitle" style="color: #FE9900;">Access to our dashboard</p>

                                <!-- Error Alert -->
                                @if ($errors->any())
                                    <div class="alert alert-danger" role="alert">
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <!-- Form -->
                                <form action="{{ route('password.email') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <input class="form-control" type="email" placeholder="Email" name="email"
                                            id="email">
                                    </div>

                                    <div class="mb-3">
                                        <button class="btn btn-primary w-100" type="submit"
                                            style="background-color: #028E83;">Forgot Password</button>
                                    </div>

                                </form>

                                <!-- /Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets_admin/js/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets_admin/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="assets_admin/js/script.js"></script>

</body>

</html>

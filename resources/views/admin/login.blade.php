

<!DOCTYPE html>

<html lang="en">

<head>

    <title>ProSkill Akademia | Login Admin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="public/assets_admin/vendors/core/core.css">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="public/assets_admin/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="public/assets_admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="public/assets_admin/css/demo1/style.css">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="public/assets_admin/images/favicon.png" />
    
    @if (session('success'))
        <div id="success-message" class="notify alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div id="error-message" class="notify alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <style>
        .notify {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            padding: 15px 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: none;
            opacity: 0;
            transition: opacity 0.3s, top 0.3s;
        }

        .notify.show {
            display: block;
            opacity: 1;
            top: 50px;
        }

        .notify.alert-success {
            background-color: #d4edda;
            color: #155724;
            border-color: #c3e6cb;
        }

        .notify.alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border-color: #f5c6cb;
        }
    </style>

    <script>
        // Fungsi untuk menampilkan notifikasi
        function showNotification(element) {
            if (element) {
                element.classList.add('show');
                // Tunggu 3 detik kemudian hilangkan pesan
                setTimeout(function() {
                    element.classList.remove('show');
                }, 3000);
            }
        }

        // Ambil elemen pesan keberhasilan
        var successMessage = document.getElementById('success-message');
        // Ambil elemen pesan kesalahan
        var errorMessage = document.getElementById('error-message');

        // Tampilkan pesan keberhasilan
        showNotification(successMessage);

        // Tampilkan pesan kesalahan
        showNotification(errorMessage);
    </script>
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-4 mx-auto text-center">
                        <div class="card" style="width: 100%;">
                            <div class="row">
                                <div class="auth-form-wrapper px-4 py-5">
                                    <a href="{{ route('/') }}" class="d-block mb-2">
                                        <img src="public/assets_admin/images/logo1.svg" alt="ProSkill Logo"
                                            style="max-width: 200px;">
                                    </a>


                                    <h5 class="text-muted fw-normal mb-4">Selamat datang! Masuk ke akun Anda.</h5>
                                    <form class="forms-sample" method="POST" action="{{ route('loginProses') }}">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email" autofocus>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                autocomplete="current-password" placeholder="Password">
                                        </div>
                                        <div class="form-check mb-3">
                                            <input type="checkbox" class="form-check-input" id="authCheck">
                                            <label class="form-check-label" for="authCheck">
                                                Remember me
                                            </label>
                                        </div>
                                        <div>
                                            <button type="submit"
                                                class="btn btn-primary text-white me-2 mb-2 mb-md-0">Masuk</button>
                                            
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- core:js -->
    <script src="public/assets_admin/vendors/core/core.js"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="public/assets_admin/vendors/sweetalert2/sweetalert2.min.js"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="public/assets_admin/vendors/feather-icons/feather.min.js"></script>
    <script src="public/assets_admin/js/template.js"></script>
    <!-- endinject -->

    </script>
</body>

</html>

@if (session('success'))
    <div id="success-message" class="alert alert-success" style="position: fixed; top: 70px; right: 20px; z-index: 1000;">
        {{ session('success') }}
    </div>
@endif
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
    <link rel="stylesheet" href="../../../assets_admin_admin/vendors/core/core.css">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="../../../assets_admin/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="../../../assets_admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets_admin/css/demo1/style.css">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="../../../assets_admin/images/favicon.png" />
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
                                        <img src="../../../assets_admin/images/logo1.svg" alt="ProSkill Logo"
                                            style="max-width: 200px;">
                                    </a>


                                    <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>
                                    <form class="forms-sample" method="POST" action="{{ route('loginProses') }}">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email">
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
                                            <button type="button"
                                                class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                                                <i class="btn-icon-prepend" data-feather="twitter"></i>
                                                Sign up with Twitter
                                            </button>
                                        </div>
                                        <a href="{{ route('register_admin') }}" class="d-block mt-3 text-muted">Already
                                            a
                                            user? Sign in</a>
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
    <script src="../../../assets_admin/vendors/core/core.js"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="../../../assets_admin/vendors/sweetalert2/sweetalert2.min.js"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="../../../assets_admin/vendors/feather-icons/feather.min.js"></script>
    <script src="../../../assets_admin/js/template.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
    <script>
        // Ambil elemen pesan keberhasilan
        var successMessage = document.getElementById('success-message');

        // Tampilkan pesan keberhasilan
        if (successMessage) {
            // Tunggu 3 detik kemudian hilangkan pesan
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 1000);
        }
    </script>
</body>

</html>

<!-- Footer -->
<footer class="footer footer-one footer-fourteen footer-twelve">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="footer-widget footer-about">
                        <div class="footer-logo">
                            <a href="{{ url('/') }}"><img src="assets/img/logo.png" alt="logo"></a>
                        </div>
                        <div class="footer-about-content ">
                            <p style=" text-align: justify;">"ProSkill Akademia" BERKOMITMEN membantu memudahkan Anda
                                menguasai TEKNOLOGI KOMPUTER
                                dengan CEPAT dan BIAYA TERJANGKAU. Pembelajaran dengan metode PRAKTEK dan dibimbing
                                langsung oleh INSTRUKTUR yang KOMPETEN.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">Menu</h2>
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/blog') }}">Artikel</a></li>
                                    <li><a href="{{ url('/about_us') }}">Tentang Kami</a></li>
                                    <li><a href="{{ url('/contact_us') }}">Hubungi Kami</a></li>
                                    <li><a href="https://drive.google.com/file/d/1FiVmF5_hau_8xRKfvoM8Wel1tUezCzA_/view"
                                            target="_blank">Lihat Brosur</a></li>

                                    {{-- <li><a href="javascript:void(0);">Consult</a></li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="footer-widget footer-menu">
                                {{-- <h2 class="footer-title">Specialities</h2>
                                <ul>
                                    <li><a href="javascript:void(0);">Neurology</a></li>
                                    <li><a href="javascript:void(0);">Cardiologist</a></li>
                                    <li><a href="javascript:void(0);">Dentist</a></li>
                                </ul> --}}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4">
                            <div class="footer-widget footer-contact">
                                <h2 class="footer-title">Hubungi Kami</h2>
                                <div class="footer-contact-info">

                                    <div class="footer-address">
                                        <p><i class="feather-map-pin"></i> Jl. H. Ungar No.2C, Tj. Ayun Sakti, Kec.
                                            Bukit Bestari, Kota Tanjung Pinang, Kepulauan Riau 29113</p>
                                    </div>
                                    <div class="footer-address">
                                        <p><i class="feather-phone-call"></i> +62 8126 6187 125</p>
                                    </div>
                                    <div class="footer-address mb-0">
                                        <p><i class="feather-mail"></i> admin@proskill.sch.id</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="footer-widget">
                        <h2 class="footer-title">Sosial Media</h2>
                        <div class="subscribe-form">
                            {{-- <form action="#">
                                <input type="email" class="form-control" placeholder="Enter Email">
                                <button type="submit" class="btn">Submit</button>
                            </form> --}}
                        </div>
                        <div class="social-icon">
                            <ul>
                                {{-- <li>
                                    <a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
                                </li> --}}
                                <li>
                                    <a href="https://www.instagram.com/proskillakademia?igsh=MTJzdjNteGNrMGVpOA== "
                                        target="_blank"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/@ProSkillAkademia" target="_blank"><i
                                            class="fab fa-youtube"></i></a>
                                </li>
                                {{-- <li>
                                    <a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
                                </li> --}}
                                <li>
                                    <a href="https://www.linkedin.com/company/proskill-akademia/;" target="_blank"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <!-- Copyright -->
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="copyright-text">
                            <p class="mb-0"> Copyright © 2024 ProSkill Akademia</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">

                        <!-- Copyright Menu -->
                        <div class="copyright-menu">
                            <ul class="policy-menu">
                                {{-- <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="terms-condition.html">Terms and Conditions</a></li> --}}
                                <li><a href="{{ route('show_login') }} " target="_blank">Login Admin</a></li>
                            </ul>
                        </div>
                        <!-- /Copyright Menu -->

                    </div>
                </div>
            </div>
            <!-- /Copyright -->
        </div>
    </div>
</footer>
<!-- /Footer -->

<!-- Header -->
<header class="header header-fixed header-fourteen header-twelve">
    <div class="container">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="{{ url('/') }}">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="{{ url('/') }}" class="navbar-brand logo">
                    <img src="public/assets/img/logo1.svg" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="{{ url('/') }}" class="menu-logo">
                        <img src="public/assets/img/logo.png" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav">

                    <li class="{{ Request::is('/') ? 'active' : '' }}" style="margin-right: 50px;">
                        <a href="{{ url('/') }}"> <span
                                {{ Request::is('/') ? 'style=color:##028E83;' : '' }}>Home</span></a>
                    </li>
                    <li class="{{ Request::is('blog*') ? 'active' : '' }}" style="margin-right: 50px;">
                        <a href="{{ url('/blog') }}"><span
                                {{ Request::is('blog*') ? 'style=color:##028E83;' : '' }}>Artikel</span></a>
                    </li>
                    <li class="{{ Request::is('tentang*') ? 'active' : '' }}" style="margin-right: 50px;">
                        <a href="{{ url('/tentang') }}"><span
                                {{ Request::is('tentang*') ? 'style=color:##028E83;' : '' }}>Tentang Kami</span></a>
                    </li>
                    <li class="{{ Request::is('hubungi*') ? 'active' : '' }}" style="margin-right: 50px;">
                        <a href="{{ url('/hubungi') }}"><span
                                {{ Request::is('hubungi*') ? 'style=color:##028E83;' : '' }}>Hubungi Kami</span></a>
                    </li>
                    <li class="has-submenu" style="margin-right: 50px;">
                        <a href="#">Lainnya <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="https://drive.google.com/file/d/1FiVmF5_hau_8xRKfvoM8Wel1tUezCzA_/view"
                                    target="_blank">Brosur</a></li>
                        </ul>
                    </li>

                    {{-- <li class="login-link" style="margin-right: 20px;"><a href="login.html">Login / Signup</a></li> --}}
                </ul>

            </div>
            <ul class="nav header-navbar-rht">
                {{-- @if ($userLoggedIn) --}}
                <li class="searchbar searchbar-fourteen me-2">
                    <a href="javascript:void(0);"><i class="feather-search"></i></a>
                    <div class="togglesearch">
                        <form action="search-2.html">
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>
                    </div>
                </li>
                {{-- @endif --}}

                {{-- <li class="login-link"><a href="login-email.html">Login / Signup</a></li> --}}
                <li class="login-in-fourteen">
                    <a href="{{ route('login_email') }}" class="btn reg-btn"><i class="feather-user me-2"></i>Masuk</a>
                </li>
                <li class="login-in-fourteen">
                    <a href="signup.html" class="btn btn-primary reg-btn reg-btn-fourteen"><i
                            class="feather-user me-2"></i>Daftar</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!-- /Header -->

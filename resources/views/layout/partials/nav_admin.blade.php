<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Menu Utama</span>
                </li>
                <li class="{{ Request::is('index_admin') ? 'active' : '' }}">
                    <a href="{{ url('index_admin') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-vector"></i> <span> Penggaturan </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('show_home_setting') ? 'active' : '' }}"
                                href="{{ url('/show_home_setting') }}"> Home </a></li>
                        <li><a class="{{ Request::is('artikel') ? 'active' : '' }}" href="{{ url('/artikel') }}">
                                Artikel </a></li>
                        <li><a class="{{ Request::is('about_us') ? 'active' : '' }}" href="{{ url('/about_us') }}">
                                Tentang Kami </a></li>
                        <li><a class="{{ Request::is('contact_us') ? 'active' : '' }}" href="{{ url('/contact_us') }}">
                                Hubungi Kami </a></li>
                        <li><a class="{{ Request::is('category') ? 'active' : '' }}" href="{{ url('/category') }}">
                                Tag/kategori </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-users"></i> <span> Profile Setting </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('user_setting') ? 'active' : '' }}"
                                href="{{ url('/user_setting') }}"> User Setting </a></li>
                        <li><a class="{{ Request::is('profile_setting') ? 'active' : '' }}"
                                href="{{ url('/profile_setting') }}"> Admin Setting </a></li>
                    </ul>
                </li>

                <li class="{{ Request::is('kelas') ? 'active' : '' }}">
                    <a href="{{ url('/kelas') }}"><i class="fe fe-file"></i> <span>Kelas</span></a>
                </li>
                <li class="{{ Request::is('kertifikat') ? 'active' : '' }}">
                    <a href="{{ url('/sertifikat') }}"><i class="fe fe-file"></i> <span>Sertifikat</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->

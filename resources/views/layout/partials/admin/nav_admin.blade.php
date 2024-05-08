<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('dashboard') }}" class="sidebar-brand">
            <img src="public/assets_admin/images/logo1.svg" alt="Logo" style="height: 40px;">
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Pengaturan</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Halaman Beranda</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="emails">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/email/inbox.html" class="nav-link">Inbox</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/email/read.html" class="nav-link">Read</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/email/compose.html" class="nav-link">Compose</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="pages/apps/chat.html" class="nav-link">
                    <i class="link-icon" data-feather="book"></i>
                    <span class="link-title">Artikel</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#kelas" role="button" aria-expanded="false"
                    aria-controls="kelas">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Kelas</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="kelas">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/email/inbox.html" class="nav-link">Kelas Tatap Muka</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/email/read.html" class="nav-link">Kelas Online</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="pages/apps/calendar.html" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Calendar</span>
                </a>
            </li>
            <li class="nav-item nav-category">Inventaris</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#Inventaris" role="button" aria-expanded="false"
                    aria-controls="Inventaris">
                    <i class="link-icon" data-feather="feather"></i>
                    <span class="link-title">Barang</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="Inventaris">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/ui-components/accordion.html" class="nav-link">Accordion</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category">Keuangan</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#Keuangan" role="button" aria-expanded="false"
                    aria-controls="Keuangan">
                    <i class="link-icon" data-feather="anchor"></i>
                    <span class="link-title">Keuangan</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="Keuangan">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/advanced-ui/cropper.html" class="nav-link">Cropper</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Owl carousel</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/advanced-ui/sortablejs.html" class="nav-link">SortableJs</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/advanced-ui/sweet-alert.html" class="nav-link">Sweet Alert</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category">Kesiswaan</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#Kesiswaan" role="button"
                    aria-expanded="false" aria-controls="Kesiswaan">
                    <i class="link-icon" data-feather="anchor"></i>
                    <span class="link-title">Siswa</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="Kesiswaan">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/advanced-ui/cropper.html" class="nav-link">Cropper</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Owl carousel</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/advanced-ui/sortablejs.html" class="nav-link">SortableJs</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/advanced-ui/sweet-alert.html" class="nav-link">Sweet Alert</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
<nav class="settings-sidebar">
    <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
            <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted mb-2">Tema</h6>
        <div class="mb-3 pb-3 border-bottom">
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight"
                    value="sidebar-light" checked>
                <label class="form-check-label" for="sidebarLight">
                    Light
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark"
                    value="sidebar-dark">
                <label class="form-check-label" for="sidebarDark">
                    Dark
                </label>
            </div>
        </div>

    </div>
</nav>

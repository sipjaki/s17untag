<style>
    /* ========================================
       IMPORT POPPINS
    ======================================== */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

    /* ======================================================
       SIDEBAR STYLING (dengan smooth scroll & tanpa bullet)
       ====================================================== */

    /* --- Font & Base --- */
    .sidebar {
        font-family: 'Poppins', sans-serif;
        background: #ffffff;
        border-right: 1px solid #f0f2f5;
        box-shadow: 2px 0 12px rgba(0, 0, 0, 0.02);
        padding-top: 0;
        overflow-y: auto;
        scroll-behavior: smooth;
        position: relative;
        height: 100vh;
    }

    /* --- Indikator scroll --- */
    .sidebar::before {
        content: '';
        position: sticky;
        top: 0;
        left: 0;
        right: 0;
        height: 30px;
        background: linear-gradient(180deg, #ffffff 0%, transparent 100%);
        pointer-events: none;
        z-index: 10;
        display: block;
    }

    .sidebar::after {
        content: '';
        position: sticky;
        bottom: 0;
        left: 0;
        right: 0;
        height: 30px;
        background: linear-gradient(0deg, #ffffff 0%, transparent 100%);
        pointer-events: none;
        z-index: 10;
        display: block;
    }

    .sidebar .nav {
        padding: 16px 0;
        margin-top: -30px;
    }

    /* --- Nav Item --- */
    .sidebar .nav-item {
        position: relative;
    }

    /* --- Nav Link --- */
    .sidebar .nav-link {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 10px 20px;
        color: #5a6a7a;
        font-size: 14px;
        font-weight: 500;
        font-family: 'Poppins', sans-serif;
        border-left: 3px solid transparent;
        transition: all 0.25s ease;
        text-decoration: none;
        cursor: pointer;
    }

    .sidebar .nav-link:hover {
        background: rgba(198, 40, 40, 0.04);
        color: #c62828;
        border-left-color: #c62828;
    }

    .sidebar .nav-link.active {
        background: rgba(198, 40, 40, 0.08);
        color: #c62828;
        border-left-color: #c62828;
        font-weight: 600;
        transform: translateX(2px);
        box-shadow: inset 0 0 10px rgba(198, 40, 40, 0.02);
    }

    .sidebar .nav-link:active {
        transform: scale(0.98);
        background: rgba(198, 40, 40, 0.12);
        transition: transform 0.1s ease;
    }

    /* --- Ikon --- */
    .sidebar .menu-icon {
        width: 22px;
        text-align: center;
        font-size: 18px;
        color: #7a8a9e;
        transition: color 0.25s ease;
        flex-shrink: 0;
        font-family: 'Poppins', sans-serif;
    }

    .sidebar .nav-link:hover .menu-icon,
    .sidebar .nav-link.active .menu-icon {
        color: #c62828;
    }

    /* --- Menu Title --- */
    .sidebar .menu-title {
        flex: 1;
        font-size: 14px;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
    }

    .sidebar .nav-link.active .menu-title {
        font-weight: 600;
    }

    /* --- Menu Arrow --- */
    .sidebar .menu-arrow {
        font-size: 12px;
        color: #b0b8c4;
        transition: transform 0.3s ease;
        margin-left: auto;
        font-family: 'Poppins', sans-serif;
    }

    .sidebar .nav-link[aria-expanded="true"] .menu-arrow {
        transform: rotate(180deg);
    }

    /* --- Nav Category --- */
    .sidebar .nav-category {
        padding: 16px 20px 6px;
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        color: #b0b8c4;
        border-top: 1px solid #f0f2f5;
        margin-top: 4px;
        font-family: 'Poppins', sans-serif;
    }

    .sidebar .nav-category:first-of-type {
        border-top: none;
        margin-top: 0;
        padding-top: 4px;
    }

    /* --- Sub Menu --- */
    .sidebar .collapse {
        background: #f8f9fc;
        border-radius: 0 0 10px 10px;
        margin: 0 12px 4px;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }

    .sidebar .collapse:not(.show) {
        display: none;
    }

    .sidebar .collapse.show {
        display: block;
    }

    .sidebar .sub-menu {
        list-style: none;
        padding: 6px 0 10px;
        margin: 0;
    }

    .sidebar .sub-menu .nav-item {
        margin: 0;
    }

    .sidebar .sub-menu .nav-link {
        padding: 8px 16px 8px 48px;
        font-size: 13px;
        font-weight: 400;
        color: #5a6a7a;
        border-left: none;
        gap: 10px;
        border-radius: 0;
        position: relative;
        font-family: 'Poppins', sans-serif;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
    }

    /* --- Hilangkan Bullet --- */
    .sidebar .sub-menu .nav-link::before {
        display: none;
    }

    .sidebar .sub-menu .nav-link:hover {
        background: rgba(198, 40, 40, 0.04);
        color: #c62828;
        padding-left: 52px;
    }

    .sidebar .sub-menu .nav-link.active {
        background: rgba(198, 40, 40, 0.06);
        color: #c62828;
        font-weight: 500;
        transform: translateX(2px);
    }

    .sidebar .sub-menu .nav-link:active {
        transform: scale(0.97);
        background: rgba(198, 40, 40, 0.10);
    }

    /* --- Scrollbar --- */
    .sidebar::-webkit-scrollbar {
        width: 4px;
    }
    .sidebar::-webkit-scrollbar-track {
        background: transparent;
    }
    .sidebar::-webkit-scrollbar-thumb {
        background: #c62828;
        border-radius: 10px;
    }

    /* --- Responsive --- */
    @media (max-width: 992px) {
        .sidebar {
            top: 64px;
            height: calc(100vh - 64px);
            box-shadow: 4px 0 30px rgba(0, 0, 0, 0.06);
        }
        .sidebar .nav-link {
            font-size: 14px;
            padding: 10px 16px;
        }
        .sidebar .sub-menu .nav-link {
            padding: 8px 12px 8px 40px;
            font-size: 13px;
        }
    }

    @media (max-width: 576px) {
        .sidebar {
            top: 58px;
            height: calc(100vh - 58px);
        }
        .sidebar .nav-link {
            font-size: 13px;
            padding: 8px 14px;
        }
        .sidebar .sub-menu .nav-link {
            font-size: 12px;
            padding: 6px 10px 6px 36px;
        }
        .sidebar .nav-category {
            font-size: 10px;
            padding: 12px 16px 4px;
        }
        .sidebar .menu-title {
            font-size: 13px;
        }
    }

    /* --- Dark Mode --- */
    @media (prefers-color-scheme: dark) {
        .sidebar {
            background: #1a1a2e;
            border-right-color: rgba(255, 255, 255, 0.04);
        }
        .sidebar::before {
            background: linear-gradient(180deg, #1a1a2e 0%, transparent 100%);
        }
        .sidebar::after {
            background: linear-gradient(0deg, #1a1a2e 0%, transparent 100%);
        }
        .sidebar .nav-link {
            color: #9aa8b9;
        }
        .sidebar .nav-link:hover {
            background: rgba(198, 40, 40, 0.08);
            color: #c62828;
        }
        .sidebar .nav-link.active {
            background: rgba(198, 40, 40, 0.12);
            color: #c62828;
        }
        .sidebar .menu-icon {
            color: #6a7a8a;
        }
        .sidebar .nav-link:hover .menu-icon,
        .sidebar .nav-link.active .menu-icon {
            color: #c62828;
        }
        .sidebar .nav-category {
            color: #6a7a8a;
            border-top-color: rgba(255, 255, 255, 0.04);
        }
        .sidebar .collapse {
            background: rgba(255, 255, 255, 0.02);
        }
        .sidebar .sub-menu .nav-link {
            color: #9aa8b9;
        }
        .sidebar .sub-menu .nav-link:hover,
        .sidebar .sub-menu .nav-link.active {
            color: #c62828;
        }
    }

    /* ========================================
       MODAL STYLING (perbaikan)
    ======================================== */
    .modal-content {
        border-radius: 16px !important;
        border: none !important;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15) !important;
        font-family: 'Poppins', sans-serif !important;
    }

    .modal-header {
        border-radius: 16px 16px 0 0 !important;
        padding: 20px 24px !important;
        border-bottom: 2px solid #c62828 !important;
    }

    .modal-body {
        padding: 24px 24px !important;
    }

    .modal-footer {
        border-radius: 0 0 16px 16px !important;
        padding: 16px 24px !important;
        border-top: 1px solid #f0f2f5 !important;
    }

    .modal-title {
        font-family: 'Poppins', sans-serif !important;
        font-weight: 700 !important;
        color: #1a1a2e !important;
    }

    .btn-close:focus {
        box-shadow: none !important;
    }

    .btn-secondary {
        font-family: 'Poppins', sans-serif !important;
        border-radius: 8px !important;
        padding: 8px 24px !important;
        background: #f0f2f5 !important;
        border-color: #f0f2f5 !important;
        color: #5a6a7a !important;
    }

    .btn-secondary:hover {
        background: #e0e4ea !important;
        border-color: #e0e4ea !important;
        color: #1a1a2e !important;
    }

    .btn-danger {
        font-family: 'Poppins', sans-serif !important;
        border-radius: 8px !important;
        padding: 8px 24px !important;
        background: #c62828 !important;
        border-color: #c62828 !important;
        color: #ffffff !important;
    }

    .btn-danger:hover {
        background: #b71c1c !important;
        border-color: #b71c1c !important;
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(198, 40, 40, 0.3);
    }
</style>

<!-- ============================================================
     SIDEBAR HTML
     ============================================================ -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

        <!-- ===== DASHBOARD ===== -->
        <li class="nav-item">
            <a class="nav-link" href="/dashboard">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <!-- ===== SABHAGIRIWANA'17 ===== -->
        <li class="nav-item nav-category">Sabhagiriwana'17</li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#sabhagiriwana" aria-expanded="false" aria-controls="sabhagiriwana">
                <i class="menu-icon mdi mdi-home"></i>
                <span class="menu-title">Beranda</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sabhagiriwana">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/sekapursirih">
                            <i class="mdi mdi-comment-text-outline"></i> Sekapur Sirih
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/kepengurusan">
                            <i class="mdi mdi-sitemap"></i> Kepengurusan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/peraturan">
                            <i class="mdi mdi-gavel"></i> Peraturan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/atribut">
                            <i class="mdi mdi-card-account-details-outline"></i> Atribut
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#divisi-s17">
                            <i class="mdi mdi-layers"></i> Divisi S'17
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#keanggotaan">
                            <i class="mdi mdi-account-group"></i> Keanggotaan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kesekretariatan">
                            <i class="mdi mdi-briefcase"></i> Kesekretariatan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#prestasi">
                            <i class="mdi mdi-trophy"></i> Prestasi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#posko">
                            <i class="mdi mdi-map-marker"></i> Posko
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- ===== EVENT ===== -->
        {{-- <li class="nav-item nav-category">Event</li> --}}

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#event" aria-expanded="false" aria-controls="event">
                <i class="menu-icon mdi mdi-calendar"></i>
                <span class="menu-title">Event</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="event">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#snoc">
                            <i class="mdi mdi-mountain"></i> SNOC
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nwct">
                            <i class="mdi mdi-tree"></i> NWCT
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#llbs">
                            <i class="mdi mdi-hiking"></i> LLBS
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#diklat">
                            <i class="mdi mdi-school"></i> DIKLAT
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#famgath">
                            <i class="mdi mdi-account-group"></i> FAMGATH
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mubes">
                            <i class="mdi mdi-bank"></i> MUBES
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#rua">
                            <i class="mdi mdi-forum"></i> RUA
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ultah">
                            <i class="mdi mdi-cake"></i> ULTAH
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sabha-peduli">
                            <i class="mdi mdi-hand-heart"></i> SABHA PEDULI
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- ===== BERITA ===== -->
        {{-- <li class="nav-item nav-category">Berita</li> --}}

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#berita" aria-expanded="false" aria-controls="berita">
                <i class="menu-icon mdi mdi-newspaper"></i>
                <span class="menu-title">Berita</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="berita">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#berita-terbaru">
                            <i class="mdi mdi-newspaper-variant"></i> Berita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#artikel">
                            <i class="mdi mdi-file-document"></i> Artikel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pengumuman">
                            <i class="mdi mdi-bullhorn"></i> Pengumuman
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#liputan">
                            <i class="mdi mdi-camera"></i> Liputan Khusus
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- ===== PENGATURAN AKUN ===== -->
        <li class="nav-item nav-category">Pengaturan Akun</li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                <span class="menu-title">Settings Akun</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/login">
                            <i class="mdi mdi-login"></i> Login
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- ===== LOGOUT ===== -->
        {{-- <li class="nav-item nav-category">Logout</li> --}}

        <li class="nav-item">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                <i class="menu-icon mdi mdi-logout"></i>
                <span class="menu-title">Keluar</span>
            </a>
        </li>

    </ul>
</nav>

<!-- ============================================================
     MODAL KONFIRMASI LOGOUT (diletakkan di luar sidebar)
     ============================================================ -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">
                    <i class="mdi mdi-logout" style="color: #c62828; margin-right: 10px;"></i>
                    Konfirmasi Logout
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <div class="modal-body">
                <p style="font-size: 15px; color: #1a1a2e; margin-bottom: 4px;">
                    Apakah Anda yakin ingin keluar dari aplikasi?
                </p>
                <p style="font-size: 13px; color: #7a8a9e; margin: 0;">
                    Anda akan diarahkan ke halaman login.
                </p>
            </div>

            <!-- Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Batal
                </button>
                <button type="button" class="btn btn-danger" id="confirmLogoutBtn">
                    <i class="mdi mdi-logout" style="margin-right: 6px;"></i>
                    Ya, Keluar
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================
     FORM LOGOUT (HIDDEN)
     ============================================================ -->
<form id="logout-form-sidebar" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<!-- ============================================================
     JAVASCRIPT (Collapse + Active + Modal Logout)
     ============================================================ -->
<script>
    document.addEventListener('DOMContentLoaded', function() {

        // ========================================
        // 1. COLLAPSE TOGGLE (Buka & Tutup Sub-menu)
        // ========================================
        var collapseLinks = document.querySelectorAll('.sidebar .nav-link[data-bs-toggle="collapse"]');

        collapseLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                var targetId = this.getAttribute('href');
                var target = document.querySelector(targetId);

                if (target) {
                    // Toggle class 'show'
                    target.classList.toggle('show');

                    // Update aria-expanded
                    var isExpanded = target.classList.contains('show');
                    this.setAttribute('aria-expanded', isExpanded);

                    // Tutup collapse lain yang terbuka (opsional)
                    // collapseLinks.forEach(function(otherLink) {
                    //     if (otherLink !== link) {
                    //         var otherTarget = document.querySelector(otherLink.getAttribute('href'));
                    //         if (otherTarget && otherTarget.classList.contains('show')) {
                    //             otherTarget.classList.remove('show');
                    //             otherLink.setAttribute('aria-expanded', 'false');
                    //         }
                    //     }
                    // });
                }
            });
        });

        // ========================================
        // 2. EFEK AKTIF (Active Class)
        // ========================================
        var navLinks = document.querySelectorAll('.sidebar .nav-link');

        navLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                // Hapus active dari semua nav-link
                navLinks.forEach(function(l) {
                    l.classList.remove('active');
                });
                // Tambah active ke link yang diklik
                this.classList.add('active');
            });
        });

        // ========================================
        // 3. ACTIVE BERDASARKAN URL
        // ========================================
        var currentPath = window.location.pathname;

        navLinks.forEach(function(link) {
            var href = link.getAttribute('href');

            if (href && href !== '#' && href !== 'javascript:void(0)' && currentPath === href) {
                link.classList.add('active');

                // Buka collapse parent jika ada
                var parentCollapse = link.closest('.collapse');
                if (parentCollapse) {
                    parentCollapse.classList.add('show');
                    var parentLink = parentCollapse.previousElementSibling;
                    if (parentLink && parentLink.classList.contains('nav-link')) {
                        parentLink.setAttribute('aria-expanded', 'true');
                    }
                }
            }
        });

        // ========================================
        // 4. MODAL LOGOUT - Tombol "Ya, Keluar"
        // ========================================
        var confirmBtn = document.getElementById('confirmLogoutBtn');
        var logoutForm = document.getElementById('logout-form-sidebar');

        if (confirmBtn && logoutForm) {
            confirmBtn.addEventListener('click', function() {
                logoutForm.submit();
            });
        }

        // ========================================
        // 5. TUTUP MODAL DENGAN TOMBOL ESC
        // ========================================
        var logoutModal = document.getElementById('logoutModal');
        if (logoutModal) {
            logoutModal.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    var closeBtn = this.querySelector('.btn-close');
                    if (closeBtn) {
                        closeBtn.click();
                    }
                }
            });
        }

    });
</script>

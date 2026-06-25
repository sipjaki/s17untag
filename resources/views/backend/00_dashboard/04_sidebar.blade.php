<style>
    /* ============================================================
     SIDEBAR - PERCANTIKAN TAMBAHAN
     ============================================================ */

/* --- Sidebar wrapper --- */
.sidebar {
    background: #ffffff;
    box-shadow: 2px 0 12px rgba(0,0,0,0.04);
    border-right: 1px solid #f0ebe6;
}

/* --- Menu item --- */
.sidebar .nav-item {
    margin-bottom: 2px;
}

.sidebar .nav-link {
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    font-size: 14px;
    color: #2d2d3f;
    padding: 12px 20px;
    border-radius: 10px;
    margin: 0 8px;
    transition: all 0.25s ease;
    position: relative;
}

/* --- Ikon menu --- */
.sidebar .nav-link .menu-icon {
    font-size: 20px;
    width: 28px;
    text-align: center;
    color: #6c7a91;
    transition: all 0.25s ease;
}

/* --- Hover effect --- */
.sidebar .nav-link:hover {
    background: #f5f0eb;
    transform: translateX(4px);
    color: #B71C1C;
}

.sidebar .nav-link:hover .menu-icon {
    color: #B71C1C;
    transform: scale(1.1);
}

/* --- Active state (saat halaman aktif) --- */
.sidebar .nav-link.active {
    background: linear-gradient(135deg, rgba(183,28,28,0.06), rgba(26,35,126,0.06));
    color: #B71C1C;
    font-weight: 600;
    border-left: 4px solid #B71C1C;
    border-radius: 10px 0 0 10px;
}

.sidebar .nav-link.active .menu-icon {
    color: #B71C1C;
}

/* --- Sub-menu (collapse) --- */
.sidebar .sub-menu {
    padding-left: 12px;
    margin-top: 4px;
}

.sidebar .sub-menu .nav-link {
    font-size: 13px;
    padding: 8px 16px 8px 44px;
    font-weight: 400;
    color: #4a4a5a;
    border-left: 2px solid transparent;
    border-radius: 8px;
    margin: 0 8px;
}

.sidebar .sub-menu .nav-link i {
    font-size: 16px;
    width: 24px;
    text-align: center;
    color: #8d9aaa;
    transition: all 0.2s;
}

.sidebar .sub-menu .nav-link:hover {
    background: #f5f0eb;
    color: #B71C1C;
    border-left-color: #B71C1C;
    transform: translateX(4px);
}

.sidebar .sub-menu .nav-link:hover i {
    color: #B71C1C;
}

/* --- Active sub-menu --- */
.sidebar .sub-menu .nav-link.active {
    background: rgba(183,28,28,0.05);
    color: #B71C1C;
    font-weight: 500;
    border-left-color: #B71C1C;
}

.sidebar .sub-menu .nav-link.active i {
    color: #B71C1C;
}

/* --- Category header --- */
.sidebar .nav-category {
    font-family: 'Poppins', sans-serif;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1.2px;
    color: #a0aec0;
    padding: 20px 20px 8px 24px;
    margin-top: 8px;
    border-top: 1px solid #f0ebe6;
}

.sidebar .nav-category:first-of-type {
    border-top: none;
    padding-top: 12px;
}

/* --- Menu arrow (chevron) --- */
.sidebar .menu-arrow {
    margin-left: auto;
    font-size: 13px;
    color: #b0b8c4;
    transition: transform 0.3s ease;
}

.sidebar .nav-link[aria-expanded="true"] .menu-arrow {
    transform: rotate(180deg);
    color: #B71C1C;
}

/* --- Collapse transition --- */
.sidebar .collapse {
    transition: all 0.3s ease;
}

/* --- Scrollbar sidebar --- */
.sidebar::-webkit-scrollbar {
    width: 4px;
}
.sidebar::-webkit-scrollbar-track {
    background: #f5f0eb;
}
.sidebar::-webkit-scrollbar-thumb {
    background: #d7ccc8;
    border-radius: 10px;
}
.sidebar::-webkit-scrollbar-thumb:hover {
    background: #bcaaa4;
}

/* ============================================================
     RESPONSIVE - SIDEBAR
     ============================================================ */
@media (max-width: 992px) {
    .sidebar .nav-link {
        padding: 10px 16px;
        font-size: 13px;
    }
    .sidebar .sub-menu .nav-link {
        padding: 6px 12px 6px 36px;
        font-size: 12px;
    }
    .sidebar .nav-link .menu-icon {
        font-size: 18px;
        width: 24px;
    }
}

@media (max-width: 768px) {
    .sidebar .nav-link {
        padding: 8px 12px;
        font-size: 12px;
        margin: 0 4px;
    }
    .sidebar .sub-menu .nav-link {
        padding: 6px 10px 6px 28px;
        font-size: 11px;
    }
    .sidebar .nav-link .menu-icon {
        font-size: 16px;
        width: 20px;
    }
    .sidebar .nav-category {
        font-size: 10px;
        padding: 16px 16px 6px 18px;
    }
}
</style>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="/dashboard">
        <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
{{-- ====== --}}
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
                        <a class="nav-link" href="/00beranda">
                            <i class="mdi mdi-comment-text-outline"></i> Foto Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/01sekapursirih">
                            <i class="mdi mdi-comment-text-outline"></i> Sekapur Sirih
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/02kepengurusan">
                            <i class="mdi mdi-sitemap"></i> Kepengurusan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/03peraturan">
                            <i class="mdi mdi-gavel"></i> Peraturan
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="/atribut">
                            <i class="mdi mdi-card-account-details-outline"></i> Atribut
                        </a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="/04divisi">
                            <i class="mdi mdi-layers"></i> Divisi S'17
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/05keanggotaan">
                            <i class="mdi mdi-account-group"></i> Keanggotaan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/06kesekertariatan">
                            <i class="mdi mdi-briefcase"></i> Kesekretariatan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/07prestasi">
                            <i class="mdi mdi-trophy"></i> Prestasi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/08dokkegiatan">
                            <i class="mdi mdi-trophy"></i> Dokumentasi <br> Kegiatan
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#posko">
                            <i class="mdi mdi-map-marker"></i> Posko
                        </a>
                    </li> --}}
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
                        <a class="nav-link" href="/09snoc">
                            <i class="mdi mdi-mountain"></i> SNOC
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/10nwct">
                            <i class="mdi mdi-tree"></i> NWCT
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/11llbs">
                            <i class="mdi mdi-hiking"></i> LLBS
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/12diklat">
                            <i class="mdi mdi-school"></i> DIKLAT
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/13fam">
                            <i class="mdi mdi-account-group"></i> FAMGATH
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/14mubes">
                            <i class="mdi mdi-bank"></i> MUBES
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/15rua">
                            <i class="mdi mdi-forum"></i> RUA
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/16ultah">
                            <i class="mdi mdi-cake"></i> ULTAH
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/17peduli">
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
                        <a class="nav-link" href="/18berita">
                            <i class="mdi mdi-newspaper-variant"></i> Berita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/19artikel">
                            <i class="mdi mdi-file-document"></i> Artikel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/20pengumuman">
                            <i class="mdi mdi-bullhorn"></i> Pengumuman
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#liputan">
                            <i class="mdi mdi-camera"></i> Liputan Khusus
                        </a>
                    </li> --}}
                </ul>
            </div>
        </li>

        <!-- ===== PENGATURAN AKUN ===== -->
        <li class="nav-item nav-category">Pengaturan Akun</li>

        <li class="nav-item">
            {{-- <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                <span class="menu-title">Settings Akun</span>
                <i class="menu-arrow"></i>
            </a> --}}
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
<!-- ============================================================
     MENU LOGOUT DI NAVBAR
     ============================================================ -->
<li class="nav-item">
    <a class="nav-link" href="#" id="logoutBtn">
        <i class="fas fa-sign-out-alt" style="margin-right: 6px;"></i>
        <span>Keluar</span>
    </a>
</li>

<!-- ============================================================
     MODAL KONFIRMASI LOGOUT (dengan FORM POST)
     ============================================================ -->
<div id="logoutModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 99999; align-items: center; justify-content: center; backdrop-filter: blur(4px);">
    <div style="background: #fff; border-radius: 20px; max-width: 440px; width: 90%; box-shadow: 0 20px 60px rgba(0,0,0,0.3); overflow: hidden; animation: modalSlideIn 0.3s ease; font-family: 'Poppins', sans-serif; margin: 20px;">
        <!-- Header -->
        <div style="padding: 20px 24px; background: #fafafa; border-bottom: 3px solid #c62828; display: flex; align-items: center; justify-content: space-between;">
            <h5 style="font-weight: 600; font-size: 18px; color: #1a1a2e; margin: 0; display: flex; align-items: center; gap: 10px;">
                <i class="fas fa-sign-out-alt" style="color: #c62828;"></i>
                Konfirmasi Keluar
            </h5>
            <button onclick="closeLogoutModal()" style="background: none; border: none; font-size: 24px; cursor: pointer; color: #999; padding: 0 4px; line-height: 1;">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <!-- Body -->
        <div style="padding: 32px 24px 16px; text-align: center;">
            <div style="margin-bottom: 16px;">
                <i class="fas fa-exclamation-triangle" style="font-size: 48px; color: #c62828;"></i>
            </div>
            <h5 style="font-weight: 600; color: #1a1a2e; margin-bottom: 8px; font-size: 18px;">
                Apakah Anda yakin ingin keluar?
            </h5>
            <p style="color: #777; font-size: 14px; margin-bottom: 0;">
                Anda akan keluar dari halaman ini dan sesi Anda akan berakhir.
            </p>
            <p style="color: #999; font-size: 13px; margin-top: 4px;">
                Pastikan semua pekerjaan Anda sudah tersimpan.
            </p>
        </div>

        <!-- Footer dengan FORM POST -->
        <div style="padding: 8px 24px 24px; display: flex; justify-content: center; gap: 12px; flex-wrap: wrap;">
            <button onclick="closeLogoutModal()" style="padding: 10px 32px; border-radius: 30px; font-weight: 500; font-family: 'Poppins', sans-serif; background: #e8e8e8; color: #333; border: none; cursor: pointer; transition: all 0.3s ease; flex: 1; min-width: 100px;">
                <i class="fas fa-times"></i> Batal
            </button>

            <!-- FORM LOGOUT dengan method POST -->
            <form action="/logout" method="POST" style="flex: 1; min-width: 100px; margin: 0;">
                @csrf
                <button type="submit" style="background: #c62828; color: #fff; padding: 10px 32px; border-radius: 30px; font-weight: 600; transition: all 0.3s ease; font-family: 'Poppins', sans-serif; box-shadow: 0 4px 14px rgba(198, 40, 40, 0.25); border: none; cursor: pointer; width: 100%; display: inline-flex; align-items: center; justify-content: center; gap: 8px;">
                    <i class="fas fa-sign-out-alt"></i> Keluar
                </button>
            </form>
        </div>
    </div>
</div>

<!-- ============================================================
     STYLE TAMBAHAN
     ============================================================ -->
<style>
    /* Animasi slide in modal */
    @keyframes modalSlideIn {
        0% {
            transform: translateY(-30px) scale(0.95);
            opacity: 0;
        }
        100% {
            transform: translateY(0) scale(1);
            opacity: 1;
        }
    }

    /* Hover efek tombol batal */
    #logoutModal .btn-batal:hover {
        background: #d5d5d5 !important;
        transform: translateY(-2px);
    }

    /* Hover efek tombol keluar (di dalam form) */
    #logoutModal form button:hover {
        background: #b71c1c !important;
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(198, 40, 40, 0.35);
    }

    /* Responsive */
    @media (max-width: 480px) {
        #logoutModal > div {
            width: 95%;
            margin: 10px;
        }
        #logoutModal .modal-footer,
        #logoutModal div[style*="display: flex"] {
            flex-direction: column;
        }
        #logoutModal .modal-footer button,
        #logoutModal .modal-footer form,
        #logoutModal div[style*="display: flex"] button,
        #logoutModal div[style*="display: flex"] form {
            width: 100%;
        }
    }
</style>

<!-- ============================================================
     SCRIPT MODAL
     ============================================================ -->
<script>
    // Buka modal
    document.getElementById('logoutBtn').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('logoutModal').style.display = 'flex';
        document.body.style.overflow = 'hidden'; // prevent scroll
    });

    // Tutup modal
    function closeLogoutModal() {
        document.getElementById('logoutModal').style.display = 'none';
        document.body.style.overflow = 'auto';
    }

    // Tutup modal jika klik di luar area modal
    document.getElementById('logoutModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeLogoutModal();
        }
    });

    // Tutup modal dengan tombol ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeLogoutModal();
        }
    });
</script>

{{-- ====== --}}




  </ul>
</nav>


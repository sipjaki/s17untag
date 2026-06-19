<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/newtheme/gambar/sabha.png">

    <link rel="stylesheet" href="/assets/newtheme/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- Mountain Background Layer -->
    <div class="mountain-bg"></div>
    <div class="mountain-overlay"></div>

        <!-- Google Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <style>
        /* ===== RESET ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            padding-top: 70px;
        }

        /* ===== NAVBAR ===== */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
            background: #ffffff;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.06);
            padding: 0 24px;
            height: 70px;
            display: flex;
            align-items: center;
            border-bottom: 3px solid #c62828;
        }

        .nav-container {
            max-width: 1280px;
            width: 100%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* ===== LOGO ===== */
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: #1a1a2e;
            font-weight: 700;
            font-size: 18px;
        }
        .logo-img {
            width: 45px;
            height: 45px;
            object-fit: contain;
            border-radius: 50%;
            border: 2px solid #c62828;
            padding: 3px;
            background: #fff;
        }
        .logo-text {
            font-size: 18px;
            font-weight: 700;
            color: #1a1a2e;
            letter-spacing: -0.5px;
        }
        .logo-text::first-letter {
            color: #c62828;
        }

        /* ===== NAV MENU ===== */
        .nav-menu {
            display: flex;
            align-items: center;
            list-style: none;
            gap: 6px;
            margin: 0;
            padding: 0;
        }
        .nav-item {
            position: relative;
        }
        .nav-link {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 8px 16px;
            color: #1a1a2e;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            border-radius: 8px;
            transition: all 0.3s ease;
            cursor: pointer;
            white-space: nowrap;
        }
        .nav-link:hover {
            background: rgba(198, 40, 40, 0.06);
            color: #c62828;
        }
        .nav-link i {
            font-size: 12px;
            transition: transform 0.3s ease;
        }
        .has-dropdown:hover .nav-link i {
            transform: rotate(180deg);
        }

        /* ===== DROPDOWN (desktop) ===== */
        .dropdown {
            position: absolute;
            top: calc(100% + 8px);
            left: 0;
            min-width: 220px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.10);
            padding: 8px 0;
            list-style: none;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.04);
            z-index: 9999;
        }
        .has-dropdown:hover .dropdown {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        .dropdown li a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 18px;
            color: #1a1a2e;
            text-decoration: none;
            font-size: 13px;
            font-weight: 400;
            transition: all 0.2s ease;
        }
        .dropdown li a i {
            width: 18px;
            color: #c62828;
            font-size: 14px;
            text-align: center;
        }
        .dropdown li a:hover {
            background: rgba(198, 40, 40, 0.06);
            color: #c62828;
            padding-left: 22px;
        }

        /* ===== BUTTON LOGIN ===== */
        .btn-login-nav {
            background: #c62828;
            color: #ffffff !important;
            padding: 8px 24px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 14px rgba(198, 40, 40, 0.25);
        }
        .btn-login-nav:hover {
            background: #b71c1c;
            color: #fff !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(198, 40, 40, 0.35);
        }

        /* ===== MOBILE HAMBURGER ===== */
        .mobile-menu-btn {
            display: none; /* default di desktop */
            flex-direction: column;
            gap: 5px;
            background: none;
            border: none;
            cursor: pointer;
            padding: 8px;
            border-radius: 8px;
        }
        .mobile-menu-btn span {
            width: 26px;
            height: 3px;
            background: #1a1a2e;
            border-radius: 10px;
            transition: all 0.3s ease;
            display: block;
        }
        .mobile-menu-btn.active span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 6px);
        }
        .mobile-menu-btn.active span:nth-child(2) {
            opacity: 0;
        }
        .mobile-menu-btn.active span:nth-child(3) {
            transform: rotate(-45deg) translate(5px, -6px);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 992px) {
            /* Tampilkan tombol hamburger */
            .mobile-menu-btn {
                display: flex !important; /* DIPAKSA MUNCUL */
            }

            /* Menu mobile default disembunyikan */
            .nav-menu {
                position: absolute;
                top: 70px;
                left: 0;
                right: 0;
                background: #ffffff;
                flex-direction: column;
                align-items: stretch;
                padding: 16px 24px 24px;
                gap: 4px;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
                border-top: 2px solid #c62828;
                display: none; /* default hidden */
                max-height: calc(100vh - 70px);
                overflow-y: auto;
                z-index: 9999;
            }

            /* Saat aktif (dibuka) */
            .nav-menu.active {
                display: flex !important;
            }

            .nav-item {
                width: 100%;
            }

            .nav-link {
                padding: 12px 16px;
                font-size: 15px;
                justify-content: space-between;
                white-space: normal;
            }
            .nav-link i {
                font-size: 14px;
            }

            /* Dropdown mobile */
            .has-dropdown .dropdown {
                position: static;
                box-shadow: none;
                border: none;
                padding-left: 16px;
                border-left: 3px solid #c62828;
                border-radius: 0;
                margin-top: 4px;
                background: transparent;
                opacity: 1;
                visibility: visible;
                transform: none;
                display: none; /* default tutup */
                padding-top: 0;
                padding-bottom: 0;
            }

            /* Saat dropdown dibuka (class 'dropdown-open') */
            .has-dropdown.dropdown-open .dropdown {
                display: block !important;
                padding-top: 6px;
                padding-bottom: 6px;
            }

            .dropdown li a {
                padding: 10px 16px;
                font-size: 14px;
            }

            .btn-login-nav {
                text-align: center;
                justify-content: center;
                margin-top: 8px;
            }
        }

        @media (max-width: 480px) {
            .navbar {
                padding: 0 16px;
                height: 62px;
            }
            .logo-text {
                font-size: 15px;
            }
            .logo-img {
                width: 38px;
                height: 38px;
            }
            .nav-menu {
                top: 62px;
                padding: 12px 16px 20px;
                max-height: calc(100vh - 62px);
            }
            .nav-link {
                font-size: 14px;
                padding: 10px 14px;
            }
        }
    </style>

    <!-- ===== NAVBAR ===== -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <!-- Logo -->
            <a href="/" class="logo">
                <img src="/assets/newtheme/gambar/sabha.png" alt="Logo" class="logo-img" />
                <span class="logo-text">Sabhagiriwana'17</span>
            </a>

            <!-- Tombol Hamburger -->
            <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <!-- Menu -->
            <ul class="nav-menu" id="navMenu">
                <li class="nav-item"><a href="/" class="nav-link">Home</a></li>

                <li class="nav-item has-dropdown">
                    <a href="#" class="nav-link">
                        Sabhagiriwana17 <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown">
                        <li><a href="/sekapursirih"><i class="fas fa-comment-dots"></i> Sekapur Sirih</a></li>
                        <li><a href="/kepengurusan"><i class="fas fa-sitemap"></i> Kepengurusan</a></li>
                        <li><a href="/peraturan"><i class="fas fa-gavel"></i> Peraturan</a></li>
                        <li><a href="/atribut"><i class="fas fa-id-badge"></i> Atribut</a></li>
                        <li><a href="#divisi-s17"><i class="fas fa-layer-group"></i> Divisi S'17</a></li>
                        <li><a href="#keanggotaan"><i class="fas fa-user-friends"></i> Keanggotaan</a></li>
                        <li><a href="#kesekretariatan"><i class="fas fa-briefcase"></i> Kesekretariatan</a></li>
                        <li><a href="#prestasi"><i class="fas fa-trophy"></i> Prestasi</a></li>
                        <li><a href="#posko"><i class="fas fa-map-marker-alt"></i> Posko</a></li>
                    </ul>
                </li>

                <li class="nav-item has-dropdown">
                    <a href="#" class="nav-link">
                        Event <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown">
                        <li><a href="#snoc"><i class="fas fa-mountain"></i> SNOC</a></li>
                        <li><a href="#nwct"><i class="fas fa-tree"></i> NWCT</a></li>
                        <li><a href="#llbs"><i class="fas fa-hiking"></i> LLBS</a></li>
                        <li><a href="#diklat"><i class="fas fa-chalkboard-teacher"></i> DIKLAT</a></li>
                        <li><a href="#famgath"><i class="fas fa-users"></i> FAMGATH</a></li>
                        <li><a href="#mubes"><i class="fas fa-landmark"></i> MUBES</a></li>
                        <li><a href="#rua"><i class="fas fa-comments"></i> RUA</a></li>
                        <li><a href="#ultah"><i class="fas fa-birthday-cake"></i> ULTAH</a></li>
                        <li><a href="#sabha-peduli"><i class="fas fa-hands-helping"></i> SABHA PEDULI</a></li>
                    </ul>
                </li>

                <li class="nav-item has-dropdown">
                    <a href="#" class="nav-link">
                        Berita <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown">
                        <li><a href="#berita-terbaru"><i class="fas fa-newspaper"></i> Berita</a></li>
                        <li><a href="#artikel"><i class="fas fa-file-alt"></i> Artikel</a></li>
                        <li><a href="#pengumuman"><i class="fas fa-bullhorn"></i> Pengumuman</a></li>
                        <li><a href="#liputan"><i class="fas fa-camera"></i> Liputan Khusus</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a href="/login" class="nav-link btn-login-nav">Login</a></li>
            </ul>
        </div>
    </nav>

    <!-- ===== SCRIPT SIMPLE & PASTI JALAN ===== -->
    <script>
        // Tunggu sampai semua elemen siap
        document.addEventListener('DOMContentLoaded', function() {

            // Ambil elemen
            var mobileBtn = document.getElementById('mobileMenuBtn');
            var navMenu = document.getElementById('navMenu');

            // Cek apakah elemen ada (untuk debugging)
            if (!mobileBtn) {
                console.error('Tombol mobile tidak ditemukan! Periksa ID #mobileMenuBtn');
                return;
            }
            if (!navMenu) {
                console.error('Menu mobile tidak ditemukan! Periksa ID #navMenu');
                return;
            }

            console.log('Navbar siap, tombol dan menu ditemukan.');

            // Event klik tombol hamburger
            mobileBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                this.classList.toggle('active');
                navMenu.classList.toggle('active');
                console.log('Menu toggled, active:', navMenu.classList.contains('active'));
            });

            // Dropdown untuk mobile (sub-menu)
            var dropdowns = document.querySelectorAll('.has-dropdown');
            dropdowns.forEach(function(item) {
                var link = item.querySelector('.nav-link');
                link.addEventListener('click', function(e) {
                    // Hanya di mobile (lebar <= 992px)
                    if (window.innerWidth <= 992) {
                        e.preventDefault(); // Mencegah # melompat
                        // Tutup dropdown lain
                        dropdowns.forEach(function(other) {
                            if (other !== item) {
                                other.classList.remove('dropdown-open');
                            }
                        });
                        item.classList.toggle('dropdown-open');
                        console.log('Dropdown toggled:', item.classList.contains('dropdown-open'));
                    }
                });
            });

            // Tutup menu jika klik di luar navbar
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.navbar')) {
                    mobileBtn.classList.remove('active');
                    navMenu.classList.remove('active');
                    dropdowns.forEach(function(item) {
                        item.classList.remove('dropdown-open');
                    });
                }
            });

            // Saat resize ke desktop, tutup semua menu mobile
            window.addEventListener('resize', function() {
                if (window.innerWidth > 992) {
                    mobileBtn.classList.remove('active');
                    navMenu.classList.remove('active');
                    dropdowns.forEach(function(item) {
                        item.classList.remove('dropdown-open');
                    });
                }
            });

        });
    </script>



<style>
    /* ===== RUNNING BANNER ===== */
.running-banner {
    width: 100%;
    background: linear-gradient(135deg, #c62828 0%, #b71c1c 50%, #0d47a1 100%);
    padding: 14px 0;
    overflow: hidden;
    position: relative;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    border-top: 2px solid rgba(255, 255, 255, 0.1);
    border-bottom: 2px solid rgba(255, 255, 255, 0.05);
}

/* Efek overlay garis dekoratif */
.running-banner::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: repeating-linear-gradient(
        90deg,
        transparent,
        transparent 20px,
        rgba(255, 255, 255, 0.03) 20px,
        rgba(255, 255, 255, 0.03) 21px
    );
    pointer-events: none;
}

/* Efek glow di sisi */
.running-banner::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 80px;
    height: 100%;
    background: linear-gradient(90deg, rgba(198, 40, 40, 0.6), transparent);
    pointer-events: none;
    z-index: 2;
}

.running-banner .banner-track {
    display: flex;
    white-space: nowrap;
    animation: scrollBanner 25s linear infinite;
    will-change: transform;
}

.running-banner .banner-content {
    display: flex;
    align-items: center;
    gap: 30px;
    padding: 0 20px;
    flex-shrink: 0;
}

/* Animasi scroll */
@keyframes scrollBanner {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}

/* Hover pause */
.running-banner:hover .banner-track {
    animation-play-state: paused;
}

/* ===== BANNER ITEMS ===== */
.banner-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: rgba(255, 255, 255, 0.6);
    font-size: 18px;
    animation: pulseIcon 2s ease-in-out infinite;
    flex-shrink: 0;
}

.banner-icon i {
    filter: drop-shadow(0 0 8px rgba(255, 255, 255, 0.1));
}

@keyframes pulseIcon {
    0%, 100% {
        transform: scale(1);
        opacity: 0.6;
    }
    50% {
        transform: scale(1.15);
        opacity: 1;
    }
}

.banner-text {
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
    font-weight: 500;
    color: #ffffff;
    text-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    letter-spacing: 0.5px;
    flex-shrink: 0;
}

.banner-text strong {
    color: #ffd54f;
    font-weight: 700;
}

/* ===== SEPARATOR DEKORATIF ===== */
.banner-separator {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: rgba(255, 255, 255, 0.25);
    font-size: 12px;
    flex-shrink: 0;
}

.banner-separator::before,
.banner-separator::after {
    content: '';
    width: 20px;
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3));
}

.banner-separator i {
    font-size: 14px;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
    .running-banner {
        padding: 10px 0;
    }

    .running-banner .banner-content {
        gap: 20px;
        padding: 0 16px;
    }

    .banner-text {
        font-size: 13px;
        letter-spacing: 0.3px;
    }

    .banner-icon {
        font-size: 14px;
    }

    .running-banner .banner-track {
        animation-duration: 20s;
    }
}

@media (max-width: 480px) {
    .running-banner {
        padding: 8px 0;
    }

    .running-banner .banner-content {
        gap: 14px;
        padding: 0 12px;
    }

    .banner-text {
        font-size: 11px;
        letter-spacing: 0.2px;
    }

    .banner-icon {
        font-size: 12px;
    }

    .running-banner .banner-track {
        animation-duration: 16s;
    }
}
</style>

<!-- Running Text Banner -->
<div class="running-banner">
    <div class="banner-track">
        <div class="banner-content">
            <span class="banner-icon">
                <i class="fas fa-mountain"></i>
            </span>
            <span class="banner-text">
                Selamat datang, wahai jiwa-jiwa pengembara — di sini langkah berpadu dengan semesta,
                angin berbisik menjadi sahabat, dan setiap jejak pulang membawa makna.
            </span>
            <span class="banner-icon">
                <i class="fas fa-tree"></i>
            </span>
            <span class="banner-text">
                Sabhagiriwana'17 — Jejak Petualangan, Cinta Alam, dan Persaudaraan Abadi.
            </span>
            <span class="banner-icon">
                <i class="fas fa-campground"></i>
            </span>
            <span class="banner-text">
                #Sabhagiriwana17 #PencintaAlam #PetualangSejati
            </span>
            <span class="banner-icon">
                <i class="fas fa-mountain"></i>
            </span>
        </div>
    </div>
</div>

<section class="news-slider-section" id="beranda">
        <div class="slider-container">
            <div class="slider-wrapper" id="newsSlider">
                <div class="slide active">
                    <div class="slide-image">
                        <img src="/assets/newtheme/images/gallery-3.jpg" alt="Ekspedisi Gunung">
                    </div>
                    <div class="slide-content">
                        <span class="slide-tag">Kebersamaan</span>
                        <h2 class="slide-title">Camping dan Malam Keakraban</h2>
                        <p class="slide-desc">
                        Kegiatan berkemah bersama untuk membangun kekompakan, berbagi pengalaman, dan menikmati suasana alam dengan penuh kebersamaan.</p>
                        <a href="#" class="slide-btn">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-image">
                        <img src="/assets/newtheme/images/gallery-5.jpg" alt="Summit Celebration">
                    </div>
                    <div class="slide-content">
                        <span class="slide-tag">Kegiatan</span>
                        <h2 class="slide-title">Pendakian Bersama Sabhagiriwana 17</h2>
                        <p class="slide-desc">
                            Kegiatan pendakian rutin sebagai ajang kebersamaan, latihan fisik, dan mempererat solidaritas antar anggota Sabhagiriwana 17.
                        </p>
                        <a href="#" class="slide-btn">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-image">
                        <img src="/assets/newtheme/images/gallery-6.jpg" alt="Camping Event">
                    </div>
                    <div class="slide-content">
                        <span class="slide-tag">Pelatihan</span>
                        <h2 class="slide-title">Latihan Dasar Kepecintaalaman</h2>
                        <p class="slide-desc">
                        Pelatihan rutin meliputi teknik survival, navigasi darat, manajemen perjalanan, serta pembekalan mental di alam terbuka.
                        </p>
                        <a href="#" class="slide-btn">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="slider-controls">
                <button class="slider-btn prev" id="prevSlide"><i class="fas fa-chevron-left"></i></button>
                <div class="slider-dots">
                    <span class="dot active" data-slide="0"></span>
                    <span class="dot" data-slide="1"></span>
                    <span class="dot" data-slide="2"></span>
                </div>
                <button class="slider-btn next" id="nextSlide"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </section>


<section class="kabar-section" id="berita-terbaru">
    <div class="section-header">
        <h2 class="section-title">Sekapur Sirih</h2>
    </div>

    <div class="kabar-scroll-container">
        <div class="kabar-wrapper">

            <div class="kabar-paragraf">

                <div class="kabar-kiri">
                    <p>
                        Di antara desir angin yang berbisik pada dedaunan,
                        dan langkah kaki yang menapaki tanah kehidupan,
                        kami memulai perjalanan ini bukan sekadar menuju
                        puncak, tetapi menuju pemahaman tentang arti kebersamaan,
                        keteguhan, dan rasa syukur yang tumbuh dalam diam.

                        Alam telah menjadi guru yang tak pernah lelah mengajarkan
                        kesabaran, kerendahan hati, dan keberanian untuk terus
                        melangkah. Dalam setiap perjalanan, kami belajar bahwa
                        jarak bukanlah yang menaklukkan manusia, melainkan
                        bagaimana hati tetap kuat saat lelah dan tetap hangat
                        saat sunyi.
                    </p>
                </div>

                <div class="kabar-kanan">
                    <p>
                        Sabhagiriwana S'17 hadir sebagai ruang pulang bagi jiwa-jiwa
                        yang mencintai semesta, tempat langkah disatukan oleh tujuan,
                        dan perbedaan dilebur oleh rasa persaudaraan. Di sinilah cerita
                        terukir — tentang tawa, perjuangan, dan makna yang tumbuh
                        di sepanjang perjalanan.
                        Semoga setiap jejak yang tertinggal menjadi pengingat bahwa
                        manusia dan alam tidak pernah benar-benar terpisah. Kami
                        melangkah bukan untuk menaklukkan, melainkan untuk memahami,
                        menjaga, dan merawat — karena pada akhirnya, alam bukan hanya
                        tempat kita berjalan, tetapi tempat kita belajar menjadi manusia.
                    </p>
                </div>

            </div>

        </div>
    </div>
</section>


    <!-- Beautiful Words Section -->
    <section class="beautiful-words-section" id="tentang">
        <div class="section-container">
            <div class="bw-left">
                <div class="bw-image-container">
                    <img src="/assets/newtheme/images/beautiful-words-mountain.jpg" alt="Mountain View" class="bw-image">
                    <div class="bw-image-overlay">
                        <div class="bw-quote">
                            <i class="fas fa-quote-left quote-icon"></i>
                            <p class="quote-text">Gunung tidak pernah berkata bohong. Mereka selalu menunjukkan siapa dirimu sebenarnya.</p>
                            <span class="quote-author">- Cupank S'17 </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bw-right">
                <div class="bw-video-container">
                    <div class="video-wrapper">
                        <iframe
                            src="/assets/newtheme/https://www.youtube.com/embed/8iH6qqQsebk?rel=0"
                            title="Mountain Adventure Video"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class="video-caption">
                        <h3>Petualangan Sejati</h3>
                        <p>Rasakan sensasi mendaki dan menjelajahi keindahan alam yang menakjubkan bersama komunitas pecinta alam terbesar di Indonesia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Kabar Terbaru Section -->
    <section class="kabar-section" id="berita-terbaru">
        <div class="section-header">
            <h2 class="section-title">Kabar Terbaru</h2>
            {{-- <p class="section-subtitle">Update terkini dari aktivitas dan kegiatan kami</p> --}}
        </div>
        <div class="kabar-scroll-container">
            <button class="scroll-btn scroll-left" id="kabarScrollLeft"><i class="fas fa-chevron-left"></i></button>
            <div class="kabar-wrapper" id="kabarWrapper">
                <div class="kabar-grid">
                    <article class="kabar-card">
                        <div class="kabar-image">
                            <img src="/assets/newtheme/images/pegunungan1.jpg" alt="Rock Climbing">
                            <span class="kabar-category">Petualangan</span>
                        </div>
                        <div class="kabar-content">
                            <div class="kabar-meta">
                                <span><i class="fas fa-calendar"></i> 15 Feb 2024</span>
                                <span><i class="fas fa-user"></i> Admin</span>
                            </div>
                            <h3 class="kabar-title">Teknik Panjat Tebing untuk Pemula</h3>
                            <p class="kabar-excerpt">Pelajari teknik dasar panjat tebing yang aman dan efektif untuk memulai petualangan vertikal Anda.</p>
                            <a href="#" class="kabar-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                    <article class="kabar-card">
                        <div class="kabar-image">
                            <img src="/assets/newtheme/images/pegunungan2.jpg" alt="Rescue Training">
                            <span class="kabar-category">Pelatihan</span>
                        </div>
                        <div class="kabar-content">
                            <div class="kabar-meta">
                                <span><i class="fas fa-calendar"></i> 12 Feb 2024</span>
                                <span><i class="fas fa-user"></i> Admin</span>
                            </div>
                            <h3 class="kabar-title">Pelatihan SAR Gunung 2024</h3>
                            <p class="kabar-excerpt">Tim Search and Rescue kami mengadakan pelatihan intensif untuk meningkatkan kesiapsiagaan.</p>
                            <a href="#" class="kabar-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                    <article class="kabar-card">
                        <div class="kabar-image">
                            <img src="/assets/newtheme/images/pegunungan3.jpg" alt="Youth Education">
                            <span class="kabar-category">Edukasi</span>
                        </div>
                        <div class="kabar-content">
                            <div class="kabar-meta">
                                <span><i class="fas fa-calendar"></i> 10 Feb 2024</span>
                                <span><i class="fas fa-user"></i> Admin</span>
                            </div>
                            <h3 class="kabar-title">Program Edukasi Alam untuk Generasi Muda</h3>
                            <p class="kabar-excerpt">Menginspirasi generasi muda untuk mencintai dan menjaga kelestarian alam melalui program edukasi.</p>
                            <a href="#" class="kabar-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                    <article class="kabar-card">
                        <div class="kabar-image">
                            <img src="/assets/newtheme/images/pegunungan4.jpg" alt="Trail Running">
                            <span class="kabar-category">Kompetisi</span>
                        </div>
                        <div class="kabar-content">
                            <div class="kabar-meta">
                                <span><i class="fas fa-calendar"></i> 8 Feb 2024</span>
                                <span><i class="fas fa-user"></i> Admin</span>
                            </div>
                            <h3 class="kabar-title">Mountain Trail Running Championship</h3>
                            <p class="kabar-excerpt">Kompetisi lari trail gunung terbesar dengan peserta dari seluruh Indonesia siap digelar.</p>
                            <a href="#" class="kabar-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                    <article class="kabar-card">
                        <div class="kabar-image">
                            <img src="/assets/newtheme/images/pegunungan5.jpg" alt="Wildlife">
                            <span class="kabar-category">Konservasi</span>
                        </div>
                        <div class="kabar-content">
                            <div class="kabar-meta">
                                <span><i class="fas fa-calendar"></i> 5 Feb 2024</span>
                                <span><i class="fas fa-user"></i> Admin</span>
                            </div>
                            <h3 class="kabar-title">Pelestarian Satwa Liar di Habitat Gunung</h3>
                            <p class="kabar-excerpt">Program konservasi untuk melindungi keanekaragaman hayati di ekosistem pegunungan.</p>
                            <a href="#" class="kabar-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                    <article class="kabar-card">
                        <div class="kabar-image">
                            <img src="/assets/newtheme/images/pegunungan6.jpg" alt="Mountain Festival">
                            <span class="kabar-category">Festival</span>
                        </div>
                        <div class="kabar-content">
                            <div class="kabar-meta">
                                <span><i class="fas fa-calendar"></i> 1 Feb 2024</span>
                                <span><i class="fas fa-user"></i> Admin</span>
                            </div>
                            <h3 class="kabar-title">Mountain Festival 2024 Siap Digelar</h3>
                            <p class="kabar-excerpt">Festival tahunan pecinta alam dengan berbagai aktivitas menarik dan komunitas dari seluruh negeri.</p>
                            <a href="#" class="kabar-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
            </div>
            <button class="scroll-btn scroll-right" id="kabarScrollRight"><i class="fas fa-chevron-right"></i></button>
        </div>
    </section>

    <!-- Card Scroll Section -->
    <section class="card-scroll-section">
        <div class="section-header">
            <h2 class="section-title">Event</h2>
            <p class="section-subtitle">Temukan berbagai aktivitas menarik bersama kami</p>
        </div>
        <div class="card-scroll-wrapper">
            <button class="card-scroll-btn card-scroll-left" id="cardScrollLeft"><i class="fas fa-chevron-left"></i></button>
            <div class="card-scroll-container" id="cardScrollContainer">
                <div class="card-item">
                    <div class="card-image">
                        <img src="/assets/newtheme/images/event1.jpg" alt="Ice Climbing">
                        <div class="card-overlay">
                            <span class="card-tag">SNOC</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>SNOC</h3>
                        <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu .... </p>
                        <a href="#" class="card-btn">Jelajahi</a>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card-image">
                        <img src="/assets/newtheme/images/event2.jpg" alt="Mountain Biking">
                        <div class="card-overlay">
                            <span class="card-tag">NWCT</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>NWCT</h3>
                        <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu .... </p>
                        <a href="#" class="card-btn">Jelajahi</a>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card-image">
                        <img src="/assets/newtheme/images/event3.jpg" alt="Paragliding">
                        <div class="card-overlay">
                            <span class="card-tag">LLBS</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>LLBS</h3>
                        <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu .... </p>
                        <a href="#" class="card-btn">Jelajahi</a>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card-image">
                        <img src="/assets/newtheme/images/card-4.jpg" alt="Lake Exploration">
                        <div class="card-overlay">
                            <span class="card-tag">DIKLAT</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>DIKLAT</h3>
                          <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu .... </p>
                        <a href="#" class="card-btn">Jelajahi</a>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card-image">
                        <img src="/assets/newtheme/images/card-5.jpg" alt="Alpine Trekking">
                        <div class="card-overlay">
                            <span class="card-tag">FAMGATH</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>FAMGATH</h3>
                        <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu .... </p>
                        <a href="#" class="card-btn">Jelajahi</a>
                    </div>
                </div>

                <div class="card-item">
                    <div class="card-image">
                        <img src="/assets/newtheme/images/card-6.jpg" alt="Sunset Summit">
                        <div class="card-overlay">
                            <span class="card-tag">MUBES</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>MUBES</h3>
                         <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu .... </p>
                      <a href="#" class="card-btn">Jelajahi</a>
                    </div>
                </div>

                <div class="card-item">
                    <div class="card-image">
                        <img src="/assets/newtheme/images/event4.jpg" alt="Sunset Summit">
                        <div class="card-overlay">
                            <span class="card-tag">RUA</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>RUA</h3>
                        <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu .... </p>
                      <a href="#" class="card-btn">Jelajahi</a>
                    </div>
                </div>

                <div class="card-item">
                    <div class="card-image">
                        <img src="/assets/newtheme/images/event5.jpg" alt="Sunset Summit">
                        <div class="card-overlay">
                            <span class="card-tag">ULTAH</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>ULTAH</h3>
                          <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu .... </p>
                      <a href="#" class="card-btn">Jelajahi</a>
                    </div>
                </div>

                <div class="card-item">
                    <div class="card-image">
                        <img src="/assets/newtheme/images/event6.jpg" alt="Sunset Summit">
                        <div class="card-overlay">
                            <span class="card-tag">SABHA PEDULI</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>SABHA PEDULI</h3>
                        <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu .... </p>
                        <a href="#" class="card-btn">Jelajahi</a>
                    </div>
                </div>
            </div>
            <button class="card-scroll-btn card-scroll-right" id="cardScrollRight"><i class="fas fa-chevron-right"></i></button>
        </div>
    </section>

    <!-- Documentation Gallery Section -->
    <section class="gallery-section" id="dokumentasi">
        <div class="section-header">
            <h2 class="section-title">Dokumentasi Kegiatan</h2>
            <p class="section-subtitle">Momen-momen berharga dari petualangan kami</p>
        </div>
        <div class="gallery-container">
            <div class="gallery-item large">
                <img src="/assets/newtheme/images/pegunungan1.jpg" alt="Team Photo">
                <div class="gallery-overlay">
                    <div class="gallery-info">
                        <h4>Ekspedisi Tim Sabhagiriwana</h4>
                        <p>Base Camp Expedition 2024</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="/assets/newtheme/images/pegunungan2.jpg" alt="Rock Climbing">
                <div class="gallery-overlay">
                    <div class="gallery-info">
                        <h4>Technical Climbing</h4>
                        <p>Advanced Rock Course</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item wide">
                <img src="/assets/newtheme/images/pegunungan3.jpg" alt="Sunrise Panorama">
                <div class="gallery-overlay">
                    <div class="gallery-info">
                        <h4>Golden Hour</h4>
                        <p>Mountain Sunrise View</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item tall">
                <img src="/assets/newtheme/images/pegunungan4.jpg" alt="Rappelling">
                <div class="gallery-overlay">
                    <div class="gallery-info">
                        <h4>Descent Training</h4>
                        <p>Rappelling Workshop</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="/assets/newtheme/images/pegunungan5.jpg" alt="Wildflowers">
                <div class="gallery-overlay">
                    <div class="gallery-info">
                        <h4>Alpine Meadow</h4>
                        <p>Spring Season</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item wide">
                <img src="/assets/newtheme/images/event4.jpg" alt="Night Camping">
                <div class="gallery-overlay">
                    <div class="gallery-info">
                        <h4>Under The Stars</h4>
                        <p>Night Photography</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="/assets/newtheme/images/event5.jpg" alt="River Crossing">
                <div class="gallery-overlay">
                    <div class="gallery-info">
                        <h4>River Trekking</h4>
                        <p>Water Adventure</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item tall">
                <img src="/assets/newtheme/images/event4.jpg" alt="Summit Victory">
                <div class="gallery-overlay">
                    <div class="gallery-info">
                        <h4>Summit Success</h4>
                        <p>Peak Achievement</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<style>
    /* ===== IMPORT GOOGLE FONT POPPINS ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

/* ===== RESET & BASE ===== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
}

/* ===== NAVBAR ===== */
.navbar {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    background: #ffffff;
    box-shadow: 0 2px 20px rgba(0, 0, 0, 0.06);
    padding: 0 24px;
    height: 70px;
    display: flex;
    align-items: center;
    border-bottom: 3px solid #c62828;
    transition: all 0.3s ease;
    font-family: 'Poppins', sans-serif;
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
    font-family: 'Poppins', sans-serif;
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
    font-family: 'Poppins', sans-serif;
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
    font-family: 'Poppins', sans-serif;
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

/* ===== DROPDOWN ===== */
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
    font-family: 'Poppins', sans-serif;
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
    font-family: 'Poppins', sans-serif;
}

.btn-login-nav:hover {
    background: #b71c1c;
    color: #fff !important;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(198, 40, 40, 0.35);
}

/* ===== MOBILE MENU ===== */
.mobile-menu-btn {
    display: none;
    flex-direction: column;
    gap: 5px;
    background: none;
    border: none;
    cursor: pointer;
    padding: 8px;
    border-radius: 8px;
    transition: background 0.3s ease;
}

.mobile-menu-btn:hover {
    background: rgba(0, 0, 0, 0.04);
}

.mobile-menu-btn span {
    width: 26px;
    height: 3px;
    background: #1a1a2e;
    border-radius: 10px;
    transition: all 0.3s ease;
    display: block;
}

/* Mobile menu active state */
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
    .mobile-menu-btn {
        display: flex;
    }

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
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.35s ease;
        max-height: calc(100vh - 70px);
        overflow-y: auto;
    }

    .nav-menu.active {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .nav-item {
        width: 100%;
    }

    .nav-link {
        padding: 12px 16px;
        font-size: 15px;
        justify-content: space-between;
        border-radius: 8px;
        font-family: 'Poppins', sans-serif;
    }

    .nav-link i {
        font-size: 14px;
    }

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
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease, padding 0.3s ease;
        padding-top: 0;
        padding-bottom: 0;
    }

    .has-dropdown.dropdown-open .dropdown {
        max-height: 600px;
        padding-top: 6px;
        padding-bottom: 6px;
    }

    .dropdown li a {
        padding: 10px 16px;
        font-size: 14px;
        font-family: 'Poppins', sans-serif;
    }

    .dropdown li a:hover {
        padding-left: 20px;
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
    }

    .nav-link {
        font-size: 14px;
        padding: 10px 14px;
        font-family: 'Poppins', sans-serif;
    }
}
</style>

<!-- Navigation -->
<nav class="navbar" id="navbar">
    <div class="nav-container">
        <!-- Logo -->
        <a href="/" class="logo">
            <img src="/assets/newtheme/gambar/sabha.png" alt="Sabhagiriwana Logo" class="logo-img">
            <span class="logo-text">Sabhagiriwana'17</span>
        </a>

        <!-- Mobile Menu Button -->
        <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <!-- Navigation Menu -->
        <ul class="nav-menu" id="navMenu">
            <li class="nav-item">
                <a href="/" class="nav-link">Home</a>
            </li>

            <li class="nav-item has-dropdown">
                <a href="#" class="nav-link">Sabhagiriwana17 <i class="fas fa-chevron-down"></i></a>
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
                <a href="#" class="nav-link">Event <i class="fas fa-chevron-down"></i></a>
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
                <a href="#" class="nav-link">Berita <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown">
                    <li><a href="#berita-terbaru"><i class="fas fa-newspaper"></i> Berita</a></li>
                    <li><a href="#artikel"><i class="fas fa-file-alt"></i> Artikel</a></li>
                    <li><a href="#pengumuman"><i class="fas fa-bullhorn"></i> Pengumuman</a></li>
                    <li><a href="#liputan"><i class="fas fa-camera"></i> Liputan Khusus</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="/login" class="nav-link btn-login-nav">Login</a>
            </li>
        </ul>
    </div>
</nav>


<script>
    // Mobile Menu Toggle
const mobileBtn = document.getElementById('mobileMenuBtn');
const navMenu = document.getElementById('navMenu');

mobileBtn.addEventListener('click', function() {
    this.classList.toggle('active');
    navMenu.classList.toggle('active');
});

// Dropdown toggle on mobile (biar bisa expand)
const dropdownItems = document.querySelectorAll('.has-dropdown');

dropdownItems.forEach(item => {
    const link = item.querySelector('.nav-link');
    const dropdown = item.querySelector('.dropdown');

    link.addEventListener('click', function(e) {
        if (window.innerWidth <= 992) {
            e.preventDefault();
            item.classList.toggle('dropdown-open');
        }
    });
});

// Close menu when clicking outside
document.addEventListener('click', function(e) {
    if (!e.target.closest('.navbar')) {
        mobileBtn.classList.remove('active');
        navMenu.classList.remove('active');
    }
});
</script>

<style>
    /* ===== IMPORT POPPINS ===== */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

    /* ========================================
       NAVBAR DASHBOARD
    ======================================== */
    .navbar-dashboard {
        font-family: 'Poppins', sans-serif;
        background: #ffffff;
        padding: 0 24px;
        height: 72px;
        box-shadow: 0 2px 16px rgba(0, 0, 0, 0.04);
        border-bottom: 3px solid #c62828;
        display: flex;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 999;
    }

    /* ========================================
       BRAND WRAPPER
    ======================================== */
    .navbar-brand-wrapper {
        display: flex;
        align-items: center;
        gap: 12px;
        flex-shrink: 0;
    }

    .navbar-toggler-dashboard {
        background: none;
        border: none;
        padding: 8px 10px;
        border-radius: 10px;
        cursor: pointer;
        transition: background 0.3s ease;
        color: #1a1a2e;
        font-size: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .navbar-toggler-dashboard:hover {
        background: rgba(198, 40, 40, 0.06);
    }

    .brand-logo {
        display: block;
        line-height: 1;
    }

    .brand-logo img {
        height: 40px;
        width: auto;
        display: block;
        border-radius: 8px;
    }

    .brand-logo-mini {
        display: none;
    }

    /* ========================================
       MENU WRAPPER
    ======================================== */
    .navbar-menu-wrapper-dashboard {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex: 1;
        padding-left: 20px;
    }

    /* ========================================
       WELCOME TEXT
    ======================================== */
    .navbar-nav-left {
        display: flex;
        align-items: center;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .nav-item-welcome {
        display: flex;
        flex-direction: column;
        line-height: 1.3;
    }

    .welcome-text {
        font-size: 18px;
        font-weight: 600;
        color: #1a1a2e;
        margin: 0;
        letter-spacing: -0.2px;
    }

    .welcome-text .user-name {
        color: #c62828;
        font-weight: 700;
    }

    .welcome-sub-text {
        font-size: 13px;
        font-weight: 400;
        color: #7a8a9e;
        margin: 0;
        letter-spacing: 0.2px;
    }

    /* ========================================
       RIGHT SIDE
    ======================================== */
    .navbar-nav-right {
        display: flex;
        align-items: center;
        gap: 8px;
        list-style: none;
        margin: 0;
        padding: 0;
        margin-left: auto;
    }

    /* ========================================
       USER DROPDOWN
    ======================================== */
    .user-dropdown {
        position: relative;
    }

    .user-dropdown .nav-link {
        display: flex;
        align-items: center;
        padding: 4px;
        border-radius: 50%;
        transition: all 0.3s ease;
        cursor: pointer;
        border: 2px solid transparent;
    }

    .user-dropdown .nav-link:hover {
        border-color: #c62828;
        transform: scale(1.02);
    }

    .user-dropdown .nav-link img {
        width: 40px;
        height: 40px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #e8ecf1;
        transition: border-color 0.3s ease;
    }

    .user-dropdown .nav-link:hover img {
        border-color: #c62828;
    }

    /* ========================================
       DROPDOWN MENU
    ======================================== */
    .dropdown-menu-dashboard {
        position: absolute;
        right: 0;
        top: calc(100% + 10px);
        min-width: 260px;
        background: #ffffff;
        border-radius: 16px;
        box-shadow: 0 12px 48px rgba(0, 0, 0, 0.08);
        padding: 8px 0;
        opacity: 0;
        visibility: hidden;
        transform: translateY(8px);
        transition: all 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.04);
        z-index: 1000;
    }

    .user-dropdown:hover .dropdown-menu-dashboard,
    .user-dropdown.active .dropdown-menu-dashboard {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .dropdown-header-dashboard {
        padding: 16px 20px 14px;
        text-align: center;
        border-bottom: 1px solid #f0f2f5;
    }

    .dropdown-header-dashboard img {
        width: 56px;
        height: 56px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #c62828;
        padding: 2px;
    }

    .dropdown-header-dashboard .dropdown-name {
        font-size: 15px;
        font-weight: 600;
        color: #1a1a2e;
        margin: 8px 0 2px;
    }

    .dropdown-header-dashboard .dropdown-email {
        font-size: 12px;
        color: #7a8a9e;
        margin: 0;
    }

    .dropdown-item-dashboard {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 20px;
        color: #1a1a2e;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.2s ease;
        font-family: 'Poppins', sans-serif;
        border: none;
        background: none;
        width: 100%;
        cursor: pointer;
    }

    .dropdown-item-dashboard:hover {
        background: rgba(198, 40, 40, 0.05);
        color: #c62828;
    }

    .dropdown-item-dashboard i {
        width: 20px;
        text-align: center;
        color: #c62828;
        font-size: 16px;
    }

    .dropdown-item-dashboard .badge-dashboard {
        margin-left: auto;
        background: #c62828;
        color: #fff;
        font-size: 10px;
        font-weight: 600;
        padding: 2px 10px;
        border-radius: 30px;
        font-family: 'Poppins', sans-serif;
    }

    .dropdown-divider-dashboard {
        height: 1px;
        background: #f0f2f5;
        margin: 4px 16px;
    }

    .dropdown-item-dashboard.text-danger {
        color: #c62828;
    }

    .dropdown-item-dashboard.text-danger:hover {
        background: rgba(198, 40, 40, 0.08);
        color: #b71c1c;
    }

    /* ========================================
       MOBILE TOGGLER
    ======================================== */
    .navbar-toggler-mobile {
        display: none;
        background: none;
        border: none;
        padding: 8px 10px;
        border-radius: 10px;
        cursor: pointer;
        transition: background 0.3s ease;
        color: #1a1a2e;
        font-size: 24px;
    }

    .navbar-toggler-mobile:hover {
        background: rgba(198, 40, 40, 0.06);
    }

    /* ========================================
       RESPONSIVE
    ======================================== */
    @media (max-width: 992px) {
        .navbar-dashboard {
            padding: 0 16px;
            height: 64px;
        }

        .brand-logo img {
            height: 32px;
        }

        .navbar-menu-wrapper-dashboard {
            padding-left: 12px;
        }

        .welcome-text {
            font-size: 15px;
        }

        .welcome-sub-text {
            font-size: 12px;
        }

        .navbar-toggler-mobile {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .user-dropdown .nav-link img {
            width: 34px;
            height: 34px;
        }
    }

    @media (max-width: 576px) {
        .navbar-dashboard {
            padding: 0 12px;
            height: 58px;
        }

        .brand-logo img {
            height: 28px;
        }

        .navbar-brand-wrapper {
            gap: 8px;
        }

        .navbar-toggler-dashboard {
            padding: 4px 8px;
            font-size: 18px;
        }

        .welcome-text {
            font-size: 13px;
        }

        .welcome-sub-text {
            font-size: 11px;
        }

        .user-dropdown .nav-link img {
            width: 30px;
            height: 30px;
        }

        .dropdown-menu-dashboard {
            min-width: 220px;
            right: -10px;
        }

        .dropdown-header-dashboard img {
            width: 48px;
            height: 48px;
        }

        .dropdown-item-dashboard {
            font-size: 13px;
            padding: 8px 16px;
        }
    }

    @media (max-width: 480px) {
        .navbar-dashboard {
            height: 54px;
            padding: 0 10px;
        }

        .brand-logo img {
            height: 24px;
        }

        .welcome-text {
            font-size: 12px;
        }

        .welcome-sub-text {
            font-size: 10px;
        }

        .user-dropdown .nav-link img {
            width: 28px;
            height: 28px;
        }
    }

    /* ========================================
       DARK MODE SUPPORT (OPSIONAL)
    ======================================== */
    @media (prefers-color-scheme: dark) {
        .navbar-dashboard {
            background: #1a1a2e;
            border-bottom-color: #c62828;
        }

        .welcome-text {
            color: #e8ecf1;
        }

        .welcome-sub-text {
            color: #9aa8b9;
        }

        .dropdown-menu-dashboard {
            background: #1a1a2e;
            border-color: rgba(255, 255, 255, 0.05);
        }

        .dropdown-header-dashboard {
            border-bottom-color: rgba(255, 255, 255, 0.05);
        }

        .dropdown-header-dashboard .dropdown-name {
            color: #e8ecf1;
        }

        .dropdown-header-dashboard .dropdown-email {
            color: #9aa8b9;
        }

        .dropdown-item-dashboard {
            color: #e8ecf1;
        }

        .dropdown-item-dashboard:hover {
            background: rgba(198, 40, 40, 0.1);
        }

        .navbar-toggler-dashboard {
            color: #e8ecf1;
        }

        .navbar-toggler-mobile {
            color: #e8ecf1;
        }

        .dropdown-divider-dashboard {
            background: rgba(255, 255, 255, 0.05);
        }

        .dropdown-item-dashboard i {
            color: #c62828;
        }
    }
</style>

<!-- ============================================================
     NAVBAR DASHBOARD
     ============================================================ -->
<nav class="navbar-dashboard">

    <!-- ===== BRAND / LOGO ===== -->
    <div class="navbar-brand-wrapper">
        <!-- Toggle Sidebar -->
        <button class="navbar-toggler-dashboard" type="button" data-bs-toggle="minimize">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Logo Utama -->
        <a class="brand-logo" href="/dashboard">
            <img src="/assets/newtheme/gambar/sabha.png" alt="Sabhagiriwana17">
        </a>

        <!-- Logo Mini (opsional, untuk collapsed sidebar) -->
        {{-- <a class="brand-logo-mini" href="/dashboard">
            <img src="/assets/newtheme/gambar/logountag.png" alt="Sabhagiriwana17">
        </a> --}}
    </div>

    <!-- ===== MENU UTAMA ===== -->
    <div class="navbar-menu-wrapper-dashboard">

        <!-- LEFT: WELCOME TEXT -->
        <ul class="navbar-nav-left">
            <li class="nav-item-welcome">
                <h1 class="welcome-text">
                    Selamat
                    {{ \Carbon\Carbon::now()->format('A') == 'AM' ? 'Pagi' : (\Carbon\Carbon::now()->format('A') == 'PM' && \Carbon\Carbon::now()->format('H') < 18 ? 'Siang' : 'Malam') }},
                    <span class="user-name">{{ $user->username ?? 'Admin' }}</span>
                </h1>
                <p class="welcome-sub-text">{{ $title ?? 'Dashboard' }}</p>
            </li>
        </ul>

        <!-- RIGHT: USER & TOGGLER -->
        <ul class="navbar-nav-right">

            <!-- ===== USER DROPDOWN ===== -->
            <li class="user-dropdown">
                <!-- Avatar -->
                <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ $user->avatar ? asset($user->avatar) : asset('assets/newtheme/gambar/logountag.png') }}" alt="Profile">
                </a>

                <!-- Dropdown Menu -->
                <div class="dropdown-menu-dashboard">
                    <!-- Header -->
                    <div class="dropdown-header-dashboard">
                        <img src="{{ $user->avatar ? asset($user->avatar) : asset('assets/newtheme/gambar/logountag.png') }}" alt="Profile">
                        <p class="dropdown-name">{{ $user->name ?? 'Guest' }}</p>
                        <p class="dropdown-email">{{ $user->email ?? 'guest@example.com' }}</p>
                    </div>

                    <!-- Menu Items -->
                    <a class="dropdown-item-dashboard" href="/profile">
                        <i class="fas fa-user"></i> My Profile
                        <span class="badge-dashboard">1</span>
                    </a>
                    <a class="dropdown-item-dashboard" href="/settings">
                        <i class="fas fa-cog"></i> Settings
                    </a>

                    <div class="dropdown-divider-dashboard"></div>

                    <!-- Logout -->
                    <a class="dropdown-item-dashboard text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Log Out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>

        <!-- ===== TOGGLER MOBILE ===== -->
        <button class="navbar-toggler-mobile" type="button" data-bs-toggle="offcanvas">
            <i class="fas fa-ellipsis-v"></i>
        </button>

    </div>
</nav>

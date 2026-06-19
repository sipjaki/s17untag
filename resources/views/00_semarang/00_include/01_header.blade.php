<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Sabhagiriwana 17' }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/newtheme/gambar/sabha.png" />

    <!-- Google Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <style>
        /* ============================================================
           RESET & BASE
           ============================================================ */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            padding-top: 70px;
            background: #fafafa;
            color: #1a1a2e;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        img {
            max-width: 100%;
            display: block;
        }

        /* ============================================================
           NAVBAR
           ============================================================ */
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

        .mobile-menu-btn {
            display: none;
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

        @media (max-width: 992px) {
            .mobile-menu-btn {
                display: flex !important;
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
                display: none;
                max-height: calc(100vh - 70px);
                overflow-y: auto;
                z-index: 9999;
            }
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
                display: none;
                padding-top: 0;
                padding-bottom: 0;
            }
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

        /* ============================================================
           RUNNING BANNER
           ============================================================ */
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
        .running-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: repeating-linear-gradient(90deg,
                    transparent, transparent 20px,
                    rgba(255, 255, 255, 0.03) 20px,
                    rgba(255, 255, 255, 0.03) 21px);
            pointer-events: none;
        }
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
        .banner-track {
            display: flex;
            white-space: nowrap;
            animation: scrollBanner 25s linear infinite;
            will-change: transform;
        }
        .banner-content {
            display: flex;
            align-items: center;
            gap: 30px;
            padding: 0 20px;
            flex-shrink: 0;
        }
        @keyframes scrollBanner {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }
        .running-banner:hover .banner-track {
            animation-play-state: paused;
        }
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
            0%,
            100% {
                transform: scale(1);
                opacity: 0.6;
            }
            50% {
                transform: scale(1.15);
                opacity: 1;
            }
        }
        .banner-text {
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
        @media (max-width: 768px) {
            .running-banner {
                padding: 10px 0;
            }
            .banner-content {
                gap: 20px;
                padding: 0 16px;
            }
            .banner-text {
                font-size: 13px;
            }
            .banner-icon {
                font-size: 14px;
            }
            .banner-track {
                animation-duration: 20s;
            }
        }
        @media (max-width: 480px) {
            .running-banner {
                padding: 8px 0;
            }
            .banner-content {
                gap: 14px;
                padding: 0 12px;
            }
            .banner-text {
                font-size: 11px;
            }
            .banner-icon {
                font-size: 12px;
            }
            .banner-track {
                animation-duration: 16s;
            }
        }

        /* ============================================================
           NEWS SLIDER
           ============================================================ */
        .news-slider-section {
            padding: 60px 20px;
            max-width: 1280px;
            margin: 0 auto;
        }
        .slider-container {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.10);
            background: #fff;
        }
        .slider-wrapper {
            display: flex;
            transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .slide {
            min-width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 420px;
        }
        .slide-image {
            height: 100%;
            overflow: hidden;
        }
        .slide-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        .slide:hover .slide-image img {
            transform: scale(1.03);
        }
        .slide-content {
            padding: 48px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: #ffffff;
        }
        .slide-tag {
            display: inline-block;
            background: #c62828;
            color: #fff;
            font-size: 12px;
            font-weight: 600;
            padding: 4px 16px;
            border-radius: 30px;
            letter-spacing: 0.5px;
            margin-bottom: 16px;
            width: fit-content;
        }
        .slide-title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 16px;
            color: #1a1a2e;
            line-height: 1.2;
        }
        .slide-desc {
            font-size: 15px;
            color: #555;
            line-height: 1.7;
            margin-bottom: 24px;
        }
        .slide-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #c62828;
            color: #fff;
            padding: 12px 28px;
            border-radius: 30px;
            font-weight: 500;
            font-size: 14px;
            transition: all 0.3s ease;
            width: fit-content;
        }
        .slide-btn:hover {
            background: #b71c1c;
            transform: translateX(6px);
            box-shadow: 0 6px 20px rgba(198, 40, 40, 0.3);
        }
        .slider-controls {
            position: absolute;
            bottom: 24px;
            right: 24px;
            display: flex;
            align-items: center;
            gap: 16px;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(8px);
            padding: 8px 16px;
            border-radius: 40px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
        .slider-btn {
            background: none;
            border: none;
            font-size: 20px;
            color: #1a1a2e;
            cursor: pointer;
            padding: 4px 8px;
            border-radius: 50%;
            transition: all 0.3s ease;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .slider-btn:hover {
            background: #c62828;
            color: #fff;
        }
        .slider-dots {
            display: flex;
            gap: 8px;
        }
        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #ccc;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .dot.active {
            background: #c62828;
            width: 28px;
            border-radius: 10px;
        }

        @media (max-width: 992px) {
            .slide {
                grid-template-columns: 1fr;
                min-height: auto;
            }
            .slide-image {
                height: 280px;
            }
            .slide-content {
                padding: 32px 24px;
            }
            .slide-title {
                font-size: 22px;
            }
        }
        @media (max-width: 480px) {
            .news-slider-section {
                padding: 30px 12px;
            }
            .slide-content {
                padding: 24px 16px;
            }
            .slide-title {
                font-size: 18px;
            }
            .slide-desc {
                font-size: 14px;
            }
            .slider-controls {
                bottom: 12px;
                right: 12px;
                padding: 6px 12px;
                gap: 10px;
            }
            .slider-btn {
                width: 30px;
                height: 30px;
                font-size: 16px;
            }
        }

        /* ============================================================
           SEKAPUR SIRIH
           ============================================================ */
        .kabar-section {
            padding: 60px 20px;
            max-width: 1280px;
            margin: 0 auto;
        }
        .section-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .section-title {
            font-size: 32px;
            font-weight: 700;
            color: #1a1a2e;
            position: relative;
            display: inline-block;
        }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: #c62828;
            border-radius: 2px;
        }
        .section-subtitle {
            color: #777;
            font-size: 16px;
            margin-top: 20px;
        }

        .kabar-paragraf {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            background: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.04);
        }
        .kabar-kiri p,
        .kabar-kanan p {
            font-size: 15px;
            line-height: 1.9;
            color: #444;
            text-align: justify;
        }

        @media (max-width: 768px) {
            .kabar-paragraf {
                grid-template-columns: 1fr;
                padding: 24px;
                gap: 24px;
            }
            .section-title {
                font-size: 26px;
            }
        }

        /* ============================================================
           BEAUTIFUL WORDS
           ============================================================ */
        .beautiful-words-section {
            padding: 60px 20px;
            max-width: 1280px;
            margin: 0 auto;
        }
        .section-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: stretch;
        }
        .bw-image-container {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            height: 100%;
            min-height: 400px;
        }
        .bw-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .bw-image-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 40px 30px;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
            color: #fff;
        }
        .quote-icon {
            font-size: 28px;
            color: #c62828;
            margin-bottom: 12px;
            display: block;
        }
        .quote-text {
            font-size: 20px;
            font-weight: 500;
            line-height: 1.5;
            font-style: italic;
        }
        .quote-author {
            display: block;
            margin-top: 12px;
            font-weight: 400;
            font-size: 14px;
            color: #ffd54f;
        }

        .bw-video-container {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }
        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            border-radius: 20px;
            overflow: hidden;
            background: #000;
        }
        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
        .video-caption h3 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 8px;
        }
        .video-caption p {
            color: #555;
            line-height: 1.7;
        }

        @media (max-width: 992px) {
            .section-container {
                grid-template-columns: 1fr;
            }
            .bw-image-container {
                min-height: 300px;
            }
        }
        @media (max-width: 480px) {
            .beautiful-words-section {
                padding: 30px 12px;
            }
            .quote-text {
                font-size: 16px;
            }
            .video-caption h3 {
                font-size: 18px;
            }
        }

        /* ============================================================
           KABAR TERBARU (scroll horizontal)
           ============================================================ */
        .kabar-scroll-container {
            position: relative;
            overflow: hidden;
        }
        .kabar-wrapper {
            overflow-x: auto;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
            padding: 10px 4px 20px;
        }
        .kabar-wrapper::-webkit-scrollbar {
            height: 6px;
        }
        .kabar-wrapper::-webkit-scrollbar-track {
            background: #f0f0f0;
            border-radius: 10px;
        }
        .kabar-wrapper::-webkit-scrollbar-thumb {
            background: #c62828;
            border-radius: 10px;
        }

        .kabar-grid {
            display: flex;
            gap: 24px;
            width: max-content;
        }
        .kabar-card {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            width: 320px;
            flex-shrink: 0;
            transition: transform 0.3s ease;
        }
        .kabar-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.10);
        }
        .kabar-image {
            position: relative;
            height: 200px;
            overflow: hidden;
        }
        .kabar-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .kabar-category {
            position: absolute;
            top: 12px;
            left: 12px;
            background: #c62828;
            color: #fff;
            font-size: 11px;
            font-weight: 600;
            padding: 4px 14px;
            border-radius: 30px;
            letter-spacing: 0.3px;
        }
        .kabar-content {
            padding: 20px 20px 24px;
        }
        .kabar-meta {
            display: flex;
            gap: 16px;
            font-size: 12px;
            color: #888;
            margin-bottom: 12px;
        }
        .kabar-meta i {
            margin-right: 4px;
        }
        .kabar-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #1a1a2e;
            line-height: 1.3;
        }
        .kabar-excerpt {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 16px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .kabar-link {
            color: #c62828;
            font-weight: 500;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.3s ease;
        }
        .kabar-link:hover {
            gap: 12px;
        }

        .scroll-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: #fff;
            border: none;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.10);
            cursor: pointer;
            font-size: 18px;
            color: #1a1a2e;
            transition: all 0.3s ease;
            z-index: 5;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .scroll-btn:hover {
            background: #c62828;
            color: #fff;
        }
        .scroll-left {
            left: -12px;
        }
        .scroll-right {
            right: -12px;
        }

        @media (max-width: 768px) {
            .scroll-btn {
                display: none;
            }
            .kabar-card {
                width: 280px;
            }
            .kabar-grid {
                gap: 16px;
            }
        }
        @media (max-width: 480px) {
            .kabar-card {
                width: 260px;
            }
            .kabar-title {
                font-size: 16px;
            }
        }

        /* ============================================================
           EVENT CARD SCROLL
           ============================================================ */
        .card-scroll-section {
            padding: 60px 20px;
            max-width: 1280px;
            margin: 0 auto;
        }
        .card-scroll-wrapper {
            position: relative;
            overflow: hidden;
        }
        .card-scroll-container {
            display: flex;
            gap: 24px;
            overflow-x: auto;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
            padding: 10px 4px 20px;
        }
        .card-scroll-container::-webkit-scrollbar {
            height: 6px;
        }
        .card-scroll-container::-webkit-scrollbar-track {
            background: #f0f0f0;
            border-radius: 10px;
        }
        .card-scroll-container::-webkit-scrollbar-thumb {
            background: #c62828;
            border-radius: 10px;
        }

        .card-item {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            width: 280px;
            flex-shrink: 0;
            transition: transform 0.3s ease;
        }
        .card-item:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.10);
        }
        .card-image {
            position: relative;
            height: 200px;
            overflow: hidden;
        }
        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .card-overlay {
            position: absolute;
            top: 12px;
            left: 12px;
        }
        .card-tag {
            background: #c62828;
            color: #fff;
            font-size: 11px;
            font-weight: 600;
            padding: 4px 14px;
            border-radius: 30px;
            letter-spacing: 0.3px;
        }
        .card-content {
            padding: 20px;
        }
        .card-content h3 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 8px;
        }
        .card-content p {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 16px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .card-btn {
            display: inline-block;
            background: #c62828;
            color: #fff;
            padding: 8px 24px;
            border-radius: 30px;
            font-weight: 500;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        .card-btn:hover {
            background: #b71c1c;
            transform: translateX(4px);
        }

        .card-scroll-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: #fff;
            border: none;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.10);
            cursor: pointer;
            font-size: 18px;
            color: #1a1a2e;
            transition: all 0.3s ease;
            z-index: 5;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card-scroll-btn:hover {
            background: #c62828;
            color: #fff;
        }
        .card-scroll-left {
            left: -12px;
        }
        .card-scroll-right {
            right: -12px;
        }

        @media (max-width: 768px) {
            .card-scroll-btn {
                display: none;
            }
            .card-item {
                width: 240px;
            }
        }

        /* ============================================================
           GALLERY
           ============================================================ */
        .gallery-section {
            padding: 60px 20px;
            max-width: 1280px;
            margin: 0 auto;
        }
        .gallery-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-auto-rows: 200px;
            gap: 16px;
        }
        .gallery-item {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            cursor: pointer;
        }
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .gallery-item:hover img {
            transform: scale(1.05);
        }
        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 20px;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
            color: #fff;
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }
        .gallery-info h4 {
            font-size: 16px;
            font-weight: 600;
        }
        .gallery-info p {
            font-size: 13px;
            color: #ddd;
        }

        .gallery-item.large {
            grid-row: span 2;
        }
        .gallery-item.wide {
            grid-column: span 2;
        }
        .gallery-item.tall {
            grid-row: span 2;
        }

        @media (max-width: 992px) {
            .gallery-container {
                grid-template-columns: repeat(3, 1fr);
                grid-auto-rows: 180px;
            }
            .gallery-item.wide {
                grid-column: span 2;
            }
            .gallery-item.large,
            .gallery-item.tall {
                grid-row: span 1;
            }
        }
        @media (max-width: 640px) {
            .gallery-container {
                grid-template-columns: repeat(2, 1fr);
                grid-auto-rows: 160px;
                gap: 10px;
            }
            .gallery-item.wide {
                grid-column: span 2;
            }
            .gallery-item.large,
            .gallery-item.tall {
                grid-row: span 1;
            }
        }
        @media (max-width: 480px) {
            .gallery-container {
                grid-template-columns: 1fr 1fr;
                grid-auto-rows: 140px;
                gap: 8px;
            }
            .gallery-item.wide {
                grid-column: span 2;
            }
        }

        /* ============================================================
           FOOTER (gabungan dari kode sebelumnya)
           ============================================================ */
        .footer {
            background: #1a1a2e;
            color: #e0e0e0;
            padding: 60px 0 0;
            font-family: 'Poppins', sans-serif;
            margin-top: 40px;
        }

        .footer-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1.5fr 1.5fr;
            gap: 40px;
            padding-bottom: 40px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .footer-about .footer-logo {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }
        .footer-about .footer-logo img {
            height: 60px;
            width: auto;
            border-radius: 50%;
            border: 2px solid #c62828;
            padding: 3px;
            background: #fff;
        }
        .footer-about .footer-logo span {
            font-size: 22px;
            font-weight: 700;
            color: #ffffff;
            letter-spacing: -0.5px;
        }
        .footer-about .footer-logo span::first-letter {
            color: #c62828;
        }

        .footer-desc {
            font-size: 14px;
            line-height: 1.8;
            color: #b0b0b0;
            margin-bottom: 20px;
            text-align: justify;
        }

        .social-links {
            display: flex;
            gap: 12px;
        }
        .social-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
            color: #ffffff;
            transition: all 0.3s ease;
            text-decoration: none;
            font-size: 18px;
        }
        .social-link:hover {
            background: #c62828;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(198, 40, 40, 0.3);
        }

        .footer-title {
            font-size: 18px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        .footer-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background: #c62828;
            border-radius: 2px;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }
        .footer-links ul li {
            margin-bottom: 10px;
        }
        .footer-links ul li a {
            color: #b0b0b0;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .footer-links ul li a i {
            font-size: 10px;
            color: #c62828;
            transition: transform 0.3s ease;
        }
        .footer-links ul li a:hover {
            color: #ffffff;
            transform: translateX(4px);
        }
        .footer-links ul li a:hover i {
            transform: translateX(4px);
        }

        .contact-item {
            display: flex;
            gap: 12px;
            margin-bottom: 14px;
            font-size: 14px;
            color: #b0b0b0;
            line-height: 1.6;
        }
        .contact-item i {
            color: #c62828;
            font-size: 16px;
            margin-top: 3px;
            min-width: 18px;
        }

        .footer-maps iframe {
            width: 100%;
            height: 200px;
            border: 0;
            border-radius: 10px;
            filter: grayscale(20%);
        }

        .footer-bottom {
            padding: 20px 0;
            text-align: center;
            font-size: 14px;
            color: #888;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            margin-top: 10px;
        }

        @media (max-width: 992px) {
            .footer-grid {
                grid-template-columns: 1fr 1fr;
                gap: 30px;
            }
        }

        @media (max-width: 640px) {
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            .footer-about .footer-logo span {
                font-size: 18px;
            }
            .footer {
                padding: 40px 0 0;
            }
            .footer-container {
                padding: 0 16px;
            }
        }
    </style>
</head>
<body>

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

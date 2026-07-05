@include('00_semarang.00_include.01_header')
@include('00_semarang.00_include.05_headermenu')

    <!-- ============================================================
    RUNNING BANNER
    ============================================================ -->
    <div class="running-banner">
        <div class="banner-track">
            <div class="banner-content">
                <span class="banner-icon"><i class="fas fa-mountain"></i></span>
                <span class="banner-text">
                    Selamat datang, wahai jiwa-jiwa pengembara — di sini langkah berpadu dengan semesta,
                    angin berbisik menjadi sahabat, dan setiap jejak pulang membawa makna.
                </span>
                <span class="banner-icon"><i class="fas fa-tree"></i></span>
                <span class="banner-text">
                    Sabhagiriwana'17 — Jejak Petualangan, Cinta Alam, dan Persaudaraan Abadi.
                </span>
                <span class="banner-icon"><i class="fas fa-campground"></i></span>
                <span class="banner-text">
                    #Sabhagiriwana17 #PencintaAlam #PetualangSejati
                </span>
                <span class="banner-icon"><i class="fas fa-mountain"></i></span>
            </div>
            <div class="banner-content">
                <span class="banner-icon"><i class="fas fa-mountain"></i></span>
                <span class="banner-text">
                    Selamat datang, wahai jiwa-jiwa pengembara — di sini langkah berpadu dengan semesta,
                    angin berbisik menjadi sahabat, dan setiap jejak pulang membawa makna.
                </span>
                <span class="banner-icon"><i class="fas fa-tree"></i></span>
                <span class="banner-text">
                    Sabhagiriwana'17 — Jejak Petualangan, Cinta Alam, dan Persaudaraan Abadi.
                </span>
                <span class="banner-icon"><i class="fas fa-campground"></i></span>
                <span class="banner-text">
                    #Sabhagiriwana17 #PencintaAlam #PetualangSejati
                </span>
                <span class="banner-icon"><i class="fas fa-mountain"></i></span>
            </div>
        </div>
    </div>

    <!-- ============================================================
    NEWS SLIDER
    ============================================================ -->
<!-- ============================================================
    NEWS SLIDER - DINAMIS DARI DATABASE (ID PERTAMA)
    ============================================================ -->
<style>
/* ============================================================
   SLIDER SECTION - KONTROL DI BAWAH (TIDAK MENUTUPI GAMBAR)
   ============================================================ */
.news-slider-section {
    position: relative;
    width: 100%;
    padding: 20px 0;
    padding-top: 90px; /* jarak dari atas agar tidak tertutup navbar */
    background: #f8f9fa;
}

.slider-container {
    max-width: 1200px;
    margin: 0 auto;
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    overflow: hidden; /* membulatkan sudut */
    display: flex;
    flex-direction: column; /* tata letak vertikal: slide di atas, kontrol di bawah */
}

/* ===== WRAPPER SLIDE (GAMBAR + DESKRIPSI) ===== */
.slider-wrapper {
    display: flex;
    transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    flex-shrink: 0; /* tidak mengecil */
}

.slide {
    min-width: 100%;
    flex: 0 0 100%;
    display: flex;
    flex-direction: column;
    background: #fff;
}

/* ===== GAMBAR ===== */
.slide-image {
    width: 100%;
    height: 500px;
    overflow: hidden;
    background: #f0f2f5;
    display: flex;
    align-items: center;
    justify-content: center;
}

.slide-image img {
    width: 100%;
    height: 100%;
    object-fit: scale-down; /* gambar tidak terpotong */
    display: block;
    background: #f0f2f5;
    transition: none !important; /* hilangkan efek hover */
}
.slide:hover .slide-image img {
    transform: none !important;
}

/* ===== DESKRIPSI ===== */
.slide-content {
    padding: 24px 30px 30px;
    background: #ffffff;
    text-align: center;
    border-top: 1px solid #f0f0f0;
}

.slide-desc {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1rem;
    line-height: 1.8;
    color: #1a2332;
    margin: 0 auto;
    padding: 0 10px;
    max-width: 800px;
}
.slide-desc::before {
    content: '"';
    font-size: 2rem;
    color: #c62828;
    margin-right: 6px;
    opacity: 0.5;
}
.slide-desc::after {
    content: '"';
    font-size: 2rem;
    color: #c62828;
    margin-left: 6px;
    opacity: 0.5;
}

/* ===== SLIDER CONTROLS (SEKARANG DI BAWAH) ===== */
.slider-controls {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    padding: 16px 20px;
    background: #ffffff;
    border-top: 1px solid #e9ecef; /* garis pemisah */
    flex-shrink: 0; /* tidak mengecil */
}

.slider-btn {
    background: transparent;
    border: none;
    color: #1a2332;
    font-size: 20px;
    cursor: pointer;
    padding: 6px 12px;
    border-radius: 50%;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}
.slider-btn:hover {
    background: rgba(0,0,0,0.05);
    color: #c62828;
    transform: scale(1.1);
}

.slider-dots {
    display: flex;
    gap: 10px;
}

.dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: #ced4da;
    cursor: pointer;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}
.dot.active {
    background: #c62828;
    border-color: #c62828;
    transform: scale(1.2);
}
.dot:hover {
    background: #adb5bd;
}

/* ============================================================
   RESPONSIVE
   ============================================================ */
@media (max-width: 992px) {
    .slide-image { height: 400px; }
    .slide-content { padding: 18px 20px 24px; }
    .slide-desc { font-size: 1rem; }
    .news-slider-section { padding-top: 80px; }
    .slider-controls { padding: 14px 16px; gap: 16px; }
}

@media (max-width: 768px) {
    .slide-image { height: 300px; }
    .slide-content { padding: 16px 16px 20px; }
    .slide-desc { font-size: 0.95rem; line-height: 1.6; }
    .news-slider-section { padding-top: 70px; }
    .slider-controls { padding: 12px 14px; gap: 14px; }
    .slider-btn { font-size: 16px; padding: 4px 10px; }
    .dot { width: 10px; height: 10px; }
}

@media (max-width: 480px) {
    .slide-image { height: 220px; }
    .slide-content { padding: 12px 12px 16px; }
    .slide-desc { font-size: 0.85rem; line-height: 1.5; }
    .slide-desc::before,
    .slide-desc::after { font-size: 1.4rem; }
    .news-slider-section { padding-top: 60px; }
    .slider-controls { padding: 10px 10px; gap: 10px; flex-wrap: wrap; }
    .slider-btn { font-size: 14px; padding: 2px 8px; }
    .dot { width: 8px; height: 8px; }
}
</style>

<section class="news-slider-section" id="beranda">
    <div class="slider-container">

        {{-- WRAPPER SLIDE --}}
        <div class="slider-wrapper" id="newsSlider">
            @php
                $slideData = $data1->first();
                if (!$slideData) {
                    $slideData = new \stdClass();
                    $slideData->sabha1 = null;
                    $slideData->sabha2 = null;
                    $slideData->sabha3 = null;
                    $slideData->sabha4 = null;
                    $slideData->sabha5 = null;
                    $slideData->sabha6 = null;
                    $slideData->sabha7 = null;
                    $slideData->sabha8 = null;
                    $slideData->sabha9 = null;
                    $slideData->sabha10 = null;
                }

                $slides = [];
                for ($i = 1; $i <= 5; $i++) {
                    $imgField = 'sabha' . $i;
                    $descField = 'sabha' . ($i + 5);
                    $image = $slideData->$imgField ?? null;
                    $desc  = $slideData->$descField ?? null;
                    if (!empty($image) && file_exists(public_path($image))) {
                        $slides[] = [
                            'image' => $image,
                            'description' => $desc ?: 'Keterangan tidak tersedia',
                        ];
                    }
                }

                if (empty($slides)) {
                    $slides = [
                        ['image' => '/assets/newtheme/images/pegunungan1.jpg', 'description' => 'Keindahan alam pegunungan yang memukau.'],
                        ['image' => '/assets/newtheme/images/pegunungan2.jpg', 'description' => 'Petualangan di tengah hutan dan gunung.'],
                        ['image' => '/assets/newtheme/images/pegunungan3.jpg', 'description' => 'Menikmati udara segar di puncak.'],
                    ];
                }
                $slides = array_slice($slides, 0, 5);
            @endphp

            @foreach ($slides as $key => $slide)
                <div class="slide">
                    <div class="slide-image">
                        <img src="{{ asset($slide['image']) }}" alt="Slide {{ $key + 1 }}" loading="lazy">
                    </div>
                    <div class="slide-content">
                        <p class="slide-desc">{{ $slide['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- SLIDER CONTROLS (DILETAKKAN DI BAWAH, BUKAN ABSOLUTE) --}}
        <div class="slider-controls">
            <button class="slider-btn prev" id="prevSlide"><i class="fas fa-chevron-left"></i></button>
            <div class="slider-dots">
                @foreach ($slides as $key => $slide)
                    <span class="dot" data-slide="{{ $key }}"></span>
                @endforeach
            </div>
            <button class="slider-btn next" id="nextSlide"><i class="fas fa-chevron-right"></i></button>
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('newsSlider');
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const prevBtn = document.getElementById('prevSlide');
    const nextBtn = document.getElementById('nextSlide');
    let currentIndex = 0;
    const totalSlides = slides.length;
    let autoplayInterval = null;
    const AUTOPLAY_DELAY = 5000;

    slides.forEach(slide => slide.style.display = 'flex');

    function goToSlide(index) {
        if (index < 0) index = totalSlides - 1;
        if (index >= totalSlides) index = 0;
        currentIndex = index;
        slider.style.transform = `translateX(-${currentIndex * 100}%)`;
        dots.forEach((dot, i) => dot.classList.toggle('active', i === currentIndex));
    }

    prevBtn.addEventListener('click', function() { goToSlide(currentIndex - 1); resetAutoplay(); });
    nextBtn.addEventListener('click', function() { goToSlide(currentIndex + 1); resetAutoplay(); });
    dots.forEach((dot, index) => dot.addEventListener('click', function() { goToSlide(index); resetAutoplay(); }));

    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') { goToSlide(currentIndex - 1); resetAutoplay(); }
        else if (e.key === 'ArrowRight') { goToSlide(currentIndex + 1); resetAutoplay(); }
    });

    let touchStartX = 0, touchEndX = 0;
    const container = document.querySelector('.slider-container');
    container.addEventListener('touchstart', function(e) {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });
    container.addEventListener('touchend', function(e) {
        touchEndX = e.changedTouches[0].screenX;
        const diff = touchStartX - touchEndX;
        if (Math.abs(diff) > 50) {
            if (diff > 0) goToSlide(currentIndex + 1);
            else goToSlide(currentIndex - 1);
            resetAutoplay();
        }
    }, { passive: true });

    function startAutoplay() {
        if (autoplayInterval) clearInterval(autoplayInterval);
        if (totalSlides > 1) {
            autoplayInterval = setInterval(() => goToSlide(currentIndex + 1), AUTOPLAY_DELAY);
        }
    }
    function resetAutoplay() {
        if (autoplayInterval) { clearInterval(autoplayInterval); startAutoplay(); }
    }

    startAutoplay();

    const sliderContainer = document.querySelector('.slider-container');
    sliderContainer.addEventListener('mouseenter', function() {
        if (autoplayInterval) { clearInterval(autoplayInterval); autoplayInterval = null; }
    });
    sliderContainer.addEventListener('mouseleave', function() {
        if (!autoplayInterval) startAutoplay();
    });

    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            slider.style.transform = `translateX(-${currentIndex * 100}%)`;
        }, 100);
    });

    goToSlide(0);
});
</script>

<!-- ============================================================
    SEKAPUR SIRIH (DATABASE)
    ============================================================ -->
<style>
    /* ============================================
       FONT POPPINS (Minimalis & Clean)
       ============================================ */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400;1,600;1,800&display=swap');

    /* ============================================
       WRAPPER UTAMA - SEJARAH (Gaya Biasa)
       ============================================ */
    .sejarah-container {
        font-family: 'Poppins', sans-serif;
        max-width: 1200px;
        margin: 40px auto;
        padding: 45px 55px;
        background: #ffffff;
        border-radius: 12px;
        border: 1px solid #e0d6cc;
        box-shadow: 0 8px 30px rgba(26, 35, 126, 0.06);
        transition: all 0.3s ease;
    }

    /* ============================================
       HEADER / JUDUL (Tanpa Ornamen)
       ============================================ */
    .sejarah-header {
        text-align: center;
        margin-bottom: 40px;
        padding-bottom: 20px;
        border-bottom: 2px solid #e8e0d8;
    }

    .sejarah-title {
        font-family: 'Poppins', sans-serif;
        font-size: 2.4rem;
        font-weight: 700;
        color: #B71C1C;
        letter-spacing: 0.5px;
        margin: 0;
    }

    .sejarah-title span {
        color: #1A237E;
        font-weight: 700;
    }

    .sejarah-subtitle {
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        color: #1A237E;
        font-size: 0.8rem;
        letter-spacing: 4px;
        text-transform: uppercase;
        margin-top: 4px;
        opacity: 0.6;
    }

    /* ============================================
       GRID 2 KOLOM
       ============================================ */
    .sejarah-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: start;
    }

    /* ============================================
       STYLE PARAGRAF (Tanpa Drop Cap)
       ============================================ */
    .sejarah-kiri p,
    .sejarah-kanan p {
        font-family: 'Poppins', sans-serif;
        font-size: 1rem;
        font-weight: 400;
        line-height: 2;
        color: #3E2723;
        text-align: justify;
        margin-bottom: 1.4rem;
        text-indent: 0; /* tanpa indent biar lebih santai */
    }

    /* ============================================
       FALLBACK (Data Kosong)
       ============================================ */
    .sejarah-empty {
        grid-column: 1 / -1;
        text-align: center;
        padding: 40px 20px;
        background: #faf8f6;
        border-radius: 12px;
        border: 1px dashed #bcaaa4;
    }
    .sejarah-empty p {
        font-family: 'Poppins', sans-serif;
        font-size: 1rem;
        font-weight: 400;
        color: #5D4037;
        margin: 0;
    }
    .empty-icon {
        font-size: 2.2rem;
        display: block;
        margin-bottom: 8px;
        color: #B71C1C;
        opacity: 0.5;
    }

    /* ============================================
       RESPONSIVE
       ============================================ */
    @media (max-width: 992px) {
        .sejarah-container {
            padding: 30px 30px;
            margin: 20px 15px;
        }
        .sejarah-title {
            font-size: 2rem;
        }
        .sejarah-grid {
            gap: 25px;
        }
        .sejarah-kiri p,
        .sejarah-kanan p {
            font-size: 0.95rem;
        }
    }

    @media (max-width: 768px) {
        .sejarah-container {
            padding: 20px 18px;
            border-radius: 10px;
        }
        .sejarah-title {
            font-size: 1.6rem;
        }
        .sejarah-grid {
            grid-template-columns: 1fr; /* 1 kolom di HP */
            gap: 10px;
        }
        .sejarah-kiri p,
        .sejarah-kanan p {
            font-size: 0.92rem;
            line-height: 1.9;
        }
        .sejarah-subtitle {
            letter-spacing: 2px;
            font-size: 0.7rem;
        }
    }
</style>

<!-- ============================================
     MULAI SECTION SEJARAH (GAYA BIASA)
     ============================================ -->
<section class="sejarah-container" id="sejarah-sabhagiriwana">

    <!-- HEADER / JUDUL -->
    <div class="sejarah-header">
        <h3 class="sejarah-title">Sekapur Sirih <span>S'17</span></h3>
        <div class="sejarah-subtitle">— Jejak Langkah & Pengabdian —</div>
    </div>

    <!-- AMBIL DATA PERTAMA -->
    @php
        $sekapur = $data2->first();
    @endphp

    <!-- ISI KONTEN -->
    <div class="sejarah-grid">

        @if($sekapur)
            <!-- ========== KOLOM KIRI ========== -->
            <div class="sejarah-kiri">
                @if($sekapur->sabha1)
                    <p>{{ $sekapur->sabha1 }}</p>
                @endif
                @if($sekapur->sabha2)
                    <p>{{ $sekapur->sabha2 }}</p>
                @endif
            </div>

            <!-- ========== KOLOM KANAN ========== -->
            <div class="sejarah-kanan">
                @if($sekapur->sabha3)
                    <p>{{ $sekapur->sabha3 }}</p>
                @endif
                @if($sekapur->sabha4)
                    <p>{{ $sekapur->sabha4 }}</p>
                @endif
            </div>
        @else
            <!-- ========== FALLBACK (Data Kosong) ========== -->
            <div class="sejarah-empty">
                <span class="empty-icon">📜</span>
                <p>Belum ada konten Sejarah Sabhagiriwana S'17.</p>
                <p style="font-family:'Poppins',sans-serif; font-weight:300; font-size:0.9rem; color:#8d6e63; margin-top:6px;">
                    Silakan tambahkan melalui admin panel.
                </p>
            </div>
        @endif

    </div>
    <!-- END .sejarah-grid -->

</section>
<!-- END .sejarah-container -->

<style>
    /* ============================================
       FONT POPPINS (sama seperti sejarah)
       ============================================ */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400;1,600;1,800&display=swap');

    /* ============================================
       WRAPPER UTAMA - ATRIBUT (Seragam dengan Sejarah)
       ============================================ */
    .atribut-container {
        font-family: 'Poppins', sans-serif;
        max-width: 1200px;
        margin: 40px auto;
        padding: 45px 55px;
        background: #ffffff;
        border-radius: 12px;
        border: 1px solid #e0d6cc;
        box-shadow: 0 8px 30px rgba(26, 35, 126, 0.06);
        transition: all 0.3s ease;
    }

    /* ============================================
       HEADER / JUDUL (Seragam dengan Sejarah)
       ============================================ */
    .atribut-header {
        text-align: center;
        margin-bottom: 40px;
        padding-bottom: 20px;
        border-bottom: 2px solid #e8e0d8;
    }

    .atribut-title {
        font-family: 'Poppins', sans-serif;
        font-size: 2.4rem;
        font-weight: 700;
        color: #B71C1C;
        letter-spacing: 0.5px;
        margin: 0;
    }

    .atribut-title span {
        color: #1A237E;
        font-weight: 700;
    }

    .atribut-subtitle {
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        color: #1A237E;
        font-size: 0.8rem;
        letter-spacing: 4px;
        text-transform: uppercase;
        margin-top: 4px;
        opacity: 0.6;
    }

    /* ============================================
       GRID 2 KOLOM (Seragam dengan Sejarah)
       ============================================ */
    .atribut-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: start;
    }

    /* ============================================
       KARTU ATRIBUT
       ============================================ */
    .atribut-card {
        background: #ffffff;
        border-radius: 12px;
        border: 1px solid #f0ebe6;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .atribut-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 28px rgba(26, 35, 126, 0.08);
    }

    /* ===== GAMBAR (dapat diklik) ===== */
    .atribut-card .card-image {
        width: 100%;
        background: #faf8f6;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        min-height: 220px;
        border-bottom: 1px solid #f0ebe6;
        cursor: pointer; /* menunjukkan bahwa gambar bisa diklik */
    }

    .atribut-card .card-image img {
        max-width: 100%;
        max-height: 200px;
        width: auto;
        height: auto;
        object-fit: contain;
        display: block;
        border-radius: 6px;
        transition: opacity 0.2s ease;
    }

    .atribut-card .card-image img:hover {
        opacity: 0.85;
    }

    /* ===== BODY KARTU ===== */
    .atribut-card .card-body {
        padding: 24px 26px 28px;
        flex: 1;
    }

    .atribut-card .card-body h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 1.2rem;
        font-weight: 600;
        color: #1A237E;
        margin-bottom: 14px;
        letter-spacing: 0.3px;
        border-left: 4px solid #B71C1C;
        padding-left: 14px;
    }

    .atribut-card .card-body p {
        font-family: 'Poppins', sans-serif;
        font-size: 0.95rem;
        font-weight: 400;
        line-height: 2;
        color: #3E2723;
        text-align: justify;
        margin-bottom: 1rem;
        text-indent: 0;
    }

    .atribut-card .card-body p:last-of-type {
        margin-bottom: 0;
    }

    .atribut-card .card-body p strong {
        color: #B71C1C;
        font-weight: 600;
    }

    /* ============================================
       MODAL LIGHTBOX
       ============================================ */
    .modal-overlay {
        display: none; /* disembunyikan default */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.85);
        z-index: 9999;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        padding: 30px;
        box-sizing: border-box;
    }

    .modal-overlay.active {
        display: flex;
    }

    .modal-content {
        max-width: 90%;
        max-height: 90%;
        background: transparent;
        border-radius: 8px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        cursor: default;
        position: relative;
    }

    .modal-content img {
        max-width: 100%;
        max-height: 85vh;
        width: auto;
        height: auto;
        object-fit: contain;
        border-radius: 8px;
        display: block;
        background: #fff;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
    }

    /* Tombol tutup (X) */
    .modal-close {
        position: absolute;
        top: -40px;
        right: -10px;
        background: none;
        border: none;
        color: #fff;
        font-size: 2.4rem;
        font-weight: 300;
        cursor: pointer;
        transition: transform 0.2s ease;
        line-height: 1;
        padding: 4px 12px;
        border-radius: 50%;
        background: rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(4px);
    }
    .modal-close:hover {
        transform: scale(1.2);
        background: rgba(183, 28, 28, 0.8);
    }

    /* ============================================
       RESPONSIVE (Seragam dengan Sejarah)
       ============================================ */
    @media (max-width: 992px) {
        .atribut-container {
            padding: 30px 30px;
            margin: 20px 15px;
        }
        .atribut-title {
            font-size: 2rem;
        }
        .atribut-grid {
            gap: 25px;
        }
        .atribut-card .card-body p {
            font-size: 0.95rem;
        }
    }

    @media (max-width: 768px) {
        .atribut-container {
            padding: 20px 18px;
            border-radius: 10px;
        }
        .atribut-title {
            font-size: 1.6rem;
        }
        .atribut-grid {
            grid-template-columns: 1fr; /* 1 kolom di HP */
            gap: 20px;
        }
        .atribut-card .card-body p {
            font-size: 0.92rem;
            line-height: 1.9;
        }
        .atribut-subtitle {
            letter-spacing: 2px;
            font-size: 0.7rem;
        }
        .atribut-card .card-image {
            min-height: 160px;
            padding: 16px;
        }
        .atribut-card .card-image img {
            max-height: 150px;
        }
        .atribut-card .card-body {
            padding: 18px 18px 22px;
        }
        .atribut-card .card-body h3 {
            font-size: 1.1rem;
        }

        .modal-close {
            top: -34px;
            right: 0;
            font-size: 2rem;
            padding: 2px 10px;
        }
        .modal-overlay {
            padding: 16px;
        }
    }
</style>

<section class="atribut-container">+
    <div class="sejarah-header">
        <h3 class="sejarah-title">🧭 Atribut <span>S'17</span></h3>
        {{-- <div class="sejarah-subtitle">— At —</div> --}}
    </div>
    {{-- <div class="atribut-header">
        <h2 class="atribut-title">🧭 <span>ATRIBUT</span> KELENGKAPAN</h2>
        <p class="atribut-subtitle">Sabhagiriwana'17 – Unit Kesehatan Masyarakat Pencinta Alam UNTAG Semarang</p>
    </div> --}}

    <div class="atribut-grid">

        <!-- ========== ATRIBUT 1 ========== -->
        <div class="atribut-card">
            <div class="card-image" onclick="openModal(this.querySelector('img').src)">
                <img src="/assets/newtheme/gambar/atribut/atribut1.png" alt="Atribut 1 - Logo Universitas dan Sabhagiriwana" loading="lazy" />
            </div>
            <div class="card-body">
                <h3>Identitas Lembaga</h3>
                <p><strong>Atribut ini</strong> merupakan identitas resmi yang menampilkan nama <strong>Universitas 17 Agustus 1945 Semarang</strong> berdampingan dengan sebutan <strong>SABHAGIRIWANATTI</strong>. Kedua elemen ini menjadi simbol pengikat antara institusi pendidikan dan organisasi pecinta alam yang bernaung di dalamnya.</p>
                <p>Penempatan nama universitas dengan tipografi tegas menegaskan kewibawaan, sementara <strong>Sabhagiriwana</strong> – yang berarti “cahaya gunung” – merepresentasikan semangat petualangan, kebersamaan, dan kecintaan terhadap alam. Atribut ini biasa digunakan pada kop surat, spanduk resmi, atau tanda pengenal organisasi.</p>
            </div>
        </div>

        <!-- ========== ATRIBUT 2 ========== -->
        <div class="atribut-card">
            <div class="card-image" onclick="openModal(this.querySelector('img').src)">
                <img src="/assets/newtheme/gambar/atribut/atribut2.png" alt="Atribut 2 - Susunan vertikal logo" loading="lazy" />
            </div>
            <div class="card-body">
                <h3>Logo Vertikal</h3>
                <p><strong>Varian kedua</strong> menyajikan susunan yang lebih vertikal: kata <strong>UNIVERSITAS</strong> dan <strong>17 AGUSTUS 1945 SEMARANG</strong> ditumpuk, lalu di bawahnya terdapat <strong>SABHAGIRIWANATTI</strong>. Format ini memberikan kesan modern dan dinamis, cocok untuk aplikasi pada seragam, pin, atau atribut berukuran kompak.</p>
                <p>Dengan komposisi yang lebih tinggi daripada lebar, logo ini mudah dikenali meski dalam ukuran kecil. Tata letak seperti ini sering dipakai pada <strong>badge nama</strong> atau <strong>emblok</strong> karena mempertahankan keterbacaan tanpa mengurangi estetika. Warna dan proporsi huruf dijaga konsisten untuk menjaga citra organisasi.</p>
            </div>
        </div>

        <!-- ========== ATRIBUT 3 ========== -->
        <div class="atribut-card">
            <div class="card-image" onclick="openModal(this.querySelector('img').src)">
                <img src="/assets/newtheme/gambar/atribut/atribut3.png" alt="Atribut 3 - Seragam Pakaian Dinas Harian" loading="lazy" />
            </div>
            <div class="card-body">
                <h3>Seragam Harian</h3>
                <p><strong>Pakaian Dinas Harian (PDH)</strong> adalah seragam utama yang dikenakan oleh anggota Sabhagiriwana'17 dalam kegiatan rutin, perkantoran, dan pertemuan internal. Atribut ini menampilkan desain seragam yang rapi dengan ciri khas warna organisasi, serta dilengkapi dengan aksesori seperti syal dan badge.</p>
                <p>PDH menjadi <strong>identitas kesatuan</strong> dan mencerminkan disiplin anggota. Pada seragam ini, biasanya terdapat <strong>lambang S'17</strong> di dada kiri dan <strong>badge nama</strong> di dada kanan. Warna dan potongan mengikuti standar yang telah ditetapkan, sehingga memperkuat profesionalisme di setiap kesempatan dinas.</p>
            </div>
        </div>

        <!-- ========== ATRIBUT 4 ========== -->
        <div class="atribut-card">
            <div class="card-image" onclick="openModal(this.querySelector('img').src)">
                <img src="/assets/newtheme/gambar/atribut/atribut4.png" alt="Atribut 4 - Seragam Lapangan" loading="lazy" />
            </div>
            <div class="card-body">
                <h3>Seragam Lapangan</h3>
                <p><strong>Pakaian Dinas Lapangan (PDL)</strong> dirancang khusus untuk kegiatan di alam terbuka, seperti pendakian, penjelajahan, dan aksi kemanusiaan. Atribut ini menampilkan seragam yang lebih fungsional, dengan bahan yang tahan cuaca dan banyak kantong. Di bagian dada terdapat tulisan <strong>Unit Kesehatan Masyarakat Pencinta Alam – SABHAGIRIWANA'17 – UNTAG SEMARANG</strong>.</p>
                <p>PDL menjadi <strong>tameng identitas</strong> saat anggota berada di medan sesungguhnya. Selain melindungi dari elemen alam, seragam ini juga berfungsi sebagai alat komunikasi visual, memperkenalkan organisasi kepada masyarakat luas. Warna yang digunakan biasanya lebih gelap atau camo, untuk menyatu dengan lingkungan dan mengurangi risiko saat pengamatan.</p>
            </div>
        </div>

        <!-- ========== ATRIBUT 5 ========== -->
        <div class="atribut-card">
            <div class="card-image" onclick="openModal(this.querySelector('img').src)">
                <img src="/assets/newtheme/gambar/atribut/atribut5.png" alt="Atribut 5 - Ukuran Syal" loading="lazy" />
            </div>
            <div class="card-body">
                <h3>Syal – Spesifikasi Ukuran</h3>
                <p><strong>Syal anggota</strong> memiliki tiga tingkatan berdasarkan status keanggotaan. <strong>Syal Anggota Muda</strong> berukuran 100 cm x 70 cm, dengan keterangan “Diklat X0 ANGKATAN X0”. <strong>Syal Anggota Penuh</strong> juga berukuran 100 cm x 70 cm namun dilengkapi lambang S'17 berdiameter 7,5 cm. Sedangkan <strong>Syal Anggota Luar Biasa & Kehormatan</strong> memiliki ukuran yang sama dengan anggota penuh, tetapi dengan desain khusus pada lambang.</p>
                <p>Perbedaan ini bukan sekadar variasi, melainkan <strong>penanda jenjang dan penghargaan</strong>. Anggota muda yang telah menyelesaikan diklat berhak menyandang syal penuh. Anggota kehormatan diberikan syal eksklusif sebagai bentuk apresiasi atas jasa luar biasa. Semua syal menggunakan kain berkualitas tinggi dan dijahit dengan presisi agar nyaman saat dikenakan di leher.</p>
            </div>
        </div>

        <!-- ========== ATRIBUT 6 ========== -->
        <div class="atribut-card">
            <div class="card-image" onclick="openModal(this.querySelector('img').src)">
                <img src="/assets/newtheme/gambar/atribut/atribut6.png" alt="Atribut 6 - Badge dan Emblem" loading="lazy" />
            </div>
            <div class="card-body">
                <h3>Badge &amp; Emblem</h3>
                <p><strong>Badge</strong> merupakan tanda pengenal yang dipasang di kantong dada kiri. Ada beberapa jenis: <strong>Badge Anggota Kehormatan</strong> (untuk tokoh yang berjasa), <strong>Badge Dewan Pengurus</strong> (untuk pengurus inti), dan <strong>Badge Nama Anggota</strong> yang mencantumkan nama lengkap serta NPA (Nomor Pokok Anggota). Selain itu terdapat <strong>Emblem Bendera</strong> dan <strong>Lambang S'17</strong> yang menjadi ikon utama.</p>
                <p>Setiap badge memiliki fungsi administratif dan simbolis. Badge membantu mengenali posisi seseorang dalam struktur organisasi secara cepat. Ukuran dan tata letaknya telah diatur, misalnya <strong>badge nama</strong> memiliki panjang 12 cm dengan tulisan seperti “ANITYO YULIANTORO NPA. S'17 085 09 HW”. Semua atribut ini diproduksi dengan standar tinggi agar awet dan tetap tampak gagah di setiap kesempatan.</p>
            </div>
        </div>

    </div>
</section>

<!-- ============================================
     MODAL LIGHTBOX (struktur HTML)
     ============================================ -->
<div class="modal-overlay" id="imageModal" onclick="closeModal(event)">
    <div class="modal-content" onclick="event.stopPropagation()">
        <button class="modal-close" onclick="closeModal()">&times;</button>
        <img id="modalImage" src="" alt="Perbesar gambar" />
    </div>
</div>

<!-- ============================================
     JAVASCRIPT UNTUK MODAL
     ============================================ -->
<script>
    // Buka modal dengan gambar
    function openModal(imageSrc) {
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImage');
        modalImg.src = imageSrc;
        modal.classList.add('active');
        document.body.style.overflow = 'hidden'; // cegah scroll
    }

    // Tutup modal
    function closeModal(event) {
        // Jika event ada dan targetnya bukan overlay, jangan tutup
        if (event && event.target !== event.currentTarget) return;
        const modal = document.getElementById('imageModal');
        modal.classList.remove('active');
        document.body.style.overflow = ''; // kembalikan scroll
    }

    // Tutup dengan tombol ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const modal = document.getElementById('imageModal');
            if (modal.classList.contains('active')) {
                closeModal();
            }
        }
    });
</script>
<!-- END .sejarah-container -->
    <!-- ============================================================
    BEAUTIFUL WORDS
    ============================================================ -->
 <style>
    /* ============================================
       FONT POPPINS
       ============================================ */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400;1,600;1,800&display=swap');

    /* ============================================
       WRAPPER UTAMA - TANPA HIASAN BERLEBIH
       ============================================ */
    .beautiful-words-section {
        font-family: 'Poppins', sans-serif;
        max-width: 1200px;
        margin: 40px auto;
        padding: 40px 50px;
        background: #ffffff;
        border-radius: 12px;
        border: 1px solid #d0c8c0;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
        transition: all 0.3s ease;
    }

    /* ============================================
       HEADER / JUDUL SECTION - SEDERHANA
       ============================================ */
    .tentang-header {
        text-align: center;
        margin-bottom: 35px;
        padding-bottom: 15px;
        border-bottom: 2px solid #B71C1C; /* garis merah bawah */
    }

    .tentang-title {
        font-family: 'Poppins', sans-serif;
        font-size: 2.2rem;
        font-weight: 700;
        color: #B71C1C;
        margin: 0 0 2px;
    }

    .tentang-title span {
        color: #1A237E;
        font-weight: 700;
    }

    .tentang-subtitle {
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        color: #1A237E;
        font-size: 0.85rem;
        letter-spacing: 4px;
        text-transform: uppercase;
        opacity: 0.7;
        margin-top: 2px;
    }

    /* ============================================
       GRID 2 KOLOM
       ============================================ */
    .section-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: start;
    }

    /* ============================================
       KOLOM KIRI
       ============================================ */
    .bw-left {
        display: flex;
        flex-direction: column;
        gap: 25px;
    }

    /* --- TOMBOL MERAH --- */
    .btn-merah {
        display: inline-block;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 1rem;
        padding: 12px 28px;
        background: #B71C1C;
        color: #ffffff !important;
        text-decoration: none;
        border-radius: 30px;
        border: 1px solid #B71C1C;
        box-shadow: 0 2px 8px rgba(183, 28, 28, 0.25);
        transition: all 0.3s ease;
        text-align: center;
        letter-spacing: 0.5px;
    }

    .btn-merah:hover {
        background: #1A237E;
        border-color: #1A237E;
        box-shadow: 0 4px 14px rgba(26, 35, 126, 0.3);
        transform: translateY(-2px);
        color: #ffffff !important;
    }

    /* --- TABEL ARTIKEL --- */
    .table-wrapper {
        background: #f9f6f3;
        border-radius: 10px;
        border: 1px solid #e0d6cc;
        overflow: hidden;
        overflow-x: auto;
    }

    .artikel-table {
        width: 100%;
        border-collapse: collapse;
        font-family: 'Poppins', sans-serif;
        font-size: 0.9rem;
        min-width: 400px;
    }

    .artikel-table thead {
        background: #1A237E;
        color: #ffffff;
    }

    .artikel-table thead th {
        padding: 12px 16px;
        text-align: left;
        font-weight: 600;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .artikel-table tbody td {
        padding: 12px 16px;
        color: #3E2723;
        border-bottom: 1px solid #ece3db;
        vertical-align: middle;
        font-weight: 400;
    }

    .artikel-table tbody tr:last-child td {
        border-bottom: none;
    }

    .artikel-table tbody tr:hover {
        background: rgba(183, 28, 28, 0.04);
    }

    .artikel-table .file-link {
        color: #1A237E;
        font-weight: 600;
        text-decoration: none;
        border-bottom: 1px solid #B71C1C;
        transition: color 0.2s;
    }

    .artikel-table .file-link:hover {
        color: #B71C1C;
    }

    .badge-empty {
        color: #8d6e63;
        font-size: 0.85rem;
        font-weight: 300;
        font-style: italic;
    }

    /* ============================================
       KOLOM KANAN - VIDEO
       ============================================ */
    .bw-right {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .bw-video-container {
        background: #ffffff;
        border-radius: 12px;
        border: 1px solid #e0d6cc;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        transition: box-shadow 0.3s;
    }

    .bw-video-container:hover {
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
    }

    .video-wrapper {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        background: #1A237E;
    }

    .video-wrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
    }

    .video-caption {
        padding: 18px 22px 22px;
        text-align: center;
    }

    .video-caption h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 1.1rem;
        font-weight: 700;
        color: #B71C1C;
        margin: 0 0 5px;
    }

    .video-caption p {
        font-family: 'Poppins', sans-serif;
        font-size: 0.9rem;
        font-weight: 400;
        color: #1A237E;
        margin: 0;
        opacity: 0.8;
        line-height: 1.6;
    }

    /* ============================================
       FALLBACK
       ============================================ */
    .empty-table-msg {
        text-align: center;
        padding: 30px 20px;
        color: #8d6e63;
        font-weight: 300;
    }
    .empty-table-msg span {
        font-size: 2rem;
        display: block;
        margin-bottom: 6px;
        color: #B71C1C;
        opacity: 0.5;
    }

    /* ============================================
       RESPONSIVE
       ============================================ */
    @media (max-width: 992px) {
        .beautiful-words-section {
            padding: 30px 25px;
            margin: 20px 15px;
        }
        .tentang-title {
            font-size: 1.8rem;
        }
        .section-container {
            gap: 30px;
        }
    }

    @media (max-width: 768px) {
        .beautiful-words-section {
            padding: 20px 16px;
            border-radius: 8px;
        }
        .tentang-title {
            font-size: 1.5rem;
        }
        .tentang-subtitle {
            font-size: 0.7rem;
            letter-spacing: 3px;
        }
        .section-container {
            grid-template-columns: 1fr;
            gap: 25px;
        }
        .btn-merah {
            width: 100%;
            padding: 12px 20px;
            font-size: 0.95rem;
        }
        .artikel-table {
            font-size: 0.8rem;
            min-width: 300px;
        }
        .artikel-table thead th,
        .artikel-table tbody td {
            padding: 10px 12px;
        }
        .video-caption {
            padding: 14px 16px 18px;
        }
        .video-caption h3 {
            font-size: 1rem;
        }
        .video-caption p {
            font-size: 0.85rem;
        }
    }
</style>

<!-- ============================================
     SECTION TENTANG KAMI - VERSI SEDERHANA
     ============================================ -->
<section class="beautiful-words-section" id="tentang">

    <!-- HEADER -->
    <div class="tentang-header">
        <h3 class="tentang-title">Tentang <span>S'17</span></h3>
        <div class="tentang-subtitle">— Eksplorasi & Pengabdian —</div>
    </div>

    <!-- GRID 2 KOLOM -->
    <div class="section-container">

        <!-- KIRI -->
        <div class="bw-left">
            <a href="/keanggotaan" class="btn-merah">
                🏔️ Buku Anggota S'17
            </a>

            <div class="table-wrapper">
                <table class="artikel-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            {{-- <th>Keterangan</th> --}}
                            <th>Berkas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @forelse($dataartikel as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><strong>{{ $item->sabha1 ?? '-' }}</strong></td>
                                {{-- <td>{{ $item->sabha2 ?? '-' }}</td> --}}
                                <td>
                                    @if($item->sabha3)
                                        <a href="{{ $item->sabha3 }}" class="file-link" target="_blank">
                                            📄 Berkas 1
                                        </a>
                                    @else
                                        <span class="badge-empty">-</span>
                                    @endif
                                    <br>
                                    @if($item->sabha4)
                                        <a href="{{ $item->sabha4 }}" class="file-link" target="_blank">
                                            📄 Berkas 2
                                        </a>
                                    @else
                                        <span class="badge-empty">-</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">
                                    <div class="empty-table-msg">
                                        <span>📭</span>
                                        Belum ada data artikel.
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- KANAN -->
        <div class="bw-right">
            <div class="bw-video-container">
                <div class="video-wrapper">
                    <iframe
                        src="https://youtube.com/@sabhagiriwana17?si=ebPUoMoF4fncVFHT"
                        title="Channel YouTube Sabhagiriwana S'17"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="video-caption">
                    <h3>Jelajahi Pengalamanmu Bersama Sabhagiriwana'17</h3>
                </div>
            </div>
        </div>

    </div>
</section>
    <!-- ============================================================
    KABAR TERBARU
    ============================================================ -->
    <style>
    /* ============================================
       SEMUA STYLE TETAP SAMA SEPERTI SEBELUMNYA
       ============================================ */
    body { background: #f5f0eb; }
    .kabar-section {
        font-family: 'Poppins', sans-serif;
        max-width: 1200px;
        margin: 30px auto;
        padding: 30px;
        background: #fff;
        border-radius: 12px;
        border: 1px solid #e0d6cc;
        box-shadow: 0 4px 20px rgba(0,0,0,0.04);
    }
    .section-header {
        text-align: center;
        margin-bottom: 25px;
        border-bottom: 2px solid #f0ebe6;
        padding-bottom: 15px;
    }
    .section-title {
        font-size: 2rem;
        font-weight: 700;
        color: #B71C1C;
        margin: 0;
    }
    .section-title span { color: #1A237E; }
    .kabar-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 24px;
    }
    .kabar-card {
        background: #fff;
        border-radius: 12px;
        border: 1px solid #f0ebe6;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        transition: 0.3s;
    }
    .kabar-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        border-color: #d7ccc8;
    }
    .kabar-image {
        position: relative;
        width: 100%;
        height: 200px;
        background: #f5f0eb;
        overflow: hidden;
    }
    .kabar-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .kabar-image .no-image {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        font-size: 3rem;
        color: #bcaaa4;
    }
    .kabar-content {
        padding: 16px 18px 20px;
    }
    .kabar-meta {
        display: flex;
        gap: 16px;
        font-size: 0.75rem;
        color: #a1887f;
        margin-bottom: 8px;
    }
    .kabar-meta i { margin-right: 4px; }
    .kabar-title {
        font-size: 1.05rem;
        font-weight: 700;
        color: #3E2723;
        margin: 0 0 8px;
        line-height: 1.4;
    }
    .kabar-excerpt {
        font-size: 0.9rem;
        color: #5D4037;
        line-height: 1.6;
        margin: 0 0 12px;
        opacity: 0.8;
    }
    .kabar-link {
        font-weight: 600;
        color: #1A237E;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: 0.3s;
        font-size: 0.85rem;
        cursor: pointer;
    }
    .kabar-link:hover { color: #B71C1C; gap: 10px; }
    .kabar-empty {
        text-align: center;
        padding: 60px 20px;
        color: #8d6e63;
        grid-column: 1 / -1;
    }
    .kabar-empty .empty-icon { font-size: 3rem; display: block; margin-bottom: 10px; opacity: 0.4; }
    .kabar-empty h4 { font-weight: 500; margin: 0; }
    .kabar-empty p { font-weight: 300; font-size: 0.95rem; }

    /* ============================================
       MODAL CUSTOM
       ============================================ */
    .modal-custom {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.5);
        font-family: 'Poppins', sans-serif;
    }
    .modal-custom.show {
        display: block;
    }
    .modal-custom .modal-content {
        background: #fff;
        margin: 5% auto;
        padding: 0;
        width: 90%;
        max-width: 800px;
        border-radius: 16px;
        border: 1px solid #e8e0d8;
        box-shadow: 0 20px 60px rgba(0,0,0,0.2);
        max-height: 85vh;
        overflow-y: auto;
        position: relative;
    }
    .modal-custom .modal-header {
        padding: 16px 24px;
        border-bottom: 2px solid #f0ebe6;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: sticky;
        top: 0;
        background: #fff;
        border-radius: 16px 16px 0 0;
        z-index: 10;
    }
    .modal-custom .modal-title {
        font-weight: 700;
        color: #B71C1C;
        font-size: 1.2rem;
        margin: 0;
    }
    .modal-custom .close {
        font-size: 2rem;
        font-weight: 300;
        cursor: pointer;
        color: #999;
        line-height: 1;
    }
    .modal-custom .close:hover {
        color: #B71C1C;
    }
    .modal-custom .modal-body {
        padding: 24px;
    }
    .modal-custom .modal-body .modal-judul {
        font-weight: 700;
        font-size: 1.3rem;
        color: #3E2723;
        border-bottom: 2px solid #f0ebe6;
        padding-bottom: 12px;
        margin-bottom: 16px;
    }
    .modal-custom .paragraf-box {
        background: #faf8f6;
        border-radius: 10px;
        padding: 12px 16px;
        margin-bottom: 14px;
        border-left: 3px solid #B71C1C;
    }
    .modal-custom .paragraf-box p {
        font-size: 0.95rem;
        line-height: 1.8;
        margin: 0;
        color: #3E2723;
    }
    .modal-custom .paragraf-box.blue { border-left-color: #1A237E; }

    /* === GALERI FOTO – DINAMIS (hanya muncul jika ada foto) === */
    .modal-custom .foto-section {
        margin-top: 16px;
        border-top: 1px solid #f0ebe6;
        padding-top: 16px;
    }
    .modal-custom .foto-section h6 {
        font-weight: 600;
        color: #3E2723;
        margin: 0 0 10px 0;
    }
    .modal-custom .foto-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
        gap: 12px;
    }
    .modal-custom .foto-item {
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid #eee;
        aspect-ratio: 1/1;
        background: #f5f0eb;
    }
    .modal-custom .foto-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .modal-custom .modal-footer {
        padding: 12px 24px;
        border-top: 1px solid #f0ebe6;
        text-align: right;
        position: sticky;
        bottom: 0;
        background: #fff;
        border-radius: 0 0 16px 16px;
    }
    .modal-custom .btn-tutup {
        border: 1px solid #d7ccc8;
        background: transparent;
        padding: 6px 24px;
        border-radius: 30px;
        font-weight: 500;
        transition: 0.3s;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
    }
    .modal-custom .btn-tutup:hover {
        background: #f5f0eb;
        border-color: #bcaaa4;
    }

    @media (max-width: 768px) {
        .kabar-section { padding: 20px 15px; margin: 15px; }
        .section-title { font-size: 1.5rem; }
        .kabar-grid { grid-template-columns: 1fr; }
        .kabar-image { height: 170px; }
        .modal-custom .foto-grid { grid-template-columns: repeat(auto-fill, minmax(120px, 1fr)); }
    }
</style>
{{--
<div class="container">
    <section class="kabar-section" id="berita-terbaru">
        <div class="section-header">
            <h3 class="section-title">Berita <span>S'17</span></h3>
        </div>

        <div class="kabar-grid">
            @php
                // Filter data: hanya tampilkan item yang memiliki minimal satu konten
                $filtered = $databerita->filter(function ($item) {
                    $judul = $item->sabha1 ?? '';
                $p1    = $item->sabha2 ?? '';
                    $p2    = $item->sabha3 ?? '';
                    $p3    = $item->sabha4 ?? '';
                    $foto1 = $item->sabha5 ?? '';
                    $foto2 = $item->sabha6 ?? '';
                    $foto3 = $item->sabha7 ?? '';
                    $foto4 = $item->sabha8 ?? '';
                    $foto5 = $item->sabha9 ?? '';

                    return !empty(trim($judul)) || !empty(trim($p1)) || !empty(trim($p2)) || !empty(trim($p3))
                        || !empty(trim($foto1)) || !empty(trim($foto2)) || !empty(trim($foto3))
                        || !empty(trim($foto4)) || !empty(trim($foto5));
                });
            @endphp

            @forelse($filtered as $item)
                @php
                    $judul    = $item->sabha1 ?? 'Judul Berita';
                    $p1       = $item->sabha2 ?? '';
                    $p2       = $item->sabha3 ?? '';
                    $p3       = $item->sabha4 ?? '';
                    $tanggal  = $item->created_at ? $item->created_at->format('d M Y') : '-';
                    $foto1    = $item->sabha5 ?? '';
                    $foto2    = $item->sabha6 ?? '';
                    $foto3    = $item->sabha7 ?? '';
                    $foto4    = $item->sabha8 ?? '';
                    $foto5    = $item->sabha9 ?? '';
                    $excerpt  = Str::limit($p1 ?: $p2 ?: $p3 ?: 'Belum ada deskripsi.', 120);
                @endphp

                <div class="kabar-card"
                     data-judul="{{ addslashes($judul) }}"
                     data-p1="{{ addslashes($p1) }}"
                     data-p2="{{ addslashes($p2) }}"
                     data-p3="{{ addslashes($p3) }}"
                     data-tanggal="{{ $tanggal }}"
                     data-foto1="{{ $foto1 }}"
                     data-foto2="{{ $foto2 }}"
                     data-foto3="{{ $foto3 }}"
                     data-foto4="{{ $foto4 }}"
                     data-foto5="{{ $foto5 }}">

                    <div class="kabar-image">
                        @if($foto1)
                            <img src="{{ $foto1 }}" alt="{{ $judul }}">
                        @else
                            <div class="no-image"><i class="fas fa-mountain"></i></div>
                        @endif
                    </div>
                    <div class="kabar-content">
                        <div class="kabar-meta">
                            <span><i class="fas fa-calendar"></i> {{ $tanggal }}</span>
                            <span><i class="fas fa-user"></i> Admin</span>
                        </div>
                        <h3 class="kabar-title">{{ $judul }}</h3>
                        <p class="kabar-excerpt">{{ $excerpt }}</p>
                        <span class="kabar-link" onclick="bukaModal(this)">Baca Selengkapnya <i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>
            @empty
                <div class="kabar-empty">
                    <span class="empty-icon"><i class="fas fa-newspaper"></i></span>
                    <h4>Belum ada berita</h4>
                    <p>Belum ada konten berita yang tersedia saat ini.</p>
                </div>
            @endforelse
        </div>
    </section>
</div> --}}

<!-- ============================================
     MODAL CUSTOM
     ============================================ -->
<div id="myModal" class="modal-custom">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"><i class="fas fa-newspaper" style="margin-right:10px; color:#B71C1C;"></i> Detail Berita</h5>
            <span class="close" onclick="tutupModal()">&times;</span>
        </div>
        <div class="modal-body" id="kabarModalBody">
            <!-- diisi JS -->
        </div>
        <div class="modal-footer">
            <button class="btn-tutup" onclick="tutupModal()">
                <i class="fas fa-times"></i> Tutup
            </button>
        </div>
    </div>
</div>

<!-- ============================================
     JAVASCRIPT – HANYA TAMPILKAN DATA YANG ADA
     ============================================ -->
<script>
    (function() {
        "use strict";

        window.bukaModal = function(linkElement) {
            var card = linkElement.closest('.kabar-card');
            if (!card) return;

            var judul   = card.dataset.judul || 'Judul Berita';
            var p1      = card.dataset.p1 || '';
            var p2      = card.dataset.p2 || '';
            var p3      = card.dataset.p3 || '';
            var tanggal = card.dataset.tanggal || '-';
            var fotoList = [
                card.dataset.foto1 || '',
                card.dataset.foto2 || '',
                card.dataset.foto3 || '',
                card.dataset.foto4 || '',
                card.dataset.foto5 || ''
            ];

            var body = document.getElementById('kabarModalBody');
            if (!body) return;

            // 1. Judul
            var html = '<div class="modal-judul">' + judul + '</div>';

            // 2. Paragraf – hanya yang tidak kosong
            var paragrafArray = [
                { text: p1, class: '' },
                { text: p2, class: 'blue' },
                { text: p3, class: '' }
            ];
            var adaParagraf = false;
            paragrafArray.forEach(function(p) {
                if (p.text && p.text.trim() !== '') {
                    html += '<div class="paragraf-box ' + p.class + '"><p>' + p.text + '</p></div>';
                    adaParagraf = true;
                }
            });
            if (!adaParagraf) {
                html += '<div class="paragraf-box"><p><i>Belum ada konten paragraf.</i></p></div>';
            }

            // 3. Foto – hanya yang memiliki src (tidak kosong)
            var fotoValid = fotoList.filter(function(f) {
                return f && f.trim() !== '';
            });

            if (fotoValid.length > 0) {
                html += '<div class="foto-section">';
                html += '  <h6><i class="fas fa-images" style="color:#B71C1C;"></i> Galeri Foto</h6>';
                html += '  <div class="foto-grid">';
                fotoValid.forEach(function(foto) {
                    html += '<div class="foto-item"><img src="' + foto + '" alt="Foto" loading="lazy"></div>';
                });
                html += '  </div>';
                html += '</div>';
            }

            // 4. Tanggal publikasi
            html += '<div style="margin-top:16px; padding-top:12px; border-top:1px solid #f0ebe6; font-size:0.8rem; color:#a1887f;">';
            html += '<i class="fas fa-calendar"></i> Dipublikasi: ' + tanggal;
            html += '</div>';

            body.innerHTML = html;

            var modal = document.getElementById('myModal');
            modal.classList.add('show');
        };

        window.tutupModal = function() {
            var modal = document.getElementById('myModal');
            modal.classList.remove('show');
        };

        document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById('myModal');
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    this.classList.remove('show');
                }
            });

            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    var modal = document.getElementById('myModal');
                    if (modal.classList.contains('show')) {
                        modal.classList.remove('show');
                    }
                }
            });
        });
    })();
</script>
    <!-- ============================================================
    EVENT CARD SCROLL
    ============================================================ -->
<!-- ============================================================
     EVENT S'17 - ICON GRID
     ============================================================ -->

<style>
    /* ===== SAMA DENGAN STYLE SEBELUMNYA ===== */
    body { background: #f5f0eb; }

    .event-section {
        font-family: 'Poppins', sans-serif;
        max-width: 1200px;
        margin: 30px auto;
        padding: 30px;
        background: #fff;
        border-radius: 12px;
        border: 1px solid #e0d6cc;
        box-shadow: 0 4px 20px rgba(0,0,0,0.04);
    }

    .section-header {
        text-align: center;
        margin-bottom: 30px;
        border-bottom: 2px solid #f0ebe6;
        padding-bottom: 15px;
    }

    .section-title {
        font-size: 2rem;
        font-weight: 700;
        color: #B71C1C;
        margin: 0;
    }
    .section-title span { color: #1A237E; }

    .section-subtitle {
        font-size: 0.95rem;
        color: #5D4037;
        margin-top: 4px;
        opacity: 0.7;
    }

    .event-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
        gap: 24px;
    }

    .event-item {
        background: #fff;
        border-radius: 12px;
        border: 1px solid #f0ebe6;
        padding: 24px 16px 20px;
        text-align: center;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        text-decoration: none;
        color: inherit;
        display: block;
    }
    .event-item:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.08);
        border-color: #B71C1C;
    }

    .event-item .icon {
        font-size: 3rem;
        color: #B71C1C;
        margin-bottom: 12px;
        display: block;
        transition: 0.3s;
    }
    .event-item:hover .icon {
        transform: scale(1.1);
        color: #1A237E;
    }

    .event-item .name {
        font-weight: 600;
        font-size: 0.95rem;
        color: #3E2723;
        margin: 0;
    }

    .event-item .badge {
        display: inline-block;
        margin-top: 6px;
        background: #f0ebe6;
        color: #5D4037;
        font-size: 0.65rem;
        font-weight: 500;
        padding: 2px 12px;
        border-radius: 30px;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    @media (max-width: 768px) {
        .event-section { padding: 20px 15px; margin: 15px; }
        .section-title { font-size: 1.5rem; }
        .event-grid { grid-template-columns: repeat(auto-fill, minmax(130px, 1fr)); gap: 16px; }
        .event-item { padding: 18px 12px 16px; }
        .event-item .icon { font-size: 2.2rem; }
        .event-item .name { font-size: 0.85rem; }
    }
    @media (max-width: 480px) {
        .event-grid { grid-template-columns: repeat(auto-fill, minmax(110px, 1fr)); gap: 12px; }
        .event-item { padding: 14px 8px 12px; }
        .event-item .icon { font-size: 1.8rem; }
        .event-item .name { font-size: 0.75rem; }
    }
</style>

<!-- ============================================================
     SECTION EVENT
     ============================================================ -->
<section class="event-section" id="event">
    <div class="section-header">
        <h3 class="section-title">Event <span>S'17</span></h3>
        {{-- <p class="section-subtitle">Temukan berbagai aktivitas menarik bersama kami</p> --}}
    </div>

    <div class="event-grid">
        @php
            $events = [
                ['name' => 'SNOC',          'icon' => 'fa-mountain',         'link' => '/snoc'],
                ['name' => 'NWCT',          'icon' => 'fa-tree',             'link' => '/nwct'],
                ['name' => 'LLBS',          'icon' => 'fa-hiking',           'link' => '/llbs'],
                ['name' => 'DIKLAT',        'icon' => 'fa-chalkboard-teacher','link' => '/diklat'],
                ['name' => 'FAMGATH',       'icon' => 'fa-users',            'link' => '/fam'],
                ['name' => 'MUBES',         'icon' => 'fa-landmark',         'link' => '/mubes'],
                ['name' => 'RUA',           'icon' => 'fa-comments',         'link' => '/rua'],
                ['name' => 'ULTAH',         'icon' => 'fa-birthday-cake',    'link' => '/ultah'],
                ['name' => 'SABHA PEDULI',  'icon' => 'fa-hands-helping',    'link' => '/sabhapeduli'],
            ];
        @endphp

        @foreach ($events as $event)
            <a href="{{ $event['link'] }}" class="event-item">
                <span class="icon"><i class="fas {{ $event['icon'] }}"></i></span>
                <div class="name">{{ $event['name'] }}</div>
                <span class="badge">Event</span>
            </a>
        @endforeach
    </div>
</section>
    <!-- ============================================================
    DOKUMENTASI GALERI
    ============================================================ -->
<!-- ============================================================
     GALLERY S'17 - POLA SAMA DENGAN KABAR
     ============================================================ -->

<style>
    /* ===== SAMA DENGAN STYLE KABAR ===== */
    body { background: #f5f0eb; }

    .gallery-section {
        font-family: 'Poppins', sans-serif;
        max-width: 1200px;
        margin: 30px auto;
        padding: 30px;
        background: #fff;
        border-radius: 12px;
        border: 1px solid #e0d6cc;
        box-shadow: 0 4px 20px rgba(0,0,0,0.04);
    }

    .section-header {
        text-align: center;
        margin-bottom: 25px;
        border-bottom: 2px solid #f0ebe6;
        padding-bottom: 15px;
    }

    .section-title {
        font-size: 2rem;
        font-weight: 700;
        color: #B71C1C;
        margin: 0;
    }
    .section-title span { color: #1A237E; }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 24px;
    }

    .gallery-card {
        background: #fff;
        border-radius: 12px;
        border: 1px solid #f0ebe6;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        transition: 0.3s;
    }
    .gallery-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        border-color: #d7ccc8;
    }

    .gallery-image {
        position: relative;
        width: 100%;
        height: 200px;
        background: #f5f0eb;
        overflow: hidden;
    }
    .gallery-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .gallery-image .no-image {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        font-size: 3rem;
        color: #bcaaa4;
    }

    .gallery-content {
        padding: 16px 18px 20px;
    }

    .gallery-title {
        font-size: 1.05rem;
        font-weight: 700;
        color: #3E2723;
        margin: 0 0 8px;
        line-height: 1.4;
    }

    .gallery-link {
        font-weight: 600;
        color: #1A237E;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: 0.3s;
        font-size: 0.85rem;
        cursor: pointer;
    }
    .gallery-link:hover { color: #B71C1C; gap: 10px; }

    .gallery-empty {
        text-align: center;
        padding: 60px 20px;
        color: #8d6e63;
        grid-column: 1 / -1;
    }
    .gallery-empty .empty-icon { font-size: 3rem; display: block; margin-bottom: 10px; opacity: 0.4; }
    .gallery-empty h4 { font-weight: 500; margin: 0; }
    .gallery-empty p { font-weight: 300; font-size: 0.95rem; }

    /* ============================================
       MODAL CUSTOM (sama dengan KABAR)
       ============================================ */
    .modal-custom {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.5);
        font-family: 'Poppins', sans-serif;
    }
    .modal-custom.show {
        display: block;
    }
    .modal-custom .modal-content {
        background: #fff;
        margin: 5% auto;
        padding: 0;
        width: 90%;
        max-width: 800px;
        border-radius: 16px;
        border: 1px solid #e8e0d8;
        box-shadow: 0 20px 60px rgba(0,0,0,0.2);
        max-height: 85vh;
        overflow-y: auto;
        position: relative;
    }
    .modal-custom .modal-header {
        padding: 16px 24px;
        border-bottom: 2px solid #f0ebe6;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: sticky;
        top: 0;
        background: #fff;
        border-radius: 16px 16px 0 0;
        z-index: 10;
    }
    .modal-custom .modal-title {
        font-weight: 700;
        color: #B71C1C;
        font-size: 1.2rem;
        margin: 0;
    }
    .modal-custom .close {
        font-size: 2rem;
        font-weight: 300;
        cursor: pointer;
        color: #999;
        line-height: 1;
    }
    .modal-custom .close:hover {
        color: #B71C1C;
    }
    .modal-custom .modal-body {
        padding: 24px;
    }
    .modal-custom .modal-body .modal-judul {
        font-weight: 700;
        font-size: 1.3rem;
        color: #3E2723;
        border-bottom: 2px solid #f0ebe6;
        padding-bottom: 12px;
        margin-bottom: 16px;
    }
    .modal-custom .foto-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
        gap: 12px;
        margin-top: 12px;
    }
    .modal-custom .foto-item {
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid #eee;
        aspect-ratio: 1/1;
        background: #f5f0eb;
    }
    .modal-custom .foto-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .modal-custom .foto-item .no-foto {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        color: #bcaaa4;
        font-size: 2rem;
    }
    .modal-custom .modal-footer {
        padding: 12px 24px;
        border-top: 1px solid #f0ebe6;
        text-align: right;
        position: sticky;
        bottom: 0;
        background: #fff;
        border-radius: 0 0 16px 16px;
    }
    .modal-custom .btn-tutup {
        border: 1px solid #d7ccc8;
        background: transparent;
        padding: 6px 24px;
        border-radius: 30px;
        font-weight: 500;
        transition: 0.3s;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
    }
    .modal-custom .btn-tutup:hover {
        background: #f5f0eb;
        border-color: #bcaaa4;
    }

    @media (max-width: 768px) {
        .gallery-section { padding: 20px 15px; margin: 15px; }
        .section-title { font-size: 1.5rem; }
        .gallery-grid { grid-template-columns: 1fr; }
        .gallery-image { height: 170px; }
        .modal-custom .foto-grid { grid-template-columns: repeat(auto-fill, minmax(120px, 1fr)); }
    }
</style>

<!-- ============================================================
     SECTION GALLERY
     ============================================================ -->
<div class="container">
    <section class="gallery-section" id="dokumentasi">
        <div class="section-header">
            <h3 class="section-title">Gallery <span>S'17</span></h3>
        </div>

        <div class="gallery-grid">
            @forelse($datadok as $item)
                @php
                    $judul   = $item->sabha1 ?? 'Dokumentasi';
                    $foto2   = $item->sabha2 ?? '';
                    $foto3   = $item->sabha3 ?? '';
                    $foto4   = $item->sabha4 ?? '';
                    $foto5   = $item->sabha5 ?? '';
                    $foto6   = $item->sabha6 ?? '';
                    $foto7   = $item->sabha7 ?? '';
                    $foto8   = $item->sabha8 ?? '';
                    // Kumpulkan semua foto (sabha2 - sabha8)
                    $allPhotos = array_filter([$foto2, $foto3, $foto4, $foto5, $foto6, $foto7, $foto8]);
                    // Ambil foto pertama untuk thumbnail (sabha2)
                    $thumbnail = $foto2 ?? '';
                @endphp

                <div class="gallery-card"
                     data-judul="{{ addslashes($judul) }}"
                     data-foto2="{{ $foto2 }}"
                     data-foto3="{{ $foto3 }}"
                     data-foto4="{{ $foto4 }}"
                     data-foto5="{{ $foto5 }}"
                     data-foto6="{{ $foto6 }}"
                     data-foto7="{{ $foto7 }}"
                     data-foto8="{{ $foto8 }}">

                    <div class="gallery-image">
                        @if($thumbnail)
                            <img src="{{ $thumbnail }}" alt="{{ $judul }}">
                        @else
                            <div class="no-image"><i class="fas fa-image"></i></div>
                        @endif
                    </div>
                    <div class="gallery-content">
                        <h3 class="gallery-title">{{ $judul }}</h3>
                        <span class="gallery-link" onclick="bukaGallery(this)">Lihat Dokumentasi <i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>
            @empty
                <div class="gallery-empty">
                    <span class="empty-icon">📷</span>
                    <h4>Belum Ada Dokumentasi</h4>
                    <p>Silakan cek kembali nanti untuk melihat dokumentasi kegiatan kami.</p>
                </div>
            @endforelse
        </div>
    </section>
</div>

<!-- ============================================
     MODAL CUSTOM (sama dengan KABAR)
     ============================================ -->
<div id="galleryModal" class="modal-custom">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"><i class="fas fa-images" style="margin-right:10px; color:#B71C1C;"></i> Dokumentasi</h5>
            <span class="close" onclick="tutupGallery()">&times;</span>
        </div>
        <div class="modal-body" id="galleryModalBody">
            <!-- diisi JS -->
        </div>
        <div class="modal-footer">
            <button class="btn-tutup" onclick="tutupGallery()">
                <i class="fas fa-times"></i> Tutup
            </button>
        </div>
    </div>
</div>

<!-- ============================================
     JAVASCRIPT (sama dengan KABAR)
     ============================================ -->
<script>
    (function() {
        "use strict";

        // Fungsi buka modal gallery (dipanggil dari onclick)
        window.bukaGallery = function(linkElement) {
            var card = linkElement.closest('.gallery-card');
            if (!card) return;

            // Ambil data dari atribut
            var judul = card.dataset.judul || 'Dokumentasi';
            var fotoList = [
                card.dataset.foto2 || '',
                card.dataset.foto3 || '',
                card.dataset.foto4 || '',
                card.dataset.foto5 || '',
                card.dataset.foto6 || '',
                card.dataset.foto7 || '',
                card.dataset.foto8 || ''
            ];

            var body = document.getElementById('galleryModalBody');
            if (!body) return;

            // Bangun HTML
            var html = '<div class="modal-judul">' + judul + '</div>';

            html += '<h6 style="margin:16px 0 10px; font-weight:600; color:#3E2723;">';
            html += '<i class="fas fa-images" style="color:#B71C1C;"></i> Galeri Foto';
            html += '</h6>';
            html += '<div class="foto-grid">';

            var adaFoto = false;
            fotoList.forEach(function(foto) {
                if (foto && foto.trim() !== '') {
                    html += '<div class="foto-item"><img src="' + foto + '" alt="Foto" loading="lazy"></div>';
                    adaFoto = true;
                }
            });

            if (!adaFoto) {
                html += '<div class="foto-item"><div class="no-foto"><i class="fas fa-image"></i> Tidak ada foto</div></div>';
            }

            html += '</div>';

            body.innerHTML = html;

            // Tampilkan modal
            var modal = document.getElementById('galleryModal');
            modal.classList.add('show');
        };

        // Fungsi tutup modal
        window.tutupGallery = function() {
            var modal = document.getElementById('galleryModal');
            modal.classList.remove('show');
        };

        // Tutup modal jika klik di luar konten
        document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById('galleryModal');
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    this.classList.remove('show');
                }
            });

            // Tutup dengan tombol ESC
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    var modal = document.getElementById('galleryModal');
                    if (modal.classList.contains('show')) {
                        modal.classList.remove('show');
                    }
                }
            });
        });
    })();
</script>

<!-- ============================================================
     PENGUMUMAN S'17 - POLA SAMA DENGAN KABAR & GALLERY
     ============================================================ -->
<style>
    /* ============================================================
       FONT & GLOBAL
       ============================================================ */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400;1,600;1,800&display=swap');

    body {
        background: #f5f0eb;
        font-family: 'Poppins', sans-serif;
    }

    /* ============================================================
       SECTION WRAPPER (SERAGAM)
       ============================================================ */
    .section-wrapper {
        max-width: 1200px;
        margin: 30px auto;
        padding: 30px;
        background: #fff;
        border-radius: 12px;
        border: 1px solid #e0d6cc;
        box-shadow: 0 4px 20px rgba(0,0,0,0.04);
    }

    .section-header {
        text-align: center;
        margin-bottom: 25px;
        border-bottom: 2px solid #f0ebe6;
        padding-bottom: 15px;
    }

    .section-title {
        font-size: 2rem;
        font-weight: 700;
        color: #B71C1C;
        margin: 0;
    }
    .section-title span { color: #1A237E; }

    /* ============================================================
       GRID CARD (SERAGAM)
       ============================================================ */
    .grid-card {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 24px;
    }

    .card-item {
        background: #fff;
        border-radius: 12px;
        border: 1px solid #f0ebe6;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        transition: 0.3s;
        cursor: pointer;
        display: flex;
        flex-direction: column;
    }
    .card-item:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        border-color: #d7ccc8;
    }

    .card-image {
        position: relative;
        width: 100%;
        height: 200px;
        background: #f5f0eb;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .card-image .icon-placeholder {
        font-size: 4rem;
        color: #bcaaa4;
    }

    .card-content {
        padding: 16px 18px 20px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    .card-content .card-title {
        font-size: 1.05rem;
        font-weight: 700;
        color: #3E2723;
        margin: 0 0 8px;
        line-height: 1.4;
    }
    .card-content .card-excerpt {
        font-size: 0.9rem;
        color: #5D4037;
        line-height: 1.6;
        opacity: 0.8;
        flex: 1;
        margin-bottom: 10px;
    }
    .card-content .card-link {
        font-weight: 600;
        color: #1A237E;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: 0.3s;
        font-size: 0.85rem;
        align-self: flex-start;
    }
    .card-content .card-link:hover {
        color: #B71C1C;
        gap: 10px;
    }

    /* ============================================================
       EMPTY STATE
       ============================================================ */
    .empty-state {
        text-align: center;
        padding: 60px 20px;
        color: #8d6e63;
        grid-column: 1 / -1;
    }
    .empty-state .empty-icon {
        font-size: 3rem;
        display: block;
        margin-bottom: 10px;
        opacity: 0.4;
    }
    .empty-state h4 {
        font-weight: 500;
        margin: 0;
    }
    .empty-state p {
        font-weight: 300;
        font-size: 0.95rem;
    }

    /* ============================================================
       MODAL CUSTOM (SERAGAM UNTUK KABAR & PENGUMUMAN)
       ============================================================ */
    .modal-custom {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.5);
        font-family: 'Poppins', sans-serif;
    }
    .modal-custom.show {
        display: block;
    }
    .modal-custom .modal-content {
        background: #fff;
        margin: 5% auto;
        padding: 0;
        width: 90%;
        max-width: 800px;
        border-radius: 16px;
        border: 1px solid #e8e0d8;
        box-shadow: 0 20px 60px rgba(0,0,0,0.2);
        max-height: 85vh;
        overflow-y: auto;
        position: relative;
    }
    .modal-custom .modal-header {
        padding: 16px 24px;
        border-bottom: 2px solid #f0ebe6;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: sticky;
        top: 0;
        background: #fff;
        border-radius: 16px 16px 0 0;
        z-index: 10;
    }
    .modal-custom .modal-title {
        font-weight: 700;
        color: #B71C1C;
        font-size: 1.2rem;
        margin: 0;
    }
    .modal-custom .close {
        font-size: 2rem;
        font-weight: 300;
        cursor: pointer;
        color: #999;
        line-height: 1;
    }
    .modal-custom .close:hover {
        color: #B71C1C;
    }
    .modal-custom .modal-body {
        padding: 24px;
    }
    .modal-custom .modal-body .modal-judul {
        font-weight: 700;
        font-size: 1.3rem;
        color: #3E2723;
        border-bottom: 2px solid #f0ebe6;
        padding-bottom: 12px;
        margin-bottom: 16px;
    }
    /* Paragraf di modal kabar */
    .modal-custom .paragraf-box {
        background: #faf8f6;
        border-radius: 10px;
        padding: 12px 16px;
        margin-bottom: 14px;
        border-left: 3px solid #B71C1C;
    }
    .modal-custom .paragraf-box p {
        font-size: 0.95rem;
        line-height: 1.8;
        margin: 0;
        color: #3E2723;
    }
    .modal-custom .paragraf-box.blue { border-left-color: #1A237E; }
    /* Galeri foto di modal kabar */
    .modal-custom .foto-section {
        margin-top: 16px;
        border-top: 1px solid #f0ebe6;
        padding-top: 16px;
    }
    .modal-custom .foto-section h6 {
        font-weight: 600;
        color: #3E2723;
        margin: 0 0 10px 0;
    }
    .modal-custom .foto-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
        gap: 12px;
    }
    .modal-custom .foto-item {
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid #eee;
        aspect-ratio: 1/1;
        background: #f5f0eb;
    }
    .modal-custom .foto-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    /* File di modal pengumuman */
    .modal-custom .file-container {
        text-align: center;
    }
    .modal-custom .file-container img {
        max-width: 100%;
        max-height: 60vh;
        border-radius: 8px;
        object-fit: contain;
        box-shadow: 0 4px 16px rgba(0,0,0,0.06);
    }
    .modal-custom .file-container .file-link {
        display: inline-block;
        padding: 12px 24px;
        background: #1A237E;
        color: #fff;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        transition: 0.3s;
    }
    .modal-custom .file-container .file-link:hover {
        background: #B71C1C;
        transform: scale(1.02);
    }
    .modal-custom .file-container .file-icon-big {
        font-size: 5rem;
        color: #bcaaa4;
        margin-top: 10px;
        display: block;
    }

    .modal-custom .modal-footer {
        padding: 12px 24px;
        border-top: 1px solid #f0ebe6;
        text-align: right;
        position: sticky;
        bottom: 0;
        background: #fff;
        border-radius: 0 0 16px 16px;
    }
    .modal-custom .btn-tutup {
        border: 1px solid #d7ccc8;
        background: transparent;
        padding: 6px 24px;
        border-radius: 30px;
        font-weight: 500;
        transition: 0.3s;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
    }
    .modal-custom .btn-tutup:hover {
        background: #f5f0eb;
        border-color: #bcaaa4;
    }

    /* ============================================================
       RESPONSIVE
       ============================================================ */
    @media (max-width: 768px) {
        .section-wrapper { padding: 20px 15px; margin: 15px; }
        .section-title { font-size: 1.5rem; }
        .grid-card { grid-template-columns: 1fr; }
        .card-image { height: 170px; }
        .modal-custom .foto-grid { grid-template-columns: repeat(auto-fill, minmax(120px, 1fr)); }
    }
</style>

<!-- ============================================================
     SECTION 1: KABAR S'17 (BERITA)
     ============================================================ -->
<div class="container">
    <section class="section-wrapper" id="kabar">
        <div class="section-header">
            <h3 class="section-title">Kabar <span>S'17</span></h3>
        </div>

        <div class="grid-card">
            @php
                // Filter data berita: hanya tampilkan item yang memiliki konten
                $filteredBerita = $databerita->filter(function ($item) {
                    $judul = $item->sabha1 ?? '';
                    $p1    = $item->sabha2 ?? '';
                    $p2    = $item->sabha3 ?? '';
                    $p3    = $item->sabha4 ?? '';
                    $f1    = $item->sabha5 ?? '';
                    $f2    = $item->sabha6 ?? '';
                    $f3    = $item->sabha7 ?? '';
                    $f4    = $item->sabha8 ?? '';
                    $f5    = $item->sabha9 ?? '';
                    return !empty(trim($judul)) || !empty(trim($p1)) || !empty(trim($p2)) || !empty(trim($p3))
                        || !empty(trim($f1)) || !empty(trim($f2)) || !empty(trim($f3))
                        || !empty(trim($f4)) || !empty(trim($f5));
                });
            @endphp

            @forelse($filteredBerita as $item)
                @php
                    $judul    = $item->sabha1 ?? 'Judul Berita';
                    $p1       = $item->sabha2 ?? '';
                    $p2       = $item->sabha3 ?? '';
                    $p3       = $item->sabha4 ?? '';
                    $tanggal  = $item->created_at ? $item->created_at->format('d M Y') : '-';
                    $foto1    = $item->sabha5 ?? '';
                    $foto2    = $item->sabha6 ?? '';
                    $foto3    = $item->sabha7 ?? '';
                    $foto4    = $item->sabha8 ?? '';
                    $foto5    = $item->sabha9 ?? '';
                    $excerpt  = Str::limit($p1 ?: $p2 ?: $p3 ?: 'Belum ada deskripsi.', 120);
                    $thumbnail = $foto1 ?: null;
                @endphp

                <div class="card-item"
                     data-type="berita"
                     data-judul="{{ addslashes($judul) }}"
                     data-p1="{{ addslashes($p1) }}"
                     data-p2="{{ addslashes($p2) }}"
                     data-p3="{{ addslashes($p3) }}"
                     data-tanggal="{{ $tanggal }}"
                     data-foto1="{{ $foto1 }}"
                     data-foto2="{{ $foto2 }}"
                     data-foto3="{{ $foto3 }}"
                     data-foto4="{{ $foto4 }}"
                     data-foto5="{{ $foto5 }}"
                     onclick="bukaModalBerita(this)">

                    <div class="card-image">
                        @if($thumbnail)
                            <img src="{{ $thumbnail }}" alt="{{ $judul }}">
                        @else
                            <div class="icon-placeholder"><i class="fas fa-newspaper"></i></div>
                        @endif
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">{{ $judul }}</h3>
                        <p class="card-excerpt">{{ $excerpt }}</p>
                        <span class="card-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>
            @empty
                <div class="empty-state">
                    <span class="empty-icon"><i class="fas fa-newspaper"></i></span>
                    <h4>Belum ada berita</h4>
                    <p>Belum ada konten berita yang tersedia saat ini.</p>
                </div>
            @endforelse
        </div>
    </section>

    <!-- ============================================================
         SECTION 2: INFO NEWS S'17 (PENGUMUMAN)
         ============================================================ -->
    <section class="section-wrapper" id="pengumuman">
        <div class="section-header">
            <h3 class="section-title">Info News <span>S'17</span></h3>
        </div>

        <div class="grid-card">
            @php
                // Filter data pengumuman: hanya tampilkan item yang memiliki konten (judul atau file)
                $filteredPengumuman = $datapengumuman->filter(function ($item) {
                    $judul = $item->sabha1 ?? '';
                    $file  = $item->sabha2 ?? '';
                    return !empty(trim($judul)) || !empty(trim($file));
                });
            @endphp

            @forelse($filteredPengumuman as $item)
                @php
                    $judul = $item->sabha1 ?? 'Pengumuman';
                    $file  = $item->sabha2 ?? '';
                    // Cek apakah file berupa gambar
                    $isImage = false;
                    if ($file) {
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $imageExts = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'bmp', 'svg'];
                        $isImage = in_array($ext, $imageExts);
                    }
                    $thumbnail = ($file && $isImage) ? $file : null;
                @endphp

                <div class="card-item"
                     data-type="pengumuman"
                     data-judul="{{ addslashes($judul) }}"
                     data-file="{{ $file }}"
                     data-isimage="{{ $isImage ? 'true' : 'false' }}"
                     onclick="bukaModalPengumuman(this)">

                    <div class="card-image">
                        @if($thumbnail)
                            <img src="{{ $thumbnail }}" alt="{{ $judul }}">
                        @elseif($file)
                            <div class="icon-placeholder"><i class="fas fa-file-alt"></i></div>
                        @else
                            <div class="icon-placeholder"><i class="fas fa-bullhorn"></i></div>
                        @endif
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">{{ $judul }}</h3>
                        <p class="card-excerpt" style="opacity:0.6; font-size:0.85rem;">
                            @if($file)
                                <i class="fas fa-paperclip"></i> Terlampir file
                            @else
                                Tidak ada file
                            @endif
                        </p>
                        <span class="card-link">Lihat Detail <i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>
            @empty
                <div class="empty-state">
                    <span class="empty-icon">📢</span>
                    <h4>Belum Ada Pengumuman</h4>
                    <p>Silakan cek kembali nanti untuk pengumuman terbaru.</p>
                </div>
            @endforelse
        </div>
    </section>
</div>

<!-- ============================================================
     MODAL UNTUK BERITA (KABAR)
     ============================================================ -->
<div id="modalBerita" class="modal-custom">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"><i class="fas fa-newspaper" style="margin-right:10px; color:#B71C1C;"></i> Detail Berita</h5>
            <span class="close" onclick="tutupModal('modalBerita')">&times;</span>
        </div>
        <div class="modal-body" id="modalBeritaBody"></div>
        <div class="modal-footer">
            <button class="btn-tutup" onclick="tutupModal('modalBerita')"><i class="fas fa-times"></i> Tutup</button>
        </div>
    </div>
</div>

<!-- ============================================================
     MODAL UNTUK PENGUMUMAN (INFO NEWS)
     ============================================================ -->
<div id="modalPengumuman" class="modal-custom">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"><i class="fas fa-bullhorn" style="margin-right:10px; color:#B71C1C;"></i> Detail Pengumuman</h5>
            <span class="close" onclick="tutupModal('modalPengumuman')">&times;</span>
        </div>
        <div class="modal-body" id="modalPengumumanBody"></div>
        <div class="modal-footer">
            <button class="btn-tutup" onclick="tutupModal('modalPengumuman')"><i class="fas fa-times"></i> Tutup</button>
        </div>
    </div>
</div>

<!-- ============================================================
     JAVASCRIPT
     ============================================================ -->
<script>
    (function() {
        "use strict";

        // ---- Fungsi untuk membuka modal berita ----
        window.bukaModalBerita = function(card) {
            var judul   = card.dataset.judul || 'Judul Berita';
            var p1      = card.dataset.p1 || '';
            var p2      = card.dataset.p2 || '';
            var p3      = card.dataset.p3 || '';
            var tanggal = card.dataset.tanggal || '-';
            var fotoList = [
                card.dataset.foto1 || '',
                card.dataset.foto2 || '',
                card.dataset.foto3 || '',
                card.dataset.foto4 || '',
                card.dataset.foto5 || ''
            ];

            var body = document.getElementById('modalBeritaBody');
            if (!body) return;

            var html = '<div class="modal-judul">' + judul + '</div>';

            // Paragraf – hanya yang tidak kosong
            var paragrafArray = [
                { text: p1, class: '' },
                { text: p2, class: 'blue' },
                { text: p3, class: '' }
            ];
            var adaParagraf = false;
            paragrafArray.forEach(function(p) {
                if (p.text && p.text.trim() !== '') {
                    html += '<div class="paragraf-box ' + p.class + '"><p>' + p.text + '</p></div>';
                    adaParagraf = true;
                }
            });
            if (!adaParagraf) {
                html += '<div class="paragraf-box"><p><i>Belum ada konten paragraf.</i></p></div>';
            }

            // Foto – hanya yang ada src
            var fotoValid = fotoList.filter(function(f) {
                return f && f.trim() !== '';
            });
            if (fotoValid.length > 0) {
                html += '<div class="foto-section">';
                html += '  <h6><i class="fas fa-images" style="color:#B71C1C;"></i> Galeri Foto</h6>';
                html += '  <div class="foto-grid">';
                fotoValid.forEach(function(foto) {
                    html += '<div class="foto-item"><img src="' + foto + '" alt="Foto" loading="lazy"></div>';
                });
                html += '  </div>';
                html += '</div>';
            }

            // Tanggal
            html += '<div style="margin-top:16px; padding-top:12px; border-top:1px solid #f0ebe6; font-size:0.8rem; color:#a1887f;">';
            html += '<i class="fas fa-calendar"></i> Dipublikasi: ' + tanggal;
            html += '</div>';

            body.innerHTML = html;
            document.getElementById('modalBerita').classList.add('show');
        };

        // ---- Fungsi untuk membuka modal pengumuman ----
        window.bukaModalPengumuman = function(card) {
            var judul   = card.dataset.judul || 'Pengumuman';
            var file    = card.dataset.file || '';
            var isImage = card.dataset.isimage === 'true';

            var body = document.getElementById('modalPengumumanBody');
            if (!body) return;

            var html = '<div class="modal-judul">' + judul + '</div>';
            html += '<div class="file-container">';

            if (file) {
                if (isImage) {
                    html += '<img src="' + file + '" alt="' + judul + '">';
                } else {
                    html += '<a href="' + file + '" target="_blank" class="file-link">';
                    html += '<i class="fas fa-download" style="margin-right:8px;"></i> Download File';
                    html += '</a>';
                    html += '<span class="file-icon-big"><i class="fas fa-file-alt"></i></span>';
                }
            } else {
                html += '<div style="color:#bcaaa4; font-size:1.2rem;">Tidak ada file terlampir.</div>';
            }

            html += '</div>';

            body.innerHTML = html;
            document.getElementById('modalPengumuman').classList.add('show');
        };

        // ---- Fungsi tutup modal (umum) ----
        window.tutupModal = function(modalId) {
            var modal = document.getElementById(modalId);
            if (modal) modal.classList.remove('show');
        };

        // ---- Tutup dengan klik di luar ----
        document.addEventListener('DOMContentLoaded', function() {
            var modals = document.querySelectorAll('.modal-custom');
            modals.forEach(function(modal) {
                modal.addEventListener('click', function(e) {
                    if (e.target === this) {
                        this.classList.remove('show');
                    }
                });
            });

            // Tutup dengan ESC
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    document.querySelectorAll('.modal-custom.show').forEach(function(modal) {
                        modal.classList.remove('show');
                    });
                }
            });
        });

    })();
</script>
    {{-- ============================================================
    DOKUMENTASI KEGIATAN (PUBLIK - DARI $datadok)
    ============================================================ --}}


    @include('00_semarang.00_include.02_footer')

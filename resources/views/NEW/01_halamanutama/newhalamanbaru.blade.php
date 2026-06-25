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
   SLIDER SECTION - GAMBAR FULL TANPA TRANSISI
   ============================================================ */
.news-slider-section {
    position: relative;
    width: 100%;
    padding: 20px 0;
    background: #f8f9fa;
}

.slider-container {
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
    overflow: hidden;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    background: #fff;
}

.slider-wrapper {
    display: flex;
    transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.slide {
    min-width: 100%;
    flex: 0 0 100%;
    display: flex;
    flex-direction: column;
    background: #fff;
}

/* ===== GAMBAR - TANPA TRANSISI ===== */
.slide-image {
    width: 100%;
    height: 500px;
    overflow: hidden;
    background: #f0f2f5;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

.slide-image img {
    width: 100%;
    height: 100%;
    object-fit: scale-down; /* Gambar tidak terpotong */
    display: block;
    background: #f0f2f5;
}

/* HILANGKAN HOVER TRANSISI */
.slide-image img {
    transition: none !important;
}

.slide:hover .slide-image img {
    transform: none !important;
}

/* ===== KETERANGAN ===== */
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
    margin: 0;
    padding: 0 10px;
    max-width: 800px;
    margin: 0 auto;
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

/* ===== SLIDER CONTROLS ===== */
.slider-controls {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    align-items: center;
    gap: 20px;
    z-index: 10;
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(6px);
    padding: 10px 20px;
    border-radius: 50px;
}

.slider-btn {
    background: transparent;
    border: none;
    color: #fff;
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
    background: rgba(255, 255, 255, 0.2);
    color: #fff;
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
    background: rgba(255, 255, 255, 0.4);
    cursor: pointer;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.dot.active {
    background: #fff;
    border-color: #c62828;
    transform: scale(1.2);
}

.dot:hover {
    background: rgba(255, 255, 255, 0.8);
}

/* ============================================================
   RESPONSIVE
   ============================================================ */
@media (max-width: 992px) {
    .slide-image {
        height: 400px;
    }
    .slide-content {
        padding: 18px 20px 24px;
    }
    .slide-desc {
        font-size: 1rem;
        padding: 0 5px;
    }
}

@media (max-width: 768px) {
    .slide-image {
        height: 300px;
    }
    .slide-content {
        padding: 16px 16px 20px;
    }
    .slide-desc {
        font-size: 0.95rem;
        line-height: 1.6;
    }
    .slider-controls {
        bottom: 10px;
        padding: 8px 14px;
        gap: 14px;
    }
    .slider-btn {
        font-size: 16px;
        padding: 4px 10px;
    }
    .dot {
        width: 10px;
        height: 10px;
    }
}

@media (max-width: 480px) {
    .slide-image {
        height: 220px;
    }
    .slide-content {
        padding: 12px 12px 16px;
    }
    .slide-desc {
        font-size: 0.85rem;
        line-height: 1.5;
    }
    .slide-desc::before,
    .slide-desc::after {
        font-size: 1.4rem;
    }
    .slider-controls {
        padding: 6px 10px;
        gap: 10px;
        bottom: 6px;
    }
    .slider-btn {
        font-size: 14px;
        padding: 2px 8px;
    }
    .dot {
        width: 8px;
        height: 8px;
    }
}
</style>

<section class="news-slider-section" id="beranda">
    <div class="slider-container">
        <div class="slider-wrapper" id="newsSlider">
            @php
                // Ambil data pertama dari $data1 (collection)
                $slideData = $data1->first();

                // Jika tidak ada data, buat object kosong
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

                // Siapkan array slides
                $slides = [];
                for ($i = 1; $i <= 5; $i++) {
                    $imgField = 'sabha' . $i;
                    $descField = 'sabha' . ($i + 5); // sabha6 – sabha10

                    $image = $slideData->$imgField ?? null;
                    $desc  = $slideData->$descField ?? null;

                    // Hanya tampilkan jika gambar ada dan file exists
                    if (!empty($image) && file_exists(public_path($image))) {
                        $slides[] = [
                            'image' => $image,
                            'description' => $desc ?: 'Keterangan tidak tersedia',
                        ];
                    }
                }

                // Jika tidak ada gambar sama sekali, pakai default
                if (empty($slides)) {
                    $slides = [
                        [
                            'image' => '/assets/newtheme/images/pegunungan1.jpg',
                            'description' => 'Keindahan alam pegunungan yang memukau.',
                        ],
                        [
                            'image' => '/assets/newtheme/images/pegunungan2.jpg',
                            'description' => 'Petualangan di tengah hutan dan gunung.',
                        ],
                        [
                            'image' => '/assets/newtheme/images/pegunungan3.jpg',
                            'description' => 'Menikmati udara segar di puncak.',
                        ],
                    ];
                }

                // Maksimal 5 slide
                $slides = array_slice($slides, 0, 5);
            @endphp

            @foreach ($slides as $key => $slide)
                <div class="slide">
                    {{-- GAMBAR DI ATAS --}}
                    <div class="slide-image">
                        <img src="{{ asset($slide['image']) }}" alt="Slide {{ $key + 1 }}" loading="lazy">
                    </div>
                    {{-- KETERANGAN DI BAWAH --}}
                    <div class="slide-content">
                        <p class="slide-desc">{{ $slide['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- SLIDER CONTROLS --}}
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

    // Set semua slide ke posisi awal
    slides.forEach((slide, i) => {
        slide.style.display = 'flex';
    });

    // Fungsi untuk pindah slide
    function goToSlide(index) {
        if (index < 0) index = totalSlides - 1;
        if (index >= totalSlides) index = 0;

        currentIndex = index;
        const offset = -currentIndex * 100;
        slider.style.transform = `translateX(${offset}%)`;

        // Update dots
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === currentIndex);
        });
    }

    // Event listeners
    prevBtn.addEventListener('click', function() {
        goToSlide(currentIndex - 1);
        resetAutoplay();
    });

    nextBtn.addEventListener('click', function() {
        goToSlide(currentIndex + 1);
        resetAutoplay();
    });

    dots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            goToSlide(index);
            resetAutoplay();
        });
    });

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') {
            goToSlide(currentIndex - 1);
            resetAutoplay();
        } else if (e.key === 'ArrowRight') {
            goToSlide(currentIndex + 1);
            resetAutoplay();
        }
    });

    // Touch support
    let touchStartX = 0;
    let touchEndX = 0;
    const container = document.querySelector('.slider-container');

    container.addEventListener('touchstart', function(e) {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    container.addEventListener('touchend', function(e) {
        touchEndX = e.changedTouches[0].screenX;
        const diff = touchStartX - touchEndX;
        if (Math.abs(diff) > 50) {
            if (diff > 0) {
                goToSlide(currentIndex + 1);
            } else {
                goToSlide(currentIndex - 1);
            }
            resetAutoplay();
        }
    }, { passive: true });

    // Autoplay
    function startAutoplay() {
        if (autoplayInterval) clearInterval(autoplayInterval);
        if (totalSlides > 1) {
            autoplayInterval = setInterval(() => {
                goToSlide(currentIndex + 1);
            }, AUTOPLAY_DELAY);
        }
    }

    function resetAutoplay() {
        if (autoplayInterval) {
            clearInterval(autoplayInterval);
            startAutoplay();
        }
    }

    // Start autoplay
    startAutoplay();

    // Pause autoplay on hover
    const sliderContainer = document.querySelector('.slider-container');
    sliderContainer.addEventListener('mouseenter', function() {
        if (autoplayInterval) {
            clearInterval(autoplayInterval);
            autoplayInterval = null;
        }
    });

    sliderContainer.addEventListener('mouseleave', function() {
        if (!autoplayInterval) {
            startAutoplay();
        }
    });

    // Handle window resize
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            const offset = -currentIndex * 100;
            slider.style.transform = `translateX(${offset}%)`;
        }, 100);
    });

    // Inisialisasi pertama
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
        <h3 class="sejarah-title">Sejarah <span>Sabhagiriwana S'17</span></h3>
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
                🏔️ Anggota Sabhagiriwana S'17
            </a>

            <div class="table-wrapper">
                <table class="artikel-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Keterangan</th>
                            <th>Berkas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @forelse($dataartikel as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><strong>{{ $item->sabha1 ?? '-' }}</strong></td>
                                <td>{{ $item->sabha2 ?? '-' }}</td>
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
        /* ===== SAMA KAYA SEBELUMNYA ===== */
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
        .kabar-category {
            position: absolute;
            bottom: 10px;
            left: 12px;
            background: #B71C1C;
            color: #fff;
            font-size: 0.7rem;
            font-weight: 600;
            padding: 4px 14px;
            border-radius: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
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
           MODAL CUSTOM (tanpa Bootstrap)
           ============================================ */
        .modal-custom {
            display: none; /* hidden by default */
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
            .kabar-section { padding: 20px 15px; margin: 15px; }
            .section-title { font-size: 1.5rem; }
            .kabar-grid { grid-template-columns: 1fr; }
            .kabar-image { height: 170px; }
            .modal-custom .foto-grid { grid-template-columns: repeat(auto-fill, minmax(120px, 1fr)); }
        }
    </style>

    <div class="container">
        <section class="kabar-section" id="berita-terbaru">
            <div class="section-header">
                <h3 class="tentang-title">Kabar <span>S'17</span></h3>
            </div>

            <div class="kabar-grid">
                @forelse($databerita as $item)
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
                            {{-- <span class="kabar-category">Berita</span> --}}
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
                        <span class="empty-icon"></span>
                    </div>
                @endforelse
            </div>
        </section>
    </div>

    <!-- ============================================
         MODAL CUSTOM (tanpa Bootstrap)
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
         JAVASCRIPT (tanpa Bootstrap)
         ============================================ -->
    <script>
        (function() {
            "use strict";

            // Fungsi buka modal (dipanggil dari onclick)
            window.bukaModal = function(linkElement) {
                var card = linkElement.closest('.kabar-card');
                if (!card) return;

                // Ambil data dari atribut
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

                // Bangun HTML
                var html = '<div class="modal-judul">' + judul + '</div>';

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

                html += '<h6 style="margin:16px 0 10px; font-weight:600; color:#3E2723;">';
                html += '<i class="fas fa-images" style="color:#B71C1C;"></i> Galeri Foto';
                html += '</h6>';
                html += '<div class="foto-grid">';

                fotoList.forEach(function(foto) {
                    if (foto && foto.trim() !== '') {
                        html += '<div class="foto-item"><img src="' + foto + '" alt="Foto" loading="lazy"></div>';
                    } else {
                        html += '<div class="foto-item"><div class="no-foto"><i class="fas fa-image"></i></div></div>';
                    }
                });

                html += '</div>';

                html += '<div style="margin-top:16px; padding-top:12px; border-top:1px solid #f0ebe6; font-size:0.8rem; color:#a1887f;">';
                html += '<i class="fas fa-calendar"></i> Dipublikasi: ' + tanggal;
                html += '</div>';

                body.innerHTML = html;

                // Tampilkan modal
                var modal = document.getElementById('myModal');
                modal.classList.add('show');
            };

            // Fungsi tutup modal
            window.tutupModal = function() {
                var modal = document.getElementById('myModal');
                modal.classList.remove('show');
            };

            // Tutup modal jika klik di luar konten
            document.addEventListener('DOMContentLoaded', function() {
                var modal = document.getElementById('myModal');
                modal.addEventListener('click', function(e) {
                    if (e.target === this) {
                        this.classList.remove('show');
                    }
                });

                // Tutup dengan tombol ESC
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
    /* ===== SAMA DENGAN STYLE KABAR/GALLERY ===== */
    body { background: #f5f0eb; }

    .pengumuman-section {
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

    .pengumuman-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 24px;
    }

    .pengumuman-card {
        background: #fff;
        border-radius: 12px;
        border: 1px solid #f0ebe6;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        transition: 0.3s;
        cursor: pointer;
    }
    .pengumuman-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        border-color: #d7ccc8;
    }

    .pengumuman-image {
        position: relative;
        width: 100%;
        height: 200px;
        background: #f5f0eb;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .pengumuman-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .pengumuman-image .file-icon {
        font-size: 4rem;
        color: #bcaaa4;
    }
    .pengumuman-image .no-file {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        font-size: 3rem;
        color: #bcaaa4;
    }

    .pengumuman-content {
        padding: 16px 18px 20px;
    }

    .pengumuman-title {
        font-size: 1.05rem;
        font-weight: 700;
        color: #3E2723;
        margin: 0 0 8px;
        line-height: 1.4;
    }

    .pengumuman-link {
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
    .pengumuman-link:hover { color: #B71C1C; gap: 10px; }

    .pengumuman-empty {
        text-align: center;
        padding: 60px 20px;
        color: #8d6e63;
        grid-column: 1 / -1;
    }
    .pengumuman-empty .empty-icon { font-size: 3rem; display: block; margin-bottom: 10px; opacity: 0.4; }
    .pengumuman-empty h4 { font-weight: 500; margin: 0; }
    .pengumuman-empty p { font-weight: 300; font-size: 0.95rem; }

    /* ============================================
       MODAL CUSTOM (sama dengan sebelumnya)
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
        text-align: center;
    }
    .modal-custom .modal-body .modal-judul {
        font-weight: 700;
        font-size: 1.3rem;
        color: #3E2723;
        border-bottom: 2px solid #f0ebe6;
        padding-bottom: 12px;
        margin-bottom: 16px;
        text-align: left;
    }
    .modal-custom .modal-body .file-container {
        margin-top: 12px;
    }
    .modal-custom .modal-body .file-container img {
        max-width: 100%;
        max-height: 60vh;
        border-radius: 8px;
        object-fit: contain;
        box-shadow: 0 4px 16px rgba(0,0,0,0.06);
    }
    .modal-custom .modal-body .file-container .file-link {
        display: inline-block;
        padding: 12px 24px;
        background: #1A237E;
        color: #fff;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        transition: 0.3s;
    }
    .modal-custom .modal-body .file-container .file-link:hover {
        background: #B71C1C;
        transform: scale(1.02);
    }
    .modal-custom .modal-body .file-container .file-icon-big {
        font-size: 5rem;
        color: #bcaaa4;
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
        .pengumuman-section { padding: 20px 15px; margin: 15px; }
        .section-title { font-size: 1.5rem; }
        .pengumuman-grid { grid-template-columns: 1fr; }
        .pengumuman-image { height: 170px; }
    }
</style>

<!-- ============================================================
     SECTION PENGUMUMAN
     ============================================================ -->
<div class="container">
    <section class="pengumuman-section" id="pengumuman">
        <div class="section-header">
            <h3 class="section-title">Info News <span>S'17</span></h3>
        </div>

        <div class="pengumuman-grid">
            @forelse($datapengumuman as $item)
                @php
                    $judul = $item->sabha1 ?? 'Pengumuman';
                    $file  = $item->sabha2 ?? '';
                    // Cek apakah file berupa gambar (ekstensi umum)
                    $isImage = false;
                    if ($file) {
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $imageExts = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'bmp', 'svg'];
                        $isImage = in_array($ext, $imageExts);
                    }
                    // Tentukan thumbnail: jika gambar tampilkan gambar, jika file lain tampilkan ikon
                    $thumbnail = $file && $isImage ? $file : '';
                @endphp

                <div class="pengumuman-card"
                     data-judul="{{ addslashes($judul) }}"
                     data-file="{{ $file }}"
                     data-isimage="{{ $isImage ? 'true' : 'false' }}">

                    <div class="pengumuman-image">
                        @if($thumbnail)
                            <img src="{{ $thumbnail }}" alt="{{ $judul }}">
                        @elseif($file)
                            <div class="file-icon"><i class="fas fa-file-alt"></i></div>
                        @else
                            <div class="no-file"><i class="fas fa-file"></i></div>
                        @endif
                    </div>
                    <div class="pengumuman-content">
                        <h3 class="pengumuman-title">{{ $judul }}</h3>
                        <span class="pengumuman-link" onclick="bukaPengumuman(this)">Lihat Detail <i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>
            @empty
                <div class="pengumuman-empty">
                    <span class="empty-icon">📢</span>
                    <h4>Belum Ada Pengumuman</h4>
                    <p>Silakan cek kembali nanti untuk pengumuman terbaru.</p>
                </div>
            @endforelse
        </div>
    </section>
</div>

<!-- ============================================
     MODAL CUSTOM PENGUMUMAN
     ============================================ -->
<div id="pengumumanModal" class="modal-custom">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"><i class="fas fa-bullhorn" style="margin-right:10px; color:#B71C1C;"></i> Detail Pengumuman</h5>
            <span class="close" onclick="tutupPengumuman()">&times;</span>
        </div>
        <div class="modal-body" id="pengumumanModalBody">
            <!-- diisi JS -->
        </div>
        <div class="modal-footer">
            <button class="btn-tutup" onclick="tutupPengumuman()">
                <i class="fas fa-times"></i> Tutup
            </button>
        </div>
    </div>
</div>

<!-- ============================================
     JAVASCRIPT
     ============================================ -->
<script>
    (function() {
        "use strict";

        // Fungsi buka modal pengumuman
        window.bukaPengumuman = function(linkElement) {
            var card = linkElement.closest('.pengumuman-card');
            if (!card) return;

            var judul   = card.dataset.judul || 'Pengumuman';
            var file    = card.dataset.file || '';
            var isImage = card.dataset.isimage === 'true';

            var body = document.getElementById('pengumumanModalBody');
            if (!body) return;

            var html = '<div class="modal-judul">' + judul + '</div>';
            html += '<div class="file-container">';

            if (file) {
                if (isImage) {
                    html += '<img src="' + file + '" alt="' + judul + '">';
                } else {
                    // Tampilkan link download
                    html += '<a href="' + file + '" target="_blank" class="file-link">';
                    html += '<i class="fas fa-download" style="margin-right:8px;"></i> Download File';
                    html += '</a>';
                    // Tampilkan ikon besar
                    html += '<div style="margin-top:20px; font-size:4rem; color:#bcaaa4;">';
                    html += '<i class="fas fa-file-alt"></i>';
                    html += '</div>';
                }
            } else {
                html += '<div style="color:#bcaaa4; font-size:1.2rem;">Tidak ada file terlampir.</div>';
            }

            html += '</div>';

            body.innerHTML = html;

            var modal = document.getElementById('pengumumanModal');
            modal.classList.add('show');
        };

        // Tutup modal
        window.tutupPengumuman = function() {
            var modal = document.getElementById('pengumumanModal');
            modal.classList.remove('show');
        };

        // Tutup jika klik di luar
        document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById('pengumumanModal');
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    this.classList.remove('show');
                }
            });

            // Tutup dengan ESC
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    var modal = document.getElementById('pengumumanModal');
                    if (modal.classList.contains('show')) {
                        modal.classList.remove('show');
                    }
                }
            });
        });
    })();
</script>
    {{-- ============================================================
    DOKUMENTASI KEGIATAN (PUBLIK - DARI $datadok)
    ============================================================ --}}


    @include('00_semarang.00_include.02_footer')

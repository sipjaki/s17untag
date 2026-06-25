@include('00_semarang.00_include.01_header')
@include('00_semarang.00_include.05_headermenu')

{{-- ============================================================
    RUNNING BANNER
    ============================================================ --}}
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

{{-- ============================================================
    SEKAPUR SIRIH - PUBLIK (DARI DATABASE)
    ============================================================ --}}
<style>
/* ============================================================
   STYLE SEKAPUR SIRIH - MODERN & ATRAKTIF
   ============================================================ */

.news-slider-section {
    padding: 80px 0 60px;
    background: linear-gradient(135deg, #f8f9fc 0%, #eef1f5 100%);
    position: relative;
    overflow: hidden;
}

/* Dekorasi Background */
.news-slider-section::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(198, 40, 40, 0.05) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}

.news-slider-section::after {
    content: '';
    position: absolute;
    bottom: -30%;
    left: -10%;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(13, 71, 161, 0.05) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}

/* Section Header */
.section-header {
    text-align: center;
    margin-bottom: 50px;
    position: relative;
    z-index: 1;
}

.section-title {
    font-family: 'Poppins', sans-serif;
    font-size: 42px;
    font-weight: 800;
    color: #1a1a2e;
    margin: 0;
    position: relative;
    display: inline-block;
    letter-spacing: -0.5px;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: -12px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, #c62828, #0d47a1, #c62828);
    border-radius: 4px;
    background-size: 200% 100%;
    animation: gradientMove 3s ease-in-out infinite;
}

@keyframes gradientMove {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

.section-subtitle {
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    color: #7a8a9e;
    margin-top: 20px;
    text-align: center;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.8;
}

/* Container */
.kabar-scroll-container {
    position: relative;
    z-index: 1;
    padding: 0 20px;
}

.kabar-wrapper {
    max-width: 1200px;
    margin: 0 auto;
}

.sekapur-section {
    max-width: 1000px;
    margin: 0 auto;
    padding: 10px 0 30px;
    display: grid;
    grid-template-columns: 1fr;
    gap: 30px;
}

/* Card Item - Modern Glassmorphism */
.sekapur-item {
    background: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 24px;
    padding: 35px 40px;
    box-shadow:
        0 10px 40px rgba(0, 0, 0, 0.04),
        0 2px 10px rgba(0, 0, 0, 0.02);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

/* Efek Hover */
.sekapur-item:hover {
    transform: translateY(-6px) scale(1.005);
    box-shadow:
        0 20px 60px rgba(0, 0, 0, 0.08),
        0 4px 20px rgba(0, 0, 0, 0.04);
    border-color: rgba(198, 40, 40, 0.1);
}

/* Decorative Gradient Line */
.sekapur-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #c62828, #0d47a1, #1a1a2e);
    opacity: 0;
    transition: opacity 0.4s ease;
}

.sekapur-item:hover::before {
    opacity: 1;
}

/* Decorative Corner Accent */
.sekapur-item::after {
    content: '✦';
    position: absolute;
    top: 20px;
    right: 25px;
    font-size: 20px;
    color: rgba(198, 40, 40, 0.08);
    transition: all 0.4s ease;
}

.sekapur-item:hover::after {
    color: rgba(198, 40, 40, 0.2);
    transform: rotate(90deg) scale(1.2);
}

/* Meta Information */
.meta {
    display: flex;
    align-items: center;
    gap: 16px;
    flex-wrap: wrap;
    margin-bottom: 16px;
}

.meta-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-family: 'Poppins', sans-serif;
    font-size: 11px;
    font-weight: 600;
    color: #fff;
    background: linear-gradient(135deg, #c62828, #b71c1c);
    padding: 4px 14px;
    border-radius: 30px;
    letter-spacing: 0.5px;
    text-transform: uppercase;
}

.meta-date {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-family: 'Poppins', sans-serif;
    font-size: 13px;
    color: #7a8a9e;
}

.meta-date i {
    font-size: 16px;
    color: #b0b8c4;
}

/* Separator */
.separator {
    width: 80px;
    height: 3px;
    background: linear-gradient(90deg, #c62828, #0d47a1);
    margin: 0 0 20px 0;
    border-radius: 10px;
    position: relative;
}

.separator::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 100%;
    transform: translateY(-50%);
    width: 20px;
    height: 3px;
    background: linear-gradient(90deg, #0d47a1, transparent);
    border-radius: 10px;
    opacity: 0.3;
}

/* Content Paragraphs */
.sekapur-item p {
    font-family: 'Poppins', sans-serif;
    font-size: 15.5px;
    line-height: 2;
    color: #1a1a2e;
    margin: 0 0 16px 0;
    text-align: justify;
    letter-spacing: 0.3px;
    position: relative;
    padding-left: 0;
}

.sekapur-item p:last-child {
    margin-bottom: 0;
}

/* First Paragraph - Highlighted */
.sekapur-item p:first-of-type {
    font-size: 16px;
    line-height: 2.1;
    color: #1a1a2e;
}

/* Quote Style */
.sekapur-item p:first-of-type::first-letter {
    font-size: 48px;
    font-weight: 700;
    color: #c62828;
    float: left;
    margin-right: 8px;
    margin-top: 2px;
    line-height: 1;
    font-family: 'Georgia', serif;
}

/* Read More Button */
.btn-read-more {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: 'Poppins', sans-serif;
    font-size: 13px;
    font-weight: 600;
    color: #c62828;
    background: rgba(198, 40, 40, 0.08);
    padding: 8px 20px;
    border-radius: 30px;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-top: 8px;
    text-decoration: none;
}

.btn-read-more:hover {
    background: rgba(198, 40, 40, 0.15);
    transform: translateX(4px);
    color: #b71c1c;
}

.btn-read-more i {
    font-size: 18px;
    transition: transform 0.3s ease;
}

.btn-read-more:hover i {
    transform: translateX(4px);
}

/* Empty State */
.sekapur-empty {
    text-align: center;
    padding: 80px 40px;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border-radius: 24px;
    border: 2px dashed #e0e4ea;
    transition: all 0.3s ease;
}

.sekapur-empty:hover {
    border-color: #c62828;
    background: rgba(255, 255, 255, 0.95);
}

.sekapur-empty .icon {
    font-size: 64px;
    color: #b0b8c4;
    margin-bottom: 20px;
    transition: all 0.3s ease;
}

.sekapur-empty:hover .icon {
    color: #c62828;
    transform: scale(1.1) rotate(-5deg);
}

.sekapur-empty h3 {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    color: #1a1a2e;
    font-size: 22px;
    margin: 0 0 8px 0;
}

.sekapur-empty p {
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
    color: #7a8a9e;
    margin: 0;
}

.sekapur-empty p strong {
    color: #c62828;
    font-weight: 600;
}

/* Responsive Design */
@media (max-width: 768px) {
    .news-slider-section {
        padding: 50px 0 40px;
    }

    .section-title {
        font-size: 30px;
    }

    .section-title::after {
        width: 60px;
        height: 3px;
    }

    .sekapur-item {
        padding: 25px 20px;
        border-radius: 20px;
    }

    .sekapur-item p {
        font-size: 14px;
        line-height: 1.9;
        padding-left: 0;
    }

    .sekapur-item p:first-of-type::first-letter {
        font-size: 36px;
        margin-right: 6px;
    }

    .sekapur-item::after {
        display: none;
    }

    .meta-badge {
        font-size: 10px;
        padding: 3px 12px;
    }

    .meta-date {
        font-size: 12px;
    }

    .separator {
        width: 60px;
        margin-bottom: 16px;
    }

    .sekapur-empty {
        padding: 50px 20px;
    }

    .sekapur-empty .icon {
        font-size: 48px;
    }

    .sekapur-empty h3 {
        font-size: 18px;
    }
}

@media (max-width: 480px) {
    .section-title {
        font-size: 26px;
    }

    .sekapur-item {
        padding: 20px 16px;
        border-radius: 16px;
    }

    .sekapur-item p {
        font-size: 13px;
        line-height: 1.8;
    }

    .sekapur-item p:first-of-type::first-letter {
        font-size: 30px;
        margin-right: 4px;
    }

    .meta {
        gap: 10px;
    }

    .btn-read-more {
        font-size: 12px;
        padding: 6px 16px;
    }

    .sekapur-empty {
        padding: 40px 16px;
    }
}

/* Animasi Scroll Masuk */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.sekapur-item {
    animation: fadeInUp 0.8s ease forwards;
}

.sekapur-item:nth-child(1) { animation-delay: 0.1s; }
.sekapur-item:nth-child(2) { animation-delay: 0.2s; }
.sekapur-item:nth-child(3) { animation-delay: 0.3s; }
.sekapur-item:nth-child(4) { animation-delay: 0.4s; }
.sekapur-item:nth-child(5) { animation-delay: 0.5s; }
</style>


<section class="news-slider-section" id="beranda">
    <div class="section-header">
        <h2 class="section-title">Sekapur Sirih</h2>
        {{-- <p class="section-subtitle">
            Kata-kata bijak dari Sabhagiriwana'17 untuk para pencinta alam
        </p> --}}
    </div>

    <div class="kabar-scroll-container">
        <div class="kabar-wrapper">
            <div class="sekapur-section">

                @forelse ($data as $index => $item)
                    <div class="sekapur-item" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        {{-- META: Badge & Tanggal --}}
                        <div class="meta">
                            <span class="meta-badge">
                                <i class="mdi mdi-book-open-page-variant"></i>
                                Sekapur #{{ $loop->iteration }}
                            </span>
                            <span class="meta-date">
                                <i class="mdi mdi-calendar"></i>
                                {{ $item->created_at ? $item->created_at->format('d F Y') : '-' }}
                            </span>
                            @if($item->sabha2)
                            <span class="meta-date">
                                <i class="mdi mdi-map-marker"></i>
                                {{ Str::limit($item->sabha2, 40) }}
                            </span>
                            @endif
                        </div>

                        {{-- SEPARATOR --}}
                        <div class="separator"></div>

                        {{-- ISI PARAGRAF --}}
                        @if($item->sabha1)
                            <p>{{ $item->sabha1 }}</p>
                        @endif

                        @if($item->sabha3)
                            <p>{{ $item->sabha3 }}</p>
                        @endif

                        @if($item->sabha4)
                            <p>{{ $item->sabha4 }}</p>
                        @endif

                        {{-- READ MORE BUTTON (Opsional) --}}
                        @if(strlen($item->sabha1) > 300 || strlen($item->sabha3) > 200)
                            <button class="btn-read-more" onclick="toggleContent(this)">
                                <span>Baca Selengkapnya</span>
                                <i class="mdi mdi-chevron-down"></i>
                            </button>
                        @endif
                    </div>
                @empty
                    <div class="sekapur-empty">
                        <div class="icon">
                            <i class="mdi mdi-file-document-outline"></i>
                        </div>
                        <h3>Belum Ada Sekapur Sirih</h3>
                        <p>Silakan tambahkan konten melalui <strong>Admin Panel</strong></p>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Toggle Read More/Less
    window.toggleContent = function(button) {
        const card = button.closest('.sekapur-item');
        const paragraphs = card.querySelectorAll('p');
        const isExpanded = button.classList.contains('expanded');

        if (isExpanded) {
            // Collapse
            paragraphs.forEach((p, index) => {
                if (index > 0) {
                    p.style.display = 'none';
                }
            });
            button.innerHTML = '<span>Baca Selengkapnya</span> <i class="mdi mdi-chevron-down"></i>';
            button.classList.remove('expanded');
        } else {
            // Expand
            paragraphs.forEach(p => {
                p.style.display = 'block';
            });
            button.innerHTML = '<span>Sembunyikan</span> <i class="mdi mdi-chevron-up"></i>';
            button.classList.add('expanded');
        }
    };

    // Auto hide paragraphs beyond first if content is long
    document.querySelectorAll('.sekapur-item').forEach(item => {
        const paragraphs = item.querySelectorAll('p');
        const readMoreBtn = item.querySelector('.btn-read-more');

        if (readMoreBtn && paragraphs.length > 1) {
            paragraphs.forEach((p, index) => {
                if (index > 1) {
                    p.style.display = 'none';
                }
            });
        }
    });
});
</script>


@include('00_semarang.00_include.02_footer')

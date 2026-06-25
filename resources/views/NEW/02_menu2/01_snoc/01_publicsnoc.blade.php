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
    KONTEN AGENDA EVENT NWCT (DESAIN TERBARU - LEBIH MENARIK)
    ============================================================ --}}
<section class="nwct-section" id="nwct">
    {{-- HEADER --}}
    <div class="nwct-header">
        <div class="nwct-header-content">
            <span class="nwct-icon-left">🌲</span>
            <h2 class="nwct-title">{{ $judul ?? 'NWCT' }} Sabhagiriwana'17</h2>
            <span class="nwct-icon-right">🌲</span>
        </div>
        <p class="nwct-subtitle">
            Jejak petualangan dan prestasi Sabhagiriwana S'17 dalam setiap event yang dijalani
        </p>
    </div>

    <div class="nwct-container">
        <div class="nwct-wrapper">
            <div class="nwct-inner">

                {{-- COUNTER --}}
                @if($data->count() > 0)
                <div class="nwct-counter">
                    <i class="mdi mdi-calendar-check"></i>
                    Total Event: <strong>{{ $data->count() }}</strong>
                </div>
                @endif

                @forelse ($data as $index => $item)
                    <div class="nwct-card">
                        {{-- Decorative Background --}}
                        <div class="nwct-card-bg-1"></div>
                        <div class="nwct-card-bg-2"></div>

                        {{-- HEADER CARD --}}
                        <div class="nwct-card-header">
                            <div class="nwct-card-left">
                                <div class="nwct-card-badge">
                                    <i class="mdi mdi-flag"></i>
                                    Event #{{ $loop->iteration }}
                                </div>
                                <h3 class="nwct-card-title">
                                    {{ $item->sabha1 ?? 'Judul Event' }}
                                </h3>
                                <div class="nwct-card-meta">
                                    <span class="nwct-meta-item">
                                        <i class="mdi mdi-calendar"></i>
                                        {{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}
                                    </span>
                                    @if($item->sabha3)
                                    <span class="nwct-meta-item">
                                        <i class="mdi mdi-map-marker"></i>
                                        {{ Str::limit($item->sabha3, 40) }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="nwct-card-status">
                                <span class="nwct-status-dot"></span>
                                <span class="nwct-status-text">Aktif</span>
                            </div>
                        </div>

                        {{-- DIVIDER --}}
                        <div class="nwct-divider"></div>

                        {{-- DESKRIPSI / KETERANGAN (sabha2) --}}
                        @if($item->sabha2)
                            <div class="nwct-description">
                                <p>{{ $item->sabha2 }}</p>
                            </div>
                        @endif

                        {{-- GALERI FOTO (sabha4 - sabha8) --}}
                        @php
                            $fotos = [];
                            $fotoLabels = ['Foto 1', 'Foto 2', 'Foto 3', 'Foto 4', 'Foto 5'];
                            for ($i = 4; $i <= 8; $i++) {
                                $field = 'sabha' . $i;
                                if (!empty($item->$field) && file_exists(public_path($item->$field))) {
                                    $fotos[] = [
                                        'path' => $item->$field,
                                        'label' => $fotoLabels[$i - 4]
                                    ];
                                }
                            }
                        @endphp

                        @if(count($fotos) > 0)
                            <div class="nwct-gallery">
                                <div class="nwct-gallery-header">
                                    <span class="nwct-gallery-label">
                                        <i class="mdi mdi-image-multiple"></i>
                                        Galeri Dokumentasi
                                    </span>
                                    <span class="nwct-gallery-count">{{ count($fotos) }} foto</span>
                                </div>
                                <div class="nwct-gallery-grid">
                                    @foreach ($fotos as $foto)
                                        <div class="nwct-gallery-item" onclick="window.open('{{ asset($foto['path']) }}', '_blank')">
                                            <div class="nwct-gallery-img">
                                                <img src="{{ asset($foto['path']) }}" alt="{{ $foto['label'] }}" loading="lazy">
                                                <div class="nwct-gallery-overlay">
                                                    <i class="mdi mdi-magnify-plus"></i>
                                                </div>
                                            </div>
                                            <div class="nwct-gallery-label-item">
                                                <i class="mdi mdi-camera"></i> {{ $foto['label'] }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        {{-- FOOTER CARD --}}
                        <div class="nwct-card-footer">
                            <span class="nwct-footer-date">
                                <i class="mdi mdi-clock-outline"></i>
                                {{ $item->created_at ? $item->created_at->diffForHumans() : '-' }}
                            </span>
                            <a href="#" class="nwct-footer-link">
                                Lihat Detail <i class="mdi mdi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="nwct-empty">
                        <div class="nwct-empty-icon">
                            <i class="mdi mdi-calendar-blank"></i>
                        </div>
                        <h3>Belum Ada Agenda {{ $judul ?? 'Event' }}</h3>
                        <p>Silakan cek kembali nanti untuk melihat agenda event terbaru dari Sabhagiriwana S'17</p>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
</section>

<style>
/* ============================================================
   STYLE NWCT - MODERN, ELEGAN, ATRAKTIF
   ============================================================ */

.nwct-section {
    padding: 80px 0 60px;
    background: linear-gradient(160deg, #fafbfd 0%, #eef1f5 100%);
    position: relative;
    overflow: hidden;
}

/* Dekorasi Background */
.nwct-section::before {
    content: '';
    position: absolute;
    top: -40%;
    right: -10%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(13, 71, 161, 0.04) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}

.nwct-section::after {
    content: '';
    position: absolute;
    bottom: -30%;
    left: -15%;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(198, 40, 40, 0.04) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}

/* ===== HEADER ===== */
.nwct-header {
    text-align: center;
    margin-bottom: 50px;
    position: relative;
    z-index: 1;
}

.nwct-header-content {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 16px;
    flex-wrap: wrap;
}

.nwct-icon-left,
.nwct-icon-right {
    font-size: 40px;
    line-height: 1;
    animation: treeSway 3s ease-in-out infinite;
}

.nwct-icon-left {
    animation-delay: 0s;
}

.nwct-icon-right {
    animation-delay: 1.5s;
}

@keyframes treeSway {
    0%, 100% { transform: rotate(0deg); }
    50% { transform: rotate(8deg); }
}

.nwct-title {
    font-size: clamp(28px, 4vw, 42px);
    font-weight: 800;
    color: #1a1a2e;
    margin: 0;
    background: linear-gradient(135deg, #c62828, #0d47a1, #c62828);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    background-size: 200% 100%;
    animation: gradientText 4s ease-in-out infinite;
}

@keyframes gradientText {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

.nwct-subtitle {
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    color: #7a8a9e;
    margin-top: 12px;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.8;
}

/* ===== CONTAINER ===== */
.nwct-container {
    position: relative;
    z-index: 1;
    padding: 0 20px;
}

.nwct-wrapper {
    max-width: 1200px;
    margin: 0 auto;
}

.nwct-inner {
    max-width: 1100px;
    margin: 0 auto;
    padding: 10px 0 30px;
}

/* ===== COUNTER ===== */
.nwct-counter {
    text-align: center;
    margin-bottom: 30px;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    color: #7a8a9e;
    background: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(10px);
    padding: 8px 24px;
    border-radius: 40px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
    margin-left: auto;
    margin-right: auto;
    display: flex;
    width: fit-content;
}

.nwct-counter i {
    color: #0d47a1;
    font-size: 18px;
}

.nwct-counter strong {
    color: #c62828;
    font-weight: 700;
}

/* ===== CARD ===== */
.nwct-card {
    background: rgba(255, 255, 255, 0.92);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border-radius: 24px;
    padding: 28px 32px 32px;
    margin-bottom: 36px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    box-shadow: 0 8px 40px rgba(0, 0, 0, 0.04);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.nwct-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
    border-color: rgba(198, 40, 40, 0.08);
}

/* Decorative Background */
.nwct-card-bg-1 {
    position: absolute;
    top: -80px;
    right: -80px;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(198, 40, 40, 0.04) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
    transition: all 0.6s ease;
}

.nwct-card:hover .nwct-card-bg-1 {
    transform: scale(1.2);
    opacity: 0.8;
}

.nwct-card-bg-2 {
    position: absolute;
    bottom: -60px;
    left: -60px;
    width: 160px;
    height: 160px;
    background: radial-gradient(circle, rgba(13, 71, 161, 0.04) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
    transition: all 0.6s ease;
}

.nwct-card:hover .nwct-card-bg-2 {
    transform: scale(1.2);
    opacity: 0.8;
}

/* Top Border Animasi */
.nwct-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #c62828, #0d47a1, #c62828);
    background-size: 200% 100%;
    opacity: 0;
    transition: opacity 0.4s ease;
}

.nwct-card:hover::before {
    opacity: 1;
    animation: borderMove 2s linear infinite;
}

@keyframes borderMove {
    0% { background-position: 0% 50%; }
    100% { background-position: 200% 50%; }
}

/* ===== HEADER CARD ===== */
.nwct-card-header {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 16px;
    position: relative;
    z-index: 1;
}

.nwct-card-left {
    flex: 1;
    min-width: 0;
}

.nwct-card-badge {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    color: #ffffff;
    font-size: 12px;
    background: linear-gradient(135deg, #c62828, #b71c1c);
    padding: 4px 16px;
    border-radius: 30px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    margin-bottom: 8px;
    box-shadow: 0 4px 15px rgba(198, 40, 40, 0.2);
    letter-spacing: 0.3px;
}

.nwct-card-badge i {
    font-size: 14px;
}

.nwct-card-title {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    color: #1a1a2e;
    margin: 0;
    font-size: clamp(20px, 2.5vw, 24px);
    word-break: break-word;
    line-height: 1.3;
    transition: color 0.3s ease;
}

.nwct-card:hover .nwct-card-title {
    color: #c62828;
}

.nwct-card-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 6px;
}

.nwct-meta-item {
    font-family: 'Poppins', sans-serif;
    font-size: 12px;
    color: #7a8a9e;
    display: inline-flex;
    align-items: center;
    gap: 4px;
    background: rgba(0, 0, 0, 0.02);
    padding: 2px 12px;
    border-radius: 30px;
}

.nwct-meta-item i {
    font-size: 14px;
    color: #0d47a1;
}

/* Status */
.nwct-card-status {
    display: flex;
    align-items: center;
    gap: 8px;
    background: rgba(46, 125, 50, 0.06);
    padding: 4px 14px 4px 10px;
    border-radius: 30px;
    border: 1px solid rgba(46, 125, 50, 0.08);
    flex-shrink: 0;
}

.nwct-status-dot {
    display: inline-block;
    width: 8px;
    height: 8px;
    background: #2e7d32;
    border-radius: 50%;
    animation: pulseDot 1.8s ease-in-out infinite;
}

@keyframes pulseDot {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.5; transform: scale(0.7); }
}

.nwct-status-text {
    font-family: 'Poppins', sans-serif;
    font-size: 11px;
    color: #2e7d32;
    font-weight: 600;
}

/* ===== DIVIDER ===== */
.nwct-divider {
    margin: 12px 0 16px;
    height: 1px;
    background: linear-gradient(90deg, #f0f2f5, #c62828, #0d47a1, #f0f2f5);
    background-size: 300% 100%;
    animation: dividerMove 4s ease-in-out infinite;
    position: relative;
    z-index: 1;
}

@keyframes dividerMove {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

/* ===== DESCRIPTION ===== */
.nwct-description {
    background: linear-gradient(135deg, #f8fafc, #f0f2f5);
    border-radius: 14px;
    padding: 16px 20px;
    margin-bottom: 20px;
    border-left: 5px solid #c62828;
    position: relative;
    z-index: 1;
    transition: all 0.3s ease;
}

.nwct-card:hover .nwct-description {
    border-left-color: #0d47a1;
    background: linear-gradient(135deg, #fafbfd, #f5f7fa);
}

.nwct-description p {
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    color: #1a1a2e;
    margin: 0;
    line-height: 1.8;
    word-break: break-word;
}

/* ===== GALLERY ===== */
.nwct-gallery {
    margin-top: 4px;
    position: relative;
    z-index: 1;
}

.nwct-gallery-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 14px;
}

.nwct-gallery-label {
    font-family: 'Poppins', sans-serif;
    font-size: 11px;
    color: #b0b8c4;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    display: flex;
    align-items: center;
    gap: 6px;
}

.nwct-gallery-label i {
    font-size: 16px;
    color: #0d47a1;
}

.nwct-gallery-count {
    font-family: 'Poppins', sans-serif;
    font-size: 11px;
    color: #b0b8c4;
    font-weight: 500;
    background: rgba(0, 0, 0, 0.03);
    padding: 2px 12px;
    border-radius: 20px;
}

.nwct-gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
    gap: 18px;
}

.nwct-gallery-item {
    background: #ffffff;
    border-radius: 16px;
    padding: 8px 8px 14px 8px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    border: 1px solid #f0f2f5;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    text-align: center;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

.nwct-gallery-item:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 16px 48px rgba(0, 0, 0, 0.08);
    border-color: #0d47a1;
}

.nwct-gallery-img {
    width: 100%;
    aspect-ratio: 1/1;
    overflow: hidden;
    border-radius: 10px;
    background: #f0f2f5;
    position: relative;
}

.nwct-gallery-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.nwct-gallery-item:hover .nwct-gallery-img img {
    transform: scale(1.08);
}

.nwct-gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.3);
    opacity: 0;
    transition: opacity 0.4s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}

.nwct-gallery-item:hover .nwct-gallery-overlay {
    opacity: 1;
}

.nwct-gallery-overlay i {
    color: white;
    font-size: 32px;
    text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
}

.nwct-gallery-label-item {
    margin-top: 8px;
    font-family: 'Poppins', sans-serif;
    font-size: 10px;
    color: #b0b8c4;
    letter-spacing: 0.3px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 4px;
}

.nwct-gallery-label-item i {
    font-size: 12px;
}

/* ===== FOOTER ===== */
.nwct-card-footer {
    margin-top: 18px;
    padding-top: 14px;
    border-top: 1px solid #f0f2f5;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 8px;
    position: relative;
    z-index: 1;
}

.nwct-footer-date {
    font-family: 'Poppins', sans-serif;
    font-size: 12px;
    color: #b0b8c4;
    display: flex;
    align-items: center;
    gap: 4px;
}

.nwct-footer-date i {
    font-size: 14px;
}

.nwct-footer-link {
    font-family: 'Poppins', sans-serif;
    font-size: 13px;
    color: #c62828;
    text-decoration: none;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 6px;
    transition: all 0.3s ease;
    padding: 4px 16px;
    border-radius: 30px;
    background: rgba(198, 40, 40, 0.06);
}

.nwct-footer-link:hover {
    gap: 12px;
    background: rgba(198, 40, 40, 0.12);
}

.nwct-footer-link i {
    font-size: 14px;
    transition: transform 0.3s ease;
}

.nwct-footer-link:hover i {
    transform: translateX(4px);
}

/* ===== EMPTY ===== */
.nwct-empty {
    text-align: center;
    padding: 80px 40px;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border-radius: 24px;
    border: 2px dashed #e0e4ea;
    transition: all 0.4s ease;
}

.nwct-empty:hover {
    border-color: #c62828;
    background: rgba(255, 255, 255, 0.95);
    transform: scale(1.005);
}

.nwct-empty-icon {
    font-size: 64px;
    color: #b0b8c4;
    margin-bottom: 20px;
    transition: all 0.4s ease;
}

.nwct-empty:hover .nwct-empty-icon {
    color: #c62828;
    transform: scale(1.1) rotate(-5deg);
}

.nwct-empty h3 {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    color: #1a1a2e;
    font-size: 22px;
    margin: 0 0 8px 0;
}

.nwct-empty p {
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
    color: #7a8a9e;
    margin: 0;
}

/* ============================================================
   RESPONSIVE
   ============================================================ */

@media (max-width: 992px) {
    .nwct-card {
        padding: 24px 20px 26px;
    }
    .nwct-gallery-grid {
        grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
        gap: 14px;
    }
}

@media (max-width: 768px) {
    .nwct-section {
        padding: 50px 0 40px;
    }

    .nwct-title {
        font-size: clamp(24px, 5vw, 30px);
    }

    .nwct-subtitle {
        font-size: 14px;
        padding: 0 15px;
    }

    .nwct-card {
        padding: 20px 16px 22px;
        border-radius: 20px;
        margin-bottom: 24px;
    }

    .nwct-card-title {
        font-size: 17px;
    }

    .nwct-card-header {
        flex-direction: column;
        align-items: flex-start;
    }

    .nwct-card-status {
        align-self: flex-start;
    }

    .nwct-card-meta {
        gap: 8px;
    }

    .nwct-meta-item {
        font-size: 11px;
        padding: 2px 10px;
    }

    .nwct-description {
        padding: 14px 16px;
        margin-bottom: 16px;
    }

    .nwct-description p {
        font-size: 13.5px;
        line-height: 1.7;
    }

    .nwct-gallery-grid {
        grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
        gap: 12px;
    }

    .nwct-gallery-item {
        padding: 6px 6px 10px 6px;
        border-radius: 12px;
    }

    .nwct-gallery-img {
        border-radius: 8px;
    }

    .nwct-counter {
        font-size: 12px;
        padding: 6px 18px;
    }

    .nwct-empty {
        padding: 50px 20px;
    }

    .nwct-empty-icon {
        font-size: 48px;
    }

    .nwct-empty h3 {
        font-size: 18px;
    }

    .nwct-footer-link {
        font-size: 12px;
        padding: 4px 12px;
    }
}

@media (max-width: 480px) {
    .nwct-title {
        font-size: 22px;
    }

    .nwct-card {
        padding: 16px 12px 18px;
        border-radius: 16px;
    }

    .nwct-card-title {
        font-size: 15px;
    }

    .nwct-gallery-grid {
        grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
        gap: 10px;
    }

    .nwct-gallery-item {
        padding: 4px 4px 8px 4px;
        border-radius: 10px;
    }

    .nwct-description p {
        font-size: 13px;
    }

    .nwct-card-badge {
        font-size: 10px;
        padding: 3px 12px;
    }

    .nwct-icon-left,
    .nwct-icon-right {
        font-size: 28px;
    }

    .nwct-card-bg-1,
    .nwct-card-bg-2 {
        display: none;
    }
}

/* Animasi */
@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.nwct-card {
    animation: slideUp 0.6s ease forwards;
    opacity: 0;
}

.nwct-card:nth-child(1) { animation-delay: 0.05s; }
.nwct-card:nth-child(2) { animation-delay: 0.1s; }
.nwct-card:nth-child(3) { animation-delay: 0.15s; }
.nwct-card:nth-child(4) { animation-delay: 0.2s; }
.nwct-card:nth-child(5) { animation-delay: 0.25s; }
</style>



@include('00_semarang.00_include.02_footer')

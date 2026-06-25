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
    KONTEN PRESTASI (PUBLIK - DENGAN FIGURA FOTO)
    ============================================================ --}}
<section class="prestasi-section" id="prestasi">
    <div class="prestasi-header">
        <h2 class="prestasi-title">Prestasi Sabhagiriwana'17</h2>
        {{-- <p class="prestasi-subtitle">
            Jejak prestasi dan penghargaan yang telah diraih oleh
            Sabhagiriwana S'17 dalam berbagai kegiatan
        </p> --}}
    </div>

    <div class="prestasi-container">
        <div class="prestasi-wrapper">
            <div style="max-width: 1100px; margin: 0 auto; padding: 10px 0 30px;">

                {{-- Counter --}}
                @if($data->count() > 0)
                <div style="text-align: center; margin-bottom: 30px;">
                    <span class="prestasi-counter">
                        <i class="mdi mdi-trophy"></i>
                        Total Prestasi: <strong>{{ $data->count() }}</strong>
                    </span>
                </div>
                @endif

                @forelse ($data as $index => $item)
                    <div class="prestasi-card">

                        {{-- HEADER CARD --}}
                        <div class="prestasi-header-card">
                            <div class="prestasi-left">
                                <span class="prestasi-badge">
                                    <i class="mdi mdi-star" style="font-size: 14px;"></i>
                                    Prestasi #{{ $loop->iteration }}
                                </span>
                                <h3 class="prestasi-nama">
                                    {{ $item->sabha1 ?? 'Kegiatan' }}
                                </h3>
                                <div class="prestasi-meta">
                                    @if($item->sabha2)
                                        <span class="prestasi-meta-item">
                                            <i class="mdi mdi-calendar"></i> {{ $item->sabha2 }}
                                        </span>
                                    @endif
                                    <span class="prestasi-meta-date">
                                        <i class="mdi mdi-clock"></i>
                                        {{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        {{-- KETERANGAN (sabha3) --}}
                        @if($item->sabha3)
                            <div class="prestasi-deskripsi">
                                <p>{{ $item->sabha3 }}</p>
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
                            <div class="prestasi-galeri">
                                <div class="prestasi-galeri-label">
                                    <i class="mdi mdi-image"></i>
                                    Galeri Dokumentasi ({{ count($fotos) }} foto)
                                </div>
                                <div class="prestasi-galeri-grid">
                                    @foreach ($fotos as $foto)
                                        <div class="prestasi-foto" onclick="window.open('{{ asset($foto['path']) }}', '_blank')">
                                            <div class="foto-wrapper">
                                                <img src="{{ asset($foto['path']) }}" alt="{{ $foto['label'] }}" loading="lazy">
                                                <div class="foto-overlay">
                                                    <i class="mdi mdi-magnify"></i>
                                                </div>
                                            </div>
                                            <div class="foto-label">
                                                <i class="mdi mdi-camera"></i> {{ $foto['label'] }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                    </div>
                @empty
                    <div class="prestasi-empty">
                        <div class="empty-icon">
                            <i class="mdi mdi-trophy"></i>
                        </div>
                        <h3>Belum Ada Data Prestasi</h3>
                        <p>Silakan cek kembali nanti atau hubungi <strong>Admin</strong> untuk informasi lebih lanjut</p>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
</section>

<style>
/* ============================================================
   STYLE PRESTASI - MODERN & ELEGAN
   ============================================================ */

.prestasi-section {
    padding: 80px 0 60px;
    background: linear-gradient(145deg, #fafbfd 0%, #eef1f5 100%);
    position: relative;
    overflow: hidden;
}

/* Dekorasi Background */
.prestasi-section::before {
    content: '';
    position: absolute;
    top: -40%;
    right: -10%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(255, 193, 7, 0.05) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}

.prestasi-section::after {
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

/* Section Header */
.prestasi-header {
    text-align: center;
    margin-bottom: 50px;
    position: relative;
    z-index: 1;
}

.prestasi-title {
    font-family: 'Poppins', sans-serif;
    font-size: 42px;
    font-weight: 800;
    color: #1a1a2e;
    margin: 0;
    position: relative;
    display: inline-block;
    letter-spacing: -0.5px;
}

.prestasi-title::after {
    content: '';
    position: absolute;
    bottom: -12px;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 4px;
    background: linear-gradient(90deg, #f9a825, #c62828, #f9a825);
    border-radius: 4px;
    background-size: 200% 100%;
    animation: gradientMove 3s ease-in-out infinite;
}

@keyframes gradientMove {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

.prestasi-subtitle {
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    color: #7a8a9e;
    margin-top: 20px;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.8;
}

/* Container */
.prestasi-container {
    position: relative;
    z-index: 1;
    padding: 0 20px;
}

.prestasi-wrapper {
    max-width: 1200px;
    margin: 0 auto;
}

/* Card Prestasi - Glassmorphism */
.prestasi-card {
    background: rgba(255, 255, 255, 0.88);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border-radius: 24px;
    padding: 30px 35px 32px;
    margin-bottom: 32px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    box-shadow: 0 4px 24px rgba(0, 0, 0, 0.04);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.prestasi-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
    border-color: rgba(249, 168, 37, 0.15);
}

/* Decorative Top Border */
.prestasi-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #f9a825, #c62828, #f9a825);
    opacity: 0;
    transition: opacity 0.4s ease;
    background-size: 200% 100%;
}

.prestasi-card:hover::before {
    opacity: 1;
}

/* Decorative Corner */
.prestasi-card::after {
    content: '🏆';
    position: absolute;
    top: 18px;
    right: 22px;
    font-size: 32px;
    opacity: 0.06;
    transition: all 0.4s ease;
}

.prestasi-card:hover::after {
    opacity: 0.15;
    transform: rotate(10deg) scale(1.15);
}

/* Header Card */
.prestasi-header-card {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: flex-start;
    gap: 12px;
    margin-bottom: 16px;
    position: relative;
    z-index: 1;
}

.prestasi-left {
    flex: 1;
    min-width: 0;
}

.prestasi-badge {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    color: #ffffff;
    font-size: 12px;
    background: linear-gradient(135deg, #f9a825, #f57f17);
    padding: 4px 16px;
    border-radius: 30px;
    display: inline-block;
    margin-bottom: 8px;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    box-shadow: 0 4px 15px rgba(249, 168, 37, 0.25);
}

.prestasi-nama {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    color: #1a1a2e;
    margin: 0;
    font-size: 21px;
    word-break: break-word;
    transition: color 0.3s ease;
}

.prestasi-card:hover .prestasi-nama {
    color: #c62828;
}

.prestasi-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 6px;
}

.prestasi-meta-item {
    font-family: 'Poppins', sans-serif;
    font-size: 13px;
    display: inline-flex;
    align-items: center;
    gap: 4px;
    padding: 2px 14px;
    border-radius: 30px;
    background: rgba(13, 71, 161, 0.06);
    color: #0d47a1;
}

.prestasi-meta-item i {
    font-size: 15px;
}

.prestasi-meta-date {
    font-family: 'Poppins', sans-serif;
    font-size: 12px;
    color: #b0b8c4;
    display: inline-flex;
    align-items: center;
    gap: 4px;
    padding: 2px 12px;
    border-radius: 30px;
    background: rgba(0, 0, 0, 0.02);
}

/* Keterangan */
.prestasi-deskripsi {
    background: linear-gradient(135deg, #f8fafc, #f0f2f5);
    border-radius: 14px;
    padding: 16px 20px;
    margin-bottom: 20px;
    border-left: 4px solid #f9a825;
    position: relative;
    z-index: 1;
    transition: all 0.3s ease;
}

.prestasi-card:hover .prestasi-deskripsi {
    border-left-color: #c62828;
    background: linear-gradient(135deg, #fafbfd, #f5f7fa);
}

.prestasi-deskripsi p {
    font-family: 'Poppins', sans-serif;
    font-size: 14.5px;
    color: #1a1a2e;
    margin: 0;
    line-height: 1.8;
    word-break: break-word;
}

/* Galeri Foto */
.prestasi-galeri {
    margin-top: 8px;
    position: relative;
    z-index: 1;
}

.prestasi-galeri-label {
    font-family: 'Poppins', sans-serif;
    font-size: 12px;
    color: #b0b8c4;
    margin-bottom: 14px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.prestasi-galeri-label i {
    font-size: 16px;
    color: #f9a825;
}

.prestasi-galeri-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
    gap: 18px;
}

/* Figura Foto */
.prestasi-foto {
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

.prestasi-foto:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 16px 48px rgba(0, 0, 0, 0.08);
    border-color: #f9a825;
}

.prestasi-foto .foto-wrapper {
    width: 100%;
    aspect-ratio: 1/1;
    overflow: hidden;
    border-radius: 10px;
    background: #f0f2f5;
    position: relative;
}

.prestasi-foto .foto-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.prestasi-foto:hover .foto-wrapper img {
    transform: scale(1.08);
}

.prestasi-foto .foto-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(198, 40, 40, 0.2), rgba(249, 168, 37, 0.2));
    opacity: 0;
    transition: opacity 0.4s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}

.prestasi-foto:hover .foto-overlay {
    opacity: 1;
}

.prestasi-foto .foto-overlay i {
    color: white;
    font-size: 32px;
    text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
}

.prestasi-foto .foto-label {
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

.prestasi-foto .foto-label i {
    font-size: 12px;
}

/* Counter */
.prestasi-counter {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: 'Poppins', sans-serif;
    font-size: 13px;
    color: #7a8a9e;
    background: rgba(255, 255, 255, 0.8);
    padding: 6px 20px;
    border-radius: 30px;
    border: 1px solid rgba(0, 0, 0, 0.04);
}

.prestasi-counter i {
    color: #f9a825;
}

.prestasi-counter strong {
    color: #1a1a2e;
}

/* Empty State */
.prestasi-empty {
    text-align: center;
    padding: 80px 40px;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border-radius: 24px;
    border: 2px dashed #e0e4ea;
    transition: all 0.4s ease;
}

.prestasi-empty:hover {
    border-color: #f9a825;
    background: rgba(255, 255, 255, 0.95);
    transform: scale(1.005);
}

.prestasi-empty .empty-icon {
    font-size: 64px;
    color: #b0b8c4;
    margin-bottom: 20px;
    transition: all 0.4s ease;
}

.prestasi-empty:hover .empty-icon {
    color: #f9a825;
    transform: scale(1.1) rotate(-5deg);
}

.prestasi-empty h3 {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    color: #1a1a2e;
    font-size: 22px;
    margin: 0 0 8px 0;
}

.prestasi-empty p {
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
    color: #7a8a9e;
    margin: 0;
}

.prestasi-empty p strong {
    color: #c62828;
    font-weight: 600;
}

/* ============================================================
   RESPONSIVE
   ============================================================ */

@media (max-width: 992px) {
    .prestasi-card {
        padding: 24px 20px 26px;
    }
    .prestasi-galeri-grid {
        grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
        gap: 14px;
    }
}

@media (max-width: 768px) {
    .prestasi-section {
        padding: 50px 0 40px;
    }
    .prestasi-title {
        font-size: 30px;
    }
    .prestasi-title::after {
        width: 70px;
        height: 3px;
    }
    .prestasi-subtitle {
        font-size: 14px;
        padding: 0 15px;
    }
    .prestasi-card {
        padding: 20px 16px 22px;
        border-radius: 20px;
        margin-bottom: 24px;
    }
    .prestasi-nama {
        font-size: 17px;
    }
    .prestasi-header-card {
        flex-direction: column;
        align-items: flex-start;
    }
    .prestasi-meta {
        gap: 8px;
    }
    .prestasi-meta-item {
        font-size: 12px;
        padding: 2px 12px;
    }
    .prestasi-meta-date {
        font-size: 11px;
        padding: 2px 10px;
    }
    .prestasi-deskripsi {
        padding: 14px 16px;
        margin-bottom: 16px;
    }
    .prestasi-deskripsi p {
        font-size: 13.5px;
        line-height: 1.7;
    }
    .prestasi-galeri-grid {
        grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
        gap: 12px;
    }
    .prestasi-foto {
        padding: 6px 6px 10px 6px;
        border-radius: 12px;
    }
    .prestasi-foto .foto-wrapper {
        border-radius: 8px;
    }
    .prestasi-card::after {
        font-size: 24px;
        top: 14px;
        right: 16px;
    }
    .prestasi-empty {
        padding: 50px 20px;
    }
    .prestasi-empty .empty-icon {
        font-size: 48px;
    }
    .prestasi-empty h3 {
        font-size: 18px;
    }
    .prestasi-counter {
        font-size: 12px;
        padding: 4px 16px;
    }
}

@media (max-width: 480px) {
    .prestasi-title {
        font-size: 26px;
    }
    .prestasi-card {
        padding: 16px 12px 18px;
        border-radius: 16px;
    }
    .prestasi-nama {
        font-size: 15px;
    }
    .prestasi-galeri-grid {
        grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
        gap: 10px;
    }
    .prestasi-foto {
        padding: 4px 4px 8px 4px;
        border-radius: 10px;
    }
    .prestasi-deskripsi p {
        font-size: 13px;
    }
    .prestasi-meta-item {
        font-size: 11px;
        padding: 2px 10px;
    }
    .prestasi-badge {
        font-size: 10px;
        padding: 3px 12px;
    }
    .prestasi-card::after {
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

.prestasi-card {
    animation: slideUp 0.6s ease forwards;
    opacity: 0;
}

.prestasi-card:nth-child(1) { animation-delay: 0.05s; }
.prestasi-card:nth-child(2) { animation-delay: 0.1s; }
.prestasi-card:nth-child(3) { animation-delay: 0.15s; }
.prestasi-card:nth-child(4) { animation-delay: 0.2s; }
.prestasi-card:nth-child(5) { animation-delay: 0.25s; }
</style>


@include('00_semarang.00_include.02_footer')

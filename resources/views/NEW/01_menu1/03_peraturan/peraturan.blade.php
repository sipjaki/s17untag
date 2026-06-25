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
    KONTEN PERATURAN (PUBLIK)
    ============================================================ --}}

    <style>
/* ============================================================
   STYLE PERATURAN & KEBIJAKAN - MODERN & PROFESIONAL
   ============================================================ */

.peraturan-section {
    padding: 80px 0 60px;
    background: linear-gradient(145deg, #f8f9fc 0%, #eef1f5 100%);
    position: relative;
    overflow: hidden;
}

/* Dekorasi Background */
.peraturan-section::before {
    content: '';
    position: absolute;
    top: -40%;
    left: -10%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(198, 40, 40, 0.04) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}

.peraturan-section::after {
    content: '';
    position: absolute;
    bottom: -30%;
    right: -15%;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(13, 71, 161, 0.04) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}

/* Section Header */
.peraturan-header {
    text-align: center;
    margin-bottom: 50px;
    position: relative;
    z-index: 1;
}

.peraturan-title {
    font-family: 'Poppins', sans-serif;
    font-size: 42px;
    font-weight: 800;
    color: #1a1a2e;
    margin: 0;
    position: relative;
    display: inline-block;
    letter-spacing: -0.5px;
}

.peraturan-title::after {
    content: '';
    position: absolute;
    bottom: -12px;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
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

.peraturan-subtitle {
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
.peraturan-container {
    position: relative;
    z-index: 1;
    padding: 0 20px;
}

.peraturan-wrapper {
    max-width: 1200px;
    margin: 0 auto;
}

/* Card Peraturan - Glassmorphism */
.peraturan-card {
    background: rgba(255, 255, 255, 0.88);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border-radius: 24px;
    padding: 30px 35px;
    margin-bottom: 30px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    box-shadow: 0 4px 24px rgba(0, 0, 0, 0.04);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

/* Efek Hover Card */
.peraturan-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
    border-color: rgba(198, 40, 40, 0.1);
}

/* Decorative Top Border */
.peraturan-card::before {
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

.peraturan-card:hover::before {
    opacity: 1;
}

/* Decorative Corner Accent */
.peraturan-card::after {
    content: '📋';
    position: absolute;
    top: 15px;
    right: 20px;
    font-size: 28px;
    opacity: 0.06;
    transition: all 0.4s ease;
}

.peraturan-card:hover::after {
    opacity: 0.15;
    transform: rotate(5deg) scale(1.1);
}

/* Header Card */
.peraturan-header-card {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    gap: 16px;
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
}

.peraturan-badge {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    color: #ffffff;
    font-size: 12px;
    background: linear-gradient(135deg, #c62828, #b71c1c);
    padding: 4px 16px;
    border-radius: 30px;
    display: inline-block;
    margin-bottom: 8px;
    letter-spacing: 0.5px;
    text-transform: uppercase;
}

.peraturan-nama {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    color: #1a1a2e;
    margin: 0;
    font-size: 20px;
    word-break: break-word;
    transition: color 0.3s ease;
}

.peraturan-card:hover .peraturan-nama {
    color: #c62828;
}

.peraturan-tanggal {
    font-family: 'Poppins', sans-serif;
    font-size: 13px;
    color: #b0b8c4;
    display: flex;
    align-items: center;
    gap: 6px;
    background: rgba(0, 0, 0, 0.02);
    padding: 4px 14px;
    border-radius: 30px;
    white-space: nowrap;
}

.peraturan-tanggal i {
    font-size: 16px;
}

/* Body Grid */
.peraturan-body {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-top: 8px;
    position: relative;
    z-index: 1;
}

/* Box PDF */
.peraturan-pdf-box {
    background: linear-gradient(135deg, #f8fafc, #f0f2f5);
    border-radius: 16px;
    padding: 20px 24px;
    border: 1px solid rgba(0, 0, 0, 0.04);
    display: flex;
    flex-direction: column;
    justify-content: center;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.peraturan-pdf-box::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(198, 40, 40, 0.02), transparent);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.peraturan-pdf-box:hover::before {
    opacity: 1;
}

.peraturan-pdf-box:hover {
    border-color: rgba(198, 40, 40, 0.15);
    transform: translateX(4px);
}

.peraturan-pdf-content {
    display: flex;
    align-items: center;
    gap: 16px;
    position: relative;
    z-index: 1;
}

.peraturan-pdf-icon {
    width: 56px;
    height: 56px;
    border-radius: 14px;
    background: linear-gradient(135deg, rgba(198, 40, 40, 0.1), rgba(198, 40, 40, 0.05));
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: all 0.3s ease;
}

.peraturan-pdf-box:hover .peraturan-pdf-icon {
    background: linear-gradient(135deg, rgba(198, 40, 40, 0.2), rgba(198, 40, 40, 0.1));
    transform: scale(1.05);
}

.peraturan-pdf-icon i {
    font-size: 30px;
    color: #c62828;
}

.peraturan-pdf-info {
    flex: 1;
    min-width: 0;
}

.peraturan-pdf-label {
    font-family: 'Poppins', sans-serif;
    font-size: 11px;
    color: #b0b8c4;
    margin: 0;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.8px;
}

.peraturan-pdf-actions {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
    margin-top: 6px;
}

.peraturan-pdf-link {
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 16px;
    border-radius: 30px;
    transition: all 0.3s ease;
}

.peraturan-pdf-link.view {
    color: #c62828;
    background: rgba(198, 40, 40, 0.06);
}

.peraturan-pdf-link.view:hover {
    background: rgba(198, 40, 40, 0.12);
    transform: translateX(3px);
}

.peraturan-pdf-link.download {
    color: #0d47a1;
    background: rgba(13, 71, 161, 0.06);
}

.peraturan-pdf-link.download:hover {
    background: rgba(13, 71, 161, 0.12);
    transform: translateX(3px);
}

.peraturan-pdf-empty {
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    color: #b0b8c4;
    display: flex;
    align-items: center;
    gap: 6px;
}

.peraturan-pdf-empty i {
    font-size: 18px;
}

/* Box Keterangan */
.peraturan-keterangan-box {
    background: linear-gradient(135deg, #f8fafc, #f0f2f5);
    border-radius: 16px;
    padding: 20px 24px;
    border: 1px solid rgba(0, 0, 0, 0.04);
    display: flex;
    align-items: center;
    transition: all 0.3s ease;
}

.peraturan-keterangan-box:hover {
    border-color: rgba(13, 71, 161, 0.15);
    transform: translateX(4px);
}

.peraturan-keterangan-content {
    display: flex;
    gap: 14px;
    align-items: flex-start;
}

.peraturan-keterangan-icon {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: linear-gradient(135deg, rgba(13, 71, 161, 0.08), rgba(13, 71, 161, 0.03));
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: all 0.3s ease;
}

.peraturan-keterangan-box:hover .peraturan-keterangan-icon {
    background: linear-gradient(135deg, rgba(13, 71, 161, 0.15), rgba(13, 71, 161, 0.05));
    transform: scale(1.05);
}

.peraturan-keterangan-icon i {
    font-size: 22px;
    color: #0d47a1;
}

.peraturan-keterangan-info {
    flex: 1;
    min-width: 0;
}

.peraturan-keterangan-label {
    font-family: 'Poppins', sans-serif;
    font-size: 11px;
    color: #b0b8c4;
    margin: 0;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.8px;
}

.peraturan-keterangan-teks {
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    color: #1a1a2e;
    margin: 2px 0 0;
    word-break: break-word;
    line-height: 1.7;
}

/* Empty State */
.peraturan-empty {
    text-align: center;
    padding: 80px 40px;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border-radius: 24px;
    border: 2px dashed #e0e4ea;
    transition: all 0.4s ease;
}

.peraturan-empty:hover {
    border-color: #c62828;
    background: rgba(255, 255, 255, 0.95);
    transform: scale(1.005);
}

.peraturan-empty .empty-icon {
    font-size: 64px;
    color: #b0b8c4;
    margin-bottom: 20px;
    transition: all 0.4s ease;
}

.peraturan-empty:hover .empty-icon {
    color: #c62828;
    transform: scale(1.1) rotate(-5deg);
}

.peraturan-empty h3 {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    color: #1a1a2e;
    font-size: 22px;
    margin: 0 0 8px 0;
}

.peraturan-empty p {
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
    color: #7a8a9e;
    margin: 0;
}

.peraturan-empty p strong {
    color: #c62828;
    font-weight: 600;
}

/* Status Badge */
.peraturan-status {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    font-family: 'Poppins', sans-serif;
    font-size: 11px;
    font-weight: 600;
    padding: 2px 12px;
    border-radius: 30px;
    margin-top: 4px;
}

.peraturan-status.active {
    color: #2e7d32;
    background: rgba(46, 125, 50, 0.08);
}

.peraturan-status.inactive {
    color: #c62828;
    background: rgba(198, 40, 40, 0.08);
}

.peraturan-status i {
    font-size: 14px;
}

/* ============================================================
   RESPONSIVE DESIGN
   ============================================================ */

/* Tablet */
@media (max-width: 992px) {
    .peraturan-body {
        grid-template-columns: 1fr;
        gap: 16px;
    }

    .peraturan-pdf-box,
    .peraturan-keterangan-box {
        padding: 18px 20px;
    }

    .peraturan-card {
        padding: 24px 20px;
    }
}

/* Mobile */
@media (max-width: 768px) {
    .peraturan-section {
        padding: 50px 0 40px;
    }

    .peraturan-title {
        font-size: 30px;
    }

    .peraturan-title::after {
        width: 70px;
        height: 3px;
    }

    .peraturan-subtitle {
        font-size: 14px;
        padding: 0 15px;
    }

    .peraturan-card {
        padding: 20px 16px;
        border-radius: 20px;
        margin-bottom: 20px;
    }

    .peraturan-nama {
        font-size: 17px;
    }

    .peraturan-header-card {
        flex-direction: column;
        align-items: flex-start;
    }

    .peraturan-tanggal {
        font-size: 12px;
        padding: 2px 12px;
    }

    .peraturan-pdf-content {
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
    }

    .peraturan-pdf-icon {
        width: 48px;
        height: 48px;
    }

    .peraturan-pdf-icon i {
        font-size: 24px;
    }

    .peraturan-pdf-actions {
        flex-wrap: wrap;
    }

    .peraturan-pdf-link {
        font-size: 13px;
        padding: 4px 14px;
    }

    .peraturan-keterangan-content {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }

    .peraturan-keterangan-icon {
        width: 40px;
        height: 40px;
    }

    .peraturan-keterangan-icon i {
        font-size: 18px;
    }

    .peraturan-keterangan-teks {
        font-size: 13px;
    }

    .peraturan-empty {
        padding: 50px 20px;
    }

    .peraturan-empty .empty-icon {
        font-size: 48px;
    }

    .peraturan-empty h3 {
        font-size: 18px;
    }

    .peraturan-card::after {
        font-size: 20px;
        top: 12px;
        right: 14px;
    }
}

/* Mobile Small */
@media (max-width: 480px) {
    .peraturan-title {
        font-size: 26px;
    }

    .peraturan-card {
        padding: 16px 12px;
        border-radius: 16px;
    }

    .peraturan-nama {
        font-size: 15px;
    }

    .peraturan-pdf-box,
    .peraturan-keterangan-box {
        padding: 14px 16px;
    }

    .peraturan-pdf-link {
        font-size: 12px;
        padding: 4px 12px;
    }

    .peraturan-status {
        font-size: 10px;
        padding: 2px 10px;
    }
}

/* Animasi Scroll */
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

.peraturan-card {
    animation: slideUp 0.6s ease forwards;
    opacity: 0;
}

.peraturan-card:nth-child(1) { animation-delay: 0.05s; }
.peraturan-card:nth-child(2) { animation-delay: 0.1s; }
.peraturan-card:nth-child(3) { animation-delay: 0.15s; }
.peraturan-card:nth-child(4) { animation-delay: 0.2s; }
.peraturan-card:nth-child(5) { animation-delay: 0.25s; }
</style>

<section class="peraturan-section" id="peraturan">
    <div class="peraturan-header">
        <h2 class="peraturan-title">Peraturan &amp; Kebijakan</h2>

    </div>

    <div class="peraturan-container">
        <div class="peraturan-wrapper">
            <div style="max-width: 1100px; margin: 0 auto; padding: 10px 0 30px;">

                @forelse ($data as $index => $item)
                    <div class="peraturan-card" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                        {{-- Header Card --}}
                        <div class="peraturan-header-card">
                            <div>
                                <span class="peraturan-badge">
                                    <i class="mdi mdi-file-document" style="font-size: 14px;"></i>
                                    Peraturan #{{ $loop->iteration }}
                                </span>
                                <h3 class="peraturan-nama">
                                    {{ $item->sabha1 ?? 'Peraturan' }}
                                </h3>
                                @if($item->sabha4)
                                    <span class="peraturan-status active">
                                        <i class="mdi mdi-check-circle"></i>
                                        {{ $item->sabha4 }}
                                    </span>
                                @endif
                            </div>
                            <span class="peraturan-tanggal">
                                <i class="mdi mdi-calendar"></i>
                                {{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}
                            </span>
                        </div>

                        {{-- Body --}}
                        <div class="peraturan-body">

                            {{-- Kiri: PDF --}}
                            <div class="peraturan-pdf-box">
                                <div class="peraturan-pdf-content">
                                    <div class="peraturan-pdf-icon">
                                        <i class="mdi mdi-file-pdf"></i>
                                    </div>
                                    <div class="peraturan-pdf-info">
                                        <p class="peraturan-pdf-label">
                                            <i class="mdi mdi-paperclip"></i> Berkas PDF
                                        </p>
                                        @if($item->sabha2 && file_exists(public_path($item->sabha2)))
                                            <div class="peraturan-pdf-actions">
                                                <a href="{{ asset($item->sabha2) }}" target="_blank" class="peraturan-pdf-link view">
                                                    <i class="mdi mdi-open-in-new"></i> Lihat
                                                </a>
                                                <a href="{{ asset($item->sabha2) }}" download class="peraturan-pdf-link download">
                                                    <i class="mdi mdi-download"></i> Download
                                                </a>
                                            </div>
                                        @else
                                            <span class="peraturan-pdf-empty">
                                                <i class="mdi mdi-close-circle"></i> Belum ada file
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Kanan: Keterangan --}}
                            <div class="peraturan-keterangan-box">
                                <div class="peraturan-keterangan-content">
                                    <div class="peraturan-keterangan-icon">
                                        <i class="mdi mdi-information"></i>
                                    </div>
                                    <div class="peraturan-keterangan-info">
                                        <p class="peraturan-keterangan-label">
                                            <i class="mdi mdi-text-box"></i> Keterangan
                                        </p>
                                        <p class="peraturan-keterangan-teks">
                                            {{ $item->sabha3 ?? '-' }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @empty
                    <div class="peraturan-empty">
                        <div class="empty-icon">
                            <i class="mdi mdi-file-document-outline"></i>
                        </div>
                        <h3>Belum Ada Data Peraturan</h3>
                        <p>Silakan cek kembali nanti atau hubungi <strong>Admin</strong> untuk informasi lebih lanjut</p>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
</section>

@include('00_semarang.00_include.02_footer')

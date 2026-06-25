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
    KONTEN DIVISI (PUBLIK)
    ============================================================ --}}

    <style>
/* ============================================================
   STYLE DIVISI - MODERN & PROFESIONAL
   ============================================================ */

.divisi-section {
    padding: 80px 0 60px;
    background: linear-gradient(145deg, #fafbfd 0%, #eef1f5 100%);
    position: relative;
    overflow: hidden;
}

/* Dekorasi Background */
.divisi-section::before {
    content: '';
    position: absolute;
    top: -40%;
    right: -10%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(198, 40, 40, 0.04) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}

.divisi-section::after {
    content: '';
    position: absolute;
    bottom: -30%;
    left: -15%;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(13, 71, 161, 0.04) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}

/* Section Header */
.divisi-header {
    text-align: center;
    margin-bottom: 50px;
    position: relative;
    z-index: 1;
}

.divisi-title {
    font-family: 'Poppins', sans-serif;
    font-size: 42px;
    font-weight: 800;
    color: #1a1a2e;
    margin: 0;
    position: relative;
    display: inline-block;
    letter-spacing: -0.5px;
}

.divisi-title::after {
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

.divisi-subtitle {
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
.divisi-container {
    position: relative;
    z-index: 1;
    padding: 0 20px;
}

.divisi-wrapper {
    max-width: 1200px;
    margin: 0 auto;
}

/* Card Divisi - Glassmorphism */
.divisi-card {
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
.divisi-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
    border-color: rgba(13, 71, 161, 0.1);
}

/* Decorative Top Border */
.divisi-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #0d47a1, #c62828, #0d47a1);
    opacity: 0;
    transition: opacity 0.4s ease;
    background-size: 200% 100%;
}

.divisi-card:hover::before {
    opacity: 1;
}

/* Decorative Corner Accent */
.divisi-card::after {
    content: '🏢';
    position: absolute;
    top: 15px;
    right: 20px;
    font-size: 28px;
    opacity: 0.06;
    transition: all 0.4s ease;
}

.divisi-card:hover::after {
    opacity: 0.15;
    transform: rotate(5deg) scale(1.1);
}

/* Header Card */
.divisi-header-card {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    gap: 16px;
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
}

.divisi-badge {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    color: #ffffff;
    font-size: 12px;
    background: linear-gradient(135deg, #0d47a1, #0a3a8a);
    padding: 4px 16px;
    border-radius: 30px;
    display: inline-block;
    margin-bottom: 8px;
    letter-spacing: 0.5px;
    text-transform: uppercase;
}

.divisi-nama {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    color: #1a1a2e;
    margin: 0;
    font-size: 20px;
    word-break: break-word;
    transition: color 0.3s ease;
}

.divisi-card:hover .divisi-nama {
    color: #0d47a1;
}

.divisi-tanggal {
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

.divisi-tanggal i {
    font-size: 16px;
}

/* Body Grid */
.divisi-body {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-top: 8px;
    position: relative;
    z-index: 1;
}

/* Box Keterangan */
.divisi-keterangan-box {
    background: linear-gradient(135deg, #f8fafc, #f0f2f5);
    border-radius: 16px;
    padding: 20px 24px;
    border: 1px solid rgba(0, 0, 0, 0.04);
    display: flex;
    align-items: center;
    min-height: 100px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.divisi-keterangan-box::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(13, 71, 161, 0.02), transparent);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.divisi-keterangan-box:hover::before {
    opacity: 1;
}

.divisi-keterangan-box:hover {
    border-color: rgba(13, 71, 161, 0.15);
    transform: translateX(4px);
}

.divisi-keterangan-content {
    display: flex;
    gap: 14px;
    align-items: flex-start;
    width: 100%;
    position: relative;
    z-index: 1;
}

.divisi-keterangan-icon {
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

.divisi-keterangan-box:hover .divisi-keterangan-icon {
    background: linear-gradient(135deg, rgba(13, 71, 161, 0.15), rgba(13, 71, 161, 0.05));
    transform: scale(1.05);
}

.divisi-keterangan-icon i {
    font-size: 22px;
    color: #0d47a1;
}

.divisi-keterangan-info {
    flex: 1;
    min-width: 0;
}

.divisi-keterangan-label {
    font-family: 'Poppins', sans-serif;
    font-size: 11px;
    color: #b0b8c4;
    margin: 0;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.8px;
}

.divisi-keterangan-teks {
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    color: #1a1a2e;
    margin: 2px 0 0;
    word-break: break-word;
    line-height: 1.7;
}

/* Box PDF */
.divisi-pdf-box {
    background: linear-gradient(135deg, #f8fafc, #f0f2f5);
    border-radius: 16px;
    padding: 20px 24px;
    border: 1px solid rgba(0, 0, 0, 0.04);
    display: flex;
    align-items: center;
    min-height: 100px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.divisi-pdf-box::before {
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

.divisi-pdf-box:hover::before {
    opacity: 1;
}

.divisi-pdf-box:hover {
    border-color: rgba(198, 40, 40, 0.15);
    transform: translateX(4px);
}

.divisi-pdf-content {
    display: flex;
    align-items: center;
    gap: 16px;
    width: 100%;
    position: relative;
    z-index: 1;
}

.divisi-pdf-icon {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: linear-gradient(135deg, rgba(198, 40, 40, 0.08), rgba(198, 40, 40, 0.03));
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: all 0.3s ease;
}

.divisi-pdf-box:hover .divisi-pdf-icon {
    background: linear-gradient(135deg, rgba(198, 40, 40, 0.15), rgba(198, 40, 40, 0.05));
    transform: scale(1.05);
}

.divisi-pdf-icon i {
    font-size: 24px;
    color: #c62828;
}

.divisi-pdf-info {
    flex: 1;
    min-width: 0;
}

.divisi-pdf-label {
    font-family: 'Poppins', sans-serif;
    font-size: 11px;
    color: #b0b8c4;
    margin: 0;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.8px;
}

.divisi-pdf-actions {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
    margin-top: 4px;
}

.divisi-pdf-link {
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

.divisi-pdf-link.view {
    color: #c62828;
    background: rgba(198, 40, 40, 0.06);
}

.divisi-pdf-link.view:hover {
    background: rgba(198, 40, 40, 0.12);
    transform: translateX(3px);
}

.divisi-pdf-link.download {
    color: #0d47a1;
    background: rgba(13, 71, 161, 0.06);
}

.divisi-pdf-link.download:hover {
    background: rgba(13, 71, 161, 0.12);
    transform: translateX(3px);
}

.divisi-pdf-empty {
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    color: #b0b8c4;
    display: flex;
    align-items: center;
    gap: 6px;
}

.divisi-pdf-empty i {
    font-size: 18px;
}

/* Status Badge */
.divisi-status {
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

.divisi-status.active {
    color: #2e7d32;
    background: rgba(46, 125, 50, 0.08);
}

.divisi-status.inactive {
    color: #c62828;
    background: rgba(198, 40, 40, 0.08);
}

.divisi-status i {
    font-size: 14px;
}

/* Empty State */
.divisi-empty {
    text-align: center;
    padding: 80px 40px;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border-radius: 24px;
    border: 2px dashed #e0e4ea;
    transition: all 0.4s ease;
}

.divisi-empty:hover {
    border-color: #0d47a1;
    background: rgba(255, 255, 255, 0.95);
    transform: scale(1.005);
}

.divisi-empty .empty-icon {
    font-size: 64px;
    color: #b0b8c4;
    margin-bottom: 20px;
    transition: all 0.4s ease;
}

.divisi-empty:hover .empty-icon {
    color: #0d47a1;
    transform: scale(1.1) rotate(-5deg);
}

.divisi-empty h3 {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    color: #1a1a2e;
    font-size: 22px;
    margin: 0 0 8px 0;
}

.divisi-empty p {
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
    color: #7a8a9e;
    margin: 0;
}

.divisi-empty p strong {
    color: #0d47a1;
    font-weight: 600;
}

/* Counter Badge */
.divisi-counter {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-family: 'Poppins', sans-serif;
    font-size: 13px;
    color: #7a8a9e;
    background: rgba(255, 255, 255, 0.8);
    padding: 6px 18px;
    border-radius: 30px;
    border: 1px solid rgba(0, 0, 0, 0.04);
    margin-top: 10px;
}

.divisi-counter i {
    color: #0d47a1;
}

.divisi-counter strong {
    color: #1a1a2e;
}

/* ============================================================
   RESPONSIVE DESIGN
   ============================================================ */

/* Tablet */
@media (max-width: 992px) {
    .divisi-body {
        grid-template-columns: 1fr;
        gap: 16px;
    }

    .divisi-keterangan-box,
    .divisi-pdf-box {
        min-height: 80px;
        padding: 18px 20px;
    }

    .divisi-card {
        padding: 24px 20px;
    }
}

/* Mobile */
@media (max-width: 768px) {
    .divisi-section {
        padding: 50px 0 40px;
    }

    .divisi-title {
        font-size: 30px;
    }

    .divisi-title::after {
        width: 70px;
        height: 3px;
    }

    .divisi-subtitle {
        font-size: 14px;
        padding: 0 15px;
    }

    .divisi-card {
        padding: 20px 16px;
        border-radius: 20px;
        margin-bottom: 20px;
    }

    .divisi-nama {
        font-size: 17px;
    }

    .divisi-header-card {
        flex-direction: column;
        align-items: flex-start;
    }

    .divisi-tanggal {
        font-size: 12px;
        padding: 2px 12px;
    }

    .divisi-keterangan-content {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }

    .divisi-keterangan-icon {
        width: 40px;
        height: 40px;
    }

    .divisi-keterangan-icon i {
        font-size: 18px;
    }

    .divisi-keterangan-teks {
        font-size: 13px;
    }

    .divisi-pdf-content {
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
    }

    .divisi-pdf-icon {
        width: 40px;
        height: 40px;
    }

    .divisi-pdf-icon i {
        font-size: 20px;
    }

    .divisi-pdf-actions {
        flex-wrap: wrap;
    }

    .divisi-pdf-link {
        font-size: 13px;
        padding: 4px 14px;
    }

    .divisi-empty {
        padding: 50px 20px;
    }

    .divisi-empty .empty-icon {
        font-size: 48px;
    }

    .divisi-empty h3 {
        font-size: 18px;
    }

    .divisi-card::after {
        font-size: 20px;
        top: 12px;
        right: 14px;
    }

    .divisi-counter {
        font-size: 12px;
        padding: 4px 14px;
    }
}

/* Mobile Small */
@media (max-width: 480px) {
    .divisi-title {
        font-size: 26px;
    }

    .divisi-card {
        padding: 16px 12px;
        border-radius: 16px;
    }

    .divisi-nama {
        font-size: 15px;
    }

    .divisi-keterangan-box,
    .divisi-pdf-box {
        padding: 14px 16px;
        min-height: 70px;
    }

    .divisi-pdf-link {
        font-size: 12px;
        padding: 4px 12px;
    }

    .divisi-status {
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

.divisi-card {
    animation: slideUp 0.6s ease forwards;
    opacity: 0;
}

.divisi-card:nth-child(1) { animation-delay: 0.05s; }
.divisi-card:nth-child(2) { animation-delay: 0.1s; }
.divisi-card:nth-child(3) { animation-delay: 0.15s; }
.divisi-card:nth-child(4) { animation-delay: 0.2s; }
.divisi-card:nth-child(5) { animation-delay: 0.25s; }
</style>


<section class="divisi-section" id="divisi">
    <div class="divisi-header">
        <h2 class="divisi-title">Divisi Sabhagiriwana'17</h2>

    </div>

    <div class="divisi-container">
        <div class="divisi-wrapper">
            <div style="max-width: 1100px; margin: 0 auto; padding: 10px 0 30px;">

                {{-- Total Counter --}}
                @if($data->count() > 0)
                <div style="text-align: center; margin-bottom: 30px;">
                    <span class="divisi-counter">
                        <i class="mdi mdi-account-group"></i>
                        Total Divisi: <strong>{{ $data->count() }}</strong>
                    </span>
                </div>
                @endif

                @forelse ($data as $index => $item)
                    <div class="divisi-card" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                        {{-- Header Card --}}
                        <div class="divisi-header-card">
                            <div>
                                <span class="divisi-badge">
                                    <i class="mdi mdi-tag" style="font-size: 14px;"></i>
                                    Divisi #{{ $loop->iteration }}
                                </span>
                                <h3 class="divisi-nama">
                                    {{ $item->sabha1 ?? 'Divisi' }}
                                </h3>
                                @if($item->sabha4)
                                    <span class="divisi-status active">
                                        <i class="mdi mdi-check-circle"></i>
                                        {{ $item->sabha4 }}
                                    </span>
                                @endif
                            </div>
                            <span class="divisi-tanggal">
                                <i class="mdi mdi-calendar"></i>
                                {{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}
                            </span>
                        </div>

                        {{-- Body: 2 Kolom --}}
                        <div class="divisi-body">

                            {{-- Kiri: Keterangan --}}
                            <div class="divisi-keterangan-box">
                                <div class="divisi-keterangan-content">
                                    <div class="divisi-keterangan-icon">
                                        <i class="mdi mdi-information"></i>
                                    </div>
                                    <div class="divisi-keterangan-info">
                                        <p class="divisi-keterangan-label">
                                            <i class="mdi mdi-text-box"></i> Keterangan
                                        </p>
                                        <p class="divisi-keterangan-teks">
                                            {{ $item->sabha3 ?? '-' }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- Kanan: File PDF --}}
                            <div class="divisi-pdf-box">
                                <div class="divisi-pdf-content">
                                    <div class="divisi-pdf-icon">
                                        <i class="mdi mdi-file-pdf"></i>
                                    </div>
                                    <div class="divisi-pdf-info">
                                        <p class="divisi-pdf-label">
                                            <i class="mdi mdi-paperclip"></i> File PDF
                                        </p>
                                        @if($item->sabha2 && file_exists(public_path($item->sabha2)))
                                            <div class="divisi-pdf-actions">
                                                <a href="{{ asset($item->sabha2) }}" target="_blank" class="divisi-pdf-link view">
                                                    <i class="mdi mdi-open-in-new"></i> Lihat
                                                </a>
                                                <a href="{{ asset($item->sabha2) }}" download class="divisi-pdf-link download">
                                                    <i class="mdi mdi-download"></i> Download
                                                </a>
                                            </div>
                                        @else
                                            <span class="divisi-pdf-empty">
                                                <i class="mdi mdi-close-circle"></i> Belum ada file
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @empty
                    <div class="divisi-empty">
                        <div class="empty-icon">
                            <i class="mdi mdi-account-group"></i>
                        </div>
                        <h3>Belum Ada Data Divisi</h3>
                        <p>Silakan cek kembali nanti atau hubungi <strong>Admin</strong> untuk informasi lebih lanjut</p>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
</section>


@include('00_semarang.00_include.02_footer')

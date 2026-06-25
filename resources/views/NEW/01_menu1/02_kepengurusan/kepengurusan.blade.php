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
    KEPENGURUSAN (DARI DATABASE - CARD ELEGAN)
    ============================================================ --}}
<style>
/* ============================================================
   STYLE KEPENGURUSAN - MODERN & ELEGAN
   ============================================================ */

.kepengurusan-section {
    padding: 80px 0 60px;
    background: linear-gradient(145deg, #fafbfd 0%, #eef1f5 100%);
    position: relative;
    overflow: hidden;
}

/* Dekorasi Background */
.kepengurusan-section::before {
    content: '';
    position: absolute;
    top: -30%;
    right: -15%;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(198, 40, 40, 0.06) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}

.kepengurusan-section::after {
    content: '';
    position: absolute;
    bottom: -20%;
    left: -10%;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(13, 71, 161, 0.05) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}

/* Section Header */
.kepengurusan-header {
    text-align: center;
    margin-bottom: 50px;
    position: relative;
    z-index: 1;
}

.kepengurusan-title {
    font-family: 'Poppins', sans-serif;
    font-size: 42px;
    font-weight: 800;
    color: #1a1a2e;
    margin: 0 0 20px 0;
    position: relative;
    display: inline-block;
    letter-spacing: -0.5px;
}

.kepengurusan-title::after {
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

.kepengurusan-subtitle {
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    color: #7a8a9e;
    margin-top: 20px;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.8;
}

/* Image Struktur */
.struktur-image-container {
    position: relative;
    z-index: 1;
    margin: 0 auto 20px;
    max-width: 900px;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
    transition: all 0.4s ease;
}

.struktur-image-container:hover {
    transform: translateY(-4px);
    box-shadow: 0 30px 80px rgba(0, 0, 0, 0.12);
}

.struktur-image-container img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.6s ease;
}

.struktur-image-container:hover img {
    transform: scale(1.02);
}

/* Container */
.kepengurusan-container {
    position: relative;
    z-index: 1;
    padding: 0 20px;
}

.kepengurusan-wrapper {
    max-width: 1200px;
    margin: 0 auto;
}

/* Layout 2 Kolom */
.kepengurusan-layout {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px 50px;
    align-items: start;
    padding: 20px 0 40px;
}

/* Kolom Kiri - Deskripsi */
.kepengurusan-deskripsi {
    font-family: 'Poppins', sans-serif;
    font-size: 15.5px;
    line-height: 2.1;
    color: #1a1a2e;
    text-align: justify;
    padding: 10px 0;
}

.kepengurusan-deskripsi p {
    margin: 0 0 16px 0;
    position: relative;
    padding-left: 20px;
    border-left: 3px solid transparent;
    transition: all 0.3s ease;
}

.kepengurusan-deskripsi p:hover {
    border-left-color: #c62828;
    padding-left: 24px;
}

.kepengurusan-deskripsi p:first-child {
    font-size: 16px;
    font-weight: 500;
    color: #1a1a2e;
}

.kepengurusan-deskripsi p:first-child::first-letter {
    font-size: 42px;
    font-weight: 700;
    color: #c62828;
    float: left;
    margin-right: 8px;
    margin-top: 2px;
    line-height: 1;
    font-family: 'Georgia', serif;
}

.deskripsi-divider {
    width: 80px;
    height: 3px;
    background: linear-gradient(90deg, #c62828, #0d47a1);
    border-radius: 10px;
    margin: 20px 0 24px;
    position: relative;
}

.deskripsi-divider::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 100%;
    transform: translateY(-50%);
    width: 30px;
    height: 3px;
    background: linear-gradient(90deg, #0d47a1, transparent);
    border-radius: 10px;
    opacity: 0.3;
}

/* Kolom Kanan - Grid Pengurus */
.kepengurusan-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
    gap: 25px;
}

/* Card Pengurus - Modern Glassmorphism */
.kepengurusan-card {
    background: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border-radius: 20px;
    padding: 20px 16px 18px;
    text-align: center;
    border: 1px solid rgba(255, 255, 255, 0.3);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

/* Efek Hover Card */
.kepengurusan-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
    border-color: rgba(198, 40, 40, 0.15);
}

/* Decorative Top Border */
.kepengurusan-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, #c62828, #0d47a1);
    opacity: 0;
    transition: opacity 0.4s ease;
}

.kepengurusan-card:hover::before {
    opacity: 1;
}

/* Decorative Icon Top Right */
.kepengurusan-card::after {
    content: '◆';
    position: absolute;
    top: 10px;
    right: 12px;
    font-size: 14px;
    color: rgba(198, 40, 40, 0.06);
    transition: all 0.4s ease;
}

.kepengurusan-card:hover::after {
    color: rgba(198, 40, 40, 0.15);
    transform: rotate(45deg) scale(1.2);
}

/* Avatar */
.kepengurusan-avatar {
    width: 90px;
    height: 90px;
    border-radius: 50%;
    overflow: hidden;
    margin: 0 auto 12px;
    border: 3px solid #c62828;
    background: linear-gradient(135deg, #f0f2f5, #e4e7ed);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.4s ease;
    position: relative;
}

.kepengurusan-card:hover .kepengurusan-avatar {
    border-color: #0d47a1;
    transform: scale(1.05);
    box-shadow: 0 8px 25px rgba(198, 40, 40, 0.15);
}

.kepengurusan-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.kepengurusan-card:hover .kepengurusan-avatar img {
    transform: scale(1.08);
}

.kepengurusan-avatar .avatar-placeholder {
    font-size: 40px;
    color: #b0b8c4;
    transition: all 0.3s ease;
}

.kepengurusan-card:hover .avatar-placeholder {
    color: #c62828;
    transform: scale(1.1);
}

/* Nama */
.kepengurusan-nama {
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
    font-weight: 700;
    color: #1a1a2e;
    margin: 8px 0 4px;
    line-height: 1.3;
    transition: color 0.3s ease;
}

.kepengurusan-card:hover .kepengurusan-nama {
    color: #c62828;
}

/* Jabatan */
.kepengurusan-jabatan {
    font-family: 'Poppins', sans-serif;
    font-size: 12px;
    font-weight: 600;
    color: #ffffff;
    background: linear-gradient(135deg, #c62828, #b71c1c);
    padding: 3px 14px;
    border-radius: 30px;
    display: inline-block;
    margin: 4px 0 6px;
    letter-spacing: 0.3px;
    text-transform: uppercase;
    transition: all 0.3s ease;
}

.kepengurusan-card:hover .kepengurusan-jabatan {
    background: linear-gradient(135deg, #0d47a1, #0a3a8a);
    transform: scale(1.05);
}

/* Jurusan */
.kepengurusan-jurusan {
    font-family: 'Poppins', sans-serif;
    font-size: 11.5px;
    color: #5a6a7a;
    margin: 4px 0 2px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 4px;
}

.kepengurusan-jurusan i {
    font-size: 13px;
    color: #0d47a1;
}

/* Keterangan */
.kepengurusan-keterangan {
    font-family: 'Poppins', sans-serif;
    font-size: 11px;
    color: #7a8a9e;
    font-style: italic;
    margin-top: 6px;
    line-height: 1.5;
    padding: 4px 8px;
    background: rgba(0, 0, 0, 0.02);
    border-radius: 8px;
    border-left: 2px solid rgba(198, 40, 40, 0.1);
    transition: all 0.3s ease;
}

.kepengurusan-card:hover .kepengurusan-keterangan {
    border-left-color: #c62828;
    background: rgba(198, 40, 40, 0.03);
}

/* Empty State */
.kepengurusan-empty {
    grid-column: 1 / -1;
    text-align: center;
    padding: 80px 40px;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border-radius: 24px;
    border: 2px dashed #e0e4ea;
    transition: all 0.4s ease;
}

.kepengurusan-empty:hover {
    border-color: #c62828;
    background: rgba(255, 255, 255, 0.95);
    transform: scale(1.005);
}

.kepengurusan-empty .empty-icon {
    font-size: 64px;
    color: #b0b8c4;
    margin-bottom: 20px;
    transition: all 0.4s ease;
}

.kepengurusan-empty:hover .empty-icon {
    color: #c62828;
    transform: scale(1.1) rotate(-5deg);
}

.kepengurusan-empty h3 {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    color: #1a1a2e;
    font-size: 22px;
    margin: 0 0 8px 0;
}

.kepengurusan-empty p {
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
    color: #7a8a9e;
    margin: 0;
}

.kepengurusan-empty p strong {
    color: #c62828;
    font-weight: 600;
}

/* ============================================================
   RESPONSIVE DESIGN
   ============================================================ */

/* Tablet */
@media (max-width: 992px) {
    .kepengurusan-layout {
        grid-template-columns: 1fr;
        gap: 30px;
    }

    .kepengurusan-deskripsi {
        padding: 0;
    }

    .kepengurusan-grid {
        grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
        gap: 20px;
    }
}

/* Mobile */
@media (max-width: 768px) {
    .kepengurusan-section {
        padding: 50px 0 40px;
    }

    .kepengurusan-title {
        font-size: 30px;
    }

    .kepengurusan-title::after {
        width: 70px;
        height: 3px;
    }

    .kepengurusan-subtitle {
        font-size: 14px;
        padding: 0 15px;
    }

    .kepengurusan-layout {
        gap: 25px;
        padding: 10px 0 20px;
    }

    .kepengurusan-deskripsi {
        font-size: 14px;
        line-height: 2;
    }

    .kepengurusan-deskripsi p:first-child::first-letter {
        font-size: 34px;
        margin-right: 6px;
    }

    .kepengurusan-grid {
        grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
        gap: 16px;
    }

    .kepengurusan-card {
        padding: 16px 12px 14px;
        border-radius: 16px;
    }

    .kepengurusan-avatar {
        width: 70px;
        height: 70px;
    }

    .kepengurusan-avatar .avatar-placeholder {
        font-size: 32px;
    }

    .kepengurusan-nama {
        font-size: 13px;
    }

    .kepengurusan-jabatan {
        font-size: 10px;
        padding: 2px 12px;
    }

    .kepengurusan-jurusan {
        font-size: 10px;
    }

    .kepengurusan-keterangan {
        font-size: 10px;
    }

    .struktur-image-container {
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
    }

    .kepengurusan-empty {
        padding: 50px 20px;
    }

    .kepengurusan-empty .empty-icon {
        font-size: 48px;
    }

    .kepengurusan-empty h3 {
        font-size: 18px;
    }
}

/* Mobile Small */
@media (max-width: 480px) {
    .kepengurusan-title {
        font-size: 26px;
    }

    .kepengurusan-grid {
        grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
        gap: 12px;
    }

    .kepengurusan-card {
        padding: 12px 8px 10px;
        border-radius: 14px;
    }

    .kepengurusan-avatar {
        width: 60px;
        height: 60px;
        border-width: 2px;
    }

    .kepengurusan-avatar .avatar-placeholder {
        font-size: 28px;
    }

    .kepengurusan-nama {
        font-size: 12px;
    }

    .kepengurusan-jabatan {
        font-size: 9px;
        padding: 2px 10px;
    }

    .kepengurusan-card::after {
        display: none;
    }

    .kepengurusan-deskripsi p {
        padding-left: 12px;
    }

    .kepengurusan-deskripsi p:hover {
        padding-left: 16px;
    }
}

/* Animasi Scroll */
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

.kepengurusan-card {
    animation: fadeInUp 0.6s ease forwards;
    opacity: 0;
}

.kepengurusan-card:nth-child(1) { animation-delay: 0.05s; }
.kepengurusan-card:nth-child(2) { animation-delay: 0.1s; }
.kepengurusan-card:nth-child(3) { animation-delay: 0.15s; }
.kepengurusan-card:nth-child(4) { animation-delay: 0.2s; }
.kepengurusan-card:nth-child(5) { animation-delay: 0.25s; }
.kepengurusan-card:nth-child(6) { animation-delay: 0.3s; }
.kepengurusan-card:nth-child(7) { animation-delay: 0.35s; }
.kepengurusan-card:nth-child(8) { animation-delay: 0.4s; }
.kepengurusan-card:nth-child(9) { animation-delay: 0.45s; }
.kepengurusan-card:nth-child(10) { animation-delay: 0.5s; }
</style>

<section class="kepengurusan-section" id="kepengurusan">
    <div class="kepengurusan-header">
        <h2 class="kepengurusan-title">Kepengurusan Sabhagiriwana S'17</h2>
        {{-- <p class="kepengurusan-subtitle">
            Struktur organisasi yang berdedikasi untuk memajukan
            Sabhagiriwana S'17 dengan penuh semangat dan profesionalisme
        </p> --}}
    </div>

    {{-- Gambar Struktur --}}
    <div class="struktur-image-container" data-aos="fade-up">
        <img src="/assets/newtheme/gambar/strukturkepengurusan.png" alt="Struktur Kepengurusan Sabhagiriwana S'17">
    </div>

    <div class="kepengurusan-container">
        <div class="kepengurusan-wrapper">
            <div class="kepengurusan-layout">

                {{-- KOLOM KIRI: DESKRIPSI --}}
                <div class="kepengurusan-deskripsi" data-aos="fade-right">
                    <p>
                        Kepengurusan Sabhagiriwana S'17 terdiri dari Dewan Pengurus dan Pengurus
                        yang dipilih melalui Rapat Umum Anggota (RUA). Kepengurusan ini
                        melaksanakan roda organisasi Sabhagiriwana S'17 dengan penuh
                        tanggung jawab dan dedikasi.
                    </p>

                    <div class="deskripsi-divider"></div>

                    <p>
                        Struktur ini dibentuk sebagai bentuk komitmen bersama dalam
                        menjalankan organisasi secara profesional, solid, dan penuh
                        dedikasi demi kemajuan Sabhagiriwana S'17 yang lebih baik.
                    </p>

                    <div style="margin-top: 20px; display: flex; gap: 12px; flex-wrap: wrap;">
                        <span style="display: inline-flex; align-items: center; gap: 6px; font-family: 'Poppins', sans-serif; font-size: 12px; color: #7a8a9e; background: rgba(255,255,255,0.8); padding: 6px 16px; border-radius: 30px; border: 1px solid rgba(0,0,0,0.04);">
                            <i class="mdi mdi-account-multiple" style="color: #c62828;"></i>
                            Total Pengurus: <strong style="color: #1a1a2e;">{{ $data->count() }}</strong>
                        </span>
                        <span style="display: inline-flex; align-items: center; gap: 6px; font-family: 'Poppins', sans-serif; font-size: 12px; color: #7a8a9e; background: rgba(255,255,255,0.8); padding: 6px 16px; border-radius: 30px; border: 1px solid rgba(0,0,0,0.04);">
                            <i class="mdi mdi-calendar" style="color: #0d47a1;"></i>
                            Periode: <strong style="color: #1a1a2e;">2025-2026</strong>
                        </span>
                    </div>
                </div>

                {{-- KOLOM KANAN: GRID PENGURUS --}}
                <div class="kepengurusan-grid" data-aos="fade-left">
                    @forelse ($data as $item)
                        <div class="kepengurusan-card">
                            {{-- FOTO --}}
                            <div class="kepengurusan-avatar">
                                @if($item->sabha5 && file_exists(public_path($item->sabha5)))
                                    <img src="{{ asset($item->sabha5) }}" alt="{{ $item->sabha1 ?? 'Foto' }}">
                                @else
                                    <div class="avatar-placeholder">
                                        <i class="mdi mdi-account"></i>
                                    </div>
                                @endif
                            </div>

                            {{-- NAMA --}}
                            <h3 class="kepengurusan-nama">
                                {{ $item->sabha1 ?? 'Nama' }}
                            </h3>

                            {{-- JABATAN --}}
                            <span class="kepengurusan-jabatan">
                                {{ $item->sabha2 ?? 'Jabatan' }}
                            </span>

                            {{-- JURUSAN --}}
                            @if($item->sabha3)
                                <div class="kepengurusan-jurusan">
                                    <i class="mdi mdi-school"></i>
                                    {{ $item->sabha3 }}
                                </div>
                            @endif

                            {{-- KETERANGAN --}}
                            @if($item->sabha4)
                                <div class="kepengurusan-keterangan">
                                    {{ $item->sabha4 }}
                                </div>
                            @endif
                        </div>
                    @empty
                        <div class="kepengurusan-empty">
                            <div class="empty-icon">
                                <i class="mdi mdi-account-group"></i>
                            </div>
                            <h3>Belum Ada Data Pengurus</h3>
                            <p>Silakan tambahkan data kepengurusan melalui <strong>Admin Panel</strong></p>
                        </div>
                    @endforelse
                </div>

            </div>
        </div>
    </div>
</section>


@include('00_semarang.00_include.02_footer')

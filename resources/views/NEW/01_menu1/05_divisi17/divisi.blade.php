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
<section class="news-slider-section" id="divisi">
    <div class="section-header">
        <h2 class="section-title">Divisi Sabhagiriwana'17</h2>
        <p class="section-subtitle" style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #7a8a9e; margin-top: 4px; text-align: center;">
            Struktur divisi dan dokumen pendukung Sabhagiriwana'17
        </p>
    </div>

    <div class="kabar-scroll-container">
        <div class="kabar-wrapper">
            <div style="max-width: 1000px; margin: 0 auto; padding: 20px 24px 40px;">

                @forelse ($data as $index => $item)
                    <div style="
                        background: rgba(255, 255, 255, 0.92);
                        backdrop-filter: blur(4px);
                        border-radius: 16px;
                        padding: 24px 28px;
                        margin-bottom: 28px;
                        border: 1px solid rgba(0, 0, 0, 0.03);
                        box-shadow: 0 2px 16px rgba(0, 0, 0, 0.02);
                        transition: all 0.3s ease;
                    ">
                        {{-- Header Card --}}
                        <div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 12px; margin-bottom: 14px;">
                            <div>
                                <span style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #c62828; font-size: 13px; background: rgba(198,40,40,0.06); padding: 4px 14px; border-radius: 30px; display: inline-block; margin-bottom: 6px;">
                                    #{{ $loop->iteration }}
                                </span>
                                <h3 style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; margin: 0; font-size: 18px; word-break: break-word;">
                                    {{ $item->sabha1 ?? 'Divisi' }}
                                </h3>
                            </div>
                            <span style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #b0b8c4;">
                                <i class="mdi mdi-calendar"></i>
                                {{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}
                            </span>
                        </div>

                        {{-- Body: 2 Kolom --}}
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 8px;">

                            {{-- Kiri: Keterangan --}}
                            <div style="background: #f8fafc; border-radius: 12px; padding: 16px 20px; border: 1px solid #e8ecf1; display: flex; align-items: center; min-height: 80px;">
                                <div style="display: flex; gap: 12px; width: 100%;">
                                    <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(13,71,161,0.06); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                        <i class="mdi mdi-information" style="font-size: 20px; color: #0d47a1;"></i>
                                    </div>
                                    <div style="flex: 1; min-width: 0;">
                                        <p style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #b0b8c4; margin: 0; font-weight: 500; text-transform: uppercase; letter-spacing: 0.5px;">Keterangan</p>
                                        <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #1a1a2e; margin: 0; word-break: break-word; line-height: 1.6;">
                                            {{ $item->sabha3 ?? '-' }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- Kanan: File PDF --}}
                            <div style="background: #f8fafc; border-radius: 12px; padding: 16px 20px; border: 1px solid #e8ecf1; display: flex; align-items: center; min-height: 80px;">
                                <div style="display: flex; align-items: center; gap: 14px; width: 100%; flex-wrap: wrap;">
                                    <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(198,40,40,0.08); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                        <i class="mdi mdi-file-pdf" style="font-size: 22px; color: #c62828;"></i>
                                    </div>
                                    <div style="flex: 1; min-width: 0;">
                                        <p style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #b0b8c4; margin: 0; font-weight: 500; text-transform: uppercase; letter-spacing: 0.5px;">File PDF</p>
                                        @if($item->sabha2 && file_exists(public_path($item->sabha2)))
                                            <div style="display: flex; align-items: center; gap: 14px; flex-wrap: wrap; margin-top: 2px;">
                                                <a href="{{ asset($item->sabha2) }}" target="_blank" style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #c62828; text-decoration: none; font-weight: 600; display: flex; align-items: center; gap: 4px;">
                                                    <i class="mdi mdi-open-in-new"></i> Lihat PDF
                                                </a>
                                                <a href="{{ asset($item->sabha2) }}" download style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #0d47a1; text-decoration: none; font-weight: 600; display: flex; align-items: center; gap: 4px; background: rgba(13,71,161,0.06); padding: 4px 14px; border-radius: 30px;">
                                                    <i class="mdi mdi-download"></i> Download
                                                </a>
                                            </div>
                                        @else
                                            <span style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #b0b8c4;">
                                                <i class="mdi mdi-close-circle"></i> Belum ada file
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @empty
                    <div style="text-align: center; padding: 60px 20px; background: rgba(255,255,255,0.85); border-radius: 20px; border: 2px dashed #e0e4ea;">
                        <div style="font-size: 56px; color: #b0b8c4; margin-bottom: 16px;">
                            <i class="mdi mdi-account-group"></i>
                        </div>
                        <h3 style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #5a6a7a; font-size: 18px; margin: 0;">Belum Ada Data Divisi</h3>
                        <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #b0b8c4; margin-top: 8px;">Silakan cek kembali nanti.</p>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
</section>

@include('00_semarang.00_include.02_footer')

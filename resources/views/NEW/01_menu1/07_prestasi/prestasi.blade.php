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
<section class="news-slider-section" id="prestasi">
    <div class="section-header">
        <h2 class="section-title">🏆 Prestasi Sabhagiriwana'17</h2>
        <p class="section-subtitle" style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #7a8a9e; margin-top: 4px; text-align: center;">
            Jejak prestasi dan penghargaan yang telah diraih
        </p>
    </div>

    <div class="kabar-scroll-container">
        <div class="kabar-wrapper">
            <div style="max-width: 1100px; margin: 0 auto; padding: 20px 24px 40px;">

                @forelse ($data as $index => $item)
                    <div style="
                        background: rgba(255, 255, 255, 0.94);
                        backdrop-filter: blur(4px);
                        border-radius: 20px;
                        padding: 24px 28px 28px;
                        margin-bottom: 32px;
                        border: 1px solid rgba(0, 0, 0, 0.04);
                        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
                        transition: all 0.3s ease;
                    ">

                        {{-- HEADER CARD --}}
                        <div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 12px; margin-bottom: 14px;">
                            <div>
                                <span style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #c62828; font-size: 13px; background: rgba(198,40,40,0.08); padding: 4px 16px; border-radius: 30px; display: inline-block; margin-bottom: 6px;">
                                    #{{ $loop->iteration }}
                                </span>
                                <h3 style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; margin: 0; font-size: 20px; word-break: break-word;">
                                    {{ $item->sabha1 ?? 'Kegiatan' }}
                                </h3>
                                <div style="margin-top: 4px; display: flex; flex-wrap: wrap; gap: 14px;">
                                    @if($item->sabha2)
                                        <span style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #0d47a1; background: rgba(13,71,161,0.06); padding: 2px 14px; border-radius: 30px;">
                                            <i class="mdi mdi-calendar"></i> {{ $item->sabha2 }}
                                        </span>
                                    @endif
                                    <span style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #b0b8c4;">
                                        <i class="mdi mdi-clock"></i> {{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        {{-- KETERANGAN --}}
                        @if($item->sabha3)
                            <div style="background: #f8fafc; border-radius: 12px; padding: 12px 16px; margin-bottom: 18px; border-left: 4px solid #0d47a1;">
                                <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #1a1a2e; margin: 0; line-height: 1.7; word-break: break-word;">
                                    {{ $item->sabha3 }}
                                </p>
                            </div>
                        @endif

                        {{-- GALERI FOTO DENGAN FIGURA (5 FOTO) --}}
                        @php
                            $fotos = [];
                            for ($i = 4; $i <= 8; $i++) {
                                $field = 'sabha' . $i;
                                if (!empty($item->$field) && file_exists(public_path($item->$field))) {
                                    $fotos[] = $item->$field;
                                }
                            }
                        @endphp

                        @if(count($fotos) > 0)
                            <div style="margin-top: 6px;">
                                <p style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #b0b8c4; margin-bottom: 12px; font-weight: 500; text-transform: uppercase; letter-spacing: 0.5px;">
                                    <i class="mdi mdi-image"></i> Galeri Dokumentasi
                                </p>
                                <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); gap: 16px;">
                                    @foreach ($fotos as $foto)
                                        <div style="
                                            background: #ffffff;
                                            border-radius: 12px;
                                            padding: 8px 8px 12px 8px;
                                            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
                                            border: 1px solid #f0f2f5;
                                            transition: all 0.3s ease;
                                            text-align: center;
                                            cursor: pointer;
                                        " class="foto-figura">
                                            <div style="
                                                width: 100%;
                                                aspect-ratio: 1/1;
                                                overflow: hidden;
                                                border-radius: 8px;
                                                background: #f0f2f5;
                                            ">
                                                <img src="{{ asset($foto) }}" alt="Dokumentasi" style="
                                                    width: 100%;
                                                    height: 100%;
                                                    object-fit: cover;
                                                    transition: transform 0.4s ease;
                                                " loading="lazy">
                                            </div>
                                            <div style="margin-top: 6px;">
                                                <span style="font-family: 'Poppins', sans-serif; font-size: 10px; color: #b0b8c4; letter-spacing: 0.3px;">
                                                    <i class="mdi mdi-camera"></i> Dokumentasi
                                                </span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                    </div>
                @empty
                    <div style="text-align: center; padding: 60px 20px; background: rgba(255,255,255,0.85); border-radius: 20px; border: 2px dashed #e0e4ea;">
                        <div style="font-size: 56px; color: #b0b8c4; margin-bottom: 16px;">
                            <i class="mdi mdi-trophy"></i>
                        </div>
                        <h3 style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #5a6a7a; font-size: 18px; margin: 0;">Belum Ada Data Prestasi</h3>
                        <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #b0b8c4; margin-top: 8px;">Silakan cek kembali nanti.</p>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
</section>

<style>
    /* ============================================================
       FIGURA FOTO - HOVER EFFECT
    ============================================================ */
    .foto-figura {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .foto-figura:hover {
        transform: translateY(-6px) scale(1.02);
        box-shadow: 0 12px 32px rgba(0, 0, 0, 0.10);
        border-color: #c62828;
    }

    .foto-figura:hover img {
        transform: scale(1.04);
    }

    /* ============================================================
       RESPONSIVE GRID FOTO
    ============================================================ */
    @media (max-width: 768px) {
        .foto-figura {
            padding: 6px 6px 10px 6px;
        }
        .foto-figura img {
            border-radius: 6px;
        }
    }

    @media (max-width: 480px) {
        .foto-figura {
            padding: 4px 4px 8px 4px;
        }
        .foto-figura span {
            font-size: 9px;
        }
    }
</style>

@include('00_semarang.00_include.02_footer')

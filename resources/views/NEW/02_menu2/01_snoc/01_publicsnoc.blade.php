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
<section class="news-slider-section" id="nwct">
    <div class="section-header" style="position: relative; padding-bottom: 20px;">
        <div style="display: flex; align-items: center; justify-content: center; gap: 16px; flex-wrap: wrap;">
            <span style="font-size: 40px; line-height: 1;">🌲</span>
            <h3 class="section-title" style="font-size: clamp(28px, 4vw, 38px); font-weight: 800; color: #1a1a2e; margin: 0; background: linear-gradient(135deg, #c62828, #0d47a1); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                {{$judul}} Sabhagiriwana'17
            </h3>
            <span style="font-size: 40px; line-height: 1;">🌲</span>
        </div>
    </div>

    <div class="kabar-scroll-container">
        <div class="kabar-wrapper">
            <div style="max-width: 1100px; margin: 0 auto; padding: 20px 24px 40px;">

                @forelse ($data as $index => $item)
                    <div class="event-card" style="
                        background: rgba(255, 255, 255, 0.92);
                        backdrop-filter: blur(8px);
                        border-radius: 24px;
                        padding: 28px 32px 32px;
                        margin-bottom: 36px;
                        border: 1px solid rgba(0, 0, 0, 0.04);
                        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.04);
                        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                        position: relative;
                        overflow: hidden;
                    ">
                        {{-- Background decoration --}}
                        <div style="position: absolute; top: -80px; right: -80px; width: 200px; height: 200px; background: radial-gradient(circle, rgba(198,40,40,0.04) 0%, transparent 70%); border-radius: 50%; pointer-events: none;"></div>
                        <div style="position: absolute; bottom: -60px; left: -60px; width: 160px; height: 160px; background: radial-gradient(circle, rgba(13,71,161,0.04) 0%, transparent 70%); border-radius: 50%; pointer-events: none;"></div>

                        {{-- HEADER CARD --}}
                        <div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: flex-start; gap: 16px; margin-bottom: 16px; position: relative; z-index: 1;">
                            <div>
                                <div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap; margin-bottom: 6px;">
                                    <span style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #ffffff; font-size: 13px; background: linear-gradient(135deg, #c62828, #b71c1c); padding: 4px 16px; border-radius: 30px; display: inline-block; box-shadow: 0 4px 12px rgba(198,40,40,0.2);">
                                        #{{ $loop->iteration }}
                                    </span>
                                    <span style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #b0b8c4; background: #f8fafc; padding: 2px 12px; border-radius: 30px; border: 1px solid #f0f2f5;">
                                        <i class="mdi mdi-calendar"></i> {{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}
                                    </span>
                                </div>
                                <h3 style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; margin: 0; font-size: clamp(20px, 2.5vw, 24px); word-break: break-word; line-height: 1.3;">
                                    {{ $item->sabha1 ?? 'Judul Agenda' }}
                                </h3>
                            </div>
                            <div style="display: flex; align-items: center; gap: 6px; background: #f8fafc; padding: 4px 14px 4px 10px; border-radius: 30px; border: 1px solid #f0f2f5;">
                                <span style="display: inline-block; width: 8px; height: 8px; background: #2e7d32; border-radius: 50%; animation: pulse-dot 1.8s ease-in-out infinite;"></span>
                                <span style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #5a6a7a; font-weight: 500;">Aktif</span>
                            </div>
                        </div>

                        {{-- KETERANGAN --}}
                        @if($item->sabha2)
                            <div style="background: linear-gradient(135deg, #f8fafc, #f0f2f5); border-radius: 14px; padding: 14px 20px; margin-bottom: 20px; border-left: 5px solid #c62828; position: relative; z-index: 1;">
                                <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #1a1a2e; margin: 0; line-height: 1.8; word-break: break-word;">
                                    {{ $item->sabha2 }}
                                </p>
                            </div>
                        @endif

                        {{-- GALERI FOTO DENGAN FIGURA --}}
                        @php
                            $fotos = [];
                            for ($i = 3; $i <= 7; $i++) {
                                $field = 'sabha' . $i;
                                if (!empty($item->$field) && file_exists(public_path($item->$field))) {
                                    $fotos[] = $item->$field;
                                }
                            }
                        @endphp

                        @if(count($fotos) > 0)
                            <div style="margin-top: 4px; position: relative; z-index: 1;">
                                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 14px;">
                                    <span style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #b0b8c4; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">
                                        <i class="mdi mdi-image" style="margin-right: 4px;"></i> Galeri Dokumentasi
                                    </span>
                                    <span style="flex: 1; height: 1px; background: linear-gradient(90deg, #e0e4ea, transparent);"></span>
                                    <span style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #b0b8c4; font-weight: 500;">
                                        {{ count($fotos) }} foto
                                    </span>
                                </div>
                                <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(160px, 1fr)); gap: 16px;">
                                    @foreach ($fotos as $key => $foto)
                                        <div class="foto-figura" style="
                                            background: #ffffff;
                                            border-radius: 14px;
                                            padding: 8px 8px 14px 8px;
                                            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
                                            border: 1px solid #f0f2f5;
                                            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                                            text-align: center;
                                            cursor: pointer;
                                            position: relative;
                                            overflow: hidden;
                                        ">
                                            <div style="
                                                width: 100%;
                                                aspect-ratio: 1/1;
                                                overflow: hidden;
                                                border-radius: 10px;
                                                background: #f0f2f5;
                                                position: relative;
                                            ">
                                                <img src="{{ asset($foto) }}" alt="Dokumentasi {{ $key+1 }}" style="
                                                    width: 100%;
                                                    height: 100%;
                                                    object-fit: cover;
                                                    transition: transform 0.5s ease;
                                                " loading="lazy">
                                                <div style="position: absolute; bottom: 0; left: 0; right: 0; height: 40%; background: linear-gradient(0deg, rgba(0,0,0,0.3) 0%, transparent 100%); opacity: 0; transition: opacity 0.4s ease;"></div>
                                                <div style="position: absolute; bottom: 8px; right: 8px; background: rgba(0,0,0,0.5); backdrop-filter: blur(4px); color: white; font-family: 'Poppins', sans-serif; font-size: 9px; padding: 2px 10px; border-radius: 20px; opacity: 0; transition: opacity 0.4s ease;">
                                                    <i class="mdi mdi-magnify"></i>
                                                </div>
                                            </div>
                                            <div style="margin-top: 8px;">
                                                <span style="font-family: 'Poppins', sans-serif; font-size: 10px; color: #b0b8c4; letter-spacing: 0.3px;">
                                                    <i class="mdi mdi-camera" style="font-size: 11px;"></i> Dokumentasi
                                                </span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        {{-- FOOTER CARD --}}
                        <div style="margin-top: 18px; padding-top: 14px; border-top: 1px solid #f0f2f5; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 8px; position: relative; z-index: 1;">
                            <span style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #b0b8c4;">
                                <i class="mdi mdi-clock-outline"></i> Dipublikasikan: {{ $item->created_at ? $item->created_at->diffForHumans() : '-' }}
                            </span>
                            <a href="#" style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #c62828; text-decoration: none; font-weight: 600; display: flex; align-items: center; gap: 4px; transition: gap 0.3s ease;">
                                Lihat Selengkapnya <i class="mdi mdi-arrow-right" style="font-size: 14px; transition: transform 0.3s ease;"></i>
                            </a>
                        </div>
                    </div>
                @empty
                    <div style="text-align: center; padding: 80px 20px; background: rgba(255,255,255,0.85); border-radius: 24px; border: 2px dashed #e0e4ea;">
                        <div style="font-size: 64px; color: #b0b8c4; margin-bottom: 16px;">
                            <i class="mdi mdi-calendar-blank"></i>
                        </div>
                        <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #5a6a7a; font-size: 20px; margin: 0;">
                            Belum Ada Agenda {{$judul}}
                        </h3>
                        <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #b0b8c4; margin-top: 8px;">
                            Silakan cek kembali nanti untuk melihat agenda event NWCT terbaru.
                        </p>
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
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .foto-figura:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 16px 48px rgba(0, 0, 0, 0.10);
        border-color: #c62828;
    }

    .foto-figura:hover img {
        transform: scale(1.06);
    }

    .foto-figura:hover .foto-figura-overlay {
        opacity: 1 !important;
    }

    .foto-figura:hover .foto-figura-zoom {
        opacity: 1 !important;
    }

    /* ============================================================
       EVENT CARD - HOVER
    ============================================================ */
    .event-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 16px 48px rgba(0, 0, 0, 0.06);
        border-color: rgba(198, 40, 40, 0.08);
    }

    .event-card:hover .foto-figura .foto-figura-overlay {
        opacity: 1 !important;
    }

    .event-card:hover .foto-figura .foto-figura-zoom {
        opacity: 1 !important;
    }

    /* ============================================================
       ANIMASI DOT
    ============================================================ */
    @keyframes pulse-dot {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.5; transform: scale(0.8); }
    }

    /* ============================================================
       RESPONSIVE GRID FOTO
    ============================================================ */
    @media (max-width: 768px) {
        .foto-figura {
            padding: 6px 6px 12px 6px;
        }
        .foto-figura img {
            border-radius: 8px;
        }
        .event-card {
            padding: 20px 18px 24px !important;
        }
    }

    @media (max-width: 480px) {
        .foto-figura {
            padding: 4px 4px 10px 4px;
        }
        .foto-figura span {
            font-size: 9px;
        }
        .event-card {
            padding: 16px 14px 20px !important;
        }
        .event-card h3 {
            font-size: 17px !important;
        }
    }
</style>

@include('00_semarang.00_include.02_footer')

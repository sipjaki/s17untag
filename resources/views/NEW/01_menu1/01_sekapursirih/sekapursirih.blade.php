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
<section class="news-slider-section" id="beranda">
    <div class="section-header">
        <h2 class="section-title">Sekapur Sirih</h2>
        {{-- <p class="section-subtitle" style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #7a8a9e; margin-top: 4px; text-align: center;">
            Kata-kata bijak dari Sabhagiriwana'17 untuk para pencinta alam
        </p> --}}
    </div>

    <div class="kabar-scroll-container">
        <div class="kabar-wrapper">
            <div class="sekapur-section" style="max-width: 900px; margin: 0 auto; padding: 20px 24px 40px;">

                @forelse ($data as $index => $item)
                    <div class="sekapur-item" style="
                        margin-bottom: 40px;
                        padding: 28px 32px;
                        background: rgba(255, 255, 255, 0.92);
                        border-radius: 16px;
                        backdrop-filter: blur(4px);
                        border: 1px solid rgba(0, 0, 0, 0.03);
                        box-shadow: 0 2px 16px rgba(0, 0, 0, 0.02);
                        transition: all 0.3s ease;
                    ">
                        {{-- META: Nomor & Tanggal --}}
                        <div class="meta" style="
                            font-family: 'Poppins', sans-serif;
                            font-size: 12px;
                            color: #b0b8c4;
                            margin-bottom: 12px;
                            display: flex;
                            align-items: center;
                            gap: 12px;
                            flex-wrap: wrap;
                        ">

                        </div>

                        {{-- SEPARATOR --}}
                        <div class="separator" style="
                            width: 60px;
                            height: 2px;
                            background: linear-gradient(90deg, #c62828, #0d47a1);
                            margin: 0 0 16px 0;
                            border-radius: 10px;
                            opacity: 0.3;
                        "></div>

                        {{-- ISI PARAGRAF --}}
                        @if($item->sabha1)
                            <p style="font-family: 'Poppins', sans-serif; font-size: 15px; line-height: 2; color: #1a1a2e; margin: 0 0 14px 0; text-align: justify; letter-spacing: 0.2px;">{{ $item->sabha1 }}</p>
                        @endif

                        @if($item->sabha2)
                            <p style="font-family: 'Poppins', sans-serif; font-size: 15px; line-height: 2; color: #1a1a2e; margin: 0 0 14px 0; text-align: justify; letter-spacing: 0.2px;">{{ $item->sabha2 }}</p>
                        @endif

                        @if($item->sabha3)
                            <p style="font-family: 'Poppins', sans-serif; font-size: 15px; line-height: 2; color: #1a1a2e; margin: 0 0 14px 0; text-align: justify; letter-spacing: 0.2px;">{{ $item->sabha3 }}</p>
                        @endif

                        @if($item->sabha4)
                            <p style="font-family: 'Poppins', sans-serif; font-size: 15px; line-height: 2; color: #1a1a2e; margin: 0 0 14px 0; text-align: justify; letter-spacing: 0.2px;">{{ $item->sabha4 }}</p>
                        @endif

                    </div>
                @empty
                    <div class="sekapur-empty" style="
                        text-align: center;
                        padding: 60px 20px;
                        background: rgba(255, 255, 255, 0.85);
                        border-radius: 20px;
                        border: 2px dashed #e0e4ea;
                    ">
                        <div class="icon" style="font-size: 48px; color: #b0b8c4; margin-bottom: 16px;">
                            <i class="mdi mdi-file-document-outline"></i>
                        </div>
                        <h3 style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #5a6a7a; font-size: 18px; margin: 0;">
                            Belum Ada Sekapur Sirih
                        </h3>
                        <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #b0b8c4; margin-top: 8px;">
                            Silakan tambahkan konten melalui <strong>Admin Panel</strong>
                        </p>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
</section>

@include('00_semarang.00_include.02_footer')

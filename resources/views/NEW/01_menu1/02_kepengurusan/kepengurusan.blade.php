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
<section class="news-slider-section" id="beranda">
    <div class="section-header">
        <h2 class="section-title">Kepengurusan</h2>
        {{-- <p class="section-subtitle" style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #7a8a9e; margin-top: 4px; text-align: center;">
            Struktur kepengurusan Sabhagiriwana'17
        </p> --}}
    </div>

    <div class="kabar-scroll-container">
        <div class="kabar-wrapper">
            <div style="max-width: 1200px; margin: 0 auto; padding: 20px 24px 40px;">

                {{-- 2 KOLOM --}}
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px 40px; align-items: start;">

                    {{-- KOLOM KIRI: DESKRIPSI (HARDCODE) --}}
                    <div style="font-family: 'Poppins', sans-serif; font-size: 15px; line-height: 2; color: #1a1a2e; text-align: justify; padding: 8px 0;">
                        <p>
                            Kepengurusan MAPALA Sabhagiriwana S'17 merupakan wadah
                            pengabdian, pembelajaran, dan pengembangan karakter.
                            Setiap pengurus memiliki tanggung jawab dalam menjaga
                            nilai persaudaraan, kedisiplinan, serta semangat
                            petualangan yang berlandaskan cinta alam.
                        </p>
                        <div style="width: 60px; height: 3px; background: linear-gradient(90deg, #c62828, #0d47a1); border-radius: 10px; margin: 16px 0 20px; opacity: 0.4;"></div>
                        <p>
                            Struktur ini dibentuk sebagai bentuk komitmen bersama
                            dalam menjalankan roda organisasi secara profesional,
                            solid, dan penuh dedikasi demi kemajuan MAPALA.
                        </p>
                    </div>

                    {{-- KOLOM KANAN: GRID PENGURUS (DARI DATABASE) --}}
                    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(140px, 1fr)); gap: 20px;">

                        @forelse ($data as $item)
                            <div style="
                                background: rgba(255, 255, 255, 0.85);
                                backdrop-filter: blur(4px);
                                border-radius: 16px;
                                padding: 16px 12px 14px;
                                text-align: center;
                                border: 1px solid rgba(0, 0, 0, 0.03);
                                box-shadow: 0 2px 12px rgba(0, 0, 0, 0.02);
                                transition: all 0.3s ease;
                            ">
                                {{-- FOTO --}}
                                <div style="
                                    width: 80px;
                                    height: 80px;
                                    border-radius: 50%;
                                    overflow: hidden;
                                    margin: 0 auto 10px;
                                    border: 3px solid #c62828;
                                    background: #f0f2f5;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                ">
                                    @if($item->sabha5 && file_exists(public_path($item->sabha5)))
                                        <img src="{{ asset($item->sabha5) }}" alt="{{ $item->sabha1 ?? 'Foto' }}" style="width: 100%; height: 100%; object-fit: cover;">
                                    @else
                                        <div style="font-size: 32px; color: #b0b8c4;">
                                            <i class="mdi mdi-account"></i>
                                        </div>
                                    @endif
                                </div>

                                {{-- NAMA --}}
                                <h3 style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 700; color: #1a1a2e; margin: 6px 0 2px; line-height: 1.3;">
                                    {{ $item->sabha1 ?? 'Nama' }}
                                </h3>

                                {{-- JABATAN --}}
                                <span style="
                                    font-family: 'Poppins', sans-serif;
                                    font-size: 12px;
                                    font-weight: 500;
                                    color: #c62828;
                                    background: rgba(198, 40, 40, 0.06);
                                    padding: 2px 10px;
                                    border-radius: 30px;
                                    display: inline-block;
                                    margin-bottom: 4px;
                                ">
                                    {{ $item->sabha2 ?? 'Jabatan' }}
                                </span>

                                {{-- JURUSAN --}}
                                @if($item->sabha3)
                                    <div style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #5a6a7a; margin: 2px 0;">
                                        <i class="mdi mdi-school" style="font-size: 11px;"></i>
                                        {{ $item->sabha3 }}
                                    </div>
                                @endif

                                {{-- KETERANGAN --}}
                                @if($item->sabha4)
                                    <div style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #7a8a9e; font-style: italic; margin-top: 4px; line-height: 1.4;">
                                        {{ $item->sabha4 }}
                                    </div>
                                @endif
                            </div>
                        @empty
                            <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px; background: rgba(255,255,255,0.85); border-radius: 20px; border: 2px dashed #e0e4ea;">
                                <div style="font-size: 48px; color: #b0b8c4; margin-bottom: 16px;"><i class="mdi mdi-account-group"></i></div>
                                <h3 style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #5a6a7a; font-size: 18px; margin: 0;">Belum Ada Data Pengurus</h3>
                                <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #b0b8c4; margin-top: 8px;">Silakan tambahkan data kepengurusan melalui <strong>Admin Panel</strong></p>
                            </div>
                        @endforelse

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

@include('00_semarang.00_include.02_footer')

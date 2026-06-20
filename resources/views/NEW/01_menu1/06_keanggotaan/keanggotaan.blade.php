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
    KONTEN STATISTIK KEANGGOTAAN
    ============================================================ --}}
<section class="news-slider-section" id="keanggotaan">
    <div class="section-header">
        <h2 class="section-title">Statistik Keanggotaan</h2>
        <p class="section-subtitle" style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #7a8a9e; margin-top: 4px; text-align: center;">
            Data anggota berdasarkan status dan angkatan pendidikan
        </p>
    </div>

    <div class="kabar-scroll-container">
        <div class="kabar-wrapper">
            <div style="max-width: 1200px; margin: 0 auto; padding: 20px 24px 40px;">

                {{-- =============================================
                    1. STATISTIK CARD (Ringkasan)
                ============================================= --}}
                @php
                    $total = $data->count();
                    $statusCount = $data->groupBy('sabha1')->map->count();
                    $angkatanCount = $data->groupBy('sabha6')->map->count();
                    $statusList = ['Muda', 'Biasa', 'Luar Biasa', 'Kehormatan'];
                    $angkatanList = $angkatanCount->keys()->sort()->values()->all();
                @endphp

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 16px; margin-bottom: 32px;">
                    {{-- Total --}}
                    <div style="background: rgba(255,255,255,0.92); border-radius: 16px; padding: 18px 16px; text-align: center; box-shadow: 0 2px 12px rgba(0,0,0,0.04); border: 1px solid #f0f2f5;">
                        <span style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #7a8a9e; display: block;">Total Anggota</span>
                        <h3 style="font-family: 'Poppins', sans-serif; font-size: 32px; font-weight: 700; color: #c62828; margin: 6px 0 0;">{{ $total }}</h3>
                    </div>
                    @foreach ($statusList as $status)
                        @php $count = $statusCount[$status] ?? 0; @endphp
                        <div style="background: rgba(255,255,255,0.92); border-radius: 16px; padding: 18px 16px; text-align: center; box-shadow: 0 2px 12px rgba(0,0,0,0.04); border: 1px solid #f0f2f5;">
                            <span style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #7a8a9e; display: block;">{{ $status }}</span>
                            <h3 style="font-family: 'Poppins', sans-serif; font-size: 28px; font-weight: 700; color: #1a1a2e; margin: 6px 0 0;">{{ $count }}</h3>
                        </div>
                    @endforeach
                </div>

                {{-- =============================================
                    2. TABEL 1 – DISTRIBUSI BERDASARKAN STATUS
                ============================================= --}}
                <div style="background: rgba(255,255,255,0.92); border-radius: 16px; padding: 20px 24px; margin-bottom: 32px; box-shadow: 0 2px 12px rgba(0,0,0,0.04); border: 1px solid #f0f2f5;">
                    <h4 style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #1a1a2e; margin: 0 0 12px; font-size: 18px;">
                        <i class="mdi mdi-account-group" style="color: #c62828; margin-right: 8px;"></i>
                        Anggota Berdasarkan Status
                    </h4>
                    <div style="overflow-x: auto;">
                        <table style="width: 100%; border-collapse: collapse; font-family: 'Poppins', sans-serif; font-size: 14px;">
                            <thead>
                                <tr style="background: #f8fafc; border-bottom: 2px solid #c62828;">
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">Status</th>
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($statusList as $status)
                                    @php
                                        $count = $statusCount[$status] ?? 0;
                                    @endphp
                                    <tr style="border-bottom: 1px solid #f0f2f5;">
                                        <td style="padding: 10px 12px; font-weight: 500; color: #1a1a2e;">{{ $status }}</td>
                                        <td style="padding: 10px 12px; font-weight: 600; color: #c62828;">{{ $count }}</td>
                                    </tr>
                                @empty
                                    <tr><td colspan="2" style="padding: 20px; text-align: center; color: #b0b8c4;">Belum ada data status</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- =============================================
                    3. TABEL 2 – DISTRIBUSI BERDASARKAN ANGKATAN
                ============================================= --}}
                <div style="background: rgba(255,255,255,0.92); border-radius: 16px; padding: 20px 24px; margin-bottom: 16px; box-shadow: 0 2px 12px rgba(0,0,0,0.04); border: 1px solid #f0f2f5;">
                    <h4 style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #1a1a2e; margin: 0 0 12px; font-size: 18px;">
                        <i class="mdi mdi-school" style="color: #0d47a1; margin-right: 8px;"></i>
                        Anggota Berdasarkan Angkatan Pendidikan
                    </h4>
                    <div style="overflow-x: auto;">
                        <table style="width: 100%; border-collapse: collapse; font-family: 'Poppins', sans-serif; font-size: 14px;">
                            <thead>
                                <tr style="background: #f8fafc; border-bottom: 2px solid #0d47a1;">
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">Angkatan</th>
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($angkatanList as $angkatan)
                                    @php
                                        $count = $angkatanCount[$angkatan] ?? 0;
                                    @endphp
                                    <tr style="border-bottom: 1px solid #f0f2f5;">
                                        <td style="padding: 10px 12px; font-weight: 500; color: #1a1a2e;">{{ $angkatan ?? 'Tidak Terisi' }}</td>
                                        <td style="padding: 10px 12px; font-weight: 600; color: #0d47a1;">{{ $count }}</td>
                                    </tr>
                                @empty
                                    <tr><td colspan="2" style="padding: 20px; text-align: center; color: #b0b8c4;">Belum ada data angkatan</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@include('00_semarang.00_include.02_footer')

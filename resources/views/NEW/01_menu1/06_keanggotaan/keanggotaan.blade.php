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
        <h2 class="section-title">Profil Keanggotaan Sabhagiriwana'17</h2>
        <p class="section-subtitle" style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #7a8a9e; margin-top: 4px; text-align: center;">
            Data anggota berdasarkan status dan angkatan pendidikan
        </p>
    </div>

    <div class="kabar-scroll-container">
        <div class="kabar-wrapper">
            <div style="max-width: 1200px; margin: 0 auto; padding: 20px 24px 40px;">

                {{-- =============================================
                    STATISTIK CARD (PUBLIC - TAMPIL SELALU)
                ============================================= --}}
                @php
                    $total = $data->count();
                    $statusCount = $data->groupBy('sabha1')->map->count();
                    $angkatanCount = $data->groupBy('sabha6')->map->count();
                    $statusList = ['Biasa (Muda)', 'Biasa (Penuh)', 'Luar Biasa', 'Pendukung', 'Kehormatan'];
                    $angkatanList = $angkatanCount->keys()->sort()->values()->all();
                @endphp

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(100px, 1fr)); gap: 16px; margin-bottom: 32px;">
                    <div style="background: rgba(255,255,255,0.92); border-radius: 16px; padding: 18px 16px; text-align: center; box-shadow: 0 2px 12px rgba(0,0,0,0.04); border: 1px solid #f0f2f5;">
                        <span style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #7a8a9e; display: block;">Total Anggota</span>
                        <h3 style="font-family: 'Poppins', sans-serif; font-size: 32px; font-weight: 700; color: #c62828; margin: 6px 0 0;">{{ $total }}</h3>
                    </div>
                    @foreach ($statusList as $status)
                        @php $count = $statusCount[$status] ?? 0; @endphp
                        <div style="background: rgba(255,255,255,0.92); border-radius: 16px; padding: 18px 16px; text-align: center; box-shadow: 0 2px 12px rgba(0,0,0,0.04); border: 1px solid #f0f2f5;">
                            <span style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #7a8a9e; display: block;">Anggota <br>{{ $status }}</span>
                            <h3 style="font-family: 'Poppins', sans-serif; font-size: 28px; font-weight: 700; color: #1a1a2e; margin: 6px 0 0;">{{ $count }}</h3>
                        </div>
                    @endforeach
                </div>

                {{-- =============================================
                    TABEL ANGKATAN (PUBLIC - TAMPIL SELALU)
                ============================================= --}}
                <div style="background: rgba(255,255,255,0.92); border-radius: 16px; padding: 20px 24px; margin-bottom: 32px; box-shadow: 0 2px 12px rgba(0,0,0,0.04); border: 1px solid #f0f2f5;">
                    <h4 style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #1a1a2e; margin: 0 0 12px; font-size: 18px;">
                        <i class="mdi mdi-school" style="color: #0d47a1; margin-right: 8px;"></i>
                        Nama Angkatan Sabhagiriwana'17
                    </h4>
                    <div style="overflow-x: auto;">
                        <table style="width: 100%; border-collapse: collapse; font-family: 'Poppins', sans-serif; font-size: 14px;">
                            <thead>
                                <tr style="background: #f8fafc; border-bottom: 2px solid #0d47a1;">
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">No</th>
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">Angkatan</th>
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($angkatanList as $index => $angkatan)
                                    @php $count = $angkatanCount[$angkatan] ?? 0; @endphp
                                    <tr style="border-bottom: 1px solid #f0f2f5;">
                                        <td style="padding: 10px 12px; font-weight: 500; color: #1a1a2e;">{{ $loop->iteration }}</td>
                                        <td style="padding: 10px 12px; font-weight: 500; color: #1a1a2e;">{{ $angkatan ?? 'Tidak Terisi' }}</td>
                                        <td style="padding: 10px 12px; font-weight: 600; color: #0d47a1;">{{ $count }}</td>
                                    </tr>
                                @empty
                                    <tr><td colspan="3" style="padding: 20px; text-align: center; color: #b0b8c4;">Belum ada data angkatan</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- =============================================
                    FORM LOGIN (UNTUK AKSES DATA LENGKAP)
                ============================================= --}}
                <div id="loginForm" style="max-width: 500px; margin: 0 auto 30px; background: rgba(255,255,255,0.95); border-radius: 20px; padding: 30px 35px; box-shadow: 0 4px 24px rgba(0,0,0,0.06); border: 1px solid #f0f2f5;">
                    <div style="text-align: center; margin-bottom: 20px;">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #c62828, #b71c1c); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: 800; font-family: 'Poppins', sans-serif; margin-bottom: 10px;">S17</div>
                        <h3 style="font-family: 'Poppins', sans-serif; font-size: 18px; color: #1a1a2e; margin: 0;">Akses Data Lengkap Anggota</h3>
                        <p style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #7a8a9e; margin: 4px 0 0;">Masukkan NPA dan password untuk melihat data lengkap</p>
                    </div>

                    <div id="loginError" style="display:none; background: rgba(198,40,40,0.08); color: #c62828; padding: 10px 16px; border-radius: 10px; font-size: 13px; margin-bottom: 15px; border: 1px solid rgba(198,40,40,0.1);">
                        <i class="mdi mdi-alert-circle"></i> <span id="errorMessage">Format NPA salah!</span>
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label style="font-family:'Poppins',sans-serif;font-size:13px;font-weight:600;color:#1a1a2e;display:block;margin-bottom:4px;">NPA <span style="color:#c62828;">*</span></label>
                        <input type="text" id="npaInput" placeholder="Masukan NPA" style="width:100%;padding:12px 16px;border:2px solid #e8ecf1;border-radius:12px;font-family:'Poppins',sans-serif;font-size:14px;outline:none;transition:all 0.3s;">
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label style="font-family:'Poppins',sans-serif;font-size:13px;font-weight:600;color:#1a1a2e;display:block;margin-bottom:4px;">Password <span style="color:#c62828;">*</span></label>
                        <input type="password" id="passwordInput" placeholder="Masukkan password" style="width:100%;padding:12px 16px;border:2px solid #e8ecf1;border-radius:12px;font-family:'Poppins',sans-serif;font-size:14px;outline:none;transition:all 0.3s;">
                    </div>

                    <button onclick="loginKeanggotaan()" style="width:100%;padding:14px;background:linear-gradient(135deg,#c62828,#b71c1c);color:white;border:none;border-radius:12px;font-family:'Poppins',sans-serif;font-size:16px;font-weight:600;cursor:pointer;transition:all 0.3s;">
                        <i class="mdi mdi-login"></i> Lihat Data Lengkap
                    </button>
                </div>

                {{-- =============================================
                    DATA LENGKAP ANGGOTA (SEMBUNYI - BUTUH LOGIN)
                ============================================= --}}
                <div id="dataContainer" style="display:none;">

                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; flex-wrap: wrap; gap: 10px;">
                        <h4 style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #1a1a2e; margin: 0; font-size: 18px;">
                            <i class="mdi mdi-account-group" style="color: #c62828; margin-right: 8px;"></i>
                            Data Lengkap Anggota
                        </h4>
                        <button onclick="logoutKeanggotaan()" style="font-family:'Poppins',sans-serif;font-size:13px;color:#c62828;background:rgba(198,40,40,0.06);border:1px solid rgba(198,40,40,0.1);padding:6px 18px;border-radius:30px;cursor:pointer;">
                            <i class="mdi mdi-logout"></i> Logout
                        </button>
                    </div>

                    <div style="background: rgba(255,255,255,0.92); border-radius: 16px; padding: 20px 24px; box-shadow: 0 2px 12px rgba(0,0,0,0.04); border: 1px solid #f0f2f5; overflow-x: auto;">
                        <table style="width: 100%; border-collapse: collapse; font-family: 'Poppins', sans-serif; font-size: 13px;">
                            <thead>
                                <tr style="background: #f8fafc; border-bottom: 2px solid #c62828;">
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">No</th>
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">Nama Lengkap</th>
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">Status</th>
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">Jenis Kelamin</th>
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">Tempat Lahir</th>
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">Tanggal Lahir</th>
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">Angkatan</th>
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">Jurusan</th>
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">NPA</th>
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">Alamat</th>
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">Kota</th>
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">Provinsi</th>
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">No HP</th>
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">Email</th>
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">Pekerjaan</th>
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">Instansi</th>
                                    <th style="padding: 10px 12px; text-align: left; font-weight: 600; color: #1a1a2e;">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $index => $item)
                                    <tr style="border-bottom: 1px solid #f0f2f5;">
                                        <td style="padding: 10px 12px; font-weight: 500; color: #1a1a2e;">{{ $loop->iteration }}</td>
                                        <td style="padding: 10px 12px; font-weight: 500; color: #1a1a2e;">{{ $item->sabha1 ?? '-' }}</td>
                                        <td style="padding: 10px 12px; color: #1a1a2e;">{{ $item->sabha2 ?? '-' }}</td>
                                        <td style="padding: 10px 12px; color: #1a1a2e;">{{ $item->sabha3 ?? '-' }}</td>
                                        <td style="padding: 10px 12px; color: #1a1a2e;">{{ $item->sabha4 ?? '-' }}</td>
                                        <td style="padding: 10px 12px; color: #1a1a2e;">{{ $item->sabha5 ?? '-' }}</td>
                                        <td style="padding: 10px 12px; color: #1a1a2e;">{{ $item->sabha6 ?? '-' }}</td>
                                        <td style="padding: 10px 12px; color: #1a1a2e;">{{ $item->sabha7 ?? '-' }}</td>
                                        <td style="padding: 10px 12px; color: #1a1a2e;">{{ $item->sabha8 ?? '-' }}</td>
                                        <td style="padding: 10px 12px; color: #1a1a2e;">{{ $item->sabha9 ?? '-' }}</td>
                                        <td style="padding: 10px 12px; color: #1a1a2e;">{{ $item->sabha10 ?? '-' }}</td>
                                        <td style="padding: 10px 12px; color: #1a1a2e;">{{ $item->sabhaberkas1 ?? '-' }}</td>
                                        <td style="padding: 10px 12px; color: #1a1a2e;">{{ $item->sabhaberkas2 ?? '-' }}</td>
                                        <td style="padding: 10px 12px; color: #1a1a2e;">{{ $item->sabhaberkas3 ?? '-' }}</td>
                                        <td style="padding: 10px 12px; color: #1a1a2e;">{{ $item->sabhaberkas4 ?? '-' }}</td>
                                        <td style="padding: 10px 12px; color: #1a1a2e;">{{ $item->sabhaberkas5 ?? '-' }}</td>
                                        <td style="padding: 10px 12px; color: #1a1a2e;">{{ $item->sabha ?? '-' }}</td>
                                    </tr>
                                @empty
                                    <tr><td colspan="17" style="padding: 30px; text-align: center; color: #b0b8c4;">Belum ada data anggota</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
function loginKeanggotaan() {
    var npa = document.getElementById('npaInput').value.trim();
    var password = document.getElementById('passwordInput').value.trim();
    var errorDiv = document.getElementById('loginError');
    var errorMsg = document.getElementById('errorMessage');

    // Reset error
    errorDiv.style.display = 'none';
    document.getElementById('npaInput').style.borderColor = '#e8ecf1';
    document.getElementById('passwordInput').style.borderColor = '#e8ecf1';

    // Validasi NPA: S17 + 5 digit + 2 huruf
    var npaPattern = /^S17\d{5}[A-Z]{2}$/i;
    if (!npaPattern.test(npa)) {
        errorMsg.textContent = 'Format NPA salah!';
        errorDiv.style.display = 'block';
        document.getElementById('npaInput').style.borderColor = '#c62828';
        return;
    }

    // Validasi Password
    if (password !== 'hallogank17') {
        errorMsg.textContent = 'Password salah!';
        errorDiv.style.display = 'block';
        document.getElementById('passwordInput').style.borderColor = '#c62828';
        return;
    }

    // Jika berhasil, tampilkan data
    document.getElementById('loginForm').style.display = 'none';
    document.getElementById('dataContainer').style.display = 'block';

    // Scroll ke data
    document.getElementById('dataContainer').scrollIntoView({ behavior: 'smooth', block: 'start' });
}

function logoutKeanggotaan() {
    document.getElementById('loginForm').style.display = 'block';
    document.getElementById('dataContainer').style.display = 'none';
    document.getElementById('npaInput').value = '';
    document.getElementById('passwordInput').value = '';
    document.getElementById('npaInput').style.borderColor = '#e8ecf1';
    document.getElementById('passwordInput').style.borderColor = '#e8ecf1';
    document.getElementById('loginError').style.display = 'none';

    // Scroll ke form
    document.getElementById('loginForm').scrollIntoView({ behavior: 'smooth', block: 'center' });
}

// Enter key support
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('passwordInput').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            loginKeanggotaan();
        }
    });
    document.getElementById('npaInput').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            document.getElementById('passwordInput').focus();
        }
    });
});
</script>
@include('00_semarang.00_include.02_footer')

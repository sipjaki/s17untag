@include('00_semarang.00_include.01_header')
@include('00_semarang.00_include.05_headermenu')

<style>
    /* ============================================
       FONT POPPINS (sama seperti sejarah)
       ============================================ */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400;1,600;1,800&display=swap');

    /* ============================================
       WRAPPER UTAMA - ATRIBUT (Seragam dengan Sejarah)
       ============================================ */
    .atribut-container {
        font-family: 'Poppins', sans-serif;
        max-width: 1200px;
        margin: 40px auto;
        padding: 45px 55px;
        background: #ffffff;
        border-radius: 12px;
        border: 1px solid #e0d6cc;
        box-shadow: 0 8px 30px rgba(26, 35, 126, 0.06);
        transition: all 0.3s ease;
    }

    /* ============================================
       HEADER / JUDUL (Seragam dengan Sejarah)
       ============================================ */
    .atribut-header {
        text-align: center;
        margin-bottom: 40px;
        padding-bottom: 20px;
        border-bottom: 2px solid #e8e0d8;
    }

    .atribut-title {
        font-family: 'Poppins', sans-serif;
        font-size: 2.4rem;
        font-weight: 700;
        color: #B71C1C;
        letter-spacing: 0.5px;
        margin: 0;
    }

    .atribut-title span {
        color: #1A237E;
        font-weight: 700;
    }

    .atribut-subtitle {
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        color: #1A237E;
        font-size: 0.8rem;
        letter-spacing: 4px;
        text-transform: uppercase;
        margin-top: 4px;
        opacity: 0.6;
    }

    /* ============================================
       GRID 2 KOLOM (Seragam dengan Sejarah)
       ============================================ */
    .atribut-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: start;
    }

    /* ============================================
       KARTU ATRIBUT
       ============================================ */
    .atribut-card {
        background: #ffffff;
        border-radius: 12px;
        border: 1px solid #f0ebe6;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .atribut-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 28px rgba(26, 35, 126, 0.08);
    }

    /* ===== GAMBAR (dapat diklik) ===== */
    .atribut-card .card-image {
        width: 100%;
        background: #faf8f6;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        min-height: 220px;
        border-bottom: 1px solid #f0ebe6;
        cursor: pointer;
    }

    .atribut-card .card-image img {
        max-width: 100%;
        max-height: 200px;
        width: auto;
        height: auto;
        object-fit: contain;
        display: block;
        border-radius: 6px;
        transition: opacity 0.2s ease;
    }

    .atribut-card .card-image img:hover {
        opacity: 0.85;
    }

    /* ===== BODY KARTU ===== */
    .atribut-card .card-body {
        padding: 24px 26px 28px;
        flex: 1;
    }

    .atribut-card .card-body h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 1.2rem;
        font-weight: 600;
        color: #1A237E;
        margin-bottom: 14px;
        letter-spacing: 0.3px;
        border-left: 4px solid #B71C1C;
        padding-left: 14px;
    }

    .atribut-card .card-body p {
        font-family: 'Poppins', sans-serif;
        font-size: 0.95rem;
        font-weight: 400;
        line-height: 1.9;
        color: #3E2723;
        text-align: justify;
        margin-bottom: 1.2rem;
        text-indent: 0;
    }

    .atribut-card .card-body p:last-of-type {
        margin-bottom: 0;
    }

    .atribut-card .card-body p strong {
        color: #B71C1C;
        font-weight: 600;
    }

    /* --- Tambahan untuk poin-poin rapi --- */
    .atribut-card .card-body .point-list {
        list-style: none;
        padding: 0;
        margin: 0 0 1rem 0;
    }
    .atribut-card .card-body .point-list li {
        position: relative;
        padding-left: 24px;
        margin-bottom: 8px;
        font-size: 0.95rem;
        line-height: 1.7;
        color: #3E2723;
    }
    .atribut-card .card-body .point-list li::before {
        content: "▸";
        position: absolute;
        left: 0;
        color: #B71C1C;
        font-weight: 700;
    }
    .atribut-card .card-body .point-list li strong {
        color: #1A237E;
    }

    /* ============================================
       MODAL LIGHTBOX
       ============================================ */
    .modal-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.85);
        z-index: 9999;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        padding: 30px;
        box-sizing: border-box;
    }

    .modal-overlay.active {
        display: flex;
    }

    .modal-content {
        max-width: 90%;
        max-height: 90%;
        background: transparent;
        border-radius: 8px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        cursor: default;
        position: relative;
    }

    .modal-content img {
        max-width: 100%;
        max-height: 85vh;
        width: auto;
        height: auto;
        object-fit: contain;
        border-radius: 8px;
        display: block;
        background: #fff;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
    }

    .modal-close {
        position: absolute;
        top: -40px;
        right: -10px;
        background: none;
        border: none;
        color: #fff;
        font-size: 2.4rem;
        font-weight: 300;
        cursor: pointer;
        transition: transform 0.2s ease;
        line-height: 1;
        padding: 4px 12px;
        border-radius: 50%;
        background: rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(4px);
    }
    .modal-close:hover {
        transform: scale(1.2);
        background: rgba(183, 28, 28, 0.8);
    }

    /* ============================================
       RESPONSIVE
       ============================================ */
    @media (max-width: 992px) {
        .atribut-container {
            padding: 30px 30px;
            margin: 20px 15px;
        }
        .atribut-title {
            font-size: 2rem;
        }
        .atribut-grid {
            gap: 25px;
        }
        .atribut-card .card-body p {
            font-size: 0.95rem;
        }
    }

    @media (max-width: 768px) {
        .atribut-container {
            padding: 20px 18px;
            border-radius: 10px;
        }
        .atribut-title {
            font-size: 1.6rem;
        }
        .atribut-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        .atribut-card .card-body p {
            font-size: 0.92rem;
            line-height: 1.8;
        }
        .atribut-subtitle {
            letter-spacing: 2px;
            font-size: 0.7rem;
        }
        .atribut-card .card-image {
            min-height: 160px;
            padding: 16px;
        }
        .atribut-card .card-image img {
            max-height: 150px;
        }
        .atribut-card .card-body {
            padding: 18px 18px 22px;
        }
        .atribut-card .card-body h3 {
            font-size: 1.1rem;
        }
        .modal-close {
            top: -34px;
            right: 0;
            font-size: 2rem;
            padding: 2px 10px;
        }
        .modal-overlay {
            padding: 16px;
        }
    }
</style>

<section class="atribut-container">
    <div class="sejarah-header">
        <h3 class="sejarah-title">🧭 Atribut <span>S'17</span></h3>
    </div>

    <div class="atribut-grid">

        <!-- ========== ATRIBUT 1 ========== -->
        <div class="atribut-card">
            <div class="card-image" onclick="openModal(this.querySelector('img').src)">
                <img src="/assets/newtheme/gambar/atribut/atribut1.png" alt="Atribut 1 - Logo Universitas dan Sabhagiriwana" loading="lazy" />
            </div>
            <div class="card-body">
                <h3>Identitas Lembaga</h3>
                <p><strong>Atribut ini</strong> merupakan identitas resmi yang memadukan nama <strong>Universitas 17 Agustus 1945 Semarang</strong> dengan sebutan <strong>SABHAGIRIWANATTI</strong>. Simbol ini menjadi jembatan antara institusi akademik dan organisasi pencinta alam.</p>
                <ul class="point-list">
                    <li><strong>Nama universitas</strong> – mencerminkan kewibawaan dan landasan pendidikan.</li>
                    <li><strong>Sabhagiriwana</strong> – berarti “cahaya gunung”, melambangkan semangat petualangan dan kecintaan terhadap alam.</li>
                    <li>Digunakan pada kop surat, spanduk resmi, dan tanda pengenal organisasi.</li>
                </ul>
            </div>
        </div>

        <!-- ========== ATRIBUT 2 ========== -->
        <div class="atribut-card">
            <div class="card-image" onclick="openModal(this.querySelector('img').src)">
                <img src="/assets/newtheme/gambar/atribut/atribut2.png" alt="Atribut 2 - Susunan vertikal logo" loading="lazy" />
            </div>
            <div class="card-body">
                <h3>Logo Vertikal</h3>
                <p>Varian ini menyusun elemen secara <strong>vertikal</strong>: <strong>UNIVERSITAS</strong> – <strong>17 AGUSTUS 1945 SEMARANG</strong> – <strong>SABHAGIRIWANATTI</strong>. Format modern dan dinamis ini cocok untuk aplikasi ukuran kompak.</p>
                <ul class="point-list">
                    <li><strong>Komposisi tinggi</strong> – mudah dikenali meski dalam ukuran kecil (badge, pin, emblok).</li>
                    <li><strong>Keterbacaan terjaga</strong> – proporsi huruf tetap konsisten.</li>
                    <li>Menjaga citra organisasi di berbagai media.</li>
                </ul>
            </div>
        </div>

        <!-- ========== ATRIBUT 3 ========== -->
        <div class="atribut-card">
            <div class="card-image" onclick="openModal(this.querySelector('img').src)">
                <img src="/assets/newtheme/gambar/atribut/atribut3.png" alt="Atribut 3 - Seragam Pakaian Dinas Harian" loading="lazy" />
            </div>
            <div class="card-body">
                <h3>Seragam Harian</h3>
                <p><strong>Pakaian Dinas Harian (PDH)</strong> adalah seragam utama untuk kegiatan rutin, perkantoran, dan pertemuan internal. Desainnya rapi dengan ciri khas warna organisasi.</p>
                <ul class="point-list">
                    <li>Dilengkapi <strong>syal</strong> dan <strong>badge</strong> sebagai aksesori identitas.</li>
                    <li>Terdapat <strong>lambang S'17</strong> di dada kiri dan <strong>badge nama</strong> di dada kanan.</li>
                    <li>Mencerminkan disiplin dan profesionalisme.</li>
                </ul>
            </div>
        </div>

        <!-- ========== ATRIBUT 4 ========== -->
        <div class="atribut-card">
            <div class="card-image" onclick="openModal(this.querySelector('img').src)">
                <img src="/assets/newtheme/gambar/atribut/atribut4.png" alt="Atribut 4 - Seragam Lapangan" loading="lazy" />
            </div>
            <div class="card-body">
                <h3>Seragam Lapangan</h3>
                <p><strong>Pakaian Dinas Lapangan (PDL)</strong> dirancang untuk aktivitas di alam terbuka: pendakian, penjelajahan, dan aksi kemanusiaan. Bahan tahan cuaca, banyak kantong, dan tulisan identitas di dada.</p>
                <ul class="point-list">
                    <li>Identitas: <strong>Unit Kesehatan Masyarakat Pencinta Alam – SABHAGIRIWANA'17 – UNTAG SEMARANG</strong>.</li>
                    <li>Berfungsi sebagai <strong>tameng identitas</strong> di medan sesungguhnya.</li>
                    <li>Warna gelap/camo untuk menyatu dengan lingkungan.</li>
                </ul>
            </div>
        </div>

        <!-- ========== ATRIBUT 5 ========== -->
        <div class="atribut-card">
            <div class="card-image" onclick="openModal(this.querySelector('img').src)">
                <img src="/assets/newtheme/gambar/atribut/atribut5.png" alt="Atribut 5 - Ukuran Syal" loading="lazy" />
            </div>
            <div class="card-body">
                <h3>Syal – Spesifikasi Ukuran</h3>
                <p>Syal anggota dibedakan menjadi tiga tingkatan berdasarkan status keanggotaan. Semua menggunakan kain berkualitas tinggi.</p>
                <ul class="point-list">
                    <li><strong>Anggota Muda</strong> – 100×70 cm, dengan label diklat.</li>
                    <li><strong>Anggota Penuh</strong> – 100×70 cm, dilengkapi lambang S'17 (diameter 7,5 cm).</li>
                    <li><strong>Anggota Luar Biasa &amp; Kehormatan</strong> – ukuran sama, desain lambang khusus.</li>
                    <li>Perbedaan ini menandakan <strong>jenjang dan penghargaan</strong>.</li>
                </ul>
            </div>
        </div>

        <!-- ========== ATRIBUT 6 ========== -->
        <div class="atribut-card">
            <div class="card-image" onclick="openModal(this.querySelector('img').src)">
                <img src="/assets/newtheme/gambar/atribut/atribut6.png" alt="Atribut 6 - Badge dan Emblem" loading="lazy" />
            </div>
            <div class="card-body">
                <h3>Badge &amp; Emblem</h3>
                <p>Badge dipasang di kantong dada kiri sebagai tanda pengenal. Tersedia beberapa jenis sesuai fungsi.</p>
                <ul class="point-list">
                    <li><strong>Badge Anggota Kehormatan</strong> – untuk tokoh berjasa.</li>
                    <li><strong>Badge Dewan Pengurus</strong> – untuk pengurus inti.</li>
                    <li><strong>Badge Nama</strong> – mencantumkan nama lengkap dan NPA (misal: ANITYO YULIANTORO NPA. S'17 085 09 HW).</li>
                    <li>Juga terdapat <strong>Emblem Bendera</strong> dan <strong>Lambang S'17</strong> sebagai ikon utama.</li>
                </ul>
            </div>
        </div>

    </div>
</section>

<!-- ============================================
     MODAL LIGHTBOX (struktur HTML)
     ============================================ -->
<div class="modal-overlay" id="imageModal" onclick="closeModal(event)">
    <div class="modal-content" onclick="event.stopPropagation()">
        <button class="modal-close" onclick="closeModal()">&times;</button>
        <img id="modalImage" src="" alt="Perbesar gambar" />
    </div>
</div>

<!-- ============================================
     JAVASCRIPT UNTUK MODAL
     ============================================ -->
<script>
    function openModal(imageSrc) {
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImage');
        modalImg.src = imageSrc;
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeModal(event) {
        if (event && event.target !== event.currentTarget) return;
        const modal = document.getElementById('imageModal');
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const modal = document.getElementById('imageModal');
            if (modal.classList.contains('active')) {
                closeModal();
            }
        }
    });
</script>

@include('00_semarang.00_include.02_footer')

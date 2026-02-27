@include('00_semarang.00_include.01_header')
<body>
    <!-- Mountain Background Layer -->
    <div class="mountain-bg"></div>
    <div class="mountain-overlay"></div>

@include('00_semarang.00_include.03_menunavigator')

@include('00_semarang.00_include.04_katakataindah')

<section class="news-slider-section" id="beranda">
    <div class="section-header">
        <h2 class="section-title">Kepengurusan</h2>
    </div>

    <div class="kabar-scroll-container">
        <div class="kabar-wrapper">

<div class="kabar-paragraf">

    <!-- KIRI : PDF PERATURAN -->
    <div class="kabar-kiri">
        <h2>Peraturan Organisasi</h2>
        <p>
            Berikut merupakan dokumen resmi Peraturan Dasar dan
            Peraturan Rumah Tangga MAPALA Sabhagiriwana S'17
            yang menjadi landasan dalam menjalankan seluruh
            aktivitas organisasi.
        </p>

        <iframe
            src="/assets/pdf/peraturan-mapala.pdf"
            width="100%"
            height="500px"
            style="border:1px solid #ccc; border-radius:8px;">
        </iframe>

        <!-- Alternatif tombol download -->
        <div style="margin-top:15px;">
            <a href="/assets/pdf/peraturan-mapala.pdf"
               target="_blank"
               class="btn-download">
               Download Peraturan (PDF)
            </a>
        </div>
    </div>


    <!-- KANAN : PARAGRAF PENJELASAN -->
    <div class="kabar-kanan">
        <h2>Tentang Peraturan Organisasi</h2>

        <p>
            Peraturan organisasi disusun sebagai pedoman utama dalam
            menjaga stabilitas, arah gerak, dan nilai-nilai luhur
            MAPALA Sabhagiriwana S'17. Setiap anggota dan pengurus
            wajib memahami serta melaksanakan ketentuan yang telah
            ditetapkan demi terciptanya organisasi yang tertib dan profesional.
        </p>

        <p>
            Dokumen ini memuat aturan mengenai struktur kepengurusan,
            hak dan kewajiban anggota, mekanisme musyawarah,
            sistem kaderisasi, hingga tata kelola kegiatan
            kepecintaalaman. Seluruh isi peraturan disusun
            berdasarkan prinsip demokrasi, tanggung jawab,
            serta semangat persaudaraan.
        </p>

        <p>
            Dengan adanya peraturan yang jelas dan terstruktur,
            diharapkan seluruh aktivitas organisasi dapat berjalan
            secara terarah, transparan, dan akuntabel.
            Peraturan ini juga menjadi bentuk komitmen bersama
            dalam menjaga nama baik organisasi serta menjunjung
            tinggi nilai cinta alam dan pengabdian kepada masyarakat.
        </p>
    </div>

</div>


</div>
    </div>
</section>


@include('00_semarang.00_include.02_footer')

@include('00_semarang.00_include.01_header')
    <!-- ============================================================
    NAVBAR
    ============================================================ -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="/" class="logo">
                <img src="/assets/newtheme/gambar/sabha.png" alt="Logo" class="logo-img" />
                <span class="logo-text">Sabhagiriwana'17</span>
            </a>

            <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <ul class="nav-menu" id="navMenu">
                <li class="nav-item"><a href="/" class="nav-link">Home</a></li>

                <li class="nav-item has-dropdown">
                    <a href="#" class="nav-link">
                        Sabhagiriwana17 <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown">
                        <li><a href="/sekapursirih"><i class="fas fa-comment-dots"></i> Sekapur Sirih</a></li>
                        <li><a href="/kepengurusan"><i class="fas fa-sitemap"></i> Kepengurusan</a></li>
                        <li><a href="/peraturan"><i class="fas fa-gavel"></i> Peraturan</a></li>
                        <li><a href="/atribut"><i class="fas fa-id-badge"></i> Atribut</a></li>
                        <li><a href="#divisi-s17"><i class="fas fa-layer-group"></i> Divisi S'17</a></li>
                        <li><a href="#keanggotaan"><i class="fas fa-user-friends"></i> Keanggotaan</a></li>
                        <li><a href="#kesekretariatan"><i class="fas fa-briefcase"></i> Kesekretariatan</a></li>
                        <li><a href="#prestasi"><i class="fas fa-trophy"></i> Prestasi</a></li>
                        <li><a href="#posko"><i class="fas fa-map-marker-alt"></i> Posko</a></li>
                    </ul>
                </li>

                <li class="nav-item has-dropdown">
                    <a href="#" class="nav-link">
                        Event <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown">
                        <li><a href="#snoc"><i class="fas fa-mountain"></i> SNOC</a></li>
                        <li><a href="#nwct"><i class="fas fa-tree"></i> NWCT</a></li>
                        <li><a href="#llbs"><i class="fas fa-hiking"></i> LLBS</a></li>
                        <li><a href="#diklat"><i class="fas fa-chalkboard-teacher"></i> DIKLAT</a></li>
                        <li><a href="#famgath"><i class="fas fa-users"></i> FAMGATH</a></li>
                        <li><a href="#mubes"><i class="fas fa-landmark"></i> MUBES</a></li>
                        <li><a href="#rua"><i class="fas fa-comments"></i> RUA</a></li>
                        <li><a href="#ultah"><i class="fas fa-birthday-cake"></i> ULTAH</a></li>
                        <li><a href="#sabha-peduli"><i class="fas fa-hands-helping"></i> SABHA PEDULI</a></li>
                    </ul>
                </li>

                <li class="nav-item has-dropdown">
                    <a href="#" class="nav-link">
                        Berita <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown">
                        <li><a href="#berita-terbaru"><i class="fas fa-newspaper"></i> Berita</a></li>
                        <li><a href="#artikel"><i class="fas fa-file-alt"></i> Artikel</a></li>
                        <li><a href="#pengumuman"><i class="fas fa-bullhorn"></i> Pengumuman</a></li>
                        <li><a href="#liputan"><i class="fas fa-camera"></i> Liputan Khusus</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a href="/login" class="nav-link btn-login-nav">Login</a></li>
            </ul>
        </div>
    </nav>

    <!-- ============================================================
    RUNNING BANNER
    ============================================================ -->
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

    <!-- ============================================================
    NEWS SLIDER
    ============================================================ -->
<!-- ============================================================
    NEWS SLIDER - DINAMIS DARI DATABASE (ID PERTAMA)
    ============================================================ -->
<section class="news-slider-section" id="beranda">
    <div class="slider-container">
        <div class="slider-wrapper" id="newsSlider">
            @php
                // Ambil data pertama (id = 1)
                $slideData = $data1->first();

                // Siapkan array gambar dari field sabha1 - sabha5
                $images = [
                    $slideData->sabha1 ?? null,
                    $slideData->sabha2 ?? null,
                    $slideData->sabha3 ?? null,
                    $slideData->sabha4 ?? null,
                    $slideData->sabha5 ?? null,
                ];

                // Filter yang tidak kosong
                $images = array_filter($images, function($img) {
                    return !empty($img);
                });

                // Jika TIDAK ADA gambar dari database, pakai DEFAULT GAMBAR PEGUNUNGAN
                if (empty($images)) {
                    $images = [
                        '/assets/newtheme/images/pegunungan1.jpg',
                        '/assets/newtheme/images/pegunungan2.jpg',
                        '/assets/newtheme/images/pegunungan3.jpg',
                    ];
                }

                // Ambil maksimal 3 gambar pertama
                $images = array_slice($images, 0, 3);

                // Data statis untuk konten (tag, judul, deskripsi)
                $contents = [
                    [
                        'tag' => 'Kebersamaan',
                        'title' => 'Camping dan Malam Keakraban',
                        'desc' => 'Kegiatan berkemah bersama untuk membangun kekompakan, berbagi pengalaman, dan menikmati suasana alam dengan penuh kebersamaan.'
                    ],
                    [
                        'tag' => 'Kegiatan',
                        'title' => 'Pendakian Bersama Sabhagiriwana 17',
                        'desc' => 'Kegiatan pendakian rutin sebagai ajang kebersamaan, latihan fisik, dan mempererat solidaritas antar anggota Sabhagiriwana 17.'
                    ],
                    [
                        'tag' => 'Pelatihan',
                        'title' => 'Latihan Dasar Kepecintaalaman',
                        'desc' => 'Pelatihan rutin meliputi teknik survival, navigasi darat, manajemen perjalanan, serta pembekalan mental di alam terbuka.'
                    ]
                ];

                // Gabungkan gambar dan konten
                $slides = [];
                foreach ($images as $index => $img) {
                    $slides[] = [
                        'image' => $img,
                        'tag' => $contents[$index]['tag'] ?? 'Event',
                        'title' => $contents[$index]['title'] ?? 'Judul Slide',
                        'desc' => $contents[$index]['desc'] ?? 'Deskripsi slide.',
                    ];
                }
            @endphp

            @foreach ($slides as $key => $slide)
                <div class="slide {{ $key === 0 ? 'active' : '' }}">
                    <div class="slide-image">
                        <img src="{{ asset($slide['image']) }}" alt="{{ $slide['title'] }}">
                    </div>
                    <div class="slide-content">
                        <span class="slide-tag">{{ $slide['tag'] }}</span>
                        <h2 class="slide-title">{{ $slide['title'] }}</h2>
                        <p class="slide-desc">{{ $slide['desc'] }}</p>
                        <a href="#" class="slide-btn">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="slider-controls">
            <button class="slider-btn prev" id="prevSlide"><i class="fas fa-chevron-left"></i></button>
            <div class="slider-dots">
                @foreach ($slides as $key => $slide)
                    <span class="dot {{ $key === 0 ? 'active' : '' }}" data-slide="{{ $key }}"></span>
                @endforeach
            </div>
            <button class="slider-btn next" id="nextSlide"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</section>


<!-- ============================================================
    SEKAPUR SIRIH (DATABASE)
    ============================================================ -->
<section class="kabar-section" id="berita-terbaru">
    <div class="section-header">
        <h2 class="section-title">Sekapur Sirih</h2>
    </div>
    <div class="kabar-scroll-container">
        <div class="kabar-wrapper">
            <div class="kabar-paragraf">
                @php
                    // Ambil data pertama (jika ada)
                    $sekapur = $data2->first();
                @endphp

                @if($sekapur)
                    <!-- Kiri: Paragraf 1 & 2 -->
                    <div class="kabar-kiri">
                        @if($sekapur->sabha1)
                            <p>{{ $sekapur->sabha1 }}</p>
                        @endif
                        @if($sekapur->sabha2)
                            <p>{{ $sekapur->sabha2 }}</p>
                        @endif
                    </div>

                    <!-- Kanan: Paragraf 3 & 4 -->
                    <div class="kabar-kanan">
                        @if($sekapur->sabha3)
                            <p>{{ $sekapur->sabha3 }}</p>
                        @endif
                        @if($sekapur->sabha4)
                            <p>{{ $sekapur->sabha4 }}</p>
                        @endif
                    </div>
                @else
                    <!-- Jika belum ada data -->
                    <div class="kabar-kiri">
                        <p>Belum ada konten Sekapur Sirih. Silakan tambahkan melalui admin panel.</p>
                    </div>
                    <div class="kabar-kanan">
                        <p>Kami akan segera mengisi halaman ini dengan pesan dari Sabhagiriwana'17.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

    <!-- ============================================================
    BEAUTIFUL WORDS
    ============================================================ -->
    <section class="beautiful-words-section" id="tentang">
        <div class="section-container">
            <div class="bw-left">
                <div class="bw-image-container">
                    <img src="/assets/newtheme/images/beautiful-words-mountain.jpg" alt="Mountain View" class="bw-image">
                    <div class="bw-image-overlay">
                        <div class="bw-quote">
                            <i class="fas fa-quote-left quote-icon"></i>
                            <p class="quote-text">Gunung tidak pernah berkata bohong. Mereka selalu menunjukkan siapa dirimu sebenarnya.</p>
                            <span class="quote-author">- Cupank S'17</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bw-right">
                <div class="bw-video-container">
                    <div class="video-wrapper">
                        <iframe
                            src="https://www.youtube.com/embed/8iH6qqQsebk?rel=0"
                            title="Mountain Adventure Video"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class="video-caption">
                        <h3>Petualangan Sejati</h3>
                        <p>Rasakan sensasi mendaki dan menjelajahi keindahan alam yang menakjubkan bersama komunitas pecinta alam terbesar di Indonesia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
    KABAR TERBARU
    ============================================================ -->
    <section class="kabar-section" id="berita-terbaru">
        <div class="section-header">
            <h2 class="section-title">Kabar Terbaru</h2>
        </div>
        <div class="kabar-scroll-container">
            <button class="scroll-btn scroll-left" id="kabarScrollLeft"><i class="fas fa-chevron-left"></i></button>
            <div class="kabar-wrapper" id="kabarWrapper">
                <div class="kabar-grid">
                    <article class="kabar-card">
                        <div class="kabar-image">
                            <img src="/assets/newtheme/images/pegunungan1.jpg" alt="Rock Climbing">
                            <span class="kabar-category">Petualangan</span>
                        </div>
                        <div class="kabar-content">
                            <div class="kabar-meta">
                                <span><i class="fas fa-calendar"></i> 15 Feb 2024</span>
                                <span><i class="fas fa-user"></i> Admin</span>
                            </div>
                            <h3 class="kabar-title">Teknik Panjat Tebing untuk Pemula</h3>
                            <p class="kabar-excerpt">Pelajari teknik dasar panjat tebing yang aman dan efektif untuk memulai petualangan vertikal Anda.</p>
                            <a href="#" class="kabar-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                    <article class="kabar-card">
                        <div class="kabar-image">
                            <img src="/assets/newtheme/images/pegunungan2.jpg" alt="Rescue Training">
                            <span class="kabar-category">Pelatihan</span>
                        </div>
                        <div class="kabar-content">
                            <div class="kabar-meta">
                                <span><i class="fas fa-calendar"></i> 12 Feb 2024</span>
                                <span><i class="fas fa-user"></i> Admin</span>
                            </div>
                            <h3 class="kabar-title">Pelatihan SAR Gunung 2024</h3>
                            <p class="kabar-excerpt">Tim Search and Rescue kami mengadakan pelatihan intensif untuk meningkatkan kesiapsiagaan.</p>
                            <a href="#" class="kabar-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                    <article class="kabar-card">
                        <div class="kabar-image">
                            <img src="/assets/newtheme/images/pegunungan3.jpg" alt="Youth Education">
                            <span class="kabar-category">Edukasi</span>
                        </div>
                        <div class="kabar-content">
                            <div class="kabar-meta">
                                <span><i class="fas fa-calendar"></i> 10 Feb 2024</span>
                                <span><i class="fas fa-user"></i> Admin</span>
                            </div>
                            <h3 class="kabar-title">Program Edukasi Alam untuk Generasi Muda</h3>
                            <p class="kabar-excerpt">Menginspirasi generasi muda untuk mencintai dan menjaga kelestarian alam melalui program edukasi.</p>
                            <a href="#" class="kabar-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                    <article class="kabar-card">
                        <div class="kabar-image">
                            <img src="/assets/newtheme/images/pegunungan4.jpg" alt="Trail Running">
                            <span class="kabar-category">Kompetisi</span>
                        </div>
                        <div class="kabar-content">
                            <div class="kabar-meta">
                                <span><i class="fas fa-calendar"></i> 8 Feb 2024</span>
                                <span><i class="fas fa-user"></i> Admin</span>
                            </div>
                            <h3 class="kabar-title">Mountain Trail Running Championship</h3>
                            <p class="kabar-excerpt">Kompetisi lari trail gunung terbesar dengan peserta dari seluruh Indonesia siap digelar.</p>
                            <a href="#" class="kabar-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                    <article class="kabar-card">
                        <div class="kabar-image">
                            <img src="/assets/newtheme/images/pegunungan5.jpg" alt="Wildlife">
                            <span class="kabar-category">Konservasi</span>
                        </div>
                        <div class="kabar-content">
                            <div class="kabar-meta">
                                <span><i class="fas fa-calendar"></i> 5 Feb 2024</span>
                                <span><i class="fas fa-user"></i> Admin</span>
                            </div>
                            <h3 class="kabar-title">Pelestarian Satwa Liar di Habitat Gunung</h3>
                            <p class="kabar-excerpt">Program konservasi untuk melindungi keanekaragaman hayati di ekosistem pegunungan.</p>
                            <a href="#" class="kabar-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                    <article class="kabar-card">
                        <div class="kabar-image">
                            <img src="/assets/newtheme/images/pegunungan6.jpg" alt="Mountain Festival">
                            <span class="kabar-category">Festival</span>
                        </div>
                        <div class="kabar-content">
                            <div class="kabar-meta">
                                <span><i class="fas fa-calendar"></i> 1 Feb 2024</span>
                                <span><i class="fas fa-user"></i> Admin</span>
                            </div>
                            <h3 class="kabar-title">Mountain Festival 2024 Siap Digelar</h3>
                            <p class="kabar-excerpt">Festival tahunan pecinta alam dengan berbagai aktivitas menarik dan komunitas dari seluruh negeri.</p>
                            <a href="#" class="kabar-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
            </div>
            <button class="scroll-btn scroll-right" id="kabarScrollRight"><i class="fas fa-chevron-right"></i></button>
        </div>
    </section>

    <!-- ============================================================
    EVENT CARD SCROLL
    ============================================================ -->
    <section class="card-scroll-section">
        <div class="section-header">
            <h2 class="section-title">Event</h2>
            <p class="section-subtitle">Temukan berbagai aktivitas menarik bersama kami</p>
        </div>
        <div class="card-scroll-wrapper">
            <button class="card-scroll-btn card-scroll-left" id="cardScrollLeft"><i class="fas fa-chevron-left"></i></button>
            <div class="card-scroll-container" id="cardScrollContainer">
                <div class="card-item">
                    <div class="card-image">
                        <img src="/assets/newtheme/images/event1.jpg" alt="Ice Climbing">
                        <div class="card-overlay">
                            <span class="card-tag">SNOC</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>SNOC</h3>
                        <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu ....</p>
                        <a href="#" class="card-btn">Jelajahi</a>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card-image">
                        <img src="/assets/newtheme/images/event2.jpg" alt="Mountain Biking">
                        <div class="card-overlay">
                            <span class="card-tag">NWCT</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>NWCT</h3>
                        <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu ....</p>
                        <a href="#" class="card-btn">Jelajahi</a>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card-image">
                        <img src="/assets/newtheme/images/event3.jpg" alt="Paragliding">
                        <div class="card-overlay">
                            <span class="card-tag">LLBS</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>LLBS</h3>
                        <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu ....</p>
                        <a href="#" class="card-btn">Jelajahi</a>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card-image">
                        <img src="/assets/newtheme/images/card-4.jpg" alt="Lake Exploration">
                        <div class="card-overlay">
                            <span class="card-tag">DIKLAT</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>DIKLAT</h3>
                        <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu ....</p>
                        <a href="#" class="card-btn">Jelajahi</a>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card-image">
                        <img src="/assets/newtheme/images/card-5.jpg" alt="Alpine Trekking">
                        <div class="card-overlay">
                            <span class="card-tag">FAMGATH</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>FAMGATH</h3>
                        <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu ....</p>
                        <a href="#" class="card-btn">Jelajahi</a>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card-image">
                        <img src="/assets/newtheme/images/card-6.jpg" alt="Sunset Summit">
                        <div class="card-overlay">
                            <span class="card-tag">MUBES</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>MUBES</h3>
                        <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu ....</p>
                        <a href="#" class="card-btn">Jelajahi</a>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card-image">
                        <img src="/assets/newtheme/images/event4.jpg" alt="Sunset Summit">
                        <div class="card-overlay">
                            <span class="card-tag">RUA</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>RUA</h3>
                        <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu ....</p>
                        <a href="#" class="card-btn">Jelajahi</a>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card-image">
                        <img src="/assets/newtheme/images/event5.jpg" alt="Sunset Summit">
                        <div class="card-overlay">
                            <span class="card-tag">ULTAH</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>ULTAH</h3>
                        <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu ....</p>
                        <a href="#" class="card-btn">Jelajahi</a>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card-image">
                        <img src="/assets/newtheme/images/event6.jpg" alt="Sunset Summit">
                        <div class="card-overlay">
                            <span class="card-tag">SABHA PEDULI</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>SABHA PEDULI</h3>
                        <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu ....</p>
                        <a href="#" class="card-btn">Jelajahi</a>
                    </div>
                </div>
            </div>
            <button class="card-scroll-btn card-scroll-right" id="cardScrollRight"><i class="fas fa-chevron-right"></i></button>
        </div>
    </section>

    <!-- ============================================================
    DOKUMENTASI GALERI
    ============================================================ -->
    <section class="gallery-section" id="dokumentasi">
        <div class="section-header">
            <h2 class="section-title">Dokumentasi Kegiatan</h2>
            <p class="section-subtitle">Momen-momen berharga dari petualangan kami</p>
        </div>
        <div class="gallery-container">
            <div class="gallery-item large">
                <img src="/assets/newtheme/images/pegunungan1.jpg" alt="Team Photo">
                <div class="gallery-overlay">
                    <div class="gallery-info">
                        <h4>Ekspedisi Tim Sabhagiriwana</h4>
                        <p>Base Camp Expedition 2024</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="/assets/newtheme/images/pegunungan2.jpg" alt="Rock Climbing">
                <div class="gallery-overlay">
                    <div class="gallery-info">
                        <h4>Technical Climbing</h4>
                        <p>Advanced Rock Course</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item wide">
                <img src="/assets/newtheme/images/pegunungan3.jpg" alt="Sunrise Panorama">
                <div class="gallery-overlay">
                    <div class="gallery-info">
                        <h4>Golden Hour</h4>
                        <p>Mountain Sunrise View</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item tall">
                <img src="/assets/newtheme/images/pegunungan4.jpg" alt="Rappelling">
                <div class="gallery-overlay">
                    <div class="gallery-info">
                        <h4>Descent Training</h4>
                        <p>Rappelling Workshop</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="/assets/newtheme/images/pegunungan5.jpg" alt="Wildflowers">
                <div class="gallery-overlay">
                    <div class="gallery-info">
                        <h4>Alpine Meadow</h4>
                        <p>Spring Season</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item wide">
                <img src="/assets/newtheme/images/event4.jpg" alt="Night Camping">
                <div class="gallery-overlay">
                    <div class="gallery-info">
                        <h4>Under The Stars</h4>
                        <p>Night Photography</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="/assets/newtheme/images/event5.jpg" alt="River Crossing">
                <div class="gallery-overlay">
                    <div class="gallery-info">
                        <h4>River Trekking</h4>
                        <p>Water Adventure</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item tall">
                <img src="/assets/newtheme/images/event4.jpg" alt="Summit Victory">
                <div class="gallery-overlay">
                    <div class="gallery-info">
                        <h4>Summit Success</h4>
                        <p>Peak Achievement</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('00_semarang.00_include.02_footer')

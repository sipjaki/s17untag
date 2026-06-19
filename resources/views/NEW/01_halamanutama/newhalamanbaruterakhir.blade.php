@include('00_semarang.00_include.01_header')
<body>
    <!-- Mountain Background Layer -->
    <div class="mountain-bg"></div>
    <div class="mountain-overlay"></div>

@include('00_semarang.00_include.03_menunavigator')

@include('00_semarang.00_include.04_katakataindah')
    <!-- Main News Slider Section -->
    <section class="news-slider-section" id="beranda">
        <div class="slider-container">
            <div class="slider-wrapper" id="newsSlider">
                <div class="slide active">
                    <div class="slide-image">
                        <img src="/assets/newtheme/images/gallery-3.jpg" alt="Ekspedisi Gunung">
                    </div>
                    <div class="slide-content">
                        <span class="slide-tag">Kebersamaan</span>
                        <h2 class="slide-title">Camping dan Malam Keakraban</h2>
                        <p class="slide-desc">
                        Kegiatan berkemah bersama untuk membangun kekompakan, berbagi pengalaman, dan menikmati suasana alam dengan penuh kebersamaan.</p>
                        <a href="#" class="slide-btn">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-image">
                        <img src="/assets/newtheme/images/gallery-5.jpg" alt="Summit Celebration">
                    </div>
                    <div class="slide-content">
                        <span class="slide-tag">Kegiatan</span>
                        <h2 class="slide-title">Pendakian Bersama Sabhagiriwana 17</h2>
                        <p class="slide-desc">
                            Kegiatan pendakian rutin sebagai ajang kebersamaan, latihan fisik, dan mempererat solidaritas antar anggota Sabhagiriwana 17.
                        </p>
                        <a href="#" class="slide-btn">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-image">
                        <img src="/assets/newtheme/images/gallery-6.jpg" alt="Camping Event">
                    </div>
                    <div class="slide-content">
                        <span class="slide-tag">Pelatihan</span>
                        <h2 class="slide-title">Latihan Dasar Kepecintaalaman</h2>
                        <p class="slide-desc">
                        Pelatihan rutin meliputi teknik survival, navigasi darat, manajemen perjalanan, serta pembekalan mental di alam terbuka.
                        </p>
                        <a href="#" class="slide-btn">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="slider-controls">
                <button class="slider-btn prev" id="prevSlide"><i class="fas fa-chevron-left"></i></button>
                <div class="slider-dots">
                    <span class="dot active" data-slide="0"></span>
                    <span class="dot" data-slide="1"></span>
                    <span class="dot" data-slide="2"></span>
                </div>
                <button class="slider-btn next" id="nextSlide"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </section>


<section class="kabar-section" id="berita-terbaru">
    <div class="section-header">
        <h2 class="section-title">Sekapur Sirih</h2>
    </div>

    <div class="kabar-scroll-container">
        <div class="kabar-wrapper">

            <div class="kabar-paragraf">

                <div class="kabar-kiri">
                    <p>
                        Di antara desir angin yang berbisik pada dedaunan,
                        dan langkah kaki yang menapaki tanah kehidupan,
                        kami memulai perjalanan ini bukan sekadar menuju
                        puncak, tetapi menuju pemahaman tentang arti kebersamaan,
                        keteguhan, dan rasa syukur yang tumbuh dalam diam.

                        Alam telah menjadi guru yang tak pernah lelah mengajarkan
                        kesabaran, kerendahan hati, dan keberanian untuk terus
                        melangkah. Dalam setiap perjalanan, kami belajar bahwa
                        jarak bukanlah yang menaklukkan manusia, melainkan
                        bagaimana hati tetap kuat saat lelah dan tetap hangat
                        saat sunyi.
                    </p>
                </div>

                <div class="kabar-kanan">
                    <p>
                        Sabhagiriwana S'17 hadir sebagai ruang pulang bagi jiwa-jiwa
                        yang mencintai semesta, tempat langkah disatukan oleh tujuan,
                        dan perbedaan dilebur oleh rasa persaudaraan. Di sinilah cerita
                        terukir — tentang tawa, perjuangan, dan makna yang tumbuh
                        di sepanjang perjalanan.
                        Semoga setiap jejak yang tertinggal menjadi pengingat bahwa
                        manusia dan alam tidak pernah benar-benar terpisah. Kami
                        melangkah bukan untuk menaklukkan, melainkan untuk memahami,
                        menjaga, dan merawat — karena pada akhirnya, alam bukan hanya
                        tempat kita berjalan, tetapi tempat kita belajar menjadi manusia.
                    </p>
                </div>

            </div>

        </div>
    </div>
</section>


    <!-- Beautiful Words Section -->
    <section class="beautiful-words-section" id="tentang">
        <div class="section-container">
            <div class="bw-left">
                <div class="bw-image-container">
                    <img src="/assets/newtheme/images/beautiful-words-mountain.jpg" alt="Mountain View" class="bw-image">
                    <div class="bw-image-overlay">
                        <div class="bw-quote">
                            <i class="fas fa-quote-left quote-icon"></i>
                            <p class="quote-text">Gunung tidak pernah berkata bohong. Mereka selalu menunjukkan siapa dirimu sebenarnya.</p>
                            <span class="quote-author">- Cupank S'17 </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bw-right">
                <div class="bw-video-container">
                    <div class="video-wrapper">
                        <iframe
                            src="/assets/newtheme/https://www.youtube.com/embed/8iH6qqQsebk?rel=0"
                            title="Mountain Adventure Video"
                            frameborder="0"
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


    <!-- Kabar Terbaru Section -->
    <section class="kabar-section" id="berita-terbaru">
        <div class="section-header">
            <h2 class="section-title">Kabar Terbaru</h2>
            {{-- <p class="section-subtitle">Update terkini dari aktivitas dan kegiatan kami</p> --}}
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

    <!-- Card Scroll Section -->
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
                        <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu .... </p>
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
                        <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu .... </p>
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
                        <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu .... </p>
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
                          <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu .... </p>
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
                        <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu .... </p>
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
                         <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu .... </p>
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
                        <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu .... </p>
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
                          <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu .... </p>
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
                        <p>Running di gunung merupakan salah satu bentuk olahraga trail yang menantang sekaligus menyatu .... </p>
                        <a href="#" class="card-btn">Jelajahi</a>
                    </div>
                </div>
            </div>
            <button class="card-scroll-btn card-scroll-right" id="cardScrollRight"><i class="fas fa-chevron-right"></i></button>
        </div>
    </section>

    <!-- Documentation Gallery Section -->
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

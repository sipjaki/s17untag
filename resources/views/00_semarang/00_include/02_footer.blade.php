
    <!-- ============================================================
    FOOTER
    ============================================================ -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-grid">

                <!-- About -->
                <div class="footer-about">
                    <div class="footer-logo">
                        <img src="/assets/newtheme/gambar/sabha.png" alt="Logo Mapala Sabhagiriwana 17" />
                        <span>Sabhagiriwana 17</span>
                    </div>
                    <p class="footer-desc">
                        Mapala Sabhagiriwana 17 merupakan Unit Kegiatan Mahasiswa pecinta alam
                        Universitas 17 Agustus 1945 (UNTAG) Semarang yang bergerak dalam bidang
                        kepencintaalaman, konservasi, dan pengembangan potensi diri melalui kegiatan
                        petualangan dan pendidikan lingkungan.
                    </p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <!-- Menu -->
                <div class="footer-links">
                    <h4 class="footer-title">Menu</h4>
                    <ul>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Beranda</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Profil</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Kegiatan</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Galeri</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Kontak</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div class="footer-contact">
                    <h4 class="footer-title">Hubungi Kami</h4>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>
                            Universitas 17 Agustus 1945 Semarang (UNTAG)<br />
                            Jl. Pawiyatan Luhur, Bendan Dhuwur, Semarang, Jawa Tengah 50233
                        </span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>mapalasabhagiriwana17@untagsmg.ac.id</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <span>Senin - Jumat: 09.00 - 17.00 WIB</span>
                    </div>
                </div>

                <!-- Maps -->
                <div class="footer-maps">
                    <h4 class="footer-title">Lokasi Kami</h4>
                    <iframe
                        src="https://www.google.com/maps?q=Universitas+17+Agustus+1945+Semarang&output=embed"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>

            </div>

            <div class="footer-bottom">
                <p>
                    &copy; 2026 Mapala Sabhagiriwana 17 - Universitas 17 Agustus 1945 Semarang (UNTAG SEMARANG).
                </p>
            </div>
        </div>
    </footer>

    <!-- ============================================================
    SCRIPT
    ============================================================ -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // ===================== NAVBAR =====================
            var mobileBtn = document.getElementById('mobileMenuBtn');
            var navMenu = document.getElementById('navMenu');
            var dropdowns = document.querySelectorAll('.has-dropdown');

            if (mobileBtn && navMenu) {
                mobileBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    this.classList.toggle('active');
                    navMenu.classList.toggle('active');
                    if (!navMenu.classList.contains('active')) {
                        dropdowns.forEach(function(item) {
                            item.classList.remove('dropdown-open');
                        });
                    }
                });
            }

            dropdowns.forEach(function(item) {
                var link = item.querySelector('.nav-link');
                link.addEventListener('click', function(e) {
                    if (window.innerWidth <= 992) {
                        e.preventDefault();
                        dropdowns.forEach(function(other) {
                            if (other !== item) other.classList.remove('dropdown-open');
                        });
                        item.classList.toggle('dropdown-open');
                    }
                });
            });

            document.addEventListener('click', function(e) {
                if (!e.target.closest('.navbar')) {
                    if (mobileBtn) mobileBtn.classList.remove('active');
                    if (navMenu) navMenu.classList.remove('active');
                    dropdowns.forEach(function(item) {
                        item.classList.remove('dropdown-open');
                    });
                }
            });

            window.addEventListener('resize', function() {
                if (window.innerWidth > 992) {
                    if (mobileBtn) mobileBtn.classList.remove('active');
                    if (navMenu) navMenu.classList.remove('active');
                    dropdowns.forEach(function(item) {
                        item.classList.remove('dropdown-open');
                    });
                }
            });

            // ===================== NEWS SLIDER =====================
            var sliderWrapper = document.getElementById('newsSlider');
            var slides = sliderWrapper.querySelectorAll('.slide');
            var dots = document.querySelectorAll('.dot');
            var prevBtn = document.getElementById('prevSlide');
            var nextBtn = document.getElementById('nextSlide');
            var currentIndex = 0;
            var totalSlides = slides.length;
            var slideInterval;

            function goToSlide(index) {
                if (index < 0) index = totalSlides - 1;
                if (index >= totalSlides) index = 0;
                currentIndex = index;
                sliderWrapper.style.transform = 'translateX(-' + (currentIndex * 100) + '%)';
                dots.forEach(function(dot, i) {
                    dot.classList.toggle('active', i === currentIndex);
                });
            }

            function nextSlide() {
                goToSlide(currentIndex + 1);
            }

            function prevSlide() {
                goToSlide(currentIndex - 1);
            }

            function startSlider() {
                slideInterval = setInterval(nextSlide, 5000);
            }

            function resetSlider() {
                clearInterval(slideInterval);
                startSlider();
            }

            if (prevBtn && nextBtn) {
                prevBtn.addEventListener('click', function() {
                    prevSlide();
                    resetSlider();
                });
                nextBtn.addEventListener('click', function() {
                    nextSlide();
                    resetSlider();
                });
            }

            dots.forEach(function(dot) {
                dot.addEventListener('click', function() {
                    var index = parseInt(this.getAttribute('data-slide'));
                    goToSlide(index);
                    resetSlider();
                });
            });

            var startX = 0;
            var isDragging = false;
            sliderWrapper.addEventListener('touchstart', function(e) {
                startX = e.touches[0].clientX;
                isDragging = true;
                clearInterval(slideInterval);
            }, { passive: true });

            sliderWrapper.addEventListener('touchend', function(e) {
                if (!isDragging) return;
                var endX = e.changedTouches[0].clientX;
                var diff = startX - endX;
                if (Math.abs(diff) > 50) {
                    if (diff > 0) nextSlide();
                    else prevSlide();
                }
                isDragging = false;
                startSlider();
            }, { passive: true });

            goToSlide(0);
            startSlider();

            // ===================== SCROLL KABAR =====================
            var kabarWrapper = document.getElementById('kabarWrapper');
            var kabarLeft = document.getElementById('kabarScrollLeft');
            var kabarRight = document.getElementById('kabarScrollRight');

            if (kabarLeft && kabarRight && kabarWrapper) {
                kabarLeft.addEventListener('click', function() {
                    kabarWrapper.scrollBy({ left: -340, behavior: 'smooth' });
                });
                kabarRight.addEventListener('click', function() {
                    kabarWrapper.scrollBy({ left: 340, behavior: 'smooth' });
                });
            }

            // ===================== SCROLL CARD =====================
            var cardContainer = document.getElementById('cardScrollContainer');
            var cardLeft = document.getElementById('cardScrollLeft');
            var cardRight = document.getElementById('cardScrollRight');

            if (cardLeft && cardRight && cardContainer) {
                cardLeft.addEventListener('click', function() {
                    cardContainer.scrollBy({ left: -300, behavior: 'smooth' });
                });
                cardRight.addEventListener('click', function() {
                    cardContainer.scrollBy({ left: 300, behavior: 'smooth' });
                });
            }

        });
    </script>

</body>
</html>

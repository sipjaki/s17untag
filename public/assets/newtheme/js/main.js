/* ============================================
   SABHAGIRIWANA - MAIN JAVASCRIPT
   ============================================ */

document.addEventListener('DOMContentLoaded', function() {
    // ============================================
    // NAVBAR SCROLL EFFECT
    // ============================================
    const navbar = document.getElementById('navbar');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // ============================================
    // MOBILE MENU
    // ============================================
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const navMenu = document.getElementById('navMenu');
    const navItems = document.querySelectorAll('.nav-item.has-dropdown');

    mobileMenuBtn.addEventListener('click', function() {
        this.classList.toggle('active');
        navMenu.classList.toggle('active');
        document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
    });

    // Mobile dropdown toggle
    navItems.forEach(item => {
        const link = item.querySelector('.nav-link');
        link.addEventListener('click', function(e) {
            if (window.innerWidth <= 992) {
                e.preventDefault();
                item.classList.toggle('dropdown-active');
            }
        });
    });

    // Close mobile menu on resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 992) {
            mobileMenuBtn.classList.remove('active');
            navMenu.classList.remove('active');
            document.body.style.overflow = '';
            navItems.forEach(item => item.classList.remove('dropdown-active'));
        }
    });

    // ============================================
    // NEWS SLIDER
    // ============================================
    const slider = document.getElementById('newsSlider');
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.getElementById('prevSlide');
    const nextBtn = document.getElementById('nextSlide');
    const dots = document.querySelectorAll('.dot');
    let currentSlide = 0;
    let slideInterval;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            dots[i].classList.remove('active');
        });
        
        slides[index].classList.add('active');
        dots[index].classList.add('active');
        currentSlide = index;
    }

    function nextSlide() {
        const next = (currentSlide + 1) % slides.length;
        showSlide(next);
    }

    function prevSlide() {
        const prev = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(prev);
    }

    function startSlideShow() {
        slideInterval = setInterval(nextSlide, 5000);
    }

    function stopSlideShow() {
        clearInterval(slideInterval);
    }

    prevBtn.addEventListener('click', function() {
        stopSlideShow();
        prevSlide();
        startSlideShow();
    });

    nextBtn.addEventListener('click', function() {
        stopSlideShow();
        nextSlide();
        startSlideShow();
    });

    dots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            stopSlideShow();
            showSlide(index);
            startSlideShow();
        });
    });

    // Start slideshow
    startSlideShow();

    // Pause on hover
    slider.addEventListener('mouseenter', stopSlideShow);
    slider.addEventListener('mouseleave', startSlideShow);

    // ============================================
    // KABAR TERBARU HORIZONTAL SCROLL
    // ============================================
    const kabarWrapper = document.getElementById('kabarWrapper');
    const kabarScrollLeft = document.getElementById('kabarScrollLeft');
    const kabarScrollRight = document.getElementById('kabarScrollRight');

    if (kabarWrapper && kabarScrollLeft && kabarScrollRight) {
        const scrollAmount = 400;

        kabarScrollLeft.addEventListener('click', function() {
            kabarWrapper.scrollBy({
                left: -scrollAmount,
                behavior: 'smooth'
            });
        });

        kabarScrollRight.addEventListener('click', function() {
            kabarWrapper.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
        });
    }

    // ============================================
    // CARD SCROLL SECTION
    // ============================================
    const cardScrollContainer = document.getElementById('cardScrollContainer');
    const cardScrollLeft = document.getElementById('cardScrollLeft');
    const cardScrollRight = document.getElementById('cardScrollRight');

    if (cardScrollContainer && cardScrollLeft && cardScrollRight) {
        const cardScrollAmount = 340;

        cardScrollLeft.addEventListener('click', function() {
            cardScrollContainer.scrollBy({
                left: -cardScrollAmount,
                behavior: 'smooth'
            });
        });

        cardScrollRight.addEventListener('click', function() {
            cardScrollContainer.scrollBy({
                left: cardScrollAmount,
                behavior: 'smooth'
            });
        });
    }

    // ============================================
    // SMOOTH SCROLL FOR ANCHOR LINKS
    // ============================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    const offsetTop = target.offsetTop - 140;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    mobileMenuBtn.classList.remove('active');
                    navMenu.classList.remove('active');
                    document.body.style.overflow = '';
                }
            }
        });
    });

    // ============================================
    // SCROLL REVEAL ANIMATION
    // ============================================
    const revealElements = document.querySelectorAll(
        '.kabar-card, .card-item, .gallery-item, .section-header'
    );

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                revealObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    revealElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        revealObserver.observe(el);
    });

    // ============================================
    // GALLERY LIGHTBOX EFFECT
    // ============================================
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    galleryItems.forEach(item => {
        item.addEventListener('click', function() {
            const img = this.querySelector('img');
            const title = this.querySelector('.gallery-info h4')?.textContent || '';
            const desc = this.querySelector('.gallery-info p')?.textContent || '';
            
            // Create lightbox
            const lightbox = document.createElement('div');
            lightbox.className = 'lightbox';
            lightbox.innerHTML = `
                <div class="lightbox-overlay"></div>
                <div class="lightbox-content">
                    <button class="lightbox-close"><i class="fas fa-times"></i></button>
                    <img src="${img.src}" alt="${img.alt}">
                    <div class="lightbox-caption">
                        <h4>${title}</h4>
                        <p>${desc}</p>
                    </div>
                </div>
            `;
            
            // Add lightbox styles
            const style = document.createElement('style');
            style.textContent = `
                .lightbox {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    z-index: 10000;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
                .lightbox-overlay {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(0, 0, 0, 0.95);
                    backdrop-filter: blur(10px);
                }
                .lightbox-content {
                    position: relative;
                    z-index: 1;
                    max-width: 90%;
                    max-height: 90vh;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                }
                .lightbox-content img {
                    max-width: 100%;
                    max-height: 70vh;
                    object-fit: contain;
                    border-radius: 12px;
                }
                .lightbox-close {
                    position: absolute;
                    top: -50px;
                    right: 0;
                    width: 45px;
                    height: 45px;
                    border-radius: 50%;
                    background: rgba(220, 38, 38, 0.9);
                    border: none;
                    color: white;
                    font-size: 1.2rem;
                    cursor: pointer;
                    transition: all 0.3s ease;
                }
                .lightbox-close:hover {
                    background: #DC2626;
                    transform: scale(1.1);
                }
                .lightbox-caption {
                    text-align: center;
                    margin-top: 1.5rem;
                    color: white;
                }
                .lightbox-caption h4 {
                    font-size: 1.5rem;
                    margin-bottom: 0.5rem;
                }
                .lightbox-caption p {
                    color: rgba(255, 255, 255, 0.7);
                }
            `;
            
            document.head.appendChild(style);
            document.body.appendChild(lightbox);
            document.body.style.overflow = 'hidden';
            
            // Close lightbox
            const closeBtn = lightbox.querySelector('.lightbox-close');
            const overlay = lightbox.querySelector('.lightbox-overlay');
            
            function closeLightbox() {
                lightbox.style.opacity = '0';
                setTimeout(() => {
                    lightbox.remove();
                    style.remove();
                    document.body.style.overflow = '';
                }, 300);
            }
            
            closeBtn.addEventListener('click', closeLightbox);
            overlay.addEventListener('click', closeLightbox);
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') closeLightbox();
            });
            
            // Animate in
            setTimeout(() => {
                lightbox.style.opacity = '1';
                lightbox.style.transition = 'opacity 0.3s ease';
            }, 10);
        });
    });

    // ============================================
    // PARALLAX EFFECT FOR MOUNTAIN BACKGROUND
    // ============================================
    const mountainBg = document.querySelector('.mountain-bg');
    
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        mountainBg.style.transform = `translateY(${scrolled * 0.3}px)`;
    });

    // ============================================
    // BUTTON HOVER EFFECTS
    // ============================================
    const buttons = document.querySelectorAll('.slide-btn, .kabar-link, .card-btn');
    
    buttons.forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px)';
        });
        
        btn.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });

    // ============================================
    // RUNNING BANNER SPEED ADJUSTMENT
    // ============================================
    const bannerContent = document.querySelector('.banner-content');
    let bannerSpeed = 20;
    
    // Pause banner on hover
    bannerContent.addEventListener('mouseenter', function() {
        this.style.animationPlayState = 'paused';
    });
    
    bannerContent.addEventListener('mouseleave', function() {
        this.style.animationPlayState = 'running';
    });

    console.log('🗻 Sabhagiriwana website loaded successfully!');
});

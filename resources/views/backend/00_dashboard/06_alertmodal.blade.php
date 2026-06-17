{{-- ============================================================
     ALERT / NOTIFIKASI (DENGAN ANIMASI BERBEDA)
     ============================================================ --}}

<style>
    /* ========================================
       ANIMASI ALERT
    ======================================== */

    /* --- Animasi Sukses (Hijau) - Slide Down --- */
    @keyframes slideDown {
        0% {
            opacity: 0;
            transform: translateY(-30px) scale(0.95);
        }
        100% {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    .alert-success-animate {
        animation: slideDown 0.5s ease-out forwards;
        box-shadow: 0 4px 20px rgba(46, 125, 50, 0.15);
        border-left: 5px solid #2e7d32 !important;
    }

    /* --- Animasi Warning (Kuning) - Fade In + Bounce --- */
    @keyframes fadeBounce {
        0% {
            opacity: 0;
            transform: scale(0.8);
        }
        50% {
            opacity: 1;
            transform: scale(1.05);
        }
        70% {
            transform: scale(0.98);
        }
        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    .alert-warning-animate {
        animation: fadeBounce 0.6s ease-out forwards;
        box-shadow: 0 4px 20px rgba(237, 108, 2, 0.15);
        border-left: 5px solid #e65100 !important;
    }

    /* --- Animasi Error/Hapus (Merah) - Slide From Right + Shake --- */
    @keyframes slideRightShake {
        0% {
            opacity: 0;
            transform: translateX(50px) scale(0.9);
        }
        60% {
            opacity: 1;
            transform: translateX(-5px) scale(1);
        }
        75% {
            transform: translateX(5px);
        }
        90% {
            transform: translateX(-3px);
        }
        100% {
            opacity: 1;
            transform: translateX(0) scale(1);
        }
    }

    .alert-danger-animate {
        animation: slideRightShake 0.7s ease-out forwards;
        box-shadow: 0 4px 20px rgba(198, 40, 40, 0.15);
        border-left: 5px solid #c62828 !important;
    }

    /* --- Base Style Alert --- */
    .alert-custom {
        border-radius: 12px;
        font-family: 'Poppins', sans-serif;
        padding: 14px 20px;
        border: none;
        display: flex;
        align-items: center;
        gap: 12px;
        position: relative;
        overflow: hidden;
        margin-bottom: 16px;
        opacity: 0;
        /* Awalnya hidden, animasi akan jalan */;
    }

    /* Efek garis gradient di atas */
    .alert-custom::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        opacity: 0.5;
    }

    /* Icon besar di belakang (efek) */
    .alert-custom .alert-icon-bg {
        position: absolute;
        right: 10px;
        bottom: -10px;
        font-size: 60px;
        opacity: 0.05;
        pointer-events: none;
    }

    .alert-custom .alert-icon {
        font-size: 22px;
        flex-shrink: 0;
    }

    .alert-custom .alert-message {
        flex: 1;
        font-weight: 500;
        font-size: 14px;
        margin: 0;
    }

    .alert-custom .btn-close {
        opacity: 0.6;
        transition: opacity 0.3s ease;
        padding: 8px;
        margin: -8px -8px -8px 0;
    }

    .alert-custom .btn-close:hover {
        opacity: 1;
    }

    /* --- Warna Spesifik --- */
    .alert-success-animate {
        background: #e8f5e9 !important;
        color: #2e7d32 !important;
    }
    .alert-success-animate .alert-icon {
        color: #2e7d32;
    }

    .alert-warning-animate {
        background: #fff3e0 !important;
        color: #e65100 !important;
    }
    .alert-warning-animate .alert-icon {
        color: #e65100;
    }

    .alert-danger-animate {
        background: #ffebee !important;
        color: #c62828 !important;
    }
    .alert-danger-animate .alert-icon {
        color: #c62828;
    }

    /* --- Auto Close (5 detik) --- */
    .alert-auto-close {
        cursor: default;
    }

    /* --- Responsive --- */
    @media (max-width: 576px) {
        .alert-custom {
            padding: 12px 16px;
            font-size: 13px;
            flex-wrap: wrap;
        }
        .alert-custom .alert-icon {
            font-size: 18px;
        }
        .alert-custom .alert-icon-bg {
            font-size: 40px;
        }
        .alert-custom .alert-message {
            font-size: 13px;
        }
    }
</style>

{{-- ============================================================
     ALERT SUCCESS (Hijau + Slide Down)
     ============================================================ --}}
@if(session('success'))
    <div class="alert-custom alert-success-animate alert-auto-close" role="alert" id="alertSuccess">
        <span class="alert-icon-bg"><i class="mdi mdi-check-circle"></i></span>
        <span class="alert-icon"><i class="mdi mdi-check-circle"></i></span>
        <span class="alert-message">{{ session('success') }}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- ============================================================
     ALERT WARNING / UPDATE (Kuning + Fade Bounce)
     ============================================================ --}}
@if(session('warning'))
    <div class="alert-custom alert-warning-animate alert-auto-close" role="alert" id="alertWarning">
        <span class="alert-icon-bg"><i class="mdi mdi-alert"></i></span>
        <span class="alert-icon"><i class="mdi mdi-alert"></i></span>
        <span class="alert-message">{{ session('warning') }}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- ============================================================
     ALERT ERROR / HAPUS (Merah + Slide Right Shake)
     ============================================================ --}}
@if(session('error'))
    <div class="alert-custom alert-danger-animate alert-auto-close" role="alert" id="alertError">
        <span class="alert-icon-bg"><i class="mdi mdi-alert-circle"></i></span>
        <span class="alert-icon"><i class="mdi mdi-alert-circle"></i></span>
        <span class="alert-message">{{ session('error') }}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- ============================================================
     ALERT INFO (Biru + Fade)
     ============================================================ --}}
@if(session('info'))
    <style>
        @keyframes fadeInInfo {
            0% { opacity: 0; transform: translateY(10px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .alert-info-animate {
            animation: fadeInInfo 0.5s ease-out forwards;
            background: #e3f2fd !important;
            color: #0d47a1 !important;
            border-left: 5px solid #0d47a1 !important;
            box-shadow: 0 4px 20px rgba(13, 71, 161, 0.12);
        }
        .alert-info-animate .alert-icon {
            color: #0d47a1;
        }
    </style>
    <div class="alert-custom alert-info-animate alert-auto-close" role="alert" id="alertInfo">
        <span class="alert-icon-bg"><i class="mdi mdi-information"></i></span>
        <span class="alert-icon"><i class="mdi mdi-information"></i></span>
        <span class="alert-message">{{ session('info') }}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- ============================================================
     JAVASCRIPT (Auto Close 5 Detik)
     ============================================================ --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Auto close alert setelah 5 detik
        var alerts = document.querySelectorAll('.alert-auto-close');

        alerts.forEach(function(alert) {
            setTimeout(function() {
                // Fade out smooth sebelum dihapus
                alert.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                alert.style.opacity = '0';
                alert.style.transform = 'translateY(-10px)';

                // Hapus dari DOM setelah animasi selesai
                setTimeout(function() {
                    if (alert.parentNode) {
                        alert.remove();
                    }
                }, 500);
            }, 5000); // 5 detik
        });

        // ---- Juga tutup alert dengan tombol close ----
        document.querySelectorAll('.alert-custom .btn-close').forEach(function(btn) {
            btn.addEventListener('click', function() {
                var parent = this.closest('.alert-custom');
                if (parent) {
                    parent.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                    parent.style.opacity = '0';
                    parent.style.transform = 'scale(0.95)';
                    setTimeout(function() {
                        if (parent.parentNode) {
                            parent.remove();
                        }
                    }, 300);
                }
            });
        });
    });
</script>

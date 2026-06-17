<style>
    /* ===== FOOTER ===== */
    .footer {
        background: #ffffff;
        border-top: 3px solid #c62828;
        padding: 24px 24px 20px;
        font-family: 'Poppins', sans-serif;
        margin-top: auto;
        box-shadow: 0 -2px 16px rgba(0, 0, 0, 0.02);
    }

    .footer .footer-content {
        max-width: 1280px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 16px;
    }

    .footer .footer-left {
        display: flex;
        align-items: center;
        gap: 16px;
    }

    .footer .footer-left .logo-wrapper {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .footer .footer-left .logo-wrapper img {
        height: 36px;
        width: auto;
        border-radius: 8px;
        border: 2px solid #c62828;
        padding: 3px;
        background: #fff;
    }

    .footer .footer-left .logo-wrapper .brand-text {
        font-size: 17px;
        font-weight: 700;
        color: #1a1a2e;
        font-family: 'Poppins', sans-serif;
        letter-spacing: -0.3px;
    }

    .footer .footer-left .logo-wrapper .brand-text span {
        color: #c62828;
    }

    .footer .footer-left .divider-line {
        width: 2px;
        height: 30px;
        background: #e8ecf1;
        border-radius: 10px;
    }

    .footer .footer-left .univ-text {
        font-size: 14px;
        color: #5a6a7a;
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
    }

    .footer .footer-left .univ-text i {
        color: #c62828;
        margin-right: 6px;
    }

    .footer .footer-right {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .footer .footer-right .copyright {
        font-size: 13px;
        color: #b0b8c4;
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
    }

    .footer .footer-right .social-icons {
        display: flex;
        gap: 10px;
    }

    .footer .footer-right .social-icons a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 34px;
        height: 34px;
        border-radius: 50%;
        background: #f0f2f5;
        color: #5a6a7a;
        transition: all 0.3s ease;
        text-decoration: none;
        font-size: 14px;
    }

    .footer .footer-right .social-icons a:hover {
        background: #c62828;
        color: #ffffff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(198, 40, 40, 0.25);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 992px) {
        .footer .footer-content {
            flex-direction: column;
            text-align: center;
            gap: 12px;
        }

        .footer .footer-left {
            flex-direction: column;
            gap: 10px;
        }

        .footer .footer-left .divider-line {
            display: none;
        }

        .footer .footer-left .logo-wrapper {
            flex-direction: column;
            gap: 6px;
        }

        .footer .footer-left .logo-wrapper img {
            height: 40px;
        }

        .footer .footer-left .logo-wrapper .brand-text {
            font-size: 16px;
        }

        .footer .footer-left .univ-text {
            font-size: 13px;
        }

        .footer .footer-right {
            flex-direction: column;
            gap: 8px;
        }

        .footer .footer-right .copyright {
            font-size: 12px;
        }
    }

    @media (max-width: 480px) {
        .footer {
            padding: 18px 16px 16px;
        }

        .footer .footer-left .logo-wrapper img {
            height: 34px;
        }

        .footer .footer-left .logo-wrapper .brand-text {
            font-size: 14px;
        }

        .footer .footer-left .univ-text {
            font-size: 12px;
        }

        .footer .footer-right .copyright {
            font-size: 11px;
        }

        .footer .footer-right .social-icons a {
            width: 30px;
            height: 30px;
            font-size: 12px;
        }
    }

    /* ===== DARK MODE ===== */
    @media (prefers-color-scheme: dark) {
        .footer {
            background: #1a1a2e;
            border-top-color: #c62828;
        }

        .footer .footer-left .logo-wrapper .brand-text {
            color: #e8ecf1;
        }

        .footer .footer-left .univ-text {
            color: #9aa8b9;
        }

        .footer .footer-right .copyright {
            color: #6a7a8a;
        }

        .footer .footer-right .social-icons a {
            background: rgba(255, 255, 255, 0.05);
            color: #9aa8b9;
        }

        .footer .footer-right .social-icons a:hover {
            background: #c62828;
            color: #fff;
        }

        .footer .footer-left .divider-line {
            background: rgba(255, 255, 255, 0.05);
        }

        .footer .footer-left .logo-wrapper img {
            border-color: #c62828;
            background: #1a1a2e;
        }
    }
</style>

<!-- ===== FOOTER ===== -->
<footer class="footer">
    <div class="footer-content">

        <!-- LEFT: Brand + Universitas -->
        <div class="footer-left">
            <div class="logo-wrapper">
                <img src="/assets/newtheme/gambar/sabha.png" alt="Sabhagiriwana17">
                <span class="brand-text">Sabhagiri<span>wana'17</span></span>
            </div>
            <span class="divider-line"></span>
            <span class="univ-text">
                <i class="fas fa-university"></i> Universitas 17 Agustus 1945 Semarang
            </span>
        </div>

        <!-- RIGHT: Copyright + Sosial Media -->
        <div class="footer-right">
            <span class="copyright">
                &copy; {{ date('Y') }} Sabhagiriwana'17.
            </span>
            <div class="social-icons">
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                <a href="#" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>

    </div>
</footer>

<!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="/backend/assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="/backend/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="/backend/assets/vendors/chart.js/Chart.min.js"></script>
  <script src="/backend/assets/vendors/progressbar.js/progressbar.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/backend/assets/js/off-canvas.js"></script>
  <script src="/backend/assets/js/hoverable-collapse.js"></script>
  <script src="/backend/assets/js/template.js"></script>
  <script src="/backend/assets/js/settings.js"></script>
  <script src="/backend/assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="/backend/assets/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="/backend/assets/js/dashboard.js"></script>
  <script src="/backend/assets/js/proBanner.js"></script>
  <!-- <script src="../..//backend/assets/js/Chart.roundedBarCharts.js"></script> -->
  <!-- End custom js for this page-->
</body>

</html>

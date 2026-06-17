
  @include('backend.00_dashboard.02_header')

<body class="with-welcome-text">
    <!-- partial:partials/_navbar.html -->
  @include('backend.00_dashboard.03_navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
  <div id="settings-trigger"><i class="ti-settings"></i></div>
  <div id="theme-settings" class="settings-panel">
    <i class="settings-close ti-close"></i>
    <p class="settings-heading">SIDEBAR SKINS</p>
    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
      <div class="img-ss rounded-circle bg-light border me-3"></div>Light
    </div>
    <div class="sidebar-bg-options" id="sidebar-dark-theme">
      <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
    </div>
    <p class="settings-heading mt-2">HEADER SKINS</p>
    <div class="color-tiles mx-0 px-4">
      <div class="tiles success"></div>
      <div class="tiles warning"></div>
      <div class="tiles danger"></div>
      <div class="tiles info"></div>
      <div class="tiles dark"></div>
      <div class="tiles default"></div>
    </div>
  </div>
</div>
<div id="right-sidebar" class="settings-panel">
  <i class="settings-close ti-close"></i>
  <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab"
        aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab"
        aria-controls="chats-section">CHATS</a>
    </li>
  </ul>
  <div class="tab-content" id="setting-content">
    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
      aria-labelledby="todo-section">
      <div class="add-items d-flex px-3 mb-0">
        <form class="form w-100">
          <div class="form-group d-flex">
            <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
            <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
          </div>
        </form>
      </div>
      <div class="list-wrapper px-3">
        <ul class="d-flex flex-column-reverse todo-list">
          <li>
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox">
                Team review meeting at 3.00 PM
              </label>
            </div>
            <i class="remove ti-close"></i>
          </li>
          <li>
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox">
                Prepare for presentation
              </label>
            </div>
            <i class="remove ti-close"></i>
          </li>
          <li>
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox">
                Resolve all the low priority tickets due today
              </label>
            </div>
            <i class="remove ti-close"></i>
          </li>
          <li class="completed">
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox" checked>
                Schedule meeting for next week
              </label>
            </div>
            <i class="remove ti-close"></i>
          </li>
          <li class="completed">
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox" checked>
                Project review
              </label>
            </div>
            <i class="remove ti-close"></i>
          </li>
        </ul>
      </div>
      <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
      <div class="events pt-4 px-3">
        <div class="wrapper d-flex mb-2">
          <i class="ti-control-record text-primary me-2"></i>
          <span>Feb 11 2018</span>
        </div>
        <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
        <p class="text-gray mb-0">The total number of sessions</p>
      </div>
      <div class="events pt-4 px-3">
        <div class="wrapper d-flex mb-2">
          <i class="ti-control-record text-primary me-2"></i>
          <span>Feb 7 2018</span>
        </div>
        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
        <p class="text-gray mb-0 ">Call Sarah Graves</p>
      </div>
    </div>
    <!-- To do section tab ends -->
    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
      <div class="d-flex align-items-center justify-content-between border-bottom">
        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
      </div>
      <ul class="chat-list">
        <li class="list active">
          <div class="profile"><img src="..//backend/assets/images/faces/face1.jpg" alt="image"><span class="online"></span>
          </div>
          <div class="info">
            <p>Thomas Douglas</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">19 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="..//backend/assets/images/faces/face2.jpg" alt="image"><span class="offline"></span>
          </div>
          <div class="info">
            <div class="wrapper d-flex">
              <p>Catherine</p>
            </div>
            <p>Away</p>
          </div>
          <div class="badge badge-success badge-pill my-auto mx-2">4</div>
          <small class="text-muted my-auto">23 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="..//backend/assets/images/faces/face3.jpg" alt="image"><span class="online"></span>
          </div>
          <div class="info">
            <p>Daniel Russell</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">14 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="..//backend/assets/images/faces/face4.jpg" alt="image"><span class="offline"></span>
          </div>
          <div class="info">
            <p>James Richardson</p>
            <p>Away</p>
          </div>
          <small class="text-muted my-auto">2 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="..//backend/assets/images/faces/face5.jpg" alt="image"><span class="online"></span>
          </div>
          <div class="info">
            <p>Madeline Kennedy</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">5 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="..//backend/assets/images/faces/face6.jpg" alt="image"><span class="online"></span>
          </div>
          <div class="info">
            <p>Sarah Graves</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">47 min</small>
        </li>
      </ul>
    </div>
    <!-- chat tab ends -->
  </div>
</div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->

  @include('backend.00_dashboard.04_sidebar')

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">



            <div class="col-sm-12">
    <div class="home-tab">

        <!-- ============================================================
             KONTEN DASHBOARD (di dalam home-tab)
             ============================================================ -->
        <div style="padding: 8px 0;">

            <!-- Judul -->
            <div style="margin-bottom: 24px;">
                <h2 style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; margin: 0; font-size: 22px;">
                    🏔️ Selamat Datang di Dashboard Sabhagiriwana'17
                </h2>
                <p style="font-family: 'Poppins', sans-serif; color: #7a8a9e; margin: 4px 0 0; font-size: 14px;">
                    Kelola kegiatan pecinta alam, pendakian, dan ekspedisi gunung
                </p>
            </div>

            <!-- === STATISTIK CARD (4 CARD) === -->
            <div class="row" style="margin-bottom: 24px;">

                <!-- Card 1: Total Pendakian -->
                <div class="col-md-3 col-6" style="margin-bottom: 16px;">
                    <div style="background: #ffffff; border-radius: 16px; padding: 20px 16px; box-shadow: 0 2px 12px rgba(0,0,0,0.04); border-left: 4px solid #c62828; height: 100%;">
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 40, 40, 0.10); display: flex; align-items: center; justify-content: center; font-size: 22px; color: #c62828; flex-shrink: 0;">
                                <i class="mdi mdi-walk"></i>
                            </div>
                            <div>
                                <p style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #b0b8c4; margin: 0; font-weight: 500; text-transform: uppercase; letter-spacing: 0.5px;">Pendakian</p>
                                <h3 style="font-family: 'Poppins', sans-serif; font-size: 22px; font-weight: 700; color: #1a1a2e; margin: 0;">247</h3>
                            </div>
                        </div>
                        <p style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #2e7d32; margin: 8px 0 0; display: flex; align-items: center; gap: 4px;">
                            <i class="mdi mdi-arrow-up"></i> +12% bulan ini
                        </p>
                    </div>
                </div>

                <!-- Card 2: Gunung Didaki -->
                <div class="col-md-3 col-6" style="margin-bottom: 16px;">
                    <div style="background: #ffffff; border-radius: 16px; padding: 20px 16px; box-shadow: 0 2px 12px rgba(0,0,0,0.04); border-left: 4px solid #0d47a1; height: 100%;">
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(13, 71, 161, 0.10); display: flex; align-items: center; justify-content: center; font-size: 22px; color: #0d47a1; flex-shrink: 0;">
                                <i class="mdi mdi-mountain"></i>
                            </div>
                            <div>
                                <p style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #b0b8c4; margin: 0; font-weight: 500; text-transform: uppercase; letter-spacing: 0.5px;">Gunung</p>
                                <h3 style="font-family: 'Poppins', sans-serif; font-size: 22px; font-weight: 700; color: #1a1a2e; margin: 0;">18</h3>
                            </div>
                        </div>
                        <p style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #7a8a9e; margin: 8px 0 0; display: flex; align-items: center; gap: 4px;">
                            <i class="mdi mdi-map-marker"></i> 5 gunung baru
                        </p>
                    </div>
                </div>

                <!-- Card 3: Anggota Aktif -->
                <div class="col-md-3 col-6" style="margin-bottom: 16px;">
                    <div style="background: #ffffff; border-radius: 16px; padding: 20px 16px; box-shadow: 0 2px 12px rgba(0,0,0,0.04); border-left: 4px solid #c62828; height: 100%;">
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 40, 40, 0.10); display: flex; align-items: center; justify-content: center; font-size: 22px; color: #c62828; flex-shrink: 0;">
                                <i class="mdi mdi-account-group"></i>
                            </div>
                            <div>
                                <p style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #b0b8c4; margin: 0; font-weight: 500; text-transform: uppercase; letter-spacing: 0.5px;">Anggota Aktif</p>
                                <h3 style="font-family: 'Poppins', sans-serif; font-size: 22px; font-weight: 700; color: #1a1a2e; margin: 0;">86</h3>
                            </div>
                        </div>
                        <p style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #2e7d32; margin: 8px 0 0; display: flex; align-items: center; gap: 4px;">
                            <i class="mdi mdi-arrow-up"></i> +8 anggota baru
                        </p>
                    </div>
                </div>

                <!-- Card 4: Ekspedisi -->
                <div class="col-md-3 col-6" style="margin-bottom: 16px;">
                    <div style="background: #ffffff; border-radius: 16px; padding: 20px 16px; box-shadow: 0 2px 12px rgba(0,0,0,0.04); border-left: 4px solid #0d47a1; height: 100%;">
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(13, 71, 161, 0.10); display: flex; align-items: center; justify-content: center; font-size: 22px; color: #0d47a1; flex-shrink: 0;">
                                <i class="mdi mdi-tent"></i>
                            </div>
                            <div>
                                <p style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #b0b8c4; margin: 0; font-weight: 500; text-transform: uppercase; letter-spacing: 0.5px;">Ekspedisi</p>
                                <h3 style="font-family: 'Poppins', sans-serif; font-size: 22px; font-weight: 700; color: #1a1a2e; margin: 0;">12</h3>
                            </div>
                        </div>
                        <p style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #7a8a9e; margin: 8px 0 0; display: flex; align-items: center; gap: 4px;">
                            <i class="mdi mdi-calendar"></i> 3 ekspedisi mendatang
                        </p>
                    </div>
                </div>

            </div>

            <!-- === GRAFIK + AKTIVITAS (2 KOLOM) === -->
            <div class="row">

                <!-- KIRI: Grafik -->
                <div class="col-lg-8" style="margin-bottom: 20px;">
                    <div style="background: #ffffff; border-radius: 16px; padding: 24px 20px; box-shadow: 0 2px 12px rgba(0,0,0,0.04); border: 1px solid #f0f2f5; height: 100%;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; flex-wrap: wrap; gap: 8px;">
                            <div>
                                <h4 style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; color: #1a1a2e; margin: 0;">
                                    📊 Aktivitas Pendakian Bulan Ini
                                </h4>
                                <p style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #7a8a9e; margin: 2px 0 0;">
                                    Statistik pendakian per minggu
                                </p>
                            </div>
                            <span style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #c62828; font-weight: 600; background: rgba(198,40,40,0.06); padding: 4px 14px; border-radius: 30px;">
                                <i class="mdi mdi-calendar"></i> Januari 2026
                            </span>
                        </div>

                        <!-- Bar Chart Simpel -->
                        <div style="display: flex; align-items: flex-end; gap: 12px; height: 160px; padding-top: 8px;">
                            <div style="flex: 1; display: flex; flex-direction: column; align-items: center; height: 100%; justify-content: flex-end;">
                                <div style="width: 100%; background: #c62828; height: 65%; border-radius: 6px 6px 0 0; min-height: 20px;"></div>
                                <p style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #7a8a9e; margin: 6px 0 0; font-weight: 500;">Minggu 1</p>
                            </div>
                            <div style="flex: 1; display: flex; flex-direction: column; align-items: center; height: 100%; justify-content: flex-end;">
                                <div style="width: 100%; background: #c62828; height: 85%; border-radius: 6px 6px 0 0; min-height: 20px;"></div>
                                <p style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #7a8a9e; margin: 6px 0 0; font-weight: 500;">Minggu 2</p>
                            </div>
                            <div style="flex: 1; display: flex; flex-direction: column; align-items: center; height: 100%; justify-content: flex-end;">
                                <div style="width: 100%; background: #0d47a1; height: 45%; border-radius: 6px 6px 0 0; min-height: 20px;"></div>
                                <p style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #7a8a9e; margin: 6px 0 0; font-weight: 500;">Minggu 3</p>
                            </div>
                            <div style="flex: 1; display: flex; flex-direction: column; align-items: center; height: 100%; justify-content: flex-end;">
                                <div style="width: 100%; background: #c62828; height: 100%; border-radius: 6px 6px 0 0; min-height: 20px;"></div>
                                <p style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #7a8a9e; margin: 6px 0 0; font-weight: 500;">Minggu 4</p>
                            </div>
                            <div style="flex: 1; display: flex; flex-direction: column; align-items: center; height: 100%; justify-content: flex-end;">
                                <div style="width: 100%; background: #0d47a1; height: 30%; border-radius: 6px 6px 0 0; min-height: 20px;"></div>
                                <p style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #7a8a9e; margin: 6px 0 0; font-weight: 500;">Minggu 5</p>
                            </div>
                        </div>

                        <!-- Legend -->
                        <div style="display: flex; justify-content: center; gap: 20px; margin-top: 16px; flex-wrap: wrap;">
                            <span style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #5a6a7a; display: flex; align-items: center; gap: 6px;">
                                <span style="display: inline-block; width: 12px; height: 12px; background: #c62828; border-radius: 3px;"></span> Pendakian
                            </span>
                            <span style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #5a6a7a; display: flex; align-items: center; gap: 6px;">
                                <span style="display: inline-block; width: 12px; height: 12px; background: #0d47a1; border-radius: 3px;"></span> Ekspedisi
                            </span>
                        </div>
                    </div>
                </div>

                <!-- KANAN: Aktivitas Terbaru -->
                <div class="col-lg-4" style="margin-bottom: 20px;">
                    <div style="background: #ffffff; border-radius: 16px; padding: 20px 18px; box-shadow: 0 2px 12px rgba(0,0,0,0.04); border: 1px solid #f0f2f5; height: 100%;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 14px;">
                            <h4 style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 600; color: #1a1a2e; margin: 0;">
                                🏃 Aktivitas Terbaru
                            </h4>
                            <a href="#" style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #c62828; text-decoration: none; font-weight: 500;">Lihat Semua</a>
                        </div>

                        <div style="display: flex; flex-direction: column; gap: 12px;">
                            <div style="display: flex; align-items: center; gap: 12px; padding-bottom: 12px; border-bottom: 1px solid #f0f2f5;">
                                <div style="width: 36px; height: 36px; border-radius: 50%; background: rgba(198,40,40,0.08); display: flex; align-items: center; justify-content: center; color: #c62828; font-size: 16px; flex-shrink: 0;">
                                    <i class="mdi mdi-walk"></i>
                                </div>
                                <div style="flex: 1;">
                                    <p style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #1a1a2e; margin: 0; font-weight: 500;">Pendakian Gunung Merbabu</p>
                                    <p style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #b0b8c4; margin: 2px 0 0;">2 jam lalu · 12 peserta</p>
                                </div>
                                <span style="font-family: 'Poppins', sans-serif; font-size: 10px; background: #e8f5e9; color: #2e7d32; padding: 2px 10px; border-radius: 30px; font-weight: 600;">Selesai</span>
                            </div>

                            <div style="display: flex; align-items: center; gap: 12px; padding-bottom: 12px; border-bottom: 1px solid #f0f2f5;">
                                <div style="width: 36px; height: 36px; border-radius: 50%; background: rgba(13,71,161,0.08); display: flex; align-items: center; justify-content: center; color: #0d47a1; font-size: 16px; flex-shrink: 0;">
                                    <i class="mdi mdi-tent"></i>
                                </div>
                                <div style="flex: 1;">
                                    <p style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #1a1a2e; margin: 0; font-weight: 500;">Ekspedisi Rinjani 2026</p>
                                    <p style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #b0b8c4; margin: 2px 0 0;">5 jam lalu · 8 peserta</p>
                                </div>
                                <span style="font-family: 'Poppins', sans-serif; font-size: 10px; background: #fff3e0; color: #e65100; padding: 2px 10px; border-radius: 30px; font-weight: 600;">Berjalan</span>
                            </div>

                            <div style="display: flex; align-items: center; gap: 12px; padding-bottom: 12px; border-bottom: 1px solid #f0f2f5;">
                                <div style="width: 36px; height: 36px; border-radius: 50%; background: rgba(198,40,40,0.08); display: flex; align-items: center; justify-content: center; color: #c62828; font-size: 16px; flex-shrink: 0;">
                                    <i class="mdi mdi-calendar"></i>
                                </div>
                                <div style="flex: 1;">
                                    <p style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #1a1a2e; margin: 0; font-weight: 500;">Rapat Persiapan Pendakian</p>
                                    <p style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #b0b8c4; margin: 2px 0 0;">1 hari lalu · 15 peserta</p>
                                </div>
                                <span style="font-family: 'Poppins', sans-serif; font-size: 10px; background: #e3f2fd; color: #0d47a1; padding: 2px 10px; border-radius: 30px; font-weight: 600;">Direncanakan</span>
                            </div>

                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div style="width: 36px; height: 36px; border-radius: 50%; background: rgba(13,71,161,0.08); display: flex; align-items: center; justify-content: center; color: #0d47a1; font-size: 16px; flex-shrink: 0;">
                                    <i class="mdi mdi-mountain"></i>
                                </div>
                                <div style="flex: 1;">
                                    <p style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #1a1a2e; margin: 0; font-weight: 500;">Survey Gunung Slamet</p>
                                    <p style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #b0b8c4; margin: 2px 0 0;">2 hari lalu · 6 peserta</p>
                                </div>
                                <span style="font-family: 'Poppins', sans-serif; font-size: 10px; background: #e8f5e9; color: #2e7d32; padding: 2px 10px; border-radius: 30px; font-weight: 600;">Selesai</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- === GUNUNG POPULER (Full Width) === -->
            <div class="row">
                <div class="col-12">
                    <div style="background: #ffffff; border-radius: 16px; padding: 20px 18px; box-shadow: 0 2px 12px rgba(0,0,0,0.04); border: 1px solid #f0f2f5;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 14px;">
                            <h4 style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 600; color: #1a1a2e; margin: 0;">
                                ⛰️ Gunung Populer
                            </h4>
                            <a href="#" style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #c62828; text-decoration: none; font-weight: 500;">Lihat Semua</a>
                        </div>

                        <div class="row" style="gap: 8px 0;">

                            <div class="col-md-4 col-6">
                                <div style="display: flex; align-items: center; gap: 12px; padding: 8px 12px; background: #f8fafc; border-radius: 10px;">
                                    <div style="width: 8px; height: 8px; background: #c62828; border-radius: 50%; flex-shrink: 0;"></div>
                                    <div style="flex: 1;">
                                        <p style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #1a1a2e; margin: 0; font-weight: 500;">Gunung Merbabu</p>
                                    </div>
                                    <span style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #7a8a9e;">3.145m</span>
                                </div>
                            </div>

                            <div class="col-md-4 col-6">
                                <div style="display: flex; align-items: center; gap: 12px; padding: 8px 12px; background: #f8fafc; border-radius: 10px;">
                                    <div style="width: 8px; height: 8px; background: #0d47a1; border-radius: 50%; flex-shrink: 0;"></div>
                                    <div style="flex: 1;">
                                        <p style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #1a1a2e; margin: 0; font-weight: 500;">Gunung Rinjani</p>
                                    </div>
                                    <span style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #7a8a9e;">3.726m</span>
                                </div>
                            </div>

                            <div class="col-md-4 col-6">
                                <div style="display: flex; align-items: center; gap: 12px; padding: 8px 12px; background: #f8fafc; border-radius: 10px;">
                                    <div style="width: 8px; height: 8px; background: #c62828; border-radius: 50%; flex-shrink: 0;"></div>
                                    <div style="flex: 1;">
                                        <p style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #1a1a2e; margin: 0; font-weight: 500;">Gunung Slamet</p>
                                    </div>
                                    <span style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #7a8a9e;">3.428m</span>
                                </div>
                            </div>

                            <div class="col-md-4 col-6">
                                <div style="display: flex; align-items: center; gap: 12px; padding: 8px 12px; background: #f8fafc; border-radius: 10px;">
                                    <div style="width: 8px; height: 8px; background: #0d47a1; border-radius: 50%; flex-shrink: 0;"></div>
                                    <div style="flex: 1;">
                                        <p style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #1a1a2e; margin: 0; font-weight: 500;">Gunung Bromo</p>
                                    </div>
                                    <span style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #7a8a9e;">2.329m</span>
                                </div>
                            </div>

                            <div class="col-md-4 col-6">
                                <div style="display: flex; align-items: center; gap: 12px; padding: 8px 12px; background: #f8fafc; border-radius: 10px;">
                                    <div style="width: 8px; height: 8px; background: #c62828; border-radius: 50%; flex-shrink: 0;"></div>
                                    <div style="flex: 1;">
                                        <p style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #1a1a2e; margin: 0; font-weight: 500;">Gunung Semeru</p>
                                    </div>
                                    <span style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #7a8a9e;">3.676m</span>
                                </div>
                            </div>

                            <div class="col-md-4 col-6">
                                <div style="display: flex; align-items: center; gap: 12px; padding: 8px 12px; background: #f8fafc; border-radius: 10px;">
                                    <div style="width: 8px; height: 8px; background: #0d47a1; border-radius: 50%; flex-shrink: 0;"></div>
                                    <div style="flex: 1;">
                                        <p style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #1a1a2e; margin: 0; font-weight: 500;">Gunung Lawu</p>
                                    </div>
                                    <span style="font-family: 'Poppins', sans-serif; font-size: 11px; color: #7a8a9e;">3.265m</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- END konten dashboard -->

    </div>
</div>


          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->



  @include('backend.00_dashboard.05_footer')

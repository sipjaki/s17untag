
<!--Page loader-->
{{-- <div class="loader-wrapper">
    <div class="loader-circle">
        <div class="loader-wave"></div>
    </div>
</div> --}}
<!--Page loader-->

<!--Page Wrapper-->

<div class="container-fluid">

    <!--Header-->
    <div class="row header shadow-sm">
        
        <!--Logo-->
        <div class="col-sm-3 pl-0 text-center header-logo">
           <div class="button-custom mr-3 pt-3 pb-3 mb-0">
                <h3 class="logo"><a href="#" class="text-secondary logo"><i class='fa fa-balance-scale'></i> HaiuCare <span class="small">admin</span></a></h3>
           </div>
        </div>
        <!--Logo-->

        <!--Header Menu-->
        <div class="col-sm-9 header-menu pt-2 pb-0">
            <div class="row">
                
                <!--Menu Icons-->
                <div class="col-sm-4 col-8 pl-0">
                    <!--Toggle sidebar-->
                    <span class="menu-icon" onclick="toggle_sidebar()">
                        <span id="sidebar-toggle-btn"></span>
                    </span>
                    <!--Toggle sidebar-->
                    <!--Notification icon-->
                    <div class="menu-icon">
                        <a class="" href="#" onclick="toggle_dropdown(this); return false" role="button" class="dropdown-toggle">
                            <i class="fa fa-bell"></i>
                            <span class="badge badge-danger">5</span>
                        </a>
                        <div class="dropdown dropdown-left bg-white shadow border">
                            <a class="dropdown-item" href="#"><strong>Notifications</strong></a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <div class="media">
                                    <div class="align-self-center mr-3 rounded-circle notify-icon bg-primary">
                                        <i class="fa fa-bookmark"></i>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0"><strong>Meeting</strong></h6>
                                        <p>You have a meeting by 8:00</p>
                                        <small class="text-success">09:23am</small>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <div class="media">
                                    <div class="align-self-center mr-3 rounded-circle notify-icon bg-secondary">
                                        <i class="fa fa-link"></i>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0"><strong>Events</strong></h6>
                                        <p>Launching new programme</p>
                                        <small class="text-success">09:23am</small>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <div class="media">
                                    <div class="align-self-center mr-3 rounded-circle notify-icon bg-warning">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0"><strong>Personnel</strong></h6>
                                        <p>New employee arrival</p>
                                        <small class="text-success">09:23am</small>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-center link-all" href="#">See all notifications ></a>
                        </div>
                    </div>
                    <!--Notication icon-->

                    <!--Inbox icon-->
                    <span class="menu-icon">
                        <i class="fa fa-th-large"></i>
                    </span>
                </div>
                <!--Menu Icons-->

                <!--Search box and avatar-->
                <div class="col-sm-8 col-4 text-right flex-header-menu justify-content-end">
                 
                    
                    <div class="div">
                        @auth
                            <form action="/logout" method="post">
                                @csrf
                                <button class="btn btn-outline-danger" style="padding: 10px; font-size: 16px;">
                                    <i class="fas fa-sign-out-alt"></i>
                                </button>
                            </form>
                            @endauth
                    </div>
                    
                </div>
                <!--Search box and avatar-->
            </div>    

                
        
        </div>
        <!--Header Menu-->
    </div>
    <!--Header-->

    <!-- Tambahkan jQuery (pastikan Anda menyertakan jQuery di proyek Anda) -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
$(document).ready(function() {
    var header = $(".header");

    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) { // Ubah nilai 100 sesuai dengan ketinggian yang Anda inginkan sebelum header tetap
            header.addClass("header-fixed");
        } else {
            header.removeClass("header-fixed");
        }
    });
});
</script>


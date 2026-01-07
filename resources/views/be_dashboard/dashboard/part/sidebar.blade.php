
        <!--Main Content-->

        <div class="row main-content h-screen" color: #fff;">
            <!--Sidebar left-->
            <div class="col-sm-3 col-xs-6 sidebar pl-0">
                <div class="inner-sidebar mr-3">
                    <!--Image Avatar-->
                    <div class="avatar text-center">
                        <img src="assets/img/client-img4.png" alt="" class="rounded-circle" />
                        <p><strong class="text-white">{{ auth()->user()->name }}</strong></p>
                        <span class="text-primary small">Anda Adalah, <strong>
                            @if(auth()->check() && auth()->user()->is_admin == 'super_admin')
                                Super Admin
                            @else
                                Fundraiser
                            @endif
                        </strong>
                    </span>
                    </div>
                    <!--Image Avatar-->

                    <!--Sidebar Navigation Menu-->
                    <div class="sidebar-menu-container">
                        <ul class="sidebar-menu mt-4 mb-4">


                            <li class="parent">
                                <a href="/" class=""><i class="fab fa-ravelry mr-2"> </i>
                                    <span class="none">Program Makan Gratis</span>
                                </a>
                            </li>

                            <li class="parent">
                                <a href="/admindashboard" class=""><i class="fab fa-ravelry mr-2"> </i>
                                    <span class="none">Dashboard Admin</span>
                                </a>
                            </li>

                            
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('tables_menu1'); return false" class=""><i class="fab fa-ravelry mr-2"></i>
                                    <span class="none">Backend Database<i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="tables_menu1">
                                    <li class="child">
                                        <a href="/halamandatausers" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-users mr-2"></i>Data Users
                                        </a>
                                    </li> 

                                    <li class="child">
                                        <a href="/alldatadaftarmitra" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-edit mr-2"></i>All Data Daftar Mitra
                                        </a>
                                    </li> 
                                    
                                    <li class="child">
                                        <a href="/halamandatadaftarmitra" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-file mr-2"></i>Berkas Daftar Mitra
                                        </a>
                                    </li> 


                                    <li class="child">
                                        <a href="/approvedmitra" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-edit mr-2"></i>Approved Mitra
                                        </a>
                                    </li> 
                                    
                                    <li class="child">
                                        <a href="/rejectedmitra" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-warning mr-2"></i>Rejected Mitra 
                                        </a>
                                    </li> 


                                    <li class="child">
                                        <a href="/lokasipengajuanall" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-map-marker-alt mr-2"></i>Lokasi Pengajuan 
                                        </a>
                                    </li>
                                  
                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-envelope mr-2"></i>Email  
                                        </a>
                                    </li>
                                  
                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-newspaper mr-2"></i>Berita  
                                        </a>
                                    </li>

                                    <li class="child">
                                        <a href="/daftardonatur" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-users mr-2"></i>Donatur Lepas 
                                        </a>
                                    </li>

                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-users mr-2"></i>Donatur Tetap 
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            
                            
                            

                            <li class="parent">
                                <a href="#" onclick="toggle_menu('tables'); return false" class=""><i class="fab fa-ravelry mr-2"></i>
                                    <span class="none">Frontend Database<i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="tables">
                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-home mr-2"></i>Beranda
                                        </a>
                                    </li> 
                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-info-circle mr-2"></i>Tentang
                                        </a>
                                    </li> 

                                   
                                </ul>
                            </li>

                            <li class="parent">
                                <a href="#" onclick="toggle_menu('laporankeuangan'); return false" class=""><i class="fab fa-ravelry mr-2"></i>
                                    <span class="none">Laporan Keuangan<i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="laporankeuangan">
                                  
                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-money-bill mr-2"></i>Donatur Lepas 
                                        </a>
                                    </li>
                                    
                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-money-bill mr-2"></i>Donatur Tetap
                                        </a>
                                    </li>

                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-money-bill mr-2"></i>CSR Pemerintah
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            
                            <li class="parent">
                                <a href="" onclick="toggle_menu('kategorionasi'); return false" class=""><i class="fab fa-ravelry mr-2"></i>
                                    <span class="none">Donasi Kategori <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="kategorionasi">
                                  
                                    <li class="child">
                                        <a href="/halamandatakategori" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-database mr-2"></i>All Data 
                                        </a>
                                    </li>

                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-utensil-spoon mr-2"></i>Makan Gratis 
                                        </a>
                                    </li>
                                    
                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-hammer mr-2"></i>Infrastruktur
                                        </a>
                                    </li>

                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-stethoscope mr-2"></i>Kesehatan
                                        </a>
                                    </li>

                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-book mr-2"></i>Pendidikan
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            

                            
                            
                        
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('penarikandana'); return false" class=""><i class="fab fa-ravelry mr-2"></i>
                                    <span class="none">Penarikan Dana <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>

                                <ul class="children" id="penarikandana">
                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom  mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-download mr-2"></i>Tarik Dana Mitra
                                        </a>
                                    </li>

                                   
                                </ul>
                            </li>

                            <li class="parent">
                                <a href="#" onclick="toggle_menu('tables2'); return false" class=""><i class="fab fa-ravelry mr-2"></i>
                                    <span class="none">Proposal HaiuCare <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>

                                <ul class="children" id="tables2">
                                  
                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom  mb-2 rounded mr-4" style="text-align: left;">
                                            <i class="fas fa-book mr-2"></i> Indonesia                    
                                        </a>
                                    </li>
                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom  mb-2 rounded mr-4" style="text-align: left;">
                                            <i class="fas fa-book mr-2"></i> Inggris                   
                                        </a>
                                    </li>
                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom  mb-2 rounded mr-4" style="text-align: left;">
                                            <i class="fas fa-book mr-2"></i> Arab                    
                                        </a>
                                    </li>
                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom  mb-2 rounded mr-4" style="text-align: left;">
                                            <i class="fas fa-book mr-2"></i> Jepang          
                                        </a>
                                    </li>
                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom  mb-2 rounded mr-4" style="text-align: left;">
                                            <i class="fas fa-book mr-2"></i> Korea       
                                        </a>
                                    </li>
                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom  mb-2 rounded mr-4" style="text-align: left;">
                                            <i class="fas fa-book mr-2"></i> Jerman     
                                        </a>
                                    </li>
                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom  mb-2 rounded mr-4" style="text-align: left;">
                                            <i class="fas fa-book mr-2"></i> Francis      
                                        </a>
                                    </li>

                                  
                                </ul>
                            </li>
                        
                            
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('charts'); return false" class=""><i class="fa fa-pie-chart mr-2"></i>
                                    <span class="none">Business Intelligence <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="charts">
                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom  mb-2 rounded mr-4" style="text-align: left;">
                                            <i class="fa fa-cube mr-2"></i> Data Collections        
                                        </a>
                                    </li>
                                    
                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom  mb-2 rounded mr-4" style="text-align: left;">
                                            <i class="fa fa-cube mr-2"></i> Data Warehousing       
                                        </a>
                                    </li>
                                    
                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom  mb-2 rounded mr-4" style="text-align: left;">
                                            <i class="fa fa-cube mr-2"></i> Data Reporting       
                                        </a>
                                    </li>
                                    
                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom  mb-2 rounded mr-4" style="text-align: left;">
                                            <i class="fa fa-cube mr-2"></i> Bussiness Analysis       
                                        </a>
                                    </li>

                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom  mb-2 rounded mr-4" style="text-align: left;">
                                            <i class="fa fa-cube mr-2"></i> Big Data       
                                        </a>
                                    </li>

                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom  mb-2 rounded mr-4" style="text-align: left;">
                                            <i class="fa fa-cube mr-2"></i> Data Mining       
                                        </a>
                                    </li>

                                    <li class="child">
                                        <a href="/404" class="ml-4 btn btn-sn button-custom  mb-2 rounded mr-4" style="text-align: left;">
                                            <i class="fa fa-cube mr-2"></i> Human Resource       
                                        </a>
                                    </li>

                                </ul>
                            </li>



                           

                            <li class="parent">
                                <a href="/404" class=""><i class="fa fa-cogs mr-2"> </i>
                                    <span class="none">Settings </span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                    <!--Sidebar Naigation Menu-->
                </div>
            </div>
            <!--Sidebar left-->

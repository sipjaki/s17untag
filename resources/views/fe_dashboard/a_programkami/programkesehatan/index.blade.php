
@include('fe_dashboard.menu.header')


            <body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
                <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden pb-[134px]">
                    
                    <div style="display: flex; flex-direction: column; background-image: linear-gradient(to bottom, #f1f5f7, #d2d9f3); border-radius: 0 0 50px 50px; overflow: hidden;" class="header">
            
            <nav class="pt-5 px-3 flex justify-between items-center">
             
             <a href="/tentangkami">
                 <div class="flex items-center gap-[10px]">
                     <div class="w-10 h-10 flex shrink-0">
                        <img src="/assets/css/fe_css/images/tentangkami/tentangkamiah.png" alt="icon">
                    </div>
                    <div class="flex flex-col text-white">
                        {{-- <p class="text-xs leading-[18px]">Location</p> --}}
                        <p class="font-semibold text-sm" style="color: #000000">Tentang Kami</p>
                    </div>
                </div>
            </a>   
             
             <a href="/comingsoon">
                 <div class="flex items-center gap-[10px]">
                     <div class="w-10 h-10 flex shrink-0 text-white">
                        <img src="/assets/css/fe_css/images/tentangkami/tempatmakangratis.png" alt="icon">
                    </div>
                    <div class="flex flex-col text-white">
                        <p class="font-semibold text-sm" style="color: black" >Lokasi Rumah Sakit</p>
                    </div>
                </div>
            </a>   
             
             <a href="/haiucaresprogramkami">
                 <div class="flex items-center gap-[10px]">
                     <div class="w-10 h-10 flex shrink-0">
                        <img src="/assets/css/fe_css/images/tentangkami/listumkm.png" alt="icon">
                    </div>
                    <div class="flex flex-col text-white">
                        <p class="font-semibold text-sm" style="color: #000000">Program Kami</p>
                    </div>
                </div>
            </a>   
             
             
            </nav>

            <div class="mt-[30px] z-10">
                @if(auth()->check()) 
                            <!-- Jika pengguna sudah login -->
                            <h1 class="font-semibold leading-[36px] text-center" style="font-size: 18px; color:#000000;">Selamat Datang ! <span class="font-bold" style="color:white"> {{ auth()->user()->name }}</span></h1>
                        @else
                            <!-- Jika pengguna belum login -->
                            <h1 class="font-extrabold leading-[36px] text-white text-center" style="font-size: 18px; color:#000000">Haiu Care Indonesia<br></h1>
                        @endif
             
                 @if(auth()->check()) 
                            <!-- Jika pengguna sudah login -->
                            <h1 class="font-semibold leading-[36px] text-white text-center" style="font-size: 18px; color:#000000">Anda Adalah <span class="font-bold" style="color:white"> {{ auth()->user()->is_admin }}</span></h1>
                        @else
                            <!-- Jika pengguna belum login -->
                            <h1 class="font-extrabold leading-[36px] text-white text-center" style="font-size: 18px; color: black">Program Kesehatan <br></h1>
                        @endif

            </div>
            
            <div style="width: 30%; height: fit-content; overflow: hidden; margin-top: 1rem; margin-bottom: 2rem; margin-left: auto; margin-right: auto;">
                <img src="/assets/css/fe_css/images/programkami/kesehatan.png" class="width: 100%; height: 100%; object-fit: contain" alt="background">
            </div>


</div>


        {{-- ========================================= --}}
{{-- 
        <div id="best-choices" class="mt-8 -mb-6">
            <div class="px-4 flex justify-between items-center">
                <h2 class="font-bold text-sm">HaiuCare Indonesia <br>Kebaikan Untuk Sesama</h2>
                <a href="/daftarmitra" style="padding: 6px 12px; border-radius: 9999px; background-color: #E8E9EE; font-weight: bold; font-size:12px; text-decoration: none; color: #000000; transition: background-color 0.3s, color 0.3s;" class="rounded-full bg-[#E8E9EE] font-semibold text-sm">
                    <i class="fas fa-file" style="margin-right: 5px;"></i> Daftar Mitra
                  </a> --}}
                  
                  
                {{-- <a href="" class="p-[6px_12px] rounded-full bg-blue-500 hover:bg-stone-200 font-semibold text-sm text-white hover:text-stone-800">Daftar Mitra</a> --}}
            {{-- </div> --}}
            
            {{-- <div class="main-carousel" style="margin-top: 14px; display: flex; flex-direction: row; overflow-x: auto;">
                <div class="carousel-item" style="padding: 0 2px;">
                    <div class="carousel-content" style="border: 1px solid #E8E9EE; padding: 14px; width: 208px; border-radius: 1rem;">
                        <a href="/paymentgateways">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="assets/css/fe_css/images/programmakangratis/makangratiscileunyi.jpeg" class="w-full h-full object-cover" alt="assets/css/fe_css/images/programmakangratis/makangratiscileunyi.jpeg">
                            </div>
                            <div class="flex flex-col gap-[6px]">
                                <a  class="font-bold line-clamp-2 hover:line-clamp-none" style="font-size: 14px;">Makan Gratis Cileunyi, Bandung</a>
                                <p class="text-xs leading-[18px]">Target <span class="font-bold text-blue-500">Rp 25.000.000</span></p>
                            </div>
                            <progress id="fund" value="32" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress>
                        </a>
                    </div>
                </div>
            
                <div class="carousel-item" style="padding: 0 2px;">
                    <div class="carousel-content" style="border: 1px solid #E8E9EE; padding: 14px; width: 208px; border-radius: 1rem;">
                        <a href="/paymentgateways">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="assets/css/fe_css/images/programmakangratis/makangratiskopo.jpg" class="w-full h-full object-cover" alt="assets/css/fe_css/images/programmakangratis/makangratiskopo.jpg">
                            </div>
                            <div class="flex flex-col gap-[6px]">
                                <a class="font-bold line-clamp-2 hover:line-clamp-none" style="font-size: 14px;">Makan Gratis Kopo, Bandung</a>
                                <p class="text-xs leading-[18px]">Target <span class="font-bold text-blue-500">Rp 25.000.000</span></p>
                            </div>
                            <progress id="fund" value="32" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress>
                        </a>
                    </div>
                </div>
             
                <div class="carousel-item" style="padding: 0 2px;">
                    <div class="carousel-content" style="border: 1px solid #E8E9EE; padding: 14px; width: 208px; border-radius: 1rem;">
                        <a href="/paymentgateways">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="assets/css/fe_css/images/programmakangratis/makangratislembang.jpg" class="w-full h-full object-cover" alt="assets/css/fe_css/images/programmakangratis/makangratislembang.jpg">
                            </div>
                            <div class="flex flex-col gap-[6px]">
                                <a class="font-bold line-clamp-2 hover:line-clamp-none" style="font-size: 14px;">Makan Gratis Lembang, Bandung</a>
                                <p class="text-xs leading-[18px]">Target <span class="font-bold text-blue-500">Rp 25.000.000</span></p>
                            </div>
                            <progress id="fund" value="32" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress>
                        </a>
                    </div>
                </div>
                <div class="carousel-item" style="padding: 0 2px;">
                    <div class="carousel-content" style="border: 1px solid #E8E9EE; padding: 14px; width: 208px; border-radius: 1rem;">
                        <a href="/paymentgateways">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="assets/css/fe_css/images/programmakangratis/makangratisstasiunbandung.jpeg" class="w-full h-full object-cover" alt="assets/css/fe_css/images/programmakangratis/makangratisstasiunbandung.jpeg">
                            </div>
                            <div class="flex flex-col gap-[6px]">
                                <a class="font-bold line-clamp-2 hover:line-clamp-none" style="font-size: 14px;">Makan Gratis Stasiun Bandung, Bandung</a>
                                <p class="text-xs leading-[18px]">Target <span class="font-bold text-blue-500">Rp 25.000.000</span></p>
                            </div>
                            <progress id="fund" value="32" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress>
                        </a>
                    </div>
                </div>
             --}}
                <!-- Konten carousel selanjutnya disini -->
            {{-- </div> --}}
            

            
        </div>

        {{-- ======================================================================================== --}}
<br><br>        
        {{-- ===================================================================================================== --}}

        <div class="px-4 flex justify-between items-center mb-4">
            <h2 class="font-bold text-sm">Program Kesehatan<br>Yayasan Haiu Care Indonesia</h2>
            {{-- <a href="/lokasipengajuan" style="padding: 6px 12px; border-radius: 9999px; background-color: #E8E9EE; font-weight: bold; font-size:12px; text-decoration: none; color: #000000; transition: background-color 0.3s, color 0.3s;" class="rounded-full bg-[#E8E9EE] font-semibold text-sm">
               <i class="fas fa-utensil-spoon" style="margin-right: 5px;"></i> Ajukan Lokasi
              </a> --}}
            
              
            {{-- <a href="" class="p-[6px_12px] rounded-full bg-blue-500 hover:bg-stone-200 font-semibold text-sm text-white hover:text-stone-800">Daftar Mitra</a> --}}
        </div>
        <br>
                <div id="popular-fundrising" class="mt-4" style="display: flex; overflow-x: auto;">
                    
                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="/comingsoon" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="/assets/css/fe_css/images/menupilihan/programkesehatan/distribusiobatobatan.png" alt="icon" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center; font-size:14px">Distribusi Obat-obatan</span>
                        </a>
                    </div>
                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="/comingsoon" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="/assets/css/fe_css/images/menupilihan/programkesehatan/mitrakesehatan.png" alt="icon" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center; font-size:14px">Mitra Kesehatan</span>
                        </a>
                    </div>
                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="/comingsoon" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="/assets/css/fe_css/images/menupilihan/programkesehatan/laporanpenerimamanfaat.png" alt="icon" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center; font-size:14px">Laporan Distribusi </span>
                        </a>
                    </div>

                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="/comingsoon" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="/assets/css/fe_css/images/menupilihan/programkesehatan/daftarbantuan.png" alt="icon" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center; font-size:14px">Bantuan</span>
                        </a>
                    </div>

                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="/comingsoon" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="/assets/css/fe_css/images/menupilihan/programkesehatan/obatobatan.png" alt="icon" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center; font-size:14px">Obat-obatan</span>
                        </a>
                    </div>
                    
                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="/comingsoon" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="/assets/css/fe_css/images/menupilihan/programkesehatan/dokter.png" alt="icon" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center; font-size:14px">Daftar Dokter</span>
                        </a>
                    </div>
                    
                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="/comingsoon" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="/assets/css/fe_css/images/menupilihan/programkesehatan/daftarpasien.png" alt="icon" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center; font-size:14px">Daftar Pasien</span>
                        </a>
                    </div>
                    
                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="/comingsoon" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="/assets/css/fe_css/images/menupilihan/programkesehatan/newlokasipengajuan.png" alt="icon" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center; font-size:14px">Lokasi Pengajuan</span>
                        </a>
                    </div>
                    
                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="/comingsoon" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="/assets/css/fe_css/images/menupilihan/programkesehatan/kesehatanmitra.png" alt="icon" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center; font-size:14px">Mitra Kesehatan</span>
                        </a>
                    </div>
                    
                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="/comingsoon" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="/assets/css/fe_css/images/menupilihan/programkesehatan/unitkendaraan.png" alt="icon" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center; font-size:14px">Unit Kendaraan</span>
                        </a>
                    </div>
                    
                          <!-- Tambahkan div lainnya di sini dengan gaya yang sama -->
                </div>

                
                {{-- =============================================================================== --}}
        
                {{-- <div id="popular-fundrising" class="mt-8">
                    <div class="px-4 popular-link" style="display: flex; justify-content: center; align-items: center;">
                      <a href="/comingsoon" style="display: flex; align-items: center; padding: 4px 12px; margin: 0 12px 12px 0; border-radius: 9999px; background-color: #3b82f6; font-weight: bold; font-size: 0.875rem; color: #fff; transition: background-color 0.3s, color 0.3s; font-size:12px">
                        <img src="assets/css/fe_css/images/icons/kontributors.svg" alt="icon" style="width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;">
                        Kontributors
                      </a>
                      <a href="/comingsoon" style="display: flex; align-items: center; padding: 4px 12px; margin: 0 12px 12px 0; border-radius: 9999px; background-color: #3b82f6; font-weight: bold; font-size: 0.875rem; color: #fff; transition: background-color 0.3s, color 0.3s; font-size:12px">
                        <img src="assets/css/fe_css/images/icons/distribusi.svg" alt="icon" style="width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;">
                         Distribusi
                      </a>
                      <a href="/comingsoon" style="display: flex; align-items: center; padding: 4px 12px; margin: 0 12px 12px 0; border-radius: 9999px; background-color: #3b82f6; font-weight: bold; font-size: 0.875rem; color: #fff; transition: background-color 0.3s, color 0.3s; font-size:12px">
                        <img src="assets/css/fe_css/images/icons/star.svg" alt="icon" style="width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;">
                        Awwards
                      </a>
                    </div>
                    <div class="px-4 popular-link mt-4" style="display: flex; justify-content: center; align-items: center;">
                      <a href="/tentangkami" style="display: flex; align-items: center; padding: 4px 12px; margin: 0 12px 12px 0; border-radius: 9999px; background-color: #3b82f6; font-weight: bold; font-size: 0.875rem; color: #fff; transition: background-color 0.3s, color 0.3s; font-size:12px">
                        <img src="assets/css/fe_css/images/icons/star.svg" alt="icon" style="width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;">
                        Tentang Kami
                      </a>
                      <a href="/comingsoon" style="display: flex; align-items: center; padding: 4px 12px; margin: 0 12px 12px 0; border-radius: 9999px; background-color: #3b82f6; font-weight: bold; font-size: 0.875rem; color: #fff; transition: background-color 0.3s, color 0.3s; font-size:12px">
                        <img src="assets/css/fe_css/images/icons/star.svg" alt="icon" style="width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;">
                        Kontak Kami
                      </a>
                    </div>
                  </div>
                   --}}

                      
                <div style="margin-top:2rem; display: flex; flex-direction: column; gap: 10px; padding: 5px; border-radius: 20px; background-image: linear-gradient(to bottom, #f1f5f7, #d2d9f3); ">
                      
                    <h2 class="font-bold text-sm" style="margin-left: 10px; font-size:14px; margin-top:20px; text-align:center" >Program Kesehatan</h2>
                    <div class="aspect-[61/30] rounded bg-[#D9D9D9] overflow-hidden" style="padding: 20px 20px; background-image: linear-gradient(to bottom, #f1f5f7, #d2d9f3); ">
                        <img src="/assets/css/fe_css/images/menupilihan/programkesehatan/bajuprogramkesehatan.jpg" class="w-full h-full object-cover" alt="thumbnail">
                        {{-- <img src="{{ asset($data->gambar)}}" class="w-full h-full object-cover" alt="thumbnail"> --}}
                    </div>
                    <p class="text-sm leading-[26px] font-semibold line-clamp-1 hover:line-clamp-none" style="text-align: center; margin-left:10px; color:black; margin-top:5px; margin-bottom:20px; margin-right:10px;">Keterangan : <br>

                        {{-- "Dengan penuh tanggung jawab, kami dengan gembira mengumumkan bahwa bantuan yang diberikan oleh para donatur telah berhasil kami salurkan dalam program kesehatan. Melalui upaya kolaboratif kami dengan berbagai lembaga kesehatan dan relawan, kami telah berhasil menyediakan layanan kesehatan kepada mereka yang membutuhkan, terutama yang terdampak langsung oleh masalah kesehatan atau krisis medis. Dengan dukungan yang berkelanjutan dari para donatur, kami berharap dapat terus memperluas cakupan program ini dan memberikan bantuan kesehatan yang lebih besar kepada mereka yang membutuhkan dalam komunitas kami." --}}
                   "Segera Hadir"
                    </div>
                
                
        
                  @include('fe_dashboard.menu.android')
                  
                </div>
            </div>
            @include('fe_dashboard.menu.menufooter')
            {{-- @include('fe_dashboard.menu.android') --}}
        

    </section>
    
    @include('fe_dashboard.menu.footer')

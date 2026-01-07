@include('fe_dashboard.menu.header')
<body class="font-poppins text-[#292E4B] bg-[#7ca4ce]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden pb-[134px]">
        <div style="display: flex; flex-direction: column; background-image: linear-gradient(to bottom, #2fb7da, #1539b1); border-radius: 0 0 50px 50px; overflow: hidden;" class="header">
             
            
            <nav class="pt-5 px-3 flex justify-between items-center relative z-20">
                <div class="w-10 h-10 flex shrink-0">
                    <a href="javascript:history.back()">
                        <img src="/assets/css/fe_css/images/icons/menuandroid/homehaiu.png" alt="icon">
                    </a>
                        {{-- <p class="font-semibold text-sm" >HaiuCare Bangun Indonesia</p> --}}
                </div>
                <div class="flex flex-col items-center text-center">
                    <p class="text-xs leading-[18px] text-white" style="font-size: 14px;">Lokasi Pengajuan</p>
                    <p class="font-semibold text-sm text-white">#makangratis</p>
                </div>

                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show col-lg-12 font-semibold" role="alert" style="margin-top: 100px: text-align:center">
                    <div class="alert alert-success alert-dismissible fade show col-lg-12 font-semibold text-center" role="alert" style="background-color: #28a745; color: #fff; font-weight: 600; padding: 0.35em 0.5em; border-radius: 0.25rem; ">
                        <strong class="font-semibold">{{ session('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            {{-- Check for delete message --}}
            @elseif(session()->has('delete'))
                <div class="alert alert-danger alert-dismissible fade show col-lg-12" role="alert">
                    <strong>{{ session('delete') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            {{-- Check for update message --}}
            @elseif(session()->has('update'))
                <div class="alert alert-warning alert-dismissible fade show col-lg-12" role="alert">
                    <strong>{{ session('update') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            </nav>

               <div class="mt-[0px] z-10">
                   {{-- <h1 class="font-extrabold text-2xl leading-[36px] text-white text-center" style="font-size:20px">HaiuCare Bangun Indonesia<br></h1> --}}
                   {{-- <h4 class="font-extrabold text-xl leading-[36px] text-white text-center" style="font-size: 18px">HaiuCare Bangun Indonesia</h4> --}}
                   <h4 class="font-extrabold text-xl leading-[36px] text-white text-center" style="font-size: 17px">Program Makan Gratis</h4>
               </div>
               
               <div style="width: 45%; height: fit-content; overflow: hidden; margin-top: 0.25rem; margin-bottom: 1rem; margin-left: auto; margin-right: auto;">
                   <img src="/assets/css/fe_css/images/tentangkami/pengajuanlokasibaru.png" class="width: 100%; height: 100%; object-fit: contain" alt="background">
               </div>
                    {{-- <a href="/lokasipengajuannew"> --}}
                        <div style="margin-top: 0.5rem; margin-bottom: 1rem;">
                            <div style="text-align: center;">
                                <button style="padding: 8px 12px; border-radius: 9999px; background-color: silver; font-weight: bold; font-size: 0.875rem; text-decoration: none; color: #000000; transition: background-color 0.3s, color 0.3s; border: none;">
                                    <i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i>Ajukan Lokasi
                                </button>
                            </div>
                        {{-- </a> --}}
                
              </div>
            
   
        </div>

        <div class="flex flex-col gap-4 px-4">

            {{-- @foreach ($data_tentangkami as $data) --}}
                
            {{-- <a href="/tentangkami" class="card"> --}}
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom,  rgb(6, 45, 200), rgb(217, 219, 236)); margin-top:10px;">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="/assets/css/fe_css/images/lokasi/cileunyi.jpg" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                        <a href="">
                            <p class="font-bold text-white border-spacing-5" style="font-size: 17px;">Wilayah Sekitar Cileunyi, Kab Bandung <span style="text-align:center; margin-left:20px; margin-bottom:10px; display: inline-block; padding: 5px 10px; font-weight: bold; font-size: 15px; color: #f5f0f0; border-radius: 9999px; width:100px; background-color: #09e71b; line-height: 18px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#000000'; this.style.color='#fff';"><i class="fas fa-file"></i> Data</span></p>
                        </a>
                        <p class="font-semibold line-clamp-1 hover:line-clamp-none text-green-300" style="font-size: 17px; color: white"><i class="fas fa-users" style="margin-right: 10px;"></i> <span style="color:rgb(6, 45, 200); margin-right:10px;"></span>Participant</p>
                        
                        <a href="https://www.google.co.id/maps/search/Sicepat+Bandung+Cileunyi+Cileunyi/@-6.9385406,107.7183637,14z/data=!3m1!4b1?entry=ttu">
                            <p class="font-semibold line-clamp-1 hover:line-clamp-none text-green-300 underline" style="font-size: 17px; color: blue; "><i class="fas fa-map-marker-alt" style="margin-right: 10px; color:rgb(6, 45, 200)"></i> Maps</p>
                        </a>
                      
                    </div>
                </div>
            {{-- </a> --}}

            {{-- <a href="/tentangkami" class="card"> --}}
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom,  rgb(6, 45, 200), rgb(217, 219, 236)); margin-top:10px;">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="/assets/css/fe_css/images/lokasi/kopo.jpg" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                        <a href="">
                            <p class="font-bold text-white border-spacing-5" style="font-size: 17px;">Wilayah Sekitar Kopo, Kota Bandung <span style="text-align:center; margin-left:40px; margin-bottom:10px; display: inline-block; padding: 5px 10px; font-weight: bold; font-size: 15px; color: #f5f0f0; border-radius: 9999px; width:100px; background-color: #09e71b; line-height: 18px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#000000'; this.style.color='#fff';"><i class="fas fa-file"></i> Data</span></p>
                        </a>
                        <p class="font-semibold line-clamp-1 hover:line-clamp-none text-green-300" style="font-size: 17px; color: white"><i class="fas fa-users" style="margin-right: 10px;"></i> <span style="color:rgb(6, 45, 200); margin-right:10px;">35</span>Participant</p>
                      
                        <a href="https://www.google.co.id/maps/place/Kopo,+Kec.+Bojongloa+Kaler,+Kota+Bandung,+Jawa+Barat/@-6.9413164,107.5832861,16z/data=!3m1!4b1!4m6!3m5!1s0x2e68e8bafb20e399:0x398f189387e8a52d!8m2!3d-6.9406515!4d107.5875009!16s%2Fg%2F1225qq88?entry=ttu">
                            <p class="font-semibold line-clamp-1 hover:line-clamp-none text-green-300 underline" style="font-size: 17px; color: blue; "><i class="fas fa-map-marker-alt" style="margin-right: 10px; color:rgb(6, 45, 200)"></i> Maps</p>
                        </a>
                      
                    </div>
                </div>
            {{-- </a> --}}
            

            {{-- <a href="/tentangkami" class="card"> --}}
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom,  rgb(6, 45, 200), rgb(217, 219, 236)); margin-top:10px;">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="/assets/css/fe_css/images/lokasi/lembang.jpg" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                        <a href="">
                            <p class="font-bold text-white border-spacing-5" style="font-size: 17px;">Wilayah Sekitar Lembang, Kab Bandung <span style="text-align:center; margin-left:10px; margin-bottom:10px; display: inline-block; padding: 5px 10px; font-weight: bold; font-size: 15px; color: #f5f0f0; border-radius: 9999px; width:100px; background-color: #09e71b; line-height: 18px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#000000'; this.style.color='#fff';"><i class="fas fa-file"></i> Data</span></p>
                        </a>
                        <p class="font-semibold line-clamp-1 hover:line-clamp-none text-green-300" style="font-size: 17px; color: white"><i class="fas fa-users" style="margin-right: 10px;"></i> <span style="color:rgb(6, 45, 200); margin-right:10px;">3545</span>Participant</p>
                        <a href="https://www.google.co.id/maps/place/Lembang,+Kec.+Lembang,+Kabupaten+Bandung+Barat,+Jawa+Barat/@-6.8193588,107.5708648,12z/data=!3m1!4b1!4m6!3m5!1s0x2e68e103befbd76d:0x1bb5bfc79b0edef1!8m2!3d-6.8145434!4d107.6229532!16s%2Fg%2F1q6j8dhnn?entry=ttu">
                            <p class="font-semibold line-clamp-1 hover:line-clamp-none text-green-300 underline" style="font-size: 17px; color: blue; "><i class="fas fa-map-marker-alt" style="margin-right: 10px; color:rgb(6, 45, 200)"></i> Maps</p>
                        </a>
                      
                    </div>
                </div>
            {{-- </a> --}}
            
            {{-- <a href="/tentangkami" class="card"> --}}
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom,  rgb(6, 45, 200), rgb(217, 219, 236)); margin-top:10px;">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="/assets/css/fe_css/images/lokasi/stasiunbandung.jpg" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                        <a href="">
                            <p class="font-bold text-white border-spacing-5" style="font-size: 17px;">Wilayah St. Bandung, Kota Bandung <span style="text-align:center; margin-left:50px; margin-bottom:10px; display: inline-block; padding: 5px 10px; font-weight: bold; font-size: 15px; color: #f5f0f0; border-radius: 9999px; width:100px; background-color: #09e71b; line-height: 18px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#000000'; this.style.color='#fff';"><i class="fas fa-file"></i> Data</span></p>
                        </a>
                        <p class="font-semibold line-clamp-1 hover:line-clamp-none text-green-300" style="font-size: 17px; color: white"><i class="fas fa-users" style="margin-right: 10px;"></i> <span style="color:rgb(6, 45, 200); margin-right:10px;">354</span>Participant</p>
                        <a href="https://www.google.co.id/maps/place/Stasiun+Bandung/@-6.9146466,107.6001845,18z/data=!4m10!1m2!2m1!1sstasiun+bandung!3m6!1s0x2e68e63c69908701:0x34c1c07f21617455!8m2!3d-6.9146466!4d107.6024376!15sCg9zdGFzaXVuIGJhbmR1bmeSAQ10cmFpbl9zdGF0aW9u4AEA!16s%2Fm%2F05zpkdx?entry=ttu">
                            <p class="font-semibold line-clamp-1 hover:line-clamp-none text-green-300 underline" style="font-size: 17px; color: blue; "><i class="fas fa-map-marker-alt" style="margin-right: 10px; color:rgb(6, 45, 200)"></i> Maps</p>
                        </a>
                      
                    </div>
                </div>
            {{-- </a> --}}
            

         
            {{-- @endforeach --}}
            
            
        </div>

             
        @include('fe_dashboard.menu.menufooter')

        {{-- @include('fe_dashboard.menu.enter') --}}


        @include('fe_dashboard.menu.android')

        

    </section>


    @include('fe_dashboard.menu.footer')
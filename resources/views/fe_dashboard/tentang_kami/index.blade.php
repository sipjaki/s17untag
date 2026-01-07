@include('fe_dashboard.menu.header')
<body class="font-poppins text-[#292E4B] bg-[#7ca4ce]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden pb-[134px]">
        <div style="display: flex; flex-direction: column; background-image: linear-gradient(to bottom, #2abaeb, #1539b1);  border-radius: 0 0 50px 50px; overflow: hidden;" class="header">
             
            
            <nav class="pt-5 px-3 flex justify-between items-center relative z-20">
                <div class="w-10 h-10 flex shrink-0">
                    <a href="javascript:history.back()">
                        <img src="/assets/css/fe_css/images/tentangkami/homeback.png" alt="icon">
                    </a>
                        {{-- <p class="font-semibold text-sm" >HaiuCare Bangun Indonesia</p> --}}
                </div>
                <div class="flex flex-col items-center text-center">
                    {{-- <p class="text-xs leading-[18px] text-white" style="font-size: 14px;">Mitra UMKM</p> --}}
                    <p class="font-semibold text-sm text-white">#makangratis</p>
                </div>

            </nav>

               <div class="mt-[0px] z-10">
                   {{-- <h1 class="font-extrabold text-2xl leading-[36px] text-white text-center" style="font-size:20px">HaiuCare Bangun Indonesia<br></h1> --}}
                   <h4 class="font-extrabold text-xl leading-[36px] text-white text-center" style="font-size: 18px">HaiuCare Bangun Indonesia</h4>
                   <h4 class="font-extrabold text-xl leading-[36px] text-white text-center" style="font-size: 14px">Tentang Kami</h4>
               </div>
               
               <div style="width: 45%; height: fit-content; overflow: hidden; margin-top: 0.25rem; margin-bottom: 1rem; margin-left: auto; margin-right: auto;">
                   <img src="/assets/css/fe_css/images/tentangkami/newtentangkami.png" class="width: 100%; height: 100%; object-fit: contain" alt="background">
               </div>
   
        </div>




        <div class="flex flex-col gap-4 px-4">

            @foreach ($data_tentangkami as $data)
                
            <a href="/tentangkami" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, #2abaeb, #1539b1);  margin-top:10px;">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="/assets/css/fe_css/images/logohaiucare/logohaiucareindonesia.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                        <p class="font-semibold text-white border-spacing-5"><i class="fas fa-home"></i>  Nama Yayasan </p>
                        <p class="font-semibold line-clamp-1 hover:line-clamp-none text-white">{{ $data->nama_perusahaan}}</p>
                        {{-- <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 55.000.000</span></p> --}}
                        {{-- <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                            <p class="font-semibold sm:font-medium text-xs leading-[18px]">Putra Bangsa</p>
                            <div class="flex shrink-0">
                                <img src="assets/images/icons/tick-circle.svg" alt="icon">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </a>
            
            <a href="#" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, #2abaeb, #1539b1);  margin-top:5px;">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="/assets/css/fe_css/images/logohaiucare/logohaiucareindonesia.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                        <p class="font-semibold text-white border-spacing-5"><i class="fas fa-newspaper"></i> Deskripsi</p>
                        <p class="font-semibold line-clamp-1 hover:line-clamp-none text-white" style="text-align:justify">{{ $data->deskripsi}}</p>
                        {{-- <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 55.000.000</span></p> --}}
                        {{-- <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                            <p class="font-semibold sm:font-medium text-xs leading-[18px]">Putra Bangsa</p>
                            <div class="flex shrink-0">
                                <img src="assets/images/icons/tick-circle.svg" alt="icon">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </a>

         
            <a href="#" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, #2abaeb, #1539b1); margin-top:5px;">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="/assets/css/fe_css/images/logohaiucare/logohaiucareindonesia.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                        <p class="font-semibold text-white border-spacing-5"><i class="fas fa-calendar"></i> Berdiri</p>
                        <p class="font-semibold line-clamp-1 hover:line-clamp-none text-white" style="text-align:justify">{{ $data->berdiri}}</p>
                        {{-- <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 55.000.000</span></p> --}}
                        {{-- <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                            <p class="font-semibold sm:font-medium text-xs leading-[18px]">Putra Bangsa</p>
                            <div class="flex shrink-0">
                                <img src="assets/images/icons/tick-circle.svg" alt="icon">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </a>
            
            <a href="#" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, #2abaeb, #1539b1);  margin-top:5px;">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="/assets/css/fe_css/images/logohaiucare/logohaiucareindonesia.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>

                    <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                        <p class="font-semibold text-white border-spacing-5" style="margin-bottom: 10px;"><i class="fas fa-user"></i> Founder</p>
                        {{-- <p class="font-semibold line-clamp-1 hover:line-clamp-none text-green-300" style="text-align:justify">{{ $data->founder}}</p>
                        <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 55.000.000</span></p> --}}
                        <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                            <div class="w-20 h-20 flex items-center justify-center overflow-hidden rounded-full" style="width: 100px; height: 100px;">
                                <img src="/assets/css/fe_css/images/founder/new2.jpg" alt="icon" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <p class="font-semibold text-xs leading-[18px] text-white" style="margin-left: 10px;">Yogi Maxy Antony, ST., MA., MSE</p>
                            
                        </div>

                        <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                            <p class="font-bold text-xs leading-[18px] text-white" style="margin-right: 10px;">Sigit Dwi Prasetyo, ST</p>
                            <div class="w-20 h-20 flex items-center justify-center overflow-hidden rounded-full" style="width: 100px; height: 100px;">
                                <img src="/assets/css/fe_css/images/founder/omsigit.jpg" alt="icon" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            
                        </div>

                        <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                            <div class="w-20 h-20 flex items-center justify-center overflow-hidden rounded-full" style="width: 100px; height: 100px;">
                                <img src="/assets/css/fe_css/images/founder/sigit.jpg" alt="icon" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <p class="font-bold text-xs leading-[18px] text-white" style="margin-left: 10px;">Sigit Septiadi, ST</p>
                            
                        </div>

                        
                    </div>
                </div>
            </a>

         
         
            <a href="#" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, #2abaeb, #1539b1);  margin-top:5px;">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="/assets/css/fe_css/images/logohaiucare/logohaiucareindonesia.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                        <p class="font-semibold text-white border-spacing-5"><i class="fas fa-road"></i> Alamat</p>
                        <p class="font-semibold line-clamp-1 hover:line-clamp-none text-white" style="text-align:justify">{{ $data->alamat}}</p>
                        {{-- <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 55.000.000</span></p> --}}
                        {{-- <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                            <p class="font-semibold sm:font-medium text-xs leading-[18px]">Putra Bangsa</p>
                            <div class="flex shrink-0">
                                <img src="assets/images/icons/tick-circle.svg" alt="icon">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </a>

         
            <a href="#" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, #2abaeb, #1539b1);  margin-top:5px;">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="/assets/css/fe_css/images/logohaiucare/logohaiucareindonesia.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                        <p class="font-bold text-white border-spacing-5"><i class="fas fa-envelope"></i> Email</p>
                        <p class="font-semibold line-clamp-1 hover:line-clamp-none text-white" style="text-align:justify">{{ $data->email}}</p>
                        {{-- <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 55.000.000</span></p> --}}
                        {{-- <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                            <p class="font-semibold sm:font-medium text-xs leading-[18px]">Putra Bangsa</p>
                            <div class="flex shrink-0">
                                <img src="assets/images/icons/tick-circle.svg" alt="icon">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </a>

            <a href="#" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, #2abaeb, #1539b1);  margin-top:5px;">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="/assets/css/fe_css/images/logohaiucare/logohaiucareindonesia.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                        <p class="font-bold text-white border-spacing-5"><i class="fas fa-phone "></i> Telepon</p>
                        <p class="font-semibold line-clamp-1 hover:line-clamp-none text-white" style="text-align:justify"><a href="https://wa.me/6282129208716">+6282129208716</a></p>
                        {{-- <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 55.000.000</span></p> --}}
                        {{-- <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                            <p class="font-semibold sm:font-medium text-xs leading-[18px]">Putra Bangsa</p>
                            <div class="flex shrink-0">
                                <img src="assets/images/icons/tick-circle.svg" alt="icon">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </a>

            <a href="https://haiucares.com" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, #2abaeb, #1539b1);  margin-top:5px;">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="/assets/css/fe_css/images/logohaiucare/logohaiucareindonesia.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                        <p class="font-bold text-white border-spacing-5"><i class="fas fa-cogs"></i> Website</p>
                        <p class="font-semibold line-clamp-1 hover:line-clamp-none text-white" style="text-align:justify">{{ $data->website}}</p>
                        {{-- <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 55.000.000</span></p> --}}
                        {{-- <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                            <p class="font-semibold sm:font-medium text-xs leading-[18px]">Putra Bangsa</p>
                            <div class="flex shrink-0">
                                <img src="assets/images/icons/tick-circle.svg" alt="icon">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </a>

            <a href="" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, #2abaeb, #1539b1);  margin-top:5px;">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="/assets/css/fe_css/images/logohaiucare/logohaiucareindonesia.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                        <p class="font-bold text-white border-spacing-5"><i class="fas fa-building"></i> Industri</p>
                        <p class="font-semibold line-clamp-1 hover:line-clamp-none text-white" style="text-align:justify">{{ $data->industri}}</p>
                        {{-- <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 55.000.000</span></p> --}}
                        {{-- <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                            <p class="font-semibold sm:font-medium text-xs leading-[18px]">Putra Bangsa</p>
                            <div class="flex shrink-0">
                                <img src="assets/images/icons/tick-circle.svg" alt="icon">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </a>

         
            @endforeach
            
            
        </div>

             
        @include('fe_dashboard.menu.menufooter')

        {{-- @include('fe_dashboard.menu.enter') --}}


        @include('fe_dashboard.menu.android')

        

    </section>


    @include('fe_dashboard.menu.footer')
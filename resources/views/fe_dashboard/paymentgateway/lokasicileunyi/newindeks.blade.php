@include('fe_dashboard.menu.header')


{{-- <body class="font-poppins text-[#292E4B] bg-[#7ca4ce]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden pb-[134px]">
        <div style="display: flex; flex-direction: column; background-image: linear-gradient(to bottom, #2fb7da, #1539b1); border-radius: 0 0 50px 50px; overflow: hidden;" class="header"> --}}


{{-- <body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-[#FCF7F1] overflow-x-hidden">
        <div class="header flex flex-col overflow-hidden h-[220px] relative"> --}}
            <body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
                <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden">
                    {{-- <div class="header flex flex-col bg-[#56BBC5] overflow-hidden h-[350px] relative -mb-[92px]"> --}}
                        
                    
                    <div class="flex flex-col z-30">
                        {{-- <div id="status" class="w-full h-[92px] bg-[#FF7815] rounded-t-[40px] pt-3 pb-[50px] flex gap-2 justify-center items-center -mb-[38px]">
                            <div class="w-[30px] h-[30px] flex shrink-0">
                                <img src="assets/images/icons/lovely.svg" alt="icon">
                            </div>
                            
                            {{-- <p class="font-semibold text-sm text-white">{{ $data->daftarmitrarumahmakann->namarumahmakan}}</p> --}}
                        </div> 
                        {{-- --}} 
                        {{-- @endforeach --}}
        </div>


        <div class="flex flex-col z-30">
            <div id="content" class="w-full min-h-[calc(100vh-220px)] h-full bg-white rounded-t-[40px] flex flex-col gap-[30px] p-[30px_24px_30px]">
                {{-- <h1 class="text-center font-extrabold text-[24px] leading-[36px]">Pilih Donasi Kamu</h1> --}}
                
                    <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, rgb(6, 45, 220), rgb(217, 219, 236)); margin-top:5px;">
                        <div class="w-10 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                            <img src="/assets/css/fe_css/images/logohaiucare/logohaiucareindonesia.png" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                        <div class="flex flex-col gap-1" style="margin-left: 5px; font-size:12px;">
                            {{-- <p class="font-bold text-white border-spacing-5">Industri</p> --}}
                            {{-- <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px;">Daftar Menu Makanan : <span style="font-size: 14px; color: white;"><a href="">Klik Here</a></span></p>  --}}
                            <a href="/daftarmenu">
                                <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px;">Daftar Menu Makanan : <span style="display: inline-block; padding: 2px 18px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:100px; background-color: #babd0c; line-height: 18px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#000000';" onmouseout="this.style.backgroundColor='#00000'; this.style.color='#fff';">Click Here</span></p> 
                            </a>
                            {{-- <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px;">Nama Pemilik : <span style="font-size: 14px; color: white;">{{ $data->daftarmitrarumahmakann->nama_pemilik}}</span></p>  --}}
                            {{-- <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px;">Rumah Makan : <span style="font-size: 14px; color: black;">{{ $data->daftarmitrarumahmakann->namarumahmakan}}</span></p>  --}}
                            {{-- <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px;">Alamat : <span style="font-size: 14px; color: black;">{{ $data->daftarmitrarumahmakann->alamat_rumahmakan}}</span></p>  --}}
                            {{-- <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px;">Telepon : <span style="font-size: 14px; color: white;">{{ $data->daftarmitrarumahmakann->telepon}}</span></p>  --}}
                            {{-- <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px;">Email : <span style="font-size: 14px; color: black;">{{ $data->daftarmitrarumahmakann->email}}</span></p>  --}}
                            {{-- <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px; text-align:justify;">Keterangan : <span style="font-size: 14px; color: black;">{{ $data->daftarmitrarumahmakann->deskripsi}}</span></p>  --}}
                        </div>
                    </div>
                
                <div class="flex flex-col gap-4 px-4">
                
                    
                    <div class="card" style="margin-top: 10px; margin-bottom:10px;">
                        <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl bg-white" style="background-image: linear-gradient(to bottom, rgb(34, 182, 231), rgb(28, 50, 219)); margin-top:5px;">
                            
                            <div class="badge" style="display: inline-block; border-radius: 4px; overflow: hidden; width: 100%; text-align: center; margin-top:10px;">
                                {{-- <a href="#" class="button" style="width:100%; display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; font-weight: bold; border-radius: 4px; transition: background-color 0.3s ease;">Donasi Sepuasnya</a> --}}
                                <a style="width: 100%" href="/404" class="flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">
                                    <div class="flex shrink-0 overflow-hidden" style="width: 20%;" >
                                        <img src="/assets/css/fe_css/images/icons/menuandroid/appdonasi.png" alt="icon">
                                    </div>
                                    <p class="font-bold" style="font-size: 18px; color: white">Donasi Sepuasnya</p>
                                    {{-- <span class="font-bold text-lg" style="display: inline-block; padding: 2px 22px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:130px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align:center;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">Rp 10.000</span> --}}
                                <input style="text-align: center;" type="text" placeholder="Click Here" class="rounded-full">
                                </a>
                            </div>
                            
                            </div>
                        </div>
                </div>

                
                
                <div class="grid grid-cols-2 w-fit mx-auto justify-center gap-[30px]">
                    
                    <a href="https://app.midtrans.com/payment-links/1717859553840" class="w-[150px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">
                        <div class="w-10 h-10 flex shrink-0 overflow-hidden">
                            <img src="/assets/css/fe_css/images/icons/menuandroid/appdonasi.png" alt="icon">
                        </div>
                        <span class="font-bold text-lg" style="display: inline-block; padding: 2px 22px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:130px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align:center;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">Rp 10.000</span>
                    </a>
                    
                    <a href="https://app.midtrans.com/payment-links/1717859795456" class="w-[150px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">
                        <div class="w-10 h-10 flex shrink-0 overflow-hidden">
                            <img src="/assets/css/fe_css/images/icons/menuandroid/appdonasi.png" alt="icon">
                        </div>
                        <span class="font-bold text-lg" style="display: inline-block; padding: 2px 22px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:130px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align:center;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">Rp 20.000</span>
                    </a>
                    
                    <a href="https://app.midtrans.com/payment-links/1717859890820" class="w-[150px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">
                        <div class="w-10 h-10 flex shrink-0 overflow-hidden">
                            <img src="/assets/css/fe_css/images/icons/menuandroid/appdonasi.png" alt="icon">
                        </div>
                        <span class="font-bold text-lg" style="display: inline-block; padding: 2px 22px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:130px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align:center;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">Rp 30.000</span>
                    </a>
                    
                    <a href="https://app.midtrans.com/payment-links/1717859970519" class="w-[150px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">
                        <div class="w-10 h-10 flex shrink-0 overflow-hidden">
                            <img src="/assets/css/fe_css/images/icons/menuandroid/appdonasi.png" alt="icon">
                        </div>
                        <span class="font-bold text-lg" style="display: inline-block; padding: 2px 22px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:130px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align:center;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">Rp 40.000</span>
                    </a>
                    
                    <a href="https://app.midtrans.com/payment-links/1717860037226" class="w-[150px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">
                        <div class="w-10 h-10 flex shrink-0 overflow-hidden">
                            <img src="/assets/css/fe_css/images/icons/menuandroid/appdonasi.png" alt="icon">
                        </div>
                        <span class="font-bold text-lg" style="display: inline-block; padding: 2px 22px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:130px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align:center;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">Rp 50.000</span>
                    </a>
                    
                    <a href="https://app.midtrans.com/payment-links/1717860094045" class="w-[150px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">
                        <div class="w-10 h-10 flex shrink-0 overflow-hidden">
                            <img src="/assets/css/fe_css/images/icons/menuandroid/appdonasi.png" alt="icon">
                        </div>
                        <span class="font-bold text-lg" style="display: inline-block; padding: 2px 22px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:130px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align:center;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">Rp 60.000</span>
                    </a>


                    <a href="https://app.midtrans.com/payment-links/1717860154828" class="w-[150px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">
                        <div class="w-10 h-10 flex shrink-0 overflow-hidden">
                            <img src="/assets/css/fe_css/images/icons/menuandroid/appdonasi.png" alt="icon">
                        </div>
                        <span class="font-bold text-lg" style="display: inline-block; padding: 2px 22px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:130px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align:center;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">Rp 70.000</span>
                    </a>
                    <a href="https://app.midtrans.com/payment-links/1717860211055" class="w-[150px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">
                        <div class="w-10 h-10 flex shrink-0 overflow-hidden">
                            <img src="/assets/css/fe_css/images/icons/menuandroid/appdonasi.png" alt="icon">
                        </div>
                        <span class="font-bold text-lg" style="display: inline-block; padding: 2px 22px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:130px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align:center;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">Rp 80.000</span>
                    </a>
                    <a href="https://app.midtrans.com/payment-links/1717860272840" class="w-[150px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">
                        <div class="w-10 h-10 flex shrink-0 overflow-hidden">
                            <img src="/assets/css/fe_css/images/icons/menuandroid/appdonasi.png" alt="icon">
                        </div>
                        <span class="font-bold text-lg" style="display: inline-block; padding: 2px 22px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:130px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align:center;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">Rp 90.000</span>
                    </a>
                    <a href="https://app.midtrans.com/payment-links/1717860325538" class="w-[150px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">
                        <div class="w-10 h-10 flex shrink-0 overflow-hidden">
                            <img src="/assets/css/fe_css/images/icons/menuandroid/appdonasi.png" alt="icon">
                        </div>
                        <span class="font-bold text-lg" style="display: inline-block; padding: 2px 22px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:130px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align:center;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">Rp 100.000</span>
                    </a>
                    
                </div>
            </div>
            @include('fe_dashboard.menu.menufooter')
    
            @include('fe_dashboard.menu.enter')
    
    
            @include('fe_dashboard.menu.android')
        </div>


        
    </section>

    @include('fe_dashboard.menu.footer')
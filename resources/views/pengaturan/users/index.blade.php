@include('fe_dashboard.menu.header')

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden">
        <div class="header flex flex-col bg-[#56BBC5] overflow-hidden h-[350px] relative -mb-[92px]">
            <nav class="pt-5 px-3 flex justify-between items-center relative z-20">
                <div class="w-10 h-10 flex shrink-0">
                    <a href="javascript:history.back()">
                        <img src="/assets/css/fe_css/images/icons/menuandroid/homehaiu.png" alt="icon">
                    </a>
                        {{-- <p class="font-semibold text-sm" >HaiuCare Bangun Indonesia</p> --}}
                </div>
                <div class="flex flex-col items-center text-center">
                    <a href="/">
                        <p class="font-semibold text-white"></p><button style="background-color: green; color: white; padding: 2px 15px; border-radius:25%;">
                            <i class="fas fa-edit"></i>
                        </button>
                    </a>
                    {{-- <p class="text-xs leading-[18px] text-white" style="font-size: 14px;">Mitra UMKM</p> --}}
                    {{-- <p class="font-semibold text-sm text-white">#makangratis</p> --}}
                </div>

                {{-- @foreach ($datas as $data) --}}
                    
                {{-- <a href="" class="w-10 h-10 flex shrink-0">
                    <img src="/assets/css/fe_css/images/daftarmitrarumahmakan/warteg1.jpeg" alt="{{ asset('assets/css/fe_css/images/daftarmitrarumahmakan/' . $data->gambar) }}">
                </a> --}}
            </nav>
            {{-- <div class="mt-[0px] z-10" style="color: white">
                <h1 class="font-extrabold text-2xl leading-[36px]  text-center" style="font-size:18px; color: white;">HaiuCare Bangun Indonesia<br></h1>
                <h4 class="font-extrabold text-xl leading-[36px]  text-center" style="font-size: 14px; color: white;">Profile Mitra</h4>
            </div> --}}

            <div class="w-full h-full absolute bg-white overflow-hidden">
                <div class="w-full h-[266px] bg-gradient-to-b from-black/90 to-[#080925]/0 absolute z-10"></div>
                <img src="/assets/css/fe_css/images/tentangkami/profile.jpg" class="w-full h-full object-cover" alt="">
                {{-- <img src="{{ asset('/public/assets/css/fe_css/images/daftarmitrarumahmakan/' . $data->gambar)}}" class="w-full h-full object-cover" alt="cover"> --}}
            </div>
        </div>

        
        <div class="flex flex-col z-30">
            <div id="status" style="
            width: 100%;
            height: 92px;
            background-color: #2c15ff;
            background-image: linear-gradient(to bottom, #58c0e9, #1d06e7);
            border-top-left-radius: 40px;
            border-top-right-radius: 40px;
            padding-top: 0.75rem; /* Sesuaikan dengan kebutuhan Anda */
            padding-bottom: 3.125rem; /* Sesuaikan dengan kebutuhan Anda */
            display: flex;
            gap: 0.5rem; /* Sesuaikan dengan kebutuhan Anda */
            justify-content: center;
            align-items: center;
            margin-bottom: -2.375rem; /* Sesuaikan dengan kebutuhan Anda */
            ">
                <div class="w-[30px] h-[30px] flex shrink-0">
                    <img src="/assets/css/fe_css/images/logohaiucare/logohaiucareindonesia.png" alt="icon" style="filter: invert(100%);">
                </div>
                {{-- <a href="/"> --}}
                    <p class="font-semibold text-white" style="font-size: 14px">Menginspirasi Perubahan Bersama</p>
                    {{-- </a> --}}
                    
                </div>

                
                
                
                <div id="content" class="w-full bg-white rounded-t-[40px] flex flex-col gap-5 p-[30px_24px_120px]">
                    <div class="flex flex-col gap-[10px]">
                        <div class="flex items-center gap-2">
                            <div class="w-9 h-9 flex shrink-0 rounded-full overflow-hidden">
                                <img src="/assets/css/fe_css/images/daftarmitrarumahmakan/avatar.png" class="w-full h-full object-cover" alt="photo">
                            </div>
                            
                        <div class="flex gap-1 items-center">
                            <p class="font-semibold text-sm" style="color: black">{{$data->name}}</p>
                            <div class="flex shrink-0">
                                <img src="/assets/css/fe_css/images/icons/tick-circle.svg" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @foreach($data_users as $data) --}}
            
                <div class="flex flex-col gap-[2px]" style="margin-top: 5px;">
                    <h2 class="font-bold" style="font-size: 14px;"><i class="fas fa-user" style="margin-right: 5px;"></i> Username</h2>
                    <p class="desc-less text-sm leading-[26px]">{{ $data->username}}</p>
                    {{-- <p class="desc-more text-sm leading-[26px] hidden">Kebakaran Hutan dan Lahan (Karhutla) yang terjadi di sejumlah titik di wilayah Kalimantan Barat (Kalbar) selama beberapa Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis a earum iure nihil voluptas tenetur. <button class="text-[#FF7815] underline" onclick="toggleSeeMoreLess()">see less</button></p> --}}
                </div>
                    <hr>
                
                <div class="flex flex-col gap-[2px]" style="margin-top: 5px;">
                    <h2 class="font-bold" style="font-size: 14px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> Telepon</h2>
                    <p class="desc-less text-sm leading-[26px]">{{ $data->phone_number}}</p>
                    {{-- <p class="desc-more text-sm leading-[26px] hidden">Kebakaran Hutan dan Lahan (Karhutla) yang terjadi di sejumlah titik di wilayah Kalimantan Barat (Kalbar) selama beberapa Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis a earum iure nihil voluptas tenetur. <button class="text-[#FF7815] underline" onclick="toggleSeeMoreLess()">see less</button></p> --}}
                </div>
                    <hr>

                <div class="flex flex-col gap-[2px]" style="margin-top: 5px;">
                    <h2 class="font-bold" style="font-size: 14px;"><i class="fas fa-envelope" style="margin-right: 5px;"></i> Email</h2>
                    <p class="desc-less text-sm leading-[26px]">{{ $data->email}}</p>
                    {{-- <p class="desc-more text-sm leading-[26px] hidden">Kebakaran Hutan dan Lahan (Karhutla) yang terjadi di sejumlah titik di wilayah Kalimantan Barat (Kalbar) selama beberapa Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis a earum iure nihil voluptas tenetur. <button class="text-[#FF7815] underline" onclick="toggleSeeMoreLess()">see less</button></p> --}}
                </div>
                    <hr>

                <div class="flex flex-col gap-[2px]" style="margin-top: 5px;">
                    <h2 class="font-bold" style="font-size: 14px;"><i class="fas fa-key" style="margin-right: 5px;"></i> Status</h2>
                    {{-- <p class="desc-less text-sm leading-[26px]">{{ $data->is_admin}}</p> --}}
                    {{-- <p class="desc-more text-sm leading-[26px] hidden">Kebakaran Hutan dan Lahan (Karhutla) yang terjadi di sejumlah titik di wilayah Kalimantan Barat (Kalbar) selama beberapa Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis a earum iure nihil voluptas tenetur. <button class="text-[#FF7815] underline" onclick="toggleSeeMoreLess()">see less</button></p> --}}
                    <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px;"><button style="text-align:center; display: inline-block; padding: 2px 12px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:110px; background-color: 
                        @if($data->is_admin == 'super_admin')
                            #0baf13
                        @elseif($data->is_admin == '')
                            #e53e3e
                        @elseif($data->is_admin == 'mitra')
                            #166cce
                        @endif
                        ; line-height: 18px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#000000'; this.style.color='#fff';">{{ $data->is_admin }}</button></p>
                    
                
                </div>
                    <hr>
            </div>
            {{-- @endforeach --}}
       @include('fe_dashboard.menu.menufooter')
    
       @include('fe_dashboard.menu.enter')
    
    
       @include('fe_dashboard.menu.android')
        </div>
        {{-- @endforeach --}}

        {{-- <a href="send-support.html" class="p-[14px_20px] bg-[#76AE43] rounded-full text-white w-fit mx-auto font-semibold hover:shadow-[0_12px_20px_0_#76AE4380] transition-all duration-300 fixed bottom-[30px] transform -translate-x-1/2 left-1/2 z-40 text-nowrap">Send My Support Now</a> --}}



    </section>

    @include('fe_dashboard.menu.footer')
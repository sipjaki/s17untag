@include('fe_dashboard.menu.header')

<body class="font-poppins text-[#292E4B] bg-[#7ca4ce]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden pb-[134px]">
        <div style="display: flex; flex-direction: column; background-image: linear-gradient(to bottom, #2abaeb, #1539b1);  border-radius: 0 0 50px 50px; overflow: hidden;" class="header">

{{-- <body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-slate-100 overflow-x-hidden pb-4">
        <div class="header flex flex-col bg-[#5856c5] rounded-b-[50px] overflow-hidden h-[320px] bg-gradient-to-b from-[#5bc7eb] to-[#0b4fb6] -mb-[181px]" style="background-image: linear-gradient(to bottom, #2fb7da, #1539b1);"> --}}
            
            <nav class="pt-5 px-3 flex justify-between items-center relative z-20">
                <div class="w-10 h-10 flex shrink-0">
                    <a href="javascript:history.back()">
                        <img src="/assets/css/fe_css/images/icons/menuandroid/homehaiu.png" alt="icon">
                    </a>
                        {{-- <p class="font-semibold text-sm" >HaiuCare Bangun Indonesia</p> --}}
                </div>
                <div class="flex flex-col items-center text-center">
                    {{-- <p class="text-xs leading-[18px] text-white" style="font-size: 14px;">Mitra UMKM</p> --}}
                    <p class="font-semibold text-sm text-white">#makangratis</p>
                </div>

            </nav>
            
               <div class="mt-[0px] z-10">
                   <h1 class="font-extrabold text-2xl leading-[36px] text-white text-center" style="font-size:18px">HaiuCare Bangun Indonesia<br></h1>
                   <h4 class="font-extrabold text-xl leading-[36px] text-white text-center" style="font-size: 14px">Lokasi Makan Gratis</h4>
               </div>
               
               <div style="width: 30%; height: fit-content; overflow: hidden; margin-top: 0.25rem; margin-bottom: 1rem; margin-left: auto; margin-right: auto;">
                   <img src="/assets/css/fe_css/images/tentangkami/listantrianmitra.png" class="width: 100%; height: 100%; object-fit: contain" alt="background">
               </div>
   
        </div>
        
        <div class="flex flex-col gap-4 px-4">

            @foreach ($data_lokasimakangratis as $data)
                
            <div class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl bg-white" style="background-image: linear-gradient(to bottom, #2abaeb, #1539b1);  margin-top:5px;">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden" style="margin-right: 15px;">
                        <img src="{{ $data->daftarmitrarumahmakann->gambar}}" class="w-full h-full object-cover" alt="{{ $data->daftarmitrarumahmakann->gambar }}">
                    </div>
                    <div class="flex flex-col gap-1">
                        {{-- <p class="font-bold text-blue-800 border-spacing-2" style="font-size: 14px; color : blue; ">{{ $data->kota }}, Kota Bandung, Jawa Barat</p> --}}
                        <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px; color:white"><i class="fas fa-home"></i> Rumah Makan : <span style="font-size: 14px; color: white ">{{ $data->daftarmitrarumahmakann->namarumahmakan}}</span></p> 
                        {{-- <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px; color:white"><i class="fas fa-road"></i> Alamat : <span style="font-size: 14px; color: white;">{{ $data->alamat}}</span></p>  --}}
                        <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px; color:white"><i class="fas fa-city"></i> Kota : <span style="font-size: 14px; color:white ;">{{ $data->kota}}</span></p> 
                        <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px; color:white"><i class="fas fa-phone"></i> Kontak : <span style="font-size: 14px; color:white">{{ $data->daftarmitrarumahmakann->telepon}}</span></p> 
                        <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px; color:white"><i class="fas fa-calendar"></i> Jam Operational : <span style="font-size: 14px; color:white">{{ $data->jam_operasional}}</span></p> 
                        {{-- <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]">Deskripsi : <span class="font-bold text-stone-800">{{ $data->deskripsi}}</span></p>  --}}
                        <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px; color:white"><i class="fas fa-file"></i> Kuota : <span style="font-size: 14px; color: white; border: black">{{ $data->kuota}} </span><span style="font-size: 14px">Porsi</span></p> 
                        <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px; text-align:justify; color:white"><i class="fas fa-newspaper"></i> Keterangan : <span style="font-size: 14px; color: white; border: black">{{ $data->deskripsi}} </span><span style="font-size: 14px">Porsi</span></p> 
                        {{-- <span style="background-color: rgb(36, 36, 179); color: white; padding: 2px 10px; border-radius: 5px; font-size:12px;">Show Details</span> --}}
                        <a href="/daftarumkm/{{ $data->namarumahmakan}}">
                            <span style="background-color: rgb(31, 211, 40); color: white; padding: 2px 10px; border-radius: 5px; font-size:12px; cursor: pointer;">Show Details Lokasi</span>
                        </a>
                        {{-- <a href="/dashboard/posts/{{ $post->slug }}">
                            <button class="btn btn-primary" data-toggle="modal" ><i class="fa fa-eye"></i></button>
                        </a> --}}
                        
                    </div>
                    </div>
                </div>
            

           
            @endforeach
            
            
        </div>

             
        @include('fe_dashboard.menu.menufooter')
        {{-- @include('fe_dashboard.menu.enter') --}}

        @include('fe_dashboard.menu.android')

        

    </section>


    @include('fe_dashboard.menu.footer')
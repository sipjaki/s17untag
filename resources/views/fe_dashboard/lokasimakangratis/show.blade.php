@include('fe_dashboard.menu.header')

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden">
        <div class="header flex flex-col bg-[#56BBC5] overflow-hidden h-[350px] relative -mb-[92px]">
            <nav class="pt-5 px-3 flex justify-between items-center relative z-20">
                <div class="w-10 h-10 flex shrink-0">
                    <a href="javascript:history.back()">
                        <img src="/assets/css/fe_css/images/icons/menuandroid/menuback.png" alt="icon">
                    </a>
                        {{-- <p class="font-semibold text-sm" >HaiuCare Bangun Indonesia</p> --}}
                </div>
                <div class="flex flex-col items-center text-center">
                    <p class="text-xs leading-[18px] text-white" style="font-size: 14px;">Mitra UMKM</p>
                    <p class="font-semibold text-sm text-white">#makangratis</p>
                </div>

                {{-- @foreach ($data_showdaftarmitrarumahmakan as $data) --}}
                    
                {{-- <a href="" class="w-10 h-10 flex shrink-0">
                    <img src="/assets/css/fe_css/images/daftarmitrarumahmakan/warteg1.jpeg" alt="{{ asset('assets/css/fe_css/images/daftarmitrarumahmakan/' . $data->gambar) }}">
                </a> --}}
            </nav>

            <div class="w-full h-full absolute bg-white overflow-hidden">
                <div class="w-full h-[266px] bg-gradient-to-b from-black/90 to-[#080925]/0 absolute z-10"></div>
                <img src="/assets/css/fe_css/images/daftarmitrarumahmakan/daftarumkm.jpg" class="w-full h-full object-cover" alt="">
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
                <p class="font-semibold text-white" style="font-size: 14px">Menginspirasi Perubahan Bersama</p>
            </div>
            <div id="content" class="w-full bg-white rounded-t-[40px] flex flex-col gap-5 p-[30px_24px_120px]">
                <div class="flex flex-col gap-[10px]">
                    <p style="display: inline-block; padding: 6px 12px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:90px; background-color: #2d1bd3; line-height: 18px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">APPROVED</p>
                    {{-- <h1 class="font-extrabold text-[26px] leading-[39px]">Perbaikan Kebakaran Alam Hutani Perlidanita</h1> --}}
                    <h1 class="font-extrabold text-[26px] leading-[39px]" style="font-size: 14px">{{$data->daftarmitrarumahmakann->namarumahmakan}}</h1>
                    <div class="flex items-center gap-2">
                        <div class="w-9 h-9 flex shrink-0 rounded-full overflow-hidden">
                            <img src="/assets/css/fe_css/images/daftarmitrarumahmakan/avatar.png" class="w-full h-full object-cover" alt="photo">
                        </div>
                        <div class="flex gap-1 items-center">
                            <p class="font-semibold text-sm">{{$data->alamat}}</p>
                            <div class="flex shrink-0">
                                <img src="/assets/css/fe_css/images/icons/tick-circle.svg" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="font-semibold" style="font-size: 14px">Kuota Makan Gratis <span class="badge-wrapper" style="background-color: #2b05b3; color: #fff; padding: 0.2rem 0.5rem; border-radius: 0.25rem; margin-left:5px;">
                        {{ $data->kontak }}
                    </span>
                      </h2>
                    {{-- <div class="flex items-center justify-between">
                        <p id="tersalurkan" class="text-sm text-[#66697A] font-bold" style="font-size: 14px; color: red">90<span style="font-size:14px; color: black; margin-left:4px" class="font-bold">Porsi Sudah Tersalurkan</span></p>
                        <p id="sisaKuota" class="text-sm text-[#66697A] font-bold" style="font-size: 14px; color: green;"></p>
                          
                    </div> --}}
                    {{-- <progress id="fund" value="66" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                    <!-- Menambahkan elemen span dengan ID untuk menampilkan jumlah porsi yang sudah tersalurkan -->

<!-- Script JavaScript untuk menghitung dan menampilkan sisa kuota -->
<script>
  // Ambil nilai data kuotamakan
  var kuotamakan = parseInt("{{$data->kuotamakan}}");
  
  // Ambil nilai porsi yang sudah tersalurkan
  var tersalurkan = parseInt(document.getElementById('tersalurkan').innerText);
  
  // Hitung sisa kuota
  var sisaKuota = kuotamakan - tersalurkan;
  
  // Tampilkan sisa kuota
  document.getElementById('sisaKuota').innerText = "Sisa Kuota Tersedia: " + sisaKuota;
</script>


<!-- Menambahkan elemen div sebagai wadah untuk elemen progress -->
<div class="progress-wrapper" style="width: 100%;">
  <!-- Menambahkan elemen progress -->
  <progress id="fund" value="66" max="100" class="w-full h-[6px] rounded-full overflow-hidden" style="width: 100%; height: 6px; border-radius: 9999px; overflow: hidden; background-color: grey;"></progress>
</div>

<!-- Script JavaScript untuk menghitung nilai progress -->
            <script>
            // Ambil nilai data kuotamakan
            var kuotamakan = parseInt("{{$data->kuotamakan}}");
            
                // Ambil nilai porsi yang sudah tersalurkan
                var tersalurkan = parseInt(document.getElementById('tersalurkan').innerText);
                
                // Hitung sisa kuota
                var sisaKuota = kuotamakan - tersalurkan;
                
                // Hitung persentase progres
                var persentaseProgres = (sisaKuota / kuotamakan) * 100;
                
                // Set nilai progress bar
                document.getElementById('fund').value = persentaseProgres;
                </script>

                </div>
                <div class="flex flex-col gap-[2px]" style="margin-top: 5px;">
                    <h2 class="font-bold" style="font-size: 14px;">Alamat Rumah Makan</h2>
                    <p class="desc-less text-sm leading-[26px]">{{ $data->alamat_rumahmakan}}</p>
                    {{-- <p class="desc-more text-sm leading-[26px] hidden">Kebakaran Hutan dan Lahan (Karhutla) yang terjadi di sejumlah titik di wilayah Kalimantan Barat (Kalbar) selama beberapa Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis a earum iure nihil voluptas tenetur. <button class="text-[#FF7815] underline" onclick="toggleSeeMoreLess()">see less</button></p> --}}
                </div>
                <div class="flex flex-col gap-[2px]" style="margin-top: 5px; background-color:antiquewhite; border-radius:20px; padding-top:10px; padding-bottom:10px;">
                    <h2 class="font-bold" style="font-size: 14px; margin-left:5px;" >Telepon</h2>
                    <p class="desc-less text-sm leading-[26px]" style="cursor: pointer; margin-left:5px;"> <a href="https://api.whatsapp.com/send?phone={{$data->telepon}}">{{ $data->telepon}}</p></a>
                        
                    {{-- <p class="desc-more text-sm leading-[26px] hidden">Kebakaran Hutan dan Lahan (Karhutla) yang terjadi di sejumlah titik di wilayah Kalimantan Barat (Kalbar) selama beberapa Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis a earum iure nihil voluptas tenetur. <button class="text-[#FF7815] underline" onclick="toggleSeeMoreLess()">see less</button></p> --}}
                </div>
                <div class="flex flex-col gap-[2px]" style="margin-top:5px;">
                    <h2 class="font-bold" style="font-size: 14px;">Email</h2>
                    <p class="desc-less text-sm leading-[26px]">{{ $data->email}}</p>
                    {{-- <p class="desc-more text-sm leading-[26px] hidden">Kebakaran Hutan dan Lahan (Karhutla) yang terjadi di sejumlah titik di wilayah Kalimantan Barat (Kalbar) selama beberapa Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis a earum iure nihil voluptas tenetur. <button class="text-[#FF7815] underline" onclick="toggleSeeMoreLess()">see less</button></p> --}}
                </div>

                {{-- <div class="flex flex-col gap-[10px] p-5 rounded-[20px] bg-[#3486bd]"> --}}
                <div style="display: flex; flex-direction: column; gap: 10px; padding: 5px; border-radius: 20px; background-image: linear-gradient(to bottom, rgb(224, 232, 238), rgb(202, 236, 77));">
                      
                    <h2 class="font-bold text-sm" style="margin-left: 10px; font-size:14px;">Lokasi & Tempat UMKM</h2>
                    <div class="aspect-[61/30] rounded-2xl bg-[#D9D9D9] overflow-hidden">
                        {{-- <img src="/assets/css/fe_css/images/daftarmitrarumahmakan/janganlupabahagia.jpg" class="w-full h-full object-cover" alt="thumbnail"> --}}
                        {{-- <img src="{{ asset($data_showlokasimakangratis->gambar)}}" class="w-full h-full object-cover" alt="thumbnail"> --}}
                    </div>
                    <p class="text-sm leading-[26px] font-semibold line-clamp-1 hover:line-clamp-none" style="text-align: justify; margin-left:10px;">Keterangan : <br>{{ $data->deskripsi}}</p>
                </div>
                
                <div style="display: flex; flex-direction: column; gap: 10px; padding: 5px; border-radius: 20px; background-image: linear-gradient(to bottom, rgb(224, 232, 238), rgb(202, 236, 77));">
                      
                    <h2 class="font-bold text-sm" style="margin-left: 10px; font-size:14px;">Jangan Lupa Bahagia</h2>
                    <div class="aspect-[61/30] rounded-2xl bg-[#D9D9D9] overflow-hidden">
                        <img src="/assets/css/fe_css/images/daftarmitrarumahmakan/janganlupabahagia.jpg" class="w-full h-full object-cover" alt="thumbnail">
                        {{-- <img src="{{ asset($data->gambar)}}" class="w-full h-full object-cover" alt="thumbnail"> --}}
                    </div>
                    <p class="text-sm leading-[26px] font-semibold line-clamp-1 hover:line-clamp-none" style="text-align: justify; margin-left:10px;">Keterangan : <br>{{ $data->deskripsi}}</p>
                </div>


                {{-- ------------------------------------------- --}}
                {{-- <div class="flex flex-col gap-3">
                    <div class="flex items-center justify-between">
                        <h2 class="font-semibold text-sm">Supporters (18,309)</h2>
                        <a href="" class="p-[6px_12px] rounded-full bg-[#E8E9EE] font-semibold text-sm">View All</a>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center gap-3">
                            <div class="w-[50px] h-[50px] flex shrink-0 rounded-full overflow-hidden">
                                <img src="assets/images/photos/avatar-default.svg" class="w-full h-full object-cover" alt="avatar">
                            </div>
                            <div class="flex flex-col gap-[2px] w-full">
                                <div class="flex items-center justify-between">
                                    <p class="font-bold">Rp 200.000</p>
                                    <p class="font-semibold text-[10px] leading-[15px] text-right text-[#66697A]">by Annemi</p>
                                </div>
                                <p class="caption text-xs leading-[18px] text-[#66697A]">“Ayo semangat pasti kamu bisa!”</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-[50px] h-[50px] flex shrink-0 rounded-full overflow-hidden">
                                <img src="assets/images/photos/avatar-default.svg" class="w-full h-full object-cover" alt="avatar">
                            </div>
                            <div class="flex flex-col gap-[2px] w-full">
                                <div class="flex items-center justify-between">
                                    <p class="font-bold">Rp 12.500.000</p>
                                    <p class="font-semibold text-[10px] leading-[15px] text-right text-[#66697A]">by Saranova</p>
                                </div>
                                <p class="caption text-xs leading-[18px] text-[#66697A]">“Jangan lupa berdoa agar lancar”</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-[50px] h-[50px] flex shrink-0 rounded-full overflow-hidden">
                                <img src="assets/images/photos/avatar-default.svg" class="w-full h-full object-cover" alt="avatar">
                            </div>
                            <div class="flex flex-col gap-[2px] w-full">
                                <div class="flex items-center justify-between">
                                    <p class="font-bold">Rp 15.000.000</p>
                                    <p class="font-semibold text-[10px] leading-[15px] text-right text-[#66697A]">by Angga</p>
                                </div>
                                <p class="caption text-xs leading-[18px] text-[#66697A]">“Terus dicoba saya yakin bisa”</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-[50px] h-[50px] flex shrink-0 rounded-full overflow-hidden">
                                <img src="assets/images/photos/avatar-default.svg" class="w-full h-full object-cover" alt="avatar">
                            </div>
                            <div class="flex flex-col gap-[2px] w-full">
                                <div class="flex items-center justify-between">
                                    <p class="font-bold">Rp 80.000</p>
                                    <p class="font-semibold text-[10px] leading-[15px] text-right text-[#66697A]">by Dermatopi</p>
                                </div>
                                <p class="caption text-xs leading-[18px] text-[#66697A]">“Ayo semangat pasti kamu bisa!”</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-[50px] h-[50px] flex shrink-0 rounded-full overflow-hidden">
                                <img src="assets/images/photos/avatar-default.svg" class="w-full h-full object-cover" alt="avatar">
                            </div>
                            <div class="flex flex-col gap-[2px] w-full">
                                <div class="flex items-center justify-between">
                                    <p class="font-bold">Rp 560.000.000</p>
                                    <p class="font-semibold text-[10px] leading-[15px] text-right text-[#66697A]">by Shayna</p>
                                </div>
                                <p class="caption text-xs leading-[18px] text-[#66697A]">“Jangan lupa berdoa agar lancar”</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            
       @include('fe_dashboard.menu.menufooter')
    
       @include('fe_dashboard.menu.enter')
    
    
       @include('fe_dashboard.menu.android')
        </div>
        {{-- @endforeach --}}

        {{-- <a href="send-support.html" class="p-[14px_20px] bg-[#76AE43] rounded-full text-white w-fit mx-auto font-semibold hover:shadow-[0_12px_20px_0_#76AE4380] transition-all duration-300 fixed bottom-[30px] transform -translate-x-1/2 left-1/2 z-40 text-nowrap">Send My Support Now</a> --}}



    </section>

    @include('fe_dashboard.menu.footer')
@include('fe_dashboard.menu.header')
<body class="font-poppins text-[#292E4B] bg-[#7ca4ce]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden pb-[134px]">
  
        <div style="display: flex; flex-direction: column; background-image: linear-gradient(to bottom, #2fb7da, #1539b1); border-radius: 0 0 50px 50px; overflow: hidden;" class="header">
             
            
            {{-- <nav class="pt-5 px-3 flex justify-between items-center">
                <a href="/">
                    <div class="flex items-center gap-[10px]">
                        <div class="w-10 h-10 flex shrink-0">
                           <img src="assets/css/fe_css/images/icons/menuandroid/menuback.png" alt="icon">
                       </div>
                       <div class="flex flex-col text-white">
                           <p class="text-xs leading-[18px]">Location</p>
                           <p class="font-bold">HaiuCare Bangun Indonesia</p>
                       </div>
                   </div>
               </a>   
                
                
               </nav> --}}
   {{-- <i class="fas fa-file"></i>  --}}
               <div class="mt-[10px] z-10">
                   <h1 class="font-extrabold text-2xl leading-[36px] text-white text-center" style="font-size:16px; margin-top:10px; margin-bottom:10px;">Berkas Pengajuan Anda <br></h1>
                   {{-- <h4 class="font-extrabold text-xl leading-[36px] text-white text-center" style="font-size: 14px">Selamat Datang !</h4> --}}
               </div>
               
               <div style="width: 40%; height: fit-content; overflow: hidden; margin-top: 0.25rem; margin-bottom: 1rem; margin-left: auto; margin-right: auto;">
                   <img src="/assets/css/fe_css/images/tentangkami/berkasanda.png" class="width: 100%; height: 100%; object-fit: contain" alt="background">
               </div>
   
        </div>
        <div style="background-color: #f9f9f9; padding: 10px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <style>
                /* Style untuk table */
                table {
                    width: 100%;
                    border-collapse: collapse;
                    border: 1px solid #e20505; /* Garis border kehitaman */
                    background-color: #f9f9f9; /* Warna latar belakang putih keabuan */
                }
        
                /* Style untuk header kolom */
                th {
                    background-color: #4b93e6; /* Warna latar belakang hitam */
                    color: white; /* Warna teks putih */
                    padding: 8px;
                    text-align: left;
                }
        
                /* Style untuk baris ganjil */
                tr:nth-child(odd) {
                    background-color: #f2f2f2; /* Warna latar belakang putih keabuan */
                }
        
                /* Style untuk sel data */
                td {
                    padding: 8px;
                }
        
                /* Style untuk baris genap */
                tr:nth-child(even) {
                    background-color: #ffffff; /* Warna latar belakang putih */
                }
            </style>
        
            <table>
                <tbody>
                    <tr class="font-semibold font-sans" style="font-size: 12px;">
                        <th style="width: 175px; color:black"><i class="fas fa-home" style="margin-right: 3px; color:black;"></i>: Nama Rumah Makan</th>
                        <td>{{ $data->nama_rumahmakan}}</td>
                    </tr>
                    
                    <tr class="font-semibold font-sans" style="font-size: 12px;">
                        <th style="width: 175px; color:black"><i class="fas fa-user" style="margin-right: 3px; color:black;"></i>: Nama Pemilik</th>
                        <td>{{ $data->user->name}}</td>
                    </tr>
                    
                    <tr class="font-semibold font-sans" style="font-size: 12px;">
                        <th style="width: 175px; color: black"><i class="fas fa-building" style="margin-right: 3px;"></i>: Pilihan Kecamatan</th>
                        <td>{{ $data->pilihan_kota}}</td>
                    </tr>
                    
                    <tr class="font-semibold font-sans" style="font-size: 12px;">
                        <th style="width: 175px; color:black"><i class="fas fa-road" style="margin-right: 3px;"></i>: Alamat</th>
                        <td>{{ $data->alamat}}</td>
                    </tr>
                    
                    <tr class="font-semibold font-sans" style="font-size: 12px;">
                        <th style="width: 175px; color:black"><i class="fas fa-phone" style="margin-right: 3px;"></i>: Telepon </th>
                        <td>{{ $data->nomor_telepon}}</td>
                    </tr>
                    
                    <tr class="font-semibold font-sans" style="font-size: 12px;">
                        <th style="width: 175px; color:black"><i class="fas fa-envelope" style="margin-right: 3px;"></i>: Email </th>
                        <td>{{ $data->email}}</td>
                    </tr>
                    
                    <tr class="font-semibold font-sans" style="font-size: 12px;">
                        <th style="width: 175px; color:black"><i class="fas fa-calendar" style="margin-right: 3px;"></i>: Tanggal Berdiri </th>
                        <td>{{ $data->tanggal_berdiri}}</td>
                    </tr>

                    <tr class="font-semibold font-sans" style="font-size: 12px;">
                        <th style="width: 175px; color:black"><i class="fas fa-home" style="margin-right: 3px;"></i>: Kapasitas </th>
                        <td>{{ $data->kuota_porsi}}</td>
                    </tr>                    
                    <!-- Tambahkan baris data sesuai kebutuhan -->
                </tbody>
            </table>


            <div style="margin-top:10px; display: flex; flex-direction: column; gap: 10px; padding: 5px; border-radius: 20px; background-image: linear-gradient(to bottom, rgb(89, 163, 219), rgb(55, 89, 241));">
                <h2 class="font-bold" style="margin-left: 10px; font-size:14px; margin-top:5px; text-align:center; font-size:12px"><i class="fas fa-file" style="margin-left: 10px;"></i> Foto KTP</h2>
                <div class="aspect-[61/30] rounded-2xl bg-[#D9D9D9] overflow-hidden">
                    <img src="{{ $data->ktp }}" class="w-full h-full object-cover" alt="KTP" style="object-fit: cover;">
                    <!-- Add this line to print the URL -->
                    {{-- <p>{{ Storage::url($data->ktp) }}</p> --}}
                </div>
                
                {{-- <p class="text-sm leading-[26px] font-semibold line-clamp-1 hover:line-clamp-none" style="text-align: justify; margin-left:10px; color:white; margin-top:5px; margin-bottom:10px; margin-right:10px;">Keterangan : <br>{{ $data->deskripsi}}</p> --}}
            </div>

            <div style="margin-top:10px; display: flex; flex-direction: column; gap: 10px; padding: 5px; border-radius: 20px; background-image: linear-gradient(to bottom, rgb(89, 163, 219), rgb(55, 89, 241));">
                <h2 class="font-bold" style="margin-left: 10px; font-size:14px; margin-top:5px; text-align:center; font-size:12px"><i class="fas fa-file" style="margin-left: 10px;"></i> Foto Pemilik</h2>
                <div class="aspect-[61/30] rounded-2xl bg-[#D9D9D9] overflow-hidden">
                    <img src="{{ Storage::url($data->foto_mitra) }}" class="w-full h-full object-cover" alt="foto_mitra" style="object-fit: cover;">
                </div>
                {{-- <p class="text-sm leading-[26px] font-semibold line-clamp-1 hover:line-clamp-none" style="text-align: justify; margin-left:10px; color:white; margin-top:5px; margin-bottom:10px; margin-right:10px;">Keterangan : <br>{{ $data->deskripsi}}</p> --}}
            </div>
            <div style="margin-top:10px; display: flex; flex-direction: column; gap: 10px; padding: 5px; border-radius: 20px; background-image: linear-gradient(to bottom, rgb(89, 163, 219), rgb(55, 89, 241));">
                <h2 class="font-bold" style="margin-left: 10px; font-size:14px; margin-top:5px; text-align:center; font-size:12px"><i class="fas fa-file" style="margin-left: 10px;"></i> Foto Rumah Makan</h2>
                <div class="aspect-[61/30] rounded-2xl bg-[#D9D9D9] overflow-hidden">
                    <img src="{{ Storage::url($data->foto_umkm) }}" class="w-full h-full object-cover" alt="foto_rumahmakan" style="object-fit: cover;">
                </div>
                {{-- <p class="text-sm leading-[26px] font-semibold line-clamp-1 hover:line-clamp-none" style="text-align: justify; margin-left:10px; color:white; margin-top:5px; margin-bottom:10px; margin-right:10px;">Keterangan : <br>{{ $data->deskripsi}}</p> --}}
            </div>
            
            
            
            <div style="margin-top:10px; display: flex; flex-direction: column; gap: 10px; padding: 5px; border-radius: 20px; background-image: linear-gradient(to bottom, rgb(89, 163, 219), rgb(55, 89, 241));">
                      
                <h2 class="font-bold" style="margin-left: 10px; font-size:14px; margin-top:5px; text-align:center; font-size:12px"><i class="fas fa-home" style="margin-left: 10px;"></i> Keterangan Rumah Makan :</h2>
                {{-- <div class="aspect-[61/30] rounded-2xl bg-[#D9D9D9] overflow-hidden"> --}}
                    {{-- <img src="/assets/css/fe_css/images/daftarmitrarumahmakan/janganlupabahagia.jpg" class="w-full h-full object-cover" alt="thumbnail"> --}}
                    {{-- <img src="{{ asset($data->ktp)}}" class="w-full h-full object-cover" alt="thumbnail"> --}}
                {{-- </div> --}}
                <p class="text-sm leading-[26px] font-semibold line-clamp-1 hover:line-clamp-none" style="text-align: justify; margin-left:10px; color:white; margin-top:5px; margin-bottom:10px; margin-right:10px; font-size:12px;">Keterangan :  {{ $data->keterangan_mitra}}<br>{{ $data->deskripsi}}</p>
            </div>
            


        </div>
        
         
         
            
        </div>

             
        @include('fe_dashboard.menu.menufooter')

        {{-- @include('fe_dashboard.menu.enter') --}}


        {{-- @include('fe_dashboard.menu.android') --}}

        

    </section>


    @include('fe_dashboard.menu.footer')
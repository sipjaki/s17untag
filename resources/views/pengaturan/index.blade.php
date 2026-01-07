@include('fe_dashboard.menu.header')
<body class="font-poppins text-[#292E4B] bg-[#7ca4ce]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden pb-[134px]">
  
        <div style="display: flex; flex-direction: column; background-image: linear-gradient(to bottom, #2fb7da, #1539b1); border-radius: 0 0 50px 50px; overflow: hidden;" class="header">
             
            
             <nav class="pt-5 px-3 flex justify-between items-center">
                
                @if($data_jadimitra->isEmpty())
                <p style="margin-bottom:10px; display: inline-block; padding: 10px 22px; font-weight: bold; font-size: 12px; color: #f5f0f0; border-radius: 9999px; width:300px; background-color: #f70b0b; line-height: 18px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#000000'; this.style.color='#fff'; text-align:center;">Anda belum bergabung sebagai Mitra</p>
            @else
                @foreach ($data_jadimitra as $data)
                    <button type="submit" style="margin-bottom:10px; display: inline-block; padding: 10px 22px; font-weight: bold; font-size: 14px; color: #f5f0f0; border-radius: 9999px; width:150px; background-color: #0b0bf7; line-height: 18px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#000000'; this.style.color='#fff'; text-align:center;">
                        <i class="fas fa-spinner fa-spin" style="margin-right: 5px"></i>
                        {{ $data->active}}
                    </button>
                @endforeach
            @endif
            
               </nav> 
   
               <div class="mt-[10px] z-10">
                {{-- Uncomment to show welcome message --}}
                {{-- <h1 class="font-extrabold text-2xl leading-[36px] text-white text-center" style="font-size:20px">HaiuCare Bangun Indonesia<br></h1> --}}
                {{-- <h4 class="font-extrabold text-xl leading-[36px] text-white text-center" style="font-size: 14px">Selamat Datang !</h4> --}}
            
                {{-- Check for success message --}}
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
            </div>
            
               
               <div style="width: 50%; height: fit-content; overflow: hidden; margin-top: 0.25rem; margin-bottom: 1rem; margin-left: auto; margin-right: auto;">
                   <img src="assets/css/fe_css/images/tentangkami/pengaturanakun.png" class="width: 100%; height: 100%; object-fit: contain" alt="background">
               </div>

                    <div class="div">
                        <!-- Button untuk membuka modal -->
                         
                                @if($data_jadimitra->isEmpty())
                            
                            <a href="/daftarjadimitra">
                                <button style="margin-left: 75px; margin-bottom: 10px; display: inline-block; padding: 10px 22px; font-weight: bold; font-size: 14px; color: #0a0a0a; border-radius: 9999px; width: 250px; background-color: #15e70e; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align: center;">
                                    <i class="fas fa-warning" style="margin-right: 5px;"></i> Daftar Jadi Mitra
                                </button>
                            </a>
                            
                                @else
                                
                                <button id="openModalBtn" style="margin-left: 75px; margin-bottom: 10px; display: inline-block; padding: 10px 22px; font-weight: bold; font-size: 14px; color: #0a0a0a; border-radius: 9999px; width: 250px; background-color: #efeff3; line-height: 18px; transition: background-color 0.3s, color 0.3s; text-align: center;">
                                    <i class="fas fa-warning" style="margin-right: 5px;"></i> Informasi Teknis
                                </button>
                            @endif    
                        

                            <!-- The Modal -->
                            <div id="infoModal" class="modal" style="display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4);">
                            <!-- Modal content -->
                                <div class="modal-content" style="background-color: #fefefe; margin: 15% auto; padding: 20px; border: 1px solid #888; width: 80%; border-radius: 10px;">
                                    <span class="close" style="color: #aaa; float: right; font-size: 28px; font-weight: bold;">&times;</span>
                                    <p>"Berkas Anda sedang dalam proses. Kami akan melakukan review terhadap pengajuan Saudara dalam waktu paling lambat 7 hari kerja. Mohon tunggu untuk informasi lebih lanjut.</p>
                                </div>
                            </div>

                            <script>
                                                                    // Mendapatkan elemen-elemen yang diperlukan
                                    var modal = document.getElementById("infoModal");
                                    var openModalBtn = document.getElementById("openModalBtn");
                                    var closeModal = document.getElementsByClassName("close")[0];

                                    // Ketika tombol diklik, tampilkan modal
                                    openModalBtn.onclick = function() {
                                    modal.style.display = "block";
                                    }

                                    // Ketika tombol close di klik, sembunyikan modal
                                    closeModal.onclick = function() {
                                    modal.style.display = "none";
                                    }

                                    // Ketika user mengklik di luar modal, sembunyikan modal
                                    window.onclick = function(event) {
                                    if (event.target == modal) {
                                        modal.style.display = "none";
                                    }
                                    }

                            </script>

                        @foreach ($data_jadimitra as $data)
                            
                        <a href="/showmitrasuccess/{{$data->nama_rumahmakan}}">
                            <button type="submit" style="margin-left:75px; margin-bottom:10px; display: inline-block; padding: 10px 22px; font-weight: bold; font-size: 14px; color: #0a0a0a; border-radius: 9999px; width:250px; background-color: #efeff3; line-height: 18px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#000000'; this.style.color='#fff'; text-align:center;"><i class="fas fa-file" style="margin-right: 5px;"></i>Berkas Anda</button>
                        </a>
                        @endforeach

                        
                    </div>               
                    <div class="div">

                        @foreach ($data_users as $data)
                            
                        <a href="/profile/{{$data->name}}">
                            <button type="submit" style="margin-left:75px; margin-bottom:10px; display: inline-block; padding: 10px 22px; font-weight: bold; font-size: 14px; color: #0a0a0a; border-radius: 9999px; width:250px; background-color: #efeff3; line-height: 18px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#000000'; this.style.color='#fff'; text-align:center;"><i class="fas fa-user" style="margin-right: 5px;"></i> Profile</button>
                        </a>

                        @endforeach
                        <a href="/commingsoon">
                            <button type="submit" style="margin-left:75px; margin-bottom:10px; display: inline-block; padding: 10px 22px; font-weight: bold; font-size: 14px; color: #0a0a0a; border-radius: 9999px; width:250px; background-color: #efeff3; line-height: 18px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#000000'; this.style.color='#fff'; text-align:center;"><i class="fas fa-utensil-spoon" style="margin-right: 5px;"></i> Daftar Menu</button>
                        </a>
                    </div>               
            </div>
         
         
            
        </div>

             
        @include('fe_dashboard.menu.menufooter')

        {{-- @include('fe_dashboard.menu.enter') --}}


        {{-- @include('fe_dashboard.menu.android') --}}

        

    </section>


    @include('fe_dashboard.menu.footer')
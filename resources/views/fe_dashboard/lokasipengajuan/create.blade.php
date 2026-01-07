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

            </nav>

               <div class="mt-[10px] z-10">
                   <h1 class="font-extrabold text-2xl leading-[36px] text-white text-center" style="font-size:20px; margin-top:10px;">HaiuCare Bangun Indonesia<br></h1>
                   <h4 class="font-extrabold text-xl leading-[36px] text-white text-center" style="font-size: 14px"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i>Ajukan Lokasi !</h4>
               </div>
               
               <div style="width: 35%; height: fit-content; overflow: hidden; margin-top: 10px; margin-bottom: 1rem; margin-left: auto; margin-right: auto;">
                   <img src="assets/css/fe_css/images/tentangkami/pengajuanlokasibaru.png" class="width: 100%; height: 100%; object-fit: contain" alt="background">
               </div>
   
        </div>
         
        <div style="margin-top:20px; display: flex; flex-direction: column; gap: 10px; padding: 5px; border-radius: 20px; background-image: linear-gradient(to bottom, rgb(166, 204, 233), rgb(55, 89, 241));">
                      
            <h2 class="font-semibold text-sm"></h2>
            <div class="container-fluid login-wrapper">
                <div class="login-box">
                    {{-- <h1 class="text-center mb-5"><i class="fab fa-ravelry text-primary"></i> HaiuCare Indonesia</h1>     --}}
                    <div class="row">
                     
                        <div style="text-align: center; margin-top:0px;">
                     
                     
                     {{-- =========================================================================== --}}
                     <div style="margin-bottom: 0px;">
                         {{-- <label class="font-semibold"><i class="fas fa-user mr-2" style="margin-right: 5px;"></i> Nama Lengkap</label> --}}
                         <br>

                         @foreach ($data_lokasipengajuan as $data)
                                 <input name="user_id"  value="{{$data->user->id}}" style="padding: 5px 40px; margin-bottom:10px" type="hidden"  class="form-control rounded-full mt-0 }}">
                        @endforeach

                     </div>
                     
                     <form action="/lokasipengajuansubmit" method="post">
                        @csrf
                        
                        <div style="margin-bottom:10px; ">
                            <label class="font-semibold" for="lokasi"><i class="fas fa-map-marker-alt mr-2" style="margin-right: 5px;"></i> Lokasi</label>
                            <br>
                            <select style="padding: 4px 22px; width: 250px;" id="lokasi" name="lokasi" class="form-control rounded-full mt-0 @error('lokasi') is-invalid @enderror" required>
                                <option value="">Pilih lokasi</option>
                                <option value="Cileunyi">Cileunyi</option>
                                <option value="Kopo">Kopo</option>
                                <option value="Lembang">Lembang</option>
                                <option value="St. Bandung">St. Bandung</option>
                            </select>
                            @error('lokasi') 
                            <div class="invalid-feedback mb-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        
                        <div style="margin-bottom: 10px;">
                            <label class="font-semibold" for="keteranganlokasi"><i class="fas fa-map-marker-alt mr-2" style="margin-right: 5px;"></i> Keterangan Lokasi</label>
                            <br>

                            {{-- <textarea id="keteranganlokasi" style="padding: 5px 40px; margin-bottom:10px" type="text" name="keteranganlokasi" class="form-control rounded-full mt-0 @error('keteranganlokasi') is-invalid @enderror" required value="{{ old('keteranganlokasi') }}"> --}}
                                <textarea id="keteranganlokasi" style="padding: 5px 40px; margin-bottom:10px" type="text" name="keteranganlokasi" class="form-control rounded-full mt-0 @error('keteranganlokasi') is-invalid @enderror" required value="{{ old('keteranganlokasi') }}"></textarea>
                            @error('keteranganlokasi') 
                            <div class="invalid-feedback mb-2">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>

                        <button type="submit" style="margin-top:10px; margin-bottom:10px; display: inline-block; padding: 10px 22px; font-weight: bold; font-size: 14px; color: #fff; border-radius: 9999px; width:250px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#000000'; this.style.color='#fff';">Submit</button>
                    </form>
                    
                    
        
                            {{-- =========================================================================== --}}
                        
                          </div>
                    </div>
                </div>
            </div>    
        
            </div>
        
            
        </div>

             
        @include('fe_dashboard.menu.menufooter')

        {{-- @include('fe_dashboard.menu.enter') --}}


        {{-- @include('fe_dashboard.menu.android') --}}

        

    </section>


    @include('fe_dashboard.menu.footer')
@include('fe_dashboard.menu.header')
<body class="font-poppins text-[#292E4B] bg-[#7ca4ce]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden pb-[134px]">
  
        <div style="display: flex; flex-direction: column; background-image: linear-gradient(to bottom, #2fb7da, #1539b1); border-radius: 0 0 50px 50px; overflow: hidden;" class="header">
             
{{--             
             <nav class="pt-5 px-3 flex justify-between items-center">
                <a href="/">
                    <div class="flex items-center gap-[10px]">
                        <div class="w-10 h-10 flex shrink-0">
                           <img src="assets/css/fe_css/images/icons/menuandroid/menuback.png" alt="icon">
                       </div>
                       <div class="flex flex-col text-white">
                           <p class="text-xs leading-[18px]">Location</p>
                           <p class="font-semibold text-sm">HaiuCare Bangun Indonesia</p>
                       </div>
                   </div>
               </a>   
                
                
               </nav>  --}}
   
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
                   <img src="assets/css/fe_css/images/tentangkami/registrasi.png" class="width: 100%; height: 100%; object-fit: contain" alt="background">
               </div>

               <a href="/dashboard">
                   <button type="submit" style="margin-left:200px; margin-bottom:10px; display: inline-block; padding: 10px 22px; font-weight: bold; font-size: 14px; color: #0a0a0a; border-radius: 9999px; width:250px; background-color: #efeff3; line-height: 18px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#000000'; this.style.color='#fff'; text-align:center;">Click Here</button>
                </a>
                    
   
        </div>
         
         
            
        </div>

             
        @include('fe_dashboard.menu.menufooter')

        {{-- @include('fe_dashboard.menu.enter') --}}


        {{-- @include('fe_dashboard.menu.android') --}}

        

    </section>


    @include('fe_dashboard.menu.footer')
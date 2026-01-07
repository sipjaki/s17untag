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
                           <p class="font-semibold text-sm">HaiuCare Bangun Indonesia</p>
                       </div>
                   </div>
               </a>   
                
                
               </nav> --}}
   
               <div class="mt-[10px] z-10">
                   {{-- <h1 class="font-extrabold text-2xl leading-[36px] text-white text-center" style="font-size:20px">HaiuCare Bangun Indonesia<br></h1> --}}
                   {{-- <h4 class="font-extrabold text-xl leading-[36px] text-white text-center" style="font-size: 14px">Selamat Datang !</h4> --}}
               </div>
               
               <div style="width: 50%; height: fit-content; overflow: hidden; margin-top: 0.25rem; margin-bottom: 1rem; margin-left: auto; margin-right: auto;">
                   <img src="assets/css/fe_css/images/comingsoon/comingsoon.png" class="width: 100%; height: 100%; object-fit: contain" alt="background">
               </div>
   
        </div>
         
         
            
        </div>

             
        @include('fe_dashboard.menu.menufooter')

        {{-- @include('fe_dashboard.menu.enter') --}}


        @include('fe_dashboard.menu.android')

        

    </section>


    @include('fe_dashboard.menu.footer')
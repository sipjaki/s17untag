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
                   <h1 class="font-extrabold text-2xl leading-[36px] text-white text-center" style="font-size:20px; margin-top:10px;">HaiuCare Bangun Indonesia<br></h1>
                   <h4 class="font-extrabold text-xl leading-[36px] text-white text-center" style="font-size: 14px">Form Register !</h4>
               </div>
               
               <div style="width: 35%; height: fit-content; overflow: hidden; margin-top: 10px; margin-bottom: 1rem; margin-left: auto; margin-right: auto;">
                   <img src="assets/css/fe_css/images/register/register.png" class="width: 100%; height: 100%; object-fit: contain" alt="background">
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
                     <form action="/newregisters" method="post">
                        @csrf
                        {{-- <div>
                            <label class="font-semibold" for="phone_number"><i class="fas fa-user mr-2" style="margin-right: 5px;"></i> Phone Number</label>
                            <br>
                            <input id="phone_number" style="padding: 5px 40px; margin-bottom:10px" type="text" name="phone_number" class="form-control rounded-full mt-0 @error('phone_number') is-invalid @enderror" placeholder="Enter your user number" required value="{{ old('phone_number') }}">
                            @error('phone_number') 
                            <div class="invalid-feedback mb-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div> --}}
                        
                        <div style="margin-top: 25px;">
                            <label class="font-semibold" for="name"><i class="fas fa-user mr-2" style="margin-right: 5px; text-align:left;"></i> Nama Lengkap</label>
                            <br>
                            <input id="name" style="padding: 5px 40px; margin-bottom:10px" type="text" name="name" class="form-control rounded-full mt-0 @error('name') is-invalid @enderror" placeholder="Nama Lengkap" required value="{{ old('name') }}">
                            @error('name') 
                            <div class="invalid-feedback mb-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        <div>
                            <label class="font-semibold" for="email"><i class="fas fa-envelope mr-2" style="margin-right: 5px;"></i> Email</label>
                            <br>
                            <input id="email" style="padding: 5px 40px; margin-bottom:10px" type="email" name="email" class="form-control rounded-full mt-0 @error('email') is-invalid @enderror" placeholder="Email" required value="{{ old('email') }}">
                            @error('email') 
                            <div class="invalid-feedback mb-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        <div>
                            <label class="font-semibold" for="password"><i class="fas fa-key mr-2" style="margin-right: 5px;"></i> Password</label>
                            <br>
                            <input id="password" style="padding: 5px 40px; margin-bottom:10px" type="password" name="password" class="form-control rounded-full mt-0 @error('password') is-invalid @enderror" placeholder="Password" required value="{{ old('password') }}">
                            @error('password') 
                            <div class="invalid-feedback mb-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        <div>
                            {{-- <label class="font-semibold" for="username"><i class="fas fa-user mr-2" style="margin-right: 5px;"></i> Nama Lengkap</label> --}}
                            <br>
                            <input type="hidden" id="username" value="newusername" style="padding: 5px 40px; margin-bottom:10px" type="text" name="username" class="form-control rounded-full mt-0 @error('username') is-invalid @enderror" required value="{{ old('username') }}">
                        
                            {{-- @error('username') 
                            <div class="invalid-feedback mb-2">
                                {{ $message }}
                            </div>
                            @enderror --}}
                        </div>
                        
                        <button type="submit" style="margin-top:10px; margin-bottom:10px; display: inline-block; padding: 10px 22px; font-weight: bold; font-size: 14px; color: #fff; border-radius: 9999px; width:250px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#000000'; this.style.color='#fff';">Sign Up</button>
                    
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
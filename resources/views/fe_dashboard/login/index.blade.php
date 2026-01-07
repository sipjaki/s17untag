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
                   <h4 class="font-extrabold text-xl leading-[36px] text-white text-center" style="font-size: 14px">Silahkan Login !</h4>
               </div>
               
               <div style="width: 35%; height: fit-content; overflow: hidden; margin-top: 10px; margin-bottom: 1rem; margin-left: auto; margin-right: auto;">
                   <img src="assets/css/fe_css/images/tentangkami/halamanlogin.png" class="width: 100%; height: 100%; object-fit: contain" alt="background">
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
                            <form action="/login" method="post" class="mt-2">
                              @csrf
                                <div class="input-group mb-3" style="margin-top: 15px;">
                                    <label class="font-semibold" for="">Email</label>
                                    <br>
                                    <input style="padding: 5px 40px; margin-bottom:20px;" type="text" name="email" class="form-control rounded-full mt-0 @error('email') is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}">
                                    @error('email') 
                                    <div class="invalid-feedback mb-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
        
                                <div class="input-group mb-3">
                                    <label class="font-semibold" for="" style="margin-left: 10px;">Password</label>
                                    <br>
                                    <input style="padding: 5px 40px; margin-bottom:10px" type="text" name="password" class="form-control rounded-full mt-0 @error('password') is-invalid @enderror" id="password" placeholder="Password" required value="{{ old('password') }}">
                                    @error('password') 
                                    <div class="invalid-feedback mb-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
        
                                
                                <div class="form-group mt-4">
                                  {{-- <input type="submit" class="btn solid" /> --}}
                                    <button type="submit" style="margin-top:10px; margin-bottom:10px; display: inline-block; padding: 10px 22px; font-weight: bold; font-size: 14px; color: #fff; border-radius: 9999px; width:250px; background-color: #0814b9; line-height: 18px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#000000'; this.style.color='#fff';">Login</button>
                                    <div style="text-align: right; margin-bottom: 10px;"> 
                                      {{-- <a href="{{ route('password.request') }}"> <!-- Mengarahkan ke halaman forgot password -->
                                          <small class="text-theme" style="color: white; margin-bottom:10x;"><strong>Forgot password?</strong></small>
                                      </a> --}}
                                      <a href="/register" style="margin-left: 25px; color:white; margin-right:15px;"> <!-- Mengarahkan ke halaman forgot password -->
                                          <small class="text-theme"><strong>Register Here?</strong></small>
                                      </a>
                                  </div>
                                
                                  {{-- <p class="social-text mt-2">Or Sign in with social platforms</p>
                                  <div class="social-media mt-4" style="display: flex; justify-content: center;">
                                    <a href="#" class="social-icon" style="margin: 0 10px; display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; border: 2px solid #000; border-radius: 50%;">
                                        <i class="far fa-envelope" style="font-size: 24px; color: #333;"></i>
                                    </a>
                                
                                    <a href="#" class="social-icon" style="margin: 0 10px; display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; border: 2px solid #000; border-radius: 50%;">
                                        <i class="fab fa-facebook-f" style="font-size: 24px; color: #333;"></i>
                                    </a>
                                    
                                    <a href="#" class="social-icon" style="margin: 0 10px; display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; border: 2px solid #000; border-radius: 50%;">
                                        <i class="fab fa-google" style="font-size: 24px; color: #333;"></i>
                                    </a>
                                </div> --}}
                                
                                </div>
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


        @include('fe_dashboard.menu.android')

        

    </section>


    @include('fe_dashboard.menu.footer')
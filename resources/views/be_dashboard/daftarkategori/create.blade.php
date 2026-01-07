@include('be_dashboard.dashboard.part.header')
@include('be_dashboard.dashboard.part.menuheader')
@include('be_dashboard.dashboard.part.sidebar')

    
    <!--Page Wrapper-->

    {{-- <div class="container-fluid"> --}}

        

        
            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0">
                <h5 class="mb-0" ><strong>Dashboard | {{ $data_halaman}} </strong></h5>


                                            <!--Product summary-->

                
<!--Content right-->
            <div class="col-sm-12 col-xs-12 content pt-3 pl-0">
                {{-- <h5 class="mb-0" ><strong>Basic elements</strong></h5> --}}
                {{-- <span class="text-secondary">Dashboard <i class="fa fa-angle-right"></i> {{ $data_halaman }}</span> --}}
                
                <div class="row mt-3">
                    <div class="col-sm-12">

                     
                        
                        <!--Default elements-->
                        <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">

                            <div class="row mb-0 px-3">
                                <div class="font-bold col-sm-8 pt-2"><h6 class="mb-4 bc-header"><i class="fas fa-edit mr-2"></i>{{ $data_halaman }}</h6></div>
                                <div class="col-sm-4 text-right pb-3">
                                    <div class="pull-right mr-3 btn-order-bulk">
                                        <a href="javascript:history.back()">
                                        <button class="btn btn-theme btn-round"><i class="fas fa-arrow-left mr-2"></i>Back</button>
                                        </a>
                                    </div>
    
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            {{-- <h6 class="mb-2">Basic input types</h6> --}}
                            
                            {{-- <p>use class <span class="text-danger">.form-control</span> with input</p> --}}
                            
                            <form class="form-horizontal mt-4 mb-2">
                                <div class="form-group row">
                                    <label class="control-label col-sm-2" for="nama">Kategori</label>
                                    <div class="col-sm-10">
                                        <input id="nama" style="padding: 5px margin-bottom:10px" type="text" name="nama" class="form-control rounded-full mt-0 @error('nama') is-invalid @enderror" placeholder="Nama Kategori" required value="{{ old('nama') }}"/>
                                        @error('nama') 
                                        <div class="invalid-feedback mb-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="control-label col-sm-2" for="slug">Slug</label>
                                    <div class="col-sm-10">
                                        <input id="slug" style="padding: 5px margin-bottom:10px" type="text" name="slug" class="form-control rounded-full mt-0 @error('slug') is-invalid @enderror" placeholder="Slug Kategori" required value="{{ old('slug') }}"/>
                                        @error('slug') 
                                        <div class="invalid-feedback mb-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="control-label col-sm-2" for="icon">File input</label>
                                    <div class="col-sm-10">
                                        <input id="icon" style="padding: 5px; margin-bottom:10px" type="file" name="icon" class="form-control rounded-full mt-0 @error('icon') is-invalid @enderror" placeholder="Icon" required value="{{ old('icon') }}"/>
                                        @error('icon') 
                                        <div class="invalid-feedback mb-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                {{-- <div class="form-group row">
                                    <label for="exampleFormControlSelect1" class="control-label col-sm-2">Example select</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Choose ...</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div> --}}
                                
                                {{-- <div class="form-group row">
                                    <label class="control-label col-sm-2" for="input-9">Read Only Field</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control" id="input-9" placeholder="read only" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-sm-2" for="input-10">Disabled Field</label>
                                    <div class="col-sm-10">
                                        <input type="text" disabled class="form-control" id="input-10" placeholder="Disabled" />
                                    </div>
                                </div> --}}
                                {{-- <div class="form-group row">
                                    <label class="control-label col-sm-2" for="input-11">Textarea</label>
                                    <div class="col-sm-10">
                                        <textarea rows="5" class="form-control" id="input-11" placeholder="Default Textarea"></textarea>
                                    </div>
                                </div> --}}
                                <hr>
                                <div class="row mb-0 px-3">
                                    <div class="font-bold col-sm-8 pt-2"><h6 class="mb-4 bc-header"><i class="fab fa-ravelry mr-2"></i></h6></div>
                                    <div class="col-sm-4 text-right pb-3">
                                        <div class="pull-right mr-3 btn-order-bulk">
                                            {{-- <a href="javascript:history.back()"> --}}
                                            <button type="submit" class="btn btn-success btn-round"><i class="fas fa-save mr-2"></i>Save</button>
                                            {{-- </a> --}}
                                        </div>
        
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>      
                            
                                </div>
                            </div>
                        </div>
                        <!--/Default elements-->


                
                
                <!--Footer-->
             
                @include('be_dashboard.dashboard.part.menufooter')
                <!--Footer-->
                
                </div>
        </div>

        <!--Main Content-->
        
        </div>
        
        @include('be_dashboard.dashboard.part.footer')
    

@include('be_dashboard.dashboard.part.header')
@include('be_dashboard.dashboard.part.menuheader')
@include('be_dashboard.dashboard.part.sidebar')
    
    <!--Page Wrapper-->

        <!--Main Content-->

            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0">

                    
                <div class="row mb-0 pt-3">
                    <div class="font-bold col-sm-8 pt-2"><h6 class="mb-4 bc-header">.</h6></div>
                    <div class="col-sm-4 text-right pb-3">
                        <div class="pull-right mr-3 btn-order-bulk">
                            <button class="btn btn-theme btn-round" style="width:100%"><i class="fab fa-ravelry mr-2"></i>Halaman {{ $title_halamandata}}</button>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>


                
                <!--Custom cards section-->
                <div class="row mt-3">
                    <div class="col-sm-3">
                        <div class="mt-1 mb-3 p-3 button-container bg-white shadow-sm border">
                            <h6 class="mb-3">Emails</h6>
                            
                            <p class="mb-2 mt-3">Open rate <span class="pull-right">70%</span></p>
                            <div class="progress mb-4" style="height: 7px;">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="70" style="width: 70%"  aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <p class="mb-2">Sent <span class="pull-right">310/500</span></p>
                            <div class="progress mb-4" style="height: 7px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <p class="mb-2">Recieved <span class="pull-right">210/500</span></p>
                            <div class="progress mb-4" style="height: 7px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="mt-1 mb-3 p-3 button-container bg-white shadow-sm border">
                            <h6 class="mb-3">Top Products</h6>
                            
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <td>IphoneX</td>
                                        <td>225</td>
                                    </tr>
                                    <tr>
                                        <td>Onesplus</td>
                                        <td>1850</td>
                                    </tr>
                                    <tr>
                                        <td>Samsung S7</td>
                                        <td>1550</td>
                                    </tr>
                                </table>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mt-1 mb-3 p-3 button-container bg-theme shadow border">
                            <h6 class="mb-4 text-center text-light">Average Deal Size</h6>
                            
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="text-center pb-3">
                                        <h5 class="mb-3 mt-2 text-light"><small><strong>30%</strong></small></h5>
                                        <h1 class="text-light">$25,650</h1>
                                        <h5 class="mb-0 mt-3 text-light"><small><strong>per rep</strong></small></h5>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="text-center pb-3">
                                        <h5 class="mb-3 mt-2 text-light"><small><strong>12%</strong></small></h5>
                                        <h1 class="text-light">$15,650</h1>
                                        <h5 class="mb-0 mt-3 text-light"><small><strong>per team</strong></small></h5>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>


                <!--Dashboard widget-->
                <div class="mt-1 mb-3 button-container">
                    <div class="row pl-0">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="bg-theme border shadow rounded">
                                <div class="p-2 text-center">
                                    <h5 class="mb-0 mt-2 text-light"><small><strong>INCOME</strong></small></h5>
                                    <h1>$36,500</h1>
                                </div>
                                <!--<div class="align-bottom">
                                    <span id="incomeBarCol"></span>
                                </div>-->
                                <div class="text-center text-light">
                                    75% in 2 years
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="bg-success border shadow rounded">
                                <div class="p-2 mb-1 text-center">
                                    <h5 class="mb-0 mt-2 text-light"><small><strong>GROSS PROFIT</strong></small></h5>
                                    <h1 class="text-white">$25,650</h1>
                                </div>
                                <!--<div class="align-bottom">
                                    <span id="profitBarCol"></span>
                                </div>-->
                                <div class="text-center text-light">
                                    65% in 2 years
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="bg-danger border shadow rounded">
                                <div class="p-2 text-center">
                                    <h5 class="mb-0 mt-2 text-light"><small><strong>EXPENSES</strong></small></h5>
                                    <h1 class="text-white">$10,850</h1>
                                </div>
                                <!--<div class="align-bottom">
                                    <span id="expensesBarCol"></span>
                                </div>-->
                                <div class="text-center text-light">
                                    15% in 2 years
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Dashboard widget-->


                {{-- <h5 class="mb-3" style="font-size: 18px;"><strong>Dashboard {{$title_halamandata}} </strong></h5> --}}
             
                
           
                <!--Products summary-->
                <div class="mt-4 mb-4 bg-white border shadow lh-sm">
                    <!--Recent Sales-->
                    <div class="product-list">
                        
                        <div class="row mb-0 px-3 pt-3">
                            <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header"><i class="fab fa-ravelry mr-2"></i>Daftar Donasi Mitra</h6></div>
                            <div class="col-sm-4 text-right pb-3">
                                {{-- <div class="pull-right mr-3 btn-order-bulk">
                                    <button class="btn btn-theme btn-round">View all</button>
                                </div> --}}

                                <div class="clearfix"></div>
                            </div>
                        </div>
                        
                        <div class="table-responsive product-list">
                            
                            <table class="table mt-0" id="productList">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Rumah Makan</th>
                                        <th class="text-center">Donatur</th>
                                        <th class="text-center">Kontak</th>
                                        <th class="text-center">Kuota</th>
                                        <th class="text-center">Donasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($data_lokasimakangratis as $data)
                                    
                                    <tr>
                                        <td class="align-middle">{{ $loop->iteration}}</td>
                                        <td class="align-middle">{{ $data->daftarmitrarumahmakann->namarumahmakan}}</td>
                                        <td class="align-middle">
                                            <div class="customers">
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img4.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img5.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img3.png')"></span>
                                                <span class="customer-circle end text-light text-center pt-2">+9</span>
                                                </div>
                                                </td>
                                                <td class="align-middle">
                                                    <button class="btn-outline-theme btn-round">
                                                        {{ $data->kontak}}
                                                        </button>
                                                        </td>
                                                <td class="align-middle">
                                                    <button class="btn-outline-success btn-round">
                                                        {{ $data->kuota}}
                                                        </button>
                                                        </td>
                                                    <td>Rp. 25.000.000,- </td>
                                                                </tr>
                                                              
                                                            @endforeach
                            </table>
                            </div>
                    </div>
                    <!--/Recent sales-->
                </div>
                <!--Product summary-->
     
                @include('be_dashboard.dashboard.part.menufooter')
              
            </div>
        </div>

        <!--Main Content-->

    </div>


    @include('be_dashboard.dashboard.part.footer')

    
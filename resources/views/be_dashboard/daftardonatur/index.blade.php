@include('be_dashboard.dashboard.part.header')
@include('be_dashboard.dashboard.part.menuheader')
@include('be_dashboard.dashboard.part.sidebar')

    
    <!--Page Wrapper-->

    {{-- <div class="container-fluid"> --}}

        

        
            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0">
                <h5 class="mb-0" ><strong>Dashboard | {{ $title_data}} </strong></h5>


                  <!--Products summary-->
                <div class="mt-4 mb-4 bg-white border shadow lh-sm">
                    <!--Recent Sales-->
                    <div class="product-list">
                        
                        <div class="row mb-0 px-3 pt-3">
                            <div class="font-bold col-sm-8 pt-2"><h6 class="mb-4 bc-header"><i class="fas fa-book mr-2"></i>{{ $data_halaman}}</h6></div>
                            <div class="col-sm-4 text-right pb-3">
                                <div class="pull-right mr-3 btn-order-bulk">
                                    <button class="btn btn-theme btn-round"><i class="fab fa-ravelry mr-2"></i>HaiuCare Bangun Indonesia</button>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                        
                        <div class="table-responsive product-list">
                            <table class="table mt-0" id="productList">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Lengkap</th>
                                        <th class="text-center">Telepon</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>

                                @foreach ($data_donatur as $data)
                                    
                                <tbody>
                                    <tr>
                                        <td class="align-middle text-center">{{ $loop->iteration}}</td>
                                        <td class="align-middle text-center">{{$data->name}}</td>
                                        <td class="align-middle text-center">{{$data->phone_number}}</td>
{{--                                      
                                        <td class="align-middle text-center">
                                            <button class="btn-outline-theme btn-round">
                                                {{$data->is_admin}}
                                            </button>
                                        </td>
                                         --}}
                                        <td class="align-middle text-center">
                                            <a href="/404">
                                                <button class="btn-outline-theme btn-round">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </a>
                                            <a href="/404">
                                                <button class="btn-outline-success btn-round">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </a>
                                            <a href="/404">
                                                <button class="btn-outline-danger btn-round">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </a>
                                        </td>
                                        
                                        

                                                                                {{-- <td class="align-middle">
                                            <div class="customers">
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img4.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img5.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img3.png')"></span>
                                                <span class="customer-circle end text-light text-center pt-2">+8</span>
                                            </div>
                                        </td> --}}

                                    </tr>
                                    
                                    @endforeach
                                    
                            </table>


                            </div>
                            </div>
                            <!--/Recent sales-->
                            </div>
                            
                            <div class="pagination-container" style="margin-top: 20px; display: flex; justify-content: center;">
                                <ul class="pagination" style="display: flex; padding-left: 0; list-style: none;">
                                    <li class="page-item {{ $data_donatur->onFirstPage() ? 'disabled' : '' }}" style="margin-right: 5px;">
                                        <a class="page-link" href="{{ $data_donatur->previousPageUrl() }}" style="position: relative; display: block; padding: 0.5rem 0.75rem; margin-left: -1px; line-height: 1.25; color: #007bff; background-color: #fff; border: 1px solid #dee2e6;">Previous</a>
                                    </li>
                            
                                    @foreach ($data_donatur->getUrlRange($data_donatur->currentPage() - 0, $data_donatur->currentPage() + 2) as $page => $url)
                                        <li class="page-item {{ $page == $data_donatur->currentPage() ? 'active' : '' }}" style="margin-right: 5px;">
                                            <a class="page-link" href="{{ $url }}" style="position: relative; display: block; padding: 0.5rem 0.75rem; margin-left: -1px; line-height: 1.25; color: #007bff; background-color: #fff; border: 1px solid #dee2e6;">{{ $page }}</a>
                                        </li>
                                    @endforeach
                            
                                    <li class="page-item {{ $data_donatur->hasMorePages() ? '' : 'disabled' }}" style="margin-right: 5px;">
                                        <a class="page-link" href="{{ $data_donatur->nextPageUrl() }}" style="position: relative; display: block; padding: 0.5rem 0.75rem; margin-left: -1px; line-height: 1.25; color: #007bff; background-color: #fff; border: 1px solid #dee2e6;">Next</a>
                                    </li>
                                </ul>
                            </div>
                                            <!--Product summary-->

                
                
                
                <!--Footer-->
             
                @include('be_dashboard.dashboard.part.menufooter')
                <!--Footer-->
                
                </div>
        </div>

        <!--Main Content-->
        
        </div>
        
        @include('be_dashboard.dashboard.part.footer')
    
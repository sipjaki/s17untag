@include('be_dashboard.dashboard.part.header')
@include('be_dashboard.dashboard.part.menuheader')
@include('be_dashboard.dashboard.part.sidebar')

    
    <!--Page Wrapper-->

    {{-- <div class="container-fluid"> --}}

        

        
            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0">
                <h5 class="mb-0" ><strong>Dashboard | {{ $data_halamanjadimitra}} </strong></h5>


                  <!--Products summary-->
                <div class="mt-4 mb-4 bg-white border shadow lh-sm">
                    <!--Recent Sales-->
                    <div class="product-list">
                        
                        <div class="row mb-0 px-3 pt-3">
                            <div class="font-bold col-sm-8 pt-2"><h6 class="mb-4 bc-header"><i class="fas fa-book mr-2"></i>{{ $data_halamanjadimitra}}</h6></div>
                            <div class="col-sm-4 text-right pb-3">
                                <div class="pull-right mr-3 btn-order-bulk">
                                    <button class="btn btn-theme btn-round"><i class="fas fa-edit mr-2"></i>Create New</button>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                        
                        <div class="table-responsive product-list" style="overflow-x: auto;">

                            <table class="table mt-0" id="productList" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">No</th>
                                        <th class="text-center" style="width: 150px;">Nama Lengkap</th>
                                        <th class="text-center" style="width: 200px;">Rumah Makan</th>
                                        <th class="text-center" style="width: 200px;">Pemilik</th>
                                        <th class="text-center" style="width: 100px;">Kecamatan</th>
                                        <th class="text-center" style="width: 250px;">Alamat</th>
                                        <th class="text-center" style="width: 100px;">Telepon</th>
                                        <th class="text-center" style="width: 100px;">Email</th>
                                        <th class="text-center" style="width: 75px;">Status</th>
                                        <th class="text-center" style="width: 100px;">Berdiri</th>
                                        <th class="text-center" style="width: 50px;">Kuota</th>
                                        <th class="text-center" style="width: 300px;">KTP</th>
                                        <th class="text-center" style="width: 300px;">Foto Pemilik</th>
                                        <th class="text-center" style="width: 300px;">Foto Rumah Makan</th>
                                        <th class="text-center" style="width: 50px;">Keterangan</th>
                                        <th class="text-center" style="width: 150px;">Aksi</th>
                                    </tr>
                                </thead>
                        
                                @foreach ($data_daftarjadimitra as $data)
                                <tbody>
                                    <tr>
                                        <td class="align-middle text-center" style="width: 50px;">{{ $loop->iteration }}</td>
                                        <td class="align-middle text-center" style="width: 150px;">{{ $data->user->name }}</td>
                                        <td class="align-middle text-center" style="width: 200px;">{{ $data->nama_rumahmakan }}</td>
                                        <td class="align-middle text-center" style="width: 200px;">{{ $data->nama_pemilik }}</td>
                                        <td class="align-middle text-center" style="width: 100px;">{{ $data->pilihan_kota }}</td>
                                        <td class="align-middle text-center" style="width: 250px;">{{ $data->alamat }}</td>
                                        <td class="align-middle text-center" style="width: 100px;">{{ $data->nomor_telepon }}</td>
                                        <td class="align-middle text-center" style="width: 100px;">{{ $data->email }}</td>
                                        <td class="align-middle text-center" style="width: 75px;">
                                            <button class="btn-outline-theme btn-round">
                                                {{ $data->active }}
                                            </button>
                                        </td>
                        
                                        <td class="align-middle text-center" style="width: 100px;">{{ $data->tanggal_berdiri }}</td>
                                        <td class="align-middle text-center" style="width: 50px;">{{ $data->kuota_porsi }}</td>
                                        <td class="align-middle text-center" style="width: 300px;">
                                            <img src="{{ $data->ktp }}" alt="" style="width: 100px; height: 100px;">
                                        </td>
                        
                                        <td class="align-middle text-center" style="width: 300px;">
                                            <img src="{{ $data->foto_mitra }}" alt="" style="width: 100px; height: 100px;">
                                        </td>
                        
                                        <td class="align-middle text-center" style="width: 300px;">
                                            <img src="{{ $data->foto_umkm }}" alt="" style="width: 100px; height: 100px;">
                                        </td>
                        
                                        <td class="align-middle text-center" style="width: 50px;">Halo</td>
                        
                                        <td class="align-middle text-center" style="width: 150px;">
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
                                    </tr>
                                </tbody>
                                @endforeach
                        
                            </table>
                        </div>
                             </div>
                            <!--/Recent sales-->
                            </div>
                            <div class="pagination-container" style="margin-top: 20px; display: flex; justify-content: center;">
                                <ul class="pagination" style="display: flex; padding-left: 0; list-style: none;">
                                    <li class="page-item {{ $data_daftarjadimitra->onFirstPage() ? 'disabled' : '' }}" style="margin-right: 5px;">
                                        <a class="page-link" href="{{ $data_daftarjadimitra->previousPageUrl() }}" style="position: relative; display: block; padding: 0.5rem 0.75rem; margin-left: -1px; line-height: 1.25; color: #007bff; background-color: #fff; border: 1px solid #dee2e6;">Previous</a>
                                    </li>
                            
                                    @foreach ($data_daftarjadimitra->getUrlRange($data_daftarjadimitra->currentPage() - 0, $data_daftarjadimitra->currentPage() + 2) as $page => $url)
                                        <li class="page-item {{ $page == $data_daftarjadimitra->currentPage() ? 'active' : '' }}" style="margin-right: 5px;">
                                            <a class="page-link" href="{{ $url }}" style="position: relative; display: block; padding: 0.5rem 0.75rem; margin-left: -1px; line-height: 1.25; color: #007bff; background-color: #fff; border: 1px solid #dee2e6;">{{ $page }}</a>
                                        </li>
                                    @endforeach
                            
                                    <li class="page-item {{ $data_daftarjadimitra->hasMorePages() ? '' : 'disabled' }}" style="margin-right: 5px;">
                                        <a class="page-link" href="{{ $data_daftarjadimitra->nextPageUrl() }}" style="position: relative; display: block; padding: 0.5rem 0.75rem; margin-left: -1px; line-height: 1.25; color: #007bff; background-color: #fff; border: 1px solid #dee2e6;">Next</a>
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
    
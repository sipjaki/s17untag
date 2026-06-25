{{-- ============================================================
     DATA PRESTASI (CARD ELEGAN - RESPONSIF)
     DENGAN CUSTOM BUTTON (btn-biru, btn-merah, dll)
     ============================================================ --}}

@include('backend.00_dashboard.08_style')

<div class="col-12">
    <div class="card" style="border-radius: 16px; border: none; box-shadow: 0 2px 12px rgba(0,0,0,0.05);">
        <div class="card-body" style="padding: clamp(16px, 2vw, 24px);">

            <!-- Judul & Tombol Tambah -->
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                <div>
                    <h4 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 600; margin-bottom: 2px; font-size: clamp(18px, 3vw, 24px);">
                        🏆 Prestasi Sabhagiriwana'17
                    </h4>
                    <p class="card-description" style="font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.5vw, 14px); color: #7a8a9e; margin: 0;">
                        Kelola data prestasi Sabhagiriwana'17
                    </p>
                </div>
                {{-- TOMBOL TAMBAH -> btn-biru --}}
                <button class="btn-biru" data-bs-toggle="modal" data-bs-target="#tambahModal">
                    <i class="mdi mdi-plus"></i> Tambah Prestasi
                </button>
            </div>

            {{-- ============================================================
                 SEARCH, PER PAGE, DOWNLOAD
                 ============================================================ --}}
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-3">
                {{-- Search Form --}}
                <div style="flex: 1; min-width: 200px;">
                    <form method="GET" action="{{ route('07prestasi.index') }}" class="d-flex gap-2" id="searchForm">
                        <div class="input-group" style="border-radius: 10px; overflow: hidden; border: 1px solid #e0e4ea;">
                            <span class="input-group-text bg-white border-0" style="padding: 0 12px;">
                                <i class="mdi mdi-magnify" style="color: #7a8a9e;"></i>
                            </span>
                            <input type="text" class="form-control border-0" name="search" placeholder="Cari kegiatan, tahun, keterangan..." value="{{ request('search') }}" style="font-family: 'Poppins', sans-serif; font-size: 14px; padding: 8px 0;" id="searchInput">
                            <input type="hidden" name="per_page" value="{{ request('per_page', 10) }}">
                        </div>
                        {{-- TOMBOL CARI -> btn-biru --}}
                        <button type="submit" class="btn-biru">
                            <i class="mdi mdi-magnify"></i> Cari
                        </button>
                        @if(request('search'))
                            {{-- TOMBOL RESET -> btn-silver --}}
                            <a href="{{ route('07prestasi.index') }}" class="btn-silver">
                                <i class="mdi mdi-close"></i> Reset
                            </a>
                        @endif
                    </form>
                </div>

                {{-- Per Page & Download --}}
                <div class="d-flex flex-wrap align-items-center gap-2">
                    {{-- Per Page --}}
                    <div style="display: flex; align-items: center; gap: 6px;">
                        <span style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #5a6a7a; white-space: nowrap;">Tampil:</span>
                        <form method="GET" action="{{ route('07prestasi.index') }}" id="perPageForm" class="d-inline">
                            <input type="hidden" name="search" value="{{ request('search') }}">
                            <select name="per_page" onchange="document.getElementById('perPageForm').submit()" style="border-radius: 8px; border: 1px solid #e0e4ea; padding: 6px 10px; font-family: 'Poppins', sans-serif; font-size: 13px; background: white; cursor: pointer; outline: none;">
                                <option value="10" {{ request('per_page', 10) == 10 ? 'selected' : '' }}>10</option>
                                <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
                                <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
                                <option value="75" {{ request('per_page') == 75 ? 'selected' : '' }}>75</option>
                                <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100</option>
                                <option value="200" {{ request('per_page') == 200 ? 'selected' : '' }}>200</option>
                                <option value="500" {{ request('per_page') == 500 ? 'selected' : '' }}>500</option>
                                <option value="1000" {{ request('per_page') == 1000 ? 'selected' : '' }}>1000</option>
                            </select>
                        </form>
                        <span style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #b0b8c4; white-space: nowrap;">
                            (Total: {{ $data->total() }} data)
                        </span>
                    </div>

                    {{-- Download Button -> btn-orange --}}
                    <button onclick="exportToCSV()" class="btn-orange" style="display: inline-flex; align-items: center; gap: 6px;">
                        <i class="mdi mdi-download"></i> Download
                    </button>
                </div>
            </div>

            <!-- ============================================================
                 TAMPILAN DATA CARD (RESPONSIF)
                 ============================================================ -->
            <div id="dataContainer">
                @forelse ($data as $index => $item)
                    <div class="card mb-3" style="border-radius: 16px; border: 1px solid #f0f2f5; box-shadow: 0 2px 8px rgba(0,0,0,0.02); overflow: hidden; transition: all 0.3s ease; background: #ffffff;">
                        <div class="card-body" style="padding: clamp(16px, 2vw, 24px);">

                            <!-- ===== HEADER ===== -->
                            <div class="d-flex flex-wrap justify-content-between align-items-start gap-3">

                                <!-- Kiri: Nomor + Kegiatan + Tahun -->
                                <div style="flex: 1; min-width: 0;">
                                    <div class="d-flex align-items-center gap-2 flex-wrap">
                                        <!-- Nomor Urut -->
                                        <span style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #c62828; font-size: clamp(12px, 1.3vw, 14px); background: rgba(198,40,40,0.08); padding: 3px 12px; border-radius: 30px; white-space: nowrap;">
                                            #{{ $data->firstItem() + $index }}
                                        </span>
                                        <!-- Kegiatan (sabha1) -->
                                        <h5 style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; margin: 0; font-size: clamp(14px, 1.8vw, 16px); word-break: break-word;">
                                            {{ $item->sabha1 ?? 'Kegiatan' }}
                                        </h5>
                                    </div>
                                    <!-- Tahun (sabha2) -->
                                    <div style="margin-top: 4px; display: flex; flex-wrap: wrap; gap: 12px;">
                                        <span style="font-family: 'Poppins', sans-serif; font-size: clamp(10px, 1.1vw, 12px); color: #7a8a9e;">
                                            <i class="mdi mdi-calendar"></i> Tahun: <strong style="color: #1a1a2e;">{{ $item->sabha2 ?? '-' }}</strong>
                                        </span>
                                        <span style="font-family: 'Poppins', sans-serif; font-size: clamp(10px, 1.1vw, 12px); color: #b0b8c4;">
                                            <i class="mdi mdi-clock"></i> {{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}
                                        </span>
                                    </div>
                                </div>

                                <!-- Kanan: Tombol Aksi -->
                                <div class="d-flex gap-1 flex-shrink-0">
                                    {{-- TOMBOL EDIT -> btn-hijau, langsung data-bs-toggle --}}
                                    <button class="btn-hijau" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}" style="padding: clamp(4px, 0.6vw, 6px) clamp(6px, 0.8vw, 12px); font-size: clamp(10px, 1.1vw, 13px);">
                                        <i class="mdi mdi-pencil"></i> <span class="d-none d-sm-inline">Edit</span>
                                    </button>
                                    {{-- TOMBOL HAPUS -> btn-merah --}}
                                    <button class="btn-merah" data-id="{{ $item->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}" style="padding: clamp(4px, 0.6vw, 6px) clamp(6px, 0.8vw, 12px); font-size: clamp(10px, 1.1vw, 13px);">
                                        <i class="mdi mdi-delete"></i> <span class="d-none d-sm-inline">Hapus</span>
                                    </button>
                                </div>
                            </div>

                            <!-- ===== DIVIDER ===== -->
                            <hr style="margin: clamp(10px, 1.5vw, 12px) 0; border-color: #f0f2f5;">

                            <!-- ===== BODY: KETERANGAN ===== -->
                            <div class="row g-2">
                                <!-- Keterangan (sabha3) -->
                                <div class="col-12">
                                    <div style="display: flex; align-items: flex-start; gap: 8px; background: #f8fafc; padding: 10px 14px; border-radius: 8px;">
                                        <i class="mdi mdi-information" style="color: #0d47a1; font-size: clamp(16px, 1.8vw, 20px); margin-top: 2px;"></i>
                                        <span style="font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px); color: #5a6a7a; word-break: break-word; line-height: 1.6;">
                                            <strong style="color: #1a1a2e;">Keterangan:</strong> {{ $item->sabha3 ?? '-' }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- ===== FOTO (5 Gambar) ===== -->
                            <hr style="margin: clamp(10px, 1.5vw, 12px) 0; border-color: #f0f2f5;">

                            <div class="row g-2">
                                <!-- Foto 1 (sabha4) -->
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div style="background: #f8fafc; border-radius: 10px; padding: 6px; text-align: center; border: 1px solid #e8ecf1; height: 100%;">
                                        <p style="font-family: 'Poppins', sans-serif; font-size: clamp(8px, 0.8vw, 10px); color: #b0b8c4; margin: 0 0 4px 0; font-weight: 500;">Foto 1</p>
                                        @if($item->sabha4 && file_exists(public_path($item->sabha4)))
                                            <a href="{{ asset($item->sabha4) }}" target="_blank">
                                                <img src="{{ asset($item->sabha4) }}" alt="Foto 1" style="width: 100%; height: clamp(60px, 8vw, 80px); object-fit: cover; border-radius: 6px;">
                                            </a>
                                        @else
                                            <div style="width: 100%; height: clamp(60px, 8vw, 80px); background: #f0f2f5; border-radius: 6px; display: flex; align-items: center; justify-content: center; color: #b0b8c4;">
                                                <i class="mdi mdi-image" style="font-size: clamp(20px, 2vw, 24px);"></i>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <!-- Foto 2 (sabha5) -->
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div style="background: #f8fafc; border-radius: 10px; padding: 6px; text-align: center; border: 1px solid #e8ecf1; height: 100%;">
                                        <p style="font-family: 'Poppins', sans-serif; font-size: clamp(8px, 0.8vw, 10px); color: #b0b8c4; margin: 0 0 4px 0; font-weight: 500;">Foto 2</p>
                                        @if($item->sabha5 && file_exists(public_path($item->sabha5)))
                                            <a href="{{ asset($item->sabha5) }}" target="_blank">
                                                <img src="{{ asset($item->sabha5) }}" alt="Foto 2" style="width: 100%; height: clamp(60px, 8vw, 80px); object-fit: cover; border-radius: 6px;">
                                            </a>
                                        @else
                                            <div style="width: 100%; height: clamp(60px, 8vw, 80px); background: #f0f2f5; border-radius: 6px; display: flex; align-items: center; justify-content: center; color: #b0b8c4;">
                                                <i class="mdi mdi-image" style="font-size: clamp(20px, 2vw, 24px);"></i>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <!-- Foto 3 (sabha6) -->
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div style="background: #f8fafc; border-radius: 10px; padding: 6px; text-align: center; border: 1px solid #e8ecf1; height: 100%;">
                                        <p style="font-family: 'Poppins', sans-serif; font-size: clamp(8px, 0.8vw, 10px); color: #b0b8c4; margin: 0 0 4px 0; font-weight: 500;">Foto 3</p>
                                        @if($item->sabha6 && file_exists(public_path($item->sabha6)))
                                            <a href="{{ asset($item->sabha6) }}" target="_blank">
                                                <img src="{{ asset($item->sabha6) }}" alt="Foto 3" style="width: 100%; height: clamp(60px, 8vw, 80px); object-fit: cover; border-radius: 6px;">
                                            </a>
                                        @else
                                            <div style="width: 100%; height: clamp(60px, 8vw, 80px); background: #f0f2f5; border-radius: 6px; display: flex; align-items: center; justify-content: center; color: #b0b8c4;">
                                                <i class="mdi mdi-image" style="font-size: clamp(20px, 2vw, 24px);"></i>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <!-- Foto 4 (sabha7) -->
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div style="background: #f8fafc; border-radius: 10px; padding: 6px; text-align: center; border: 1px solid #e8ecf1; height: 100%;">
                                        <p style="font-family: 'Poppins', sans-serif; font-size: clamp(8px, 0.8vw, 10px); color: #b0b8c4; margin: 0 0 4px 0; font-weight: 500;">Foto 4</p>
                                        @if($item->sabha7 && file_exists(public_path($item->sabha7)))
                                            <a href="{{ asset($item->sabha7) }}" target="_blank">
                                                <img src="{{ asset($item->sabha7) }}" alt="Foto 4" style="width: 100%; height: clamp(60px, 8vw, 80px); object-fit: cover; border-radius: 6px;">
                                            </a>
                                        @else
                                            <div style="width: 100%; height: clamp(60px, 8vw, 80px); background: #f0f2f5; border-radius: 6px; display: flex; align-items: center; justify-content: center; color: #b0b8c4;">
                                                <i class="mdi mdi-image" style="font-size: clamp(20px, 2vw, 24px);"></i>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <!-- Foto 5 (sabha8) -->
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div style="background: #f8fafc; border-radius: 10px; padding: 6px; text-align: center; border: 1px solid #e8ecf1; height: 100%;">
                                        <p style="font-family: 'Poppins', sans-serif; font-size: clamp(8px, 0.8vw, 10px); color: #b0b8c4; margin: 0 0 4px 0; font-weight: 500;">Foto 5</p>
                                        @if($item->sabha8 && file_exists(public_path($item->sabha8)))
                                            <a href="{{ asset($item->sabha8) }}" target="_blank">
                                                <img src="{{ asset($item->sabha8) }}" alt="Foto 5" style="width: 100%; height: clamp(60px, 8vw, 80px); object-fit: cover; border-radius: 6px;">
                                            </a>
                                        @else
                                            <div style="width: 100%; height: clamp(60px, 8vw, 80px); background: #f0f2f5; border-radius: 6px; display: flex; align-items: center; justify-content: center; color: #b0b8c4;">
                                                <i class="mdi mdi-image" style="font-size: clamp(20px, 2vw, 24px);"></i>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- ============================================================
                         MODAL HAPUS (RESPONSIF)
                         ============================================================ --}}
                    <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-sm">
                            <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
                                <div class="modal-header" style="border-bottom: 2px solid #c62828; padding: clamp(14px, 2vw, 20px) clamp(14px, 2vw, 24px);">
                                    <h5 class="modal-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; font-size: clamp(16px, 2vw, 18px);">
                                        <i class="mdi mdi-delete" style="color: #c62828; margin-right: 10px;"></i>
                                        Konfirmasi Hapus
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body" style="padding: clamp(16px, 2vw, 24px);">
                                    <p style="font-size: clamp(14px, 1.5vw, 15px); color: #1a1a2e; margin-bottom: 4px; font-family: 'Poppins', sans-serif;">
                                        Apakah Anda yakin ingin menghapus prestasi ini?
                                    </p>
                                    <p style="font-size: clamp(12px, 1.2vw, 13px); color: #7a8a9e; margin: 0; font-family: 'Poppins', sans-serif; word-break: break-word;">
                                        Kegiatan: <strong>{{ $item->sabha1 ?? 'Data' }}</strong>
                                    </p>
                                </div>
                                <div class="modal-footer" style="border-top: 1px solid #f0f2f5; padding: clamp(10px, 1.5vw, 16px) clamp(14px, 2vw, 24px); flex-wrap: wrap; gap: 8px;">
                                    {{-- BATAL -> btn-silver --}}
                                    <button type="button" class="btn-silver" data-bs-dismiss="modal">Batal</button>
                                    <form action="{{ route('07prestasi.destroy', $item->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        {{-- YA, HAPUS -> btn-merah --}}
                                        <button type="submit" class="btn-merah">
                                            <i class="mdi mdi-delete" style="margin-right: 6px;"></i> Ya, Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty
                    <div style="text-align: center; padding: clamp(60px, 8vw, 80px) 20px; background: #f8fafc; border-radius: 16px; border: 2px dashed #e0e4ea;">
                        <div style="font-size: clamp(48px, 6vw, 64px); margin-bottom: 16px; color: #b0b8c4;">
                            <i class="mdi mdi-trophy"></i>
                        </div>
                        <h5 style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #5a6a7a; margin: 0; font-size: clamp(16px, 2vw, 20px);">
                            @if(request('search'))
                                Data Tidak Ditemukan!
                            @else
                                Belum Ada Data Prestasi
                            @endif
                        </h5>
                        <p style="font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.5vw, 14px); color: #b0b8c4; margin-top: 6px;">
                            @if(request('search'))
                                Tidak ada hasil untuk pencarian "<strong>{{ request('search') }}</strong>"
                            @else
                                Klik tombol <strong>"Tambah Prestasi"</strong> untuk menambahkan data prestasi.
                            @endif
                        </p>
                    </div>
                @endforelse
            </div>

            {{-- ============================================================
                 PAGINATION (RESPONSIF + NEXT PREVIOUS)
                 ============================================================ --}}
            @if($data->total() > 0)
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mt-4 pt-3" style="border-top: 2px solid #f0f2f5;">

                {{-- Info Kiri --}}
                <div style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #6c7a91; background: #f8fafc; padding: 8px 18px; border-radius: 30px; display: inline-flex; align-items: center; gap: 8px; border: 1px solid #e9edf2;">
                    <i class="mdi mdi-list-ul" style="color: #4f6af5; font-size: 14px;"></i>
                    Menampilkan
                    <strong style="color: #1a2332; font-weight: 600;">{{ $data->firstItem() }}</strong> -
                    <strong style="color: #1a2332; font-weight: 600;">{{ $data->lastItem() }}</strong>
                    dari
                    <strong style="color: #1a2332; font-weight: 600;">{{ $data->total() }}</strong>
                    <span style="background: linear-gradient(135deg, #4f6af5, #7c3aed); color: white; padding: 2px 12px; border-radius: 20px; font-size: 12px; font-weight: 600; margin-left: 4px;">data</span>
                </div>

                {{-- Pagination --}}
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-nav" style="display: flex; align-items: center; gap: 6px; margin: 0; flex-wrap: wrap; justify-content: center;">

                        @if ($data->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; color: #b8c5d6; background: transparent; border: 2px solid transparent; border-radius: 12px; padding: 8px 14px; min-width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; opacity: 0.5; cursor: not-allowed;">
                                    <i class="mdi mdi-chevron-left" style="font-size: 18px;"></i> Prev
                                </span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $data->previousPageUrl() }}" rel="prev" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; color: #1a2332; background: #f8fafc; border: 1px solid #e9edf2; border-radius: 12px; padding: 8px 14px; min-width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); text-decoration: none;">
                                    <i class="mdi mdi-chevron-left" style="font-size: 18px;"></i> Prev
                                </a>
                            </li>
                        @endif

                        @php
                            $start = max(1, $data->currentPage() - 2);
                            $end = min($data->lastPage(), $data->currentPage() + 2);
                        @endphp

                        @if ($start > 1)
                            <li class="page-item">
                                <a class="page-link" href="{{ $data->url(1) }}" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; color: #1a2332; background: transparent; border: 2px solid transparent; border-radius: 12px; padding: 8px 16px; min-width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); text-decoration: none;">
                                    1
                                </a>
                            </li>
                            @if ($start > 2)
                                <li class="page-item disabled">
                                    <span class="page-link" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 600; color: #b8c5d6; background: transparent; border: none; padding: 8px 12px;">...</span>
                                </li>
                            @endif
                        @endif

                        @for ($i = $start; $i <= $end; $i++)
                            @if ($i == $data->currentPage())
                                <li class="page-item active">
                                    <span class="page-link" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 600; background: linear-gradient(135deg, #4f6af5, #7c3aed); border-color: #4f6af5; color: #ffffff; border-radius: 12px; padding: 8px 16px; min-width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(79, 106, 245, 0.35); transform: translateY(-2px); animation: pulse 2s infinite;">
                                        {{ $i }}
                                    </span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $data->url($i) }}" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; color: #1a2332; background: transparent; border: 2px solid transparent; border-radius: 12px; padding: 8px 16px; min-width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); text-decoration: none;">
                                        {{ $i }}
                                    </a>
                                </li>
                            @endif
                        @endfor

                        @if ($end < $data->lastPage())
                            @if ($end < $data->lastPage() - 1)
                                <li class="page-item disabled">
                                    <span class="page-link" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 600; color: #b8c5d6; background: transparent; border: none; padding: 8px 12px;">...</span>
                                </li>
                            @endif
                            <li class="page-item">
                                <a class="page-link" href="{{ $data->url($data->lastPage()) }}" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; color: #1a2332; background: transparent; border: 2px solid transparent; border-radius: 12px; padding: 8px 16px; min-width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); text-decoration: none;">
                                    {{ $data->lastPage() }}
                                </a>
                            </li>
                        @endif

                        @if ($data->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $data->nextPageUrl() }}" rel="next" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; color: #1a2332; background: #f8fafc; border: 1px solid #e9edf2; border-radius: 12px; padding: 8px 14px; min-width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); text-decoration: none;">
                                    Next <i class="mdi mdi-chevron-right" style="font-size: 18px;"></i>
                                </a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <span class="page-link" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; color: #b8c5d6; background: transparent; border: 2px solid transparent; border-radius: 12px; padding: 8px 14px; min-width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; opacity: 0.5; cursor: not-allowed;">
                                    Next <i class="mdi mdi-chevron-right" style="font-size: 18px;"></i>
                                </span>
                            </li>
                        @endif

                    </ul>
                </nav>

            </div>
            @endif

        </div>
    </div>
</div>

{{-- ============================================================
     MODAL TAMBAH DATA (RESPONSIF)
     ============================================================ --}}
<div class="modal fade" id="tambahModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
            <div class="modal-header" style="border-bottom: 2px solid #c62828; padding: clamp(14px, 2vw, 20px) clamp(14px, 2vw, 24px);">
                <h5 class="modal-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; font-size: clamp(16px, 2vw, 20px);">
                    <i class="mdi mdi-plus" style="color: #c62828; margin-right: 10px;"></i>
                    Tambah Prestasi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('prestasi.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body" style="padding: clamp(14px, 2vw, 24px);">
                    <div class="row g-3">
                        <!-- Kegiatan (sabha1) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-trophy" style="color: #c62828;"></i> Kegiatan
                            </label>
                            <input type="text" class="form-control" name="sabha1" placeholder="Masukkan nama kegiatan" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);" required>
                        </div>

                        <!-- Tahun (sabha2) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-calendar" style="color: #0d47a1;"></i> Tahun
                            </label>
                            <input type="text" class="form-control" name="sabha2" placeholder="Contoh: 2024" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>

                        <!-- Keterangan (sabha3) -->
                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-information" style="color: #0d47a1;"></i> Keterangan
                            </label>
                            <textarea class="form-control" name="sabha3" rows="4" placeholder="Masukkan keterangan prestasi..." style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);"></textarea>
                        </div>

                        <!-- Foto 1 (sabha4) -->
                        <div class="col-12 col-md-4">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-camera" style="color: #c62828;"></i> Foto 1
                            </label>
                            <input type="file" class="form-control" name="sabha4" accept=".jpg,.jpeg,.png,.gif,.webp" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.2vw, 13px); padding: 6px 12px;">
                            <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: clamp(10px, 1vw, 11px);">Format: JPG, PNG, GIF, WEBP. Maks 20 MB</small>
                        </div>

                        <!-- Foto 2 (sabha5) -->
                        <div class="col-12 col-md-4">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-camera" style="color: #c62828;"></i> Foto 2
                            </label>
                            <input type="file" class="form-control" name="sabha5" accept=".jpg,.jpeg,.png,.gif,.webp" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.2vw, 13px); padding: 6px 12px;">
                            <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: clamp(10px, 1vw, 11px);">Format: JPG, PNG, GIF, WEBP. Maks 20 MB</small>
                        </div>

                        <!-- Foto 3 (sabha6) -->
                        <div class="col-12 col-md-4">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-camera" style="color: #c62828;"></i> Foto 3
                            </label>
                            <input type="file" class="form-control" name="sabha6" accept=".jpg,.jpeg,.png,.gif,.webp" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.2vw, 13px); padding: 6px 12px;">
                            <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: clamp(10px, 1vw, 11px);">Format: JPG, PNG, GIF, WEBP. Maks 20 MB</small>
                        </div>

                        <!-- Foto 4 (sabha7) -->
                        <div class="col-12 col-md-4">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-camera" style="color: #c62828;"></i> Foto 4
                            </label>
                            <input type="file" class="form-control" name="sabha7" accept=".jpg,.jpeg,.png,.gif,.webp" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.2vw, 13px); padding: 6px 12px;">
                            <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: clamp(10px, 1vw, 11px);">Format: JPG, PNG, GIF, WEBP. Maks 20 MB</small>
                        </div>

                        <!-- Foto 5 (sabha8) -->
                        <div class="col-12 col-md-4">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-camera" style="color: #c62828;"></i> Foto 5
                            </label>
                            <input type="file" class="form-control" name="sabha8" accept=".jpg,.jpeg,.png,.gif,.webp" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.2vw, 13px); padding: 6px 12px;">
                            <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: clamp(10px, 1vw, 11px);">Format: JPG, PNG, GIF, WEBP. Maks 20 MB</small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border-top: 1px solid #f0f2f5; padding: clamp(10px, 1.5vw, 16px) clamp(14px, 2vw, 24px); flex-wrap: wrap; gap: 8px;">
                    {{-- BATAL -> btn-silver --}}
                    <button type="button" class="btn-silver" data-bs-dismiss="modal">Batal</button>
                    {{-- SIMPAN -> btn-biru --}}
                    <button type="submit" class="btn-biru">
                        <i class="mdi mdi-content-save" style="margin-right: 6px;"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- ============================================================
     MODAL EDIT DATA (RESPONSIF)
     ============================================================ --}}
@foreach ($data as $item)
<div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
            <div class="modal-header" style="border-bottom: 2px solid #0d47a1; padding: clamp(14px, 2vw, 20px) clamp(14px, 2vw, 24px);">
                <h5 class="modal-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; font-size: clamp(16px, 2vw, 20px);">
                    <i class="mdi mdi-pencil" style="color: #0d47a1; margin-right: 10px;"></i>
                    Edit Prestasi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('prestasi.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body" style="padding: clamp(14px, 2vw, 24px);">
                    <div class="row g-3">
                        <!-- Kegiatan (sabha1) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-trophy" style="color: #c62828;"></i> Kegiatan
                            </label>
                            <input type="text" class="form-control" name="sabha1" value="{{ $item->sabha1 }}" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);" required>
                        </div>

                        <!-- Tahun (sabha2) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-calendar" style="color: #0d47a1;"></i> Tahun
                            </label>
                            <input type="text" class="form-control" name="sabha2" value="{{ $item->sabha2 }}" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>

                        <!-- Keterangan (sabha3) -->
                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-information" style="color: #0d47a1;"></i> Keterangan
                            </label>
                            <textarea class="form-control" name="sabha3" rows="4" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">{{ $item->sabha3 }}</textarea>
                        </div>

                        <!-- Foto 1 (sabha4) -->
                        <div class="col-12 col-md-4">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-camera" style="color: #c62828;"></i> Foto 1
                            </label>
                            @if($item->sabha4 && file_exists(public_path($item->sabha4)))
                                <div style="margin-bottom: 8px;">
                                    <img src="{{ asset($item->sabha4) }}" alt="Foto 1" style="width: 100%; height: clamp(60px, 8vw, 80px); object-fit: cover; border-radius: 8px; border: 2px solid #e8ecf1;">
                                    <p style="font-size: clamp(10px, 1vw, 11px); color: #7a8a9e; margin: 4px 0 0; font-family: 'Poppins', sans-serif;">Foto saat ini</p>
                                </div>
                            @else
                                <p style="font-size: clamp(11px, 1.1vw, 12px); color: #b0b8c4; font-family: 'Poppins', sans-serif; margin-bottom: 8px;">Belum ada foto</p>
                            @endif
                            <input type="file" class="form-control" name="sabha4" accept=".jpg,.jpeg,.png,.gif,.webp" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.2vw, 13px); padding: 6px 12px;">
                            <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: clamp(10px, 1vw, 11px);">Format: JPG, PNG, GIF, WEBP. Maks 20 MB</small>
                        </div>

                        <!-- Foto 2 (sabha5) -->
                        <div class="col-12 col-md-4">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-camera" style="color: #c62828;"></i> Foto 2
                            </label>
                            @if($item->sabha5 && file_exists(public_path($item->sabha5)))
                                <div style="margin-bottom: 8px;">
                                    <img src="{{ asset($item->sabha5) }}" alt="Foto 2" style="width: 100%; height: clamp(60px, 8vw, 80px); object-fit: cover; border-radius: 8px; border: 2px solid #e8ecf1;">
                                    <p style="font-size: clamp(10px, 1vw, 11px); color: #7a8a9e; margin: 4px 0 0; font-family: 'Poppins', sans-serif;">Foto saat ini</p>
                                </div>
                            @else
                                <p style="font-size: clamp(11px, 1.1vw, 12px); color: #b0b8c4; font-family: 'Poppins', sans-serif; margin-bottom: 8px;">Belum ada foto</p>
                            @endif
                            <input type="file" class="form-control" name="sabha5" accept=".jpg,.jpeg,.png,.gif,.webp" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.2vw, 13px); padding: 6px 12px;">
                            <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: clamp(10px, 1vw, 11px);">Format: JPG, PNG, GIF, WEBP. Maks 20 MB</small>
                        </div>

                        <!-- Foto 3 (sabha6) -->
                        <div class="col-12 col-md-4">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-camera" style="color: #c62828;"></i> Foto 3
                            </label>
                            @if($item->sabha6 && file_exists(public_path($item->sabha6)))
                                <div style="margin-bottom: 8px;">
                                    <img src="{{ asset($item->sabha6) }}" alt="Foto 3" style="width: 100%; height: clamp(60px, 8vw, 80px); object-fit: cover; border-radius: 8px; border: 2px solid #e8ecf1;">
                                    <p style="font-size: clamp(10px, 1vw, 11px); color: #7a8a9e; margin: 4px 0 0; font-family: 'Poppins', sans-serif;">Foto saat ini</p>
                                </div>
                            @else
                                <p style="font-size: clamp(11px, 1.1vw, 12px); color: #b0b8c4; font-family: 'Poppins', sans-serif; margin-bottom: 8px;">Belum ada foto</p>
                            @endif
                            <input type="file" class="form-control" name="sabha6" accept=".jpg,.jpeg,.png,.gif,.webp" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.2vw, 13px); padding: 6px 12px;">
                            <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: clamp(10px, 1vw, 11px);">Format: JPG, PNG, GIF, WEBP. Maks 20 MB</small>
                        </div>

                        <!-- Foto 4 (sabha7) -->
                        <div class="col-12 col-md-4">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-camera" style="color: #c62828;"></i> Foto 4
                            </label>
                            @if($item->sabha7 && file_exists(public_path($item->sabha7)))
                                <div style="margin-bottom: 8px;">
                                    <img src="{{ asset($item->sabha7) }}" alt="Foto 4" style="width: 100%; height: clamp(60px, 8vw, 80px); object-fit: cover; border-radius: 8px; border: 2px solid #e8ecf1;">
                                    <p style="font-size: clamp(10px, 1vw, 11px); color: #7a8a9e; margin: 4px 0 0; font-family: 'Poppins', sans-serif;">Foto saat ini</p>
                                </div>
                            @else
                                <p style="font-size: clamp(11px, 1.1vw, 12px); color: #b0b8c4; font-family: 'Poppins', sans-serif; margin-bottom: 8px;">Belum ada foto</p>
                            @endif
                            <input type="file" class="form-control" name="sabha7" accept=".jpg,.jpeg,.png,.gif,.webp" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.2vw, 13px); padding: 6px 12px;">
                            <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: clamp(10px, 1vw, 11px);">Format: JPG, PNG, GIF, WEBP. Maks 20 MB</small>
                        </div>

                        <!-- Foto 5 (sabha8) -->
                        <div class="col-12 col-md-4">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-camera" style="color: #c62828;"></i> Foto 5
                            </label>
                            @if($item->sabha8 && file_exists(public_path($item->sabha8)))
                                <div style="margin-bottom: 8px;">
                                    <img src="{{ asset($item->sabha8) }}" alt="Foto 5" style="width: 100%; height: clamp(60px, 8vw, 80px); object-fit: cover; border-radius: 8px; border: 2px solid #e8ecf1;">
                                    <p style="font-size: clamp(10px, 1vw, 11px); color: #7a8a9e; margin: 4px 0 0; font-family: 'Poppins', sans-serif;">Foto saat ini</p>
                                </div>
                            @else
                                <p style="font-size: clamp(11px, 1.1vw, 12px); color: #b0b8c4; font-family: 'Poppins', sans-serif; margin-bottom: 8px;">Belum ada foto</p>
                            @endif
                            <input type="file" class="form-control" name="sabha8" accept=".jpg,.jpeg,.png,.gif,.webp" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.2vw, 13px); padding: 6px 12px;">
                            <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: clamp(10px, 1vw, 11px);">Format: JPG, PNG, GIF, WEBP. Maks 20 MB</small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border-top: 1px solid #f0f2f5; padding: clamp(10px, 1.5vw, 16px) clamp(14px, 2vw, 24px); flex-wrap: wrap; gap: 8px;">
                    {{-- BATAL -> btn-silver --}}
                    <button type="button" class="btn-silver" data-bs-dismiss="modal">Batal</button>
                    {{-- UPDATE -> btn-orange --}}
                    <button type="submit" class="btn-orange">
                        <i class="mdi mdi-content-save" style="margin-right: 6px;"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

{{-- ============================================================
     STYLE & SCRIPTS (custom button + pagination + export)
     ============================================================ --}}
@push('styles')
<style>
    /* ============================================================
       BUTTON CUSTOM (sesuai permintaan)
       ============================================================ */
    .btn-biru {
        background-color: #0d6efd;
        color: #ffffff;
        border: none;
        padding: 8px 18px;
        border-radius: 8px;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        font-size: 14px;
        transition: all 0.3s ease;
        box-shadow: 0 0 10px rgba(13, 110, 253, 0.3);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        cursor: pointer;
    }
    .btn-biru:hover {
        background-color: #ffffff;
        color: #000000;
        box-shadow: 0 0 25px rgba(13, 110, 253, 0.7);
        transform: scale(1.02);
    }

    .btn-merah {
        background-color: #dc3545;
        color: #ffffff;
        border: none;
        padding: 8px 18px;
        border-radius: 8px;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        font-size: 14px;
        transition: all 0.3s ease;
        box-shadow: 0 0 10px rgba(220, 53, 69, 0.3);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        cursor: pointer;
    }
    .btn-merah:hover {
        background-color: #ffffff;
        color: #000000;
        box-shadow: 0 0 25px rgba(220, 53, 69, 0.7);
        transform: scale(1.02);
    }

    .btn-orange {
        background-color: #fd7e14;
        color: #ffffff;
        border: none;
        padding: 8px 18px;
        border-radius: 8px;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        font-size: 14px;
        transition: all 0.3s ease;
        box-shadow: 0 0 10px rgba(253, 126, 20, 0.3);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        cursor: pointer;
    }
    .btn-orange:hover {
        background-color: #ffffff;
        color: #000000;
        box-shadow: 0 0 25px rgba(253, 126, 20, 0.7);
        transform: scale(1.02);
    }

    .btn-silver {
        background-color: #adb5bd;
        color: #ffffff;
        border: none;
        padding: 8px 18px;
        border-radius: 8px;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        font-size: 14px;
        transition: all 0.3s ease;
        box-shadow: 0 0 10px rgba(173, 181, 189, 0.3);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        cursor: pointer;
    }
    .btn-silver:hover {
        background-color: #ffffff;
        color: #000000;
        box-shadow: 0 0 25px rgba(173, 181, 189, 0.7);
        transform: scale(1.02);
    }

    .btn-hijau {
        background-color: #198754;
        color: #ffffff;
        border: none;
        padding: 8px 18px;
        border-radius: 8px;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        font-size: 14px;
        transition: all 0.3s ease;
        box-shadow: 0 0 10px rgba(25, 135, 84, 0.3);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        cursor: pointer;
    }
    .btn-hijau:hover {
        background-color: #ffffff;
        color: #000000;
        box-shadow: 0 0 25px rgba(25, 135, 84, 0.7);
        transform: scale(1.02);
    }

    /* ============================================================
       PAGINATION STYLE
       ============================================================ */
    .pagination-nav .page-item {
        margin: 0 2px;
    }

    .pagination-nav .page-link {
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        font-weight: 500;
        color: #1a2332;
        background: transparent;
        border: 2px solid transparent;
        border-radius: 12px;
        padding: 8px 16px;
        min-width: 44px;
        height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        text-decoration: none;
    }

    .pagination-nav .page-link:hover {
        background: #f0f4ff;
        border-color: #4f6af5;
        color: #4f6af5;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(79, 106, 245, 0.15);
    }

    .pagination-nav .page-item.active .page-link {
        background: linear-gradient(135deg, #4f6af5, #7c3aed);
        border-color: #4f6af5;
        color: #ffffff;
        font-weight: 600;
        box-shadow: 0 4px 15px rgba(79, 106, 245, 0.35);
        transform: translateY(-2px);
        animation: pulse 2s infinite;
    }

    .pagination-nav .page-item.disabled .page-link {
        color: #b8c5d6;
        background: transparent;
        border-color: transparent;
        cursor: not-allowed;
        transform: none;
        opacity: 0.5;
    }

    .pagination-nav .page-item:first-child .page-link,
    .pagination-nav .page-item:last-child .page-link {
        font-size: 14px;
        padding: 8px 14px;
        border-radius: 12px;
        background: #f8fafc;
        border: 1px solid #e9edf2;
    }

    .pagination-nav .page-item:first-child .page-link:hover,
    .pagination-nav .page-item:last-child .page-link:hover {
        background: #4f6af5;
        border-color: #4f6af5;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(79, 106, 245, 0.25);
    }

    .pagination-nav .page-item:first-child.disabled .page-link:hover,
    .pagination-nav .page-item:last-child.disabled .page-link:hover {
        background: #f8fafc;
        border-color: #e9edf2;
        color: #b8c5d6;
        transform: none;
        box-shadow: none;
    }

    @keyframes pulse {
        0% { box-shadow: 0 4px 15px rgba(79, 106, 245, 0.35); }
        50% { box-shadow: 0 4px 25px rgba(79, 106, 245, 0.5); }
        100% { box-shadow: 0 4px 15px rgba(79, 106, 245, 0.35); }
    }

    /* ============================================================
       RESPONSIVE
       ============================================================ */
    @media (max-width: 768px) {
        .pagination-nav {
            justify-content: center;
            flex-wrap: wrap;
        }

        .pagination-nav .page-link {
            font-size: 13px;
            padding: 6px 12px;
            min-width: 38px;
            height: 38px;
            border-radius: 10px;
        }

        .pagination-nav .page-item:first-child .page-link,
        .pagination-nav .page-item:last-child .page-link {
            padding: 6px 10px;
            font-size: 12px;
        }
    }

    @media (max-width: 480px) {
        .pagination-nav .page-link {
            font-size: 12px;
            padding: 4px 10px;
            min-width: 34px;
            height: 34px;
            border-radius: 8px;
        }

        .pagination-nav .page-item:first-child .page-link,
        .pagination-nav .page-item:last-child .page-link {
            padding: 4px 8px;
            font-size: 11px;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ---- TUTUP MODAL SAAT KLIK DI LUAR ----
        document.querySelectorAll('.modal').forEach(function(modal) {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    var bsModal = bootstrap.Modal.getInstance(this);
                    if (bsModal) {
                        bsModal.hide();
                    }
                }
            });
        });
    });

    // ============================================================
    // DOWNLOAD CSV
    // ============================================================
    function exportToCSV() {
        var dataCards = document.querySelectorAll('#dataContainer .card');

        if (dataCards.length === 0) {
            alert('Tidak ada data untuk di-download!');
            return;
        }

        var csv = [];
        var headers = ['No', 'Kegiatan', 'Tahun', 'Keterangan', 'Tanggal Dibuat'];
        csv.push(headers.join(','));

        dataCards.forEach(function(card, index) {
            var row = [];

            // No
            var no = index + 1;
            row.push(no);

            // Kegiatan (sabha1)
            var kegiatanEl = card.querySelector('h5');
            var kegiatan = kegiatanEl ? kegiatanEl.textContent.trim() : '-';
            row.push(kegiatan);

            // Tahun (sabha2)
            var tahunEl = card.querySelector('.d-flex.align-items-center.gap-2.flex-wrap .d-flex.flex-wrap.gap-12 span:first-child strong');
            var tahun = tahunEl ? tahunEl.textContent.trim() : '-';
            row.push(tahun);

            // Keterangan (sabha3)
            var ketEl = card.querySelector('.col-12 .d-flex.align-items-start.gap-8 span');
            var keterangan = ketEl ? ketEl.textContent.trim().replace('Keterangan:', '').trim() : '-';
            row.push(keterangan);

            // Tanggal
            var dateEl = card.querySelector('.d-flex.align-items-center.gap-2.flex-wrap .d-flex.flex-wrap.gap-12 span:last-child');
            var date = dateEl ? dateEl.textContent.trim() : '-';
            row.push(date);

            csv.push(row.join(','));
        });

        var blob = new Blob(['\uFEFF' + csv.join('\n')], { type: 'text/csv;charset=utf-8;' });
        var link = document.createElement('a');
        var url = URL.createObjectURL(blob);
        link.setAttribute('href', url);
        link.setAttribute('download', 'prestasi_' + new Date().toISOString().slice(0,10) + '.csv');
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        URL.revokeObjectURL(url);
    }
</script>
@endpush

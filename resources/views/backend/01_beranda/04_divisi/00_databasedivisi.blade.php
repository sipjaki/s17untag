{{-- ============================================================
     DATA DIVISI (CARD ELEGAN - DENGAN FOTO)
     ============================================================ --}}

@include('backend.00_dashboard.08_style')

<div class="col-12">
    <div class="card" style="border-radius: 16px; border: none; box-shadow: 0 2px 12px rgba(0,0,0,0.05);">
        <div class="card-body" style="padding: clamp(16px, 2vw, 24px);">

            <!-- Judul & Tombol Tambah -->
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                <div>
                    <h4 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 600; margin-bottom: 2px; font-size: clamp(18px, 3vw, 24px);">
                        🏢 Divisi Sabhagiriwana'17
                    </h4>
                    <p class="card-description" style="font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.5vw, 14px); color: #7a8a9e; margin: 0;">
                        Kelola data divisi Sabhagiriwana'17
                    </p>
                </div>
                <button class="btn-biru" data-bs-toggle="modal" data-bs-target="#tambahModal">
                    <i class="mdi mdi-plus"></i> Tambah Divisi/Bidang
                </button>
            </div>

            {{-- SEARCH, PER PAGE, DOWNLOAD --}}
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-3">
                <div style="flex: 1; min-width: 200px;">
                    <form method="GET" action="{{ route('04divisi.index') }}" class="d-flex gap-2" id="searchForm">
                        <div class="input-group" style="border-radius: 10px; overflow: hidden; border: 1px solid #e0e4ea;">
                            <span class="input-group-text bg-white border-0" style="padding: 0 12px;">
                                <i class="mdi mdi-magnify" style="color: #7a8a9e;"></i>
                            </span>
                            <input type="text" class="form-control border-0" name="search" placeholder="Cari nama divisi, keterangan..." value="{{ request('search') }}" style="font-family: 'Poppins', sans-serif; font-size: 14px; padding: 8px 0;" id="searchInput">
                            <input type="hidden" name="per_page" value="{{ request('per_page', 10) }}">
                        </div>
                        @if(request('search'))
                            <a href="{{ route('04divisi.index') }}" class="btn-silver">
                                <i class="mdi mdi-close"></i> Reset
                            </a>
                        @endif
                    </form>
                </div>

                <div class="d-flex flex-wrap align-items-center gap-2">
                    <div style="display: flex; align-items: center; gap: 6px;">
                        <span style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #5a6a7a; white-space: nowrap;">Tampil:</span>
                        <form method="GET" action="{{ route('04divisi.index') }}" id="perPageForm" class="d-inline">
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

                    <button onclick="exportToCSV()" class="btn-orange" style="display: inline-flex; align-items: center; gap: 6px;">
                        <i class="mdi mdi-download"></i> Download
                    </button>
                </div>
            </div>

            <!-- DATA CARDS -->
            <div id="dataContainer">
                @forelse ($data as $index => $item)
                    <div class="card mb-3" style="border-radius: 16px; border: 1px solid #f0f2f5; box-shadow: 0 2px 8px rgba(0,0,0,0.02); overflow: hidden; transition: all 0.3s ease; background: #ffffff;">
                        <div class="card-body" style="padding: clamp(16px, 2vw, 24px);">

                            <!-- HEADER -->
                            <div class="d-flex flex-wrap justify-content-between align-items-start gap-3">

                                <div style="flex: 1; min-width: 0;">
                                    <div class="d-flex align-items-center gap-2 flex-wrap">
                                        <span style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #c62828; font-size: clamp(12px, 1.3vw, 14px); background: rgba(198,40,40,0.08); padding: 3px 12px; border-radius: 30px; white-space: nowrap;">
                                            #{{ $data->firstItem() + $index }}
                                        </span>
                                        <h5 style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; margin: 0; font-size: clamp(14px, 1.8vw, 16px); word-break: break-word;">
                                            {{ $item->sabha1 ?? 'Divisi' }}
                                        </h5>
                                    </div>
                                    <div style="margin-top: 4px;">
                                        <span style="font-family: 'Poppins', sans-serif; font-size: clamp(11px, 1.2vw, 12px); color: #b0b8c4;">
                                            <i class="mdi mdi-calendar"></i>
                                            {{ $item->created_at ? $item->created_at->format('d M Y') : 'Tanggal tidak tersedia' }}
                                        </span>
                                    </div>
                                </div>

                                <div class="d-flex gap-1 flex-shrink-0">
                                    <button class="btn-hijau" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}" style="padding: clamp(4px, 0.6vw, 6px) clamp(8px, 1vw, 14px); font-size: clamp(11px, 1.2vw, 13px);">
                                        <i class="mdi mdi-pencil"></i> <span class="d-none d-sm-inline">Edit</span>
                                    </button>
                                    <button class="btn-merah" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}" style="padding: clamp(4px, 0.6vw, 6px) clamp(8px, 1vw, 14px); font-size: clamp(11px, 1.2vw, 13px);">
                                        <i class="mdi mdi-delete"></i> <span class="d-none d-sm-inline">Hapus</span>
                                    </button>
                                </div>
                            </div>

                            <hr style="margin: clamp(10px, 1.5vw, 12px) 0; border-color: #f0f2f5;">

                            <!-- BODY: FOTO + KETERANGAN -->
                            <div class="row g-3">

                                <!-- Foto (sabha2) -->
                                <div class="col-12 col-md-4">
                                    <div style="background: #f8fafc; border-radius: 12px; padding: clamp(10px, 1.5vw, 12px); border: 1px solid #e8ecf1; text-align: center; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                        @if($item->sabha2 && file_exists(public_path($item->sabha2)))
                                            <a href="{{ asset($item->sabha2) }}" target="_blank" style="display: block; width: 100%;">
                                                <img src="{{ asset($item->sabha2) }}" alt="{{ $item->sabha1 }}" style="width: 100%; max-height: 150px; object-fit: cover; border-radius: 8px; border: 2px solid #e0e4ea;">
                                            </a>
                                            <p style="font-family: 'Poppins', sans-serif; font-size: clamp(10px, 1vw, 11px); color: #7a8a9e; margin: 6px 0 0;">
                                                <i class="mdi mdi-open-in-new"></i> Klik untuk memperbesar
                                            </p>
                                        @else
                                            <div style="width: 100%; aspect-ratio: 1/1; background: #f0f2f5; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #b0b8c4;">
                                                <i class="mdi mdi-image-off" style="font-size: clamp(36px, 4vw, 48px);"></i>
                                            </div>
                                            <p style="font-family: 'Poppins', sans-serif; font-size: clamp(11px, 1.1vw, 12px); color: #b0b8c4; margin: 6px 0 0;">Tidak ada foto</p>
                                        @endif
                                    </div>
                                </div>

                                <!-- Keterangan (sabha3) -->
                                <div class="col-12 col-md-8">
                                    <div style="background: #f8fafc; border-radius: 12px; padding: clamp(10px, 1.5vw, 12px) clamp(12px, 1.5vw, 16px); border: 1px solid #e8ecf1; height: 100%; display: flex; flex-direction: column;">
                                        <div style="display: flex; align-items: flex-start; gap: clamp(10px, 1.5vw, 12px); flex: 1;">
                                            <div style="width: clamp(36px, 4vw, 44px); height: clamp(36px, 4vw, 44px); border-radius: 10px; background: rgba(13,71,161,0.06); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                                <i class="mdi mdi-information" style="font-size: clamp(20px, 2.5vw, 24px); color: #0d47a1;"></i>
                                            </div>
                                            <div style="flex: 1; min-width: 0;">
                                                <p style="font-family: 'Poppins', sans-serif; font-size: clamp(10px, 1.1vw, 12px); color: #b0b8c4; margin: 0; font-weight: 500;">
                                                    KETERANGAN
                                                </p>
                                                <p style="font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px); color: #1a1a2e; margin: 0; word-break: break-word; line-height: 1.5;">
                                                    {{ $item->sabha3 ?? '-' }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    {{-- MODAL DELETE --}}
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
                                        Apakah Anda yakin ingin menghapus divisi/bidang ini?
                                    </p>
                                    <p style="font-size: clamp(12px, 1.2vw, 13px); color: #7a8a9e; margin: 0; font-family: 'Poppins', sans-serif; word-break: break-word;">
                                        Divisi/Bidang: <strong>{{ $item->sabha1 ?? 'Data' }}</strong>
                                    </p>
                                </div>
                                <div class="modal-footer" style="border-top: 1px solid #f0f2f5; padding: clamp(10px, 1.5vw, 16px) clamp(14px, 2vw, 24px); flex-wrap: wrap; gap: 8px;">
                                    <button type="button" class="btn-silver" data-bs-dismiss="modal">Batal</button>
                                    <form action="{{ route('04divisi.destroy', $item->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
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
                            <i class="mdi mdi-account-group"></i>
                        </div>
                        <h5 style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #5a6a7a; margin: 0; font-size: clamp(16px, 2vw, 20px);">
                            @if(request('search'))
                                Data Tidak Ditemukan!
                            @else
                                Belum Ada Data Divisi/Bidang
                            @endif
                        </h5>
                        <p style="font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.5vw, 14px); color: #b0b8c4; margin-top: 6px;">
                            @if(request('search'))
                                Tidak ada hasil untuk pencarian "<strong>{{ request('search') }}</strong>"
                            @else
                                Klik tombol <strong>"Tambah Divisi"</strong> untuk menambahkan data divisi.
                            @endif
                        </p>
                    </div>
                @endforelse
            </div>

            {{-- PAGINATION --}}
            @if($data->total() > 0)
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mt-4 pt-3" style="border-top: 2px solid #f0f2f5;">
                <div style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #6c7a91; background: #f8fafc; padding: 8px 18px; border-radius: 30px; display: inline-flex; align-items: center; gap: 8px; border: 1px solid #e9edf2;">
                    <i class="mdi mdi-list-ul" style="color: #4f6af5; font-size: 14px;"></i>
                    Menampilkan
                    <strong style="color: #1a2332; font-weight: 600;">{{ $data->firstItem() }}</strong> -
                    <strong style="color: #1a2332; font-weight: 600;">{{ $data->lastItem() }}</strong>
                    dari
                    <strong style="color: #1a2332; font-weight: 600;">{{ $data->total() }}</strong>
                    <span style="background: linear-gradient(135deg, #4f6af5, #7c3aed); color: white; padding: 2px 12px; border-radius: 20px; font-size: 12px; font-weight: 600; margin-left: 4px;">data</span>
                </div>

                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-nav" style="display: flex; align-items: center; gap: 6px; margin: 0; flex-wrap: wrap; justify-content: center;">
                        @if ($data->onFirstPage())
                            <li class="page-item disabled"><span class="page-link"><i class="mdi mdi-chevron-left"></i> Prev</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $data->previousPageUrl() }}" rel="prev"><i class="mdi mdi-chevron-left"></i> Prev</a></li>
                        @endif

                        @php $start = max(1, $data->currentPage() - 2); $end = min($data->lastPage(), $data->currentPage() + 2); @endphp
                        @if ($start > 1)
                            <li class="page-item"><a class="page-link" href="{{ $data->url(1) }}">1</a></li>
                            @if ($start > 2) <li class="page-item disabled"><span class="page-link">...</span></li> @endif
                        @endif
                        @for ($i = $start; $i <= $end; $i++)
                            @if ($i == $data->currentPage())
                                <li class="page-item active"><span class="page-link">{{ $i }}</span></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $data->url($i) }}">{{ $i }}</a></li>
                            @endif
                        @endfor
                        @if ($end < $data->lastPage())
                            @if ($end < $data->lastPage() - 1) <li class="page-item disabled"><span class="page-link">...</span></li> @endif
                            <li class="page-item"><a class="page-link" href="{{ $data->url($data->lastPage()) }}">{{ $data->lastPage() }}</a></li>
                        @endif
                        @if ($data->hasMorePages())
                            <li class="page-item"><a class="page-link" href="{{ $data->nextPageUrl() }}" rel="next">Next <i class="mdi mdi-chevron-right"></i></a></li>
                        @else
                            <li class="page-item disabled"><span class="page-link">Next <i class="mdi mdi-chevron-right"></i></span></li>
                        @endif
                    </ul>
                </nav>
            </div>
            @endif

        </div>
    </div>
</div>

{{-- ============================================================
     MODAL TAMBAH DATA (dengan input gambar)
     ============================================================ --}}
<div class="modal fade" id="tambahModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
            <div class="modal-header" style="border-bottom: 2px solid #c62828; padding: clamp(14px, 2vw, 20px) clamp(14px, 2vw, 24px);">
                <h5 class="modal-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; font-size: clamp(16px, 2vw, 20px);">
                    <i class="mdi mdi-plus" style="color: #c62828; margin-right: 10px;"></i>
                    Tambah Divisi/Bidang
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('divisi.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body" style="padding: clamp(14px, 2vw, 24px);">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-account-group" style="color: #c62828;"></i> Nama Divisi/Bidang
                            </label>
                            <input type="text" class="form-control" name="sabha1" placeholder="Masukkan nama divisi" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);" required>
                        </div>

                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-image" style="color: #0d47a1;"></i> Upload Foto/Gambar
                            </label>
                            <input type="file" class="form-control" name="sabha2" accept="image/*" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.2vw, 13px); padding: 6px 12px;">
                            <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: clamp(10px, 1vw, 11px);">Format: JPG, PNG, GIF, WEBP. Maks 20MB</small>
                        </div>

                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-information" style="color: #c62828;"></i> Keterangan
                            </label>
                            <textarea class="form-control" name="sabha3" rows="4" placeholder="Masukkan keterangan divisi..." style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border-top: 1px solid #f0f2f5; padding: clamp(10px, 1.5vw, 16px) clamp(14px, 2vw, 24px); flex-wrap: wrap; gap: 8px;">
                    <button type="button" class="btn-silver" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn-biru">
                        <i class="mdi mdi-content-save" style="margin-right: 6px;"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- ============================================================
     MODAL EDIT DATA (dengan preview gambar)
     ============================================================ --}}
@foreach ($data as $item)
<div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
            <div class="modal-header" style="border-bottom: 2px solid #0d47a1; padding: clamp(14px, 2vw, 20px) clamp(14px, 2vw, 24px);">
                <h5 class="modal-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; font-size: clamp(16px, 2vw, 20px);">
                    <i class="mdi mdi-pencil" style="color: #0d47a1; margin-right: 10px;"></i>
                    Edit Divisi/Bidang
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('divisi.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body" style="padding: clamp(14px, 2vw, 24px);">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-account-group" style="color: #c62828;"></i> Nama Divisi/Bidang
                            </label>
                            <input type="text" class="form-control" name="sabha1" value="{{ $item->sabha1 }}" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);" required>
                        </div>

                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-image" style="color: #0d47a1;"></i> Ganti Foto/Gambar
                            </label>
                            @if($item->sabha2 && file_exists(public_path($item->sabha2)))
                                <div style="margin-bottom: 8px; display: flex; flex-wrap: wrap; align-items: center; gap: 10px; background: #f8fafc; padding: clamp(8px, 1vw, 12px); border-radius: 8px;">
                                    <img src="{{ asset($item->sabha2) }}" alt="Foto saat ini" style="max-height: 80px; border-radius: 6px; border: 1px solid #e0e4ea;">
                                    <div style="flex: 1; min-width: 0;">
                                        <p style="font-size: clamp(10px, 1vw, 11px); color: #7a8a9e; margin: 0; font-family: 'Poppins', sans-serif;">Foto saat ini</p>
                                        <p style="font-size: clamp(10px, 1vw, 11px); color: #b0b8c4; margin: 0; font-family: 'Poppins', sans-serif;">Kosongkan jika tidak ingin mengganti</p>
                                    </div>
                                </div>
                            @else
                                <p style="font-size: clamp(11px, 1.1vw, 12px); color: #b0b8c4; font-family: 'Poppins', sans-serif; margin-bottom: 8px;">Belum ada foto</p>
                            @endif
                            <input type="file" class="form-control" name="sabha2" accept="image/*" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.2vw, 13px); padding: 6px 12px;">
                            <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: clamp(10px, 1vw, 11px);">Format: JPG, PNG, GIF, WEBP. Maks 20MB</small>
                        </div>

                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-information" style="color: #c62828;"></i> Keterangan
                            </label>
                            <textarea class="form-control" name="sabha3" rows="4" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">{{ $item->sabha3 }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border-top: 1px solid #f0f2f5; padding: clamp(10px, 1.5vw, 16px) clamp(14px, 2vw, 24px); flex-wrap: wrap; gap: 8px;">
                    <button type="button" class="btn-silver" data-bs-dismiss="modal">Batal</button>
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
     STYLE & SCRIPTS (tetap sama seperti sebelumnya)
     ============================================================ --}}
@push('styles')
<style>
    /* ===== BUTTON CUSTOM ===== */
    .btn-biru { background-color: #0d6efd; color: #fff; border: none; padding: 8px 18px; border-radius: 8px; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; transition: 0.3s; box-shadow: 0 0 10px rgba(13,110,253,0.3); display: inline-flex; align-items: center; gap: 4px; cursor: pointer; }
    .btn-biru:hover { background-color: #fff; color: #000; box-shadow: 0 0 25px rgba(13,110,253,0.7); transform: scale(1.02); }
    .btn-merah { background-color: #dc3545; color: #fff; border: none; padding: 8px 18px; border-radius: 8px; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; transition: 0.3s; box-shadow: 0 0 10px rgba(220,53,69,0.3); display: inline-flex; align-items: center; gap: 4px; cursor: pointer; }
    .btn-merah:hover { background-color: #fff; color: #000; box-shadow: 0 0 25px rgba(220,53,69,0.7); transform: scale(1.02); }
    .btn-orange { background-color: #fd7e14; color: #fff; border: none; padding: 8px 18px; border-radius: 8px; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; transition: 0.3s; box-shadow: 0 0 10px rgba(253,126,20,0.3); display: inline-flex; align-items: center; gap: 4px; cursor: pointer; }
    .btn-orange:hover { background-color: #fff; color: #000; box-shadow: 0 0 25px rgba(253,126,20,0.7); transform: scale(1.02); }
    .btn-silver { background-color: #adb5bd; color: #fff; border: none; padding: 8px 18px; border-radius: 8px; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; transition: 0.3s; box-shadow: 0 0 10px rgba(173,181,189,0.3); display: inline-flex; align-items: center; gap: 4px; cursor: pointer; }
    .btn-silver:hover { background-color: #fff; color: #000; box-shadow: 0 0 25px rgba(173,181,189,0.7); transform: scale(1.02); }
    .btn-hijau { background-color: #198754; color: #fff; border: none; padding: 8px 18px; border-radius: 8px; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; transition: 0.3s; box-shadow: 0 0 10px rgba(25,135,84,0.3); display: inline-flex; align-items: center; gap: 4px; cursor: pointer; }
    .btn-hijau:hover { background-color: #fff; color: #000; box-shadow: 0 0 25px rgba(25,135,84,0.7); transform: scale(1.02); }

    .pagination-nav .page-item { margin: 0 2px; }
    .pagination-nav .page-link { font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; color: #1a2332; background: transparent; border: 2px solid transparent; border-radius: 12px; padding: 8px 16px; min-width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; transition: 0.3s; text-decoration: none; }
    .pagination-nav .page-link:hover { background: #f0f4ff; border-color: #4f6af5; color: #4f6af5; transform: translateY(-2px); box-shadow: 0 4px 12px rgba(79,106,245,0.15); }
    .pagination-nav .page-item.active .page-link { background: linear-gradient(135deg, #4f6af5, #7c3aed); border-color: #4f6af5; color: #fff; font-weight: 600; box-shadow: 0 4px 15px rgba(79,106,245,0.35); transform: translateY(-2px); animation: pulse 2s infinite; }
    .pagination-nav .page-item.disabled .page-link { color: #b8c5d6; background: transparent; border-color: transparent; cursor: not-allowed; opacity: 0.5; }
    .pagination-nav .page-item:first-child .page-link,
    .pagination-nav .page-item:last-child .page-link { font-size: 14px; padding: 8px 14px; border-radius: 12px; background: #f8fafc; border: 1px solid #e9edf2; }
    .pagination-nav .page-item:first-child .page-link:hover,
    .pagination-nav .page-item:last-child .page-link:hover { background: #4f6af5; border-color: #4f6af5; color: white; transform: translateY(-2px); box-shadow: 0 4px 15px rgba(79,106,245,0.25); }
    @keyframes pulse { 0% { box-shadow: 0 4px 15px rgba(79,106,245,0.35); } 50% { box-shadow: 0 4px 25px rgba(79,106,245,0.5); } 100% { box-shadow: 0 4px 15px rgba(79,106,245,0.35); } }
    @media (max-width: 768px) { .pagination-nav { justify-content: center; flex-wrap: wrap; } .pagination-nav .page-link { font-size: 13px; padding: 6px 12px; min-width: 38px; height: 38px; border-radius: 10px; } .pagination-nav .page-item:first-child .page-link, .pagination-nav .page-item:last-child .page-link { padding: 6px 10px; font-size: 12px; } }
    @media (max-width: 480px) { .pagination-nav .page-link { font-size: 12px; padding: 4px 10px; min-width: 34px; height: 34px; border-radius: 8px; } }
</style>
@endpush

@push('scripts')
<script>
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
    var headers = ['No', 'Nama Divisi', 'Keterangan', 'Ada Foto', 'Tanggal Dibuat'];
    csv.push(headers.join(','));

    dataCards.forEach(function(card, index) {
        var row = [];
        var no = index + 1;
        row.push(no);
        var namaEl = card.querySelector('h5');
        var nama = namaEl ? namaEl.textContent.trim() : '-';
        row.push(nama);
        var ketEl = card.querySelector('.col-md-8 p:last-child');
        var keterangan = ketEl ? ketEl.textContent.trim() : '-';
        row.push(keterangan);
        var fotoEl = card.querySelector('.col-md-4 img');
        var adaFoto = fotoEl ? 'Ada' : 'Tidak Ada';
        row.push(adaFoto);
        var dateEl = card.querySelector('.d-flex.align-items-center.gap-2.flex-wrap .d-flex:last-child span');
        var date = dateEl ? dateEl.textContent.trim() : '-';
        row.push(date);
        csv.push(row.join(','));
    });

    var blob = new Blob(['\uFEFF' + csv.join('\n')], { type: 'text/csv;charset=utf-8;' });
    var link = document.createElement('a');
    link.href = URL.createObjectURL(blob);
    link.download = 'divisi_' + new Date().toISOString().slice(0,10) + '.csv';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}
</script>
@endpush

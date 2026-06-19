{{-- ============================================================
     DATA FOTO BERANDA (LENGKAP + RESPONSIF)
     ============================================================ --}}

<div class="col-12">
    <div class="card" style="border-radius: 16px; border: none; box-shadow: 0 2px 12px rgba(0,0,0,0.05);">
        <div class="card-body" style="padding: 20px;">

            {{-- HEADER --}}
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                <div>
                    <h4 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 600; margin-bottom: 2px; font-size: clamp(18px, 3vw, 24px);">
                        📷 Foto Beranda
                    </h4>
                    <p class="card-description" style="font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.5vw, 14px); color: #7a8a9e; margin: 0;">
                        Kelola foto-foto untuk halaman beranda Sabhagiriwana'17
                    </p>
                </div>
                <button class="btn btn-primary" style="background: #c62828; border: none; border-radius: 10px; padding: 8px 18px; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.5vw, 14px); white-space: nowrap;" data-bs-toggle="modal" data-bs-target="#tambahModal">
                    <i class="mdi mdi-plus"></i> Tambah Foto
                </button>
            </div>

            {{-- FILTER --}}
            {{-- <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-3">
                <div style="flex: 1; min-width: 200px;">
                    <form method="GET" action="{{ route('00beranda.index') }}" class="d-flex gap-2">
                        <div class="input-group" style="border-radius: 10px; overflow: hidden; border: 1px solid #e0e4ea;">
                            <span class="input-group-text bg-white border-0" style="padding: 0 12px;">
                                <i class="mdi mdi-magnify" style="color: #7a8a9e;"></i>
                            </span>
                            <input type="text" class="form-control border-0" name="search" placeholder="Cari data..." value="{{ request('search') }}" style="font-family: 'Poppins', sans-serif; font-size: 14px; padding: 8px 0;">
                            <input type="hidden" name="per_page" value="{{ request('per_page', 10) }}">
                        </div>
                        <button type="submit" class="btn btn-primary" style="background: #c62828; border: none; border-radius: 10px; padding: 8px 18px; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 13px; white-space: nowrap;">
                            <i class="mdi mdi-magnify"></i> Cari
                        </button>
                        @if(request('search'))
                            <a href="{{ route('00beranda.index') }}" class="btn btn-outline-secondary" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 13px; white-space: nowrap;">
                                <i class="mdi mdi-close"></i> Reset
                            </a>
                        @endif
                    </form>
                </div>

                <div class="d-flex flex-wrap align-items-center gap-2">
                    <div style="display: flex; align-items: center; gap: 6px;">
                        <span style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #5a6a7a; white-space: nowrap;">Tampil:</span>
                        <form method="GET" action="{{ route('00beranda.index') }}" id="perPageForm" class="d-inline">
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

                    <button onclick="exportToCSV()" class="btn btn-success" style="background: #28a745; border: none; border-radius: 10px; padding: 8px 16px; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 13px; white-space: nowrap; display: inline-flex; align-items: center; gap: 6px;">
                        <i class="mdi mdi-download"></i> Download
                    </button>
                </div>
            </div> --}}

            {{-- DATA CARDS --}}
            <div id="dataContainer">
                @forelse ($data as $index => $item)
                    <div class="card mb-3" style="border-radius: 16px; border: 1px solid #f0f2f5; box-shadow: 0 2px 8px rgba(0,0,0,0.02); overflow: hidden;">
                        <div class="card-body" style="padding: clamp(16px, 2vw, 24px);">

                            <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                    <span style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #c62828; font-size: clamp(12px, 1.5vw, 14px); background: rgba(198,40,40,0.06); padding: 4px 14px; border-radius: 30px;">
                                        #{{ $data->firstItem() + $index }}
                                    </span>
                                    <span style="font-family: 'Poppins', sans-serif; font-size: clamp(11px, 1.2vw, 13px); color: #b0b8c4;">
                                        <i class="mdi mdi-calendar"></i> {{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}
                                    </span>
                                </div>
                                <div class="d-flex flex-wrap gap-1">
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="editData('{{ $item->id }}')" style="border-radius: 8px; border-color: #0d47a1; color: #0d47a1; font-family: 'Poppins', sans-serif; font-size: clamp(11px, 1.2vw, 13px); padding: 4px 12px;">
                                        <i class="mdi mdi-pencil"></i> Edit
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" data-id="{{ $item->id }}" style="border-radius: 8px; border-color: #c62828; color: #c62828; font-family: 'Poppins', sans-serif; font-size: clamp(11px, 1.2vw, 13px); padding: 4px 12px;" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">
                                        <i class="mdi mdi-delete"></i> Hapus
                                    </button>
                                </div>
                            </div>

                            {{-- GALERI FOTO (5 foto) --}}
                            <div class="row g-3">
                                @for ($i = 1; $i <= 5; $i++)
                                    @php
                                        $field = 'sabha' . $i;
                                        $photo = $item->$field;
                                    @endphp
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <div style="background: #f8fafc; border-radius: 12px; padding: 8px; text-align: center; border: 1px solid #e8ecf1; height: 100%;">
                                            <div style="width: 100%; aspect-ratio: 1/1; border-radius: 10px; overflow: hidden; background: #f0f2f5; display: flex; align-items: center; justify-content: center; position: relative;">
                                                @if($photo && file_exists(public_path($photo)))
                                                    <img src="{{ asset($photo) }}" alt="Foto {{ $i }}" style="width: 100%; height: 100%; object-fit: cover;">
                                                @else
                                                    <i class="mdi mdi-image-off" style="font-size: 28px; color: #b0b8c4;"></i>
                                                @endif
                                            </div>
                                            <p style="font-family: 'Poppins', sans-serif; font-size: clamp(10px, 1vw, 12px); color: #5a6a7a; margin: 4px 0 0; font-weight: 500;">
                                                Foto {{ $i }}
                                                @if($photo && file_exists(public_path($photo)))
                                                    <span style="color: #2e7d32; font-size: 10px;">✓</span>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                @endfor
                            </div>

                        </div>
                    </div>

                    {{-- MODAL DELETE --}}
                    <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-sm">
                            <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
                                <div class="modal-header" style="border-bottom: 2px solid #c62828; padding: clamp(16px, 2vw, 20px) clamp(16px, 2vw, 24px);">
                                    <h5 class="modal-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; font-size: clamp(16px, 2vw, 18px);">
                                        <i class="mdi mdi-delete" style="color: #c62828; margin-right: 10px;"></i>
                                        Konfirmasi Hapus
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body" style="padding: clamp(20px, 2.5vw, 24px);">
                                    <p style="font-size: clamp(14px, 1.5vw, 15px); color: #1a1a2e; margin-bottom: 4px; font-family: 'Poppins', sans-serif;">
                                        Apakah Anda yakin ingin menghapus data ini?
                                    </p>
                                    <p style="font-size: clamp(12px, 1.2vw, 13px); color: #7a8a9e; margin: 0; font-family: 'Poppins', sans-serif;">
                                        Semua foto yang diupload akan ikut terhapus.
                                    </p>
                                </div>
                                <div class="modal-footer" style="border-top: 1px solid #f0f2f5; padding: clamp(12px, 1.5vw, 16px) clamp(16px, 2vw, 24px); flex-wrap: wrap; gap: 8px;">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius: 10px; font-family: 'Poppins', sans-serif; padding: clamp(6px, 0.8vw, 8px) clamp(16px, 2vw, 24px); font-size: clamp(13px, 1.3vw, 14px);">Batal</button>
                                    <form action="{{ route('00beranda.destroy', $item->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" style="background: #c62828; border: none; border-radius: 10px; font-family: 'Poppins', sans-serif; padding: clamp(6px, 0.8vw, 8px) clamp(16px, 2vw, 24px); font-size: clamp(13px, 1.3vw, 14px);">
                                            <i class="mdi mdi-delete" style="margin-right: 6px;"></i>
                                            Ya, Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- MODAL EDIT --}}
                    <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
                                <div class="modal-header" style="border-bottom: 2px solid #0d47a1; padding: clamp(16px, 2vw, 20px) clamp(16px, 2vw, 24px);">
                                    <h5 class="modal-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; font-size: clamp(16px, 2vw, 20px);">
                                        <i class="mdi mdi-pencil" style="color: #0d47a1; margin-right: 10px;"></i>
                                        Edit Foto Beranda
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <form action="{{ route('beranda.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body" style="padding: clamp(16px, 2vw, 24px);">
                                        <div class="row g-3">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @php
                                                    $field = 'sabha' . $i;
                                                    $photo = $item->$field;
                                                @endphp
                                                <div class="col-md-6 col-lg-4">
                                                    <div style="background: #f8fafc; border-radius: 12px; padding: 12px; border: 1px solid #e8ecf1; height: 100%;">
                                                        <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                                            Foto {{ $i }}
                                                        </label>
                                                        @if($photo && file_exists(public_path($photo)))
                                                            <div style="margin-bottom: 8px;">
                                                                <img src="{{ asset($photo) }}" alt="Foto {{ $i }}" style="width: 100%; max-height: 120px; object-fit: cover; border-radius: 8px; border: 2px solid #f0f2f5;">
                                                                <p style="font-size: 11px; color: #7a8a9e; margin: 4px 0 0; font-family: 'Poppins', sans-serif;">Foto saat ini (kosongkan untuk tetap menggunakan foto lama)</p>
                                                            </div>
                                                        @else
                                                            <p style="font-size: 12px; color: #b0b8c4; font-family: 'Poppins', sans-serif; margin-bottom: 8px;">Belum ada foto</p>
                                                        @endif
                                                        <input type="file" class="form-control" name="{{ $field }}" accept="image/*" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px); padding: 6px 12px;">
                                                        <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: 10px;">Format: JPG, PNG, JPEG. Maks 20 MB</small>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="modal-footer" style="border-top: 1px solid #f0f2f5; padding: clamp(12px, 1.5vw, 16px) clamp(16px, 2vw, 24px); flex-wrap: wrap; gap: 8px;">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius: 10px; font-family: 'Poppins', sans-serif; padding: clamp(6px, 0.8vw, 8px) clamp(16px, 2vw, 24px); font-size: clamp(13px, 1.3vw, 14px);">Batal</button>
                                        <button type="submit" class="btn btn-primary" style="background: #0d47a1; border: none; border-radius: 10px; font-family: 'Poppins', sans-serif; padding: clamp(6px, 0.8vw, 8px) clamp(16px, 2vw, 24px); font-size: clamp(13px, 1.3vw, 14px);">
                                            <i class="mdi mdi-content-save" style="margin-right: 6px;"></i> Update
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                @empty
                    <div style="text-align: center; padding: clamp(40px, 5vw, 60px) 20px; background: #f8fafc; border-radius: 16px; border: 1px dashed #e0e4ea;">
                        <div style="font-size: clamp(40px, 5vw, 56px); margin-bottom: 16px; color: #b0b8c4;">
                            <i class="mdi mdi-image-off"></i>
                        </div>
                        <h5 style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #5a6a7a; margin: 0; font-size: clamp(16px, 2vw, 18px);">
                            Belum Ada Foto Beranda
                        </h5>
                        <p style="font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.5vw, 14px); color: #b0b8c4; margin-top: 6px;">
                            Klik tombol <strong>"Tambah Foto"</strong> untuk menambahkan foto-foto halaman beranda.
                        </p>
                    </div>
                @endforelse
            </div>

            {{-- PAGINATION --}}
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
                                <a class="page-link" href="{{ $data->url(1) }}" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; color: #1a2332; background: transparent; border: 2px solid transparent; border-radius: 12px; padding: 8px 16px; min-width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); text-decoration: none;">1</a>
                            </li>
                            @if ($start > 2)
                                <li class="page-item disabled"><span class="page-link" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 600; color: #b8c5d6; background: transparent; border: none; padding: 8px 12px;">...</span></li>
                            @endif
                        @endif

                        @for ($i = $start; $i <= $end; $i++)
                            @if ($i == $data->currentPage())
                                <li class="page-item active">
                                    <span class="page-link" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 600; background: linear-gradient(135deg, #4f6af5, #7c3aed); border-color: #4f6af5; color: #ffffff; border-radius: 12px; padding: 8px 16px; min-width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(79, 106, 245, 0.35); transform: translateY(-2px); animation: pulse 2s infinite;">{{ $i }}</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $data->url($i) }}" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; color: #1a2332; background: transparent; border: 2px solid transparent; border-radius: 12px; padding: 8px 16px; min-width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); text-decoration: none;">{{ $i }}</a>
                                </li>
                            @endif
                        @endfor

                        @if ($end < $data->lastPage())
                            @if ($end < $data->lastPage() - 1)
                                <li class="page-item disabled"><span class="page-link" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 600; color: #b8c5d6; background: transparent; border: none; padding: 8px 12px;">...</span></li>
                            @endif
                            <li class="page-item">
                                <a class="page-link" href="{{ $data->url($data->lastPage()) }}" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; color: #1a2332; background: transparent; border: 2px solid transparent; border-radius: 12px; padding: 8px 16px; min-width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); text-decoration: none;">{{ $data->lastPage() }}</a>
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

        </div>
    </div>
</div>

{{-- MODAL TAMBAH --}}
<div class="modal fade" id="tambahModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
            <div class="modal-header" style="border-bottom: 2px solid #c62828; padding: clamp(16px, 2vw, 20px) clamp(16px, 2vw, 24px);">
                <h5 class="modal-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; font-size: clamp(16px, 2vw, 20px);">
                    <i class="mdi mdi-plus" style="color: #c62828; margin-right: 10px;"></i>
                    Tambah Foto Beranda
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('beranda.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body" style="padding: clamp(16px, 2vw, 24px);">
                    <div class="row g-3">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="col-md-6 col-lg-4">
                                <div style="background: #f8fafc; border-radius: 12px; padding: 12px; border: 1px solid #e8ecf1; height: 100%;">
                                    <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                        Foto {{ $i }}
                                    </label>
                                    <input type="file" class="form-control" name="sabha{{ $i }}" accept="image/*" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px); padding: 6px 12px;">
                                    <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: 10px;">Format: JPG, PNG, JPEG. Maks 20 MB</small>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="modal-footer" style="border-top: 1px solid #f0f2f5; padding: clamp(12px, 1.5vw, 16px) clamp(16px, 2vw, 24px); flex-wrap: wrap; gap: 8px;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius: 10px; font-family: 'Poppins', sans-serif; padding: clamp(6px, 0.8vw, 8px) clamp(16px, 2vw, 24px); font-size: clamp(13px, 1.3vw, 14px);">Batal</button>
                    <button type="submit" class="btn btn-primary" style="background: #c62828; border: none; border-radius: 10px; font-family: 'Poppins', sans-serif; padding: clamp(6px, 0.8vw, 8px) clamp(16px, 2vw, 24px); font-size: clamp(13px, 1.3vw, 14px);">
                        <i class="mdi mdi-content-save" style="margin-right: 6px;"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- ============================================================
     STYLE & SCRIPTS
     ============================================================ --}}
@push('styles')
<style>
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
// ============================================================
// EDIT MODAL - PAKAI FUNGSI GLOBAL
// ============================================================
function editData(id) {
    if (!id) {
        alert('ID tidak ditemukan!');
        return;
    }

    var modal = document.getElementById('editModal' + id);
    if (!modal) {
        alert('Modal tidak ditemukan!');
        return;
    }

    if (typeof $ !== 'undefined') {
        $(modal).modal('show');
        return;
    }

    if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
        var myModal = new bootstrap.Modal(modal);
        myModal.show();
        return;
    }

    modal.style.display = 'block';
    modal.classList.add('show');
    document.body.classList.add('modal-open');
}

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
    var headers = ['ID', 'Foto 1', 'Foto 2', 'Foto 3', 'Foto 4', 'Foto 5', 'Tanggal Dibuat'];
    csv.push(headers.join(','));

    dataCards.forEach(function(card, index) {
        var row = [];
        var idSpan = card.querySelector('.d-flex.align-items-center.flex-wrap.gap-2 span');
        var id = idSpan ? idSpan.textContent.trim() : (index + 1);
        row.push(id);

        var images = card.querySelectorAll('.row.g-3 .col-6 .mdi-image-off, .row.g-3 .col-6 img');
        var f1 = '-', f2 = '-', f3 = '-', f4 = '-', f5 = '-';
        images.forEach(function(img, i) {
            if (i === 0) f1 = img.tagName === 'IMG' ? 'Ada' : 'Tidak Ada';
            else if (i === 1) f2 = img.tagName === 'IMG' ? 'Ada' : 'Tidak Ada';
            else if (i === 2) f3 = img.tagName === 'IMG' ? 'Ada' : 'Tidak Ada';
            else if (i === 3) f4 = img.tagName === 'IMG' ? 'Ada' : 'Tidak Ada';
            else if (i === 4) f5 = img.tagName === 'IMG' ? 'Ada' : 'Tidak Ada';
        });

        var dateSpan = card.querySelector('.d-flex.align-items-center.flex-wrap.gap-2 span:last-child');
        var date = dateSpan ? dateSpan.textContent.trim().replace('📅 ', '') : '-';

        row.push(f1, f2, f3, f4, f5, date);
        csv.push(row.join(','));
    });

    var blob = new Blob(['\uFEFF' + csv.join('\n')], { type: 'text/csv;charset=utf-8;' });
    var link = document.createElement('a');
    var url = URL.createObjectURL(blob);
    link.setAttribute('href', url);
    link.setAttribute('download', 'foto_beranda_' + new Date().toISOString().slice(0,10) + '.csv');
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
    URL.revokeObjectURL(url);
}
</script>
@endpush

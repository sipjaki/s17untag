{{-- ============================================================
     DATA AGENDA EVENT SABHA PEDULI (CARD ELEGAN - 5 FOTO)
     ============================================================ --}}

<div class="col-12">
    <div class="card" style="border-radius: 20px; border: none; box-shadow: 0 4px 24px rgba(0,0,0,0.04);">
        <div class="card-body" style="padding: 28px 30px;">

            {{-- HEADER --}}
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                <div>
                    <h4 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; margin-bottom: 2px; font-size: 22px; color: #1a1a2e;">
                        🤝 Agenda Event SABHA PEDULI
                    </h4>
                    {{-- <p class="card-description" style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #7a8a9e; margin: 0;">
                        Kelola agenda event SABHA PEDULI Sabhagiriwana'17
                    </p> --}}
                </div>
                <button class="btn btn-primary" style="background: #c62828; border: none; border-radius: 12px; padding: 10px 24px; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px; white-space: nowrap; box-shadow: 0 4px 12px rgba(198,40,40,0.2);" data-bs-toggle="modal" data-bs-target="#tambahModal">
                    <i class="mdi mdi-plus"></i> Tambah Agenda
                </button>
            </div>

            {{-- SEARCH & PER PAGE --}}
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                <div style="flex: 1; min-width: 200px;">
                    <form method="GET" action="{{ route('17peduli.index') }}" class="d-flex gap-2">
                        <div class="input-group" style="border-radius: 12px; overflow: hidden; border: 1px solid #e0e4ea; background: #fff;">
                            <span class="input-group-text bg-white border-0" style="padding: 0 14px;">
                                <i class="mdi mdi-magnify" style="color: #7a8a9e; font-size: 18px;"></i>
                            </span>
                            <input type="text" class="form-control border-0" name="search" placeholder="Cari judul agenda..." value="{{ request('search') }}" style="font-family: 'Poppins', sans-serif; font-size: 14px; padding: 10px 0;">
                            <input type="hidden" name="per_page" value="{{ request('per_page', 10) }}">
                        </div>
                        <button type="submit" class="btn btn-primary" style="background: #c62828; border: none; border-radius: 12px; padding: 10px 20px; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 13px;">
                            <i class="mdi mdi-magnify"></i> Cari
                        </button>
                        @if(request('search'))
                            <a href="{{ route('17peduli.index') }}" class="btn btn-outline-secondary" style="border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 13px; padding: 10px 20px; border-color: #e0e4ea; color: #5a6a7a;">
                                <i class="mdi mdi-close"></i> Reset
                            </a>
                        @endif
                    </form>
                </div>

                <div class="d-flex flex-wrap align-items-center gap-2">
                    <div style="display: flex; align-items: center; gap: 6px;">
                        <span style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #5a6a7a; white-space: nowrap;">Tampil:</span>
                        <form method="GET" action="{{ route('17peduli.index') }}" id="perPageForm" class="d-inline">
                            <input type="hidden" name="search" value="{{ request('search') }}">
                            <select name="per_page" onchange="document.getElementById('perPageForm').submit()" style="border-radius: 8px; border: 1px solid #e0e4ea; padding: 6px 10px; font-family: 'Poppins', sans-serif; font-size: 13px; background: white; cursor: pointer; outline: none;">
                                <option value="10" {{ request('per_page', 10) == 10 ? 'selected' : '' }}>10</option>
                                <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
                                <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
                                <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100</option>
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
            </div>

            {{-- DATA CARDS --}}
            <div id="dataContainer">
                @forelse ($data as $index => $item)
                    <div class="card mb-4" style="border-radius: 16px; border: 1px solid #f0f2f5; box-shadow: 0 2px 8px rgba(0,0,0,0.02); overflow: hidden; transition: all 0.3s ease; background: #ffffff;">
                        <div class="card-body" style="padding: 20px 24px;">

                            {{-- HEADER --}}
                            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-3">
                                <div>
                                    <div class="d-flex align-items-center gap-3 flex-wrap">
                                        <span style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #c62828; font-size: 13px; background: rgba(198,40,40,0.08); padding: 4px 14px; border-radius: 30px;">
                                            #{{ $data->firstItem() + $index }}
                                        </span>
                                        <h5 style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; margin: 0; font-size: 16px; word-break: break-word;">
                                            {{ $item->sabha1 ?? 'Judul Agenda' }}
                                        </h5>
                                    </div>
                                    <div style="margin-top: 4px;">
                                        <span style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #b0b8c4;">
                                            <i class="mdi mdi-calendar"></i> {{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}
                                        </span>
                                    </div>
                                </div>
                                <div class="d-flex gap-1 flex-shrink-0">
                                    <button class="btn btn-sm btn-outline-primary btn-edit" data-id="{{ $item->id }}" style="border-radius: 10px; border-color: #0d47a1; color: #0d47a1; font-family: 'Poppins', sans-serif; font-size: 13px; padding: 6px 14px;">
                                        <i class="mdi mdi-pencil"></i> Edit
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger btn-hapus" data-id="{{ $item->id }}" style="border-radius: 10px; border-color: #c62828; color: #c62828; font-family: 'Poppins', sans-serif; font-size: 13px; padding: 6px 14px;" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">
                                        <i class="mdi mdi-delete"></i> Hapus
                                    </button>
                                </div>
                            </div>

                            {{-- DIVIDER --}}
                            <hr style="margin: 10px 0; border-color: #f0f2f5;">

                            {{-- KETERANGAN --}}
                            @if($item->sabha2)
                                <div style="background: #f8fafc; border-radius: 10px; padding: 12px 16px; margin-bottom: 16px; border-left: 4px solid #c62828;">
                                    <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #1a1a2e; margin: 0; line-height: 1.7; word-break: break-word;">
                                        {{ $item->sabha2 }}
                                    </p>
                                </div>
                            @endif

                            {{-- 5 FOTO dengan FIGURA --}}
                            <div class="row g-3">
                                @php
                                    $fotoFields = ['sabha3', 'sabha4', 'sabha5', 'sabha6', 'sabha7'];
                                    $fotoLabels = ['Foto 1', 'Foto 2', 'Foto 3', 'Foto 4', 'Foto 5'];
                                @endphp
                                @foreach ($fotoFields as $key => $field)
                                    @php
                                        $foto = $item->$field;
                                    @endphp
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                        <div class="foto-figura" style="background: #ffffff; border-radius: 12px; padding: 8px 8px 12px 8px; box-shadow: 0 4px 16px rgba(0,0,0,0.06); border: 1px solid #f0f2f5; text-align: center; transition: all 0.3s ease; height: 100%;">
                                            <div style="width: 100%; aspect-ratio: 1/1; overflow: hidden; border-radius: 8px; background: #f0f2f5;">
                                                @if($foto && file_exists(public_path($foto)))
                                                    <a href="{{ asset($foto) }}" target="_blank" style="display: block; width: 100%; height: 100%;">
                                                        <img src="{{ asset($foto) }}" alt="{{ $fotoLabels[$key] }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;">
                                                    </a>
                                                @else
                                                    <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; background: #f0f2f5; color: #b0b8c4;">
                                                        <i class="mdi mdi-image" style="font-size: 32px;"></i>
                                                    </div>
                                                @endif
                                            </div>
                                            <div style="margin-top: 6px;">
                                                <span style="font-family: 'Poppins', sans-serif; font-size: 10px; color: #b0b8c4; letter-spacing: 0.3px;">
                                                    <i class="mdi mdi-camera"></i> {{ $fotoLabels[$key] }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>

                    {{-- MODAL DELETE --}}
                    <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-sm">
                            <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
                                <div class="modal-header" style="border-bottom: 2px solid #c62828; padding: 16px 20px;">
                                    <h5 class="modal-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; font-size: 16px;">
                                        <i class="mdi mdi-delete" style="color: #c62828; margin-right: 10px;"></i>
                                        Konfirmasi Hapus
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body" style="padding: 20px 20px;">
                                    <p style="font-size: 15px; color: #1a1a2e; margin-bottom: 4px; font-family: 'Poppins', sans-serif;">
                                        Apakah Anda yakin ingin menghapus agenda ini?
                                    </p>
                                    <p style="font-size: 13px; color: #7a8a9e; margin: 0; font-family: 'Poppins', sans-serif; word-break: break-word;">
                                        Judul: <strong>{{ $item->sabha1 ?? 'Data' }}</strong>
                                    </p>
                                </div>
                                <div class="modal-footer" style="border-top: 1px solid #f0f2f5; padding: 12px 20px; gap: 8px;">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius: 10px; font-family: 'Poppins', sans-serif; padding: 8px 24px; font-size: 14px;">Batal</button>
                                    <form action="{{ route('17peduli.destroy', $item->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" style="background: #c62828; border: none; border-radius: 10px; font-family: 'Poppins', sans-serif; padding: 8px 24px; font-size: 14px;">
                                            <i class="mdi mdi-delete" style="margin-right: 6px;"></i> Ya, Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty
                    <div style="text-align: center; padding: 60px 20px; background: #f8fafc; border-radius: 16px; border: 2px dashed #e0e4ea;">
                        <div style="font-size: 56px; color: #b0b8c4; margin-bottom: 16px;">
                            <i class="mdi mdi-calendar-blank"></i>
                        </div>
                        <h5 style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #5a6a7a; margin: 0; font-size: 18px;">
                            @if(request('search')) Data Tidak Ditemukan! @else Belum Ada Agenda SABHA PEDULI @endif
                        </h5>
                        <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #b0b8c4; margin-top: 6px;">
                            @if(request('search'))
                                Tidak ada hasil untuk pencarian "<strong>{{ request('search') }}</strong>"
                            @else
                                Klik tombol <strong>"Tambah Agenda"</strong> untuk menambahkan agenda event SABHA PEDULI.
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
                    Menampilkan <strong style="color: #1a2332; font-weight: 600;">{{ $data->firstItem() }}</strong> -
                    <strong style="color: #1a2332; font-weight: 600;">{{ $data->lastItem() }}</strong>
                    dari <strong style="color: #1a2332; font-weight: 600;">{{ $data->total() }}</strong>
                    <span style="background: linear-gradient(135deg, #4f6af5, #7c3aed); color: white; padding: 2px 12px; border-radius: 20px; font-size: 12px; font-weight: 600; margin-left: 4px;">data</span>
                </div>

                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-nav" style="display: flex; align-items: center; gap: 6px; margin: 0; flex-wrap: wrap; justify-content: center;">
                        @if ($data->onFirstPage())
                            <li class="page-item disabled"><span class="page-link" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; color: #b8c5d6; background: transparent; border: 2px solid transparent; border-radius: 12px; padding: 8px 14px; min-width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; opacity: 0.5; cursor: not-allowed;"><i class="mdi mdi-chevron-left" style="font-size: 18px;"></i> Prev</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $data->previousPageUrl() }}" rel="prev" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; color: #1a2332; background: #f8fafc; border: 1px solid #e9edf2; border-radius: 12px; padding: 8px 14px; min-width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); text-decoration: none;"><i class="mdi mdi-chevron-left" style="font-size: 18px;"></i> Prev</a></li>
                        @endif

                        @php $start = max(1, $data->currentPage() - 2); $end = min($data->lastPage(), $data->currentPage() + 2); @endphp
                        @if ($start > 1)
                            <li class="page-item"><a class="page-link" href="{{ $data->url(1) }}" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; color: #1a2332; background: transparent; border: 2px solid transparent; border-radius: 12px; padding: 8px 16px; min-width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); text-decoration: none;">1</a></li>
                            @if ($start > 2) <li class="page-item disabled"><span class="page-link" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 600; color: #b8c5d6; background: transparent; border: none; padding: 8px 12px;">...</span></li> @endif
                        @endif
                        @for ($i = $start; $i <= $end; $i++)
                            @if ($i == $data->currentPage())
                                <li class="page-item active"><span class="page-link" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 600; background: linear-gradient(135deg, #4f6af5, #7c3aed); border-color: #4f6af5; color: #ffffff; border-radius: 12px; padding: 8px 16px; min-width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(79,106,245,0.35); transform: translateY(-2px); animation: pulse 2s infinite;">{{ $i }}</span></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $data->url($i) }}" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; color: #1a2332; background: transparent; border: 2px solid transparent; border-radius: 12px; padding: 8px 16px; min-width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); text-decoration: none;">{{ $i }}</a></li>
                            @endif
                        @endfor
                        @if ($end < $data->lastPage())
                            @if ($end < $data->lastPage() - 1) <li class="page-item disabled"><span class="page-link" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 600; color: #b8c5d6; background: transparent; border: none; padding: 8px 12px;">...</span></li> @endif
                            <li class="page-item"><a class="page-link" href="{{ $data->url($data->lastPage()) }}" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; color: #1a2332; background: transparent; border: 2px solid transparent; border-radius: 12px; padding: 8px 16px; min-width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); text-decoration: none;">{{ $data->lastPage() }}</a></li>
                        @endif
                        @if ($data->hasMorePages())
                            <li class="page-item"><a class="page-link" href="{{ $data->nextPageUrl() }}" rel="next" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; color: #1a2332; background: #f8fafc; border: 1px solid #e9edf2; border-radius: 12px; padding: 8px 14px; min-width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); text-decoration: none;">Next <i class="mdi mdi-chevron-right" style="font-size: 18px;"></i></a></li>
                        @else
                            <li class="page-item disabled"><span class="page-link" style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; color: #b8c5d6; background: transparent; border: 2px solid transparent; border-radius: 12px; padding: 8px 14px; min-width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; opacity: 0.5; cursor: not-allowed;">Next <i class="mdi mdi-chevron-right" style="font-size: 18px;"></i></span></li>
                        @endif
                    </ul>
                </nav>
            </div>
            @endif

        </div>
    </div>
</div>

{{-- ============================================================
     MODAL TAMBAH (SEDERHANA - 3 KOLOM, HANYA INPUT FILE)
     ============================================================ --}}
<div class="modal fade" id="tambahModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content" style="border-radius: 20px; border: none; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
            <div class="modal-header" style="border-bottom: 2px solid #c62828; padding: 20px 24px;">
                <h5 class="modal-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; font-size: 20px;">
                    <i class="mdi mdi-plus" style="color: #c62828; margin-right: 10px;"></i>
                    Tambah Agenda SABHA PEDULI
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('peduli.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body" style="padding: 20px 24px;">

                    {{-- JUDUL --}}
                    <div class="mb-3">
                        <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">
                            <i class="mdi mdi-format-title" style="color: #c62828;"></i> Judul Agenda
                        </label>
                        <input type="text" class="form-control" name="sabha1" placeholder="Masukkan judul agenda" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 14px; padding: 10px 14px;" required>
                    </div>

                    {{-- KETERANGAN --}}
                    <div class="mb-3">
                        <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">
                            <i class="mdi mdi-information" style="color: #0d47a1;"></i> Keterangan
                        </label>
                        <textarea class="form-control" name="sabha2" rows="3" placeholder="Masukkan keterangan agenda..." style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 14px; padding: 10px 14px;"></textarea>
                    </div>

                    {{-- 5 FOTO (3 KOLOM) --}}
                    <div class="row g-3">
                        @for ($i = 3; $i <= 7; $i++)
                            <div class="col-4">
                                <div style="background: #f8fafc; border-radius: 10px; padding: 12px; border: 1px solid #e8ecf1;">
                                    <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 13px; display: block;">
                                        <i class="mdi mdi-camera" style="color: #c62828;"></i> Foto {{ $i - 2 }}
                                    </label>
                                    <input type="file" class="form-control" name="sabha{{ $i }}" accept=".jpg,.jpeg,.png,.gif,.webp" style="border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 13px; padding: 6px 10px;">
                                    <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: 10px; display: block; margin-top: 4px;">Max 20MB, JPG/PNG/GIF/WEBP</small>
                                </div>
                            </div>
                        @endfor
                    </div>

                </div>
                <div class="modal-footer" style="border-top: 1px solid #f0f2f5; padding: 12px 24px; gap: 8px;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius: 10px; font-family: 'Poppins', sans-serif; padding: 8px 24px; font-size: 14px;">Batal</button>
                    <button type="submit" class="btn btn-primary" style="background: #c62828; border: none; border-radius: 10px; font-family: 'Poppins', sans-serif; padding: 8px 24px; font-size: 14px;">
                        <i class="mdi mdi-content-save" style="margin-right: 6px;"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- ============================================================
     MODAL EDIT (SEDERHANA - 3 KOLOM, HANYA INPUT FILE)
     ============================================================ --}}
@foreach ($data as $item)
<div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content" style="border-radius: 20px; border: none; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
            <div class="modal-header" style="border-bottom: 2px solid #0d47a1; padding: 20px 24px;">
                <h5 class="modal-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; font-size: 20px;">
                    <i class="mdi mdi-pencil" style="color: #0d47a1; margin-right: 10px;"></i>
                    Edit Agenda SABHA PEDULI
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('peduli.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body" style="padding: 20px 24px;">

                    {{-- JUDUL --}}
                    <div class="mb-3">
                        <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">
                            <i class="mdi mdi-format-title" style="color: #c62828;"></i> Judul Agenda
                        </label>
                        <input type="text" class="form-control" name="sabha1" value="{{ $item->sabha1 }}" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 14px; padding: 10px 14px;" required>
                    </div>

                    {{-- KETERANGAN --}}
                    <div class="mb-3">
                        <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">
                            <i class="mdi mdi-information" style="color: #0d47a1;"></i> Keterangan
                        </label>
                        <textarea class="form-control" name="sabha2" rows="3" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 14px; padding: 10px 14px;">{{ $item->sabha2 }}</textarea>
                    </div>

                    {{-- 5 FOTO (3 KOLOM) --}}
                    <div class="row g-3">
                        @for ($i = 3; $i <= 7; $i++)
                            @php $field = 'sabha' . $i; @endphp
                            <div class="col-4">
                                <div style="background: #f8fafc; border-radius: 10px; padding: 12px; border: 1px solid #e8ecf1;">
                                    <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 13px; display: block;">
                                        <i class="mdi mdi-camera" style="color: #c62828;"></i> Foto {{ $i - 2 }}
                                    </label>
                                    <input type="file" class="form-control" name="{{ $field }}" accept=".jpg,.jpeg,.png,.gif,.webp" style="border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 13px; padding: 6px 10px;">
                                    <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: 10px; display: block; margin-top: 4px;">Kosongkan untuk tetap menggunakan foto lama</small>
                                </div>
                            </div>
                        @endfor
                    </div>

                </div>
                <div class="modal-footer" style="border-top: 1px solid #f0f2f5; padding: 12px 24px; gap: 8px;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius: 10px; font-family: 'Poppins', sans-serif; padding: 8px 24px; font-size: 14px;">Batal</button>
                    <button type="submit" class="btn btn-primary" style="background: #0d47a1; border: none; border-radius: 10px; font-family: 'Poppins', sans-serif; padding: 8px 24px; font-size: 14px;">
                        <i class="mdi mdi-content-save" style="margin-right: 6px;"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

{{-- ============================================================
     STYLE & SCRIPTS
     ============================================================ --}}
@push('styles')
<style>
    .foto-figura {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .foto-figura:hover {
        transform: translateY(-4px) scale(1.02);
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.08);
        border-color: #c62828;
    }
    .foto-figura:hover img {
        transform: scale(1.04);
    }

    .pagination-nav .page-item { margin: 0 2px; }
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
        box-shadow: 0 4px 12px rgba(79,106,245,0.15);
    }
    .pagination-nav .page-item.active .page-link {
        background: linear-gradient(135deg, #4f6af5, #7c3aed);
        border-color: #4f6af5;
        color: #ffffff;
        font-weight: 600;
        box-shadow: 0 4px 15px rgba(79,106,245,0.35);
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
        box-shadow: 0 4px 15px rgba(79,106,245,0.25);
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
        0% { box-shadow: 0 4px 15px rgba(79,106,245,0.35); }
        50% { box-shadow: 0 4px 25px rgba(79,106,245,0.5); }
        100% { box-shadow: 0 4px 15px rgba(79,106,245,0.35); }
    }
    @media (max-width: 768px) {
        .pagination-nav { justify-content: center; flex-wrap: wrap; }
        .pagination-nav .page-link { font-size: 13px; padding: 6px 12px; min-width: 38px; height: 38px; border-radius: 10px; }
        .pagination-nav .page-item:first-child .page-link,
        .pagination-nav .page-item:last-child .page-link { padding: 6px 10px; font-size: 12px; }
    }
    @media (max-width: 480px) {
        .pagination-nav .page-link { font-size: 12px; padding: 4px 10px; min-width: 34px; height: 34px; border-radius: 8px; }
        .pagination-nav .page-item:first-child .page-link,
        .pagination-nav .page-item:last-child .page-link { padding: 4px 8px; font-size: 11px; }
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {

    // ============================================================
    // BUKA MODAL EDIT
    // ============================================================
    document.querySelectorAll('.btn-edit').forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            var id = this.dataset.id;
            var modal = document.getElementById('editModal' + id);
            if (modal) {
                var bsModal = new bootstrap.Modal(modal);
                bsModal.show();
            }
        });
    });

    // ============================================================
    // TUTUP MODAL KLIK DI LUAR
    // ============================================================
    document.querySelectorAll('.modal').forEach(function(modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === this) {
                var bsModal = bootstrap.Modal.getInstance(this);
                if (bsModal) bsModal.hide();
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
    var headers = ['No', 'Judul', 'Keterangan', 'Foto 1', 'Foto 2', 'Foto 3', 'Foto 4', 'Foto 5', 'Tanggal Dibuat'];
    csv.push(headers.join(','));

    dataCards.forEach(function(card, index) {
        var row = [];
        var no = index + 1;
        row.push(no);

        var judul = card.querySelector('h5');
        row.push(judul ? judul.textContent.trim() : '-');

        var ket = card.querySelector('.border-left-4');
        row.push(ket ? ket.textContent.trim() : '-');

        var fotoDivs = card.querySelectorAll('.row.g-3 .foto-figura img');
        var fotoStatus = [];
        fotoDivs.forEach(function(img) {
            fotoStatus.push(img ? 'Ada' : 'Tidak Ada');
        });
        while (fotoStatus.length < 5) {
            fotoStatus.push('-');
        }
        row.push(...fotoStatus);

        var date = card.querySelector('.d-flex.align-items-center.gap-2.flex-wrap .d-flex:last-child span');
        row.push(date ? date.textContent.trim() : '-');

        csv.push(row.join(','));
    });

    var blob = new Blob(['\uFEFF' + csv.join('\n')], { type: 'text/csv;charset=utf-8;' });
    var link = document.createElement('a');
    var url = URL.createObjectURL(blob);
    link.setAttribute('href', url);
    link.setAttribute('download', 'sabha_peduli_agenda_' + new Date().toISOString().slice(0,10) + '.csv');
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
    URL.revokeObjectURL(url);
}
</script>
@endpush

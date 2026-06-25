{{-- ============================================================
     DATA AGENDA EVENT SNOC (DENGAN STRUKTUR DATABASE BARU)
     ============================================================ --}}

@include('backend.00_dashboard.08_style')

<div class="col-12">
    <div class="card" style="border-radius: 20px; border: none; box-shadow: 0 4px 24px rgba(0,0,0,0.04);">
        <div class="card-body" style="padding: 28px 30px;">

            {{-- HEADER --}}
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                <div>
                    <h4 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; margin-bottom: 2px; font-size: 22px; color: #1a1a2e;">
                        🏔️ Agenda Event SNOC
                    </h4>
                    <p class="card-description" style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #7a8a9e; margin: 0;">
                        Kelola agenda event SNOC Sabhagiriwana'17
                    </p>
                </div>
                {{-- TOMBOL TAMBAH -> btn-biru --}}
                <button class="btn-biru" data-bs-toggle="modal" data-bs-target="#tambahModal">
                    <i class="mdi mdi-plus"></i> Tambah Agenda
                </button>
            </div>

            {{-- SEARCH & PER PAGE --}}
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                <div style="flex: 1; min-width: 200px;">
                    <form method="GET" action="{{ route('09snoc.index') }}" class="d-flex gap-2">
                        <div class="input-group" style="border-radius: 12px; overflow: hidden; border: 1px solid #e0e4ea; background: #fff;">
                            <span class="input-group-text bg-white border-0" style="padding: 0 14px;">
                                <i class="mdi mdi-magnify" style="color: #7a8a9e; font-size: 18px;"></i>
                            </span>
                            <input type="text" class="form-control border-0" name="search" placeholder="Cari nama event..." value="{{ request('search') }}" style="font-family: 'Poppins', sans-serif; font-size: 14px; padding: 10px 0;">
                            <input type="hidden" name="per_page" value="{{ request('per_page', 10) }}">
                        </div>
                        {{-- TOMBOL CARI -> btn-biru --}}
                        {{-- <button type="submit" class="btn-biru">
                            <i class="mdi mdi-magnify"></i> Cari
                        </button> --}}
                        @if(request('search'))
                            {{-- TOMBOL RESET -> btn-silver --}}
                            <a href="{{ route('09snoc.index') }}" class="btn-silver">
                                <i class="mdi mdi-close"></i> Reset
                            </a>
                        @endif
                    </form>
                </div>

                <div class="d-flex flex-wrap align-items-center gap-2">
                    <div style="display: flex; align-items: center; gap: 6px;">
                        <span style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #5a6a7a; white-space: nowrap;">Tampil:</span>
                        <form method="GET" action="{{ route('09snoc.index') }}" id="perPageForm" class="d-inline">
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
                    {{-- TOMBOL DOWNLOAD -> btn-orange --}}
                    <button onclick="exportToCSV()" class="btn-orange" style="display: inline-flex; align-items: center; gap: 6px;">
                        <i class="mdi mdi-download"></i> Download
                    </button>
                </div>
            </div>

            {{-- DATA CARDS --}}
            <div id="dataContainer">
                @forelse ($data as $index => $item)
                    <div class="card mb-4" style="border-radius: 16px; border: 1px solid #f0f2f5; box-shadow: 0 2px 8px rgba(0,0,0,0.02); overflow: hidden; transition: all 0.3s ease; background: #ffffff;">
                        <div class="card-body" style="padding: 20px 24px;">

                            {{-- HEADER CARD --}}
                            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-3">
                                <div>
                                    <div class="d-flex align-items-center gap-3 flex-wrap">
                                        <span style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #c62828; font-size: 13px; background: rgba(198,40,40,0.08); padding: 4px 14px; border-radius: 30px;">
                                            #{{ $data->firstItem() + $index }}
                                        </span>
                                        <h5 style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; margin: 0; font-size: 16px; word-break: break-word;">
                                            {{ Str::limit($item->sabha1 ?? 'Event', 60) }}
                                        </h5>
                                    </div>
                                    <div style="margin-top: 4px; display: flex; flex-wrap: wrap; gap: 12px;">
                                        <span style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #b0b8c4;">
                                            <i class="mdi mdi-calendar"></i> {{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}
                                        </span>
                                        @if($item->sabha2)
                                            <span style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #7a8a9e;">
                                                <i class="mdi mdi-map-marker"></i> {{ Str::limit($item->sabha2, 30) }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="d-flex gap-1 flex-shrink-0">
                                    {{-- TOMBOL EDIT -> btn-hijau, langsung data-bs-toggle --}}
                                    <button class="btn-hijau" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}" style="padding: 6px 14px; font-size: 13px;">
                                        <i class="mdi mdi-pencil"></i> Edit
                                    </button>
                                    {{-- TOMBOL HAPUS -> btn-merah --}}
                                    <button class="btn-merah" data-id="{{ $item->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}" style="padding: 6px 14px; font-size: 13px;">
                                        <i class="mdi mdi-delete"></i> Hapus
                                    </button>
                                </div>
                            </div>

                            {{-- DIVIDER --}}
                            <hr style="margin: 10px 0; border-color: #f0f2f5;">

                            {{-- ============================================================
                                 BODY: NAMA EVENT & NARASI (sabha1)
                                 ============================================================ --}}
                            @if($item->sabha1)
                                <div style="background: #f8fafc; border-radius: 10px; padding: 12px 16px; margin-bottom: 16px; border-left: 4px solid #c62828;">
                                    <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #1a1a2e; margin: 0; line-height: 1.7; white-space: pre-wrap; word-break: break-word;">
                                        {{ $item->sabha1 }}
                                    </p>
                                </div>
                            @endif

                            {{-- ============================================================
                                 WAKTU & LOKASI (sabha2)
                                 ============================================================ --}}
                            @if($item->sabha2)
                                <div style="background: #f8fafc; border-radius: 10px; padding: 10px 16px; margin-bottom: 16px; border-left: 4px solid #0d47a1; display: flex; align-items: center; gap: 8px; flex-wrap: wrap;">
                                    <i class="mdi mdi-calendar-clock" style="color: #0d47a1; font-size: 18px;"></i>
                                    <span style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #1a1a2e;">
                                        {{ $item->sabha2 }}
                                    </span>
                                </div>
                            @endif

                            {{-- ============================================================
                                 POSTER (sabha3)
                                 ============================================================ --}}
                            @if($item->sabha3 && file_exists(public_path($item->sabha3)))
                                <div style="margin-bottom: 16px; text-align: center; background: #f8fafc; padding: 12px; border-radius: 12px; border: 1px solid #e8ecf1;">
                                    <p style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #7a8a9e; margin-bottom: 8px; font-weight: 600;">
                                        <i class="mdi mdi-poster"></i> POSTER KEGIATAN
                                    </p>
                                    <a href="{{ asset($item->sabha3) }}" target="_blank">
                                        <img src="{{ asset($item->sabha3) }}" alt="Poster" style="max-width: 100%; max-height: 300px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">
                                    </a>
                                </div>
                            @endif

                            {{-- ============================================================
                                 LAPORAN EVENT (sabha4) - 5 PARAGRAF
                                 ============================================================ --}}
                            @if($item->sabha4)
                                <div style="background: #f8fafc; border-radius: 10px; padding: 12px 16px; margin-bottom: 16px; border-left: 4px solid #c62828;">
                                    <p style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #c62828; font-size: 13px; margin: 0 0 6px 0;">
                                        <i class="mdi mdi-file-document"></i> LAPORAN EVENT
                                    </p>
                                    <div style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #1a1a2e; line-height: 1.8; white-space: pre-wrap; word-break: break-word;">
                                        {{ $item->sabha4 }}
                                    </div>
                                </div>
                            @endif

                            {{-- ============================================================
                                 DOKUMENTASI 10 FOTO (sabha5-sabha9 + sabhaberkas1-sabhaberkas5)
                                 ============================================================ --}}
                            @php
                                $fotoFields = [
                                    'sabha5', 'sabha6', 'sabha7', 'sabha8', 'sabha9',
                                    'sabhaberkas1', 'sabhaberkas2', 'sabhaberkas3', 'sabhaberkas4', 'sabhaberkas5'
                                ];
                                $fotoLabels = ['Foto 1', 'Foto 2', 'Foto 3', 'Foto 4', 'Foto 5',
                                                'Foto 6', 'Foto 7', 'Foto 8', 'Foto 9', 'Foto 10'];
                                $hasAnyFoto = false;
                                foreach ($fotoFields as $f) {
                                    if ($item->$f && file_exists(public_path($item->$f))) { $hasAnyFoto = true; break; }
                                }
                            @endphp

                            @if($hasAnyFoto)
                                <hr style="margin: 10px 0; border-color: #f0f2f5;">
                                <p style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #0d47a1; font-size: 13px; margin-bottom: 10px;">
                                    <i class="mdi mdi-camera"></i> DOKUMENTASI KEGIATAN
                                </p>
                                <div class="row g-3">
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
                            @endif

                            {{-- ============================================================
                                 KETERANGAN TAMBAHAN (sabha10)
                                 ============================================================ --}}
                            @if($item->sabha10)
                                <hr style="margin: 10px 0; border-color: #f0f2f5;">
                                <div style="background: #f8fafc; border-radius: 10px; padding: 12px 16px; border-left: 4px solid #fd7e14;">
                                    <p style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #fd7e14; font-size: 13px; margin: 0 0 4px 0;">
                                        <i class="mdi mdi-information"></i> KETERANGAN TAMBAHAN
                                    </p>
                                    <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #1a1a2e; margin: 0; line-height: 1.7; white-space: pre-wrap; word-break: break-word;">
                                        {{ $item->sabha10 }}
                                    </p>
                                </div>
                            @endif

                        </div>
                    </div>

                    {{-- ============================================================
                         MODAL DELETE
                         ============================================================ --}}
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
                                        Event: <strong>{{ Str::limit($item->sabha1 ?? 'Data', 50) }}</strong>
                                    </p>
                                </div>
                                <div class="modal-footer" style="border-top: 1px solid #f0f2f5; padding: 12px 20px; gap: 8px;">
                                    {{-- BATAL -> btn-silver --}}
                                    <button type="button" class="btn-silver" data-bs-dismiss="modal">Batal</button>
                                    <form action="{{ route('09snoc.destroy', $item->id) }}" method="POST" style="display: inline;">
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
                    <div style="text-align: center; padding: 60px 20px; background: #f8fafc; border-radius: 16px; border: 2px dashed #e0e4ea;">
                        <div style="font-size: 56px; color: #b0b8c4; margin-bottom: 16px;">
                            <i class="mdi mdi-calendar-blank"></i>
                        </div>
                        <h5 style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #5a6a7a; margin: 0; font-size: 18px;">
                            @if(request('search')) Data Tidak Ditemukan! @else Belum Ada Agenda SNOC @endif
                        </h5>
                        <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #b0b8c4; margin-top: 6px;">
                            @if(request('search'))
                                Tidak ada hasil untuk pencarian "<strong>{{ request('search') }}</strong>"
                            @else
                                Klik tombol <strong>"Tambah Agenda"</strong> untuk menambahkan agenda event SNOC.
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
     MODAL TAMBAH (SESUAI STRUKTUR DATABASE BARU)
     ============================================================ --}}
<div class="modal fade" id="tambahModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content" style="border-radius: 20px; border: none; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
            <div class="modal-header" style="border-bottom: 2px solid #c62828; padding: 20px 24px;">
                <h5 class="modal-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; font-size: 20px;">
                    <i class="mdi mdi-plus" style="color: #c62828; margin-right: 10px;"></i>
                    Tambah Agenda SNOC
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('snoc.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body" style="padding: 20px 24px;">

                    {{-- 1. NAMA EVENT & NARASI (sabha1) --}}
                    <div class="mb-3">
                        <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">
                            <i class="mdi mdi-format-title" style="color: #c62828;"></i> Nama Event & Narasi
                        </label>
                        <textarea class="form-control" name="sabha1" rows="6" placeholder="Masukkan nama event dan narasi singkat tentang lomba..." style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 14px; padding: 10px 14px;" required></textarea>
                        <small style="font-family: 'Poppins', sans-serif; color: #888; font-size: 12px;">Isi nama event di awal, lalu lanjutkan dengan narasi.</small>
                    </div>

                    {{-- 2. WAKTU & LOKASI (sabha2) --}}
                    <div class="mb-3">
                        <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">
                            <i class="mdi mdi-calendar-clock" style="color: #0d47a1;"></i> Waktu & Lokasi Kegiatan
                        </label>
                        <input type="text" class="form-control" name="sabha2" placeholder="Tanggal, tempat, koordinat (contoh: 25-26 Jan 2025, Lapangan Merdeka, -6.1234, 106.1234)" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 14px; padding: 10px 14px;">
                    </div>

                    {{-- 3. POSTER (sabha3) --}}
                    <div class="mb-3">
                        <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">
                            <i class="mdi mdi-poster" style="color: #c62828;"></i> Poster Kegiatan
                        </label>
                        <input type="file" class="form-control" name="sabha3" accept=".jpg,.jpeg,.png,.gif,.webp" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 14px; padding: 8px 12px;">
                        <small style="font-family: 'Poppins', sans-serif; color: #888; font-size: 12px;">Upload poster kegiatan (max 20MB, JPG/PNG/GIF/WEBP)</small>
                    </div>

                    {{-- 4. LAPORAN EVENT (sabha4) - 5 paragraf --}}
                    <div class="mb-3">
                        <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">
                            <i class="mdi mdi-file-document" style="color: #c62828;"></i> Laporan Event (5 paragraf)
                        </label>
                        <textarea class="form-control" name="sabha4" rows="10" placeholder="Isi laporan event (5 paragraf)&#10;Paragraf 1: ...&#10;Paragraf 2: ...&#10;Paragraf 3: ...&#10;Paragraf 4: ...&#10;Paragraf 5: ..." style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 14px; padding: 10px 14px;"></textarea>
                        <small style="font-family: 'Poppins', sans-serif; color: #888; font-size: 12px;">Pisahkan paragraf dengan baris baru (enter).</small>
                    </div>

                    {{-- 5. DOKUMENTASI 10 FOTO --}}
                    <hr style="margin: 16px 0; border-color: #f0f2f5;">
                    <p style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #0d47a1; font-size: 14px;">
                        <i class="mdi mdi-camera"></i> Dokumentasi (10 Foto)
                    </p>
                    <div class="row g-3">
                        @php
                            $fotoFields = [
                                'sabha5' => 'Foto 1',
                                'sabha6' => 'Foto 2',
                                'sabha7' => 'Foto 3',
                                'sabha8' => 'Foto 4',
                                'sabha9' => 'Foto 5',
                                'sabhaberkas1' => 'Foto 6',
                                'sabhaberkas2' => 'Foto 7',
                                'sabhaberkas3' => 'Foto 8',
                                'sabhaberkas4' => 'Foto 9',
                                'sabhaberkas5' => 'Foto 10',
                            ];
                        @endphp
                        @foreach ($fotoFields as $field => $label)
                            <div class="col-6 col-md-3 col-lg-2">
                                <div style="background: #f8fafc; border-radius: 10px; padding: 10px; border: 1px solid #e8ecf1; height: 100%;">
                                    <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 12px; display: block;">
                                        <i class="mdi mdi-image" style="color: #c62828;"></i> {{ $label }}
                                    </label>
                                    <input type="file" class="form-control" name="{{ $field }}" accept=".jpg,.jpeg,.png,.gif,.webp" style="border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 13px; padding: 4px 8px;">
                                    <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: 10px; display: block; margin-top: 4px;">Max 20MB</small>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- 6. KETERANGAN TAMBAHAN (sabha10) --}}
                    <hr style="margin: 16px 0; border-color: #f0f2f5;">
                    <div class="mb-3">
                        <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">
                            <i class="mdi mdi-information" style="color: #fd7e14;"></i> Keterangan Tambahan
                        </label>
                        <textarea class="form-control" name="sabha10" rows="4" placeholder="Tambahkan keterangan lain jika ada..." style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 14px; padding: 10px 14px;"></textarea>
                    </div>

                </div>
                <div class="modal-footer" style="border-top: 1px solid #f0f2f5; padding: 12px 24px; gap: 8px;">
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
     MODAL EDIT (SESUAI STRUKTUR DATABASE BARU)
     ============================================================ --}}
@foreach ($data as $item)
<div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content" style="border-radius: 20px; border: none; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
            <div class="modal-header" style="border-bottom: 2px solid #0d47a1; padding: 20px 24px;">
                <h5 class="modal-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; font-size: 20px;">
                    <i class="mdi mdi-pencil" style="color: #0d47a1; margin-right: 10px;"></i>
                    Edit Agenda SNOC
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('snoc.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body" style="padding: 20px 24px;">

                    {{-- 1. NAMA EVENT & NARASI (sabha1) --}}
                    <div class="mb-3">
                        <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">
                            <i class="mdi mdi-format-title" style="color: #c62828;"></i> Nama Event & Narasi
                        </label>
                        <textarea class="form-control" name="sabha1" rows="6" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 14px; padding: 10px 14px;" required>{{ $item->sabha1 }}</textarea>
                    </div>

                    {{-- 2. WAKTU & LOKASI (sabha2) --}}
                    <div class="mb-3">
                        <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">
                            <i class="mdi mdi-calendar-clock" style="color: #0d47a1;"></i> Waktu & Lokasi Kegiatan
                        </label>
                        <input type="text" class="form-control" name="sabha2" value="{{ $item->sabha2 }}" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 14px; padding: 10px 14px;">
                    </div>

                    {{-- 3. POSTER (sabha3) --}}
                    <div class="mb-3">
                        <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">
                            <i class="mdi mdi-poster" style="color: #c62828;"></i> Poster Kegiatan
                        </label>
                        @if($item->sabha3 && file_exists(public_path($item->sabha3)))
                            <div style="margin-bottom: 8px; padding: 8px; background: #f8fafc; border-radius: 8px; display: flex; align-items: center; gap: 10px; flex-wrap: wrap;">
                                <img src="{{ asset($item->sabha3) }}" alt="Poster saat ini" style="max-height: 80px; border-radius: 6px;">
                                <div>
                                    <a href="{{ asset($item->sabha3) }}" target="_blank" class="btn-biru" style="padding: 2px 12px; font-size: 12px; text-decoration: none;">Lihat</a>
                                    <p style="font-size: 11px; color: #7a8a9e; margin: 4px 0 0;">Kosongkan untuk tetap menggunakan poster lama</p>
                                </div>
                            </div>
                        @endif
                        <input type="file" class="form-control" name="sabha3" accept=".jpg,.jpeg,.png,.gif,.webp" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 14px; padding: 8px 12px;">
                        <small style="font-family: 'Poppins', sans-serif; color: #888; font-size: 12px;">Upload poster baru (max 20MB)</small>
                    </div>

                    {{-- 4. LAPORAN EVENT (sabha4) --}}
                    <div class="mb-3">
                        <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">
                            <i class="mdi mdi-file-document" style="color: #c62828;"></i> Laporan Event (5 paragraf)
                        </label>
                        <textarea class="form-control" name="sabha4" rows="10" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 14px; padding: 10px 14px;">{{ $item->sabha4 }}</textarea>
                    </div>

                    {{-- 5. DOKUMENTASI 10 FOTO --}}
                    <hr style="margin: 16px 0; border-color: #f0f2f5;">
                    <p style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #0d47a1; font-size: 14px;">
                        <i class="mdi mdi-camera"></i> Dokumentasi (10 Foto) – Kosongkan untuk tetap menggunakan foto lama
                    </p>
                    <div class="row g-3">
                        @php
                            $fotoFields = [
                                'sabha5' => 'Foto 1',
                                'sabha6' => 'Foto 2',
                                'sabha7' => 'Foto 3',
                                'sabha8' => 'Foto 4',
                                'sabha9' => 'Foto 5',
                                'sabhaberkas1' => 'Foto 6',
                                'sabhaberkas2' => 'Foto 7',
                                'sabhaberkas3' => 'Foto 8',
                                'sabhaberkas4' => 'Foto 9',
                                'sabhaberkas5' => 'Foto 10',
                            ];
                        @endphp
                        @foreach ($fotoFields as $field => $label)
                            <div class="col-6 col-md-3 col-lg-2">
                                <div style="background: #f8fafc; border-radius: 10px; padding: 10px; border: 1px solid #e8ecf1; height: 100%;">
                                    <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 12px; display: block;">
                                        <i class="mdi mdi-image" style="color: #c62828;"></i> {{ $label }}
                                    </label>
                                    @if($item->$field && file_exists(public_path($item->$field)))
                                        <div style="margin-bottom: 6px;">
                                            <img src="{{ asset($item->$field) }}" alt="{{ $label }}" style="width: 100%; max-height: 60px; object-fit: cover; border-radius: 4px;">
                                        </div>
                                    @endif
                                    <input type="file" class="form-control" name="{{ $field }}" accept=".jpg,.jpeg,.png,.gif,.webp" style="border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 13px; padding: 4px 8px;">
                                    <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: 10px; display: block; margin-top: 4px;">Max 20MB</small>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- 6. KETERANGAN TAMBAHAN (sabha10) --}}
                    <hr style="margin: 16px 0; border-color: #f0f2f5;">
                    <div class="mb-3">
                        <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">
                            <i class="mdi mdi-information" style="color: #fd7e14;"></i> Keterangan Tambahan
                        </label>
                        <textarea class="form-control" name="sabha10" rows="4" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 14px; padding: 10px 14px;">{{ $item->sabha10 }}</textarea>
                    </div>

                </div>
                <div class="modal-footer" style="border-top: 1px solid #f0f2f5; padding: 12px 24px; gap: 8px;">
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
    // TUTUP MODAL KLIK DI LUAR (opsional)
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
    var headers = ['No', 'Nama Event', 'Waktu & Lokasi', 'Poster', 'Laporan', 'Foto 1', 'Foto 2', 'Foto 3', 'Foto 4', 'Foto 5', 'Foto 6', 'Foto 7', 'Foto 8', 'Foto 9', 'Foto 10', 'Keterangan Tambahan', 'Tanggal Dibuat'];
    csv.push(headers.join(','));

    dataCards.forEach(function(card, index) {
        var row = [];
        var no = index + 1;
        row.push(no);

        // Nama Event (sabha1) - ambil dari h5
        var judul = card.querySelector('h5');
        row.push(judul ? judul.textContent.trim() : '-');

        // Waktu & Lokasi (sabha2)
        var waktu = card.querySelector('.d-flex.align-items-center.gap-2.flex-wrap .d-flex.flex-wrap.gap-12 span:last-child');
        row.push(waktu ? waktu.textContent.trim() : '-');

        // Poster (sabha3)
        var poster = card.querySelector('.mb-3 a img') ? 'Ada' : 'Tidak Ada';
        row.push(poster);

        // Laporan (sabha4)
        var laporan = card.querySelector('.border-left-4 .font-14');
        row.push(laporan ? laporan.textContent.trim() : '-');

        // 10 Foto
        var fotoDivs = card.querySelectorAll('.row.g-3 .foto-figura img');
        var fotoStatus = [];
        fotoDivs.forEach(function(img) {
            fotoStatus.push(img ? 'Ada' : 'Tidak Ada');
        });
        while (fotoStatus.length < 10) {
            fotoStatus.push('-');
        }
        row.push(...fotoStatus);

        // Keterangan Tambahan (sabha10)
        var ket = card.querySelector('.border-left-4 .font-14:last-child');
        row.push(ket ? ket.textContent.trim() : '-');

        // Tanggal Dibuat
        var date = card.querySelector('.d-flex.align-items-center.gap-2.flex-wrap .d-flex:last-child span');
        row.push(date ? date.textContent.trim() : '-');

        csv.push(row.join(','));
    });

    var blob = new Blob(['\uFEFF' + csv.join('\n')], { type: 'text/csv;charset=utf-8;' });
    var link = document.createElement('a');
    var url = URL.createObjectURL(blob);
    link.setAttribute('href', url);
    link.setAttribute('download', 'snoc_agenda_' + new Date().toISOString().slice(0,10) + '.csv');
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
    URL.revokeObjectURL(url);
}
</script>
@endpush

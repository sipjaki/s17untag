{{-- ============================================================
     DATA ARTIKEL (CARD ELEGAN - JUDUL + KETERANGAN + 2 FILE)
     DENGAN CUSTOM BUTTON (btn-biru, btn-merah, dll)
     ============================================================ --}}

@include('backend.00_dashboard.08_style')

<div class="col-12">
    <div class="card" style="border-radius: 20px; border: none; box-shadow: 0 4px 24px rgba(0,0,0,0.04);">
        <div class="card-body" style="padding: 28px 30px;">

            {{-- HEADER --}}
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                <div>
                    <h4 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; margin-bottom: 2px; font-size: 22px; color: #1a1a2e;">
                        📝 Artikel
                    </h4>
                    <p class="card-description" style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #7a8a9e; margin: 0;">
                        Kelola artikel Sabhagiriwana'17 (dengan file)
                    </p>
                </div>
                {{-- TOMBOL TAMBAH -> btn-biru --}}
                <button class="btn-biru" data-bs-toggle="modal" data-bs-target="#tambahModal">
                    <i class="mdi mdi-plus"></i> Tambah Artikel
                </button>
            </div>

            {{-- SEARCH & PER PAGE --}}
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                <div style="flex: 1; min-width: 200px;">
                    <form method="GET" action="{{ route('19artikel.index') }}" class="d-flex gap-2">
                        <div class="input-group" style="border-radius: 12px; overflow: hidden; border: 1px solid #e0e4ea; background: #fff;">
                            <span class="input-group-text bg-white border-0" style="padding: 0 14px;">
                                <i class="mdi mdi-magnify" style="color: #7a8a9e; font-size: 18px;"></i>
                            </span>
                            <input type="text" class="form-control border-0" name="search" placeholder="Cari judul artikel..." value="{{ request('search') }}" style="font-family: 'Poppins', sans-serif; font-size: 14px; padding: 10px 0;">
                            <input type="hidden" name="per_page" value="{{ request('per_page', 10) }}">
                        </div>
                        {{-- TOMBOL CARI -> btn-biru --}}
                        {{-- <button type="submit" class="btn-biru">
                            <i class="mdi mdi-magnify"></i> Cari
                        </button> --}}
                        @if(request('search'))
                            {{-- TOMBOL RESET -> btn-silver --}}
                            <a href="{{ route('19artikel.index') }}" class="btn-silver">
                                <i class="mdi mdi-close"></i> Reset
                            </a>
                        @endif
                    </form>
                </div>

                <div class="d-flex flex-wrap align-items-center gap-2">
                    <div style="display: flex; align-items: center; gap: 6px;">
                        <span style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #5a6a7a; white-space: nowrap;">Tampil:</span>
                        <form method="GET" action="{{ route('19artikel.index') }}" id="perPageForm" class="d-inline">
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

                            {{-- HEADER --}}
                            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-3">
                                <div>
                                    <div class="d-flex align-items-center gap-3 flex-wrap">
                                        <span style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #c62828; font-size: 13px; background: rgba(198,40,40,0.08); padding: 4px 14px; border-radius: 30px;">
                                            #{{ $data->firstItem() + $index }}
                                        </span>
                                        <h5 style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; margin: 0; font-size: 16px; word-break: break-word;">
                                            {{ $item->sabha1 ?? 'Judul Artikel' }}
                                        </h5>
                                    </div>
                                    <div style="margin-top: 4px;">
                                        <span style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #b0b8c4;">
                                            <i class="mdi mdi-calendar"></i> {{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}
                                        </span>
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

                            {{-- KETERANGAN PARAGRAF (sabha2) --}}
                            @if($item->sabha2)
                                <div style="background: #f8fafc; border-radius: 10px; padding: 12px 16px; margin-bottom: 16px; border-left: 4px solid #0d47a1;">
                                    <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #1a1a2e; margin: 0; line-height: 1.8; word-break: break-word;">
                                        {{ $item->sabha2 }}
                                    </p>
                                </div>
                            @endif

                            {{-- 2 FILE (sabha3 & sabha4) --}}
                            <div class="row g-3">
                                @php
                                    $file1 = $item->sabha3;
                                    $file2 = $item->sabha4;
                                    $ext1 = $file1 ? pathinfo($file1, PATHINFO_EXTENSION) : null;
                                    $ext2 = $file2 ? pathinfo($file2, PATHINFO_EXTENSION) : null;
                                    $icon1 = 'mdi-file';
                                    $icon2 = 'mdi-file';

                                    if ($ext1) {
                                        if (in_array($ext1, ['jpg','jpeg','png','gif','webp','bmp','svg','ico'])) $icon1 = 'mdi-image';
                                        elseif (in_array($ext1, ['pdf'])) $icon1 = 'mdi-file-pdf';
                                        elseif (in_array($ext1, ['doc','docx'])) $icon1 = 'mdi-file-word';
                                        elseif (in_array($ext1, ['xls','xlsx'])) $icon1 = 'mdi-file-excel';
                                        elseif (in_array($ext1, ['ppt','pptx'])) $icon1 = 'mdi-file-powerpoint';
                                        elseif (in_array($ext1, ['zip','rar','7z'])) $icon1 = 'mdi-file-zip';
                                        elseif (in_array($ext1, ['mp4','avi','mkv','mov'])) $icon1 = 'mdi-file-video';
                                        elseif (in_array($ext1, ['mp3','wav','flac'])) $icon1 = 'mdi-file-music';
                                        else $icon1 = 'mdi-file';
                                    }

                                    if ($ext2) {
                                        if (in_array($ext2, ['jpg','jpeg','png','gif','webp','bmp','svg','ico'])) $icon2 = 'mdi-image';
                                        elseif (in_array($ext2, ['pdf'])) $icon2 = 'mdi-file-pdf';
                                        elseif (in_array($ext2, ['doc','docx'])) $icon2 = 'mdi-file-word';
                                        elseif (in_array($ext2, ['xls','xlsx'])) $icon2 = 'mdi-file-excel';
                                        elseif (in_array($ext2, ['ppt','pptx'])) $icon2 = 'mdi-file-powerpoint';
                                        elseif (in_array($ext2, ['zip','rar','7z'])) $icon2 = 'mdi-file-zip';
                                        elseif (in_array($ext2, ['mp4','avi','mkv','mov'])) $icon2 = 'mdi-file-video';
                                        elseif (in_array($ext2, ['mp3','wav','flac'])) $icon2 = 'mdi-file-music';
                                        else $icon2 = 'mdi-file';
                                    }
                                @endphp

                                @if($item->sabha3)
                                    <div class="col-md-6">
                                        <div style="background: #f8fafc; border-radius: 12px; padding: 12px; border-left: 4px solid #c62828; height: 100%;">
                                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                                <i class="mdi {{ $icon1 }}" style="font-size: 24px; color: #c62828;"></i>
                                                <span style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #7a8a9e; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;">File 1</span>
                                            </div>
                                            <div style="display: flex; align-items: center; gap: 10px; flex-wrap: wrap;">
                                                <span style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #1a1a2e; word-break: break-all; flex: 1;">
                                                    {{ basename($item->sabha3) }}
                                                </span>
                                                <div style="display: flex; gap: 6px; flex-shrink: 0;">
                                                    {{-- TOMBOL LIHAT -> btn-biru kecil --}}
                                                    <a href="{{ asset($item->sabha3) }}" target="_blank" class="btn-biru" style="padding: 4px 10px; font-size: 12px; border-radius: 8px; text-decoration: none;">
                                                        <i class="mdi mdi-eye"></i> Lihat
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if($item->sabha4)
                                    <div class="col-md-6">
                                        <div style="background: #f8fafc; border-radius: 12px; padding: 12px; border-left: 4px solid #c62828; height: 100%;">
                                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                                <i class="mdi {{ $icon2 }}" style="font-size: 24px; color: #c62828;"></i>
                                                <span style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #7a8a9e; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;">File 2</span>
                                            </div>
                                            <div style="display: flex; align-items: center; gap: 10px; flex-wrap: wrap;">
                                                <span style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #1a1a2e; word-break: break-all; flex: 1;">
                                                    {{ basename($item->sabha4) }}
                                                </span>
                                                <div style="display: flex; gap: 6px; flex-shrink: 0;">
                                                    <a href="{{ asset($item->sabha4) }}" target="_blank" class="btn-biru" style="padding: 4px 10px; font-size: 12px; border-radius: 8px; text-decoration: none;">
                                                        <i class="mdi mdi-eye"></i> Lihat
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            @if(!$item->sabha3 && !$item->sabha4)
                                <div style="text-align: center; padding: 20px; background: #f8fafc; border-radius: 12px; border: 1px dashed #e0e4ea;">
                                    <p style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #b0b8c4; margin: 0;">
                                        <i class="mdi mdi-file-off"></i> Tidak ada file
                                    </p>
                                </div>
                            @endif

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
                                        Apakah Anda yakin ingin menghapus artikel ini?
                                    </p>
                                    <p style="font-size: 13px; color: #7a8a9e; margin: 0; font-family: 'Poppins', sans-serif; word-break: break-word;">
                                        Judul: <strong>{{ $item->sabha1 ?? 'Data' }}</strong>
                                    </p>
                                    <p style="font-size: 12px; color: #c62828; margin-top: 8px; font-family: 'Poppins', sans-serif;">
                                        <i class="mdi mdi-alert"></i> Semua file akan ikut terhapus!
                                    </p>
                                </div>
                                <div class="modal-footer" style="border-top: 1px solid #f0f2f5; padding: 12px 20px; gap: 8px;">
                                    {{-- BATAL -> btn-silver --}}
                                    <button type="button" class="btn-silver" data-bs-dismiss="modal">Batal</button>
                                    <form action="{{ route('19artikel.destroy', $item->id) }}" method="POST" style="display: inline;">
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

                    {{-- MODAL EDIT --}}
                    <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content" style="border-radius: 20px; border: none; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
                                <div class="modal-header" style="border-bottom: 2px solid #0d47a1; padding: 20px 24px;">
                                    <h5 class="modal-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; font-size: 20px;">
                                        <i class="mdi mdi-pencil" style="color: #0d47a1; margin-right: 10px;"></i>
                                        Edit Artikel
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <form action="{{ route('artikel.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body" style="padding: 20px 24px;">

                                        {{-- JUDUL (sabha1) --}}
                                        <div class="mb-3">
                                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">
                                                <i class="mdi mdi-format-title" style="color: #c62828;"></i> Judul Artikel <span style="color: #c62828;">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="sabha1" value="{{ $item->sabha1 }}" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 14px; padding: 10px 14px;" required>
                                        </div>

                                        {{-- KETERANGAN PARAGRAF (sabha2) --}}
                                        <div class="mb-3">
                                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">
                                                <i class="mdi mdi-information" style="color: #0d47a1;"></i> Keterangan Paragraf
                                            </label>
                                            <textarea class="form-control" name="sabha2" rows="4" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 14px; padding: 10px 14px;">{{ $item->sabha2 }}</textarea>
                                        </div>

                                        {{-- 2 FILE --}}
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">
                                                    <i class="mdi mdi-file" style="color: #c62828;"></i> File 1
                                                </label>
                                                @if($item->sabha3)
                                                    <div style="margin-bottom: 8px; background: #f8fafc; border-radius: 8px; padding: 8px 12px; display: flex; align-items: center; gap: 8px; border: 1px solid #e9edf2;">
                                                        <i class="mdi mdi-file" style="color: #c62828;"></i>
                                                        <span style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #1a1a2e; word-break: break-all; flex: 1;">
                                                            {{ basename($item->sabha3) }}
                                                        </span>
                                                        <a href="{{ asset($item->sabha3) }}" target="_blank" class="btn-biru" style="padding: 2px 8px; font-size: 11px; border-radius: 6px; text-decoration: none;">
                                                            <i class="mdi mdi-eye"></i>
                                                        </a>
                                                    </div>
                                                @endif
                                                <input type="file" class="form-control" name="sabha3" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 14px; padding: 8px 12px;">
                                                <small style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #888;">
                                                    <i class="mdi mdi-information-outline"></i> Kosongkan jika tidak ingin mengganti file
                                                </small>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">
                                                    <i class="mdi mdi-file" style="color: #0d47a1;"></i> File 2
                                                </label>
                                                @if($item->sabha4)
                                                    <div style="margin-bottom: 8px; background: #f8fafc; border-radius: 8px; padding: 8px 12px; display: flex; align-items: center; gap: 8px; border: 1px solid #e9edf2;">
                                                        <i class="mdi mdi-file" style="color: #0d47a1;"></i>
                                                        <span style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #1a1a2e; word-break: break-all; flex: 1;">
                                                            {{ basename($item->sabha4) }}
                                                        </span>
                                                        <a href="{{ asset($item->sabha4) }}" target="_blank" class="btn-biru" style="padding: 2px 8px; font-size: 11px; border-radius: 6px; text-decoration: none;">
                                                            <i class="mdi mdi-eye"></i>
                                                        </a>
                                                    </div>
                                                @endif
                                                <input type="file" class="form-control" name="sabha4" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 14px; padding: 8px 12px;">
                                                <small style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #888;">
                                                    <i class="mdi mdi-information-outline"></i> Kosongkan jika tidak ingin mengganti file
                                                </small>
                                            </div>
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

                @empty
                    <div style="text-align: center; padding: 60px 20px; background: #f8fafc; border-radius: 16px; border: 2px dashed #e0e4ea;">
                        <div style="font-size: 56px; color: #b0b8c4; margin-bottom: 16px;">
                            <i class="mdi mdi-file-document-outline"></i>
                        </div>
                        <h5 style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #5a6a7a; margin: 0; font-size: 18px;">
                            @if(request('search')) Data Tidak Ditemukan! @else Belum Ada Artikel @endif
                        </h5>
                        <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #b0b8c4; margin-top: 6px;">
                            @if(request('search'))
                                Tidak ada hasil untuk pencarian "<strong>{{ request('search') }}</strong>"
                            @else
                                Klik tombol <strong>"Tambah Artikel"</strong> untuk menambahkan artikel.
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
     MODAL TAMBAH (JUDUL + KETERANGAN + 2 FILE)
     ============================================================ --}}
<div class="modal fade" id="tambahModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius: 20px; border: none; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
            <div class="modal-header" style="border-bottom: 2px solid #c62828; padding: 20px 24px;">
                <h5 class="modal-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; font-size: 20px;">
                    <i class="mdi mdi-plus" style="color: #c62828; margin-right: 10px;"></i>
                    Tambah Artikel
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('artikel.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body" style="padding: 20px 24px;">

                    {{-- JUDUL (sabha1) --}}
                    <div class="mb-3">
                        <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">
                            <i class="mdi mdi-format-title" style="color: #c62828;"></i> Judul Artikel <span style="color: #c62828;">*</span>
                        </label>
                        <input type="text" class="form-control" name="sabha1" placeholder="Masukkan judul artikel" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 14px; padding: 10px 14px;" required>
                    </div>

                    {{-- KETERANGAN PARAGRAF (sabha2) --}}
                    <div class="mb-3">
                        <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">
                            <i class="mdi mdi-information" style="color: #0d47a1;"></i> Keterangan Paragraf
                        </label>
                        <textarea class="form-control" name="sabha2" rows="4" placeholder="Masukkan keterangan paragraf..." style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 14px; padding: 10px 14px;"></textarea>
                    </div>

                    {{-- 2 FILE --}}
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">
                                <i class="mdi mdi-file" style="color: #c62828;"></i> File 1
                            </label>
                            <input type="file" class="form-control" name="sabha3" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 14px; padding: 8px 12px;">
                            <small style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #888;">
                                <i class="mdi mdi-information-outline"></i> Semua jenis file (PDF, gambar, dokumen, dll) max 50MB
                            </small>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">
                                <i class="mdi mdi-file" style="color: #0d47a1;"></i> File 2
                            </label>
                            <input type="file" class="form-control" name="sabha4" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 14px; padding: 8px 12px;">
                            <small style="font-family: 'Poppins', sans-serif; font-size: 12px; color: #888;">
                                <i class="mdi mdi-information-outline"></i> Semua jenis file (PDF, gambar, dokumen, dll) max 50MB
                            </small>
                        </div>
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
     STYLE & SCRIPTS (dengan custom button & pagination)
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
       PAGINATION (tetap)
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

    /* Styling alert */
    .alert {
        border: none;
        border-radius: 12px;
        padding: 14px 20px;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
    }
    .alert-success {
        background: #e8f5e9;
        color: #2e7d32;
        border-left: 4px solid #4caf50;
    }
    .alert-warning {
        background: #fff3e0;
        color: #e65100;
        border-left: 4px solid #ff9800;
    }
    .alert-danger {
        background: #fce4ec;
        color: #c62828;
        border-left: 4px solid #ef5350;
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {

    // ============================================================
    // AUTO CLOSE ALERT
    // ============================================================
    setTimeout(function() {
        document.querySelectorAll('.alert').forEach(function(alert) {
            var closeBtn = alert.querySelector('.btn-close');
            if (closeBtn) {
                closeBtn.click();
            }
        });
    }, 5000);

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
    var headers = ['No', 'Judul', 'Keterangan Paragraf', 'File 1', 'File 2', 'Tanggal Dibuat'];
    csv.push(headers.join(','));

    dataCards.forEach(function(card, index) {
        var row = [];
        var no = index + 1;
        row.push(no);

        var judul = card.querySelector('h5');
        row.push(judul ? judul.textContent.trim() : '-');

        var ket = card.querySelector('.border-left-4 p');
        row.push(ket ? ket.textContent.trim() : '-');

        var file1 = card.querySelector('.col-md-6:first-child .d-flex.align-items-center span');
        row.push(file1 ? file1.textContent.trim() : '-');

        var file2 = card.querySelector('.col-md-6:last-child .d-flex.align-items-center span');
        row.push(file2 ? file2.textContent.trim() : '-');

        var date = card.querySelector('.d-flex.align-items-center.gap-2.flex-wrap .d-flex:last-child span');
        row.push(date ? date.textContent.trim() : '-');

        csv.push(row.join(','));
    });

    var blob = new Blob(['\uFEFF' + csv.join('\n')], { type: 'text/csv;charset=utf-8;' });
    var link = document.createElement('a');
    var url = URL.createObjectURL(blob);
    link.setAttribute('href', url);
    link.setAttribute('download', 'artikel_' + new Date().toISOString().slice(0,10) + '.csv');
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
    URL.revokeObjectURL(url);
}
</script>
@endpush

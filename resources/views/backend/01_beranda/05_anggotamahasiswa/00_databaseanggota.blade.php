{{-- ============================================================
     DATA KEANGGOTAAN (CARD ELEGAN - RESPONSIF)
     ============================================================ --}}

<div class="col-12">
    <div class="card" style="border-radius: 16px; border: none; box-shadow: 0 2px 12px rgba(0,0,0,0.05);">
        <div class="card-body" style="padding: clamp(16px, 2vw, 24px);">

            <!-- Judul & Tombol Tambah -->
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                <div>
                    <h4 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 600; margin-bottom: 2px; font-size: clamp(18px, 3vw, 24px);">
                        👥 Keanggotaan Sabhagiriwana'17
                    </h4>
                    <p class="card-description" style="font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.5vw, 14px); color: #7a8a9e; margin: 0;">
                        Kelola data keanggotaan Sabhagiriwana'17
                    </p>
                </div>
                <button class="btn btn-primary" style="background: #c62828; border: none; border-radius: 10px; padding: clamp(6px, 0.8vw, 8px) clamp(14px, 2vw, 18px); font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.5vw, 14px); white-space: nowrap;" data-bs-toggle="modal" data-bs-target="#tambahModal">
                    <i class="mdi mdi-plus"></i> Tambah Anggota
                </button>
            </div>

            {{-- ============================================================
                 SEARCH, PER PAGE, DOWNLOAD
                 ============================================================ --}}
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-3">
                {{-- Search Form --}}
                <div style="flex: 1; min-width: 200px;">
                    <form method="GET" action="{{ route('05keanggotaan.index') }}" class="d-flex gap-2" id="searchForm">
                        <div class="input-group" style="border-radius: 10px; overflow: hidden; border: 1px solid #e0e4ea;">
                            <span class="input-group-text bg-white border-0" style="padding: 0 12px;">
                                <i class="mdi mdi-magnify" style="color: #7a8a9e;"></i>
                            </span>
                            <input type="text" class="form-control border-0" name="search" placeholder="Cari nama, NPA, NPM, status..." value="{{ request('search') }}" style="font-family: 'Poppins', sans-serif; font-size: 14px; padding: 8px 0;" id="searchInput">
                            <input type="hidden" name="per_page" value="{{ request('per_page', 10) }}">
                        </div>
                        <button type="submit" class="btn btn-primary" style="background: #c62828; border: none; border-radius: 10px; padding: 8px 18px; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 13px; white-space: nowrap;">
                            <i class="mdi mdi-magnify"></i> Cari
                        </button>
                        @if(request('search'))
                            <a href="{{ route('05keanggotaan.index') }}" class="btn btn-outline-secondary" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: 13px; white-space: nowrap;">
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
                        <form method="GET" action="{{ route('05keanggotaan.index') }}" id="perPageForm" class="d-inline">
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

                    {{-- Download Button --}}
                    <button onclick="exportToCSV()" class="btn btn-success" style="background: #28a745; border: none; border-radius: 10px; padding: 8px 16px; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 13px; white-space: nowrap; display: inline-flex; align-items: center; gap: 6px;">
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

                                <!-- Kiri: Foto + Status + Nama -->
                                <div style="flex: 1; min-width: 0;">
                                    <div class="d-flex align-items-center gap-3">
                                        <!-- Foto Profil (sabha12) -->
                                        <div style="width: clamp(56px, 6vw, 64px); height: clamp(56px, 6vw, 64px); border-radius: 50%; overflow: hidden; border: 3px solid #c62828; flex-shrink: 0; background: #f0f2f5;">
                                            @if($item->sabha12 && file_exists(public_path($item->sabha12)))
                                                <img src="{{ asset($item->sabha12) }}" alt="Foto" style="width: 100%; height: 100%; object-fit: cover;">
                                            @else
                                                <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; background: #f0f2f5; color: #b0b8c4; font-size: clamp(24px, 2.5vw, 28px);">
                                                    <i class="mdi mdi-account"></i>
                                                </div>
                                            @endif
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                                <!-- Status -->
                                                <span style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: clamp(10px, 1.1vw, 12px); padding: 3px 12px; border-radius: 30px; white-space: nowrap;
                                                    @if($item->sabha1 == 'Muda')
                                                        background: rgba(40,167,69,0.12); color: #28a745;
                                                    @elseif($item->sabha1 == 'Biasa')
                                                        background: rgba(220,53,69,0.12); color: #dc3545;
                                                    @elseif($item->sabha1 == 'Luar Biasa')
                                                        background: rgba(23,162,184,0.12); color: #17a2b8;
                                                    @elseif($item->sabha1 == 'Kehormatan')
                                                        background: rgba(255,193,7,0.12); color: #856404;
                                                    @else
                                                        background: rgba(108,117,125,0.12); color: #6c757d;
                                                    @endif
                                                ">
                                                    {{ $item->sabha1 ?? 'Status' }}
                                                </span>
                                                <!-- Nama Lengkap -->
                                                <h5 style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; margin: 0; font-size: clamp(14px, 1.8vw, 16px); word-break: break-word;">
                                                    {{ $item->sabha2 ?? 'Nama' }}
                                                </h5>
                                            </div>
                                            <!-- NPA + NPM -->
                                            <div style="margin-top: 4px; display: flex; flex-wrap: wrap; gap: 12px;">
                                                <span style="font-family: 'Poppins', sans-serif; font-size: clamp(10px, 1.1vw, 12px); color: #7a8a9e;">
                                                    <i class="mdi mdi-card-account-details"></i> NPA: <strong style="color: #1a1a2e;">{{ $item->sabha5 ?? '-' }}</strong>
                                                </span>
                                                <span style="font-family: 'Poppins', sans-serif; font-size: clamp(10px, 1.1vw, 12px); color: #7a8a9e;">
                                                    <i class="mdi mdi-school"></i> NPM: <strong style="color: #1a1a2e;">{{ $item->sabha7 ?? '-' }}</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Kanan: Tombol Aksi -->
                                <div class="d-flex gap-1 flex-shrink-0">
                                    <button class="btn btn-sm btn-outline-primary btn-edit" data-id="{{ $item->id }}" style="border-radius: 8px; border-color: #0d47a1; color: #0d47a1; font-family: 'Poppins', sans-serif; font-size: clamp(10px, 1.1vw, 13px); padding: clamp(4px, 0.6vw, 6px) clamp(6px, 0.8vw, 12px);">
                                        <i class="mdi mdi-pencil"></i> <span class="d-none d-sm-inline">Edit</span>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger btn-hapus" data-id="{{ $item->id }}" style="border-radius: 8px; border-color: #c62828; color: #c62828; font-family: 'Poppins', sans-serif; font-size: clamp(10px, 1.1vw, 13px); padding: clamp(4px, 0.6vw, 6px) clamp(6px, 0.8vw, 12px);" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">
                                        <i class="mdi mdi-delete"></i> <span class="d-none d-sm-inline">Hapus</span>
                                    </button>
                                </div>
                            </div>

                            <!-- ===== DIVIDER ===== -->
                            <hr style="margin: clamp(10px, 1.5vw, 12px) 0; border-color: #f0f2f5;">

                            <!-- ===== BODY: INFORMASI LENGKAP ===== -->
                            <div class="row g-2">

                                <!-- Kolom Kiri -->
                                <div class="col-12 col-md-6">
                                    <div style="display: flex; flex-direction: column; gap: 6px;">
                                        <!-- Nama Lapangan (sabha3) -->
                                        <div style="display: flex; align-items: center; gap: 8px; background: #f8fafc; padding: 6px 12px; border-radius: 8px;">
                                            <i class="mdi mdi-account" style="color: #0d47a1; font-size: clamp(14px, 1.5vw, 16px); width: 20px;"></i>
                                            <span style="font-family: 'Poppins', sans-serif; font-size: clamp(11px, 1.2vw, 13px); color: #5a6a7a;">
                                                <strong style="color: #1a1a2e;">Nama Lapangan:</strong> {{ $item->sabha3 ?? '-' }}
                                            </span>
                                        </div>
                                        <!-- Tempat/Tanggal Lahir (sabha4) -->
                                        <div style="display: flex; align-items: center; gap: 8px; background: #f8fafc; padding: 6px 12px; border-radius: 8px;">
                                            <i class="mdi mdi-cake" style="color: #0d47a1; font-size: clamp(14px, 1.5vw, 16px); width: 20px;"></i>
                                            <span style="font-family: 'Poppins', sans-serif; font-size: clamp(11px, 1.2vw, 13px); color: #5a6a7a;">
                                                <strong style="color: #1a1a2e;">Tempat/Tgl Lahir:</strong> {{ $item->sabha4 ?? '-' }}
                                            </span>
                                        </div>
                                        <!-- Angkatan Pendidikan (sabha6) -->
                                        <div style="display: flex; align-items: center; gap: 8px; background: #f8fafc; padding: 6px 12px; border-radius: 8px;">
                                            <i class="mdi mdi-calendar" style="color: #0d47a1; font-size: clamp(14px, 1.5vw, 16px); width: 20px;"></i>
                                            <span style="font-family: 'Poppins', sans-serif; font-size: clamp(11px, 1.2vw, 13px); color: #5a6a7a;">
                                                <strong style="color: #1a1a2e;">Angkatan Pendidikan (Rimba Kabut) :</strong> {{ $item->sabha6 ?? '-' }}
                                            </span>
                                        </div>
                                        <!-- Fakultas (sabha8) -->
                                        <div style="display: flex; align-items: center; gap: 8px; background: #f8fafc; padding: 6px 12px; border-radius: 8px;">
                                            <i class="mdi mdi-school" style="color: #0d47a1; font-size: clamp(14px, 1.5vw, 16px); width: 20px;"></i>
                                            <span style="font-family: 'Poppins', sans-serif; font-size: clamp(11px, 1.2vw, 13px); color: #5a6a7a;">
                                                <strong style="color: #1a1a2e;">Fakultas:</strong> {{ $item->sabha8 ?? '-' }}
                                            </span>
                                        </div>
                                        <!-- Tanggal Pendidikan (sabha13) - BARU -->
                                        <div style="display: flex; align-items: center; gap: 8px; background: #f8fafc; padding: 6px 12px; border-radius: 8px;">
                                            <i class="mdi mdi-calendar-edit" style="color: #0d47a1; font-size: clamp(14px, 1.5vw, 16px); width: 20px;"></i>
                                            <span style="font-family: 'Poppins', sans-serif; font-size: clamp(11px, 1.2vw, 13px); color: #5a6a7a;">
                                                <strong style="color: #1a1a2e;">Tanggal Pendidikan:</strong> {{ $item->sabha13 ? \Carbon\Carbon::parse($item->sabha13)->format('d M Y') : '-' }}
                                            </span>
                                        </div>
                                        <!-- Tanggal Pelantikan (sabha14) - BARU -->
                                        <div style="display: flex; align-items: center; gap: 8px; background: #f8fafc; padding: 6px 12px; border-radius: 8px;">
                                            <i class="mdi mdi-calendar-star" style="color: #0d47a1; font-size: clamp(14px, 1.5vw, 16px); width: 20px;"></i>
                                            <span style="font-family: 'Poppins', sans-serif; font-size: clamp(11px, 1.2vw, 13px); color: #5a6a7a;">
                                                <strong style="color: #1a1a2e;">Tanggal Pelantikan:</strong> {{ $item->sabha14 ? \Carbon\Carbon::parse($item->sabha14)->format('d M Y') : '-' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Kolom Kanan -->
                                <div class="col-12 col-md-6">
                                    <div style="display: flex; flex-direction: column; gap: 6px;">
                                        <!-- Golongan Darah (sabha9) -->
                                        <div style="display: flex; align-items: center; gap: 8px; background: #f8fafc; padding: 6px 12px; border-radius: 8px;">
                                            <i class="mdi mdi-water" style="color: #0d47a1; font-size: clamp(14px, 1.5vw, 16px); width: 20px;"></i>
                                            <span style="font-family: 'Poppins', sans-serif; font-size: clamp(11px, 1.2vw, 13px); color: #5a6a7a;">
                                                <strong style="color: #1a1a2e;">Golongan Darah:</strong> {{ $item->sabha9 ?? '-' }}
                                            </span>
                                        </div>
                                        <!-- Alamat (sabha10) -->
                                        <div style="display: flex; align-items: flex-start; gap: 8px; background: #f8fafc; padding: 6px 12px; border-radius: 8px;">
                                            <i class="mdi mdi-map-marker" style="color: #0d47a1; font-size: clamp(14px, 1.5vw, 16px); width: 20px; margin-top: 2px;"></i>
                                            <span style="font-family: 'Poppins', sans-serif; font-size: clamp(11px, 1.2vw, 13px); color: #5a6a7a; word-break: break-word;">
                                                <strong style="color: #1a1a2e;">Alamat:</strong> {{ $item->sabha10 ?? '-' }}
                                            </span>
                                        </div>
                                        <!-- Telepon (sabha11) -->
                                        <div style="display: flex; align-items: center; gap: 8px; background: #f8fafc; padding: 6px 12px; border-radius: 8px;">
                                            <i class="mdi mdi-phone" style="color: #0d47a1; font-size: clamp(14px, 1.5vw, 16px); width: 20px;"></i>
                                            <span style="font-family: 'Poppins', sans-serif; font-size: clamp(11px, 1.2vw, 13px); color: #5a6a7a;">
                                                <strong style="color: #1a1a2e;">Telepon:</strong> {{ $item->sabha11 ?? '-' }}
                                            </span>
                                        </div>
                                        <!-- Tanggal Bergabung -->
                                        <div style="display: flex; align-items: center; gap: 8px; background: #f8fafc; padding: 6px 12px; border-radius: 8px;">
                                            <i class="mdi mdi-calendar-clock" style="color: #0d47a1; font-size: clamp(14px, 1.5vw, 16px); width: 20px;"></i>
                                            <span style="font-family: 'Poppins', sans-serif; font-size: clamp(10px, 1.1vw, 12px); color: #b0b8c4;">
                                                <i class="mdi mdi-account-plus"></i> Bergabung: {{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    {{-- ============================================================
                         MODAL HAPUS
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
                                        Apakah Anda yakin ingin menghapus anggota ini?
                                    </p>
                                    <p style="font-size: clamp(12px, 1.2vw, 13px); color: #7a8a9e; margin: 0; font-family: 'Poppins', sans-serif; word-break: break-word;">
                                        Nama: <strong>{{ $item->sabha2 ?? 'Data' }}</strong>
                                    </p>
                                </div>
                                <div class="modal-footer" style="border-top: 1px solid #f0f2f5; padding: clamp(10px, 1.5vw, 16px) clamp(14px, 2vw, 24px); flex-wrap: wrap; gap: 8px;">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius: 10px; font-family: 'Poppins', sans-serif; padding: clamp(6px, 0.8vw, 8px) clamp(14px, 2vw, 24px); font-size: clamp(13px, 1.3vw, 14px);">Batal</button>
                                    <form action="{{ route('05keanggotaan.destroy', $item->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" style="background: #c62828; border: none; border-radius: 10px; font-family: 'Poppins', sans-serif; padding: clamp(6px, 0.8vw, 8px) clamp(14px, 2vw, 24px); font-size: clamp(13px, 1.3vw, 14px);">
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
                                Belum Ada Data Anggota
                            @endif
                        </h5>
                        <p style="font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.5vw, 14px); color: #b0b8c4; margin-top: 6px;">
                            @if(request('search'))
                                Tidak ada hasil untuk pencarian "<strong>{{ request('search') }}</strong>"
                            @else
                                Klik tombol <strong>"Tambah Anggota"</strong> untuk menambahkan data keanggotaan.
                            @endif
                        </p>
                    </div>
                @endforelse
            </div>

            {{-- ============================================================
                 PAGINATION
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
     MODAL TAMBAH DATA
     ============================================================ --}}
<div class="modal fade" id="tambahModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
            <div class="modal-header" style="border-bottom: 2px solid #c62828; padding: clamp(14px, 2vw, 20px) clamp(14px, 2vw, 24px);">
                <h5 class="modal-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; font-size: clamp(16px, 2vw, 20px);">
                    <i class="mdi mdi-plus" style="color: #c62828; margin-right: 10px;"></i>
                    Tambah Anggota
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('keanggotaan.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body" style="padding: clamp(14px, 2vw, 24px);">
                    <div class="row g-3">
                        <!-- Status (sabha1) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-check-circle" style="color: #c62828;"></i> Status
                            </label>
                            <select class="form-control" name="sabha1" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);" required>
                                <option value="">Pilih Status</option>
                                <option value="Muda">Muda</option>
                                <option value="Biasa">Biasa</option>
                                <option value="Luar Biasa">Luar Biasa</option>
                                <option value="Kehormatan">Kehormatan</option>
                            </select>
                        </div>

                        <!-- Nama Lengkap (sabha2) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-account" style="color: #c62828;"></i> Nama Lengkap
                            </label>
                            <input type="text" class="form-control" name="sabha2" placeholder="Masukkan nama lengkap" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);" required>
                        </div>

                        <!-- Nama Lapangan (sabha3) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-account" style="color: #0d47a1;"></i> Nama Lapangan
                            </label>
                            <input type="text" class="form-control" name="sabha3" placeholder="Masukkan nama lapangan" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>

                        <!-- Tempat/Tanggal Lahir (sabha4) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-cake" style="color: #0d47a1;"></i> Tempat / Tanggal Lahir
                            </label>
                            <input type="date" class="form-control" name="sabha4" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>

                        <!-- NPA (sabha5) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-card-account-details" style="color: #0d47a1;"></i> NPA
                            </label>
                            <input type="text" class="form-control" name="sabha5" placeholder="Masukkan NPA" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>

                        <!-- Angkatan Pendidikan (sabha6) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-calendar" style="color: #0d47a1;"></i> Angkatan (Contoh : Kabut Rimba)
                            </label>
                            <input type="text" class="form-control" name="sabha6" placeholder="Contoh: Kalajengking" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>

                        <!-- NPM (sabha7) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-school" style="color: #0d47a1;"></i> NPM
                            </label>
                            <input type="text" class="form-control" name="sabha7" placeholder="Masukkan NPM" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>

                        <!-- Fakultas (sabha8) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-school" style="color: #0d47a1;"></i> Fakultas
                            </label>
                            <input type="text" class="form-control" name="sabha8" placeholder="Masukkan fakultas" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>

                        <!-- Golongan Darah (sabha9) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-water" style="color: #0d47a1;"></i> Golongan Darah
                            </label>
                            <select class="form-control" name="sabha9" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                                <option value="">Pilih Golongan Darah</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                            </select>
                        </div>

                        <!-- Alamat (sabha10) -->
                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-map-marker" style="color: #0d47a1;"></i> Alamat
                            </label>
                            <textarea class="form-control" name="sabha10" rows="3" placeholder="Masukkan alamat lengkap" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);"></textarea>
                        </div>

                        <!-- Telepon (sabha11) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-phone" style="color: #0d47a1;"></i> Telepon
                            </label>
                            <input type="text" class="form-control" name="sabha11" placeholder="Masukkan nomor telepon" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>

                        <!-- Foto Anggota (sabha12) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-camera" style="color: #c62828;"></i> Foto Anggota
                            </label>
                            <input type="file" class="form-control" name="sabha12" accept=".jpg,.jpeg,.png,.gif,.webp" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.2vw, 13px); padding: 6px 12px;">
                            <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: clamp(10px, 1vw, 11px);">Format: JPG, PNG, GIF, WEBP. Maks 20MB</small>
                        </div>

                        <!-- Tanggal Pendidikan (sabha13) - BARU -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-calendar-edit" style="color: #0d47a1;"></i> Tanggal Pendidikan
                            </label>
                            <input type="date" class="form-control" name="sabha13" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>

                        <!-- Tanggal Pelantikan (sabha14) - BARU -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-calendar-star" style="color: #0d47a1;"></i> Tanggal Pelantikan
                            </label>
                            <input type="date" class="form-control" name="sabha14" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border-top: 1px solid #f0f2f5; padding: clamp(10px, 1.5vw, 16px) clamp(14px, 2vw, 24px); flex-wrap: wrap; gap: 8px;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius: 10px; font-family: 'Poppins', sans-serif; padding: clamp(6px, 0.8vw, 8px) clamp(14px, 2vw, 24px); font-size: clamp(13px, 1.3vw, 14px);">Batal</button>
                    <button type="submit" class="btn btn-primary" style="background: #c62828; border: none; border-radius: 10px; font-family: 'Poppins', sans-serif; padding: clamp(6px, 0.8vw, 8px) clamp(14px, 2vw, 24px); font-size: clamp(13px, 1.3vw, 14px);">
                        <i class="mdi mdi-content-save" style="margin-right: 6px;"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- ============================================================
     MODAL EDIT DATA
     ============================================================ --}}
@foreach ($data as $item)
<div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
            <div class="modal-header" style="border-bottom: 2px solid #0d47a1; padding: clamp(14px, 2vw, 20px) clamp(14px, 2vw, 24px);">
                <h5 class="modal-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; font-size: clamp(16px, 2vw, 20px);">
                    <i class="mdi mdi-pencil" style="color: #0d47a1; margin-right: 10px;"></i>
                    Edit Anggota
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('keanggotaan.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body" style="padding: clamp(14px, 2vw, 24px);">
                    <div class="row g-3">
                        <!-- Status (sabha1) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-check-circle" style="color: #c62828;"></i> Status
                            </label>
                            <select class="form-control" name="sabha1" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);" required>
                                <option value="">Pilih Status</option>
                                <option value="Muda" {{ $item->sabha1 == 'Muda' ? 'selected' : '' }}>Muda</option>
                                <option value="Biasa" {{ $item->sabha1 == 'Biasa' ? 'selected' : '' }}>Biasa</option>
                                <option value="Luar Biasa" {{ $item->sabha1 == 'Luar Biasa' ? 'selected' : '' }}>Luar Biasa</option>
                                <option value="Kehormatan" {{ $item->sabha1 == 'Kehormatan' ? 'selected' : '' }}>Kehormatan</option>
                            </select>
                        </div>

                        <!-- Nama Lengkap (sabha2) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-account" style="color: #c62828;"></i> Nama Lengkap
                            </label>
                            <input type="text" class="form-control" name="sabha2" value="{{ $item->sabha2 }}" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);" required>
                        </div>

                        <!-- Nama Lapangan (sabha3) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-account" style="color: #0d47a1;"></i> Nama Lapangan
                            </label>
                            <input type="text" class="form-control" name="sabha3" value="{{ $item->sabha3 }}" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>

                        <!-- Tempat/Tanggal Lahir (sabha4) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-cake" style="color: #0d47a1;"></i> Tempat / Tanggal Lahir
                            </label>
                            <input type="date" class="form-control" name="sabha4" value="{{ $item->sabha4 }}" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>

                        <!-- NPA (sabha5) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-card-account-details" style="color: #0d47a1;"></i> NPA
                            </label>
                            <input type="text" class="form-control" name="sabha5" value="{{ $item->sabha5 }}" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>

                        <!-- Angkatan Pendidikan (sabha6) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-calendar" style="color: #0d47a1;"></i> Angkatan (Contoh : Kabut Rimba)
                            </label>
                            <input type="text" class="form-control" name="sabha6" value="{{ $item->sabha6 }}" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>

                        <!-- NPM (sabha7) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-school" style="color: #0d47a1;"></i> NPM
                            </label>
                            <input type="text" class="form-control" name="sabha7" value="{{ $item->sabha7 }}" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>

                        <!-- Fakultas (sabha8) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-school" style="color: #0d47a1;"></i> Fakultas
                            </label>
                            <input type="text" class="form-control" name="sabha8" value="{{ $item->sabha8 }}" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>

                        <!-- Golongan Darah (sabha9) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-water" style="color: #0d47a1;"></i> Golongan Darah
                            </label>
                            <select class="form-control" name="sabha9" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                                <option value="">Pilih Golongan Darah</option>
                                <option value="A" {{ $item->sabha9 == 'A' ? 'selected' : '' }}>A</option>
                                <option value="B" {{ $item->sabha9 == 'B' ? 'selected' : '' }}>B</option>
                                <option value="AB" {{ $item->sabha9 == 'AB' ? 'selected' : '' }}>AB</option>
                                <option value="O" {{ $item->sabha9 == 'O' ? 'selected' : '' }}>O</option>
                            </select>
                        </div>

                        <!-- Alamat (sabha10) -->
                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-map-marker" style="color: #0d47a1;"></i> Alamat
                            </label>
                            <textarea class="form-control" name="sabha10" rows="3" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">{{ $item->sabha10 }}</textarea>
                        </div>

                        <!-- Telepon (sabha11) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-phone" style="color: #0d47a1;"></i> Telepon
                            </label>
                            <input type="text" class="form-control" name="sabha11" value="{{ $item->sabha11 }}" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>

                        <!-- Foto Anggota (sabha12) -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-camera" style="color: #c62828;"></i> Foto Anggota
                            </label>
                            @if($item->sabha12 && file_exists(public_path($item->sabha12)))
                                <div style="margin-bottom: 8px; display: flex; flex-wrap: wrap; align-items: center; gap: 10px; background: #f8fafc; padding: clamp(8px, 1vw, 12px); border-radius: 8px;">
                                    <img src="{{ asset($item->sabha12) }}" alt="Foto" style="width: clamp(50px, 6vw, 60px); height: clamp(50px, 6vw, 60px); object-fit: cover; border-radius: 8px; border: 2px solid #e8ecf1;">
                                    <div style="flex: 1; min-width: 0;">
                                        <a href="{{ asset($item->sabha12) }}" target="_blank" style="color: #c62828; font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.2vw, 13px); text-decoration: none; font-weight: 500; word-break: break-word;">
                                            <i class="mdi mdi-open-in-new"></i> Lihat Foto Saat Ini
                                        </a>
                                        <p style="font-size: clamp(10px, 1vw, 11px); color: #7a8a9e; margin: 0; font-family: 'Poppins', sans-serif;">Kosongkan untuk tetap menggunakan foto lama</p>
                                    </div>
                                </div>
                            @else
                                <p style="font-size: clamp(11px, 1.1vw, 12px); color: #b0b8c4; font-family: 'Poppins', sans-serif; margin-bottom: 8px;">Belum ada foto</p>
                            @endif
                            <input type="file" class="form-control" name="sabha12" accept=".jpg,.jpeg,.png,.gif,.webp" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.2vw, 13px); padding: 6px 12px;">
                            <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: clamp(10px, 1vw, 11px);">Format: JPG, PNG, GIF, WEBP. Maks 20 MB</small>
                        </div>

                        <!-- Tanggal Pendidikan (sabha13) - BARU -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-calendar-edit" style="color: #0d47a1;"></i> Tanggal Pendidikan
                            </label>
                            <input type="date" class="form-control" name="sabha13" value="{{ $item->sabha13 }}" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>

                        <!-- Tanggal Pelantikan (sabha14) - BARU -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-calendar-star" style="color: #0d47a1;"></i> Tanggal Pelantikan
                            </label>
                            <input type="date" class="form-control" name="sabha14" value="{{ $item->sabha14 }}" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border-top: 1px solid #f0f2f5; padding: clamp(10px, 1.5vw, 16px) clamp(14px, 2vw, 24px); flex-wrap: wrap; gap: 8px;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius: 10px; font-family: 'Poppins', sans-serif; padding: clamp(6px, 0.8vw, 8px) clamp(14px, 2vw, 24px); font-size: clamp(13px, 1.3vw, 14px);">Batal</button>
                    <button type="submit" class="btn btn-primary" style="background: #0d47a1; border: none; border-radius: 10px; font-family: 'Poppins', sans-serif; padding: clamp(6px, 0.8vw, 8px) clamp(14px, 2vw, 24px); font-size: clamp(13px, 1.3vw, 14px);">
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Edit Modal
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

    // Close modal klik di luar
    document.querySelectorAll('.modal').forEach(function(modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === this) {
                var bsModal = bootstrap.Modal.getInstance(this);
                if (bsModal) bsModal.hide();
            }
        });
    });
});

// Download CSV (sudah include sabha13 & sabha14)
function exportToCSV() {
    var dataCards = document.querySelectorAll('#dataContainer .card');
    if (dataCards.length === 0) {
        alert('Tidak ada data untuk di-download!');
        return;
    }

    var csv = [];
    var headers = ['No', 'Status', 'Nama Lengkap', 'Nama Lapangan', 'Tempat/Tgl Lahir', 'NPA', 'Angkatan Pendidikan', 'NPM', 'Fakultas', 'Golongan Darah', 'Alamat', 'Telepon', 'Tanggal Pendidikan', 'Tanggal Pelantikan', 'Tanggal Bergabung'];
    csv.push(headers.join(','));

    dataCards.forEach(function(card, index) {
        var row = [];
        // No
        row.push(index + 1);

        // Status
        var statusEl = card.querySelector('.d-flex.align-items-center.gap-2.flex-wrap span:first-child');
        row.push(statusEl ? statusEl.textContent.trim() : '-');

        // Nama Lengkap
        var namaEl = card.querySelector('h5');
        row.push(namaEl ? namaEl.textContent.trim() : '-');

        // Nama Lapangan (sabha3)
        var lapanganEl = card.querySelector('.col-md-6:first-child .d-flex.flex-column.gap-6 > div:first-child span');
        row.push(lapanganEl ? lapanganEl.textContent.trim().replace('Nama Lapangan:', '').trim() : '-');

        // Tempat/Tgl Lahir (sabha4)
        var lahirEl = card.querySelector('.col-md-6:first-child .d-flex.flex-column.gap-6 > div:nth-child(2) span');
        row.push(lahirEl ? lahirEl.textContent.trim().replace('Tempat/Tgl Lahir:', '').trim() : '-');

        // NPA (sabha5)
        var npaEl = card.querySelector('.d-flex.align-items-center.gap-3 .d-flex.flex-wrap.gap-12 span:first-child strong');
        row.push(npaEl ? npaEl.textContent.trim() : '-');

        // Angkatan Pendidikan (sabha6)
        var angkatanEl = card.querySelector('.col-md-6:first-child .d-flex.flex-column.gap-6 > div:nth-child(3) span');
        row.push(angkatanEl ? angkatanEl.textContent.trim().replace('Angkatan Pendidikan:', '').trim() : '-');

        // NPM (sabha7)
        var npmEl = card.querySelector('.d-flex.align-items-center.gap-3 .d-flex.flex-wrap.gap-12 span:last-child strong');
        row.push(npmEl ? npmEl.textContent.trim() : '-');

        // Fakultas (sabha8)
        var fakultasEl = card.querySelector('.col-md-6:first-child .d-flex.flex-column.gap-6 > div:nth-child(4) span');
        row.push(fakultasEl ? fakultasEl.textContent.trim().replace('Fakultas:', '').trim() : '-');

        // Golongan Darah (sabha9)
        var goldarEl = card.querySelector('.col-md-6:last-child .d-flex.flex-column.gap-6 > div:first-child span');
        row.push(goldarEl ? goldarEl.textContent.trim().replace('Golongan Darah:', '').trim() : '-');

        // Alamat (sabha10)
        var alamatEl = card.querySelector('.col-md-6:last-child .d-flex.flex-column.gap-6 > div:nth-child(2) span');
        row.push(alamatEl ? alamatEl.textContent.trim().replace('Alamat:', '').trim() : '-');

        // Telepon (sabha11)
        var teleponEl = card.querySelector('.col-md-6:last-child .d-flex.flex-column.gap-6 > div:nth-child(3) span');
        row.push(teleponEl ? teleponEl.textContent.trim().replace('Telepon:', '').trim() : '-');

        // Tanggal Pendidikan (sabha13)
        var tglPendidikanEl = card.querySelector('.col-md-6:first-child .d-flex.flex-column.gap-6 > div:nth-child(5) span');
        row.push(tglPendidikanEl ? tglPendidikanEl.textContent.trim().replace('Tanggal Pendidikan:', '').trim() : '-');

        // Tanggal Pelantikan (sabha14)
        var tglPelantikanEl = card.querySelector('.col-md-6:first-child .d-flex.flex-column.gap-6 > div:nth-child(6) span');
        row.push(tglPelantikanEl ? tglPelantikanEl.textContent.trim().replace('Tanggal Pelantikan:', '').trim() : '-');

        // Tanggal Bergabung
        var dateEl = card.querySelector('.col-md-6:last-child .d-flex.flex-column.gap-6 > div:last-child span');
        row.push(dateEl ? dateEl.textContent.trim().replace('Bergabung:', '').trim() : '-');

        csv.push(row.join(','));
    });

    var blob = new Blob(['\uFEFF' + csv.join('\n')], { type: 'text/csv;charset=utf-8;' });
    var link = document.createElement('a');
    var url = URL.createObjectURL(blob);
    link.setAttribute('href', url);
    link.setAttribute('download', 'keanggotaan_' + new Date().toISOString().slice(0,10) + '.csv');
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
    URL.revokeObjectURL(url);
}
</script>
@endpush

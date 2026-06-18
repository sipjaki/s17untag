{{-- ============================================================
     DATA DIVISI (CARD ELEGAN - RESPONSIF)
     ============================================================ --}}

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
                <button class="btn btn-primary" style="background: #c62828; border: none; border-radius: 10px; padding: clamp(6px, 0.8vw, 8px) clamp(14px, 2vw, 18px); font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.5vw, 14px); white-space: nowrap;" data-bs-toggle="modal" data-bs-target="#tambahModal">
                    <i class="mdi mdi-plus"></i> Tambah Divisi
                </button>
            </div>

            <!-- ============================================================
                 TAMPILAN DATA CARD (RESPONSIF)
                 ============================================================ -->
            @forelse ($data as $index => $item)
                <div class="card mb-3" style="border-radius: 16px; border: 1px solid #f0f2f5; box-shadow: 0 2px 8px rgba(0,0,0,0.02); overflow: hidden; transition: all 0.3s ease; background: #ffffff;">
                    <div class="card-body" style="padding: clamp(16px, 2vw, 24px);">

                        <!-- ===== HEADER ===== -->
                        <div class="d-flex flex-wrap justify-content-between align-items-start gap-3">

                            <!-- Kiri: Nomor + Nama Divisi -->
                            <div style="flex: 1; min-width: 0;">
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <!-- Nomor Urut -->
                                    <span style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #c62828; font-size: clamp(12px, 1.3vw, 14px); background: rgba(198,40,40,0.08); padding: 3px 12px; border-radius: 30px; white-space: nowrap;">
                                        #{{ $loop->iteration }}
                                    </span>
                                    <!-- Nama Divisi (sabha1) -->
                                    <h5 style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; margin: 0; font-size: clamp(14px, 1.8vw, 16px); word-break: break-word;">
                                        {{ $item->sabha1 ?? 'Divisi' }}
                                    </h5>
                                </div>
                                <!-- Tanggal -->
                                <div style="margin-top: 4px;">
                                    <span style="font-family: 'Poppins', sans-serif; font-size: clamp(11px, 1.2vw, 12px); color: #b0b8c4;">
                                        <i class="mdi mdi-calendar"></i>
                                        {{ $item->created_at ? $item->created_at->format('d M Y') : 'Tanggal tidak tersedia' }}
                                    </span>
                                </div>
                            </div>

                            <!-- Kanan: Tombol Aksi -->
                            <div class="d-flex gap-1 flex-shrink-0">
                                <button class="btn btn-sm btn-outline-primary btn-edit" data-id="{{ $item->id }}" style="border-radius: 8px; border-color: #0d47a1; color: #0d47a1; font-family: 'Poppins', sans-serif; font-size: clamp(11px, 1.2vw, 13px); padding: clamp(4px, 0.6vw, 6px) clamp(8px, 1vw, 14px);">
                                    <i class="mdi mdi-pencil"></i> <span class="d-none d-sm-inline">Edit</span>
                                </button>
                                <button class="btn btn-sm btn-outline-danger btn-hapus" data-id="{{ $item->id }}" style="border-radius: 8px; border-color: #c62828; color: #c62828; font-family: 'Poppins', sans-serif; font-size: clamp(11px, 1.2vw, 13px); padding: clamp(4px, 0.6vw, 6px) clamp(8px, 1vw, 14px);" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">
                                    <i class="mdi mdi-delete"></i> <span class="d-none d-sm-inline">Hapus</span>
                                </button>
                            </div>
                        </div>

                        <!-- ===== DIVIDER ===== -->
                        <hr style="margin: clamp(10px, 1.5vw, 12px) 0; border-color: #f0f2f5;">

                        <!-- ===== BODY: KETERANGAN + FILE PDF ===== -->
                        <div class="row g-3">

                            <!-- Keterangan (sabha3) -->
                            <div class="col-12 col-md-6">
                                <div style="background: #f8fafc; border-radius: 12px; padding: clamp(10px, 1.5vw, 12px) clamp(12px, 1.5vw, 16px); border: 1px solid #e8ecf1; height: 100%;">
                                    <div style="display: flex; align-items: flex-start; gap: clamp(10px, 1.5vw, 12px);">
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

                            <!-- File PDF (sabha2) -->
                            <div class="col-12 col-md-6">
                                <div style="background: #f8fafc; border-radius: 12px; padding: clamp(10px, 1.5vw, 12px) clamp(12px, 1.5vw, 16px); border: 1px solid #e8ecf1; height: 100%;">
                                    <div style="display: flex; align-items: center; gap: clamp(10px, 1.5vw, 12px);">
                                        <div style="width: clamp(36px, 4vw, 44px); height: clamp(36px, 4vw, 44px); border-radius: 10px; background: rgba(198,40,40,0.08); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                            <i class="mdi mdi-file-pdf" style="font-size: clamp(20px, 2.5vw, 24px); color: #c62828;"></i>
                                        </div>
                                        <div style="flex: 1; min-width: 0;">
                                            <p style="font-family: 'Poppins', sans-serif; font-size: clamp(10px, 1.1vw, 12px); color: #b0b8c4; margin: 0; font-weight: 500;">
                                                FILE PDF
                                            </p>
                                            @if($item->sabha2 && file_exists(public_path($item->sabha2)))
                                                <a href="{{ asset($item->sabha2) }}" target="_blank" style="font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.3vw, 14px); color: #c62828; text-decoration: none; font-weight: 600; display: flex; align-items: center; gap: 4px; word-break: break-word;">
                                                    <i class="mdi mdi-open-in-new"></i> Lihat PDF
                                                </a>
                                            @else
                                                <span style="font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.2vw, 13px); color: #b0b8c4;">
                                                    <i class="mdi mdi-close-circle"></i> Belum ada file
                                                </span>
                                            @endif
                                        </div>
                                    </div>
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
                                    Apakah Anda yakin ingin menghapus divisi ini?
                                </p>
                                <p style="font-size: clamp(12px, 1.2vw, 13px); color: #7a8a9e; margin: 0; font-family: 'Poppins', sans-serif; word-break: break-word;">
                                    Divisi: <strong>{{ $item->sabha1 ?? 'Data' }}</strong>
                                </p>
                            </div>
                            <div class="modal-footer" style="border-top: 1px solid #f0f2f5; padding: clamp(10px, 1.5vw, 16px) clamp(14px, 2vw, 24px); flex-wrap: wrap; gap: 8px;">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius: 10px; font-family: 'Poppins', sans-serif; padding: clamp(6px, 0.8vw, 8px) clamp(14px, 2vw, 24px); font-size: clamp(13px, 1.3vw, 14px);">Batal</button>
                                <form action="{{ route('03peraturan.destroy', $item->id) }}" method="POST" style="display: inline;">
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
                        Belum Ada Data Divisi
                    </h5>
                    <p style="font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.5vw, 14px); color: #b0b8c4; margin-top: 6px;">
                        Klik tombol <strong>"Tambah Divisi"</strong> untuk menambahkan data divisi.
                    </p>
                </div>
            @endforelse

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
                    Tambah Divisi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('divisi.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body" style="padding: clamp(14px, 2vw, 24px);">
                    <div class="row g-3">
                        <!-- Nama Divisi (sabha1) -->
                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-account-group" style="color: #c62828;"></i> Nama Divisi
                            </label>
                            <input type="text" class="form-control" name="sabha1" placeholder="Masukkan nama divisi" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);" required>
                        </div>

                        <!-- Keterangan (sabha3) -->
                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-information" style="color: #0d47a1;"></i> Keterangan
                            </label>
                            <textarea class="form-control" name="sabha3" rows="4" placeholder="Masukkan keterangan divisi..." style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);"></textarea>
                        </div>

                        <!-- Upload PDF (sabha2) -->
                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-file-pdf" style="color: #c62828;"></i> Upload File PDF
                            </label>
                            <input type="file" class="form-control" name="sabha2" accept=".pdf" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.2vw, 13px); padding: 6px 12px;">
                            <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: clamp(10px, 1vw, 11px);">Format: PDF. Maks 10MB</small>
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
     MODAL EDIT DATA (RESPONSIF)
     ============================================================ --}}
@foreach ($data as $item)
<div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
            <div class="modal-header" style="border-bottom: 2px solid #0d47a1; padding: clamp(14px, 2vw, 20px) clamp(14px, 2vw, 24px);">
                <h5 class="modal-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; font-size: clamp(16px, 2vw, 20px);">
                    <i class="mdi mdi-pencil" style="color: #0d47a1; margin-right: 10px;"></i>
                    Edit Divisi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('divisi.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body" style="padding: clamp(14px, 2vw, 24px);">
                    <div class="row g-3">
                        <!-- Nama Divisi (sabha1) -->
                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-account-group" style="color: #c62828;"></i> Nama Divisi
                            </label>
                            <input type="text" class="form-control" name="sabha1" value="{{ $item->sabha1 }}" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);" required>
                        </div>

                        <!-- Keterangan (sabha3) -->
                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-information" style="color: #0d47a1;"></i> Keterangan
                            </label>
                            <textarea class="form-control" name="sabha3" rows="4" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">{{ $item->sabha3 }}</textarea>
                        </div>

                        <!-- Upload PDF (sabha2) -->
                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">
                                <i class="mdi mdi-file-pdf" style="color: #c62828;"></i> Upload File PDF
                            </label>
                            @if($item->sabha2 && file_exists(public_path($item->sabha2)))
                                <div style="margin-bottom: 8px; display: flex; flex-wrap: wrap; align-items: center; gap: 10px; background: #f8fafc; padding: clamp(8px, 1vw, 12px); border-radius: 8px;">
                                    <i class="mdi mdi-file-pdf" style="color: #c62828; font-size: clamp(20px, 2.5vw, 24px);"></i>
                                    <div style="flex: 1; min-width: 0;">
                                        <a href="{{ asset($item->sabha2) }}" target="_blank" style="color: #c62828; font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.2vw, 13px); text-decoration: none; font-weight: 500; word-break: break-word;">
                                            <i class="mdi mdi-open-in-new"></i> Lihat PDF Saat Ini
                                        </a>
                                        <p style="font-size: clamp(10px, 1vw, 11px); color: #7a8a9e; margin: 0; font-family: 'Poppins', sans-serif;">Kosongkan untuk tetap menggunakan file lama</p>
                                    </div>
                                </div>
                            @else
                                <p style="font-size: clamp(11px, 1.1vw, 12px); color: #b0b8c4; font-family: 'Poppins', sans-serif; margin-bottom: 8px;">Belum ada file PDF</p>
                            @endif
                            <input type="file" class="form-control" name="sabha2" accept=".pdf" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.2vw, 13px); padding: 6px 12px;">
                            <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: clamp(10px, 1vw, 11px);">Format: PDF. Maks 10MB</small>
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
     SCRIPT (Modal Edit)
     ============================================================ --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ---- BUKA MODAL EDIT ----
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
</script>

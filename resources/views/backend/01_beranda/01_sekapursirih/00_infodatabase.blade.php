{{-- ============================================================
     DATA SEKAPUR SIRIH (RESPONSIF)
     ============================================================ --}}

<div class="col-12">
    <div class="card" style="border-radius: 16px; border: none; box-shadow: 0 2px 12px rgba(0,0,0,0.05);">
        <div class="card-body" style="padding: 20px;">

            <!-- Judul & Tombol Tambah -->
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                <div>
                    <h4 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 600; margin-bottom: 2px; font-size: clamp(18px, 3vw, 24px);">
                        📝 Data Sekapur Sirih
                    </h4>
                    <p class="card-description" style="font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.5vw, 14px); color: #7a8a9e; margin: 0;">
                        Kelola konten Sekapur Sirih Sabhagiriwana'17
                    </p>
                </div>
                <button class="btn btn-primary" style="background: #c62828; border: none; border-radius: 10px; padding: 8px 18px; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.5vw, 14px); white-space: nowrap;" data-bs-toggle="modal" data-bs-target="#tambahModal">
                    <i class="mdi mdi-plus"></i> Tambah Data
                </button>
            </div>

            <!-- ============================================================
                 TAMPILAN DATA VERTIKAL (RESPONSIF)
                 ============================================================ -->
            @forelse ($data as $index => $item)
                <div class="card mb-3" style="border-radius: 16px; border: 1px solid #f0f2f5; box-shadow: 0 2px 8px rgba(0,0,0,0.02); overflow: hidden;">
                    <div class="card-body" style="padding: clamp(16px, 2vw, 24px);">

                        <!-- Header: Nomor + Tombol Aksi -->
                        <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <span style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #c62828; font-size: clamp(12px, 1.5vw, 14px); background: rgba(198,40,40,0.06); padding: 4px 14px; border-radius: 30px;">
                                    #{{ $loop->iteration }}
                                </span>
                                <span style="font-family: 'Poppins', sans-serif; font-size: clamp(11px, 1.2vw, 13px); color: #b0b8c4;">
                                    <i class="mdi mdi-calendar"></i> {{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}
                                </span>
                            </div>
                            <div class="d-flex flex-wrap gap-1">
                                <button class="btn btn-sm btn-outline-primary btn-edit" data-id="{{ $item->id }}" style="border-radius: 8px; border-color: #0d47a1; color: #0d47a1; font-family: 'Poppins', sans-serif; font-size: clamp(11px, 1.2vw, 13px); padding: 4px 12px;">
                                    <i class="mdi mdi-pencil"></i> Edit
                                </button>
                                <button class="btn btn-sm btn-outline-danger btn-hapus" data-id="{{ $item->id }}" style="border-radius: 8px; border-color: #c62828; color: #c62828; font-family: 'Poppins', sans-serif; font-size: clamp(11px, 1.2vw, 13px); padding: 4px 12px;" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">
                                    <i class="mdi mdi-delete"></i> Hapus
                                </button>
                            </div>
                        </div>

                        <!-- Konten Paragraf (Responsif) -->
                        <div style="display: flex; flex-direction: column; gap: 10px;">

                            @if($item->sabha1)
                            <div style="display: flex; flex-direction: column; gap: 4px; padding: 12px 14px; background: #f8fafc; border-radius: 10px;">
                                <span style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #c62828; font-size: clamp(11px, 1.2vw, 13px);">Paragraf 1</span>
                                <p style="font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.5vw, 14px); color: #1a1a2e; margin: 0; line-height: 1.7; word-break: break-word;">{{ $item->sabha1 }}</p>
                            </div>
                            @endif

                            @if($item->sabha2)
                            <div style="display: flex; flex-direction: column; gap: 4px; padding: 12px 14px; background: #f8fafc; border-radius: 10px;">
                                <span style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #c62828; font-size: clamp(11px, 1.2vw, 13px);">Paragraf 2</span>
                                <p style="font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.5vw, 14px); color: #1a1a2e; margin: 0; line-height: 1.7; word-break: break-word;">{{ $item->sabha2 }}</p>
                            </div>
                            @endif

                            @if($item->sabha3)
                            <div style="display: flex; flex-direction: column; gap: 4px; padding: 12px 14px; background: #f8fafc; border-radius: 10px;">
                                <span style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #c62828; font-size: clamp(11px, 1.2vw, 13px);">Paragraf 3</span>
                                <p style="font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.5vw, 14px); color: #1a1a2e; margin: 0; line-height: 1.7; word-break: break-word;">{{ $item->sabha3 }}</p>
                            </div>
                            @endif

                            @if($item->sabha4)
                            <div style="display: flex; flex-direction: column; gap: 4px; padding: 12px 14px; background: #f8fafc; border-radius: 10px;">
                                <span style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #c62828; font-size: clamp(11px, 1.2vw, 13px);">Paragraf 4</span>
                                <p style="font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.5vw, 14px); color: #1a1a2e; margin: 0; line-height: 1.7; word-break: break-word;">{{ $item->sabha4 }}</p>
                            </div>
                            @endif

                        </div>

                    </div>
                </div>

                {{-- ============================================================
                     MODAL HAPUS (RESPONSIF)
                     ============================================================ --}}
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
                                    Data yang dihapus tidak dapat dikembalikan.
                                </p>
                            </div>
                            <div class="modal-footer" style="border-top: 1px solid #f0f2f5; padding: clamp(12px, 1.5vw, 16px) clamp(16px, 2vw, 24px); flex-wrap: wrap; gap: 8px;">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius: 10px; font-family: 'Poppins', sans-serif; padding: clamp(6px, 0.8vw, 8px) clamp(16px, 2vw, 24px); font-size: clamp(13px, 1.3vw, 14px);">Batal</button>
                                <form action="{{ route('01sekapursirih.destroy', $item->id) }}" method="POST" style="display: inline;">
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

            @empty
                <div style="text-align: center; padding: clamp(40px, 5vw, 60px) 20px; background: #f8fafc; border-radius: 16px; border: 1px dashed #e0e4ea;">
                    <div style="font-size: clamp(40px, 5vw, 56px); margin-bottom: 16px; color: #b0b8c4;">
                        <i class="mdi mdi-file-document-outline"></i>
                    </div>
                    <h5 style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #5a6a7a; margin: 0; font-size: clamp(16px, 2vw, 18px);">
                        Data Tidak Ditemukan !
                    </h5>
                    <p style="font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.5vw, 14px); color: #b0b8c4; margin-top: 6px;">
                        Klik tombol <strong>"Tambah Data"</strong> untuk menambahkan konten Sekapur Sirih.
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
            <div class="modal-header" style="border-bottom: 2px solid #c62828; padding: clamp(16px, 2vw, 20px) clamp(16px, 2vw, 24px);">
                <h5 class="modal-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; font-size: clamp(16px, 2vw, 20px);">
                    <i class="mdi mdi-plus" style="color: #c62828; margin-right: 10px;"></i>
                    Tambah Sekapur Sirih
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('sekapursirih.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body" style="padding: clamp(16px, 2vw, 24px);">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">Paragraf 1</label>
                            <textarea class="form-control" name="sabha1" rows="4" placeholder="Isi paragraf 1..." style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px); width: 100%;"></textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">Paragraf 2</label>
                            <textarea class="form-control" name="sabha2" rows="4" placeholder="Isi paragraf 2..." style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px); width: 100%;"></textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">Paragraf 3</label>
                            <textarea class="form-control" name="sabha3" rows="4" placeholder="Isi paragraf 3..." style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px); width: 100%;"></textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">Paragraf 4</label>
                            <textarea class="form-control" name="sabha4" rows="4" placeholder="Isi paragraf 4..." style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px); width: 100%;"></textarea>
                        </div>
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
     MODAL EDIT DATA (RESPONSIF)
     ============================================================ --}}
@foreach ($data as $item)
<div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
            <div class="modal-header" style="border-bottom: 2px solid #0d47a1; padding: clamp(16px, 2vw, 20px) clamp(16px, 2vw, 24px);">
                <h5 class="modal-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; font-size: clamp(16px, 2vw, 20px);">
                    <i class="mdi mdi-pencil" style="color: #0d47a1; margin-right: 10px;"></i>
                    Edit Sekapur Sirih
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('sekapursirih.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body" style="padding: clamp(16px, 2vw, 24px);">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">Paragraf 1</label>
                            <textarea class="form-control" name="sabha1" rows="4" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px); width: 100%;">{{ $item->sabha1 }}</textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">Paragraf 2</label>
                            <textarea class="form-control" name="sabha2" rows="4" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px); width: 100%;">{{ $item->sabha2 }}</textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">Paragraf 3</label>
                            <textarea class="form-control" name="sabha3" rows="4" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px); width: 100%;">{{ $item->sabha3 }}</textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">Paragraf 4</label>
                            <textarea class="form-control" name="sabha4" rows="4" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px); width: 100%;">{{ $item->sabha4 }}</textarea>
                        </div>
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

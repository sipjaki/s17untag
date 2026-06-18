{{-- ============================================================
     DATA KEPENGURUSAN (CARD ELEGAN - RESPONSIF)
     ============================================================ --}}

<div class="col-12">
    <div class="card" style="border-radius: 16px; border: none; box-shadow: 0 2px 12px rgba(0,0,0,0.05);">
        <div class="card-body" style="padding: clamp(16px, 2vw, 24px);">

            <!-- Judul & Tombol Tambah -->
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                <div>
                    <h4 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 600; margin-bottom: 2px; font-size: clamp(18px, 3vw, 24px);">
                        👥 Kepengurusan Sabhagiriwana'17
                    </h4>
                    <p class="card-description" style="font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.5vw, 14px); color: #7a8a9e; margin: 0;">
                        Kelola data pengurus Sabhagiriwana'17
                    </p>
                </div>
                <button class="btn btn-primary" style="background: #c62828; border: none; border-radius: 10px; padding: clamp(6px, 0.8vw, 8px) clamp(14px, 2vw, 18px); font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.5vw, 14px); white-space: nowrap;" data-bs-toggle="modal" data-bs-target="#tambahModal">
                    <i class="mdi mdi-plus"></i> Tambah Pengurus
                </button>
            </div>

            <!-- ============================================================
                 TAMPILAN DATA CARD (GRID - RESPONSIF)
                 ============================================================ -->
            @forelse ($data as $index => $item)
                <div class="card mb-3" style="border-radius: 16px; border: 1px solid #f0f2f5; box-shadow: 0 2px 8px rgba(0,0,0,0.02); overflow: hidden; transition: all 0.3s ease;">
                    <div class="card-body" style="padding: clamp(14px, 2vw, 20px) clamp(14px, 2vw, 20px);">

                        <!-- Header: Nama + Tombol Aksi -->
                        <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                            <div class="d-flex align-items-center gap-3">
                                <!-- Foto Profil -->
                                <div style="width: clamp(48px, 6vw, 56px); height: clamp(48px, 6vw, 56px); border-radius: 50%; overflow: hidden; border: 3px solid #c62828; flex-shrink: 0; background: #f0f2f5;">
                                    @if($item->sabha5 && file_exists(public_path($item->sabha5)))
                                        <img src="{{ asset($item->sabha5) }}" alt="Foto" style="width: 100%; height: 100%; object-fit: cover;">
                                    @else
                                        <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; background: #f0f2f5; color: #b0b8c4; font-size: clamp(20px, 2.5vw, 24px);">
                                            <i class="mdi mdi-account"></i>
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    <h5 style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; margin: 0; font-size: clamp(14px, 1.8vw, 16px);">
                                        {{ $item->sabha1 ?? '-' }}
                                    </h5>
                                    <span style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #c62828; font-size: clamp(11px, 1.2vw, 13px); background: rgba(198,40,40,0.06); padding: 2px 12px; border-radius: 30px; display: inline-block; margin-top: 2px;">
                                        {{ $item->sabha2 ?? 'Tanpa Jabatan' }}
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-1">
                                <button class="btn btn-sm btn-outline-primary btn-edit" data-id="{{ $item->id }}" style="border-radius: 8px; border-color: #0d47a1; color: #0d47a1; font-family: 'Poppins', sans-serif; font-size: clamp(11px, 1.2vw, 13px); padding: clamp(3px, 0.5vw, 4px) clamp(8px, 1vw, 12px);">
                                    <i class="mdi mdi-pencil"></i> <span class="d-none d-sm-inline">Edit</span>
                                </button>
                                <button class="btn btn-sm btn-outline-danger btn-hapus" data-id="{{ $item->id }}" style="border-radius: 8px; border-color: #c62828; color: #c62828; font-family: 'Poppins', sans-serif; font-size: clamp(11px, 1.2vw, 13px); padding: clamp(3px, 0.5vw, 4px) clamp(8px, 1vw, 12px);" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">
                                    <i class="mdi mdi-delete"></i> <span class="d-none d-sm-inline">Hapus</span>
                                </button>
                            </div>
                        </div>

                        <!-- Detail (Jurusan & Keterangan) - Responsif -->
                        <div style="display: flex; flex-wrap: wrap; gap: clamp(8px, 1.5vw, 16px) clamp(12px, 2vw, 24px); padding-top: 8px; border-top: 1px solid #f0f2f5;">
                            <div style="display: flex; align-items: center; gap: 6px; flex-wrap: wrap;">
                                <i class="mdi mdi-school" style="color: #0d47a1; font-size: clamp(14px, 1.5vw, 16px);"></i>
                                <span style="font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.3vw, 13px); color: #5a6a7a;">
                                    <strong style="color: #1a1a2e;">Jurusan:</strong> {{ $item->sabha3 ?? '-' }}
                                </span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 6px; flex-wrap: wrap;">
                                <i class="mdi mdi-information" style="color: #0d47a1; font-size: clamp(14px, 1.5vw, 16px);"></i>
                                <span style="font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.3vw, 13px); color: #5a6a7a;">
                                    <strong style="color: #1a1a2e;">Keterangan:</strong> {{ $item->sabha4 ?? '-' }}
                                </span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 6px; margin-left: auto; flex-wrap: wrap;">
                                <span style="font-family: 'Poppins', sans-serif; font-size: clamp(11px, 1.2vw, 12px); color: #b0b8c4;">
                                    <i class="mdi mdi-calendar"></i> {{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}
                                </span>
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
                                    Apakah Anda yakin ingin menghapus data pengurus ini?
                                </p>
                                <p style="font-size: clamp(12px, 1.2vw, 13px); color: #7a8a9e; margin: 0; font-family: 'Poppins', sans-serif; word-break: break-word;">
                                    Nama: <strong>{{ $item->sabha1 ?? 'Data' }}</strong>
                                </p>
                            </div>
                            <div class="modal-footer" style="border-top: 1px solid #f0f2f5; padding: clamp(10px, 1.5vw, 16px) clamp(14px, 2vw, 24px); flex-wrap: wrap; gap: 8px;">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius: 10px; font-family: 'Poppins', sans-serif; padding: clamp(6px, 0.8vw, 8px) clamp(14px, 2vw, 24px); font-size: clamp(13px, 1.3vw, 14px);">Batal</button>
                                <form action="{{ route('02kepengurusan.destroy', $item->id) }}" method="POST" style="display: inline;">
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
                <div style="text-align: center; padding: clamp(40px, 5vw, 60px) 20px; background: #f8fafc; border-radius: 16px; border: 1px dashed #e0e4ea;">
                    <div style="font-size: clamp(40px, 5vw, 56px); margin-bottom: 16px; color: #b0b8c4;">
                        <i class="mdi mdi-account-group"></i>
                    </div>
                    <h5 style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #5a6a7a; margin: 0; font-size: clamp(16px, 2vw, 18px);">
                        Belum Ada Data Pengurus
                    </h5>
                    <p style="font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.5vw, 14px); color: #b0b8c4; margin-top: 6px;">
                        Klik tombol <strong>"Tambah Pengurus"</strong> untuk menambahkan data kepengurusan.
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
                    Tambah Pengurus
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('kepengurusan.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body" style="padding: clamp(14px, 2vw, 24px);">
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">Nama Lengkap</label>
                            <input type="text" class="form-control" name="sabha1" placeholder="Masukkan nama lengkap" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">Divisi / Jabatan</label>
                            <input type="text" class="form-control" name="sabha2" placeholder="Contoh: Ketua, Sekretaris" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">Jurusan</label>
                            <input type="text" class="form-control" name="sabha3" placeholder="Contoh: Teknik Informatika" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">Upload Foto</label>
                            <input type="file" class="form-control" name="sabha5" accept="image/*" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.2vw, 13px); padding: 6px 12px;">
                            <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: clamp(10px, 1vw, 11px);">Format: JPG, PNG, JPEG. Maks 2MB</small>
                        </div>
                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">Keterangan</label>
                            <textarea class="form-control" name="sabha4" rows="3" placeholder="Keterangan tambahan..." style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);"></textarea>
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
                    Edit Pengurus
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('kepengurusan.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body" style="padding: clamp(14px, 2vw, 24px);">
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">Nama Lengkap</label>
                            <input type="text" class="form-control" name="sabha1" value="{{ $item->sabha1 }}" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">Divisi / Jabatan</label>
                            <input type="text" class="form-control" name="sabha2" value="{{ $item->sabha2 }}" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">Jurusan</label>
                            <input type="text" class="form-control" name="sabha3" value="{{ $item->sabha3 }}" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">Upload Foto</label>
                            @if($item->sabha5 && file_exists(public_path($item->sabha5)))
                                <div style="margin-bottom: 8px;">
                                    <img src="{{ asset($item->sabha5) }}" alt="Foto Saat Ini" style="width: clamp(60px, 8vw, 80px); height: clamp(60px, 8vw, 80px); object-fit: cover; border-radius: 10px; border: 2px solid #f0f2f5;">
                                    <p style="font-size: clamp(10px, 1vw, 11px); color: #7a8a9e; margin: 4px 0 0; font-family: 'Poppins', sans-serif;">Foto saat ini (kosongkan untuk tetap menggunakan foto lama)</p>
                                </div>
                            @else
                                <p style="font-size: clamp(11px, 1.1vw, 12px); color: #b0b8c4; font-family: 'Poppins', sans-serif; margin-bottom: 8px;">Belum ada foto</p>
                            @endif
                            <input type="file" class="form-control" name="sabha5" accept="image/*" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(12px, 1.2vw, 13px); padding: 6px 12px;">
                            <small style="font-family: 'Poppins', sans-serif; color: #b0b8c4; font-size: clamp(10px, 1vw, 11px);">Format: JPG, PNG, JPEG. Maks 2MB</small>
                        </div>
                        <div class="col-12">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: clamp(13px, 1.3vw, 14px);">Keterangan</label>
                            <textarea class="form-control" name="sabha4" rows="3" style="border-radius: 10px; font-family: 'Poppins', sans-serif; font-size: clamp(13px, 1.3vw, 14px);">{{ $item->sabha4 }}</textarea>
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

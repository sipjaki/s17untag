{{-- ============================================================
     DATA SEKAPUR SIRIH (VERTIKAL / KE BAWAH)
     ============================================================ --}}

{{-- Include Alert --}}
{{-- @include('components._alert') --}}

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            <!-- Judul & Tombol Tambah -->
            <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                <div>
                    <h4 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 600; margin-bottom: 0;">
                        📝 Data Sekapur Sirih
                    </h4>
                    <p class="card-description" style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #7a8a9e;">
                        Kelola konten Sekapur Sirih Sabhagiriwana'17
                    </p>
                </div>
                <button class="btn btn-primary btn-sm" style="background: #c62828; border: none; border-radius: 8px; padding: 8px 18px; font-family: 'Poppins', sans-serif; font-weight: 500;" data-bs-toggle="modal" data-bs-target="#tambahModal">
                    <i class="mdi mdi-plus"></i> Tambah Data
                </button>
            </div>

            <!-- ============================================================
                 TAMPILAN DATA VERTIKAL (KE BAWAH)
                 ============================================================ -->
            @forelse ($data as $index => $item)
                <div class="card mb-3" style="border-radius: 16px; border: 1px solid #f0f2f5; box-shadow: 0 2px 8px rgba(0,0,0,0.02); overflow: hidden;">
                    <div class="card-body" style="padding: 20px 24px;">

                        <!-- Header: Nomor + Tombol Aksi -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <span style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #c62828; font-size: 14px; background: rgba(198,40,40,0.06); padding: 4px 14px; border-radius: 30px;">
                                    #{{ $loop->iteration }}
                                </span>
                                <span style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #b0b8c4; margin-left: 10px;">
                                    <i class="mdi mdi-calendar"></i> {{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}
                                </span>
                            </div>
                            <div>
                                <button class="btn btn-sm btn-outline-primary btn-edit" data-id="{{ $item->id }}" style="border-radius: 8px; margin-right: 4px; border-color: #0d47a1; color: #0d47a1; font-family: 'Poppins', sans-serif;">
                                    <i class="mdi mdi-pencil"></i> Edit
                                </button>
                                <button class="btn btn-sm btn-outline-danger btn-hapus" data-id="{{ $item->id }}" data-name="{{ $item->sabha1 ?? 'Data' }}" style="border-radius: 8px; border-color: #c62828; color: #c62828; font-family: 'Poppins', sans-serif;" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">
                                    <i class="mdi mdi-delete"></i> Hapus
                                </button>
                            </div>
                        </div>

                        <!-- Konten Paragraf (Vertikal ke Bawah) -->
                        <div style="display: flex; flex-direction: column; gap: 10px;">

                            @if($item->sabha1)
                            <div style="display: flex; gap: 12px; padding: 8px 12px; background: #f8fafc; border-radius: 10px;">
                                <span style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #c62828; font-size: 13px; min-width: 80px; flex-shrink: 0;">Paragraf 1</span>
                                <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #1a1a2e; margin: 0; line-height: 1.6;">{{ $item->sabha1 }}</p>
                            </div>
                            @endif

                            @if($item->sabha2)
                            <div style="display: flex; gap: 12px; padding: 8px 12px; background: #f8fafc; border-radius: 10px;">
                                <span style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #c62828; font-size: 13px; min-width: 80px; flex-shrink: 0;">Paragraf 2</span>
                                <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #1a1a2e; margin: 0; line-height: 1.6;">{{ $item->sabha2 }}</p>
                            </div>
                            @endif

                            @if($item->sabha3)
                            <div style="display: flex; gap: 12px; padding: 8px 12px; background: #f8fafc; border-radius: 10px;">
                                <span style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #c62828; font-size: 13px; min-width: 80px; flex-shrink: 0;">Paragraf 3</span>
                                <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #1a1a2e; margin: 0; line-height: 1.6;">{{ $item->sabha3 }}</p>
                            </div>
                            @endif

                            @if($item->sabha4)
                            <div style="display: flex; gap: 12px; padding: 8px 12px; background: #f8fafc; border-radius: 10px;">
                                <span style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #c62828; font-size: 13px; min-width: 80px; flex-shrink: 0;">Paragraf 4</span>
                                <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #1a1a2e; margin: 0; line-height: 1.6;">{{ $item->sabha4 }}</p>
                            </div>
                            @endif

                        </div>

                    </div>
                </div>

                {{-- ============================================================
                     MODAL HAPUS (Style sama seperti Logout)
                     ============================================================ --}}
                <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Header -->
                            <div class="modal-header" style="border-bottom: 2px solid #c62828;">
                                <h5 class="modal-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e;">
                                    <i class="mdi mdi-delete" style="color: #c62828; margin-right: 10px;"></i>
                                    Konfirmasi Hapus
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <!-- Body -->
                            <div class="modal-body" style="padding: 24px 20px;">
                                <p style="font-size: 15px; color: #1a1a2e; margin-bottom: 4px; font-family: 'Poppins', sans-serif;">
                                    Apakah Anda yakin ingin menghapus data ini?
                                </p>

                            </div>

                            <!-- Footer -->
                            <div class="modal-footer" style="border-top: 1px solid #f0f2f5;">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius: 10px; font-family: 'Poppins', sans-serif; padding: 8px 24px;">
                                    Batal
                                </button>
                                <form action="{{ route('01sekapursirih.destroy', $item->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style="background: #c62828; border: none; border-radius: 10px; font-family: 'Poppins', sans-serif; padding: 8px 24px;">
                                        <i class="mdi mdi-delete" style="margin-right: 6px;"></i>
                                        Ya, Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            @empty
                <div style="text-align: center; padding: 60px 20px; background: #f8fafc; border-radius: 16px; border: 1px dashed #e0e4ea;">
                    <div style="font-size: 56px; margin-bottom: 16px; color: #b0b8c4;">
                        <i class="mdi mdi-file-document-outline"></i>
                    </div>
                    <h5 style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #5a6a7a; margin: 0;">
                        Data Tidak Ditemukan !
                    </h5>
                    <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #b0b8c4; margin-top: 6px;">
                        Klik tombol <strong>"Tambah Data"</strong> untuk menambahkan konten Sekapur Sirih.
                    </p>
                </div>
            @endforelse

        </div>
    </div>
</div>

{{-- ============================================================
     MODAL TAMBAH DATA (Textarea Full Width)
     ============================================================ --}}
<div class="modal fade" id="tambahModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 2px solid #c62828;">
                <h5 class="modal-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e;">
                    <i class="mdi mdi-plus" style="color: #c62828; margin-right: 10px;"></i>
                    Tambah Sekapur Sirih
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('sekapursirih.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500;">Paragraf 1</label>
                            <textarea class="form-control" name="sabha1" rows="6" placeholder="Isi paragraf 1..." style="border-radius: 10px; font-family: 'Poppins', sans-serif; width: 100%;"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500;">Paragraf 2</label>
                            <textarea class="form-control" name="sabha2" rows="6" placeholder="Isi paragraf 2..." style="border-radius: 10px; font-family: 'Poppins', sans-serif; width: 100%;"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500;">Paragraf 3</label>
                            <textarea class="form-control" name="sabha3" rows="6" placeholder="Isi paragraf 3..." style="border-radius: 10px; font-family: 'Poppins', sans-serif; width: 100%;"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500;">Paragraf 4</label>
                            <textarea class="form-control" name="sabha4" rows="6" placeholder="Isi paragraf 4..." style="border-radius: 10px; font-family: 'Poppins', sans-serif; width: 100%;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border-top: 1px solid #f0f2f5;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius: 10px; font-family: 'Poppins', sans-serif; padding: 8px 24px;">Batal</button>
                    <button type="submit" class="btn btn-primary" style="background: #c62828; border: none; border-radius: 10px; font-family: 'Poppins', sans-serif; padding: 8px 24px;">
                        <i class="mdi mdi-content-save" style="margin-right: 6px;"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- ============================================================
     MODAL EDIT DATA (Textarea Full Width)
     ============================================================ --}}
@foreach ($data as $item)
<div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 2px solid #0d47a1;">
                <h5 class="modal-title" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e;">
                    <i class="mdi mdi-pencil" style="color: #0d47a1; margin-right: 10px;"></i>
                    Edit Sekapur Sirih
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('sekapursirih.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500;">Paragraf 1</label>
                            <textarea class="form-control" name="sabha1" rows="6" style="border-radius: 10px; font-family: 'Poppins', sans-serif; width: 100%;">{{ $item->sabha1 }}</textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500;">Paragraf 2</label>
                            <textarea class="form-control" name="sabha2" rows="6" style="border-radius: 10px; font-family: 'Poppins', sans-serif; width: 100%;">{{ $item->sabha2 }}</textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500;">Paragraf 3</label>
                            <textarea class="form-control" name="sabha3" rows="6" style="border-radius: 10px; font-family: 'Poppins', sans-serif; width: 100%;">{{ $item->sabha3 }}</textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" style="font-family: 'Poppins', sans-serif; font-weight: 500;">Paragraf 4</label>
                            <textarea class="form-control" name="sabha4" rows="6" style="border-radius: 10px; font-family: 'Poppins', sans-serif; width: 100%;">{{ $item->sabha4 }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border-top: 1px solid #f0f2f5;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius: 10px; font-family: 'Poppins', sans-serif; padding: 8px 24px;">Batal</button>
                    <button type="submit" class="btn btn-primary" style="background: #0d47a1; border: none; border-radius: 10px; font-family: 'Poppins', sans-serif; padding: 8px 24px;">
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
            btn.addEventListener('click', function() {
                var id = this.dataset.id;
                var modal = document.getElementById('editModal' + id);
                if (modal) {
                    var bsModal = new bootstrap.Modal(modal);
                    bsModal.show();
                }
            });
        });
    });
</script>

@include('00_semarang.00_include.01_header')
@include('00_semarang.00_include.05_headermenu')

{{-- ============================================================
    RUNNING BANNER
    ============================================================ --}}
<div class="running-banner">
    <div class="banner-track">
        <div class="banner-content">
            <span class="banner-icon"><i class="fas fa-mountain"></i></span>
            <span class="banner-text">
                Selamat datang, wahai jiwa-jiwa pengembara — di sini langkah berpadu dengan semesta,
                angin berbisik menjadi sahabat, dan setiap jejak pulang membawa makna.
            </span>
            <span class="banner-icon"><i class="fas fa-tree"></i></span>
            <span class="banner-text">
                Sabhagiriwana'17 — Jejak Petualangan, Cinta Alam, dan Persaudaraan Abadi.
            </span>
            <span class="banner-icon"><i class="fas fa-campground"></i></span>
            <span class="banner-text">
                #Sabhagiriwana17 #PencintaAlam #PetualangSejati
            </span>
            <span class="banner-icon"><i class="fas fa-mountain"></i></span>
        </div>
        <div class="banner-content">
            <span class="banner-icon"><i class="fas fa-mountain"></i></span>
            <span class="banner-text">
                Selamat datang, wahai jiwa-jiwa pengembara — di sini langkah berpadu dengan semesta,
                angin berbisik menjadi sahabat, dan setiap jejak pulang membawa makna.
            </span>
            <span class="banner-icon"><i class="fas fa-tree"></i></span>
            <span class="banner-text">
                Sabhagiriwana'17 — Jejak Petualangan, Cinta Alam, dan Persaudaraan Abadi.
            </span>
            <span class="banner-icon"><i class="fas fa-campground"></i></span>
            <span class="banner-text">
                #Sabhagiriwana17 #PencintaAlam #PetualangSejati
            </span>
            <span class="banner-icon"><i class="fas fa-mountain"></i></span>
        </div>
    </div>
</div>

{{-- ============================================================
    SECTION BERITA (GRID + MODAL DETAIL) - PAKAI JS TANPA ITEMS()
    ============================================================ --}}

@php use Illuminate\Support\Str; @endphp

<section class="news-section" id="berita" style="padding: 20px 0 40px;">
    {{-- HEADER --}}
    <div class="section-header" style="text-align: center; padding: 20px 0 30px;">
        <div style="display: flex; align-items: center; justify-content: center; gap: 16px; flex-wrap: wrap;">
            <span style="font-size: 40px; line-height: 1;">📰</span>
            <h2 style="font-size: clamp(28px, 4vw, 38px); font-weight: 800; color: #1a1a2e; margin: 0; background: linear-gradient(135deg, #c62828, #0d47a1); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                Berita Terkini
            </h2>
            <span style="font-size: 40px; line-height: 1;">📰</span>
        </div>
        <p style="font-family: 'Poppins', sans-serif; color: #7a8a9e; margin-top: 8px; font-size: 15px;">
            Update terbaru dari aktivitas Sabhagiriwana'17
        </p>
    </div>

    {{-- GRID ARTIKEL --}}
    <div class="news-grid" style="max-width: 1200px; margin: 0 auto; padding: 0 24px 40px; display: grid; grid-template-columns: repeat(auto-fill, minmax(340px, 1fr)); gap: 30px;">

        @forelse ($data as $index => $item)
            @php
                // Gambar unggulan (sabha5)
                $thumbnail = !empty($item->sabha5) && file_exists(public_path($item->sabha5))
                    ? asset($item->sabha5)
                    : 'https://via.placeholder.com/600x400/1a1a2e/ffffff?text=Sabhagiriwana17';

                // Kumpulkan foto (sabha5-9)
                $fotos = [];
                for ($i = 5; $i <= 9; $i++) {
                    $field = 'sabha' . $i;
                    if (!empty($item->$field) && file_exists(public_path($item->$field))) {
                        $fotos[] = asset($item->$field);
                    }
                }

                // Cuplikan (prioritas sabha2, lalu sabha3)
                $excerpt = !empty($item->sabha2) ? Str::limit(strip_tags($item->sabha2), 120, '...') : '';
                if (empty($excerpt) && !empty($item->sabha3)) {
                    $excerpt = Str::limit(strip_tags($item->sabha3), 120, '...');
                }
            @endphp

            {{-- CARD --}}
            <div class="news-card" style="
                background: #ffffff;
                border-radius: 20px;
                overflow: hidden;
                box-shadow: 0 8px 30px rgba(0, 0, 0, 0.04);
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                border: 1px solid rgba(0, 0, 0, 0.04);
                display: flex;
                flex-direction: column;
                height: 100%;
            ">
                {{-- Gambar Unggulan --}}
                <a href="javascript:void(0)" class="btn-detail-berita" data-id="{{ $item->id }}" style="display: block; overflow: hidden; position: relative; aspect-ratio: 16/9; background: #f0f2f5; text-decoration: none;">
                    <img src="{{ $thumbnail }}" alt="{{ $item->sabha1 ?? 'Berita' }}" style="
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        transition: transform 0.6s ease;
                    " loading="lazy">
                    <div style="position: absolute; top: 12px; left: 12px; background: rgba(198,40,40,0.9); color: #fff; font-family: 'Poppins', sans-serif; font-size: 11px; font-weight: 600; padding: 4px 14px; border-radius: 30px; backdrop-filter: blur(4px);">
                        #{{ $loop->iteration }}
                    </div>
                    <div style="position: absolute; bottom: 12px; right: 12px; background: rgba(0,0,0,0.5); backdrop-filter: blur(4px); color: #fff; font-family: 'Poppins', sans-serif; font-size: 10px; padding: 2px 10px; border-radius: 20px;">
                        {{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}
                    </div>
                </a>

                {{-- Konten --}}
                <div style="padding: 20px 22px 24px; flex: 1; display: flex; flex-direction: column;">
                    <h3 style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; font-size: 18px; margin: 0 0 10px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                        <a href="javascript:void(0)" class="btn-detail-berita" data-id="{{ $item->id }}" style="text-decoration: none; color: inherit; transition: color 0.3s ease;">
                            {{ $item->sabha1 ?? 'Judul Berita' }}
                        </a>
                    </h3>

                    {{-- Cuplikan --}}
                    @if($excerpt)
                        <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #5a6a7a; line-height: 1.7; margin: 0 0 16px 0; flex: 1; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                            {{ $excerpt }}
                        </p>
                    @endif

                    {{-- Galeri kecil --}}
                    @if(count($fotos) > 0)
                        <div style="display: flex; gap: 6px; flex-wrap: wrap; margin-bottom: 16px;">
                            @foreach(array_slice($fotos, 0, 4) as $key => $foto)
                                <a href="{{ $foto }}" target="_blank" style="flex: 1; min-width: 50px; max-width: 60px; aspect-ratio: 1/1; border-radius: 8px; overflow: hidden; border: 1px solid #f0f2f5; transition: transform 0.3s ease; text-decoration: none;">
                                    <img src="{{ $foto }}" alt="foto {{ $key+1 }}" style="width: 100%; height: 100%; object-fit: cover;">
                                </a>
                            @endforeach
                            @if(count($fotos) > 4)
                                <div style="flex: 1; min-width: 50px; max-width: 60px; aspect-ratio: 1/1; border-radius: 8px; background: #f0f2f5; display: flex; align-items: center; justify-content: center; font-family: 'Poppins', sans-serif; font-size: 12px; color: #7a8a9e; border: 1px solid #f0f2f5;">
                                    +{{ count($fotos) - 4 }}
                                </div>
                            @endif
                        </div>
                    @endif

                    {{-- Tombol Baca Selengkapnya --}}
                    <a href="javascript:void(0)" class="btn-detail-berita" data-id="{{ $item->id }}" style="font-family: 'Poppins', sans-serif; font-size: 13px; font-weight: 600; color: #c62828; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; transition: gap 0.3s ease; margin-top: auto;">
                        Baca Selengkapnya <i class="mdi mdi-arrow-right" style="font-size: 16px; transition: transform 0.3s ease;"></i>
                    </a>
                </div>
            </div>

        @empty
            <div style="grid-column: 1 / -1; text-align: center; padding: 80px 20px; background: rgba(255,255,255,0.85); border-radius: 24px; border: 2px dashed #e0e4ea;">
                <div style="font-size: 64px; color: #b0b8c4; margin-bottom: 16px;">
                    <i class="mdi mdi-newspaper"></i>
                </div>
                <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #5a6a7a; font-size: 20px; margin: 0;">
                    Belum Ada Berita
                </h3>
                <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #b0b8c4; margin-top: 8px;">
                    Silakan cek kembali nanti untuk membaca berita terbaru dari Sabhagiriwana'17.
                </p>
            </div>
        @endforelse

    </div>

    {{-- Pagination --}}
    @if(isset($data) && method_exists($data, 'links') && $data->total() > $data->perPage())
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 24px 20px;">
            {{ $data->links() }}
        </div>
    @endif
</section>

{{-- ============================================================
    MODAL DETAIL BERITA
    ============================================================ --}}
<div class="modal fade" id="detailModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content" style="border-radius: 24px; border: none; box-shadow: 0 20px 60px rgba(0,0,0,0.15); max-height: 90vh;">
            <div class="modal-header" style="border-bottom: 3px solid #c62828; padding: 20px 28px;">
                <h5 class="modal-title" id="detailModalLabel" style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; font-size: 20px; display: flex; align-items: center; gap: 10px;">
                    <i class="mdi mdi-newspaper" style="color: #c62828; font-size: 24px;"></i>
                    <span id="detailJudul">Detail Berita</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body" style="padding: 28px 28px 20px;" id="detailContent">
                <div class="text-center py-4">
                    <div class="spinner-border text-danger" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="border-top: 1px solid #f0f2f5; padding: 16px 28px;">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius: 12px; font-family: 'Poppins', sans-serif; padding: 8px 24px; font-size: 14px;">Tutup</button>
            </div>
        </div>
    </div>
</div>

{{-- ============================================================
    CSS TAMBAHAN
    ============================================================ --}}
<style>
    .news-card {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .news-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 48px rgba(0, 0, 0, 0.08);
        border-color: rgba(198, 40, 40, 0.15);
    }
    .news-card:hover img {
        transform: scale(1.03);
    }
    .news-card .btn-detail-berita:hover i {
        transform: translateX(4px);
    }
    .news-card .btn-detail-berita:hover {
        color: #b71c1c !important;
    }
    .modal-gallery-img:hover {
        transform: scale(1.03);
        border-color: #c62828;
    }

    @media (max-width: 768px) {
        .news-grid {
            grid-template-columns: 1fr;
            padding: 0 16px 30px;
            gap: 24px;
        }
        .news-card {
            border-radius: 16px;
        }
        .news-card > a:first-child {
            aspect-ratio: 16/10;
        }
        .modal-content {
            border-radius: 16px !important;
        }
    }
    @media (max-width: 480px) {
        .news-card {
            border-radius: 14px;
        }
        .news-card > a:first-child {
            aspect-ratio: 16/11;
        }
        .modal-body {
            padding: 16px !important;
        }
    }
</style>

{{-- ============================================================
    JAVASCRIPT - PERBAIKI ERROR items()
    ============================================================ --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Ambil data berita dengan aman (support paginator atau collection)
    @php
        // Jika $data adalah paginator, ambil items; jika collection, ambil all
        $items = $data instanceof \Illuminate\Pagination\LengthAwarePaginator ? $data->items() : $data->all();
    @endphp
    const beritaData = @json($items);

    // Fungsi untuk membuka modal
    function openDetailModal(id) {
        const berita = beritaData.find(item => item.id == id);
        if (!berita) {
            alert('Data berita tidak ditemukan!');
            return;
        }

        // Set judul
        document.getElementById('detailJudul').textContent = berita.sabha1 || 'Detail Berita';

        let html = '';

        // Paragraf 1 (sabha2)
        if (berita.sabha2) {
            html += `<div style="background: #f8fafc; border-radius: 12px; padding: 16px 20px; margin-bottom: 16px; border-left: 5px solid #c62828;">
                        <p style="font-family: 'Poppins', sans-serif; font-size: 15px; color: #1a1a2e; line-height: 1.8; margin: 0;">${berita.sabha2}</p>
                    </div>`;
        }

        // Paragraf 2 (sabha3)
        if (berita.sabha3) {
            html += `<div style="background: #f8fafc; border-radius: 12px; padding: 16px 20px; margin-bottom: 16px; border-left: 5px solid #0d47a1;">
                        <p style="font-family: 'Poppins', sans-serif; font-size: 15px; color: #1a1a2e; line-height: 1.8; margin: 0;">${berita.sabha3}</p>
                    </div>`;
        }

        // Paragraf 3 (sabha4)
        if (berita.sabha4) {
            html += `<div style="background: #f8fafc; border-radius: 12px; padding: 16px 20px; margin-bottom: 16px; border-left: 5px solid #c62828;">
                        <p style="font-family: 'Poppins', sans-serif; font-size: 15px; color: #1a1a2e; line-height: 1.8; margin: 0;">${berita.sabha4}</p>
                    </div>`;
        }

        // Kumpulkan foto dari sabha5 - sabha9
        const fotos = [];
        for (let i = 5; i <= 9; i++) {
            const field = 'sabha' + i;
            if (berita[field] && berita[field].length > 0) {
                // Tambahkan prefix asset jika path relatif
                let fotoUrl = berita[field];
                if (!fotoUrl.startsWith('http') && !fotoUrl.startsWith('/')) {
                    fotoUrl = '{{ asset('') }}' + fotoUrl;
                }
                fotos.push(fotoUrl);
            }
        }

        // Tampilkan galeri
        if (fotos.length > 0) {
            html += `<div style="margin-top: 20px;">
                        <h6 style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #1a1a2e; margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                            <i class="mdi mdi-image" style="color: #c62828;"></i> Galeri Dokumentasi (${fotos.length} foto)
                        </h6>
                        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(140px, 1fr)); gap: 12px;">`;
            fotos.forEach(foto => {
                html += `<a href="${foto}" target="_blank" class="modal-gallery-img" style="display: block; border-radius: 10px; overflow: hidden; border: 1px solid #f0f2f5; transition: transform 0.3s ease;">
                            <img src="${foto}" alt="foto" style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                        </a>`;
            });
            html += `</div></div>`;
        }

        // Jika kosong
        if (!berita.sabha2 && !berita.sabha3 && !berita.sabha4 && fotos.length === 0) {
            html = `<div style="text-align: center; padding: 40px 20px;">
                        <p style="font-family: 'Poppins', sans-serif; color: #b0b8c4;">Tidak ada konten lengkap untuk berita ini.</p>
                    </div>`;
        }

        document.getElementById('detailContent').innerHTML = html;

        // Buka modal
        const modal = new bootstrap.Modal(document.getElementById('detailModal'));
        modal.show();
    }

    // Pasang event listener ke semua tombol .btn-detail-berita
    document.querySelectorAll('.btn-detail-berita').forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const id = this.dataset.id;
            if (id) {
                openDetailModal(id);
            }
        });
    });
});
</script>

@include('00_semarang.00_include.02_footer')

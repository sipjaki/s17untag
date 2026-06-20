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

{{-- ============================================================
    SECTION ARTIKEL (FRONTEND)
    ============================================================ --}}

@php use Illuminate\Support\Str; @endphp

<section class="artikel-section" style="padding: 40px 0 60px; background: #f8fafc;">
    <div class="artikel-container" style="max-width: 1200px; margin: 0 auto; padding: 0 24px;">

        {{-- HEADER --}}
        <div style="text-align: center; margin-bottom: 40px;">
            <h2 style="font-family: 'Poppins', sans-serif; font-size: clamp(28px, 4vw, 36px); font-weight: 800; color: #1a1a2e; margin: 0; background: linear-gradient(135deg, #c62828, #0d47a1); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                📄 Artikel Kami
            </h2>
            <p style="font-family: 'Poppins', sans-serif; color: #7a8a9e; margin-top: 8px; font-size: 15px;">
                Kumpulan tulisan inspiratif dari para petualang Sabhagiriwana'17
            </p>
        </div>

        {{-- GRID ARTIKEL --}}
        <div class="artikel-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 30px;">

            @forelse ($data as $index => $item)
                @php
                    // Ambil thumbnail dari sabha3 atau sabha4 (prioritas sabha3)
                    $thumbnail = null;
                    if (!empty($item->sabha3) && file_exists(public_path($item->sabha3))) {
                        $thumbnail = asset($item->sabha3);
                    } elseif (!empty($item->sabha4) && file_exists(public_path($item->sabha4))) {
                        $thumbnail = asset($item->sabha4);
                    } else {
                        $thumbnail = 'https://via.placeholder.com/600x400/1a1a2e/ffffff?text=Sabhagiriwana17';
                    }

                    // Kumpulkan semua file (sabha3 & sabha4) untuk galeri
                    $files = [];
                    if (!empty($item->sabha3) && file_exists(public_path($item->sabha3))) {
                        $files[] = asset($item->sabha3);
                    }
                    if (!empty($item->sabha4) && file_exists(public_path($item->sabha4))) {
                        $files[] = asset($item->sabha4);
                    }

                    // Cuplikan dari sabha2
                    $excerpt = !empty($item->sabha2) ? Str::limit(strip_tags($item->sabha2), 120, '...') : '';
                @endphp

                {{-- CARD --}}
                <div class="artikel-card" style="
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
                    {{-- Gambar Thumbnail --}}
                    <a href="javascript:void(0)" class="btn-detail-artikel" data-id="{{ $item->id }}" style="display: block; overflow: hidden; position: relative; aspect-ratio: 16/9; background: #f0f2f5; text-decoration: none;">
                        <img src="{{ $thumbnail }}" alt="{{ $item->sabha1 ?? 'Artikel' }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;" loading="lazy">
                        <div style="position: absolute; top: 12px; left: 12px; background: rgba(13,71,161,0.9); color: #fff; font-family: 'Poppins', sans-serif; font-size: 11px; font-weight: 600; padding: 4px 14px; border-radius: 30px; backdrop-filter: blur(4px);">
                            #{{ $loop->iteration }}
                        </div>
                        <div style="position: absolute; bottom: 12px; right: 12px; background: rgba(0,0,0,0.5); backdrop-filter: blur(4px); color: #fff; font-family: 'Poppins', sans-serif; font-size: 10px; padding: 2px 10px; border-radius: 20px;">
                            {{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}
                        </div>
                    </a>

                    {{-- Konten --}}
                    <div style="padding: 20px 22px 24px; flex: 1; display: flex; flex-direction: column;">
                        <h3 style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #1a1a2e; font-size: 18px; margin: 0 0 10px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                            <a href="javascript:void(0)" class="btn-detail-artikel" data-id="{{ $item->id }}" style="text-decoration: none; color: inherit; transition: color 0.3s ease;">
                                {{ $item->sabha1 ?? 'Judul Artikel' }}
                            </a>
                        </h3>

                        {{-- Cuplikan --}}
                        @if($excerpt)
                            <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #5a6a7a; line-height: 1.7; margin: 0 0 16px 0; flex: 1; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                                {{ $excerpt }}
                            </p>
                        @endif

                        {{-- Galeri kecil (jika ada file) --}}
                        @if(count($files) > 0)
                            <div style="display: flex; gap: 6px; flex-wrap: wrap; margin-bottom: 16px;">
                                @foreach(array_slice($files, 0, 4) as $key => $file)
                                    <a href="{{ $file }}" target="_blank" style="flex: 1; min-width: 50px; max-width: 60px; aspect-ratio: 1/1; border-radius: 8px; overflow: hidden; border: 1px solid #f0f2f5; transition: transform 0.3s ease; text-decoration: none;">
                                        @php
                                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                                            $isImage = in_array(strtolower($ext), ['jpg','jpeg','png','gif','webp','bmp','svg','ico']);
                                        @endphp
                                        @if($isImage)
                                            <img src="{{ $file }}" alt="file {{ $key+1 }}" style="width: 100%; height: 100%; object-fit: cover;">
                                        @else
                                            <div style="width: 100%; height: 100%; background: #f0f2f5; display: flex; align-items: center; justify-content: center; color: #7a8a9e; font-size: 18px;">
                                                <i class="mdi mdi-file"></i>
                                            </div>
                                        @endif
                                    </a>
                                @endforeach
                                @if(count($files) > 4)
                                    <div style="flex: 1; min-width: 50px; max-width: 60px; aspect-ratio: 1/1; border-radius: 8px; background: #f0f2f5; display: flex; align-items: center; justify-content: center; font-family: 'Poppins', sans-serif; font-size: 12px; color: #7a8a9e; border: 1px solid #f0f2f5;">
                                        +{{ count($files) - 4 }}
                                    </div>
                                @endif
                            </div>
                        @endif

                        {{-- Tombol Baca Selengkapnya --}}
                        <a href="javascript:void(0)" class="btn-detail-artikel" data-id="{{ $item->id }}" style="font-family: 'Poppins', sans-serif; font-size: 13px; font-weight: 600; color: #0d47a1; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; transition: gap 0.3s ease; margin-top: auto;">
                            Baca Selengkapnya <i class="mdi mdi-arrow-right" style="font-size: 16px; transition: transform 0.3s ease;"></i>
                        </a>
                    </div>
                </div>

            @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 80px 20px; background: rgba(255,255,255,0.85); border-radius: 24px; border: 2px dashed #e0e4ea;">
                    <div style="font-size: 64px; color: #b0b8c4; margin-bottom: 16px;">
                        <i class="mdi mdi-file-document-outline"></i>
                    </div>
                    <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #5a6a7a; font-size: 20px; margin: 0;">
                        Belum Ada Artikel
                    </h3>
                    <p style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #b0b8c4; margin-top: 8px;">
                        Silakan cek kembali nanti untuk membaca artikel menarik dari Sabhagiriwana'17.
                    </p>
                </div>
            @endforelse

        </div>

        {{-- Pagination (jika ada) --}}
        @if(isset($artikels) && method_exists($artikels, 'links') && $artikels->total() > $artikels->perPage())
            <div style="margin-top: 40px; display: flex; justify-content: center;">
                {{ $artikels->links() }}
            </div>
        @endif

    </div>
</section>

{{-- ============================================================
    CSS TAMBAHAN
    ============================================================ --}}
<style>
    .artikel-card {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .artikel-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 48px rgba(0, 0, 0, 0.08);
        border-color: rgba(13, 71, 161, 0.15);
    }
    .artikel-card:hover img {
        transform: scale(1.03);
    }
    .artikel-card .btn-detail-artikel:hover i {
        transform: translateX(4px);
    }
    .artikel-card .btn-detail-artikel:hover {
        color: #c62828 !important;
    }
    .modal-gallery-artikel:hover {
        transform: scale(1.03);
        border-color: #0d47a1;
    }
    @media (max-width: 768px) {
        .artikel-grid {
            grid-template-columns: 1fr;
            gap: 24px;
        }
        .artikel-card {
            border-radius: 16px;
        }
        .modal-content {
            border-radius: 16px !important;
        }
    }
    @media (max-width: 480px) {
        .artikel-card {
            border-radius: 14px;
        }
        .modal-body {
            padding: 16px !important;
        }
    }
</style>

{{-- ============================================================
    JAVASCRIPT UNTUK MODAL DETAIL ARTIKEL
    ============================================================ --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Ambil data artikel dari server (pastikan variabel $artikels dikirim)
    @php
        // Jika $artikels adalah paginator, ambil items; jika collection, ambil all
        $items = isset($artikels) ? ($artikels instanceof \Illuminate\Pagination\LengthAwarePaginator ? $artikels->items() : $artikels->all()) : [];
    @endphp
    const artikelData = @json($items);

    function openDetailArtikel(id) {
        const artikel = artikelData.find(item => item.id == id);
        if (!artikel) {
            alert('Data artikel tidak ditemukan!');
            return;
        }

        document.getElementById('detailJudulArtikel').textContent = artikel.sabha1 || 'Detail Artikel';

        let html = '';

        // Paragraf keterangan (sabha2)
        if (artikel.sabha2) {
            html += `<div style="background: #f8fafc; border-radius: 12px; padding: 16px 20px; margin-bottom: 16px; border-left: 5px solid #0d47a1;">
                        <p style="font-family: 'Poppins', sans-serif; font-size: 15px; color: #1a1a2e; line-height: 1.8; margin: 0;">${artikel.sabha2}</p>
                    </div>`;
        }

        // Kumpulkan file (sabha3 & sabha4)
        const files = [];
        if (artikel.sabha3 && artikel.sabha3.length > 0) {
            let url = artikel.sabha3;
            if (!url.startsWith('http') && !url.startsWith('/')) {
                url = '{{ asset('') }}' + url;
            }
            files.push(url);
        }
        if (artikel.sabha4 && artikel.sabha4.length > 0) {
            let url = artikel.sabha4;
            if (!url.startsWith('http') && !url.startsWith('/')) {
                url = '{{ asset('') }}' + url;
            }
            files.push(url);
        }

        // Tampilkan galeri
        if (files.length > 0) {
            html += `<div style="margin-top: 20px;">
                        <h6 style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #1a1a2e; margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                            <i class="mdi mdi-file" style="color: #0d47a1;"></i> Lampiran (${files.length} file)
                        </h6>
                        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(140px, 1fr)); gap: 12px;">`;
            files.forEach(file => {
                const ext = file.split('.').pop().toLowerCase();
                const isImage = ['jpg','jpeg','png','gif','webp','bmp','svg','ico'].includes(ext);
                if (isImage) {
                    html += `<a href="${file}" target="_blank" class="modal-gallery-artikel" style="display: block; border-radius: 10px; overflow: hidden; border: 1px solid #f0f2f5; transition: transform 0.3s ease;">
                                <img src="${file}" alt="file" style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                            </a>`;
                } else {
                    html += `<a href="${file}" target="_blank" class="modal-gallery-artikel" style="display: flex; flex-direction: column; align-items: center; justify-content: center; border-radius: 10px; border: 1px solid #f0f2f5; padding: 12px; text-decoration: none; background: #f8fafc; transition: transform 0.3s ease; aspect-ratio: 1/1;">
                                <i class="mdi mdi-file" style="font-size: 36px; color: #0d47a1;"></i>
                                <span style="font-family: 'Poppins', sans-serif; font-size: 10px; color: #5a6a7a; text-align: center; word-break: break-all; margin-top: 4px;">${file.split('/').pop().substring(0, 15)}</span>
                            </a>`;
                }
            });
            html += `</div></div>`;
        }

        // Jika tidak ada konten
        if (!artikel.sabha2 && files.length === 0) {
            html = `<div style="text-align: center; padding: 40px 20px;">
                        <p style="font-family: 'Poppins', sans-serif; color: #b0b8c4;">Tidak ada konten lengkap untuk artikel ini.</p>
                    </div>`;
        }

        document.getElementById('detailContentArtikel').innerHTML = html;

        const modal = new bootstrap.Modal(document.getElementById('detailModalArtikel'));
        modal.show();
    }

    document.querySelectorAll('.btn-detail-artikel').forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const id = this.dataset.id;
            if (id) {
                openDetailArtikel(id);
            }
        });
    });
});
</script>

@include('00_semarang.00_include.02_footer')

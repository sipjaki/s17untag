{{-- ============================================================
     PAGINATION (RESPONSIF) - STYLE MODERN
     ============================================================ --}}

{{-- ============================================================
     STYLE
     ============================================================ --}}
@push('styles')
<style>
    /* WRAPPER */
    .pagination-wrapper {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        gap: 1.5rem;
        margin-top: 2rem;
        padding-top: 1.5rem;
        border-top: 2px solid #f0f2f5;
    }

    /* INFO TEXT */
    .pagination-info {
        font-family: 'Poppins', sans-serif;
        font-size: 13px;
        color: #6c7a91;
        background: #f8fafc;
        padding: 8px 18px;
        border-radius: 30px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        border: 1px solid #e9edf2;
        transition: all 0.3s ease;
    }

    .pagination-info i {
        color: #4f6af5;
        font-size: 14px;
    }

    .pagination-info strong {
        color: #1a2332;
        font-weight: 600;
    }

    .pagination-info .badge-count {
        background: linear-gradient(135deg, #4f6af5, #7c3aed);
        color: white;
        padding: 2px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        margin-left: 4px;
    }

    /* PAGINATION NAV */
    .pagination-nav {
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .pagination-nav .page-item {
        margin: 0 2px;
    }

    /* PAGE LINK */
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
        position: relative;
    }

    /* HOVER */
    .pagination-nav .page-link:hover {
        background: #f0f4ff;
        border-color: #4f6af5;
        color: #4f6af5;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(79, 106, 245, 0.15);
    }

    /* ACTIVE */
    .pagination-nav .page-item.active .page-link {
        background: linear-gradient(135deg, #4f6af5, #7c3aed);
        border-color: #4f6af5;
        color: #ffffff;
        font-weight: 600;
        box-shadow: 0 4px 15px rgba(79, 106, 245, 0.35);
        transform: translateY(-2px);
        animation: pulse 2s infinite;
    }

    /* DISABLED */
    .pagination-nav .page-item.disabled .page-link {
        color: #b8c5d6;
        background: transparent;
        border-color: transparent;
        cursor: not-allowed;
        transform: none;
        opacity: 0.5;
    }

    /* ARROWS */
    .pagination-nav .page-item:first-child .page-link,
    .pagination-nav .page-item:last-child .page-link {
        font-size: 16px;
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

    /* ELLIPSIS */
    .pagination-nav .page-item.disabled .page-link {
        background: transparent;
        border: none;
        color: #b8c5d6;
        font-weight: 600;
        letter-spacing: 1px;
        padding: 8px 12px;
    }

    /* ANIMASI PULSE */
    @keyframes pulse {
        0% {
            box-shadow: 0 4px 15px rgba(79, 106, 245, 0.35);
        }
        50% {
            box-shadow: 0 4px 25px rgba(79, 106, 245, 0.5);
        }
        100% {
            box-shadow: 0 4px 15px rgba(79, 106, 245, 0.35);
        }
    }

    /* SCROLLBAR */
    .pagination-nav::-webkit-scrollbar {
        height: 4px;
    }

    .pagination-nav::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }

    .pagination-nav::-webkit-scrollbar-thumb {
        background: #4f6af5;
        border-radius: 10px;
    }

    /* ============================================================
       RESPONSIVE
       ============================================================ */
    @media (max-width: 768px) {
        .pagination-wrapper {
            flex-direction: column;
            align-items: stretch;
            gap: 1rem;
        }

        .pagination-info {
            justify-content: center;
            font-size: 12px;
            padding: 6px 14px;
        }

        .pagination-nav {
            justify-content: center;
            flex-wrap: wrap;
        }

        .pagination-nav .page-link {
            font-size: 13px;
            padding: 6px 12px;
            min-width: 38px;
            height: 38px;
            border-radius: 10px;
        }

        .pagination-nav .page-item:first-child .page-link,
        .pagination-nav .page-item:last-child .page-link {
            padding: 6px 10px;
        }
    }

    @media (max-width: 480px) {
        .pagination-nav .page-link {
            font-size: 12px;
            padding: 4px 10px;
            min-width: 34px;
            height: 34px;
            border-radius: 8px;
        }

        .pagination-info {
            font-size: 11px;
            padding: 4px 12px;
        }

        .pagination-info .badge-count {
            font-size: 10px;
            padding: 1px 10px;
        }
    }
</style>
@endpush

{{-- ============================================================
     HTML STRUCTURE
     ============================================================ --}}
<div class="pagination-wrapper">
    {{-- Info Kiri --}}
    <div class="pagination-info">
        <i class="fas fa-list-ul"></i>
        Menampilkan
        <strong>{{ $data->firstItem() }}</strong> -
        <strong>{{ $data->lastItem() }}</strong>
        dari
        <strong>{{ $data->total() }}</strong>
        <span class="badge-count">data</span>
    </div>

    {{-- Pagination Kanan --}}
    <div class="pagination-nav">
        {{ $data->appends(['search' => request('search'), 'per_page' => request('per_page')])->links() }}
    </div>
</div>

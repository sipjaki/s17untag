<?php

namespace App\Http\Controllers;

use App\Models\beranda;
use App\Models\sabha1;
use App\Models\sabha10;
use App\Models\sabha11;
use App\Models\sabha12;
use App\Models\sabha13;
use App\Models\sabha14;
use App\Models\sabha15;
use App\Models\sabha16;
use App\Models\sabha17;
use App\Models\sabha18;
use App\Models\sabha19;
use App\Models\sabha2;
use App\Models\sabha20;
use App\Models\sabha3;
use App\Models\sabha4;
use App\Models\sabha5;
use App\Models\sabha6;
use App\Models\sabha7;
use App\Models\sabha8;
use App\Models\sabha9;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
    /**
     * Menampilkan halaman index Sekapur Sirih
     */

    // ====================================================================================================================
    // MENU 1
    // ====================================================================================================================
       public function adminsekapursirih(Request $request)
            {
                $search = $request->search;
                $perPage = $request->per_page ?? 5;

                $data = sabha1::when($search, function($q) use ($search) {
                    return $q->where('sabha1', 'LIKE', "%$search%")
                            ->orWhere('sabha2', 'LIKE', "%$search%")
                            ->orWhere('sabha3', 'LIKE', "%$search%")
                            ->orWhere('sabha4', 'LIKE', "%$search%");
                })
                ->orderBy('created_at', 'desc')
                ->paginate($perPage)
                ->appends(['search' => $search, 'per_page' => $perPage]);

                return view('backend.01_beranda.01_sekapursirih.01_adminsekapursirih', [
                    'title' => 'Sabhagiriwana17 | Sekapur Sirih',
                    'user'  => Auth::user(),
                    'data'  => $data,
                ]);
            }
    /**
     * Menyimpan data Sekapur Sirih (CREATE)
     * ✅ Alert Hijau (success)
     */
    public function sekapursirihcreate(Request $request)
    {
        $request->validate([
            'sabha1' => 'nullable|string',
            'sabha2' => 'nullable|string',
            'sabha3' => 'nullable|string',
            'sabha4' => 'nullable|string',
        ]);

        try {
            $data = sabha1::create([
                'sabha1' => $request->sabha1,
                'sabha2' => $request->sabha2,
                'sabha3' => $request->sabha3,
                'sabha4' => $request->sabha4,
            ]);

            return redirect()->route('01sekapursirih.index')
                ->with('success', 'Data Sekapur Sirih berhasil ditambahkan!'); // ✅ HIJAU

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal menyimpan data: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Mengupdate data Sekapur Sirih (UPDATE)
     * ⚠️ Alert Kuning (warning)
     */
    public function sekapursirihupdate(Request $request, $id)
    {
        $request->validate([
            'sabha1' => 'nullable|string',
            'sabha2' => 'nullable|string',
            'sabha3' => 'nullable|string',
            'sabha4' => 'nullable|string',
        ]);

        try {
            $data = sabha1::findOrFail($id);

            $data->update([
                'sabha1' => $request->sabha1,
                'sabha2' => $request->sabha2,
                'sabha3' => $request->sabha3,
                'sabha4' => $request->sabha4,
            ]);

            return redirect()->route('01sekapursirih.index')
                ->with('warning', 'Data Sekapur Sirih berhasil diperbarui!'); // ⚠️ KUNING

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal memperbarui data: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Menghapus data Sekapur Sirih (DELETE)
     * ❌ Alert Merah (error)
     */
    public function sekapursirihdelete($id)
    {
        try {
            $data = sabha1::findOrFail($id);
            $data->delete();

            return redirect()->route('01sekapursirih.index')
                ->with('error', 'Data Sekapur Sirih berhasil dihapus!'); // ❌ MERAH

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal menghapus data: ' . $e->getMessage());
        }
    }

    // ====================================================================================================================
    // MENU 2
    // ====================================================================================================================
    // public function adminkepengurusan()
    // {

    //     $data = sabha2::all();

    //     return view('backend.01_beranda.02_kepengurusan.01_adminkepengurusan', [
    //         'title' => 'Sabhagiriwana17 | Kepengurusan',
    //         'user'  => Auth::user(),
    //         'data'  => $data,
    //     ]);
    // }

      public function adminkepengurusan(Request $request)
            {
                $search = $request->search;
                $perPage = $request->per_page ?? 5;

                $data = sabha2::when($search, function($q) use ($search) {
                    return $q->where('sabha1', 'LIKE', "%$search%")
                            ->orWhere('sabha2', 'LIKE', "%$search%")
                            ->orWhere('sabha3', 'LIKE', "%$search%")
                            ->orWhere('sabha4', 'LIKE', "%$search%");
                })
                ->orderBy('created_at', 'desc')
                ->paginate($perPage)
                ->appends(['search' => $search, 'per_page' => $perPage]);

                return view('backend.01_beranda.02_kepengurusan.01_adminkepengurusan', [
                    'title' => 'Sabhagiriwana17 | Kepengurusan',
                    'user'  => Auth::user(),
                    'data'  => $data,
                ]);
            }


    public function kepengurusancreate(Request $request)
    {
        // Validasi input
        $request->validate([
            'sabha1' => 'nullable|string|max:255',
            'sabha2' => 'nullable|string|max:255',
            'sabha3' => 'nullable|string|max:255',
            'sabha4' => 'nullable|string',
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg|max:20480', // 20MB
        ]);

        try {
            // Proses upload foto jika ada
            $fotoPath = null;
            if ($request->hasFile('sabha5')) {
                $file = $request->file('sabha5');
                $filename = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move(public_path('foto_kepengurusan'), $filename);
                $fotoPath = 'foto_kepengurusan/' . $filename;
            }

            // Simpan ke database
            $data = sabha2::create([
                'sabha1' => $request->sabha1,
                'sabha2' => $request->sabha2,
                'sabha3' => $request->sabha3,
                'sabha4' => $request->sabha4,
                'sabha5' => $fotoPath,
            ]);

            return redirect()->route('02kepengurusan.index')
                ->with('success', 'Data pengurus berhasil ditambahkan!');

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal menyimpan data: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Mengupdate data Kepengurusan (UPDATE)
     * ⚠️ Alert Kuning (warning)
     */
    public function kepengurusupdate(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'sabha1' => 'nullable|string|max:255',
            'sabha2' => 'nullable|string|max:255',
            'sabha3' => 'nullable|string|max:255',
            'sabha4' => 'nullable|string',
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg|max:20480', // 20MB
        ]);

        try {
            $data = sabha2::findOrFail($id);

            // Proses upload foto baru jika ada
            $fotoPath = $data->sabha5; // Pakai foto lama
            if ($request->hasFile('sabha5')) {
                // Hapus foto lama jika ada
                if ($data->sabha5 && file_exists(public_path($data->sabha5))) {
                    unlink(public_path($data->sabha5));
                }
                // Upload foto baru
                $file = $request->file('sabha5');
                $filename = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move(public_path('foto_kepengurusan'), $filename);
                $fotoPath = 'foto_kepengurusan/' . $filename;
            }

            // Update data
            $data->update([
                'sabha1' => $request->sabha1,
                'sabha2' => $request->sabha2,
                'sabha3' => $request->sabha3,
                'sabha4' => $request->sabha4,
                'sabha5' => $fotoPath,
            ]);

            return redirect()->route('02kepengurusan.index')
                ->with('warning', 'Data kepengurusan berhasil diperbarui!');

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal memperbarui data: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Menghapus data Kepengurusan (DELETE)
     * ❌ Alert Merah (error)
     */
    public function kepengurusandelete($id)
    {
        try {
            $data = sabha2::findOrFail($id);

            // Hapus file foto jika ada
            if ($data->sabha5 && file_exists(public_path($data->sabha5))) {
                unlink(public_path($data->sabha5));
            }

            $data->delete();

            return redirect()->route('02kepengurusan.index')
                ->with('error', 'Data kepengurusan berhasil dihapus!');

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal menghapus data: ' . $e->getMessage());
        }
    }



    // ====================================================================================================================
    // MENU 3
// ====================================================================================================================
public function adminperaturan(Request $request)
            {
                $search = $request->search;
                $perPage = $request->per_page ?? 5;

                $data = sabha3::when($search, function($q) use ($search) {
                    return $q->where('sabha1', 'LIKE', "%$search%")
                            ->orWhere('sabha2', 'LIKE', "%$search%")
                            ->orWhere('sabha3', 'LIKE', "%$search%")
                            ->orWhere('sabha4', 'LIKE', "%$search%");
                })
                ->orderBy('created_at', 'desc')
                ->paginate($perPage)
                ->appends(['search' => $search, 'per_page' => $perPage]);

                return view('backend.01_beranda.03_peraturan.01_adminperaturan', [
                    'title' => 'Sabhagiriwana17 | Peraturan',
                    'user'  => Auth::user(),
                    'data'  => $data,
                ]);
            }

// public function adminperaturan()
//     {

//         $data = sabha3::all();

//         return view('backend.01_beranda.03_peraturan.01_adminperaturan', [
//             'title' => 'Sabhagiriwana17 | Peraturan',
//             'user'  => Auth::user(),
//             'data'  => $data,
//         ]);
//     }



public function peraturancreate(Request $request)
{
    $request->validate([
        'sabha1' => 'nullable|string|max:255', // Judul
        'sabha2' => 'nullable|file|mimes:pdf|max:20240', // PDF 10MB
        'sabha3' => 'nullable|string', // Keterangan
    ]);

    try {
        $filePath = null;
        if ($request->hasFile('sabha2')) {
            $file = $request->file('sabha2');
            $filename = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
            $file->move(public_path('file_peraturan'), $filename);
            $filePath = 'file_peraturan/' . $filename;
        }

        $data = sabha3::create([
            'sabha1' => $request->sabha1,
            'sabha2' => $filePath,
            'sabha3' => $request->sabha3,
        ]);

        return redirect()->route('03peraturan.index')
            ->with('success', 'Peraturan berhasil ditambahkan!');

    } catch (\Exception $e) {
        return back()
            ->with('error', 'Gagal menyimpan data: ' . $e->getMessage())
            ->withInput();
    }
}

public function peraturanupdate(Request $request, $id)
{
    $request->validate([
        'sabha1' => 'nullable|string|max:255',
        'sabha2' => 'nullable|file|mimes:pdf|max:20240',
        'sabha3' => 'nullable|string',
    ]);

    try {
        $data = sabha3::findOrFail($id);

        $filePath = $data->sabha2;
        if ($request->hasFile('sabha2')) {
            if ($data->sabha2 && file_exists(public_path($data->sabha2))) {
                unlink(public_path($data->sabha2));
            }
            $file = $request->file('sabha2');
            $filename = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
            $file->move(public_path('file_peraturan'), $filename);
            $filePath = 'file_peraturan/' . $filename;
        }

        $data->update([
            'sabha1' => $request->sabha1,
            'sabha2' => $filePath,
            'sabha3' => $request->sabha3,
        ]);

        return redirect()->route('03peraturan.index')
            ->with('warning', 'Peraturan berhasil diperbarui!');

    } catch (\Exception $e) {
        return back()
            ->with('error', 'Gagal memperbarui data: ' . $e->getMessage())
            ->withInput();
    }
}

public function peraturandelete($id)
{
    try {
        $data = sabha3::findOrFail($id);

        if ($data->sabha2 && file_exists(public_path($data->sabha2))) {
            unlink(public_path($data->sabha2));
        }

        $data->delete();

        return redirect()->route('03peraturan.index')
            ->with('error', 'Peraturan berhasil dihapus!');

    } catch (\Exception $e) {
        return back()
            ->with('error', 'Gagal menghapus data: ' . $e->getMessage());
    }
}



    // ====================================================================================================================
    // MENU 4
// ====================================================================================================================
    // public function admindivisi()
    // {
    //     $data = sabha4::all();

    //     return view('backend.01_beranda.04_divisi.01_admindivisi', [
    //         'title' => 'Sabhagiriwana17 | Divisi',
    //         'user'  => Auth::user(),
    //         'data'  => $data,
    //     ]);
    // }

    public function admindivisi(Request $request)
            {
                $search = $request->search;
                $perPage = $request->per_page ?? 5;

                $data = sabha4::when($search, function($q) use ($search) {
                    return $q->where('sabha1', 'LIKE', "%$search%")
                            ->orWhere('sabha2', 'LIKE', "%$search%")
                            ->orWhere('sabha3', 'LIKE', "%$search%")
                            ->orWhere('sabha4', 'LIKE', "%$search%");
                })
                ->orderBy('created_at', 'desc')
                ->paginate($perPage)
                ->appends(['search' => $search, 'per_page' => $perPage]);

                return view('backend.01_beranda.04_divisi.01_admindivisi', [
                    'title' => 'Sabhagiriwana17 | Divisi',
                    'user'  => Auth::user(),
                    'data'  => $data,
                ]);
            }




public function divisicreate(Request $request)
{
    $request->validate([
        'sabha1' => 'nullable|string|max:255', // Nama Divisi
        'sabha2' => 'nullable|file|mimes:pdf|max:20240', // PDF 10MB
        'sabha3' => 'nullable|string', // Keterangan
    ]);

    try {
        $filePath = null;
        if ($request->hasFile('sabha2')) {
            $file = $request->file('sabha2');
            $filename = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
            $file->move(public_path('file_peraturan'), $filename);
            $filePath = 'file_peraturan/' . $filename;
        }

        $data = sabha4::create([
            'sabha1' => $request->sabha1,
            'sabha2' => $filePath,
            'sabha3' => $request->sabha3,
        ]);

        return redirect()->route('04divisi.index')
            ->with('success', 'Divisi berhasil ditambahkan!');

    } catch (\Exception $e) {
        return back()
            ->with('error', 'Gagal menyimpan data: ' . $e->getMessage())
            ->withInput();
    }
}

public function divisiupdate(Request $request, $id)
{
    $request->validate([
        'sabha1' => 'nullable|string|max:255',
        'sabha2' => 'nullable|file|mimes:pdf|max:20240',
        'sabha3' => 'nullable|string',
    ]);

    try {
        $data = sabha4::findOrFail($id);

        $filePath = $data->sabha2;
        if ($request->hasFile('sabha2')) {
            if ($data->sabha2 && file_exists(public_path($data->sabha2))) {
                unlink(public_path($data->sabha2));
            }
            $file = $request->file('sabha2');
            $filename = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
            $file->move(public_path('file_peraturan'), $filename);
            $filePath = 'file_peraturan/' . $filename;
        }

        $data->update([
            'sabha1' => $request->sabha1,
            'sabha2' => $filePath,
            'sabha3' => $request->sabha3,
        ]);

        return redirect()->route('04divisi.index')
            ->with('warning', 'Divisi berhasil diperbarui!');

    } catch (\Exception $e) {
        return back()
            ->with('error', 'Gagal memperbarui data: ' . $e->getMessage())
            ->withInput();
    }
}

public function divisidelete($id)
{
    try {
        $data = sabha4::findOrFail($id);

        if ($data->sabha2 && file_exists(public_path($data->sabha2))) {
            unlink(public_path($data->sabha2));
        }

        $data->delete();

        return redirect()->route('04divisi.index')
            ->with('error', 'Divisi berhasil dihapus!');

    } catch (\Exception $e) {
        return back()
            ->with('error', 'Gagal menghapus data: ' . $e->getMessage());
    }
}

    // ====================================================================================================================
    // MENU 5
// ====================================================================================================================
    // public function adminkeanggotaan()
    // {
    //     $data = sabha5::all();

    //     return view('backend.01_beranda.05_anggotamahasiswa.01_adminanggotamahasiswa', [
    //         'title' => 'Sabhagiriwana17 | Keanggotaan ',
    //         'user'  => Auth::user(),
    //         'data'  => $data,
    //     ]);
    // }

    public function adminkeanggotaan(Request $request)
            {
                $search = $request->search;
                $perPage = $request->per_page ?? 5;

                $data = sabha5::when($search, function($q) use ($search) {
                    return $q->where('sabha1', 'LIKE', "%$search%")
                            ->orWhere('sabha2', 'LIKE', "%$search%")
                            ->orWhere('sabha3', 'LIKE', "%$search%")
                            ->orWhere('sabha4', 'LIKE', "%$search%");
                })
                ->orderBy('created_at', 'desc')
                ->paginate($perPage)
                ->appends(['search' => $search, 'per_page' => $perPage]);

                return view('backend.01_beranda.05_anggotamahasiswa.01_adminanggotamahasiswa', [
                    'title' => 'Sabhagiriwana17 | Keanggotaan',
                    'user'  => Auth::user(),
                    'data'  => $data,
                ]);
            }

    public function keanggotaancreate(Request $request)
    {
        $request->validate([
            'sabha1' => 'nullable|string|max:255', // Status
            'sabha2' => 'nullable|string|max:255', // Nama Lengkap
            'sabha3' => 'nullable|string|max:255', // Nama Lapangan
            'sabha4' => 'nullable|string|max:255', // Tempat/Tanggal Lahir
            'sabha5' => 'nullable|string|max:255', // NPA
            'sabha6' => 'nullable|string|max:255', // Angkatan
            'sabha7' => 'nullable|string|max:255', // NPM
            'sabha8' => 'nullable|string|max:255', // Fakultas
            'sabha9' => 'nullable|string|max:255', // Golongan Darah
            'sabha10' => 'nullable|string', // Alamat
            'sabha11' => 'nullable|string|max:255', // Telepon
            'sabha12' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp|max:20048', // Foto Anggota 2MB
            'sabha13' => 'nullable|date', // Golongan Darah
            'sabha14' => 'nullable|date', // Golongan Darah
        ]);

        try {
            $filePath = null;
            if ($request->hasFile('sabha12')) {
                $file = $request->file('sabha12');
                $filename = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move(public_path('file_keanggotaan'), $filename);
                $filePath = 'file_keanggotaan/' . $filename;
            }

            $data = sabha5::create([
                'sabha1' => $request->sabha1,      // Status
                'sabha2' => $request->sabha2,      // Nama Lengkap
                'sabha3' => $request->sabha3,      // Nama Lapangan
                'sabha4' => $request->sabha4,      // Tempat/Tanggal Lahir
                'sabha5' => $request->sabha5,      // NPA
                'sabha6' => $request->sabha6,      // Angkatan
                'sabha7' => $request->sabha7,      // NPM
                'sabha8' => $request->sabha8,      // Fakultas
                'sabha9' => $request->sabha9,      // Golongan Darah
                'sabha10' => $request->sabha10,    // Alamat
                'sabha11' => $request->sabha11,    // Telepon
                'sabha12' => $filePath,            // Foto Anggota
                'sabha13' => $request->sabha13,    // Telepon
                'sabha14' => $request->sabha14,    // Telepon
            ]);

            return redirect()->route('05keanggotaan.index')
                ->with('success', 'Anggota berhasil ditambahkan!');

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal menyimpan data: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function keanggotaanupdate(Request $request, $id)
    {
        $request->validate([
            'sabha1' => 'nullable|string|max:255', // Status
            'sabha2' => 'nullable|string|max:255', // Nama Lengkap
            'sabha3' => 'nullable|string|max:255', // Nama Lapangan
            'sabha4' => 'nullable|string|max:255', // Tempat/Tanggal Lahir
            'sabha5' => 'nullable|string|max:255', // NPA
            'sabha6' => 'nullable|string|max:255', // Angkatan
            'sabha7' => 'nullable|string|max:255', // NPM
            'sabha8' => 'nullable|string|max:255', // Fakultas
            'sabha9' => 'nullable|string|max:255', // Golongan Darah
            'sabha10' => 'nullable|string', // Alamat
            'sabha11' => 'nullable|string|max:255', // Telepon
            'sabha12' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp|max:20048', // Foto Anggota 2MB
            'sabha13' => 'nullable|date', // Alamat
            'sabha14' => 'nullable|date', // Alamat
            ]);

        try {
            $data = sabha5::findOrFail($id);

            // Handle file upload
            $filePath = $data->sabha12;
            if ($request->hasFile('sabha12')) {
                // Hapus file lama jika ada
                if ($data->sabha12 && file_exists(public_path($data->sabha12))) {
                    unlink(public_path($data->sabha12));
                }
                $file = $request->file('sabha12');
                $filename = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move(public_path('file_keanggotaan'), $filename);
                $filePath = 'file_keanggotaan/' . $filename;
            }

            $data->update([
                'sabha1' => $request->sabha1,      // Status
                'sabha2' => $request->sabha2,      // Nama Lengkap
                'sabha3' => $request->sabha3,      // Nama Lapangan
                'sabha4' => $request->sabha4,      // Tempat/Tanggal Lahir
                'sabha5' => $request->sabha5,      // NPA
                'sabha6' => $request->sabha6,      // Angkatan
                'sabha7' => $request->sabha7,      // NPM
                'sabha8' => $request->sabha8,      // Fakultas
                'sabha9' => $request->sabha9,      // Golongan Darah
                'sabha10' => $request->sabha10,    // Alamat
                'sabha11' => $request->sabha11,    // Telepon
                'sabha12' => $filePath,            // Foto Anggota
                'sabha13' => $request->sabha13,    // Telepon
                'sabha14' => $request->sabha14,    // Telepon
            ]);

            return redirect()->route('05keanggotaan.index')
                ->with('warning', 'Anggota berhasil diperbarui!');

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal memperbarui data: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function keanggotaandelete($id)
    {
        try {
            $data = sabha5::findOrFail($id);

            // Hapus file foto jika ada
            if ($data->sabha12 && file_exists(public_path($data->sabha12))) {
                unlink(public_path($data->sabha12));
            }

            $data->delete();

            return redirect()->route('05keanggotaan.index')
                ->with('error', 'Anggota berhasil dihapus!');

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal menghapus data: ' . $e->getMessage());
        }
    }

    // ====================================================================================================================
    // MENU 6
// ====================================================================================================================
    // public function adminkesekertariatan()
    // {
    //     $data = sabha6::all();

    //     return view('backend.01_beranda.06_kesekertariatan.01_adminkesekertariatan', [
    //         'title' => 'Sabhagiriwana17 | Kesekertariatan ',
    //         'user'  => Auth::user(),
    //         'data'  => $data,
    //     ]);
    // }

    public function adminkesekertariatan(Request $request)
            {
                $search = $request->search;
                $perPage = $request->per_page ?? 5;

                $data = sabha6::when($search, function($q) use ($search) {
                    return $q->where('sabha1', 'LIKE', "%$search%")
                            ->orWhere('sabha2', 'LIKE', "%$search%")
                            ->orWhere('sabha3', 'LIKE', "%$search%")
                            ->orWhere('sabha4', 'LIKE', "%$search%");
                })
                ->orderBy('created_at', 'desc')
                ->paginate($perPage)
                ->appends(['search' => $search, 'per_page' => $perPage]);

                return view('backend.01_beranda.06_kesekertariatan.01_adminkesekertariatan', [
                    'title' => 'Sabhagiriwana17 | Keanggotaan',
                    'user'  => Auth::user(),
                    'data'  => $data,
                ]);
            }



    public function kesekertariatancreate(Request $request)
    {
        $request->validate([
            'sabha1' => 'nullable|string|max:255', // KODE BARANG
            'sabha2' => 'nullable|string|max:255', // NAMA BARANG
            'sabha3' => 'nullable|string|max:255', // KLASIFIKASI BARANG
            'sabha4' => 'nullable|string|max:255', // SPESIFIKASI/MERK/TYPE
            'sabha5' => 'nullable|string|max:255', // JUMLAH
            'sabha6' => 'nullable|string|max:255', // UKURAN
            'sabha7' => 'nullable|string|max:255', // BAHAN
            'sabha8' => 'nullable|string|max:255', // TAHUN PEROLEHAN
            'sabha9' => 'nullable|string|max:255', // NILAI BARANG
            'sabha10' => 'nullable|string|max:255', // ASAL BARANG
            'sabha11' => 'nullable|string|max:255', // TANGGAL VERIFIKASI
            'sabha12' => 'nullable|string|max:255', // KONDISI
            'sabha13' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp|max:20048', // FOTO 1
            'sabha14' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp|max:20048', // FOTO 2
            'sabha15' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp|max:20048', // FOTO 3
        ]);

        try {
            // Upload Foto 1
            $filePath13 = null;
            if ($request->hasFile('sabha13')) {
                $file = $request->file('sabha13');
                $filename = time() . '_1_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move(public_path('file_inventaris'), $filename);
                $filePath13 = 'file_inventaris/' . $filename;
            }

            // Upload Foto 2
            $filePath14 = null;
            if ($request->hasFile('sabha14')) {
                $file = $request->file('sabha14');
                $filename = time() . '_2_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move(public_path('file_inventaris'), $filename);
                $filePath14 = 'file_inventaris/' . $filename;
            }

            // Upload Foto 3
            $filePath15 = null;
            if ($request->hasFile('sabha15')) {
                $file = $request->file('sabha15');
                $filename = time() . '_3_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move(public_path('file_inventaris'), $filename);
                $filePath15 = 'file_inventaris/' . $filename;
            }

            $data = sabha6::create([
                'sabha1' => $request->sabha1,      // KODE BARANG
                'sabha2' => $request->sabha2,      // NAMA BARANG
                'sabha3' => $request->sabha3,      // KLASIFIKASI BARANG
                'sabha4' => $request->sabha4,      // SPESIFIKASI/MERK/TYPE
                'sabha5' => $request->sabha5,      // JUMLAH
                'sabha6' => $request->sabha6,      // UKURAN
                'sabha7' => $request->sabha7,      // BAHAN
                'sabha8' => $request->sabha8,      // TAHUN PEROLEHAN
                'sabha9' => $request->sabha9,      // NILAI BARANG
                'sabha10' => $request->sabha10,    // ASAL BARANG
                'sabha11' => $request->sabha11,    // TANGGAL VERIFIKASI
                'sabha12' => $request->sabha12,    // KONDISI
                'sabha13' => $filePath13,          // FOTO 1
                'sabha14' => $filePath14,          // FOTO 2
                'sabha15' => $filePath15,          // FOTO 3
            ]);

            return redirect()->route('06kesekertariatan.index')
                ->with('success', 'Barang berhasil ditambahkan!');

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal menyimpan data: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function kesekertariatanupdate(Request $request, $id)
    {
        $request->validate([
            'sabha1' => 'nullable|string|max:255', // KODE BARANG
            'sabha2' => 'nullable|string|max:255', // NAMA BARANG
            'sabha3' => 'nullable|string|max:255', // KLASIFIKASI BARANG
            'sabha4' => 'nullable|string|max:255', // SPESIFIKASI/MERK/TYPE
            'sabha5' => 'nullable|string|max:255', // JUMLAH
            'sabha6' => 'nullable|string|max:255', // UKURAN
            'sabha7' => 'nullable|string|max:255', // BAHAN
            'sabha8' => 'nullable|string|max:255', // TAHUN PEROLEHAN
            'sabha9' => 'nullable|string|max:255', // NILAI BARANG
            'sabha10' => 'nullable|string|max:255', // ASAL BARANG
            'sabha11' => 'nullable|string|max:255', // TANGGAL VERIFIKASI
            'sabha12' => 'nullable|string|max:255', // KONDISI
            'sabha13' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp|max:20048', // FOTO 1
            'sabha14' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp|max:20048', // FOTO 2
            'sabha15' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp|max:20048', // FOTO 3
        ]);

        try {
            $data = sabha6::findOrFail($id);

            // Handle Foto 1
            $filePath13 = $data->sabha13;
            if ($request->hasFile('sabha13')) {
                if ($data->sabha13 && file_exists(public_path($data->sabha13))) {
                    unlink(public_path($data->sabha13));
                }
                $file = $request->file('sabha13');
                $filename = time() . '_1_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move(public_path('file_inventaris'), $filename);
                $filePath13 = 'file_inventaris/' . $filename;
            }

            // Handle Foto 2
            $filePath14 = $data->sabha14;
            if ($request->hasFile('sabha14')) {
                if ($data->sabha14 && file_exists(public_path($data->sabha14))) {
                    unlink(public_path($data->sabha14));
                }
                $file = $request->file('sabha14');
                $filename = time() . '_2_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move(public_path('file_inventaris'), $filename);
                $filePath14 = 'file_inventaris/' . $filename;
            }

            // Handle Foto 3
            $filePath15 = $data->sabha15;
            if ($request->hasFile('sabha15')) {
                if ($data->sabha15 && file_exists(public_path($data->sabha15))) {
                    unlink(public_path($data->sabha15));
                }
                $file = $request->file('sabha15');
                $filename = time() . '_3_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move(public_path('file_inventaris'), $filename);
                $filePath15 = 'file_inventaris/' . $filename;
            }

            $data->update([
                'sabha1' => $request->sabha1,      // KODE BARANG
                'sabha2' => $request->sabha2,      // NAMA BARANG
                'sabha3' => $request->sabha3,      // KLASIFIKASI BARANG
                'sabha4' => $request->sabha4,      // SPESIFIKASI/MERK/TYPE
                'sabha5' => $request->sabha5,      // JUMLAH
                'sabha6' => $request->sabha6,      // UKURAN
                'sabha7' => $request->sabha7,      // BAHAN
                'sabha8' => $request->sabha8,      // TAHUN PEROLEHAN
                'sabha9' => $request->sabha9,      // NILAI BARANG
                'sabha10' => $request->sabha10,    // ASAL BARANG
                'sabha11' => $request->sabha11,    // TANGGAL VERIFIKASI
                'sabha12' => $request->sabha12,    // KONDISI
                'sabha13' => $filePath13,          // FOTO 1
                'sabha14' => $filePath14,          // FOTO 2
                'sabha15' => $filePath15,          // FOTO 3
            ]);

            return redirect()->route('06kesekertariatan.index')
                ->with('warning', 'Barang berhasil diperbarui!');

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal memperbarui data: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function kesekertariatandelete($id)
    {
        try {
            $data = sabha6::findOrFail($id);

            // Hapus file foto 1 jika ada
            if ($data->sabha13 && file_exists(public_path($data->sabha13))) {
                unlink(public_path($data->sabha13));
            }

            // Hapus file foto 2 jika ada
            if ($data->sabha14 && file_exists(public_path($data->sabha14))) {
                unlink(public_path($data->sabha14));
            }

            // Hapus file foto 3 jika ada
            if ($data->sabha15 && file_exists(public_path($data->sabha15))) {
                unlink(public_path($data->sabha15));
            }

            $data->delete();

            return redirect()->route('06kesekertariatan.index')
                ->with('error', 'Barang berhasil dihapus!');

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal menghapus data: ' . $e->getMessage());
        }
    }



    // ====================================================================================================================
    // MENU 7
// ====================================================================================================================
    // public function adminprestasi()
    // {
    //     $data = sabha7::all();

    //     return view('backend.01_beranda.07_prestasi.01_adminprestasi', [
    //         'title' => 'Sabhagiriwana17 | Prestasi ',
    //         'user'  => Auth::user(),
    //         'data'  => $data,
    //     ]);
    // }

    public function adminprestasi(Request $request)
            {
                $search = $request->search;
                $perPage = $request->per_page ?? 5;

                $data = sabha7::when($search, function($q) use ($search) {
                    return $q->where('sabha1', 'LIKE', "%$search%")
                            ->orWhere('sabha2', 'LIKE', "%$search%")
                            ->orWhere('sabha3', 'LIKE', "%$search%")
                            ->orWhere('sabha4', 'LIKE', "%$search%");
                })
                ->orderBy('created_at', 'desc')
                ->paginate($perPage)
                ->appends(['search' => $search, 'per_page' => $perPage]);

                return view('backend.01_beranda.07_prestasi.01_adminprestasi', [
                    'title' => 'Sabhagiriwana17 | Keanggotaan',
                    'user'  => Auth::user(),
                    'data'  => $data,
                ]);
            }




    public function prestasicreate(Request $request)
    {
        $request->validate([
            'sabha1' => 'nullable|string|max:255', // Kegiatan
            'sabha2' => 'nullable|string|max:255', // Tahun
            'sabha3' => 'nullable|string', // Keterangan
            'sabha4' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp|max:20048', // FOTO 1
            'sabha5' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp|max:20048', // FOTO 2
            'sabha6' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp|max:20048', // FOTO 3
            'sabha7' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp|max:20048', // FOTO 4
            'sabha8' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp|max:20048', // FOTO 5
        ]);

        try {
            // Upload Foto 1
            $filePath4 = null;
            if ($request->hasFile('sabha4')) {
                $file = $request->file('sabha4');
                $filename = time() . '_1_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move(public_path('file_prestasi'), $filename);
                $filePath4 = 'file_prestasi/' . $filename;
            }

            // Upload Foto 2
            $filePath5 = null;
            if ($request->hasFile('sabha5')) {
                $file = $request->file('sabha5');
                $filename = time() . '_2_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move(public_path('file_prestasi'), $filename);
                $filePath5 = 'file_prestasi/' . $filename;
            }

            // Upload Foto 3
            $filePath6 = null;
            if ($request->hasFile('sabha6')) {
                $file = $request->file('sabha6');
                $filename = time() . '_3_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move(public_path('file_prestasi'), $filename);
                $filePath6 = 'file_prestasi/' . $filename;
            }

            // Upload Foto 4
            $filePath7 = null;
            if ($request->hasFile('sabha7')) {
                $file = $request->file('sabha7');
                $filename = time() . '_4_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move(public_path('file_prestasi'), $filename);
                $filePath7 = 'file_prestasi/' . $filename;
            }

            // Upload Foto 5
            $filePath8 = null;
            if ($request->hasFile('sabha8')) {
                $file = $request->file('sabha8');
                $filename = time() . '_5_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move(public_path('file_prestasi'), $filename);
                $filePath8 = 'file_prestasi/' . $filename;
            }

            $data = sabha7::create([
                'sabha1' => $request->sabha1,      // Kegiatan
                'sabha2' => $request->sabha2,      // Tahun
                'sabha3' => $request->sabha3,      // Keterangan
                'sabha4' => $filePath4,            // FOTO 1
                'sabha5' => $filePath5,            // FOTO 2
                'sabha6' => $filePath6,            // FOTO 3
                'sabha7' => $filePath7,            // FOTO 4
                'sabha8' => $filePath8,            // FOTO 5
            ]);

            return redirect()->route('07prestasi.index')
                ->with('success', 'Prestasi berhasil ditambahkan!');

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal menyimpan data: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function prestasiupdate(Request $request, $id)
    {
        $request->validate([
            'sabha1' => 'nullable|string|max:255', // Kegiatan
            'sabha2' => 'nullable|string|max:255', // Tahun
            'sabha3' => 'nullable|string', // Keterangan
            'sabha4' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp|max:20048', // FOTO 1
            'sabha5' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp|max:20048', // FOTO 2
            'sabha6' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp|max:20048', // FOTO 3
            'sabha7' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp|max:20048', // FOTO 4
            'sabha8' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp|max:20048', // FOTO 5
        ]);

        try {
            $data = sabha7::findOrFail($id);

            // Handle Foto 1
            $filePath4 = $data->sabha4;
            if ($request->hasFile('sabha4')) {
                if ($data->sabha4 && file_exists(public_path($data->sabha4))) {
                    unlink(public_path($data->sabha4));
                }
                $file = $request->file('sabha4');
                $filename = time() . '_1_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move(public_path('file_prestasi'), $filename);
                $filePath4 = 'file_prestasi/' . $filename;
            }

            // Handle Foto 2
            $filePath5 = $data->sabha5;
            if ($request->hasFile('sabha5')) {
                if ($data->sabha5 && file_exists(public_path($data->sabha5))) {
                    unlink(public_path($data->sabha5));
                }
                $file = $request->file('sabha5');
                $filename = time() . '_2_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move(public_path('file_prestasi'), $filename);
                $filePath5 = 'file_prestasi/' . $filename;
            }

            // Handle Foto 3
            $filePath6 = $data->sabha6;
            if ($request->hasFile('sabha6')) {
                if ($data->sabha6 && file_exists(public_path($data->sabha6))) {
                    unlink(public_path($data->sabha6));
                }
                $file = $request->file('sabha6');
                $filename = time() . '_3_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move(public_path('file_prestasi'), $filename);
                $filePath6 = 'file_prestasi/' . $filename;
            }

            // Handle Foto 4
            $filePath7 = $data->sabha7;
            if ($request->hasFile('sabha7')) {
                if ($data->sabha7 && file_exists(public_path($data->sabha7))) {
                    unlink(public_path($data->sabha7));
                }
                $file = $request->file('sabha7');
                $filename = time() . '_4_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move(public_path('file_prestasi'), $filename);
                $filePath7 = 'file_prestasi/' . $filename;
            }

            // Handle Foto 5
            $filePath8 = $data->sabha8;
            if ($request->hasFile('sabha8')) {
                if ($data->sabha8 && file_exists(public_path($data->sabha8))) {
                    unlink(public_path($data->sabha8));
                }
                $file = $request->file('sabha8');
                $filename = time() . '_5_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move(public_path('file_prestasi'), $filename);
                $filePath8 = 'file_prestasi/' . $filename;
            }

            $data->update([
                'sabha1' => $request->sabha1,      // Kegiatan
                'sabha2' => $request->sabha2,      // Tahun
                'sabha3' => $request->sabha3,      // Keterangan
                'sabha4' => $filePath4,            // FOTO 1
                'sabha5' => $filePath5,            // FOTO 2
                'sabha6' => $filePath6,            // FOTO 3
                'sabha7' => $filePath7,            // FOTO 4
                'sabha8' => $filePath8,            // FOTO 5
            ]);

            return redirect()->route('07prestasi.index')
                ->with('warning', 'Prestasi berhasil diperbarui!');

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal memperbarui data: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function prestasidelete($id)
    {
        try {
            $data = sabha7::findOrFail($id);

            // Hapus file foto 1 jika ada
            if ($data->sabha4 && file_exists(public_path($data->sabha4))) {
                unlink(public_path($data->sabha4));
            }

            // Hapus file foto 2 jika ada
            if ($data->sabha5 && file_exists(public_path($data->sabha5))) {
                unlink(public_path($data->sabha5));
            }

            // Hapus file foto 3 jika ada
            if ($data->sabha6 && file_exists(public_path($data->sabha6))) {
                unlink(public_path($data->sabha6));
            }

            // Hapus file foto 4 jika ada
            if ($data->sabha7 && file_exists(public_path($data->sabha7))) {
                unlink(public_path($data->sabha7));
            }

            // Hapus file foto 5 jika ada
            if ($data->sabha8 && file_exists(public_path($data->sabha8))) {
                unlink(public_path($data->sabha8));
            }

            $data->delete();

            return redirect()->route('07prestasi.index')
                ->with('error', 'Prestasi berhasil dihapus!');

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal menghapus data: ' . $e->getMessage());
        }
    }


    // ====================================================================================================================
    // MENU 0
    // ====================================================================================================================
     public function adminberanda(Request $request)
{
    $search = $request->search;
    $perPage = $request->per_page ?? 5;

    $data = beranda::when($search, function($q) use ($search) {
        return $q->where('sabha1', 'LIKE', "%$search%")
                ->orWhere('sabha2', 'LIKE', "%$search%")
                ->orWhere('sabha3', 'LIKE', "%$search%")
                ->orWhere('sabha4', 'LIKE', "%$search%")
                ->orWhere('sabha5', 'LIKE', "%$search%")
                // tambahkan pencarian keterangan
                ->orWhere('sabha6', 'LIKE', "%$search%")
                ->orWhere('sabha7', 'LIKE', "%$search%")
                ->orWhere('sabha8', 'LIKE', "%$search%")
                ->orWhere('sabha9', 'LIKE', "%$search%")
                ->orWhere('sabha10', 'LIKE', "%$search%");
    })
    ->orderBy('created_at', 'desc')
    ->paginate($perPage)
    ->appends(['search' => $search, 'per_page' => $perPage]);

    return view('backend.01_beranda.00_beranda.01_adminberanda', [
        'title' => 'Sabhagiriwana17 | Foto Beranda',
        'user'  => Auth::user(),
        'data'  => $data,
    ]);
}

           public function berandacreate(Request $request)
{
    $request->validate([
        'sabha1'  => 'nullable|image|mimes:jpeg,png,jpg|max:20480',
        'sabha2'  => 'nullable|image|mimes:jpeg,png,jpg|max:20480',
        'sabha3'  => 'nullable|image|mimes:jpeg,png,jpg|max:20480',
        'sabha4'  => 'nullable|image|mimes:jpeg,png,jpg|max:20480',
        'sabha5'  => 'nullable|image|mimes:jpeg,png,jpg|max:20480',
        'sabha6'  => 'nullable|string|max:500',
        'sabha7'  => 'nullable|string|max:500',
        'sabha8'  => 'nullable|string|max:500',
        'sabha9'  => 'nullable|string|max:500',
        'sabha10' => 'nullable|string|max:500',
    ]);

    try {
        // Siapkan array data
        $data = [];

        // Proses upload foto (sabha1–sabha5)
        for ($i = 1; $i <= 5; $i++) {
            $field = 'sabha' . $i;
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $filename = time() . '_' . $i . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move(public_path('foto_beranda'), $filename);
                $data[$field] = 'foto_beranda/' . $filename;
            } else {
                $data[$field] = null; // optional, bisa dihilangkan
            }
        }

        // Tambahkan keterangan (sabha6–sabha10)
        for ($i = 6; $i <= 10; $i++) {
            $field = 'sabha' . $i;
            $data[$field] = $request->input($field); // ambil dari request
        }

        // Simpan semua
        beranda::create($data);

        return redirect()->route('00beranda.index')
            ->with('success', 'Foto Beranda berhasil ditambahkan!');

    } catch (\Exception $e) {
        return back()
            ->with('error', 'Gagal menyimpan data: ' . $e->getMessage())
            ->withInput();
    }
}

public function berandaupdate(Request $request, $id)
{
    $request->validate([
        'sabha1'  => 'nullable|image|mimes:jpeg,png,jpg|max:20480',
        'sabha2'  => 'nullable|image|mimes:jpeg,png,jpg|max:20480',
        'sabha3'  => 'nullable|image|mimes:jpeg,png,jpg|max:20480',
        'sabha4'  => 'nullable|image|mimes:jpeg,png,jpg|max:20480',
        'sabha5'  => 'nullable|image|mimes:jpeg,png,jpg|max:20480',
        'sabha6'  => 'nullable|string|max:500',
        'sabha7'  => 'nullable|string|max:500',
        'sabha8'  => 'nullable|string|max:500',
        'sabha9'  => 'nullable|string|max:500',
        'sabha10' => 'nullable|string|max:500',
    ]);

    try {
        $data = beranda::findOrFail($id);

        // Proses upload foto (sabha1–sabha5)
        for ($i = 1; $i <= 5; $i++) {
            $field = 'sabha' . $i;
            if ($request->hasFile($field)) {
                // Hapus foto lama jika ada
                if ($data->$field && file_exists(public_path($data->$field))) {
                    unlink(public_path($data->$field));
                }
                // Upload foto baru
                $file = $request->file($field);
                $filename = time() . '_' . $i . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move(public_path('foto_beranda'), $filename);
                $data->$field = 'foto_beranda/' . $filename;
            }
        }

        // Update keterangan (sabha6–sabha10)
        for ($i = 6; $i <= 10; $i++) {
            $field = 'sabha' . $i;
            $data->$field = $request->input($field);
        }

        $data->save();

        return redirect()->route('00beranda.index')
            ->with('success', 'Foto Beranda berhasil diperbarui!');

    } catch (\Exception $e) {
        return back()
            ->with('error', 'Gagal memperbarui data: ' . $e->getMessage())
            ->withInput();
    }
}

public function berandadelete($id)
{
    try {
        $data = beranda::findOrFail($id);

        for ($i = 1; $i <= 5; $i++) {
            $field = 'sabha' . $i;
            if ($data->$field && file_exists(public_path($data->$field))) {
                unlink(public_path($data->$field));
            }
        }

        $data->delete();

        return redirect()->route('00beranda.index')
            ->with('error', 'Foto Beranda berhasil dihapus!');

    } catch (\Exception $e) {
        return back()
            ->with('error', 'Gagal menghapus data: ' . $e->getMessage());
    }
}

// MENU 8


    public function admindokkegiatan(Request $request)
            {
                $search = $request->search;
                $perPage = $request->per_page ?? 5;

                $data = sabha8::when($search, function($q) use ($search) {
                    return $q->where('sabha1', 'LIKE', "%$search%")
                            ->orWhere('sabha2', 'LIKE', "%$search%")
                            ->orWhere('sabha3', 'LIKE', "%$search%")
                            ->orWhere('sabha4', 'LIKE', "%$search%")
                            ->orWhere('sabha5', 'LIKE', "%$search%")
                            ->orWhere('sabha6', 'LIKE', "%$search%")
                            ->orWhere('sabha7', 'LIKE', "%$search%")
                            ->orWhere('sabha8', 'LIKE', "%$search%");
                })
                ->orderBy('created_at', 'desc')
                ->paginate($perPage)
                ->appends(['search' => $search, 'per_page' => $perPage]);

                return view('backend.01_beranda.08_dokkegiatan.01_admindokkegiatan', [
                    'title' => 'Sabhagiriwana17 | Dokumentasi Kegiatan',
                    'user'  => Auth::user(),
                    'data'  => $data,
                ]);
            }

            public function dokkegiatancreate(Request $request)
    {
        // Validasi input
        $request->validate([
            'sabha1' => 'required|string|max:255', // Judul wajib diisi
            'sabha2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480', // 20MB
            'sabha3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha4' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha6' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha7' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha8' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
        ]);

        try {
            // Persiapkan data untuk disimpan
            $dataInput = [
                'sabha8' => $request->sabha1,
            ];

            // Proses upload 7 foto
            for ($i = 2; $i <= 8; $i++) {
                $field = 'sabha' . $i;
                if ($request->hasFile($field)) {
                    $file = $request->file($field);
                    $filename = time() . '_' . $i . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                    $file->move(public_path('foto_dokkegiatan'), $filename);
                    $dataInput[$field] = 'foto_dokkegiatan/' . $filename;
                } else {
                    $dataInput[$field] = null;
                }
            }

            // Simpan ke database
            $data = sabha8::create($dataInput);

            return redirect()->route('08dokkegiatan.index')
                ->with('success', 'Dokumentasi kegiatan berhasil ditambahkan!');

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal menyimpan data: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Mengupdate data dokumentasi kegiatan (UPDATE)
     * Route: PUT /dokkegiatanupdate/{id}
     * Name: dokkegiatan.update
     */
    public function dokkegiatanupdate(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'sabha1' => 'required|string|max:255',
            'sabha2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha4' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha6' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha7' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha8' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
        ]);

        try {
            $data = sabha8::findOrFail($id);

            // Update judul
            $data->sabha1 = $request->sabha1;

            // Proses upload 7 foto
            for ($i = 2; $i <= 8; $i++) {
                $field = 'sabha' . $i;
                if ($request->hasFile($field)) {
                    // Hapus foto lama jika ada
                    if ($data->$field && file_exists(public_path($data->$field))) {
                        unlink(public_path($data->$field));
                    }
                    // Upload foto baru
                    $file = $request->file($field);
                    $filename = time() . '_' . $i . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                    $file->move(public_path('foto_dokkegiatan'), $filename);
                    $data->$field = 'foto_dokkegiatan/' . $filename;
                }
                // Jika tidak ada file baru, biarkan field tetap dengan nilai lama
            }

            $data->save();

            return redirect()->route('08dokkegiatan.index')
                ->with('warning', 'Dokumentasi kegiatan berhasil diperbarui!');

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal memperbarui data: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Menghapus data dokumentasi kegiatan (DELETE)
     * Route: DELETE /08dokkegiatan/{id}
     * Name: 08dokkegiatan.destroy
     */
    public function dokkegiatandelete($id)
    {
        try {
            $data = sabha8::findOrFail($id);

            // Hapus semua foto yang ada
            for ($i = 2; $i <= 8; $i++) {
                $field = 'sabha' . $i;
                if ($data->$field && file_exists(public_path($data->$field))) {
                    unlink(public_path($data->$field));
                }
            }

            $data->delete();

            return redirect()->route('08dokkegiatan.index')
                ->with('error', 'Dokumentasi kegiatan berhasil dihapus!');

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal menghapus data: ' . $e->getMessage());
        }
    }


    // MENU 9


    public function admionsnoc(Request $request)
            {
                $search = $request->search;
                $perPage = $request->per_page ?? 5;

                $data = sabha9::when($search, function($q) use ($search) {
                    return $q->where('sabha1', 'LIKE', "%$search%")
                            ->orWhere('sabha2', 'LIKE', "%$search%")
                            ->orWhere('sabha3', 'LIKE', "%$search%")
                            ->orWhere('sabha4', 'LIKE', "%$search%")
                            ->orWhere('sabha5', 'LIKE', "%$search%");
                })
                ->orderBy('created_at', 'desc')
                ->paginate($perPage)
                ->appends(['search' => $search, 'per_page' => $perPage]);

                return view('backend.02_event.01_snoc.01_adminsnoc', [
                    'title' => 'Sabhagiriwana17 | snoc',
                    'user'  => Auth::user(),
                    'data'  => $data,
                ]);
            }



    public function snoccreate(Request $request)
    {
        // Validasi semua field sesuai struktur database baru
        $request->validate([
            'sabha1' => 'required|string',
            'sabha2' => 'nullable|string',
            'sabha3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha4' => 'nullable|string',
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha6' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha7' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha8' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha9' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha10' => 'nullable|string',
            'sabhaberkas1' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas4' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
        ]);

        try {
            // Data dasar (field teks)
            $dataInput = [
                'sabha1' => $request->sabha1,
                'sabha2' => $request->sabha2,
                'sabha4' => $request->sabha4,
                'sabha10' => $request->sabha10,
            ];

            // Daftar semua field gambar
            $imageFields = [
                'sabha3', 'sabha5', 'sabha6', 'sabha7', 'sabha8', 'sabha9',
                'sabhaberkas1', 'sabhaberkas2', 'sabhaberkas3', 'sabhaberkas4', 'sabhaberkas5'
            ];

            // Proses upload gambar
            foreach ($imageFields as $field) {
                if ($request->hasFile($field)) {
                    $file = $request->file($field);
                    $filename = time() . '_' . $field . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                    $file->move(public_path('foto_snoc'), $filename);
                    $dataInput[$field] = 'foto_snoc/' . $filename;
                } else {
                    $dataInput[$field] = null;
                }
            }

            sabha9::create($dataInput);

            return redirect()->route('09snoc.index')
                ->with('success', 'Agenda SNOC berhasil ditambahkan!');

        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menyimpan data: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function snocupdate(Request $request, $id)
    {
        // Validasi semua field sesuai struktur database baru
        $request->validate([
            'sabha1' => 'required|string',
            'sabha2' => 'nullable|string',
            'sabha3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha4' => 'nullable|string',
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha6' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha7' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha8' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha9' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha10' => 'nullable|string',
            'sabhaberkas1' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas4' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
        ]);

        try {
            $data = sabha9::findOrFail($id);

            // Update field teks
            $data->sabha1 = $request->sabha1;
            $data->sabha2 = $request->sabha2;
            $data->sabha4 = $request->sabha4;
            $data->sabha10 = $request->sabha10;

            // Daftar semua field gambar
            $imageFields = [
                'sabha3', 'sabha5', 'sabha6', 'sabha7', 'sabha8', 'sabha9',
                'sabhaberkas1', 'sabhaberkas2', 'sabhaberkas3', 'sabhaberkas4', 'sabhaberkas5'
            ];

            // Proses upload gambar (jika ada file baru)
            foreach ($imageFields as $field) {
                if ($request->hasFile($field)) {
                    // Hapus file lama jika ada
                    if ($data->$field && file_exists(public_path($data->$field))) {
                        unlink(public_path($data->$field));
                    }

                    // Upload file baru
                    $file = $request->file($field);
                    $filename = time() . '_' . $field . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                    $file->move(public_path('foto_snoc'), $filename);
                    $data->$field = 'foto_snoc/' . $filename;
                }
                // Jika tidak ada file baru, biarkan field tetap dengan nilai lama
            }

            $data->save();

            return redirect()->route('09snoc.index')
                ->with('success', 'Agenda SNOC berhasil diperbarui!');

        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui data: ' . $e->getMessage())->withInput();
        }
    }



public function snocdelete($id)
{
    try {
        $data = sabha9::findOrFail($id);
        for ($i = 3; $i <= 7; $i++) {
            $field = 'sabha' . $i;
            if ($data->$field && file_exists(public_path($data->$field))) {
                unlink(public_path($data->$field));
            }
        }
        $data->delete();

        return redirect()->route('09snoc.index')
            ->with('error', 'Agenda SNOC berhasil dihapus!');

    } catch (\Exception $e) {
        return back()->with('error', 'Gagal menghapus data: ' . $e->getMessage());
    }
}

// MENU 10 NWCT


    public function adminnwct(Request $request)
            {
                $search = $request->search;
                $perPage = $request->per_page ?? 5;

                $data = sabha10::when($search, function($q) use ($search) {
                    return $q->where('sabha1', 'LIKE', "%$search%")
                            ->orWhere('sabha2', 'LIKE', "%$search%")
                            ->orWhere('sabha3', 'LIKE', "%$search%")
                            ->orWhere('sabha4', 'LIKE', "%$search%")
                            ->orWhere('sabha5', 'LIKE', "%$search%");
                })
                ->orderBy('created_at', 'desc')
                ->paginate($perPage)
                ->appends(['search' => $search, 'per_page' => $perPage]);

                return view('backend.02_event.02_nwct.01_adminnwct', [
                    'title' => 'Sabhagiriwana17 | nwct',
                    'user'  => Auth::user(),
                    'data'  => $data,
                ]);
            }


 public function nwctcreate(Request $request)
    {
        // Validasi semua field sesuai struktur database lengkap
        $request->validate([
            'sabha1' => 'required|string',
            'sabha2' => 'nullable|string',
            'sabha3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha4' => 'nullable|string', // Ini untuk laporan event (teks 5 paragraf)
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha6' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha7' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha8' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha9' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha10' => 'nullable|string',
            'sabhaberkas1' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas4' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
        ]);

        try {
            // Data dasar (field teks)
            $dataInput = [
                'sabha1' => $request->sabha1,
                'sabha2' => $request->sabha2,
                'sabha4' => $request->sabha4,
                'sabha10' => $request->sabha10,
            ];

            // Daftar semua field gambar
            $imageFields = [
                'sabha3', 'sabha5', 'sabha6', 'sabha7', 'sabha8', 'sabha9',
                'sabhaberkas1', 'sabhaberkas2', 'sabhaberkas3', 'sabhaberkas4', 'sabhaberkas5'
            ];

            // Proses upload gambar
            foreach ($imageFields as $field) {
                if ($request->hasFile($field)) {
                    $file = $request->file($field);
                    $filename = time() . '_' . $field . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                    $file->move(public_path('foto_nwct'), $filename);
                    $dataInput[$field] = 'foto_nwct/' . $filename;
                } else {
                    $dataInput[$field] = null;
                }
            }

            sabha10::create($dataInput);

            return redirect()->route('10nwct.index')
                ->with('success', 'Agenda NWCT berhasil ditambahkan!');

        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menyimpan data: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function nwctupdate(Request $request, $id)
    {
        // Validasi semua field sesuai struktur database lengkap
        $request->validate([
            'sabha1' => 'required|string',
            'sabha2' => 'nullable|string',
            'sabha3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha4' => 'nullable|string', // Ini untuk laporan event (teks 5 paragraf)
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha6' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha7' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha8' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha9' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha10' => 'nullable|string',
            'sabhaberkas1' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas4' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
        ]);

        try {
            $data = sabha10::findOrFail($id);

            // Update field teks
            $data->sabha1 = $request->sabha1;
            $data->sabha2 = $request->sabha2;
            $data->sabha4 = $request->sabha4;
            $data->sabha10 = $request->sabha10;

            // Daftar semua field gambar
            $imageFields = [
                'sabha3', 'sabha5', 'sabha6', 'sabha7', 'sabha8', 'sabha9',
                'sabhaberkas1', 'sabhaberkas2', 'sabhaberkas3', 'sabhaberkas4', 'sabhaberkas5'
            ];

            // Proses upload gambar (jika ada file baru)
            foreach ($imageFields as $field) {
                if ($request->hasFile($field)) {
                    // Hapus file lama jika ada
                    if ($data->$field && file_exists(public_path($data->$field))) {
                        unlink(public_path($data->$field));
                    }

                    // Upload file baru
                    $file = $request->file($field);
                    $filename = time() . '_' . $field . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                    $file->move(public_path('foto_nwct'), $filename);
                    $data->$field = 'foto_nwct/' . $filename;
                }
                // Jika tidak ada file baru, biarkan field tetap dengan nilai lama
            }

            $data->save();

            return redirect()->route('10nwct.index')
                ->with('success', 'Agenda NWCT berhasil diperbarui!');

        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui data: ' . $e->getMessage())->withInput();
        }
    }

public function nwctdelete($id)
{
    try {
        $data = sabha10::findOrFail($id);
        for ($i = 3; $i <= 7; $i++) {
            $field = 'sabha' . $i;
            if ($data->$field && file_exists(public_path($data->$field))) {
                unlink(public_path($data->$field));
            }
        }
        $data->delete();

        return redirect()->route('10nwct.index')
            ->with('error', 'Agenda NWCT berhasil dihapus!');

    } catch (\Exception $e) {
        return back()->with('error', 'Gagal menghapus data: ' . $e->getMessage());
    }
}

// MENU 11 LLBS


    public function adminllbs(Request $request)
            {
                $search = $request->search;
                $perPage = $request->per_page ?? 5;

                $data = sabha11::when($search, function($q) use ($search) {
                    return $q->where('sabha1', 'LIKE', "%$search%")
                            ->orWhere('sabha2', 'LIKE', "%$search%")
                            ->orWhere('sabha3', 'LIKE', "%$search%")
                            ->orWhere('sabha4', 'LIKE', "%$search%")
                            ->orWhere('sabha5', 'LIKE', "%$search%");
                })
                ->orderBy('created_at', 'desc')
                ->paginate($perPage)
                ->appends(['search' => $search, 'per_page' => $perPage]);

                return view('backend.02_event.03_llbs.01_adminllbs', [
                    'title' => 'Sabhagiriwana17 | llbs',
                    'user'  => Auth::user(),
                    'data'  => $data,
                ]);
            }


  public function llbscreate(Request $request)
    {
        // Validasi semua field sesuai struktur database lengkap
        $request->validate([
            'sabha1' => 'required|string',
            'sabha2' => 'nullable|string',
            'sabha3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha4' => 'nullable|string', // Laporan event (teks 5 paragraf)
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha6' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha7' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha8' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha9' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha10' => 'nullable|string',
            'sabhaberkas1' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas4' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
        ]);

        try {
            // Data dasar (field teks)
            $dataInput = [
                'sabha1' => $request->sabha1,
                'sabha2' => $request->sabha2,
                'sabha4' => $request->sabha4,
                'sabha10' => $request->sabha10,
            ];

            // Daftar semua field gambar
            $imageFields = [
                'sabha3', 'sabha5', 'sabha6', 'sabha7', 'sabha8', 'sabha9',
                'sabhaberkas1', 'sabhaberkas2', 'sabhaberkas3', 'sabhaberkas4', 'sabhaberkas5'
            ];

            // Proses upload gambar
            foreach ($imageFields as $field) {
                if ($request->hasFile($field)) {
                    $file = $request->file($field);
                    $filename = time() . '_' . $field . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                    $file->move(public_path('foto_llbs'), $filename);
                    $dataInput[$field] = 'foto_llbs/' . $filename;
                } else {
                    $dataInput[$field] = null;
                }
            }

            sabha11::create($dataInput);

            return redirect()->route('11llbs.index')
                ->with('success', 'Agenda LLBS berhasil ditambahkan!');

        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menyimpan data: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function llbsupdate(Request $request, $id)
    {
        // Validasi semua field sesuai struktur database lengkap
        $request->validate([
            'sabha1' => 'required|string',
            'sabha2' => 'nullable|string',
            'sabha3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha4' => 'nullable|string', // Laporan event (teks 5 paragraf)
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha6' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha7' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha8' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha9' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha10' => 'nullable|string',
            'sabhaberkas1' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas4' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
        ]);

        try {
            $data = sabha11::findOrFail($id);

            // Update field teks
            $data->sabha1 = $request->sabha1;
            $data->sabha2 = $request->sabha2;
            $data->sabha4 = $request->sabha4;
            $data->sabha10 = $request->sabha10;

            // Daftar semua field gambar
            $imageFields = [
                'sabha3', 'sabha5', 'sabha6', 'sabha7', 'sabha8', 'sabha9',
                'sabhaberkas1', 'sabhaberkas2', 'sabhaberkas3', 'sabhaberkas4', 'sabhaberkas5'
            ];

            // Proses upload gambar (jika ada file baru)
            foreach ($imageFields as $field) {
                if ($request->hasFile($field)) {
                    // Hapus file lama jika ada
                    if ($data->$field && file_exists(public_path($data->$field))) {
                        unlink(public_path($data->$field));
                    }

                    // Upload file baru
                    $file = $request->file($field);
                    $filename = time() . '_' . $field . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                    $file->move(public_path('foto_llbs'), $filename);
                    $data->$field = 'foto_llbs/' . $filename;
                }
                // Jika tidak ada file baru, biarkan field tetap dengan nilai lama
            }

            $data->save();

            return redirect()->route('11llbs.index')
                ->with('success', 'Agenda LLBS berhasil diperbarui!');

        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui data: ' . $e->getMessage())->withInput();
        }
    }


public function llbsdelete($id)
{
    try {
        $data = sabha11::findOrFail($id);
        for ($i = 3; $i <= 7; $i++) {
            $field = 'sabha' . $i;
            if ($data->$field && file_exists(public_path($data->$field))) {
                unlink(public_path($data->$field));
            }
        }
        $data->delete();

        return redirect()->route('11llbs.index')
            ->with('error', 'Agenda LLBS berhasil dihapus!');

    } catch (\Exception $e) {
        return back()->with('error', 'Gagal menghapus data: ' . $e->getMessage());
    }
}

// MENU 12 DIKLAT


    public function admindiklat(Request $request)
            {
                $search = $request->search;
                $perPage = $request->per_page ?? 5;

                $data = sabha12::when($search, function($q) use ($search) {
                    return $q->where('sabha1', 'LIKE', "%$search%")
                            ->orWhere('sabha2', 'LIKE', "%$search%")
                            ->orWhere('sabha3', 'LIKE', "%$search%")
                            ->orWhere('sabha4', 'LIKE', "%$search%")
                            ->orWhere('sabha5', 'LIKE', "%$search%");
                })
                ->orderBy('created_at', 'desc')
                ->paginate($perPage)
                ->appends(['search' => $search, 'per_page' => $perPage]);

                return view('backend.02_event.04_diklat.01_admindiklat', [
                    'title' => 'Sabhagiriwana17 | diklat',
                    'user'  => Auth::user(),
                    'data'  => $data,
                ]);
            }


 public function diklatcreate(Request $request)
    {
        // Validasi semua field sesuai struktur database lengkap
        $request->validate([
            'sabha1' => 'required|string',
            'sabha2' => 'nullable|string',
            'sabha3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha4' => 'nullable|string', // Laporan event (teks 5 paragraf)
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha6' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha7' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha8' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha9' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha10' => 'nullable|string',
            'sabhaberkas1' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas4' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
        ]);

        try {
            // Data dasar (field teks)
            $dataInput = [
                'sabha1' => $request->sabha1,
                'sabha2' => $request->sabha2,
                'sabha4' => $request->sabha4,
                'sabha10' => $request->sabha10,
            ];

            // Daftar semua field gambar
            $imageFields = [
                'sabha3', 'sabha5', 'sabha6', 'sabha7', 'sabha8', 'sabha9',
                'sabhaberkas1', 'sabhaberkas2', 'sabhaberkas3', 'sabhaberkas4', 'sabhaberkas5'
            ];

            // Proses upload gambar
            foreach ($imageFields as $field) {
                if ($request->hasFile($field)) {
                    $file = $request->file($field);
                    $filename = time() . '_' . $field . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                    $file->move(public_path('foto_diklat'), $filename);
                    $dataInput[$field] = 'foto_diklat/' . $filename;
                } else {
                    $dataInput[$field] = null;
                }
            }

            sabha12::create($dataInput);

            return redirect()->route('12diklat.index')
                ->with('success', 'Agenda DIKLAT berhasil ditambahkan!');

        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menyimpan data: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function diklatupdate(Request $request, $id)
    {
        // Validasi semua field sesuai struktur database lengkap
        $request->validate([
            'sabha1' => 'required|string',
            'sabha2' => 'nullable|string',
            'sabha3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha4' => 'nullable|string', // Laporan event (teks 5 paragraf)
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha6' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha7' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha8' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha9' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha10' => 'nullable|string',
            'sabhaberkas1' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas4' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
        ]);

        try {
            $data = sabha12::findOrFail($id);

            // Update field teks
            $data->sabha1 = $request->sabha1;
            $data->sabha2 = $request->sabha2;
            $data->sabha4 = $request->sabha4;
            $data->sabha10 = $request->sabha10;

            // Daftar semua field gambar
            $imageFields = [
                'sabha3', 'sabha5', 'sabha6', 'sabha7', 'sabha8', 'sabha9',
                'sabhaberkas1', 'sabhaberkas2', 'sabhaberkas3', 'sabhaberkas4', 'sabhaberkas5'
            ];

            // Proses upload gambar (jika ada file baru)
            foreach ($imageFields as $field) {
                if ($request->hasFile($field)) {
                    // Hapus file lama jika ada
                    if ($data->$field && file_exists(public_path($data->$field))) {
                        unlink(public_path($data->$field));
                    }

                    // Upload file baru
                    $file = $request->file($field);
                    $filename = time() . '_' . $field . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                    $file->move(public_path('foto_diklat'), $filename);
                    $data->$field = 'foto_diklat/' . $filename;
                }
                // Jika tidak ada file baru, biarkan field tetap dengan nilai lama
            }

            $data->save();

            return redirect()->route('12diklat.index')
                ->with('success', 'Agenda DIKLAT berhasil diperbarui!');

        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui data: ' . $e->getMessage())->withInput();
        }
    }


public function diklatdelete($id)
{
    try {
        $data = sabha12::findOrFail($id);
        for ($i = 3; $i <= 7; $i++) {
            $field = 'sabha' . $i;
            if ($data->$field && file_exists(public_path($data->$field))) {
                unlink(public_path($data->$field));
            }
        }
        $data->delete();

        return redirect()->route('12diklat.index')
            ->with('error', 'Agenda Diklat berhasil dihapus!');

    } catch (\Exception $e) {
        return back()->with('error', 'Gagal menghapus data: ' . $e->getMessage());
    }
}

// MENU 13 FAMILY GATHERING

    public function adminfam(Request $request)
            {
                $search = $request->search;
                $perPage = $request->per_page ?? 5;

                $data = sabha13::when($search, function($q) use ($search) {
                    return $q->where('sabha1', 'LIKE', "%$search%")
                            ->orWhere('sabha2', 'LIKE', "%$search%")
                            ->orWhere('sabha3', 'LIKE', "%$search%")
                            ->orWhere('sabha4', 'LIKE', "%$search%")
                            ->orWhere('sabha5', 'LIKE', "%$search%");
                })
                ->orderBy('created_at', 'desc')
                ->paginate($perPage)
                ->appends(['search' => $search, 'per_page' => $perPage]);

                return view('backend.02_event.05_fam.01_adminfam', [
                    'title' => 'Sabhagiriwana17 | family gathering',
                    'user'  => Auth::user(),
                    'data'  => $data,
                ]);
            }


  public function famcreate(Request $request)
    {
        // Validasi semua field sesuai struktur database lengkap
        $request->validate([
            'sabha1' => 'required|string',
            'sabha2' => 'nullable|string',
            'sabha3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha4' => 'nullable|string', // Laporan event (teks 5 paragraf)
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha6' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha7' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha8' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha9' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha10' => 'nullable|string',
            'sabhaberkas1' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas4' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
        ]);

        try {
            // Data dasar (field teks)
            $dataInput = [
                'sabha1' => $request->sabha1,
                'sabha2' => $request->sabha2,
                'sabha4' => $request->sabha4,
                'sabha10' => $request->sabha10,
            ];

            // Daftar semua field gambar
            $imageFields = [
                'sabha3', 'sabha5', 'sabha6', 'sabha7', 'sabha8', 'sabha9',
                'sabhaberkas1', 'sabhaberkas2', 'sabhaberkas3', 'sabhaberkas4', 'sabhaberkas5'
            ];

            // Proses upload gambar
            foreach ($imageFields as $field) {
                if ($request->hasFile($field)) {
                    $file = $request->file($field);
                    $filename = time() . '_' . $field . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                    $file->move(public_path('foto_fam'), $filename);
                    $dataInput[$field] = 'foto_fam/' . $filename;
                } else {
                    $dataInput[$field] = null;
                }
            }

            sabha13::create($dataInput);

            return redirect()->route('13fam.index')
                ->with('success', 'Agenda FAMGATHERING berhasil ditambahkan!');

        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menyimpan data: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function famupdate(Request $request, $id)
    {
        // Validasi semua field sesuai struktur database lengkap
        $request->validate([
            'sabha1' => 'required|string',
            'sabha2' => 'nullable|string',
            'sabha3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha4' => 'nullable|string', // Laporan event (teks 5 paragraf)
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha6' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha7' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha8' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha9' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha10' => 'nullable|string',
            'sabhaberkas1' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas4' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
        ]);

        try {
            $data = sabha13::findOrFail($id);

            // Update field teks
            $data->sabha1 = $request->sabha1;
            $data->sabha2 = $request->sabha2;
            $data->sabha4 = $request->sabha4;
            $data->sabha10 = $request->sabha10;

            // Daftar semua field gambar
            $imageFields = [
                'sabha3', 'sabha5', 'sabha6', 'sabha7', 'sabha8', 'sabha9',
                'sabhaberkas1', 'sabhaberkas2', 'sabhaberkas3', 'sabhaberkas4', 'sabhaberkas5'
            ];

            // Proses upload gambar (jika ada file baru)
            foreach ($imageFields as $field) {
                if ($request->hasFile($field)) {
                    // Hapus file lama jika ada
                    if ($data->$field && file_exists(public_path($data->$field))) {
                        unlink(public_path($data->$field));
                    }

                    // Upload file baru
                    $file = $request->file($field);
                    $filename = time() . '_' . $field . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                    $file->move(public_path('foto_fam'), $filename);
                    $data->$field = 'foto_fam/' . $filename;
                }
                // Jika tidak ada file baru, biarkan field tetap dengan nilai lama
            }

            $data->save();

            return redirect()->route('13fam.index')
                ->with('success', 'Agenda FAMGATHERING berhasil diperbarui!');

        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui data: ' . $e->getMessage())->withInput();
        }
    }


public function famdelete($id)
{
    try {
        $data = sabha13::findOrFail($id);
        for ($i = 3; $i <= 7; $i++) {
            $field = 'sabha' . $i;
            if ($data->$field && file_exists(public_path($data->$field))) {
                unlink(public_path($data->$field));
            }
        }
        $data->delete();

        return redirect()->route('13fam.index')
            ->with('error', 'Agenda Family Gathering berhasil dihapus!');

    } catch (\Exception $e) {
        return back()->with('error', 'Gagal menghapus data: ' . $e->getMessage());
    }
}

// MENU 14 MUSYAWARAH BESAR

    public function adminmubes(Request $request)
            {
                $search = $request->search;
                $perPage = $request->per_page ?? 5;

                $data = sabha14::when($search, function($q) use ($search) {
                    return $q->where('sabha1', 'LIKE', "%$search%")
                            ->orWhere('sabha2', 'LIKE', "%$search%")
                            ->orWhere('sabha3', 'LIKE', "%$search%")
                            ->orWhere('sabha4', 'LIKE', "%$search%")
                            ->orWhere('sabha5', 'LIKE', "%$search%");
                })
                ->orderBy('created_at', 'desc')
                ->paginate($perPage)
                ->appends(['search' => $search, 'per_page' => $perPage]);

                return view('backend.02_event.06_mubes.01_adminmubes', [
                    'title' => 'Sabhagiriwana17 | mubes',
                    'user'  => Auth::user(),
                    'data'  => $data,
                ]);
            }


 public function mubescreate(Request $request)
    {
        // Validasi semua field sesuai struktur database lengkap
        $request->validate([
            'sabha1' => 'required|string',
            'sabha2' => 'nullable|string',
            'sabha3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha4' => 'nullable|string', // Laporan event (teks 5 paragraf)
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha6' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha7' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha8' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha9' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha10' => 'nullable|string',
            'sabhaberkas1' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas4' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
        ]);

        try {
            // Data dasar (field teks)
            $dataInput = [
                'sabha1' => $request->sabha1,
                'sabha2' => $request->sabha2,
                'sabha4' => $request->sabha4,
                'sabha10' => $request->sabha10,
            ];

            // Daftar semua field gambar
            $imageFields = [
                'sabha3', 'sabha5', 'sabha6', 'sabha7', 'sabha8', 'sabha9',
                'sabhaberkas1', 'sabhaberkas2', 'sabhaberkas3', 'sabhaberkas4', 'sabhaberkas5'
            ];

            // Proses upload gambar
            foreach ($imageFields as $field) {
                if ($request->hasFile($field)) {
                    $file = $request->file($field);
                    $filename = time() . '_' . $field . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                    $file->move(public_path('foto_mubes'), $filename);
                    $dataInput[$field] = 'foto_mubes/' . $filename;
                } else {
                    $dataInput[$field] = null;
                }
            }

            sabha14::create($dataInput);

            return redirect()->route('14mubes.index')
                ->with('success', 'Agenda MUBES berhasil ditambahkan!');

        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menyimpan data: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function mubesupdate(Request $request, $id)
    {
        // Validasi semua field sesuai struktur database lengkap
        $request->validate([
            'sabha1' => 'required|string',
            'sabha2' => 'nullable|string',
            'sabha3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha4' => 'nullable|string', // Laporan event (teks 5 paragraf)
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha6' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha7' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha8' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha9' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha10' => 'nullable|string',
            'sabhaberkas1' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas4' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
        ]);

        try {
            $data = sabha14::findOrFail($id);

            // Update field teks
            $data->sabha1 = $request->sabha1;
            $data->sabha2 = $request->sabha2;
            $data->sabha4 = $request->sabha4;
            $data->sabha10 = $request->sabha10;

            // Daftar semua field gambar
            $imageFields = [
                'sabha3', 'sabha5', 'sabha6', 'sabha7', 'sabha8', 'sabha9',
                'sabhaberkas1', 'sabhaberkas2', 'sabhaberkas3', 'sabhaberkas4', 'sabhaberkas5'
            ];

            // Proses upload gambar (jika ada file baru)
            foreach ($imageFields as $field) {
                if ($request->hasFile($field)) {
                    // Hapus file lama jika ada
                    if ($data->$field && file_exists(public_path($data->$field))) {
                        unlink(public_path($data->$field));
                    }

                    // Upload file baru
                    $file = $request->file($field);
                    $filename = time() . '_' . $field . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                    $file->move(public_path('foto_mubes'), $filename);
                    $data->$field = 'foto_mubes/' . $filename;
                }
                // Jika tidak ada file baru, biarkan field tetap dengan nilai lama
            }

            $data->save();

            return redirect()->route('14mubes.index')
                ->with('success', 'Agenda MUBES berhasil diperbarui!');

        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui data: ' . $e->getMessage())->withInput();
        }
    }


public function mubesdelete($id)
{
    try {
        $data = sabha14::findOrFail($id);
        for ($i = 3; $i <= 7; $i++) {
            $field = 'sabha' . $i;
            if ($data->$field && file_exists(public_path($data->$field))) {
                unlink(public_path($data->$field));
            }
        }
        $data->delete();

        return redirect()->route('14mubes.index')
            ->with('error', 'Agenda Mubes berhasil dihapus!');

    } catch (\Exception $e) {
        return back()->with('error', 'Gagal menghapus data: ' . $e->getMessage());
    }
}


// MENU 15 RUA

    public function adminrua(Request $request)
            {
                $search = $request->search;
                $perPage = $request->per_page ?? 5;

                $data = sabha15::when($search, function($q) use ($search) {
                    return $q->where('sabha1', 'LIKE', "%$search%")
                            ->orWhere('sabha2', 'LIKE', "%$search%")
                            ->orWhere('sabha3', 'LIKE', "%$search%")
                            ->orWhere('sabha4', 'LIKE', "%$search%")
                            ->orWhere('sabha5', 'LIKE', "%$search%");
                })
                ->orderBy('created_at', 'desc')
                ->paginate($perPage)
                ->appends(['search' => $search, 'per_page' => $perPage]);

                return view('backend.02_event.07_rua.01_adminrua', [
                    'title' => 'Sabhagiriwana17 | rua',
                    'user'  => Auth::user(),
                    'data'  => $data,
                ]);
            }


 public function ruacreate(Request $request)
    {
        // Validasi semua field sesuai struktur database lengkap
        $request->validate([
            'sabha1' => 'required|string',
            'sabha2' => 'nullable|string',
            'sabha3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha4' => 'nullable|string', // Laporan event (teks 5 paragraf)
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha6' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha7' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha8' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha9' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha10' => 'nullable|string',
            'sabhaberkas1' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas4' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
        ]);

        try {
            // Data dasar (field teks)
            $dataInput = [
                'sabha1' => $request->sabha1,
                'sabha2' => $request->sabha2,
                'sabha4' => $request->sabha4,
                'sabha10' => $request->sabha10,
            ];

            // Daftar semua field gambar
            $imageFields = [
                'sabha3', 'sabha5', 'sabha6', 'sabha7', 'sabha8', 'sabha9',
                'sabhaberkas1', 'sabhaberkas2', 'sabhaberkas3', 'sabhaberkas4', 'sabhaberkas5'
            ];

            // Proses upload gambar
            foreach ($imageFields as $field) {
                if ($request->hasFile($field)) {
                    $file = $request->file($field);
                    $filename = time() . '_' . $field . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                    $file->move(public_path('foto_rua'), $filename);
                    $dataInput[$field] = 'foto_rua/' . $filename;
                } else {
                    $dataInput[$field] = null;
                }
            }

            sabha15::create($dataInput);

            return redirect()->route('15rua.index')
                ->with('success', 'Agenda RUA berhasil ditambahkan!');

        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menyimpan data: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function ruaupdate(Request $request, $id)
    {
        // Validasi semua field sesuai struktur database lengkap
        $request->validate([
            'sabha1' => 'required|string',
            'sabha2' => 'nullable|string',
            'sabha3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha4' => 'nullable|string', // Laporan event (teks 5 paragraf)
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha6' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha7' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha8' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha9' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha10' => 'nullable|string',
            'sabhaberkas1' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas4' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
        ]);

        try {
            $data = sabha15::findOrFail($id);

            // Update field teks
            $data->sabha1 = $request->sabha1;
            $data->sabha2 = $request->sabha2;
            $data->sabha4 = $request->sabha4;
            $data->sabha10 = $request->sabha10;

            // Daftar semua field gambar
            $imageFields = [
                'sabha3', 'sabha5', 'sabha6', 'sabha7', 'sabha8', 'sabha9',
                'sabhaberkas1', 'sabhaberkas2', 'sabhaberkas3', 'sabhaberkas4', 'sabhaberkas5'
            ];

            // Proses upload gambar (jika ada file baru)
            foreach ($imageFields as $field) {
                if ($request->hasFile($field)) {
                    // Hapus file lama jika ada
                    if ($data->$field && file_exists(public_path($data->$field))) {
                        unlink(public_path($data->$field));
                    }

                    // Upload file baru
                    $file = $request->file($field);
                    $filename = time() . '_' . $field . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                    $file->move(public_path('foto_rua'), $filename);
                    $data->$field = 'foto_rua/' . $filename;
                }
                // Jika tidak ada file baru, biarkan field tetap dengan nilai lama
            }

            $data->save();

            return redirect()->route('15rua.index')
                ->with('success', 'Agenda RUA berhasil diperbarui!');

        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui data: ' . $e->getMessage())->withInput();
        }
    }

public function ruadelete($id)
{
    try {
        $data = sabha15::findOrFail($id);
        for ($i = 3; $i <= 7; $i++) {
            $field = 'sabha' . $i;
            if ($data->$field && file_exists(public_path($data->$field))) {
                unlink(public_path($data->$field));
            }
        }
        $data->delete();

        return redirect()->route('15rua.index')
            ->with('error', 'Agenda Rua berhasil dihapus!');

    } catch (\Exception $e) {
        return back()->with('error', 'Gagal menghapus data: ' . $e->getMessage());
    }
}

// MENU 16 ULTAH

    public function adminultah(Request $request)
            {
                $search = $request->search;
                $perPage = $request->per_page ?? 5;

                $data = sabha16::when($search, function($q) use ($search) {
                    return $q->where('sabha1', 'LIKE', "%$search%")
                            ->orWhere('sabha2', 'LIKE', "%$search%")
                            ->orWhere('sabha3', 'LIKE', "%$search%")
                            ->orWhere('sabha4', 'LIKE', "%$search%")
                            ->orWhere('sabha5', 'LIKE', "%$search%");
                })
                ->orderBy('created_at', 'desc')
                ->paginate($perPage)
                ->appends(['search' => $search, 'per_page' => $perPage]);

                return view('backend.02_event.08_ultah.01_adminultah', [
                    'title' => 'Sabhagiriwana17 | ultah',
                    'user'  => Auth::user(),
                    'data'  => $data,
                ]);
            }


 public function ultahcreate(Request $request)
    {
        // Validasi semua field sesuai struktur database lengkap
        $request->validate([
            'sabha1' => 'required|string',
            'sabha2' => 'nullable|string',
            'sabha3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha4' => 'nullable|string', // Laporan event (teks 5 paragraf)
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha6' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha7' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha8' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha9' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha10' => 'nullable|string',
            'sabhaberkas1' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas4' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
        ]);

        try {
            // Data dasar (field teks)
            $dataInput = [
                'sabha1' => $request->sabha1,
                'sabha2' => $request->sabha2,
                'sabha4' => $request->sabha4,
                'sabha10' => $request->sabha10,
            ];

            // Daftar semua field gambar
            $imageFields = [
                'sabha3', 'sabha5', 'sabha6', 'sabha7', 'sabha8', 'sabha9',
                'sabhaberkas1', 'sabhaberkas2', 'sabhaberkas3', 'sabhaberkas4', 'sabhaberkas5'
            ];

            // Proses upload gambar
            foreach ($imageFields as $field) {
                if ($request->hasFile($field)) {
                    $file = $request->file($field);
                    $filename = time() . '_' . $field . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                    $file->move(public_path('foto_ultah'), $filename);
                    $dataInput[$field] = 'foto_ultah/' . $filename;
                } else {
                    $dataInput[$field] = null;
                }
            }

            sabha16::create($dataInput);

            return redirect()->route('16ultah.index')
                ->with('success', 'Agenda ULTAH berhasil ditambahkan!');

        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menyimpan data: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function ultahupdate(Request $request, $id)
    {
        // Validasi semua field sesuai struktur database lengkap
        $request->validate([
            'sabha1' => 'required|string',
            'sabha2' => 'nullable|string',
            'sabha3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha4' => 'nullable|string', // Laporan event (teks 5 paragraf)
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha6' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha7' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha8' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha9' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha10' => 'nullable|string',
            'sabhaberkas1' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas4' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
        ]);

        try {
            $data = sabha16::findOrFail($id);

            // Update field teks
            $data->sabha1 = $request->sabha1;
            $data->sabha2 = $request->sabha2;
            $data->sabha4 = $request->sabha4;
            $data->sabha10 = $request->sabha10;

            // Daftar semua field gambar
            $imageFields = [
                'sabha3', 'sabha5', 'sabha6', 'sabha7', 'sabha8', 'sabha9',
                'sabhaberkas1', 'sabhaberkas2', 'sabhaberkas3', 'sabhaberkas4', 'sabhaberkas5'
            ];

            // Proses upload gambar (jika ada file baru)
            foreach ($imageFields as $field) {
                if ($request->hasFile($field)) {
                    // Hapus file lama jika ada
                    if ($data->$field && file_exists(public_path($data->$field))) {
                        unlink(public_path($data->$field));
                    }

                    // Upload file baru
                    $file = $request->file($field);
                    $filename = time() . '_' . $field . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                    $file->move(public_path('foto_ultah'), $filename);
                    $data->$field = 'foto_ultah/' . $filename;
                }
                // Jika tidak ada file baru, biarkan field tetap dengan nilai lama
            }

            $data->save();

            return redirect()->route('16ultah.index')
                ->with('success', 'Agenda ULTAH berhasil diperbarui!');

        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui data: ' . $e->getMessage())->withInput();
        }
    }


public function ultahdelete($id)
{
    try {
        $data = sabha16::findOrFail($id);
        for ($i = 3; $i <= 7; $i++) {
            $field = 'sabha' . $i;
            if ($data->$field && file_exists(public_path($data->$field))) {
                unlink(public_path($data->$field));
            }
        }
        $data->delete();

        return redirect()->route('16ultah.index')
            ->with('error', 'Agenda Ultah berhasil dihapus!');

    } catch (\Exception $e) {
        return back()->with('error', 'Gagal menghapus data: ' . $e->getMessage());
    }
}

// MENU 17 PEDULI

    public function adminpeduli(Request $request)
            {
                $search = $request->search;
                $perPage = $request->per_page ?? 5;

                $data = sabha17::when($search, function($q) use ($search) {
                    return $q->where('sabha1', 'LIKE', "%$search%")
                            ->orWhere('sabha2', 'LIKE', "%$search%")
                            ->orWhere('sabha3', 'LIKE', "%$search%")
                            ->orWhere('sabha4', 'LIKE', "%$search%")
                            ->orWhere('sabha5', 'LIKE', "%$search%");
                })
                ->orderBy('created_at', 'desc')
                ->paginate($perPage)
                ->appends(['search' => $search, 'per_page' => $perPage]);

                return view('backend.02_event.09_peduli.01_adminpeduli', [
                    'title' => 'Sabhagiriwana17 | sabha peduli',
                    'user'  => Auth::user(),
                    'data'  => $data,
                ]);
            }


 public function pedulicreate(Request $request)
    {
        // Validasi dengan field baru (sabha4 = laporan, sabha5-sabha9 + sabhaberkas1-sabhaberkas5 = 10 foto)
        $request->validate([
            'sabha1' => 'required|string', // Nama event & narasi
            'sabha2' => 'nullable|string', // Waktu & lokasi
            'sabha3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480', // Poster
            'sabha4' => 'nullable|string', // Laporan event (5 paragraf)
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480', // Foto 1
            'sabha6' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480', // Foto 2
            'sabha7' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480', // Foto 3
            'sabha8' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480', // Foto 4
            'sabha9' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480', // Foto 5
            'sabhaberkas1' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480', // Foto 6
            'sabhaberkas2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480', // Foto 7
            'sabhaberkas3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480', // Foto 8
            'sabhaberkas4' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480', // Foto 9
            'sabhaberkas5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480', // Foto 10
            'sabha10' => 'nullable|string', // Keterangan tambahan
        ]);

        try {
            // Data awal
            $dataInput = [
                'sabha1' => $request->sabha1,
                'sabha2' => $request->sabha2,
                'sabha4' => $request->sabha4,
                'sabha10' => $request->sabha10,
            ];

            // Daftar semua field foto (poster + 10 dokumentasi)
            $fotoFields = [
                'sabha3',  // Poster
                'sabha5', 'sabha6', 'sabha7', 'sabha8', 'sabha9',
                'sabhaberkas1', 'sabhaberkas2', 'sabhaberkas3', 'sabhaberkas4', 'sabhaberkas5'
            ];

            foreach ($fotoFields as $field) {
                if ($request->hasFile($field)) {
                    $file = $request->file($field);
                    $filename = time() . '_' . $field . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                    $file->move(public_path('foto_snoc'), $filename);
                    $dataInput[$field] = 'foto_snoc/' . $filename;
                } else {
                    $dataInput[$field] = null;
                }
            }

            sabha17::create($dataInput);

            return redirect()->route('17peduli.index')
                ->with('success', 'Agenda SABHA PEDULI berhasil ditambahkan!');

        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menyimpan data: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function peduliupdate(Request $request, $id)
    {
        // Validasi dengan field baru
        $request->validate([
            'sabha1' => 'required|string',
            'sabha2' => 'nullable|string',
            'sabha3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha4' => 'nullable|string',
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha6' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha7' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha8' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha9' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas1' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas4' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabhaberkas5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha10' => 'nullable|string',
        ]);

        try {
            $data = sabha17::findOrFail($id);

            // Update field teks
            $data->sabha1 = $request->sabha1;
            $data->sabha2 = $request->sabha2;
            $data->sabha4 = $request->sabha4;
            $data->sabha10 = $request->sabha10;

            // Daftar semua field foto
            $fotoFields = [
                'sabha3',  // Poster
                'sabha5', 'sabha6', 'sabha7', 'sabha8', 'sabha9',
                'sabhaberkas1', 'sabhaberkas2', 'sabhaberkas3', 'sabhaberkas4', 'sabhaberkas5'
            ];

            foreach ($fotoFields as $field) {
                if ($request->hasFile($field)) {
                    // Hapus file lama jika ada
                    if ($data->$field && file_exists(public_path($data->$field))) {
                        unlink(public_path($data->$field));
                    }

                    $file = $request->file($field);
                    $filename = time() . '_' . $field . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                    $file->move(public_path('foto_snoc'), $filename);
                    $data->$field = 'foto_snoc/' . $filename;
                }
                // Jika tidak ada file baru, biarkan nilai lama tetap
            }

            $data->save();

            return redirect()->route('17peduli.index')
                ->with('warning', 'Agenda SABHA PEDULI berhasil diperbarui!');

        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui data: ' . $e->getMessage())->withInput();
        }
    }
public function pedulidelete($id)
{
    try {
        $data = sabha17::findOrFail($id);
        for ($i = 3; $i <= 7; $i++) {
            $field = 'sabha' . $i;
            if ($data->$field && file_exists(public_path($data->$field))) {
                unlink(public_path($data->$field));
            }
        }
        $data->delete();

        return redirect()->route('17peduli.index')
            ->with('error', 'Agenda Sabha Peduli berhasil dihapus!');

    } catch (\Exception $e) {
        return back()->with('error', 'Gagal menghapus data: ' . $e->getMessage());
    }
}

// MENU 18 BERITA

    public function adminberita(Request $request)
            {
                $search = $request->search;
                $perPage = $request->per_page ?? 5;

                $data = sabha18::when($search, function($q) use ($search) {
                    return $q->where('sabha1', 'LIKE', "%$search%")
                            ->orWhere('sabha2', 'LIKE', "%$search%")
                            ->orWhere('sabha3', 'LIKE', "%$search%")
                            ->orWhere('sabha4', 'LIKE', "%$search%")
                            ->orWhere('sabha5', 'LIKE', "%$search%");
                })
                ->orderBy('created_at', 'desc')
                ->paginate($perPage)
                ->appends(['search' => $search, 'per_page' => $perPage]);

                return view('backend.03_berita.01_berita.01_adminberita', [
                    'title' => 'Sabhagiriwana17 | Berita ',
                    'user'  => Auth::user(),
                    'data'  => $data,
                ]);
            }

    public function beritacreate(Request $request)
    {
        // Validasi input
        $request->validate([
            'sabha1' => 'required|string|max:255', // Judul wajib
            'sabha2' => 'nullable|string', // Paragraf 1
            'sabha3' => 'nullable|string', // Paragraf 2
            'sabha4' => 'nullable|string', // Paragraf 3
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480', // 20MB
            'sabha6' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha7' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha8' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha9' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
        ]);

        try {
            // Data awal: judul + 3 paragraf
            $dataInput = [
                'sabha1' => $request->sabha1,
                'sabha2' => $request->sabha2,
                'sabha3' => $request->sabha3,
                'sabha4' => $request->sabha4,
            ];

            // Proses upload 5 foto (sabha5 - sabha9)
            for ($i = 5; $i <= 9; $i++) {
                $field = 'sabha' . $i;
                if ($request->hasFile($field)) {
                    $file = $request->file($field);
                    $filename = time() . '_' . $i . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                    $file->move(public_path('foto_berita'), $filename);
                    $dataInput[$field] = 'foto_berita/' . $filename;
                } else {
                    $dataInput[$field] = null;
                }
            }

            // Simpan ke database
            sabha18::create($dataInput);

            return redirect()->route('18berita.index')
                ->with('success', 'Berita berhasil ditambahkan!');

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal menyimpan data: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Mengupdate data berita (UPDATE)
     * Route: PUT /beritaupdate/{id}
     * Name: berita.update
     */
    public function beritaupdate(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'sabha1' => 'required|string|max:255',
            'sabha2' => 'nullable|string',
            'sabha3' => 'nullable|string',
            'sabha4' => 'nullable|string',
            'sabha5' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha6' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha7' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha8' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'sabha9' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
        ]);

        try {
            $data = sabha18::findOrFail($id);

            // Update judul + 3 paragraf
            $data->sabha1 = $request->sabha1;
            $data->sabha2 = $request->sabha2;
            $data->sabha3 = $request->sabha3;
            $data->sabha4 = $request->sabha4;

            // Proses upload 5 foto (sabha5 - sabha9)
            for ($i = 5; $i <= 9; $i++) {
                $field = 'sabha' . $i;
                if ($request->hasFile($field)) {
                    // Hapus foto lama jika ada
                    if ($data->$field && file_exists(public_path($data->$field))) {
                        unlink(public_path($data->$field));
                    }
                    // Upload foto baru
                    $file = $request->file($field);
                    $filename = time() . '_' . $i . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                    $file->move(public_path('foto_berita'), $filename);
                    $data->$field = 'foto_berita/' . $filename;
                }
                // Jika tidak ada file baru, biarkan field tetap dengan nilai lama
            }

            $data->save();

            return redirect()->route('18berita.index')
                ->with('warning', 'Berita berhasil diperbarui!');

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal memperbarui data: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Menghapus data berita (DELETE)
     * Route: DELETE /18berita/{id}
     * Name: 18berita.destroy
     */
    public function beritadelete($id)
    {
        try {
            $data = sabha18::findOrFail($id);

            // Hapus semua foto yang ada (sabha5 - sabha9)
            for ($i = 5; $i <= 9; $i++) {
                $field = 'sabha' . $i;
                if ($data->$field && file_exists(public_path($data->$field))) {
                    unlink(public_path($data->$field));
                }
            }

            $data->delete();

            return redirect()->route('18berita.index')
                ->with('error', 'Berita berhasil dihapus!');

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal menghapus data: ' . $e->getMessage());
        }
    }


// MENU 19 ARTIKEL

    public function adminartikel(Request $request)
            {
                $search = $request->search;
                $perPage = $request->per_page ?? 5;

                $data = sabha19::when($search, function($q) use ($search) {
                    return $q->where('sabha1', 'LIKE', "%$search%")
                            ->orWhere('sabha2', 'LIKE', "%$search%")
                            ->orWhere('sabha3', 'LIKE', "%$search%")
                            ->orWhere('sabha4', 'LIKE', "%$search%")
                            ->orWhere('sabha5', 'LIKE', "%$search%");
                })
                ->orderBy('created_at', 'desc')
                ->paginate($perPage)
                ->appends(['search' => $search, 'per_page' => $perPage]);

                return view('backend.03_berita.02_artikel.01_adminartikel', [
                    'title' => 'Sabhagiriwana17 | Artikel ',
                    'user'  => Auth::user(),
                    'data'  => $data,
                ]);
            }

    public function artikelcreate(Request $request)
    {
        $request->validate([
            'sabha1' => 'required|string|max:255',
            'sabha2' => 'nullable|string',
            'sabha3' => 'nullable|file|max:51200', // 50MB
            'sabha4' => 'nullable|file|max:51200',
        ], [
            'sabha1.required' => 'Judul artikel wajib diisi!',
            'sabha3.max' => 'Ukuran file 1 maksimal 50MB!',
            'sabha4.max' => 'Ukuran file 2 maksimal 50MB!',
        ]);

        try {
            $data = [
                'sabha1' => $request->sabha1,
                'sabha2' => $request->sabha2,
            ];

            // Upload sabha3
            if ($request->hasFile('sabha3')) {
                $file = $request->file('sabha3');
                $filename = time() . '_artikel1_' . preg_replace('/[^a-zA-Z0-9._-]/', '', pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('foto_artikel'), $filename);
                $data['sabha3'] = 'foto_artikel/' . $filename;
            }

            // Upload sabha4
            if ($request->hasFile('sabha4')) {
                $file = $request->file('sabha4');
                $filename = time() . '_artikel2_' . preg_replace('/[^a-zA-Z0-9._-]/', '', pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('foto_artikel'), $filename);
                $data['sabha4'] = 'foto_artikel/' . $filename;
            }

            sabha19::create($data);

            return redirect()->route('19artikel.index')
                ->with('success', 'Artikel berhasil ditambahkan!');
        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal menyimpan: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Mengupdate artikel yang sudah ada
     * Route: PUT /artikelupdate/{id}
     * Name: artikel.update
     */
    public function artikelupdate(Request $request, $id)
    {
        $request->validate([
            'sabha1' => 'required|string|max:255',
            'sabha2' => 'nullable|string',
            'sabha3' => 'nullable|file|max:51200',
            'sabha4' => 'nullable|file|max:51200',
        ], [
            'sabha1.required' => 'Judul artikel wajib diisi!',
            'sabha3.max' => 'Ukuran file 1 maksimal 50MB!',
            'sabha4.max' => 'Ukuran file 2 maksimal 50MB!',
        ]);

        try {
            $artikel = sabha19::findOrFail($id);

            $artikel->sabha1 = $request->sabha1;
            $artikel->sabha2 = $request->sabha2;

            // Upload sabha3 (ganti file)
            if ($request->hasFile('sabha3')) {
                if ($artikel->sabha3 && file_exists(public_path($artikel->sabha3))) {
                    unlink(public_path($artikel->sabha3));
                }
                $file = $request->file('sabha3');
                $filename = time() . '_artikel1_' . preg_replace('/[^a-zA-Z0-9._-]/', '', pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('foto_artikel'), $filename);
                $artikel->sabha3 = 'foto_artikel/' . $filename;
            }

            // Upload sabha4 (ganti file)
            if ($request->hasFile('sabha4')) {
                if ($artikel->sabha4 && file_exists(public_path($artikel->sabha4))) {
                    unlink(public_path($artikel->sabha4));
                }
                $file = $request->file('sabha4');
                $filename = time() . '_artikel2_' . preg_replace('/[^a-zA-Z0-9._-]/', '', pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('foto_artikel'), $filename);
                $artikel->sabha4 = 'foto_artikel/' . $filename;
            }

            $artikel->save();

            return redirect()->route('19artikel.index')
                ->with('warning', 'Artikel berhasil diperbarui!');
        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal memperbarui: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Menghapus artikel beserta file-file terkait
     * Route: DELETE /19artikel/{id}
     * Name: 19artikel.destroy
     */
    public function artikeldelete($id)
    {
        try {
            $artikel = sabha19::findOrFail($id);

            // Hapus file
            if ($artikel->sabha3 && file_exists(public_path($artikel->sabha3))) {
                unlink(public_path($artikel->sabha3));
            }
            if ($artikel->sabha4 && file_exists(public_path($artikel->sabha4))) {
                unlink(public_path($artikel->sabha4));
            }

            $artikel->delete();

            return redirect()->route('19artikel.index')
                ->with('error', 'Artikel berhasil dihapus!');
        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal menghapus: ' . $e->getMessage());
        }
    }

    /**
     * Download file artikel (sabha3 atau sabha4)
     * Route: GET /artikel/download/{id}/{fileType}
     * Name: artikel.download
     */
    public function artikeldownload($id, $fileType)
    {
        try {
            $artikel = sabha19::findOrFail($id);
            $field = $fileType === '1' ? 'sabha3' : 'sabha4';

            if (!$artikel->$field || !file_exists(public_path($artikel->$field))) {
                return back()->with('error', 'File tidak ditemukan!');
            }

            $filePath = public_path($artikel->$field);
            $fileName = basename($filePath);

            return response()->download($filePath, $fileName);
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal download: ' . $e->getMessage());
        }
    }



    // MENU 20 PENGUMUMAN

    public function adminpengumuman(Request $request)
            {
                $search = $request->search;
                $perPage = $request->per_page ?? 5;

                $data = sabha20::when($search, function($q) use ($search) {
                    return $q->where('sabha1', 'LIKE', "%$search%")
                            ->orWhere('sabha2', 'LIKE', "%$search%");
                })
                ->orderBy('created_at', 'desc')
                ->paginate($perPage)
                ->appends(['search' => $search, 'per_page' => $perPage]);

                return view('backend.03_berita.03_pengumuman.01_adminpengumuman', [
                    'title' => 'Sabhagiriwana17 | Pengumuman ',
                    'user'  => Auth::user(),
                    'data'  => $data,
                ]);
            }

    public function pengumumancreate(Request $request)
    {
        $request->validate([
            'sabha1' => 'required|string',
            'sabha2' => 'nullable|file|max:51200', // 50MB
        ], [
            'sabha1.required' => 'Judul pengumuman wajib diisi!',
            'sabha2.max' => 'Ukuran file maksimal 50MB!',
        ]);

        try {
            $data = [
                'sabha1' => $request->sabha1,
            ];

            // Upload sabha2
            if ($request->hasFile('sabha2')) {
                $file = $request->file('sabha2');
                $filename = time() . '_pengumuman_' . preg_replace('/[^a-zA-Z0-9._-]/', '', pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('foto_pengumuman'), $filename);
                $data['sabha2'] = 'foto_pengumuman/' . $filename;
            }

            sabha20::create($data);

            return redirect()->route('20pengumuman.index')
                ->with('success', 'Pengumuman berhasil ditambahkan!');
        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal menyimpan: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Mengupdate pengumuman
     * Route: PUT /pengumumanupdate/{id}
     * Name: pengumuman.update
     */
    public function pengumumanupdate(Request $request, $id)
    {
        $request->validate([
            'sabha1' => 'required|string',
            'sabha2' => 'nullable|file|max:51200',
        ], [
            'sabha1.required' => 'Judul pengumuman wajib diisi!',
            'sabha2.max' => 'Ukuran file maksimal 50MB!',
        ]);

        try {
            $pengumuman = sabha20::findOrFail($id);

            $pengumuman->sabha1 = $request->sabha1;

            // Upload sabha2 (ganti file)
            if ($request->hasFile('sabha2')) {
                // Hapus file lama jika ada
                if ($pengumuman->sabha2 && file_exists(public_path($pengumuman->sabha2))) {
                    unlink(public_path($pengumuman->sabha2));
                }
                $file = $request->file('sabha2');
                $filename = time() . '_pengumuman_' . preg_replace('/[^a-zA-Z0-9._-]/', '', pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('foto_pengumuman'), $filename);
                $pengumuman->sabha2 = 'foto_pengumuman/' . $filename;
            }

            $pengumuman->save();

            return redirect()->route('20pengumuman.index')
                ->with('warning', 'Pengumuman berhasil diperbarui!');
        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal memperbarui: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Menghapus pengumuman
     * Route: DELETE /20pengumuman/{id}
     * Name: 20pengumuman.destroy
     */
    public function pengumumandelete($id)
    {
        try {
            $pengumuman = sabha20::findOrFail($id);

            // Hapus file jika ada
            if ($pengumuman->sabha2 && file_exists(public_path($pengumuman->sabha2))) {
                unlink(public_path($pengumuman->sabha2));
            }

            $pengumuman->delete();

            return redirect()->route('20pengumuman.index')
                ->with('error', 'Pengumuman berhasil dihapus!');
        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal menghapus: ' . $e->getMessage());
        }
    }
}




<?php

namespace App\Http\Controllers;

use App\Models\beranda;
use App\Models\sabha1;
use App\Models\sabha2;
use App\Models\sabha3;
use App\Models\sabha4;
use App\Models\sabha5;
use App\Models\sabha6;
use App\Models\sabha7;
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
                            ->orWhere('sabha5', 'LIKE', "%$search%");
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
        'sabha1' => 'nullable|image|mimes:jpeg,png,jpg|max:20120',
        'sabha2' => 'nullable|image|mimes:jpeg,png,jpg|max:20120',
        'sabha3' => 'nullable|image|mimes:jpeg,png,jpg|max:20120',
        'sabha4' => 'nullable|image|mimes:jpeg,png,jpg|max:20120',
        'sabha5' => 'nullable|image|mimes:jpeg,png,jpg|max:20120',
    ]);

    try {
        $fotos = [];
        for ($i = 1; $i <= 5; $i++) {
            $field = 'sabha' . $i;
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $filename = time() . '_' . $i . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
                $file->move(public_path('foto_beranda'), $filename);
                $fotos[$field] = 'foto_beranda/' . $filename;
            } else {
                $fotos[$field] = null;
            }
        }

        $data = beranda::create($fotos);

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
        'sabha1' => 'nullable|image|mimes:jpeg,png,jpg|max:20120',
        'sabha2' => 'nullable|image|mimes:jpeg,png,jpg|max:20120',
        'sabha3' => 'nullable|image|mimes:jpeg,png,jpg|max:20120',
        'sabha4' => 'nullable|image|mimes:jpeg,png,jpg|max:20120',
        'sabha5' => 'nullable|image|mimes:jpeg,png,jpg|max:20120',
    ]);

    try {
        $data = beranda::findOrFail($id);

        for ($i = 1; $i <= 5; $i++) {
            $field = 'sabha' . $i;
            if ($request->hasFile($field)) {
                // Hapus foto lama
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
        $data->save();

        return redirect()->route('00beranda.index')
            ->with('warning', 'Foto Beranda berhasil diperbarui!');

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

    }

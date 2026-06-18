<?php

namespace App\Http\Controllers;

use App\Models\sabha1;
use App\Models\sabha2;
use App\Models\sabha3;
use App\Models\sabha4;
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
    public function adminsekapursirih()
    {
        $data = sabha1::all();

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
    public function adminkepengurusan()
    {
        $data = sabha2::all();

        return view('backend.01_beranda.02_kepengurusan.01_adminkepengurusan', [
            'title' => 'Sabhagiriwana17 | Kepengurusan',
            'user'  => Auth::user(),
            'data'  => $data,
        ]);
    }



    /**
     * Menyimpan data Kepengurusan (CREATE)
     * ✅ Alert Hijau (success)
     *
     * Mapping Field:
     * - sabha1 = Nama Lengkap
     * - sabha2 = Divisi / Jabatan
     * - sabha3 = Jurusan
     * - sabha4 = Keterangan
     * - sabha5 = Foto (upload ke public)
     */
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
    public function adminperaturan()
    {
        $data = sabha3::all();

        return view('backend.01_beranda.03_peraturan.01_adminperaturan', [
            'title' => 'Sabhagiriwana17 | Peraturan',
            'user'  => Auth::user(),
            'data'  => $data,
        ]);
    }



public function peraturancreate(Request $request)
{
    $request->validate([
        'sabha1' => 'nullable|string|max:255', // Judul
        'sabha2' => 'nullable|file|mimes:pdf|max:10240', // PDF 10MB
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
        'sabha2' => 'nullable|file|mimes:pdf|max:10240',
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
    public function admindivisi()
    {
        $data = sabha4::all();

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
        'sabha2' => 'nullable|file|mimes:pdf|max:10240',
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

    }

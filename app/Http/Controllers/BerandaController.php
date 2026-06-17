<?php

namespace App\Http\Controllers;

use App\Models\Sabha1;
use App\Models\sabha2;
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
        $data = Sabha1::all();

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
            $data = Sabha1::create([
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
            $data = Sabha1::findOrFail($id);

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
            $data = Sabha1::findOrFail($id);
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
    // public function sekapursirihcreate(Request $request)
    // {
    //     $request->validate([
    //         'sabha1' => 'nullable|string',
    //         'sabha2' => 'nullable|string',
    //         'sabha3' => 'nullable|string',
    //         'sabha4' => 'nullable|string',
    //     ]);

    //     try {
    //         $data = Sabha1::create([
    //             'sabha1' => $request->sabha1,
    //             'sabha2' => $request->sabha2,
    //             'sabha3' => $request->sabha3,
    //             'sabha4' => $request->sabha4,
    //         ]);

    //         return redirect()->route('01sekapursirih.index')
    //             ->with('success', 'Data Sekapur Sirih berhasil ditambahkan!'); // ✅ HIJAU

    //     } catch (\Exception $e) {
    //         return back()
    //             ->with('error', 'Gagal menyimpan data: ' . $e->getMessage())
    //             ->withInput();
    //     }
    // }

    // /**
    //  * Mengupdate data Sekapur Sirih (UPDATE)
    //  * ⚠️ Alert Kuning (warning)
    //  */
    // public function sekapursirihupdate(Request $request, $id)
    // {
    //     $request->validate([
    //         'sabha1' => 'nullable|string',
    //         'sabha2' => 'nullable|string',
    //         'sabha3' => 'nullable|string',
    //         'sabha4' => 'nullable|string',
    //     ]);

    //     try {
    //         $data = Sabha1::findOrFail($id);

    //         $data->update([
    //             'sabha1' => $request->sabha1,
    //             'sabha2' => $request->sabha2,
    //             'sabha3' => $request->sabha3,
    //             'sabha4' => $request->sabha4,
    //         ]);

    //         return redirect()->route('01sekapursirih.index')
    //             ->with('warning', 'Data Sekapur Sirih berhasil diperbarui!'); // ⚠️ KUNING

    //     } catch (\Exception $e) {
    //         return back()
    //             ->with('error', 'Gagal memperbarui data: ' . $e->getMessage())
    //             ->withInput();
    //     }
    // }

    // /**
    //  * Menghapus data Sekapur Sirih (DELETE)
    //  * ❌ Alert Merah (error)
    //  */
    // public function sekapursirihdelete($id)
    // {
    //     try {
    //         $data = Sabha1::findOrFail($id);
    //         $data->delete();

    //         return redirect()->route('01sekapursirih.index')
    //             ->with('error', 'Data Sekapur Sirih berhasil dihapus!'); // ❌ MERAH

    //     } catch (\Exception $e) {
    //         return back()
    //             ->with('error', 'Gagal menghapus data: ' . $e->getMessage());
    //     }
    // }
}

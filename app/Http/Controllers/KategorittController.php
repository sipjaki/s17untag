<?php

namespace App\Http\Controllers;

use App\Models\Kategorit;
use Illuminate\Http\Request;

class KategorittController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('be_dashboard.daftarkategori.index',[
            'title' => 'Data Kategori Donasi',
            'data_halamankategori' => 'Data Donasi Kategori',

            'data_kategori' => Kategorit::all()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createkategori()
    {
        //

        return view('be_dashboard.daftarkategori.create',[
            'title' => 'Create Kategori',
            'data_halaman' => 'Form Create Kategori',

            // 'data_kategori' => Kategorit::all()

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

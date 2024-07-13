<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pemohonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() // untuk menampilkan semua data
    {
        return view('pemohon.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //untuk menampilkan form memasukan data baru
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //untuk memasukan data baru ke database
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)  //untuk menapilkan detail data
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) //form untuk edit
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)  //menyimpan update data
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) //menghapus data
    {
        //
    }
}

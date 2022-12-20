<?php

namespace App\Http\Controllers;

use App\Models\bunga;
use Illuminate\Http\Request;

class BungaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bunga  $bunga
     * @return \Illuminate\Http\Response
     */
    public function show(bunga $bunga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bunga  $bunga
     * @return \Illuminate\Http\Response
     */
    public function edit(bunga $bunga)
    {
        return view('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bunga  $bunga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bunga $bunga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bunga  $bunga
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bunga::where('id',$id)->delete();

        return redirect('/dashboard')->with('successDelete', 'Berhasil menghapus data Bunga');
    }
}

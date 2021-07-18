<?php

namespace App\Http\Controllers;
use App\Models\Kas;
use App\Models\Kas as ModelsKas;
use App\Models\Pengeluaran;
use App\Models\Pengeluaran as ModelsPengeluaran;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KontrolHasil extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('kas')->sum('jumlah_kas');
        $data2 = DB::table('pengeluaran')->sum('total_hrg');
        $data3 = DB::table('pengeluaran')->Max('total_hrg');
        $data4 = DB::table('pengeluaran')->Min('total_hrg');
        return view('hasil',compact('data','data2','data3','data4'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

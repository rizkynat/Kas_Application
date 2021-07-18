<?php

namespace App\Http\Controllers;
use App\Models\Kas;
use App\Models\Kas as ModelsKas;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KontrolKas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data =Kas::all();
        return view('kas',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tambahKas');
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
        DB::table('kas')->insert([
            'no_kas' => $request->no_kas,
            'jumlah_kas' => $request->jumlah_kas,
            'tgl_kas' => $request->tgl_kas
        ]);
        return redirect('/kas');
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
    public function edit($id_kas)
    {
        //
        $data=DB::table('kas')->where('id_kas',$id_kas)->get();
        //$data =Pengeluaran::find($id_brg);
        return view('editKas',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        DB::table('kas')->where('id_kas',$request->id_kas)->update([
            'no_kas' => $request->no_kas,
            'jumlah_kas' => $request->jumlah_kas,
            'tgl_kas' => $request->tgl_kas,
        ]);
        return redirect('/kas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kas)
    {
        //
        DB::table('kas')->where('id_kas',$id_kas)->delete();
        return redirect('/kas');
    }
}

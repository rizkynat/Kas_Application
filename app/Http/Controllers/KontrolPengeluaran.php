<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pengeluaran;
use App\Models\Pengeluaran as ModelsPengeluaran;
use Illuminate\Support\Facades\DB;
class KontrolPengeluaran extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data =Pengeluaran::all();
        return view('dashboard',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('input');
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
        DB::table('pengeluaran')->insert([
            'nama' => $request->nama,
            'no_brg' => $request->no_brg,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal,
            'total_hrg' =>  $request->harga * $request->jumlah
        ]);
        return redirect('/data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $data =Pengeluaran::all();
        return view('data',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_brg)
    {
        //
        $data=DB::table('pengeluaran')->where('id_brg',$id_brg)->get();
        //$data =Pengeluaran::find($id_brg);
        return view('edit',compact('data'));
        //return view('edit',['pengeluaran' => $data]);
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
        //update tabel pengeluaran
        DB::table('pengeluaran')->where('id_brg',$request->id_brg)->update([
            'nama' => $request->nama,
            'no_brg' => $request->no_brg,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal,
            'total_hrg' =>  $request->harga * $request->jumlah
        ]);
        return redirect('/data');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_brg)
    {
        //hapus data pengeleuaran
        DB::table('pengeluaran')->where('id_brg',$id_brg)->delete();
        return redirect('/data');

    }
    public function cari(Request $request){
        
        $name = $request->name;
        $data = Pengeluaran::where('nama','like',"%".$name."%")
        ->orwhere('harga','like',"%".$name."%")
         ->orwhere('no_brg','like',"%".$name."%")
         ->orwhere('jumlah','like',"%".$name."%")
         ->orwhere('tanggal','like',"%".$name."%")->paginate(5);
        return view('data',compact('data'));
    }
}

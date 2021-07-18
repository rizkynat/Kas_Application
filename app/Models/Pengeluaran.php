<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;
    protected $table='pengeluaran';
    protected $fillable=["id_brg","nama","no_brg","harga","jumlah","tanggal","total_hrg"];

    public function tampilSemua(){
        return Pengeluaran::all();
    }
    
}

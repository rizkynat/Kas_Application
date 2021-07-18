<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kas extends Model
{
    use HasFactory;
    protected $table='kas';
    protected $fillable=["id_kas","no_kas","jumlah_kas","tgl_kas"];

    public function tampilSemua(){
        return Kas::all();
    }
}

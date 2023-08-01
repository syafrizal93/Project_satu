<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian_Model extends Model
{
    use HasFactory;
    protected $table ="pengembalian";
    protected $primaryKey ="id_peminjam";

    public function tampil_pengembalian(){
        $query = \DB::table('pengembalian')->get();
        return $query;
    }

}

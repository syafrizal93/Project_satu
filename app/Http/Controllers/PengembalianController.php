<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian_Model;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index (){
        // return ("Testing Katalog");
        $mypengembalian = new Pengembalian_Model();
         $pengembalian = $mypengembalian->tampil_pengembalian();
         
         $data = array('pengembalian' => $pengembalian);
         return view('pengembalian/index', $data);
    }
         //$pengembalian = $mypengembalian->tampil_pengembalian();
         
        // $data = array('pengembalian' => $pengembalian);
        // return view('pengembalian/index', $data);
    
    public function tambah(){
        // return ('Testing');
        return view('pengembalian/tambah');
    }
    public function tambah_proses(Request $request){
        // return ('Testing Proses');
        $query = \DB::table('pengembalian')
        ->insert([
            'nama_peminjam' => $request->nama_peminjam,
            'tanggal_peminjaman'  =>  $request->tanggal_peminjaman,
            'tanggal_pengembalian'  =>  $request->tanggal_pengembalian,
            
        ]);
        return redirect('pengembalian');
    }
    public function delete ($id_peminjam){
        $query = \DB::table('pengembalian')->where('id_peminjam',$id_peminjam)->delete();
        return redirect('pengembalian');
    }

    public function edit($id_peminjam){
        $data['pengembalian'] = Pengembalian_Model::where('id_peminjam',$id_peminjam)->first();
        return view('pengembalian/edit', $data);
    }

    public function edit_proses(Request $request){
        // return ('Edit Proses');
        $query = Pengembalian_Model::where('id_peminjam',$request->id_peminjam)
        ->update([
            'nama_peminjam' => $request->nama_peminjam,
            'tanggal_peminjaman' => $request->tanggal_peminjaman,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            
        ]);
        return redirect('pengembalian');
    }
}

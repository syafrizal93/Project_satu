@extends('layout1.main2')
@section('content')


<h4><b>Tambah Pengembalian</b></h4>
<br>
<form action="{{ asset('pengembalian/tambah_proses') }}" method="POST">
@csrf

<div class="mb-3 row">
    <label for="nama_peminjam" class="col-sm-2 col-form-label">Nama Peminjam</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam">
    </div>
</div>
<div class="mb-3 row">
    <label for="tanggal_peminjaman" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="tanggal_peminjaman" name="tanggal_peminjaman">
    </div>
</div>
<div class="mb-3 row">
    <label for="tanggal_pengembalian" class="col-sm-2 col-form-label">Tanggal Pengembalian</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian">
    </div>
</div>
<input type="submit" value="Simpan">
</form> 

@endsection
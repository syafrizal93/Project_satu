@extends('layout1.main2')
@section('content')


<h4><b>Edit Data Transaksi</b></h1>
<br>
<form action="{{ asset('pengembalian/edit_proses') }}" method="POST">
@csrf

<input type="hidden" name="id_peminjam" value="{{$pengembalian->id_peminjam}}">
<div class="mb-3 row">
    <label for="nama_peminjam" class="col-sm-2 col-form-label">Nama Peminjam</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_peminjam" value="{{$pengembalian->nama_peminjam}}" name="nama_peminjam">
    </div>
</div>
<div class="mb-3 row">
    <label for="tanggal_peminjaman" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="tanggal_peminjaman" value="{{$pengembalian->tanggal_peminjaman}}" name="tanggal_peminjaman">
    </div>
</div>
<div class="mb-3 row">
    <label for="tanggal_pengembalian" class="col-sm-2 col-form-label">Tanggal Pengembalian</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="tanggal_pengembalian" value="{{$pengembalian->tanggal_pengembalian}}" name="tanggal_pengembalian">
    </div>
</div>

<input type="submit" value="Simpan">
</form>

@endsection
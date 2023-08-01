@extends('layout1.main2')
@section('content')

<h4><b>Data Pengembalian</b></h4>
<br>
<a href="{{ asset('pengembalian/tambah')  }}">Tambah Data</a>
<table class="table table-striped" width="100%">
 <tr class="table-primary">
    <td><b>No</td>
    <td><b>ID_peminjam</td>
    <td><b>Nama peminjam</td>
    <td><b>Tanggal Peminjaman</td>
    <td><b>Tanggal Pengembalian</td>
    <td><b>Aksi</td>
 </tr>   
<?php 
$no=0;
foreach ($pengembalian as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->id_peminjam }}</td>
    <td>{{ $rows->nama_peminjam }}</td>
    <td>{{ $rows->tanggal_peminjaman }}</td>
    <td>{{ $rows->tanggal_pengembalian }}</td>
    <td>
        <a href="{{ asset('pengembalian/edit/'.$rows->id_peminjam ) }}">Edit</a>
        <a href="{{ asset('pengembalian/delete/'.$rows->id_peminjam ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
</table>
@endsection
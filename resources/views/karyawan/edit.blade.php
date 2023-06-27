@extends('layouts.master')

@section('content')

<div class="container">
<h1>Edit Data</h1>

<form action="/karyawan/{{$karyawan->id}}" method="POST">
    @method('put')
    @csrf 
    <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp" value="{{$karyawan->nama}}">
  </div>
  
  <div class="mb-3">
    <label for="nik" class="form-label">Nik</label>
    <input type="text" name="nik" class="form-control" id="nik" aria-describedby="emailHelp" value="{{$karyawan->nik}}">
  </div>
  <div class="mb-3">
    <label for="jabatan" class="form-label">Jabatan</label>
    <input type="text" name="jabatan" class="form-control" id="jabatan" aria-describedby="emailHelp" value="{{$karyawan->jabatan}}">
  </div>
    <select class="form-select" name="jenis_kelamin">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L" @if($karyawan->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
        <option value="P" @if($karyawan->jenis_kelamin == "P") selected @endif>Perempuan</option>
</select><br>
<div class="mb-3">
    <label for="divisi" class="form-label">Divisi</label>
    <input type="text" name="divisi" class="form-control" id="divisi" aria-describedby="emailHelp" value="{{$karyawan->divisi}}">
  </div>
  <div class="mb-3">
    <label for="masa_kerja" class="form-label">Masa Kerja</label>
    <input type="text" name="masa_kerja" class="form-control" id="masa_kerja" aria-describedby="emailHelp" value="{{$karyawan->masa_kerja}}">
  </div>
  <div class="mb-3">
    <label for="saldo_cuti" class="form-label">Saldo Cuti</label>
    <input type="text" name="saldo_cuti" class="form-control" id="saldo_cuti" aria-describedby="emailHelp" value="{{$karyawan->saldo_cuti}}">
  </div>
  <div class="mb-3">
    <label for="gaji" class="form-label">Gaji</label>
    <input type="text" name="gaji" class="form-control" id="gaji" aria-describedby="emailHelp" value="{{$karyawan->gaji}}">
  </div>
  
  <label for="alamat" class="form-label">Alamat</label>
    <textarea class="form-control" name="alamat" value="{{$karyawan->alamat}}"></textarea><br>
  <div class="btn-group" role="group" aria-label="Basic example">
    <div class="container">
    <input type="submit" name="submit" class="btn btn-info" value="Update"><br>

</form>
</div>
@endsection
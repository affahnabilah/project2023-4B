@extends('layouts.master')

@section('content')

<div class="container">
<h1>create karyawan</h1>

<form action="/karyawan/store" method="POST">
@csrf

<div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="nik" class="form-label">Nik</label>
    <input type="text" name="nik" class="form-control" id="nik" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="jabatan" class="form-label">Jabatan</label>
    <input type="text" name="jabatan" class="form-control" id="jabatan" aria-describedby="emailHelp">
  </div>
    <select class="form-select" name="jenis_kelamin">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
</select><br>
<div class="mb-3">
    <label for="divisi" class="form-label">Divisi</label>
    <input type="text" name="divisi" class="form-control" id="divisi" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="masa_kerja" class="form-label">Masa Kerja</label>
    <input type="text" name="masa_kerja" class="form-control" id="masa_kerja" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="saldo_cuti" class="form-label">Saldo Cuti</label>
    <input type="text" name="saldo_cuti" class="form-control" id="saldo_cuti" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="gaji" class="form-label">Gaji</label>
    <input type="text" name="gaji" class="form-control" id="gaji" aria-describedby="emailHelp">
  </div>
  
  <label for="alamat" class="form-label">Alamat</label>
    <textarea class="form-control" name="alamat"></textarea><br>
    <input type="submit" name="submit" class="btn btn-info" value="save"><br> 
</form>
</div>
@endsection
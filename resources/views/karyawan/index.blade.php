@extends('layouts.master')

@section('content')
    <div class ="container" >
    <a class="btn btn-primary" href="/karyawan/create">Tambah Data</a>
         <table class="table">
            <head class="table-dark">
            <tr class="table-info">
                <th>Id</th>
                <th>Nama</th>
                <th>Nik</th>
                <th>Jabatan</th>
                <th>Jenis Kelamin</th>
                <th>Divisi</th>
                <th>Masa Kerja</th>
                <th>Saldo Cuti</th>
                <th>Gaji</th>
                <th>Alamat</th>
                <th>Aksi</th>

            </tr>
     @foreach($karyawan as $k)
        <tr>

                <td>{{$k->id}}</td>
                <td>{{$k->nama}}</td>
                <td>{{$k->nik}}</td>
                <td>{{$k->jabatan}}</td>
                <td>{{$k->jenis_kelamin}}</td>
                <td>{{$k->divisi}}</td>
                <td>{{$k->masa_kerja}}</td>
                <td>{{$k->saldo_cuti}}</td>
                <td>{{$k->gaji}}</td>
                <td>{{$k->alamat}}</td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic example">
                 <a class="btn btn-warning" href="/karyawan/{{$k->id}}/edit">Edit</a>
                 <form action="/karyawan/{{$k->id}}" method="POST">
                   @csrf
                   @method('delete')
                  <input class="btn btn-danger" type="submit" value="Delete" onclick="confirm('sure ?')">
                  </form>
            </div>
        </td>
        </tr>
    @endforeach
    </table> 
    </div>
@endsection
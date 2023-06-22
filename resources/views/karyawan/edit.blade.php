@exstends('layouts.master')

@section('content')

<div class="container">
<h1>Edit Data</h1>

<form action="/karyawan/{{$karyawan->id}}" method="POST">
    @method('put')
    @csrf 
    <input type="text" name="nama" placeholder="nama" value="{{$karyawan->nama}}"><br>
    <input type="text" name="nik" placeholder="nik" value="{{$karyawan->nik}}"><br>
    <input type="text" name="jabatan" placeholder="jabatan" value="{{$karyawan->jabatan}}"><br>
    <select name="jenis_kelamin">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L" @if($karyawan->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
        <option value="P" @if($karyawan->jenis_kelamin == "P") selected @endif>Perempuan</option>
</select><br>
<input type="text" name="divisi" placeholder="divisi" value="{{$karyawan->divisi}}"><br>
    <input type="text" name="masa_kerja" placeholder="masa_kerja" value="{{$karyawan->masa_kerja}}"><br>
    <input type="text" name="saldo_cuti" placeholder="saldo_cuti" value="{{$karyawan->saldo_cuti}}"><br>
    <input type="text" name="gaji" placeholder="gaji" value="{{$karyawan->gaji}}"><br>
    <textarea name="alamat" id="" cols="30" rows="10">{{$karyawan->alamat}}</textarea><br>
    <input type="submit" name="submit" value="Update"><br> 
</form>
</div>
@endsection
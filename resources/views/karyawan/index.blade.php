<a href="/karyawan/create">Tambah Data</a>
<table border ="1"> 
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Nik</th>
        <th>Jabatan</th>
        <td>Jenis Kelamin</th>
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
        <a href="/karyawan/{{$k->id}}/edit">Edit</a>
        <form action="/karyawan/{{$k->id}}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
        </form>
    </td>
</tr>
@endforeach
</table> 
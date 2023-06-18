<a href="/karyawan/create">Tambah Data</a>
<table border ="1"> 
    <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>NIK</th>
        <th>JABATAN</th>
        <td>JENIS KELAMIN</th>
        <th>DIVISI</td>
        <th>MASA KERJA</th>
        <th>SALDO CUTI</th>
        <th>GAJI</th>
        <th>ALAMAT</th>
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
     </tr>
@endforeach
</table> 
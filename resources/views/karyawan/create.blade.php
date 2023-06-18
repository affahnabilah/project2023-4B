<h1>create karyawan</h1>

<form action="/karyawan/store" method="POST">
    @csrf 
    <input type="text" name="nama" placeholder="nama"><br>
    <input type="text" name="nik" placeholder="nik"><br>
    <input type="text" name="jabatan" placeholder="jabatan"><br>
    <select name="jenis_kelamin">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
</select><br>
<input type="text" name="divisi" placeholder="divisi"><br>
    <input type="text" name="masa_kerja" placeholder="masa_kerja"><br>
    <input type="text" name="saldo_cuti" placeholder="saldo_cuti"><br>
    <input type="text" name="gaji" placeholder="gaji"><br>
    <textarea name="alamat" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" name="submit" value="save"><br> 
</form>
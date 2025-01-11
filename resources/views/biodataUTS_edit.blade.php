<form action="/biodataUTS/update/{{ $data->id }}" method="post">
    @csrf
    <h1>Edit Biodata</h1>
    <label>Nama</label><br>
    <input name="nama" type="text" value="{{ $data->nama }}" required /><br>
    <label>Tempat Lahir</label><br>
    <input name="tempat_lahir" type="text" value="{{ $data->tempat_lahir }}" required /><br>
    <label>Tanggal Lahir</label><br>
    <input name="tgl_lahir" type="date" value="{{ $data->tgl_lahir }}" required /><br>
    <label>No HP</label><br>
    <input name="no_hp" type="text" value="{{ $data->no_hp }}" required /><br>
    <label>Alamat</label><br>
    <textarea name="alamat" rows="10" required>{{ $data->alamat }}</textarea><br>
    <label>Nilai</label><br>
    <input name="nilai" type="text" value="{{ $data->nilai }}" required /><br>
    <input type="submit" value="Update" />
</form>

@if(session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif
<h2>
             
                <a href ="/home">Home</a>
                <a href ="/">Mobil</a>
                <a href ="/form">UTS</a>
                <a href ="/kalkulator">Kalkulator</a>
                <a href ="/biodataUTS">Biodata</a>
               
            </h2>
<form action="/biodataUTS/action" method="post">
    @csrf
    <h1>Biodata UTS Database</h1>
    <label>Nama </label><br>
    <input name="nama" type="text" required /><br>
    <label>Tempat Lahir</label><br>
    <input name="tempat_lahir" type="text" required /><br>
    <label>Tanggal Lahir </label><br>
    <input name="tgl_lahir" type="date" required /><br>
    <label>No HP </label><br>
    <input name="no_hp" type="text" required /><br>
    <label>Alamat</label><br>
    <textarea name="alamat" rows="10" required></textarea><br>
    <label>Nilai </label><br>
    <input name="nilai" type="text" required /><br>
    <input type="submit" />
</form>

<br>

<table border="1" style="width: 100%; text-align: left; border-collapse: collapse;">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>No HP</th>
            <th>Alamat</th>
            <th>Nilai</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($data as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->tempat_lahir }}</td>
            <td>{{ $item->tgl_lahir }}</td>
            <td>{{ $item->no_hp }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->nilai }}</td>
            <td>
                <!-- Tombol Edit -->
                <a href="/biodataUTS/edit/{{ $item->id }}">Edit</a>

                <!-- Tombol Delete -->
                <form action="/biodataUTS/delete/{{ $item->id }}" method="post" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="8" style="text-align: center;">Tidak ada data</td>
        </tr>
        @endforelse
    </tbody>
</table>

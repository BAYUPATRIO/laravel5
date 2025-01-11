<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mobil</title>
</head>
<body>
    <h1>Form Input Mobil</h1>

    <!-- Tampilkan pesan sukses -->
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <!-- Form input data mobil -->
    <form action="{{ route('mobil.store') }}" method="POST">
        @csrf
        <label for="merk">Merk Mobil:</label>
        <input type="text" id="merk" name="merk" required><br><br>

        <label for="tahun">Tahun Terbit:</label>
        <input type="date" id="tahun" name="tahun" required><br><br>

        <button type="submit">Simpan</button>
    </form>

    <!-- Tampilkan daftar mobil -->
    <h2>Daftar Mobil</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Merk</th>
                <th>Tahun</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mobils as $mobil)
                <tr>
                    <td>{{ $mobil->id }}</td>
                    <td>{{ $mobil->merk }}</td>
                    <td>{{ $mobil->tahun }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

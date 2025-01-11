<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mobil</title>
    
</head>
<body>
    <div class="container mt-5">
        <h2>Form Input Data Mobil</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('mobils.store') }}" method="POST">
            @csrf <!-- Laravel CSRF Protection -->
            
            <div class="mb-3">
                <label for="merk" class="form-label">Merk Mobil</label>
                <input type="text" id="merk" name="merk" class="form-control" placeholder="Masukkan merk mobil" value="{{ old('merk') }}" required>
                @error('merk')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                <input type="date" id="tahun_terbit" name="tahun_terbit" class="form-control" value="{{ old('tahun_terbit') }}" required>
                @error('tahun_terbit')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>

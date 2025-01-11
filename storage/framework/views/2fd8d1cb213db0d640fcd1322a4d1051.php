<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator UTS Mobil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: purple;
        }
    </style>
</head>
<body>
    <h1>Home Kalkulator UTS Mobil</h1>
    <form action="process.php" method="POST">
        <label for="merk">Merk Mobil</label><br>
        <input type="text" id="merk" name="merk" required><br><br>
        
        <label for="tahun">Tahun Terbit</label><br>
        <input type="date" id="tahun" name="tahun" required><br><br>
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
<?php /**PATH C:\laragon\www\laravel11\resources\views/mobil.blade.php ENDPATH**/ ?>
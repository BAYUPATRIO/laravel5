<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $merk = htmlspecialchars($_POST['merk']);
    $tahun = htmlspecialchars($_POST['tahun']);

    // Simpan data ke dalam file atau tampilkan di browser
    echo "<h1>Data Mobil</h1>";
    echo "Merk Mobil: " . $merk . "<br>";
    echo "Tahun Terbit: " . $tahun . "<br>";

    // Menyimpan ke file
    $file = 'data_mobil.txt';
    $data = "Merk: $merk, Tahun: $tahun\n";
    file_put_contents($file, $data, FILE_APPEND);

    echo "<p>Data berhasil disimpan ke file.</p>";
    echo '<a href="index.php">Kembali</a>';
} else {
    echo "Akses tidak valid!";
}
 ?><?php /**PATH C:\laragon\www\laravel11\resources\views/proses.blade.php ENDPATH**/ ?>
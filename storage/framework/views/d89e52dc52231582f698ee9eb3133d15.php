<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai</title>
</head>
<body>
    <h1>Form Input Nilai</h1>
    <form action="" method="POST">
        <label for="nilai">Masukkan Nilai:</label><br>
        <input type="number" name="nilai" id="nilai" min="0" max="100" required><br><br>
        <button type="submit">Submit</button>
    </form>
    <?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST['nilai']) && is_numeric($_POST['nilai'])) {
        $nilai = (int)$_POST['nilai'];

        // Tentukan grade
        if ($nilai >= 90) {
            $grade = "A";
        } elseif ($nilai >= 80) {
            $grade = "B";
        } elseif ($nilai >= 70) {
            $grade = "C";
        } elseif ($nilai >= 60) {
            $grade = "D";
        } else {
            $grade = "E";
        }

        echo "<p>Nilai Anda: <strong>$nilai</strong></p>";
        echo "<p>Grade Anda: <strong>$grade</strong></p>";
    } else {
        echo "<p>Masukkan nilai yang valid (angka antara 0 dan 100).</p>";
    }
}
?>

<form action="" method="POST">
    <label for="nilai">Masukkan Nilai:</label><br>
    <input type="number" name="nilai" id="nilai" required><br><br>
    <button type="submit">Submit</button>
</form>

</body>
</html>
<?php /**PATH C:\laragon\www\laravel11\resources\views/nilai.blade.php ENDPATH**/ ?>
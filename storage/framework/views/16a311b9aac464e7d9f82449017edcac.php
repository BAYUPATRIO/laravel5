<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS 2301100037_B</title>
</head>
<body>
    <style>
        body {
            background-color : #c0c0c0;
        }
    </style>
    <h2>
         <a href ="/home">Home</a>

         <a href ="/Kalkulator">Kalkulator</a> 

         <a href ="/">UTS</a>

         <a href ="/mobil">Mobil</a>

    </h2>
        <div class="container">
    <form action='/uts/2301100037_B' method='post'>
            <h1>UTS 2301100037_B</h1>
            <lable>Nama </lable><br>
            <input name='nama' type='text' required /><br>

            <label>Tempat Lahir</label><br>
            <input name='tempat_lahir' type='text' required /><br>

            <label>Tangal Lahir </label><br>
            <input name='tanggal_lahir' type='date' required /><br>

            <label>No HP </label><br>
            <input name='no_hp' type='text' required /><br>

            <label>Alamat </label><br>
            <textarea name='alamat' rows='10' required></textarea><br>
            
            <label>Nilai</label><br>
            <input name='nilai' type='text' required /><br>
            <input type='submit' />
        </form>

    <?php
    Route::post("uts/action", function(Request $request){
        $nilai = $request->nilai;
        $nilaiHuruf;
        $keterangan;
    
        if($nilai > 80 && $nilai <= 100){
            $nilaiHuruf = "A";
            $keterangan + "Sanagat Memuaskan";
        }
        elseif($nilai > 65 && $nilai <= 80){
            $nilaiHuruf = "B";
            $keterangan = "Memuaskan";
        }
        elseif($nilai > 55 && $nilai <= 65){
            $nilaiHuruf = "C";
            $keterangan = "Cukup";
        }
        elseif($nilai > 45 && $nilai <= 55){
            $nilaiHuruf = "D";
            $keterangan = "Kurang";
        }
        elseif($nilai > 0 && $nilai <= 45){
            $nilaiHuruf = "E";
            $keterangan = "Sangat Kurang";
        }

        return "
        <h1>Hasil UTS 2301100029_b/h1>
        Nama : <b>". $request->nama ."</b><br/>
        Tempat/tanggal lahir : <b>". $request->tempat_lahir."/".$request->tgl_lahir ."</b><br/>
        Nomor HP : <b>". $request->no_hp."<b><br/>
        Alamat : <b>". $request->alamat."</b><br/><hr><hr>
        Nilai Angka : <b>". $nilai."</b><br/>
        Nilai Huruf : <b>". $nilaiHuruf."</b><br/>
        Keterangan : <b>". $keterangan."</b><br/>
    ";
});

    
?>    

    
</body>
</html>
<?php /**PATH C:\laragon\www\laravel11\resources\views/uts.blade.php ENDPATH**/ ?>
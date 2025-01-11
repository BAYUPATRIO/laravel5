<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <h2>
        <a href ="/biodataUTS">BiodataUTS</a>
                <a href ="/home">Home</a>
                <a href ="/">Mobil</a>
                <a href ="/form">UTS</a>
                <a href ="/kalkulator">Kalkulator</a>
</h2>
               
<form action="<?php echo e(route('kalkulator')); ?>" method='post'>
       <?php echo csrf_field(); ?>
            <label>Bilangan 1</label><br>
            <input name='bil1' type='text' /><br>
            <label>Bilangan 2</label><br>
            <input name='bil2' type='text' /><br>
            <input type='submit' name='tambah' value='tambah' />
            <input type='submit' name='kurang' value='kurang' />
            <input type='submit' name='kali' value='kali' />
            <input type='submit' name='bagi' value='bagi' />
        </form>
</body>
</html><?php /**PATH C:\laragon\www\2301100037\resources\views/kalkulator.blade.php ENDPATH**/ ?>
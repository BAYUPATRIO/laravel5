<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
</head>
<body>
    
    <h2>
    
                <a href ="/home">Home</a>
                <a href ="/">Mobil</a>
                <a href ="/form">UTS</a>
                <a href ="/kalkulator">Kalkulator</a>
                <a href ="/biodataUTS">Biodata</a>
    </h2>
    <h1>UTS 2301100037_B</h1>

    <?php if(session('success')): ?>
        <p style="color: green;"><?php echo e(session('success')); ?></p>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <ul style="color: red;">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>

    <form action="<?php echo e(route('form.submit')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="<?php echo e(old('nama')); ?>"><br><br>

        <label for="tempat_lahir">Tempat Lahir:</label><br>
        <input type="text" id="tempat_lahir" name="tempat_lahir" value="<?php echo e(old('tempat_lahir')); ?>"><br><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label><br>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo e(old('tanggal_lahir')); ?>"><br><br>

        <label for="no_hp">No HP:</label><br>
        <input type="text" id="no_hp" name="no_hp" value="<?php echo e(old('no_hp')); ?>"><br><br>

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat"><?php echo e(old('alamat')); ?></textarea><br><br>

        <label for="nilai">Nilai:</label><br>
        <input type="number" id="nilai" name="nilai" value="<?php echo e(old('nilai')); ?>" step="0.01"><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php /**PATH C:\laragon\www\2301100037\resources\views/form.blade.php ENDPATH**/ ?>
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
    <?php if(session('success')): ?>
        <p style="color: green;"><?php echo e(session('success')); ?></p>
    <?php endif; ?>

    <!-- Form input data mobil -->
    <form action="<?php echo e(route('mobil.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
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
            <?php $__currentLoopData = $mobils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mobil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($mobil->id); ?></td>
                    <td><?php echo e($mobil->merk); ?></td>
                    <td><?php echo e($mobil->tahun); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH C:\laragon\www\2301100037\resources\views/mobil/index.blade.php ENDPATH**/ ?>
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

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('mobils.store')); ?>" method="POST">
            <?php echo csrf_field(); ?> <!-- Laravel CSRF Protection -->
            
            <div class="mb-3">
                <label for="merk" class="form-label">Merk Mobil</label>
                <input type="text" id="merk" name="merk" class="form-control" placeholder="Masukkan merk mobil" value="<?php echo e(old('merk')); ?>" required>
                <?php $__errorArgs = ['merk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-3">
                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                <input type="date" id="tahun_terbit" name="tahun_terbit" class="form-control" value="<?php echo e(old('tahun_terbit')); ?>" required>
                <?php $__errorArgs = ['tahun_terbit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\2301100037\resources\views/mobil_form.blade.php ENDPATH**/ ?>
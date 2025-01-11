<form action="/biodataUTS/update/<?php echo e($data->id); ?>" method="post">
    <?php echo csrf_field(); ?>
    <h1>Edit Biodata</h1>
    <label>Nama</label><br>
    <input name="nama" type="text" value="<?php echo e($data->nama); ?>" required /><br>
    <label>Tempat Lahir</label><br>
    <input name="tempat_lahir" type="text" value="<?php echo e($data->tempat_lahir); ?>" required /><br>
    <label>Tanggal Lahir</label><br>
    <input name="tgl_lahir" type="date" value="<?php echo e($data->tgl_lahir); ?>" required /><br>
    <label>No HP</label><br>
    <input name="no_hp" type="text" value="<?php echo e($data->no_hp); ?>" required /><br>
    <label>Alamat</label><br>
    <textarea name="alamat" rows="10" required><?php echo e($data->alamat); ?></textarea><br>
    <label>Nilai</label><br>
    <input name="nilai" type="text" value="<?php echo e($data->nilai); ?>" required /><br>
    <input type="submit" value="Update" />
</form>
<?php /**PATH C:\laragon\www\2301100037\resources\views/biodataUTS_edit.blade.php ENDPATH**/ ?>
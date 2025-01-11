<?php if(session('success')): ?>
    <div style="color: green;"><?php echo e(session('success')); ?></div>
<?php endif; ?>
<h2>
             
                <a href ="/home">Home</a>
                <a href ="/">Mobil</a>
                <a href ="/form">UTS</a>
                <a href ="/kalkulator">Kalkulator</a>
                <a href ="/biodataUTS">Biodata</a>
               
            </h2>
<form action="/biodataUTS/action" method="post">
    <?php echo csrf_field(); ?>
    <h1>Biodata UTS Database</h1>
    <label>Nama </label><br>
    <input name="nama" type="text" required /><br>
    <label>Tempat Lahir</label><br>
    <input name="tempat_lahir" type="text" required /><br>
    <label>Tanggal Lahir </label><br>
    <input name="tgl_lahir" type="date" required /><br>
    <label>No HP </label><br>
    <input name="no_hp" type="text" required /><br>
    <label>Alamat</label><br>
    <textarea name="alamat" rows="10" required></textarea><br>
    <label>Nilai </label><br>
    <input name="nilai" type="text" required /><br>
    <input type="submit" />
</form>

<br>

<table border="1" style="width: 100%; text-align: left; border-collapse: collapse;">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>No HP</th>
            <th>Alamat</th>
            <th>Nilai</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($index + 1); ?></td>
            <td><?php echo e($item->nama); ?></td>
            <td><?php echo e($item->tempat_lahir); ?></td>
            <td><?php echo e($item->tgl_lahir); ?></td>
            <td><?php echo e($item->no_hp); ?></td>
            <td><?php echo e($item->alamat); ?></td>
            <td><?php echo e($item->nilai); ?></td>
            <td>
                <!-- Tombol Edit -->
                <a href="/biodataUTS/edit/<?php echo e($item->id); ?>">Edit</a>

                <!-- Tombol Delete -->
                <form action="/biodataUTS/delete/<?php echo e($item->id); ?>" method="post" style="display: inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="8" style="text-align: center;">Tidak ada data</td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>
<?php /**PATH C:\laragon\www\2301100037\resources\views/biodataUTS.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<button><a href="/tambah_koperasi">Tambah</a></button>
<table border="1">
		<tr>
			<th>id_koperasi</th>
			<th>nama_koperasi</th>
            <th>alamat</th>
			<th>opsi</th>
		</tr>
		<?php $__currentLoopData = $koperasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($k->id_koperasi); ?></td>
			<td><?php echo e($k->nama_koperasi); ?></td>
			<td><?php echo e($k->alamat); ?></td>

			<td>
				<a href="/koperasi/edit/<?php echo e($k->id_koperasi); ?>">Edit</a>

				<a href="/koperasi/hapus/<?php echo e($k->id_koperasi); ?>">Hapus</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
</body>
</html><?php /**PATH C:\xampp\htdocs\TestingGit\Unitusaha\resources\views/koperasi.blade.php ENDPATH**/ ?>
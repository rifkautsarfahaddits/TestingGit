<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<button><a href="/tambah">Tambah</a></button>
<table border="1">
		<tr>
			<th>id_usaha</th>
			<th>nama_usaha</th>
            <th>alamat</th>
            <th>telepon</th>
            <th>jenis_usaha</th>
			<th>opsi</th>
		</tr>
		<?php $__currentLoopData = $usaha; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($u->id_usaha); ?></td>
			<td><?php echo e($u->nama_usaha); ?></td>
			<td><?php echo e($u->alamat); ?></td>
			<td><?php echo e($u->telepon); ?></td>
            <td><?php echo e($u->jenis_usaha); ?></td>

			<td>
				<a href="/UnitUsaha/edit/<?php echo e($u->id_usaha); ?>">Edit</a>

				<a href="/UnitUsaha/hapus/<?php echo e($u->id_usaha); ?>">Hapus</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
</body>
</html><?php /**PATH C:\xampp\htdocs\TestingGit\Unitusaha\resources\views/UnitUsaha.blade.php ENDPATH**/ ?>
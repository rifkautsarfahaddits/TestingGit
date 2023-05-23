<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<button><a href="/tambaht">Tambah</a></button>
<table border="1">
		<tr>
			<th>id_transaksi</th>
			<th>tgl_transaksi</th>
            <th>jenis_transaksi</th>
            <th>id_anggota</th>
            <th>id_usaha</th>
			<th>nominal</th>
		</tr>
		<?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($t->id_transaksi); ?></td>
			<td><?php echo e($t->tgl_transaksi); ?></td>
			<td><?php echo e($t->jenis_transaksi); ?></td>
			<td><?php echo e($t->id_anggota); ?></td>
            <td><?php echo e($t->id_usaha); ?></td>
			<td><?php echo e($t->nominal); ?></td>

			<td>
				<a href="/transaksi/editt/<?php echo e($t->id_transaksi); ?>">Edit</a>

				<a href="/transaksi/hapus/<?php echo e($t->id_transaksi); ?>">Hapus</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
</body>
</html><?php /**PATH C:\xampp\htdocs\TestingGit\Unitusaha\resources\views/transaksi.blade.php ENDPATH**/ ?>
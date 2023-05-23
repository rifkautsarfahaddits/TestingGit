<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<button><a href="/tambah_barang">Tambah</a></button>
<table border="1">
		<tr>
			<th>id_barang</th>
			<th>nama_barang</th>
            <th>jenis_barang</th>
            <th>stok_barang</th>
            <th>harga_beli</th>
			<th>harga_jual</th>
			<th>opsi</th>
		</tr>
		<?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($u->id_barang); ?></td>
			<td><?php echo e($u->nama_barang); ?></td>
			<td><?php echo e($u->jenis_barang); ?></td>
			<td><?php echo e($u->stok_barang); ?></td>
            <td><?php echo e($u->harga_beli); ?></td>
			<td><?php echo e($u->harga_jual); ?></td>

			<td>
				<a href="/Barang/edit/<?php echo e($u->id_barang); ?>">Edit</a>

				<a href="/Barang/hapus/<?php echo e($u->id_barang); ?>">Hapus</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
</body>
</html><?php /**PATH C:\xampp\htdocs\TestingGit\Unitusaha\resources\views/Barang.blade.php ENDPATH**/ ?>
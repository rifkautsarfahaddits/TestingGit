<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php $__currentLoopData = $Unitusaha; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
	<td><?php echo e($p->id_unit); ?></td>
	<td><?php echo e($p->nama_unit); ?></td>
	<td><?php echo e($p->alamat_unit); ?></td>
	<td><?php echo e($p->telepon_unit); ?></td>
	<td>
		
	</td>
</tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\TestingGit\Unitusaha\resources\views/Unitusaha.blade.php ENDPATH**/ ?>
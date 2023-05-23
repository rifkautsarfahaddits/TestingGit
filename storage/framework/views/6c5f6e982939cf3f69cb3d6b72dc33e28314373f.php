<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<form action="/transaksi/update" method="post">
	<?php echo e(csrf_field()); ?>

	
    <input type="hidden" name="id_transaksi" value="<?php echo e($t->id_transaksi); ?>"> <br/>
	tgl_transaksi <input type="text" required="required" name="tgl_transaksi" value="<?php echo e($t->tgl_transaksi); ?>"> <br/>
	jenis_transaksi <input type="text" required="required" name="jenis_transaksi" value="<?php echo e($t->jenis_transaksi); ?>"> <br/>
	id_anggota <input type="text" required="required" name="id_anggota" value="<?php echo e($t->id_anggota); ?>"> <br/>
    id_usaha <input type="text" required="required" name="id_usaha" value="<?php echo e($t->id_usaha); ?>"> <br/>
    nominal <input type="text" required="required" name="nominal" value="<?php echo e($t->nominal); ?>"> <br/>
	<input type="submit" value="Simpan Data">
</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\TestingGit\Unitusaha\resources\views/editt.blade.php ENDPATH**/ ?>
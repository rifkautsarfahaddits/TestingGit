<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php $__currentLoopData = $koperasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<form action="/koperasi/update" method="post">
	<?php echo e(csrf_field()); ?>

	
    <input type="hidden" name="id_koperasi" value="<?php echo e($k->id_koperasi); ?>"> <br/>
	nama_koperasi <input type="text" required="required" name="nama_koperasi" value="<?php echo e($k->nama_koperasi); ?>"> <br/>
	alamat <input type="text" required="required" name="alamat" value="<?php echo e($k->alamat); ?>"> <br/>
    <input type="submit" value="Simpan Data">
</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\TestingGit\Unitusaha\resources\views/edit_koperasi.blade.php ENDPATH**/ ?>
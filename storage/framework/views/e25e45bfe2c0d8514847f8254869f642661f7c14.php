<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php $__currentLoopData = $usaha; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<form action="/UnitUsaha/update" method="post">
	<?php echo e(csrf_field()); ?>

	
    <input type="hidden" name="id_usaha" value="<?php echo e($p->id_usaha); ?>"> <br/>
	nama_usaha <input type="text" required="required" name="nama_usaha" value="<?php echo e($p->nama_usaha); ?>"> <br/>
	alamat <input type="text" required="required" name="alamat" value="<?php echo e($p->alamat); ?>"> <br/>
    telepon <input type="text" required="required" name="telepon" value="<?php echo e($p->telepon); ?>"> <br/>
    jenis_usaha <input type="text" required="required" name="jenis_usaha" value="<?php echo e($p->jenis_usaha); ?>"> <br/>
    <input type="submit" value="Simpan Data">
</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\TestingGit\Unitusaha\resources\views/edit.blade.php ENDPATH**/ ?>
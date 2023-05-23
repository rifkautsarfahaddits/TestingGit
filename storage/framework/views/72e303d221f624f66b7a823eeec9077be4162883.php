<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<form action="/Barang/update" method="post">
	<?php echo e(csrf_field()); ?>

	
    <input type="hidden" name="id_barang" value="<?php echo e($k->id_barang); ?>"> <br/>
	nama_barang <input type="text" required="required" name="nama_barang" value="<?php echo e($k->nama_barang); ?>"> <br/>
	jenis_barang <input type="text" required="required" name="jenis_barang" value="<?php echo e($k->jenis_barang); ?>"> <br/>
    stok_barang <input type="text" required="required" name="stok_barang" value="<?php echo e($k->stok_barang); ?>"> <br/>
	harga_beli <input type="text" required="required" name="harga_beli" value="<?php echo e($k->harga_beli); ?>"> <br/>
    harga_jual <input type="text" required="required" name="harga_jual" value="<?php echo e($k->harga_jual); ?>"> <br/>
    <input type="submit" value="Simpan Data">
</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\TestingGit\Unitusaha\resources\views/edit_Barang.blade.php ENDPATH**/ ?>
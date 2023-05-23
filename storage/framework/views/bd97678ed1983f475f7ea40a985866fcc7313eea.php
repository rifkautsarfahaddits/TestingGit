<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/UnitUsaha/store" method="post">
		<?php echo e(csrf_field()); ?>

		nama_usaha <input type="text" name="nama_usaha" required="required"> <br/>
        alamat <input type="text" name="alamat" required="required"> <br/>
        telepon <input type="text" name="telepon" required="required"> <br/>
        jenis_usaha <input type="text" name="jenis_usaha" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\TestingGit\Unitusaha\resources\views/tambah.blade.php ENDPATH**/ ?>
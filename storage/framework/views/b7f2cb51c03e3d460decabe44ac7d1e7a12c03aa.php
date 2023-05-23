<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/transaksi/store" method="post">
		<?php echo e(csrf_field()); ?>


        id_transaksi <input type="text" name="id_transaksi" required="required" > <br/>
        tgl_transaksi <input type="date" name="tgl_transaksi" required="required" > <br/>
        jenis_transaksi <input type="text" name="jenis_transaksi" required="required" > <br/>
        id_anggota <input type="text" name="id_anggota" required="required" > <br/>
        id_usaha <input type="text" name="id_usaha" required="required" > <br/>
        nominal <input type="text" name="nominal" required="required" > <br/>
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\TestingGit\Unitusaha\resources\views/tambaht.blade.php ENDPATH**/ ?>
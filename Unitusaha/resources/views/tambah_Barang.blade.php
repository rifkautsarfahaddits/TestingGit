<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/Barang/store" method="post">
		{{ csrf_field() }}

		id_barang <input type="text" name="id_barang" required="required"> <br/>
		nama_barang <input type="text" name="nama_barang" required="required"> <br/>
        jenis_barang <input type="text" name="jenis_barang" required="required"> <br/>
        stok_barang <input type="text" name="stok_barang" required="required"> <br/>
        harga_beli <input type="text" name="harga_beli" required="required"> <br/>
        harga_jual <input type="text" name="harga_jual" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>
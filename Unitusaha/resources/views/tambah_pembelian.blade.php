<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/pembelian/store" method="post">
		{{ csrf_field() }}

		id_pembelian <input type="text" name="id_pembelian" required="required"> <br/>
		tgl_pembelian <input type="text" name="tgl_pembelian" required="required"> <br/>
        id_supplier <input type="text" name="id_supplier" required="required"> <br/>
        id_barang <input type="text" name="id_barang" required="required"> <br/>
        jumlah_barang <input type="text" name="jumlah_barang" required="required"> <br/>
        harga_beli <input type="text" name="harga_beli" required="required"> <br/>
        total_pembelian <input type="text" name="total_pembelian" required="required"> <br/>
		<input type=S"submit" value="Simpan Data">
	</form>
</body>
</html
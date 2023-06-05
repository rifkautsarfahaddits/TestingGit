<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/penjualan/store" method="post">
		{{ csrf_field() }}

		id_penjualan <input type="text" name="id_penjualan" required="required"> <br/>
		tgl_penjualan <input type="text" name="tgl_penjualan" required="required"> <br/>
        id_barang <input type="text" name="id_barang" required="required"> <br/>
        jumlah_barang <input type="text" name="jumlah_barang" required="required"> <br/>
        harga_jual <input type="text" name="harga_jual" required="required"> <br/>
        total_penjualan <input type="text" name="total_penjualan" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>
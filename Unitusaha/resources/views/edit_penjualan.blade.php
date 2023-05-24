<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($penjualan as $p)
<form action="/penjualan/update" method="post">
	{{ csrf_field() }}
	
    <input type="hidden" name="id_penjualan" value="{{ $p->id_penjualan }}"> <br/>
	tgl_penjualan <input type="text" required="required" name="tgl_penjualan" value="{{ $p->tgl_penjualan }}"> <br/>
	id_barang <input type="text" required="required" name="id_barang" value="{{ $p->id_barang }}"> <br/>
    jumlah_barang <input type="text" required="required" name="jumlah_barang" value="{{ $p->jumlah_barang }}"> <br/>
    harga_jual <input type="text" required="required" name="harga_jual" value="{{ $p->harga_jual }}"> <br/>
    total_penjualan <input type="text" required="required" name="total_penjualan" value="{{ $p->total_penjualan }}"> <br/>
    <input type="submit" value="Simpan Data">
</form>
@endforeach
</body>
</html>
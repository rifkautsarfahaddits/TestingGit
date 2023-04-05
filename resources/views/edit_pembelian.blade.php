<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($pembelian as $p)
<form action="/pembelian/update" method="post">
	{{ csrf_field() }}
	
    <input type="hidden" name="id_pembelian" value="{{ $p->id_pembelian }}"> <br/>
	tgl_pembelian <input type="text" required="required" name="tgl_pembelian" value="{{ $p->tgl_pembelian }}"> <br/>
	id_supplier <input type="text" required="required" name="id_supplier" value="{{ $p->id_supplier }}"> <br/>
	id_barang <input type="text" required="required" name="id_barang" value="{{ $p->id_barang }}"> <br/>
    jumlah_barang <input type="text" required="required" name="jumlah_barang" value="{{ $p->jumlah_barang }}"> <br/>
    harga_beli <input type="text" required="required" name="harga_beli" value="{{ $p->harga_beli }}"> <br/>
    total_pembelian <input type="text" required="required" name="total_pembelian" value="{{ $p->total_pembelian }}"> <br/>
    <input type="submit" value="Simpan Data">
</form>
@endforeach
</body>
</html>
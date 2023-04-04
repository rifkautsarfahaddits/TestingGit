<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($barang as $k)
<form action="/Barang/update" method="post">
	{{ csrf_field() }}
	
    <input type="hidden" name="id_barang" value="{{ $k->id_barang }}"> <br/>
	nama_barang <input type="text" required="required" name="nama_barang" value="{{ $k->nama_barang }}"> <br/>
	jenis_barang <input type="text" required="required" name="jenis_barang" value="{{ $k->jenis_barang }}"> <br/>
    stok_barang <input type="text" required="required" name="stok_barang" value="{{ $k->stok_barang }}"> <br/>
	harga_beli <input type="text" required="required" name="harga_beli" value="{{ $k->harga_beli }}"> <br/>
    harga_jual <input type="text" required="required" name="harga_jual" value="{{ $k->harga_jual }}"> <br/>
    <input type="submit" value="Simpan Data">
</form>
@endforeach
</body>
</html>
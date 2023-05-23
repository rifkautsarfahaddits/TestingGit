<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($transaksi as $t)
<form action="/transaksi/update" method="post">
	{{ csrf_field() }}
	
    <input type="hidden" name="id_transaksi" value="{{ $t->id_transaksi }}"> <br/>
	tgl_transaksi <input type="text" required="required" name="tgl_transaksi" value="{{ $t->tgl_transaksi }}"> <br/>
	jenis_transaksi <input type="text" required="required" name="jenis_transaksi" value="{{ $t->jenis_transaksi }}"> <br/>
	id_anggota <input type="text" required="required" name="id_anggota" value="{{ $t->id_anggota }}"> <br/>
    id_usaha <input type="text" required="required" name="id_usaha" value="{{ $t->id_usaha }}"> <br/>
    nominal <input type="text" required="required" name="nominal" value="{{ $t->nominal }}"> <br/>
	<input type="submit" value="Simpan Data">
</form>
@endforeach
</body>
</html>
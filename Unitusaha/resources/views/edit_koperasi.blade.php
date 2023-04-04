<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($koperasi as $k)
<form action="/koperasi/update" method="post">
	{{ csrf_field() }}
	
    <input type="hidden" name="id_koperasi" value="{{ $k->id_koperasi }}"> <br/>
	nama_koperasi <input type="text" required="required" name="nama_koperasi" value="{{ $k->nama_koperasi }}"> <br/>
	alamat <input type="text" required="required" name="alamat" value="{{ $k->alamat }}"> <br/>
    <input type="submit" value="Simpan Data">
</form>
@endforeach
</body>
</html>
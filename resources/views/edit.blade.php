<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($usaha as $p)
<form action="/UnitUsaha/update" method="post">
	{{ csrf_field() }}
	
    <input type="hidden" name="id_usaha" value="{{ $p->id_usaha }}"> <br/>
	nama_usaha <input type="text" required="required" name="nama_usaha" value="{{ $p->nama_usaha }}"> <br/>
	alamat <input type="text" required="required" name="alamat" value="{{ $p->alamat }}"> <br/>
    telepon <input type="text" required="required" name="telepon" value="{{ $p->telepon }}"> <br/>
    jenis_usaha <input type="text" required="required" name="jenis_usaha" value="{{ $p->jenis_usaha }}"> <br/>
    <input type="submit" value="Simpan Data">
</form>
@endforeach
</body>
</html>
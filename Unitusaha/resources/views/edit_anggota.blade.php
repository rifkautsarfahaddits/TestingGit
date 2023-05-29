<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($anggota as $p)
<form action="/anggota/update" method="post">
	{{ csrf_field() }}
	
    <input type="hidden" name="id_anggota" value="{{ $p->id_anggota }}"> <br/>
	nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/>
	alamat <input type="text" required="required" name="alamat" value="{{ $p->alamat }}"> <br/>
    telepon <input type="text" required="required" name="telepon" value="{{ $p->telepon }}"> <br/>
    email <input type="text" required="required" name="email" value="{{ $p->email }}"> <br/>
    jenis_kelamin <input type="text" required="required" name="jenis_kelamin" value="{{ $p->jenis_kelamin }}"> <br/>
    status <input type="text" required="required" name="status" value="{{ $p->status }}"> <br/>
    <input type="submit" value="Simpan Data">
</form>
@endforeach
</body>
</html>
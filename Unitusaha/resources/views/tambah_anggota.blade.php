<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/anggota/store" method="post">
		{{ csrf_field() }}

		id_anggota <input type="text" name="id_anggota" required="required"> <br/>
		nama <input type="text" name="nama" required="required"> <br/>
        alamat <input type="text" name="alamat" required="required"> <br/>
        telepon <input type="text" name="telepon" required="required"> <br/>
        email <input type="text" name="email" required="required"> <br/>
        jenis_kelamin <input type="text" name="jenis_kelamin" required="required"> <br/>
        status <input type="text" name="status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>
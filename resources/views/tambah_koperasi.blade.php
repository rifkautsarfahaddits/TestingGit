<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/koperasi/store" method="post">
		{{ csrf_field() }}

		id_koperasi <input type="text" name="id_koperasi" required="required"> <br/>
		nama_koperasi <input type="text" name="nama_koperasi" required="required"> <br/>
        alamat <input type="text" name="alamat" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>
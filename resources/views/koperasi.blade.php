<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<button><a href="/tambah_koperasi">Tambah</a></button>
<table border="1">
		<tr>
			<th>id_koperasi</th>
			<th>nama_koperasi</th>
            <th>alamat</th>
			<th>opsi</th>
		</tr>
		@foreach($koperasi as $k)
		<tr>
			<td>{{ $k->id_koperasi }}</td>
			<td>{{ $k->nama_koperasi }}</td>
			<td>{{ $k->alamat }}</td>

			<td>
				<a href="/koperasi/edit/{{ $k->id_koperasi }}">Edit</a>

				<a href="/koperasi/hapus/{{ $k->id_koperasi }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>
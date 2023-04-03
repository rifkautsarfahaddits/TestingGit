<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<button><a href="/tambah">Tambah</a></button>
<table border="1">
		<tr>
			<th>id_usaha</th>
			<th>nama_usaha</th>
            <th>alamat</th>
            <th>telepon</th>
            <th>jenis_usaha</th>
			<th>opsi</th>
		</tr>
		@foreach($usaha as $u)
		<tr>
			<td>{{ $u->id_usaha }}</td>
			<td>{{ $u->nama_usaha }}</td>
			<td>{{ $u->alamat }}</td>
			<td>{{ $u->telepon }}</td>
            <td>{{ $u->jenis_usaha }}</td>

			<td>
				<a href="/UnitUsaha/edit/{{ $u->id_usaha }}">Edit</a>

				<a href="/UnitUsaha/hapus/{{ $u->id_usaha }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>
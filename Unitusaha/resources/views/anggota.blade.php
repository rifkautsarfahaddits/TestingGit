<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<button><a href="/tambah_anggota">Tambah</a></button>
<table border="1">
		<tr>
			<th>id_Anggota</th>
			<th>nama</th>
            <th>alamat</th>
            <th>telepon</th>
            <th>email</th>
			<th>jenis_kelamin</th>
            <th>status</th>
			<th>opsi</th>
		</tr>
		@foreach($anggota as $u)
		<tr>
			<td>{{ $u->id_anggota}}</td>
			<td>{{ $u->nama }}</td>
			<td>{{ $u->alamat }}</td>
			<td>{{ $u->telepon }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ $u->jenis_kelamin }}</td>
            <td>{{ $u->status }}</td>
			

			<td>
				<a href="/anggota/edit/{{ $u->id_anggota}}">Edit</a>

            <a href="/anggota/hapus/{{ $u->id_anggota }}">Hapus</a>
		  </td>
		</tr>
		@endforeach
	</table>
</body>
</html>
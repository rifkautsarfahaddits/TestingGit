<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<button><a href="/tambaht">Tambah</a></button>
<table border="1">
		<tr>
			<th>id_transaksi</th>
			<th>tgl_transaksi</th>
            <th>jenis_transaksi</th>
            <th>id_anggota</th>
            <th>id_usaha</th>
			<th>nominal</th>
		</tr>
		@foreach($transaksi as $t)
		<tr>
			<td>{{ $t->id_transaksi }}</td>
			<td>{{ $t->tgl_transaksi }}</td>
			<td>{{ $t->jenis_transaksi }}</td>
			<td>{{ $t->id_anggota }}</td>
            <td>{{ $t->id_usaha }}</td>
			<td>{{ $t->nominal}}</td>

			<td>
				<a href="/transaksi/editt/{{ $t->id_transaksi }}">Edit</a>

				<a href="/transaksi/hapus/{{ $t->id_transaksi }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<button><a href="/tambah_barang">Tambah</a></button>
<table border="1">
		<tr>
			<th>id_barang</th>
			<th>nama_barang</th>
            <th>jenis_barang</th>
            <th>stok_barang</th>
            <th>harga_beli</th>
			<th>harga_jual</th>
			<th>opsi</th>
		</tr>
		@foreach($barang as $u)
		<tr>
			<td>{{ $u->id_barang }}</td>
			<td>{{ $u->nama_barang }}</td>
			<td>{{ $u->jenis_barang }}</td>
			<td>{{ $u->stok_barang }}</td>
            <td>{{ $u->harga_beli }}</td>
			<td>{{ $u->harga_jual }}</td>

			<td>
				<a href="/Barang/edit/{{ $u->id_barang }}">Edit</a>

				<a href="/Barang/hapus/{{ $u->id_barang }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>
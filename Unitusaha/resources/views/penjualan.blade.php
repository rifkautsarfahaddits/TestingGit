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
			<th>id_penjualan</th>
			<th>tgl_penjualan</th>
            <th>id_barang</th>
            <th>jumlah_barang</th>
            <th>harga_jual</th>
			<th>total_penjualan</th>
		</tr>
		@foreach($penjualan as $u)
		<tr>
			<td>{{ $u->id_penjualan }}</td>
			<td>{{ $u->tgl_penjualan }}</td>
			<td>{{ $u->id_barang }}</td>
			<td>{{ $u->jumlah_barang }}</td>
            <td>{{ $u->harga_jual }}</td>

			<td>
				<!--<a href="/penjualan/edit/{{ $u->id_penjualan }}">Edit</a>

				<a href="/penjualan/hapus/{{ $u->id_penjualan }}">Hapus</a>-->
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>
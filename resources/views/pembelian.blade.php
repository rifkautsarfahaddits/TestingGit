<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<button><a href="/tambah_pembelian">Tambah</a></button>
<table border="1">
		<tr>
			<th>id_pembelian</th>
			<th>tgl_pembelian</th>
            <th>id_supplier</th>
            <th>id_barang</th>
            <th>jumlah_barang</th>
			<th>harga_beli</th>
			<th>total_pembelian</th>
		</tr>
		@foreach($pembelian as $p)
		<tr>
			<td>{{ $p->id_pembelian }}</td>
			<td>{{ $p->tgl_pembelian }}</td>
			<td>{{ $p->id_supplier }}</td>
			<td>{{ $p->id_barang }}</td>
            <td>{{ $p->jumlah_barang }}</td>
			<td>{{ $p->harga_beli }}</td>
			<td>{{ $p->total_pembelian }}</td>

			<td>
				<a href="/pembelian/edit/{{ $p->id_pembelian }}">Edit</a>

				<a href="/pembelian/hapus/{{ $p->id_pembelian }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>
@extends('layouts.user_type.auth')
@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Tambah Barang</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                <form action="/barang/store" method="post">
                        {{ csrf_field() }}

                        id_barang <input type="text" name="id_barang" required="required"> <br/>
                        nama_barang <input type="text" name="nama_barang" required="required"> <br/>
                        jenis_barang <input type="text" name="jenis_barang" required="required"> <br/>
                        stok_barang <input type="text" name="stok_barang" required="required"> <br/>
                        harga_beli <input type="text" name="harga_beli" required="required"> <br/>
                        harga_jual <input type="text" name="harga_jual" required="required"> <br/>
                        <input type="submit" value="Simpan Data">
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

		
	</form>
</body>
</html>
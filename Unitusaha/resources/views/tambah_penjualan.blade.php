@extends('layouts.user_type.auth')
@section('content')


<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Tambah penjualan</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                <form action="/penjualan/store" method="post">
                        {{ csrf_field() }}

                        id_penjualan <input type="text" name="id_penjualan" required="required"> <br/>
                        tgl_penjualan <input type="text" name="tgl_penjualan" required="required"> <br/>
                        id_barang <input type="text" name="id_barang" required="required"> <br/>
                        jumlah_barang <input type="text" name="jumlah_barang" required="required"> <br/>
                        harga_jual <input type="text" name="harga_jual" required="required"> <br/>
                        total_penjualan <input type="text" name="total_penjualan" required="required"> <br/>
                        <input class="simpan" type="submit" value="Simpan Data">
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection


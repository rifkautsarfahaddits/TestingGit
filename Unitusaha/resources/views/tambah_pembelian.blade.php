@extends('layouts.user_type.auth')
@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Tambah pembelian</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                <form action="/pembelian/tambah" method="post">
                        {{ csrf_field() }}

                        id_pembelian <input type="text" name="id_pembelian" required="required"> <br/>
                        tgl_pembelian <input type="text" name="tgl_pembelian" required="required"> <br/>
                        id_supplier <input type="text" name="id_supplier" required="required"> <br/>
                        id_barang <input type="text" name="id_barang" required="required"> <br/>
                        jumlah_barang <input type="text" name="jumlah_barang" required="required"> <br/>
                        harga_beli <input type="text" name="harga_beli" required="required"> <br/>
                        total_pembelian <input type="text" name="total_pembelian" required="required"> <br/> <br/>
                        <input class="simpan" type="submit" value="Simpan Data">
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

        

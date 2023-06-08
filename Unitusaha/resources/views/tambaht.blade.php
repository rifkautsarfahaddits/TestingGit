@extends('layouts.user_type.auth')
@section('content')


<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Tambah transaksi</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                <form action="/transaksi/store" method="post">
                        {{ csrf_field() }}

                            id_transaksi <input type="text" name="id_transaksi" required="required" > <br/>
                            tgl_transaksi <input type="date" name="tgl_transaksi" required="required" > <br/>
                            jenis_transaksi <input type="text" name="jenis_transaksi" required="required" > <br/>
                            id_anggota <input type="text" name="id_anggota" required="required" > <br/>
                            id_usaha <input type="text" name="id_usaha" required="required" > <br/>
                            nominal <input type="text" name="nominal" required="required" > <br/>
                        <input class="simpan" type="submit" value="Simpan Data">
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection


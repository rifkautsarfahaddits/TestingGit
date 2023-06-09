@extends('layouts.user_type.auth')
@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Tambah kategori_zami</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                <form action="/kategori_zami/store" method="post">
                        {{ csrf_field() }}

                       IDKategori <input type="text" name="IDKategori" required="required"> <br/>
                        NamaKategori <input type="text" name="NamaKategori" required="required"> <br/>
                        IDBuku <input type="text" name="IDBuku" required="required"> <br/>
                        <input class="simpan" type="submit" value="Simpan Data">
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
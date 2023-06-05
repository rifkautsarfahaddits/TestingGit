@extends('layouts.user_type.auth')
@section('content')


<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Tambah UnitUsaha</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                <form action="/usaha/store" method="post">
                        {{ csrf_field() }}

                        nama_usaha <input type="text" name="nama_usaha" required="required"> <br/>
                        alamat <input type="text" name="alamat" required="required"> <br/>
                        telepon <input type="text" name="telepon" required="required"> <br/>
                        jenis_usaha <input type="text" name="jenis_usaha" required="required"> <br/>
                        <input class="simpan" type="submit" value="Simpan Data">
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection


@extends('layouts.user_type.auth')
@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Edit Anggota</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                <form action="/anggota/store" method="post">
                    {{ csrf_field() }}

                    id_anggota  <input type="text" name="id_anggota" required="required"> <br/>
                    nama <input type="text" name="nama" required="required"> <br/>
                    alamat <input type="text" name="alamat" required="required"> <br/>
                    telepon <input type="text" name="telepon" required="required"> <br/>
                    email <input type="text" name="email" required="required"> <br/>
                    jenis_kelamin <input type="text" name="jenis_kelamin" required="required"> <br/>
                    status <input type="text" name="status" required="required"> <br/>
                    <input class="simpan" type="submit" value="Simpan Data">
                </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

@extends('layouts.user_type.auth')
@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Tambah buku_zami</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                <form action="/buku_zami/store" method="post">
                        {{ csrf_field() }}

                        IDBuku <input type="text" name="IDBuku" required="required"> <br/>
                        Judul <input type="text" name="Judul" required="required"> <br/>
                        Penulis <input type="text" name="Penulis" required="required"> <br/>
                        Penertib <input type="text" name="Penertib" required="required"> <br/>
                        TahunTertib <input type="text" name="TahunTertib" required="required"> <br/>
                        JumlahStok <input type="text" name="JumlahStok" required="required"> <br/>
                        dendabuku <input type="text" name="dendabuku" required="required"> <br/>
                        <input class="simpan" type="submit" value="Simpan Data">
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

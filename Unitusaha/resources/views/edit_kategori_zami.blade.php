@extends('layouts.user_type.auth')
@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Edit kategori_zami</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    @foreach($kategori_zami as $p)
                    <form action="/kategori_zami/update" method="post">
                        {{ csrf_field() }}
                        
                        <input type="hidden" name="IDKategori" value="{{ $p->IDKategori }}"> <br/>
                        NamaKategori <input type="text" required="required" name="NamaKategori" value="{{ $p->NamaKategori }}"> <br/>
                        IDBuku <input type="text" required="required" name="IDBuku" value="{{ $p->IDBuku }}"> <br/>
                        <input type="submit" value="Simpan Data">
                    </form>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
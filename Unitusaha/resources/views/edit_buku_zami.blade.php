@extends('layouts.user_type.auth')
@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Edit buku_zami</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    @foreach($buku_zami as $p)
                    <form action="/buku_zami/update" method="post">
                        {{ csrf_field() }}
                        
                        <input type="hidden" name="IDBuku" value="{{ $p->IDBuku }}"> <br/>
                        Judul <input type="text" required="required" name="Judul" value="{{ $p->Judul }}"> <br/>
                        Penulis <input type="text" required="required" name="Penulis" value="{{ $p->Penulis }}"> <br/>
                        Penertib <input type="text" required="required" name="Penertib" value="{{ $p->Penertib }}"> <br/>
                        TahunTertib <input type="text" required="required" name="TahunTertib" value="{{ $p->TahunTertib }}"> <br/>
                        JumlahStok <input type="text" required="required" name="JumlahStok" value="{{ $p->JumlahStok }}"> <br/>
                        dendabuku <input type="text" required="required" name="dendabuku" value="{{ $p->dendabuku }}"> <br/>
                        <input type="submit" value="Simpan Data">
                    </form>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
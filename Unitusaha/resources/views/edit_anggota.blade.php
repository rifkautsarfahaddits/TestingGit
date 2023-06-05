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
                    @foreach($anggota as $p)
                    <form action="/anggota/update" method="post">
                        {{ csrf_field() }}
                        
                        <input type="hidden" name="id_anggota" value="{{ $p->id_anggota }}"> <br/>
                        nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/>
                        alamat <input type="text" required="required" name="alamat" value="{{ $p->alamat }}"> <br/>
                        telepon <input type="text" required="required" name="telepon" value="{{ $p->telepon }}"> <br/>
                        email <input type="text" required="required" name="email" value="{{ $p->email }}"> <br/>
                        jenis_kelamin <input type="text" required="required" name="jenis_kelamin" value="{{ $p->jenis_kelamin }}"> <br/>
                        status <input type="text" required="required" name="status" value="{{ $p->status }}"> <br/>
                        <input type="submit" value="Simpan Data">
                    </form>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>

@endsection



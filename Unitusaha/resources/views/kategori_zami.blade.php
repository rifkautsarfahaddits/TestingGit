@extends('layouts.user_type.auth')
@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Tabel kategori_zami</h5>
                        </div>
                        <a href="/kategori_zami/tambah" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Tambah</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        IDKategori
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        NamaKategori
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        IDBuku
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Opsi
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($kategori_zami as $u)
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{ $u-> IDKategori}}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $u->NamaKategori}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $u->IDBuku }}</p>

                                    </td>
                                    <td class="text-center">
                                        <a href="/kategori_zami/edit/{{ $u->IDKategori}}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit data">
                                            <i class="fas fa-user-edit text-secondary"></i>
                                        </a>
                                        <span>
                                            <a href="/kategori_zami/hapus/{{ $u->IDKategori }}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Hapus data">
                                                <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection
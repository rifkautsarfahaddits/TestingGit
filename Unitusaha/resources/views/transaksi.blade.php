@extends('layouts.user_type.auth')
@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Tabel transaksi</h5>
                        </div>
                        <a href="/transaksi/tambah" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Tambah</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									id_transaksi
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
									tgl_transaksi
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									jenis_transaksi
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									id_anggota
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									id_usaha
                                    </th>
									<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									nominal
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Opsi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

							@foreach($transaksi as $u)
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{ $u->id_transaksi}}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $u->tgl_transaksi }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $u->jenis_transaksi }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $u->id_anggota }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $u->id_usaha }}</p>
                                    </td>
									<td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $u->nominal }}</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="/transaksi/edit/{{ $u->id_transaksi}}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit data">
                                            <i class="fas fa-user-edit text-secondary"></i>
											</a>
                                        <span>
                                            <a href="/transaksi/hapus/{{ $u->id_transaksi }}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Hapus data">
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
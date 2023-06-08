@extends('layouts.user_type.auth')
@section('content')<!DOCTYPE html>

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Tabel pembelian</h5>
                        </div>
                        <a href="/tambah_pembelian" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Tambah</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									id_pembelian
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
									tgl_pembelian
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									id_supplier
                                    </th>
									<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									id_barang
									</th>
									<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									jumlah_barang
									</th>
									<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									harga_beli
									</th>
									<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									total_pembelian
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Opsi
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
								@foreach($pembelian as $k)
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{ $k->id_pembelian }}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $k->tgl_pembelian }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $k->id_supplier }}</p>
                                    </td>
									<td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $k->id_barang }}</p>
                                    </td>
									<td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $k->jumlah_barang }}</p>
                                    </td>
									<td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $k->harga_beli }}</p>
                                    </td>
									<td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $k->total_pembelian }}</p>
                                    </td>
                            
                                    <td class="text-center">
                                        <a href="/pembelian/edit/{{ $k->id_pembelian }}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit data">
                                            <i class="fas fa-user-edit text-secondary"></i>
                                        </a>
                                        <span>
                                            <a href="/pembelian/hapus/{{ $k->id_pembelian }}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Hapus data">
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

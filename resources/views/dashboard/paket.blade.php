@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <h1 class="mt-4">Daftar Paket</h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <button class="btn btn-primary btn-user btn-block">Tambah Paket</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-1">
                <div class="table-responsive">
                    <table id="tabel-profil" class="table table-striped">
                        <thead>
                            <tr>
                                <td colspan="4">
                                    <h5>Nama Paket</h5>
                                </td>
                                <td colspan="4">
                                    <h5>Kode Seksi Utama</h5>
                                </td>
                                <td colspan="4">
                                    <h5>Dosen Pembimbing</h5>
                                </td>
                                <td colspan="4">
                                    <h5>Jenis Program</h5>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($packets as $packets)

                            <tr>
                                <td colspan="4">
                                    <h5>{{$packets->nama_paket}}</h5>
                                </td>
                                <td colspan="4">
                                    <h5>{{$packets->kode_seksi_utama}}</h5>
                                </td>
                                <td colspan="4">
                                    <h5>{{$packets->dosen}}</h5>
                                </td>
                                <td colspan="4">
                                    <h5>{{$packets->jenis}}</h5>
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
@endsection

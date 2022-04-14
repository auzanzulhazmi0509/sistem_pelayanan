@extends('layouts.app')
@section('content')
<!-- Page Heading -->
<div class="page-heading">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>Data Surat Kelahiran</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Nama Anak</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $surat->nama_anak }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Waktu Lahir</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $surat->waktu_lahir }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Tempat Lahir</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $surat->tempat_lahir }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Jenis Kelamin</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                @if($surat->jenis_kelamin == "L")
                                Laki-laki
                                @else
                                Perempuan
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Golongan Darah</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $surat->golongan_darah }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Agama</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $surat->agama }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Anak Ke-</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $surat->anak_ke }}
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="btn btn-danger" href="{{ route('surat-kelahiran.index') }}">Kembali</a>
</div>
@endsection

@extends('layouts.app')
@section('content')
<!-- Page Heading -->
<div class="page-heading">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>Data Surat Kematian</h1>
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
                                <h6 class="mb-0">NIK</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $surat->nik }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Tanggal Meninggal</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $surat->tanggal_meninggal }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Penyebab Meninggal</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $surat->penyebab_meninggal }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Tempat Meninggal</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $surat->tempat_meninggal }}
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="btn btn-danger" href="{{ route('surat-kematian.index') }}">Kembali</a>
</div>
@endsection

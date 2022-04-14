@extends('layouts.app')
@section('content')
<!-- Page Heading -->
<div class="page-heading">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>Form Surat Menjadi Penduduk</h1>
            </div>
        </div>
    </div>
</div>

<!-- Page Heading -->
<div class="page-heading">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3>Silahkan masukkan data menjadi penduduk</h3>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Perhatian!</strong> Ada masalah dengan inputan anda<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form method="POST" action="{{ route('surat-penduduk.store') }}">
                        @csrf
                            <div class="form-group">
                                <label for="nik">NIK :</label>
                                <input readonly type="text" class="form-control" name="nik" id="nik" value="{{ $kepala->nik }}">
                            </div>
                            <div class="form-group">
                                <label for="no_kk">Nomor KK :</label>
                                @foreach ($anggota as $agt)
                                    @if ($loop->iteration == 1)
                                    <input type="text" class="form-control" id="no_kk" name="no_kk" value="{{ $agt->no_kk }}" readonly>
                                    @endif
                                @endforeach
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama :</label>
                                <input readonly type="text" class="form-control" name="nama" id="nama" value="{{$kepala->keluarga->nama}}">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alasan Pindah :</label>
                                <textarea class="form-control" id="alasan_pindah" name="alasan_pindah" placeholder="Masukkan Alasan Pindah"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="nama">Jumlah Pengikut :</label>
                                <input type="number" value="0" min="0" class="form-control" name="jumlah_pengikut" id="jumlah_pengikut" placeholder="Masukkan Jumlah Pengikut">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('surat-penduduk.index') }}" class="btn btn-danger">CANCEL</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

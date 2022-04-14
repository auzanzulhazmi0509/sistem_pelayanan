@extends('layouts.app')
@section('content')
<!-- Page Heading -->
<div class="page-heading">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>Form Surat Kelahiran</h1>
            </div>
        </div>
    </div>
</div>

<!-- Page Heading -->
<div class="page-heading">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3><strong>Silahkan masukkan data kelahiran</strong></h3>
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
                        <form method="POST" action="{{ route('surat-kelahiran.store') }}" id="surat_kelahiran">
                            @csrf
                            <div class="form-group">
                                <label for="waktu">Waktu Lahir :</label>
                                <input type="date" class="form-control" name="waktu_lahir" id="waktu_lahir"
                                    placeholder="dd-mm-yyyy" value="" min="1997-01-01" max=<?php echo date('Y-m-d'); ?>
                                    placeholder="Pilih Tanggal">
                            </div>
                            <div class="form-group">
                                <label for="tempat">Tempat Lahir :</label>
                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir"
                                    placeholder="Masukkan Kota">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Anak :</label>
                                <input type="text" class="form-control" name="nama_anak" id="nama_anak"
                                    placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label for="jenis-kelamin">Jenis Kelamin :</label>
                                <div class="row">
                                    <div class="col-sm">
                                        <input type="radio" class="form-control" id="L" value="L" name="jenis_kelamin">
                                        <label for="L">Laki-laki</label>
                                    </div>
                                    <div class="col-sm">
                                        <input type="radio" class="form-control" id="P" value="P" name="jenis_kelamin">
                                        <label for="P">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="goldar">Golongan Darah :</label>
                                <div class="row">
                                    <div class="col-sm">
                                        <input type="radio" class="form-control" id="A" value="A" name="golongan_darah">
                                        <label for="A">A</label>
                                    </div>
                                    <div class="col-sm">
                                        <input type="radio" class="form-control" id="B" value="B" name="golongan_darah">
                                        <label for="B">B</label>
                                    </div>
                                    <div class="col-sm">
                                        <input type="radio" class="form-control" id="O" value="O" name="golongan_darah">
                                        <label for="O">O</label>
                                    </div>
                                    <div class="col-sm">
                                        <input type="radio" class="form-control" id="AB" value="AB"
                                            name="golongan_darah">
                                        <label for="AB">AB</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="agama">Agama :</label>
                                <select class="form-control" name="agama" id="agama">
                                    <option disabled selected>Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Kong Hu Chu">Kong Hu Chu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="anak_ke">Anak Ke : </label>
                                <input readonly type="number" value="{{ $jumlah-1 }}" id="anak_ke" name="anak_ke" min="1" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nik-ayah">NIK Ayah : </label>
                                @foreach ($anggota as $agt)
                                @if ($loop->index == 0)
                                <input type="text" value="{{ $agt->keluarga->nik }}" id="nik_ayah" name="nik_ayah" class="form-control" readonly>
                                @endif
                                @endforeach
                            </div>
                            <div class="form-group">
                                <label for="nik-ibu">NIK Ibu : </label>
                                @foreach ($anggota as $agt)
                                @if ($loop->index == 1)
                                <input type="text" value="{{ $agt->keluarga->nik }}" id="nik_ibu" name="nik_ibu" class="form-control" readonly>
                                @endif
                                @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('surat-kelahiran.index') }}" class="btn btn-danger">CANCEL</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

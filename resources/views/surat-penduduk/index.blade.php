@extends('layouts.app')
@section('content')
<!-- Page Heading -->
<div class="page-heading">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>Data Pengajuan Surat Menjadi Penduduk</h1>
            </div>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<!-- Tables -->
<section class="tables">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <a class="btn btn-success" href="{{ route('surat-penduduk.create') }}">Ajukan Surat Menjadi Penduduk</a>
            </div>
            <div class="col-md-12">
                <div class="default-table">
                    <table>
                        <caption></caption>
                        <thead>
                            <tr>
                                <th scope="">No.</th>
                                <th scope="">Tanggal Pengajuan</th>
                                <th scope="">Nama</th>
                                <th scope="">Alasan Pindah</th>
                                <th scope="">Jumlah Pengikut</th>
                                <th scope="">Status</th>
                                <th scope="">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($surat as $srt)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $srt->created_at }}</td>
                                <td>{{ $srt->nama }}</td>
                                <td>{{ $srt->alasan_pindah }}</td>
                                <td>{{ $srt->jumlah_pengikut }}</td>
                                <td>@if ($srt->status == 0)
                                        Dalam proses persetujuan
                                    @else
                                        Disetujui
                                    @endif</td>
                                <td>
                                    <form action="{{ route('surat-penduduk.destroy', $srt->id ) }}" method="POST">
                                        @if ($srt->status == 1)
                                        <a class="btn btn-primary" href="{{ route('surat-penduduk.cetak', $srt->id) }}"><i class="fa fa-print" aria-hidden="true"></i></a>
                                        @endif
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- TARUH LINKS DISINI-->
                </div>

            </div>
        </div>
    </div>
</section>

@endsection

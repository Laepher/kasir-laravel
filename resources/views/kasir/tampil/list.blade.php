@extends('layout.layout')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">{{ $title }}</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $title }}</a></li>
                </ol>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">{{ $title }}</h4>
                            </div>
                            <hr>
                            {{-- <button class="btn btn-primary btn-s" type="button" data-target="#modalCreate"
                                data-toggle="modal">
                                Tambah Transaksi
                            </button> --}}
                            <a href="/transaksi" class="btn btn-primary">Tambah Transaksi</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No. Transaksi</th>
                                        <th>Tanggal</th>
                                        <th>Total Bayar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($data_kasir as $row)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $row->no_transaksi }}</td>
                                            <td>{{ date('d/M/Y', strtotime($row->tgl_transaksi)) }}</td>
                                            <td>Rp {{ number_format($row->total_bayar) }}</td>
                                            <td>
                                                {{-- <a href="#" target="_blank" data-toggle="modal"
                                                        class="btn btn-s btn-primary">Detail</a> --}}
                                                <a href="#modalHapus{{ $row->id }}" data-toggle="modal"
                                                    class="btn btn-s btn-danger">Hapus</a>
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
    @foreach ($data_kasir as $c)
        <div class="modal fade" id="modalHapus{{ $c->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Data Transaksi</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <form action="/transaksi/hapus/{{ $c->id }}" method="GET">
                        @csrf
                        <div class="modal-body">
                            <div class="modal-body">
                                <div class="form-group">
                                    <h5>Apakah Anda Yakin Menghapus Transaksi Ini?</h5>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection

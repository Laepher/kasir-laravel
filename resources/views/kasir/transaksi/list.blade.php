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
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="">Pilih Barang</label>
                                        <select name="nama_produk" class="form-control">
                                            <option value="">-- Pilih --</option>
                                            @foreach ($barang as $b)
                                                <option value="{{ $b->id }}">{{ $b->nama_barang }}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Pilih Barang</label>
                                        <select name="harga1" class="form-control">
                                            <option value="">-- Pilih --</option>
                                            @foreach ($barang as $b)
                                                <option value="{{ $b->id }}">{{ $b->harga }}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="number" name="stok" class="form-control" placeholder="Stok"
                                            required>
                                        <div class="input-group-append"><span class="input-group-text"></span>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="">Tgl. Transaksi</label>
                                        <input type="text" class="form-control" value="{{ date('d/M/Y') }}" readonly
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

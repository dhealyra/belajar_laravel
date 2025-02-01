@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show Data Transaksi') }}</div>

                <div class="card-body">
                    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-2">
                            <label class="form-label">Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" value="{{ $transaksi->jumlah }}" disabled>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Tanggal Transaksi</label>
                            <input type="date" class="form-control" name="tanggal_transaksi" value="{{ $transaksi->tanggal_transaksi }}" disabled>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">ID Buku</label>
                            <select name="id_buku" class="form-control" id="" disabled>
                                <option selected>Nama Buku</option>
                                @foreach ($buku as $data)
                                    <option value="{{ $data->id }}"  {{ $data->id == $transaksi->id_buku ? 'selected' : '' }}>{{ $data->nama_buku }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">ID Pembeli</label>
                            <select name="id_pembeli" class="form-select" id="" disabled>
                                <option selected>Nama Pembeli</option>
                                @foreach ($pembeli as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $transaksi->id_pembeli ? 'selected' : '' }}>{{ $data->nama_pembeli }}</option>
                                @endforeach
                            </select>
                        </div>
                        <a href="{{ route('transaksi.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
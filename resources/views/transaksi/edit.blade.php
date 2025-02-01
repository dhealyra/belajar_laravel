@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data Transaksi') }}</div>

                <div class="card-body">
                    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-2">
                            <label class="form-label">Jumlah</label>
                            <input type="number" name="jumlah" value="{{ $transaksi->jumlah }}" class="form-control form-control-sm @error('jumlah')
                                is-invalid
                            @enderror">
                            @error('jumlah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>   
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Tanggal Transaksi</label>
                            <input type="date" name="tanggal_transaksi" value="{{ $transaksi->tanggal_transaksi }}" class="form-control form-control-sm @error('tanggal_transaksi')
                                is-invalid
                            @enderror">
                            @error('tanggal_transaksi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>   
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">ID Buku</label>
                            <select name="id_buku" class="form-select" id="">
                                <option selected>Nama Buku</option>
                                @foreach ($buku as $data)
                                    <option value="{{ $data->id }}"  {{ $data->id == $transaksi->id_buku ? 'selected' : '' }}>{{ $data->nama_buku }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">ID Pembeli</label>
                            <select name="id_pembeli" class="form-select" id="">
                                <option selected>Nama Pembeli</option>
                                @foreach ($pembeli as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $transaksi->id_pembeli ? 'selected' : '' }}>{{ $data->nama_pembeli }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
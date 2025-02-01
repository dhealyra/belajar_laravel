@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show Data Buku') }}</div>

                <div class="card-body">
                    <form action="{{ route('buku.update', $buku->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-2">
                            <label class="form-label">Nama Buku</label>
                            <input type="text" class="form-control" name="nama_buku" value="{{ $buku->nama_buku }}" disabled>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Harga</label>
                            <input type="number" class="form-control" name="harga" value="{{ $buku->harga }}" disabled>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Stok</label>
                            <input type="number" class="form-control" name="stok" value="{{ $buku->stok }}" disabled>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Image :</label>
                            <img src="{{ asset('/images/buku/' . $buku->image) }}" alt="" class="rounded mx-auto d-block mb-3" style="width: 30%">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">ID Penerbit</label>
                            <select name="id_penerbit" class="form-select" id="" disabled>
                                <option selected>Nama Penerbit</option>
                                @foreach ($penerbit as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $buku->id_penerbit ? 'selected' : '' }}>{{ $data->nama_penerbit }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Tanggal Terbit</label>
                            <input type="date" class="form-control" name="tanggal_terbit" value="{{ $buku->tanggal_terbit }}" disabled>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">ID Genre</label>
                            <select name="id_genre" class="form-select" id="" disabled>
                                <option selected>Genre</option>
                                @foreach ($genre as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $buku->id_genre ? 'selected' : '' }}>{{ $data->genre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <a href="{{ route('buku.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Produk') }}</div>

                <div class="card-body">
                    <form action="{{ route('produk.update', $produk->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-2">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" name="nama_produk" value="{{ $produk->nama_produk }}">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Harga</label>
                            <input type="text" class="form-control" name="harga" value="{{ $produk->harga }}">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Stok</label>
                            <input type="text" class="form-control" name="stok" value="{{ $produk->stok }}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">ID Kategori</label>
                            <select name="id_kategori" class="form-control" id="">
                                <option selected>Nama kategori</option>
                                @foreach ($kategori as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $produk->id_kategori ? 'selected' : '' }}>{{ $data->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Cover :</label>
                            <img src="{{ asset('/images/produk/' . $produk->cover) }}" alt="">
                            <input type="file" class="form-control" name="cover" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

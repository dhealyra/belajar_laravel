@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data Buku') }}</div>

                <div class="card-body">
                    <form action="{{ route('buku.update', $buku->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-2">
                            <label class="form-label">Nama Buku</label>
                            <input type="text" name="nama_buku" value="{{ $buku->nama_buku }}" class="form-control form-control-sm @error('nama_buku')
                                is-invalid
                            @enderror">
                            @error('nama_buku')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>   
                            @enderror>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Harga</label>
                            <input type="number" name="harga" value="{{ $buku->harga }}" class="form-control form-control-sm @error('harga')
                                is-invalid
                            @enderror">
                            @error('harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>   
                            @enderror>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Stok</label>
                            <input type="number" name="stok" value="{{ $buku->stok }}" class="form-control form-control-sm @error('stok')
                                is-invalid
                            @enderror">
                            @error('stok')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>   
                            @enderror>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Image :</label>
                            <img src="{{ asset('/images/buku/' . $buku->image) }}" alt="" class="rounded mx-auto d-block mb-3" style="width: 30%">
                            <input type="file" name="Image" required class="form-control form-control-sm @error('image')
                                is-invalid
                            @enderror">
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>   
                            @enderror>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">ID Penerbit</label>
                            <select name="id_penerbit" class="form-select" id="">
                                <option selected>Nama Penerbit</option>
                                @foreach ($penerbit as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $buku->id_penerbit ? 'selected' : '' }}>{{ $data->nama_penerbit }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Tanggal Terbit</label>
                            <input type="date" name="tanggal_terbit" value="{{ $buku->tanggal_terbit }}" class="form-control form-control-sm @error('tanggal_terbit')
                                is-invalid
                            @enderror">
                            @error('tanggal_terbit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>   
                            @enderror>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">ID Genre</label>
                            <select name="id_genre" class="form-select" id="">
                                <option selected>Genre</option>
                                @foreach ($genre as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $buku->id_genre ? 'selected' : '' }}>{{ $data->genre }}</option>
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
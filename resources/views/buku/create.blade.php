@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Buku') }}</div>

                <div class="card-body">   
                    <form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data" class="form-group">
                        @csrf
                        <div class="form-group mb-2">
                            <label class="form-label">Nama Buku</label>
                            <input type="text"  name="nama_buku" class="form-control form-control-sm @error('nama_buku')
                                is-invalid
                            @enderror">
                            @error('nama_buku')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>   
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Harga</label>
                            <input type="number" class="form-control form-control-sm @error('harga')
                                is-invalid
                            @enderror" name="harga">
                            @error('harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>   
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Stok</label>
                            <input type="number" class="form-control form-control-sm @error('stok')
                                is-invalid
                            @enderror" name="stok">
                            @error('stok')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>   
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Image :</label>
                            <input type="file" class="form-control form-control-sm @error('image')
                                is-invalid
                            @enderror" name="image">
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>   
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">ID Penerbit</label>
                            <select name="id_penerbit" class="form-select" form-control-sm @error('id_penerbit')
                            is-invalid
                        @enderror" id="">
                                <option selected>Nama Penerbit</option>
                                @foreach ($penerbit as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_penerbit }}</option>
                                @endforeach
                            </select>
                            @error('penerbit')
                            <div class="invalid-feedback">
                                {{ $massage }}
                            </div>   
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Tanggal Terbit</label>
                            <input type="date" class="form-control form-control-sm @error('tanggal_terbit')
                                is-invalid
                            @enderror" name="tanggal_terbit">
                            @error('tanggal_terbit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>   
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">ID Genre</label>
                            <select name="id_genre" class="form-select" form-control-sm @error('id_genre')
                            is-invalid
                        @enderror" id="">
                                <option selected>Genre</option>
                                @foreach ($genre as $data)
                                    <option value="{{ $data->id }}">{{ $data->genre }}</option>
                                @endforeach
                            </select>
                            @error('id_genre')
                            <div class="invalid-feedback">
                                {{ $massage }}
                            </div>   
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

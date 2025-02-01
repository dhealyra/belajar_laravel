@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Pembeli') }}</div>

                <div class="card-body">
                    <form action="{{ route('pembeli.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-2">
                            <label class="form-label">Nama pembeli</label>
                            <input type="text" name="nama_pembeli" class="form-control form-control-sm @error('nama_pembeli')
                                is-invalid
                            @enderror">
                            @error('nama_pembeli')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>   
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Jenis Kelamin</label>
                            <div class="d-flex align-items-center gap-3">
                                <div>
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="male" value="Laki-Laki">
                                    <label for="male">Laki-Laki</label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="female" value="Perempuan">
                                    <label for="female">Perempuan</label>
                                </div>
                            </div>
                        </div>                        
                        <div class="form-group mb-2">
                            <label class="form-label">Telepon</label>
                            <input type="number" name="telepon" class="form-control form-control-sm @error('telepon')
                                is-invalid
                            @enderror">
                            @error('telepon')
                            <div class="invalid-feedback">
                                {{ $message }}
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

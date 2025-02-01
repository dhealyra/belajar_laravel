@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">

        <div class="card-header" style="display: flex; justify-content: space-between;">
          <p style="position: relative; top: 5px;">{{ __('Tambah Data Penerbit') }}</p>
        </div>

        <div class="card-body">
          <form action="{{ route('penerbit.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-2">
              <label class="form-label">Nama Penerbit</label>
              <input type="text" name="nama_penerbit" " class="form-control form-control-sm @error('nama_penerbit')
              is-invalid
          @enderror">
          @error('nama_penerbit')
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
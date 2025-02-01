@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">

        <div class="card-header" style="display: flex; justify-content: space-between;">
          <p style="position: relative; top: 5px;">{{ __('Tambah Data Genre') }}</p>
        </div>

        <div class="card-body">
          <form action="{{ route('genre.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-2">
              <label class="form-label">Genre</label>
              <input type="text" name="genre" class="form-control form-control-sm @error('genre')
              is-invalid
          @enderror">
          @error('genre')
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
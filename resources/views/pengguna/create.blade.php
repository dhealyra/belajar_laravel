@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">

        <div class="card-header" style="display: flex; justify-content: space-between;">
          <p style="position: relative; top: 5px;">{{ __('Tambah Data Pengguna') }}</p>
        </div>

        <div class="card-body">
          <form action="{{ route('pengguna.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-2">
              <label class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
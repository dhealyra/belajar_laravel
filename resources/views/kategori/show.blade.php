@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">

        <div class="card-header" style="display: flex; justify-content: space-between;">
          <p style="position: relative; top: 5px;">{{ __('Show Data Kategori') }}</p>
        </div>

        <div class="card-body">
          <form action="{{ route('kategori.update', $kategori->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-2">
              <label class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama" value="{{ $kategori->nama_kategori }}" disabled>
            </div>
            <a href="{{ route('kategori.index') }}" class="btn btn-primary">Back</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
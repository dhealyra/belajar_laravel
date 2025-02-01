@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">

        <div class="card-header" style="display: flex; justify-content: space-between;">
          <p style="position: relative; top: 5px;">{{ __('Show Data pembeli') }}</p>
        </div>

        <div class="card-body">
          <form action="{{ route('pembeli.update', $pembeli->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-2">
                <label class="form-label">Nama pembeli</label>
                <input type="text" class="form-control" name="nama_pembeli" value="{{ $pembeli->nama_pembeli }}" disabled>
            </div>
            <div class="form-group mb-2">
                <label class="form-label">Jenis Kelamin</label>
                <div class="d-flex align-items-center gap-3">
                    <div>
                        <input type="radio" name="jenis_kelamin" id="male" value="Laki-Laki" {{ $pembeli->jenis_kelamin == 'Laki-Laki' ? 'checked' : '' }} disabled>
                        <label for="male">Laki-Laki</label>
                    </div>
                    <div>
                        <input type="radio" name="jenis_kelamin" id="female" value="Perempuan" {{ $pembeli->jenis_kelamin == 'Perempuan' ? 'checked' : '' }} disabled>
                        <label for="female">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group mb-2">
                <label class="form-label">Telepon</label>
                <input type="number" class="form-control" name="telepon" value="{{ $pembeli->telepon }}" disabled>
            </div>
            <a href="{{ route('pembeli.index') }}" class="btn btn-primary">Back</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">

        <div class="card-header" style="display: flex; justify-content: space-between;">
          <p style="position: relative; top: 5px;">{{ __('Show Data Costumer') }}</p>
        </div>

        <div class="card-body">
          <form action="{{ route('costumer.update', $costumer->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-2">
                <label class="form-label">Name Costumer</label>
                <input type="text" class="form-control" name="name_costumer" value="{{ $costumer->name_costumer }}" disabled>
            </div>
            <div class="form-group mb-2">
                <label class="form-label">Gender</label>
                <div class="d-flex align-items-center gap-3">
                    <div>
                        <input type="radio" name="gender" id="male" value="Laki-Laki" {{ $costumer->gender == 'Laki-Laki' ? 'checked' : '' }} disabled>
                        <label for="male">Laki-Laki</label>
                    </div>
                    <div>
                        <input type="radio" name="gender" id="female" value="Perempuan" {{ $costumer->gender == 'Perempuan' ? 'checked' : '' }} disabled>
                        <label for="female">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group mb-2">
                <label class="form-label">Contact</label>
                <input type="number" class="form-control" name="contact" value="{{ $costumer->contact }}" disabled>
            </div>
            <a href="{{ route('costumer.index') }}" class="btn btn-primary">Back</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
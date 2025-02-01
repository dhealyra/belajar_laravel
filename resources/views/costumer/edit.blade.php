@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data Costumer') }}</div>

                <div class="card-body">
                    <form action="{{ route('costumer.update', $costumer->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-2">
                            <label class="form-label">Name Costumer</label>
                            <input type="text" class="form-control" name="name_costumer" value="{{ $costumer->name_costumer }}">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Gender</label>
                            <div class="d-flex align-items-center gap-3">
                                <div>
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="Laki-Laki" {{ $costumer->gender == 'Laki-Laki' ? 'checked' : '' }}>
                                    <label for="male">Laki-Laki</label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="Perempuan" {{ $costumer->gender == 'Perempuan' ? 'checked' : '' }}>
                                    <label for="female">Perempuan</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Contact</label>
                            <input type="number" class="form-control" name="contact" value="{{ $costumer->contact }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
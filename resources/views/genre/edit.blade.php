@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data Genre') }}</div>

                <div class="card-body">
                    <form action="{{ route('genre.update', $genre->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-2">
                            <label class="form-label">Genre</label>
                            <input type="text" name="genre" value="{{ $genre->genre }}"  class="form-control form-control-sm @error('genre')
                            is-invalid
                        @enderror">
                        @error('genre')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>   
                        @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

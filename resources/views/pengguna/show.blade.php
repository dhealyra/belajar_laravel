@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show Data Pengguna') }}</div>

                <div class="card-body">
                    <form action="{{ route('pengguna.update', $pengguna->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-2">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $pengguna->nama }}" disabled>
                        </div>
                        <a href="{{ route('pengguna.index') }}" class="btn btn-primary">Back</a>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

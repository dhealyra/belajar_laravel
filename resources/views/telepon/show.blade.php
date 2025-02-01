@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Telepon') }}</div>

                <div class="card-body">
                    <form action="{{ route('telepon.update', $telepon->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-2">
                            <label class="form-label">Nomor</label>
                            <input type="text" class="form-control" name="nomor" value="{{ $telepon->nomor }}" disabled>
                        </div>
                        <div class="form-group mb-2">
                            <label for="">ID Pengguna</label>
                            <select name="id_pengguna" class="form-control" id="" disabled>
                                @foreach ($pengguna as $data)
                                    <option>{{ $data->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <a href="{{ route('telepon.index') }}" class="btn btn-primary">Back</a>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

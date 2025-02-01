@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">

        <div class="card-header" style="display: flex; justify-content: space-between;">
          <p style="position: relative; top: 5px;">{{ __('Data Buku') }}</p>
        </div>

        <div class="card-body">

          @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          <a href="{{ route('buku.create') }}" class="btn btn-primary w-20">Add</a>

          <table class="table" style="width: 95%; margin: 0 auto;">
            <thead>
              <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">Nama Buku</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Image</th>
                <th scope="col">ID Penerbit</th>
                <th scope="col">Tanggal Penerbit</th>
                <th scope="col">ID Genre</th>
                <th scope="col" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @php $no = 1; @endphp
              @foreach ($buku as $data)
                <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <td>{{ $data->nama_buku }}</td>
                  <td>{{ $data->harga }}</td>
                  <td>{{ $data->stok }}</td>
                  <td>
                    <img src="{{ asset('/images/buku/'.$data->image) }}" class="rounded mx-auto d-block" width="100">
                  </td>
                  <td>{{ $data->penerbit->nama_penerbit }}</td>
                  <td>{{ $data->tanggal_terbit }}</td>
                  <td>{{ $data->genre->genre }}</td>
                  <td>
                    <div style="display: flex; gap: 3px; position: relative; left: 40px;">
                      <a href="{{ route('buku.edit', $data->id) }}" class="btn btn-success">Edit</a>
                      <a href="{{ route('buku.show', $data->id) }}" class="btn btn-warning">Show</a>
                      <form action="{{ route('buku.destroy', $data->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                      </form>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection

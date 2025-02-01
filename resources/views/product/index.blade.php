@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">

        <div class="card-header" style="display: flex; justify-content: space-between;">
          <p style="position: relative; top: 5px;">{{ __('Data Product') }}</p>
        </div>

        <div class="card-body">

          @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          <a href="{{ route('product.create') }}" class="btn btn-primary w-20">Add</a>

          <table class="table" style="width: 95%; margin: 0 auto;">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Name Product</th>
                <th scope="col">Merk</th>
                <th scope="col">Price</th>
                <th scope="col">Stock</th>
                <th scope="col" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @php $no = 1; @endphp
              @foreach ($product as $data)
                <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <td>{{ $data->name_product }}</td>
                  <td>{{ $data->merk }}</td>
                  <td>{{ $data->price }}</td>
                  <td>{{ $data->stock }}</td>
                  <td>
                    <div style="display: flex; gap: 3px; position: relative; left: 60px;">
                      <a href="{{ route('product.edit', $data->id) }}" class="btn btn-success">Edit</a>
                      <a href="{{ route('product.show', $data->id) }}" class="btn btn-warning">Show</a>
                      <form action="{{ route('product.destroy', $data->id) }}" method="post">
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

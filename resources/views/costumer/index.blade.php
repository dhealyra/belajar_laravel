@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">

        <div class="card-header" style="display: flex; justify-content: space-between;">
          <p style="position: relative; top: 5px;">{{ __('Data Costumer') }}</p>
        </div>

        <div class="card-body">

          @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          <a href="{{ route('costumer.create') }}" class="btn btn-primary w-20">Add</a>

          <table class="table" style="width: 95%; margin: 0 auto;">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Name Costumer</th>
                <th scope="col">Gender</th>
                <th scope="col">Contact</th>
                <th scope="col" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @php $no = 1; @endphp
              @foreach ($costumer as $data)
                <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <td>{{ $data->name_costumer }}</td>
                  <td>{{ $data->gender }}</td>
                  <td>{{ $data->contact }}</td>
                  <td>
                    <div style="display: flex; gap: 3px; position: relative; left: 50px;">
                      <a href="{{ route('costumer.edit', $data->id) }}" class="btn btn-success">Edit</a>
                      <a href="{{ route('costumer.show', $data->id) }}" class="btn btn-warning">Show</a>
                      <form action="{{ route('costumer.destroy', $data->id) }}" method="post">
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

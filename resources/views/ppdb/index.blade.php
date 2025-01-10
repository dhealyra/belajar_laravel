@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <p style="position: relative; top:5px;">{{ __('Data Calon Siswa') }}</p>
                  <a href="{{ route('ppdb.create') }}" class="btn btn-primary w-20">Add</a>
                </div>
                @if (session('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

                    

                    <table class="table">
                        <thead class="text-center">
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Asal Sekolah</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                            @php $no = 1; @endphp
                            @foreach ($siswa as $data)
                          <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $data->nama_lengkap }}</td>
                            <td>{{ $data->jenis_kelamin }}</td>
                            <td>{{ $data->agama }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->telepon }}</td>
                            <td>{{ $data->asal_sekolah }}</td>
                            <td>
                                <div class="" style="display: flex; gap:10px; position: relative; left: 40px;">
                                  <a href="{{ route('ppdb.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                  <a href="{{ route('ppdb.show', $data->id) }}" class="btn btn-warning">Show</a>
                                  
                                  <form action="{{ route('ppdb.destroy', $data->id) }}" method="post">
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

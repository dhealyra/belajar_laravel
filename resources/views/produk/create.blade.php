@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">

        <div class="card-header" style="display: flex; justify-content: space-between;">
          <p style="position: relative; top: 5px;">{{ __('Tambah Data Produk') }}</p>
        </div>

        <div class="card-body">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
 
<!-- Create Post Form -->
          <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-2">
              <label class="form-label">Nama Produk</label>
              <input type="text" class="form-control" name="nama_produk" required>
            </div>
            <div class="form-group mb-2">
              <label class="form-label">Harga</label>
              <input type="text" class="form-control" name="harga" required>
            </div>
            <div class="form-group mb-2">
              <label class="form-label">Stok</label>
              <input type="text" class="form-control" name="stok" required>
            </div>
            <div class="form-group mb-2">
              <label for="">ID Kategori</label>
              <select name="id_kategori" class="form-control" id="" required>
                <option selected>Nama kategori</option>
                @foreach ($kategori as $data)
                  <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group mb-2">
              <label class="form-label">Cover :</label>
              <input type="file" class="form-control" name="cover">
            </div>
            
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

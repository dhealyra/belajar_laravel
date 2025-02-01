@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Product') }}</div>

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

                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-2">
                            <label class="form-label">Name Product</label>
                            <input type="text" class="form-control" name="name_product">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Merk</label>
                            <input type="text" class="form-control" name="merk">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Price</label>
                            <input type="number" class="form-control" name="price">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Stock</label>
                            <input type="number" class="form-control" name="stock">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

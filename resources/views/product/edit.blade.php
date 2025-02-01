@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data Product') }}</div>

                <div class="card-body">
                    <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-2">
                            <label class="form-label">Name Product</label>
                            <input type="text" class="form-control" name="name_product" value="{{ $product->name_product }}">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Merk</label>
                            <input type="text" class="form-control" name="merk" value="{{ $product->merk }}">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Price</label>
                            <input type="number" class="form-control" name="price" value="{{ $product->price }}">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Stock</label>
                            <input type="number" class="form-control" name="stock" value="{{ $product->stock }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
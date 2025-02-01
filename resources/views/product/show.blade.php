@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">

        <div class="card-header" style="display: flex; justify-content: space-between;">
          <p style="position: relative; top: 5px;">{{ __('Show Data Product') }}</p>
        </div>

        <div class="card-body">
          <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-2">
                <label class="form-label">Name Product</label>
                <input type="text" class="form-control" name="name_product" value="{{ $product->name_product }}" disabled>
            </div>
            <div class="form-group mb-2">
                <label class="form-label">Merk</label>
                <input type="text" class="form-control" name="merk" value="{{ $product->merk }}" disabled>
            </div>
            <div class="form-group mb-2">
                <label class="form-label">Price</label>
                <input type="number" class="form-control" name="price" value="{{ $product->price }}" disabled>
            </div>
            <div class="form-group mb-2">
                <label class="form-label">Stock</label>
                <input type="number" class="form-control" name="stock" value="{{ $product->stock }}" disabled>
            </div>
            <a href="{{ route('product.index') }}" class="btn btn-primary">Back</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
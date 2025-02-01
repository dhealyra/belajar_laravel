@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data Order') }}</div>

                <div class="card-body">
                    <form action="{{ route('order.update', $order->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-2">
                            <label class="form-label">ID Product</label>
                            <select name="id_product" class="form-select" id="">
                                <option selected>Name Product</option>
                                @foreach ($product as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $order->id_product ? 'selected' : '' }}>{{ $data->name_product }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Quantity</label>
                            <input type="number" class="form-control" name="quantity" value="{{ $order->quantity }}">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Order Date</label>
                            <input type="date" class="form-control" name="order_date" value="{{ $order->order_date }}">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">ID Costumer</label>
                            <select name="id_costumer" class="form-select" id="">
                                @foreach ($costumer as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $order->id_costumer ? 'selected' : '' }}>{{ $data->name_costumer }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
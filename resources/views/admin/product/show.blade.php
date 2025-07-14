@extends('admin.layouts.master')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Product Details</h6>
        <a href="{{ route('product.index') }}" class="btn btn-success">Back</a>
    </div>
    <div class="card-body">
        <p><strong>Name:</strong> {{ $product->name }}</p>
        <p><strong>Description:</strong> {{ $product->description }}</p>
        <p><strong>Price:</strong> {{ $product->price }}</p>
        <p><strong>Quantity:</strong> {{ $product->quantity }}</p>
    </div>
</div>
@endsection

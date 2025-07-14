@extends('admin.layouts.master')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Edit Product</h6>
        <a href="{{ route('product.index') }}" class="btn btn-success">Back</a>
    </div>
    <div class="card-body">
        <form action="{{ route('product.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="name" value="{{ $product->name }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" rows="3">{{ $product->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" class="form-control" name="price" value="{{ $product->price }}" required>
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" name="quantity" value="{{ $product->quantity }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
</div>
@endsection

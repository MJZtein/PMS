@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Product</label>
                <input type="text" name="title" class="form-control  @error('title')is-invalid @enderror" placeholder="Title" value="{{ $product->title }}" >
                @error('title')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="col mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control @error('price')is-invalid @enderror" placeholder="Price" value="{{ $product->price }}" >
                @error('price')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Product Code</label>
                <input type="text" name="product_code" class="form-control @error('product_code')is-invalid @enderror" placeholder="Product Code" value="{{ $product->product_code }}" >
                @error('product_code')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control @error('description')is-invalid @enderror" name="description" placeholder="Description" >{{ $product->description }}</textarea>
                @error('description')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
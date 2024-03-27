@extends('layouts.app')
  
@section('title', 'Add Product')
  
@section('contents')
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control @error('title')is-invalid @enderror" placeholder="Product">
                @error('title')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control @error('price')is-invalid @enderror" placeholder="Price">
                @error('price')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="product_code" class="form-control @error('product_code')is-invalid @enderror" placeholder="Product Code">
                @error('product_code')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="col">
                <textarea class="form-control @error('description')is-invalid @enderror" name="description" placeholder="Description"></textarea>
                @error('description')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    @endsection
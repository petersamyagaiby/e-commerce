@extends('layout.app')

@section('title')
    Create New Product
@endsection

@section('basic-section')
    <section>
        <div class="container my-5">
            <h1 class="text-center my-2 text-danger">Welcome to our create new product page</h1>
            <form method="post" action="{{ url('products/insert') }}" enctype="multipart/form-data">
                @csrf
                <div class="my-2">
                    <label class="form-label">Product Name</label>
                    <input type="text" class="form-control" value="{{ old('name') }}" name="name">
                    @error('name')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="my-2">
                    <label class="form-label">Product Price</label>
                    <input type="text" class="form-control" value="{{ old('price') }}" name="price">
                    @error('price')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="my-2">
                    <label class="form-label">Product Quantity</label>
                    <input type="text" class="form-control" value="{{ old('quantity') }}" name="quantity">
                    @error('quantity')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="my-2">
                    <label class="form-label">Product Description</label>
                    <textarea class="form-control" name="pro_desc">{{ old('pro_desc') }}</textarea>
                    @error('pro_desc')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="my-2">
                    <label class="form-label text-start">Product Image</label>
                    <input type="file" class="form-control" value="{{ old('image') }}" name="image">
                    @error('image')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="my-2">
                    <button type="submit" class="btn btn-danger" name="add-btn">Add Product</button>
                </div>
            </form>
        </div>
    </section>
@endsection
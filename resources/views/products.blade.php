@extends('layout.app')

@section('title')
    Products
@endsection

@section('basic-section')
<section>
    <div class="container my-5">
        <h1 class="text-center my-2 text-danger">Welcome to our shopping website</h1>
    
        <div class="row my-5">

                @foreach ( $products as $product )
                    
                <div class="col-md-6 col-lg-4 my-3">
                    <div class="card">
                        <img src="{{ asset("assets/images/$product->image") }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $product->name }}
                                <span class="badge bg-danger"> {{ $product->price }} L.E </span>
                            </h5>
                            <p class="card-text"></p>
                            <p class="card-text"> {{ $product->quantity }} </p>
                            <p class="card-text"> {{ substr($product->pro_desc,0,120) . "..." }} </p>
                            <a href="{{ url('/products' , $product->id) }}" class="btn btn-primary">Details</a>
                            {{-- @if ($_SESSION && $_SESSION['user_role'] == 'admin' ) --}}
                            <a href="{{ url('/products/edit' , $product->id )}}" class="btn btn-success">Edit</a>
                            <a href="{{ url('/products/delete' , $product->id )}}" class="btn btn-danger">Delete</a>
                            {{-- @endif --}}
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
</section>
@endsection
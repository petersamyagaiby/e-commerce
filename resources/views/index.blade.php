@extends('layout.app')
@section('title')
    Home Page
@endsection

@section('basic-section')

    <section class="my-5">
        <div class="container my-5">
            <h1 class="text-center text-danger">Welcome to our website</h1>
            <h4 class="my-2 text-center">here you can see latest products</h4>
            <div class="row">
    
                @foreach ($products as $product)
                <div class="col-md-6 col-lg-4 my-3">
                    <div class="card">
                        <img src="{{ asset("assets/images/$product->image") }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $product->name }}
                                <span class="badge bg-danger">{{ $product->price }} L.E</span>
                            </h5>
                            <p class="card-text">{{ $product->quantity }}</p>
                            <p class="card-text">{{ substr($product->pro_desc,0,120) . "..." }}</p>
                            <a href="{{ url('/products' , $product->id) }}" class="btn btn-primary">Details</a>
                            <a href="{{ url('/products/edit' , $product->id )}}" class="btn btn-success">Edit</a>
                            <a href="{{ url('/products/delete' , $product->id )}}" class="btn btn-danger">Delete</a>
                        </div>
                      </div>
                </div>
                @endforeach
    
            </div>
    
        </div>
    </section>
@endsection

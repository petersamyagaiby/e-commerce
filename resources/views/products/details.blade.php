@extends('layout.app')

@section('title')
    Product Details
@endsection

@section('basic-section')
    <section class="container my-5">

        <div class="row">
            <div class="col-xl-6 col-m-12">
                <img src="{{ asset("assets/images/$product->image") }}" alt="">
            </div>
            <div class="col-xl-6 col-m-12">
                <h2>
                    {{ $product->name }}
                    <span class="badge bg-danger"> {{ $product->price }} L.E </span>
                </h2>
                <p> {{ $product->pro_desc }} </p>
                <p>Available Quantity: <span class="text-danger"> {{ $product->quantity }} </span> </p>
            </div>
        </div>

    </section>
@endsection
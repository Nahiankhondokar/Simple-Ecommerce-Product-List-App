@extends('layouts.app')

@section('content')
<section class="container w-25">
    <div class="card" style="width: 18rem; p-2">
      <h4 class="text-center">Product Details</h4>
      <hr>
        <div class="card-body">
          <h5 class="card-title">Name : {{$product->name}}</h5>
          <p class="card-text">Price : {{$product->price}}</p>
          <p class="card-text">Quantity : {{$product->quantity}}</p>
          <p class="card-text">Description :{{$product->desc}}</p>
        </div>
      </div>
</section>
@endsection
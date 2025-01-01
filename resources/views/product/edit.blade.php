@extends('layouts.app')

@section('content')
<section class="container w-25">
    
    <form action="{{route('product.update', $product->id)}}" class="border p-3" method="POST">
      @csrf
      @method('PUT')
        <div class="form-title text-center">
            <h3>Product Update</h3>
            <hr>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" value="{{$product->name}}" name="name"  placeholder="Name">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" class="form-control" value="{{$product->desc}}" name="desc" placeholder="Description">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="number" class="form-control" value="{{$product->price}}" name="price" placeholder="Price">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Quantity</label>
            <input type="number" class="form-control" value="{{$product->quantity}}" name="quantity" placeholder="Quantity">
          </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
</section>
@endsection
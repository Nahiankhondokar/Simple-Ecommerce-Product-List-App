@extends('layouts.app')

@section('content')
<section class="container w-25">
    
    <form action="{{route('product.store')}}" class="border p-3" method="POST">
        @csrf
        <div class="form-title text-center">
            <h3>Product Create</h3>
            <hr>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" name="name"  placeholder="Name">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" class="form-control" name="desc"  placeholder="Name">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="number" class="form-control" name="price"  placeholder="Price">
            @error('price')
                <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Quantity</label>
            <input type="number" class="form-control" name="quantity" placeholder="Quantity">
            @error('quantity')
                <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>
@endsection
@extends('layouts.app')

@section('content')
<section class="container w-25">
    
    <form action="" class="border p-3">
        <div class="form-title text-center">
            <h3>Product Create</h3>
            <hr>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" value="name"  placeholder="Name">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" class="form-control" value="desc"  placeholder="Name">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="number" class="form-control" value="price"  placeholder="Price">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Quantity</label>
            <input type="number" class="form-control" value="quantity" placeholder="Quantity">
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>
@endsection
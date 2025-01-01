@extends('layouts.app')

@section('content')
<section class="container my-5">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse($products as $index => $product)
          <tr>
            <th scope="row">{{$index + 1}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->desc}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->quantity}}</td>
            <td>
                <a href=""><i class="fa-solid fa-eye"></i></a>
                <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
                <a href=""><i class="fa-solid fa-trash"></i></a>
            </td>
          </tr>

          @empty 
          <tr>
            <td colspan="6" class="text-danger font-weight-bold text-center">Not Data Found !</td>
          </tr>
          @endforelse
        </tbody>
    </table>
</section>
@endsection
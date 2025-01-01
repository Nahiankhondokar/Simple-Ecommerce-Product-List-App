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
            <td class="d-flex">
               <button class="border-0 bg-transparent">
                <a href="{{route('product.show', $product->id)}}"><i class="fa-solid fa-eye"></i></a>
               </button>
               <button class="border-0 bg-transparent">
                <a href="{{route('product.edit', $product->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
               </button>
                
                <form action="{{route('product.destroy', $product->id)}}" method="POST">
                  @csrf 
                  @method('DELETE')
                  <button type="submit" class="border-0 bg-transparent">
                    <i class="fa-solid fa-trash"></i>
                  </button>
                </form>
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
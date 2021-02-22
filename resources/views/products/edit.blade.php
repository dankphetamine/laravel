@extends('products.layout');

@section('content')

<div class="row">
  <div class="col">
      <div class="float-left">
        <a class="btn btn-outline-secondary" href="{{route('products.index')}}">Go back</a>
    </div>

    <div class="float-right">
      <h1>Edit Product</h1>
    </div>

  </div>
</div>

<form action="{{route('products.store')}}" method="POST">
  @csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{$product->name}}">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description" placeholder="Enter description" value="{{$product->description}}">
  </div>
  <div class="form-group">
    <label for="description">Stock</label>
    <input type="text" class="form-control" id="stock" name="stock" placeholder="Enter stock" value="{{$product->stock}}">
  </div>
<div class="form-group">
    <label for="description">Price</label>
    <input type="text" class="form-control" id="price" name="price" placeholder="Enter price" value="{{$product->price}}">
  </div>
  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
</form>

@if ($errors->any())
  <div class="alert alert-danger">
    <strong>Invalid input. Try again</strong>
    <ul>
      @foreach ($errors->all() as $e)
          <li>{{$e}}</li>
      @endforeach
    </ul>
  </div>
@endif

@endsection
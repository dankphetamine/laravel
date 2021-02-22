@extends('products.layout');

@section('content')

<div class="row">
  <div class="col">
      <div class="float-left">
        <a class="btn btn-outline-secondary" href="{{route('products.index')}}">Go back</a>
    </div>

    <div class="float-right">
      <h1>Show product</h1>
    </div>
  </div>
</div>

<form class="table table-striped">
<div class="form-group">
    <label for="name">Name</label>
    <input class="form-control" type="text" placeholder="Product name" readonly value="{{$product->name}}">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input class="form-control" type="text" placeholder="Product description" name="description" readonly value="{{$product->description}}">
  </div>
  <div class="form-group">
    <label for="stock">Stock</label>
    <input class="form-control" type="number" name="stock" placeholder="Product stock" readonly value="{{$product->stock}}">
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input class="form-control" type="number" name="price" placeholder="Product price" readonly value="{{$product->price}}">
  </div>
</form>

@endsection
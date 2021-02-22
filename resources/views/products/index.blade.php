@extends('products.layout');

@section('content')

<div class="row">
  <div class="col">
     <div class="float-right">
      <a class="btn btn-success" href="{{route('products.create')}}">Add new</a>
    </div>

    <div class="float-left">
      <h1>Listing products</h1>
    </div>

  </div>
</div>

<table class="table table-striped">
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Description</th>
      <th>Stock</th>
      <th>Price</th>
      <th>Actions</th>
    </tr>
    @foreach ($products as $p)
        <tr>
          <td>{{$p->id}}</td>
          <td>{{$p->name}}</td>
          <td>{{$p->description}}</td>
          <td>{{$p->stock}}</td>
          <td>{{$p->price}}</td>
          <td>
            <form class="d-flex justify-content-between" action="{{route('products.destroy', $p->id)}}" method="POST">
              <a class="btn btn-info" href="{{route('products.show', $p->id)}}">Find</a>
              <a class="btn btn-warning" href="{{route('products.edit', $p->id)}}">Edit</a>
              @csrf
              @method('Delete')
              <button type="submit" class="btn btn-danger">Remove</button>
            </form>
          </td>
        </tr>
    @endforeach
</table>
{{$products->links()}}

@if ($msg = Session::get('success'))
<div class="alert alert-success">
  <p>{{$msg}}</p>
</div>
@endif

@endsection
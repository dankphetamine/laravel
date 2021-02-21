@extends('products.layout');

@section('content')

<h1>Create a product </h1>
<div class="row">
  <div class="col-12 margin-tb">
     <div class="pull-left">
      <a class="btn btn-outline-secondary" href="{{route('products.index')}}">Go back</a>
    </div>

    <div class="pull-right">
      <h1>Add Product</h1>
    </div>

  </div>
</div>

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

<form action="{{route('products.store')}}" method="POST">
  @csrf
  <div class="row">
    <div class="col-12">
      <div class="form-group">
        <label for="detail">Detail</label>
        <textarea name="detail" id="detail" cols="30" rows="10"></textarea>
      </div>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </div>
  </div>
</form>

@endsection
@extends('admin.app')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-1 main">
  <div class="row">
      <div class="col-md-9">
    <div class="card">
  <div class="card-header"><h2> ProductType Edit</h2></div>
  <div class="card-body">
      
      <form action="{{ route('admin.productType.update',$id)}}" method="post">
        @csrf
        @method("POST")
        <input type="hidden" name="id" id="id" value="{{$contact->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$contact->name}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
      </div>
  </div>
</div>
@stop
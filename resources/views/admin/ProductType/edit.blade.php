@extends('admin.app')
@section('content')
<div class="card">
  <div class="card-header">ProductType Page</div>
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
@stop
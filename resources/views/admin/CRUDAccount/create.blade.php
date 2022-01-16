@extends('admin.app')
@section('title') Create Account @endsection
@section('content')
<div class="card">
    <div class="card-header">Create</div>
    <div class="card-body">
        
        <form action="{{ url('Account') }}" method="post">
          {!! csrf_field() !!}
          <label>Name</label></br>
          <input type="text" name="username" id="username" class="form-control"></br>
          <label>Address</label></br>
          <input type="text" name="address" id="address" class="form-control"></br>
          <label>Mobile</label></br>
          <input type="text" name="phone" id="phone" class="form-control"></br>
          <input type="submit" value="Save" class="btn btn-success"></br>
      </form>
    
    </div>
  </div>
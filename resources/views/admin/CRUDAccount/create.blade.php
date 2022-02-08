@extends('admin.app')
@section('title') Create Account @endsection
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-1 main">
  <div class="row">
      <div class="col-md-9">
          <div class="card">
              <div class="card-header"><h2>Create</h2></div>
              <div class="card-body">
                  
                  <form action="{{ url('Account') }}" method="post">
                    {!! csrf_field() !!}
                    <label>Name</label></br>
                    <input type="text" name="username" id="username" class="form-control"></br>
                    <label>Address</label></br>
                    <input type="text" name="address" id="address" class="form-control"></br>
                    <label>Phone</label></br>
                    <input type="text" name="phone" id="phone" class="form-control"></br>
                    <input type="submit" value="Save" class="btn btn-success"></br>
                </form>
              
              </div>
            </div>
      </div>
  </div>
</div>
  @endsection
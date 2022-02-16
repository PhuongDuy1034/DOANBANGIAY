@extends('admin.app')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-1 main">
  <div class="row">
      <div class="col-md-9">
    <div class="card">
  <div class="card-header"><h2>Account Edit</h2></div>
  <div class="card-body">
      
      <form action="{{ route('admin.account.update',$id)}}" method="post">
        @csrf
        @method("POST")
        <input type="hidden" name="id" id="id" value="{{$accounts->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="username" id="username" value="{{$accounts->username}}" class="form-control"></br>
        <label>Password</label></br>
                    <input type="text" name="password" id="password" value="{{$accounts->password}}" class="form-control"></br>
                    <label>Email</label></br>
                    <input type="text" name="email" id="email" value="{{$accounts->email}}" class="form-control"></br>
                    <label>Fullname</label></br>
                    <input type="text" name="fullname" id="fullname" value="{{$accounts->fullname}}" class="form-control"></br>
                    <label>Isadmin</label></br>
                    <input type="text" name="isadmin" id="isadmin" value="{{$accounts->isadmin}}" class="form-control"></br>
                    <label>Status</label></br>
                    <input type="text" name="status" id="status" value="{{$accounts->status}}" class="form-control"></br>
                    <label>Address</label></br>
                    <input type="text" name="address" id="address" value="{{$accounts->address}}" class="form-control"></br>
                    <label>Avata</label></br>
                    <input type="text" name="avatar" id="avatar" value="{{$accounts->avatar}}" class="form-control"></br>
                    <label>Phone</label></br>
                    <input type="text" name="phone" id="phone" value="{{$accounts->phone}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
      </div>
  </div>
</div>
@stop
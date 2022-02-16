@extends('admin.app')
@section('title') Account @endsection
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-1 main">
  <div class="row">
      <div class="col-md-9">
<div class="card">
    <div class="card-header">Account View</div>
    <div class="card-body">
    
          <div class="card-body">
          <h5 class="card-title">Name : {{ $accounts->username }}</h5>
          <p class="card-text">Address : {{ $accounts->address }}</p>
          <p class="card-text">Phone : {{ $accounts->phone }}</p>
    </div>
        
      </hr>
    
    </div>
  </div>
</div>
</div>
</div>
@endsection
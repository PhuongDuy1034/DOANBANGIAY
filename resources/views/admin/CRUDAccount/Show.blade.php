@extends('admin.app')
@section('title') Account @endsection
@section('content')
<div class="card">
    <div class="card-header">Contactus Page</div>
    <div class="card-body">
    
          <div class="card-body">
          <h5 class="card-title">Name : {{ $accounts->username }}</h5>
          <p class="card-text">Address : {{ $accounts->address }}</p>
          <p class="card-text">Phone : {{ $accounts->phone }}</p>
    </div>
        
      </hr>
    
    </div>
  </div>
@endsection
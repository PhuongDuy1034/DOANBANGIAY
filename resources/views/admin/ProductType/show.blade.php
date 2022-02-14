@extends('admin.app')
@section('title') ProductType Show @endsection
@section('content')
<div class="card">
  <div class="card-header">ProductType Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $pt->name }}</h5>
  </div>
  
  </div>
</div>
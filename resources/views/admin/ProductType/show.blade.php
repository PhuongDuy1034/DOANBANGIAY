@extends('admin.app')
@section('title') ProductType Show @endsection
@section('content')
<div class="card">
  <div class="card-header">ProductType Page</div>
  <div class="card-body">
  
    <form action="{{ route('admin.productType.show',$id)}}" method="get">
      @csrf
      @method('GET')
        <div class="card-body">
        <h5 class="card-title">Name : {{ $pt->name }}</h5>
    </form>
  </div>
  
  </div>
</div>
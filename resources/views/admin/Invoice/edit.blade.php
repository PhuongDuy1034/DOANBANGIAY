@extends('admin.app')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-1 main">
    <div class="row">
        <div class="col-md-9">
<div class="card">
  <div class="card-header">Invoice Page</div>
  <div class="card-body">
      
      <form action="{{ route('admin.invoice.update',$id)}}" method="post">
        @csrf
        @method("POST")
        <input type="hidden" name="id" id="id" value="{{$contact->id}}" id="id" />
        <label>Code</label></br>
        <input type="text" name="code" id="code" value="{{$contact->code}}" class="form-control"></br>
        <label>AccountId</label></br>
        <input type="text" name="accountId" id="accountId" value="{{$contact->accountId}}" class="form-control"></br>
        <label>ShippingAddress</label></br>
        <input type="text" name="shippingAddress" id="shippingAddress" value="{{$contact->shippingAddress}}" class="form-control"></br>
        <label>ShippingPhone</label></br>
        <input type="text" name="shippingPhone" id="shippingPhone" value="{{$contact->shippingPhone}}" class="form-control"></br>
        <label>Total</label></br>
        <input type="text" name="total" id="total" value="{{$contact->total}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
  </div>
  </div>
</div> 
</div>
@stop
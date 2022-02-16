@extends('admin.app')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-1 main">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
            <div class="card-header">Add Invoice</div>
            <div class="card-body">
                
                <form action="{{ route('admin.invoice.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                    <label>Code</label></br>
                    <input type="text" name="code" class="form-control" placeholder="Enter Name"></br>
                    <span style="color: red">@error('code'){{ 'The name filed is requied' }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="productId">AccountId</label>
                        <select class="form-control"  name="accountId">
                            <option value=""></option>
                            @foreach ($inv as $item )
                                <option value="{{ $item->id }}">{{ $item->fullname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>IsuedDate</label></br>
                        <input type="date" name="isuedDate" class="form-control" placeholder="Enter Name"></br>
                    </div>
                    <div class="form-group">
                        <label>ShippingAddress</label></br>
                        <input type="text" name="shippingAddress" class="form-control" placeholder="Enter Name"></br>
                    </div>
                    <div class="form-group">
                        <label>ShippingPhone</label></br>
                        <input type="text" name="shippingPhone" class="form-control" placeholder="Enter Name"></br>
                    </div>
                    <div class="form-group">
                        <label>Total</label></br>
                        <input type="text" name="total" class="form-control" placeholder="Enter Name"></br>
                    </div>
                    
                    <div class="form-group">
                    <label>Status</label></br>
                    <input type="text" name="status" class=""></br>
                    </div>
                    <div class="form-group">
                    <input type="submit" value="Save" class="btn btn-success"></br>
                    </div>
                </form>
            
            </div>
            </div>
        </div>
    </div>
</div>

@stop
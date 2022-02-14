@extends('admin.app')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-1 main">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
            <div class="card-header">Add Cart</div>
            <div class="card-body">
                
                <form action="{{ route('admin.cart.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="productId">ProductType</label>
                        <select class="form-control"  name="productId">
                            <option value=""></option>
                            @foreach ($product as $item )
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
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
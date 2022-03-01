@extends('admin.app')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-1 main">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
            <div class="card-header">Add Product</div>
            <div class="card-body">
                
                <form action="{{ route('admin.product.store') }}" method="POST" role="form">
                    @csrf
                    <div class="form-group">
                        <label>SKU</label></br>
                        <input type="text" id="sku" name="sku" class="form-control" placeholder="Enter Name"></br>
                        <span style="color: red">@error('sku'){{ 'The name filed is requied' }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Name</label></br>
                        <input id="name" type="text" name="name" class="form-control" placeholder="Enter Name"></br>
                        <span style="color: red">@error('name'){{ 'The name filed is requied' }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Deccription</label></br>
                        <input id="deccription" type="text" name="deccription" class="form-control" placeholder="Enter Name"></br>
                    </div>
                    <div class="form-group">
                        <label>Price</label></br>
                        <input id="price" type="text" name="price" class="form-control" placeholder="Enter Name"></br>
                        <span style="color: red">@error('price'){{ 'The name filed is requied' }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="productTypeId">ProductType</label>
                        <select class="form-control"  name="productTypeId">
                            @foreach ($productType as $item )
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="providerId">Provider</label>
                        <select class="form-control"  name="providerId">
                            @foreach ($provider as $item )
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label></br>
                        <input id="image"  type="text" name="image" class="form-control" ></br>
                    </div>
                  
                    <div class="form-group">
                    <label>Status</label></br>
                    <input id="" type="text" name="status" class=""></br>
                    </div>
                    <div class="form-group">
                    <input id="" type="submit" value="Save" class="btn btn-success"></br>
                    </div>
                </form>
            
            </div>
            </div>
        </div>
    </div>
</div>

@stop
@extends('admin.app')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-1 main">
    <div class="row">
        <div class="col-md-9">
<div class="card">
  <div class="card-header">Invoice Page</div>
  <div class="card-body">
      
      <form action="{{ route('admin.product.update',$id)}}" enctype="multipart/form-data" method="post">
        @csrf
        @method("POST")
        <input type="hidden" name="id" id="id" value="{{$contact->id}}" id="id" />
        <label>SKU</label></br>
        <input type="text" name="sku" id="sku" value="{{$contact->sku}}" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$contact->name}}" class="form-control"></br>
        <label>Deccription</label></br>
        <input type="text" name="deccription" id="deccription" value="{{$contact->deccription}}" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" value="{{$contact->price}}" class="form-control"></br>
        <div class="form-group">
            <label for="productTypeId">ProductType</label>
            <select class="form-control"  name="productTypeId">
                @foreach ($productType as $item )
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <label>Image</label></br>
        <input type="file" name="image" id="image" class="form-control"></br>
        <div class="form-group">
            <label for="providerId">Provider</label>
            <select class="form-control"  name="providerId">
                @foreach ($provider as $item )
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
  </div>
  </div>
</div> 
</div>
@stop
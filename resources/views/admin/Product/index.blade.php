@extends('admin.app')
@section('title') Product List @endsection
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-1 main">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header" >
                    <h2>Product</h2>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.product.create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>SKU</th>
                                    <th>Name</th>
                                    <th>Deccription</th>
                                    <th>Price</th>
                                    <th>ProductTypeId</th>
                                    <th>Image</th>
                                    <th>ProviderId</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($pro as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->sku }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->deccription }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->nameType }}</td>
                                    <td>

                                        <img src={{ asset('assets/user/img/product/'.$item->image) }} style="cursor: zoom-in;" width="60px"/>
                                    </td>
                                    <td>{{ $item->namepro }}</td>
                                    <td>
                                        @if ($item->status==1)
                                        <span style="color: rgb(9, 255, 0)" class="badge badge-success">Public</span>
                                        @else
                                        <span style="color: red" class="badge badge-danger">Private</span>
                                        
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('/contact/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ route('admin.product.edit',$item->id) }}"><button class="btn btn-primary btn-sm"> Edit</button></a>
                                        <form method="GET" action="{{ route('admin.product.destroy',$item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
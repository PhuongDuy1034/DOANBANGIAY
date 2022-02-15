@extends('admin.app')
@section('title') Invoice List @endsection
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-1 main">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" >
                    <h2>Invoice</h2>
                </div>
                <div class="card-body">
                    <a href="{{route('admin.invoice.create')}}" class="btn btn-success btn-sm" title="Add New Contact">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Codes</th>
                                    <th>AccountId</th>
                                    <th>IsuedDate</th>
                                    <th>ShippingAddress</th>
                                    <th>ShippingPhone</th>
                                    <th>Total</th>
                                    <th>Status</th>                                 
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($invoice as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->code }}</td>
                                    <td>{{ $item->accountId }}</td>
                                    <td>{{ $item->isuedDate }}</td>
                                    <td>{{ $item->shippingAddress }}</td>
                                    <td>{{ $item->shippingPhone }}</td>
                                    <td>{{ $item->total }}</td>
                                    <td>
                                        @if ($item->status==1)
                                        <span style="color: rgb(9, 255, 0)" class="badge badge-success">Public</span>
                                        @else
                                        <span style="color: red" class="badge badge-danger">Private</span>
                                        
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('/contact/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ route('admin.invoice.edit',$item->id)}}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        <form method="GET" action="{{ route('admin.invoice.destroy', $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" > Delete</button>
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
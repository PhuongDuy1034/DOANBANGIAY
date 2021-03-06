@extends('admin.app')
@section('title') Account @endsection
@section('content')
<div class="col-sm-12 col-sm-offset-3 col-lg-10 col-lg-offset-1 main">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" >
                    <h2>Account</h2>
                </div>
                <div class="card-body">
                    <a href="{{route('admin.account.create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Telephone</th>
                                    <th>Email </th>
                                    <th>IsAdmin </th>
                                    <th>Status </th>
                                    <th>Avata </th>
                                    <th>Actions</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($accounts as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        @if ($item->isadmin==1)
                                        <span style="color: rgb(9, 255, 0)" class="badge badge-success">Admin</span>
                                        @else
                                        <span style="color: red" class="badge badge-danger">User</span>
                                        
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->status==1)
                                        <span style="color: rgb(9, 255, 0)" class="badge badge-success">Public</span>
                                        @else
                                        <span style="color: red" class="badge badge-danger">Private</span>
                                        
                                        @endif
                                    </td>
                                    <td>
                                        <img  alt="{{ $item->name }}" src="/public/upload/image{{ $item->image }}" height="60" width="60"/>
                                    </td>
                                    <td>
                                        <a href="{{route('admin.account.show',$item->id)}}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{route('admin.account.edit',$item->id) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        <form method="GET" action="{{ route('admin.account.destroy',$item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
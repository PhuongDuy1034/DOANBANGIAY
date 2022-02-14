@extends('admin.app')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-1 main">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
            <div class="card-header">Add Provider</div>
            <div class="card-body">
                
                <form action="{{ route('admin.provider.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                    <label>Name</label></br>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name"></br>
                    <span style="color: red">@error('name'){{ 'The name filed is requied' }}@enderror</span>
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
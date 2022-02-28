@extends('admin.app')
@section('title') Create Account @endsection
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-1 main">
  <div class="row">
      <div class="col-md-9">
          <div class="card">
              <div class="card-header"><h2>Create Account</h2></div>
              <div class="card-body">
                  
                  <form action="{{ route('admin.account.store') }}" method="post">
                    @csrf
                    <label>Name</label></br>
                    <input type="text" name="username" id="username" class="form-control"></br>
                    <label>Password</label></br>
                    
                   

                      
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                          <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                          
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          
                  
                    {{-- <input type="text" name="password" id="password" class="form-control"></br> --}}
                    <label>Email</label></br>
                    <input type="text" name="email" id="email" class="form-control"></br>
                    <label>Fullname</label></br>
                    <input type="text" name="fullname" id="fullname" class="form-control"></br>
                    <label>Isadmin</label></br>
                    <input type="text" name="isadmin" id="isadmin" class="form-control"></br>
                    <label>Status</label></br>
                    <input type="text" name="status" id="status" class="form-control"></br>
                    <label>Address</label></br>
                    <input type="text" name="address" id="address" class="form-control"></br>
                    <label>Avata</label></br>
                    <input type="text" name="avatar" id="avatar" class="form-control"></br>
                    <label>Phone</label></br>
                    <input type="text" name="phone" id="phone" class="form-control"></br>
                    <input type="submit" value="Save" class="btn btn-success"></br>
                </form>
              
              </div>
            </div>
      </div>
  </div>
</div>
  @endsection
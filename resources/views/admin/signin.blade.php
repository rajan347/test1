@extends('layouts.header') @section('content')
<!--header area end-->
<style type="text/css">

</style>
        @if(session()->has('success'))
        <div class="alert alert-success"> {{ session()->get('success') }} </div> 
        @endif

<div class="container" style="padding: 20px">
  <div class="row ">
    <div class="col-md-6" style="padding: 10px">

      <div class="card">
  <div class="card-header">
    Login
  </div>
  <div class="card-body">
   
<form class="" action="{{route('login')}}" method="post"> @csrf
                <div class="form-group row">
                  <label class="col-form-label col-sm-3" for="email">Email:</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter email" name="email" required> @error('email') <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span> @enderror 
                                                          </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-sm-3" for="pwd">Password:</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="pwd" placeholder="Enter password" name="password" required> @error('password') <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span> @enderror </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-sm-3" for=""></label>
                   <div class="col-sm-offset-3 col-sm-9">
                    <div class="checkbox">

                      <label> <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>  {{ __('Remember Me') }}</label>

                    </div>
                  </div>
                </div>
                
                
                <div class="form-group row">
                   <label class="col-form-label col-sm-3" for=""></label>
                 
                  <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary">Login</button><span style="margin-left: 10px">@if (Route::has('password.request')) <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a> @endif </span>
                  </div>
                </div>
               
              </form>
    
  </div>
</div>
    </div>
    <div class="col-md-6" style="padding: 10px">

      <div class="card">
  <div class="card-header">
    Register
  </div>
  <div class="card-body">
   <form class="" action="{{route('storeuser')}}" method="post"> @csrf
                <div class="form-group row">
                  <label class="col-form-label col-sm-3" for="email">Name:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="" placeholder="Enter name" name="name"> @error('name') <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span> @enderror </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-sm-3" for="email">Email:</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter email" name="email"> @error('email') <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span> @enderror </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-sm-3" for="pwd">Password:</label>
                  <div class="col-sm-9">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" id="pwd" placeholder="Enter password" name="password" autocomplete="new-password"> @error('password') <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span> @enderror </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-sm-3" for="confirmpwd">Confirm Password:</label>
                  <div class="col-sm-9">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                  </div>
                </div>
                <div class="form-group row">
                   <label class="col-form-label col-sm-3" for=""></label>
                 
                  <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary">Register</button>
                  </div>
                </div>
              </form>

  </div>
</div>
    </div>
    
  </div>

</div>
 @endsection('content') @section('script')
<script>
</script> 
@endsection
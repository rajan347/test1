@extends('layouts.header') 
@section('content')
<!--header area end-->
<style type="text/css">
.form{
  width: -webkit-fill-available;
}
.ft{
  font-weight: 700;
    font-size: 16px;
    color: rgb(102, 115, 242);
    letter-spacing: 0.2px;
    text-transform: uppercase;
}
.ft ul li a{
  color: white;
}
</style>

 <div class="sectionban">
<div class="container">
  <div class="row">
    <div class="banhome">
    <a href=""><span style="color: rgb(0, 210, 144);">Home</span></a> <span style="font-size: 12px;margin: 2px;opacity: 0.4" class="glyphicon glyphicon-arrow-right"></span><span>Signin/Signup</span>
    </div>
 </div>
 <div class="row">
    <div class="banproduct">
    <span class="banproducti"><img src="{{ asset('public/image/login.jpg')}}"></span><h1 class="odg" >Signin / Signup</h1>

    </div>

  </div>
  

</div>
</div>

<div class="sectionfs">
<div class="container">
<div class="rowi">
<div class="row ">
				    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
    <div class="rowsgroceryp">
    <div class="col-md-6">
<center><h1><b>Sign-in</b></h1></center>
<div class="rowcgroceryp ">
 
 	
     <form class="form-horizontal form" action="{{route('login')}}" method="post" >
         @csrf

  <div class="form-group">
    <label class="control-label col-sm-3" for="email">Email:</label>
    <div class="col-sm-9">
      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter email" name="email" required>
      @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pwd">Password:</label>
    <div class="col-sm-9">
      <input type="password" class="form-control @error('password') is-invalid @enderror" id="pwd" placeholder="Enter password" name="password" required>
      @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>

    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pwd"></label>
    <div class="col-sm-9">
    @if (Route::has('password.request'))    
      <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
    @endif
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-default">Signin</button>
    </div>
  </div>
  
<div class="social" style="margin:30px;">
<span><center><b>Or - Login with Google Account</b></center></span><br>
<span><center><a href="{{ url('/redirect') }}"><i class="fa fa-google-plus-square" aria-hidden="true" style="font-size: -webkit-xxx-large;" ></i></center></a></span>
</div>
</form>

    </div>
   
    </div>

    
</div>
<div class="rowsgroceryp">
    <div class="col-md-6">
<center><h1><b>Sign-up</b></h1></center>
<div class="rowcgroceryp ">
      
   <form class="form-horizontal form" action="{{route('storeuser')}}" method="post">
       @csrf
  <div class="form-group">
    <label class="control-label col-sm-3" for="email">Name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="" placeholder="Enter name" name="name">
       @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="email">Email:</label>
    <div class="col-sm-9">
      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter email" name="email">
       @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="email">Mobile:</label>
    <div class="col-sm-9">
      <input type="number" class="form-control @error('mobile') is-invalid @enderror" id="" placeholder="Enter mobile number" name="mobile">
      @error('mobile')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pwd">Password:</label>
    <div class="col-sm-9">
      <input type="password" class="form-control @error('password') is-invalid @enderror" id="pwd" placeholder="Enter password" name="password">
      @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-default">Signup</button>
    </div>
  </div>
</form>

    </div>

    </div>
</div> 

  </div>
 
</div>

</div>

</div>


@endsection('content')
@section('script')
<script>



</script>
@endsection


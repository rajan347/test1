@extends('layouts.frontheader') @section('content')
<!--header area end-->
<style type="text/css">
  .invalid-feedback{
    color:red;
  }

#page-wrapper{
	display: none;
}
.responsivemob{
padding: 53px;
margin-left: 215px;

}
.responsive_updateprofile{
    padding: 38px;
    display: flow-root;
    background-color: #6d6a6a54; 
}
 @media screen and (max-width: 600px) {
 	#page-wrapper{
	display:block ;
}
.responsive_updateprofile{
    padding: 0px;
    display: flow-root;
    background-color: #6d6a6a54; 
}
 .responsivemob{
padding: 0px;
margin-left: 0px;

}
}

</style>

<div class="container responsivemob" >
        @if(session()->has('messageupdate'))
        <div class="alert alert-success"> {{ session()->get('messageupdate') }} </div> 
        @endif
<h4 style="padding: 20px"><b>Edit Peoson</b></h4>
<div class="responsive_updateprofile">
<form method="post" action="{{route('store_edit_profile')}}" >
  @csrf
  <input type="hidden" class="form-control" id="" placeholder="" name="id" value="{{$id}}">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">Title</label>
      <select id="" class="form-control @error('title') is-invalid @enderror" name="title">
        <option selected>Choose Title..</option>
        <option value="Mr" {{$profile->title == 'Mr'  ? 'selected' : ''}}>Mr</option>
        <option value="Miss" {{$profile->title == 'Miss'  ? 'selected' : ''}}>Miss</option>
      </select>
       @error('title')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
       @enderror
    </div>
    <div class="form-group col-md-8">
      <label for="">Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="" placeholder="Your Name" name="name" value="{{$profile->firstname}}">
      @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
       @enderror
    </div>
    
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="">Email</label>
      <input type="email" class="form-control @error('email') is-invalid @enderror" id="" placeholder="Your Email" name="email" value="{{$profile->email_id}}">
      @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
       @enderror
    </div>
   <div class="form-group col-md-4">
      <label for="">Phone</label>
      <input type="number" class="form-control @error('phone') is-invalid @enderror" id="" placeholder="Your Phone Number" name="phone" value="{{$profile->phone}}">
       @error('phone')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
       @enderror
    </div>
    <div class="form-group col-md-4">
      <label for="">Birthdate</label>
      <input type="text" class="form-control datepicker @error('dob') is-invalid @enderror" id="date" placeholder="Your dob" name="dob" value="{{$profile->birthdate}}">
      @error('dob')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
       @enderror
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="">Note</label>
      <textarea class="form-control @error('message') is-invalid @enderror" id="" placeholder="Your Message" name="message" value="{{$profile->message}}">{{$profile->message}}</textarea> 
      @error('message')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
       @enderror
    </div>

  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="">Address</label>
      <textarea class="form-control @error('address') is-invalid @enderror" id="" placeholder="Your Address" name="address" value="{{$profile->address}}">{{$profile->address}}</textarea> 
      @error('address')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
       @enderror
    </div>

  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
     <button type="submit" class="btn btn-success">Update Profile</button>
  
    </div>

  </div>

</form>
</div>
</div>
 @endsection('content') @section('script')
<script>
$(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $(".side-nav .collapse").on("hide.bs.collapse", function() {                   
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
    });
    $('.side-nav .collapse').on("show.bs.collapse", function() {                        
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
    });
})    
    
</script>
<script src="https://code.jquery.com/ui/1.9.1/jquery-ui.min.js" integrity="sha256-UezNdLBLZaG/YoRcr48I68gr8pb5gyTBM+di5P8p6t8=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.1/themes/blitzer/jquery-ui.css"> 

<script type="text/javascript">
   
   $(function() {
    $(".datepicker").datepicker();
  });
</script>
@endsection
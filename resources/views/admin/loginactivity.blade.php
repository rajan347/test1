@extends('layouts.frontheader') @section('content')
<!--header area end-->
<style type="text/css">
#page-wrapper{
	display: none;
}
.responsivemob{
padding: 53px;
margin-left: 215px;

}
 @media screen and (max-width: 600px) {
 	#page-wrapper{
	display:block ;
}
 .responsivemob{
padding: 0px;
margin-left: 0px;

}
}

</style>

<div class="container responsivemob" >
	    @if(session()->has('message'))
        <div class="alert alert-danger"> {{ session()->get('message') }} </div> 
        @endif

	<center><h2 style="padding: 20px"><b><u>Login Activity Table</u></b></h2></center>
	<div class="table-responsive">
  <table class="table table-striped table-responsive">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Last Login</th>
      <th scope="col">Type Of Login</th>
       <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php $i=1; ?>
	@foreach($user as $users)

    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td>{{$users->name}}</td>
      <td>{{$users->email}}</td>
      <td>{{$users->password}}</td>
      <td>{{$users->last_login}}</td>
      <td>{{$users->role_type}}</td>
      <td>

				  <a style="background-color: red;color: white" href="{{url('delete_user/'.$users->id) }}" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder btn_2"    >Delete</a></td>
  
  
    </tr>
   <?php $i++; ?>
   @endforeach	
  </tbody>
</table>
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

@endsection
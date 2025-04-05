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
        @if(session()->has('messageupdate'))
        <div class="alert alert-success"> {{ session()->get('messageupdate') }} </div> 
        @endif
	<center><h2 style="padding: 20px"><b><u>User Table</u></b></h2></center>

	<div class="table-responsive">
  <table class="table table-striped table-responsive">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Birthday</th>
      <th scope="col">Message</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php $i=1; ?>
	@foreach($profile as $profiles)

    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td>{{$profiles->title}}</td>
      <td>{{$profiles->firstname}}</td>
      <td>{{$profiles->email_id}}</td>
      <td>{{$profiles->phone}}</td>
      <td>{{$profiles->birthdate}}</td>
      <td>{{$profiles->message}}</td>
      <td>{{$profiles->address}}</td>
      <td>

				  <a style="background-color: red;color: white" href="{{url('delete_user/'.$profiles->user_id) }}" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder btn_2"    >Delete</a>
				  <a style="background-color: #10c12b;;color: white" href="{{url('edit_profile/'.$profiles->user_id) }}" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder btn_2"    >Edit Profile</a>

	 </td>
      
      
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
@extends('layouts.frontheader') @section('content')
<!--header area end-->
<style type="text/css">

</style>

<div class="container" style="padding: 20px">
  
  

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
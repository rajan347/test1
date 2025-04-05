<!DOCTYPE html>
<html lang="en">

<head>
<style type="text/css">

 @media screen and (max-width: 600px) {
 
}

</style>
<meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta name="description" content="test">
  <meta name="keywords" content="test">
  <meta name="author" content="test">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="">
  <title>Test Admin| Home</title>
  

  <!--////////////// -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--////////////// -->



</head>
<body>

  <!-- //header start -->


<!-- //header end -->

    @yield('content')

<!-- //footere start -->


<!-- //footere end -->


<script>

</script>

@yield('script')

</body>

</html>
<!DOCTYPE html>
<html>

<head>
 @include('home.css')
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->

    @include('home.header')
    <!-- end header section -->

  </div>
  <!-- end hero area -->

  <!-- shop section -->
<br>
  <form action="{{url('product_search_user')}}" method="get" class="d-flex justify-content-center align-items-center">
    @csrf
    <input type="search" name="search"> &nbsp; &nbsp;
    <input type="submit" class="btn btn-secondary" value="Search">
</form>
  @include('home.product')

  <!-- end shop section -->









 

</body>

</html>
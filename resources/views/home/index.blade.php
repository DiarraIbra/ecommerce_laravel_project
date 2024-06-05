<!DOCTYPE html>
<html>

<head>
 @include('home.css')
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</head>

<body>
  <div class="hero_area">
    @include ('home.header')
    <!-- end header section -->
    <!-- slider section -->

    @include('home.slider')

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->

 @include('home.product')

  <!-- end shop section -->







  <!-- contact section -->

 
@include('home.contact')
  <!-- end contact section -->

   

  <!-- info section -->

  @include('home.footer')
<script type="text/javascript">
  $(window).scroll(function(){
    sessionStorage.scrollTop = $(this).scrollTop();
  });
  $(document).ready(function(){
    if(sessionStorage.scrollTop != "undefined"){
      $(window).scrollTop(sessionStorage.scrollTop);
    }
  });

  
</script>

</body>

</html>
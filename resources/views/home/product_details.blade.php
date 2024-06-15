<!DOCTYPE html>
<html>

<head>
 @include('home.css')
 <style type="text/css">
    .div_center{
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px;
    }
    .detail-box{
        padding: 15px;
    }
 </style>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <div class="hero_area">
    @include ('home.header')
    <!-- end header section -->
  </div>
  
  <!-- Product details start -->


  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        
      </div>
      <div class="row">


        
        <div class="col-md-12">
          <div class="box">
              <div class="div_center">
                <img width="200" src="/products/{{$data->image}}">
              </div>



              <div class="detail-box">
                <h6>{{$data->title}}</h6>
                <h6> Price
                  <span>{{$data->price}}DH</span>
                </h6>
              </div>


              <div class="detail-box">
                <h6>Category : {{$data->category}}</h6>
                <h6> Available Quantity
                  <span>{{$data->quantity}}</span>
              </div>
              
                </h6>
              <div class="detail-box">
                
                  <p>{{$data->description}}</p>
                
              </div>
              <div class="detail-box">
                
                <a class="btn btn-primary" href="{{url('add_cart',$data->id)}}">
                  <i class="fas fa-cart-plus"></i>
                </a>
              
            </div>

          </div>
        </div>
       

      </div>
      <div class="btn-box">
        <a href="{{url('/shop')}}">
          View All Products
        </a>
      </div>
    </div>
  </section>




   <!-- Product details end -->




  <!-- info section -->

  @include('home.footer')

</body>

</html>
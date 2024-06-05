<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  </head>
  
</head>
<body>
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">


        @foreach($product as $products)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
              <div class="img-box">
                <img src="products/{{$products->image}}">
              </div>
              <div class="detail-box">
                <h6>{{$products->title}}</h6>
                <h6> Price
                  <span>{{$products->price}}DH</span>
                </h6>
              </div>
              <div style="padding: 15px">
                <a class="btn btn-danger" href="{{url('product_details',$products->id)}}">
                  <i class="fas fa-info-circle"></i>
                </a>
                <a class="btn btn-primary" href="{{url('add_cart',$products->id)}}">
                  <i class="fas fa-cart-plus"></i>
                </a>
              </div>
              

             
          </div>
        </div>
        @endforeach

      </div>
      <div class="btn-box">
        <a href="{{url('/')}}">
          View All Products
        </a>
      </div>
    </div>
  </section>
</body>
</html>
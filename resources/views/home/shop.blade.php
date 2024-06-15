<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/delices_fruits.png" type="image/x-icon">

  <title>
    Shop
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   
  <style>
    /* Custom Styles */
    .box {
      background-color: #f5f5f5;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
    }

    .img-box img {
      max-width: 100%;
      height: auto;
    }

    .detail-box {
      margin-top: 10px;
    }

    .detail-box h6 {
      font-weight: bold;
      margin-bottom: 5px;
    }

    .detail-box h6 span {
      color: #007bff;
      font-weight: bold;
    }

    .btn {
      margin-right: 5px;
    }

    .info_link-box a {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
      color: #333;
      text-decoration: none;
    }

    .info_link-box i {
      margin-right: 10px;
    }

    .footer_section {
      background-color: #333;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }

    .footer_section a {
      color: #fff;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include ('home.header')
    <!-- end header section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->
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
    </div>
  </section>
  <!-- end shop section -->


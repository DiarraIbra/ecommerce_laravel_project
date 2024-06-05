<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')
   <style type="text/css">
    body {
        background-color: #1c1c1c;
        font-family: Arial, sans-serif;
    }
    .div_deg {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px;
        background-color: #222;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    }
    .styled-image {
        height: 120px;
        width: 120px;
        border-radius: 10px;
        border: 2px solid #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .styled-image:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.5);
    }
    .table_deg {
        border-collapse: collapse;
        width: 100%;
        max-width: 800px;
    }
    th {
        background-color: #333;
        color: #fff;
        font-size: 18px;
        font-weight: bold;
        padding: 15px;
    }
    td {
        border-bottom: 1px solid #333;
        text-align: center;
        color: #fff;
        padding: 15px;
    }
    input[type='search'] {
        width: 100%;
        max-width: 500px;
        height: 50px;
        margin-left: 50px;
        padding: 10px 15px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        background-color: #333;
        color: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    }
   </style>
   <!-- Include SweetAlert CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
   <!-- Include Bootstrap Icons CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">
  </head>
  <body>
   @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <form action="{{url('product_search')}}" method="GET">
                @csrf 
                <input type="search" name="search">
                <input type="submit" class="btn btn-secondary" value="Search">
            </form>
            <div class="div_deg">
               <table class="table_deg">
                <tr>
                    <th>Product Title</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($product as $products)
                <tr>
                    <td>{{$products->title}}</td>
                    <td>{{$products->description}}</td>
                    <td>{{$products->category}}</td>
                    <td>{{$products->price}}</td>
                    <td>{{$products->quantity}}</td>
                    <td>
                      <img class="styled-image" src="products/{{$products->image}}">
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{url('update_product',$products->id)}}"><i class="bi bi-pencil"></i></a>
                    </td>
                    <td>
                       <a class="btn btn-danger" onclick="confirmation(event);" href="{{url('delete_product', $products->id)}}"><i class="bi bi-trash"></i></a> 
                    </td>
                </tr>
                @endforeach
               </table>
            </div>
            <div class="div_deg">
              {{$product->onEachSide(1)->links()}}
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Include SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- JavaScript files-->
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"></script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script>
    <script type="text/javascript">
      function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!',
          background: '#333',
          color: '#fff'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = urlToRedirect;
          }
        });
      }
    </script>
  </body>
</html>

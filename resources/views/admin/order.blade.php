<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      body {
        background-color: #1c1c1c;
        font-family: Arial, sans-serif;
      }
      h1 {
        color: white;
        text-align: center;
        margin-top: 20px;
      }
      .div_deg {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
        background-color: #2a2a2a;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
      }
      input[type='text'] {
        width: 400px;
        height: 50px;
        border-radius: 5px;
        border: none;
        padding: 10px;
        background-color: #333;
        color: #fff;
        font-size: 16px;
        margin-right: 10px;
      }
      .btn-primary {
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
      }
      .table_deg {
        text-align: center;
        margin: auto;
        border: 2px solid yellowgreen;
        margin-top: 50px;
        width: 80%;
        background-color: #2a2a2a;
        border-radius: 10px;
        overflow: hidden;
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
      th {
        background-color: #333;
        color: #fff;
        font-size: 18px;
        font-weight: bold;
        padding: 15px;
    }
      td {
        color: white;
        padding: 10px;
        border: 1px solid skyblue;
      }
      .btn {
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
      }
      .btn-success {
        background-color: #28a745;
      }
      .btn-success:hover {
        background-color: #218838;
      }
      .btn-danger {
        background-color: #dc3545;
      }
      .btn-danger:hover {
        background-color: #c82333;
      }
    </style> 
    @include('admin.css')
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
            <h1>All Orders</h1>
            <div class="div_deg">
              <table class="table_deg">
                <tr>
                  <th>Customer name</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Product Title</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Payment Status</th>
                  <th>Status</th>
                  <th>Change Status</th>
                  <th>Print PDF</th>
                </tr>
                @foreach($data as $data)
                <tr>
                  <td>{{$data->name}}</td>
                  <td>{{$data->rec_address}}</td>
                  <td>{{$data->phone}}</td>
                  <td>{{$data->product->title}}</td>
                  <td>{{$data->product->price}}</td>
                  <td>
                    <img class="styled-image" width="150" src="products/{{$data->product->image}}">
                  </td>
                  <td>{{$data->payment_status}}</td>
                  <td>
                    @if($data->status == 'in progress')
                      <span style="color: red";>{{$data->status}}</span>
                    @elseif($data->status == 'On the way')
                      <span style="color: skyblue;">{{$data->status}}</span>
                    @else
                      <span style="color: yellow;">{{$data->status}}</span>
                    @endif
                  </td>
                  <td>
                    <a class="btn btn-success" href="{{url('on_the_way',$data->id)}}"><i class="bi bi-arrow-right-square"></i></a>
                    <a class="btn btn-primary" href="{{url('delivered',$data->id)}}"><i class="bi bi-check2-square"></i></a>
                  </td>
                  <td>
                    <a class="btn btn-secondary" href="{{url('print_pdf',$data->id)}}"><i class="bi bi-file-earmark-pdf"></i></a>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"></script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script>
  </body>
</html>

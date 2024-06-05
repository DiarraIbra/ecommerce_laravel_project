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
    .btn-send-mail {
        background-color: #28a745;
        border-color: #28a745;
    }
    .btn-send-mail:hover {
        background-color: #218838;
        border-color: #1e7e34;
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
            <div class="div_deg">
                <table class="table_deg">
                 <tr>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Phone</th>
                     <th>Message</th>
                     <th>Send Email</th>
                 </tr>
                @foreach($data as $data)
                 <tr>
                     <td>{{$data->name}}</td>
                     <td>{{$data->email}}</td>
                     <td>{{$data->phone}}</td>
                     <td>{{$data->message}}</td>
                     <td>
                        <a class="btn btn-success btn-send-mail" href="{{url('send_mail',$data->id)}}"><i class="bi bi-envelope"></i></a>
                     </td>
                 </tr>
                @endforeach
                </table>
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
  </body>
</html>

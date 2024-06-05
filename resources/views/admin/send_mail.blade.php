<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')
   <base href="/public">
   <style type="text/css">
    body {
        background-color: #1c1c1c;
        font-family: Arial, sans-serif;
    }
    label {
        display: inline-block;
        width: 200px;
        font-size: 18px!important;
        color: white!important;
    }
    input[type='text'] {
        width: 350px;
        height: 50px;
    }
    textarea {
        width: 450px;
        height: 80px;
    }
    .input_deg {
        padding: 15px;
    }
    .table_deg {
        border-collapse: collapse;
        width: 100%;
        max-width: 800px;
        border: 2px solid greenyellow;
        margin-top: 30px;
    }
    th {
        background-color: skyblue;
        color: white;
        font-size: 18px;
        font-weight: bold;
        padding: 15px;
        border: 1px solid skyblue;
    }
    td {
        border: 1px solid skyblue;
        text-align: center;
        color: white;
        padding: 15px;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        font-size: 18px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
   </style>
  </head>
  <body>
   @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include ('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <center>
                <h1 style="font-size: 30px; font-weight: bold;">
                    Mail Send to {{$data->name}}
                </h1>
                <form action="{{url('mail',$data->id)}}" method="POST">
                    @csrf
                    <div class="input_deg">
                        <label>Greeting</label>
                        <input type="text" name="greeting">
                    </div>
                    <div class="input_deg">
                        <label>Mail Body</label>
                        <textarea name="body" required></textarea>
                    </div>
                    <div class="input_deg">
                        <label>Action Text</label>
                        <input type="text" name="action_text">
                    </div>
                    <div class="input_deg">
                        <label>Action Url</label>
                        <input type="text" name="action_url">
                    </div>
                    <div class="input_deg">
                        <label>End Line</label>
                        <input type="text" name="endline">
                    </div>
                    <div class="input_deg">
                        <input class="btn btn-primary" type="submit" value="Send Mail">
                    </div>
                </form>
            </center>
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

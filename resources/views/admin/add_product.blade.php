<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')
   <style type="text/css">
    body {
        background-color: #1c1c1c;
        font-family: Arial, sans-serif;
    }
    .div_deg{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px;
        background-color: #2a2a2a;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    }
    h1{
        color: white;
        text-align: center;
    }
    label{
        display: inline-block;
        width: 200px;
        font-size: 18px!important;
        color: white!important;
    }
    input[type='text'], input[type='number'], select, textarea, input[type='file'] {
        width: 100%;
        max-width: 350px;
        height: 50px;
        padding: 10px;
        margin: 10px 0;
        border-radius: 5px;
        border: none;
        background-color: #333;
        color: #fff;
        font-size: 16px;
    }
    textarea {
        height: 100px;
    }
    .input_deg{
        padding: 15px;
    }
    .btn-success {
        background-color: #28a745;
        border: none;
        padding: 15px 30px;
        font-size: 18px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    .btn-success:hover {
        background-color: #218838;
    }
   </style>
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
            <h1>Add Product</h1>
            <div class="div_deg">
              <form action="{{url('upload_product')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input_deg">
                    <label>Product Title</label>
                    <input type="text" name="title">
                </div>
                <div class="input_deg">
                    <label>Description</label>
                    <textarea name="description" required></textarea>
                </div>
                <div class="input_deg">
                    <label>Price</label>
                    <input type="number" name="price">
                </div>
                <div class="input_deg">
                    <label>Quantity</label>
                    <input type="number" name="qty">
                </div>
                <div class="input_deg">
                    <label>Product Category</label>
                    <select name="category" required>
                        <option>Select an Option</option>
                        @foreach($category as $category)
                        <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input_deg">
                    <label>Product Image</label>
                    <input type="file" name="image">
                </div>
                <div class="input_deg">
                    <input class="btn btn-success" type="submit" value="Add Product">
                </div>
              </form>
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

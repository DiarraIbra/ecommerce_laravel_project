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
        margin-top: 50px;
        background-color: #333;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
    }
    label {
        display: inline-block;
        width: 200px;
        padding: 10px;
        font-weight: bold;
        color: #fff;
    }
    input[type='text'],
    input[type='number'],
    select,
    textarea {
        width: 100%;
        max-width: 450px;
        height: 40px;
        margin: 10px 0;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #555;
        border-radius: 5px;
        background-color: #222;
        color: #fff;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.2);
    }
    textarea {
        height: 100px;
    }
    input[type='file'] {
        border: none;
        color: #fff;
    }
    input[type='submit'] {
        width: auto;
        padding: 10px 20px;
        font-size: 16px;
        color: #fff;
        background-color: #28a745;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    input[type='submit']:hover {
        background-color: #218838;
    }
    h2 {
        text-align: center;
        margin-bottom: 30px;
        color: #fff;
    }
    .current-image {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }
    .current-image img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        border: 2px solid #555;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);
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
            <h2>Update Product</h2>
            <div class="div_deg">
              <form action="{{url('edit_product',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                  <label>Title</label>
                  <input type="text" name="title" value="{{$data->title}}">
                </div>
                <div>
                  <label>Description</label>
                  <textarea name="description">{{$data->description}}</textarea>
                </div>
                <div>
                  <label>Price</label>
                  <input type="text" name="price" value="{{$data->price}}">
                </div>
                <div>
                  <label>Quantity</label>
                  <input type="number" name="quantity" value="{{$data->quantity}}">
                </div>
                <div>
                  <label>Category</label>
                  <select name="category">
                    <option value="{{$data->category}}">{{$data->category}}</option>
                    @foreach($category as $category)
                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="current-image">
                  <label>Current Image</label>
                  <img width="150" src="/products/{{$data->image}}">
                </div>
                <div>
                  <label>New Image</label>
                  <input type="file" name="image">
                </div>
                <div>
                  <input class="btn btn-success" type="submit" value="Update Product">
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

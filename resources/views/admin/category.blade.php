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
      th {
        background-color: skyblue;
        padding: 15px;
        font-size: 20px;
        font-weight: bold;
        color: white;
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
            <h1>Add Category</h1>
            <div class="div_deg">
              <form action="{{url('add_category')}}" method="POST">
                @csrf
                <div>
                  <input type="text" name="category" placeholder="Category Name">
                  <button type="submit" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Add Category</button>
                </div>
              </form>
            </div>
            <div>
              <table class="table_deg">
                <tr>
                  <th>Category Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                @foreach($data as $data)
                <tr>
                  <td>{{$data->category_name}}</td>
                  <td>
                    <a class="btn btn-success" href="{{url('edit_category',$data->id)}}"><i class="bi bi-pencil"></i></a>
                  </td>
                  <td>
                    <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_category',$data->id)}}"><i class="bi bi-trash"></i></a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"></script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script>

    <script type="text/javascript">
      function confirmation(ev){
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');

        swal({
          title: "Are you sure?",
          text: "This delete will be permanent.",
          icon: "warning",
          buttons: true, 
          dangerMode: true,
          buttons: {
            cancel: {
              text: "Cancel",
              value: null,
              visible: true,
              className: "",
              closeModal: true,
            },
            confirm: {
              text: "Delete",
              value: true,
              visible: true,
              className: "btn-danger",
              closeModal: true
            }
          },
          content: {
            element: "div",
            attributes: {
              style: "color: white; text-align: center; background-color: #333; padding: 10px; border-radius: 5px;",
            },
          }
        }).then((willDelete) => {
          if (willDelete) {
            window.location.href = urlToRedirect;
          }
        });
      }
    </script>
  </body>
</html>

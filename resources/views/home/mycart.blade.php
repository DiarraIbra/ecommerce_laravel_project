<!DOCTYPE html>
<html>

<head>
    @include('home.css')
    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        table {
            border: 2px solid #333;
            text-align: center;
            width: 100%;
            max-width: 800px;
            border-collapse: collapse;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        th {
            border: 2px solid #333;
            text-align: center;
            color: #fff;
            font-weight: bold;
            background-color: #333;
            padding: 12px;
        }

        td {
            border: 1px solid #ddd;
            padding: 10px;
        }

        .cart_value {
            text-align: center;
            margin-bottom: 70px;
            padding: 18px;
        }

        h3 {
            font-size: 24px;
            color: #4CAF50;
            background-color: #f8f8f8;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            width: fit-content;
            margin: 20px auto;
        }

        .order_deg {
            padding-right: 100px;
            margin-top: -50px;
        }

        label {
            display: inline-block;
            width: 150px;
            font-weight: bold;
            color: #333;
        }

        .div_gap {
            padding: 20px;
            display: flex;
            align-items: center;
        }

        input, textarea {
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 250px;
            font-size: 14px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-success {
            background-color: #28a745;
            color: #fff;
        }

        .btn-success:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        @include('home.header')
    </div>

    <div class="div_deg">
        <table>
            <tr>
                <th>Product Title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Remove</th>
            </tr>

            <?php $value = 0; ?>
            @foreach($cart as $cart)
            <tr>
                <td>{{$cart->product->title}}</td>
                <td>{{$cart->product->price}}</td>
                <td>
                    <img width="150" src="/products/{{$cart->product->image}}">
                </td>
                <td>
                    <a class="btn btn-danger" onclick="confirmation(event, '{{$cart->id}}')" href="{{url('delete_cart',$cart->id)}}">Remove</a>
                </td>
            </tr>

            <?php $value = $value + $cart->product->price; ?>
            @endforeach
        </table>
    </div>

    <div class="cart_value">
        <h3>Total of Cart is: {{$value}} DH</h3>
    </div>

    <div class="order_deg" style="display: flex; justify-content: center; align-items: center;">
        <form action="{{url('comfirm_order')}}" method="POST">
            @csrf
            <div class="div_gap">
                <label>Receiver Name</label>
                <input type="text" name="name" value="{{Auth::user()->name}}">
            </div>
            <div class="div_gap">
                <label>Receiver Address</label>
                <textarea name="address">{{Auth::user()->address}}</textarea>
            </div>
            <div class="div_gap">
                <label>Receiver Phone</label>
                <input type="text" name="phone" value="{{Auth::user()->phone}}">
            </div>
            <div class="div_gap">
                <input class="btn btn-primary" type="submit" value="Cash On Delivery">
                <a class="btn btn-success" href="{{url('stripe',$value)}}">Pay Using Card</a>
            </div>
        </form>
    </div>

    @include('home.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        function confirmation(ev, id) {
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
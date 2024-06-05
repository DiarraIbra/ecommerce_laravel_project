<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details_Commande</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
            width: 100%;
        }
        h3, h2 {
            margin: 10px 0;
        }
        h3 {
            font-size: 1.2em;
            color: #555;
        }
        h2 {
            font-size: 1.5em;
            color: #222;
        }
        img {
            margin-top: 20px;
            border-radius: 8px;
            max-width: 100%;
            height: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Customer name :  {{$data->name}}</h3>
        <h3>Customer address :  {{$data->rec_address}}</h3>
        <h3>Phone :  {{$data->phone}}</h3>
        <h2>Product title :  {{$data->product->title}}</h2>
        <h2>Price :  {{$data->product->price}} DH</h2>
        <img src="products/{{$data->product->image}}" alt="image introuvable">
        <h2>Delivery Status: {{$data->status}}</h2>
    </div>
</body>
</html>

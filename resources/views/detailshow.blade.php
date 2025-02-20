<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <!-- Be present above all else. - Naval Ravikant -->
        <p>
            Product ID:  {{$products['id']}} <br> Product Name: {{$products['name']}}  <br> Product description : {{$products['description']}} <br> Product Price : {{$products['price']}}

        </p>
        <div>
            <a href="{{route('index')}}">back</a>
        </div>

    </div>

</body>
</html>





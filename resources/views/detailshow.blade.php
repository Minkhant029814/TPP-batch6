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
            {{$products['id']}} : {{$products['name']}} : {{$products['description']}} : {{$products['price']}}

        </p>
        <div>
            <a href="{{route('index')}}">back</a>
        </div>

    </div>

</body>
</html>





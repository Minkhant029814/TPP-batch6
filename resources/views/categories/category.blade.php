<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div>
        <h1>CateGories Lists</h1>
        
        @foreach ($lists as $data)
        <p>{{$data['name']}} : {{$data['age']}} : {{$data['city']}}</p>
        @endforeach
       
        
    </div>
</body>
</html>
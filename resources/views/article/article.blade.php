<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <body>
        

        @foreach ($array as $data)
            <p>Name is :
                {{$data['name']}}
                Age is :
                    {{$data['age']}}
                Grade is :
                {{$data['grade']}}
            </p>
        @endforeach


        
   

    <h1>hellow shit</h1>

    </body>

</html>

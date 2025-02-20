<div>
    <h1>Welcome to Show Products;</h1>

    @foreach ($products as $product)
        <p>{{$product['id']}} </p>
        <p style="font-size: 20px;font-weight:bold"> {{$product['name']}}</p>
        <a href="{{route('showDetails',['id'=>$product->id])}}">detail</a>
    @endforeach
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
</div>

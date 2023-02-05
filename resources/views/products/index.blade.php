<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    {{--<h1>Index function of ProductsController</h1>
    <h2>Title : {{ $title }}</h2>
    <ul>
        <li> x = {{ $x }}</li>
        <li> y = {{ $y }}</li>
    </ul>--}}
    {{--<h1>{{ $name }}</h1>--}}
    @foreach ($myphone as $item)
        <h3>{{ $item }}</h3>
    @endforeach
</body>
</html>
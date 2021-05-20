<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="card">
    @foreach ($addresses as $address)
    <h2>{{$address->country}}</h2>
    <h2>{{$address->user->name}}</h2>
    @endforeach
    </div>
</body>
</html>
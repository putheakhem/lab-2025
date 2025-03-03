<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    @vite(['resources/css/app.css'])
</head>
<body>

    @foreach($items as $item)
       <h1 class="text-green-500 text-xl"> {{ $item->title }} </h1>
        <p class="text-base"> {{ $item->description }}</p>
    @endforeach
</body>
</html>
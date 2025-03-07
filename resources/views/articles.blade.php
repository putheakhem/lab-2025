<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Article</title>
</head>
    @foreach($items as $item)
        <div>
            <h1>{{ $item->title }}</h1>
            <p>{{ $item->description }}</p>
        </div>
    @endforeach
<body>

</body>
</html>
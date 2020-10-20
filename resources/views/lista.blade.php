<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($results as $results)
        <p>nombre: {{$results->username}}, password: {{$results->password}} <p><br>
    @endforeach
</body>
</html>
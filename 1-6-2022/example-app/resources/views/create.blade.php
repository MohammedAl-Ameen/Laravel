<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <form method="POST" action="/student">
        @csrf
        <input type="text" name="name">
        @error('name')
            <p>{{$message}}</p>
        @enderror
        <input type="text" name="email">
        @error('email')
        <p>{{$message}}</p>
        @enderror
        <input type="submit" value="submit">
    </form>
</body>
</html>
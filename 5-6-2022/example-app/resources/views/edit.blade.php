<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <form action="/update/{{ $student->id }}" method="post">
        @csrf
        @method('put')
    <input type="text" name="name" value="{{ $student->name }}">
    <input type="text" name="email" value="{{ $student->email }}">
    <input type="text" name="phone" value="{{ $student->phone }}">
    <input type="text" name="age" value="{{ $student->age }}">
    <input type="submit" value="update">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <form method="POST" action="/student/{{$student->id}}">

        @csrf
        @method('PUT')
        <input type="text" value="{{ $student->name }}">
        <input type="text" value="{{ $student->email }}">

        <input type="submit" value="edit">

    </form>
</body>
</html>
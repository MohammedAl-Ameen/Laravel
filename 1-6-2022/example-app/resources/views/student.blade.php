<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>
<body>
    <form action="/student">
        <input type="text" name="search">
        <input type="submit">
    </form>
    @foreach ($list as $value)
    <a href="/student?id={{$value["id"]}}">{{$value["id"]}}</a>
        <pre>{{$value}}</pre>
    <form action="/student/{{$value["id"]}}" method="POST" style="display:flex;">
        @csrf
        @method('DELETE')
        <input type="submit" value="delete">
        <button><a href="/student/{{ $value["id"] }}/edit" style="text-decoration: none; color:black; cursor: default;">edit</a></button>
    </form>
    @endforeach

    <div class="mt-6 p-4">
    {{$list->links()}}
    </div>
</body>
</html>
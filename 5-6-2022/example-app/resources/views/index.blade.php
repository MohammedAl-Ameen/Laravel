<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="create" style="text-decoration: none; color:black;"><button>ADD</button></a>
    <table border="1px">
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Age</th>

    @foreach ($list as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->phone }}</td>
        <td>{{ $item->age }}</td>
        <form method="POST" action="delete/{{ $item->id }}">
            @csrf
            @method('delete')
            <td><input type="submit" value="Delete"></td>
        </form>
        <td><a href="edit/{{ $item->id }}"><button>Update</button></a></td>
    </tr>
    @endforeach

    {{ $list->links(); }}

</table>
</body>
</html>
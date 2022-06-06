<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    {{-- <table border="1px">
        <tr>
            <th>ID</th>
            <th>Name of the course</th>
            <th>Doctor Name</th>
        </tr>
    @foreach ($courses as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['name']}}</td>
            <td>{{$item['doctor_name']}}</td>
        </tr>
    @endforeach --}}

    {{ dd($students[0]->get_course[0]["name"]); }}

    {{-- @foreach ($students as $item)
    <tr>
        
        <td>{{$item["id"]}}</td>
        <td>{{$item["name"]}}</td>

    </tr>
@endforeach --}}


</table>
</body>
</html>
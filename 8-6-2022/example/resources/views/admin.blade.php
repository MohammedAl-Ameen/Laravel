@extends("admin_layout.master")


@section('body')

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Category</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
        @foreach ($movies as $movie)
        <tr>
            <th scope="row">1</th>
            <td>{{ $movie->name }}</td>
            <td>{{ $movie->category }}</td>
            <td>{{ $movie->description }}</td>
            <td><img src="{{asset('images/' .$movie->url_image);}}" alt="{{ $movie->name }}" style="width: 100px; height:100px;"></td>
            <td><form action="/admin/edit/{{$movie->id }}">
            
                <input type="submit" class="btn btn-secondary" value="edit"></form></td>
            <td>
                <form method="POST" action="/admin/delete/{{$movie->id }}">
                    @csrf
                    @method('DELETE')
                <input type="submit" class="btn btn-danger" value="delete"></form></td>
        </tr>
        @endforeach
        <tr>
            <th colspan="8"><a href="/admin/create"><Button class="btn btn-primary">Add</Button></a></th>

        </tr>
    </tbody>
    </table>
@endsection
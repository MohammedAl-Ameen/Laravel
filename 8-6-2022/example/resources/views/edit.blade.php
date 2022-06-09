@extends("admin_layout.master")

@section("title" , "edit")

@section('body')

<form style="width: 50%;" method="POST" action="/admin/update/{{ $movie->id }}" enctype="multipart/form-data">

    @csrf
    @method('PUT')
  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control " name="name" value="{{ $movie->name }}"/>
    <label class="form-label" for="form4Example1" ></label>
  </div>


  <div class="form-outline mb-4">
    <input type="text" id="form4Example2" class="form-control" name="number" value="{{ $movie->number }}" />
    <label class="form-label" for="form4Example2" ></label>
  </div>


    <div class="form-outline mb-4">
      <input type="text" id="form4Example2" class="form-control"  name="category" value="{{ $movie->category }}"/>
      <label class="form-label" for="form4Example2" ></label>
    </div>

  <div class="form-outline mb-4">
    <input class="form-control" id="form4Example3" name="description" rows="4" value="{{ $movie->description }}"></textarea>
    <label class="form-label" for="form4Example3" ></label>
  </div>

  <!-- Submit button -->
  <input type="submit" class="btn btn-primary btn-block mb-4" value="Edit">
</form>


@endsection
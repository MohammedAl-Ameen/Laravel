@extends("admin_layout.master")

@section("title" , "create")

@section('body')

<form style="width: 50%;" method="POST" action="/admin/create" enctype="multipart/form-data">

  @csrf
  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control " name="name"/>
    <label class="form-label" for="form4Example1" >Name</label>
  </div>


  <div class="form-outline mb-4">
    <input type="text" id="form4Example2" class="form-control" name="number" />
    <label class="form-label" for="form4Example2" >Number of session</label>
  </div>


    <div class="form-outline mb-4">
      <input type="text" id="form4Example2" class="form-control"  name="category"/>
      <label class="form-label" for="form4Example2" >Category</label>
    </div>

  <div class="form-outline mb-4">
    <textarea class="form-control" id="form4Example3" name="description" rows="4"></textarea>
    <label class="form-label" for="form4Example3" >Description</label>
  </div>

  <div class="mb-4">
  <label for="formFileMultiple" class="form-label">Upload an image</label>
  <input class="form-control" type="file" id="formFileMultiple" multiple name="image"/>
</div>

<div class="mb-4">
  <label for="formFileMultiple" class="form-label">Upload an trailer</label>
  <input class="form-control" type="file" id="formFileMultiple" multiple name="video"/>
</div>
  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Add</button>
</form>


@endsection
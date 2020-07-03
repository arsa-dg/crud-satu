@extends("adminlte.master")

@section("content")
<div class="ml-3">
<form action="/items" method="POST">
  @csrf
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Name" id="name">
  </div>
  <div class="form-group">
    <label for="description">Description:</label>
    <input type="text" class="form-control" name="description" placeholder="Enter Description" id="description">
  </div>
  <div class="form-group">
    <label for="stock">Stock:</label>
    <input type="number" class="form-control" name="stock" placeholder="Enter Stock" id="stock">
  </div>
  <div class="form-group">
    <label for="name">Price:</label>
    <input type="number" class="form-control" name="price" placeholder="Enter Price" id="price">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
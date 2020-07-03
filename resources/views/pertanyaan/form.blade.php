@extends("adminlte.master")

@section("content")
<div class="card mt-2 ml-2 mr-2">
  <div class="card-body">
    <form action="/pertanyaan" method="POST">
      @csrf
      <div class="form-group">
        <label for="judul">Judul:</label>
        <input type="text" class="form-control" name="judul" placeholder="Enter Judul" id="judul">
      </div>
      <div class="form-group">
        <label for="isi">Isi:</label>
        <input type="text" class="form-control" name="isi" placeholder="Enter Isi" id="isi">
      </div>
      <div class="form-group">
        <label for="tanggal_dibuat">Tanggal Dibuat:</label>
        <input type="date" class="form-control" name="tanggal_dibuat" placeholder="Enter Tanggal Dibuat" id="tanggal_dibuat">
      </div>
      <div class="form-group">
        <label for="tanggal_diperbaharui">Tanggal Diperbaharui:</label>
        <input type="date" class="form-control" name="tanggal_diperbaharui" placeholder="Enter Price" id="tanggal_diperbaharui">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection
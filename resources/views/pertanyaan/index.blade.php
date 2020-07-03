@extends("adminlte.master")

@section("content")
<div class="ml-2 pt-2">
    <a href="/pertanyaan/create" class="btn btn-secondary">Buat pertanyaan >></a>
</div>
@foreach($pertanyaan as $key => $pertanyaan)
  <div class="card mt-2 ml-2 mr-2">
    <div class="card-header">
      <h3>{{$pertanyaan->judul}}</h3> On {{$pertanyaan->tanggal_dibuat}}
    </div>
    <div class="card-body">
        <a href="/jawaban/{{$pertanyaan->id}}" class="btn btn-primary">Jawab</a>
        <a href="/pertanyaan/{{$pertanyaan->id}}" class="btn btn-info">Selengkapnya</a>
        <a href="/pertanyaan/{{$pertanyaan->id}}/edit" class="btn btn-success">Edit</a>
        <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST" style="display: inline">
          @csrf
          @method("DELETE")
          <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
        </form>
    </div>
    <div class="card-footer">
    Updated: {{$pertanyaan->tanggal_diperbaharui}}
    </div>
  </div>
@endforeach
@endsection
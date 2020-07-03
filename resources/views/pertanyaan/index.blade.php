@extends("adminlte.master")

@section("content")
<div class="ml-2">
    <a href="/pertanyaan/create">Buat pertanyaan >></a>
</div>
@foreach($pertanyaan as $key => $pertanyaan)
  <div class="card mt-2 ml-2 mr-2">
    <div class="card-header"><h3>{{$pertanyaan->judul}}</h3> On {{$pertanyaan->tanggal_dibuat}}</div>
    <div class="card-body"><h4>{{$pertanyaan->isi}}</h4></div>
    <div class="card-footer">
    Updated: {{$pertanyaan->tanggal_diperbaharui}}
    <br><a href="/jawaban/{{$pertanyaan->id}}">Jawab</a>
    </div>
  </div>
@endforeach
@endsection
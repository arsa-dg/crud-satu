@extends("adminlte.master")

@section("content")
<!-- header -->
<div class="ml-2 pt-2">
    <a href="/pertanyaan" class="btn btn-secondary"><< Kembali ke pertanyaan </a>
</div>

<!-- pertanyaan -->
<div class="card mt-2 ml-2 mr-2">
    <div class="card-header"><h3>{{$pertanyaan->judul}}</h3> On {{$pertanyaan->tanggal_dibuat}}</div>
    <div class="card-body"><h4>{{$pertanyaan->isi}}</h4></div>
    <div class="card-footer">Updated On: {{$pertanyaan->tanggal_diperbaharui}} </div>
</div>

<!-- jawaban -->
<div class="ml-2"><h2>Jawaban:</h2></div>
@foreach($jawaban as $key => $jawaban)
    @if($jawaban->pertanyaan_id == $pertanyaan->id)
        <div class="card ml-2 mt-2">
            <div class="card-header">
                <h6>On {{$jawaban->tanggal_dibuat}}, Someone:</h6>
            </div>
            <div class="card-body border-bottom">
                <h4>{{$jawaban->isi}}</h4>
            </div>
            <div class="card-footer">
                Updated: {{$jawaban->tanggal_diperbaharui}}
            </div>
        </div>
    @endif
@endforeach
@endsection
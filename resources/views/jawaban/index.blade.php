@extends("adminlte.master")

@section("content")
<?php 
$uri = $_SERVER['REQUEST_URI'];
$basename = basename($uri);
?>
<div class="ml-2">
    <a href="/pertanyaan"><< Kembali ke pertanyaan </a>
</div>
<div class="card mt-2 ml-2 mr-2">
@foreach($pertanyaan as $key => $pertanyaan)
    @if($pertanyaan->id == $basename)
        <div class="card-header"><h3>{{$pertanyaan->isi}}</h3> On {{$pertanyaan->tanggal_dibuat}}</div>
        @foreach($jawaban as $key => $jawaban)
            @if($jawaban->pertanyaan_id == $basename)
                <div class="card-body border-bottom">
                    <h6>On {{$jawaban->tanggal_dibuat}}, Someone:</h6>
                    <h4>{{$jawaban->isi}}</h4>
                    Updated: {{$jawaban->tanggal_diperbaharui}}
                </div>
            @endif
        @endforeach
        <div class="card-footer">
            <form action="/jawaban/{{$pertanyaan->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="isi">Jawaban:</label>
                    <input type="text" class="form-control" name="isi" placeholder="Enter Jawaban" id="isi">
                </div>
                <div class="form-group">
                    <label for="tanggal_dibuat">Tanggal Dibuat:</label>
                    <input type="date" class="form-control" name="tanggal_dibuat" placeholder="Enter Tanggal Dibuat" id="tanggal_dibuat">
                </div>
                <div class="form-group">
                    <label for="tanggal_diperbaharui">Tanggal Diperbaharui:</label>
                    <input type="date" class="form-control" name="tanggal_diperbaharui" placeholder="Enter Price" id="tanggal_diperbaharui">
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
    @endif
@endforeach
</div>
@endsection
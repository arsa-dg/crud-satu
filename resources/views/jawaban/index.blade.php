@extends("adminlte.master")

@section("content")
<?php 
$uri = $_SERVER['REQUEST_URI'];
$basename = basename($uri);
?>
<!-- header -->
<div class="ml-2 pt-2">
    <a href="/pertanyaan" class="btn btn-secondary"><< Kembali ke pertanyaan </a>
</div>

@foreach($pertanyaan as $key => $pertanyaan)
    @if($pertanyaan->id == $basename)
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

        <!-- menjawab -->
        <div class="card ml-2 mt-2">
            <form action="/jawaban/{{$pertanyaan->id}}" method="POST">
                @csrf
                <div class="form-group ml-2 mt-2">
                    <label for="isi">Jawabanmu:</label>
                    <input type="text" class="form-control" name="isi" placeholder="Enter Jawaban" id="isi">
                </div>
                <div class="form-group ml-2 mt-2">
                    <label for="tanggal_dibuat">Tanggal Dibuat:</label>
                    <input type="date" class="form-control" name="tanggal_dibuat" placeholder="Enter Tanggal Dibuat" id="tanggal_dibuat">
                </div>
                <div class="form-group ml-2 mt-2">
                    <label for="tanggal_diperbaharui">Tanggal Diperbaharui:</label>
                    <input type="date" class="form-control" name="tanggal_diperbaharui" placeholder="Enter Price" id="tanggal_diperbaharui">
                </div>
                <button type="submit" class="btn btn-primary ml-2 mb-2">Submit</button>
            </form>
        </div>
    @endif
@endforeach
@endsection
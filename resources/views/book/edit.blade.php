@extends('components.layout')
@section('title','tabel')

@section('content')
@include('components.navbar')

<div class="container">
    <h4 class="text-center mb-3">Tambah Buku</h4>
    <form method="post" action="{{route('book.update',$book->id)}}">
        @csrf
        @method('PUT')
        <div class="d-flex justify-content-center">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">judul</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" name="judul" value="{{$book->judul}}">
              </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">penulis</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" name="penulis" value="{{$book->penulis}}">
              </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">harga</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" name="harga" value="{{$book->harga}}">
                </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">tgl.terbit</span>
                <input type="date" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" name="tgl.terbit" value="{{$book->tgl_terbit}}">
                </div>

            <div><button type="submit" class="btn btn-primary">simpan</button></div>
            <a name="" id="" class="btn btn-alert" href="/book" role="button">Batal</a>
        </div>
</div>
@endsection

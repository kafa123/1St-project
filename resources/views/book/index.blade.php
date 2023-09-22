@extends('components.layout')
@section('title','tabel')

@section('content')
@include('components.navbar')
<div class="">
    <h4 class="text-center mb-4">Daftar Buku</h4>
    <div class="d-flex justify-content-center"><a href="/book/create" class="btn btn-success mb-3">Buat Buku Baru</a></div>
</div>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">no</th>
                    <th scope="col">Judul book</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Tgl_terbit</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data_book as $book)
                <tr class="">
                    <td scope="row">{{++$no}}</td>
                    <td scope="row">{{$book->judul}}</td>
                    <td scope="row">{{$book->penulis}}</td>
                    <td scope="row">{{"Rp".number_format($book->harga,2,',','.') }}</td>
                    <td scope="row">{{$book->tgl_terbit}}</td>
                    <td scope="row">

                        <div><form action="/book/{{$book->id}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="image" src="{{asset('images/ic_delete.png')}}" alt="Submit" class="btn btn-primary">
                        </form>

                        <a name="" id="" class="btn btn-primary" href="/book/edit/{{$book->id}}" role="button">edit</a>

                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <h5 class="text-center fw-bold">jadi jumlah data ada {{$jumlah_data}} dan total harga semua buku adalah {{"Rp".number_format($jumlah_harga,2,',','.')}} </h5>

@endsection

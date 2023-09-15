@extends('components.layout')
@section('title','tabel')

@section('content')
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
                        <form action="/book/{{$book->id}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="image" src="{{asset('images/ic_delete.png')}}" alt="Submit" class="btn btn-primary">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <h5 class="text-center fw-bold">jadi jumlah data ada {{$jumlah_data}} dan total harga semua buku adalah {{"Rp".number_format($jumlah_harga,2,',','.')}} </h5>

@endsection

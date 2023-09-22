<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    //
    public function index(){
        $data_book = book::all();
        $no=0;
        $jumlah_data=book::count();
        $jumlah_harga=book::sum('harga');
        return view('book.index',compact('data_book','no','jumlah_data','jumlah_harga'));
    }
    public function create(){
        return view('book.create');
    }
    public function store(Request $request){
        $book = new book;
        $book-> judul = $request -> judul;
        $book-> penulis = $request -> penulis;
        $book-> harga = $request -> harga;
        $book-> tgl_terbit = $request -> tgl_terbit;
        $book-> save();
        return redirect('/book');
    }
    public function destroy($id)
    {
        $book=book::find($id);
        $book->delete();
        return back();
    }

    public function edit( $id){
        $book = book::find($id);
        return view('book.edit',compact('book'));
    }
    public function update(Request $request,$id){
        $book=book::find($id);
        $book->judul=$request->judul;
        $book->penulis=$request->input('penulis');
        $book->harga=$request->input('harga');
        $book->tgl_terbit=$request->input('tgl_terbit');
        $book->save();
        return redirect('/book');
    }
}

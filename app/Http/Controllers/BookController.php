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

    }
    public function store(Request $request){([

        ]);
    }
    public function edit($id)
    {
        // $book = book::where('id',$id)->first();
        // dd($book)
    }
    public function destroy($id)
    {
        $book=book::find($id);
        $book->delete();

        return back();
    }
}

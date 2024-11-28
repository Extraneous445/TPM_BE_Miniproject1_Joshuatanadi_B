<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function welcome(){
        $books = Book::all();
        return view('welcome', compact('books'));
        //compact
    }
    public function store(request $request){
        Book::create([
            //nama atribut =>$req->nama input
            'title'=> $request->title,
            'author'=> $request->author,
            'publication_date'=> $request->publication_date,
            'stock'=> $request->stock
        ]);

        return redirect(route('welcome'));
    }


    public function createBook(){
        return view("createBook");
    }
}

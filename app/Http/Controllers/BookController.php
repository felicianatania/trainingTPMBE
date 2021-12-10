<?php

namespace App\Http\Controllers;

use App\Models\Book; //janlup import autocomplete aja
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getCreatePage(){
        return view('create');
    }

    public function createBook(Request $request){
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'release' => $request->release,
            'price' => $request->price,
        ]);
        //kiri itu dr model yg kanan dari html
        return redirect(route('getCreatePage')); //redirect itu url keganti juga
    }

    public function getBooks(){
        $books = Book::all();
        return view('view', ['books' => $books]);
    }
}

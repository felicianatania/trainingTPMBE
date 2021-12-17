<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book; //janlup import autocomplete aja
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getCreatePage(){
        return view('create');
    }

    public function createBook(BookRequest $request){
        // $request->validate([
        //     'title' => 'required',
        //     'price' => 'required|numeric',
        // ]); //kurang baik sebenernya, harus copy lagi ke function lagi misalnya di update

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'release' => $request->release,
            'price' => $request->price,
        ]);
        //kiri itu dr model yg kanan dari html
        return redirect(route('getBooks')); //redirect itu url keganti juga
    }

    public function getBooks(){
        $books = Book::all();
        //$book = DB::table('books')->get();
        return view('view', ['books' => $books]);
    }

    public function getBookById($id){
        $book = Book::find($id);
        //$book = DB::table('books')->get();
        //dd($book);
        return view('update', ['book' => $book]);
    }

    public function updateBook(BookRequest $request, $id){
        $book = Book::find($id);

        // $book->title = $request->title;
        // $book->author = $request->author;
        // $book->release = $request->release;
        // $book->price = $request->price;

        // $book->save();



        $book -> update([
            'title' => $request->title,
            'author' => $request->author,
            'release' => $request->release,
            'price' => $request->price,
        ]);

        return redirect(route('getBooks'));
    }

    public function deleteBook($id){
        Book::destroy($id);
        return redirect(route('getBooks'));
    }
}

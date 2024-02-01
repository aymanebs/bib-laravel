<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books= Book::get();
        return view('book.index',compact('books'));
    }
    public function create(){
        return view('book.create');
    }
    public function store(Request $request){

        $request->validate([
            'title'=>'required|max:255',
            'author'=>'required|max:255',
            'genre'=>'required|max:255',
            'description'=>'required|max:255',
            'edition'=>'required|date',
            'total_copies'=>'required|numeric',
            'avaible_copies'=>'required|numeric',
        ]);

        Book::create($request->all());
        return redirect('books/create')->with('success','Book inserted successfully');

    }

    public function edit(Book $book){
        return view('book.edit',compact('book'));
    }

    public function update(Request $request,Book $book){
        
        $request->validate([
            'title'=>'required|max:255',
            'author'=>'required|max:255',
            'genre'=>'required|max:255',
            'description'=>'required|max:255',
            'edition'=>'required|date',
            'total_copies'=>'required|numeric|',
            'avaible_copies'=>'required|numeric|',
        ]);

        $book->update($request->all());
        return redirect('books')->with('success','Book updated succesfully');

    }

    public function destroy(Book $book){
        $book->delete();
        return redirect('books')->with('deleted','Book deleted');

    }

 


}

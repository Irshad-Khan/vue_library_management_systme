<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
      $books = Book::all();
      return view('admins.books.index', compact('books'));
    }

    public function create(){
        return view('admins.books.create');
    }

    public function store(Request $request){
        $book = new Book();
        $book->title = $request->title;
        $book->auther = $request->auther; 
        $book->isbn_number = $request->isbn_number;
        $book->publish_year = $request->publish_year;
        $book->type = $request->type;
        $book->available_books = $request->available_books;
        $book->category_id = $request->category_id;
        $book->status = $request->status;
        $book->save();
        return redirect()->route('admin.books.index')->with('success', 'Book Added Successfully');
    }

    public function delete($id){
    Book::find($id)->delete();
    return redirect()->route('admin.books.index')->with('success', 'Book Deleted Successfully');

    }

    public function show($id){
        $book = Book::findOrfail($id);
        return view('admins.books.show', compact('book'));
    }

    public function edit($id){
        $book = Book::findOrFail($id);
        $books = Book::all();
        return view('admins.books.edit',compact('book', 'books'));
     }

     public function update(Request $request){
        $book = Book::findOrFail($request->id);
        $book->title = $request->title;
        $book->auther = $request->auther;
        $book->isbn_number = $request->isbn_number;
        $book->publish_year = $request->publish_year;
        $book->available_books = $request->available_books;
        $book->type = $request->type;
        $book->category_id = $request->category_id;
        $book->status = $request->status;
        $book->save();
        return redirect()->route('admin.books.index')->with('success', 'Book Updated Successfully!');
    
}
}
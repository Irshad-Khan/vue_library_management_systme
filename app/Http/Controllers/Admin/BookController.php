<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
      $books = Book::all();
      return view('admins.books.index', compact('books'));
    }

    public function create(){
   $categories = Category::all();    // select * from Categories table 
        return view('admins.books.create', compact('categories'));
    }

    public function store(Request $request){
        $request->validate(rules:[
            'title'=>['required', 'unique:books,title'],
            'auther'=>['required', 'unique:books,auther'],
            'isbn_number'=>['required', 'unique:books,isbn_number'],
            'publish_year'=>['required', 'unique:books,publish_year'],
            'type'=>['required', 'unique:books,type'],
            'available_books'=>['required', 'unique:books,available_books'],
            'category_id'=>['required', 'unique:books,category_id'],
            'status'=>['required', 'unique:books,status']
        ]);
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
   $categories = Category::all();    // select * from Categories table 
        $book = Book::findOrFail($id);
        return view('admins.books.edit',compact('book', 'categories'));
     }

     public function update(Request $request){
        $request->validate(rules:[
            'title'=>['required'],
            'auther'=>['required'],
            'isbn_number'=>['required'],
            'publish_year'=>['required'],
            'type'=>['required'],
            'available_books'=>['required'],
            'category_id'=>['required'],
            'status'=>['required']
        ]);
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
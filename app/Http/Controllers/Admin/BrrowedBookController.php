<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\BorrowedBook;
use App\Models\Book;


class BrrowedBookController extends Controller
{
   public function borrowedBook($bookId){

        $isBookExist = BorrowedBook::where('book_id', $bookId)->count();
        if($isBookExist > 0 ){

        return redirect()->back()->with('success', ' You have Already borrowed this book' );
        }

        $book = Book::where('id', $bookId)->first();
        if($book->available_books <= 0){
        return redirect()->back()->with('success', ' Book Outoff stock' );

        }
        $book->available_books = $book->available_books -1;
        $book->update();


        $borrowedBook = new BorrowedBook();
        $borrowedBook->user_id = Auth::user()->id;
        $borrowedBook->book_id = $bookId;
        $borrowedBook->borrow_date = now();
        $borrowedBook->save();

        return redirect()->back()->with('success', 'Book has been assign to you. Please collect book from library');

   }

   public function returnBook($id)
   {
      $book = Book::findOrFail($id);
      $book->available_books = $book->available_books + 1;
      $book->update();

      BorrowedBook::where('user_id',Auth::user()->id)->where('book_id',$book->id)->delete();
      return redirect()->back()->with('success','Thanks for reurn');
   }
}

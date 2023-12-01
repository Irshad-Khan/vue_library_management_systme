<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use App\Models\BorrowedBook;


class AdminController extends Controller
{
    public function index(){
        $totalBooks = Book::count();
        $totalUsers = User::where('role_id', 3)->count();
        $totalCategories = Category::count();
        $totalBorrowedBooks = BorrowedBook::count();



    return view('admins.index', compact('totalBooks', 'totalUsers', 'totalCategories', 'totalBorrowedBooks'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index()
    {
        return view('book.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    // public function show($book)
    // {
    //     $books = \DB::table('books')->where('bookname', $book)->first();

    //     dd($books);
    // }

    // return view('book')->with([
    //     'book' =>$books($book)
    // ]);
}

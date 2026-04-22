<?php

namespace App\Http\Controllers;

use App\Models\Book;

class HelloController extends Controller
{
    public function index()
    {
        return '안녕 세상아!';
    }

    public function show()
    {
        $data = ['message' => '안녕 세상아!!'];

        return view('hello.show', $data);
    }

    public function list()
    {
        $books = Book::all();
        $data = ['books' => $books];

        return view('hello.list', $data);
    }

    public function conf()
    {
        return config('myapp.api_key') . '/' . config('myapp.debug');
    }
}

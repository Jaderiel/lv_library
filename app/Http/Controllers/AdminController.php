<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Book;

class AdminController extends Controller
{
    public function users(Request $request) {
        $users = User::get();

        $data = [
            'users' => $users
        ];

        return view('users', $data);
    }

    public function createUser(Request $request) {

        return view('create-user');
    }

    public function storeUser(Request $request) {
        $email = $request->get('email');
        $password = $request->get('password');
        $firstname = $request->get('firstname');
        $lastname = $request->get('lastname');
        $courseYear = $request->get('courseYear');

        User::create([
            'email' => $email,
            'password' => $password,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'course_year' => $courseYear,
        ]);

        return redirect('/users');
    }

    public function books(Request $request) {
        $books = Book::get();

        $data = [
            'books' => $books
        ];

        return view('books', $data);
    }

    public function addBook(Request $request) {

        return view('add-book');

    }

    public function storeBook(Request $request) {
        $title = $request->get('title');
        $description = $request->get('description');
        $author = $request->get('author');
        $cover = $request->get('cover');
        $year = $request->get('year');
        $url = $request->get('url');

        Book::create([
            'title' => $title,
            'description' => $description,
            'author' => $author,
            'cover' => $cover,
            'year' => $year,
            'url' => $url,
        ]);

        return redirect('/books');
    }
}

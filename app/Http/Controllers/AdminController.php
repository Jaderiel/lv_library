<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

use App\Models\User;

use App\Models\Book;

use App\Models\Note;

class AdminController extends Controller
{

    public function login(Request $request) {
        $email = $request->get('email');
        $password = $request->get('password');

        $user = User::where('email', $email)->first();
        if (!$user) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

        if (!Hash::check($password, $user->password)) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

        $currentDate = Carbon::now();
        $token = Hash::make($user->id . $currentDate->toDateTimeString());

        $user->token = $token;
        $user->save();

        return response()->json(['data' => $user]);
    }

    public function users(Request $request) {
        $users = User::get();

        $data = [
            'users' => $users
        ];

        if ($request->get("is_mobile_app")) {
            return response()->json(['data' => $users]);
        }

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
            'password' =>  Hash::make($password),
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

        if ($request->get("is_mobile_app")) {
            return response()->json(['data' => $books]);
        }

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

    public function notes(Request $request) {
        $notes = Note::get();

        $data = [
            'notes' => $notes
        ];

        if ($request->get("is_mobile_app")) {
            return response()->json(['data' => $notes]);
        }

        return view('notes', $data);
    }

    public function addNote(Request $request) {

        return view('add-note');

    }

    public function storeNote(Request $request) {
        $user_id = $request->get('user_id');
        $title = $request->get('title');
        $content = $request->get('content');

        Note::create([
            'user_id' => $user_id,
            'title' => $title,
            'content' => $content,
        ]);

        return redirect('/notes');
    }

}

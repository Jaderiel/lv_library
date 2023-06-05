<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

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
        dd("books");
    }
}

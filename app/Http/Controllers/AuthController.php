<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm() {
        $title = 'Login';

        return view('auth.login', compact('title'));
    }
}

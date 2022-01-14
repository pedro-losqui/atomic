<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view ('pages.user.index');
    }
}

<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view ('pages.user.index');
    }
}

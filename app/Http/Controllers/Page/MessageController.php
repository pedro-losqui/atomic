<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view ('pages.message.index');
    }
}

<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;

class ExamController extends Controller
{
    public function index()
    {
        return view ('pages.exam.index');
    }
}

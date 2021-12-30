<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;

class RecordController extends Controller
{
    public function index()
    {
        return view ('pages.record.index');
    }
}

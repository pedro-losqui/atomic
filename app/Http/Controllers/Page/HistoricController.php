<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoricController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'checksinglesession']);
    }

    public function index()
    {
        return view ('pages.historic.index');
    }
}

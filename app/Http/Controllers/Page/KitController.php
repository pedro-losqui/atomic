<?php

namespace App\Http\Controllers\Page;

use App\Models\Record;
use App\Http\Controllers\Controller;

class KitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $employee = Record::findOrFail($id);
        return view ('kits.index', compact('employee'));
    }

    public function kit()
    {
        $employee = Record::findOrFail('177');
        return view ('kits.kit', compact('employee'));
    }
}

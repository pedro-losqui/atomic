<?php

namespace App\Http\Controllers\Page;

use App\Models\Record;
use App\Http\Controllers\Controller;

class KitController extends Controller
{
    public function index($id)
    {
        $employee = Record::findOrFail($id);
        return view ('kits.index', compact('employee'));

    }
}

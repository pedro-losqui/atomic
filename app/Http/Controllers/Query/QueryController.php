<?php

namespace App\Http\Controllers\Query;

use App\Http\Controllers\Controller;
use App\Repository\SoapRepository;

class QueryController extends Controller
{
    public function saveOne(SoapRepository $soap)
    {
        $soap->getRecords(1);
    }

    public function saveZero(SoapRepository $soap)
    {
        $soap->getRecords(0);
    }
}

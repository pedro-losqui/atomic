<?php

namespace App\Http\Controllers\Query;

use App\Http\Controllers\Controller;
use App\Repository\SoapRepository;

class QueryController extends Controller
{
    public function saveOne(SoapRepository $soap)
    {
        $soap->getOne();
    }

    public function saveZero(SoapRepository $soap)
    {
        $soap->getZero();
    }

    public function saveSix(SoapRepository $soap)
    {
        $soap->getSix();
    }
}

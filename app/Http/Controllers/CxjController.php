<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CxjController extends Controller
{
    public function nicaragua()
    {
    	return view('cxj/nicaragua');
    }

    public function index()
    {
    	return view('cxj/index');
    }

    public function indexCovid()
    {
    	return view('cxj/indexCovid');
    }
}

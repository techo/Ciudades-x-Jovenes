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
        $url = "http://spreadsheets.google.com/feeds/cells/1RE2tbZLKCyTLolcmB-XxPY7TA9jGXPSb537bsX9bkwg/1/public/full?alt=json";

        $json = json_decode(file_get_contents($url), true);

        // dd($json['feed']['entry']);
        $rows = $json['feed']['entry'];

        $desabastecimiento['agua'] = $rows[1]['content']['$t'];
        $desabastecimiento['alimento'] = $rows[2]['content']['$t'];
        $desabastecimiento['limpieza'] =  $rows[3]['content']['$t'];
        $desabastecimiento['primera'] =  $rows[4]['content']['$t'];
        $desabastecimiento['familias'] =  $rows[5]['content']['$t'];
        
    	return view('cxj/indexCovid', compact('desabastecimiento'));
    }
}

<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Ocorrencia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $response['desaparecidas'] = Ocorrencia::limit(10)->get();
        return view('site.index', $response);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

class Controll extends Controller
{
    public function index(Request $request)
    {
        return view('index', ['txt' => '建物です']);
    }
    public function post($room = "room")
    { 
        return view('index', ['txt' => "部屋番号は".$room."です"]);
    }
    
        public function verror()
    {
        return view('verror');
    }
}

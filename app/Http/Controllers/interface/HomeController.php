<?php

namespace App\Http\Controllers\interface;
use App\Models\Portfolio;
use App\Models\Message;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $portfolios=Portfolio::get();
        return view('welcome',compact('portfolios'));
    }
    

}

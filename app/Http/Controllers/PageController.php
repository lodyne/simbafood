<?php

namespace App\Http\Controllers;

use App\Models\events;
use App\Models\gallary;
use Illuminate\Http\Request;

class PageController extends Controller
{


    public function home(){
        $gallary = gallary::orderBy('created_at','desc')->paginate(8);
        $events= events::All();
        return view('home',compact('gallary','events'));
    }
}

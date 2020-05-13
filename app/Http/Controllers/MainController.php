<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    
    
    public function index(){
        
        
        $title = 'Portfolio';
        return view('pages.main')->with('title', $title);
    }
    
    
}

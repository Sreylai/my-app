<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function addPost(){


        return view('add-post');
    }
    public function savePost(){
        
    }
}

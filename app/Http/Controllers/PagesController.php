<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;

class PagesController extends Controller
{

    public function index(){
        return view('index');
    }

    public function studio(){
        return view('pages.studio');
    }

    public function contact(){
        return view('pages.contact');
    }

}

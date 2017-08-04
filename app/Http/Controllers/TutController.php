<?php

namespace App\Http\Controllers;
use App\Tut;
use Illuminate\Http\Request;

class TutController extends Controller
{

    public function index() {
        $tutorials = Tut::paginate(10);
        return view('tutorials')->with('tutorials', $tutorials);
    }

}

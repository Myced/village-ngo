<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProblemsController extends Controller
{
    public function index()
    {
        return view('problems');
    }
}

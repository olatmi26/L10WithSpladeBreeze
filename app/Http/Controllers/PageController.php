<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        return view('landing-page');
    }

    public function checkLogin()
    {
        if (Auth::check()) {
            return response()->json(['success' => true], 200);
        } else {
            return response()->json(['success' => false], 419);
        }
    }
}
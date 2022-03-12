<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // ---------------- [ Load View ] ----------------
    public function locationAutoComplete(Request $request) {

    return view("auto-complete");

}
}

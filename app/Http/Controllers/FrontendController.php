<?php

namespace App\Http\Controllers;

use App\Announcements;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $announcements = Announcements::all()->take(5);

        return view('home.home')->with( compact('announcements'));
    }
}

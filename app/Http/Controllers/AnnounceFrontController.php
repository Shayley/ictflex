<?php

namespace App\Http\Controllers;

use App\Announcements;
use Illuminate\Http\Request;

class AnnounceFrontController extends Controller
{
    public function index()
    {
        $announcements = Announcements::all()->take(5);

        return view('pages.announcements.announce')->with( compact('announcements'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Announcements;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $announcements = Announcements::all()->take(10);
        $users = User::all();

        return view('home')->with( compact('announcements', 'users'));
    }

    public function postAnnouncement(Request $request){

        $announcement = new Announcement;
        $announcement->text = $request->text;
        $announcement->active = $request->active_status;
        $announcement->save();

        return back()->with('status', 'Announcement Posted Success');
    }
}

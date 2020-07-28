<?php

namespace App\Http\Controllers;

use App\Announcements;
use Illuminate\Http\Request;

class AnnounceController extends Controller
{
    public function index(){

        $announcements = Announcements::all();

        return view('announcements.index',compact('announcements'));
    }

    public function create(){
        return view('announcements.create');
    }

    public function storeAnnouncement(){

        $announcements = new Announcements();

        $announcements->title = request('title');
        $announcements->content = request('content');

        $announcements->save();

        return redirect('/home/mededelingen');

    }

}

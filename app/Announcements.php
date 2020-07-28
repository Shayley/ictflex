<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Announcements extends Model
{
    protected $table = 'announcements';

    protected $fillable = ['title', 'content'];

    protected $dates = ['created_at', 'updated_at'];

    public function store(Request $request)
    {
        Announcements::create($request->all());
    }
}

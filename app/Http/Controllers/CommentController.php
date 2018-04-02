<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function store(Request $req)
    {
        $this->validate($req, [
            'nickname' => 'required',
            'email' => 'required|email',
            'content' => 'required'
        ]);

        Comment::create($req->all());

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;
use App\Post as Posts;
use Auth;
use Illuminate\Http\Request;

class Post extends Controller
{
    public function addPost(Request $request)
    {
        $result = Posts::create([
            'name' => $request->name,
            'content' => $request->content,
            'username' => $request->username
        ]);
        //Auth::user()->attachPermissions(['create-post','update-post','destroy-post']);
        if($result)
            return redirect()->back();
    }
    public function showPost($id)
    {
        $result = Posts::where('username',$id)->get();
        return view('showPost',compact('result'));
    }
    public function sharePer(Request $request)
    {
        # code...
    }
}

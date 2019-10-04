<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddleLaratrust extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:super_admin'])->only(['testMiddle']);
        $this->middleware(['role:user'])->only(['redirectToPostList']);
    }
    public function redirectToPostList()
    {
        return "hoang123";
    }
    public function testMiddle()
    {
        return "this is apply middleware test";
    }
}

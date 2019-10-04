<?php

namespace App\Http\Controllers;
use App\Category;
use Auth;
use App\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::where('user_id',Auth::user()->id)->get();
        return view('category.index',compact('category'));
    }
    public function store(Request $request)
    {
        $category= new Category();
        $category->title = $request->get('title');
        $category->content  = $request->get('content');
        $category->user()->associate(Auth::user());
        $category->save();
        return redirect()->back();
    }
    public function edit(Category $category)
    {
        	return view('category.show',compact('category'));

    }
    public function update(Request $request, Category $category)
    {
    	$result = $request->except('title');
        $category->update($result);
        return redirect()->route('category.index');
    }
    public function sharePer(Category $category)
    {
    	$user = User::where('id',3)->first();
    	$user->attachPermission('destroy-post',$category);
    }
    public function formAdd()
    {
            return view('category.add');
    }
    public function checkPer($id)
    {
        $category = Category::findOrFail($id);
        //$user = User::findOrFail(Auth::user()->id);
        if(Auth::user()->owns($category))
            return "success";
        else
            return "false";
    }
}

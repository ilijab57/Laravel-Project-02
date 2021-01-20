<?php

namespace App\Http\Controllers;

use App\User;
use App\Banner;
use App\Lesson;
use App\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $categoryName = "дигитални вештини";
        $userCount = User::where('role_id',2)->count();
        return view('home',compact('categories','categoryName','userCount'));
        

    }

    public function lessons($id) {
        
        $categories = Category::all();
        $category = Category::where('id',$id)->first();
        $lessons = Lesson::where('category_id',$id)->orderBy('created_at')->get();
        $banners = Banner::all();
        $categoryName = $category->category;
        $userCount = User::where('category_id',$id)->count();
        return view('lessons',compact('lessons','categories','banners','categoryName','userCount','category'));

    }

    public function register(Request $request) {

        $validatedData = $request->validate([
            'email' => 'required'
        ]);

        $user = new User();
        $user->email = $validatedData['email'];
        // if(!$request->has('category')) {
        //     $user->category_id = null;
        // }
        $user->category_id = $request['category'];
        $user->save();

        return redirect()->back();

        
    }
}

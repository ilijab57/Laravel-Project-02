<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;
use App\Lesson;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function adminLoginForm() {

        return view('admin.login');

    }


    public function index() {

        $totalUsers = User::count();
        $totalCategories = Category::count();
        $totalLessons = Lesson::count();
        return view('admin.home',compact('totalUsers','totalCategories',
                    'totalLessons'));
        
    }

    public function usersList() {

        $users = User::where('role_id',2)->paginate(12);
        return view('admin.usersList',compact('users'));

    }


}

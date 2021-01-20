<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use App\Category;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::paginate(10);
        return view('admin.lessons.index',compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.lessons.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:150',
            'description' => 'required',
            'category' => 'required',
        ]);

        $lesson = new Lesson();
        $lesson->title = $validatedData['title'];
        $lesson->description = $validatedData['description'];
        $lesson->category_id = $validatedData['category'];
        $lesson->save();

        return redirect('admin/lessons');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lesson = Lesson::findOrFail($id);
        $categories = Category::all();
        return view('admin.lessons.view',compact('lesson','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lesson = Lesson::findOrFail($id);
        $categories = Category::all();
        return view('admin.lessons.edit',compact('lesson','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:150',
            'description' => 'required',
            'category' => 'required',
        ]);

        $lesson = Lesson::find($id);
        $lesson->title = $validatedData['title'];
        $lesson->description = $validatedData['description'];
        $lesson->category_id = $validatedData['category'];
        $lesson->save();

        return redirect('admin/lessons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lesson::destroy($id);
        return redirect()->back();
    }
}

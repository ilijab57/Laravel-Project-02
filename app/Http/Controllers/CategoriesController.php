<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
                'name' => 'required|max:15',
                'description' => 'required|max:400',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            ]);
    
            // $image = $request->file('image');
            // $imageName = time().'.'.$image->getClientOriginalExtension();
            // $destinationPath = public_path('/images');
            // $image->move($destinationPath, $imageName);

            $category = new Category();
            if ($request->hasfile('image')) {
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = storage_path('app/public/images/') . $filename;
        
                Image::make($image)->save($location);
        
                $category->category = $validatedData['name'];
                $category->image_url = $filename;
                $category->description = $validatedData['description'];
                $category->save();
              }

            
            // $category->category = $validatedData['name'];
            // $category->image_url = $imageName;
            // $category->description = $validatedData['description'];
            // $category->save();
            return redirect('admin/categories');
    
    
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('admin.categories.view',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit',compact('category'));
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

        $category = Category::find($id);

        $validatedData = $request->validate([
            'name' => 'required|max:15',
            'description' => 'required|max:400',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        if ($request->hasfile('image')) {
            Storage::disk('public')->delete("images/$category->image_url");
    
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = storage_path('app/public/images/') . $filename;
    
            Image::make($image)->save($location);
    
            $category->category = $validatedData['name'];
            $category->image_url = $filename;
            $category->description = $validatedData['description'];
            $category->save();

          }

        return redirect('admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        Storage::disk('public')->delete("images/$category->image_url");
        Category::destroy($id);

        return redirect()->back();

    }
}

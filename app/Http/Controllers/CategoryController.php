<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::inRandomOrder()->get();
        return view('admin.categories.category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.category-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate resource information
        $validated = $request->validate([
            'name' => ['required', 'min:3', 'max:30'],
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg','max:50000'],
        ]);


        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            // save the file int a variable
            $file = $request->file('image');

            // Assign a new name to the image img-name-1212343215.png
            $newName = "img-". Str::slug($validated['name']) . "-" . Str::slug(now())  . "." . $file->guessClientExtension();
            // Save the image to the public/images/$newName
            $path = $file->storeAs('images', $newName, 'public');

            // If the image file is not successfully saved
            if(!$path){
                return back()->with('error','something went wrong, please try again later!');
            }
            else{

                $category = new category;
                $category->name = $validated['name'];
                $category->image = $newName;
                $category->save();


                return redirect()->back()->with('success','category added successful!');
            }
        }


    }


    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view("admin.categories.category-edit", compact("category"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {

        // return $category;
          // Validate resource information
        $validated = $request->validate([
            'name' => ['required', 'min:3', 'max:30'],
        ]);


        // If the request contain a new image
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

          // Validate resource information
            $validated = $request->validate([
                'name' => ['required', 'min:3', 'max:30'],
                'image' => ['required', 'image', 'mimes:png,jpg,jpeg','max:50000'],
            ]);

            // save the file int a variable
            $file = $request->file('image');

            // Assign a new name to the image img-name-1212343215.png
            $newName = "img-". Str::slug($validated['name']) . "-" . Str::slug(now())  . "." . $file->guessClientExtension();
            // Save the image to the public/images/$newName
            $path = $file->storeAs('images', $newName, 'public');

            // If the image file is not successfully saved
            if(!$path){
                return back()->with('error','something went wrong, please try again later!');
            }

        }

        $category->name = $validated['name'];
        $category->image = $newName ?? $category->image;
        $category->save();
        return redirect()->back()->with('success','category updated successful!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $deleted = $category->delete();
        // comming back.....
        // to unlink the resource image

        if(!$deleted){
            return back()->with('error','something went wrong, please try again later!');
        }
        else{

            return redirect()->back()->with('success','category deleted successful!');
        }

    }

    /**
     * Activate the specified resource.
     */
    public function activate(Category $category)
    {
        $category->status = 1;
        $category->save();
        return redirect()->back()->with('success','category activated successful!');

    }

    /**
     * Deactivate the specified resource.
     */
    public function deactivate(Category $category)
    {
        $category->status = 0;
        $category->save();
        return redirect()->back()->with('success','category deactivated successful!');

    }
}

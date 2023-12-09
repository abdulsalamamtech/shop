<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sub_categories = SubCategory::all();
        return view('admin.categories.sub-category', compact('sub_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.categories.sub-category-add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate resource information
        $validated = $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'category_id' => ['required', 'numeric'],
        ],
        [
            'category_id' => 'select a parent category'
        ]);

        $sub_category = new SubCategory;
        $sub_category->name = $validated['name'];
        $sub_category->category_id = $validated['category_id'];
        $saved = $sub_category->save();

        // If the sub category is not successfully saved
        if(!$saved){
            return back()->with('error','something went wrong, please try again later!');
        }
        else{
            return redirect()->back()->with('success','sub category added successful!');
        }

    }


    /**
     * Display the specified resource.
     */
    public function show(SubCategory $sub_category)
    {
        return $sub_category;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $sub_category)
    {
        $categories = Category::all();
        return view("admin.categories.sub-category-edit", compact("categories", "sub_category"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $sub_category)
    {

        // Validate resource information
        $validated = $request->validate([
            'name' => ['required', 'min:3', 'max:30'],
            'category_id' => ['numeric'],
        ]);

        $sub_category->name = $validated['name'];
        $sub_category->category_id = $request['category_id']?? $validated['category_id'];
        $saved = $sub_category->save();

        // If the sub category is not successfully saved
        if(!$saved){
            return back()->with('error','something went wrong, please try again later!');
        }
        else{
            return redirect()->back()->with('success','sub category updated successful!');
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subcategory)
    {
        $deleted = $subcategory->delete();

        if(!$deleted){
            return back()->with('error','something went wrong, please try again later!');
        }
        else{

            return redirect()->back()->with('success','sub category deleted successful!');
        }

    }
}

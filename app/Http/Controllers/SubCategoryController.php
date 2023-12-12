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
    public function show(SubCategory $SubCategory)
    {
        return $SubCategory;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $SubCategory)
    {
        $categories = Category::all();
        return view("admin.categories.sub-category-edit", compact("categories", "sub_category"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $SubCategory)
    {

        // Validate resource information
        $validated = $request->validate([
            'name' => ['required', 'min:3', 'max:30'],
            'category_id' => ['numeric'],
        ]);

        $SubCategory->name = $validated['name'];
        $SubCategory->category_id = $request['category_id']?? $validated['category_id'];
        $saved = $SubCategory->save();

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
    public function destroy(SubCategory $SubCategory)
    {
        $deleted = $SubCategory->delete();

        if(!$deleted){
            return back()->with('error','something went wrong, please try again later!');
        }
        else{

            return redirect()->back()->with('success','sub category deleted successful!');
        }

    }
    
    /**
     * Activate the specified resource.
     */
    public function activate(SubCategory $SubCategory)
    {
        $SubCategory->status = 1;
        $SubCategory->save();
        return redirect()->back()->with('success','sub category activated successful!');

    }

    /**
     * Deactivate the specified resource.
     */
    public function deactivate(SubCategory $SubCategory)
    {
        $SubCategory->status = 0;
        $SubCategory->save();
        return redirect()->back()->with('success','sub category deactivated successful!');

    }
}

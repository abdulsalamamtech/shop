<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::inRandomOrder()->get();
        return view('admin.brands.brand', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brands.brand-add');
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
            else{

                $brand = new Brand;
                $brand->name = $validated['name'];
                $brand->image = $newName;
                $brand->save();


                return redirect()->back()->with('success','brand added successful!');
            }
        }


    }


    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return $brand;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view("admin.brands.brand-edit", compact("brand"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
          // Validate resource information
        $validated = $request->validate([
            'name' => ['required', 'min:3', 'max:30'],
        ]);


        // If the request contain a new image
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $validated = $request->validate([
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

        $brand->name = $validated['name'];
        $brand->image = $newName ?? $brand->image;
        $brand->save();
        return redirect()->back()->with('success','brand updated successful!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $deleted = $brand->delete();
        // comming back.....
        // to unlink the resource image

        if(!$deleted){
            return back()->with('error','something went wrong, please try again later!');
        }
        else{

            return redirect()->back()->with('success','brand deleted successful!');
        }

    }

    /**
     * Activate the specified resource.
     */
    public function activate(Brand $brand)
    {
        $brand->status = 1;
        $brand->save();
        return redirect()->back()->with('success','brand activated successful!');

    }

    /**
     * Deactivate the specified resource.
     */
    public function deactivate(Brand $brand)
    {
        $brand->status = 0;
        $brand->save();
        return redirect()->back()->with('success','brand deactivated successful!');

    }
}

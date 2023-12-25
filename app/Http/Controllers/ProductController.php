<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::inRandomOrder()->get();
        return view('admin.products.product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.product-add');
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
            'price' => ['required', 'min:2', 'max:10'],
            'tags'  => ['required', 'max:30'],
            'quantity'  => ['required', 'min:2', 'max:10'],
            'short_description'  => ['required', 'min:2', 'max:10'],
            'description'  => ['required', 'max:255'],
            'information'  => ['required', 'max:255'],
            'product_image'  => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:500000000'],
            'colors'  => ['required'],
            'sizes'  => ['required'],
            'brand_id'  => ['required', 'min:1'],
            'sub_category_id' => ['required', 'min:1'],
        ], [
            'sub_category_id.required' => 'sub category is required',
            'product_image.required' => 'product images are required',
            'product_image.mimes' => 'invalid product images format required(png,jpg,jpeg)',
            'product_image.max' => 'product images can not be above 50MB',
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

                $product = new Product;
                $product->name = $validated['name'];
                $product->image = $newName;
                $product->save();


                return redirect()->back()->with('success','product added successful!');
            }
        }


    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view("admin.products.product-edit", compact("product"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        // return $product;
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

        $product->name = $validated['name'];
        $product->image = $newName ?? $product->image;
        $product->save();
        return redirect()->back()->with('success','product updated successful!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $deleted = $product->delete();
        // coming back.....
        // to unlink the resource image

        if(!$deleted){
            return back()->with('error','something went wrong, please try again later!');
        }
        else{

            return redirect()->back()->with('success','product deleted successful!');
        }

    }

    /**
     * Activate the specified resource.
     */
    public function activate(Product $product)
    {
        $product->status = 1;
        $product->save();
        return redirect()->back()->with('success','product activated successful!');

    }

    /**
     * Deactivate the specified resource.
     */
    public function deactivate(Product $product)
    {
        $product->status = 0;
        $product->save();
        return redirect()->back()->with('success','product deactivated successful!');

    }
}

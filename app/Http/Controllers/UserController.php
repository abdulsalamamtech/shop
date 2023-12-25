<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->paginate(10);
        $customers = $users;
        if(request()->is('admin/customers')){
            return view("admin.customers.customer", compact("customers"));
        }
        if(request()->is('admin/customers/grid')){
            return view("admin.customers.customer-grid", compact("customers"));
        }
        // return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return $user;
        // return view('users', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return $user;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // Validate user information
        $validated = $request->validate([
            'name' => ['required', 'min:3', 'max:30'],
        ]);

        // Update user
        $user->name = $validated['name'];
        $user = $user->update();


        // Check if the user is updated successfully
        if(!$user){
            return back()->with('error','something went wrong, please try again later!');
        }

        // Check if the user is comming from edit page
        if ($request->has('edit')) {
            return redirect()->back()->with('success','update successful!');
        }

        return redirect()->route('home')->with('success','update successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        return $user->delete();
    }


    /**
     * Activate the specified resource.
     */
    public function activate(User $customer)
    {
        $customer->status = 1;
        $customer->save();
        return redirect()->back()->with('success','customer activated successful!');

    }

    /**
     * Deactivate the specified resource.
     */
    public function deactivate(User $customer)
    {
        $customer->status = 0;
        $customer->save();
        return redirect()->back()->with('success','customer deactivated successful!');

    }
}

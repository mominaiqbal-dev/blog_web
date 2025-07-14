<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        // $categories = User::all();
        $categories = User::get();
        // $users = User::limit(10)->get();
        // $users = User::pagenate(10);
        $abc = 'hello';


        // return view('admin.users.index' ,data:['users' => $users , 'abc' => $abc]);
        return view('admin.users.index', compact('users', 'abc'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();

        return view('admin.users.create', compact('users'));
    }


    public function abc()
    {
        return view('admin.users.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Validate the request data
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'slug' => 'required|string|max:255|unique:users,slug',
        //     'description' => 'nullable|string',
        //     'parent_id' => 'nullable|exists:users,id',
        //     'status' => 'required|in:active,inactive',
        // ]);
        // Create a new User
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $User)
    {
        return view('admin.users.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        // dd('welcome edit');
        $User = User::findOrFail($id);

        $users = User::all();

        return view('admin.users.edit', compact('user', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        // dd($request->all());
        // return redirect()->route('admin.categories.index')->with('error', 'User not found.');

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('admin.categories.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // dd('welcome delte');

        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.categories.index')->with('success', 'User delated successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Friend::query();

        if ($request->search) {
            $query->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%');
        }

        return response()->json([
            "message" => "Friends fetched successfully",
            "data" => $query->paginate(5)
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'name'=>'required',
            'email' =>'required|email|unique:friends',
            'phone' =>'nullable'
        ]);
        
        $friend = Friend::create($validated);
        return response()->json($friend, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return response()->json(Friend::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Friend $friend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $friend = Friend::findOrFail($id);
        $friend->update($request->all());

        return response()->json($friend);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $friend = Friend::findOrFail($id);
        $friend->delete();

        return response()->json(['message' => 'Friend deleted']);
    }
}

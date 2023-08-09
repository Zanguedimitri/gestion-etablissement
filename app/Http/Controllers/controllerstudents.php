<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class controllerstudents extends Controller{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=student::all();
        return view('index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData=$request->validate([
            'name'=>'required|max:255',
            'email'=>'required|max:255',
            'phone'=>'required',
            'section'=>'required',
            'image'=>'required|image|mimes:jpg,jpeg,svg,png,gif', 
        ]);

        $image=$request->file('image');
        $imagepath='image/';
        $imgname=date('YmdHis').'.'. $image->getClientOriginalExtension();
        $image->move( $imagepath,$imgname);
        $validatedData['image']=$imgname;
        student::create($validatedData);
        
        return redirect('/students');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

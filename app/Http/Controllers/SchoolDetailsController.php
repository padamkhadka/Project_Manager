<?php

namespace App\Http\Controllers;

use App\Models\SchoolDetails;
use Illuminate\Http\Request;

class SchoolDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schools = SchoolDetails::orderBy('id','desc')->get();
        return view('layouts.AddSchool',compact('schools'));
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
        //
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
        $school = SchoolDetails::find($id);
        $school->school_name = $request->school_name;
        $school->contact_number = $request->contact_number;
        $school->Address = $request->Address;
        $school->url = $request->url;
        $school->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $school = SchoolDetails::find($id);
        $school->delete();
        return redirect()->back();
    }
}

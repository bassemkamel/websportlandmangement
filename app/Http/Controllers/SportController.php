<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sports=Sport::all();
        
        return view("backoffice.sports.index",compact('sports'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view("backoffice.sports.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate(['nom_sport'=>'required|unique:sports']);
        Sport::create($request->all());
        return redirect()->route('sports.index')
        ->with('success','Sport has been added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sport $sport)
    {
        return view("backoffice.sports.edit",compact("sport"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sport $sport)
    {
        //dd($sport);
        $request->validate(['nom_sport'=>'required|unique:sports']);

        $sport->update($request->all());
        return redirect()->route('sports.index')
        ->with('success','Sport has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sport $sport)
    {
        $sport->etat="disable";
        $sport->save();
        return redirect()->route('sports.index')->with('success','Sport has been deleted successfully');
    }
}

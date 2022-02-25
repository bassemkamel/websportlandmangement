<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Sport;
use Illuminate\Http\Request;

class LocationController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $locations=Location::all();
        //dd($locations);
        return view("backoffice.locations.index",compact('locations'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $sports=Sport::all();
        return view("backoffice.locations.create",compact('sports'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate(['nom_location'=>'required|unique:locations']);
        $request->validate(['fees_location'=>'required|numeric|min:0']);
        $request->validate(['sport_id'=>'required']);
        $request->validate(['country_location'=>'required']);
        $request->validate(['ville_location'=>'required']);

        Location::create($request->all());
        return redirect()->route('locations.index')
        ->with('success','Location has been added successfully.');

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
    public function edit(Location $location)
    {


        
        $locations=Location::all();
        $sports=Sport::all();

        //dd($locations);
        return view("backoffice.locations.edit",compact("location","sports"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        //dd($location);
        $request->validate(['nom_location'=>'required']);
        $request->validate(['fees_location'=>'required']);
        $request->validate(['sport_id'=>'required']);
        $request->validate(['country_location'=>'required']);
        $request->validate(['ville_location'=>'required']);


        $location->update($request->all());
        return redirect()->route('locations.index')
        ->with('success','Location has been updated successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {

        $location->etat="disable";
        $location->save();
        return redirect()->route('locations.index')->with('success','Location has been deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seance;
use App\Models\User;
use App\Models\Program;
use Illuminate\support\Facades\Redirect;
class SeanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seances=Seance::all();
        // dd($seances[0]->user);
        return view("backoffice.seances.index",compact('seances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $programs=Program::all();

        return view("backoffice.seances.create",compact('programs'));

    
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd($input);
        //  dd($input);

        $request->validate(['date_seance_debut'=>'required:seances']);
        $request->validate(['date_seance_fin'=>'required:seances']);
        $request->validate(['debut_seance'=>'required:seances']);
        $request->validate(['fin_seance'=>'required:seances']);
        $request->validate(['program_id'=>'required:seances']);

        Seance::create($request->all());
        $id=$request->program_id;
        return redirect()->route('getbyid',$id)->with('success','Session has been added successfully');
    
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seances=Seance::where('program_id','=',$id)->get();
        // dd($seances);

        return view("backoffice.seances.index",compact('seances'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Seance $seance)    {
        $programs=Program::all();
        return view("backoffice.seances.edit",compact("seance","programs"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seance  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Seance $seance)
    {
        $request->validate(['date_seance_debut'=>'required:seances']);
        $request->validate(['date_seance_fin'=>'required:seances']);
        $request->validate(['debut_seance'=>'required:seances']);
        $request->validate(['fin_seance'=>'required:seances']);
        $request->validate(['program_id'=>'required:seances']);
        $seance->update($request->all());
        $id=$seance->program_id;
        return redirect()->route('getbyid',$id)->with('success','Session has been updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seance $seance)
    {
        $id=$seance->program_id;
        $seance->etat="disable";
        $seance->save();
        return redirect()->route('getbyid',$id)->with('success','Session has been added successfully');
    }







    public function getbyid($id)
    {
        $seances=Seance::where('program_id','=',$id)->get();

        return view("backoffice.seances.index",compact('seances'));
    }




  


}
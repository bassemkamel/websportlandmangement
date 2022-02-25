<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Models\Seance;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seances=Seance::all();
        $seanceslist = collect();
        // dd($seances);
        foreach ($seances as $seance){
            $seance->title=$seance->program->nom_program;  
            $seance->start= $seance->date_seance_debut."T".$seance->debut_seance;  
            $seance->end= $seance->date_seance_fin."T".$seance->fin_seance;
            $seanceslist->push($seance);
        }
        // dd($seanceslist);
        return view("backoffice.calendars.index",compact('seanceslist'));

    } 
    public function getcalendarbyprogram($id)
    {
        $seances=Seance::where("program_id",$id)->get();
        $seanceslist = collect();
        // dd($seances);
        foreach ($seances as $seance){
            // dd($seance->program->nom_program);
            $seance->title=$seance->program->nom_program;  
            $seance->start= $seance->date_seance_debut."T".$seance->debut_seance;  
            $seance->end= $seance->date_seance_fin."T".$seance->fin_seance;
            $seanceslist->push($seance);
        }
        // dd($seanceslist);
        return view("backoffice.calendars.index",compact('seanceslist'));
    }
    

    public function getcalendarbytrainer($id)
    {

        $seances = Seance::join('programs', 'programs.id', '=', 'seances.program_id')
        ->where('programs.user_id', $id)
        ->get();

        $seanceslist = collect();
        // dd($users);
        foreach ($seances as $seance){
            $seance->title=$seance->program->nom_program;  
            $seance->start= $seance->date_seance_debut."T".$seance->debut_seance;  
            $seance->end= $seance->date_seance_fin."T".$seance->fin_seance;
            $seanceslist->push($seance);
        }
        // dd($seanceslist);
        return view("backoffice.calendars.index",compact('seanceslist'));
    }

    public function getcalendarbyclient($id)
    {

        $seances = Seance::join('programs', 'programs.id', '=', 'seances.program_id')
        ->where('programs.user_id', $id)
        ->get();

        $seanceslist = collect();
        // dd($users);
        foreach ($seances as $seance){
            $seance->title=$seance->program->nom_program;  
            $seance->start= $seance->date_seance_debut."T".$seance->debut_seance;  
            $seance->end= $seance->date_seance_fin."T".$seance->fin_seance;
            $seanceslist->push($seance);
        }
        // dd($seanceslist);
        return view("backoffice.calendars.index",compact('seanceslist'));
    }



    public function getcalendarbylocation($id)
    {
        $seances = Seance::join('programs', 'programs.id', '=', 'seances.program_id')
        ->where('programs.location_id', $id)
        ->get();
        // $seances = DB::select("SELECT * from seances,programs,locations  WHERE seances.program_id = programs.id and programs.location_id=locations.id and  locations.id=$id");
        $seanceslist = collect();
        // dd($seances);
        foreach ($seances as $seance){
            $seance->title=$seance->program->nom_program;  
            $seance->start= $seance->date_seance_debut."T".$seance->debut_seance;  
            $seance->end= $seance->date_seance_fin."T".$seance->fin_seance;
            $seanceslist->push($seance);
        }
        // dd($seanceslist);
        return view("backoffice.calendars.index",compact('seanceslist'));
    }



    
    public function getcalendarbysport($id)
    {
        $seances = Seance::join('programs', 'programs.id', '=', 'seances.program_id')
        ->where('programs.sport_id', $id)
        ->get();
        // $seances = DB::select("SELECT * from seances,programs,locations  WHERE seances.program_id = programs.id and programs.location_id=locations.id and  locations.id=$id");
        $seanceslist = collect();
        // dd($seances);
        foreach ($seances as $seance){
            $seance->title=$seance->program->nom_program;  
            $seance->start= $seance->date_seance_debut."T".$seance->debut_seance;  
            $seance->end= $seance->date_seance_fin."T".$seance->fin_seance;
            $seanceslist->push($seance);
        }
        // dd($seanceslist);
        return view("backoffice.calendars.index",compact('seanceslist'));
    }
    
    


    public function getcalendarbycityorcountrys()
    {
        $seances=Seance::all();
        $seanceslist = collect();
        // dd($seances);
        foreach ($seances as $seance){
            $seance->title=$seance->program->nom_program;  
            $seance->start= $seance->date_seance_debut."T".$seance->debut_seance;  
            $seance->end= $seance->date_seance_fin."T".$seance->fin_seance;
            $seanceslist->push($seance);
        }
        // dd($seanceslist);
        return view("backoffice.calendars.indexcalendarbycityorcountry",compact('seanceslist'));
    }

    public function getcalendarbycityorcountry(Request $request)
    {
        $seances = Seance::join('programs', 'programs.id', '=', 'seances.program_id')
        ->join('locations', 'locations.id', '=', 'programs.location_id')
        ->where('locations.country_location','like', '%'.$request->nom.'%')
        ->orWhere('locations.ville_location','like',  '%'.$request->nom.'%')
        ->get();
        // $seances = DB::select("SELECT * from seances,programs,locations  WHERE seances.program_id = programs.id and programs.location_id=locations.id and  locations.id=$id");
        $seanceslist = collect();
        // dd($seances);
        foreach ($seances as $seance){
            $seance->title=$seance->program->nom_program;  
            $seance->start= $seance->date_seance_debut."T".$seance->debut_seance;  
            $seance->end= $seance->date_seance_fin."T".$seance->fin_seance;
            $seanceslist->push($seance);
        }
        // dd($seanceslist);
        return view("backoffice.calendars.indexcalendarbycityorcountry",compact('seanceslist'));
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function show(Calendar $calendar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function edit(Calendar $calendar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calendar $calendar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calendar $calendar)
    {
        //
    }
}

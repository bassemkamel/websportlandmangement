<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Sport;
use App\Models\Location;
use App\Models\User;
use App\Models\Seance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs=Program::all();
        
        return view("backoffice.programs.index",compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sports=Sport::all();
        $locations=Location::all();
        $users=User::all();

        return view("backoffice.programs.create",compact('sports','locations','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['nom_program'=>'required:programs']);
        $request->validate(['prix_seance'=>'required:programs']);
        $request->validate(['program_date_debut'=>'required:programs']);
        $request->validate(['program_date_fin'=>'required:programs']);
        $request->validate(['sport_id'=>'required:programs']);
        $request->validate(['location_id'=>'required:programs']);
        $request->validate(['user_id'=>'required:programs']);

        $date_array = array();
        $debut_array = array();
        $fin_array = array();
        $program=new Program();
        if($request->Monday)
        {
        $program->monday = 1;
        $startDate = strtotime($request->program_date_debut);
        $endDate = strtotime($request->program_date_fin);
        $days=array('1'=>'Monday','2' => 'Tuesday','3' => 'Wednesday','4'=>'Thursday','5' =>'Friday','6' => 'Saturday','7'=>'Sunday');
        for($i = strtotime($days["".$request->Monday], $startDate); $i <= $endDate; $i = strtotime('+1 week', $i))
        {
        $date_array[]=date('Y-m-d',$i);
        $debut_array[]=$request->monday_debut_seance;
        $fin_array[]=$request->monday_fin_seance;
        
        }
        }
        
        if($request->Tuesday)
        {
        $program->tuesday = 1;
        // dd($program->tuesday);
        $startDate = strtotime($request->program_date_debut);
        $endDate = strtotime($request->program_date_fin);
        $days=array('1'=>'Monday','2' => 'Tuesday','3' => 'Wednesday','4'=>'Thursday','5' =>'Friday','6' => 'Saturday','7'=>'Sunday');
        for($i = strtotime($days["".$request->Tuesday], $startDate); $i <= $endDate; $i = strtotime('+1 week', $i))
        {
            $date_array[]=date('Y-m-d',$i);
            $debut_array[]=$request->tuesday_debut_seance;
            $fin_array[]=$request->tuesday_fin_seance;
            
        }
        }

        if($request->Wednesday)
        {
        $program->wednesday = 1;
        $startDate = strtotime($request->program_date_debut);
        $endDate = strtotime($request->program_date_fin);
        $days=array('1'=>'Monday','2' => 'Tuesday','3' => 'Wednesday','4'=>'Thursday','5' =>'Friday','6' => 'Saturday','7'=>'Sunday');
        for($i = strtotime($days["".$request->Wednesday], $startDate); $i <= $endDate; $i = strtotime('+1 week', $i))
        {
            $date_array[]=date('Y-m-d',$i);
            $debut_array[]=$request->wednesday_debut_seance;
            $fin_array[]=$request->wednesday_fin_seance;
            
        }
        }
        
        
        
        if($request->Thursday)
        {
        $program->thursday = 1;
        $startDate = strtotime($request->program_date_debut);
        $endDate = strtotime($request->program_date_fin);
        $days=array('1'=>'Monday','2' => 'Tuesday','3' => 'Wednesday','4'=>'Thursday','5' =>'Friday','6' => 'Saturday','7'=>'Sunday');
        for($i = strtotime($days["".$request->Thursday], $startDate); $i <= $endDate; $i = strtotime('+1 week', $i))
        {
            $date_array[]=date('Y-m-d',$i);
            $debut_array[]=$request->thursday_debut_seance;
            $fin_array[]=$request->thursday_fin_seance;
            
        }
        }
        
        
        
        if($request->Friday)
        {
        $program->friday = 1;
        $startDate = strtotime($request->program_date_debut);
        $endDate = strtotime($request->program_date_fin);
        $days=array('1'=>'Monday','2' => 'Tuesday','3' => 'Wednesday','4'=>'Thursday','5' =>'Friday','6' => 'Saturday','7'=>'Sunday');
        for($i = strtotime($days["".$request->Friday], $startDate); $i <= $endDate; $i = strtotime('+1 week', $i))
        {
            $date_array[]=date('Y-m-d',$i);
            $debut_array[]=$request->friday_debut_seance;
            $fin_array[]=$request->friday_fin_seance;
            
        }
        }


        if($request->Saturday)
        {
        $program->saturday = 1;
        $startDate = strtotime($request->program_date_debut);
        $endDate = strtotime($request->program_date_fin);
        $days=array('1'=>'Monday','2' => 'Tuesday','3' => 'Wednesday','4'=>'Thursday','5' =>'Friday','6' => 'Saturday','7'=>'Sunday');
        for($i = strtotime($days["".$request->Saturday], $startDate); $i <= $endDate; $i = strtotime('+1 week', $i))
        {
            $date_array[]=date('Y-m-d',$i);
            $debut_array[]=$request->saturday_debut_seance;
            $fin_array[]=$request->saturday_fin_seance;
            
        }
        }


        if($request->Sunday)
        {
        $program->sunday = 1;
        $startDate = strtotime($request->program_date_debut);
        $endDate = strtotime($request->program_date_fin);
        $days=array('1'=>'Monday','2' => 'Tuesday','3' => 'Wednesday','4'=>'Thursday','5' =>'Friday','6' => 'Saturday','7'=>'Sunday');
        for($i = strtotime($days["".$request->Sunday], $startDate); $i <= $endDate; $i = strtotime('+1 week', $i))
        {
            $date_array[]=date('Y-m-d',$i);
            $debut_array[]=$request->sunday_debut_seance;
            $fin_array[]=$request->sunday_fin_seance;
            
        }
        }





        $program->nom_program = $request->nom_program;
        $program->nombre_seance = sizeof($date_array);
        $program->prix_seance = $request->prix_seance;
        $program->program_date_debut= $request->program_date_debut;
        $program->program_date_fin= $request->program_date_fin;
        $program->sport_id= $request->sport_id;
        $program->location_id= $request->location_id;
        $program->user_id= $request->user_id;




        if($request->Monday)
        {
        $program->monday_debut_seance= $request->monday_debut_seance;
        $program->monday_fin_seance= $request->monday_fin_seance;


         }

         if($request->Tuesday)
         {
         $program->tuesday_debut_seance= $request->tuesday_debut_seance;
         $program->tuesday_fin_seance= $request->tuesday_fin_seance;






         
          }


          if($request->Wednesday)
          {
          $program->wednesday_debut_seance= $request->wednesday_debut_seance;
          $program->wednesday_fin_seance= $request->wednesday_fin_seance;
           }

           if($request->Thursday)
           {
           $program->thursday_debut_seance= $request->thursday_debut_seance;
           $program->thursday_fin_seance= $request->thursday_fin_seance;
            }

            if($request->Friday)
            {
            $program->friday_debut_seance= $request->friday_debut_seance;
            $program->friday_fin_seance= $request->friday_fin_seance;
             }

             if($request->Saturday)
             {
             $program->saturday_debut_seance= $request->saturday_debut_seance;
             $program->saturday_fin_seance= $request->saturday_fin_seance;
              }


              if($request->Sunday)
              {
              $program->sunday_debut_seance= $request->sunday_debut_seance;
              $program->sunday_fin_seance= $request->sunday_fin_seance;
               }

        $program->save();


        for ($i = 0; $i < sizeof($date_array); $i++){ 
            // dd($date_array_object)



            $seance = new Seance();
            $seance->date_seance_debut = $date_array[$i];
            $seance->date_seance_fin = $date_array[$i];
            $seance->debut_seance = $debut_array[$i];
            $seance->fin_seance = $fin_array[$i];
            $seance->program_id= $program->id;
            $seance->save();

            }



        // $program=Program::create($request->all());

 




        return redirect()->route('programs.index')
        ->with('success','Sport has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {

        $sports=Sport::all();
        $locations=Location::all();
        $users=User::all();

        return view("backoffice.programs.edit",compact('program','sports','locations','users'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        $request->validate(['nom_program'=>'required:programs']);
        $request->validate(['prix_seance'=>'required:programs']);
        $request->validate(['program_date_debut'=>'required:programs']);
        $request->validate(['program_date_fin'=>'required:programs']);
        $request->validate(['sport_id'=>'required:programs']);
        $request->validate(['location_id'=>'required:programs']);
        $request->validate(['user_id'=>'required:programs']);

        $date_array = array();
        $debut_array = array();
        $fin_array = array();
        // $program=new Program();
        DB::table('seances')->where('program_id', $program->id)->delete();
        // dd($request);
        if($request->Monday)
        {
        $program->monday = 1;
        $startDate = strtotime($request->program_date_debut);
        $endDate = strtotime($request->program_date_fin);
        $days=array('1'=>'Monday','2' => 'Tuesday','3' => 'Wednesday','4'=>'Thursday','5' =>'Friday','6' => 'Saturday','7'=>'Sunday');
        for($i = strtotime($days["".$request->Monday], $startDate); $i <= $endDate; $i = strtotime('+1 week', $i))
        {
        $date_array[]=date('Y-m-d',$i);
        $debut_array[]=$request->monday_debut_seance;
        $fin_array[]=$request->monday_fin_seance;
        
        }
        }
        else
        {
            $program->monday=0  ;
        }



        if($request->Tuesday)
        {
        $program->tuesday = 1;
        // dd($program->tuesday);
        $startDate = strtotime($request->program_date_debut);
        $endDate = strtotime($request->program_date_fin);
        $days=array('1'=>'Monday','2' => 'Tuesday','3' => 'Wednesday','4'=>'Thursday','5' =>'Friday','6' => 'Saturday','7'=>'Sunday');
        for($i = strtotime($days["".$request->Tuesday], $startDate); $i <= $endDate; $i = strtotime('+1 week', $i))
        {
            $date_array[]=date('Y-m-d',$i);
            $debut_array[]=$request->tuesday_debut_seance;
            $fin_array[]=$request->tuesday_fin_seance;
            
        }
        }
        else
        {
            $program->tuesday=0  ;
        }

        if($request->Wednesday)
        {
        $program->wednesday = 1;
        $startDate = strtotime($request->program_date_debut);
        $endDate = strtotime($request->program_date_fin);
        $days=array('1'=>'Monday','2' => 'Tuesday','3' => 'Wednesday','4'=>'Thursday','5' =>'Friday','6' => 'Saturday','7'=>'Sunday');
        for($i = strtotime($days["".$request->Wednesday], $startDate); $i <= $endDate; $i = strtotime('+1 week', $i))
        {
            $date_array[]=date('Y-m-d',$i);
            $debut_array[]=$request->wednesday_debut_seance;
            $fin_array[]=$request->wednesday_fin_seance;
            
        }
        }
        else
        {
            $program->wednesday=0 ; 
        }
        
        
        if($request->Thursday)
        {
        $program->thursday = 1;
        $startDate = strtotime($request->program_date_debut);
        $endDate = strtotime($request->program_date_fin);
        $days=array('1'=>'Monday','2' => 'Tuesday','3' => 'Wednesday','4'=>'Thursday','5' =>'Friday','6' => 'Saturday','7'=>'Sunday');
        for($i = strtotime($days["".$request->Thursday], $startDate); $i <= $endDate; $i = strtotime('+1 week', $i))
        {
            $date_array[]=date('Y-m-d',$i);
            $debut_array[]=$request->thursday_debut_seance;
            $fin_array[]=$request->thursday_fin_seance;
            
        }
        }
        else
        {
            $program->thursday=0 ; 
        }
        
        
        if($request->Friday)
        {
        $program->friday = 1;
        $startDate = strtotime($request->program_date_debut);
        $endDate = strtotime($request->program_date_fin);
        $days=array('1'=>'Monday','2' => 'Tuesday','3' => 'Wednesday','4'=>'Thursday','5' =>'Friday','6' => 'Saturday','7'=>'Sunday');
        for($i = strtotime($days["".$request->Friday], $startDate); $i <= $endDate; $i = strtotime('+1 week', $i))
        {
            $date_array[]=date('Y-m-d',$i);
            $debut_array[]=$request->friday_debut_seance;
            $fin_array[]=$request->friday_fin_seance;
            
        }
        }

        else
        {
            $program->friday=0 ; 
        }


        if($request->Saturday)
        {
        $program->saturday = 1;
        $startDate = strtotime($request->program_date_debut);
        $endDate = strtotime($request->program_date_fin);
        $days=array('1'=>'Monday','2' => 'Tuesday','3' => 'Wednesday','4'=>'Thursday','5' =>'Friday','6' => 'Saturday','7'=>'Sunday');
        for($i = strtotime($days["".$request->Saturday], $startDate); $i <= $endDate; $i = strtotime('+1 week', $i))
        {
            $date_array[]=date('Y-m-d',$i);
            $debut_array[]=$request->saturday_debut_seance;
            $fin_array[]=$request->saturday_fin_seance;
            
        }
        }
        else
        {
            $program->saturday=0 ; 
        }

        if($request->Sunday)
        {
        $program->sunday = 1;
        $startDate = strtotime($request->program_date_debut);
        $endDate = strtotime($request->program_date_fin);
        $days=array('1'=>'Monday','2' => 'Tuesday','3' => 'Wednesday','4'=>'Thursday','5' =>'Friday','6' => 'Saturday','7'=>'Sunday');
        for($i = strtotime($days["".$request->Sunday], $startDate); $i <= $endDate; $i = strtotime('+1 week', $i))
        {
            $date_array[]=date('Y-m-d',$i);
            $debut_array[]=$request->sunday_debut_seance;
            $fin_array[]=$request->sunday_fin_seance;
            
        }
        }
        else
        {
            $program->sunday=0 ; 
        }





        $program->nom_program = $request->nom_program;
        $program->nombre_seance = sizeof($date_array);
        $program->prix_seance = $request->prix_seance;
        $program->program_date_debut= $request->program_date_debut;
        $program->program_date_fin= $request->program_date_fin;
        $program->sport_id= $request->sport_id;
        $program->location_id= $request->location_id;
        $program->user_id= $request->user_id;




        if($request->Monday)
        {
        $program->monday_debut_seance= $request->monday_debut_seance;
        $program->monday_fin_seance= $request->monday_fin_seance;


         }

         if($request->Tuesday)
         {
         $program->tuesday_debut_seance= $request->tuesday_debut_seance;
         $program->tuesday_fin_seance= $request->tuesday_fin_seance;






         
          }


          if($request->Wednesday)
          {
          $program->wednesday_debut_seance= $request->wednesday_debut_seance;
          $program->wednesday_fin_seance= $request->wednesday_fin_seance;
           }

           if($request->Thursday)
           {
           $program->thursday_debut_seance= $request->thursday_debut_seance;
           $program->thursday_fin_seance= $request->thursday_fin_seance;
            }

            if($request->Friday)
            {
            $program->friday_debut_seance= $request->friday_debut_seance;
            $program->friday_fin_seance= $request->friday_fin_seance;
             }

             if($request->Saturday)
             {
             $program->saturday_debut_seance= $request->saturday_debut_seance;
             $program->saturday_fin_seance= $request->saturday_fin_seance;
              }


              if($request->Sunday)
              {
              $program->sunday_debut_seance= $request->sunday_debut_seance;
              $program->sunday_fin_seance= $request->sunday_fin_seance;
               }

        $program->save();


        for ($i = 0; $i < sizeof($date_array); $i++){ 
            // dd($date_array_object)



            $seance = new Seance();
            $seance->date_seance_debut = $date_array[$i];
            $seance->date_seance_fin = $date_array[$i];
            $seance->debut_seance = $debut_array[$i];
            $seance->fin_seance = $fin_array[$i];
            $seance->program_id= $program->id;
            $seance->save();

            }

        // $program->update($request->all());
        return redirect()->route('programs.index')
        ->with('success','Program has been updated successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        $program->etat="disable";
        $program->save();
        return redirect()->route('programs.index')->with('success','Program has been deleted successfully');
    }


    public function calendar()
    {
        $seances=Seance::all();
        return redirect()->route('calendar.index');
    }




}
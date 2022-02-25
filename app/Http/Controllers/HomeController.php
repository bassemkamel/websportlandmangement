<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class HomeController extends Controller
{
   public function index()
   {
    //    $role=Auth::user()->role;

    //    if($role=='admin')
    //    {
    //        return view('admin');
    //    }
    //    else
    //    {
    //        return view('dashboard');

    //    }
    $url=redirect()->back()->getTargetUrl();
    if(Str::contains($url, 'trainers/create'))
    return redirect()->route('trainers.index')->with('success','Trainer has added successfully');
    else
    return redirect()->route('dashboard')->with('success','Trainer has been deleted successfully');
}
}

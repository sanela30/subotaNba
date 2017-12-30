<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamsController extends Controller
{
    public function __construct(){

        $this->middleware('auth');

    }
    public function index(){

        $teams=Team::all();
        return view('nba/index',compact(['teams']));
    }

    public function show($id){

        $team=Team::with('players')->find($id);
        return view('nba/show',compact(['team']));
    }
}

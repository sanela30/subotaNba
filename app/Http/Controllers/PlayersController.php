<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayersController extends Controller
{
 public function show($player_id){

        $player=Player::find($player_id);
        return view('nba/player',compact(['player']));
 }
}

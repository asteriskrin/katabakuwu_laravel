<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class ScoreboardController extends Controller
{
	/**
	 * Show scoreboard page.
	 * 
	 * @return view
	 */
    public function showScoreboardPage() {
    	$players = Player::orderBy('total_score', 'desc')->paginate(10);
    	return view('scoreboard', ['players' => $players]);
    }
}

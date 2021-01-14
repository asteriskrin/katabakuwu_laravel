<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Player;

class PlayerController extends Controller
{
	/**
	 * Validate key and get data.
	 * 
	 * @param  string $key Auth key
	 * @return json
	 */
	public function validate_key($key) {
		$player = Player::where('auth_key', $key)->first();

		$response = [];

		$response['code'] = 'NO_CODE';

		if($player) {
			$response['name'] = $player->name;
			$response['level'] = $player->level;
		}
		else {
			$response['code'] = 'AUTH_KEY_NOT_FOUND';
		}

		return response()->json($response);
	}

	/**
	 * Register key.
	 * 
	 * @param  Request $request Request
	 * @return json
	 */
	public function register_key(Request $request) {
		$request->validate([
			'name' => 'required|string|min:1|max:32',
		]);

		$player = Player::create([
			'name' => $request->name,
			'level' => 0,
			'total_score' => 0,
			'auth_key' => Str::random(32),
		]);

		$response = [];
		$response['auth_key'] = $player->auth_key;

		return response()->json($response);
	}

	/**
	 * Get scoreboard.
	 * 
	 * @return view
	 */
	public function scoreboard_get() {
		$players = Player::orderBy('total_score', 'desc')->limit(10)->get();
		return view('scoreboard', ['players' => $players]);
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}

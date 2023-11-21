<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GameController extends Controller
{
    public function insertGameRecord(Request $request)
    {
        $data = $request->validate([
            'user_name' => 'required',
            'game_data' => 'required',
        ]);

        $gameData = json_decode($data['game_data'], true);
        $game = new Game();
        $game->user_name = $data['user_name'];
        $game->mode = $gameData['mode'];
        $game->moves = $gameData['moves'];
        $game->time = $gameData['time'];
        $game->save();

        return Redirect::route('WellingActivitiesForElders.ResourcesSupport');
    }
}
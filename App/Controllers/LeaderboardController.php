<?php

namespace App\Controllers;

use App\Libraries\View;

class LeaderboardController {

    public function index()
    {
        return View::render('leaderboard.view');
    }
}
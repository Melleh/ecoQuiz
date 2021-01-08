<?php

namespace App\Controllers;

use App\Libraries\View;

class QuizController {

    public function index()
    {
        return View::render('quiz.view');
    }
}
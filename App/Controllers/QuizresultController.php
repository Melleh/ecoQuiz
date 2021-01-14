<?php

namespace App\Controllers;

use App\Libraries\View;

class QuizresultController {

    public function index()
    {
        return View::render('quizresult.view');
    }
}
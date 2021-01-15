<?php

namespace App\Controllers;

use App\Libraries\View;

class ResultController {

    public function index()
    {
        return View::render('result.view');
    }
}

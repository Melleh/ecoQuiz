<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Models\ClimateModel;

class ClimateController
{

    public function index()
    {

        $climates = ClimateModel::all();
        $view = 'climate.view';
        $vars = [
            'climates'  => $climates,
            'title'     => 'Climates',
            'foods'     => [
                'fruit'     =>  'banana'
            ]
        ];

        
        return View::render($view, $vars);


    }
}
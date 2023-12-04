<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Statamic\View\View;

class CustomControllerWithAllBlade extends Controller
{

    public function __invoke(Request $request)
    {

        return (new View)
            ->template('custom/allblade')
            ->with(['title' => 'An ALL blade page']);
    }
}

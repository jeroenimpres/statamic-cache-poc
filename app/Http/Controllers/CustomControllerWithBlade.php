<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Statamic\View\View;

class CustomControllerWithBlade extends Controller
{

    public function __invoke(Request $request)
    {

        return (new View)
            ->template('custom/blade')
            ->with(['title' => 'A blade page']);
    }
}

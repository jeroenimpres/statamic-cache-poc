<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Statamic\View\View;

class CustomControllerWithAntlers extends Controller
{

    public function __invoke(Request $request)
    {

        return (new View)
            ->template('custom/custom')
            ->layout('layout')
            ->with(['title' => 'Nice Antlers page']);
    }
}

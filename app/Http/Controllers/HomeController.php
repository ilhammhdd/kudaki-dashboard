<?php

namespace App\Http\Controllers;


use test\Mockery\ReturnTypeObjectTypeHint;

class HomeController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function indexOrganizer()
    {
        return view('home');
    }

    public function failed($res_stat_code)
    {
        return view('layouts.failed', ['res_stat_code' => $res_stat_code]);
    }

    public function indexHomeOrganizer()
    {
        return view('home_organizer');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index(){
        return view('activities.index');
    }

    public function create(){
        return view('activities.create');
    }
}

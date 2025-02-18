<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Service\ActivityService;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index(){

        // $moday_activities =

        // return $activities;
        return view('activities.index',[
            // 'activities' => $activities
        ]);
    }

    public function create(){
        return view('activities.create');
    }

    public function store(Request $request, ActivityService $activityService){

        $request->validate([
            'table' => 'required',
            'time' => 'required',
            'activity' => 'required',
            'guide' => 'required',
        ]);

        $response = $activityService->store($request);

        return redirect()->route('activities.index', $response);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ActivitiesMonday;
use App\Models\Activity;
use App\Service\ActivityService;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index(){

        $monday_activities = ActivitiesMonday::all();

        // return $activities;
        return view('activities.index',[
            'monday_activities' => $monday_activities
        ]);
    }

    public function create(){
        return view('activities.create');
    }

    public function store(Request $request, ActivityService $activityService){
        // return $request->all();
        $request->validate([
            'table' => 'required',
            'time' => 'required',
            'activity' => 'required',
            'guide' => 'required',
        ]);

        return $response = $activityService->store($request);

        return redirect()->route('activity.index', $response);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Service\ActivityService;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index(){
        $activities = Activity::with('status')->get();

        // format birth_date to human readable
        foreach ($activities as $activity) {
            $activity->start_date = date('F d, Y', strtotime($activity->start_date));
        }

        // return $activities;
        return view('activities.index',[
            'activities' => $activities
        ]);
    }

    public function create(){
        return view('activities.create');
    }

    public function store(Request $request, ActivityService $activityService){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required',
        ]);

        $response = $activityService->store($request);

        return redirect()->route('activities.index');
    }
}

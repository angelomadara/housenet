<?php

namespace App\Service;

use App\Models\ActivitiesFriday;
use App\Models\Activity;
use App\Models\ActivitiesMonday;
use App\Models\ActivitiesSaturday;
use App\Models\ActivitiesSunday;
use App\Models\ActivitiesThursday;
use App\Models\ActivitiesTuesday;
use App\Models\ActivitiesWednesday;

class ActivityService
{
    public function index()
    {
        return Activity::all();
    }

    public function store($data)
    {
        $table = $data->table;

        if($table = 'activities_mondays'){
            $table = ActivitiesMonday::class;
        }

        switch($table){
            case 'activities_mondays':
                $table = ActivitiesMonday::class;
                break;
            case 'activities_tuesdays':
                $table = ActivitiesTuesday::class;
                break;
            case 'activities_wednesdays':
                $table = ActivitiesWednesday::class;
                break;
            case 'activities_thursdays':
                $table = ActivitiesThursday::class;
                break;
            case 'activities_fridays':
                $table = ActivitiesFriday::class;
                break;
            case 'activities_saturdays':
                $table = ActivitiesSaturday::class;
                break;
            case 'activities_sundays':
                $table = ActivitiesSunday::class;
                break;
            default:
                $table = Activity::class;
        }

        $activity = new $table();
        $activity->time = $data->time;
        $activity->activity = $data->activity;
        $activity->guide = $data->guide;
        $activity->save();

        return $activity;

        // return Activity::create($data);
    }
}

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
        return $data->activity;
        switch($table){
            case 'activities_monday':
                $table = ActivitiesMonday::class;
                break;
            case 'activities_tuesday':
                $table = ActivitiesTuesday::class;
                break;
            case 'activities_wednesday':
                $table = ActivitiesWednesday::class;
                break;
            case 'activities_thursday':
                $table = ActivitiesThursday::class;
                break;
            case 'activities_friday':
                $table = ActivitiesFriday::class;
                break;
            case 'activities_saturday':
                $table = ActivitiesSaturday::class;
                break;
            case 'activities_sunday':
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

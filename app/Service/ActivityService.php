<?php

namespace App\Service;

use App\Models\Activity;

class ActivityService
{
    public function index()
    {
        return Activity::all();
    }

    public function store($data)
    {
        return Activity::create($data);
    }
}

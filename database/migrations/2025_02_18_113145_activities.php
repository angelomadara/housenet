<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // rename activities_monday table
        Schema::rename('activities_monday', 'activities_mondays');
        // rename activities_tuesday table
        Schema::rename('activities_tuesday', 'activities_tuesdays');
        // rename activities_wednesday table
        Schema::rename('activities_wednesday', 'activities_wednesdays');
        // rename activities_thursday table
        Schema::rename('activities_thursday', 'activities_thursdays');
        // rename activities_friday table
        Schema::rename('activities_friday', 'activities_fridays');
        // rename activities_saturday table
        Schema::rename('activities_saturday', 'activities_saturdays');
        // rename activities_sunday table
        Schema::rename('activities_sunday', 'activities_sundays');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // rename activities_mondays table
        Schema::rename('activities_mondays', 'activities_monday');
        // rename activities_tuesdays table
        Schema::rename('activities_tuesdays', 'activities_tuesday');
        // rename activities_wednesdays table
        Schema::rename('activities_wednesdays', 'activities_wednesday');
        // rename activities_thursdays table
        Schema::rename('activities_thursdays', 'activities_thursday');
        // rename activities_fridays table
        Schema::rename('activities_fridays', 'activities_friday');
        // rename activities_saturdays table
        Schema::rename('activities_saturdays', 'activities_saturday');
        // rename activities_sundays table
        Schema::rename('activities_sundays', 'activities_sunday');
    }
};

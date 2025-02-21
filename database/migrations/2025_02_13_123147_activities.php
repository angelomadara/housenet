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
        // create activities_monday table
        Schema::create('activities_monday', function (Blueprint $table) {
            $table->id();
            $table->string('time');
            $table->string('activity');
            $table->string('guide');
            $table->timestamps();
        });
        // create activities_tuesday table
        Schema::create('activities_tuesday', function (Blueprint $table) {
            $table->id();
            $table->string('time');
            $table->string('activity');
            $table->string('guide');
            $table->timestamps();
        });
        // create activities_wednesday table
        Schema::create('activities_wednesday', function (Blueprint $table) {
            $table->id();
            $table->string('time');
            $table->string('activity');
            $table->string('guide');
            $table->timestamps();
        });
        // create activities_thursday table
        Schema::create('activities_thursday', function (Blueprint $table) {
            $table->id();
            $table->string('time');
            $table->string('activity');
            $table->string('guide');
            $table->timestamps();
        });
        // create activities_friday table
        Schema::create('activities_friday', function (Blueprint $table) {
            $table->id();
            $table->string('time');
            $table->string('activity');
            $table->string('guide');
            $table->timestamps();
        });
        // create activities_saturday table
        Schema::create('activities_saturday', function (Blueprint $table) {
            $table->id();
            $table->string('time');
            $table->string('activity');
            $table->string('guide');
            $table->timestamps();
        });
        // create activities_sunday table
        Schema::create('activities_sunday', function (Blueprint $table) {
            $table->id();
            $table->string('time');
            $table->string('activity');
            $table->string('guide');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities_monday');
        Schema::dropIfExists('activities_tuesday');
        Schema::dropIfExists('activities_wednesday');
        Schema::dropIfExists('activities_thursday');
        Schema::dropIfExists('activities_friday');
        Schema::dropIfExists('activities_saturday');
        Schema::dropIfExists('activities_sunday');
    }
};

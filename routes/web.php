<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware(["auth", "verified"])->group(function () {
    Route::get("/", function () {
        return view("dashboard");
    });

    Route::get("/dashboard", function () {
        return view("dashboard");
    })->name("dashboard");

    Route::get("/profile", [ProfileController::class, "edit"])->name("profile.edit");
    Route::patch("/profile", [ProfileController::class, "update"])->name("profile.update");
    Route::delete("/profile", [ProfileController::class, "destroy"])->name("profile.destroy");

    Route::get("/activities", [App\Http\Controllers\ActivityController::class,"index"])->name("activity.index");
    Route::get("/activies/create", [App\Http\Controllers\ActivityController::class,"create"])->name("activity.create");
    Route::post("/activities", [App\Http\Controllers\ActivityController::class,"store"])->name("activity.store");

    // Clients route
    Route::get("/clients", [App\Http\Controllers\ClientController::class,"index"])->name("clients.index");
    Route::get("/clients/create", [App\Http\Controllers\ClientController::class,"create"])->name("clients.create");
    Route::post("/clients", [App\Http\Controllers\ClientController::class,"store"])->name("clients.store");

    Route::get("/testing", [App\Http\Controllers\TestController::class,"index"])->name("testing");
});

require __DIR__ . "/auth.php";

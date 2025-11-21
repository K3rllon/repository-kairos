<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ArtistController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/events", [EventController::class, "index"])->name("events.index");
Route::get("/events/create", [EventController::class, "create"])->name("events.create");
Route::post("/events", [EventController::class, "store"])->name("events.store");
Route::get("/events/{event}/edit", [EventController::class, "edit"])->name("events.edit");
Route::put("/events/{event}", [EventController::class, "update"])->name("events.update");
Route::delete("/events/{event}", [EventController::class, "destroy"])->name("events.destroy");

Route::get("/artists", [ArtistController::class, "index"])->name("artists.index");
Route::get("/artists/create", [ArtistController::class, "create"])->name("artists.create");
Route::post("/artists", [ArtistController::class, "store"])->name("artists.store");
Route::get("/artists/{artist}/edit", [ArtistController::class, "edit"])->name("artists.edit");
Route::put("/artists/{artist}", [ArtistController::class, "update"])->name("artists.update");
Route::delete("/artists/{artist}", [Artistcontroller::class, "destroy"])->name("artists.destroy");

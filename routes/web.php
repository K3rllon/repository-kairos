<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketLotController;

Route::get('/', [HomeController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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
Route::delete("/artists/{artist}", [ArtistController::class, "destroy"])->name("artists.destroy");

Route::get("/tickets", [TicketLotController::class, "index"])->name("tickets.index");
Route::get("/tickets/create", [TicketLotController::class, "create"])->name("tickets.create");
Route::post("/tickets", [TicketLotController::class, "store"])->name("tickets.store");
Route::get("/tickets/{ticket}/edit", [TicketLotController::class, "edit"])->name("tickets.edit");
Route::put("/tickets/{ticket}", [TicketLotController::class, "update"])->name("tickets.update");
Route::delete("/tickets/{ticket}", [TicketLotController::class, "destroy"])->name("tickets.destroy");

require __DIR__.'/auth.php';


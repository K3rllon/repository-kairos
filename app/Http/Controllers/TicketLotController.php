<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;


class TicketLotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view("tickets.index", compact("tickets"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tickets.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Ticket::create($request->all());
        return redirect()->route("tickets.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tickets = Ticket::findOrFail($id);
        return view("tickets.edit", compact("tickets"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tickets = Ticket::findOrFail($id);
        $tickets->update($request->all());
        return redirect()->route("tickets.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tickets = Ticket::findOrFail($id);
        $tickets->delete();
        return redirect()->route("tickets.index");
    }
}

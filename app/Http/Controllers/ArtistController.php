<?php

namespace App\Http\Controllers;

use App\Models\no;
use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = Artist::all();
        return view("artists.index", compact("artists"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("artists.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Artist::create($request->all());

        return redirect()->route("artists.index");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $artist = Artist::findOrFail($id);
        return view("artists.edit", compact("artist"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $artist = Artist::findOrFail($id);
        $artist->update($request->all());
        return redirect()->route("artists.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}

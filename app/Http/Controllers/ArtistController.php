<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::all();
        return view("artists.index", compact("artists"));
    }

    public function create()
    {
        return view("artists.create");
    }

    public function store(Request $request)
    {
        Artist::create($request->all());
        return redirect()->route("artists.index");
    }

    public function edit($id)
    {
        $artist = Artist::findOrFail($id);
        return view("artists.edit", compact("artist"));
    }

    public function update(Request $request, $id)
    {
        $artist = Artist::findOrFail($id);
        $artist->update($request->all());
        return redirect()->route("artists.index");
    }

    public function destroy($id)
    {
        $artist = Artist::findOrFail($id);
        $artist->delete();
        return redirect()->route("artists.index");
    }
}

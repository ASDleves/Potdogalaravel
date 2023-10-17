<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
        $clubs = response()->json(Club::all());
        return $clubs;
    }

    public function show($id)
    {
        $club = response()->json(Club::find($id));
        return $club ;
    }

    public function delete($id){
        $club = Club::find($id);
    
        $club->memberships()->delete();
    
        $club->delete();
    
        return redirect('/club/list');
    }

    public function store(Request $request)
    {
        $club = new Club();
        $club->establishment = $request->establishment;
        $club->location = $request->location;
        $club->max_number = $request->max_number;
        $club->save();
        return redirect('/club/list');
    }

    public function update(Request $request, $id)
    {
        $club = Club::find($id);
        $club->establishment = $request->establishment;
        $club->location = $request->location;
        $club->max_number = $request->max_number;
        $club->save();
        return redirect('/club/list');
    }

    public function newView()
    {
        return view('club.new');
    }

    public function editView($id)
    {
        $club = Club::find($id);
        return view('club.edit', ["club" => $club]);
    }

    public function listView()
    {
        $clubs = Club::all();
        return view("club.list", ["clubs" => $clubs]);
    }

    public function deleteView()
    {
        $clubs = Club::all();
        return view("club.delete", ["clubs" => $clubs]);
    }
}

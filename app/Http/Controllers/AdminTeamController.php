<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class AdminTeamController extends Controller
{
    public function edit()
    {
        $team = Team::first();

        return view('admin.team', compact('team'));
    }

    public function update(Request $request)
    {
        $team = Team::first();

        $team->update($request->all());

        return back()->with(
            'success',
            'Team updated successfully!'
        );
    }
}

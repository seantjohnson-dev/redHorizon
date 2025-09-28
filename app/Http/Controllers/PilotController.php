<?php

namespace App\Http\Controllers;

use App\Models\Pilot;
use Illuminate\Http\Request;

class PilotController extends Controller
{
    public function index()
    {
        $pilots = \App\Models\Pilot::latest()->paginate(10);
        return view('pilots.index', compact('pilots'));
    }

    public function create()
    {
        return view('pilots.create');
    }

    public function store(\Illuminate\Http\Request $request)
    {
        $validated = $request->validate([
            'firstName'  => 'required|string|max:255',
            'lastName'   => 'required|string|max:255',
            'age'        => 'required|integer|min:18',
            'email'      => 'required|email|unique:pilots,email',
            'experience' => 'required|in:beginner,intermediate,advanced,expert',
            'bio'        => 'nullable|string',
        ]);

        $pilot = \App\Models\Pilot::create($validated);

        return redirect()->route('pilots.show', $pilot)->with('status', 'Pilot created!');
    }

    public function show(\App\Models\Pilot $pilot)
    {
        return view('pilots.show', compact('pilot'));
    }

    public function edit(\App\Models\Pilot $pilot)
    {
        return view('pilots.edit', compact('pilot'));
    }

    public function update(\Illuminate\Http\Request $request, \App\Models\Pilot $pilot)
    {
        $validated = $request->validate([
            'firstName'  => 'sometimes|required|string|max:255',
            'lastName'   => 'sometimes|required|string|max:255',
            'age'        => 'sometimes|required|integer|min:18',
            'email'      => 'sometimes|required|email|unique:pilots,email,' . $pilot->id,
            'experience' => 'sometimes|required|in:beginner,intermediate,advanced,expert',
            'bio'        => 'nullable|string',
        ]);

        $pilot->update($validated);

        return redirect()->route('pilots.show', $pilot)->with('status', 'Pilot updated!');
    }

    public function destroy(\App\Models\Pilot $pilot)
    {
        $pilot->delete();
        return redirect()->route('pilots.index')->with('status', 'Pilot deleted.');
    }
}

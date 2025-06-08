<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        return view('experience.index', compact('experiences'));
    }

    public function create()
    {
        return view('experience.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'company' => 'required',
            'start_year' => 'required|digits:4',
            'end_year' => 'required|digits:4',
            'description' => 'required',
        ]);

        Experience::create($request->all());
        return redirect()->route('experience.index')->with('success', 'Experience added.');
    }

    public function edit(Experience $experience)
    {
        return view('experience.edit', compact('experience'));
    }

    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'title' => 'required',
            'company' => 'required',
            'start_year' => 'required|digits:4',
            'end_year' => 'required|digits:4',
            'description' => 'required',
        ]);

        $experience->update($request->all());
        return redirect()->route('experience.index')->with('success', 'Experience updated.');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect()->route('experience.index')->with('success', 'Experience deleted.');
    }
}

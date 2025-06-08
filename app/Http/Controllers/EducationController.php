<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::all();
        return view('education.index', compact('educations'));
    }

    public function create()
    {
        return view('education.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'school' => 'required',
            'degree' => 'required',
            'start_year' => 'required|digits:4',
            'end_year' => 'required|digits:4',
        ]);

        Education::create($request->all());
        return redirect()->route('education.index')->with('success', 'Education added.');
    }

    public function edit(Education $education)
    {
        return view('education.edit', compact('education'));
    }

    public function update(Request $request, Education $education)
    {
        $request->validate([
            'school' => 'required',
            'degree' => 'required',
            'start_year' => 'required|digits:4',
            'end_year' => 'required|digits:4',
        ]);

        $education->update($request->all());
        return redirect()->route('education.index')->with('success', 'Education updated.');
    }

    public function destroy(Education $education)
    {
        $education->delete();
        return redirect()->route('education.index')->with('success', 'Education deleted.');
    }
}

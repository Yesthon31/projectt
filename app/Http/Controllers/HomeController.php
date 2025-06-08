<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $homes = Home::all();
        return view('home.index', compact('homes'));
    }

    public function create()
    {
        return view('home.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Home::create($request->all());

        return redirect()->route('home.index')->with('success', 'Home content created.');
    }

    public function edit(Home $home)
    {
        return view('home.edit', compact('home'));
    }

    public function update(Request $request, Home $home)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $home->update($request->all());

        return redirect()->route('home.index')->with('success', 'Home updated.');
    }

    public function destroy(Home $home)
    {
        $home->delete();
        return redirect()->route('home.index')->with('success', 'Home deleted.');
    }
}

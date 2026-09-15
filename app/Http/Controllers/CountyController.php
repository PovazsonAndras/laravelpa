<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\County;

class CountyController extends Controller
{
    public function index()
    {
        $entities = County::get();
        $isAuthenticated = true; // egyelőre nincs bejelentkezés/jogosultságkezelés kiépítve

        return view('counties.index', compact('entities', 'isAuthenticated'));
    }

    public function create()
    {
        return view('counties.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        County::create($validated);

        return redirect()->route('counties.index')->with('success', 'A megye sikeresen létrehozva.');
    }

    public function show(County $county)
    {
        $county->load('cities');

        return view('counties.show', [
            'entity' => $county
        ]);
    }

    public function edit(County $county)
    {
        return view('counties.edit', compact('county'));
    }

    public function update(Request $request, County $county)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $county->update($validated);

        return redirect()
            ->route('counties.show', $county)
            ->with('status', 'Megye frissítve!');
    }


    public function destroy(County $county)
    {
        $county->delete();

        return redirect()
            ->route('counties.index')
            ->with('status', 'Megye törölve!');
    }
}
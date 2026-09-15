<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\County;

class CountyController extends Controller
{
    public function index()
    {
        $entities = County::get();
        $isAuthenticated = false; // egyelőre nincs bejelentkezés/jogosultságkezelés kiépítve

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

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
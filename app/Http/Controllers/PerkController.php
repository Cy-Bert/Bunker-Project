<?php

namespace App\Http\Controllers;

use App\Models\Perk;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PerkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Perks/Index', [
            'perks' => Perk::with('character')->get()
        ]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Perks/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid_data = Validator::make($request->all(), [
            'name' => ['required'],
            'desc' => ['required'],
            'type' => ['required'],
            'character_id' => ['required'],
        ])->validate();

        Perk::create($valid_data);

        session()->flash('flash.banner', 'Perk créée avec succès');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('perks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Perk $perk)
    {
        return Inertia::render('Perks/Show', compact('perk'));
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit(Perk $perk)
    {
        return Inertia::render('Perks/Edit', compact('perk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perk $perk)
    {
        $updt = Validator::make($request->all(), [
            'name' => ['required'],
            'desc' => ['required'],
            'type' => ['required'],
            'character_id' => ['required'],
        ])->validate();


        $perk->update($updt);

        session()->flash('flash.banner', 'Perk modifiée avec succès');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('perk.index');

    }

    /**
     * Remove the specified resource from storage.
     */

     public function destroy(Perk $perk)
    {
        $perk->delete();
        session()->flash('flash.banner', 'Perk supprimée avec succès');
    }
}

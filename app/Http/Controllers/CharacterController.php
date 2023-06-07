<?php

namespace App\Http\Controllers;

use App\Models\Character;
// use App\Models\Relations;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Enums\ServerStatus;
use Illuminate\Validation\Rules\Enum;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $characters = Character::latest('id')->get();
        return Inertia::render("Characters/Index", compact("characters"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render("Characters/Create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dump($request);

        $validated = $request->validate([
            'name' => 'required',
            'age' => 'required|integer|numeric',
            'size' => 'required|integer|numeric',
            'gender' => 'required',
            'body_shape' => 'required',
            'personality' => 'required',
            'status' => 'nullable',
            'type' => 'required',
            'notes' => 'nullable',
        ]);

        // dd($validated);

        Character::create($validated);

        session()->flash('flash.banner', 'Character created');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('characters.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return Inertia::render('Characters/Show', ['character' => Character::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(character $character)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, character $character)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(character $character)
    {
        
            //Efface les relations liées aux persos supprimées
            DB::table('relations')->where('character_id', '=', $character->id)->delete();
            DB::table('relations')->where('to_character_id', '=', $character->id)->delete();

            // Relations::where('character_id', $character->id)->delete();
            $character->delete();
            return redirect()->back();
    }
}

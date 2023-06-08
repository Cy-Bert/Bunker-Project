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
        return Inertia::render('Perks', [
            'perks' => Perk::with('character')->get()
        ]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name' => ['required'],
            'desc' => ['required'],
            'type' => ['required'],
            'character_id' => ['required'],
        ])->validate();

        return redirect()->back()
            ->with('message', 'Perk Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Validator::make($request->all(), [
            'name' => ['required'],
            'desc' => ['required'],
            'type' => ['required'],
            'character_id' => ['required'],
        ])->validate();

        return redirect()->back()
                ->with('message', 'Perk Updated Successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
public function destroy(Request $request): \Illuminate\Http\RedirectResponse
    {
        Perk::destroy($request->id);

        return redirect()->back()
            ->with('message', 'Perk deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Table;


use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Support\Facades\Validator;


class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tables = Table::all();
        return Inertia::render('Tables/Index', compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Tables/Create');
    }

    public function store(Request $request)
    {
        $valid_data = Validator::make($request->all(), [
            'name' => ['required',],
            'desc' => ['required'],
            'status' => ['required'],
            'notes' => ['nullable'],
        ])->validate();

        Table::create($valid_data);

        session()->flash('flash.banner', 'Table créée avec succès');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('tables.index');
    }

    public function show(Table $table)
    {
        return Inertia::render('Tables/Show', compact('table'));
    }

    public function edit(Table $table)
    {
        return Inertia::render('Tables/Edit', compact('table'));
    }

    public function update(Request $request, Table $table)
    {
        $valid_data = Validator::make($request->all(), [
            'name' => ['required'],
            'desc' => ['nullable'],
            'status' => ['required'],
            'food' => ['numeric', 'min:0'],
            'heat' => ['numeric', 'min:0'],
            'heal' => ['numeric', 'min:0'],
            'ammo' => ['numeric', 'min:0'],
            'notes' => ['nullable'],
        ])->validate();

        $table->update($valid_data);

        session()->flash('flash.banner', 'Table modifiée avec succès');
        session()->flash('flash.bannerStyle', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Table $table)
    {
        $table->delete();
        session()->flash('flash.banner', 'Table supprimée avec succès');
    }
}

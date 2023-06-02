<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

use Inertia\Inertia;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [

            'title' => ['required'],

            'body' => ['required'],

        ])->validate();
        Table::create($request->all());
        return redirect()->back()

                    ->with('message', 'Table Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Table $table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Table $table)
    {
        return Inertia::render('Tables/Edit', compact('table'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Table $table)
    {
        Validator::make($request->all(), [
            'title' => ['required'],
            'body' => ['required'],
        ])->validate();

        if ($request->has('id')) {
            Table::find($request->input('id'))->update($request->all());
            return redirect()->back()
                    ->with('message', 'Table bien modifiée');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Table $table)
    {
        $table->delete();
        return redirect()->back()->with('message', 'Table Deleted Successfully.');
    }
}

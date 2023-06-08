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

    // {
    //     $request->validate([
    //         'name' => ['required'],
    //         'desc' => ['required'],
    //         'status' => ['required'],
    //         'food' => ['required'],
    //         'heat' => ['required'],
    //         'heal' => ['required'],
    //         'ammo' => ['required'],
    //         'notes' => ['required'],
    //     ]
    //     );

    //     Table::create($request->all());
    //     return redirect()->back()
    //                 ->with('message', 'Table Created Successfully.');
    // }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid_data = Validator::make($request->all(), [
            'name' => ['required', ''],
            'desc' => ['required'],
            'status' => ['required'],
        ])->validate();

        // $valid_data['user_id'] = auth()->id();

        Table::create($valid_data);

        session()->flash('flash.banner', 'Table créée avec succès');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('tables.index');

    }

        // Post::create($request->all(),[
        //     'name' => $request->name,
        //     'desc' => $request->desc,
        //     'status' => $request->status,
        //     'food' => intval($request->food),
        //     'heat' => intval($request->heat),
        //     'heal' => intval($request->heal),
        //     'ammo' => intval($request->ammo),
        //     'notes' => $request->notes,
        // ]);


        // Post::create($request->all(),[
        //     'name' => $request->name,
        //     'desc' => $request->desc,
        //     'status' => $request->status,
        //     'food' => intval($request->food),
        //     'heat' => intval($request->heat),
        //     'heal' => intval($request->heal),
        //     'ammo' => intval($request->ammo),
        //     'notes' => $request->notes,
        // ]);


    //     return redirect()->back()

    //                 ->with('message', 'Table Created Successfully.');
    // }

    /**
     * Display the specified resource.
     */
    public function show(Table $table)
    {
        return Inertia::render('Tables/Show', compact('table'));
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
        $test = Validator::make($request->all(), [
            'name' => ['required'],
            'desc' => ['nullable'],
            'status' => ['required'],
            'food' => ['numeric'],
            'heat' => ['numeric'],
            'heal' => ['numeric'],
            'ammo' => ['numeric'],
            'notes' => ['nullable'],
        ])->validate();



        $table->update($test);

        session()->flash('flash.banner', 'Table modifiée avec succès');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('tables.index');
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

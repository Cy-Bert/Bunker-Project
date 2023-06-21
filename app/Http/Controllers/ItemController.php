<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Item;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ItemController extends Controller
{

    public function index()
    {
        $data = Item::all();
        return Inertia::render('Items/Index', compact('data'));
    }


    public function create()
    {
        return Inertia::render('Items/Create');
    }

    public function store(Request $request)
    {
        $valid_data = Validator::make($request->all(), [
            'name' => ['required'],
            'desc' => ['required'],
            'stats' => ['required'],
            'character_id' => ['required'],
        ])->validate();

      

        Item::create($valid_data);

        session()->flash('flash.banner', 'item créée avec succès');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('items.index');

    }


    public function show(Item $item)
    {

    }


    public function edit(Item $item)
    {
        return Inertia::render('Items/Edit', compact('item'));
    }


    public function update(Request $request, Item $item)
    {
        $test = Validator::make($request->all(), [
            'name' => ['required'],
            'desc' => ['required'],
            'stats' => ['required'],
            'character_id' => ['required', 'integer'],
        ])->validate();

        $item->update($test);

        session()->flash('flash.banner', 'item modifiée avec succès');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('items.index');
    }

    public function destroy(Item $item)
    {
        $item->delete();
        session()->flash('flash.banner', 'Item supprimée avec succès');
    }
}
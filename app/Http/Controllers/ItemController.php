<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return response()->json($items);
    }

    public function store(Request $request)
    {
        $item = new Item();
        $item->name = $request->input('name');
        $item->desc = $request->input('desc');
        $item->stats = $request->input('stats');
        $item->character_id = $request->input('character_id');
        $item->save();

        return response()->json($item, 201);
    }

    public function show($id)
    {
        $item = Item::findOrFail($id);
        return response()->json($item);
    }

    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->name = $request->input('name');
        $item->desc = $request->input('desc');
        $item->stats = $request->input('stats');
        $item->character_id = $request->input('character_id');
        $item->save();

        return response()->json($item);
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return response()->json(null, 204);
    }
}

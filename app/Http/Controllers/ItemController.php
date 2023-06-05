<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    public function index()
    {
        $data = Item::all();
        return Inertia::render('items', ['item' => $data]);
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [

            'name' => ['required'],
            'desc' => ['required'],
            'stats' => ['required'],
            'character_id' => ['required'],
        ])->validate();

        Item::create($request->all());

        return redirect()->back()
            ->with('message', 'Item Created Successfully.');
    }

    public function update(Request $request, $id)
    {
        Validator::make($request->all(), [

            'name' => ['required'],
            'desc' => ['required'],
            'stats' => ['required'],
            'character_id' => ['required'],
        ])->validate();

        if ($request->has('id')) {
            Item::find($request->input('id'))->update($request->all());
            return redirect()->back()
                ->with('message', 'Item Updated Successfully.');
        }
    }

    public function destroy(Request $request)
    {
        if ($request->has('id')) {
            Item::find($request->input('id'))->delete();
            return redirect()->back();
        }
    }
}
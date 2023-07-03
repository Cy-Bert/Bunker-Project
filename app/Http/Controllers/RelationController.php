<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Relation;
use App\Models\Character;
use Illuminate\Support\Facades\Validator;
  
class RelationController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function index()
    {
        $relations = Relation::with(['character', 'other'])->get();
        return Inertia::render('Relations/Index', compact('relations'));
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'character_id' => ['required'],
            'to_character_id' => ['required'],
            'relation' => ['required','integer','numeric','between:0,100'],
        ])->validate();
  
        Relation::create($request->all());
  
        session()->flash('flash.banner', 'Relation created');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('relations.index');
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function update(Request $request, Relation $relation)
    {
        Validator::make($request->all(), [
            'character_id' => ['required'],
            'to_character_id' => ['required'],
            'relation' => ['required','integer','numeric','between:0,100'],
        ])->validate();
  
       $relation->update($request);
       return redirect()->route('relations.index');
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function destroy(Relation $relation)
    {
        
        $relation->delete();
            return redirect()->back(); 
    }
    public function create()
    {
        $characters= Character::all(); 
        return Inertia::render('Relations/Create', compact('characters'));  
    }
    public function edit(Relation $relation)
    { 
        $characters= Character::all();
        return Inertia::render('Relations/Edit', compact ('relation'));  
    }
}
<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Relation;
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
            'title' => ['required'],
            'body' => ['required'],
        ])->validate();
  
        Relation::create($request->all());
  
        return redirect()->back()
                    ->with('message', 'Relation Created Successfully.');
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'title' => ['required'],
            'body' => ['required'],
        ])->validate();
  
        if ($request->has('id')) {
            Relation::find($request->input('id'))->update($request->all());
            return redirect()->back()
                    ->with('message', 'Relation Updated Successfully.');
        }
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
        return Inertia::render('Relations/Create');  
    }
}
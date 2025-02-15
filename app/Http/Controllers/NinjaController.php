<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use App\Models\Dojo;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index(){
        //rout --> /ninjas/
        $ninjas = Ninja::with ('dojo')->orderBy('created_at', 'desc')->paginate(8);
        return view('ninjas.index', [ "ninjas" => $ninjas]);
    }

    public function show(Ninja $ninja) {
        //route --> /ninjas/{id}
        //fetch a single record & pass into the show view
        $ninja->load('dojo');

        return view('ninjas.show', ["ninja" => $ninja]);
    }

    public function create(){
        //route --> /ninjas/create
        //render a create view (with the web form) to users.
        $dojos = Dojo::all();
        return view('ninjas.create', ["dojos" => $dojos]);
    }

    public function store(Request $request){
        // --> /ninjas/ (POST)
        //Handles POST requests to store a new record in table
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'dojo_id' => 'required|exists:dojos,id',
        ]);

        Ninja::create($validated);

        return redirect()->route('ninjas.index')->with('success', 'Ninja Created successfully!');
    }

    public function destroy(Ninja $ninja){
        // --> /ninjas/ {id} {DELETED}
        //Handles delete requests to delete a ninja record from the table
        $ninja->delete();

        return redirect()->route('ninjas.index')->with('success', 'Ninja Deleted successfully!');
    }

    //edit() and update() for edite view and update requests
    // we won't be using these routes

}

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

    public function show($id){
        //route --> /ninjas/{id}
        //fetch a single record & pass into the show view
        $ninja = Ninja::with('dojo')->findOrFail($id);

        return view('ninjas.show', ["ninja" => $ninja]);
    }

    public function create(){
        //route --> /ninjas/create
        //render a create view (with the web form) to users.
        $dojos = Dojo::all();
        return view('ninjas.create', ["dojos" => $dojos]);
    }

    public function store(){
        // --> /ninjas/ (POST)
        //Handles POST requests to store a new record in table
    }

    public function destroy($id){
        // --> /ninjas/ {id} {DELETED}
        //Handles delete requests to delete a ninja record from the table
    }

    //edit() and update() for edite view and update requests
    // we won't be using these routes

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Legume;
use Illuminate\Support\Facades\DB;

class LegumeController extends Controller
{
    public function index(){
        $legume = DB::table("legumes")
        ->orderBy("nom", "asc")
        ->get();
        return view("pages.legume", compact("legume"));
    }

    public function show($id)
    {
        $show = Legume::find($id);
        return view("pages.showLegumes", compact('show'));
    }

    public function update(Request $request, $id)
    {
        $update = Legume::find($id);
        $update->nom = $request->nom;
        $update->quantity = $request->quantity;

        $update->save();
        return redirect('/');
    }
}


<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FruitController extends Controller
{
    public function index(){
        $fruit = DB::table("fruits")
        ->orderBy("nom", "asc")
        ->get();

        return view("pages.fruit", compact("fruit"));
    }

    public function show($id)
    {
        $show = Fruit::find($id);
        return view("pages.showFruits", compact('show'));
    }

    public function update(Request $request, $id)
    {
        $update = Fruit::find($id);
        $update->nom = $request->nom;
        $update->quantity = $request->quantity;

        $update->save();
        return redirect('/');
    }
}

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
}

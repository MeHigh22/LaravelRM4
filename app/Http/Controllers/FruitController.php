<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    public function index(){
        $fruit = Fruit::all();
        return view("pages.fruit", compact("fruit"));
    }
}

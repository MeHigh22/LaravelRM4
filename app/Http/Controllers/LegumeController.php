<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Legume;


class LegumeController extends Controller
{
    public function index(){
        $legume = Legume::all();
        return view("pages.legume", compact("legume"));
    }
}

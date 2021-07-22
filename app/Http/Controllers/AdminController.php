<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function authentification(Request $request)
    {
        if (str_contains($request->mail, '@')) {
            return view('pages.back.admin');
        }
        return redirect()->back();
}
}

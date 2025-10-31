<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestFormController extends Controller
{
    public function create()
    {
        return view('info');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        return view('afficheInfo', compact('data'));
    }
}

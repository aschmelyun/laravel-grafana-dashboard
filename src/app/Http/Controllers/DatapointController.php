<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datapoint;

class DatapointController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'value' => 'required'
        ]);

        return Datapoint::create([
            'name' => $request->input('name'),
            'value' => $request->input('value'),
            'cast' => $request->input('cast')
        ]);
    }

}

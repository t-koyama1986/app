<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sample;


class SampleController extends Controller
{
    //
    public function add()
    {
        return view('sample');
    }

    public function create(Request $request)
    {
        $Sample = new Sample;
        $Sample->id = $request->id;
        $Sample->category = $request->category;
        $Sample->samplearticle = $request->samplearticle;
        $Sample->save();
        return redirect('/sample');
    }

    public function request()
    {
        $Sample = Sample::find(1);
        return view('admins', compact('Sample'));
    }

    
    
}






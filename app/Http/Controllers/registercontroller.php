<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\value;

class registercontroller extends Controller
{
    public function regfrm(){
        return view('register');
    }
    public function regval(Request $request){
        value::create($request->all());
        return redirect('login')->with('success', 'Login successful');

    }
}

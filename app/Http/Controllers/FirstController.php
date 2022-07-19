<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function sendContact(Request $request)
    {
        // $validated = $request->validate([
        //     'name'=>'required',
        //     'email'=>'required'
        // ]);

      echo $request->photo->extension();;
        
    }
}

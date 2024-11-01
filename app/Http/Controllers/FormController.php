<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{

    public function showForm()
    {
        return view('form');
    }


    public function submitForm(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'telephone' => 'required|digits:10',
        ]);
        
        Form::create($request->all());

        return back()->with('success', 'Form submitted successfully!');
    }
}


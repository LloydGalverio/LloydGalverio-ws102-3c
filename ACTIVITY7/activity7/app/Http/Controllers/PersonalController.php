<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function createInfo()
    {
        return view('personal-info');
    }
    public function storeInfo(Request $req)
    {   
        $req->validate([
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'sex' => 'required|in:Male,Female',
            'mobile_number' => 'required|regex:/^(09\d{2})-\d{3}-\d{3}$/',
            'telephone_number' => 'required|numeric',
            'birth_date' => 'required|date|date_format:Y-m-d',
            'email' => 'required|email|max:100',
            'website' => 'required|url',
        ]);
    
        // Redirect to 'info' with a success message
        return redirect()->route('info')->with('success', 'Form submitted successfully!');
    }
    
    
}


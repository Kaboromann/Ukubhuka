<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function show(string $id): View
    {
        
        die($id);
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('newform');
    }

    public function register(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'password_confirmation' => 'required|same:password',
            ]
        );
            echo "<pre>";
            print_r($request->all());
    }

}

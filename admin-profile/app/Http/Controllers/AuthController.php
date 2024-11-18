<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function tableData()
    {
        $data = profile::all();
        return view(
            "clients.table",
            compact("data")
        );
    }


    public function show()
    {
        $data = profile::get(); // get data from profile table
        return view('clients.home', compact('data'));
    }

    public function store(Request $request)
    {
        $profile = $request->email;
        profile::create([
            'email' => $profile,
            'password' => $request->password,
        ]);
        return redirect()->back();
    }
}

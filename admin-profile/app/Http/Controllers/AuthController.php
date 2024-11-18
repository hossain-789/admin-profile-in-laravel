<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;

class AuthController extends Controller
{



    // Table Blade
    public function tableData()
    {
        $data = profile::all();
        return view("clients.table", compact("data"));
    }
    // Table Blade


    // Home Blade
    public function show()
    {
        $data = profile::get(); // get data from profile table
        return view('clients.home', compact('data'));
    }
    // Home Blade


    public function store(Request $request)
    {
        $profile = $request->email;
        profile::create([
            'email' => $profile,
            'password' => $request->password,
        ]);
        return redirect('table');
    }






    public function printData()
    {
        $data = profile::all();
        return view('clients.print', compact('data'));
    }

    public function edit($id)
    {
        $data = profile::where('id', '=', $id)->first();
        return view('clients.edit', compact('data'));
    }




    public function delete($id)
    {
        profile::where('id', '=', $id)->delete();
        return redirect()->back();
    }



    public function update(Request $request, $id)
    {
        $data = profile::find($id);

        $data->update([
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect('print');
    }
}

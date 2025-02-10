<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view('clients.index');
    }

    public function create(){
        return view('clients.create');
    }

    public function store(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'birth_date' => 'required',
        ]);

        $client = new Client();
        $client->first_name = $request->first_name;
        $client->last_name = $request->last_name;
        $client->middle_name = $request->middle_name;
        $client->birth_date = $request->birth_date;
        $client->save();

        return redirect()->route('clients.index');
    }
}

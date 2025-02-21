<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Service\ClientService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::with('status')->get();

        // format birth_date to human readable
        foreach ($clients as $client) {
            $client->birth_date = date('F d, Y', strtotime($client->birth_date));
        }

        // return $clients;
        return view('clients.index',[
            'clients' => $clients
        ]);
    }

    public function create(){
        return view('clients.create');
    }

    public function store(Request $request, ClientService $clientService){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'birth_date' => 'required',
        ]);

        $response = $clientService->store($request);

        return redirect()->route('clients.index');
    }
}

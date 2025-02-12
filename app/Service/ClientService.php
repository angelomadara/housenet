<?php

namespace App\Service;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientService
{

    public function store($data){
        try {

            $client = new Client();
            $client->first_name = $data->first_name;
            $client->last_name = $data->last_name;
            $client->middle_name = $data->middle_name;
            $client->birth_date = $data->birth_date;
            $client->save();

            return response()->json(['message' => 'Client created successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }

    }
}

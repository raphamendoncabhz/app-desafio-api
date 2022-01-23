<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\LicensePlate;


class ClientController extends Controller
{

    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::with('licensePlates')->get();
        return response()->json($clients);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {
        $validated = $request->validated();
        return $this->client->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::with('licensePlates')->find($id);
        //$client = Client::find($id);

        if(!$client) {
            return response()->json([
                'message'   => 'Nenhum Registro encontrado',
            ], 404);
        }

        return response()->json($client);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request, $id)
    {

        $validated = $request->validated();

        $client = Client::findOrFail( $id );
        $client->name = $request->name;
        $client->cpf = $request->cpf;
        $client->phone = $request->phone;

        $client->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->licensePlates()->delete();
        $client->delete();
    }
    public function getBoardByEndNumber($id){

    }

}

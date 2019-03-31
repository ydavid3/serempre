<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\models\Clients;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ClientRequest;

class ClientController extends Controller
{

    /**
     * Consult all the clients
     */
    public function index()
    {
        $client = new Clients;
        return $client->allClients();
    }

    public function create()
    {
        abort(404);
    }

    /**
     * Register a client
     */
    public function store(ClientRequest $request)
    {
        DB::beginTransaction();
        
        $client = new Clients;
        $messageClient = $client->createClient($request);

        if ($messageClient["code"] == 200) {
            DB::commit();
        } else {
            DB::rollBack();
        }

        return response($messageClient, $messageClient["code"]);

    }

    /**
     * Consult info of a client
     */
    public function show($id)
    {
        $client = new Clients;

        $oneClient = $client->consultOneClient($id);

        $code = (isset($oneClient["code"])) ? $oneClient["code"] : 200;

        return response($oneClient, $code);
    }

    public function edit($id)
    {
        abort(404);
    }

    /**
     * Update info of a client
     */
    public function update(ClientRequest $request, $id)
    {
        DB::beginTransaction();

        $client = new Clients;
        $messageClient = $client->updateDataClient($request, $id);

        if ($messageClient["code"] == 200) {
            DB::commit();
        } else {
            DB::rollBack();
        }

        return response($messageClient, $messageClient["code"]);

    }

    /**
    * Delete a client 
    */
    public function destroy($id)
    {   
        DB::beginTransaction();

        $client = new Clients;
        $messageClient = $client->deleteOneClient($id);

        if ($messageClient["code"] == 200) {
            DB::commit();
        } else {
            DB::rollBack();
        }

        return response($messageClient, $messageClient["code"]);
    }
}

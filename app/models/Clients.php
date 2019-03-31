<?php

namespace App\models;

use App\models\Municipalities;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table = "sr_client";

    /**
     * Consult all the clients actives
     */
    public function allClients()
    {
        $clients = Clients::where("state", false)->get();
        $info = array();

        foreach ($clients as $client) {

            $client["municipality_and_department"] = $client->municipalityTable->name . ' - ' . ucwords(strtolower($client->municipalityTable->departmentTable->name));
            unset($client->municipalityTable);
        }
 
        return response()->json($clients);

    }

    /**
     * Register a new client
     */
    public function createClient($request)
    {
        try {
            $client = new Clients;

            $client->cod = $request->cod;
            $client->name = $request->name;
            $client->municipality = $request->municipality;
            $client->save();

            return [
                "ok" => true,
                "message" => "success",
                "code" => 200,
            ];

        } catch (Exception $e) {
            return [
                "ok" => false,
                "message" => "error: " . $e,
                "code" => 400,
            ];
        }
    }

    /**
     * Consult info of a client active
     */
    public function consultOneClient($client_id)
    {
        try {

            $client = new Clients;

            $dataClient = $client->find($client_id);

            if (empty($dataClient)) {
                return [
                    "ok" => false,
                    "message" => "Client not exits",
                    "code" => 400,
                ];
            }

            if ($dataClient->state) {
                return [
                    "ok" => true,
                    "message" => "the user is already deleted",
                    "code" => 200,
                ];
            }

            /**
             * get municipality
             */
            $dataClient["department"] = $dataClient->municipalityTable->department;
            $dataClient["municipality_and_department"] = $dataClient->municipalityTable->name . '-' . ucwords(strtolower($dataClient->municipalityTable->departmentTable->name));

            /**
             * Empty object
             */
            unset($dataClient->municipalityTable);

            return $dataClient;

        } catch (Exception $e) {
            return [
                "ok" => false,
                "message" => "error: " . $e,
                "code" => 400,
            ];
        }

    }

    /**
     * Update info of a client
     */

    public function updateDataClient($request, $id)
    {

        try {

            /**
             * Validate if the client exists
             */
            $client = $this->consultOneClient($id);

            if (isset($client["code"])) {
                return $client;
            }
            $client = Clients::find($id);
            $client->cod = $request->cod;
            $client->name = $request->name;
            $client->municipality = $request->municipality;
            $client->save();

            return [
                "ok" => true,
                "message" => "success",
                "code" => 200,
            ];

        } catch (Exception $e) {
            return [
                "ok" => false,
                "message" => "error: " . $e,
                "code" => 400,
            ];
        }

    }

    /**
     * Delete a cliente - change state
     */
    public function deleteOneClient($id)
    {

        try {

            /**
             * Validate if the client exists
             */
            $client = $this->consultOneClient($id);

            if (isset($client["code"])) {
                return $client;
            }

            /**
             * get alone the object client
             */

            unset($client["municipality_and_department"]);
            $client = Clients::find($id);
            $client->state = true;
            $client->save();

            return [
                "ok" => true,
                "message" => "success",
                "code" => 200,
            ];

        } catch (Exception $e) {
            return [
                "ok" => false,
                "message" => "error: " . $e,
                "code" => 400,
            ];
        }

    }

    /**==============================================
     * Relations with other tables of the database
     *===============================================*/
    public function municipalityTable()
    {
        return $this->belongsTo(Municipalities::class, "municipality");
    }
}

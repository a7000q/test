<?php


namespace app\services;


use Datto\JsonRpc\Http\Client;
use Datto\JsonRpc\Responses\ErrorResponse;
use ErrorException;
use yii\web\NotFoundHttpException;

class UserService
{
    const URL_RPC_SERVER = "http://localhost:8000/api/v1/endpoint";

    private $client;

    public function __construct(){
        $this->client = new Client(self::URL_RPC_SERVER);
    }

    public function getInfoById($id){
        $this->client->query('balance@userBalance', ["user_id" => $id], $balance);
        $this->client->query('balance@history', ["limit" => 50], $history);
        $this->client->send();


        if ($balance instanceof ErrorResponse)
            throw new NotFoundHttpException('Not User');

        return [
            'balance' => $balance,
            'history' => $history
        ];
    }
}
<?php

namespace App\Integrations\IBGE;

class Cities
{
    public $api;

    public function __construct()
    {
        $this->api = new IbgeGateway();
    }

    public function get($id){
        $list = [];
        $cities = $this->api->get('/estados/'.$id.'/municipios');
        foreach ($cities as $city){
            array_push($list, $city['nome']);
        }
        return $list;
    }
}

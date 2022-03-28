<?php

namespace App\Integrations\IBGE;

class States
{
    public $api;

    public function __construct()
    {
        $this->api = new IbgeGateway();
    }

    public function get(){
        $list = [];
        $states = $this->api->get('/estados?orderBy=nome');
        foreach ($states as $state){
            array_push($list, ['name' => $state['nome'], 'code' => $state['id']]);
        }
        return $list;
    }
}

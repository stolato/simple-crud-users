<?php

namespace App\Integrations\IBGE;

use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpKernel\Exception\HttpException;

class IbgeGateway
{
    public string $base_uri = 'https://servicodados.ibge.gov.br/api/v1/localidades';

    public function get($endpoint){
        try{
            return Http::get($this->base_uri . '' . $endpoint)->throw()->json();
        } catch (RequestException $e) {
            throw new HttpException($e->getCode(), $e->response->body());
        }

    }

}

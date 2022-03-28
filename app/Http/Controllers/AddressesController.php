<?php

namespace App\Http\Controllers;

use App\Integrations\IBGE\Cities;
use App\Integrations\IBGE\States;

class AddressesController extends Controller
{
    public function states(): array
    {
        $api = new States();
        return $api->get();
    }

    public function cities($id): array
    {
        $api = new Cities();
        return $api->get($id);
    }
}

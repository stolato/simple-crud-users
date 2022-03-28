<?php

namespace App\Actions\Cruds;


use App\Actions\Rules\UserRules;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class StoreUser
{
    public static function execute($payload)
    {
        $validator = Validator::make($payload, UserRules::StoreRules());
        if ($validator->fails()) {
            return response()->json($validator->getMessageBag(), 403);
        }

        return User::create($validator->validated());
    }
}

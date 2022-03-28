<?php

namespace App\Actions\Cruds;

use App\Actions\Rules\UserRules;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UpdateUser
{
    public static function execute($payload, $id){
        $user = User::findOrFail($id);
        $validator = Validator::make($payload, UserRules::UpdateRules());
        if ($validator->fails()) {
            return response()->json($validator->getMessageBag(), 403);
        }
        $user->fill($validator->validated());
        $user->save();
        return $user;
    }
}

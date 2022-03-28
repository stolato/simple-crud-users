<?php

namespace App\Http\Controllers;


use App\Actions\Cruds\StoreUser;
use App\Actions\Cruds\UpdateUser;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return User::simplePaginate(20);
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function store(Request $request)
    {
        return StoreUser::execute($request->all());
    }

    public function update(Request $request, $id)
    {
        return UpdateUser::execute($request->all(), $id);
    }

    public function destroy($id){

    }
}

<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Users\UserStoreRequest;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return ['name' => 'Users'];
        return User::all();
    }

    public function store(UserStoreRequest $request)
    {
        return User::create($request->validated());
    }

    public function deleteUser($id)
    {
        return User::findOrFail($id)->delete();
    }
}

echo 

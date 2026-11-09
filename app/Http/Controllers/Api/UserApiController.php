<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateUserNameRequest;
use App\Http\Requests\User\UpdateUserEmailRequest;
use App\Http\Requests\User\UpdateUserPasswordRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function show(Request $request){
        return response()->json([
            'user' => $request->user()
        ]);
    }

    public function updateName(UpdateUserNameRequest $request) {

        $user = $request->user();

        $user->update($request->validated());

        return response()->json($user);
    }

    public function updateEmail(UpdateUserEmailRequest $request) {

        $user = $request->user();

        $validation = $request->validated();

        $user->update([
            'email' =>  $request->$validation['email'],
        ]);

        return response()->json($user);
    }


    public function updatePassword(UpdateUserPasswordRequest $request){

        $user = $request->user();
        $validation = $request->validated();

        $user->update([
            'password' => Hash::make($validation['new_password']),
        ]);

        return response()->json("Пароль успешно изменен");
    }
}

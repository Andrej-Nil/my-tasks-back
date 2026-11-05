<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateUserNameRequest;
use App\Http\Requests\User\UpdateUserEmailRequest;
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
        abort(422);

        $user = $request->user();


        if (!Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Неверный пароль пароль',
            ], 422);
        }

        $user->update([
            'email' =>  $request->email,
        ]);

        return response()->json($user);
    }
}
